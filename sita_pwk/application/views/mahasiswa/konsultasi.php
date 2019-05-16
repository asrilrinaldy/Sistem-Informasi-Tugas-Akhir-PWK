<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-4  grid-margin">
        <div class="card card-statistics">
          <div class="card-body">
          <h5>
            Judul TA : <?php echo $this->session->userdata('ses_judulta'); ?>
          </h5>
            <div class="biodata-dosen">
              <br><b>Pembimbing 1 : <?php echo $this->session->userdata("ses_pembimbing") ?></b></br>
              <br><b>Pembimbing 2 : <?php echo $this->session->userdata("ses_pembimbing2") ?></b></br>
            </div>
          </div>
        </div>

        <br></br>
        <div class="card card-statistics">
          <div class="card-body">

            <h5>
              <i class="menu-icon mdi mdi-paperclip"></i>KONSULTASI
            </h5>
            <form id="submit" >
              <div class="biodata-dosen">
                <br>Berkas File</br>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="file_konsul" id="file_konsul" enctype="multipart/form-data" required>
                  </div>
                </div>
                <br>
                <div>Pembimbing</br>
                  <label> <select name="dosen" id="dosen" aria-controls="kelas" class="form-control input-sm" required>
                    <option value="">No Selected</option>
                    <?php foreach($dosen as $row):?>
                    <option value="<?= $row->NIP;?>"><?= $row->Nama;?></option>
                    <?php endforeach;?>
                    </select>
                  </label>
                </div>
                <input type="hidden" id="nip" name="nip">
                <br>
                <label>Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control" rows="8" required></textarea><br>
                <center>
                    <input class="btn btn-primary" type="submit" value="Kirim" ></input>
                </center>
              </div>
            </form>
          </div>
        </div>
      </div>



      <div class="col-lg-8 grid-margin">
        <div class="card card-statistics">
          <div class="card-body">

            <span class="judul-title">
              <i class="menu-icon mdi mdi-paperclip"></i>
              Riwayat Konsultasi
            </span><br></br>
            <div class="table-responsive">
              <table id="tabelKonsul" class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>File</th>
                    <th>Keterangan</th>
                    <th>Komentar</th>
                  </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
              </table>

            </div>
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
    show_konsul();
    $('#tabelKonsul').dataTable();

    //function show all product
    function show_konsul() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo site_url('mahasiswa/konsultasimahasiswa/konsul_data') ?>',
        async: false,
        dataType: 'json',
        success: function(data) {
          var html = '';
          var i;
          for (i = 0; i < data.length; i++) {
            var no = i+1;
            html += '<tr>' +
              '<td>' + no + '</td>' +
              '<td>' + data[i].Tanggal + '</td>' +
              '<td>' + data[i].Status + '</td>' +
              '<td>' + data[i].File + '</td>' +
              '<td>' + data[i].Keterangan + '</td>' +
              '<td>' + data[i].Komentar + '</td>' +
              '</tr>';
          }
          $('#show_data').html(html);
        }

      });
    }

    $('#submit').submit(function(e){
          e.preventDefault();
          console.log(new FormData(this));
               $.ajax({
                   url:'<?php echo base_url();?>mahasiswa/konsultasimahasiswa/insert_data',
                   type:"post",
                   data:new FormData(this),
                   processData:false,
                   contentType:false,
                   cache:false,
                   async:false,
                  success: function(data){
                        show_konsul();
                 },
                 error: function(jqXHR, textStatus, errorThrown) {
                  console.log(textStatus, errorThrown);
                }
               });
          });

    $('#dosen').change(function() {

      $("#nip").val($("#dosen").val());
    });

  });

  </script>
