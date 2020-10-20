-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 19-Out-2020 às 04:31
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `musicplayer`
--
CREATE DATABASE IF NOT EXISTS `musicplayer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `musicplayer`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banda`
--

CREATE TABLE IF NOT EXISTS `banda` (
  `id_banda` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cod_genero` int(11) NOT NULL,
  PRIMARY KEY (`id_banda`),
  KEY `cod_genero` (`cod_genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `banda`
--

INSERT INTO `banda` (`id_banda`, `nome`, `cod_genero`) VALUES
(1, 'Banda_teste2', 3),
(2, 'Banda_teste3', 4),
(3, 'Banda1', 7),
(4, 'Eletronica2', 7),
(5, 'Samba4', 6),
(6, 'Samba5', 6),
(7, 'Rock3', 5),
(8, 'BDematar1', 8),
(9, 'BD2', 8),
(10, 'Bdemat3', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `genero`
--

INSERT INTO `genero` (`id_genero`, `nome`) VALUES
(2, 'Genero_teste1'),
(3, 'Genero_teste2'),
(4, 'Genero_teste3'),
(5, 'Rock'),
(6, 'Samba'),
(7, 'Eletronica'),
(8, 'DeMatar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

CREATE TABLE IF NOT EXISTS `musica` (
  `id_musica` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cod_banda` int(11) NOT NULL,
  `youtube` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_musica`),
  KEY `cod_banda` (`cod_banda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `musica`
--

INSERT INTO `musica` (`id_musica`, `nome`, `cod_banda`, `youtube`) VALUES
(3, 'Musica_teste1', 1, 'url'),
(4, 'Rockm', 7, 'ohniwkjdnkdnas'),
(5, 'Sambam', 6, 'wdadsdawdwad'),
(6, 'Eletrom', 4, 'fdsfsfsfefsefsfd'),
(7, 'Musica_testeurl', 6, 'https://www.youtube.com/watch?v=6-_37uQs3eA&feature=youtu.be'),
(8, 'Musicaurl2', 1, 'https://youtu.be/6-_37uQs3eA'),
(9, 'Testemusica', 2, 'bBBit43FxHs'),
(10, 'Deasm2', 9, 'ccc'),
(11, 'bde3', 10, 'ddd'),
(12, 'dm1', 8, 'eee');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica_playlist`
--

CREATE TABLE IF NOT EXISTS `musica_playlist` (
  `id_musica_playlist` int(11) NOT NULL AUTO_INCREMENT,
  `cod_musica` int(11) NOT NULL,
  `cod_playlist` int(11) NOT NULL,
  PRIMARY KEY (`id_musica_playlist`),
  KEY `cod_musica` (`cod_musica`),
  KEY `cod_playlist` (`cod_playlist`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `musica_playlist`
--

INSERT INTO `musica_playlist` (`id_musica_playlist`, `cod_musica`, `cod_playlist`) VALUES
(1, 3, 16),
(2, 6, 17),
(3, 4, 17),
(4, 5, 17),
(5, 3, 18),
(6, 5, 18),
(7, 7, 19),
(8, 8, 20),
(9, 9, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `id_playlist` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id_playlist`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `nome`) VALUES
(16, 'Playlist_teste1'),
(17, 'Playl'),
(18, 'Playlist2'),
(19, 'Playlisturl'),
(20, 'Url2'),
(21, 'playlist23');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `banda`
--
ALTER TABLE `banda`
  ADD CONSTRAINT `banda_ibfk_1` FOREIGN KEY (`cod_genero`) REFERENCES `genero` (`id_genero`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `musica`
--
ALTER TABLE `musica`
  ADD CONSTRAINT `musica_ibfk_1` FOREIGN KEY (`cod_banda`) REFERENCES `banda` (`id_banda`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `musica_playlist`
--
ALTER TABLE `musica_playlist`
  ADD CONSTRAINT `musica_playlist_ibfk_1` FOREIGN KEY (`cod_musica`) REFERENCES `musica` (`id_musica`) ON UPDATE CASCADE,
  ADD CONSTRAINT `musica_playlist_ibfk_2` FOREIGN KEY (`cod_playlist`) REFERENCES `playlist` (`id_playlist`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
