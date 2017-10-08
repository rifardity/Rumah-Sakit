<?php
class Database
{
  private $hostname = 'localhost';
  private $db_name  = 'rumahsakit';
  private $username = 'root';
  private $password = '';
  private $link;

  public function get_database(){
      try {
        $this->link = new PDO('mysql:host='.$this->hostname.';dbname='.$this->db_name, $this->username, $this->password);
      } catch (PDOException $e) {
        die('Gagal Konek Ke Database '.$e->getMessage());
      }
      return $this->link;
    }
  }
?>
