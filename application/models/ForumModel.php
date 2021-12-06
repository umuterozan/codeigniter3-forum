<?php

class ForumModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getCategories(){
        $categories = $this->db->get_where('categories', array(
            'category_parent' => null
        ));
        return $categories->result();
    }

    public function getAltCategories($category_id){
        $alt_categories = $this->db->get_where('categories', array(
            'category_parent' => $category_id
        ));
        return $alt_categories->result();
    }
}