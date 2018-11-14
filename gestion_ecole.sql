-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 14 Novembre 2018 à 17:42
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion_ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
`codeClasse` int(11) NOT NULL,
  `libelleClasse` varchar(150) NOT NULL,
  `nomClasse` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`codeClasse`, `libelleClasse`, `nomClasse`) VALUES
(1, 'TL1', 'Terminal L1'),
(2, 'TG', 'Treminal G'),
(4, 'second ', 'Seconde '),
(5, 'zegrthy', 'zdefrgthyu');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE IF NOT EXISTS `eleves` (
`matricule` int(11) NOT NULL,
  `nomEleve` varchar(50) NOT NULL,
  `prenomEleve` varchar(100) NOT NULL,
  `datenaiss` date NOT NULL,
  `codeClasse` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `eleves`
--

INSERT INTO `eleves` (`matricule`, `nomEleve`, `prenomEleve`, `datenaiss`, `codeClasse`) VALUES
(1, 'Sall', 'Abdou', '0000-00-00', 1),
(2, 'Fall', 'Astou', '0000-00-00', 2),
(3, 'Niang', 'Babacar', '0000-00-00', 2),
(4, 'Diop', 'Omar', '0000-00-00', 4),
(5, 'Ka', 'Fallou', '0000-00-00', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
 ADD PRIMARY KEY (`codeClasse`);

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
 ADD PRIMARY KEY (`matricule`), ADD KEY `codeClasse` (`codeClasse`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
MODIFY `codeClasse` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
MODIFY `matricule` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `eleves`
--
ALTER TABLE `eleves`
ADD CONSTRAINT `eleves_ibfk_1` FOREIGN KEY (`codeClasse`) REFERENCES `classe` (`codeClasse`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
