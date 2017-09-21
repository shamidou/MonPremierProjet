-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 17 Septembre 2014 à 13:17
-- Version du serveur: 5.5.25a
-- Version de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestion de vols`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(10) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `nbVoyageurs` int(11) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`No`, `numero`, `nom`, `prenom`, `adresse`, `mail`, `nbVoyageurs`) VALUES
(1, 'AIR5108', 'df', 'dfdf', 'dfdf', 'dfdfdf', 1),
(2, 'AIR5108', 'df', 'dfdf', 'dfdf', 'dfdfdf', 1),
(3, 'AIR5108', 'df', 'dfdf', 'dfdf', 'dfdfdf', 1),
(4, 'AIR5108', 'df', 'dfdf', 'dfdf', 'dfdfdf', 1),
(5, 'AIR5108', 'df', 'dfdf', 'dfdf', 'dfdfdf', 1),
(6, 'AIR5007', 'salim', 'Hamidou', '13 RUE DU 14 JUILLET', 'salim.hamidou@ac-creteil.fr', 4),
(7, 'AIR5108', 'salim', 'Hamidou', 'sdsdsd', 'dsd', 12),
(8, 'AIR5007', 'dfdf', 'dfdf', 'dfdfd', 'dfdf', 6),
(9, 'AIR5007', 'er', 'ere', 'ere', 'erer', 5),
(10, 'AIR5108', 'sdsdsd', 'sds', 'sdsds', 'sdsdsds', 2),
(11, 'AIR5007', 'dsd', 'sdsdsd', 'sdsdsd', 'sdsdsds', 5),
(12, 'AIR5007', 'fgsd', 'sdsdsd', 'sdsds', 'sdsd', 2),
(13, 'AIR5007', 'sds', 'sds', 'sdsdsd', 'sdsdsds', 5),
(14, 'AIR5108', 'dfgd', 'dfdf', 'dfdfdf', 'dfdfdfdf', 10),
(15, 'AIR5007', 'qsq', 'qs', 'qs', 'qs', 1),
(16, 'AIR5007', 'qsq', 'qs', 'qsqs', 'qssqs', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

CREATE TABLE IF NOT EXISTS `vols` (
  `numero` varchar(10) NOT NULL,
  `depart` varchar(50) NOT NULL,
  `arrivee` varchar(50) NOT NULL,
  `dateDepart` date NOT NULL,
  `dateArrivee` date NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `places` int(11) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vols`
--

INSERT INTO `vols` (`numero`, `depart`, `arrivee`, `dateDepart`, `dateArrivee`, `prix`, `places`) VALUES
('AIR5007', 'Paris CDG - France', 'Dakar - Sénégal', '2011-12-16', '2011-12-16', 526, 311),
('AIR5108', 'PARIS ORY - France', 'MADRID - Espagne', '2011-01-01', '2011-01-01', 250, 130);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
