<?php

class Services extends MY_Controller {

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
        $data['subtitle'] = 'All Services';
        
        $data['service_nav'] = $this->view_data;
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

        $data['view_data'] = $this->view_data;
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
    
    //file upload function
    public function upload() {
        $data['view_data'] = $this->view_data;
        $data['title'] = 'Uploader';
        
        $data['services'] = $this->Services_Model->all();
        
        $this->load->helper(array('form', 'url'));
        
        $this->breadcrumbs->push($data['title'], '/services/upload');
        $data['breadcrumbs'] = $this->breadcrumbs->show();
        
        //set preferences
        $config['upload_path'] = './assets/images/featured';
        $config['allowed_types'] = 'jpg|gif|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        //load upload class library
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());

            $this->load->view('templates/header', $data);
            $this->load->view('templates/page-header', $data);
            $this->load->view('/services/upload', $upload_error);
            $this->load->view('templates/contact-us', $data);
            $this->load->view('templates/footer');
        } else {
            // case - success
            $upload_data = $this->upload->data();
            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/page-header', $data);
            $this->load->view('/services/upload', $data);
            $this->load->view('templates/contact-us', $data);
            $this->load->view('templates/footer');
        }
    }
}
