<?php

class UserModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();    
    }

    public function insert_user($data) {
        $this->db->insert('users', $data);

        if ($this->db->affected_rows() > 0)
            return true;
        return false;
    }

    public function select_user($data) {
        return $this->db->get_where('users', $data);
    }
}