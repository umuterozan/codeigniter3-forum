<?php

class MessageModel extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public $table_name = "messages";

    public function getMessages($where) {

        $messages = $this->db->join('users', 'messages.user_id = users.user_id')->get_where('messages', $where);
        return $messages->result();

    }

    public function messageInsert($data) {

        return $this->db->insert($this->table_name, $data);
        
    }
}