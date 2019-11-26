-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 24-Out-2019 às 20:43
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_mcsujos`
--
CREATE DATABASE IF NOT EXISTS `db_mcsujos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_mcsujos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bebida`
--

CREATE TABLE IF NOT EXISTS `tb_bebida` (
  `cd_bebida` int(3) NOT NULL AUTO_INCREMENT,
  `nm_bebida` varchar(45) DEFAULT NULL,
  `vl_bebida` double DEFAULT NULL,
  `id_alcool` bit(1) DEFAULT NULL,
  PRIMARY KEY (`cd_bebida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_porcoes`
--

CREATE TABLE IF NOT EXISTS `tb_porcoes` (
  `cd_porcoes` int(11) NOT NULL AUTO_INCREMENT,
  `ds_porcoes` varchar(30) DEFAULT NULL,
  `nm_porcoes` varchar(20) DEFAULT NULL,
  `vl_porcoes` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`cd_porcoes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pratoprincipal`
--

CREATE TABLE IF NOT EXISTS `tb_pratoprincipal` (
  `cd_pratoPrincipal` int(11) NOT NULL AUTO_INCREMENT,
  `ds_pratoPrincipal` varchar(30) DEFAULT NULL,
  `nm_PratoPrincipal` varchar(20) DEFAULT NULL,
  `vl_pratoPrincipal` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`cd_pratoPrincipal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sobremesa`
--

CREATE TABLE IF NOT EXISTS `tb_sobremesa` (
  `cd_sobremesa` int(11) NOT NULL AUTO_INCREMENT,
  `ds_sobremesa` varchar(30) DEFAULT NULL,
  `nm_sobremesa` varchar(20) DEFAULT NULL,
  `vl_sobremesa` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`cd_sobremesa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
