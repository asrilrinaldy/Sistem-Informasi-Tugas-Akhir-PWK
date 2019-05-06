<!-- partial -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css' ?>">

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-4  grid-margin">
        <?php if ($mahasiswa['foto']!=null){?>
        <img class="img-xs2 rounded-circle2" src="<?php base_url() ?>assets/upload/foto/mahasiswa/<?php echo $mahasiswa['foto']; ?>" alt="Profile image">
        <?php }else{?>
          <img class="img-xs2 rounded-circle2" src="<?php echo base_url()?>images/faces/usertes.jpg" alt="Profile image">
        <?php } ?>
        <br></br>
        <div class="card card-statistics">

          <div class="card-body">

            <h4>
              <i class="menu-icon mdi mdi-paperclip"></i>DATA MAHASISWA
            </h4>

            <div>
              <pre class="biodata-mahasiswa">
  Judul TA        : <?php echo $mahasiswa['Judul_TA'] ?>

  Nama            : <?php echo $mahasiswa['Nama'] ?>

  NIM             : <?php echo $mahasiswa['NIM'] ?>

  Email           : <?php echo $mahasiswa['Email'] ?>

  No. Telp.       : <?php echo $mahasiswa['No_telepon'] ?>

            </pre>

            </div>
            <input type="hidden" name="nim" id="nim" value="<?php echo $mahasiswa['NIM'] ?>">
          </div>
        </div>
      </div>

      <div class="col-lg-8 grid-margin">
        <div class="card card-statistics">
          <div class="card-body">
            <i class="menu-icon mdi mdi-paperclip"></i>
            <span class="judul-title">
              Logbook Mahasiswa
            </span><br></br>

            <div class="table-responsive">
              <table id="tabelLogbook" class="table table-bordered">
                <thead class="nama-kolom">
                  <tr>
                    <th>
                      No
                    </th>
                    <th>
                      Tanggal
                    </th>
                    <th>
                      Deskripsi
                    </th>
                    <th>
                      Keterangan
                    </th>

                  </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
              </table>
            </div>
            <br></br>

            <div class="row">



            </div>
          </div>
        </div>


      </div>
    </div>

  </div>
  <!-- main-panel ends -->
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>

  <script>
    $(document).ready(function() {
      show_jadwal();
      $('#tabelLogbook').dataTable();

      function show_jadwal() {
        var nim = $("#nim").val();
        $.ajax({
          type: 'ajax',
          url: '<?php echo site_url("dosen/logbookdosen/logbook_data_mhs?nim='+ nim +'") ?>',
          async: false,
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            for (i = 0; i < data.length; i++) {
              var no = i + 1;
              html += '<tr>' +
                '<td>' + no + '</td>' +
                '<td>' + data[i].Tanggal + '</td>' +
                '<td>' + data[i].Deskripsi + '</td>' +
                '<td>' + data[i].Keterangan + '</td>' +
                '</tr>';
            }
            $('#show_data').html(html);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
          }
        });
      }

    });
  </script>
