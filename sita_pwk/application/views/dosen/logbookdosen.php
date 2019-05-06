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
              Logbook Mahasiswa
            </span><br></br>
            <div class="table-responsive">
              <table id="tabelLog" class="table table-bordered">
                <thead class="nama-kolom">
                  <tr>
                    <th>
                      No
                    </th>
                    <th>
                      Nama
                    </th>
                    <th>
                      NIM
                    </th>
                    <th>
                      E - mail
                    </th>
                    <th>
                      Judul TA
                    </th>
                    <th>
                      Logbook
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
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>


<script>
$(document).ready(function(){
  show_logbook();
  $('#tabelLog').dataTable();

  function show_logbook(){
      $.ajax({
          type  : 'ajax',
          url   : '<?php echo site_url('dosen/logbookdosen/mahasiswa_data')?>',
          async : false,
          dataType : 'json',
          success : function(data){
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                var no = i+1;
                html += '<tr>'+
                      '<td>'+no+'</td>'+
                        '<td>'+data[i].Nama+'</td>'+
                        '<td>'+data[i].NIM+'</td>'+
                        '<td>'+data[i].Email+'</td>'+
                        '<td>'+data[i].Judul_TA+'</td>'+
                        '<td style="text-align:center;">' +
                        '<a href="dosen/logbookdosen/detail_logbook?nim=' + data[i].NIM + '" class="btn btn-info btn-sm item_edit" id="jadwal" data-nim="' + data[i].NIM + '" >Logbook</a>' + ' ' +
                        '</td>' +
                          '</tr>';
              }
              $('#show_data').html(html);
          }

      });
  }

});

</script>
