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

    public function get_news_by_category($category = FALSE) {
        if ($category === FALSE) {
            $query = $this->db->get('test_table');
            return $query->result_array();
        }
        
        $this->db->from('test_table');
        $where = "category LIKE '%" . str_replace('-', ' ', $category) . "%'";
        $this->db->where($where);
        
        $query = $this->db->get();
        
        return $query->result_array();
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
    
    public function get_recent_similar($category) {
        $this->db->from('test_table');
        
        $exploded = explode('|', $category);
        $where = "category LIKE '%" . $exploded[0] . "%' ";
        
        foreach($exploded as $next) {
            $where .= "OR category LIKE '%" . $next . "%' ";
        }
        
        $this->db->where($where);
        $this->db->order_by("date_published", "desc");
        $this->db->limit('4');
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_categories() {
        $this->db->select('category');
        $this->db->from('test_table');
        
        $query = $this->db->get();
        $result = array();
        
        foreach($query->result_array() as $category) {
            $exploded = explode('|', $category['category']);
            foreach($exploded as $next) {
                array_push($result, $next);
            }
        }
        
        return array_unique($result);
    }    
}
