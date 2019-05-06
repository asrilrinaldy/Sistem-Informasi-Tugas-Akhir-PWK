<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css' ?>">

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">


    <!-- tabel mahasiswa -->

    <div class="row">
      <div class="col-lg-12 grid-margin">
        <div class="card">
          <div class="card-body">

            <span class="judul-title">
              <i class="menu-icon mdi mdi-paperclip"></i>
              INFORMASI DOSEN
            </span><br></br>

            <div class="table-responsive">
              <table id="tabelDosen" class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Jadwal</th>
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
  <!-- main-panel ends -->


  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>

  <script>
    $(document).ready(function() {
      show_dosen();
      $('#tabelDosen').dataTable();
      //function show all product
      function show_dosen() {
        $.ajax({
          type: 'ajax',
          url: '<?php echo site_url('mahasiswa/informasidosen/data_dosen') ?>',
          async: false,
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            for (i = 0; i < data.length; i++) {
              var nomor = i + 1;
              html += '<tr>' +
                '<td>' + nomor + '</td>' +
                '<td>' + data[i].Nama + '</td>' +
                '<td>' + data[i].NIP + '</td>' +
                '<td>' + data[i].No_telepon + '</td>' +
                '<td>' + data[i].Email + '</td>' +
                '<td style="text-align:right;">' +
                '<a href="mahasiswa/informasidosen2?nip=' + data[i].NIP + '" class="btn btn-info btn-sm item_edit" id="jadwal" data-nip="' + data[i].NIP + '" >Jadwal</a>' + ' ' +
                '</td>' +
                '</tr>';
            }
            $('#show_data').html(html);
          }
        });
      }

      $('#show_data').on('click', '.item_edit', function() {
        var nip = $(this).data('nip');

      });

    });
  </script>
