-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Maio-2020 às 15:04
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
-- Estrutura da tabela `coments`
--

CREATE TABLE `coments` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `coments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `coments`
--

INSERT INTO `coments` (`id`, `usuario`, `coments`) VALUES
(1, 'Misael', 'Que site Fantástico!'),
(2, 'Lucas', 'Que Show!');

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
(3, 'Inicial', 'Bem vindo ao Acces, servindo você e os\r\ndemais desde de 2020', 'http://acces.com.br/?pg=inicial'),
(4, 'Pesquisas', 'Bem vindo as área de funções\r\nFaça sua pesquisa:', 'http://acces.com.br/index.php?pg=functions');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisado`
--

CREATE TABLE `pesquisado` (
  `id` int(11) NOT NULL,
  `pesquisa` text NOT NULL,
  `resposta` text NOT NULL,
  `data` date NOT NULL,
  `exibir` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pesquisado`
--

INSERT INTO `pesquisado` (`id`, `pesquisa`, `resposta`, `data`, `exibir`) VALUES
(1, 'Qual a raiz quadrada de 9?', 'A resposta é 3.', '2020-05-26', 'sim'),
(3, 'Que é o criador do site?', 'Lucas\r\n', '2020-05-27', 'sim'),
(4, 'Adao e eva tinham umbigo', 'Sei lá', '2020-05-27', 'sim'),
(8, 'Quem nasceu primeiro, o ovo ou a galinha?', 'Deus', '2020-05-27', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Email` text NOT NULL,
  `Senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nome`, `Email`, `Senha`) VALUES
(1, 'Lucas', 'lucasoaresnet@gmail.com', 'Senha'),
(4, 'Luciano Santiago da Silva', 'joaopedronetnet@gmail.com', 'Senha');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pesquisado`
--
ALTER TABLE `pesquisado`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nome` (`Nome`) USING HASH;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `coments`
--
ALTER TABLE `coments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `pesquisado`
--
ALTER TABLE `pesquisado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
