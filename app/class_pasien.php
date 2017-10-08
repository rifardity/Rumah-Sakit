<?php
class Pasien
{
    private $kode_pasien;
    private $nama_pasien;
    private $alamat_pasien;
    private $telepon_pasien;
    private $penyakit_pasien;

  function __construct(argument)
  {

  }

  public function tambah_pasien($kode_pasien,$nama_pasien,$alamat_pasien,$telepon_pasien,$penyakit_pasien){
    $sql = "INSERT INTO pasien(kode_pasien,nama_pasien,alamat_pasien,telepon_pasien,penyakit_pasien) VALUES('$kode_pasien','$nama_pasien','$alamat_pasien','$telepon_pasien','$penyakit_pasien') ";

  }

  public function edit_pasien($kode_pasien){
    $sql = "SELECT * FROM pasien WHERE kode_pasien='$kode_pasien'";
  }

  public function simpan_pasien($kode_pasien,$nama_pasien,$alamat_pasien,$telepon_pasien,$penyakit_pasien){
    $sql = "UPDATE pasien SET kode_pasien='$kode_pasien',nama_pasien='$nama_pasien',alamat_pasien='$alamat_pasien',telepon_pasien='$telepon_pasien',penyakit_pasien='$penyakit_pasien'";
  }

  public function tampil_pasien(){
    $sql = "SELECT * FROM pasien";
  }

  public function hapus_pasien($kode_pasien){
    $sql = "DELETE FROM pasien WHERE kode_pasien='$kode_pasien'";
  }

  public function hitung_pasien(){
    $sql = "SELECT COUNT(*) FROM pasien";
  }

}

 ?>
