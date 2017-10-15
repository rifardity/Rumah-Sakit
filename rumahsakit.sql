-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Okt 2017 pada 09.27
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

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`KODE_DOKTER`, `NAMA_DOKTER`, `ALAMAT_DOKTER`, `TELEPON_DOKTER`, `SPESIALIS_DOKTER`, `POLI_DOKTER`) VALUES
('DK001', 'Felicia Citra', 'SImo Gunung Kidul', '0845', 'Penyakit Dalam', 'Paru');

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
('KM001', 'Melati', 14, 'VIP A', 'Ac Dan Bed', 120000),
('KM002', 'Mawar', 7, 'VIP B', 'Ac Dan Kipas Angin', 34444),
('KM003', 'Matahari', 1, 'VIP A', 'Kulkas Tv', 34000);

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

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`KODE_OBAT`, `NAMA_OBAT`, `HARGA_OBAT`, `TIPE_OBAT`) VALUES
('OB001', 'Komix', 23000, 'Sirup'),
('OB2', 'Antangin', 23000, 'Tablet');

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

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`KODE_PASIEN`, `NAMA_PASIEN`, `ALAMAT_PASIEN`, `TELEPON_PASIEN`, `PENYAKIT_PASIEN`) VALUES
('PS001', 'Aries Setiawan', 'Banyu Urip', '067575', 'Jantung');

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

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`KODE_TRANSAKSI`, `KODE_OBAT`, `KODE_KAMAR`, `KODE_DOKTER`, `KODE_PASIEN`, `TIPE_PENGOBATAN`, `TOTAL`) VALUES
('cb', 'OB2', 'KM002', 'DK001', 'PS001', 'Rawat Inap', 57444),
('COba2', 'OB001', 'KM001', 'DK001', 'PS001', 'Rawat Inap', 143000),
('TR000000', 'OB001', 'KM001', 'DK001', 'PS001', 'Rawat Jalan', 143000),
('TR003', 'OB2', 'KM002', 'DK001', 'PS001', 'Rawat Inap', 57444),
('TR005', 'OB001', 'KM001', 'DK001', 'PS001', 'Rawat Inap', 143000),
('TR008', 'OB001', 'KM002', 'DK001', 'PS001', 'Rawat Inap', 57444),
('TR009', 'OB001', 'KM001', 'DK001', 'PS001', 'Rawat Inap', 143000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(256) NOT NULL,
  `LEVEL` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`USERNAME`, `PASSWORD`, `LEVEL`) VALUES
('admin', '$2y$10$fhRzaksK2ebwmghv85lSCuNQxcgIg/.tvR9tJHqGDnIRcaQDTwC92', 'Admin'),
('apotek', '$2y$10$uS8FEqeqv/WfRMhTyz45Z.xWuzFLsed.i5EplF9oShvvACEs4z69q', 'Apoteker'),
('cadangan', '$2y$10$XiovJIioPplzTPluJaj7C.4azpNbrtxPa/6u5wpYOillk9lhCJ1ku', 'Super Admin'),
('super', '$2y$10$f0whEzTPTTnSLBRFSVIEzuSWlwa.iIDfr.LO5V8V2Mo/KrGYlDCGq', 'Super Admin');

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
