-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 08:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `jurusan` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `jurusan`, `email`, `gambar`) VALUES
(1, 'Mdiogeovani', '193040164', 'Teknik informatika', '193040164@mail.unpas.ac.id', 'dio.jpg'),
(2, 'Sandhika galih', '043040023', 'Teknik indormatika', 'sandhikagalih@unpas.ac.id', 'sandhika.jpg'),
(3, 'Doddy', '133040123', 'Teknik industri', 'doddy@yahoo.com', 'doddy.png'),
(4, 'rifki', '193040188', 'Teknik informatika', 'rifki@yahoo.com', 'rikfi.jpg'),
(5, 'Erik', '133030321', 'Teknik mesin', 'Erik@gmail.com', 'erik.png'),
(6, 'taufik', '193040075', 'Teknik informatik', 'taufik@yahoo.com', 'taufik.jpg'),
(7, 'ivan reynaldi', '193040124', 'Teknik industri', 'ivan@yahoo.com', 'ivan.jpg'),
(8, 'dimas ', '193030142', 'Teknik mesin', 'dimas@gmail.com', 'dimas.jpg'),
(9, 'fauzan', '193040051', 'Teknik informatika', 'fauzan@yahoo.com', 'fauzan.png'),
(10, 'rizal', '193030067', 'Teknik mesin', 'rizal@yahoo.com', 'rizal.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
