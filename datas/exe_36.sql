-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 08 avr. 2018 à 12:23
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exe_36`
--

-- --------------------------------------------------------

--
-- Structure de la table `categ`
--

DROP TABLE IF EXISTS `categ`;
CREATE TABLE IF NOT EXISTS `categ` (
  `idcateg` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `desc` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`idcateg`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categ`
--

INSERT INTO `categ` (`idcateg`, `name`, `desc`) VALUES
(1, 'Liens', ''),
(2, 'CV', ''),
(3, 'Galerie', ''),
(4, 'Contact', '');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `idnews` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `publication` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `visible` tinyint(3) UNSIGNED DEFAULT '0',
  `user_iduser` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idnews`),
  KEY `fk_news_user1_idx` (`user_iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `news_has_categ`
--

DROP TABLE IF EXISTS `news_has_categ`;
CREATE TABLE IF NOT EXISTS `news_has_categ` (
  `news_idnews` int(10) UNSIGNED NOT NULL,
  `categ_idcateg` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`news_idnews`,`categ_idcateg`),
  KEY `fk_news_has_categ_categ1_idx` (`categ_idcateg`),
  KEY `fk_news_has_categ_news1_idx` (`news_idnews`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE IF NOT EXISTS `permission` (
  `idpermission` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `level` smallint(5) UNSIGNED NOT NULL DEFAULT '3' COMMENT '0 => admin\n1 => moderator\n2 => editor\n3 => user',
  PRIMARY KEY (`idpermission`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `permission`
--

INSERT INTO `permission` (`idpermission`, `name`, `level`) VALUES
(1, 'Admin', 0),
(2, 'Moderator', 1),
(3, 'Editor', 2),
(4, 'User', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(60) NOT NULL,
  `pwd` varchar(64) NOT NULL,
  `name` varchar(120) NOT NULL,
  `permission_idpermission` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  KEY `fk_user_permission_idx` (`permission_idpermission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `news_has_categ`
--
ALTER TABLE `news_has_categ`
  ADD CONSTRAINT `fk_news_has_categ_categ1` FOREIGN KEY (`categ_idcateg`) REFERENCES `categ` (`idcateg`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_news_has_categ_news1` FOREIGN KEY (`news_idnews`) REFERENCES `news` (`idnews`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_permission` FOREIGN KEY (`permission_idpermission`) REFERENCES `permission` (`idpermission`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
