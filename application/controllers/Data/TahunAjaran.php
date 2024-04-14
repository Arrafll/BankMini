<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TahunAjaran extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('Master');
        }

        if ($this->session->userdata('jabatan') != 'admin') {

            redirect('Admin', 'refresh');
        }
    }

    public function index()
    {
        $tahunTerbesar = $this->tahun();
        $this->db->order_by('tahun', 'asc');
        $data['tahun'] = $this->db->get('tahun')->result_array();
        $data['tahunTerbesar'] = $tahunTerbesar;
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view('Data/tahun_ajaran/Tahun_ajaran', $data);
    }

    function tambah()
    {




        $tahun = $this->input->post('tahun');


        $returnTahun = $this->tahun();
        $tahunTerbesar = $returnTahun['tahun'];

        if ($tahun < $tahunTerbesar) {


            $data = [
                'tahun' => $tahun
            ];
            $this->db->insert('tahun', $data);
        } else {

            $dataSpp = [
                'januari' => 'Belum Lunas',
                'februari' => 'Belum Lunas',
                'maret' => 'Belum Lunas',
                'april' => 'Belum Lunas',
                'mei' => 'Belum Lunas',
                'juni' => 'Belum Lunas',
                'juli' => 'Belum Lunas',
                'agustus' => 'Belum Lunas',
                'september' => 'Belum Lunas',
                'oktober' => 'Belum Lunas',
                'november' => 'Belum Lunas',
                'desember' => 'Belum Lunas',
                'total_bayar' => 4200000,
                'tahun' => $tahun




            ];



            $this->db->where('tahun', $tahunTerbesar);
            $this->db->update('bayar_spp', $dataSpp);

            $data = [
                'tahun' => $tahun
            ];
            $this->db->insert('tahun', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><a href="#"
        class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Data berhasil ditambahkan.
       </div>');
        redirect('Data/TahunAjaran', 'refresh');
    }


    function hapus($id)
    {
        $tahun = $this->input->post('tahun');






        $returnTahun = $this->tahun();
        $tahunTerbesar = $returnTahun['tahun'];

        if ($tahun === $tahunTerbesar) {
            $this->db->where('id', $id);
            $this->db->delete('tahun');
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><a href="#"
            class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Data berhasil dihapus.
           </div>');

            $returnTahun = $this->tahun();
            $tahunTerbesar = $returnTahun['tahun'];

            $this->db->where('tahun', $tahun);
            $dataSpp = [
                'januari' => 'Belum Lunas',
                'februari' => 'Belum Lunas',
                'maret' => 'Belum Lunas',
                'april' => 'Belum Lunas',
                'mei' => 'Belum Lunas',
                'juni' => 'Belum Lunas',
                'juli' => 'Belum Lunas',
                'agustus' => 'Belum Lunas',
                'september' => 'Belum Lunas',
                'oktober' => 'Belum Lunas',
                'november' => 'Belum Lunas',
                'desember' => 'Belum Lunas',
                'tahun' => $tahunTerbesar




            ];
            $this->db->update('bayar_spp', $dataSpp);

            $this->db->where('date', $tahun);
            $this->db->delete('siswa');


            redirect('Data/TahunAjaran', 'refresh');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('tahun');

            $this->db->where('date', $tahun);
            $this->db->delete('siswa');

            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><a href="#"
            class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Data berhasil dihapus.
           </div>');

            redirect('Data/TahunAjaran', 'refresh');
        }
    }
    function tahun()
    {
        $this->db->select_max('tahun');
        return $this->db->get('tahun')->row_array();
    }
}


/* End of file TahunAjaran.php */
