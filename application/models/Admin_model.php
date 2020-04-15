<?php 
	class Admin_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_reservations($id_reservasi = FALSE){
			if ($id_reservasi === FALSE) {
				$query = $this->db->get('reservasi');
				return $query->result_array();
			}

			//'test' adalah table yang dipiilih
			$query = $this->db->get_where('reservasi', array('id_reservasi' => $id_reservasi));
			return $query->row_array();
		}
	}
 ?>