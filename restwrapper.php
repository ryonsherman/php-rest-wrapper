<?php

class RESTWrapper {
    private $url;
    private $username;
    private $password;

    public function __construct($url, $definition, $params = array()) {
        // Assign base url
        $this->url = rtrim($url, '/');

        // Convert defintion to array if JSON passed
        if (!is_array($definition))
            // Attempt to decode string as definition
            if (!$def = @json_decode($definition, true))
                // Attempt to decode definition file path
                $def = @json_decode(file_get_contents($definition), true);
            $definition = $def;

        // Fail if unable to load
        if (!$definition) exit($this->error("Failed to load definition"));

        // Assign credeitnals
        $this->username = @$params['username'];
        $this->password = @$params['password'];

        // Create resource accessors
        foreach ($definition as $res => $def)
            $this->{$res} = new RESTResource($this, $res, $def);
    }

    public function request($resource, $method = 'GET', $data = null) {
        // Build request
        $ch = curl_init(rtrim($this->url, '/').'/'.ltrim($resource, '/'));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

        // Set credentials if provided
        if ($this->username and $this->password) {
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_USERPWD, "{$this->username}:{$this->password}");
        }

        // Set POST data if passed
        if ($data and $data = json_encode($data)) curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        // Execute request
        # $data = curl_exec($ch);
        # $info = curl_getinfo($ch);

        # TODO
        $debug = array('method' => $method, 'resource' => $resource);
        if ($data) $debug['data'] = $data;        
        echo '<pre>'.print_r($debug, true).'</pre>';
        # END TODO

        // Close request
        curl_close($ch);
    }

    public function error($msg) {
        $debug = debug_backtrace();
        trigger_error("{$msg} at {$debug[1]['file']}:{$debug[1]['line']}", E_USER_ERROR);
        return false;
    }
}

class RESTResource {
    public function __construct($parent, $resource, $definition) {
        $this->parent = $parent;
        $this->resource = $resource;
        $this->definition = $definition;
    }

    public function __call($name, $arguments) {
        // Initialize data array
        $data = array();

        // Get function name
        $function = "{$this->resource}::{$name}";

        // Fail if unable to retrieve method defintion
        if (!$def = @$this->definition[$name])
            return $this->error("Call to undefined method {$function}()");

        // Assign valid methods
        $methods = array('GET', 'PUT', 'POST', 'DELETE');
        // Fail if unable to retrieve request method from defintion or method is invalid
        if (!$method = strtoupper($def[0]) or !in_array($method, $methods))
            return $this->parent->error("Invalid HTTP method '{$method}' in {$function}()");

        // Fail if unable to retrieve resource URI from defintion
        if (!$resource = $def[1])
            return $this->parent->error("Failed to load resource in {$function}()");

        // Initialize args if no additional were defined
        if (!$args = @$def[2]) $args = array();

        // Convert to array if single arg passed
        if ( ! is_array($args)) $args = array($args);

        // Parse args from URI tags
        preg_match_all('/{([^}]*)}/', $resource, $_args);
        // Prepend parsed args
        $args = array_merge(@$_args[1] ?: array(), $args);       

        // Get function args
        $_args = array();
        foreach ($args as $arg) $_args[] = explode(':', $arg)[0];
        $_args = implode(', ', $_args);

        // Iterate list of args
        foreach ($args as $index => $arg) {
            // Initialize data
            $data = null;

            // Get meta-arguments
            $meta = explode(':', $arg);

            // tag={value} required
            if (count($meta) == 1) $opt = false;
            // tag={value:!} required
            // tag={value:!:opt1,opt2} required with options
            else if ($meta[1] == '!') $opt = false;
            // tag={value:} optional
            // tag={value:default} default
            // tag={value::opt1,opt2} optional with options
            // tag={value:default:opt1,opt2} options and default
            else $opt = $meta[1]; 

            // Check if a value was passed
            if (!$value = @$arguments[$index]) {
                // Fail if no value was passed and argument is required
                if ($opt === false and $index += 1)
                    return $this->parent->error("Missing argument {$index} for " .
                        "{$function}({$_args})");
                // Use default value
                else $value = $opt;
            }

            // Determine argument requirements if passed
            if (@$meta[2]) $reqs = explode(',', $meta[2]);
            else $reqs = false;

            // Fail if invalid argument option was passed
            if ($value and $reqs and !in_array($value, $reqs) and $index += 1)
                return $this->parent->error("Invalid argument option {$index} for " .
                    "{$function}({$_args})");

            // Replace argument tag with value
            if (strstr($resource, "{{$arg}}"))
                $resource = str_replace("{{$arg}}", $value, $resource);
            // Assign data value
            else $data = $value;
        }

        // Perform request
        return $this->parent->request($resource, $method, $data);
    }
}

?>
