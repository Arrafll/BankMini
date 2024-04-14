<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
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
        $this->load->library('form_validation');
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['user1'] = $this->M_user->tampilData();
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view('Data/user/user', $data);
    }

    public function tambah()

    {

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|is_unique[user.username]',
            array(
                'required' => 'Username harus diisi',
                'is_unique' => 'Username sudah ada'
            )
        );
        $this->form_validation->set_rules(
            'name',
            'Nama',
            'required',
            array(
                'required' => 'Nama harus diisi',
            )
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|min_length[5]',
            array(
                'required' => 'Password harus diisi',
                'min_length' => 'Password harus lebih dari 5 karakter'

            )
        );
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'required|matches[password1]',
            array(
                'required' => 'Ketik ulang password',
                'matches' => 'Ketik ulang password yang sama'
            )
        );
        $this->form_validation->set_rules(
            'jabatan',
            'Jabatan',
            'required',
            array(
                'required' => 'Jabatan harus diisi',

            )
        );
        if ($this->form_validation->run() == FALSE) {

            $data['user'] = $this->db->get_where('user', ['username' =>
            $this->session->userdata('username')])->row_array();
            $this->load->view('Data/user/user_tambah', $data);
        } else {
            # code...

            $username = $this->input->post('username');
            $name = $this->input->post('name');
            $password = $this->input->post('password1');
            $jabatan = $this->input->post('jabatan');


            $data = [
                'username' => htmlspecialchars($username, true),
                'name' => htmlspecialchars($name, true),
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'jabatan' => $jabatan,
                'date_created' => time(),
                'image' => 'default.jpg'

            ];





            $this->M_user->tambah($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><a href="#"
            class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Data berhasil ditambahkan.
           </div>');
            redirect('Data/Data_user', 'refresh');
        }
    }

    function hapus($id)

    {

        $username = $this->input->post('username');


        if ($username == $this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><a href="#"
            class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Tidak bisa menghapus akun yang sedang digunakan.
           </div>');
            redirect('Data/Data_user');
        } else {
            $this->M_user->hapus($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><a href="#"
            class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Data berhasil dihapus.
           </div>');
            redirect('Data/Data_user', 'refresh');
        }
    }
}
