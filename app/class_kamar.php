<?php
require_once 'database.php';
class Kamar
{
  private $db;
  function __construct()
  {
    $link = new Database();
    $newdb= $link->get_database();
    $this->db = $newdb;
  }

  public function tambah_kamar($kode_kamar,$nama_kamar,$kapasitas_kamar,$tipe_kamar,$fasilitas_kamar,$harga_kamar){
    try {
      $sql = $this->db->prepare("INSERT INTO kamar(kode_kamar,nama_kamar,kapasitas_kamar,tipe_kamar,fasilitas_kamar,harga_kamar) VALUES(:kode_kamar,:nama_kamar,:kapasitas_kamar,:tipe_kamar,:fasilitas_kamar,:harga_kamar)");
      $sql->bindparam(":kode_kamar",$kode_kamar);
      $sql->bindparam(":nama_kamar",$nama_kamar);
      $sql->bindparam(":kapasitas_kamar",$kapasitas_kamar);
      $sql->bindparam(":tipe_kamar",$tipe_kamar);
      $sql->bindparam(":fasilitas_kamar",$fasilitas_kamar);
      $sql->bindparam(":harga_kamar",$harga_kamar);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menyimpan Eror : ".$e->getMessage());
      return false;
    }

  }

  public function edit_kamar($kode_kamar){
  try {
    $sql =$this->db->prepare("SELECT * FROM kamar WHERE kode_kamar=:kode_kamar");
    $sql->execute(array(":kode_kamar"=>$kode_kamar));
    $data =$sql->fetch(PDO::FETCH_OBJ);
    return $data;
  } catch (PDOException $e) {
    die("Gagal Mengambil Data ".$kode_kamar." Error ".$e->getMessage());
    return false;
  }

  }

  public function simpan_kamar($kode_kamar,$nama_kamar,$kapasitas_kamar,$tipe_kamar,$fasilitas_kamar,$harga_kamar){
    try {
      $sql = $this->db->prepare("UPDATE kamar SET nama_kamar=:nama_kamar,kapasitas_kamar=:kapasitas_kamar,tipe_kamar=:tipe_kamar,fasilitas_kamar=:fasilitas_kamar,harga_kamar=:harga_kamar WHERE kode_kamar=:kode_kamar");
      $sql->bindparam(":nama_kamar",$nama_kamar);
      $sql->bindparam(":kapasitas_kamar",$kapasitas_kamar);
      $sql->bindparam(":tipe_kamar",$tipe_kamar);
      $sql->bindparam(":fasilitas_kamar",$fasilitas_kamar);
      $sql->bindparam(":harga_kamar",$harga_kamar);
      $sql->bindparam(":kode_kamar",$kode_kamar);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menyimpan Eror : ".$e->getMessage());
      return false;
    }

  }

  public function tampil_kamar(){
    try {
      $sql = $this->db->prepare("SELECT * FROM kamar");
      return $sql;
    } catch (PDOException $e) {
      die("Gagal Mengambil Data Eror : ".$e->getMessage());
      return false;
    }

  }

  public function hapus_kamar($kode_kamar){
    try {
      $sql = $this->db->prepare("DELETE FROM kamar WHERE kode_kamar=:kode_kamar");
      $sql->bindparam("kode_kamar",$kode_kamar);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menghapus Data Eror : ".$e->getMessage());
      return false;
    }

  }

  public function hitung_kamar(){
    try {
      $sql = $this->db->prepare("SELECT COUNT(*) FROM kamar");
      $sql->execute();
      return $sql;
    } catch (PDOException $e) {
      die("Gagal Menghitung Data Eror : ".$e->getMessage());
      return false;
    }

  }

}


?>
