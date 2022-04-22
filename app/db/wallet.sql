-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Abr-2022 às 00:41
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet`
--
CREATE DATABASE IF NOT EXISTS `wallet` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `wallet`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bkp_ci_sessions`
--

DROP TABLE IF EXISTS `bkp_ci_sessions`;
CREATE TABLE `bkp_ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `bkp_ci_sessions`
--

INSERT INTO `bkp_ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('13f154cbac9edf1c44d475a747453798', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Mobi', 1650646000, 'a:7:{s:9:\"user_data\";s:0:\"\";s:4:\"nome\";s:5:\"Janei\";s:8:\"url_logo\";s:80:\"http://127.0.0.1/wallet/app/assets/uploads/9edd745cd009a067d0e0b4a50d0e11d7.jpeg\";s:7:\"url_ass\";N;s:2:\"id\";s:1:\"1\";s:9:\"permissao\";s:1:\"3\";s:6:\"logado\";b:1;}'),
('2ac497dda9ffca82145b31ea3f46fb18', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 1650651663, 'a:7:{s:9:\"user_data\";s:0:\"\";s:4:\"nome\";s:5:\"Janei\";s:8:\"url_logo\";s:80:\"http://127.0.0.1/wallet/app/assets/uploads/9edd745cd009a067d0e0b4a50d0e11d7.jpeg\";s:7:\"url_ass\";N;s:2:\"id\";s:1:\"1\";s:9:\"permissao\";s:1:\"3\";s:6:\"logado\";b:1;}'),
('f68f72107947cd2e0321b4f371e366f8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 1650645920, 'a:7:{s:9:\"user_data\";s:0:\"\";s:4:\"nome\";s:5:\"Janei\";s:8:\"url_logo\";s:80:\"http://127.0.0.1/wallet/app/assets/uploads/9edd745cd009a067d0e0b4a50d0e11d7.jpeg\";s:7:\"url_ass\";N;s:2:\"id\";s:1:\"1\";s:9:\"permissao\";s:1:\"3\";s:6:\"logado\";b:1;}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bkp_usuarios`
--

DROP TABLE IF EXISTS `bkp_usuarios`;
CREATE TABLE `bkp_usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `userinsert` int(11) NOT NULL,
  `userupdate` int(11) NOT NULL,
  `dateinsert` datetime NOT NULL,
  `dateupdate` datetime NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `situacao` tinyint(1) NOT NULL,
  `url_logo` varchar(255) NOT NULL,
  `permissoes_id` int(11) NOT NULL,
  `id_emitente` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `terms` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bkp_usuarios`
--

INSERT INTO `bkp_usuarios` (`idUsuarios`, `nome`, `sobrenome`, `userinsert`, `userupdate`, `dateinsert`, `dateupdate`, `cpf`, `email`, `senha`, `telefone`, `situacao`, `url_logo`, `permissoes_id`, `id_emitente`, `codigo`, `terms`) VALUES
(3, 'Janei', 'Araujo', 0, 0, '2022-01-31 20:31:03', '0000-00-00 00:00:00', '16514784669', 'jaraujo.php@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '21968710758', 1, 'http://127.0.0.1/wallet/assets/uploads/aed159303317c0d9fce735a07739d0bc.jpeg', 3, 0, '4444', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('d7f87cf83317f3cae6088a9411806b96', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 1650667024, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emitente`
--

DROP TABLE IF EXISTS `emitente`;
CREATE TABLE `emitente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `cnpj` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `ie` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `rua` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `numero` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `bairro` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `cidade` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `uf` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `url_logo` varchar(225) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `idLogs` int(11) NOT NULL,
  `usuario` varchar(80) DEFAULT NULL,
  `tarefa` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`idLogs`, `usuario`, `tarefa`, `data`, `hora`, `ip`) VALUES
(1, 'Janei', 'Efetuou login no sistema', '2022-01-31', '22:31:49', '192.168.1.2'),
(2, '0', 'Efetuou logout no sistema', '2022-01-31', '23:06:56', '192.168.1.9'),
(3, 'Janei', 'Efetuou login no sistema', '2022-01-31', '23:06:59', '192.168.1.9'),
(4, 'Janei', 'Efetuou logout no sistema', '2022-01-31', '23:38:47', '192.168.1.2'),
(5, 'Janei', 'Efetuou logout no sistema', '2022-01-31', '23:47:57', '192.168.1.9'),
(6, 'Janei', 'Efetuou login no sistema', '2022-01-31', '23:48:00', '192.168.1.9'),
(7, 'Janei', 'Efetuou logout no sistema', '2022-01-31', '23:52:02', '192.168.1.9'),
(8, 'Janei', 'Efetuou login no sistema', '2022-01-31', '23:52:04', '192.168.1.9'),
(9, '0', 'Efetuou logout no sistema', '2022-02-01', '02:01:03', '192.168.1.9'),
(10, 'Janei', 'Efetuou login no sistema', '2022-02-01', '02:01:07', '192.168.1.9'),
(11, 'Janei', 'Efetuou login no sistema', '2022-02-01', '02:09:58', '192.168.1.2'),
(12, 'Janei', 'Efetuou login no sistema', '2022-02-01', '03:46:00', '192.168.1.2'),
(13, 'Janei', 'Efetuou login no sistema', '2022-02-01', '17:10:43', '192.168.1.9'),
(14, 'Janei', 'Efetuou login no sistema', '2022-02-01', '17:36:06', '192.168.1.9'),
(15, 'Janei', 'Efetuou login no sistema', '2022-02-01', '20:40:26', '192.168.1.3'),
(16, 'Janei', 'Efetuou login no sistema', '2022-02-01', '20:42:00', '192.168.1.3'),
(17, 'Janei', 'Efetuou logout no sistema', '2022-02-01', '20:43:29', '192.168.1.3'),
(18, 'Janei', 'Efetuou login no sistema', '2022-02-01', '20:43:37', '192.168.1.3'),
(19, 'Janei', 'Efetuou login no sistema', '2022-02-01', '21:05:30', '192.168.1.2'),
(20, 'Janei', 'Efetuou login no sistema', '2022-02-02', '02:56:54', '192.168.1.3'),
(21, 'Janei', 'Efetuou login no sistema', '2022-02-02', '04:45:55', '192.168.1.2'),
(22, 'Janei', 'Efetuou login no sistema', '2022-02-02', '17:51:31', '192.168.1.2'),
(23, 'Janei', 'Efetuou logout no sistema', '2022-02-02', '17:51:46', '192.168.1.2'),
(24, 'Janei', 'Efetuou login no sistema', '2022-02-02', '17:51:54', '192.168.1.2'),
(25, 'Janei', 'Efetuou login no sistema', '2022-02-02', '18:34:16', '192.168.1.2'),
(26, 'Janei', 'Efetuou logout no sistema', '2022-02-02', '18:48:11', '192.168.1.2'),
(27, 'Janei', 'Efetuou login no sistema', '2022-02-02', '18:48:31', '192.168.1.2'),
(28, 'Janei', 'Efetuou logout no sistema', '2022-02-02', '19:00:04', '192.168.1.2'),
(29, 'Janei', 'Efetuou login no sistema', '2022-02-02', '21:04:20', '192.168.1.2'),
(30, 'Janei', 'Efetuou login no sistema', '2022-02-02', '22:28:30', '192.168.1.3'),
(31, 'Janei', 'Efetuou logout no sistema', '2022-02-02', '23:36:23', '192.168.1.2'),
(32, 'Janei', 'Efetuou logout no sistema', '2022-02-02', '23:36:48', '192.168.1.3'),
(33, 'Janei', 'Efetuou login no sistema', '2022-02-03', '04:16:25', '192.168.1.2'),
(34, '0', 'Efetuou logout no sistema', '2022-02-03', '14:08:42', '192.168.1.2'),
(35, 'Janei', 'Efetuou login no sistema', '2022-02-04', '21:55:55', '192.168.1.6'),
(36, 'Janei', 'Efetuou logout no sistema', '2022-02-04', '21:56:57', '192.168.1.6'),
(37, 'Marcos', 'Efetuou login no sistema', '2022-02-05', '17:34:46', '192.168.1.4'),
(38, 'Marcos', 'Efetuou logout no sistema', '2022-02-05', '17:35:29', '192.168.1.4'),
(39, 'Marcos', 'Efetuou login no sistema', '2022-02-05', '17:36:13', '192.168.1.4'),
(40, 'Marcos', 'Efetuou logout no sistema', '2022-02-05', '17:36:28', '192.168.1.4'),
(41, 'Marcos', 'Efetuou login no sistema', '2022-02-05', '17:39:42', '192.168.1.4'),
(42, 'Marcos', 'Efetuou logout no sistema', '2022-02-05', '17:40:19', '192.168.1.4'),
(43, 'Marcos', 'Efetuou login no sistema', '2022-02-05', '17:40:49', '192.168.1.4'),
(44, 'Marcos', 'Efetuou logout no sistema', '2022-02-05', '17:42:26', '192.168.1.4'),
(45, 'Marcos', 'Efetuou login no sistema', '2022-02-05', '17:43:24', '192.168.1.4'),
(46, 'Marcos', 'Efetuou logout no sistema', '2022-02-05', '17:44:16', '192.168.1.4'),
(47, 'Marcos', 'Efetuou login no sistema', '2022-02-05', '17:44:42', '192.168.1.4'),
(48, 'Marcos', 'Efetuou logout no sistema', '2022-02-05', '18:16:23', '192.168.1.4'),
(49, 'Marcos', 'Efetuou login no sistema', '2022-02-05', '18:43:17', '192.168.1.4'),
(50, 'Marcos', 'Efetuou logout no sistema', '2022-02-05', '18:43:58', '192.168.1.4'),
(51, 'Marcos', 'Efetuou login no sistema', '2022-02-05', '18:45:12', '192.168.1.4'),
(52, 'Marcos', 'Efetuou logout no sistema', '2022-02-05', '18:47:06', '192.168.1.4'),
(53, 'Marcos', 'Efetuou login no sistema', '2022-02-05', '18:47:30', '192.168.1.4'),
(54, 'Marcos', 'Efetuou logout no sistema', '2022-02-05', '18:49:11', '192.168.1.4'),
(55, '0', 'Efetuou logout no sistema', '2022-02-05', '21:36:59', '192.168.1.2'),
(56, 'Janei', 'Efetuou login no sistema', '2022-02-10', '20:29:17', '192.168.1.2'),
(57, 'Janei', 'Efetuou logout no sistema', '2022-02-10', '20:30:00', '192.168.1.2'),
(58, 'Janei', 'Efetuou login no sistema', '2022-02-15', '03:16:36', '192.168.1.2'),
(59, 'Janei', 'Efetuou login no sistema', '2022-02-15', '03:19:07', '192.168.1.2'),
(60, 'Janei', 'Efetuou logout no sistema', '2022-02-15', '03:53:35', '192.168.1.2'),
(61, 'Janei', 'Efetuou login no sistema', '2022-02-15', '03:53:38', '192.168.1.2'),
(62, 'Janei', 'Efetuou logout no sistema', '2022-02-15', '04:06:43', '192.168.1.2'),
(63, 'Janei', 'Efetuou login no sistema', '2022-02-15', '21:45:17', '192.168.1.2'),
(64, 'Janei', 'Efetuou login no sistema', '2022-02-15', '21:47:14', '192.168.1.2'),
(65, 'Janei', 'Efetuou login no sistema', '2022-02-16', '04:20:34', '192.168.1.2'),
(66, 'Janei', 'Efetuou login no sistema', '2022-02-16', '22:32:14', '192.168.1.2'),
(67, 'Janei', 'Efetuou login no sistema', '2022-04-18', '16:29:40', '127.0.0.1'),
(68, 'Janei', 'Efetuou login no sistema', '2022-04-18', '16:42:24', '127.0.0.1'),
(69, 'Janei', 'Efetuou login no sistema', '2022-04-18', '16:59:40', '127.0.0.1'),
(70, 'Janei', 'Efetuou login no sistema', '2022-04-18', '17:01:24', '127.0.0.1'),
(71, 'Janei', 'Efetuou login no sistema', '2022-04-18', '18:11:49', '127.0.0.1'),
(72, 'Janei', 'Efetuou logout no sistema', '2022-04-18', '18:28:03', '127.0.0.1'),
(73, 'Janei', 'Efetuou login no sistema', '2022-04-18', '18:28:06', '127.0.0.1'),
(74, 'Janei', 'Efetuou login no sistema', '2022-04-18', '18:43:00', '127.0.0.1'),
(75, 'Janei', 'Efetuou logout no sistema', '2022-04-18', '18:59:22', '127.0.0.1'),
(76, 'Janei', 'Efetuou login no sistema', '2022-04-18', '18:59:24', '127.0.0.1'),
(77, 'Janei', 'Efetuou logout no sistema', '2022-04-18', '19:16:35', '127.0.0.1'),
(78, 'Janei', 'Efetuou login no sistema', '2022-04-18', '19:23:13', '127.0.0.1'),
(79, 'Janei', 'Efetuou login no sistema', '2022-04-18', '19:26:24', '127.0.0.1'),
(80, 'Janei', 'Efetuou logout no sistema', '2022-04-18', '19:34:11', '127.0.0.1'),
(81, 'Janei', 'Efetuou login no sistema', '2022-04-18', '19:34:15', '127.0.0.1'),
(82, 'Janei', 'Efetuou login no sistema', '2022-04-18', '21:46:52', '127.0.0.1'),
(83, 'Janei', 'Efetuou login no sistema', '2022-04-19', '17:28:09', '127.0.0.1'),
(84, 'Janei', 'Efetuou logout no sistema', '2022-04-19', '18:19:12', '127.0.0.1'),
(85, 'Janei', 'Efetuou login no sistema', '2022-04-19', '18:20:37', '127.0.0.1'),
(86, 'Janei', 'Efetuou logout no sistema', '2022-04-19', '18:27:56', '127.0.0.1'),
(87, 'Janei', 'Efetuou login no sistema', '2022-04-19', '18:44:13', '127.0.0.1'),
(88, 'Janei', 'Efetuou logout no sistema', '2022-04-19', '18:44:17', '127.0.0.1'),
(89, 'Janei', 'Efetuou login no sistema', '2022-04-20', '21:35:00', '127.0.0.1'),
(90, 'Janei', 'Efetuou logout no sistema', '2022-04-20', '21:36:39', '127.0.0.1'),
(91, 'Janei', 'Efetuou login no sistema', '2022-04-20', '21:36:41', '127.0.0.1'),
(92, 'Janei', 'Efetuou logout no sistema', '2022-04-20', '21:37:05', '127.0.0.1'),
(93, 'Janei', 'Efetuou login no sistema', '2022-04-20', '21:37:07', '127.0.0.1'),
(94, 'Janei', 'Efetuou login no sistema', '2022-04-20', '22:07:07', '127.0.0.1'),
(95, 'Janei', 'Efetuou login no sistema', '2022-04-21', '17:06:06', '127.0.0.1'),
(96, 'Janei', 'Efetuou logout no sistema', '2022-04-21', '17:06:11', '127.0.0.1'),
(97, 'Janei', 'Efetuou login no sistema', '2022-04-21', '19:49:03', '127.0.0.1'),
(98, 'Janei', 'Efetuou login no sistema', '2022-04-21', '20:02:25', '127.0.0.1'),
(99, 'Janei', 'Efetuou logout no sistema', '2022-04-21', '20:02:28', '127.0.0.1'),
(100, 'Janei', 'Efetuou login no sistema', '2022-04-21', '20:11:49', '127.0.0.1'),
(101, 'Janei', 'Efetuou login no sistema', '2022-04-21', '20:19:22', '127.0.0.1'),
(102, 'Janei', 'Efetuou logout no sistema', '2022-04-21', '20:42:21', '127.0.0.1'),
(103, 'Janei', 'Efetuou login no sistema', '2022-04-21', '20:42:23', '127.0.0.1'),
(104, 'Janei', 'Efetuou logout no sistema', '2022-04-21', '20:42:44', '127.0.0.1'),
(105, 'Janei', 'Efetuou login no sistema', '2022-04-21', '20:42:46', '127.0.0.1'),
(106, 'Janei', 'Efetuou logout no sistema', '2022-04-21', '20:43:19', '127.0.0.1'),
(107, 'Janei', 'Efetuou login no sistema', '2022-04-21', '20:43:21', '127.0.0.1'),
(108, 'Janei', 'Efetuou login no sistema', '2022-04-21', '21:18:30', '127.0.0.1'),
(109, 'Janei', 'Efetuou login no sistema', '2022-04-21', '21:20:51', '127.0.0.1'),
(110, 'Janei', 'Efetuou login no sistema', '2022-04-21', '21:24:02', '127.0.0.1'),
(111, 'Janei', 'Efetuou login no sistema', '2022-04-21', '21:28:46', '127.0.0.1'),
(112, 'Janei', 'Efetuou login no sistema', '2022-04-22', '13:56:42', '127.0.0.1'),
(113, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '14:29:48', '127.0.0.1'),
(114, 'Janei', 'Efetuou login no sistema', '2022-04-22', '14:29:50', '127.0.0.1'),
(115, 'Janei', 'Efetuou login no sistema', '2022-04-22', '16:23:05', '127.0.0.1'),
(116, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '16:37:53', '127.0.0.1'),
(117, 'Janei', 'Efetuou login no sistema', '2022-04-22', '16:38:00', '127.0.0.1'),
(118, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '16:40:51', '127.0.0.1'),
(119, 'Janei', 'Efetuou login no sistema', '2022-04-22', '16:40:54', '127.0.0.1'),
(120, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '16:55:39', '127.0.0.1'),
(121, 'Janei', 'Efetuou login no sistema', '2022-04-22', '16:55:42', '127.0.0.1'),
(122, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '16:56:01', '127.0.0.1'),
(123, 'Janei', 'Efetuou login no sistema', '2022-04-22', '16:56:04', '127.0.0.1'),
(124, 'Janei', 'Efetuou login no sistema', '2022-04-22', '18:11:30', '127.0.0.1'),
(125, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '18:15:45', '127.0.0.1'),
(126, 'Janei', 'Efetuou login no sistema', '2022-04-22', '18:15:49', '127.0.0.1'),
(127, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '18:18:38', '127.0.0.1'),
(128, 'Janei', 'Efetuou login no sistema', '2022-04-22', '18:18:41', '127.0.0.1'),
(129, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '18:45:20', '127.0.0.1'),
(130, 'Janei', 'Efetuou login no sistema', '2022-04-22', '18:45:23', '127.0.0.1'),
(131, 'Janei', 'Efetuou login no sistema', '2022-04-22', '18:46:26', '127.0.0.1'),
(132, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '18:46:40', '127.0.0.1'),
(133, 'Janei', 'Efetuou login no sistema', '2022-04-22', '18:46:43', '127.0.0.1'),
(134, 'Janei', 'Efetuou login no sistema', '2022-04-22', '18:46:52', '127.0.0.1'),
(135, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '18:48:00', '127.0.0.1'),
(136, 'Janei', 'Efetuou login no sistema', '2022-04-22', '18:48:03', '127.0.0.1'),
(137, 'Janei', 'Efetuou login no sistema', '2022-04-22', '20:49:00', '127.0.0.1'),
(138, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '20:59:50', '127.0.0.1'),
(139, 'Janei', 'Efetuou login no sistema', '2022-04-22', '20:59:53', '127.0.0.1'),
(140, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '21:02:36', '127.0.0.1'),
(141, 'Janei', 'Efetuou login no sistema', '2022-04-22', '21:02:39', '127.0.0.1'),
(142, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '21:03:45', '127.0.0.1'),
(143, 'Janei', 'Efetuou login no sistema', '2022-04-22', '21:04:16', '127.0.0.1'),
(144, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '21:34:45', '127.0.0.1'),
(145, 'Janei', 'Efetuou login no sistema', '2022-04-22', '21:34:47', '127.0.0.1'),
(146, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '21:42:16', '127.0.0.1'),
(147, 'Janei', 'Efetuou login no sistema', '2022-04-22', '21:42:18', '127.0.0.1'),
(148, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '21:49:28', '127.0.0.1'),
(149, 'Janei', 'Efetuou login no sistema', '2022-04-22', '21:49:30', '127.0.0.1'),
(150, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '21:53:35', '127.0.0.1'),
(151, 'Janei', 'Efetuou login no sistema', '2022-04-22', '21:53:37', '127.0.0.1'),
(152, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '22:11:07', '127.0.0.1'),
(153, 'Janei', 'Efetuou login no sistema', '2022-04-22', '22:11:10', '127.0.0.1'),
(154, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '22:19:16', '127.0.0.1'),
(155, 'Janei', 'Efetuou login no sistema', '2022-04-22', '22:19:18', '127.0.0.1'),
(156, 'Janei', 'Efetuou login no sistema', '2022-04-22', '22:21:41', '127.0.0.1'),
(157, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '22:28:45', '127.0.0.1'),
(158, 'Janei', 'Efetuou login no sistema', '2022-04-22', '22:28:48', '127.0.0.1'),
(159, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '22:35:33', '127.0.0.1'),
(160, 'Janei', 'Efetuou login no sistema', '2022-04-22', '22:35:35', '127.0.0.1'),
(161, 'Janei', 'Efetuou login no sistema', '2022-04-22', '22:42:09', '127.0.0.1'),
(162, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '22:42:20', '127.0.0.1'),
(163, 'Janei', 'Efetuou login no sistema', '2022-04-22', '22:42:24', '127.0.0.1'),
(164, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:01:56', '127.0.0.1'),
(165, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:02:00', '127.0.0.1'),
(166, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:26:00', '127.0.0.1'),
(167, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:26:09', '127.0.0.1'),
(168, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:26:11', '127.0.0.1'),
(169, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:26:24', '127.0.0.1'),
(170, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:26:31', '127.0.0.1'),
(171, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:30:38', '127.0.0.1'),
(172, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:31:14', '127.0.0.1'),
(173, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:33:46', '127.0.0.1'),
(174, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:35:20', '127.0.0.1'),
(175, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:35:23', '127.0.0.1'),
(176, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:35:34', '127.0.0.1'),
(177, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:36:43', '127.0.0.1'),
(178, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:36:48', '127.0.0.1'),
(179, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:37:24', '127.0.0.1'),
(180, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:43:50', '127.0.0.1'),
(181, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:44:20', '127.0.0.1'),
(182, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:44:28', '127.0.0.1'),
(183, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:44:32', '127.0.0.1'),
(184, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:44:36', '127.0.0.1'),
(185, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:44:39', '127.0.0.1'),
(186, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:44:53', '127.0.0.1'),
(187, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:44:55', '127.0.0.1'),
(188, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:45:06', '127.0.0.1'),
(189, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:45:18', '127.0.0.1'),
(190, 'Janei', 'Efetuou logout no sistema', '2022-04-22', '23:56:06', '127.0.0.1'),
(191, 'Janei', 'Efetuou login no sistema', '2022-04-22', '23:56:09', '127.0.0.1'),
(192, 'Janei', 'Efetuou login no sistema', '2022-04-23', '00:36:25', '127.0.0.1'),
(193, 'Janei', 'Efetuou logout no sistema', '2022-04-23', '00:37:04', '127.0.0.1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

DROP TABLE IF EXISTS `permissoes`;
CREATE TABLE `permissoes` (
  `idPermissao` int(11) NOT NULL,
  `userinsert` int(11) NOT NULL,
  `userupdate` int(11) NOT NULL,
  `dateinsert` datetime NOT NULL,
  `dateupdate` datetime NOT NULL,
  `nome` varchar(80) NOT NULL,
  `permissoes` text,
  `situacao` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`idPermissao`, `userinsert`, `userupdate`, `dateinsert`, `dateupdate`, `nome`, `permissoes`, `situacao`) VALUES
(3, 3, 3, '2022-01-31 16:40:30', '0000-00-00 00:00:00', 'Cliente', 'a:38:{s:8:\"aCliente\";s:1:\"1\";s:8:\"eCliente\";s:1:\"1\";s:8:\"dCliente\";s:1:\"1\";s:8:\"vCliente\";s:1:\"1\";s:8:\"aProduto\";s:1:\"1\";s:8:\"eProduto\";s:1:\"1\";s:8:\"dProduto\";s:1:\"1\";s:8:\"vProduto\";s:1:\"1\";s:8:\"aServico\";s:1:\"1\";s:8:\"eServico\";s:1:\"1\";s:8:\"dServico\";s:1:\"1\";s:8:\"vServico\";s:1:\"1\";s:3:\"aOs\";s:1:\"1\";s:3:\"eOs\";s:1:\"1\";s:3:\"dOs\";s:1:\"1\";s:3:\"vOs\";s:1:\"1\";s:6:\"aVenda\";s:1:\"1\";s:6:\"eVenda\";s:1:\"1\";s:6:\"dVenda\";s:1:\"1\";s:6:\"vVenda\";s:1:\"1\";s:8:\"aArquivo\";s:1:\"1\";s:8:\"eArquivo\";s:1:\"1\";s:8:\"dArquivo\";s:1:\"1\";s:8:\"vArquivo\";s:1:\"1\";s:11:\"aLancamento\";s:1:\"1\";s:11:\"eLancamento\";s:1:\"1\";s:11:\"dLancamento\";s:1:\"1\";s:11:\"vLancamento\";s:1:\"1\";s:8:\"cUsuario\";s:1:\"1\";s:9:\"cEmitente\";s:1:\"1\";s:10:\"cPermissao\";s:1:\"1\";s:7:\"cBackup\";s:1:\"1\";s:8:\"rCliente\";s:1:\"1\";s:8:\"rProduto\";s:1:\"1\";s:8:\"rServico\";s:1:\"1\";s:3:\"rOs\";s:1:\"1\";s:6:\"rVenda\";s:1:\"1\";s:11:\"rFinanceiro\";s:1:\"1\";}\', 1, \'2014-09-03\r\n\r\n\r\n\r\n', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `situacao` tinyint(1) NOT NULL,
  `url_logo` varchar(255) NOT NULL,
  `permissoes_id` int(11) NOT NULL,
  `id_emitente` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `terms` tinyint(4) NOT NULL,
  `controle` int(11) NOT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `endnumero` varchar(20) DEFAULT NULL,
  `endcomplemento` varchar(60) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `celular` varchar(14) DEFAULT NULL,
  `refban` varchar(30) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `lktipo` int(11) DEFAULT NULL,
  `lkvendedor` int(11) DEFAULT NULL,
  `obs` longtext,
  `web` varchar(80) DEFAULT NULL,
  `numcartao` varchar(17) DEFAULT NULL,
  `validade` varchar(7) DEFAULT NULL,
  `nomeimp` varchar(40) DEFAULT NULL,
  `lkcartao` int(11) DEFAULT NULL,
  `codseg` varchar(4) DEFAULT NULL,
  `cgc` varchar(18) DEFAULT NULL,
  `limitecred` decimal(19,2) DEFAULT NULL,
  `atendbloq` tinyint(4) DEFAULT NULL,
  `contato` varchar(40) DEFAULT NULL,
  `insc` varchar(20) DEFAULT NULL,
  `atividade` varchar(40) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `tagfisica` tinyint(4) DEFAULT NULL,
  `refcom` varchar(30) DEFAULT NULL,
  `identidade` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `filiacao` varchar(60) DEFAULT NULL,
  `profissao` varchar(30) DEFAULT NULL,
  `rettrib` smallint(6) DEFAULT NULL,
  `cgi` tinyint(4) DEFAULT NULL,
  `lkclim` int(11) DEFAULT NULL,
  `bloqvendacr` tinyint(4) DEFAULT NULL,
  `lkuserinc` int(11) DEFAULT NULL,
  `envio` smallint(6) DEFAULT NULL,
  `userinsert` int(11) NOT NULL,
  `userupdate` int(11) NOT NULL,
  `dateinsert` datetime NOT NULL,
  `dateupdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `username`, `nome`, `sobrenome`, `cpf`, `email`, `senha`, `telefone`, `situacao`, `url_logo`, `permissoes_id`, `id_emitente`, `codigo`, `terms`, `controle`, `endereco`, `endnumero`, `endcomplemento`, `bairro`, `cidade`, `estado`, `cep`, `celular`, `refban`, `data`, `lktipo`, `lkvendedor`, `obs`, `web`, `numcartao`, `validade`, `nomeimp`, `lkcartao`, `codseg`, `cgc`, `limitecred`, `atendbloq`, `contato`, `insc`, `atividade`, `fax`, `tagfisica`, `refcom`, `identidade`, `nascimento`, `filiacao`, `profissao`, `rettrib`, `cgi`, `lkclim`, `bloqvendacr`, `lkuserinc`, `envio`, `userinsert`, `userupdate`, `dateinsert`, `dateupdate`) VALUES
(1, '', 'Janei', 'Araujo', '', 'jaraujo.php@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '21968710758', 1, 'http://127.0.0.1/wallet/app/assets/uploads/9edd745cd009a067d0e0b4a50d0e11d7.jpeg', 3, 0, '4444', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 3, '2022-04-19 13:18:00', '2022-04-19 13:18:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bkp_ci_sessions`
--
ALTER TABLE `bkp_ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `bkp_usuarios`
--
ALTER TABLE `bkp_usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `emitente`
--
ALTER TABLE `emitente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`idLogs`);

--
-- Indexes for table `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`idPermissao`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bkp_usuarios`
--
ALTER TABLE `bkp_usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `emitente`
--
ALTER TABLE `emitente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `idLogs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `idPermissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
