<?php
class Login_model extends CI_Model
{

<<<<<<< HEAD
  function cek_admin($username, $password)
  {
    $query = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password=MD5('$password') LIMIT 1");
    return $query;
  }

  function cek_dosen($username, $password)
  {
    $query = $this->db->query("SELECT * FROM dosen WHERE NIP='$username' AND password=MD5('$password') LIMIT 1");
    return $query;
  }

  function cek_mhs($username, $password)
  {
    $query = $this->db->query("SELECT * FROM mahasiswa WHERE NIM='$username' AND password=MD5('$password') LIMIT 1");
=======
  function cek_admin ($username,$password) {
    $query = $this->db->query("SELECT * FROM admin WHERE email='$username' AND password=MD5('$password') LIMIT 1");
    return $query;
  }

  function cek_dosen ($username,$password) {
    $query = $this->db->query("SELECT * FROM dosen WHERE Email='$username' AND password=MD5('$password') LIMIT 1");
    return $query;
  }

  function cek_mhs ($username,$password) {
    $query = $this->db->query("SELECT * FROM mahasiswa WHERE Email='$username' AND password=MD5('$password') LIMIT 1");
>>>>>>> master
    return $query;
  }
}
