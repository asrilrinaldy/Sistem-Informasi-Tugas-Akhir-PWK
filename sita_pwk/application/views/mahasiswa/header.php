<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <base href="<?php echo $this->config->base_url(); ?>" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Informasi Tugas Akhir PWK</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php base_url() ?>assets/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/css/vendor.bundle.addons.css">

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php base_url() ?>css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php base_url() ?>images/logoitera.png" />
</head>

<div class="atas">
<div class="row">

<div class="col-md-2">
  <a>
    <img src="<?php base_url() ?>images/logoitera.png" >
  </a>
</div>
<div class="col-md-6">
    <h1> Sistem Informasi Tugas Akhir
    <br>Program Studi Perencanaan Wilayah dan Kota</br></h1>
    <h4>" Institut Teknologi Sumatera "</h4>
</div>
</div>
</div>

<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 ">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">

        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text"><?php echo $this->session->userdata('ses_nama')?></span>
              <?php if($this->session->userdata('ses_foto')!= null){?>
              <img class="img-xs rounded-circle" src="<?php echo base_url()?>assets/upload/foto/mahasiswa/<?php echo $this->session->userdata('ses_foto')  ?>" alt="Profile image">
              <?php }else{?>
                <img class="img-xs rounded-circle" src="<?php echo base_url()?>assets/profil/default-profile.png"alt="User profile picture">
                <?php } ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <!-- <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div> -->
              </a>
              <!-- <a class="dropdown-item mt-2">
                <i class="menu-icon mdi mdi-account-settings-variant"></i>
                Manage Accounts
              </a>
              <a class="dropdown-item">
              <i class="menu-icon mdi mdi-account-edit"></i>
                Ubah Password
              </a> -->
              <a class="dropdown-item" href="<?php echo base_url().'profile/mahasiswa'?>">
              <i class="menu-icon mdi mdi-account"></i>
                Profil
              </a>
              <a class="dropdown-item" href="<?php echo base_url().'index.php/login/logout'?>">
              <i class="menu-icon mdi mdi-logout"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">

          </li>
          <li class="nav-item">
            <a class="nav-link" href="mahasiswa/berandamahasiswa">
              <i class="menu-icon mdi mdi-signal"></i>
              <span class="menu-title">Beranda</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="mahasiswa/informasidosen">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Informasi Dosen</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="mahasiswa/PengajuanJudul">
              <i class="menu-icon mdi mdi-tumblr-reblog"></i>
              <span class="menu-title">Judul TA</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="mahasiswa/konsultasimahasiswa">
              <i class="menu-icon mdi mdi-message-text-outline"></i>
              <span class="menu-title">Konsultasi</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="mahasiswa/referensijudul">
              <i class="menu-icon mdi mdi-book-open"></i>
              <span class="menu-title">Referensi Judul</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="mahasiswa/LogBookMahasiswa">
              <i class="menu-icon mdi mdi-tumblr-reblog"></i>
              <span class="menu-title">LogBook Mahasiswa</span>
            </a>
          </li>






        </ul>
      </nav>
      <!-- main-panel ends -->

      <!-- disini konten -->
    <?php $this->load->view($konten); ?>
    <!-- /.konten -->

    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a>Kelompok 6</a> Proyek Perangkat Lunak RA</span>
          </div>
        </footer>

        <!-- partial -->

  <!-- plugins:js -->
  <script src="<?php base_url() ?>assets/js/vendor.bundle.base.js"></script>
  <script src="<?php base_url() ?>assets/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php base_url() ?>js/off-canvas.js"></script>
  <script src="<?php base_url() ?>js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php base_url() ?>js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
