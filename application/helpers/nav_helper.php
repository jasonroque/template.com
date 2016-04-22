<?php

function load_navigation() {
    $CI =& get_instance();
    $CI->load->model('Services_Model');
    $result['services_nav'] = $CI->Services_Model->all();
    return $result;
}