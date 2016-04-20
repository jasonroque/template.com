<?php

class Services_Model extends CI_Model {

    var $data = array(
        array(
            'id' => 0,
            'title' => 'Service 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo. ',
            'content' => array(
                array(
                    'subject' => 'Lorem ipsum dolor sit 1a',
                    'body' => 'Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
                    'img' => '',
                ),
                array(
                    'subject' => 'Lorem ipsum dolor sit 1b',
                    'body' => 'Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
                    'img' => '',
                ),
            ),
            'slug' => 'service-1'
        ),
        array(
            'id' => 1,
            'title' => 'Service 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo. ',
            'content' => array(
                array(
                    'subject' => 'Lorem ipsum dolor sit 2a',
                    'body' => 'Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
                    'img' => '',
                ),
                array(
                    'subject' => 'Lorem ipsum dolor sit 2b',
                    'body' => 'Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
                    'img' => '',
                ),
            ),
            'slug' => 'service-2'
        ),
        array(
            'id' => 2,
            'title' => 'Service 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo. ',
            'content' => array(
                array(
                    'subject' => 'Lorem ipsum dolor sit 3a',
                    'body' => 'Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
                    'img' => '',
                ),
                array(
                    'subject' => 'Lorem ipsum dolor sit 3b',
                    'body' => 'Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
                    'img' => '',
                ),
            ),
            'slug' => 'service-3'
        ),
    );

    public function all() {
        return $this->data;
    }

    public function get($which) {
        foreach($this->data as $service) {
            if($service['slug'] === $which) {return $service;}
        }
        return null;
    }

}
