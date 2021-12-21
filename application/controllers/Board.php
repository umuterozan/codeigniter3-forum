<?php

class Board extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('forummodel', 'forum');
	}

    public function index($get_board){
        $board = $this->forum->getAltBoards(array('board_url' => $get_board));
        if (!empty($board)) {
            $this->load->view('board', array(
                'board_name' => $board[0]->board_name
            ));
        } else {
            show_404();
        }
    }
}