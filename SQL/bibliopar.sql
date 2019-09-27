-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Set-2019 às 02:22
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
-- Database: `bibliopar`
--
CREATE DATABASE IF NOT EXISTS `bibliopar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bibliopar`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_aluno` int(5) NOT NULL,
  `nome_aluno` varchar(40) NOT NULL,
  `sala_aluno` varchar(5) NOT NULL,
  `turma_aluno` varchar(5) NOT NULL,
  `ano_letivo` varchar(4) NOT NULL,
  `id_periodo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `nome_aluno`, `sala_aluno`, `turma_aluno`, `ano_letivo`, `id_periodo`) VALUES
(1, 'BRUCE', '3 A', '', '2019', 1),
(8, 'tavin', 'szytk', 'a', '2019', 1),
(9, '321321', 'szytk', 'a', '3213', 2),
(10, 'jao', 'gome', '3', '2019', 1),
(11, '3321', '321', '3', '3213', 1),
(12, 'pedro', '32132', '3', '2019', 1),
(13, 'fjgdishf', 'dsad', 'a', 'dsad', 1),
(14, 'sadasd', 'asd', 'a', 'dasd', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(5) NOT NULL,
  `nome_autor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id_autor`, `nome_autor`) VALUES
(1, 'batata');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editora`
--

CREATE TABLE `editora` (
  `id_editora` int(5) NOT NULL,
  `nome_editora` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `editora`
--

INSERT INTO `editora` (`id_editora`, `nome_editora`) VALUES
(1, 'batata');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `id_emprestimo` int(5) NOT NULL,
  `id_livro` int(5) NOT NULL,
  `id_aluno` int(5) NOT NULL,
  `qtd_totemp` int(5) NOT NULL,
  `dt_retirada` date NOT NULL,
  `dt_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`id_emprestimo`, `id_livro`, `id_aluno`, `qtd_totemp`, `dt_retirada`, `dt_entrega`) VALUES
(1, 7, 1, 5, '2019-09-20', '2019-09-27'),
(3, 7, 12, 6, '2019-09-20', '2019-09-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(5) NOT NULL,
  `desc_genero` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `desc_genero`) VALUES
(2, 'Infantil'),
(3, 'Cientifico'),
(4, 'Conto'),
(5, 'Cronica'),
(6, 'Didatico'),
(7, 'Fantasia'),
(8, 'Ficcao Cientifica'),
(9, 'Ficcao Historica'),
(10, 'Terror'),
(11, 'Drama'),
(12, 'Poesia'),
(13, 'Politica'),
(14, 'Romance');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int(5) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `titulo_livro` varchar(50) NOT NULL,
  `id_autor` int(5) NOT NULL,
  `id_editora` int(5) NOT NULL,
  `id_genero` int(5) NOT NULL,
  `qtd_disponivel` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `isbn`, `titulo_livro`, `id_autor`, `id_editora`, `id_genero`, `qtd_disponivel`) VALUES
(3, '321321321321', 'batra', 1, 1, 11, 4),
(4, '1111', 'Xadrez', 1, 1, 3, 3),
(5, '2123132132132', 'fdisoafjiasjf', 1, 1, 2, 5),
(7, '1256145641565', 'fdsjifhdsiuhfdsiu', 1, 1, 7, 24),
(8, '2123132132135', 'sadasdasd', 1, 1, 11, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `periodo` (
  `id_periodo` int(5) NOT NULL,
  `desc_periodo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(13, 'Jao', 'aluno@aluno', 'aluno', 0, 2, '2019-09-16 00:00:00', '2019-09-25 00:00:00'),
(15, 'admin', 'admin@admin', 'admin', 0, 1, '2019-09-17 11:00:00', '2019-09-07 00:10:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`),
  ADD UNIQUE KEY `nome_aluno` (`nome_aluno`),
  ADD KEY `id_periodo` (`id_periodo`);

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indexes for table `editora`
--
ALTER TABLE `editora`
  ADD PRIMARY KEY (`id_editora`);

--
-- Indexes for table `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`id_emprestimo`),
  ADD KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_livro` (`id_livro`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`),
  ADD KEY `id_autor` (`id_autor`),
  ADD KEY `id_editora` (`id_editora`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indexes for table `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_aluno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `editora`
--
ALTER TABLE `editora`
  MODIFY `id_editora` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `id_emprestimo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
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
