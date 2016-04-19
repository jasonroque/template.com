<?php

class News_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_news($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('test_table');
            return $query->result_array();
        }

        $query = $this->db->get_where('test_table', array('slug' => $slug));
        return $query->row_array();
    }

    public function get_recent_two() {
        $this->db->from('test_table');
        $this->db->order_by("date_published", "desc");
        $this->db->limit('2');

        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_next_recent_three() {
        $this->db->from('test_table');
        $this->db->order_by("date_published", "desc");
        $this->db->limit('5');
        
        $query = $this->db->get();
        
        return array_slice($query->result_array(), 2, 3, true);
    }

    public function set_news() {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'slug' => $slug,
            'img' => $this->input->post('img'),
            'paragraph' => $this->input->post('text'),
            'category' => $this->input->post('category'),
        );

        return $this->db->insert('test_table', $data);
    }

}
