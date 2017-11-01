-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 06-Abr-2017 às 17:02
-- Versão do servidor: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `classificacao`
--

CREATE TABLE `classificacao` (
  `cod_time` int(2) NOT NULL,
  `pontos` int(2) NOT NULL,
  `vitorias` int(2) NOT NULL,
  `empates` int(2) NOT NULL,
  `derrotas` int(2) NOT NULL,
  `jogos` int(2) NOT NULL,
  `saldo` int(3) NOT NULL,
  `grupo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `classificacao`
--

INSERT INTO `classificacao` (`cod_time`, `pontos`, `vitorias`, `empates`, `derrotas`, `jogos`, `saldo`, `grupo`) VALUES
(1, 0, 0, 0, 0, 0, 0, 'a'),
(2, 0, 0, 0, 0, 0, 0, 'a'),
(3, 0, 0, 0, 0, 0, 0, 'a'),
(4, 0, 0, 0, 0, 0, 0, 'a'),
(5, 0, 0, 0, 0, 0, 0, 'a'),
(6, 0, 0, 0, 0, 0, 0, 'b'),
(7, 0, 0, 0, 0, 0, 0, 'b'),
(8, 0, 0, 0, 0, 0, 0, 'b'),
(9, 0, 0, 0, 0, 0, 0, 'b'),
(10, 0, 0, 0, 0, 0, 0, 'b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
