<?php
include_once 'header.html';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="row">
						<h3 class="title1">Form Transaksi </h3>
						<div class="form-three widget-shadow">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Kode Transaksi</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="kode_transaksi" placeholder="Kode Transaksi" required>
									</div>
								</div>
                <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Kode Obat</label>
									<div class="col-sm-8"><select name="selector1" id="kode_obat" class="form-control1">
										<option>President Suite</option>
										<option>VIP A</option>
									</select></div>
								</div>

                <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Kode Kamar</label>
									<div class="col-sm-8"><select name="selector1" id="kode_kamar" class="form-control1">
										<option>President Suite</option>
										<option>VIP A</option>
									</select></div>
								</div>

                <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Kode Dokter</label>
									<div class="col-sm-8"><select name="selector1" id="kode_dokter" class="form-control1">
										<option>President Suite</option>
										<option>VIP A</option>
									</select></div>
								</div>

                <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Kode Pasien</label>
									<div class="col-sm-8"><select name="selector1" id="kode_pasien" class="form-control1">
										<option>President Suite</option>
										<option>VIP A</option>
									</select></div>
								</div>

                <div class="form-group">
                  	<label for="radio" class="col-sm-2 control-label">Tipe Pengobatan</label>
                  			<div class="col-sm-8">
                  			<div class="radio-inline"><label><input type="radio" name="tipe_pengobatan"> Rawat Inap</label></div>
                  			<div class="radio-inline"><label><input checked="" type="radio" name="tipe_pengobatan"> Rawat Jalan</label></div>
                  			</div>
                </div>
                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Total Rp.</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" id="total_transaksi" placeholder="0" disabled required>
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
