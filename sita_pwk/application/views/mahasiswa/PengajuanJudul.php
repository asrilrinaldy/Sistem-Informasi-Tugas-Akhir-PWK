<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-4  grid-margin">
        <div class="card card-statistics">
          <div class="card-body">
           <h5>
              <i class="menu-icon mdi mdi-paperclip"></i>Informasi Pengajuan
            </h5>
            <div class="biodata-dosen">
              <br><b>Judul TA : </b></br>
              <br><b>Status :</b></br>
            </div>
          </div>
        </div>


        <br></br>
       
      </div>



      <div class="col-lg-8 grid-margin">
        <div class="card card-statistics">
          <div class="card-body">
            <h5>
              <i class="menu-icon mdi mdi-paperclip"></i>Pengajuan Judul Tugas Akhir
            </h5>
            <form id="submit" >
              <div class="biodata-dosen">
                 <label>
                  <br>
                    Keterangan
                  </br>
                  </label>
                <textarea name="keterangan" id="keterangan" class="form-control" rows="8" required></textarea><br>
              
                <br>
               
               
               
                <center>
                    <input class="btn btn-primary" type="submit" value="Kirim" ></input>
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
