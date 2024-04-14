<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_spp extends CI_Model
{

    public function DataSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    function tahun()
    {
        $this->db->select_max('tahun');
        return $this->db->get('tahun')->row_array();
    }
    public function spp_bayar($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);

        return $this->db->get('siswa')->row_array();
    }

    function bayar_spp($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get('bayar_spp')->row_array();
    }

    public function bayar($id_siswa, $bulan, $data)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->set($bulan, 'Lunas');
        $this->db->update('bayar_spp');

        $this->db->insert('spp', $data);
        return true;
    }

    function laporan_spp()
    {
        return $this->db->get('spp')->result_array();
    }

    function hapus_laporan($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('spp');
    }
    public function listing_riwayat()
    {
        $this->db->select('*');
        $this->db->from('spp');
        $query = $this->db->get();
        return $query->result();
    }

    public function listing_spp()
    {
        $this->db->select('*');
        $this->db->from('bayar_spp');
        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file M_spp.php */
