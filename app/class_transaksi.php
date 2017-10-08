<?php
class Transaksi
{
    private $kode_transaksi;
    private $tipe_pengobatan;
    private $total;

  function __construct(argument)
  {

  }

  public function tambah_transaksi($kode_transaksi,$kode_obat,$kode_kamar,$kode_dokter,$kode_pasien,$tipe_pengobatan,$total){
    $sql = "INSERT INTO transaksi(kode_transaksi,kode_obat,kode_kamar,kode_dokter,kode_pasien,tipe_pengobatan,total) VALUES('$kode_transaksi','$kode_obat','$kode_kamar','$kode_dokter','$kode_pasien','$tipe_pengobatan','$total') ";

  }

  public function edit_transaksi($kode_transaksi){
    $sql = "SELECT * FROM transaksi WHERE kode_transaksi='$kode_transaksi'";
  }

  public function simpan_transaksi($kode_transaksi,$kode_obat,$kode_kamar,$kode_dokter,$kode_pasien,$tipe_pengobatan,$total){
    $sql = "UPDATE transaksi SET kode_transaksi='$kode_transaksi',kode_obat='$kode_obat',kode_kamar='$kode_kamar',kode_dokter='$kode_dokter',kode_pasien='$kode_pasien',tipe_pengobatan='$tipe_pengobatan',total='$total'";
  }

  public function tampil_transaksi(){
    $sql = "SELECT * FROM transaksi";
  }

  public function hapus_transaksi($kode_transaksi){
    $sql = "DELETE FROM transaksi WHERE kode_transaksi='$kode_transaksi'";
  }

  public function hitung_transaksi(){
    $sql = "SELECT COUNT(*) FROM transaksi";
  }

}
?>
