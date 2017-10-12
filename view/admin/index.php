<?php
include_once 'header.html';
require_once '../../app/class_dokter.php';
require_once '../../app/class_kamar.php';
require_once '../../app/class_pasien.php';
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left ">
							<h5>Jumlah</h5>
							<h4>Dokter</h4>
						</div>
						<div class="stats-right">
							<?php
							$dokter = new Dokter();
							$sql = $dokter->hitung_dokter();
							$data = $sql->fetch(PDO::FETCH_NUM);
							echo "<label>$data[0]</label>";
							?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
							<h5>Jumlah</h5>
							<h4>Pasien</h4>
						</div>
						<div class="stats-right">
							<?php
							$pasien = new Pasien();
							$sql = $pasien->hitung_pasien();
							$data = $sql->fetch(PDO::FETCH_NUM);
							echo "<label>$data[0]</label>";
							?>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Jumlah</h5>
							<h4>Kamar</h4>
						</div>
						<div class="stats-right">
							<?php
							$kamar = new Kamar();
							$sql = $kamar->tampil_kamar();
							$sql->execute();
							$data = $sql->fetch(PDO::FETCH_NUM);
							echo "<label>$data[0]</label>";
							?>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>


			</div>

		<?php
		include_once 'footer.html';
		?>
