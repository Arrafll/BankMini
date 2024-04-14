<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seragam extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_seragam');
    }

    public function index()
    {

        $data['siswa'] = $this->M_seragam->DataSiswa();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->db->order_by('tahun', 'asc');
        $data['tahun'] = $this->db->get('tahun')->result_array();


        $this->load->view('Seragam/seragam', $data);
    }

    public function seragam_bayar($id_siswa)
    {


        $data['tahun'] = $this->db->get('tahun')->result_array();

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['seragam'] = $this->M_seragam->seragam_bayar($id_siswa);
        if ($data['seragam']['ket_seragam'] == 'Lunas') {

            redirect('Seragam', 'refresh');
        }
        $this->load->view('Seragam/seragam_bayar', $data);
    }

    function bayar()
    {
        $id_siswa = $this->input->post('id_siswa');

        $total = $this->input->post('total');
        $string = $this->input->post('nominal');
        $rupiah  = str_replace('.', '', $string);
        $nominal = str_replace('Rp ', '', $rupiah);

        $bayar_seragam = ($total - $nominal);

        $petugas = $this->input->post('petugas');


        $data = [

            'nisn' => $this->input->post('nisn'),
            'nama' => $this->input->post('nama'),
            'tanggal' => time(),
            'nominal' => $nominal,
            'tahun' => $this->input->post('tahun'),
            'cicilan' => $bayar_seragam,
            'petugas' => $petugas

        ];
        $this->M_seragam->cicilan($id_siswa, $bayar_seragam);
        if ($this->M_seragam->cicilan($id_siswa, $bayar_seragam) === FALSE) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Jumlah nominal terlalu banyak
		  </div>');
            redirect('Seragam/seragam_bayar/' . $id_siswa, 'refresh');
        } else {
            $this->M_seragam->bayar($data);
            $this->M_seragam->laporan_seragam($data);


            $this->print($data);
        }
    }

    function print($data)
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Print Struk Spp';
        $this->load->view('Seragam/seragam_cetak', $data);
        header('Seragam');
    }
    function laporan_seragam()
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['laporan'] = $this->M_seragam->laporan_seragam();
        $this->load->view('Seragam/laporan_seragam', $data);
    }


    function hapus_laporan($id)


    {

        $this->M_seragam->hapus_laporan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><a href="#"
        class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Data laporan dihapus.
       </div>');
        redirect('Seragam/laporan_seragam', 'refresh');
    }

    public function Export_excel()
    {
        $data = array(
            'title' => 'Laporan Excel Keuangan Seragam',
            'model' => $this->M_seragam->listing()
        );
        $this->load->view('Seragam/seragam_excel', $data);
    }

    public function Export_excel2($tahun)
    {

        $ResultTahun = str_replace('%20', ' ', $tahun);
        $data = array(
            'title' => 'Laporan Excel Keuangan Seragam Tahun Ajaran - ' . $ResultTahun,
            'tahun' => $ResultTahun,
            'model' => $this->M_seragam->listing2($ResultTahun)
        );
        $this->load->view('Seragam/seragam_excel2', $data);
    }

    function redirect($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $siswa = $this->db->get('siswa')->row_array();

        if ($siswa['ket_seragam'] == 'Belum Lunas') {

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><a href="#"
            class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Pembayaran berhasil.
           </div>');
            redirect('Seragam/seragam_bayar/' . $id_siswa, 'refresh');
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><a href="#"
        class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Pembayaran berhasil.
       </div>');
            redirect('Seragam', 'refresh');
        }
    }
}

/* End of file Seragam.php */
