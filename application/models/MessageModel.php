<?php

class MessageModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getMessages($where) {
        $messages = $this->db->join('users', 'messages.user_id = users.user_id')->get_where('messages', $where);
        return $messages->result();
    }
}