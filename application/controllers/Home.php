<?php

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('forummodel');
	}

	public function index()
	{
		// $this->load->view('home');
		$data = array(
			'category_parent' => $this->forummodel->getCategories()
		);
		$this->load->view('home', $data);
	}
}
