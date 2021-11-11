-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Set-2021 às 15:04
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `katchau`
--
CREATE DATABASE IF NOT EXISTS `katchau` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `katchau`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

DROP TABLE IF EXISTS `aluguel`;
CREATE TABLE IF NOT EXISTS `aluguel` (
  `id_aluguel` int NOT NULL AUTO_INCREMENT,
  `idcliente` int NOT NULL,
  `idcarro` int NOT NULL,
  `data` date NOT NULL,
  `dataentrega` date NOT NULL,
  `valor_aluguel` float NOT NULL,
  `pago` bit(1) NOT NULL,
  PRIMARY KEY (`id_aluguel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

DROP TABLE IF EXISTS `carros`;
CREATE TABLE IF NOT EXISTS `carros` (
  `id_carro` int NOT NULL AUTO_INCREMENT,
  `modelo` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `marca` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `placa` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `diaria` float NOT NULL,
  `disponibilidade` bit(1) NOT NULL,
  PRIMARY KEY (`id_carro`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `endereco` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
