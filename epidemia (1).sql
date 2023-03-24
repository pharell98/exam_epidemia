-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 mars 2023 à 17:50
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `epidemia`
--

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `idP` int(11) NOT NULL,
  `nomP` varchar(30) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `etat` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`idP`, `nomP`, `population`, `etat`) VALUES
(1, 'SENEGAL', 1600000, 1),
(2, 'MAURITANIE', 456985, 1);

-- --------------------------------------------------------

--
-- Structure de la table `point_surveillance`
--

CREATE TABLE `point_surveillance` (
  `idPs` int(11) NOT NULL,
  `nomPs` varchar(30) DEFAULT NULL,
  `idZone` int(11) DEFAULT NULL,
  `etat` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `point_surveillance`
--

INSERT INTO `point_surveillance` (`idPs`, `nomPs`, `idZone`, `etat`) VALUES
(1, 'PS1', 4, 1),
(2, 'PS2', 2, 1),
(3, 'PS3', 3, 1),
(4, 'PS4', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idR` int(11) NOT NULL,
  `nomR` varchar(30) DEFAULT NULL,
  `etat` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idR`, `nomR`, `etat`) VALUES
(1, 'ADMIN', 1),
(2, 'AGENT', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idU` int(11) NOT NULL,
  `nomU` varchar(30) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `idRole` int(11) DEFAULT 2,
  `etat` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idU`, `nomU`, `prenom`, `email`, `pass`, `idRole`, `etat`) VALUES
(1, 'Rhut', 'Marina', 'admin@epidemia.com', 'passer', 1, 1),
(2, 'Diallo', 'Hamidou', 'agent@epidemia.com', 'passer', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE `zone` (
  `idZ` int(11) NOT NULL,
  `nomZ` varchar(30) DEFAULT NULL,
  `nbPersonnesTotal` int(11) DEFAULT NULL,
  `nbPersonnesSympt` int(11) DEFAULT 0,
  `nbPersonnesPosi` int(11) DEFAULT 0,
  `idPays` int(11) DEFAULT NULL,
  `etat` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `zone`
--

INSERT INTO `zone` (`idZ`, `nomZ`, `nbPersonnesTotal`, `nbPersonnesSympt`, `nbPersonnesPosi`, `idPays`, `etat`) VALUES
(1, 'sn-01-fm', 2300, 0, 0, 1, 1),
(2, 'Zone_SN_2', 4589, 0, 0, 1, 1),
(3, 'Zone_SN_3', 6789, 0, 0, 1, 1),
(4, 'Zone_MR_1', 4357, 0, 0, 2, 1),
(5, 'Zone_MR_2', 2341, 0, 0, 2, 1),
(6, 'Zone_MR_3', 4536, 0, 0, 2, 1),
(9, 'sn-001', 150000, 50000, 50000, 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`idP`),
  ADD UNIQUE KEY `nomP` (`nomP`);

--
-- Index pour la table `point_surveillance`
--
ALTER TABLE `point_surveillance`
  ADD PRIMARY KEY (`idPs`),
  ADD UNIQUE KEY `nomPs` (`nomPs`),
  ADD KEY `idZone` (`idZone`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idR`),
  ADD UNIQUE KEY `nomR` (`nomR`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idU`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idRole` (`idRole`);

--
-- Index pour la table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`idZ`),
  ADD UNIQUE KEY `nomZ` (`nomZ`),
  ADD KEY `idPays` (`idPays`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `point_surveillance`
--
ALTER TABLE `point_surveillance`
  MODIFY `idPs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `zone`
--
ALTER TABLE `zone`
  MODIFY `idZ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `point_surveillance`
--
ALTER TABLE `point_surveillance`
  ADD CONSTRAINT `point_surveillance_ibfk_1` FOREIGN KEY (`idZone`) REFERENCES `zone` (`idZ`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `role` (`idR`);

--
-- Contraintes pour la table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `zone_ibfk_1` FOREIGN KEY (`idPays`) REFERENCES `pays` (`idP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
