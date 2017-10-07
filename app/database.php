<?php
/**
 *
 */
class Database
{
  private $hostname = "localhost";
  private $db_name  = "rumahsakit";
  private $username = "root";
  private $password = "";
  public $conn;

  public function db_koneksi(){
    $this->conn=null;
    try{
      $this->conn=new PDO("mysql:host=". $this->hostname .";dbname=". $this->db_name, $this->username, $this->password );
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      echo "Koneksi Error : " . $e->getMessage();
    }
    return $this->conn;
    }
}

 ?>
