<?php

class TopicModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public $table_name_topics = "topics";
    public $table_name_messages = "messages";

    public function getTopics($where) {
        $topics = $this->db->join('users', 'topics.user_id = users.user_id')->get_where('topics', $where);
        return $topics->result();
    }

    public function getMessagesCountRow($topic_id) {
        return $this->db->where(['topic_id'=>$topic_id])->from("messages")->count_all_results();
    }

    public function topicInsert($data) {
        return $this->db->insert($this->table_name_topics, $data);
    }
    public function topicMessageInsert($data) {
        return $this->db->insert($this->table_name_messages, $data);
    }
}