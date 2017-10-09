<?php
include_once 'header.html';
require_once '../../app/class_dokter.php';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Form Dokter </h3>
						<div class="form-three widget-shadow">
              <?php
              if (isset($_GET['kode_dokter'])) {
                $dokter = new Dokter();
                $data = $dokter->edit_dokter($_GET['kode_dokter']);
              }
              ?>
							<form  method="post" class="form-horizontal">
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Kode</label>
									<div class="col-sm-8">
										<input type="text" disabled id="disabledinput" class="form-control1" name="kode_dokter" placeholder="Kode Dokter" value="<?php echo $data->KODE_DOKTER ?>" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama_dokter" placeholder="Nama Dokter" value="<?php echo $data->NAMA_DOKTER ?>" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<input type="textarea" class="form-control1" name="alamat_dokter" placeholder="Alamat Dokter" value="<?php echo $data->ALAMAT_DOKTER ?>" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
									<div class="col-sm-8">
										<input type="tel" class="form-control1" name="telepon_dokter" placeholder="Telepon Dokter" value="<?php echo $data->TELEPON_DOKTER ?>" required>
									</div>
								</div>

								<div class="form-group">
									<label for="spesialis_dokter" class="col-sm-2 control-label">Spesialis</label>
									<div class="col-sm-8"><select name="spesialis_dokter"  class="form-control1">
										<option <?php if ($data->SPESIALIS_DOKTER=="Penyakit Dalam") {echo "selected";} ?>>Penyakit Dalam</option>
										<option <?php if ($data->SPESIALIS_DOKTER=="Kulit") {echo "selected";} ?>>Kulit</option>
										<option <?php if ($data->SPESIALIS_DOKTER=="Telinga, Hidung Dan Tenggorokan") {echo "selected";} ?>>Telinga, Hidung Dan Tenggorokan</option>
										<option <?php if ($data->SPESIALIS_DOKTER=="Penyakit Luar") {echo "selected";} ?>>Penyakit Luar</option>
									</select></div>
								</div>
                <div class="form-group">
									<label for="poli_dokter" class="col-sm-2 control-label">Poli</label>
									<div class="col-sm-8"><select name="poli_dokter"  class="form-control1">
										<option <?php if ($data->POLI_DOKTER=="Anak") {echo "selected";} ?>>Anak</option>
										<option <?php if ($data->POLI_DOKTER=="Syaraf") {echo "selected";} ?>>Syaraf</option>
										<option <?php if ($data->POLI_DOKTER=="Bedah Umum") {echo "selected";} ?>>Bedah Umum</option>
										<option <?php if ($data->POLI_DOKTER=="Kulit Dan Kelamin") {echo "selected";} ?>>Kulit Dan Kelamin</option>
                    <option <?php if ($data->POLI_DOKTER=="Gigi Dan Mulut") {echo "selected";} ?>>Gigi Dan Mulut</option>
										<option <?php if ($data->POLI_DOKTER=="Jiwa") {echo "selected";} ?>>Jiwa</option>
                    <option <?php if ($data->POLI_DOKTER=="Paru") {echo "selected";} ?>>Paru</option>
									</select></div>
								</div>
                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-2">
                    <input class="btn btn-default" type="submit" name="btn_save" value="Update Dokter">
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
      $dokter = new Dokter();
      $kode_dokter = $_GET['kode_dokter'];
      $nama_dokter = $_POST['nama_dokter'];
      $alamat_dokter = $_POST['alamat_dokter'];
      $telepon_dokter = $_POST['telepon_dokter'];
      $spesialis_dokter = $_POST['spesialis_dokter'];
      $poli_dokter = $_POST['poli_dokter'];
      if ($dokter->simpan_dokter($kode_dokter, $nama_dokter, $alamat_dokter, $telepon_dokter, $spesialis_dokter, $poli_dokter)) {
        header("Location:viewdokter.php");
      }else{
        echo "<script>alert('Gagal Menyimpan')</script>";
      }
    }
		 ?>
