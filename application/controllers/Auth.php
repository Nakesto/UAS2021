<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('user');
		$this->load->model('Facility');
	}

	public function user()
	{	
		if($this->session->userdata('role') === 'user'){
			$data['navhome'] = $this->load->view('template/navbar', NULL, TRUE);
			$data['Facility'] = $this->Facility->listfacility();
			$this->load->view('page/home', $data);
		}
		else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}

	public function admin()
	{
		if($this->session->userdata('role') === 'admin'){
			$value['user'] = $this->user->userlist();
			$data['navbar'] = $this->load->view('template/nav', NULL, TRUE);
			$data['tabeluser'] = $this->load->view('include/tabel_userlisting', $value, TRUE);  
			$this->load->view('page/dashboard', $data);
		}
		else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}
	public function userlist()
	{
		if($this->session->userdata('role') === 'admin'){
			$value['user'] = $this->user->userlist();
			$data['navbar'] = $this->load->view('template/nav', NULL, TRUE);
			$data['modaledit'] = $this->load->view('include/modal_edit', $value, TRUE); 
			$data['tabeluser'] = $this->load->view('include/tabel_userlisting', $value, TRUE);  
			$this->load->view('page/viewadmin', $data);
		}
		else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}
	public function facilitylist()
	{
		if($this->session->userdata('role') === 'admin' || $this->session->userdata('role') === 'management'){
        $value['facility'] = $this->Facility->listfacility();
		$data['navbar'] = $this->load->view('template/nav', NULL, TRUE);
		$data['modaltambah'] = $this->load->view('include/modal_tambah', NULL, TRUE); 
		$data['modaledit'] = $this->load->view('include/modal_editfasilitas', $value, TRUE);
        $data['tabelfacility'] = $this->load->view('include/tabel_facilitylisting', $data, TRUE);  
        $this->load->view('page/facilitylisting', $data);
		}
		else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}

	public function listrequest()
	{
		if($this->session->userdata('role') === 'admin' || $this->session->userdata('role') === 'management'){
        $value['request'] = $this->Facility->listingrequest();
		$data['navbar'] = $this->load->view('template/nav', NULL, TRUE);
        $data['tabelrequest'] = $this->load->view('include/tabel_request', $value, TRUE);  
        $this->load->view('page/requestinglist', $data);
		}
		else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}

	public function reqlist()
	{
		if($this->session->userdata('role') === 'admin' || $this->session->userdata('role') === 'management'){
        $value['request'] = $this->Facility->request();
		$data['navbar'] = $this->load->view('template/nav', NULL, TRUE);
        $data['tabelrequest'] = $this->load->view('include/tabel_requestmana', $value, TRUE);  
        $this->load->view('page/viewmana', $data);
		}
		else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}

	public function checkapp($id, $status){
		if($this->session->userdata('role') === 'admin' || $this->session->userdata('role') === 'management'){
		$cek = $this->Facility->cekapp($id, $status);
		if($cek > 0 && $status === 'approve'){
			$this->session->set_flashdata('pesan','Booking Disetujui');
			redirect('auth/reqlist');
		}else{
			$this->session->set_flashdata('validasi','Booking Ditolak');
			redirect('auth/reqlist');
		}
		$this->session->set_flashdata('validasi','Booking error');
		redirect('auth/reqlist');
		}
		else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}

	public function deleterequest($id) {
		if($this->session->userdata('role') === 'admin') {
		$cek = $this->Facility->deletereq($id);
		if($cek > 0){
			$this->session->set_flashdata('pesan','Booking berhasil dihapus');
			redirect('auth/listrequest');
		}else{
			$this->session->set_flashdata('validasi','Booking gagal dihapus');
			redirect('auth/listrequest');
		}
		$this->session->set_flashdata('validasi','Booking error');
		redirect('auth/listrequest');
		}else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}

	public function profile()
	{
		if($this->session->userdata('role') === 'admin' || $this->session->userdata('role') === 'management'){
			$data['navbar'] = $this->load->view('template/nav', NULL, TRUE);  
			$this->load->view('page/profile', $data);
		}else{
			redirect(base_url());
		}
	}
	public function profuser()
	{
		if($this->session->userdata('role')){
			$data['navhome'] = $this->load->view('template/navbar', NULL, TRUE);
			$this->load->view('page/profileuser');
		}else{
			redirect(base_url());
		}
	}
    public function management()
	{
		if($this->session->userdata('role') === 'management'){
        $value['user'] = $this->user->userlist();
		$data['navbar'] = $this->load->view('template/nav', NULL, TRUE);
        $data['tabeluser'] = $this->load->view('include/tabel_userlisting', $value, TRUE);  
		$this->load->view('page/dashboard',$data);
		} else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}

	public function detailroom($name){
		if($this->session->userdata('role') === 'user') {
		$data['navhome'] = $this->load->view('template/navbar', NULL, TRUE);
		$model = str_replace("%20", " ", $name);
		$data['Details'] = $this->Facility->detailsroom($model);
		$this->load->view('page/details', $data);
		}
		else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}

	public function booking($param){
		if($this->session->userdata('role')) {
		$data['navhome'] = $this->load->view('template/navbar', NULL, TRUE);
		$id = $this->input->post('id_kamar');
		$model = str_replace("%20", " ", $param);
		$data['det'] = $this->Facility->detailsroom($model);
		$data['value'] = $this->Facility->get_nomor($model);
		$data['booking'] = $this->Facility->wherebooking($model);
		$this->load->view('page/formbooking',$data);
		}
		else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}

	public function requestinglist(){
		if($this->session->userdata('role')){
		$id = $this->input->post('id_kamar');
		$gambar = $this->input->post('gambar_kamar');
		$harga = $this->input->post('harga_kamar');
		$iduser = $this->input->post('id_user');
		$nomorkamar = $this->input->post('nomor');
		$namakamar = $this->input->post('nama_kamar');
		$checkin = str_replace('/', '-', $this->input->post('from'));
		$checkout = str_replace('/', '-', $this->input->post('to'));
		$from = date('Y-m-d',strtotime($checkin));
		$to = date('Y-m-d',strtotime($checkout));
		$status = 0;
		$booking = array(
			"id_kamar" => $id, 
			"id_user" => $iduser, 
			"nomor_kamar" => $nomorkamar,
			"tanggal_book" => $from,
			"tanggal_out" => $to,
			"status" => $status
		);
		$flag = 0;
		$data = $this->Facility->wherebooking2($namakamar,$nomorkamar);
		foreach($data as $row){
			if($from < $row['tanggal_book'] && $to > $row['tanggal_out'] ){
				$flag = 1;
				break;
			}
		}
		if($flag == 1){
			$this->session->set_flashdata('gagal','Kamar telah diambil');
			redirect(base_url('auth/booking/').$namakamar);	
		}else{
			$booking1 = array(
				"id_kamar" => $id, 
				"id_user" => $iduser, 
				"nama_kamar" => $namakamar,
				"gambar_kamar" => $gambar,
				"harga_kamar" => $harga,
				"nomor_kamar" => $nomorkamar,
				"tanggal_book" => $from,
				"tanggal_out" => $to,
				"status" => $status
			);
			$value['book'] = $booking1;
			$brphari = strtotime($from) - strtotime($to);
			$total = ceil(abs($brphari/86400)); 
			$totalharga = $total*$harga;
			$value['totalharga'] = $totalharga;
			$value['navhome'] = $this->load->view('template/navbar', NULL, TRUE);
			$this->Facility->requestlist($booking);
			$this->load->view('page/cobapayment', $value); 
		}
		}else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}

	public function requser(){
		if($this->session->userdata('role')){
			$id = $this->session->userdata('id_user');
			$data['navhome'] = $this->load->view('template/navbar', NULL, TRUE);
			$values['reqlist'] = $this->Facility->reqlistuser($id);
			$data['tabelrequser'] = $this->load->view('include/tabel_requser', $values, TRUE);
			$this->load->view('page/reqlistuser', $data);
		}else{
			if($this->session->userdata('role')){
				redirect(base_url('auth/'.$this->session->userdata('role')));
			}else{
				redirect(base_url());
			}
		}
	}



	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}
