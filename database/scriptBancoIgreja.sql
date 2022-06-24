-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2022 at 11:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `igreja`
--

-- --------------------------------------------------------

--
-- Table structure for table `atividade`
--

CREATE TABLE `atividade` (
  `id` int(10) NOT NULL,
  `descricao` varchar(50) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `data_atividade` varchar(10) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `hora` varchar(10) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `local` varchar(60) COLLATE utf8mb4_swedish_ci NOT NULL,
  `mensagem` varchar(200) COLLATE utf8mb4_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `atividade`
--

INSERT INTO `atividade` (`id`, `descricao`, `data_atividade`, `hora`, `local`, `mensagem`) VALUES
(1, 'Culto de Santa Ceia', '2022-06-12', '18:30', 'Rua Anita Garibalde 206', 'Você está mais do que convidado a participar conosco. Também traga a sua família!'),
(2, 'Culto de missões', '2022-06-19', '18:30', 'Rua Anita Garibalde, 206', 'Venha e traga sua família!');

-- --------------------------------------------------------

--
-- Table structure for table `familia`
--

CREATE TABLE `familia` (
  `id` int(10) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `qtd_membros` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `familia`
--

INSERT INTO `familia` (`id`, `nome`, `qtd_membros`) VALUES
(1, 'Gonçalves de Oliveira', 4),
(6, 'Silva e Souza', 0),
(7, 'Batista Pereira', 1);

-- --------------------------------------------------------

--
-- Table structure for table `igreja`
--

CREATE TABLE `igreja` (
  `id` int(5) NOT NULL,
  `denominacao` varchar(80) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `endereco` varchar(100) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `contato` varchar(15) COLLATE utf8mb4_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `igreja`
--

INSERT INTO `igreja` (`id`, `denominacao`, `endereco`, `contato`) VALUES
(1, '2ª Igreja do Evangelho Quadrangular', 'Rua Anita Garibalde, 206', '(18) 99660-9651');

-- --------------------------------------------------------

--
-- Table structure for table `membro`
--

CREATE TABLE `membro` (
  `id` int(10) NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `email` varchar(40) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `contato` varchar(15) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `data_nascimento` varchar(10) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `endereco` varchar(100) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `familia` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `membro`
--

INSERT INTO `membro` (`id`, `nome`, `email`, `contato`, `data_nascimento`, `endereco`, `familia`) VALUES
(14, 'Gabriel Gonçalves de Oliveira', 'gabrielgo15r@gmail.com', '18996609651', '2002-11-19', 'Rua do Gabriel', 1),
(17, 'Luis Fernando', 'luis@fernando.com', '1111111111', '1981-08-02', 'Rua do Fernando', 1),
(18, 'Felipe Batista', 'batista@123', '18 222222', '2003-03-30', 'Rua do Batista', 7);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(30) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8mb4_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `password`) VALUES
(1, 'gabriel', '647431b5ca55b04fdf3c2fce31ef1915');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `igreja`
--
ALTER TABLE `igreja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membro`
--
ALTER TABLE `membro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `membro_familia` (`familia`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `familia`
--
ALTER TABLE `familia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `igreja`
--
ALTER TABLE `igreja`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membro`
--
ALTER TABLE `membro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
