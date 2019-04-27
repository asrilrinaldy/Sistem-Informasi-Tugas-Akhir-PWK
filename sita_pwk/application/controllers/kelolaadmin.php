<?php
class Kelolaadmin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}
	function index(){
		$isi['konten'] = 'admin/kelolaadmin';
		$this->load->view('admin/template', $isi);
	}

	function admin_data(){
		$data=$this->admin_model->admin_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->admin_model->save_admin();
		echo json_encode($data);
	}

	function update(){
		$data=$this->admin_model->update_admin();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->admin_model->delete_admin();
		echo json_encode($data);
	}

}
