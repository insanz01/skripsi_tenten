<?php

class Main extends CI_Controller {
  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/dashboard');
    $this->load->view('template/footer');
  }

  public function data_guru( ) {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/guru/index');
    $this->load->view('template/footer');
  }

  public function data_sekolah() {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/sekolah/index');
    $this->load->view('template/footer');
  }

  public function rekap_data() {
    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('template/topbar');
    $this->load->view('main/rekap/index');
    $this->load->view('template/footer');
  }
}