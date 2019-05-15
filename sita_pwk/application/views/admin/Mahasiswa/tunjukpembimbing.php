<!-- partial -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
<div class="main-panel">
  <div class="content-wrapper">
    <div id="header">
            <h1><b>
        <font color=#12688D> Tunjuk Dosen Pembimbing</font></h1></b>
        <hr width=100% size=8 NOSHADE class="hr hr-prmary" style="height: 10px; background-color: #12688D">
    </div>

   <!-- tabel referensi -->

    <div class="row">
      <div class="col-lg-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="col-md-12">
              <br><br>
            </div>
            <div class="table-responsive">
              <table id="tabelDSN" class="table table-striped">
                <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Pembimbing 1</th>
                    <th>Pembimbing 2</th>
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
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">

    <!-- MODAL EDIT -->
    <form id="dosen_pembimbing">
        <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">NIM</label>
                    <div class="col-md-10">
                      <input type="text" name="nim_edit" id="nim_edit" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                      <input type="text" name="nama_edit" id="nama_edit" class="form-control" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Pembimbing 1</label>
                    <div class="col-md-10">
                      <select class="form-control" name="dosen1" id="dosen1" required>
                      <option value="">No Selected</option>
                      <?php foreach($dosen as $datadosen):?>
                      <option value="<?= $datadosen->NIP;?>"><?= $datadosen->Nama;?></option>
                      <?php endforeach;?>
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Pembimbing 2</label>
                    <div class="col-md-10">
                      <select class="form-control" name="dosen2" id="dosen2" required>
                      <option value="">No Selected</option>
                      <?php foreach($dosen as $datadosen):?>
                      <option value="<?= $datadosen->NIP;?>"><?= $datadosen->Nama;?></option>
                      <?php endforeach;?>
                      </select>
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
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                   <strong>Delete ?</strong>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="nim_delete" id="nim_delete" class="form-control">
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
      show_mahasiswa  ();
      $('#tabelDSN').dataTable();

      //function show all product
  		function show_mahasiswa(){
  		    $.ajax({
  		        type  : 'ajax',
  		        url   : '<?php echo site_url('admin/kelolamahasiswa/mahasiswa_data')?>',
  		        async : false,
  		        dataType : 'json',
  		        success : function(data){
  		            var html = '';
  		            var i;
  		            for(i=0; i<data.length; i++){
  									html += '<tr>'+
  												'<td>'+data[i].NIM+'</td>'+
  													'<td>'+data[i].Nama+'</td>'+
  													'<td>'+data[i].Pembimbing+'</td>'+
  													'<td>'+data[i].Pembimbing2+'</td>'+
  													'<td style="text-align:right;">'+
                                      '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-nim="'+data[i].NIM+'" data-nama="'+data[i].Nama+'" data-pembimbing1="'+data[i].Pembimbing+'" data-pembimbing2="'+data[i].Pembimbing2+'">Pilih Dosen Pembimbing</a>'+' '+
                                      '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-nim="'+data[i].NIM+'">Delete</a>'+
                                  '</td>'+
  		                        '</tr>';
  		            }
  		            $('#show_data').html(html);
  		        }

  		    });
  		}
      //Ambil Data dari Tabel
        var dosen1 = null;
        var dosen2 = null;
        $('#dosen1').change(function(){
          dosen1 = $( "#dosen1" ).val();
        });
        $('#dosen2').change(function(){
          dosen2 = $( "#dosen2" ).val();
        });

        $('#show_data').on('click','.item_edit',function(){
            var nama = $(this).data('nama');
            var nim = $(this).data('nim');

            $('#Modal_Edit').modal('show');
            $('[name="nama_edit"]').val(nama);
            $('[name="nim_edit"]').val(nim);
        });

      $('#dosen_pembimbing').validate({ // initialize plugin
       // rules & options,
        errorPlacement: function(error, element) {
        error.insertBefore(element);
        },
       rules: {
         dosen1: "required",
         dosen2: "required"
       },
       messages: {
         dosen1: {
           required: "Pilih Dosen Terlebih Dahulu"
         },
         dosen2: {
           required: "Pilih Dosen Terlebih Dahulu"
         }

       },
       submitHandler: function(form) {
           // your ajax would go here
           var nim = $('#nim_edit').val();
           $.ajax({
               type : "POST",
               url  : "<?php echo site_url('admin/kelolamahasiswa/update_pembimbing')?>",
               dataType : "JSON",
               data : {nim:nim, dosen1:dosen1, dosen2:dosen2},
               success: function(data){
                   $('#Modal_Edit').modal('hide');
                   show_mahasiswa();
               }
           });
           return false;  // blocks regular submit since you have ajax
       }
   });

        //Tambah Pembimbing ke DB
        $('#btn_update').on('click',function(){
          $('#dosen_pembimbing').submit();
        });

          //get data for delete pembimbing
          $('#show_data').on('click','.item_delete',function(){
              var nim = $(this).data('nim');

              $('#Modal_Delete').modal('show');
              $('[name="nim_delete"]').val(nim);
          });

          //delete record to database
           $('#btn_delete').on('click',function(){
              var nim = $('#nim_delete').val();
              $.ajax({
                  type : "POST",
                  url  : "<?php echo site_url('admin/kelolamahasiswa/delete_pembimbing')?>",
                  dataType : "JSON",
                  data : {nim:nim},
                  success: function(data){
                      $('[name="nip_delete"]').val("");
                      $('#Modal_Delete').modal('hide');
                      show_mahasiswa();
                  }
              });
              return false;
          });

  });
</script>
<!-- Buat DataTable-->
