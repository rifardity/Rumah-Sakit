<?php
include_once 'header.html';
require_once '../../app/class_kamar.php';
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Form Kamar </h3>
						<div class="form-three widget-shadow">
              <?php
            if (isset($_GET['kode_kamar'])) {
              $kamar = new Kamar();
              $data = $kamar->edit_kamar($_GET['kode_kamar']);
              ?>
            <form  method="post" class="form-horizontal">
              <div class="form-group">
                <label for="disabledinput" class="col-sm-2 control-label">Kode</label>
                <div class="col-sm-8">
                  <input id="disabledinput" disabled type="text" class="form-control1" name="kode_kamar" placeholder="Kode Kamar" value="<?php echo $data->KODE_KAMAR; ?>" required>
                </div>
              </div>
              <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control1" name="nama_kamar" placeholder="Nama Kamar" value="<?php echo $data->NAMA_KAMAR;?>" required>
                </div>
              </div>
              <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Kapasitas</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control1" name="kapasitas_kamar" placeholder="Kapasitas Kamar" value="<?php echo $data->KAPASITAS_KAMAR ?>" required>
                </div>
              </div>
              <div class="form-group">
                <label for="tipe_kamar" class="col-sm-2 control-label">Tipe</label>
                <div class="col-sm-8"><select name="tipe_kamar" class="form-control1">
                  <option <?php if($data->TIPE_KAMAR=="President Suite") echo "selected"; ?>>President Suite </option>
                  <option <?php if($data->TIPE_KAMAR=="VIP A") echo "selected"; ?>>VIP A </option>
                  <option <?php if($data->TIPE_KAMAR=="VIP B") echo "selected"; ?>>VIP B </option>
                  <option <?php if($data->TIPE_KAMAR=="VIP C") echo "selected"; ?>>VIP C </option>
                  <option <?php if($data->TIPE_KAMAR=="Camelia (Kelas 1)") echo "selected"; ?>>Camelia (Kelas 1) </option>
                  <option <?php if($data->TIPE_KAMAR=="Bougenville Room (Kelas 2)") echo "selected"; ?>>Bougenville Room (Kelas 2) </option>
                  <option <?php if($data->TIPE_KAMAR=="Gardenia Room (Kelas 3)") echo "selected"; ?>>Gardenia Room (Kelas 3) </option>
                </select></div>
              </div>

              <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Fasilitas</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control1" name="fasilitas_kamar" placeholder="Fasilitas Kamar" value="<?php echo $data->FASILITAS_KAMAR; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Harga</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control1" name="harga_kamar" placeholder="Harga Kamar" value="<?php echo $data->HARGA_KAMAR ?>" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-5 col-sm-2">
                  <input class="btn btn-default" type="submit" name="btn_save" value="Update Kamar">
                </div>
              </div>
            </form>
            <?php } ?>

						</div>
					</div>

				</div>
			</div>
		</div>

		<?php
		include_once 'footer.html';

    if (isset($_POST['btn_save'])) {
      $kamar = new Kamar();
      $kode_kamar = $_GET['kode_kamar'];
      $nama_kamar = $_POST['nama_kamar'];
      $kapasitas_kamar = $_POST['kapasitas_kamar'];
      $tipe_kamar = $_POST['tipe_kamar'];
      $fasilitas_kamar = $_POST['fasilitas_kamar'];
      $harga_kamar = $_POST['harga_kamar'];
      if ($kamar->simpan_kamar($kode_kamar, $nama_kamar,$kapasitas_kamar, $tipe_kamar, $fasilitas_kamar, $harga_kamar)) {
        header("Location:viewkamar.php");
      }else{
        echo "<script>alert('Gagal')</script>";
      }
    }
		 ?>
