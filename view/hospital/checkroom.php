<?php
include_once 'header.html';
include_once '../../app/class_kamar.php';
 ?>
<div class="container">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-8">
      <h2 class="text-center">Cek Ketersediaan Ruangan</h2>
      <div class="checkroom-bg">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12">
              <form class="form-horizontal" method="post">
                <div class="form-group">
                  <div class="col-sm-4">
                    <label for="sel1">Pilih Tipe Ruangan:</label>
                  </div>
                    <div class="col-sm-8">
                      <select name="tipe_kamar" class="form-control" id="sel1">
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
                        <input class="btn btn-default"  type="submit" name="btn_cari" value="Cek Kamar">
                      </div>
                    </div>
              </form>
            </div>
          </div>
        </div>
        <?php
        if (isset($_POST['btn_cari'])) {
          $kamar = new Kamar();
          $sql = $kamar->cari_kamar($_POST['tipe_kamar']);
          if ($sql->rowCount()>0) {
            while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
              if ($data->KAPASITAS_KAMAR>0) {
                echo "
                <h3>$data->NAMA_KAMAR $data->KAPASITAS_KAMAR $data->HARGA_KAMAR </h3>
                ";
              }
            }
          }else {
            echo "<h3>Data Kamar Masih Kosong</h3>";
          }
        }
        ?>
        <h4 class="text-center">1 Ruangan Tersedian Untuk Pasien</h4>
      </div>

    </div>
  </div>
</div>
 <?php
 include_once 'footer.html';
  ?>
