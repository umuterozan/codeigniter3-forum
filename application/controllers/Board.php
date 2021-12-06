<?php

class Board extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('forummodel', 'forum');
	}

    public function index($kategori){
        $category = $this->forum->getAltCategories(array('category_url' => $kategori));
        if (!empty($category)) {
            $this->load->view('board', array(
                'category_name' => $category[0]->category_name
            ));
        } else {
            show_404();
        }
    }
}