<?php
require_once 'database.php';
class Dokter
{
  private $db;
  function __construct()
  {
    $link = new Database();
    $newdb= $link->get_database();
    $this->db = $newdb;
  }

  public function tambah_dokter($kode_dokter,$nama_dokter,$alamat_dokter,$telepon_dokter,$spesialis_dokter,$poli_dokter){
    try {
      $sql = $this->db->prepare("INSERT INTO dokter(kode_dokter,nama_dokter,alamat_dokter,telepon_dokter,spesialis_dokter,poli_dokter) VALUES(:kode_dokter,:nama_dokter,:alamat_dokter,:telepon_dokter,:spesialis_dokter,:poli_dokter)");
      $sql->bindparam(":kode_dokter",$kode_dokter);
      $sql->bindparam(":nama_dokter",$nama_dokter);
      $sql->bindparam(":alamat_dokter",$alamat_dokter);
      $sql->bindparam(":telepon_dokter",$telepon_dokter);
      $sql->bindparam(":spesialis_dokter",$spesialis_dokter);
      $sql->bindparam(":poli_dokter",$poli_dokter);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menyimpan Eror : ".$e->getMessage());
      return false;
    }

  }

  public function edit_dokter($kode_dokter){
    try {
      $sql = $this->db->prepare("SELECT * FROM dokter WHERE kode_dokter=:kode_dokter");
      $sql->execute(array(":kode_dokter"=>$kode_dokter));
      $data = $sql->fetch(PDO::FETCH_OBJ);
      return $data;
    } catch (PDOException $e) {
      die("Gagal Mengambil Data ".$kode_dokter." Error ".$e->getMessage());
      return false;
    }

  }

  public function simpan_dokter($kode_dokter,$nama_dokter,$alamat_dokter,$telepon_dokter,$spesialis_dokter,$poli_dokter){
    try {
      $sql = $this->db->prepare("UPDATE dokter SET nama_dokter=:nama_dokter,alamat_dokter=:alamat_dokter,telepon_dokter=:telepon_dokter,spesialis_dokter=:spesialis_dokter,poli_dokter=:poli_dokter WHERE kode_dokter=:kode_dokter");
      $sql->bindparam(":nama_dokter",$nama_dokter);
      $sql->bindparam(":alamat_dokter",$alamat_dokter);
      $sql->bindparam(":telepon_dokter",$telepon_dokter);
      $sql->bindparam(":spesialis_dokter",$spesialis_dokter);
      $sql->bindparam(":poli_dokter",$poli_dokter);
      $sql->bindparam(":kode_dokter",$kode_dokter);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menyimpan Eror : ".$e->getMessage());
      return false;
    }

  }

  public function tampil_dokter(){
    try {
      $sql = $this->db->prepare("SELECT * FROM dokter");
      return $sql;
    } catch (PDOException $e) {
      die("Gagal Mengambil Data Eror : ".$e->getMessage());
      return false;
    }
  }

  public function hapus_dokter($kode_dokter){
    try {
      $sql = $this->db->prepare("DELETE FROM dokter WHERE kode_dokter=:kode_dokter");
      $sql->bindparam("kode_dokter",$kode_dokter);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menghapus Data Eror : ".$e->getMessage());
      return false;
    }
  }

  public function hitung_dokter(){
    try {
      $sql = $this->db->prepare("SELECT COUNT(*) FROM dokter");
      $sql->execute();
      return $sql;
    } catch (PDOException $e) {
      die("Gagal Menghitung Data Eror : ".$e->getMessage());
      return false;
    }
  }

}
 ?>
