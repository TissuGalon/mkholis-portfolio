-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 03:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myresume`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(900) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `name`, `email`, `subject`, `message`, `waktu`) VALUES
(1, 'Muhammad Kholis', 'Muhammad Kholis', 'Muhammad Kholis', 'Muhammad Kholis', '1'),
(2, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'Forgot security Question', 'gg', '1'),
(3, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'Forgot security Question', 'gg', '1'),
(4, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'Forgot security Question', 'gg', '1'),
(5, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'Forgot security Question', 'gg', '1'),
(6, 'Muhammad Kholis', 'gg@gmail.com', 'gg', 'gg', '1'),
(7, 'Muhammad Kholis', 'gg@gmail.com', 'gg', 'gg', '1'),
(8, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'gg', 'gg', '1'),
(9, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'gg', 'gg', '1'),
(10, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'Forgot security Question', 'hh', '1'),
(11, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'Forgot security Question', 'hh', '1'),
(12, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'Forgot security Question', 'hh', '1'),
(13, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'Forgot security Question', 'hh', '1'),
(14, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'Forgot security Question', 'hh', '1'),
(15, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'Forgot security Question', 'hh', '1'),
(16, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'Forgot security Question', 'hh', '1'),
(17, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'gg', 'hh', '1'),
(18, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'gg', 'hh', '1'),
(19, 'Muhammad Kholis', 'parzivalxddd@gmail.com', 'gg', 'hh', '1');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(5) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `gambar` varchar(900) NOT NULL,
  `category` varchar(100) NOT NULL,
  `client` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `url` varchar(500) NOT NULL,
  `detail` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `nama`, `jenis`, `gambar`, `category`, `client`, `date`, `url`, `detail`) VALUES
(1, 'Poster / Flyer', 'filter-web', '20210724_163509.png', 'Photoshop', '-', '2022', '-', 'oakwoakwoaowkoakwoawo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
