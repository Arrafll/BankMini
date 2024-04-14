<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_ki extends CI_Model
{


    public function DataSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }


    public function ki_bayar($id_siswa)
    {


        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get('siswa')->row_array();
    }

    function cicilan($id_siswa, $bayar_ki)
    {
        if ($bayar_ki < '0') {

            $bayar_ki = '0';
            return FALSE;
            die;
        } else {
            # code...

            if ($bayar_ki == '0') {
                $this->db->where('id_siswa', $id_siswa);
                $data = [
                    'bayar_ki' => $bayar_ki,
                    'ket_ki' => 'Lunas'
                ];
                $this->db->update('siswa', $data);
            } else {

                $this->db->where('id_siswa', $id_siswa);
                $data = [
                    'bayar_ki' => $bayar_ki,
                    'ket_ki' => 'Belum Lunas'
                ];
                $this->db->update('siswa', $data);
            }
        }
    }

    function bayar($data)
    {
        $this->db->insert('ki', $data);
    }

    function laporan_ki()

    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('ki')->result_array();
    }

    function hapus_laporan($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('ki');
    }
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('ki');
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

/* End of file M_ki.php */
