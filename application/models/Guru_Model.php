<?php

class Guru_Model extends CI_Model {
  public function simpan_data($data) {
    return $this->db->insert('guru', $data);
  }
}