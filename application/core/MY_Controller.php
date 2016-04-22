<?php

class MY_Controller extends CI_Controller {
    protected $view_data;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('nav_helper');
        $this->view_data = load_navigation();
    }
}