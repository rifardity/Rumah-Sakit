<?php
include_once 'header.html';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Form Kamar </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kode</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="kode_kamar" placeholder="Kode Kamar" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="nama_kamar" placeholder="Nama Kamar" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kapasitas</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" id="kapasitas_kamar" placeholder="Kapasitas Kamar" required>
									</div>
								</div>
                <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Tipe</label>
									<div class="col-sm-8"><select name="selector1" id="tipe_kamar" class="form-control1">
										<option>President Suite</option>
										<option>VIP A</option>
										<option>VIP B</option>
										<option>VIP C</option>
                    <option>Camelia (Kelas 1)</option>
										<option>Bougenville Room (Kelas 2)</option>
                    <option>Gardenia Room (Kelas 3)</option>
									</select></div>
								</div>

                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Fasilitas</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="fasilitas_kamar" placeholder="Fasilitas Kamar" required>
									</div>
								</div>

                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Harga</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" id="harga_kamar" placeholder="Harga Kamar" required>
									</div>
								</div>
                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-2">

                    <input class="btn btn-default" type="submit" name="simpan" value="Simpan Kamar">
                  </div>
                </div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<?php
		include_once 'footer.html';
		 ?>
