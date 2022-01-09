<?php

class Home extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('boardmodel');
		$this->load->model('topicmodel');
		$this->load->model('usermodel');

	}

	public function index() {

		$data = array(
			'board_parent' => $this->boardmodel->getBoards()
		);
		$this->load->view('home', $data);
		
	}
}
