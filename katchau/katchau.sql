-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Set-2021 às 21:49
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `katchau`
--
CREATE DATABASE IF NOT EXISTS `katchau` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `katchau`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

CREATE TABLE IF NOT EXISTS `aluguel` (
  `id_aluguel` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idcarro` int(11) NOT NULL,
  `data` date NOT NULL,
  `dataentrega` date NOT NULL,
  `valor_aluguel` float NOT NULL,
  `pago` bit(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE IF NOT EXISTS `carros` (
  `id_carro` int(11) NOT NULL,
  `modelo` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `placa` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `diaria` float NOT NULL,
  `disponibilidade` bit(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id_carro`, `modelo`, `marca`, `placa`, `diaria`, `disponibilidade`) VALUES
(1, 'ford', 'del-rei', 'ABC-1234', 10, b'1'),
(2, 'ford', 'carro2', 'EFG-4567', 10, b'1'),
(3, 'ford', 'carro3', 'hyj-4444', 50, b'1'),
(4, 'ford', 'carro4', 'hhf-5567', 100, b'1'),
(5, 'FORD', 'carro5', 'aah-1455', 1000, b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `endereco` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `endereco`, `email`) VALUES
(1, 'Vitor', 'Isaltino Prestes 220', 'Vitor123@gmail.com'),
(2, 'Maria', 'slÃ¡ onde', 'maria@gmail.com'),
(3, 'Amanda', 'do outro lado', 'Amanda@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`id_aluguel`);

--
-- Indexes for table `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id_carro`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `id_aluguel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `carros`
--
ALTER TABLE `carros`
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
