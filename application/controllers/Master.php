<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('Admin');
		}
		$this->form_validation->set_rules(
			'username',
			'Username',
			'trim|required',

			array(
				'required' => 'Username harus diisi'
			)
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'trim|required',
			array(
				'required' => 'Password harus diisi'
			)
		);



		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Login';
			$this->load->view('Login/login_header', $data);
			$this->load->view('Login/login', $data);
			$this->load->view('Login/login_footer', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if ($user) {

			if (password_verify($password, $user['password'])) {
				$data =
					[
						'username' => $user['username'],
						'jabatan' => $user['jabatan']
					];


				$this->session->set_userdata($data);



				redirect('Admin');	# code...

			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Password salah!
		  </div>');
				redirect('master', 'refresh');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Username tidak ada
		  </div>');

			redirect('master', 'refresh');
		}
	}

	public function register()
	{


		$this->form_validation->set_rules(
			'username',
			'Username',
			'trim|required|min_length[5]|max_length[12]|is_unique[user.username]',

			array(
				'required' => 'Username harus diisi',
				'is_unique' => 'Username sudah ada'
			)
		);

		$this->form_validation->set_rules(
			'name',
			'Name',
			'required|max_length[12]|is_unique[user.name]',

			array(
				'required' => 'Nama harus diisi',
				'is_unique' => 'Nama sudah ada'
			)
		);

		$this->form_validation->set_rules(
			'password1',
			'Password',
			'trim|required|min_length[5]',

			array(
				'required' => 'Password harus diisi'

			)
		);

		$this->form_validation->set_rules(
			'password2',
			'Password',
			'trim|required|min_length[5]|matches[password1]',
			array(
				'required' => 'Password harus diisi',
				'matches' => 'Ketik ulang password dengan benar'
			)
		);







		if ($this->form_validation->run() == false) {

			$data['title'] = "Pendaftaran Akun";
			$this->load->view('Register/register_header', $data);
			$this->load->view('Register/register');
			$this->load->view('Register/register_footer');
		} else {

			$data = [

				'username' => htmlspecialchars($this->input->post('username', true)),
				'name' => htmlspecialchars($this->input->post('name', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'image' => 'default.jpg',
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()


			];

			$this->db->insert('user', $data);
			redirect('master', 'refresh');
		}
	}

	public function logout()
	{

		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');


		redirect('Master', 'refresh');
	}
}
