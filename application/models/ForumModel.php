<?php

class ForumModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getBoards(){
        $alt_boards = $this->db->get_where('boards', array(
            'board_parent' => null
        ));
        return $alt_boards->result();
    }

    public function getAltBoards($where){
        $boards = $this->db->get_where('boards', $where);
        return $boards->result();
    }
}