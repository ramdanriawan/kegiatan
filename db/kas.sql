-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2016 at 08:50 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kas`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

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
(109, '', 'Infak Jummat', '2016-04-08', '2000000', 'Masuk', '');

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
