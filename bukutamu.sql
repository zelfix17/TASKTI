-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 04:32 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_hadir`
--

CREATE TABLE `daftar_hadir` (
  `no_kartu` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `ucapan` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_hadir`
--

INSERT INTO `daftar_hadir` (`no_kartu`, `username`, `ucapan`) VALUES
(3, 'josua', 'aku josua'),
(1, 'kris', 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` int(12) NOT NULL,
  `password` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`nama`, `alamat`, `no_tlp`, `password`, `username`) VALUES
('josua', 'josua', 98765, 'josua', 'josua'),
('Christwoven Sinaga', 'sagan 17', 987654567, 'kris', 'kris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_hadir`
--
ALTER TABLE `daftar_hadir`
  ADD KEY `daftar_hadir_fk` (`username`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_hadir`
--
ALTER TABLE `daftar_hadir`
  ADD CONSTRAINT `daftar_hadir_fk` FOREIGN KEY (`username`) REFERENCES `tamu` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
