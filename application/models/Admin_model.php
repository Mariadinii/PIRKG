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

		public function reservasi($id_pengguna, $konfirmasi, $keterangan_reservasi){
			//Reservation data array
			$dataa = array(
				'nama' => $this->input->post('nama'),
				'umur' => $this->input->post('umur'),
				'id_pengguna' => $id_pengguna,
				'konfirmasi' => $konfirmasi,
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'ket_reservasi' => $this->input->post('ket_reservasi'),
				'waktu_reservasi' => $this->input->post('waktu_reservasi'),
				'keterangan_reservasi' => $keterangan_reservasi
			);

			//Insert User
			return $this->db->insert('reservasi', $dataa);
		}
	}
 ?>