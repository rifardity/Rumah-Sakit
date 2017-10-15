<?php
include_once 'header.html';
require_once '../../app/class_kamar.php';
 ?>
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="hoverable-table">
						<h4>Daftar Kamar</h4>
						<table id="table" class="table table-hover">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Kapasitas</th>
                  <th>Tipe</th>
                  <th>Fasilitas</th>
                  <th>Harga</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $kamar = new Kamar();
                $sql=$kamar->tampil_kamar();
                $sql->execute();
                if ($sql->rowCount()>0) {
                  while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
                    echo "
                    <tr>
                      <td>$data->KODE_KAMAR</td>
                      <td>$data->NAMA_KAMAR</td>
                      <td>$data->KAPASITAS_KAMAR</td>
                      <td>$data->TIPE_KAMAR</td>
                      <td>$data->FASILITAS_KAMAR</td>
                      <td>$data->HARGA_KAMAR</td>
                      <td><a href='editkamar.php?kode_kamar=$data->KODE_KAMAR' type='button' name='btn_edit' class='btn btn-default'>Edit</a></td>
                      <td><a href='viewkamar.php?hapus=$data->KODE_KAMAR' type='button' name='btn_hapus' class='btn btn-default'>Hapus</a></td>
                    </tr>";
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
  if ($kamar->hapus_kamar($_GET['hapus'])) {
    header("Location:viewkamar.php");
  }else {
    echo "<script>alert('Gagal Menhapus')</script>";
  }
}
?>
