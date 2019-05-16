<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">

      <div class="col-lg-8 grid-margin">
        <div class="card card-statistics">
          <div class="card-body">
            <h3>
              <i class="menu-icon mdi mdi-paperclip"></i>Judul Tugas Akhir
            </h3>
            <form id="submit" >
              <div class="biodata-dosen">
                 <label>
                  <br>
                    Judul Tugas Akhir
                  </br>
                  </label>
                <textarea name="keterangan" id="judul" class="form-control" rows="8" required></textarea><br>
                <br>
                <center>
                    <input class="btn btn-primary" id="btn_save" type="submit" value="Kirim" ></input>
                </center>
              </div>
            </form>

            <br></br>

          </div>
        </div>
      </div>


      </div>
    </div>

   <!-- tabel mahasiswa -->


    </div>
<!-- main-panel ends -->

<!-- Buat DataTable-->
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>
<script>
  $(document).ready(function() {

    $('#btn_save').on('click', function() {
      var judul = $('#judul').val();
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('mahasiswa/PengajuanJudul/set_judulta') ?>",
        dataType: "JSON",
        data: {
          judul: judul
        },
        success: function(data) {
          $('[name="judul"]').val("");
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });
    });


  });

  </script>
