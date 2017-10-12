-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Okt 2017 pada 15.21
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `KODE_DOKTER` varchar(10) NOT NULL,
  `NAMA_DOKTER` varchar(100) DEFAULT NULL,
  `ALAMAT_DOKTER` varchar(100) DEFAULT NULL,
  `TELEPON_DOKTER` varchar(20) DEFAULT NULL,
  `SPESIALIS_DOKTER` varchar(100) DEFAULT NULL,
  `POLI_DOKTER` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `KODE_KAMAR` varchar(10) NOT NULL,
  `NAMA_KAMAR` varchar(100) DEFAULT NULL,
  `KAPASITAS_KAMAR` int(11) DEFAULT NULL,
  `TIPE_KAMAR` varchar(100) DEFAULT NULL,
  `FASILITAS_KAMAR` varchar(200) DEFAULT NULL,
  `HARGA_KAMAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`KODE_KAMAR`, `NAMA_KAMAR`, `KAPASITAS_KAMAR`, `TIPE_KAMAR`, `FASILITAS_KAMAR`, `HARGA_KAMAR`) VALUES
('KM001', 'Melati', 20, 'VIP A', 'Ac Dan Bed', 120000),
('KM002', 'Mawar', 10, 'VIP B', 'Ac Dan Kipas Angin', 34444);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `KODE_OBAT` varchar(10) NOT NULL,
  `NAMA_OBAT` varchar(100) DEFAULT NULL,
  `HARGA_OBAT` int(11) DEFAULT NULL,
  `TIPE_OBAT` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `KODE_PASIEN` varchar(10) NOT NULL,
  `NAMA_PASIEN` varchar(100) DEFAULT NULL,
  `ALAMAT_PASIEN` varchar(100) DEFAULT NULL,
  `TELEPON_PASIEN` varchar(20) DEFAULT NULL,
  `PENYAKIT_PASIEN` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `KODE_TRANSAKSI` varchar(10) NOT NULL,
  `KODE_OBAT` varchar(10) DEFAULT NULL,
  `KODE_KAMAR` varchar(10) DEFAULT NULL,
  `KODE_DOKTER` varchar(10) DEFAULT NULL,
  `KODE_PASIEN` varchar(10) DEFAULT NULL,
  `TIPE_PENGOBATAN` varchar(200) DEFAULT NULL,
  `TOTAL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `LEVEL` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`USERNAME`, `PASSWORD`, `LEVEL`) VALUES
('ardi', 'admin', 'admin'),
('doni', 'apoteker', 'apoteker'),
('master', 'master', 'master');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`KODE_DOKTER`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`KODE_KAMAR`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`KODE_OBAT`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`KODE_PASIEN`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`KODE_TRANSAKSI`),
  ADD KEY `FK_BEROBAT` (`KODE_PASIEN`),
  ADD KEY `FK_DIBELI` (`KODE_OBAT`),
  ADD KEY `FK_DIGUNAKAN` (`KODE_KAMAR`),
  ADD KEY `FK_RELATIONSHIP_2` (`KODE_DOKTER`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_BEROBAT` FOREIGN KEY (`KODE_PASIEN`) REFERENCES `pasien` (`KODE_PASIEN`),
  ADD CONSTRAINT `FK_DIBELI` FOREIGN KEY (`KODE_OBAT`) REFERENCES `obat` (`KODE_OBAT`),
  ADD CONSTRAINT `FK_DIGUNAKAN` FOREIGN KEY (`KODE_KAMAR`) REFERENCES `kamar` (`KODE_KAMAR`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`KODE_DOKTER`) REFERENCES `dokter` (`KODE_DOKTER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
