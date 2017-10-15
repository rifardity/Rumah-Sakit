<?php
include_once 'header.html';
require_once '../../app/class_dokter.php'
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="hoverable-table">
						<h4>Daftar Dokter</h4>
						<table id="table" class="table table-hover">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Spesialis</th>
                  <th>Poli</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $dokter = new Dokter();
                $sql=$dokter->tampil_dokter();
                $sql->execute();
                if ($sql->rowCount()>0) {
                  while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
                    echo "
                    <tr>
                      <td>$data->KODE_DOKTER</td>
                      <td>$data->NAMA_DOKTER</td>
                      <td>$data->ALAMAT_DOKTER</td>
                      <td>$data->TELEPON_DOKTER</td>
                      <td>$data->SPESIALIS_DOKTER</td>
                      <td>$data->POLI_DOKTER</td>
                      <td><a href='editdokter.php?kode_dokter=$data->KODE_DOKTER' type='button' name='btn_edit' class='btn btn-default'>Edit</a></td>
                      <td><a href='viewdokter.php?hapus=$data->KODE_DOKTER' type='button' name='btn_save' class='btn btn-default'>Hapus</a></td>
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
  if ($dokter->hapus_dokter($_GET['hapus'])) {
    header("Location:viewdokter.php");
  }else {
    echo "<script>alert('Gagal Menhapus')</script>";
  }
}
 ?>
