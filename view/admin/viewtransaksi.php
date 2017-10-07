<?php
include_once 'header.html';
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
                  <th>No</th>
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
                <tr>
                  <th scope="row">1</th>
                  <td>TR001</td>
                  <td>OB001</td>
                  <td>KM001</td>
                  <td>DT001</td>
                  <td>PS001</td>
                  <td>Rawat Jalan</td>
                  <td>10000000</td>
                  <td><button type="button" name="button" class="btn btn-default">Edit</button></td>
                  <td><button type="button" name="button" class="btn btn-default">Hapus</button></td>
                </tr>

              </tbody>
            </table>
					</div>
				</div>
			</div>
		</div>

<?php
include_once 'footer.html';
 ?>
