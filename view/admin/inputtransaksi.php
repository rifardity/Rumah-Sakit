<?php
include_once 'header.html';
require_once '../../app/class_dokter.php';
require_once '../../app/class_kamar.php';
require_once '../../app/class_pasien.php';
require_once '../../app/class_dokter.php';
require_once '../../app/class_obat.php';
require_once '../../app/class_transaksi.php';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Form Transaksi </h3>
						<div class="form-three widget-shadow">
							<form method="post" class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kode Transaksi</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="kode_transaksi" placeholder="Kode Transaksi" required>
									</div>
								</div>
                <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Kode Obat</label>
									<div class="col-sm-8"><select  name="kode_obat" class="form-control1">
                    <?php
                    $obat = new Obat();
                    $sql = $obat->tampil_obat();
                    $sql->execute();
                    if ($sql->rowCount()>0) {
                      while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
                        echo "<option>$data->KODE_OBAT $data->NAMA_OBAT</option>";
                      }
                    } else {
                    echo "<option>Data Obat Masih Kosong</option>";
                    }
                    ?>
									</select></div>
								</div>

                <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Kode Kamar</label>
									<div class="col-sm-8"><select name="kode_kamar" class="form-control1">
                    <?php
                    $kamar = new Kamar();
                    $sql = $kamar->tampil_kamar();
                    $sql->execute();
                    if ($sql->rowCount()>0) {
                      while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
                        if ($data->KAPASITAS_KAMAR>0) {
                        echo "<option>$data->KODE_KAMAR $data->NAMA_KAMAR</option>";
                        }
                      }
                    } else {
                    echo "<option>Data Kamar Masih Kosong</option>";
                    }
                    ?>
									</select></div>
								</div>

                <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Kode Dokter</label>
									<div class="col-sm-8"><select  name="kode_dokter" class="form-control1">
                    <?php
                    $dokter = new Dokter();
                    $sql = $dokter->tampil_dokter();
                    $sql->execute();
                    if ($sql->rowCount()>0) {
                      while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
                        echo "<option>$data->KODE_DOKTER $data->NAMA_DOKTER</option>";
                      }
                    } else {
                    echo "<option>Data Dokter Masih Kosong</option>";
                    }
                    ?>
									</select></div>
								</div>

                <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Kode Pasien</label>
									<div class="col-sm-8"><select  name="kode_pasien" class="form-control1">
                    <?php
                    $pasien = new Pasien();
                    $sql = $pasien->tampil_pasien();
                    $sql->execute();
                    if ($sql->rowCount()>0) {
                      while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
                        echo "<option>$data->KODE_PASIEN $data->NAMA_PASIEN</option>";
                      }
                    } else {
                    echo "<option>Data Pasien Masih Kosong</option>";
                    }
                    ?>
									</select></div>
								</div>

                <div class="form-group">
                  	<label for="radio" class="col-sm-2 control-label">Tipe Pengobatan</label>
                  			<div class="col-sm-8">
                  			<div class="radio-inline"><label><input type="radio" name="tipe_pengobatan" value="Rawat Inap"> Rawat Inap</label></div>
                  			<div class="radio-inline"><label><input checked="" type="radio" name="tipe_pengobatan" value="Rawat Jalan"> Rawat Jalan</label></div>
                  			</div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-2">
                    <input class="btn btn-default" type="submit" name="btn_save" value="Simpan Transaksi">
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
      $transaksi = new Transaksi();
      $kode_transaksi= $_POST['kode_transaksi'];
      $arr_obat = explode(' ',trim($_POST['kode_obat']));
      $kode_obat= $arr_obat[0];
      $arr_kamar = explode(' ',trim($_POST['kode_kamar']));
      $kode_kamar= $arr_kamar[0];
      $arr_dokter = explode(' ',trim($_POST['kode_dokter']));
      $kode_dokter= $arr_dokter[0];
      $arr_pasien = explode(' ',trim($_POST['kode_pasien']));
      $kode_pasien= $arr_pasien[0];
      $tipe_pengobatan= $_POST['tipe_pengobatan'];
      $data = $obat->edit_obat($kode_obat);
      $harga_obat = (int)$data->HARGA_OBAT;
      $data = $kamar->edit_kamar($kode_kamar);
      $harga_kamar = (int)$data->HARGA_KAMAR;
      $total= $harga_obat+$harga_kamar;
      if ($transaksi-> tambah_transaksi($kode_transaksi,$kode_obat,$kode_kamar,$kode_dokter,$kode_pasien,$tipe_pengobatan,$total)) {
        header("Location:viewtransaksi.php");
      }else {
          echo "<script>alert('Gagal Menyimpan')</script>";
      }
    }
		 ?>
