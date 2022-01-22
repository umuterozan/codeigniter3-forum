<?php

class AdminModel extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public $users_table_name = "users";
    public $topics_table_name = "topics";
    public $messages_table_name = "messages";
    public $tickets_table_name = "tickets";

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

    public function getAllTickets() {

        return $this->db->get($this->tickets_table_name)->result();

    }


    public function setUserBanned($user_id, $data) {

        return $this->db->where('user_id', $user_id)->update($this->users_table_name, $data);

    }

    public function deleteTopic($topic_id) {
        
        $this->db->where("topic_id", $topic_id)->delete($this->messages_table_name);
        return $this->db->where("topic_id", $topic_id)->delete($this->topics_table_name);

    }

    public function deleteMessage($message_id) {

        return $this->db->where("message_id", $message_id)->delete($this->messages_table_name);
        
    }

    public function deleteTicket($ticket_id) {

        return $this->db->where("ticket_id", $ticket_id)->delete($this->tickets_table_name);
        
    }
}