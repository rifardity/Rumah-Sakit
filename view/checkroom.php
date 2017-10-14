<?php
include_once 'header.html';
include_once '../app/class_kamar.php';
 ?>

<div class="container">
  <div class="row">
   <div class="col-sm-12 checkroom-head">
     <h3>Cari Ketersediaan Kamar</h3>
     <p>Mencari kamar menjadi lebih mudah dan efisien dengan sistem yang terintegrasi</p>
   </div>
 </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
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
      </div>
    </div>
    <div class="col-sm-6">
        <?php
        if (isset($_POST['btn_cari'])) {
          $kamar = new Kamar();
          $sql = $kamar->cari_kamar($_POST['tipe_kamar']);
          echo "<h3 class='text-center'>".$_POST['tipe_kamar']."</h3>";
          if ($sql->rowCount()>0) {
            echo "  <table class='table table-hover'>
                <thead>
                  <tr>
                    <th>Nama Kamar</th>
                    <th>Kapasitas Tersedia</th>
                    <th>Harga</th>
                  </tr>
                </thead>
                <tbody>";
            while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
              if ($data->KAPASITAS_KAMAR>0) {
                echo "<tr>
                      <td>$data->NAMA_KAMAR</td>
                      <td>$data->KAPASITAS_KAMAR</td>
                      <td>$data->HARGA_KAMAR</td>
                    </tr>
                ";
              }
            }
            echo "<tbody>
                  </table>";
          }else {
            echo "<h3 class='text-center'>Data Kamar Masih Kosong</h3>";
          }
        }
        ?>
    </div>
  </div>
</div>
 <?php
 include_once 'footer.html';
  ?>
