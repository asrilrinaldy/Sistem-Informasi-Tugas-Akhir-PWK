<!-- partial -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css' ?>">
<div class="main-panel">
  <div class="content-wrapper">
    <div id="header">
      <h1><b>
          <font color=#12688D> JADWAL PENTING MAHASISWA</font>
      </h1></b>
      <hr width=100% size=8 NOSHADE class="hr hr-prmary" style="height: 10px; background-color: #12688D">
    </div>

    <!-- tabel referensi -->

    <div class="row">
      <div class="col-lg-12 grid-margin">
        <div class="card">
          <div class="card-body">

            <div class="table-responsive">
              <table id="tabelJWL" class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Ruangan</th>
                    <th>Waktu</th>
                    <th>Tanggal</th>
                    <th style="text-align: right;">Actions</th>
                  </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-12">
            <div class="float-left"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus mdi mdi-plus-circle"></span>Tambah</a></div>
            <br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- main-panel ends -->


  <!-- MODAL ADD -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
  <form id="form_jadwal">
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Baru</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Mahasiswa</label>
              <div class="col-md-10">
                <select class="form-control" name="mahasiswa" id="mahasiswa" required>
                  <option value="">No Selected</option>
                  <?php foreach ($mahasiswa as $row) : ?>
                    <option value="<?= $row->NIM; ?>"><?= $row->Nama; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
                <div class="modal-body">
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label">NIM</label>
                    <div class="col-md-10">
                      <input type="text" name="nim" id="nim" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                      <input type="text" name="nama" id="nama" class="form-control" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label">Ruangan</label>
                    <div class="col-md-10">
                      <input type="text" name="ruangan" id="ruangan" class="form-control" placeholder="Ruangan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label">Waktu</label>
                    <div class="col-md-10">
                      <input type=time name=waktu id="waktu" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label">Tanggal</label>
                    <div class="col-md-10">
                      <input type="date" name="tanggal" id="tanggal" class="form-control">
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Edit Jadwal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id_jadwal_edit" id="id_jadwal_edit" class="form-control" disabled>

            <div class="form-group row">
              <label class="col-md-2 col-form-label">Ruangan</label>
              <div class="col-md-10">
                <input type="text" name="ruangan_edit" id="ruangan_edit" class="form-control" placeholder="Ruangan">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Waktu</label>
              <div class="col-md-10">
                <input type=time name="waktu_edit" id="waktu_edit" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-2 col-form-label">Tanggal</label>
              <div class="col-md-10">
                <input type="date" name="tanggal_edit" id="tanggal_edit" class="form-control">
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
            <h5 class="modal-title" id="exampleModalLabel">Delete Jadwal</h5>
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
      function show_jadwal() {
        $.ajax({
          type: 'ajax',
          url: '<?php echo site_url('admin/kelolajadwalpenting/jadwal_data') ?>',
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

      $('#form_jadwal').validate({ // initialize plugin
        // rules & options,
        errorPlacement: function(error, element) {
        error.insertBefore(element);
        },
        rules: {
          mahasiswa: "required",
          ruangan: "required",
          waktu: "required",
          tanggal: "required"
        },
        messages: {
          mahasiswa: {
            required: "Pilih Mahasiswa Terlebih Dahulu"
          },
          ruangan: {
            required: "Pilih Ruangan Terlebih Dahulu"
          },
          waktu: {
            required: "Pilih Waktu Terlebih Dahulu"
          },
          tanggal: {
            required: "Pilih Tanggal Terlebih Dahulu"
          }

        },
        submitHandler: function(form) {
            // your ajax would go here
            var nim = $('#nim').val();
            var ruangan = $('#ruangan').val();
            var waktu = $('#waktu').val();
            var tanggal = $('#tanggal').val();

            $.ajax({
              type: "POST",
              url: "<?php echo site_url('admin/kelolajadwalpenting/save') ?>",
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
            return false;  // blocks regular submit since you have ajax
        }
    });

      //Save product
      $('#btn_save').on('click', function() {
        $('#form_jadwal').submit();
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
          url: "<?php echo site_url('admin/kelolajadwalpenting/update') ?>",
          dataType: "JSON",
          data: {
            id_jadwal: id_jadwal,
            ruangan: ruangan,
            waktu: waktu,
            tanggal: tanggal
          },
          success: function(data) {
            $('[name="id_jadwal_edit"]').val("");
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
        $('[name="id_jadwal_delete"]').val(id_jadwal);
      });

      //delete record to database
      $('#btn_delete').on('click', function() {
        var id_jadwal = $('#id_jadwal_delete').val();
        $.ajax({
          type: "POST",
          url: "<?php echo site_url('admin/kelolajadwalpenting/delete') ?>",
          dataType: "JSON",
          data: {
            id_jadwal: id_jadwal
          },
          success: function(data) {
            $('[name="id_jadwal_delete"]').val("");
            $('#Modal_Delete').modal('hide');
            show_jadwal();
          }
        });
        return false;
      });

      $('#mahasiswa').change(function() {

        $("#nim").val($("#mahasiswa").val());
        $("#nama").val($("#mahasiswa option:selected").text());

      });

    });
  </script>




  <!-- Buat DataTable-->
</div>
