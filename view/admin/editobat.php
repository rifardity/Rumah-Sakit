<?php
include_once 'header.html';
require_once '../../app/class_obat.php';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Form Obat </h3>
						<div class="form-three widget-shadow">
              <?php
              if (isset($_GET['kode_obat'])) {
                $obat = new Obat();
                $data = $obat->edit_obat($_GET['kode_obat']);
              }

              ?>
							<form method="post" class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kode</label>
									<div class="col-sm-8">
										<input type="text" id="disabledinput" disabled class="form-control1" name="kode_obat" placeholder="Kode Obat" value="<?php echo $data->KODE_OBAT ?>" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama_obat" placeholder="Nama Obat" value="<?php echo $data->NAMA_OBAT ?>" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Harga Rp.</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" name="harga_obat" placeholder="Harga Obat" value="<?php echo $data->HARGA_OBAT ?>" required>
									</div>
								</div>

								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Tipe Obat</label>
									<div class="col-sm-8"><select name="tipe_obat" id="tipe_obat" class="form-control1">
										<option <?php if ($data->TIPE_OBAT=="Kapsul") { echo "selected";} ?>>Kapsul</option>
										<option <?php if ($data->TIPE_OBAT=="Tablet") { echo "selected";} ?>>Tablet</option>
										<option <?php if ($data->TIPE_OBAT=="Sirup") { echo "selected";} ?>>Sirup</option>
										<option <?php if ($data->TIPE_OBAT=="Serbuk") { echo "selected";} ?>>Serbuk</option>
									</select></div>
								</div>
                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-2">
                    <input class="btn btn-default" type="submit" name="btn_save" value="Simpan Obat">
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
      $obat = new Obat();
      $kode_obat = $_GET['kode_obat'];
      $nama_obat = $_POST['nama_obat'];
      $harga_obat = $_POST['harga_obat'];
      $tipe_obat = $_POST['tipe_obat'];
      if ($obat->simpan_obat($kode_obat,$nama_obat,$harga_obat,$tipe_obat)) {
        header("Location:viewobat.php");
      }else {
          echo "<script>alert('Gagal Menyimpan')</script>";
      }
    }
		 ?>
