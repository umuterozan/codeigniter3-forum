<?php

class BoardModel extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public function getBoards() {

        $alt_boards = $this->db->get_where('boards', array(
            'board_parent' => null
        ));
        return $alt_boards->result();

    }

    public function getAltBoards($where) {

        $boards = $this->db->get_where('boards', $where);
        return $boards->result();

    }

    public function getTopicsCountRow($board_id) {

        return $this->db->where(['board_id'=>$board_id])->from("topics")->count_all_results();

    }
    
    public function getTotalMessagesCountRow($board_id) {

        return $this->db->select('count(*)')->join('topics', 'messages.topic_id = topics.topic_id')->where(['board_id'=>$board_id])->from("messages")->count_all_results();
        
    }
}