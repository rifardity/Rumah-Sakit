<?php
class Dokter
{
    private $kode_dokter;
    private $nama_dokter;
    private $alamat_dokter;
    private $telepon_dokter;
    private $spesialis_dokter;
    private $poli_dokter;
  function __construct(argument)
  {

  }

  public function tambah_dokter($kode_dokter,$nama_dokter,$alamat_dokter,$telepon_dokter,$spesialis_dokter,$poli_dokter){
    $sql = "INSERT INTO dokter(kode_dokter,nama_dokter,alamat_dokter,telepon_dokter,spesialis_dokter,poli_dokter) VALUES('$kode_dokter','$nama_dokter','$alamat_dokter','$telepon_dokter','$spesialis_dokter','$poli_dokter') ";

  }

  public function edit_dokter($kode_dokter){
    $sql = "SELECT * FROM dokter WHERE kode_dokter='$kode_dokter'";
  }

  public function simpan_dokter($kode_dokter,$nama_dokter,$alamat_dokter,$telepon_dokter,$spesialis_dokter,$poli_dokter){
    $sql = "UPDATE dokter SET kode_dokter='$kode_dokter',nama_dokter='$nama_dokter',alamat_dokter='$alamat_dokter',telepon_dokter='$telepon_dokter',spesialis_dokter='$spesialis_dokter',poli_dokter='$poli_dokter'";
  }

  public function tampil_dokter(){
    $sql = "SELECT * FROM dokter";
  }

  public function hapus_dokter($kode_dokter){
    $sql = "DELETE FROM dokter WHERE kode_dokter='$kode_dokter'";
  }

  public function hitung_dokter(){
    $sql = "SELECT COUNT(*) FROM dokter";
  }

}
 ?>
