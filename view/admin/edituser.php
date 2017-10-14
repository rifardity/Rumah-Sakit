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
              <?php
              if (isset($_GET['username'])) {
                $user = new User();
                $data = $user->edit_user($_GET['username']);
              }
              ?>
							<form method="post" class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Username</label>
									<div class="col-sm-8">
										<input type="text" id="disabledinput" disabled class="form-control1" name="username" placeholder="Username" value="<?php echo $data->USERNAME ?>" required>
									</div>
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Hak Akses User</label>
									<div class="col-sm-8"><select name="level" class="form-control1">
										<option <?php if ($data->LEVEL=="Admin") { echo "selected";} ?>>Admin</option>
										<option <?php if ($data->LEVEL=="Apoteker") { echo "selected";} ?>>Apoteker</option>
										<option <?php if ($data->LEVEL=="Super Admin") { echo "selected";} ?>>Super Admin</option>
									</select></div>
								</div>
                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-2">
                    <input class="btn btn-default" type="submit" name="btn_save" value="Update User">
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
      $username = $_GET['username'];
      $level = $_POST['level'];
      if ($user->simpan_user($username,$level)) {
        header("Location:viewuser.php");
      }else {
          echo "<script>alert('Gagal Menyimpan')</script>";
      }
    }
		 ?>
