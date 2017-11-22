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
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `idCommande` int(11) NOT NULL,
  `prixTotalCommande` int(11) DEFAULT NULL,
  `dateCommande` date DEFAULT NULL,
  `etatCommande` varchar(1) DEFAULT NULL,
  `idUtilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commander`
--

CREATE TABLE `ligne_commander` (
  `totalLigne` int(11) DEFAULT NULL,
  `idCommandes` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `idProduit` int(11) NOT NULL,
  `nomProduit` varchar(25) DEFAULT NULL,
  `prixProduit` int(11) DEFAULT NULL,
  `descriptionProduit` varchar(200) DEFAULT NULL,
  `photoProduit` varchar(200) DEFAULT NULL,
  `quantiteProduit` int(11) DEFAULT NULL
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

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `FK_COMMANDES_idUtilisateur` (`idUtilisateur`);

--
-- Index pour la table `ligne_commander`
--
ALTER TABLE `ligne_commander`
  ADD PRIMARY KEY (`idCommandes`,`idProduit`),
  ADD KEY `FK_LIGNE_COMMANDER_idProduit` (`idProduit`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`idProduit`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `idProduit` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `FK_COMMANDES_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`);

--
-- Contraintes pour la table `ligne_commander`
--
ALTER TABLE `ligne_commander`
  ADD CONSTRAINT `FK_LIGNE_COMMANDER_idCommandes` FOREIGN KEY (`idCommandes`) REFERENCES `commandes` (`idCommande`),
  ADD CONSTRAINT `FK_LIGNE_COMMANDER_idProduit` FOREIGN KEY (`idProduit`) REFERENCES `produits` (`idProduit`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
