<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('Master');
        }
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['jumlah_user'] =  $this->db->count_all_results('user');
        $data['jumlah_siswa'] = $this->db->count_all_results('siswa');


        $this->load->view('Dashboard/dashboard', $data);
    }

    public function profile()

    {
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('Dashboard/profile/profile', $data);
    }

    function edit()
    {

        $this->form_validation->set_rules('username', 'Username', 'required');

        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Dashboard/profile/profile_edit', $data);
        } else {
            $username = $this->input->post('username');
            $name = $this->input->post('name');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path']          = './vendor/images/profile';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . './vendor/images/profile/' . $old_image);
                    }

                    $new_image =  $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><a href="#"
                    class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      File gambar tidak valid.
                   </div>');

                    redirect('Admin/edit', 'refresh');
                }
            }
            $this->db->set('name', $name);
            $this->db->where('username', $username);
            $this->db->update('user');





            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><a href="#"
                class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Profile berhasil diubah.
               </div>');

                redirect('Admin/profile', 'refresh');
            }

            redirect('Admin/profile', 'refresh');
        }
    }
}
