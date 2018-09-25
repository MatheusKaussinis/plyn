-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jun-2018 às 16:55
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newcurves`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefonenc`
--

CREATE TABLE `tb_telefonenc` (
  `id_telefone` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `numero` varchar(16) NOT NULL,
  `tipo` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuariosnc`
--

CREATE TABLE `tb_usuariosnc` (
  `cpf` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `nasc` varchar(10) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `complemento` varchar(20) NOT NULL,
  `cep` int(8) NOT NULL,
  `altura` varchar(4) NOT NULL,
  `peso` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_telefonenc`
--
ALTER TABLE `tb_telefonenc`
  ADD PRIMARY KEY (`id_telefone`),
  ADD KEY `cpf` (`cpf`);

--
-- Indexes for table `tb_usuariosnc`
--
ALTER TABLE `tb_usuariosnc`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_telefonenc`
--
ALTER TABLE `tb_telefonenc`
  MODIFY `id_telefone` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
