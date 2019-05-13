<!-- partial -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css' ?>">

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-4  grid-margin">
        <?php if ($dosen['foto']!=null){?>
          <img class="img-xs2 rounded-circle2" src="<?php base_url() ?>assets/upload/foto/dosen/<?php echo $dosen['foto']; ?>" alt="Profile image">
        <?php }else{?>
          <img class="img-xs2 rounded-circle2" src="<?php echo base_url()?>images/faces/usertes.jpg" alt="Profile image">
        <?php } ?>
        <br></br>
        <div class="card card-statistics">

          <div class="card-body">

            <h4>
              <i class="menu-icon mdi mdi-paperclip"></i>DATA DOSEN
            </h4>

            <div>
              <pre class="biodata-mahasiswa">
  Nama            : <?php echo $dosen['Nama'] ?>

  NIP             : <?php echo $dosen['NIP'] ?>

  Email           : <?php echo $dosen['Email'] ?>

  No. Telp.       : <?php echo $dosen['No_telepon'] ?>

            </pre>

            </div>
            <input type="hidden" name="nip_dosen" id="nip_dosen" value="<?php echo $dosen['NIP'] ?>">
          </div>
        </div>
      </div>

      <div class="col-lg-8 grid-margin">
        <div class="card card-statistics">
          <div class="card-body">
            <i class="menu-icon mdi mdi-paperclip"></i>
            <span class="judul-title">
              JADWAL DOSEN
            </span><br></br>

            <div class="table-responsive">
              <table id="tabelJWL" class="table table-bordered">
                <thead class="nama-kolom">
                  <tr>
                    <th>
                      No
                    </th>
                    <th>
                      Tempat
                    </th>
                    <th>
                      Tanggal
                    </th>
                    <th>
                      Jam
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
      $('#tabelJWL').dataTable();

      function show_jadwal() {
        var nip_dosen = $("#nip_dosen").val();
        $.ajax({
          type: 'ajax',
          url: '<?php echo site_url("mahasiswa/informasidosen2/jadwal_data_mhs?nip='+ nip_dosen +'") ?>',
          async: false,
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            for (i = 0; i < data.length; i++) {
              var no = i + 1;
              html += '<tr>' +
                '<td>' + no + '</td>' +
                '<td>' + data[i].Gedung + '</td>' +
                '<td>' + data[i].Tanggal + '</td>' +
                '<td>' + data[i].Jam + '</td>' +
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
