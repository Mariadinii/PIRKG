<?php 
	class Admins extends CI_Controller{
		
		public function reservation(){
			//Title page capital letter to begin with 
			$data['title'] = 'Reservasi Gigi ';

			$data['admins'] = $this->admin_model->get_reservations();

			$this->load->view('templates/header');
			$this->load->view('admins/reservation', $data);
			$this->load->view('templates/footer');
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