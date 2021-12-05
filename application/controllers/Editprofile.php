<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editprofile extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
        $this->load->library('upload');
	}

    public function edit ()
    {
        $this->form_validation->set_rules('nama-depan', 'Nama Depan', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_message('required', '%s tidak boleh kosong.');
        $this->form_validation->set_message('valid_email', '%s bukan email yang valid.');

     
                $id = htmlspecialchars($this->input->post('id'));
                $role = htmlspecialchars($this->input->post('role'));
                $nama_depan = htmlspecialchars($this->input->post('nama-depan'));
                $nama_belakang = htmlspecialchars($this->input->post('nama-belakang'));
                $email = htmlspecialchars($this->input->post('email'));
                 $config['upload_path']          = './images/profile';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5021;
                $this->upload->initialize($config);
                $data['errormsg']= '';
                $error = '';
                $this->upload->do_upload('userfile');
                $data = array('userfile' => $this->upload->data());
                if($data['userfile']['file_name'] != NULL){
                    $error = $this->upload->display_errors();
                }

                if ($this->form_validation->run() == FALSE || $error != NULL)
                {
                    if($error == NULL){
                        unlink('./images/profile/'.$data['userfile']['file_name']);
                        $this->session->set_flashdata('validasi1','profile tidak berhasil diupdate');
                        redirect(base_url('auth/profile'));
                    }
                    else{
                        $this->session->set_flashdata('validasi1','profile tidak berhasil diupdate');
                        redirect(base_url('auth/profile'));
                    }
                }
            else{

                if($data['userfile']['file_name'] != null){
                    if (str_contains($email, '@admin') && $this->session->userdata('role') === 'management') {
                        $values = array(
                            'id_user' => $id,
                            'nama_depan' =>  $nama_depan,
                            'nama_belakang' => $nama_belakang,
                            'gambar' => $data['userfile']['file_name']
                        );
                        $this->session->set_flashdata('validasi1','Email tidak diterima');
                    }else{
                        $values = array(
                            'id_user' => $id,
                            'nama_depan' =>  $nama_depan,
                            'nama_belakang' => $nama_belakang,
                            'email' => $email,
                            'gambar' => $data['userfile']['file_name']
                        );
                    }
                    $this->hapusFile($id);
                    }
                else{
                    if (str_contains($email, '@admin') && $this->session->userdata('role') === 'management') {
                        $values = array(
                            'id_user' => $id,
                            'nama_depan' => $nama_depan,
                            'nama_belakang' => $nama_belakang,
                        );
                        $this->session->set_flashdata('validasi1','Email tidak diterima');
                    }else{
                        $values = array(
                            'id_user' => $id,
                            'nama_depan' => $nama_depan,
                            'nama_belakang' => $nama_belakang,
                            'email' => $email
                        );
                    }
                }
                $cek = $this->user->update($id, $values);
                if($cek > 0 || $cek == 0 ){
                    $this->session->set_userdata($data);
                    if(!$this->session->flashdata('validasi1')){
                        $this->session->set_flashdata('pesan1','profile berhasil diupdate');
                        if($data['userfile']['file_name'] != null){
                            $data = [
                                'role' => $role,
                                'id_user' => $id,
                                'nama_depan' => $nama_depan,
                                'nama_belakang' => $nama_belakang,
                                'email' => $email,
                                'gambar' => $data['userfile']['file_name']
                            ];
                        } else {
                            $data = [
                                'role' => $role,
                                'id_user' => $id,
                                'nama_depan' =>$nama_depan,
                                'nama_belakang' => $nama_belakang,
                                'email' => $email
                            ];
                        } 
                    }else{
                        if($data['userfile']['file_name'] != null){
                            $data = [
                                'role' => $role,
                                'id_user' => $id,
                                'nama_depan' => $nama_depan,
                                'nama_belakang' => $nama_belakang,
                                'gambar' => $data['userfile']['file_name']
                            ];
                        } else {
                            $data = [
                                'role' => $role,
                                'id_user' => $id,
                                'nama_depan' =>$nama_depan,
                                'nama_belakang' => $nama_belakang
                            ];
                        } 
                    }
                    $this->session->set_userdata($data);
                    redirect(base_url('auth/profile'));
                }
                else{
                    $this->session->set_flashdata('validasi1','profile tidak berhasil diupdate');
                    redirect(base_url('auth/profile'));
                }	
            }   
        }


    public function edit2 ()
    {
        $this->form_validation->set_rules('nama-depan', 'Nama Depan', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_message('required', '%s tidak boleh kosong.');
        $this->form_validation->set_message('valid_email', '%s bukan email yang valid.');

     
                $id = htmlspecialchars($this->input->post('id'));
                $role = htmlspecialchars($this->input->post('role'));
                $nama_depan = htmlspecialchars($this->input->post('nama-depan'));
                $nama_belakang = htmlspecialchars($this->input->post('nama-belakang'));
                $email = htmlspecialchars($this->input->post('email'));
                 $config['upload_path']          = './images/profile';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5021;
                $this->upload->initialize($config);
                $data['errormsg']= '';
                $error = '';
                $this->upload->do_upload('userfile');
                $data = array('userfile' => $this->upload->data());
                if($data['userfile']['file_name'] != NULL){
                    $error = $this->upload->display_errors();
                }

                if ($this->form_validation->run() == FALSE || $error != NULL)
                {

                    if($error == NULL){
                        unlink('./images/profile/'.$data['userfile']['file_name']);
                        $this->session->set_flashdata('validasi2','profile tidak berhasil diupdate');
                        redirect(base_url('auth/profuser'));
                    }
                    else{

                        $this->session->set_flashdata('validasi2','profile tidak berhasil diupdate');
                        redirect(base_url('auth/profuser'));
                    }
                }
            else{

                if($data['userfile']['file_name'] != null){
                    if (str_contains($email, '@admin') || str_contains($email, '@management')) {
                        $values = array(
                            'id_user' => $id,
                            'nama_depan' =>  $nama_depan,
                            'nama_belakang' => $nama_belakang,
                            'gambar' => $data['userfile']['file_name']
                        );
                        $this->session->set_flashdata('validasi2','Email tidak diterima');
                    }else{
                        $values = array(
                            'id_user' => $id,
                            'nama_depan' =>  $nama_depan,
                            'nama_belakang' => $nama_belakang,
                            'email' => $email,
                            'gambar' => $data['userfile']['file_name']
                        );
                    }
                    $this->hapusFile($id);
                    }
                else{
                    if (str_contains($email, '@admin') || str_contains($email, '@management')) {
                        $values = array(
                            'id_user' => $id,
                            'nama_depan' => $nama_depan,
                            'nama_belakang' => $nama_belakang,
                        );
                        $this->session->set_flashdata('validasi2','Email tidak diterima');
                    }else{
                        $values = array(
                            'id_user' => $id,
                            'nama_depan' => $nama_depan,
                            'nama_belakang' => $nama_belakang,
                            'email' => $email
                        );
                    }
                }

                $cek = $this->user->update($id, $values);
                if($cek > 0 || $cek == 0 ){
                    if($this->session->flashdata('validasi2')){
                        if($data['userfile']['file_name'] != null){
                            $data = [
                                'role' => $role,
                                'id_user' => $id,
                                'nama_depan' => $nama_depan,
                                'nama_belakang' => $nama_belakang,
                                'gambar' => $data['userfile']['file_name']
                            ];
                        } else {
                            $data = [
                                'role' => $role,
                                'id_user' => $id,
                                'nama_depan' =>$nama_depan,
                                'nama_belakang' => $nama_belakang
                            ];
                        } 
                    }else{
                        $this->session->set_flashdata('pesan2','profile berhasil diupdate');
                        if($data['userfile']['file_name'] != null){
                            $data = [
                                'role' => $role,
                                'id_user' => $id,
                                'nama_depan' => $nama_depan,
                                'nama_belakang' => $nama_belakang,
                                'email' => $email,
                                'gambar' => $data['userfile']['file_name']
                            ];
                        } else {
                            $data = [
                                'role' => $role,
                                'id_user' => $id,
                                'nama_depan' =>$nama_depan,
                                'nama_belakang' => $nama_belakang,
                                'email' => $email
                            ];
                        } 
                    }
                    $this->session->set_userdata($data);
                    redirect(base_url('auth/profuser'));
                }
                else{
                    $this->session->set_flashdata('validasi2','profile tidak berhasil diupdate');
                    redirect(base_url('auth/profuser'));
                }	
            }  
        }

        public function hapusFile($id){
            $data = $this->user->ShowDetail($id);
            $file = $data['gambar'];
            $nama = "./images/profile/$file";
            if(is_readable($nama) && unlink($nama)){
                return "Berhasil";
            }else{
                return "Gagal";
            }
        }
}
