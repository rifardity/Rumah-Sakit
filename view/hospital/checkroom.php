<?php
include_once 'header.html';
 ?>
<div class="container">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-8">
<h2 class="text-center">Cek Ketersediaan Ruangan</h2>
      <div class="checkroom-bg">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <div class="col-sm-4">
                  <label for="sel1">Pilih Tipe Ruangan:</label>
                </div>
                  <div class="col-sm-8">
                    <select class="form-control" id="sel1">
                      <option>President Suite</option>
  										<option>VIP A</option>
  										<option>VIP B</option>
  										<option>VIP C</option>
                      <option>Camelia (Kelas 1)</option>
  										<option>Bougenville Room (Kelas 2)</option>
                      <option>Gardenia Room (Kelas 3)</option>
                    </select>
                  </div>
                </div>
                  <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-2">
                      <input class="btn btn-default" id="cari_kamar" type="submit" name="simpan" value="Cek Kamar">
                    </div>
                  </div>

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
