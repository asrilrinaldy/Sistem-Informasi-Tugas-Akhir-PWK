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
              <br>Nama          :   <?php echo $this->session->userdata('ses_nama')?></br>
              <br>NIM           :   <?php echo $this->session->userdata('ses_id')?></br>
              <br>Program Studi :   Perencanaan Wilayah dan Kota</br>
              <br>Dosen TA 1</br>
              <br>Dosen TA 2</br>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
<!-- main-panel ends -->
