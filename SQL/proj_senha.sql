-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Jun-2019 às 05:40
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj_senha`
--
CREATE DATABASE IF NOT EXISTS `proj_senha` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proj_senha`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `codigo_cliente` int(9) NOT NULL,
  `nome_cliente` varchar(15) NOT NULL,
  `sobrenome_cliente` varchar(25) NOT NULL,
  `cpf_cliente` int(11) NOT NULL,
  `telefone_cliente` varchar(14) NOT NULL,
  `end_rua_cliente` varchar(20) NOT NULL,
  `end_num_cliente` int(5) NOT NULL,
  `end_bairro_cliente` varchar(20) NOT NULL,
  `cidade_cliente` varchar(25) NOT NULL,
  `estado_cliente` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`codigo_cliente`, `nome_cliente`, `sobrenome_cliente`, `cpf_cliente`, `telefone_cliente`, `end_rua_cliente`, `end_num_cliente`, `end_bairro_cliente`, `cidade_cliente`, `estado_cliente`) VALUES
(1, 'fsdafasd', 'sdafsdaf', 544646556, '46456456', 'fdsfds', 4464, 'dsadsads', 'dsadsadasdsa', 'ds'),
(2, '', '', 0, '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `valor_produto` decimal(10,2) NOT NULL,
  `obs_produto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome_produto`, `valor_produto`, `obs_produto`) VALUES
(99278471, 'teste', '20.00', 'teste'),
(99278472, 'teste2', '10.50', 'teste2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigo_cliente`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codigo_cliente` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99278473;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
