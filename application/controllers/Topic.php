<?php

class Topic extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('forummodel', 'forum');
	}

    public function index($konu){
        $this->load->view('topic');
    }
}