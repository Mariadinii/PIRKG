<?php 
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($pk = FALSE){
			if ($pk === FALSE) {
				$query = $this->db->get('test');
				return $query->result_array();
			}

			//'test' adalah table yang dipiilih
			$query = $this->db->get_where('test', array('pk' => $pk));
			return $query->row_array();
		}
	}
 ?>