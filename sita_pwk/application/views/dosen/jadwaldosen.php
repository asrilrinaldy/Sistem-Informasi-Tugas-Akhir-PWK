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
        <div class="card card-statistics">
          <div class="card-body">

            <div class="biodata-dosen">
              <br>Tempat</br>
              <div class="input-group">
                <label>
                  <select name="gedung" id="gedung" aria-controls="kelas" class="form-control input-sm">
                    <option value="Gedung C">Gedung C</option>
                    <option value="Gedung D">Gedung D</option>
                    <option value="Gedung E">Gedung E</option>
                    <option value="Gedung GKU">Gedung GKU</option>
                  </select>
                </label>
              </div>

              <br><div >Tanggal</br>
                  <input id="tanggal" type="date" style="width: 200px";>
              </div>

              <br><div >Jam</br>
                  <input id="jam" type="time" style="width: 200px";>
              </div>

              <br></br>
                <center>
                  <input class="btn btn-primary" id="btn_save" type="submit" value="Simpan" ></input>
                </center>


            </div>

          </div>
        </div>
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
            url   : '<?php echo site_url('jadwaldosen/jadwal_data')?>',
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

    $('#btn_save').on('click',function(){
        var gedung = $("#gedung").val();
        var jam = $('#jam').val();
        var tanggal = $('#tanggal').val();

        $.ajax({
            type : "POST",
            url  : "<?php echo site_url('jadwaldosen/input_jadwal')?>",
            dataType : "JSON",
            data : {gedung:gedung , jam:jam, tanggal:tanggal},
            success: function(data){
                $('[name="jam"]').val("");
                $('[name="nama"]').val("");
                show_jadwal();
            }
        });
        return false;
    });


  });

</script>
