<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_siswa extends CI_Model
{


    function tampil_siswa()
    {
        $hasil = $this->db->get('siswa');

        return $hasil->result_array();
    }

    function tambah($data)
    {
        $this->db->insert('siswa', $data);
    }

    function hapus($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->delete('siswa');
    }

    function get($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get('siswa')->row_array();
    }
    function update($id_siswa, $data)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->update('siswa', $data);
    }
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $query = $this->db->get();
        return $query->result();
    }
}
