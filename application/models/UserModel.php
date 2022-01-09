<?php

class UserModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();    
    }

    public function insertUser($data) {
        $this->db->insert('users', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        return false;
    }

    public function selectUser($data) {
        return $this->db->get_where('users', $data);
    }

    public function getUserDetail($where) {
        $user_details = $this->db->get_where('users', $where);
        return $user_details->result();
    }

    public function getUserTopicsCountRow($user_id) {
        return $this->db->where(['user_id'=>$user_id])->from("topics")->count_all_results();
    }

    public function getUserMessagesCountRow($user_id) {
        return $this->db->where(['user_id'=>$user_id])->from("messages")->count_all_results();
    }
}