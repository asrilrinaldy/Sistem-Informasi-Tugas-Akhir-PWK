<!-- partial -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css' ?>">
<div class="main-panel">
  <div class="content-wrapper">

    <!-- tabel referensi -->

    <div class="row">

      <div class="col-lg-12 grid-margin">

        <div class="card">
          <div class="card-body">

            <span class="judul-title">
              <i class="menu-icon mdi mdi-paperclip"></i>
              Logbook Mahasiswa
            </span><br></br>
            <div class="row">
              <div class="col-sm-6">
                <div class="jumlah-tampilan" id="kelas_length">Show
                  <label> <select name="kelas_length" aria-controls="kelas" class="form-control input-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                  </label> Entries
                </div>
              </div>
              <div class="col-sm-6">
                <div class="dataTables_filter"> Search
                  <label>
                    <input type="search" class="form-control input-sm" placeholder="" aria-controls="kelas">
                  </label>
                </div>
              </div>
            </div>


            <div class="table-responsive">
              <table id="tabelJWL" class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Keterangan</th>
                    <th>Nama Pembimbing</th>
                    <th style="text-align: right;">Aksi</th>
                  </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
              </table>
            </div>
            <div class="col-md-12">
              <div class="float-left"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus mdi mdi-plus-circle"></span>Tambah Aktivitas</a></div>
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- main-panel ends -->

  <!-- MODAL ADD -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
  <form>
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Aktivitas Baru</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Tanggal</label>
              <div class="col-md-10">
                <input type="date" name="Tanggal" id="Tanggal" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Deskripsi</label>
              <div class="col-md-10">
                <input type="text" name="Deskripsi" id="Deskripsi" class="form-control" placeholder="Deskripsi">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Keterangan</label>
              <div class="col-md-10">
                <input type="text" name="Keterangan" id="Keterangan" class="form-control" placeholder="Keterangan">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Dosen Pembimbing</label>
              <div class="col-md-10">
                <select class="form-control" name="dosen" id="dosen" required>
                  <option value="">No Selected</option>
                  <?php foreach ($dosen as $row) : ?>
                    <option value="<?= $row->NIP; ?>"><?= $row->Nama; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">NIP</label>
              <div class="col-md-10">
                <input type="text" name="nip" id="nip" class="form-control" disabled>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Nama</label>
              <div class="col-md-10">
                <input type="text" name="Nama" id="Nama" class="form-control" disabled>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!--END MODAL ADD-->

  <!-- MODAL EDIT -->
  <form>
    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Logbook</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id_logbook_edit" id="id_logbook_edit" class="form-control" disabled>

            <div class="form-group row">
              <label class="col-md-2 col-form-label">Tanggal</label>
              <div class="col-md-10">
                <input type="date" name="tanggal_edit" id="tanggal_edit" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Deskripsi</label>
              <div class="col-md-10">
                <input type="text" name="ruangan_edit" id="ruangan_edit" class="form-control" placeholder="Ruangan">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Keterangan</label>
              <div class="col-md-10">
                <input type=time name="Keterangan_edit" id="Keterangan_edit" class="form-control">
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!--END MODAL EDIT-->

  <!--MODAL DELETE-->
  <form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Logbook</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <strong>Delete ?</strong>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id_jadwal_delete" id="id_jadwal_delete" class="form-control">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Ya</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!--END MODAL DELETE-->

  <!-- Buat DataTable-->
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>
  <script>
    $(document).ready(function() {
      show_jadwal();
      $('#tabelJWL').dataTable();

      //function show all product
      function show_logbook() {
        $.ajax({
          type: 'ajax',
          url: '<?php echo site_url('kelolajadwalpenting/jadwal_data') ?>',
          async: false,
          dataType: 'json',
          success: function(data) {
            var html = '';
            var i;
            for (i = 0; i < data.length; i++) {
              html += '<tr>' +
                '<td>' + data[i].Id_Jadwal + '</td>' +
                '<td>' + data[i].NIM + '</td>' +
                '<td>' + data[i].Nama + '</td>' +
                '<td>' + data[i].Ruangan + '</td>' +
                '<td>' + data[i].Waktu + '</td>' +
                '<td>' + data[i].Tanggal + '</td>' +
                '<td style="text-align:right;">' +
                '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_jadwal="' + data[i].Id_Jadwal + '" data-ruangan="' + data[i].Ruangan + '" data-waktu="' + data[i].Waktu + '" data-tanggal="' + data[i].Tanggal + '">Edit</a>' + ' ' +
                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_jadwal="' + data[i].Id_Jadwal + '">Delete</a>' +
                '</td>' +
                '</tr>';
            }
            $('#show_data').html(html);
          }

        });
      }

      //Save product
      $('#btn_save').on('click', function() {
        var nim = $('#nim').val();
        var ruangan = $('#ruangan').val();
        var waktu = $('#waktu').val();
        var tanggal = $('#tanggal').val();

        $.ajax({
          type: "POST",
          url: "<?php echo site_url('kelolajadwalpenting/save') ?>",
          dataType: "JSON",
          data: {
            nim: nim,
            ruangan: ruangan,
            waktu: waktu,
            tanggal: tanggal
          },
          success: function(data) {
            $('[name="id_jadwal"]').val("");
            $('[name="nim"]').val("");
            $('[name="nama"]').val("");
            $('[name="ruangan"]').val("");
            $('[name="waktu"]').val("");
            $('[name="tanggal"]').val("");
            $('#Modal_Add').modal('hide');
            show_jadwal();
          }
        });
        return false;
      });

      //get data for update record
      $('#show_data').on('click', '.item_edit', function() {
        var id_jadwal = $(this).data('id_jadwal');
        var nim = $(this).data('nim');
        var ruangan = $(this).data('ruangan');
        var waktu = $(this).data('waktu');
        var tanggal = $(this).data('tanggal');

        $('#Modal_Edit').modal('show');
        $('[name="id_jadwal_edit"]').val(id_jadwal);
        $('[name="ruangan_edit"]').val(ruangan);
        $('[name="waktu_edit"]').val(waktu);
        $('[name="tanggal_edit"]').val(tanggal);
      });

      //update record to database
      $('#btn_update').on('click', function() {

        var id_jadwal = $('#id_jadwal_edit').val();
        var ruangan = $('#ruangan_edit').val();
        var waktu = $('#waktu_edit').val();
        var tanggal = $('#tanggal_edit').val();


        $.ajax({
          type: "POST",
          url: "<?php echo site_url('logbookmahasiswa/update') ?>",
          dataType: "JSON",
          data: {
            id_logbook: id_logbook,
            deskripsi: deskripsi,
            keterangan: keterangan,
            tanggal: tanggal
          },
          success: function(data) {
            $('[name="id_logbook_edit"]').val("");
            $('[name="ruangan_edit"]').val("");
            $('[name="waktu_edit"]').val("");
            $('[name="tanggal_edit"]').val("");
            $('#Modal_Edit').modal('hide');
            show_jadwal();
          }
        });
        return false;
      });

      //get data for delete record
      $('#show_data').on('click', '.item_delete', function() {
        var id_jadwal = $(this).data('id_jadwal');

        $('#Modal_Delete').modal('show');
        $('[name="id_logbook_delete"]').val(id_logbook);
      });

      //delete record to database
      $('#btn_delete').on('click', function() {
        var id_jadwal = $('#id_logbook_delete').val();
        $.ajax({
          type: "POST",
          url: "<?php echo site_url('logbookmahasiswa/delete') ?>",
          dataType: "JSON",
          data: {
            id_logbook: id_logbook
          },
          success: function(data) {
            $('[name="id_logbook_delete"]').val("");
            $('#Modal_Delete').modal('hide');
            show_logbook();
          }
        });
        return false;
      });

      $('#dosen').change(function() {

        $("#nip").val($("#dosen").val());
        $("#nama").val($("#dosen option:selected").text());

      });

    });
  </script>




  <!-- Buat DataTable-->

  <!-- tabel mahasiswa -->

  <div class="row">
    <div class="col-lg-12 grid-margin">
      <div class="card">
        <div class="card-body">

          <span class="judul-title">
            <i class="menu-icon mdi mdi-paperclip"></i>
            Logbook Mahasiswa
          </span><br></br>
          <div class="row">
            <div class="col-sm-6">
              <div class="jumlah-tampilan" id="kelas_length">Show
                <label> <select name="kelas_length" aria-controls="kelas" class="form-control input-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                </label> Entries
              </div>
            </div>
            <div class="col-sm-6">
              <div class="dataTables_filter"> Search
                <label>
                  <input type="search" class="form-control input-sm" placeholder="" aria-controls="kelas">
                </label>
              </div>
            </div>
          </div>


          <div class="table-responsive">
            <table class="table table-bordered">
              <tbody class="nama-kolom">
                <tr>
                  <th>
                    No
                  </th>
                  <th>
                    Hari,Tanggal
                  </th>
                  <th>
                    Deskripsi
                  </th>
                  <th>
                    Keterangan
                  </th>
                  <th>
                    Nama Pembimbing
                  </th>
                  <th>
                    Aksi
                  </th>

                </tr>
              </tbody>
              <tbody class="isi-tabel">
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Selasa,12 Maret 2019
                  </td>
                  <td>
                    Memperbaiki Bab 1
                  </td>
                  <td>
                    Revisi
                  </td>
                  <td>
                    Goldie Melinda Wijayanti S.T., M.T.
                  </td>
                  <td>
                    <center>
                      <a href="#" class="btn btn-warning btn-sm">Edit</a>
                      <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                    </center>
                  </td>
                </tr>


              </tbody>
            </table>
            <div class="btn">
              <a href="#" class="btn btn-success btn-sm">Tambah Aktivitas</a>
            </div>
          </div>

          <br></br>

          <div class="row">
            <div class="col-sm-5">
              <div class="dataTables_info" id="kelas_info" role="status" aria-live="polite">Showing 1 to 10 of 743 entries
              </div>
            </div>

            <div class="col-sm-7">

              <ul class="tombol-tabel">
                <a href="#" class="previous">&laquo; Previous</a>
                <a href="#" class="next">Next &raquo;</a>
              </ul>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- main-panel ends -->