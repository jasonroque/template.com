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

        $this->load->library('breadcrumbs');
        $this->breadcrumbs->unshift("<a href='/'><i class='fa fa-home'></i></a>", '/pages/home');
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

        $this->breadcrumbs->push(ucfirst($page), '/' . $page . '/');

        $data['breadcrumbs'] = $this->breadcrumbs->show();

        $this->load->view('templates/header', $data);
        if ($page !== 'home') {
            $this->load->view('templates/page-header', $data);
        }
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/contact-us', $data);
        $this->load->view('templates/footer', $data);
    }

}
