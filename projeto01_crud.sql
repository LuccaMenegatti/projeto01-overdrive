-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2022 às 05:32
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto01_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `company`
--

CREATE TABLE `company` (
  `cod_company` int(11) NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `nome_fantasia` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` text COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `responsavel` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `company`
--

INSERT INTO `company` (`cod_company`, `nome`, `nome_fantasia`, `cnpj`, `endereco`, `telefone`, `responsavel`) VALUES
(65, 'Overdrive Softwares e consultoria', 'Overdrive', '33.143.114/0001-40', 'Araras -SP', '(19) 94543-2331', 'Rafael/Claudio'),
(67, 'Fundação Herminio Ometto', 'FHO', '33.655.721/0001-99', 'Araras -SP', '(21) 87281-7281', 'Sergio Antonello'),
(68, 'Sol Agora', 'Sol agora', '19.738.913/6671-61', 'São Paulo -SP', '(13) 45256-6897', 'Jose Silva'),
(69, 'Confederação Brasileira de Futebol', 'CBF', '33.655.721/0001-99', 'Rio de janeiro, RJ', '(21) 65215-6125', 'Ednaldo Rodrigues Gomes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_adm`
--

CREATE TABLE `user_adm` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user_adm`
--

INSERT INTO `user_adm` (`id_usuario`, `nome`, `login`, `senha`) VALUES
(1, 'Diego Negretto', '000.000.000-00', 'cc94d01aacc68498d34e896b6280428e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_pessoa` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnh` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `carro` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` char(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod_pessoa`, `nome`, `cpf`, `cnh`, `endereco`, `telefone`, `carro`, `empresa`, `senha`) VALUES
(1, 'Diego Negreto', '000.000.000-00', '909909909', 'Araras-sp', '(19) 98989-8989', 'Ford Ka', 'Overdrive ', 'b0ac23d94dcef21e36e457b4abf6e0cb'),
(26, 'Lucca Menegatti', '433.940.148-07', '999999999', 'Rua Eduardo Cesar Rocha, 541', '(19) 98898-2090', 'Eclipse', 'Overdrive', 'c7b7322ea6409dbd7bf5bd80110501c6'),
(28, 'Luffy', '154.676.524-09', '999999999', 'Grand Line', '(10) 11010-1010', 'Going Merry', 'Sol agora', '48ce5595dfa835bb50f98372671a724c');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cod_company`);

--
-- Índices para tabela `user_adm`
--
ALTER TABLE `user_adm`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_pessoa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `company`
--
ALTER TABLE `company`
  MODIFY `cod_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `user_adm`
--
ALTER TABLE `user_adm`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
