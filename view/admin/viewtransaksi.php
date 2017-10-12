<?php
include_once 'header.html';
include_once '../../app/class_transaksi.php';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Table Transaksi</h3>
					<div class="bs-example widget-shadow" data-example-id="hoverable-table">
						<h4>Transaksi Tercatat</h4>
						<table class="table table-hover">
              <thead>
                <tr>
                  <th>Kode Transaksi</th>
                  <th>Kode Obat</th>
                  <th>Kode Kamar</th>
                  <th>Kode Dokter</th>
                  <th>Kode Pasien</th>
                  <th>Tipe Pengobatan</th>
                  <th>Total</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $transaksi = new Transaksi();
                $sql = $transaksi->tampil_transaksi();
                $sql->execute();
                if ($sql->rowCount()>0) {
                  while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
                    echo "
                    <tr>
                      <td>$data->KODE_TRANSAKSI</td>
                      <td>$data->KODE_OBAT</td>
                      <td>$data->KODE_KAMAR</td>
                      <td>$data->KODE_DOKTER</td>
                      <td>$data->KODE_PASIEN</td>
                      <td>$data->TIPE_PENGOBATAN</td>
                      <td>$data->TOTAL</td>
                      <td><a href='edittransaksi.php?kode_transaksi=$data->KODE_TRANSAKSI' type='button' name='button' class='btn btn-default'>Edit</a></td>
                      <td><a href='viewtransaksi.php?hapus=$data->KODE_TRANSAKSI' type='button' name='button' class='btn btn-default'>Hapus</a></td>
                    </tr>
                    ";
                  }
                }else {
                  echo "<tr><td>Data Transaksi Masih Kosong</td></tr>";
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
  if ($transaksi->hapus_transaksi($_GET['hapus'])) {
    header("Location:viewtransaksi.php");
  }else {
    echo "<script>alert('Gagal Menhapus')</script>";
  }

}
 ?>
