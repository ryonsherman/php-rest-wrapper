<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller {

    // Pass params or define in config/example.php
    $params = array(
        'url' => 'http://api.example.com',
        'username' => 'user',
        'password' => 'pass'
    );

    // Load library
    $this->load->library('example', $params);

    // Access resource
    $this->example->Resource->method();
}

/* End of file example.php */
/* Location: ./application/controllers/example.php */
