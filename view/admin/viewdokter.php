<?php
include_once 'header.html';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Table Dokter</h3>
					<div class="bs-example widget-shadow" data-example-id="hoverable-table">
						<h4>Daftar Dokter</h4>
						<table class="table table-hover">
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
                <tr>
                  <td>DK001</td>
                  <td>Mursyid Effendi</td>
                  <td>JL. Manyar Kertoarjo 4 No.15</td>
                  <td>08144735632</td>
                  <td>Penyakit Dalam</td>
                  <td>Umum</td>
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
