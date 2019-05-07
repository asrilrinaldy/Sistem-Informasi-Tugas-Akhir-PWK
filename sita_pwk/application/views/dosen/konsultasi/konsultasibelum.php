<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">

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
              Konsultasi Mahasiswa
            </span><br></br>
            <div class="table-responsive">
              <table id="tabelLog" class="table table-bordered">
                <thead class="nama-kolom">
                  <tr>
                    <th>
                      No
                    </th>
                    <th>
                      NIM
                    </th>
                    <th>
                      Nama
                    </th>
                    <th>
                      Judul TA
                    </th>
                    <th>
                      Tanggal
                    </th>
                    <th>
                      File
                    </th>
                    <th>
                      Keterangan
                    </th>
                    <th>
                      Aksi
                    </th>
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
<!-- Modal Tambah Komen -->
<div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Komentar</h5>
        <hr>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <textarea name="komentar" id="komentar" rows="8" cols="56"></textarea>
      </div>
      <input type="hidden" name="id_konsul" id="id_konsul">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btn_update" class="btn btn-primary">Tambah Komentar</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Tambah Komen -->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>


<script>
$(document).ready(function(){
  show_konsul();
  $('#tabelLog').dataTable();

  function show_konsul(){
      $.ajax({
          type  : 'ajax',
          url   : '<?php echo site_url('dosen/konsultasibelum/konsul_data')?>',
          async : false,
          dataType : 'json',
          success : function(data){
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                var link_file = '<?php echo site_url('assets/upload/')?>'+data[i].File;
                var download = 'Download';
                var no = i+1;
                html += '<tr>'+
                      '<td>'+no+'</td>'+
                      '<td>' + data[i].NIM + '</td>' +
                      '<td>' + data[i].Nama + '</td>' +
                      '<td>' + data[i].Tanggal + '</td>' +
                      '<td>' + data[i].Judul_TA + '</td>' +
                      '<td>'+'<a href="'+link_file+'" target="_blank">'+download+'</a>'+'</td>'+
                      '<td>' + data[i].Keterangan + '</td>' +
                      '<td style="text-align:center;">' +
                      '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_konsul="' + data[i].Id_Konsul + '">Periksa</a>' + ' ' +
                      '</td>' +
                      '</tr>';
              }
              $('#show_data').html(html);
          }

      });
  }

  $('#show_data').on('click','.item_edit',function(){
      var id_konsul = $(this).data('id_konsul');
      $('#id_konsul').val(id_konsul);
      $('#Modal_Edit').modal('show');
  });

  $('#btn_update').on('click',function(){

    var id_konsul = $('#id_konsul').val();
    var komentar = $('#komentar').val();

     $.ajax({
         type : "POST",
         url  : "<?php echo site_url('dosen/konsultasibelum/periksa_konsul')?>",
         dataType : "JSON",
         data : {id_konsul:id_konsul , komentar:komentar},
         success: function(data){
             $('[name="id_konsul"]').val("");
             $('[name="komentar"]').val("");
             $('#Modal_Edit').modal('hide');
             window.location.href = "dosen/konsultasibelum";
         }
     });
     return false;
 });


});

</script>
