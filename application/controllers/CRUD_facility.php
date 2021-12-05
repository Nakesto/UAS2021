<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUD_facility extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('facility');
        $this->load->library('upload');
	}

    public function delete($id){ 
        $data = $this->facility->detailsroom($id);
        $cek = $this->facility->deletelist($id);
        if($cek === false){
            $this->session->set_flashdata('validasi','data tidak berhasil diapus');
            redirect(base_url('auth/facilitylist'));
        }else{
            $file = $data['gambar_kamar'];
            $nama = "./images/fasilitas/$file";
            unlink($nama);
            $this->session->set_flashdata('pesan','Data berhasil dihapus');
            redirect(base_url('auth/facilitylist'));
        }
    }

    public function edit (){
        $this->form_validation->set_rules('nama-kamar', 'nama-kamar', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|integer');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

                $id = htmlspecialchars($this->input->post('id'));
                $nama_depan = htmlspecialchars($this->input->post('nama-kamar'));
                $nama_belakang = htmlspecialchars($this->input->post('harga'));
                $email = htmlspecialchars($this->input->post('harga'));
                 $config['upload_path']          = './images/fasilitas';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10021;
                $this->upload->initialize($config);
                $data['errormsg']= '';
                $error = '';
                $this->upload->do_upload('userfile');
                $data = array('userfile' => $this->upload->data());
                if($data['userfile']['file_name'] != NULL){
                    $error = $this->upload->display_errors();
                }

                if ($this->form_validation->run() === FALSE || $error != NULL)
                {
                    if($error == NULL){
                        unlink('./images/fasilitas/'.$data['userfile']['file_name']);
                        $this->session->set_flashdata('validasi','data tidak berhasil diupdate');
                        redirect(base_url('auth/facilitylist'));
                    }
                    else{
                        $this->session->set_flashdata('validasi','data tidak berhasil diupdate');
                        redirect(base_url('auth/facilitylist'));
                    }
                }
            else{
                if($data['userfile']['file_name'] != null){
                    $values = array(
                        'id_kamar' => $id,
                        'nama_kamar' => $this->input->post('nama-kamar'),
                        'harga_kamar' => $this->input->post('harga'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'gambar_kamar' => $data['userfile']['file_name']
                    );
                    $this->hapusFile($id);
                    }
                else{
                    $values = array(
                        'id_kamar' => $id,
                        'nama_kamar' => $this->input->post('nama-kamar'),
                        'harga_kamar' => $this->input->post('harga'),
                        'deskripsi' => $this->input->post('deskripsi')
                    );
                }
                $cek = $this->facility->update($id,$values);
                

        
                if($cek > 0 || $cek == 0 ){
                    $this->session->set_flashdata('pesan','Data berhasil diupdate');
                    redirect(base_url('auth/facilitylist'));
                }
                else{
                    $this->session->set_flashdata('validasi','Data gagal update');
                    redirect(base_url('auth/facilitylist'));
                }	
            }
    }

    public function tambah (){
        $this->form_validation->set_rules('nama-kamar', 'nama-kamar', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required|integer');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

                $id = htmlspecialchars($this->input->post('id'));
                $nama_depan = htmlspecialchars($this->input->post('nama-kamar'));
                $nama_belakang = htmlspecialchars($this->input->post('harga'));
                $email = htmlspecialchars($this->input->post('harga'));
                 $config['upload_path']          = './images/fasilitas';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10021;
                $this->upload->initialize($config);
                $data['errormsg']= '';
                $error = '';
                $this->upload->do_upload('userfile');
                $data = array('userfile' => $this->upload->data());
                $error = $this->upload->display_errors();

                if ($this->form_validation->run() === FALSE || $error != NULL)
                {
                    if($error == NULL){
                        unlink('./images/fasilitas/'.$data['userfile']['file_name']);
                        $this->session->set_flashdata('validasi','data tidak berhasil ditambah');
                        redirect(base_url('auth/facilitylist'));
                    }
                    else{
                        $this->session->set_flashdata('validasi','data tidak berhasil ditambah');
                        redirect(base_url('auth/facilitylist'));
                    }
                }
            else{
                    $values = array(
                        'id_kamar' => $id,
                        'nama_kamar' => $this->input->post('nama-kamar'),
                        'harga_kamar' => $this->input->post('harga'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'gambar_kamar' => $data['userfile']['file_name']
                    );
                $cek = $this->facility->tambah($values);
                if($cek > 0 || $cek == 0 ){
                    $this->session->set_flashdata('pesan','Data berhasil ditambah');    
                    redirect(base_url('auth/facilitylist'));
                }
                else{
                    $this->session->set_flashdata('validasi','Data gagal tambah');
                    redirect(base_url('auth/facilitylist'));
                }	
            }
    }

    public function hapusFile($id){
        $data = $this->facility->detailsroom($id);
        $file = $data['gambar_kamar'];
        $nama = "./images/fasilitas/$file";
        if(is_readable($nama) && unlink($nama)){
            return "Berhasil";
        }else{
            return "Gagal";
        }
    }
}
