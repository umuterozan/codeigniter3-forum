<?php

class AdminPanel extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('usermodel');
        $this->load->model('boardmodel');
        $this->load->model('topicmodel');
        $this->load->model('messagemodel');

    }

    public function index() {

        $this->load->view('adminpanel/home');
        
    }

    public function users() {

        $this->load->view('adminpanel/users');

    }

    public function topics() {

        $this->load->view('adminpanel/topics');

    }

    public function messages() {

        $this->load->view('adminpanel/messages');
    }

    public function tickets() {

        $this->load->view('adminpanel/tickets');

    }

    public function charts() {

        $this->load->view('adminpanel/charts');
        
    }
}