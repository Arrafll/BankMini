<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_tabungan extends CI_Model
{

  public function DataSiswa()
  {
    return $this->db->get('siswa')->result_array();
  }

  public function tabungan($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    return $this->db->get('siswa')->row_array();
  }

  function simpan($id_siswa, $tabungan)
  {
    $this->db->where('id_siswa', $id_siswa);
    $this->db->set('tabungan', $tabungan);
    $this->db->update('siswa');
  }
  function ambil($id_siswa, $tabungan)
  {
    if ($tabungan < '0') {
      $tabungan = '0';
      return $tabungan;
    } else {
      $this->db->where('id_siswa', $id_siswa);
      $this->db->set('tabungan', $tabungan);
      $this->db->update('siswa');
    }
  }
}
