<?php

class News extends CI_Controller {

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->helper('url_helper');
        
        $this->load->library('breadcrumbs');
        $this->breadcrumbs->push('News Article', '/news');
        $this->breadcrumbs->unshift("<a href='/'><i class='fa fa-home'></i></a>", '/pages/home');
    }

    public function index() {
        $data['featured_news'] = $this->News_model->get_news();
        $data['title'] = 'News Archive';
        
        $data['breadcrumbs'] = $this->breadcrumbs->show();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/page-header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL) {
        $data['featured'] = $this->News_model->get_news($slug);
        $data['similar'] = $this->News_model->get_recent_similar($data['featured']['category']);
        $data['category_list'] = $this->News_model->get_categories();

        if (empty($data['featured'])) {
            show_404();
        }

        $data['title'] = 'News Archive';
        $data['subtitle'] = 'A Few Words From Our Creator';
        
        $this->breadcrumbs->push($data['featured']['title'], '/news/view');
        $data['breadcrumbs'] = $this->breadcrumbs->show();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/page-header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Paragraph', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        } else {
            $this->News_model->set_news();
            $this->load->view('templates/header', $data);
            $this->load->view('news/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function category($category = NULL) {
        $data['featured_news'] = $this->News_model->get_news_by_category($category);
        $data['title'] = 'News Archive';
        $data['subtitle'] = str_replace('-', ' ', ucwords($category));
        
        $data['breadcrumbs'] = $this->breadcrumbs->show();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/page-header', $data);
        $this->load->view('news/category', $data);
        $this->load->view('templates/footer');
    }

}
