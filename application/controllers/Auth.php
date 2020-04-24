<?php

class Auth extends CI_Controller {
  public function __construct() {
    parent::__construct();
  }

  public function index() {
    redirect('auth/login');
  }

  public function login() {
    $this->form_validation->set_rules('user', 'Username', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'required');

    if($this->form_validation->run() == FALSE) {
      $this->load->view('auth/template/header');
      $this->load->view('auth/login');
      $this->load->view('auth/template/footer');
    } else {
      $user = [
        'user' => $this->input->post('user'),
        'pass' => $this->input->post('pass')
      ];

      if($user['user'] == "admin" && $user['pass'] == "admin") {
        $this->session->set_userdata('user', $user);
        redirect('main');
      }
    }
  }

  public function logout() {
    $this->session->unset_userdata('user');
    
    redirect('auth/login');
  }
}