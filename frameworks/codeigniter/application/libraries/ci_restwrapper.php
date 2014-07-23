<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author Ryon Sherman <ryon.sherman@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @copyright 2014 Ryon Sherman
 * @link https://github.com/ryonsherman/php-rest-wrapper
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

require_once(APPPATH . 'libraries/restwrapper.php');

class CI_RESTWrapper
{
    private $CI;

    public function __construct($params = array())
    {
        // Get CI instance
        $this->CI =& get_instance($params);

        // Get class name
        $class = strtolower(get_class($this));

        // Attempt to load params from config if not passed
        if ($config = $this->CI->config->load($class, TRUE, TRUE))
        {
            if ( ! @$params['url'])
                $params['url'] = $this->CI->config->item('url', $class);
            if ( ! @$params['key'])
                $params['key'] = $this->CI->config->item('key', $class);
            if ( ! $params['key']) {
                if ( ! @$params['username'])
                    $params['username'] = $this->CI->config->item('username', $class);
                if ( ! @$params['password'])
                    $params['password'] = $this->CI->config->item('password', $class);
            }
        }

        // API key takes precedence over username/password
        if (@$params['key'])
        {
            $params['username'] = $params['key'];
            $params['password'] = '';
        }

        // Initialize REST client
        $client = new RESTWrapper(@$params['url'], APPPATH . "libraries/{$class}.json", $params);

        // Assign client resources for local access
        foreach (array_keys(get_object_vars($client)) as $res)
        {
            $this->{$res} = $client->{$res};
        }
    }
}

/* End of file ci_restwrapper.php */
/* Location: ./application/libraries/ci_restwrapper.php */
