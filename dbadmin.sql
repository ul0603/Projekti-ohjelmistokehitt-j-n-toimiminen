-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 09:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiedot`
--

CREATE TABLE `tiedot` (
  `etunimi` text NOT NULL,
  `sukunimi` text NOT NULL,
  `sahkoposti` text NOT NULL,
  `koulutalo` text NOT NULL,
  `kurssi` int(11) NOT NULL,
  `tekstikentta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiedot`
--

INSERT INTO `tiedot` (`etunimi`, `sukunimi`, `sahkoposti`, `koulutalo`, `kurssi`, `tekstikentta`) VALUES
('sfsgdsg', 'fdfgfdgd', 'dfgdfgdh', 'dfhdhffdh', 1, ''),
('Uljas', 'Lundmark', 'ul0603@edu.turku.fi', 'Juhannuskukkulan koulutalo', 3, 'sadasdasdasd        ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
