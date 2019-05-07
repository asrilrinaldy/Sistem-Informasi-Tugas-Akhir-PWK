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
                      Komentar
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
  show_konsul();
  $('#tabelLog').dataTable();

  function show_konsul(){
      $.ajax({
          type  : 'ajax',
          url   : '<?php echo site_url('dosen/konsultasisudah/konsul_data')?>',
          async : false,
          dataType : 'json',
          success : function(data){
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                var no = i+1;
                var link_file = '<?php echo site_url('assets/upload/')?>'+data[i].File;
                var download = 'Download';
                html += '<tr>'+
                      '<td>'+no+'</td>'+
                      '<td>' + data[i].NIM + '</td>' +
                      '<td>' + data[i].Nama + '</td>' +
                      '<td>' + data[i].Judul_TA + '</td>' +
                      '<td>' + data[i].Tanggal_diperiksa + '</td>' +
                      '<td>'+'<a href="'+link_file+'" target="_blank">'+download+'</a>'+'</td>'+
                      '<td>' + data[i].Komentar + '</td>' +
                      '</tr>';
              }
              $('#show_data').html(html);
          }

      });
  }

});

</script>
