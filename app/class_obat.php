<?php
require_once 'database.php';
class Obat
{
    private $db;

  function __construct()
  {
    $link = new Database();
    $newdb = $link->get_database();
    $this->db = $newdb;
  }

  public function tambah_obat($kode_obat,$nama_obat,$harga_obat,$tipe_obat){
    try {
      $sql = $this->db->prepare("INSERT INTO obat(kode_obat,nama_obat,harga_obat,tipe_obat) VALUES(:kode_obat,:nama_obat,:harga_obat,:tipe_obat)");
      $sql->bindparam(":kode_obat",$kode_obat);
      $sql->bindparam(":nama_obat",$nama_obat);
      $sql->bindparam(":harga_obat",$harga_obat);
      $sql->bindparam(":tipe_obat",$tipe_obat);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menyimpan Eror : ".$e->getMessage());
      return false;
    }
  }

  public function edit_obat($kode_obat){
    try {
      $sql = $this->db->prepare("SELECT * FROM obat WHERE kode_obat=:kode_obat");
      $sql->execute(array(":kode_obat"=>$kode_obat));
      $data = $sql->fetch(PDO::FETCH_OBJ);
      return $data;
    } catch (PDOException $e) {
      die("Gagal Mengambil Data ".$kode_obat." Error ".$e->getMessage());
      return false;
    }
  }

  public function simpan_obat($kode_obat,$nama_obat,$harga_obat,$tipe_obat){
    try {
      $sql = $this->db->prepare("UPDATE obat SET nama_obat=:nama_obat,harga_obat=:harga_obat,tipe_obat=:tipe_obat WHERE kode_obat=:kode_obat");
      $sql->bindparam(":nama_obat",$nama_obat);
      $sql->bindparam(":harga_obat",$harga_obat);
      $sql->bindparam(":tipe_obat",$tipe_obat);
      $sql->bindparam(":kode_obat",$kode_obat);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menyimpan Eror : ".$e->getMessage());
      return false;
    }
  }

  public function tampil_obat(){
    try {
      $sql = $this->db->prepare("SELECT * FROM obat");
      return $sql;
    } catch (PDOException $e) {
      die("Gagal Mengambil Data Eror : ".$e->getMessage());
      return false;
    }
  }

  public function hapus_obat($kode_obat){
    try {
      $sql = $this->db->prepare("DELETE FROM obat WHERE kode_obat=:kode_obat");
      $sql->bindparam("kode_obat",$kode_obat);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menghapus Data Eror : ".$e->getMessage());
      return false;
    }
  }

  public function hitung_obat(){
    try {
      $sql = $this->db->prepare("SELECT COUNT(*) FROM obat");
      $sql->execute();
      return $sql;
    } catch (PDOException $e) {
      die("Gagal Menghitung Data Eror : ".$e->getMessage());
      return false;
    }
  }

}


 ?>
