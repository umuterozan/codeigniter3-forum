<?php

class Topic extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('topicmodel');
		$this->load->model('messagemodel');
		$this->load->library('form_validation');
	}

	public function index($get_topic) {
		$topic = $this->topicmodel->getTopics(array('topic_url' => $get_topic));
		if (!empty($topic)) {
			$topic_id = $topic[0]->topic_id;
			$messages = $this->messagemodel->getMessages(array('topic_id' => $topic_id));
			$this->load->view('topic', array(
				'topic_id' => $topic_id,
				'topic_name' => $topic[0]->topic_name,
				'topic_url' => $topic[0]->topic_url,
				'user_name' => $topic[0]->user_name,
				'topic_created_date' => $topic[0]->topic_created_date,
				'board_id' => $topic[0]->board_id,
				'messages' => $messages
			));
		} else {
			show_404();
		}
	}

	public function insert() {
		if ($this->input->method('REQUEST_METHOD') == 'POST') {
            $this->form_validation->set_rules('input_message_content', 'Mesaj', 'required|max_length[5000]');

            if ($this->form_validation->run() == TRUE) {

				$message_content = $this->input->post("input_message_content");
				$topic_id = $this->input->post("input_topic_id");
				$message_user_id = $this->session->userdata("login")['user_id'];

				$insert = $this->messagemodel->messageInsert(array(
					"message_content" => $message_content,
					"topic_id" => $topic_id,
					"user_id" => $message_user_id
				));

				$topic_url = $this->input->post("input_topic_url");

				if ($insert) {
					$this->session->set_flashdata('post_message_success', TRUE);
					redirect(base_url('konular/' . $topic_url));
				} else {
					show_404();
				}
			} else {
				$this->session->set_flashdata('post_message_error', validation_errors());
				redirect(base_url());
			}
		}		
	}
}