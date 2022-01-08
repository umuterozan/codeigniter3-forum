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
}