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
          <div class="row">
            <div class="col-sm-6">
              <div class="jumlah-tampilan" id="kelas_length">Show
                <label> <select name="kelas_length" aria-controls="kelas" class="form-control input-sm">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
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
                <tbody class="nama-kolom">
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
                      Deskripsi
                    </th>
                    <th>
                      Keterangan
                    </th>
                    <th>
                      Nama Pembimbing
                    </th>
                    <th>
                      Aksi
                    </th>

                  </tr>
                </tbody>
                <tbody class="isi-tabel">
                  <tr>
                    <td >
                      1
                    </td>
                    <td>
                      Mahasiswa1
                    </td>
                    <td>
                      24116002
                    </td>
                    <td>
                      Memperbaiki Bab 1
                    </td>
                    <td>
                     Revisi
                    </td>
                    <td>
                       Goldie Melinda Wijayanti S.T., M.T.
                    </td>
                    <td>
                      <center>
                      <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                      </center>
                    </td>
                  </tr>
                  

                </tbody>
              </table>
            </div>

          <br></br>

            <div class="row">
              <div class="col-sm-5">
                <div class="dataTables_info" id="kelas_info" role="status" aria-live="polite">Showing 1 to 10 of 743 entries
                </div>
              </div>

              <div class="col-sm-7">

                  <ul class="tombol-tabel">
                    <a href="#" class="previous">&laquo; Previous</a>
                    <a href="#" class="next">Next &raquo;</a>
                  </ul>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
<!-- main-panel ends -->