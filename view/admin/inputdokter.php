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
							<form  method="post" class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kode</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="kode_dokter" placeholder="Kode Dokter" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="nama_dokter" placeholder="Nama Dokter" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<input type="textarea" class="form-control1" name="alamat_dokter" placeholder="Alamat Dokter" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
									<div class="col-sm-8">
										<input type="tel" class="form-control1" name="telepon_dokter" placeholder="Telepon Dokter" required>
									</div>
								</div>

								<div class="form-group">
									<label for="spesialis_dokter" class="col-sm-2 control-label">Spesialis</label>
									<div class="col-sm-8"><select name="spesialis_dokter"  class="form-control1">
										<option>Penyakit Dalam</option>
										<option>Kulit</option>
										<option>Telinga, Hidung Dan Tenggorokan</option>
										<option>Penyakit Luar</option>
									</select></div>
								</div>
                <div class="form-group">
									<label for="poli_dokter" class="col-sm-2 control-label">Poli</label>
									<div class="col-sm-8"><select name="poli_dokter"  class="form-control1">
										<option>Anak</option>
										<option>Syaraf</option>
										<option>Bedah Umum</option>
										<option>Kulit Dan Kelamin</option>
                    <option>Gigi Dan Mulut</option>
										<option>Jiwa</option>
                    <option>Paru</option>
									</select></div>
								</div>
                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-2">
                    <input class="btn btn-default" type="submit" name="btn_save" value="Simpan Dokter">
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
      $kode_dokter = $_POST['kode_dokter'];
      $nama_dokter = $_POST['nama_dokter'];
      $alamat_dokter = $_POST['alamat_dokter'];
      $telepon_dokter = $_POST['telepon_dokter'];
      $spesialis_dokter = $_POST['spesialis_dokter'];
      $poli_dokter = $_POST['poli_dokter'];
      if ($dokter->tambah_dokter($kode_dokter, $nama_dokter, $alamat_dokter, $telepon_dokter, $spesialis_dokter, $poli_dokter)) {
        header("Location:viewdokter.php");
      }else{
        echo "<script>alert('Gagal Menyimpan')</script>";
      }
    }
		 ?>
