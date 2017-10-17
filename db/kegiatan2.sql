-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2017 at 10:13 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kegiatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE IF NOT EXISTS `kas` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `ma` varchar(20) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluar` varchar(20) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`kode`, `ma`, `keterangan`, `tgl`, `jumlah`, `jenis`, `keluar`) VALUES
(101, '2', 'Syafri Anwar Donatur Bulanan', '2016-04-06', '100000', 'Masuk', ''),
(102, '12', 'Infak Jifis Harian', '2016-04-06', '21000', 'Masuk', ''),
(103, '', 'Hamba Allah Semen Padang', '2016-04-06', '100000', 'Masuk', ''),
(104, '', 'Ana T Sandal', '2016-04-06', '400000', 'Masuk', ''),
(105, '', 'Honor Mubaligh 060416', '2016-04-06', '', 'Keluar', '50000'),
(106, '', 'Infak Jifis Harian', '2016-04-07', '283000', 'Masuk', ''),
(107, '1', 'Honor Mubaligh', '2016-04-07', '', 'Keluar', '125000'),
(109, '', 'Infak Jummat', '2016-04-08', '2000000', 'Masuk', ''),
(110, '2', 'TEST', '2017-10-06', '2000000', 'Masuk', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `kd_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`, `nama`, `alamat`) VALUES
(11, 'admin', 'admin', 'administrator', 'jl.berok raya no 40 siteba');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE IF NOT EXISTS `penelitian` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `ma` date NOT NULL,
  `keterangan` text NOT NULL,
  `persentase` int(11) NOT NULL,
  `tgl` text NOT NULL,
  `jumlah` text NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluar` varchar(20) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`kode`, `ma`, `keterangan`, `persentase`, `tgl`, `jumlah`, `jenis`, `keluar`) VALUES
(101, '0000-00-00', 'Syafri Anwar Donatur Bulanan', 10, '2016-04-06', '100900', 'Masuk', ''),
(102, '0000-00-00', 'Infak Jifis Harian', 20, '2016-04-06', '21070', 'Masuk', ''),
(103, '0000-00-00', 'Hamba Allah Semen Padang', 5, '2016-04-06', '100500', 'Masuk', ''),
(104, '0000-00-00', 'Ana T Sandal', 3, '2016-04-06', '400090', 'Masuk', ''),
(105, '0000-00-00', 'Honor Mubaligh 060416', 80, '2016-04-06', '', 'Keluar', '50022'),
(106, '0000-00-00', 'Infak Jifis Harian', 90, '2016-04-07', '200088', 'Masuk', ''),
(107, '0000-00-00', 'Honor Mubaligh', 90, '2016-04-07', '', 'Keluar', '125066'),
(109, '0000-00-00', 'Infak Jummat', 90, '2016-04-08', '2000033', 'Masuk', ''),
(110, '0000-00-00', 'TEST', 90, '2017-10-06', '500000', 'Masuk', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengembangan`
--

CREATE TABLE IF NOT EXISTS `pengembangan` (
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `ma` varchar(20) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `persentase` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluar` varchar(20) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Dumping data for table `pengembangan`
--

INSERT INTO `pengembangan` (`kode`, `ma`, `keterangan`, `persentase`, `tgl`, `jumlah`, `jenis`, `keluar`) VALUES
(101, '2', 'Syafri Anwar Donatur Bulanan', 10, '2016-04-06', '100000', 'Masuk', ''),
(102, '12', 'Infak Jifis Harian', 20, '2016-04-06', '21000', 'Masuk', ''),
(103, '', 'Hamba Allah Semen Padang', 30, '2016-04-06', '100000', 'Masuk', ''),
(104, '', 'Ana T Sandal', 40, '2016-04-06', '400000', 'Masuk', ''),
(105, '', 'Honor Mubaligh 060416', 50, '2016-04-06', '', 'Keluar', '50000'),
(106, '', 'Infak Jifis Harian', 60, '2016-04-07', '283000', 'Masuk', ''),
(107, '1', 'Honor Mubaligh', 70, '2016-04-07', '', 'Keluar', '125000'),
(109, '', 'Infak Jummat', 80, '2016-04-08', '2000000', 'Masuk', ''),
(110, '2', 'TEST', 0, '2017-10-06', '2000000', 'Masuk', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
