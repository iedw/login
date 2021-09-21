-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:33066
-- Tempo de geração: 22-Set-2021 às 01:16
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `final`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`nome`, `telefone`) VALUES
('Wesley Teles', '996973530'),
('Wesley Teles', '996973530'),
('Wesley Teles 2', '996973530'),
('Wesley Teles 2', '996973530'),
('Wesley Vitorio Teles', '996973530');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `ncomp` varchar(255) NOT NULL,
  `nusuar` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `ncomp`, `nusuar`, `email`, `senha`) VALUES
(1, 'Wesley Vitorio Teles', 'iedw', 'wesley@teste.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Wesley Vitorio Teles', 'iedw2', 'wesley1@teste.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Wesley Vitorio Teles', 'iedw3', 'wesley2@teste.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Wesley Vitorio Teles', 'iedw4', 'wesley5@teste.com', 'c33367701511b4f6020ec61ded352059'),
(5, 'Anderson Santos', 'adst', 'anderson@teste.com', '80c9ef0fb86369cd25f90af27ef53a9e'),
(6, 'irineu', 'irineu1', 'irineu@irineu.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'andrÃ©', 'andrÃ©', 'andre@teste.com', '8d5e957f297893487bd98fa830fa6413'),
(8, 'Vanessa', 'vanf1', 'vanessa@teste.com', '81bfac29cb35d7915bfbbf638230aa78'),
(9, 'teste', 'teste1', 'teste@teste.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`nusuar`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
