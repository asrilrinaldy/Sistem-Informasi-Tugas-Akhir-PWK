<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Referensi</title>
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
                <h1>Referensi
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span>Tambah Referensi</a></div>
                </h1>
            </div>

            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID Referensi</th>
                        <th>Judul TA</th>
                        <th>Penulis</th>
                        <th>Tahun</th>
                        <th>Asal Referensi</th>
                        <th>Admin</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Referensi Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">ID Referensi</label>
                            <div class="col-md-10">
                              <input type="text" name="id_referensi" id="id_referensi" class="form-control" placeholder="ID Referensi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Judul TA</label>
                            <div class="col-md-10">
                              <input type="text" name="judul_ta" id="judul_ta" class="form-control" placeholder="Judul TA">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Penulis</label>
                            <div class="col-md-10">
                              <input type="text" name="penulis" id="penulis" class="form-control" placeholder="Penulis">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Tahun</label>
                            <div class="col-md-10">
                              <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Tahun">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Asal Referensi</label>
                            <div class="col-md-10">
                              <input type="text" name="asal_referensi" id="asal_referensi" class="form-control" placeholder="Asal Referensi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">ID Admin</label>
                            <div class="col-md-10">
                              <input type="text" name="id_admin" id="id_admin" class="form-control" value="Adm001">
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Referensi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">ID Referensi</label>
                        <div class="col-md-10">
                          <input type="text" name="id_referensi_edit" id="id_referensi_edit" class="form-control" placeholder="ID Referensi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Judul TA</label>
                        <div class="col-md-10">
                          <input type="text" name="judul_ta_edit" id="judul_ta_edit" class="form-control" placeholder="Judul TA">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Penulis</label>
                        <div class="col-md-10">
                          <input type="text" name="penulis_edit" id="penulis_edit" class="form-control" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tahun</label>
                        <div class="col-md-10">
                          <input type="text" name="tahun_edit" id="tahun_edit" class="form-control" placeholder="Tahun">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Asal Referensi</label>
                        <div class="col-md-10">
                          <input type="text" name="asal_referensi_edit" id="asal_referensi_edit" class="form-control" placeholder="Asal Referensi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">ID Admin</label>
                        <div class="col-md-10">
                          <input type="text" name="id_admin_edit" id="id_admin_edit" class="form-control" value="Adm001">
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
                    <h5 class="modal-title" id="exampleModalLabel">Delete Referensi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Delete Referensi Ini?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_referensi_delete" id="id_referensi_delete" class="form-control">
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
		show_referensi();	//call function show all product

		$('#mydata').dataTable();

		//function show all product
		function show_referensi(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('referensi/referensi_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].Id_Referensi+'</td>'+
		                        '<td>'+data[i].Judul_TA+'</td>'+
		                        '<td>'+data[i].Penulis+'</td>'+
                            '<td>'+data[i].Tahun+'</td>'+
                            '<td>'+data[i].Asal_Referensi+'</td>'+
                            '<td>'+data[i].Id_admin+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_referensi="'+data[i].Id_Referensi+'" data-judul_ta="'+data[i].Judul_TA+'" data-penulis="'+data[i].Penulis+'" data-tahun="'+data[i].Tahun+'" data-asal_referensi="'+data[i].Asal_Referensi+'" data-id_admin="'+data[i].Id_admin+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_referensi="'+data[i].Id_Referensi+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        //Save product
        $('#btn_save').on('click',function(){
            var id_referensi = $('#id_referensi').val();
            var judul_ta = $('#judul_ta').val();
            var penulis = $('#penulis').val();
            var tahun = $('#tahun').val();
            var asal_referensi = $('#asal_referensi').val();
            var id_admin = $('#id_admin').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('referensi/save')?>",
                dataType : "JSON",
                data : {id_referensi:id_referensi , judul_ta:judul_ta, penulis:penulis, tahun:tahun, asal_referensi:asal_referensi, id_admin:id_admin},
                success: function(data){
                    $('[name="id_referensi"]').val("");
                    $('[name="judul_ta"]').val("");
                    $('[name="penulis"]').val("");
                    $('[name="tahun"]').val("");
                    $('[name="asal_referensi"]').val("");
                    $('[name="id_admin"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_referensi();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var id_referensi = $(this).data('id_referensi');
            var judul_ta = $(this).data('judul_ta');
            var penulis  = $(this).data('penulis');
            var tahun = $(this).data('tahun');
            var asal_referensi = $(this).data('asal_referensi');
            var id_admin = $(this).data('id_admin');

            $('#Modal_Edit').modal('show');
            $('[name="id_referensi_edit"]').val(id_referensi);
            $('[name="judul_ta_edit"]').val(judul_ta);
            $('[name="penulis_edit"]').val(penulis);
            $('[name="tahun_edit"]').val(tahun);
            $('[name="asal_referensi_edit"]').val(asal_referensi);
            $('[name="id_admin_edit"]').val(id_admin);
        });

        //update record to database
         $('#btn_update').on('click',function(){

           var id_referensi = $('#id_referensi_edit').val();
           var judul_ta = $('#judul_ta_edit').val();
           var penulis = $('#penulis_edit').val();
           var tahun = $('#tahun_edit').val();
           var asal_referensi = $('#asal_referensi_edit').val();
           var id_admin = $('#id_admin_edit').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('referensi/update')?>",
                dataType : "JSON",
                data : {id_referensi:id_referensi , judul_ta:judul_ta, penulis:penulis, tahun:tahun, asal_referensi:asal_referensi, id_admin:id_admin},
                success: function(data){
                    $('[name="id_referensi_edit"]').val("");
                    $('[name="judul_ta_edit"]').val("");
                    $('[name="penulis_edit"]').val("");
                    $('[name="tahun_edit"]').val("");
                    $('[name="asal_referensi_edit"]').val("");
                    $('[name="id_admin_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_referensi();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var id_referensi = $(this).data('id_referensi');

            $('#Modal_Delete').modal('show');
            $('[name="id_referensi_delete"]').val(id_referensi);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var id_referensi = $('#id_referensi_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('referensi/delete')?>",
                dataType : "JSON",
                data : {id_referensi:id_referensi},
                success: function(data){
                    $('[name="id_referensi_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_referensi();
                }
            });
            return false;
        });

	});

</script>
</body>
</html>
