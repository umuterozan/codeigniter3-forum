<?php

class Board extends CI_Controller {

    public function __construct() {

		parent::__construct();
        $this->load->model('boardmodel');
        $this->load->model('topicmodel');
		$this->load->model('usermodel');
		$this->load->library('form_validation');

	}

    public function index($get_board) {
		
        $board = $this->boardmodel->getAltBoards(array('board_url' => $get_board));

        if (!empty($board)) {

            $board_id = $board[0]->board_id;
            $topics = $this->topicmodel->getTopics(array('board_id' => $board_id));             
            $this->load->view('board', array(
                'board_id' => $board_id,
                'board_name' => $board[0]->board_name,
                'topics' => $topics
            ));
			
        } else {
            show_404();
        }
    }

    public function insert() {

		if ($this->input->method('REQUEST_METHOD') == 'POST') {

            $this->form_validation->set_rules('input_topic_name', 'Konu başlığı', 'required');
            $this->form_validation->set_rules('input_topic_message', 'Mesaj', 'required|max_length[5000]');

            if ($this->form_validation->run() == TRUE) {

				$topic_name = $this->input->post("input_topic_name");
				$topic_board_id = $this->input->post("input_board_id");
				$topic_url = url_title($topic_name, '-', TRUE);
				$topic_user_id = $this->session->userdata("login")['user_id'];
				$topic_message = $this->input->post("input_topic_message");

				$topic_insert = $this->topicmodel->topicInsert(array(
					"topic_name" => $topic_name,
					"topic_url" => $topic_url,
					"board_id" => $topic_board_id,
					"user_id" => $topic_user_id
				));

				$topic = $this->topicmodel->getTopics(array('topic_url' => $topic_url));

				$message_insert = $this->topicmodel->topicMessageInsert(array(
					"message_content" => $topic_message,
					"topic_id" => $topic[0]->topic_id,
					"user_id" => $topic_user_id
				));

				if ($topic_insert && $message_insert) {

					$this->session->set_flashdata('post_topic_success', TRUE);
					redirect(base_url('konular/' . $topic_url));

				} else {
					show_404();
				}

			} else {

				$this->session->set_flashdata('post_topic_error', validation_errors());
				redirect(base_url());
				
			}
		}		
	}
}