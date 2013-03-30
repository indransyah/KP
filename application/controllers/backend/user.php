<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['title'] = 'View Users';
        $data['order'] = 'Payment';
        $this->template->backend('view_user', $data);
    }

}