<?php
include_once 'header.html';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Table Obat</h3>
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
                <tr>
                  <td>PS001</td>
                  <td>Panadol</td>
                  <td>150000</td>
                  <td>Kapsul</td>
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
