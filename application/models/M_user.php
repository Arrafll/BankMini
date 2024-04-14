<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model
{


    public function tampilData()

    {
        return $this->db->get('user')->result_array();
    }

    function tambah($data)
    {
        $this->db->insert('user', $data);
        return TRUE;
    }

    function hapus($id)

    {

        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    // public function tambahData($data, $table)
    // {
    //     $this->db->insert($table, $data);
    // }
}
