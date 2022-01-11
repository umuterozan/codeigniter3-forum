<?php

class AdminPanel extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('usermodel');
        $this->load->model('adminmodel');

    }

    public function index() {

        $this->load->view('adminpanel/home');
        
    }

    public function users() {

        $users_data = $this->adminmodel->getAllUsers();

        $view_data_users = array(
            "users" => $users_data
        );

        $this->load->view('adminpanel/users', $view_data_users);

    }

    public function topics() {

        $topics_data = $this->adminmodel->getAllTopics();

        $view_data_topics = array(
            "topics" => $topics_data
        );

        $this->load->view('adminpanel/topics', $view_data_topics);

    }

    public function messages() {

        $messages_data = $this->adminmodel->getAllMessages();

        $view_data_messages = array(
            "messages" => $messages_data
        );

        $this->load->view('adminpanel/messages', $view_data_messages);
        
    }

    public function tickets() {

        $this->load->view('adminpanel/tickets');

    }

    public function charts() {

        $this->load->view('adminpanel/charts');
        
    }
}