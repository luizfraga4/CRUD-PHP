-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `db_crudphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `criado`, `modificado`) VALUES
(1, 'Luiz', 'luiz@fraga.com', '2020-01-06 10:56:48', '2020-01-06 16:16:23'),
(2, 'Iolanda', 'iolanda@crudphp.com', '2020-01-06 10:57:07', '2020-01-06 10:58:03'),
(3, 'Estevam', 'estevam@crudphp.com', '2020-01-06 10:57:27', '2020-01-06 10:57:52'),
(4, 'Marcos', 'marcos@crudphp.com', '2020-01-06 10:58:29', '0000-00-00 00:00:00'),
(5, 'Mateus', 'mateus@crudphp.com', '2020-01-06 10:58:45', '0000-00-00 00:00:00'),
(7, 'Ariane', 'ariane@crudphp.com', '2020-01-06 16:15:37', '0000-00-00 00:00:00'),
(8, 'Felipe', 'felipe@crudphp.com', '2020-01-06 16:18:44', '0000-00-00 00:00:00'),
(9, 'Guilherme', 'guilherme@crudphp.com', '2020-01-06 16:19:05', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
