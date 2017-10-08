<?php
include_once 'header.html';
 ?>
<div class="container">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-8">
<h2 class="text-center">Cari Obat</h2>
      <div class="checkroom-bg">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
              <form class="form-horizontal" action="index.html" method="post">

              <div class="form-group">
                <label for="focusedinput" class="col-sm-4 control-label">Masukan Nama Obat</label>
                  <div class="col-sm-8">
    								<input type="text" class="form-control1" id="kode_dokter" placeholder="Kode Dokter" required>
    							</div>
                </div>
                  <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-2">
                      <input class="btn btn-default" id="cari_obat" type="submit" name="simpan" value="Cari Obat">
                    </div>
                  </div>
                  </form>
            </div>
          </div>
        </div>
        <h4 class="text-center">1 Ruangan Tersedian Untuk Pasien</h4>
      </div>

    </div>
  </div>
</div>
 <?php
include_once 'footer.html';
  ?>
