<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dosen</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Dosen
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span>Tambah Dosen</a></div>
                </h1>
            </div>

            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
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

		<!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Dosen Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">NIP</label>
                            <div class="col-md-10">
                              <input type="text" name="nip" id="nip" class="form-control" placeholder="NIP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                              <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
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
                              <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Dosen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">NIP</label>
                        <div class="col-md-10">
                          <input type="text" name="nip_edit" id="nip_edit" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-10">
                          <input type="text" name="nama_edit" id="nama_edit" class="form-control">
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
                          <input type="text" name="tanggal_lahir_edit" id="tanggal_lahir_edit" class="form-control">
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
                    <input type="hidden" name="nip_delete" id="nip_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Ya</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		show_dosen();	//call function show all product

		$('#mydata').dataTable();

		//function show all product
		function show_dosen(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('admin/keloladosen/dosen_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
									html += '<tr>'+
												'<td>'+data[i].NIP+'</td>'+
													'<td>'+data[i].Nama+'</td>'+
													'<td>'+data[i].password+'</td>'+
													'<td>'+data[i].Email+'</td>'+
													'<td>'+data[i].No_telepon+'</td>'+
													'<td>'+data[i].Alamat+'</td>'+
													'<td>'+data[i].Tempat_lahir+'</td>'+
													'<td>'+data[i].Tanggal_lahir+'</td>'+
													'<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-nip="'+data[i].NIP+'" data-nama="'+data[i].Nama+'" data-password="'+data[i].password+'" data-email="'+data[i].Email+'" data-no_telepon="'+data[i].No_telepon+'" data-alamat="'+data[i].Alamat+'" data-tempat_lahir="'+data[i].Tempat_lahir+'" data-tanggal_lahir="'+data[i].Tanggal_lahir+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-nip="'+data[i].NIP+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        //Save product
        $('#btn_save').on('click',function(){
            var nip = $('#nip').val();
            var nama = $('#nama').val();
            var password = $('#password').val();
            var email = $('#email').val();
            var no_telepon = $('#no_telepon').val();
            var alamat = $('#alamat').val();
						var tempat_lahir = $('#tempat_lahir').val();
						var tanggal_lahir = $('#tanggal_lahir').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('admin/keloladosen/save')?>",
                dataType : "JSON",
                data : {nip:nip , nama:nama, password:password, email:email, no_telepon:no_telepon, alamat:alamat, tempat_lahir:tempat_lahir, tanggal_lahir:tanggal_lahir},
                success: function(data){
                    $('[name="nip"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="password"]').val("");
                    $('[name="email"]').val("");
                    $('[name="no_telepon"]').val("");
                    $('[name="alamat"]').val("");
										$('[name="tempat_lahir"]').val("");
										$('[name="tanggal_lahir"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_dosen();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var nip = $(this).data('nip');
            var nama = $(this).data('nama');
            var password  = $(this).data('password');
            var email = $(this).data('email');
            var no_telepon = $(this).data('no_telepon');
            var alamat = $(this).data('alamat');
						var tempat_lahir = $(this).data('tempat_lahir');
						var tanggal_lahir = $(this).data('tanggal_lahir');

            $('#Modal_Edit').modal('show');
            $('[name="nip_edit"]').val(nip);
            $('[name="nama_edit"]').val(nama);
            $('[name="password_edit"]').val(password);
            $('[name="email_edit"]').val(email);
            $('[name="no_telepon_edit"]').val(no_telepon);
            $('[name="alamat_edit"]').val(alamat);
						$('[name="tempat_lahir_edit"]').val(tempat_lahir);
						$('[name="tanggal_lahir_edit"]').val(tanggal_lahir);
        });

        //update record to database
         $('#btn_update').on('click',function(){

           var nip = $('#nip_edit').val();
           var nama = $('#nama_edit').val();
           var password = $('#password_edit').val();
           var email = $('#email_edit').val();
           var no_telepon = $('#no_telepon_edit').val();
           var alamat = $('#alamat_edit').val();
					 var tempat_lahir = $('#tempat_lahir_edit').val();
					 var tanggal_lahir = $('#tanggal_lahir_edit').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('admin/keloladosen/update')?>",
                dataType : "JSON",
                data : {nip:nip , nama:nama, password:password, email:email, no_telepon:no_telepon, alamat:alamat, tempat_lahir:tempat_lahir, tanggal_lahir:tanggal_lahir},
                success: function(data){
                    $('[name="nip_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="password_edit"]').val("");
                    $('[name="tahun_edit"]').val("");
                    $('[name="no_telepon_edit"]').val("");
                    $('[name="alamat_edit"]').val("");
									  $('[name="tempat_lahir_edit"]').val("");
										$('[name="tanggal_lahir_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_dosen();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var nip = $(this).data('nip');

            $('#Modal_Delete').modal('show');
            $('[name="nip_delete"]').val(nip);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var nip = $('#nip_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('admin/keloladosen/delete')?>",
                dataType : "JSON",
                data : {nip:nip},
                success: function(data){
                    $('[name="nip_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_dosen();
                }
            });
            return false;
        });

	});

</script>
</body>
</html>
