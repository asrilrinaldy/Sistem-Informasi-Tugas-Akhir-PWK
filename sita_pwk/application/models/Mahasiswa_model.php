<?php
class Mahasiswa_model extends CI_Model
{

  function mahasiswa_list()
  {
    $hasil = $this->db->get('mahasiswa');
    return $hasil->result();
  }

  function get_mhs_nim($nim)
  {
    $query = $this->db->get_where('mahasiswa', array('NIM' => $nim));
    return $query;
  }

  function save_mahasiswa()
  {
    $data = array(
      'NIM'   => $this->input->post('nim'),
      'Nama'   => $this->input->post('nama'),
      'password' => MD5($this->input->post('password')),
      'Email' => $this->input->post('email'),
      'No_telepon' => $this->input->post('no_telepon'),
      'Alamat' => $this->input->post('alamat')
    );
    $result = $this->db->insert('mahasiswa', $data);
    return $result;
  }

  function update_mahasiswa()
  {
    $nim = $this->input->post('nim');
    $nama = $this->input->post('nama');
    $password = MD5($this->input->post('password'));
    $email = $this->input->post('email');
    $no_telepon = $this->input->post('no_telepon');
    $alamat = $this->input->post('alamat');

    $this->db->set('Nama', $nama);
    $this->db->set('password', $password);
    $this->db->set('Email', $email);
    $this->db->set('No_telepon', $no_telepon);
    $this->db->set('Alamat', $alamat);
    $this->db->where('NIM', $nim);
    $result = $this->db->update('mahasiswa');
    return $result;
  }

  function delete_mahasiswa()
  {
    $nim = $this->input->post('nim');
    $this->db->where('NIM', $nim);
    $result = $this->db->delete('mahasiswa');
    return $result;
  }

  function update_profile($nim, $nama, $email, $no_telepon, $alamat, $foto)
  {
    $this->db->set('Nama', $nama);
    $this->db->set('Email', $email);
    $this->db->set('No_telepon', $no_telepon);
    $this->db->set('Alamat', $alamat);
    $this->db->set('foto', $foto);

    $this->db->where('NIM', $nim);
    $this->db->update('mahasiswa');
    return $this->db->affected_rows();
  }

  function update_pembimbing()
  {
    $nim = $this->input->post('nim');
    $dosen1 = $this->input->post('dosen1');
    $dosen2 = $this->input->post('dosen2');

    $this->db->set('Pembimbing', $dosen1);
    $this->db->set('Pembimbing2', $dosen2);
    $this->db->where('NIM', $nim);
    $result = $this->db->update('mahasiswa');
    return $result;
  }

  function delete_pembimbing()
  {
    $nim = $this->input->post('nim');
    $belum = "Belum Dipilih";
    $this->db->set('Pembimbing', $belum);
    $this->db->set('Pembimbing2', $belum);
    $this->db->where('NIM', $nim);
    $result = $this->db->update('mahasiswa');
    return $result;
  }

  //logbook
  function logbook_mahasiswa_list()
  {
    $hasil = $this->db->get('logbook');
    return $hasil->result();
  }

  function logbook_mahasiswa_list_nama()
  {
    $query = $this->db->query("SELECT logbook.*, mahasiswa.Nama AS nama_mahasiswa, dosen.Nama AS nama_dosen FROM logbook INNER JOIN mahasiswa ON logbook.NIM=mahasiswa.NIM INNER JOIN dosen ON logbook.NIP=dosen.NIP");
    return $query->result();
  }

  public function get_logbook_mahasiswa_by_Id_Log($id_log)
  {
    $query = $this->db->get_where('logbook', array('Id_Log' => $id_log));
    return $query;
  }


  function save_logbook_mahasiswa()
  {
    $data = array(
      'Tanggal'     => $this->input->post('tanggal'),
      'Deskripsi'   => $this->input->post('deskripsi'),
      'Keterangan'  => $this->input->post('keterangan'),
      'NIP'         => $this->input->post('dosen'),
      'NIM'         => $this->session->userdata(ses_id)
    );

    $result = $this->db->insert('logbook', $data);
    return $result;
  }

  function update_logbook_mahasiswa()
  {
    $id_log           = $this->input->post('id_log');
    $tanggal          = $this->input->post('tanggal');
    $deskripsi        = $this->input->post('deskripsi');
    $keterangan       = $this->input->post('keterangan');
    $nama_pembimbing  = $this->input->post('nama_pembimbing');

    $this->db->set('Tanggal', $tanggal);
    $this->db->set('Deskripsi', $deskripsi);
    $this->db->set('Keterangan', $keterangan);
    $this->db->set('NIP', $nama_pembimbing);
    $this->db->where('Id_Log', $id_log);
    $result = $this->db->update('logbook');
    return $result;
  }

  function delete_logbook_mahasiswa()
  {
    $id_log = $this->input->post('id_log');
    $this->db->where('Id_Log', $id_log);
    $result = $this->db->delete('logbook');
    return $result;
  }

  function konsul_list($nim){
    $hasil = $this->db->get_where('konsultasi', array('NIM' => $nim));
    return $hasil->result();
  }

  function tambah_konsul($nim,$nip,$tanggal,$judul_ta,$file,$keterangan){
    $data = array(
      'NIM' 	=> $nim,
      'NIP' 	=> $nip,
      'Tanggal' => $tanggal,
      'Judul_TA' => $judul_ta,
      'file' => $file,
      'Keterangan' => $keterangan
    );
    $result = $this->db->insert('konsultasi',$data);
    return $result;
  }

}
