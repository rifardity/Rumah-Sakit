<?php
include_once 'header.html';
require_once '../../app/class_pasien.php';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Table Pasien</h3>
					<div class="bs-example widget-shadow" data-example-id="hoverable-table">
						<h4>Daftar Pasien</h4>
						<table class="table table-hover">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Penyakit</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $pasien = new Pasien();
                $sql = $pasien->tampil_pasien();
                $sql->execute();
                if ($sql->rowCount()>0) {
                  while ($data=$sql->fetch(PDO::FETCH_OBJ)) {
                  echo "
                  <tr>
                    <td>$data->KODE_PASIEN</td>
                    <td>$data->NAMA_PASIEN</td>
                    <td>$data->ALAMAT_PASIEN</td>
                    <td>$data->TELEPON_PASIEN</td>
                    <td>$data->PENYAKIT_PASIEN</td>
                    <td><a href='editpasien.php?kode_pasien=$data->KODE_PASIEN' type='button' name='button' class='btn btn-default'>Edit</a></td>
                    <td><a href='viewpasien.php?hapus=$data->KODE_PASIEN' type='button' name='button' class='btn btn-default'>Hapus</a></td>
                  </tr>
                  ";
                  }
                }else {
                  echo "<tr><td>Data Masih Kosong</td></tr>";
                }
                ?>
              </tbody>
            </table>
					</div>
				</div>
			</div>
		</div>

<?php
include_once 'footer.html';
if (isset($_GET['hapus'])) {
  if ($pasien->hapus_pasien($_GET['hapus'])) {
    header("Location:viewpasien.php");
  }else {
    echo "<script>alert('Gagal Menhapus')</script>";
  }
}
 ?>
