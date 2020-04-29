-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 03:58 PM
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
-- Database: `tubes_193040164`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `no` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `resolusi` varchar(200) NOT NULL,
  `ukuran layar` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`no`, `gambar`, `merek`, `resolusi`, `ukuran layar`, `harga`) VALUES
(1, 'acer.jpg', 'Acer KG221Q bmix FreeSync Monitor - 21.5-Inch - 1ms 75Hz Full HD', '1920x1080', '22\"', 'Rp1.465.000'),
(2, 'acer1.jpg', 'ACER Nitro RG270 bmiix LED Monitor Gaming 27 Inch', 'Full HD 1920 x 1080 ', '27 Inch', 'Rp4.182.000'),
(3, 'aorus.jpg', 'Monitor Gaming Gigabyte AORUS CV27F-EK 27 INCH Full HD 165Hz 1ms - HDR', '(HxV) 597.888 (H) x336.312 (V) (mm) ', '27', 'Rp7.508.000'),
(4, 'armageddon.jpg', 'Armaggeddon 27 inch Gaming Curve Monitor Pixxel+ XC27\'HD Super 165Hz 2ms ', '1920x1080', '>24\"', 'Rp3.289.000'),
(5, 'armageddon1.jpg', 'Armaggeddon Gaming Monitor Pixxel+ Pro PC24HD Curve White AHVA Panel 75Hz', '1920x1080', '24\"', 'Rp1.635.000'),
(6, 'asus.jpg', 'Monitor Gaming ASUS ROG Strix XG258Q–25” FHD 1ms G-SYNC Compatible I T01OP', '1920x1080', 'Wide Screen 24.5\"(62.23cm) 16:9', 'Rp7.488.000'),
(7, 'lenovo1.jpg', 'Lenovo Monitor Thinkvision LT1913P 19 Inch Square | HDMI + DVI-D | WLED Backlight | 60FBHAR1WW', '1280x1024', '19 Inch (1280x1024)', 'Rp2.400.000'),
(8, 'msi.jpg', 'MSI Optix MAG241CR', '1920x1080', '24\"', 'Rp4.210.000'),
(9, 'msi1.jpg', 'MSI Optix MPG341CQR', '3440x1440', '>24\"', 'Rp18.000.000'),
(10, 'viewsonic.jpg', 'Monitor Gaming Melengkung ViewSonic VX3217-2KC-mhd 32 \"', 'WQHD 2560 x 1440 ', '32', 'Rp5.900.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitor`
--
ALTER TABLE `monitor`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
