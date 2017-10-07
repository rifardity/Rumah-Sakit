<?php
/**
 *Model Rumah Sakit
 */
 /*------------------------------------------------------KAMAR-------------------------------------------------------------*/
class Kamar
{
    private $kode_kamar;
    private $nama_kamar;
    private $kapasitas_kamar;
    private $tipe_kamar;
    private $fasilitas_kamar;
  function __construct(argument)
  {

  }

  public function tambah_kamar($kode_kamar,$nama_kamar,$kapasitas_kamar,$tipe_kamar,$fasilitas_kamar){
    $sql = "INSERT INTO kama(kode_kamar,nama_kamar,kapasitas_kamar,tipe_kamar,fasilitas_kamar) VALUES('$kode_kamar','$nama_kamar','$kapasitas_kamar','$tipe_kamar','$fasilitas_kamar') "

  }

  public function edit_kamar($kode_kamar){
    $sql = "SELECT * FROM kamar WHERE kode_kamar='$kode_kamar'";
  }

  public function simpan_kamar($kode_kamar,$nama_kamar,$kapasitas_kamar,$tipe_kamar,$fasilitas_kamar){
    $sql = "UPDATE kamar SET kode_kamar='$kode_kamar',nama_kamar='$nama_kamar',kapasitas_kamar='$kapasitas_kamar',tipe_kamar='$tipe_kamar',fasilitas_kamar='$fasilitas_kamar'";
  }

  public function tampil_kamar(){
    $sql = "SELECT * FROM kamar";
  }

  public function hapus_kamar($kode_kamar){
    $sql = "DELETE FROM kamar WHERE kode_kamar='$kode_kamar'";
  }

  public function hitung_kamar(){
    $sql = "SELECT COUNT(*) FROM kamar";
  }

}

 /*------------------------------------------------------DOKTER-------------------------------------------------------------*/

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

 /*------------------------------------------------------PASIEN-------------------------------------------------------------*/

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

 /*------------------------------------------------------OBAT-------------------------------------------------------------*/

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

 /*------------------------------------------------------TRANSAKSI-------------------------------------------------------------*/

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
