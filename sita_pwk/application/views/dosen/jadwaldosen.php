<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div id="header">
            <h1><b>
        <font color=#12688D>JADWAL DOSEN</font></h1></b>
        <hr width=100% size=8 NOSHADE class="hr hr-prmary" style="height: 10px; background-color: #12688D">
          </div>
    <div class="row">


    </div>

   <!-- tabel dosen -->

    <div class="row">
      <div class="col-lg-12 grid-margin">
        <div class="card">
          <div class="card-body">
             <a href="<?php echo base_url('addjadwaldosen')?>" style=" background-color: #12688D"><font color="#ffffff">
              <i class="mdi mdi-plus-circle"></i>
             Tambah</font></a>
                  <div class="card-title">
                    <br>
                    <center><h3><font color="#ffffff">DOSEN</font>
                    </h3></center><br>
          <div class="row">
            <div class="col-sm-6">
              <div class="jumlah-tampilan" id="kelas_length">Show
                <label> <select name="kelas_length" aria-controls="kelas" class="form-control input-sm">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="15">15</option>
                  </select>
                </label> Entries
              </div>
            </div>
            <div class="col-sm-6">
              <div  class="dataTables_filter"> Search
                <label>

                 <input type="search" class="form-control input-sm" placeholder="" aria-controls="kelas">
                </label>
              </div>
            </div>
          </div>


            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="nama-kolom">
                  <tr>
                    <th>
                      No
                    </th>
                    <th>
                      NIP/NRK
                    </th>
                    <th>
                      Nama
                    </th>
                    <th>
                      Ruang
                    </th>
                    <th>
                      Tanggal
                    </th>
                    <th>
                      Waktu
                    </th>
                    <th>
                      Edit
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td >
                      1
                    </td>
                    <td>
                      1993011320182079
                    </td>
                    <td>
                      Goldie Melinda Wijayanti, S.T., M.T.
                    </td>
                    <td>
                      E311
                    </td>
                    <td>
                      30/07/2019
                    </td>
                    <td>
                      10:20
                    </td>
                    <td class="edit">
                      <a class="nav-link" href="editjadwaldosen">
                       <i class="mdi mdi-settings"></i>
                      </a>
                    </td>
                  </tr>

                  <tr>
                    <td class="font-weight-medium">
                      2
                    </td>
                    <td>
                    </td>
					<td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td class="edit">
                      <a class="nav-link" href="editjadwaldosen">
                       <i class="menu-icon mdi mdi-settings"></i>
                      </a>
                    </td>
                  </tr>


                    <td class="font-weight-medium">
                      3
                    </td>
					<td>
                    </td>
					<td>
                    </td>
					<td>
                    </td>
					<td>
                    </td>
                    <td>
                    </td>

                    <td class="edit">
                      <a class="nav-link" href="editjadwaldosen">
                       <i class="mdi mdi-settings"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="font-weight-medium">
                      4
                    </td>

                    <td>

                    </td>
                    <td>
<td>
                    </td>
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>

                    <td class="edit">

                        <a class="nav-link" href="editjadwaldosen">
                         <i class="mdi mdi-settings"></i>
                        </a>

                    </td>

                  </tr>

                </tbody>
              </table>
            </div>

          <br></br>
            <div class="row">
              <div class="col-sm-5">
                <div class="dataTables_info" id="kelas_info" role="status" aria-live="polite">Showing 1 to 4 of 12 entries
                </div>
              </div>

              <div class="col-sm-7">

                  <ul class="tombol-tabel">
                    <a href="#" class="previous">&laquo; Previous</a>
                    <a href="#" class="next">Next &raquo;</a>
                  </ul>

              </div>
            </div>
</div></div>
          </div>
        </div>
      </div>
    </div>
<!-- main-panel ends -->
