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

            <div class="table-responsive">
              <table id="tabel_logbook" class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Keterangan</th>
                    <th>Nama Pembimbing</th>
                    <th style="text-align: right;">Actions</th>
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
  <form id="form_logbook">
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
            <input type="hidden" name="id_logbook_delete" id="id_logbook_delete" class="form-control">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Ya</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!--END MODAL DELETE-->
</div>

<!-- Buat DataTable-->
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>
<script>
  $(document).ready(function() {
    show_logbook();
    $('#tabel_logbook').dataTable();

    //function show all product
    function show_logbook() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo site_url('mahasiswa/logbookmahasiswa/logbook_mahasiswa_data') ?>',
        async: false,
        dataType: 'json',
        success: function(data) {
          var html = '';
          var i;
          var no;
          for (i = 0; i < data.length; i++) {
            no = i + 1;
            html += '<tr>' +
              '<td>' + no + '</td>' +
              '<td>' + data[i].Tanggal + '</td>' +
              '<td>' + data[i].Deskripsi + '</td>' +
              '<td>' + data[i].Keterangan + '</td>' +
              '<td>' + data[i].nama_dosen + '</td>' +
              '<td style="text-align:center;">' +
              '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_logbook="' + data[i].Id_Log + '">Delete</a>' +
              '</td>' +
              '</tr>';
          }
          $('#show_data').html(html);
        }

      });
    }

    $('#form_logbook').validate({ // initialize plugin
       // rules & options,
       errorPlacement: function(error, element) {
       error.insertBefore(element);
       },
       rules: {
          Deskripsi: "required",
          Keterangan: "required",
          dosen: "required"
       },
       messages: {
         Deskripsi: {
           required: "Kolom Ini Harus Diisi"
         },
         Keterangan: {
           required: "Kolom Ini Harus Diisi"
         },
         dosen: {
           required: "Kolom Ini Harus Diisi"
         },
       },
       submitHandler: function(form) {
           // your ajax would go here
           var deskripsi = $('#Deskripsi').val();
           var keterangan = $('#Keterangan').val();
           var dosen = $('#dosen').val();
           $.ajax({
             type: "POST",
             url: "<?php echo site_url('mahasiswa/logbookmahasiswa/save') ?>",
             dataType: "JSON",
             data: {
               deskripsi: deskripsi,
               keterangan: keterangan,
               dosen: dosen
             },
             success: function(data) {
               $('[name="Tanggal"]').val("");
               $('[name="Deskripsi"]').val("");
               $('[name="Keterangan"]').val("");
               $('[name="dosen"]').val("");
               $('#Modal_Add').modal('hide');
               show_logbook();
             },
             error: function(jqXHR, textStatus, errorThrown) {
               console.log(textStatus, errorThrown);
             }
           });
           return false;  // blocks regular submit since you have ajax
       }
   });

    //Save product
    $('#btn_save').on('click', function() {
        $('#form_logbook').submit();
    });

    //get data for delete record
    $('#show_data').on('click', '.item_delete', function() {
      var id_logbook = $(this).data('id_logbook');

      $('#Modal_Delete').modal('show');
      $('[name="id_logbook_delete"]').val(id_logbook);
    });

    //delete record to database
    $('#btn_delete').on('click', function() {
      var id_logbook = $('#id_logbook_delete').val();
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('mahasiswa/logbookmahasiswa/delete') ?>",
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
