<?php
class Kelolamahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('mahasiswa_model');
		//Start Untuk mengecek kalau yg akses adalah admin
		if($this->session->userdata('akses') != "Admin") {
			if($this->session->userdata('akses') == "Dosen") {// Jika Dosen berusaha akses maka akan di redirect ke halaman dosen
				$url = base_url('dosen/berandadosen');
				redirect($url);
			}else{// Jika Mahasiswa berusaha akses maka akan di redirect ke halaman mahasiswa
				$url = base_url('mahasiswa/berandamahasiswa');
				redirect($url);
			}
		}
		//END Untuk mengecek kalau yg akses adalahadmin
	}
	function index(){
		$isi['konten'] = 'admin/Mahasiswa/kelolamahasiswa';
		$this->load->view('admin/template', $isi);
	}

	function mahasiswa_data(){
		$data=$this->mahasiswa_model->mahasiswa_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->mahasiswa_model->save_mahasiswa();
		echo json_encode($data);
	}

	function update(){
		$data=$this->mahasiswa_model->update_mahasiswa();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->mahasiswa_model->delete_mahasiswa();
		echo json_encode($data);
	}

	function tunjukpembimbing(){
		$this->load->model('dosen_model');
		$isi['mahasiswa'] = $this->mahasiswa_model->mahasiswa_list();
		$isi['dosen'] = $this->dosen_model->dosen_list();
		$isi['konten'] = 'admin/Mahasiswa/tunjukpembimbing';
		$this->load->view('admin/template', $isi);
	}

	function update_pembimbing(){
		$data=$this->mahasiswa_model->update_pembimbing();
		echo json_encode($data);
	}

	function delete_pembimbing(){
		$data=$this->mahasiswa_model->update_pembimbing();
		echo json_encode($data);
	}

}
