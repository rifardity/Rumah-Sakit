<?php
include_once 'header.html';
include_once '../app/class_obat.php';
 ?>

<div class="container">
  <div class="row">
   <div class="col-sm-12 checkroom-head">
     <h3>Cari Ketersediaan Stock Obat</h3>
     <p>Mencari obat menjadi lebih mudah dan efisien dengan sistem yang terintegrasi</p>
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
                    <label for="sel1">Cari Nama Obat:</label>
                  </div>
                    <div class="col-sm-8">
                      <div class="form-group">
                      <input class="form-control"  type="text" name="nama_obat" placeholder="Nama Obat">
                    </div>
                  </div>
                  </div>
                    <div class="form-group">
                      <div class="col-sm-offset-5 col-sm-2">
                        <input class="btn btn-default"  type="submit" name="btn_cari" value="Cari Obat">
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
          $obat = new Obat();
          $sql = $obat->cari_obat($_POST['nama_obat']);
          if ($sql->rowCount()>0) {
            echo "  <table class='table table-hover'>
                <thead>
                  <tr>
                    <th>Nama Obat</th>
                    <th>Harga</th>
                    <th>Tipe</th>
                  </tr>
                </thead>
                <tbody>";
            while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>
                      <td>$data->NAMA_OBAT</td>
                      <td>$data->HARGA_OBAT</td>
                      <td>$data->TIPE_OBAT</td>
                    </tr>
                ";
            }
            echo "<tbody>
                  </table>";
          }else {
            echo "<h3 class='text-center'>Data Obat Tidak Ditemukan</h3>";
          }
        }
        ?>
    </div>
  </div>
</div>
 <?php
 include_once 'footer.html';
  ?>
