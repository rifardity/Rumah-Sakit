<?php
include_once 'header.html';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Table Kamar</h3>
					<div class="bs-example widget-shadow" data-example-id="hoverable-table">
						<h4>Daftar Kamar</h4>
						<table class="table table-hover">
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
                <tr>
                  <td>KM001</td>
                  <td>Kamar Netral</td>
                  <td>300</td>
                  <td>Bougenvill Resident</td>
                  <td>AC Dan Tempat Tidur</td>
                  <td>1000000</td>
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
