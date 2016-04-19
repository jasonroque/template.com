<?php

class Carousel_Model extends CI_Model {
    var $data = array(
        array(
            'id' => 0,
            'img' => 'slider1.jpg',
            'caption' => 'Welcome! This is Lorem Ipsum',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra.
                              Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
            'sub_caption' => 'Lorem ipsum dolor sit amet',
            'link1Name' => 'Our Services',
            'link1' => 'link1',
            'link2Name' => 'More Info',
            'link2' => 'moreInfo',
        ),
        array(
            'id' => 1,
            'img' => 'slider2.jpg',
            'caption' => 'Welcome Home! View Products',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra.
                              Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
            'sub_caption' => 'Lorem ipsum dolor sit amet',
            'link1Name' => 'View Products',
            'link1' => 'link1',
            'link2Name' => 'More Info',
            'link2' => 'moreInfo',
        ),
        array(
            'id' => 2,
            'img' => 'slider3.jpg',
            'caption' => 'Hungry Eat these Posts',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra.
                              Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
            'sub_caption' => 'Lorem ipsum dolor sit amet',
            'link1Name' => 'View Posts',
            'link1' => 'link1',
            'link2Name' => 'More Info',
            'link2' => 'moreInfo',
        ),
        array(
            'id' => 3,
            'img' => 'slider4.jpg',
            'caption' => 'Who You Going to Call?',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra.
                              Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
            'sub_caption' => 'Lorem ipsum dolor sit amet',
            'link1Name' => 'Contact Us',
            'link1' => 'link1',
            'link2Name' => 'More Info',
            'link2' => 'moreInfo',
        ),
    );
    
    public function all() {
        return $this->data;
    }
}