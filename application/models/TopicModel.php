<?php

class TopicModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getTopics($where) {
        $topics = $this->db->join('users', 'topics.user_id = users.user_id')->get_where('topics', $where);
        return $topics->result();
    }

    public function getMessagesCountRow($topic_id) {
        return $this->db->where(['topic_id'=>$topic_id])->from("messages")->count_all_results();
    }
}