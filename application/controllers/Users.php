<?php 
	class Users extends CI_Controller{
		//Register User
		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('nama', 'Nama', 'required|callback_check_nama_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('no_tlp', 'No Telepon', 'required');

			if ($this->form_validation->run() === FALSE) {
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

		//Log in User
		public function login(){
			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('users/login', $data);
			}else{
				//Get Nama
				$nama = $this->input->post('nama');
				//Get and encypt password
				$password = md5($this->input->post('password'));

				//Login User
				$id_pengguna = $this->user_model->login($nama, $password);

				if ($id_pengguna) {
					//Create Session
					$user_data = array(
						'id_pengguna' => $id_pengguna,
						'nama' => $nama,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					//Set message 
					$this->session->set_flashdata('user_loggedin', 'Anda telah Masuk/Login');

					redirect('');
				}else{
					//Set message 
					$this->session->set_flashdata('login_failed', 'Masuk/Login Gagal dikarenakan Nama/Password salah');

					redirect('users/login');
				}
			}
		}

		//User Profile
		public function profile(){
			$data['title'] = 'User Profile';

			$this->load->view('templates/header');
			$this->load->view('users/profile', $data);
			$this->load->view('templates/footer');
		}

		//Log User Out
		public function logout(){
			//Unset User Data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('id_pengguna');
			$this->session->unset_userdata('nama');

			//Set message 
			$this->session->set_flashdata('user_loggedout', 'Anda telah Keluar/Logout');

			redirect('');
		}

		//Check if email exist
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'Email sudah terdaftarkan. Mohon mendaftarkan email yang berbeda');
			if ($this->user_model->check_email_exists($email)) {
				return true;
			}else{
				return false;
			}
		}

		//Check if nama exist
		public function check_nama_exists($nama){
			$this->form_validation->set_message('check_nama_exists', 'Nama sudah terdaftarkan. Mohon mendaftarkan Nama yang berbeda');
			if ($this->user_model->check_nama_exists($nama)) {
				return true;
			}else{
				return false;
			}
		}


	}
 ?>