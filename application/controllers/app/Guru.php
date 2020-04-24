<?php

class Guru extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model('Guru_Model', 'guru');
  }

  public function tambah() {
    $data = [
      'nama' => $this->input->post('nama'),
      'nip' => $this->input->post('nip'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'jurusan' => $this->input->post('jurusan'),
      'alamat' => $this->input->post('alamat'),
      'jabatan' => $this->input->post('jabatan'),
      'gol_ruang' => $this->input->post('gol_ruang'),
      'tempat_tugas' => $this->input->post('tempat_tugas'),
    ];

    if($this->guru->simpan_data($data)) {
      redirect('main/data_guru');
    } else {
      redirect('main/data_guru');
    }
  }
}