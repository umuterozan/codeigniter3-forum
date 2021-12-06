<?php

class ForumModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getCategories(){
        $alt_categories = $this->db->get_where('categories', array(
            'category_parent' => null
        ));
        return $alt_categories->result();
    }

    public function getAltCategories($where){
        $categories = $this->db->get_where('categories', $where);
        return $categories->result();
    }
}