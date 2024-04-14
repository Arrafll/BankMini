<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ki extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ki');
        if (!$this->session->userdata('username')) {
            redirect('Master');
        }
    }

    public function index()
    {
        $this->db->order_by('tahun', 'asc');
        $data['tahun'] = $this->db->get('tahun')->result_array();

        $data['siswa'] = $this->M_ki->DataSiswa();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();



        $this->load->view('ki/ki', $data);
    }

    public function Ki_bayar($id_siswa)
    {
        $data['ki'] = $this->M_ki->ki_bayar($id_siswa);
        if ($data['ki']['ket_ki'] == 'Lunas') {

            redirect('Ki', 'refresh');
        }

        $data['tahun'] = $this->db->get('tahun')->result_array();

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('ki/ki_bayar', $data);
    }

    function bayar()
    {
        $id_siswa = $this->input->post('id_siswa');
        $tahun = $this->input->post('tahun');

        $total = $this->input->post('total');
        $string = $this->input->post('nominal');
        $rupiah  = str_replace('.', '', $string);
        $nominal = str_replace('Rp ', '', $rupiah);

        $bayar_ki = ($total - $nominal);

        $petugas = $this->input->post('petugas');

        $data = [

            'nisn' => $this->input->post('nisn'),
            'nama' => $this->input->post('nama'),
            'tanggal' => time(),
            'nominal' => $nominal,
            'tahun' => $tahun,
            'cicilan' => $bayar_ki,
            'petugas' => $petugas

        ];
        $this->M_ki->cicilan($id_siswa, $bayar_ki);
        if ($this->M_ki->cicilan($id_siswa, $bayar_ki) === FALSE) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Jumlah nominal terlalu banyak
          </div>');

            redirect('Ki/ki_bayar/' . $id_siswa, 'refresh');
        } else {

            $this->M_ki->bayar($data);
            $this->M_ki->laporan_ki($data);

            // $this->M_ki->bayar($data);
            $this->print($data);
        }
    }

    function print($data)
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Print Struk Spp';
        $this->load->view('Ki/ki_cetak', $data);
    }
    function laporan_ki()
    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['laporan'] = $this->M_ki->laporan_ki();
        $this->load->view('ki/laporan_ki', $data);
    }


    function ki_hapus_laporan($id)


    {

        $this->M_ki->hapus_laporan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><a href="#"
        class="close" data-dismiss="alert" aria-label="close">&times;</a>
          Data laporan dihapus.
       </div>');
        redirect('Ki/laporan_ki', 'refresh');
    }

    public function Export_excel()
    {
        $data = array(
            'title' => 'Laporan Excel Keuangan Kunjungan Industri',
            'model' => $this->M_ki->listing()
        );
        $this->load->view('Ki/ki_excel', $data);
    }
    public function Export_excel2($tahun)
    {
        $ResultTahun = str_replace('%20', ' ', $tahun);

        $data = array(
            'title' => 'Laporan Excel Keuangan Kunjungan Industri Tahun - ' . $ResultTahun,
            'tahun' => $ResultTahun,
            'model' => $this->M_ki->listing2($ResultTahun)
        );
        $this->load->view('Ki/ki_excel2', $data);
    }
    function redirect($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $siswa = $this->db->get('siswa')->row_array();

        if ($siswa['ket_ki'] == 'Belum Lunas') {

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><a href="#"
            class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Pembayaran berhasil.
           </div>');
            redirect('Ki/ki_bayar/' . $id_siswa, 'refresh');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><a href="#"
            class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Pembayaran berhasil.
           </div>');
            redirect('Ki', 'refresh');
        }
    }
}

/* End of file Ki.php */
