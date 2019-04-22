<!-- partial -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
<div class="main-panel">
  <div class="content-wrapper">
    <div id="header">
            <h1><b>
        <font color=#12688D> KELOLA DATA ADMIN</font></h1></b>
        <hr width=100% size=8 NOSHADE class="hr hr-prmary" style="height: 10px; background-color: #12688D">
    </div>

   <!-- tabel referensi -->

    <div class="row">
      <div class="col-lg-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="col-md-12">
              <div class="float-left"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus mdi mdi-plus-circle"></span>Tambah</a></div>
              <br><br>
            </div>
            <div class="table-responsive">
              <table id="tabelADM" class="table table-striped">
                <thead>
                  <tr>
                    <th>ID Admin</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
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
        <form>
        <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Admin Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">ID Admin</label>
                        <div class="col-md-10">
                          <input type="text" name="id_admin" id="id_admin" class="form-control" placeholder="ID Admin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-10">
                          <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Username</label>
                        <div class="col-md-10">
                          <input type="text" name="username" id="username" class="form-control" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                          <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">No. Telepon</label>
                        <div class="col-md-10">
                          <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="No. Telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-10">
                          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tempat Lahir</label>
                        <div class="col-md-10">
                          <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-md-10">
                          <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">ID Admin</label>
                    <div class="col-md-10">
                      <input type="text" name="id_admin_edit" id="id_admin_edit" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                      <input type="text" name="nama_edit" id="nama_edit" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Username</label>
                    <div class="col-md-10">
                      <input type="text" name="username_edit" id="username_edit" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                      <input type="password" name="password_edit" id="password_edit" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                      <input type="text" name="email_edit" id="email_edit" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">No. Telepon</label>
                    <div class="col-md-10">
                      <input type="text" name="no_telepon_edit" id="no_telepon_edit" class="form-control" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Alamat</label>
                    <div class="col-md-10">
                      <input type="text" name="alamat_edit" id="alamat_edit" class="form-control" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Tempat Lahir</label>
                    <div class="col-md-10">
                      <input type="text" name="tempat_lahir_edit" id="tempat_lahir_edit" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-md-10">
                      <input type="date" name="tanggal_lahir_edit" id="tanggal_lahir_edit" class="form-control">
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
                <h5 class="modal-title" id="exampleModalLabel">Delete Data Dosen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                   <strong>Delete ?</strong>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="id_admin_delete" id="id_admin_delete" class="form-control">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Ya</button>
              </div>
            </div>
          </div>
        </div>
        </form>
    <!--END MODAL DELETE-->



<!-- Buat DataTable-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script>
  $(document).ready(function(){
      show_admin();
      $('#tabelADM').dataTable();

      //function show all product
  		function show_admin(){
  		    $.ajax({
  		        type  : 'ajax',
  		        url   : '<?php echo site_url('kelolaadmin/admin_data')?>',
  		        async : false,
  		        dataType : 'json',
  		        success : function(data){
  		            var html = '';
  		            var i;
  		            for(i=0; i<data.length; i++){
  									html += '<tr>'+
  												'<td>'+data[i].id_admin+'</td>'+
  													'<td>'+data[i].nama+'</td>'+
                            '<td>'+data[i].username+'</td>'+
  													'<td>'+data[i].password+'</td>'+
  													'<td>'+data[i].email+'</td>'+
  													'<td>'+data[i].no_telp+'</td>'+
  													'<td>'+data[i].alamat+'</td>'+
  													'<td>'+data[i].tempat_lahir+'</td>'+
  													'<td>'+data[i].tanggal_lahir+'</td>'+
  													'<td style="text-align:right;">'+
                                      '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_admin="'+data[i].id_admin+'" data-nama="'+data[i].nama+'" data-username="'+data[i].username+'" data-password="'+data[i].password+'" data-email="'+data[i].email+'" data-no_telepon="'+data[i].no_telp+'" data-alamat="'+data[i].alamat+'" data-tempat_lahir="'+data[i].tempat_lahir+'" data-tanggal_lahir="'+data[i].tanggal_lahir+'">Edit</a>'+' '+
                                      '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_admin="'+data[i].id_admin+'">Delete</a>'+
                                  '</td>'+
  		                        '</tr>';
  		            }
  		            $('#show_data').html(html);
  		        }

  		    });
  		}

          //Save product
          $('#btn_save').on('click',function(){
              var id_admin = $('#id_admin').val();
              var nama = $('#nama').val();
              var username = $('#username').val();
              var password = $('#password').val();
              var email = $('#email').val();
              var no_telepon = $('#no_telepon').val();
              var alamat = $('#alamat').val();
  						var tempat_lahir = $('#tempat_lahir').val();
  						var tanggal_lahir = $('#tanggal_lahir').val();
              $.ajax({
                  type : "POST",
                  url  : "<?php echo site_url('kelolaadmin/save')?>",
                  dataType : "JSON",
                  data : {id_admin:id_admin , nama:nama, username:username, password:password, email:email, no_telepon:no_telepon, alamat:alamat, tempat_lahir:tempat_lahir, tanggal_lahir:tanggal_lahir},
                  success: function(data){
                      $('[name="id_admin"]').val("");
                      $('[name="nama"]').val("");
                      $('[name="username"]').val("");
                      $('[name="password"]').val("");
                      $('[name="email"]').val("");
                      $('[name="no_telepon"]').val("");
                      $('[name="alamat"]').val("");
  										$('[name="tempat_lahir"]').val("");
  										$('[name="tanggal_lahir"]').val("");
                      $('#Modal_Add').modal('hide');
                      show_admin();
                  }
              });
              return false;
          });

          //get data for update record
          $('#show_data').on('click','.item_edit',function(){
              var id_admin = $(this).data('id_admin');
              var nama = $(this).data('nama');
              var username = $(this).data('username');
              var password  = $(this).data('password');
              var email = $(this).data('email');
              var no_telepon = $(this).data('no_telepon');
              var alamat = $(this).data('alamat');
  						var tempat_lahir = $(this).data('tempat_lahir');
  						var tanggal_lahir = $(this).data('tanggal_lahir');

              $('#Modal_Edit').modal('show');
              $('[name="id_admin_edit"]').val(id_admin);
              $('[name="nama_edit"]').val(nama);
              $('[name="username_edit"]').val(username);
              $('[name="password_edit"]').val(password);
              $('[name="email_edit"]').val(email);
              $('[name="no_telepon_edit"]').val(no_telepon);
              $('[name="alamat_edit"]').val(alamat);
  						$('[name="tempat_lahir_edit"]').val(tempat_lahir);
  						$('[name="tanggal_lahir_edit"]').val(tanggal_lahir);
          });

          //update record to database
           $('#btn_update').on('click',function(){

             var id_admin = $('#id_admin_edit').val();
             var nama = $('#nama_edit').val();
             var username = $('#username_edit').val();
             var password = $('#password_edit').val();
             var email = $('#email_edit').val();
             var no_telepon = $('#no_telepon_edit').val();
             var alamat = $('#alamat_edit').val();
  					 var tempat_lahir = $('#tempat_lahir_edit').val();
  					 var tanggal_lahir = $('#tanggal_lahir_edit').val();

              $.ajax({
                  type : "POST",
                  url  : "<?php echo site_url('kelolaadmin/update')?>",
                  dataType : "JSON",
                  data : {id_admin:id_admin , nama:nama, username:username, password:password, email:email, no_telepon:no_telepon, alamat:alamat, tempat_lahir:tempat_lahir, tanggal_lahir:tanggal_lahir},
                  success: function(data){
                      $('[name="id_admin_edit"]').val("");
                      $('[name="nama_edit"]').val("");
                      $('[name="username_edit"]').val("");
                      $('[name="password_edit"]').val("");
                      $('[name="tahun_edit"]').val("");
                      $('[name="no_telepon_edit"]').val("");
                      $('[name="alamat_edit"]').val("");
  									  $('[name="tempat_lahir_edit"]').val("");
  										$('[name="tanggal_lahir_edit"]').val("");
                      $('#Modal_Edit').modal('hide');
                      show_admin();
                  }
              });
              return false;
          });

          //get data for delete record
          $('#show_data').on('click','.item_delete',function(){
              var id_admin = $(this).data('id_admin');

              $('#Modal_Delete').modal('show');
              $('[name="id_admin_delete"]').val(id_admin);
          });

          //delete record to database
           $('#btn_delete').on('click',function(){
              var id_admin = $('#id_admin_delete').val();
              $.ajax({
                  type : "POST",
                  url  : "<?php echo site_url('kelolaadmin/delete')?>",
                  dataType : "JSON",
                  data : {id_admin:id_admin},
                  success: function(data){
                      $('[name="id_admin_delete"]').val("");
                      $('#Modal_Delete').modal('hide');
                      show_admin();
                  }
              });
              return false;
          });
  });
</script>




<!-- Buat DataTable-->
