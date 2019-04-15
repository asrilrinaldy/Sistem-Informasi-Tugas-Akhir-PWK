<?php
class Register_model extends CI_Model
{
  // declare private variable
  private $_NIM;
  private $_Nama;
  private $_Email;
  private $_Password;
  private $_No_telepon;
  private $_Alamat;
  private $_Tempat_lahir;
  private $_Tanggal_lahir;

  public function setNIM($NIM)
  {
    $this->_NIM = $NIM;
  }
  public function setNama($Nama)
  {
    $this->_Nama = $Nama;
  }
  public function setEmail($Email)
  {
    $this->_Email = $Email;
  }
  public function setNo_telepon($No_telepon)
  {
    $this->_No_telepon = $No_telepon;
  }
  public function setAlamat($Alamat)
  {
    $this->_Alamat = $Alamat;
  }
  public function setPassword($Password)
  {
    $this->_Password = $Password;
  }
  public function setTempat_lahir($Tempat_lahir)
  {
    $this->_Tempat_lahir = $Tempat_lahir;
  }
  public function setTanggal_lahir($Tanggal_lahir)
  {
    $this->_Tanggal_lahir = $Tanggal_lahir;
  }
  public function createMahasiswa()
  {
    $data = array(
      'NIM'           => $this->_NIM,
      'Nama'          => $this->_Nama,
      'Email'         => $this->_Email,
      'Password'      => $this->_Password,
      'No_telepon'    => $this->_No_telepon,
      'Alamat'        => $this->_Alamat,
      'Tempat_lahir'  => $this->_Tempat_lahir,
      'Tanggal_lahir' => $this->_Tanggal_lahir,
    );
    $this->db->insert('mahasiswa', $data);
    return $this->db->insert_id();
  }
}
