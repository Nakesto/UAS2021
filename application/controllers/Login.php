<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email2', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password2', 'Password', 'trim|required');
        $this->form_validation->set_message('required', '%s tidak boleh kosong.');
		if ($this->form_validation->run() == false) {
			$this->load->view('page/login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = htmlspecialchars($this->input->post('email2'));
		$password = htmlspecialchars($this->input->post('password2'));

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
        
		//jika adminnya ada
		if ($user) 
        {
            if (str_contains($user['email'], '@admin')) {
                if (password_verify($password, $user['pass'])) {
                    $role = 'admin';
                    $data = [
                        'id_user' => $user['id_user'],
                        'email' => $user['email'],
                        'nama_depan' => $user['nama_depan'],
                        'nama_belakang' => $user['nama_belakang'],
                        'gambar' => $user['gambar'],
                        'role' => $role
                    ];
                    $this->session->set_userdata($data);
                    redirect('auth/admin');
                } else {
                    $this->session->set_flashdata('error2','Username atau password tidak sesuai');
                        redirect(base_url('login'));
                }
            }
			else if (str_contains($user['email'], '@management')) {
                if (password_verify($password, $user['pass'])) {
                    $role = 'management';
                    $data = [
                        'id_user' => $user['id_user'],
                        'email' => $user['email'],
                        'nama_depan' => $user['nama_depan'],
                        'nama_belakang' => $user['nama_belakang'],
                        'gambar' => $user['gambar'],
                        'role' => $role
                    ];
                    $this->session->set_userdata($data);
                    redirect('auth/management');
                } else {
                    $this->session->set_flashdata('error2','Username atau password tidak sesuai');
                        redirect(base_url('login'));
                }
            } 
            else {
                if (password_verify($password, $user['pass'])) {
                    $role = 'user';
                    $data = [
                        'id_user' => $user['id_user'],
                        'email' => $user['email'],
                        'nama_depan' => $user['nama_depan'],
                        'nama_belakang' => $user['nama_belakang'],
                        'gambar' => $user['gambar'],
                        'role' => $role
                    ];
                    $this->session->set_userdata($data);
                    redirect('auth/user');
                } else {
                    $this->session->set_flashdata('error2','Username atau password tidak sesuai');
                        redirect(base_url('login'));
                }
            }
		} else {
            $this->session->set_flashdata('error3','Email tidak terdaftar!');
                        redirect(base_url('login'));
			redirect('login');
		}
	}
}