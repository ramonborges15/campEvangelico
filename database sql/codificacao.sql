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
-- Estrutura da tabela `codificacao`
--

CREATE TABLE `codificacao` (
  `cod_time` int(2) NOT NULL,
  `nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `codificacao`
--

INSERT INTO `codificacao` (`cod_time`, `nome`) VALUES
(1, '3ª Batista'),
(2, '2ª Batista'),
(3, '9ª Batista - Guriri'),
(4, 'IMRM Sede'),
(5, 'IBA'),
(6, 'IBC Seac'),
(7, 'IBASA'),
(8, 'Valentes de Davi'),
(9, 'Atletas que adoram'),
(10, 'Sião Seac');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
