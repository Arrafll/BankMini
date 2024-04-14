<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_siswa extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('username')) {
            redirect('Master');
        }

        if ($this->session->userdata('jabatan') != 'admin') {

            redirect('Admin', 'refresh');
        }
        $this->load->model('M_siswa');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['siswa'] = $this->M_siswa->tampil_siswa();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view('Data/siswa/siswa', $data);
    }

    function tambah()
    {
        $this->form_validation->set_rules(
            'nisn',
            'Nisn',
            'trim|required|numeric|is_unique[siswa.nisn]',

            array(
                'required' => 'Nisn harus diisi',
                'is_unique' => 'Nisn sudah ada',
                'numeric' => 'Nisn harus angka'
            )
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',

            array(
                'required' => 'Nama harus diisi',

            )
        );

        $this->form_validation->set_rules(
            'jenis_kelamin',
            'Jenis Kelamin',
            'required',

            array(
                'required' => 'Jenis Kelamin harus diisi'

            )
        );

        $this->form_validation->set_rules(
            'date',
            'Tahun ajaran',
            'required',
            array(
                'required' => 'Tahun ajaran harus diisi'

            )
        );







        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['title'] = "Form Tambah Siswa";
            $data['date'] = $this->db->get('tahun')->result_array();
            $this->db->order_by('tahun', 'asc');

            $data['tahun'] = $this->db->get('tahun')->result_array();

            $this->load->view('Data/siswa/siswa_tambah', $data);
        } else {

            $data = [

                'nisn' => htmlspecialchars($this->input->post('nisn', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),

                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'date' => $this->input->post('date'),
                'tabungan' => '0',
                'bayar_ki' => '1500000',
                'ket_ki' => 'Belum Lunas',
                'bayar_seragam' => '1500000',
                'ket_seragam' => 'Belum Lunas'



            ];

            $this->M_siswa->tambah($data);


            $terbesar = $this->tahun();
            $tahunTerbesar = $terbesar['tahun'];


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
                'tahun' => $tahunTerbesar




            ];

            $this->db->insert('bayar_spp', $dataSpp);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><a href="#"
            class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Data berhasil ditambahkan.
           </div>');


            redirect('Data/Data_siswa', 'refresh');
        }
    }
    function hapus($id_siswa)
    {
        $this->M_siswa->hapus($id_siswa);
        $this->db->where('id_siswa', $id_siswa);
        $this->db->delete('bayar_spp');



        redirect('Data/Data_siswa', 'refresh');
    }

    function update($id_siswa)

    {
        $this->form_validation->set_rules(
            'nisn',
            'Nisn',
            'trim|required|numeric',

            array(
                'required' => 'Nisn harus diisi',
                'numeric' => 'Nisn harus angka'

            )
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',

            array(
                'required' => 'Nama harus diisi',

            )
        );

        $this->form_validation->set_rules(
            'jenis_kelamin',
            'Jenis Kelamin',
            'required',

            array(
                'required' => 'Jenis Kelamin harus diisi'

            )
        );

        $this->form_validation->set_rules(
            'date',
            'Tahun ajaran',
            'required',
            array(
                'required' => 'Tahun ajaran harus diisi'

            )
        );







        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Siswa';
            $data['jenis_kelamin'] = ['Laki - laki', 'Perempuan'];
            $data['tahun'] = $this->db->get('tahun')->result_array();
            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $data['siswa'] = $this->M_siswa->get($id_siswa);
            $this->load->view('Data/siswa/siswa_update', $data);
        } else {
            $data = [

                'nisn' => htmlspecialchars($this->input->post('nisn', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),

                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'date' => $this->input->post('date'),




            ];

            $id_siswa = $this->input->post('id_siswa');

            $this->M_siswa->update($id_siswa, $data);

            redirect('Data/Data_siswa', 'refresh');
        }
    }

    function tahun()
    {
        $this->db->select_max('tahun');
        return $this->db->get('tahun')->row_array();
    }
    public function Export_excel()
    {
        $data = array(
            'title' => 'Laporan Excel Siswa',
            'model' => $this->M_siswa->listing()
        );
        $this->load->view('Data/siswa/siswa_excel', $data);
    }
}
