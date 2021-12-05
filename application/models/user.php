<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class User extends CI_Model{

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

        public function userlist()
        {
            $sql = ('SELECT id_user, nama_depan, nama_belakang, email, gambar from user');

            $query = $this->db->query($sql);
            return $query->result_array();
        }

        

        public function deletelist($id)
        {
            $this->db->where('id_user', $id);
            $this->db->delete('user');

            if($this->db->trans_status() === FALSE)
                {
                    return false;
                } else {
                    return true;
                }
        }

        public function update($id, $value){
            $this->db->where('id_user', $id);
            $this->db->update('user', $value);

            if($this->db->trans_status() === FALSE)
            {
                return false;
            } else {
                return true;
            }
        }

        

        public function ShowDetail($id){
            $data = $this->db->get_where('user', ['id_user' => $id])->row_array();
            return $data;
        }
    }
?>