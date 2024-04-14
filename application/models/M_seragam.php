<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_seragam extends CI_Model
{
    public function DataSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }


    public function seragam_bayar($id_siswa)
    {


        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get('siswa')->row_array();
    }

    function cicilan($id_siswa, $bayar_seragam)
    {

        if ($bayar_seragam < '0') {
            $bayar_seragam = '0';
            return FALSE;
            die;
        }
        if ($bayar_seragam == '0') {
            $this->db->where('id_siswa', $id_siswa);
            $data = [
                'bayar_seragam' => $bayar_seragam,
                'ket_seragam' => 'Lunas'
            ];
            $this->db->update('siswa', $data);
        } else {

            $this->db->where('id_siswa', $id_siswa);
            $data = [
                'bayar_seragam' => $bayar_seragam,
                'ket_seragam' => 'Belum Lunas'
            ];
            $this->db->update('siswa', $data);
        }
    }

    function bayar($data)
    {
        $this->db->insert('seragam', $data);
    }

    function laporan_seragam()
    {
        $this->db->order_by('id', 'desc');

        return $this->db->get('seragam')->result_array();
    }

    function hapus_laporan($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('seragam');
    }

    public function listing()
    {
        $this->db->select('*');
        $this->db->from('seragam');
        $query = $this->db->get();
        return $query->result();
    }
    public function listing2($tahun)
    {
        if ($tahun == 'Semua Tahun Ajaran') {
            $this->db->order_by('date', 'asc');

            return   $this->db->get('siswa')->result();
        } else {

            $this->db->where('date', $tahun);
            return $this->db->get('siswa')->result();
        }
    }
}

/* End of file Seragam.php */
