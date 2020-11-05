-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2019 às 19:00
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibliotec`
--
CREATE DATABASE IF NOT EXISTS `bibliotec` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bibliotec`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `codadm` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`codadm`, `nome`, `email`, `telefone`, `senha`) VALUES
(1, 'Verôncia Leme dos Santos ', 'veronica.santos4@etec.sp.gov.br', '99350-0200', '5f413e235fae70b00fe0dce9e7853a95');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `codaluno` int(11) NOT NULL,
  `rm` varchar(5) NOT NULL,
  `nomealuno` varchar(200) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `curso` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `codfuncionario` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `codlivro` int(11) NOT NULL,
  `nomelivro` varchar(150) DEFAULT NULL,
  `autor` varchar(150) DEFAULT NULL,
  `editora` varchar(50) DEFAULT NULL,
  `data` varchar(10) DEFAULT NULL,
  `isbn` varchar(13) DEFAULT NULL,
  `tombo` varchar(4) DEFAULT NULL,
  `qtde_livro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordens_alunos`
--

CREATE TABLE `ordens_alunos` (
  `codordem_alun` int(11) NOT NULL,
  `statusordem` varchar(20) DEFAULT NULL,
  `statusdata` varchar(20) DEFAULT NULL,
  `codaluno` int(11) NOT NULL,
  `codlivro` int(11) NOT NULL,
  `dataemprestimo` varchar(10) DEFAULT NULL,
  `datadevolucao` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordens_funcionarios`
--

CREATE TABLE `ordens_funcionarios` (
  `codordem_func` int(11) NOT NULL,
  `statusordem` varchar(20) DEFAULT NULL,
  `statusdata` varchar(20) DEFAULT NULL,
  `codfuncionario` int(11) DEFAULT NULL,
  `codlivro` int(11) DEFAULT NULL,
  `dataemprestimo` varchar(10) DEFAULT NULL,
  `datadevolucao` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`codadm`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`codaluno`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`codfuncionario`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`codlivro`);

--
-- Indexes for table `ordens_alunos`
--
ALTER TABLE `ordens_alunos`
  ADD PRIMARY KEY (`codordem_alun`),
  ADD KEY `codaluno` (`codaluno`),
  ADD KEY `codlivro` (`codlivro`);

--
-- Indexes for table `ordens_funcionarios`
--
ALTER TABLE `ordens_funcionarios`
  ADD PRIMARY KEY (`codordem_func`),
  ADD KEY `codlivro` (`codlivro`),
  ADD KEY `codfuncionario` (`codfuncionario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `codadm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `codaluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `codfuncionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `codlivro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordens_alunos`
--
ALTER TABLE `ordens_alunos`
  MODIFY `codordem_alun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordens_funcionarios`
--
ALTER TABLE `ordens_funcionarios`
  MODIFY `codordem_func` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ordens_alunos`
--
ALTER TABLE `ordens_alunos`
  ADD CONSTRAINT `ordens_alunos_ibfk_1` FOREIGN KEY (`codaluno`) REFERENCES `alunos` (`codaluno`),
  ADD CONSTRAINT `ordens_alunos_ibfk_2` FOREIGN KEY (`codlivro`) REFERENCES `livros` (`codlivro`);

--
-- Limitadores para a tabela `ordens_funcionarios`
--
ALTER TABLE `ordens_funcionarios`
  ADD CONSTRAINT `ordens_funcionarios_ibfk_1` FOREIGN KEY (`codlivro`) REFERENCES `livros` (`codlivro`),
  ADD CONSTRAINT `ordens_funcionarios_ibfk_2` FOREIGN KEY (`codfuncionario`) REFERENCES `funcionarios` (`codfuncionario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
