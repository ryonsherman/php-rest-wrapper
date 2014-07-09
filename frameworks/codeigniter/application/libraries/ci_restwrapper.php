<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
            if ( ! @$params['api'])
                $params['api'] = $this->CI->config->item('api', $class);
            if ( ! $params['api']) {
                if ( ! @$params['username'])
                    $params['username'] = $this->CI->config->item('username', $class);
                if ( ! @$params['password'])
                    $params['password'] = $this->CI->config->item('password', $class);
            }
        }

        // API key takes precedence over username/password
        if (@$params['api']) {
            $params['username'] = $params['api'];
            $params['password'] = '';
        }
        
        // Initialize REST client
        $client = new RESTWrapper('/', APPPATH . "libraries/{$class}.json", $params);

        // Assign client resources for local access
        foreach (array_keys(get_object_vars($client)) as $res)
        {
            $this->{$res} = $client->{$res};
        }
    }
}

/* End of file ci_restwrapper.php */
/* Location: ./application/libraries/ci_restwrapper.php */
