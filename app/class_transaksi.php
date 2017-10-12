<?php
require_once 'database.php';
class Transaksi
{
    private $db;

  function __construct()
  {
    $link = new Database();
    $newdb = $link->get_database();
    $this->db = $newdb;
  }

  public function tambah_transaksi($kode_transaksi,$kode_obat,$kode_kamar,$kode_dokter,$kode_pasien,$tipe_pengobatan,$total){
    try {
      $sql = $this->db->prepare("INSERT INTO transaksi(kode_transaksi,kode_obat,kode_kamar,kode_dokter,kode_pasien,tipe_pengobatan,total) VALUES(:kode_transaksi,:kode_obat,:kode_kamar,:kode_dokter,:kode_pasien,:tipe_pengobatan,:total)");
      $sql->bindparam(":kode_transaksi",$kode_transaksi);
      $sql->bindparam(":kode_obat",$kode_obat);
      $sql->bindparam(":kode_kamar",$kode_kamar);
      $sql->bindparam(":kode_dokter",$kode_dokter);
      $sql->bindparam(":kode_pasien",$kode_pasien);
      $sql->bindparam(":tipe_pengobatan",$tipe_pengobatan);
      $sql->bindparam(":total",$total);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menyimpan Eror : ".$e->getMessage());
      return false;
    }

  }

  public function edit_transaksi($kode_transaksi){
    try {
      $sql = $this->db->prepare("SELECT * FROM transaksi WHERE kode_transaksi=:kode_transaksi");
      $sql->execute(array(":kode_transaksi"=>$kode_transaksi));
      $data = $sql->fetch(PDO::FETCH_OBJ);
      return $data;
    } catch (PDOException $e) {
      die("Gagal Mengambil Data ".$kode_transaksi." Error ".$e->getMessage());
      return false;
    }

  }

  public function simpan_transaksi($kode_transaksi,$kode_obat,$kode_kamar,$kode_dokter,$kode_pasien,$tipe_pengobatan,$total){
    try {
      $sql = $this->db->prepare("UPDATE transaksi SET kode_obat=:kode_obat,kode_kamar=:kode_kamar,kode_dokter=:kode_dokter,kode_pasien=:kode_pasien,tipe_pengobatan=:tipe_pengobatan,total=:total WHERE kode_transaksi=:kode_transaksi");
      $sql->bindparam(":kode_obat",$kode_obat);
      $sql->bindparam(":kode_kamar",$kode_kamar);
      $sql->bindparam(":kode_dokter",$kode_dokter);
      $sql->bindparam(":kode_pasien",$kode_pasien);
      $sql->bindparam(":tipe_pengobatan",$tipe_pengobatan);
      $sql->bindparam(":total",$total);
      $sql->bindparam(":kode_transaksi",$kode_transaksi);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menyimpan Eror : ".$e->getMessage());
      return false;
    }

  }

  public function tampil_transaksi(){
    try {
      $sql = $this->db->prepare("SELECT * FROM transaksi");
      return $sql;
    } catch (PDOException $e) {
      die("Gagal Mengambil Data Error : ".$e->getMessage());
      return false;
    }

  }

  public function hapus_transaksi($kode_transaksi){
    try {
      $sql = $this->db->prepare("DELETE FROM transaksi WHERE kode_transaksi=:kode_transaksi");
      $sql->bindparam(":kode_transaksi",$kode_transaksi);
      $sql->execute();
      return true;
    } catch (PDOException $e) {
      die("Gagal Menghapus Data Eror : ".$e->getMessage());
      return false;
    }
  }

  public function hitung_transaksi(){
    try {
      $sql = $this->db->prepare("SELECT COUNT(*) FROM transaksi");
      $sql->execute();
      return $sql;
    } catch (PDOException $e) {
      die("Gagal Menghitung Data Eror : ".$e->getMessage());
      return false;
    }

  }

}
?>
