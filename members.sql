-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 31, 2024 at 08:26 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u307052935_book_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `jnsKL` enum('lp','pr') NOT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `phone` varchar(1000) NOT NULL,
  `genre` varchar(1000) NOT NULL,
  `buku_favorit` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `nama`, `alamat`, `jnsKL`, `email`, `phone`, `genre`, `buku_favorit`) VALUES
(1, 'Dinda', 'Piyungan, Bantul, DIY', 'pr', 'dinda@yahoo.com', '0889292111111', 'Fiksi', 'Fantasmagoria'),
(2, 'Wahyu Sajiwo', 'Kasihan, Bantul, DIY', 'lp', 'wahyu.s@yahoo.com', '0891111111111', 'Non-Fiksi', 'Gun, Germs & Steel'),
(3, 'M Tahir', 'Jl Kaliurang, Sleman, DIY', 'lp', 'tahir@email.com', '0812288445500', 'Non-Fiksi', 'Sejarah Indonesia'),
(4, 'Cici Hapsari', 'Denggung, Sleman, DIY', 'pr', 'c.hapsari@email.com', '08902122222222', 'Fiksi', 'Harry Potter'),
(5, 'Herman', 'Prambanan, Klaten, Jateng', 'lp', 'herherman@email.com', '0892102144523', 'Fiksi', 'Tenggelamnya Kapal Van Der Wijk'),
(6, 'Fia Kurnia', 'Kota Gede, Jogjakarta', 'pr', 'fiafia@email.com', '08562728111111', 'Fiksi', 'Trilogi Buru'),
(7, 'Jimmy Jayadi', 'Depok, Sleman, DIY', 'lp', 'jjyd@gmail.com', '08782921111', 'Non-Fiksi', 'Bukan 350 Dijajah'),
(8, 'Monika Rahma', 'Banguntapan, Bantul, DIY', 'pr', 'monkrahma@email.com', '0892137779900', 'Fiksi', 'Trilogi Laskar Pelangi'),
(9, 'Susanto Rahmat', 'Kota Magelang, DIY', 'lp', 'ssrahmat@email.com', '08913422228899', 'Fiksi', 'Buku Motivasi'),
(10, 'Beni Fikri', 'Wonosari, Gunung Kidul, DIY', 'lp', 'benben@email.com', '08946672111199', 'Non-Fiksi', 'Matematika Terapan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
