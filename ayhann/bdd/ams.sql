-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 09 Novembre 2017 à 21:37
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

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
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `idRole` int(10) NOT NULL,
  `codeRole` int(10) NOT NULL,
  `libelleRole` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(10) NOT NULL,
  `nomUtilisateur` varchar(255) NOT NULL,
  `prenomUtilisateur` varchar(255) NOT NULL,
  `loginUtilisateur` varchar(255) NOT NULL,
  `mdpUtilisateur` varchar(255) NOT NULL,
  `adresseUtilisateur` varchar(255) NOT NULL,
  `emailUtilisateur` varchar(255) NOT NULL,
  `roleUtilisateur` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `loginUtilisateur`, `mdpUtilisateur`, `adresseUtilisateur`, `emailUtilisateur`, `roleUtilisateur`) VALUES
(1, 'Deniz', 'Ayhann', 'ayhann', 'ayhann', '19 Avenue Guy de Collongue, 69130 Ecully', 'ayhann.deniz@viacesi.fr', 1),
(2, 'Ralijaona', 'Tiona', 'tiona', 'tiona', '19 Avenue Guy de Collongue, 69130 Ecully', 'tiona.ralijaona@viacesi.fr', 1),
(3, 'Chassagne', 'Aurelie', 'aurelie', 'aurelie', '19 Avenue Guy de Collongue, 69130 Ecully', 'aurelie.chassagne@viacesi.fr', 1),
(4, 'Meddour', 'Fadia', 'fadia', 'fadia', '19 Avenue Guy de Collongue, 69130 Ecully', 'fadia.meddour@viacesi.fr', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
