<?php
require_once 'database.php';
class Pasien
{
    private $db;

  function __construct()
  {
    $link = new Database();
    $newdb = $link->get_database();
    $this->db = $newdb;
  }

  public function tambah_pasien($kode_pasien,$nama_pasien,$alamat_pasien,$telepon_pasien,$penyakit_pasien){
    try {
      $sql = $this->db->prepare("INSERT INTO pasien(kode_pasien,nama_pasien,alamat_pasien,telepon_pasien,penyakit_pasien) VALUES(:kode_pasien,:nama_pasien,:alamat_pasien,:telepon_pasien,:penyakit_pasien)");
      $sql->bindparam(":kode_pasien",$kode_pasien);
      $sql->bindparam(":nama_pasien",$nama_pasien);
      $sql->bindparam(":alamat_pasien",$alamat_pasien);
      $sql->bindparam(":telepon_pasien",$telepon_pasien);
      $sql->bindparam(":penyakit_pasien",$penyakit_pasien);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menyimpan Eror : ".$e->getMessage());
      return false;
    }
  }

  public function edit_pasien($kode_pasien){
    try {
      $sql = $this->db->prepare("SELECT * FROM pasien WHERE kode_pasien=:kode_pasien");
      $sql->bindparam(":kode_pasien",$kode_pasien);
      $sql->execute();
      $data = $sql->fetch(PDO::FETCH_OBJ);
      return $data;
    } catch (PDOException $e) {
      die("Gagal Mengambil Data ".$kode_pasien." Error ".$e->getMessage());
      return false;
    }
  }

  public function simpan_pasien($kode_pasien,$nama_pasien,$alamat_pasien,$telepon_pasien,$penyakit_pasien){
    try {
      $sql = $this->db->prepare("UPDATE pasien SET nama_pasien=:nama_pasien,alamat_pasien=:alamat_pasien,telepon_pasien=:telepon_pasien,penyakit_pasien=:penyakit_pasien WHERE kode_pasien=:kode_pasien");
      $sql->bindparam(":nama_pasien",$nama_pasien);
      $sql->bindparam(":alamat_pasien",$alamat_pasien);
      $sql->bindparam(":telepon_pasien",$telepon_pasien);
      $sql->bindparam(":penyakit_pasien",$penyakit_pasien);
      $sql->bindparam(":kode_pasien",$kode_pasien);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menyimpan Eror : ".$e->getMessage());
      return false;
    }
  }

  public function tampil_pasien(){
    try {
      $sql = $this->db->prepare("SELECT * FROM pasien");
      return $sql;
    } catch (PDOException $e) {
      die("Gagal Mengambil Data Eror : ".$e->getMessage());
      return false;
    }
  }

  public function hapus_pasien($kode_pasien){
    try {
      $sql = $this->db->prepare("DELETE FROM pasien WHERE kode_pasien=:kode_pasien");
      $sql->bindparam("kode_pasien",$kode_pasien);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menghapus Data Eror : ".$e->getMessage());
      return false;
    }
  }

  public function hitung_pasien(){
    try {
      $sql = $this->db->prepare("SELECT COUNT(*) FROM pasien");
      $sql->execute();
      return $sql;
    } catch (PDOException $e) {
      die("Gagal Menghitung Data Eror : ".$e->getMessage());
      return false;
    }
  }

}

 ?>
