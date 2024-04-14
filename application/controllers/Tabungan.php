<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabungan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('Master');
        }
        $this->load->model('M_tabungan');
    }

    public function index()
    {
        $data['siswa'] = $this->M_tabungan->DataSiswa();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();



        $this->load->view('Tabungan/tabungan', $data);
    }


    function tabungan($id_siswa)
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['tabungan'] = $this->M_tabungan->tabungan($id_siswa);
        $this->load->view('Tabungan/edit_tabungan', $data);
    }

    function simpan()
    {

        $saldo = str_replace('Rp', '', str_replace('.', '', $this->input->post('saldo')));
        $int =  str_replace('Rp', '', str_replace('.', '', $this->input->post('nominal')));

        $nominal = $int;

        $id_siswa = $this->input->post('id_siswa');


        $tabungan = ($saldo + $nominal);
        $this->M_tabungan->simpan($id_siswa, $tabungan);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><a href="#"
        class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Saldo berhasil ditambahkan.
       </div>');
        redirect('Tabungan/tabungan/' . $id_siswa);
    }
    function ambil()
    {
        $saldo = str_replace('Rp', '', str_replace('.', '', $this->input->post('saldo')));
        $int =  str_replace('Rp', '', str_replace('.', '', $this->input->post('nominal')));

        $nominal = $int;
        $id_siswa = $this->input->post('id_siswa');




        # code...

        $tabungan = ($saldo - $nominal);


        $this->M_tabungan->ambil($id_siswa, $tabungan);

        if ($this->M_tabungan->ambil($id_siswa, $tabungan) == '0') {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><a href="#"
            class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Saldo tidak cukup.
           </div>');
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><a href="#"
        class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Saldo berhasil diambil.
       </div>');
        redirect('Tabungan/tabungan/' . $id_siswa);
    }
}
