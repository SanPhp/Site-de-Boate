-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `deck34_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner_prox_evento`
--

CREATE TABLE IF NOT EXISTS `banner_prox_evento` (
  `id_banner_prox_evento` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `banner` varchar(100) NOT NULL,
  `banner_proximo_evento` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_banner_prox_evento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_galeria`
--

CREATE TABLE IF NOT EXISTS `categoria_galeria` (
  `id_categoria_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `capa_miniatura` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categoria_galeria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `id_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria_galeria` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `miniatura` varchar(100) NOT NULL,
  PRIMARY KEY (`id_galeria`),
  KEY `id_categoria_galeria` (`id_categoria_galeria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `programacao`
--

CREATE TABLE IF NOT EXISTS `programacao` (
  `id_programacao` int(11) NOT NULL AUTO_INCREMENT,
  `programacao_index` text NOT NULL,
  `programacao_pagina` text NOT NULL,
  `numero_da_programacao` varchar(1) NOT NULL,
  PRIMARY KEY (`id_programacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `programacao`
--

INSERT INTO `programacao` (`id_programacao`, `programacao_index`, `programacao_pagina`, `numero_da_programacao`) VALUES
(1, '<p style="text-align: center;">fhfhhhhththth</p>', 'fhfh', '1'),
(2, 'faf', '<p>fdfadadzzz</p>', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_video` varchar(200) NOT NULL,
  `embed_video` varchar(200) NOT NULL,
  `imagem_video` varchar(100) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`id_categoria_galeria`) REFERENCES `categoria_galeria` (`id_categoria_galeria`) ON DELETE CASCADE,
  ADD CONSTRAINT `galeria_ibfk_2` FOREIGN KEY (`id_categoria_galeria`) REFERENCES `categoria_galeria` (`id_categoria_galeria`) ON DELETE CASCADE,
  ADD CONSTRAINT `galeria_ibfk_3` FOREIGN KEY (`id_categoria_galeria`) REFERENCES `categoria_galeria` (`id_categoria_galeria`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
