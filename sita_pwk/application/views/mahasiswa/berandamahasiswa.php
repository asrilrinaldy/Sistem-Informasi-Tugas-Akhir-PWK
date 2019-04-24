<!-- partial -->

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">


    </div>

   <!-- tabel mahasiswa -->

    <div class="row">
      <div class="col-lg-12 grid-margin">

        <div class="card">

          <div class="card-body">


            <span class="judul-title">
            <i class="menu-icon mdi mdi-paperclip"></i>
              DATA MAHASISWA
            </span><br></br>

            <div class="biodata-mahasiswa">
              <pre>
  Nama            : <?php echo $this->session->userdata('ses_nama')?>

  NIM             : <?php echo $this->session->userdata('ses_id')?>

  Program Studi   : <?php echo $this->session->userdata('')?>

  Dosen TA 1      : <?php echo $this->session->userdata('')?>

  Dosen TA 2      : <?php echo $this->session->userdata('')?>
              </pre>

            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
<!-- main-panel ends -->
