<!-- partial -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
<div class="main-panel">
  <div class="content-wrapper">
    <div id="header">
            <h1><b>
        <font color=#12688D>REFERENSI</font></h1></b>
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
              <table id="tabelREF" class="table table-striped">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Judul TA</th>
                      <th>Penulis</th>
                      <th>Tahun</th>
                      <th>Asal Referensi</th>
                      <th>File</th>
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

<!-- Buat DataTable-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script>
  $(document).ready(function(){
      show_referensi();
      $('#tabelREF').dataTable();
      //function show all product
      function show_referensi(){
          $.ajax({
              type  : 'ajax',
              url   : '<?php echo site_url('mahasiswa/referensijudul/referensi_data')?>',
              async : false,
              dataType : 'json',
              success : function(data){
                  var html = '';
                  var i,nomor;
                  for(i=0; i<data.length; i++){
                    nomor=i+1;
                    var link_file = '<?php echo site_url('assets/upload/referensi/')?>'+data[i].file;
                    var download = 'Download';
                      html += '<tr>'+
                            '<td>'+nomor+'</td>'+
                              '<td>'+data[i].Judul_TA+'</td>'+
                              '<td>'+data[i].Penulis+'</td>'+
                              '<td>'+data[i].Tahun+'</td>'+
                              '<td>'+data[i].Asal_Referensi+'</td>'+
                              '<td>'+'<a href="'+link_file+'" target="_blank">'+download+'</a>'+'</td>'+
                              '</tr>';
                  }
                  $('#show_data').html(html);
              }
          });
      }
  });
</script>




<!-- Buat DataTable-->
