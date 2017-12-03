-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 10 Novembre 2017 à 14:54
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25


DROP TABLE IF EXISTS ligne_commander;
DROP TABLE IF EXISTS commandes;
DROP TABLE IF EXISTS produits;
DROP TABLE IF EXISTS utilisateurs;
DROP TABLE IF EXISTS catalogue;
DROP TABLE IF EXISTS messages;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ams`
--
-- --------------------------------------------------------
--
-- Structure de la table `messages`
--
CREATE TABLE `messages`(
  `idMessage` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nomExpediteur` VARCHAR(50) NOT NULL,
  `prenomExpediteur` VARCHAR(50) NOT NULL,
  `objetMessage` VARCHAR(50) NOT NULL,
  `mailExpediteur` VARCHAR(255) NOT NULL,
  `detailMessage` LONGTEXT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Structure de la table `catalogue`
--
CREATE TABLE `catalogue` (
  `idService`     INT(11)     NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nomService`    VARCHAR(50) NOT NULL,
  `detailService` LONGTEXT    NOT NULL,
  `coutService`   FLOAT(10, 2) NOT NULL,
  `imageService` VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL,
  `nomUtilisateur` varchar(25) DEFAULT NULL,
  `prenomUtilisateur` varchar(25) DEFAULT NULL,
  `loginUtilisateur` varchar(40) DEFAULT NULL,
  `mdpUtilisateur` varchar(40) DEFAULT NULL,
  `mailUtilisateur` varchar(45) DEFAULT NULL,
  `adresseUtilisateur` varchar(45) DEFAULT NULL,
  `cpUtilisateur` varchar(45) DEFAULT NULL,
  `villeUtilisateur` varchar(45) DEFAULT NULL,
  `roleUtilisateur` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `loginUtilisateur`, `mdpUtilisateur`, `mailUtilisateur`, `adresseUtilisateur`, `cpUtilisateur`, `villeUtilisateur`, `roleUtilisateur`) VALUES
(1, 'Deniz', 'Ayhann', 'ayhann', 'ayhann', 'ayhann.deniz@viacesi.fr', '6 rue du chemin', '69120', 'Vaulx-En-Velin', 1),
(2, 'Chassagne', 'Aurelie', 'aurelie', 'aurelie', 'aurelie.chassagne@viacesi.fr', '7 rue du chemin', '69100', 'Villeurbanne', 1);



INSERT INTO `catalogue` (`idService`,`nomService`,`detailService`,`coutService`,`imageService`) VALUES
  (1,'Petite usine','nettoyage d\'une usine de 200m²',150.5,'../_images/petiteusine.jpg'),
  (2,'Moyenne usine','nettoyage d\'une usine de 400m²',300.05,'../_images/moyenneusine.jpg'),
  (3,'Grande usine','nettoyage d\'une usine de 600m²',400.05,'../_images/grandeusine.jpg');

--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
