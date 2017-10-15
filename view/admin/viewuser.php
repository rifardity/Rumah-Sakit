<?php
include_once 'header.html';
require_once '../../app/class_user.php';
 ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="hoverable-table">
						<h4>Daftar user</h4>
						<table id="table" class="table table-hover">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Hak Akses</th>
                  <th>Edit</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $user = new User();
                $sql = $user->tampil_user();
                $sql->execute();
                if ($sql->rowCount()>0) {
                  while ($data = $sql->fetch(PDO::FETCH_OBJ)) {
                    echo "
                    <tr>
                      <td>$data->USERNAME</td>
                      <td>$data->LEVEL</td>
                      <td><a href='edituser.php?username=$data->USERNAME' type='button' name='btn_edit' class='btn btn-default'>Edit</a></td>
                      <td><a href='viewuser.php?hapus=$data->USERNAME' type='button' name='btn_save' class='btn btn-default'>Hapus</a></td>
                    </tr>

                    ";
                  }
                }else {
                  echo "<tr><td>Data Masih Kosong</td></tr>";
                }
                ?>
              </tbody>
            </table>
					</div>
				</div>
			</div>
		</div>

<?php
include_once 'footer.html';
if (isset($_GET['hapus'])) {
  if ($user->hapus_user($_GET['hapus'])) {
    header("Location:viewuser.php");
  }else {
    echo "<script>alert('Gagal Menhapus')</script>";
  }
}
 ?>
