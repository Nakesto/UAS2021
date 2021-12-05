<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUD_user extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
        $this->load->library('upload');
	}

    public function delete($id){ 
        $data = $this->user->ShowDetail($id);
        $cek = $this->user->deletelist($id);
        if($cek === false){
            $this->session->set_flashdata('validasi','Data tidak berhasil dihapus');
            redirect(base_url('auth/userlist'));
        }else{
            $file = $data['gambar'];
            $nama = "./images/profile/$file";
            unlink($nama);
            $this->session->set_flashdata('pesan','Data berhasil dihapus');
            redirect(base_url('auth/userlist'));
        }
    }

    public function edit (){
        $this->form_validation->set_rules('nama-depan', 'Nama Depan', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_message('required', '%s tidak boleh kosong.');
        $this->form_validation->set_message('valid_email', '%s bukan email yang valid.');

     
                $id = htmlspecialchars($this->input->post('id'));
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
                        $this->session->set_flashdata('validasi','data tidak berhasil diupdate');
                        redirect(base_url('auth/userlist'));
                    }
                    else{
                        $this->session->set_flashdata('validasi','data tidak berhasil diupdate');
                        redirect(base_url('auth/userlist'));
                    }
                }
            else{
                if($data['userfile']['file_name'] != null){
                    $values = array(
                        'id_user' => $id,
                        'nama_depan' => $this->input->post('nama-depan'),
                        'nama_belakang' => $this->input->post('nama-belakang'),
                        'email' => $this->input->post('email'),
                        'gambar' => $data['userfile']['file_name']
                    );
                    $this->hapusFile($id);
                    }
                else{
                    $values = array(
                        'id_user' => $id,
                        'nama_depan' => $this->input->post('nama-depan'),
                        'nama_belakang' => $this->input->post('nama-belakang'),
                        'email' => $this->input->post('email')
                    );
                }
                    $cek = $this->user->update($id,$values);
                if($cek > 0 || $cek ==0 ){
                    $this->session->set_flashdata('pesan','Data berhasil diupdate');
                    redirect(base_url('auth/userlist'));
                }
                else{
                    $this->session->set_flashdata('validasi','Data gagal update');
                    redirect(base_url('auth/userlist'));
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
