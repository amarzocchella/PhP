-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306

-- Generation Time: Nov 22, 2011 at 08:34 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `utenze`
--

-- --------------------------------------------------------

--
-- Table structure for table `bollette`
--

CREATE TABLE `bollette` (
  `Numero` int(11) NOT NULL AUTO_INCREMENT,
  `Data` date DEFAULT NULL,
  `Consumo` int(11) DEFAULT NULL,
  `Importo` double(12,2) DEFAULT NULL,
  `CodUtente` int(11) DEFAULT NULL,
  PRIMARY KEY (`Numero`),
  KEY `CodUtente` (`CodUtente`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `bollette`
--

INSERT INTO `bollette` VALUES(1, '2012-02-28', 123, 153.11, 1);
INSERT INTO `bollette` VALUES(2, '2012-01-05', 12, 345.00, 4);
INSERT INTO `bollette` VALUES(3, '2012-02-06', 45, 345.65, 3);
INSERT INTO `bollette` VALUES(4, '2012-03-09', 5, 123.32, 2);
INSERT INTO `bollette` VALUES(5, '2012-04-06', 56, 456.89, 2);
INSERT INTO `bollette` VALUES(6, '2012-04-27', 147, 1859.10, 5);
INSERT INTO `bollette` VALUES(7, '2012-05-18', 58, 456.78, 3);
INSERT INTO `bollette` VALUES(8, '2012-06-10', 78, 709.88, 5);
INSERT INTO `bollette` VALUES(9, '2012-06-11', 45, 432.71, 3);
INSERT INTO `bollette` VALUES(10, '2012-09-17', 67, 543.82, 3);
INSERT INTO `bollette` VALUES(11, '2012-10-19', 98, 943.70, 4);
INSERT INTO `bollette` VALUES(12, '2012-11-05', 12, 234.67, 1);
INSERT INTO `bollette` VALUES(13, '2011-02-10', 24, 335.67, 2);

-- --------------------------------------------------------

--
-- Table structure for table `utenti`
--

CREATE TABLE `utenti` (
  `Codice` int(11) NOT NULL,
  `Cognome` varchar(30) DEFAULT NULL,
  `Nome` varchar(30) DEFAULT NULL,
  `Indirizzo` varchar(40) DEFAULT NULL,
  `Citta` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Codice`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utenti`
--

INSERT INTO `utenti` VALUES(1, 'Rossi', 'Antonio', 'Via Roma 34', 'Milano');
INSERT INTO `utenti` VALUES(2, 'Rossini', 'Gabriele', 'Via Puglia 4', 'Bari');
INSERT INTO `utenti` VALUES(3, 'Marossi', 'Fernanda', 'Via Europa 213', 'Torino');
INSERT INTO `utenti` VALUES(4, 'Bianchi', 'Giuseppe', 'Via Mazzini 17', 'Bologna');
INSERT INTO `utenti` VALUES(5, 'Rossi', 'Mario', 'Viale Olimpico 22', 'Trento');
INSERT INTO `utenti` VALUES(6, 'Bruni', 'Giorgio', 'Via Promessi Sposi 34', 'Milano');
INSERT INTO `utenti` VALUES(7, 'Rossini', 'Aldo', 'Via Toti 78', 'Roma');
INSERT INTO `utenti` VALUES(8, 'Verdi', 'Giacomo', 'Via Montini 87', 'Torino');
INSERT INTO `utenti` VALUES(9, 'Rossi', 'Antonella', 'Piazza Grande 34', 'Bologna');
INSERT INTO `utenti` VALUES(11, 'Lamelli', 'Lucio', 'Via Roma 145', 'Parma');
INSERT INTO `utenti` VALUES(12, 'Marchesi', 'Ferdinando', 'Viale Cavour 23', 'Ancona');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
