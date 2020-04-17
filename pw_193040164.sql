-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 03:20 PM
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
-- Database: `pw_193040164`
--

-- --------------------------------------------------------

--
-- Table structure for table `musik`
--

CREATE TABLE `musik` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `alat musik` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `harga` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `musik`
--

INSERT INTO `musik` (`id`, `gambar`, `alat musik`, `merek`, `alamat`, `harga`) VALUES
(1, 'gitar.jfif', 'Gitar', 'Yamaha', 'jl gajahmada no 77', 'Rp600.000'),
(2, 'bass.jfif', 'Bass', 'Fender', 'jl permindo no 105', 'Rp850.000'),
(3, 'drum.jfif', 'Drum', 'Yamaha', 'jl riau no 16', 'Rp1.500.000'),
(4, 'pianika.jfif', 'Pianika', 'Marvel', 'pasar raya', 'Rp80.000'),
(5, 'piano.jfif', 'Piano', 'Yamaha', 'jl sumatra no 31', 'Rp900.000'),
(6, 'terompet.jfif', 'Terompet', 'Yamaha', 'jl permindo 93', 'Rp950.000'),
(7, 'kajon.jfif', 'Kajon', 'LP', 'jl chaniago 17', 'Rp350.000'),
(8, 'talempong.jfif', 'Talempong', 'Tangkelek', 'jl chaniago 21', 'Rp1.000.000'),
(9, 'saluang.jfif', 'Saluang', 'Tangkelek', 'jl chaniago 21', 'Rp300.000'),
(10, 'gandang.jfif', 'Gandang', 'Cigin', 'jl khatib sulaiman', 'Rp500.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musik`
--
ALTER TABLE `musik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musik`
--
ALTER TABLE `musik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
