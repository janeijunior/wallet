-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Abr-2022 às 15:19
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

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
('a43becb73f0ed24985d4fd800db1f038', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36', 1645047131, ''),
('b4cf5d27c8f343ca976f0c36513873e7', '192.168.1.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36', 1645048517, 'a:5:{s:9:\"user_data\";s:0:\"\";s:4:\"nome\";s:5:\"Janei\";s:2:\"id\";s:1:\"3\";s:9:\"permissao\";s:1:\"3\";s:6:\"logado\";b:1;}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emitente`
--

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
(66, 'Janei', 'Efetuou login no sistema', '2022-02-16', '22:32:14', '192.168.1.2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

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

CREATE TABLE `usuarios` (
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
  `url_ass` varchar(255) NOT NULL,
  `permissoes_id` int(11) NOT NULL,
  `id_emitente` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `terms` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nome`, `sobrenome`, `userinsert`, `userupdate`, `dateinsert`, `dateupdate`, `cpf`, `email`, `senha`, `telefone`, `situacao`, `url_ass`, `permissoes_id`, `id_emitente`, `codigo`, `terms`) VALUES
(3, 'Janei', 'Araujo', 0, 0, '2022-01-31 20:31:03', '0000-00-00 00:00:00', '16514784669', 'jaraujo.php@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '21968710758', 1, '', 3, 0, '4444', 1);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `emitente`
--
ALTER TABLE `emitente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `idLogs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `idPermissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
