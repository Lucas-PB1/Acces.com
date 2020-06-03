-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jun-2020 às 17:05
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lucas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `data` date NOT NULL,
  `cont` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cont`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `Nome`, `Content`, `Url`) VALUES
(1, 'Contato', 'Logo abaixo se encontram todas as\r\ninformações de contato:\r\n\r\n', 'http://acces.com.br/?pg=contato'),
(2, 'Sobre', 'Este site trabalha com um sistema que vai capturando \r\nas perguntas dos usuários e capturando a frequência \r\ncom que elas se repetem.', 'http://acces.com.br/?pg=sobre'),
(3, 'Inicial', 'Bem vindo ao Acces, servindo\r\na você desde de 2020.\r\nNosso site tem por objetivo Responder suas perguntas\r\ne trazer as reflexão sobre questões do cotidiano.', 'http://acces.com.br/?pg=inicial'),
(4, 'Pesquisas', 'Bem vindo as área de funções\r\nFaça sua pesquisa:', 'http://acces.com.br/index.php?pg=functions');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisado`
--

CREATE TABLE IF NOT EXISTS `pesquisado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `pesquisa` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `resposta` text NOT NULL,
  `data` date NOT NULL,
  `exibir` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` text NOT NULL,
  `Email` text NOT NULL,
  `Senha` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Nome` (`Nome`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nome`, `Email`, `Senha`) VALUES
(1, 'Lucas', 'lucasoaresnet@gmail.com', 'Senha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
