<!-- partial -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-4  grid-margin" >
        <div class="card card-statistics">
          <div class="card-body">
          <h5>
            INPUT JADWAL
          </h5>
          </div>
        </div>
        <div class="card card-statistics">
          <div class="card-body">
          <div class="gedung">
            <br><h5>
              <label>Berkas File</label>
            </h5>
              <label> <select name="kelas_length" aria-controls="kelas" class="form-control input-sm">
                <option value="gdc">Gedung C</option>
                <option value="gdd">Gedung D</option>
                <option value="gde">Gedung E</option>
                <option value="gku">Gedung Kuliah Umum</option>
                </select>
              </label>
          </div>
          <div class="tanggal">
            <br><h5>
            <label>Tanggal</label>
            </h5>
            <input type="date">
            <i type="submit" class="mdi mdi-calendar"></i>   
          </div>
          <div>
            <br><h5>
            <label>Jam</label>
            </h5>
            <input type="time"> 
          </div>
            
              <center>
                  <input class="btn btn-primary" type="submit" value="Simpan" ></input>
              </center>
            </div>
          </div>
        </div>
      </div>
<!-- partial -->

   <!-- tabel dosen -->
  <div class="row">
      <div class="col-lg-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="col-md-12">
              <label><h5>Jadwal
            </div>
            <div class="table-responsive">
              <table id="tabelDSN" class="table table-striped">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Gedung</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    
                    <th style="text-align: right;">Actions</th>
                  </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- main-panel ends -->

<!-- MODAL ADD -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
        <form>
        <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <class="modal-title" id="exampleModalLabel">Jadwal
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">NO</label>
                        <div class="col-md-10">
                          <input type="text" name="id_jadwal" id="id_jadwal" class="form-control" placeholder="NO">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Gedung</label>
                        <div class="col-md-10">
                          <input type="text" name="gedung" id="gedung" class="form-control" placeholder="Gedung">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tanggal</label>
                        <div class="col-md-10">
                          <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Jam</label>
                        <div class="col-md-10">
                          <input type="time" name="jam" id="jam" class="form-control" placeholder="Jam">
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Jadwal Dosen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">NO</label>
                    <div class="col-md-10">
                      <input type="text" name="id_jadwal" id="id_jadwal" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Gedung</label>
                    <div class="col-md-10">
                      <input type="text" name="gedung" id="gedung" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Tanggal</label>
                    <div class="col-md-10">
                      <input type="password" name="tanggal" id="tanggal" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Jam</label>
                    <div class="col-md-10">
                      <input type="text" name="jam" id="jam" class="form-control">
                    </div>
                </div>
              
            </div>
          </div>
        </div>
        </form>
    <!--END MODAL EDIT-->

<!-- Buat DataTable-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script>
  $(document).ready(function(){
      show_jadwal_kosong();
      $('#tabelDSN').dataTable();

      //function show all product
      function show_jadwal_kosong(){
          $.ajax({
              type  : 'ajax',
              url   : '<?php echo site_url('jadwaldosen/jadwaldosen_data')?>',
              async : false,
              dataType : 'json',
              success : function(data){
                  var html = '';
                  var i;
                  for(i=0; i<data.length; i++){
                    html += '<tr>'+
                          '<td>'+data[i].NO+'</td>'+
                            '<td>'+data[i].Gedung+'</td>'+
                            '<td>'+data[i].Tanggal+'</td>'+
                            '<td>'+data[i].jam+'</td>'+
                            '<td style="text-align:right;">'+
                                      '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-no="'+data[i].NO+'" data-gedung="'+data[i].Gedung+'" data-tanggal="'+data[i].Tanggal+'" data-jam="'+data[i].Jam+'">Edit</a>'+' '+
                                      '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-no="'+data[i].NO+'">Delete</a>'+
                                  '</td>'+
                              '</tr>';
                  }
                  $('#show_data').html(html);
              }

          });
      }

          //Save product
          $('#btn_save').on('click',function(){
              var no = $('#no').val();
              var gedung = $('#gedung').val();
              var tanggal = $('#tanggal').val();
              var jam = $('#jam').val();
              $.ajax({
                  type : "POST",
                  url  : "<?php echo site_url('jadwaldosen/save')?>",
                  dataType : "JSON",
                  data : {no:no , gedung:gedung, tanggal:tanggal, jam:jam},
                  success: function(data){
                      $('[name="no"]').val("");
                      $('[name="gedung"]').val("");
                      $('[name="tanggal"]').val("");
                      $('[name="jam"]').val("");
                      $('#Modal_Add').modal('hide');
                      show_jadwal_kosong();
                  }
              });
              return false;
          });

          //get data for update record
          $('#show_data').on('click','.item_edit',function(){
              var no = $(this).data('no');
              var gedung = $(this).data('gedung');
              var tanggal  = $(this).data('tanggal');
              var jam = $(this).data('jam');

              $('#Modal_Edit').modal('show');
              $('[name="no_edit"]').val(no);
              $('[name="gedung_edit"]').val(gedung);
              $('[name="tanggal_edit"]').val(tanggal);
              $('[name="jam_edit"]').val(jam);
          });

          //update record to database
           $('#btn_update').on('click',function(){

             var no = $('#no_edit').val();
             var gedung = $('#gedung_edit').val();
             var tanggal = $('#tanggal_edit').val();
             var jam = $('#jam_edit').val();

              $.ajax({
                  type : "POST",
                  url  : "<?php echo site_url('jadwaldosen/update')?>",
                  dataType : "JSON",
                  data : {no:no , gedung:gedung, tanggal:tanggal, jam:jam},
                  success: function(data){
                      $('[name="no_edit"]').val("");
                      $('[name="gedung_edit"]').val("");
                      $('[name="tanggal_edit"]').val("");
                      $('[name="jam_edit"]').val("");
                      show_jadwal_kosong();
                  }
              });
              return false;
          });
  });
</script>

