<?php

class Board extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('boardmodel');
        $this->load->model('topicmodel');
	}

    public function index($get_board){
        $board = $this->boardmodel->getAltBoards(array('board_url' => $get_board));
        if (!empty($board)) {
            $board_id = $board[0]->board_id;
            $topics = $this->topicmodel->getTopics(array('board_id' => $board_id));             
            $this->load->view('board', array(
                'board_name' => $board[0]->board_name,
                'board_parent' => $board[0]->board_parent,
                'topics' => $topics
            ));
        } else {
            show_404();
        }
    }
}