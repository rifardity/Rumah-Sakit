<?php
include_once 'header.html';
require_once '../../app/class_user.php';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Form user </h3>
						<div class="form-three widget-shadow">
							<form method="post" class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="username" placeholder="Username" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-8">
										<input type="password" class="form-control1" name="password" placeholder="Password" required>
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Hak Akses User</label>
									<div class="col-sm-8"><select name="level" class="form-control1">
										<option>Admin</option>
										<option>Apoteker</option>
										<option>Super Admin</option>
									</select></div>
								</div>
                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-2">
                    <input class="btn btn-default" type="submit" name="btn_save" value="Simpan User">
                  </div>
                </div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<?php
		include_once 'footer.html';
    if (isset($_POST['btn_save'])) {
      $user = new User();
      $username = $_POST['username'];
      $password = $_POST['password'];
      $level = $_POST['level'];
      if ($user->tambah_user($username,$password,$level)) {
        header("Location:viewuser.php");
      }else {
          echo "<script>alert('Gagal Menyimpan')</script>";
      }
    }
		 ?>
