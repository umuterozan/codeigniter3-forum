<?php

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel', 'user');
    }

    public function register() {
        if ($this->input->method('REQUEST_METHOD') == 'POST') {
            $this->form_validation->set_rules('username', 'Kullanıcı adı', 'required|trim|min_length[3]|max_length[15]|alpha_numeric');
            $this->form_validation->set_rules('email', 'E-posta adresiniz', 'required|trim|valid_email|is_unique[users.user_email]');
            $this->form_validation->set_rules('password', 'Parola', 'required|trim|min_length[4]|max_length[22]');
            $this->form_validation->set_rules('checkbox', 'Kullanım Koşulları ve Gizlilik Politikasını okudum, kabul ediyorum.', 'required');

            if ($this->form_validation->run() == TRUE) {
                $user = array(
                    'user_name' => $this->input->post('username'),
                    'user_email' => $this->input->post('email'),
                    'user_password' => $this->input->post('password')
                );
                if ($this->user->insert_user($user) == TRUE) {
                    $this->session->set_flashdata('success', 'Başarıyla kayıt olundu!');
                    redirect(base_url());
                }
            } else {
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url());
            }
        }
    }

    public function login() {
        if ($this->input->method('REQUEST_METHOD') == 'POST') {
            $this->form_validation->set_rules('email', 'E-posta adresiniz', 'required|trim|valid_email');
            $this->form_validation->set_rules('password', 'Parola', 'required|trim');

            if ($this->form_validation->run() == TRUE) {
                $user = array(
                    'user_email' => $this->input->post('email'),
                    'user_password' => $this->input->post('password')
                );
                if ($this->user->select_user($user)->num_rows() > 0) {
                    echo "giriş yaptı";
                }
            }
        } else {
            $this->session->set_flashdata('login_error', validation_errors());
            redirect(base_url());
        }
    }
}