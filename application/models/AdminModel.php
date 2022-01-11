<?php

class AdminModel extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public $users_table_name = "users";
    public $topics_table_name = "topics";
    public $messages_table_name = "messages";

    public function getAllUsers() {

        return $this->db->get($this->users_table_name)->result();

    }

    public function getAllTopics() {
        
        $topics = $this->db->join('boards', 'topics.board_id = boards.board_id')->join('users', 'topics.user_id = users.user_id')->get($this->topics_table_name);
        return $topics->result();

    }

    public function getAllMessages() {
        
        $messages = $this->db->join('topics', 'messages.topic_id = topics.topic_id')->join('users', 'messages.user_id = users.user_id')->get($this->messages_table_name);
        return $messages->result();

    }
}