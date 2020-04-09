<?php 
	class User_model extends CI_Model{
		public function register($enc_password){
			//User data array
			$data = array(
				'nama' => $this->input->post('nama'),
				'password' => $enc_password,
				'email' => $this->input->post('email'),
				'no_tlp' => $this->input->post('no_tlp')
			);

			//Insert User
			return $this->db->insert('pengguna', $data);
		}

		//Log User In
		public function login($nama, $password){
			//validate
			$this->db->where('nama', $nama);
			$this->db->where('password', $password);

			$result = $this->db->get('pengguna');

			if ($result->num_rows() == 1) {
				return $result->row(0)->id_pengguna;
			}else{
				return false;
			}
		}

		//Check Email exist
		public function check_email_exists($email){
			$query = $this->db->get_where('pengguna', array('email' => $email));
			if (empty($query->row_array())) {
				return true;
			}else{
				return false;
			}
		}

		//Check nama exist
		public function check_nama_exists($nama){
			$query = $this->db->get_where('pengguna', array('nama' => $nama));
			if (empty($query->row_array())) {
				return true;
			}else{
				return false;
			}
		}
		
	}
 ?>