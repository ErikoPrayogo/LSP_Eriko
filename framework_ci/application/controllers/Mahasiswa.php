<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_mahasiswa');
	}

	public function index()
	{
        $model = $this->model_mahasiswa;
		$data = $model->get_data();
		
		$this->load->view('data_mahasiswa', $data);
	}

	public function add(){
        $this->load->view('input_mahasiswa');
    }

	public function create(){ 
		$model = $this->model_mahasiswa;
		$params = $this->input->post();
		$model->insert_data($params);
		redirect(base_url('/mahasiswa'));
	}

	public function delete(){ 
		$id = $this->uri->segment(3);
		$model = $this->model_mahasiswa->delete_data($id);
		redirect(base_url('/mahasiswa'));
	}
}
