-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 07:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul3_rizky`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `idev` int(111) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `desk` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `htm` bigint(20) NOT NULL,
  `benefit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`idev`, `nama`, `desk`, `foto`, `tags`, `tgl`, `mulai`, `selesai`, `tempat`, `htm`, `benefit`) VALUES
(18, 'tes1', 'dada', 'DSC_1791.JPG', 'offline', '2020-12-25', '12:12:00', '13:13:00', 'tesssss', 12222, 'snack'),
(19, 'adada', 'daadada', 'DAI-26770.jpg', 'online', '2020-11-11', '13:01:00', '13:01:00', 'adadada', 122222, 'souvenir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idev`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `idev` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
