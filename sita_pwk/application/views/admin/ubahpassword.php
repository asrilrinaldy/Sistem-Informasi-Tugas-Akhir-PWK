<!-- partial -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
    <div class="main-panel">
      <div class="content-wrapper">
        <div id="header">
                <h1><b>
            <font color=#12688D> Ubah Password</font></h1></b>
            <hr width=100% size=8 NOSHADE class="hr hr-prmary" style="height: 10px; background-color: #12688D">
        </div>

        <div class="row">
          <div class="col-lg-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="col-md-12">
                  <br><br>
                </div>
              	<form action="<?php echo base_url().'ubahpassword/update_password_admin'?>" method="post">
                  <label>Old Password :</label>
                  <input type="password" name="old_pass" id="name" placeholder="Old Pass"/><br /><br />
                  <label>New Password :</label>
                  <input type="password" name="new_pass" id="password" placeholder="New Password"/><br/><br />

                  <label>Confirm Password :</label>
                  <input type="password" name="confirm_pass" id="password" placeholder="Confirm Password"/><br/><br />
                  <input type="submit" value="Ubah Password" name="change_pass"/><br />
              </form>
              </div>
            </div>
          </div>
        </div>