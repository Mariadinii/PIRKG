<?php 
	class Posts extends CI_Controller{
		public function index(){

			//Title page capital letter to begin with 
			$data['title'] = 'Artikel Seputar Gigi ';

			$data['posts'] = $this->post_model->get_posts();

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($id_artikel = NULL){
			$data['post'] = $this->post_model->get_posts($id_artikel);

			if (empty($data['post'])) {
				show_404();
			}

			$data['title'] = $data['post']['judul'];

			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		} 

		public function create(){
			$data['title'] = 'Membuat Artikel';

			$this->form_validation->set_rules('judul', 'Judul Artikel', 'required');
			$this->form_validation->set_rules('isi', 'Isi Artikel', 'required');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('posts/create', $data);
				$this->load->view('templates/footer');
			}else{
				$this->post_model->create_post();

				redirect('posts');
			}	
		}

		public function delete($id_artikel){
			$this->post_model->delete_post($id_artikel);
			redirect('posts');
		}
	}
 ?>