-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 05:13 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `administrasi_fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID_Admin` varchar(3) NOT NULL,
  `Username` varchar(18) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_Admin`, `Username`, `Password`) VALUES
('001', 'admin', 'admin'),
('', 'Admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `akuntansi_perusahaan`
--

CREATE TABLE IF NOT EXISTS `akuntansi_perusahaan` (
`ID_Akun` int(11) NOT NULL,
  `Deskripsi` varchar(150) NOT NULL,
  `No_Ref` varchar(18) NOT NULL,
  `Tanggal` date NOT NULL,
  `Debit` int(11) NOT NULL,
  `Credit` int(11) NOT NULL,
  `Tipe_Akun` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akuntansi_perusahaan`
--

INSERT INTO `akuntansi_perusahaan` (`ID_Akun`, `Deskripsi`, `No_Ref`, `Tanggal`, `Debit`, `Credit`, `Tipe_Akun`) VALUES
(1, 'Investasi', '000131', '2016-07-20', 500000, 0, ''),
(2, 'Sewa Alat', '123456', '2016-07-25', 300000, 0, 'Sewa'),
(3, 'Sewa Ruko', '234567', '2016-07-24', 15000000, 0, 'Sewa'),
(4, 'Modal Pengusaha', '1213', '2016-07-19', 50000, 0, 'Modal'),
(5, 'Perlengkapan fitness', '123134', '2016-07-21', 0, 350000, 'Perlengkapan'),
(6, 'Kas', '1234', '2016-07-19', 0, 200000, 'Kas'),
(7, 'Kas beli perlengkapan', '3456', '2016-07-27', 0, 350000, 'Perlengkapan'),
(8, 'Perlengkapan', '3456', '2016-07-27', 350000, 0, 'Kas'),
(9, 'Kas', '6789', '2016-07-29', 0, 450000, 'Kas'),
(10, 'Kas', '6789', '2016-07-29', 450000, 0, 'Kas'),
(11, 'Kas duit', '45689', '2016-07-30', 0, 140000, 'Kas'),
(12, 'Perlengkapan', '45689', '2016-07-30', 140000, 0, 'Kas');

-- --------------------------------------------------------

--
-- Table structure for table `alat_latihan`
--

CREATE TABLE IF NOT EXISTS `alat_latihan` (
`ID_Alat` int(11) NOT NULL,
  `Nama_Alat` varchar(40) NOT NULL,
  `Tahun_Produk` int(11) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat_latihan`
--

INSERT INTO `alat_latihan` (`ID_Alat`, `Nama_Alat`, `Tahun_Produk`, `Status`) VALUES
(1, 'Treadmill Merek O', 2014, 'Kurang Baik'),
(2, 'Barbel Merek Z', 2013, 'Baik'),
(3, 'Benchpress Merek XC', 2015, 'Baik'),
(4, 'Barbel GG', 2012, 'Baik'),
(5, 'Barbel AS', 2014, 'Rusak'),
(6, 'Treadmill Merek X', 2015, 'Baik'),
(7, 'Bike KK', 2013, 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `data_kebugaran_member`
--

CREATE TABLE IF NOT EXISTS `data_kebugaran_member` (
  `Nama_Member` varchar(60) NOT NULL,
  `Chest` varchar(8) NOT NULL,
  `Left_Bicep` varchar(8) NOT NULL,
  `Right_Bicep` varchar(8) NOT NULL,
  `Left_Tricep` varchar(8) NOT NULL,
  `Right_Tricep` varchar(8) NOT NULL,
  `Left_Leg` varchar(8) NOT NULL,
  `Right_Leg` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_latihan`
--

CREATE TABLE IF NOT EXISTS `jadwal_latihan` (
  `Nama_Trainer` varchar(20) NOT NULL,
  `Jadwal_1` varchar(40) DEFAULT NULL,
  `Jadwal_2` varchar(40) DEFAULT NULL,
  `Jadwal_3` varchar(40) DEFAULT NULL,
  `Jadwal_4` varchar(40) DEFAULT NULL,
  `Jadwal_5` varchar(40) DEFAULT NULL,
  `Jadwal_6` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_latihan`
--

INSERT INTO `jadwal_latihan` (`Nama_Trainer`, `Jadwal_1`, `Jadwal_2`, `Jadwal_3`, `Jadwal_4`, `Jadwal_5`, `Jadwal_6`) VALUES
('Abdul', '16:30-19:30', '15:00-16:00', '16:30-17:30', '12:30-14:30', '14:30-16:30', '17:00-19:00'),
('Eko Patrio', '07:30 -- 10:00', '10:30 -- 07:00', '07:30 -- 12:00', '00:00 -- 00:00', '00:00 -- 00:00', '00:00-00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE IF NOT EXISTS `kehadiran` (
`No_Kehadiran` int(3) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `No_Loker` int(2) NOT NULL,
  `Jam_Masuk` varchar(40) NOT NULL,
  `Jam_Keluar` varchar(30) NOT NULL,
  `Hari` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`No_Kehadiran`, `Nama`, `No_Loker`, `Jam_Masuk`, `Jam_Keluar`, `Hari`) VALUES
(1, 'Taufik Baswara', 4, '21:18:28', '21:23:04', '2016-05-19'),
(2, 'Budi', 1, '13:43:25', '13:44:06', '2016-05-21'),
(3, 'Budi', 2, '20:01:19', '21:24:36', '2016-05-22'),
(4, 'Tony', 7, '13:25:04', '13:25:13', '2016-05-23'),
(5, 'Budi', 4, '11:49:53', '', '2016-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`ID_Member` int(4) NOT NULL,
  `Nama_Member` varchar(60) NOT NULL,
  `Alamat_Member` varchar(55) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_Kelamin` varchar(6) NOT NULL,
  `Tanggal_Pendaftaran` date NOT NULL,
  `Tanggal_Pembayaran` date NOT NULL,
  `Status_Pembayaran` varchar(30) NOT NULL,
  `Status_Pembayaran2` varchar(30) NOT NULL,
  `Jumlah_Pembayaran` int(11) NOT NULL,
  `Nama_Trainer` varchar(20) NOT NULL,
  `Program_Latihan` varchar(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID_Member`, `Nama_Member`, `Alamat_Member`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Tanggal_Pendaftaran`, `Tanggal_Pembayaran`, `Status_Pembayaran`, `Status_Pembayaran2`, `Jumlah_Pembayaran`, `Nama_Trainer`, `Program_Latihan`) VALUES
(1, 'Mohammad Fauzi', 'Jalan Antapani Raya No 10', '1993-07-18', 'Male', '2016-05-16', '2016-08-17', 'Lunas', 'Belum Lunas', 190000, 'Abdul', 'Privat'),
(2, 'Taufik Baswara', 'Jalan Aeromodeling Raya No 59', '1993-07-21', 'Male', '2016-05-16', '2016-08-16', 'Lunas', 'Belum Lunas', 150000, 'Niko', 'Privat'),
(3, 'Tony Baru', 'Alamat Baru', '1993-01-18', 'Male', '2016-05-17', '2016-07-17', 'Lunas', 'Belum Lunas', 190000, 'Abdul', 'Privat'),
(4, 'Budi', 'Alamat Baru', '1990-07-18', 'Male', '2016-05-11', '2016-08-11', 'Lunas', 'Belum Lunas', 190000, 'Abdul', 'Privat'),
(5, 'James Raymond', 'Ohio', '1989-03-21', 'Male', '2016-06-14', '2016-08-14', 'Lunas', 'Belum Lunas', 150000, '', 'Regular'),
(6, 'Name', 'Jl Name 1', '1992-01-10', 'Male', '2016-06-22', '2016-08-22', 'Lunas', 'Belum Lunas', 150000, '', 'Regular'),
(8, 'Member baru', 'Jalan baru', '1987-04-12', 'Male', '2016-06-27', '2016-08-27', 'Lunas', 'Belum Lunas', 175000, 'Eko Patrio', 'Privat'),
(9, 'Kobe', 'Bryant', '2016-07-19', 'Male', '2016-06-28', '2016-07-28', 'Belum Lunas', '', 190000, 'Abdul', 'Privat'),
(10, 'Kobe', 'Jalan No ', '2016-07-18', 'Male', '2016-07-18', '2016-08-18', 'Belum Lunas', '', 190000, 'Abdul', 'Privat'),
(11, 'Budi', 'Jalan Budi', '2016-07-18', 'Male', '2016-07-04', '2016-08-04', 'Belum Lunas', '', 150000, '', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
`ID_Trainer` int(2) NOT NULL,
  `Nama_Trainer` varchar(20) NOT NULL,
  `Jenis_Kelamin` varchar(6) NOT NULL,
  `Umur` int(2) NOT NULL,
  `Biaya_Trainer` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`ID_Trainer`, `Nama_Trainer`, `Jenis_Kelamin`, `Umur`, `Biaya_Trainer`) VALUES
(1, 'Eko Patrio', 'Male', 32, 250000),
(2, 'Niko', 'Male', 23, 140000),
(3, 'Ridho', 'Male', 21, 230000),
(4, 'Abdul', 'Male', 27, 190000),
(5, 'Udin ', 'Male', 24, 120000),
(7, 'John Doe', 'Male', 26, 150000),
(8, 'Annisa Sholihat', 'Female', 26, 135000),
(10, 'Trainer 1', 'Male', 36, 240000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`ID_Transaksi` int(10) NOT NULL,
  `Nama_Transaksi` varchar(150) NOT NULL,
  `Tanggal_Transaksi` date NOT NULL,
  `Jumlah_Transaksi` int(11) NOT NULL,
  `Tipe_Transaksi` varchar(12) NOT NULL,
  `Keterangan` varchar(150) NOT NULL,
  `No_Ref` varchar(18) NOT NULL,
  `Tipe_Akun` varchar(30) NOT NULL,
  `Author` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID_Transaksi`, `Nama_Transaksi`, `Tanggal_Transaksi`, `Jumlah_Transaksi`, `Tipe_Transaksi`, `Keterangan`, `No_Ref`, `Tipe_Akun`, `Author`) VALUES
(1, 'Beli nasi goreng 7', '2016-05-17', 80000, 'Pemasukan', 'Konsumsi', '', '', 'admin'),
(2, 'Pembayaran oleh member Joni The Adventurer pada tanggal 11th May 2016', '2016-05-11', 190000, 'Pemasukan', 'Pembayaran oleh member Joni The Adventurer pada tanggal 11th May 2016', '', '', 'admin'),
(3, 'Pengeluaran PAM PLN', '2016-05-11', 1000000, 'Pengeluaran', 'Keluar duit buat PAM PLN', '', '', 'admin'),
(4, 'Pembayaran oleh member Budi Anto pada tanggal 11th May 2016', '2016-05-11', 135000, 'Pemasukan', 'Pembayaran oleh member Budi Anto pada tanggal 11th May 2016', '', '', 'admin'),
(5, 'Pembayaran oleh member Budi pada tanggal 2016-07-11 Sebesar 190000', '2016-06-23', 190000, 'Pemasukan', 'Pembayaran oleh member Budi pada tanggal 2016-07-11 Sebesar 190000', '', '', 'admin'),
(6, 'Pembayaran oleh member Budi pada tanggal 2016-08-11 Sebesar 190000', '2016-06-23', 190000, 'Pemasukan', 'Pembayaran oleh member Budi pada tanggal 2016-08-11 Sebesar 190000', '', '', 'admin'),
(7, 'Pembelian Semen', '2016-07-12', 50000, 'Pengeluaran', 'beli semen tanggal berapa di toko X', '', '', 'admin'),
(8, 'Pembayaran oleh member James Raymond pada tanggal 2016-08-14 Sebesar 150000', '2016-07-18', 150000, 'Pemasukan', 'Pembayaran oleh member James Raymond pada tanggal 2016-08-14 Sebesar 150000', '', '', 'admin'),
(9, 'Pembayaran oleh member Name pada tanggal  Sebesar 150000', '2016-07-18', 150000, 'Pemasukan', 'Pembayaran oleh member Name pada tanggal  Sebesar 150000', '', '', 'admin'),
(10, 'Pembayaran oleh member Member baru pada tanggal  Sebesar 175000', '2016-07-18', 175000, 'Pemasukan', 'Pembayaran oleh member Member baru pada tanggal  Sebesar 175000', '', '', 'admin'),
(11, 'Pembayaran oleh member Mohammad Fauzi pada tanggal  Sebesar 190000', '2016-07-18', 190000, 'Pemasukan', 'Pembayaran oleh member Mohammad Fauzi pada tanggal  Sebesar 190000', '', '', 'admin'),
(12, 'Pembayaran oleh member Taufik Baswara pada tanggal  16th August 2016 Sebesar 140000', '2016-07-18', 140000, 'Pemasukan', 'Pembayaran oleh member Taufik Baswara pada tanggal  16th August 2016 Sebesar 140000', '', '', 'admin'),
(13, 'Investasi', '2016-07-20', 500000, 'Pemasukan', 'investasi', '', '', 'admin'),
(14, 'Sewa Alat', '2016-07-25', 300000, 'Pengeluaran', 'keterangan', '', '', 'admin'),
(15, 'Sewa Ruko', '2016-07-24', 15000000, 'Pengeluaran', 'Sewa Ruko', '', '', 'admin'),
(16, 'Modal Pengusaha', '2016-07-19', 50000, 'Pengeluaran', 'ttt', '', '', 'admin'),
(17, 'Perlengkapan fitness', '2016-07-21', 350000, 'Pengeluaran', '12', '', '', 'admin'),
(18, 'Kas', '2016-07-19', 200000, 'Pengeluaran', 'keterangan', '', '', 'admin'),
(19, 'Kas beli perlengkapan', '2016-07-27', 350000, 'Pengeluaran', 'keterangan', '', '', 'admin'),
(20, 'Kas', '2016-07-29', 450000, 'Pengeluaran', 'keterangan', '', '', 'admin'),
(21, 'Kas duit', '2016-07-30', 140000, 'Pengeluaran', 'tes', '', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akuntansi_perusahaan`
--
ALTER TABLE `akuntansi_perusahaan`
 ADD PRIMARY KEY (`ID_Akun`);

--
-- Indexes for table `alat_latihan`
--
ALTER TABLE `alat_latihan`
 ADD PRIMARY KEY (`ID_Alat`);

--
-- Indexes for table `jadwal_latihan`
--
ALTER TABLE `jadwal_latihan`
 ADD PRIMARY KEY (`Nama_Trainer`), ADD UNIQUE KEY `Nama_Trainer` (`Nama_Trainer`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
 ADD PRIMARY KEY (`No_Kehadiran`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD UNIQUE KEY `ID_Member` (`ID_Member`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
 ADD PRIMARY KEY (`ID_Trainer`), ADD UNIQUE KEY `Nama_Trainer` (`Nama_Trainer`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`ID_Transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akuntansi_perusahaan`
--
ALTER TABLE `akuntansi_perusahaan`
MODIFY `ID_Akun` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `alat_latihan`
--
ALTER TABLE `alat_latihan`
MODIFY `ID_Alat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
MODIFY `No_Kehadiran` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `ID_Member` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
MODIFY `ID_Trainer` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `ID_Transaksi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_latihan`
--
ALTER TABLE `jadwal_latihan`
ADD CONSTRAINT `jadwal_latihan_ibfk_1` FOREIGN KEY (`Nama_Trainer`) REFERENCES `trainer` (`Nama_Trainer`),
ADD CONSTRAINT `jadwal_latihan_ibfk_2` FOREIGN KEY (`Nama_Trainer`) REFERENCES `trainer` (`Nama_Trainer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
