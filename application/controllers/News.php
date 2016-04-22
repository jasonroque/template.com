<?php

class News extends MY_Controller {

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
        $data['service_nav'] = $this->view_data;

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
        $data['service_nav'] = $this->view_data;

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
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $data['category_list'] = $this->News_model->get_categories();
        $data['service_nav'] = $this->view_data;

        $data['title'] = ucwords('Create a news item');

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Paragraph', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        $this->breadcrumbs->push($data['title'], '/news/view/');
        $data['breadcrumbs'] = $this->breadcrumbs->show();

        //set preferences
        $config['upload_path'] = './assets/images/featured';
        $config['allowed_types'] = 'jpg|gif|png';
        $config['max_size'] = '1024';
        $config['max_width'] = '1920';
        $config['max_height'] = '1080';

        //load upload class library
        $this->load->library('upload', $config);


        if ($this->form_validation->run() === FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/page-header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        } else {
            if (!$this->upload->do_upload('filename')) {
                // case - failure
                $upload_error = array('error' => $this->upload->display_errors());

                $this->load->view('templates/header', $data);
                $this->load->view('templates/page-header', $data);
                $this->load->view('/news/create', $upload_error);
                $this->load->view('templates/contact-us', $data);
                $this->load->view('templates/footer');
            } else {
                // case - success
                $upload_data = $this->upload->data();
                $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';

                $this->News_model->set_news();
                $this->load->view('templates/header', $data);
                $this->load->view('templates/page-header', $data);
                $this->load->view('news/success');
                $this->load->view('templates/footer');
            }
        }
    }

    public function category($category = NULL) {
        $data['featured_news'] = $this->News_model->get_news_by_category($category);
        $data['title'] = 'News Archive';
        $data['subtitle'] = str_replace('-', ' ', ucwords($category));
        $data['service_nav'] = $this->view_data;

        $data['breadcrumbs'] = $this->breadcrumbs->show();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/page-header', $data);
        $this->load->view('news/category', $data);
        $this->load->view('templates/footer');
    }

}
