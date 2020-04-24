<?php

class Sekolah extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model('Sekolah_Model', 'sekolah');
  }

  public function tambah() {
    $data = [
      'nama_sekolah' => $this->input->post('nama_sekolah'),
      'nama_kepsek' => $this->input->post('nama_kepsek'),
      'rombel' => $this->input->post('rombel'),
      'guru_kelas' => $this->input->post('guru_kelas'),
      'guru_pai' => $this->input->post('guru_pai'),
      'guru_pjok' => $this->input->post('guru_pjok'),
      'penjaga' => $this->input->post('penjaga'),
    ];

    if($this->sekolah->simpan_data($data)) {

    } else {

    }

    redirect('main/data_sekolah');
  }
}