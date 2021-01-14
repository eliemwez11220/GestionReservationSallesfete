-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 28, 2019 at 08:34 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_deborah_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `noms_complet` varchar(75) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `email` varchar(75) NOT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_client`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `telephone` (`telephone`),
  KEY `noms_complet` (`noms_complet`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `noms_complet`, `telephone`, `email`, `adresse`) VALUES
(1, 'Ilunga patient', '0990893210', 'patient@gmail.com', 'bel-air mazout, kampemba'),
(2, 'Kapinga Sarah', '0821733330', 'kapinga@gmail.com', 'gecamines, lubumbashi'),
(3, 'melanie chirene', '0977090011', 'chirene@gmail.com', 'lubumbashi, haut katanga');

-- --------------------------------------------------------

--
-- Table structure for table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `id_paie` int(11) NOT NULL AUTO_INCREMENT,
  `numero_bordereau` varchar(25) NOT NULL,
  `montant` double DEFAULT NULL,
  `date_paiement` date DEFAULT NULL,
  `client_id` varchar(75) NOT NULL,
  `reservation_id` varchar(10) NOT NULL,
  `date_validation` date DEFAULT NULL,
  PRIMARY KEY (`id_paie`),
  UNIQUE KEY `numero_bordereau` (`numero_bordereau`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paiement`
--

INSERT INTO `paiement` (`id_paie`, `numero_bordereau`, `montant`, `date_paiement`, `client_id`, `reservation_id`, `date_validation`) VALUES
(5, '21021022', 300, '2019-09-28', '3', '8', '2019-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id_demande` int(11) NOT NULL AUTO_INCREMENT,
  `ref_demande` varchar(25) DEFAULT NULL,
  `date_emission` date NOT NULL,
  `ville` varchar(75) DEFAULT NULL,
  `province` varchar(75) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `client_id` varchar(75) NOT NULL,
  `salle_id` varchar(75) NOT NULL,
  PRIMARY KEY (`id_demande`),
  UNIQUE KEY `ref_demande` (`ref_demande`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_demande`, `ref_demande`, `date_emission`, `ville`, `province`, `date_debut`, `date_fin`, `client_id`, `salle_id`) VALUES
(8, '5746073820', '2019-09-27', 'likasi', 'katanga', '2019-09-28', '2019-09-29', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `salle_fete`
--

DROP TABLE IF EXISTS `salle_fete`;
CREATE TABLE IF NOT EXISTS `salle_fete` (
  `id_salle` int(11) NOT NULL AUTO_INCREMENT,
  `nom_salle` varchar(75) NOT NULL,
  `prix_salle` varchar(10) NOT NULL,
  `capacite` varchar(10) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `adresse` varchar(75) NOT NULL,
  `etat_salle` enum('disponible','reservée','bloquée') NOT NULL,
  `gerant_responsable` varchar(75) NOT NULL,
  PRIMARY KEY (`id_salle`),
  KEY `nom_salle` (`nom_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salle_fete`
--

INSERT INTO `salle_fete` (`id_salle`, `nom_salle`, `prix_salle`, `capacite`, `telephone`, `adresse`, `etat_salle`, `gerant_responsable`) VALUES
(1, 'SHUKRA', '$1500', '1200places', '09890009099', 'Lido golf', 'disponible', '7');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_utilisateur` varchar(75) NOT NULL,
  `code_utilisateur` varchar(75) NOT NULL,
  `role_utilisateur` enum('Webmaster','Gerant','Client','Comptable') NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  UNIQUE KEY `pseudo_utilisateur` (`pseudo_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `pseudo_utilisateur`, `code_utilisateur`, `role_utilisateur`, `date_creation`) VALUES
(6, 'admin', '123456', 'Webmaster', '2019-09-17'),
(7, 'deborah', 'deborah', 'Gerant', '2019-09-27'),
(8, 'mwez', '123456', 'Gerant', '2019-09-25'),
(9, 'chirene', 'chirene', 'Client', '2019-09-27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
