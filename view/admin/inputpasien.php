<?php
include_once 'header.html';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Form Pasien </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kode</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="kode_pasien" placeholder="Kode Pasien" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="nama_pasien" placeholder="Nama Pasien" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
									<div class="col-sm-8">
										<input type="textarea" class="form-control1" id="alamat_pasien" placeholder="Alamat Pasien" required>
									</div>
								</div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
									<div class="col-sm-8">
										<input type="tel" class="form-control1" id="telepon_pasien" placeholder="Telepon Pasien" required>
									</div>
								</div>

                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Penyakit</label>
									<div class="col-sm-8">
										<input type="textarea" class="form-control1" id="penyakit_pasien" placeholder="Penyakit Pasien" required>
									</div>
								</div>
                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-2">

                    <input class="btn btn-default" type="submit" name="simpan" value="Simpan Pasien">
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
