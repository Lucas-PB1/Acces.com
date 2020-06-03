-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jun-2020 às 17:25
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
-- Estrutura da tabela `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Content` text NOT NULL,
  `Url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `Nome`, `Content`, `Url`) VALUES
(1, 'Contato', 'Logo abaixo se encontram todas as\r\ninformações de contato:\r\n\r\n', 'http://acces.com.br/?pg=contato'),
(2, 'Sobre', 'Este site trabalha com um sistema que vai capturando \r\nas perguntas dos usuários e capturando a frequência \r\ncom que elas se repetem.', 'http://acces.com.br/?pg=sobre'),
(3, 'Inicial', 'Bem vindo ao Acces, servindo\r\na você desde de 2020.\r\nNosso site tem por objetivo Responder suas perguntas\r\ne trazer as reflexão sobre questões do cotidiano.', 'http://acces.com.br/?pg=inicial'),
(4, 'Pesquisas', 'Bem vindo as área de funções\r\nFaça sua pesquisa:', 'http://acces.com.br/index.php?pg=functions');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
