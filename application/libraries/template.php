<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Template {

    var $CI;

    public function __construct() {
        $this->CI = & get_instance();
    }

    public function backend($content, $data = null) {
        $data['content'] = $this->CI->load->view('backend/'.$content, $data, true);
        $data['header'] = $this->CI->load->view('backend/header', $data, true);
        $data['sidebar'] = $this->CI->load->view('backend/sidebar', $data, true);
        $this->CI->load->view('backend/index.php', $data);
    }

}