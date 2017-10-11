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

  public function cek_user($username,$password){
      $sql = $this->db->prepare("SELECT * FROM user WHERE username=:username AND password=:password");
      $sql->bindparam(":username",$username);
      $sql->bindparam(":password",$password);
      $sql->execute();
      if ($sql->rowCount()>0) {
      return true;
    }else {
      return false;
    }

  }


}


 ?>
