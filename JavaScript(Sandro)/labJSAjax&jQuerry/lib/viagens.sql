-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Set-2022 às 20:06
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `viagens_carro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagens`
--

CREATE TABLE `viagens` (
  `id` int(11) NOT NULL,
  `placa` varchar(8) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `origem` varchar(400) NOT NULL,
  `destino` varchar(400) NOT NULL,
  `km` decimal(20,0) NOT NULL,
  `litros` decimal(20,0) NOT NULL,
  `gas` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `viagens`
--

INSERT INTO `viagens` (`id`, `placa`, `nome`, `origem`, `destino`, `km`, `litros`, `gas`) VALUES
(1, 'ABC-124', 'macaco', 'macaco', 'macaco', '12', '12', '32'),
(2, 'ABC-124', 'macaco', 'macaco', 'macaco', '12', '12', '32'),
(24, 'ABC-124', 'dfdafsadfrads', 'erytwe', 'ytywrt', '45', '5', '32'),
(25, 'das331', 'trw', 'erytwegfdsgsdf', 'ygfdsg', '43', '5234', '3254');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `viagens`
--
ALTER TABLE `viagens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `viagens`
--
ALTER TABLE `viagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
