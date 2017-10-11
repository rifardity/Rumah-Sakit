<?php
include_once 'header.html';
require_once '../../app/class_pasien.php'
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Form Pasien </h3>
						<div class="form-three widget-shadow">
              <?php
              $pasien = new Pasien();
              if ($_GET['kode_pasien']) {
                $pasien = new Pasien();
                $data = $pasien->edit_pasien($_GET['kode_pasien']);
              }
               ?>
							<form method="post" class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kode</label>
									<div class="col-sm-8">
										<input id="disabledinput" disabled type="text" class="form-control1" name="kode_pasien" placeholder="Kode Pasien" value="<?php echo $data->KODE_PASIEN ?>" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama_pasien" placeholder="Nama Pasien" value="<?php echo $data->NAMA_PASIEN ?>" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<input type="textarea" class="form-control1" name="alamat_pasien" placeholder="Alamat Pasien" value="<?php echo $data->ALAMAT_PASIEN ?>" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
									<div class="col-sm-8">
										<input type="tel" class="form-control1" name="telepon_pasien" placeholder="Telepon Pasien" value="<?php echo $data->TELEPON_PASIEN ?>" required>
									</div>
								</div>

                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Penyakit</label>
									<div class="col-sm-8">
										<input type="textarea" class="form-control1" name="penyakit_pasien" placeholder="Penyakit Pasien" value="<?php echo $data->PENYAKIT_PASIEN ?>" required>
									</div>
								</div>
                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-2">
                    <input class="btn btn-default" type="submit" name="btn_save" value="Update Pasien">
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
      $kode_pasien = $_GET['kode_pasien'];
      $nama_pasien = $_POST['nama_pasien'];
      $alamat_pasien = $_POST['alamat_pasien'];
      $telepon_pasien = $_POST['telepon_pasien'];
      $penyakit_pasien = $_POST['penyakit_pasien'];
      if ($pasien->simpan_pasien($kode_pasien,$nama_pasien,$alamat_pasien,$telepon_pasien,$penyakit_pasien)) {
        header("Location:viewpasien.php");
      }else {
        echo "<script>alert('Gagal Menyimpan')</script>";
      }
    }
		 ?>
