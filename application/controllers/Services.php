<?php

class Services extends CI_Controller {

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Services_Model');
        $this->load->helper('url_helper');

        $this->load->library('breadcrumbs');
        $this->breadcrumbs->push('Services', '/services');
        $this->breadcrumbs->unshift("<a href='/'><i class='fa fa-home'></i></a>", '/pages/home');
    }

    public function index() {
        $data['services'] = $this->Services_Model->all();
        $data['title'] = 'Services';
        
        $data['breadcrumbs'] = $this->breadcrumbs->show();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/page-header', $data);
        $this->load->view('templates/services-nav', $data);
        $this->load->view('services/index', $data);
        $this->load->view('templates/contact-us', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($slug = NULL) {
        $data['services'] = $this->Services_Model->all();
        $data['one_service'] = $this->Services_Model->get($slug);

        if (empty($data['services'])) {
            show_404();
        }

        $data['title'] = 'Services';
        $data['subtitle'] = $data['one_service']['title'];
        
        $this->breadcrumbs->push($data['one_service']['title'], '/services/view');
        $data['breadcrumbs'] = $this->breadcrumbs->show();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/page-header', $data);
        $this->load->view('templates/services-nav', $data);
        $this->load->view('services/view', $data);
        $this->load->view('templates/contact-us', $data);
        $this->load->view('templates/footer');
    }
}
