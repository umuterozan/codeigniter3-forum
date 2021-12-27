<?php

class Topic extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('topicmodel');
		$this->load->model('messagemodel');
	}

	public function index($get_topic) {
		$topic = $this->topicmodel->getTopics(array('topic_url' => $get_topic));
		if (!empty($topic)) {
			$topic_id = $topic[0]->topic_id;
			$messages = $this->messagemodel->getMessages(array('topic_id' => $topic_id));
			$this->load->view('topic', array(
				'topic_name' => $topic[0]->topic_name,
				'user_name' => $topic[0]->user_name,
				'topic_created_date' => $topic[0]->topic_created_date,
				'board_id' => $topic[0]->board_id,
				'messages' => $messages
			));
		} else {
			show_404();
		}
	}
}