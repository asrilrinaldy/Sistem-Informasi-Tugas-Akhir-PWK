<!-- partial -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-4  grid-margin">
        <div class="card card-statistics">
          <div class="card-body">
            <h2><b><font color=#12688D> INPUT JADWAL</font></h2></b>
          </div>
        </div>


        <br></br>
        <form id="form_jadwal">
        <div class="card card-statistics">
          <div class="card-body">

            <div class="biodata-dosen">
              <br>Tempat</br>
              <div class="input-group">
                <label>
                  <select name="gedung" id="gedung" aria-controls="kelas" class="form-control input-sm">
                    <option value=""></option>
                    <option value="Gedung A">Gedung A</option>
                    <option value="Gedung B">Gedung B</option>
                    <option value="Gedung C">Gedung C</option>
                    <option value="Gedung D">Gedung D</option>
                    <option value="Gedung E">Gedung E</option>
                    <option value="Gedung GKU">Gedung GKU</option>
                  </select>
                </label>
              </div>

              <br><div >Tanggal</br>
                  <input name="tanggal" id="tanggal" type="date" style="width: 200px";>
              </div>

              <br><div >Jam</br>
                  <input name="jam" id="jam" type="time" style="width: 200px";>
              </div>

              <br></br>
                <center>
                  <input class="btn btn-primary" id="btn_save" type="submit" value="Simpan" ></input>
                </center>
            </div>
          </div>
        </div>
      </form>
    </div>

      <div class="col-lg-8 grid-margin">
        <div class="card card-statistics">
          <div class="card-body">

            <span class="judul-title">
              <i class="menu-icon mdi mdi-paperclip"></i>
              Jadwal
            </span><br></br>
            <div class="row">
              <div class="col-sm-6">
              </div>
            </div>

            <div class="table-responsive">
              <table id="tabelJWL" class="table table-bordered">
                <thead class="nama-kolom">
                  <tr>
                    <td>
                      No
                    </td>
                    <td>
                      Tempat
                    </td>
                    <td>
                      Tanggal
                    </td>
                    <td>
                      Jam
                    </td>
                    <td>
                      Aksi
                    </td>
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

   <!-- tabel mahasiswa -->

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


    </div>
<!-- main-panel ends -->
<!-- Buat DataTable-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>

<script>
  $(document).ready(function(){
    show_jadwal();
    $('#tabelJWL').dataTable();

    function show_jadwal(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo site_url('dosen/jadwaldosen/jadwal_data')?>',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                  var no = i+1;
                  html += '<tr>'+
                        '<td>'+no+'</td>'+
                          '<td>'+data[i].Gedung+'</td>'+
                          '<td>'+data[i].Tanggal+'</td>'+
                          '<td>'+data[i].Jam+'</td>'+
                          '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_jadwal="'+data[i].Id_Jadwal+'">Delete</a>'+
                                '</td>'+
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
          gedung: "required",
          tanggal: "required",
          jam: "required"
       },
       messages: {
         gedung: {
           required: "Kolom Ini Harus Diisi"
         },
         tanggal: {
           required: "Kolom Ini Harus Diisi"
         },
         jam: {
           required: "Kolom Ini Harus Diisi"
         },
       },
       submitHandler: function(form) {
           // your ajax would go here
           var gedung = $("#gedung").val();
           var jam = $('#jam').val();
           var tanggal = $('#tanggal').val();

           $.ajax({
               type : "POST",
               url  : "<?php echo site_url('dosen/jadwaldosen/input_jadwal')?>",
               dataType : "JSON",
               data : {gedung:gedung , jam:jam, tanggal:tanggal},
               success: function(data){
                   $('[name="jam"]').val("");
                   $('[name="tanggal"]').val("");
                   show_jadwal();
               }
           });
           return false;  // blocks regular submit since you have ajax
       }
   });

    $('#btn_save').on('click',function(){
        $('#form_jadwal').submit();
    });

    //get data for delete record
    $('#show_data').on('click','.item_delete',function(){
        var id_jadwal = $(this).data('id_jadwal');

        $('#Modal_Delete').modal('show');
        $('[name="id_jadwal_delete"]').val(id_jadwal);
    });

    //delete record to database
     $('#btn_delete').on('click',function(){
        var id_jadwal = $('#id_jadwal_delete').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo site_url('dosen/jadwaldosen/delete_jadwal')?>",
            dataType : "JSON",
            data : {id_jadwal:id_jadwal},
            success: function(data){
                $('[name="id_jadwal_delete"]').val("");
                $('#Modal_Delete').modal('hide');
                show_jadwal();
            }
        });
        return false;
    });



  });

</script>
