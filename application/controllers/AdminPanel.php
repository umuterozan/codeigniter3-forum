<?php

class AdminPanel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usermodel');
    }

    public function index() {
        $this->load->view('adminpanel');
    }
}