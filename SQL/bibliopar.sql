-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Set-2019 às 15:43
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bibliopar`
--
CREATE DATABASE IF NOT EXISTS `bibliopar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bibliopar`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id_aluno` int(5) NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(40) NOT NULL,
  `sala_aluno` varchar(5) NOT NULL,
  `turma_aluno` varchar(5) NOT NULL,
  `ano_letivo` varchar(4) NOT NULL,
  `id_periodo` int(5) NOT NULL,
  PRIMARY KEY (`id_aluno`),
  UNIQUE KEY `nome_aluno` (`nome_aluno`),
  KEY `id_periodo` (`id_periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE IF NOT EXISTS `autor` (
  `id_autor` int(5) NOT NULL AUTO_INCREMENT,
  `nome_autor` varchar(20) NOT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `editora`
--

CREATE TABLE IF NOT EXISTS `editora` (
  `id_editora` int(5) NOT NULL AUTO_INCREMENT,
  `nome_editora` varchar(25) NOT NULL,
  PRIMARY KEY (`id_editora`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE IF NOT EXISTS `emprestimo` (
  `id_emprestimo` int(5) NOT NULL AUTO_INCREMENT,
  `id_livro` int(5) NOT NULL,
  `id_aluno` int(5) NOT NULL,
  `dt_retirada` date NOT NULL,
  `dt_entrega` date NOT NULL,
  `dt_devolucao` date NOT NULL,
  PRIMARY KEY (`id_emprestimo`),
  KEY `id_aluno` (`id_aluno`),
  KEY `id_livro` (`id_livro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int(5) NOT NULL AUTO_INCREMENT,
  `desc_genero` varchar(20) NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `desc_genero`) VALUES
(1, 'Infantil'),
(2, 'Cientifico'),
(3, 'Conto'),
(4, 'Cronica'),
(5, 'Didatico'),
(6, 'Fantasia'),
(7, 'Ficcao Cientifica'),
(8, 'Ficcao Historica'),
(9, 'Terror'),
(10, 'Drama'),
(11, 'Poesia'),
(12, 'Politica'),
(13, 'Romance');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE IF NOT EXISTS `livros` (
  `id_livro` int(5) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(20) NOT NULL,
  `titulo_livro` varchar(50) NOT NULL,
  `id_autor` int(5) NOT NULL,
  `id_editora` int(5) NOT NULL,
  `id_genero` int(5) NOT NULL,
  `qtd_disponivel` int(5) NOT NULL,
  PRIMARY KEY (`id_livro`),
  KEY `id_autor` (`id_autor`),
  KEY `id_editora` (`id_editora`),
  KEY `id_genero` (`id_genero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-02-19 00:00:00', NULL),
(2, 'Aluno', '2016-02-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodo`
--

CREATE TABLE IF NOT EXISTS `periodo` (
  `id_periodo` int(5) NOT NULL AUTO_INCREMENT,
  `desc_periodo` varchar(15) NOT NULL,
  PRIMARY KEY (`id_periodo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `desc_periodo`) VALUES
(1, 'Matutino'),
(2, 'Vespertino'),
(3, 'Noturno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT 0,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Jao', 'aluno@aluno', 'aluno', 0, 2, '2019-09-16 00:00:00', '2019-09-25 00:00:00'),
(2, 'admin', 'admin@admin', 'admin', 0, 1, '2019-09-17 11:00:00', '2019-09-07 00:10:10');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`id_periodo`) REFERENCES `periodo` (`id_periodo`);

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_ibfk_1` FOREIGN KEY (`id_aluno`) REFERENCES `alunos` (`id_aluno`),
  ADD CONSTRAINT `emprestimo_ibfk_2` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id_livro`);

--
-- Limitadores para a tabela `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`),
  ADD CONSTRAINT `livros_ibfk_2` FOREIGN KEY (`id_editora`) REFERENCES `editora` (`id_editora`),
  ADD CONSTRAINT `livros_ibfk_3` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
