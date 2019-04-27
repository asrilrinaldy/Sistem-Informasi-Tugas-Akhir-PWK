<!DOCTYPE html>
<html>
  <head>
    <title>Masuk</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
 
 
  </head>
  <body>
      <div class="container">
        <div class="row">
          <h1>Halo!!! <?php echo $this->session->userdata('ses_nama');?></h1>
          <br><br>
          <h2><?php echo $this->session->userdata('akses');?></h2>
          <?php if($this->session->userdata('akses')=="Admin") : ?>
            <br><br>
            <a href="<?php echo base_url().'referensi'?>">Referensi</a>
          <?php endif; ?>
          <?php if($this->session->userdata('akses')=="Mahasiswa") : ?>
            <br><br>
            <a href="<?php echo base_url().'referensi/lihat_referensi'?>">Referensi</a>
          <?php endif; ?>
          <br><br>
          <a href="<?php echo base_url().'index.php/login/logout'?>">Sign Out</a>
        </div>
      </div>
 
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
</html>
