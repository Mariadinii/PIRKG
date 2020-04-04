<?php 
	class Users extends CI_Controller{
		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('nama', 'Nama', 'required|callback_check_nama_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('no_tlp', 'No Telepon', 'required');

			if ($this->form_validation->run() === false) {
				$this->load->view('users/register', $data);
			}else{
				//Encrypt Password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				//Set message 
				$this->session->set_flashdata('user_registered', 'Anda sekarang sudah mendaftar dan bisa masuk');

				redirect('');
			}
		}

		//Check if email exist
		function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'Email sudah terdaftarkan. Mohon mendaftarkan email yang berbeda');
			if ($this->user_model->check_email_exists($email)) {
				return true;
			}else{
				return false;
			}
		}

		//Check if nama exist
		function check_nama_exists($nama){
			$this->form_validation->set_message('check_nama_exists', 'Nama sudah terdaftarkan. Mohon mendaftarkan Nama yang berbeda');
			if ($this->user_model->check_nama_exists($nama)) {
				return true;
			}else{
				return false;
			}
		}
	}
 ?>