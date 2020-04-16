<?php 
	class Admins extends CI_Controller{
		
		public function reservation(){
			//Title page capital letter to begin with 
			$data['title'] = 'Reservasi Gigi ';

			$data['admins'] = $this->admin_model->get_reservations();

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('umur', 'Umur', 'required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('ket_reservasi', 'Keterangan Reservasi', 'required');
			$this->form_validation->set_rules('waktu_reservasi', 'Waktu Reservasi', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('admins/reservation', $data);
				$this->load->view('templates/footer');
			}else{
				$id_pengguna = $this->session->userdata('id_pengguna');
				$konfirmasi = 'Menunggu Konfirmasi';
				$keterangan_reservasi = 'Belum Dilayani';

				$this->admin_model->reservasi($id_pengguna, $konfirmasi, $keterangan_reservasi);

				//Set message 
				$this->session->set_flashdata('user_reservation', 'Reservasi Anda sudah Kami terima. Mohon tunggu konfirmasi selanjutnya.');

				redirect('');
			}
		}

		// public function view($id_artikel = NULL){
		// 	$data['post'] = $this->post_model->get_posts($id_artikel);

		// 	if (empty($data['post'])) {
		// 		show_404();
		// 	}

		// 	$data['title'] = $data['post']['judul'];

		// 	$this->load->view('templates/header');
		// 	$this->load->view('posts/view', $data);
		// 	$this->load->view('templates/footer');
		// } 
	}
 ?>