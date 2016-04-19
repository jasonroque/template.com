<?php

class Pages extends CI_Controller {

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('Carousel_Model');
        $this->load->model('News_Model');
    }
    
    public function view($page = 'home') {
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['pageTitle'] = 'Welcome to CodeIgniter!';
        
        $data['carousel'] = $this->Carousel_Model->all();
        $data['featured_news'] = $this->News_Model->get_recent_two();                
        $data['other_news'] = $this->News_Model->get_next_recent_three();
        
        if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
            show_404();
        }        

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/contact-us', $data);
        $this->load->view('templates/footer', $data);
    }

}
