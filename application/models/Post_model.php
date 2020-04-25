<?php 
	class Post_model extends CI_Model{
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

		public function create_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi'),
				'slug' => $slug
			);

			return $this->db->insert('artikel', $data);
		}

		public function delete_post($id_artikel){
			$this->db->where('id_artikel', $id_artikel);
			$this->db->delete('artikel');
			return true;
		}
	}
 ?>