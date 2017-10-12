<?php
include_once 'header.html';
require_once '../../app/class_obat.php';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="hoverable-table">
						<h4>Daftar Obat</h4>
						<table class="table table-hover">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Harga</th>
                  <th>Tipe</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $obat = new Obat();
                $sql = $obat->tampil_obat();
                $sql->execute();
                if ($sql->rowCount()>0) {
                  while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
                    echo "
                    <tr>
                      <td>$data->KODE_OBAT</td>
                      <td>$data->NAMA_OBAT</td>
                      <td>$data->HARGA_OBAT</td>
                      <td>$data->TIPE_OBAT</td>
                      <td><a href='editobat.php?kode_obat=$data->KODE_OBAT' type='button' name='btn_edit' class='btn btn-default'>Edit</a></td>
                      <td><a href='viewobat.php?hapus=$data->KODE_OBAT' type='button' name='btn_save' class='btn btn-default'>Hapus</a></td>
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
  if ($obat->hapus_obat($_GET['hapus'])) {
    header("Location:viewobat.php");
  }else {
    echo "<script>alert('Gagal Menhapus')</script>";
  }
}
 ?>
