<?php
require_once 'database.php';
class User
{
    private $db;

  function __construct()
  {
    $link = new Database();
    $newdb = $link->get_database();
    $this->db = $newdb;
  }

  public function tambah_user($username,$password,$level){
    try {
      $new_password = password_hash($password,PASSWORD_DEFAULT);
      $sql = $this->db->prepare("INSERT INTO user(username,password,level) VALUES(:username,:password,:level)");
      $sql->bindparam(":username", $username);
      $sql->bindparam(":password", $new_password);
      $sql->bindparam(":level", $level);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal  Eror : ".$e->getMessage());
      return false;
    }

  }


  public function simpan_user($username,$level){
    try {
      $sql = $this->db->prepare("UPDATE user SET level=:level WHERE username=:username");
      $sql->bindparam(":username",$username);
      $sql->bindparam(":level",$level);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menyimpan Eror : ".$e->getMessage());
      return false;
    }
  }

  public function hapus_user($username){
    try {
      $sql = $this->db->prepare("DELETE FROM user WHERE username=:username");
      $sql->bindparam(":username",$username);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menghapus Data Eror : ".$e->getMessage());
      return false;
    }
  }

  public function tampil_user(){
    try {
      $sql = $this->db->prepare("SELECT * FROM user");
      return $sql;
    } catch (PDOException $e) {
      die("Gagal Mengambil Data Eror : ".$e->getMessage());
      return false;
    }
  }

  public function edit_user($username){
    try {
      $sql = $this->db->prepare("SELECT * FROM user WHERE username=:username");
      $sql->bindparam(":username",$username);
      $sql->execute();
      $data = $sql->fetch(PDO::FETCH_OBJ);
      return $data;
    } catch (PDOException $e) {
      die("Gagal Mengambil Data ".$username." Error ".$e->getMessage());
      return false;
    }
  }

  public function login($username,$password){
      try {
        $sql = $this->db->prepare("SELECT * FROM user WHERE username=:username");
        $sql->bindparam(":username",$username);
        $sql->execute();
        $data = $sql->fetch(PDO::FETCH_OBJ);
        if ($sql->rowCount()>0) {
          if (password_verify($password, $data->PASSWORD)) {
            $_SESSION['user_session'] = $data->USERNAME;
            return true;
          }else {
            return false;
          }
        }
      } catch (PDOException $e) {
        die("Gagal  Eror : ".$e->getMessage());
        return false;
      }
    }

    public function is_login(){
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
    }

    public function logout(){
       session_destroy();
       unset($_SESSION['user_session']);
       return true;
     }

}


 ?>
