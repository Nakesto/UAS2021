<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class Facility extends CI_Model{

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

        public function insert($values){

                $this->db->insert('user', $values);
                
                if($this->db->trans_status() === FALSE)
                {
                    return false;
                } else {
                    return true;
                }
        }

        public function listfacility()
        {
            $sql = ('SELECT id_kamar, nama_kamar, harga_kamar, gambar_kamar,deskripsi from kamar');

            $query = $this->db->query($sql);
            return $query->result_array();
        }

        public function listingrequest()
        {
            $this->db->select("book_kamar.nomor_kamar AS 'nok',book_kamar.tanggal_book AS 'checkin',book_kamar.id_book AS 'book',book_kamar.tanggal_out AS 'checkout',book_kamar.status AS 'status', user.nama_depan AS 'Fname',user.nama_belakang AS 'Lname',kamar.nama_kamar AS 'nama'");
            $this->db->from('book_kamar');
            $this->db->join('user', 'user.id_user = book_kamar.id_user');
            $this->db->join('kamar', 'kamar.id_kamar = book_kamar.id_kamar');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function request(){
            $this->db->select("book_kamar.nomor_kamar AS 'nok',book_kamar.tanggal_book AS 'checkin',book_kamar.id_book AS 'book',book_kamar.tanggal_out AS 'checkout',book_kamar.status AS 'status', user.nama_depan AS 'Fname',user.nama_belakang AS 'Lname',kamar.nama_kamar AS 'nama'");
            $this->db->from('book_kamar');
            $this->db->join('user', 'user.id_user = book_kamar.id_user');
            $this->db->join('kamar', 'kamar.id_kamar = book_kamar.id_kamar');
            $this->db->where('book_kamar.status',0);
            $query = $this->db->get();
            return $query->result_array();
        }

        public function name(){
            $nameuser = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            return $nameuser;
        }

        public function get_nomor($model)
		  {
            $this->db->select('kamar.id_kamar as "idkam", detail_kamar.nomor_kamar as "nokam"');
            $this->db->from('kamar');
            $this->db->join('detail_kamar', 'kamar.id_kamar = detail_kamar.id_kamar');
            $this->db->where('nama_kamar', $model);
            $query = $this->db->get();
            return $query->result_array();  
		  }

        public function deletelist($id)
        {
            $this->db->where('id_kamar', $id);
            $this->db->delete('kamar');

            if($this->db->trans_status() === FALSE)
                {
                    return false;
                } else {
                    return true;
                }
        }

        public function deletereq($id)
        {
            $this->db->where('id_book', $id);
            $this->db->delete('book_kamar');

            if($this->db->trans_status() === FALSE)
                {
                    return false;
                } else {
                    return true;
                }
        }

        public function wherebooking($model){
            
            $this->db->select('book_kamar.nomor_kamar as "nomor_kamar", book_kamar.tanggal_book as "tanggal_book", book_kamar.tanggal_out as "tanggal_out"');
            $this->db->from('kamar');
            $this->db->join('book_kamar', 'kamar.id_kamar = book_kamar.id_kamar');
            $this->db->where('nama_kamar', $model);
            $query = $this->db->get();
            return $query->result_array();  
        }

        public function wherebooking2($model,$no){
            
            $this->db->select('book_kamar.nomor_kamar as "nomor_kamar",book_kamar.tanggal_book as "tanggal_book", book_kamar.tanggal_out as "tanggal_out"');
            $this->db->from('kamar');
            $this->db->join('book_kamar', 'kamar.id_kamar = book_kamar.id_kamar');
            $this->db->where('nama_kamar', $model);
            $this->db->where('book_kamar.nomor_kamar', $no);
            $query = $this->db->get();
            return $query->result_array();  
        }

        public function reqlistuser($id){
            
            $this->db->select('kamar.nama_kamar as "nama_kamar", kamar.gambar_kamar as "gambar_kamar", book_kamar.tanggal_book as "tanggal_book", book_kamar.tanggal_out as "tanggal_out", book_kamar.nomor_kamar as "nomor_kamar", book_kamar.status as "status"');
            $this->db->from('book_kamar');
            $this->db->join('user', 'user.id_user= book_kamar.id_user');
            $this->db->join('kamar', 'kamar.id_kamar= book_kamar.id_kamar');
            $this->db->where('book_kamar.id_user', $id);
            $query = $this->db->get();
            return $query->result_array();  
        }
       
        public function update($id, $value){
            $this->db->where('id_kamar', $id);
            $this->db->update('kamar', $value);

            if($this->db->trans_status() === FALSE)
            {
                $this->db->trans_rollback();
                return FALSE;
            } else {
                return $this->db->affected_rows();
            }
        }

        public function detailsroom($model){
            $room = $this->db->get_where('kamar', ['nama_kamar' => $model])->row_array();
            return $room;
        }

        public function requestlist($booking){
            $this->db->insert('book_kamar', $booking);
            if($this->db->trans_status() === FALSE)
            {
                return false;
            } else {
                return true;
            }
        }

        public function tambah($values){
            
            $this->db->insert('kamar', $values);
                
            if($this->db->trans_status() === FALSE)
            {
                return false;
            } else {
                return true;
            }
        }

        public function cekapp($id, $status){
            if ($status == "approve") {
                $this->db->set('status', 1, FALSE);
                $this->db->where('id_book', $id);
                $this->db->update('book_kamar');
            } else if ($status == "reject") {
                $this->db->set('status', 2, FALSE);
                $this->db->where('id_book', $id);
                $this->db->update('book_kamar');
            }

            if($this->db->trans_status() === FALSE)
            {
                return $this->db->affected_rows();
            } else {
                return $this->db->affected_rows();
            }
        }
    }
?>