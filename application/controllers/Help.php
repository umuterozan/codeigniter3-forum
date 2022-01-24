<?php

class Help extends CI_Controller {

    public function __construct() {
        
        parent::__construct();
        $this->load->model('usermodel');

    }

    public function index() {

        $this->load->view('help/home');
        
    }

    public function about_forum() {
        
        $this->load->view('help/about-forum');

    }

    public function cookies() {

        $this->load->view('help/cookies');

    }

    public function terms_rules() {
        
        $this->load->view('help/terms-rules');

    }

    public function privacy_policy() {

        $this->load->view('help/privacy-policy');
        
    }
}