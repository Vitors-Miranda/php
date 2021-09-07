-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2021 at 05:28 PM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--
CREATE DATABASE IF NOT EXISTS `form` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `form`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

DROP TABLE IF EXISTS `tb_data`;
CREATE TABLE IF NOT EXISTS `tb_data` (
  `id_data` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `ddd` int(2) NOT NULL,
  `cellphone` int(9) NOT NULL,
  PRIMARY KEY (`id_data`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id_data`, `name`, `email`, `ddd`, `cellphone`) VALUES
(1, 'Vitor Samuel Miranda De Souza', 'vitorsmiranda31@gmail.com', 15, 991602629),
(2, 'Vitor Samuel Miranda De Souza', 'vitao@gmail.com', 15, 991602629);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
