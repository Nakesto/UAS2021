<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}
    
    public function index(){

        
        // Load the view
        $this->load->view('page/login');
    }

    public function validasi (){
        $this->form_validation->set_rules('nama-depan', 'Nama Depan', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_message('required', '%s tidak boleh kosong.');
        $this->form_validation->set_message('is_unique', '%s sudah dipakai. Silakan masukan email lain.');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]'); 
        $secretkey = "6LeC6GIcAAAAAMPMX5_13-LH5WvjDqvd2qbdY_pu";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response = $_POST['g-recaptcha-response'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
        $fire = file_get_contents($url);
        $data = json_decode($fire);
        if(isset($_POST['g-recaptcha-response']) && $this->form_validation->run() != FALSE){
            if($data->success === true){
                $nama_depan = htmlspecialchars($this->input->post('nama-depan'));
                $nama_belakang = htmlspecialchars($this->input->post('nama-belakang'));
                $email = htmlspecialchars($this->input->post('email'));
                $pass = htmlspecialchars($this->input->post('password'));
        
                $values = array(
                    'nama_depan' => $nama_depan,
                    'nama_belakang' => $nama_belakang,
                    'email' => $email,	
                    'pass' => password_hash($pass,PASSWORD_BCRYPT),
                    'gambar' => 'default.png'
                );
               
                if (str_contains($email, '@admin') || str_contains($email, '@management')) {
                    $this->session->set_flashdata('error','Email yang dimasukkan tidak valid');
                    redirect(base_url('register'));
                }
                else{
                    $cek = $this->user->insert($values);
                    if($cek === true){
                        redirect(base_url('home'));
                    }else{
                        $this->session->set_flashdata('error','Data yang dimasukkan tidak valid');
                        redirect(base_url('register'));
                    }
                }
            }else{
                $this->session->set_flashdata('captcha','Captcha tidak valid');
                $this->load->view('page/login');
            }
        }
        else{
                if($data->success === true){
                    $this->load->view('page/login');
                }else{
                    $this->session->set_flashdata('captcha','Captcha tidak valid');
                    $this->load->view('page/login');
                }
        }
    }

}