<?php

class News_Model extends CI_Model {

    var $data = array (
      array(
          'id' => 0,
          'title' => 'This is the First Ever News Article!',
          'author' => 'OG-Author',
          'slug' => '',
          'img' => 'featured-1.jpg',
          'paragraphs' => array(
              'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
              '',
              '',
          ),
          'category' => array( '', '', ),
          'date_published' => '01-01-1800',
      ),  
      array(
          'id' => 1,
          'title' => 'This is Second Most',
          'author' => 'OG-Author',
          'slug' => '',
          'img' => 'featured-2.jpg',
          'paragraphs' => array(
              'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
              '',
              '',
          ),
          'category' => array( '', '', ),
          'date_published' => '01-01-2000',
      ),  
      array(
          'id' => 2,
          'title' => 'Lorem ipsum dolor sit amet',
          'author' => 'OG-Author',
          'slug' => '',
          'img' => '',
          'paragraphs' => array(
              'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
              '',
              '',
          ),
          'category' => array( '', '', ),
          'date_published' => '01-01-1990',
      ),  
      array(
          'id' => 3,
          'title' => 'Lorem ipsum dolor sit amet',
          'author' => 'OG-Author',
          'slug' => '',
          'img' => '',
          'paragraphs' => array(
              'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
              '',
              '',
          ),
          'category' => array( '', '', ),
          'date_published' => '01-01-1993',
      ),  
      array(
          'id' => 4,
          'title' => 'This is the Latest Posts!',
          'author' => 'OG-Author',
          'slug' => '',
          'img' => '',
          'paragraphs' => array(
              'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.',
              '',
              '',
          ),
          'category' => array( '', '', ),
          'date_published' => '01-01-2016',
      ),  
    );

    public function all() {
        return $this->data;
    }
    
    public function getRecentTwo() {
        $recent_two = array_slice($this->data, 0, 2, true);
        
        $most_recent = $recent_two[0];
        $second_recent = $recent_two[1];        
        
        foreach($this->data as $date) {
            $dateFormat = strtotime($date['date_published']);
            
            if($dateFormat > $most_recent['date_published']) {
                $second_recent = $most_recent;
                $recent_two[0] = $date;
            }
        }
        
        return $recent_two;
    }
    
    public function orderByDate() {  
//        return array_slice($this->data, 2 ,3, true);
        foreach($this->data as $key => $row) {
            $dates[$key] = $row['date_published'];
        }
        
        return array_multisort($dates, SORT_DESC, $this->data);
    }
}
