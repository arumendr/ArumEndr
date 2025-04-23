-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2025 at 02:23 PM
-- Server version: 8.4.3
-- PHP Version: 8.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto_profil`
--

CREATE TABLE `foto_profil` (
  `id` int NOT NULL,
  `id_pengguna` int NOT NULL,
  `nama_file` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lokasi_file` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto_profil`
--

INSERT INTO `foto_profil` (`id`, `id_pengguna`, `nama_file`, `lokasi_file`, `uploaded_at`) VALUES
(4, 1, 'profil_67ffadecee81a.png', 'uploads/profile_pics/profil_67ffadecee81a.png', '2025-04-16 13:17:33'),
(5, 2, 'profil_68007de445992.jpg', 'uploads/profile_pics/profil_68007de445992.jpg', '2025-04-17 04:04:52'),
(6, 3, 'profil_68007e5a9890c.jpg', 'uploads/profile_pics/profil_68007e5a9890c.jpg', '2025-04-17 04:06:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto_profil`
--
ALTER TABLE `foto_profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto_profil`
--
ALTER TABLE `foto_profil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
