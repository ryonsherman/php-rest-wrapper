<?php

/**
 * @author Ryon Sherman <ryon.sherman@gmail.com>
 * @license http:#opensource.org/licenses/MIT MIT
 * @copyright 2014 Ryon Sherman
 * @link https:#github.com/ryonsherman/php-rest-wrapper
 */

/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Ryon Sherman
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

class RESTWrapper {
    private $url;
    private $username;
    private $password;

    public function __construct($url, $definition, $params = array()) {
        # Set log file if provided
        $this->logfile = @$params['log'] ?: false;

        # Assign base url
        $this->url = rtrim($url, '/');

        # Convert defintion to array if JSON passed
        if (!is_array($definition))
            # Attempt to decode string as definition
            if (!$def = @json_decode($definition, true))
                # Attempt to decode definition file path
                $def = @json_decode(file_get_contents($definition), true);
            $definition = $def;

        # Fail if unable to load
        if (!$definition) return $this->error("Failed to load definition");

        # Assign credeitnals
        $this->username = @$params['username'];
        $this->password = @$params['password'];

        # Initialize global replacement vars
        $replacements = array();
        # Retrieve global replacement vars from definition
        foreach ($definition as $index => $def)
            if (!is_array($def)) $replacements[$index] = $def;

        # Search for replacement values
        foreach ($definition as $res => $def) {
            # Continue if not sub-definition
            if (!is_array($def) or @$def[0]) continue;
            # Iterate globals
            foreach (array_keys($replacements) as $tag)
                # Append replacement if tag doesnt exist in child def
                if (!in_array($tag, array_keys($def)))
                    $def[$tag] = $replacements[$tag];
                # Apply replacements to child replacement values
                else foreach($replacements as $_tag => $value)
                    $def[$tag] = str_replace("{{$_tag}}", $value, $def[$tag]);
            # Create resource accessor
            $this->{$res} = new RESTResource($this, $res, $def);
        }
    }

    public function request($resource, $method = 'GET', $data = null) {
        # Determine url
        $url = rtrim($this->url, '/') . '/' . ltrim($resource, '/');
        # Set headers
        $headers = array(
            "User-Agent: php-rest-wrapper",
            "Content-Type: application/json"
        );
        # Set credentials
        $credentials = "{$this->username}:{$this->password}";

        # Build request
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

        # Set credentials if provided
        if ($this->username) {
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_USERPWD, $credentials);
        }

        # Set POST data if passed
        if ($data and $data = json_encode($data)) curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        # Build curl command for log output
        $command = "curl";
        if ($this->username) $command .= " -u '{$credentials}'";
        foreach ($headers as $header) $command .= " -H '{$header}'";
        $command .= " -X '{$method}'";
        if ($data) $command .= " -d '{$data}'";
        $command .= " '{$url}'";
        # Log curl command
        $this->log($command);

        # Execute request
        $data = curl_exec($ch);
        $info = curl_getinfo($ch);

        # Fail on connection error
        if (curl_errno($ch) and $error = curl_error($ch)) {
            curl_close($ch);
            return $this->error("Failed to connect ({$error})");
        }

        # Close request
        curl_close($ch);

        # Return http code if no data was decoded
        return ($data = @json_decode($data)) ? $data : $info['http_code'];
    }

    public function log($msg) {
        if ($this->logfile) file_put_contents($this->logfile, $msg, FILE_APPEND);
    }

    public function error($msg) {
        $debug = debug_backtrace();
        $msg = "{$msg} at {$debug[1]['file']}:{$debug[1]['line']}";
        trigger_error($msg, E_USER_ERROR);
        $this->log($msg);
        return false;
    }
}

class RESTResource {
    public function __construct($parent, $resource, $definition) {
        $this->parent = $parent;
        $this->resource = $resource;
        $this->definition = $definition;

        # Initialize replacement vars
        $replacements = array();
        # Retrieve replacement vars from definition
        foreach ($definition as $index => $def)
            if (!is_array($def)) $replacements[$index] = $def;
        $this->replacements = $replacements;

        # Search for replacement values
        foreach ($definition as $res => $def) {
            # Continue if not sub-definition
            if (!is_array($def) or @$def[0]) continue;
            # Iterate globals
            foreach (array_keys($replacements) as $tag)
                # Append replacement if tag doesnt exist in child
                if (!in_array($tag, array_keys($def)))
                    $def[$tag] = $replacements[$tag];
                # Apply replacements to child replacement values
                else foreach($replacements as $_tag => $value)
                    $def[$tag] = str_replace("{{$_tag}}", $value, $def[$tag]);
            # Create resource accessor
            $this->{$res} = new RESTResource($this, $res, $def);
        }
    }

    public function __call($name, $arguments) {
        # Initialize data array
        $data = array();

        # Get function name
        # TODO: Append parent resource name to preserve inheritance
        $function = "{$this->resource}::{$name}";

        # Fail if unable to retrieve method defintion
        if (!$def = @$this->definition[$name] or !is_array($def) or count($def) < 2 or !@$def[0])
            return $this->error("Call to undefined method {$function}()");

        # Assign valid methods
        $methods = array('GET', 'PUT', 'POST', 'DELETE');
        # Fail if unable to retrieve request method from defintion or method is invalid
        if (!$method = strtoupper($def[0]) or !in_array($method, $methods))
            return $this->parent->error("Invalid HTTP method '{$method}' in {$function}()");

        # Fail if unable to retrieve resource URI from defintion
        if (!$resource = $def[1])
            return $this->parent->error("Failed to load resource in {$function}()");

        # Replace tags in resource string with var value
        foreach ($this->replacements as $tag => $value)
            $resource = str_replace("{{$tag}}", $value, $resource);

        # Initialize args if no additional were defined
        if (!$args = @$def[2]) $args = array();

        # Convert to array if single arg passed
        if ( ! is_array($args)) $args = array($args);

        # Parse args from URI tags
        preg_match_all('/{([^}]*)}/', $resource, $_args);
        # Prepend parsed args
        $args = array_merge(@$_args[1] ?: array(), $args);

        # Get function args
        $_args = array();
        foreach ($args as $arg) {
            $_arg = explode(':', $arg);
            $_args[] = $_arg[0];
        }
        $_args = implode(', ', $_args);

        # Iterate list of args
        foreach ($args as $index => $arg) {
            # Initialize data
            $data = null;

            # Get meta-arguments
            $meta = explode(':', $arg);

            # tag={value} required
            if (count($meta) == 1) $opt = false;
            # tag={value:!} required
            # tag={value:!:opt1,opt2} required with options
            else if ($meta[1] == '!') $opt = false;
            # tag={value:} optional
            # tag={value:default} default
            # tag={value::opt1,opt2} optional with options
            # tag={value:default:opt1,opt2} options and default
            else $opt = $meta[1];

            # Check if a value was passed
            if (!$value = @$arguments[$index]) {
                # Fail if no value was passed and argument is required
                if ($opt === false and $index += 1)
                    return $this->parent->error("Missing argument {$index} for " .
                        "{$function}({$_args})");
                # Use default value
                else $value = $opt;
            }

            # Determine argument requirements if passed
            if (@$meta[2]) $reqs = explode(',', $meta[2]);
            else $reqs = false;

            # Fail if invalid argument option was passed
            if ($value and $reqs and !in_array($value, $reqs) and $index += 1)
                return $this->parent->error("Invalid argument option {$index} for " .
                    "{$function}({$_args})");

            # Replace argument tag with value
            if (strstr($resource, "{{$arg}}"))
                $resource = str_replace("{{$arg}}", $value, $resource);
            # Assign data value
            else $data = $value;
        }

        # Perform request
        return $this->parent->request($resource, $method, $data);
    }
}

?>
