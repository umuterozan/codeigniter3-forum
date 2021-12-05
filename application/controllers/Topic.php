<?php

class Topic extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
	}

    public function index($kategori){
        $this->load->view('topic');
    }
}