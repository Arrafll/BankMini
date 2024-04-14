<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Spp extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_spp');
        if (!$this->session->userdata('username')) {
            redirect('Master');
        }
    }


    public function index()
    {
        $data['siswa'] = $this->M_spp->DataSiswa();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();



        $this->load->view('Spp/spp', $data);
    }

    function spp_bayar($id_siswa)
    {
        $data['tahun'] = $this->M_spp->tahun();

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['spp'] = $this->M_spp->spp_bayar($id_siswa);
        $data['bulan'] = $this->M_spp->bayar_spp($id_siswa);
        $this->load->view('Spp/Spp_bayar', $data);
    }

    function bayar()
    {

        $id_siswa = $this->input->post('id_siswa');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');



        $petugas =  $this->input->post('petugas');
        $total = $this->input->post('total');
        $totalBaru = ($total - 350000);
        $data = [
            'nisn' => $this->input->post('nisn'),
            'nama' => $this->input->post('nama'),
            'tanggal' => time(),
            'bulan' => $bulan,
            'tahun' => $tahun,
            'keterangan' => 'Lunas',
            'nominal' => '350000',
            'petugas' => $petugas


        ];

        $this->M_spp->bayar($id_siswa, $bulan, $data);

        $dataSpp = ['total_bayar' => $totalBaru];
        $this->db->where('id_siswa', $id_siswa);
        $this->db->update('bayar_spp', $dataSpp);

        $this->print($data);
    }

    public function laporan_spp()
    {

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['laporan'] = $this->M_spp->laporan_spp();
        $this->load->view('Spp/laporan_spp', $data);
    }
    function print($data)
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['tahun'] = $this->M_spp->tahun();
        $data['title'] = 'Print Struk Spp';
        $this->load->view('Spp/spp_cetak', $data);
    }

    function spp_hapus_laporan($id)


    {

        $this->M_spp->hapus_laporan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><a href="#"
        class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Data laporan dihapus.
       </div>');
        redirect('Spp/laporan_spp', 'refresh');
    }
    public function Export_excel()
    {
        $data = array(
            'title' => 'Laporan Excel Siswa',
            'model' => $this->M_spp->listing_riwayat()
        );
        $this->load->view('Spp/spp_excel', $data);
    }

    public function Export_excel2()
    {
        $this->db->select_max('tahun');
        $db =  $this->db->get('tahun')->row_array();
        $tahun = $db['tahun'];
        $data = array(

            'title' => 'Laporan Pelunasan Spp Tahun ' . $tahun,
            'model' => $this->M_spp->listing_spp(),
            'tahun' => $tahun



        );
        $this->load->view('Spp/spp_excel2', $data);
    }



    function redirect()
    {
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><a href="#"
        class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Pembayaran berhasil.
       </div>');
        redirect('Spp', 'refresh');
    }
}


/* End of file Controllername.php */
