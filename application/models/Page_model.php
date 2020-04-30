<?php 
	class Page_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($id_artikel = FALSE){
			if ($id_artikel === FALSE) {
				$this->db->order_by('id_artikel', 'DESC');
				$query = $this->db->get('artikel');
				return $query->result_array();
			}

			//'test' adalah table yang dipiilih
			$query = $this->db->get_where('artikel', array('id_artikel' => $id_artikel));
			return $query->row_array();
		}
	}
 ?>