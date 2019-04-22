<?php
class Mahasiswa_model extends CI_Model {

  function mahasiswa_list(){
		$hasil=$this->db->get('mahasiswa');
		return $hasil->result();
	}

  function get_mhs_nim($nim){
      $query = $this->db->get_where('mahasiswa', array('NIM' => $nim));
      return $query;
  }

	function save_mahasiswa(){
		$data = array(
				'NIM' 	=> $this->input->post('nim'),
				'Nama' 	=> $this->input->post('nama'),
				'password' => MD5($this->input->post('password')),
        'Email' => $this->input->post('email'),
        'No_telepon' => $this->input->post('no_telepon'),
        'Alamat' => $this->input->post('alamat'),
        'Tempat_Lahir' => $this->input->post('tempat_lahir'),
        'Tanggal_Lahir' => $this->input->post('tanggal_lahir')
			);
		$result=$this->db->insert('mahasiswa',$data);
		return $result;
	}

	function update_mahasiswa(){
    $nim=$this->input->post('nim');
		$nama=$this->input->post('nama');
		$password=MD5($this->input->post('password'));
    $email=$this->input->post('email');
    $no_telepon=$this->input->post('no_telepon');
    $alamat=$this->input->post('alamat');
    $tempat_lahir=$this->input->post('tempat_lahir');
    $tanggal_lahir=$this->input->post('tanggal_lahir');

		$this->db->set('Nama', $nama);
		$this->db->set('password', $password);
    $this->db->set('Email', $email);
    $this->db->set('No_telepon', $no_telepon);
    $this->db->set('Alamat', $alamat);
    $this->db->set('Tempat_lahir', $tempat_lahir);
    $this->db->set('Tanggal_lahir', $tanggal_lahir);
    $this->db->where('NIM', $nim);
		$result=$this->db->update('mahasiswa');
		return $result;
	}

	function delete_mahasiswa(){
		$nim=$this->input->post('nim');
		$this->db->where('NIM', $nim);
		$result=$this->db->delete('mahasiswa');
		return $result;
	}



}
