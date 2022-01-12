-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 24 Juillet 2021 à 03:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ranch`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

CREATE TABLE IF NOT EXISTS `chambres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Catégorie` text NOT NULL,
  `Type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `chambres`
--

INSERT INTO `chambres` (`id`, `Catégorie`, `Type`) VALUES
(1, 'CATEGORIE A', 'chambre standard d''une superficie de 20m2'),
(2, 'CATEGORIE B', 'chambre standard d''une superficie de 32m2'),
(5, 'CATEGORIE C', 'chambre standard d''une superficie de 48m2 '),
(6, 'SUITE', 'suite d''une superficie de 60m2, jardin privatif'),
(7, 'SUITE ROYALE', 'suite d''une superficie de 120m2,jardin privatif, piscine privée, cuisine');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Prénom` text NOT NULL,
  `Nom` text NOT NULL,
  `Téléphone` int(11) NOT NULL,
  `Messagerie` varchar(255) NOT NULL,
  `Ville` text NOT NULL,
  `Pays` text NOT NULL,
  `Type de logement` varchar(255) NOT NULL,
  `Date d'arrivée` date NOT NULL,
  `Date de sortie` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `Prénom`, `Nom`, `Téléphone`, `Messagerie`, `Ville`, `Pays`, `Type de logement`, `Date d'arrivée`, `Date de sortie`) VALUES
(1, '', 'malick', 0, '773877262', 'Saint-louis', 'Sénégal', 'chambre double', '2021-07-06', '2021-07-14'),
(2, 'malick', 'fall', 773877262, 'fallmalick547@gmail.com', 'Saint-louis', 'Sénégal', 'Suite royale', '2021-07-07', '2021-07-23'),
(3, 'Abdou', 'fall', 772616116, 'fallabdou@gmail.com', 'Dakar', 'Sénégal', 'Suite', '2021-07-22', '2021-07-24'),
(4, 'malick', 'fall', 772616116, 'fallmalick547@gmail.com', 'Saint-louis', 'Sénégal', 'Suite royale', '2021-07-07', '2021-07-14'),
(5, 'Mamadou', 'fall', 776752985, 'mfall1993@gmail.com', 'Saint-louis', 'Sénégal', 'chambre triple', '2021-07-12', '2021-07-16'),
(6, 'ndieme', 'diouf', 786543567, 'dioufndieme@gmail.com', 'Dakar', 'Sénégal', 'chambre double', '2021-07-15', '2021-07-08');

-- --------------------------------------------------------

--
-- Structure de la table `tarifs_chambre`
--

CREATE TABLE IF NOT EXISTS `tarifs_chambre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Type de chambre` varchar(255) NOT NULL,
  `PRIX/NUIT` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `tarifs_chambre`
--

INSERT INTO `tarifs_chambre` (`id`, `Type de chambre`, `PRIX/NUIT`) VALUES
(1, 'chambre 20m2 avec SB, climatisée', '28000 CFA/nuit'),
(2, 'chambre de 32m2 avec SB climatisée Split + TV', '36000 CFA/nuit'),
(3, 'chambre 48m2 avec terrasse clim Split TV', '64000 CFA/nuit'),
(4, 'suite avec jardin privatif 60m2 + jardin', '85000 CFA/nuit'),
(5, 'Royal Suite 120m2 avec piscine privée 55m2 et cuisine', '130000 CFA/nuit');

-- --------------------------------------------------------

--
-- Structure de la table `tarifs_restauration`
--

CREATE TABLE IF NOT EXISTS `tarifs_restauration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `RESTAURATION` text NOT NULL,
  `PRIX/PERSONNE` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `tarifs_restauration`
--

INSERT INTO `tarifs_restauration` (`id`, `RESTAURATION`, `PRIX/PERSONNE`) VALUES
(1, 'petit dejeuner', '5000 CFA'),
(2, 'repas menu', '12000 CFA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
