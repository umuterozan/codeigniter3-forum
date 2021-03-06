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

        $tickets_data = $this->adminmodel->getAllTickets();

        $view_data_tickets = array(
            "tickets" => $tickets_data
        );

        $this->load->view('adminpanel/tickets', $view_data_tickets);

    }

    public function charts() {

        $this->load->view('adminpanel/charts');
        
    }


    public function banUser($user_id) {

        $new_user_name = "BannedUser" . $user_id;
        $new_user_password = "NgU&fTA~>4&h!PwE";

        $update = $this->adminmodel->setUserBanned($user_id, array(
            "user_name" => $new_user_name,
            "user_password" => $new_user_password
        ));

        if ($update) {
            redirect(base_url('adminpanel/users'));
        }
    }

    public function deleteTopic($topic_id) {

        $this->adminmodel->deleteTopic($topic_id);
        redirect(base_url('adminpanel/topics'));

    }

    public function deleteMessage($message_id) {

        $this->adminmodel->deleteMessage($message_id);
        redirect(base_url('adminpanel/messages'));
        
    }

    public function deleteTicket($ticket_id) {

        $this->adminmodel->deleteTicket($ticket_id);
        redirect(base_url('adminpanel/tickets'));

    }
}