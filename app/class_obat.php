<?php
class Obat
{
    private $kode_obat;
    private $nama_obat;
    private $harga_obat;
    private $tipe_obat;

  function __construct(argument)
  {

  }

  public function tambah_obat($kode_obat,$nama_obat,$harga_obat,$tipe_obat){
    $sql = "INSERT INTO obat(kode_obat,nama_obat,harga_obat,tipe_obat) VALUES('$kode_obat','$nama_obat','$harga_obat','$tipe_obat') ";

  }

  public function edit_obat($kode_obat){
    $sql = "SELECT * FROM obat WHERE kode_obat='$kode_obat'";
  }

  public function simpan_obat($kode_obat,$nama_obat,$harga_obat,$tipe_obat){
    $sql = "UPDATE obat SET kode_obat='$kode_obat',nama_obat='$nama_obat',harga_obat='$harga_obat',tipe_obat='$tipe_obat'";
  }

  public function tampil_obat(){
    $sql = "SELECT * FROM obat";
  }

  public function hapus_obat($kode_obat){
    $sql = "DELETE FROM obat WHERE kode_obat='$kode_obat'";
  }

  public function hitung_obat(){
    $sql = "SELECT COUNT(*) FROM obat";
  }

}


 ?>
