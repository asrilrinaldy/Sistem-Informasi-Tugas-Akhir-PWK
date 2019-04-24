<?php
class Admin_model extends CI_Model {

  function admin_list(){
		$hasil=$this->db->get('admin');
		return $hasil->result();
	}

	function save_admin(){
      $data = array(
          'id_admin' 	=> $this->input->post('id_admin'),
          'nama' 	=> $this->input->post('nama'),
          'username' 	=> $this->input->post('username'),
          'password' => MD5($this->input->post('password')),
          'email' => $this->input->post('email'),
          'no_telp' => $this->input->post('no_telepon'),
          'alamat' => $this->input->post('alamat'),
        );
      $result=$this->db->insert('admin',$data);
      return $result;
	}

	function update_admin(){
    $id_admin=$this->input->post('id_admin');
		$nama=$this->input->post('nama');
    $username=$this->input->post('username');
		$password=MD5($this->input->post('password'));
    $email=$this->input->post('email');
    $no_telepon=$this->input->post('no_telepon');
    $alamat=$this->input->post('alamat');

		$this->db->set('nama', $nama);
    $this->db->set('username', $username);
		$this->db->set('password', $password);
    $this->db->set('email', $email);
    $this->db->set('no_telp', $no_telepon);
    $this->db->set('alamat', $alamat);
    $this->db->where('id_admin', $id_admin);
		$result=$this->db->update('admin');
		return $result;
	}

	function delete_admin(){
		$id_admin=$this->input->post('id_admin');
		$this->db->where('id_admin', $id_admin);
		$result=$this->db->delete('admin');
		return $result;
	}

  function update_profile($id_admin,$nama,$email,$no_telepon,$alamat,$foto) {
    $this->db->set('nama', $nama);
    $this->db->set('email', $email);
    $this->db->set('no_telp', $no_telepon);
    $this->db->set('alamat', $alamat);
    $this->db->set('foto', $foto);
    $this->db->where('id_admin', $id_admin);
		$this->db->update('admin');
		return $this->db->affected_rows();
  }

  function up_foto($id_admin,$foto){
    $this->db->set('foto', $foto);
    $this->db->where('id_admin', $id_admin);
    $this->db->update('admin');
    return $this->db->affected_rows();
  }

  function cek_pw_lama($pw) {
    $pw = MD5($pw);
    $query = $this->db->get_where('admin', array('password' => $pw));
    return $query;
  }

  function updatePassword($new_password, $id_admin){
    $this->db->set('password', MD5($new_password));
    $this->db->where('id_admin', $id_admin);
    $result=$this->db->update('admin');
    return $result;
  }

  function cek_id($id) {
    $query = $this->db->get_where('admin', array('id_admin' => $id));
    return $query;
  }



}
