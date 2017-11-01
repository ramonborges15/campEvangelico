-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 06-Abr-2017 às 16:56
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
-- Estrutura da tabela `resultados`
--

CREATE TABLE `resultados` (
  `cod_jogo` int(2) NOT NULL,
  `cod_time_home` int(2) NOT NULL,
  `placar_home` int(2) NOT NULL,
  `cod_time_away` int(2) NOT NULL,
  `placar_time_away` int(2) NOT NULL,
  `jogo_realizado` int(1) NOT NULL,
  `data_jogo` date NOT NULL,
  `horario_jogo` time(2) NOT NULL,
  `rodada` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `resultados`
--

INSERT INTO `resultados` (`cod_jogo`, `cod_time_home`, `placar_home`, `cod_time_away`,
   `placar_time_away`, `jogo_realizado`, `data_jogo`, `horario_jogo`, `rodada`) VALUES
(1, 1, 7, 2, 3, 1, '2017-05-01', '09:00', 1),
(2, 3, 3, 4, 5, 1, '2017-05-01', '10:00', 1),
(3, 6, 5, 7, 2, 1, '2017-05-01', '11:00', 1),
(4, 8, 4, 9, 2, 1, '2017-05-01', '13:00', 1),
(5, 7, 1, 10, 4, 1, '2017-05-06', '13:00', 2),
(6, 8, 6, 6, 7, 1, '2017-05-06', '14:00', 2),
(7, 2, 3, 5, 3, 1, '2017-05-06', '15:00', 2),
(8, 3, 2, 1, 7, 1, '2017-05-06', '16:00', 2),
(9, 5, 1, 1, 2, 1, '2017-05-13', '13:00', 3),
(10, 4, 1, 2, 3, 1, '2017-05-13', '14:00', 3),
(11, 10, 0, 6, 0, 0, '2017-05-13', '15:00', 3),
(12, 9, 3, 7, 7, 1, '2017-05-13', '16:00', 3),
(13, 10, 3, 8, 2, 1, '2017-05-20', '13:00', 4),
(14, 6, 8, 9, 0, 1, '2017-05-20', '14:00', 4),
(15, 5, 5, 3, 4, 1, '2017-05-20', '15:00', 4),
(16, 1, 4, 4, 3, 1, '2017-05-20', '16:00', 4),
(17, 2, 0, 3, 0, 0, '2017-05-27', '13:00', 5),
(18, 4, 0, 5, 0, 0, '2017-05-27', '14:00', 5),
(19, 7, 0, 8, 0, 0, '2017-05-27', '15:00', 5),
(20, 9, 0, 10, 0, 0, '2017-05-27', '16:00', 5);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
