-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 23 Novembre 2021 à 09:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `guinguette`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DispoTable`()
    MODIFIES SQL DATA
UPDATE tablerestaurant SET Disponible = 1$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `animation`
--

CREATE TABLE IF NOT EXISTS `animation` (
  `IdAnimation` int(11) NOT NULL AUTO_INCREMENT,
  `NomGroupe` varchar(30) NOT NULL,
  `Poster` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Heure` time NOT NULL,
  PRIMARY KEY (`IdAnimation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cadeauc`
--

CREATE TABLE IF NOT EXISTS `cadeauc` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT,
  `IdPlat` int(11) NOT NULL,
  `Quantite` int(2) NOT NULL,
  KEY `IdPlat` (`IdPlat`),
  KEY `IdClient` (`IdClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cadeaug`
--

CREATE TABLE IF NOT EXISTS `cadeaug` (
  `IdGroupe` int(11) NOT NULL,
  `IdPlat` int(11) NOT NULL,
  `Quantite` int(2) NOT NULL,
  KEY `IdGroupe` (`IdGroupe`),
  KEY `IdPlat` (`IdPlat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `NbClient` int(2) NOT NULL,
  `Telephone` varchar(13) NOT NULL,
  `NbVehicule` int(2) NOT NULL,
  `NbPHandi` int(2) NOT NULL,
  `Allergene` varchar(30) NOT NULL,
  PRIMARY KEY (`IdClient`),
  KEY `IdClient` (`IdClient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`IdClient`, `Nom`, `NbClient`, `Telephone`, `NbVehicule`, `NbPHandi`, `Allergene`) VALUES
(1, 'tchakala', 4, '0645789578', 2, 0, ''),
(2, 'tchakala', 4, '0645789578', 2, 0, ''),
(3, 'tchakala', 4, '0645789578', 2, 0, ''),
(4, 'tchakala', 4, '0645789578', 2, 0, ''),
(5, 'tchakala', 4, '0645789578', 2, 0, ''),
(6, 'tchakala', 4, '0645789578', 2, 0, ''),
(7, 'tchakala', 4, '0645789578', 2, 0, ''),
(8, 'tchakala', 4, '0645789578', 2, 0, ''),
(9, 'tchakala', 4, '0645789578', 2, 0, ''),
(10, 'tchakala', 4, '0645789578', 2, 0, ''),
(11, 'tchakala', 10, '0645789578', 5, 0, ''),
(12, 'tchakala', 10, '0645789578', 5, 0, ''),
(13, 'tchakala', 10, '0645789578', 5, 0, ''),
(14, 'tchakala', 3, 'fezfze', 1, 0, ''),
(15, 'tchakala', 3, 'fezfze', 1, 0, ''),
(16, 'tchakala', 3, 'fezfze', 1, 0, ''),
(17, 'tchakala', 3, 'fezfze', 1, 0, ''),
(18, 'tchakala', 3, 'fezfze', 1, 0, ''),
(19, 'tchakala', 3, 'fezfze', 1, 0, ''),
(20, 'tchakala', 3, 'fezfze', 1, 0, ''),
(21, 'tchakala', 3, 'fezfze', 1, 0, ''),
(22, 'tchakala', 3, 'fezfze', 1, 0, ''),
(23, 'tchakala', 3, 'fezfze', 1, 0, ''),
(24, 'tchakala', 1, '0645789578', 1, 0, ''),
(25, 'tchakala', 1, '0645789578', 1, 0, ''),
(26, 'tchakala', 1, '0645789578', 1, 0, ''),
(27, 'oui', 10, 'ksdksjnds', 1, 0, ''),
(28, 'oui', 10, 'ksdksjnds', 1, 0, ''),
(29, 'oui', 10, 'sxw,cwxc', 1, 0, ''),
(30, 'guillaume', 5, '0651478592', 1, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `composei`
--

CREATE TABLE IF NOT EXISTS `composei` (
  `IdIngredient` int(11) NOT NULL,
  `IdPlat` int(11) NOT NULL,
  KEY `IdIngredient` (`IdIngredient`),
  KEY `IdPlat` (`IdPlat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `composei`
--

INSERT INTO `composei` (`IdIngredient`, `IdPlat`) VALUES
(17, 2),
(18, 3),
(19, 4),
(20, 4),
(21, 4),
(22, 4),
(23, 4),
(24, 5),
(25, 5),
(26, 5),
(27, 5),
(28, 6),
(29, 7),
(30, 8),
(29, 8),
(26, 8);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
  `IdGroupe` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(40) NOT NULL,
  `NbClient` int(3) DEFAULT NULL,
  `Telephone` varchar(15) DEFAULT NULL,
  `NbVehicule` int(3) DEFAULT NULL,
  `NbPHandi` int(3) DEFAULT NULL,
  `Allergene` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdGroupe`),
  KEY `IdGroupe` (`IdGroupe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`IdGroupe`, `Nom`, `NbClient`, `Telephone`, `NbVehicule`, `NbPHandi`, `Allergene`) VALUES
(1, 'tchakala', 645789578, '24', 11, 0, ''),
(2, 'tchakala', 645789578, '24', 11, 0, ''),
(3, 'tchakala', 645789578, '24', 11, 0, ''),
(4, 'tchakala', 645789578, '24', 11, 0, ''),
(5, 'tchakala', 645789578, '24', 11, 0, ''),
(6, 'tchakala', 24, '645789578', 11, 0, ''),
(7, 'tchakala', 24, '645789578', 11, 0, ''),
(8, 'tchakala', 24, '645789578', 11, 0, ''),
(9, 'tchakala', 26, '645789578', 7, 0, ''),
(10, 'tchakala', 20, '645789578', 4, 0, ''),
(11, 'tchakala', 20, '645789578', 4, 0, ''),
(12, 'tchakala', 20, '645789578', 4, 0, ''),
(13, 'tchakala', 20, '645789578', 4, 0, ''),
(14, 'tchakala', 20, '645789578', 4, 0, ''),
(15, 'fezfze', 20, '645789578', 1, 0, ''),
(16, 'fezfze', 20, '645789578', 1, 0, ''),
(17, 'fezfze', 20, '645789578', 1, 0, ''),
(18, 'fezfze', 20, '645789578', 1, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE IF NOT EXISTS `ingredient` (
  `IdIngredient` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` text NOT NULL,
  PRIMARY KEY (`IdIngredient`),
  KEY `IdIngredient` (`IdIngredient`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `ingredient`
--

INSERT INTO `ingredient` (`IdIngredient`, `Libelle`) VALUES
(17, 'Saumon'),
(18, 'Poisson'),
(19, 'Jambon cru'),
(20, 'Rillettes'),
(21, 'Saucisson'),
(22, 'Pâté en croûte'),
(23, 'Boudin noir'),
(24, 'Tartare de saumon'),
(25, 'Terrine de saumon'),
(26, 'Rillettes de sardines'),
(27, 'Gravelax de saumon'),
(28, 'Fromage'),
(29, 'Frites'),
(30, 'Saucisse');

-- --------------------------------------------------------

--
-- Structure de la table `menurestaurant`
--

CREATE TABLE IF NOT EXISTS `menurestaurant` (
  `IdMenu` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) DEFAULT NULL,
  `Prix` float DEFAULT NULL,
  PRIMARY KEY (`IdMenu`),
  KEY `IdMenu` (`IdMenu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `menurestaurant`
--

INSERT INTO `menurestaurant` (`IdMenu`, `Nom`, `Prix`) VALUES
(1, 'tchakala', 15),
(3, 'tchakala', 15);

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE IF NOT EXISTS `plat` (
  `IdPlat` int(11) NOT NULL AUTO_INCREMENT,
  `PrixPlat` float NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`IdPlat`),
  KEY `IdPlat` (`IdPlat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `plat`
--

INSERT INTO `plat` (`IdPlat`, `PrixPlat`, `Photo`, `Libelle`) VALUES
(2, 7, 'x', 'Terrine de saumon'),
(3, 7, 'x', 'Assiette de friture de poissons'),
(4, 11, 'x', 'Ardoise de charcuterie'),
(5, 11, 'x', 'Ardoise de la mer'),
(6, 14.5, 'x', 'Ardoise mixte "Charcuterie/Fromage"'),
(7, 5, 'x', 'Assiette de frites'),
(8, 15, 'x', 'Tartare de Boeuf');

-- --------------------------------------------------------

--
-- Structure de la table `reservec`
--

CREATE TABLE IF NOT EXISTS `reservec` (
  `IdClient` int(11) NOT NULL,
  `IdMenu` int(11) NOT NULL,
  KEY `IdClient` (`IdClient`),
  KEY `IdMenu` (`IdMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reserveg`
--

CREATE TABLE IF NOT EXISTS `reserveg` (
  `IdGroupe` int(11) NOT NULL,
  `IdMenu` int(11) NOT NULL,
  KEY `IdGroupe` (`IdGroupe`),
  KEY `IdMenu` (`IdMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tablerestaurant`
--

CREATE TABLE IF NOT EXISTS `tablerestaurant` (
  `IdTable` int(11) NOT NULL AUTO_INCREMENT,
  `IntExt` tinyint(1) DEFAULT NULL,
  `NbSiege` int(2) DEFAULT NULL,
  `Disponible` tinyint(1) NOT NULL,
  PRIMARY KEY (`IdTable`),
  KEY `IdTable` (`IdTable`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `tablerestaurant`
--

INSERT INTO `tablerestaurant` (`IdTable`, `IntExt`, `NbSiege`, `Disponible`) VALUES
(9, 1, 4, 1),
(10, 0, 8, 1),
(11, 1, 4, 0),
(12, 0, 4, 1),
(13, 1, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisec`
--

CREATE TABLE IF NOT EXISTS `utilisec` (
  `IdClient` int(11) NOT NULL,
  `IdTable` int(11) NOT NULL,
  KEY `IdClient` (`IdClient`),
  KEY `IdTable` (`IdTable`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisec`
--

INSERT INTO `utilisec` (`IdClient`, `IdTable`) VALUES
(27, 12),
(29, 9),
(30, 10);

-- --------------------------------------------------------

--
-- Structure de la table `utiliseg`
--

CREATE TABLE IF NOT EXISTS `utiliseg` (
  `IdGroupe` int(11) NOT NULL,
  `IdTable` int(11) NOT NULL,
  KEY `IdGroupe` (`IdGroupe`),
  KEY `IdTable` (`IdTable`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utiliseg`
--

INSERT INTO `utiliseg` (`IdGroupe`, `IdTable`) VALUES
(9, 9),
(11, 9),
(13, 9),
(13, 13),
(12, 13),
(11, 13),
(11, 11),
(12, 11),
(11, 11),
(12, 11),
(11, 11),
(12, 11),
(11, 11),
(12, 11);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `cadeauc`
--
ALTER TABLE `cadeauc`
  ADD CONSTRAINT `cadeauc_ibfk_2` FOREIGN KEY (`IdPlat`) REFERENCES `plat` (`IdPlat`);

--
-- Contraintes pour la table `cadeaug`
--
ALTER TABLE `cadeaug`
  ADD CONSTRAINT `cadeaug_ibfk_1` FOREIGN KEY (`IdGroupe`) REFERENCES `groupe` (`IdGroupe`),
  ADD CONSTRAINT `cadeaug_ibfk_2` FOREIGN KEY (`IdPlat`) REFERENCES `plat` (`IdPlat`);

--
-- Contraintes pour la table `composei`
--
ALTER TABLE `composei`
  ADD CONSTRAINT `composei_ibfk_1` FOREIGN KEY (`IdIngredient`) REFERENCES `ingredient` (`IdIngredient`),
  ADD CONSTRAINT `composei_ibfk_2` FOREIGN KEY (`IdPlat`) REFERENCES `plat` (`IdPlat`);

--
-- Contraintes pour la table `reservec`
--
ALTER TABLE `reservec`
  ADD CONSTRAINT `reservec_ibfk_2` FOREIGN KEY (`IdMenu`) REFERENCES `menurestaurant` (`IdMenu`),
  ADD CONSTRAINT `reservec_ibfk_3` FOREIGN KEY (`IdClient`) REFERENCES `client` (`IdClient`),
  ADD CONSTRAINT `reservec_ibfk_4` FOREIGN KEY (`IdMenu`) REFERENCES `menurestaurant` (`IdMenu`);

--
-- Contraintes pour la table `reserveg`
--
ALTER TABLE `reserveg`
  ADD CONSTRAINT `reserveg_ibfk_1` FOREIGN KEY (`IdGroupe`) REFERENCES `groupe` (`IdGroupe`),
  ADD CONSTRAINT `reserveg_ibfk_2` FOREIGN KEY (`IdMenu`) REFERENCES `menurestaurant` (`IdMenu`),
  ADD CONSTRAINT `reserveg_ibfk_3` FOREIGN KEY (`IdGroupe`) REFERENCES `groupe` (`IdGroupe`),
  ADD CONSTRAINT `reserveg_ibfk_4` FOREIGN KEY (`IdMenu`) REFERENCES `menurestaurant` (`IdMenu`);

--
-- Contraintes pour la table `utilisec`
--
ALTER TABLE `utilisec`
  ADD CONSTRAINT `utilisec_ibfk_2` FOREIGN KEY (`idTable`) REFERENCES `tablerestaurant` (`IdTable`),
  ADD CONSTRAINT `utilisec_ibfk_3` FOREIGN KEY (`IdClient`) REFERENCES `client` (`IdClient`);

--
-- Contraintes pour la table `utiliseg`
--
ALTER TABLE `utiliseg`
  ADD CONSTRAINT `utiliseg_ibfk_1` FOREIGN KEY (`IdGroupe`) REFERENCES `groupe` (`IdGroupe`),
  ADD CONSTRAINT `utiliseg_ibfk_2` FOREIGN KEY (`IdTable`) REFERENCES `tablerestaurant` (`IdTable`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
