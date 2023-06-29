-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Articles`;
CREATE TABLE `Articles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `text` varchar(150) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `degres` int(11) NOT NULL DEFAULT 0,
  `Authors_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Articles_Authors1_idx` (`Authors_ID`),
  CONSTRAINT `fk_Articles_Authors1` FOREIGN KEY (`Authors_ID`) REFERENCES `Authors` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Articles` (`ID`, `title`, `text`, `start_date`, `end_date`, `degres`, `Authors_ID`) VALUES
(2,	'Aujourd\'hui à la une des sports',	'Gregory Petit fait la brasse coulée',	'2023-06-28 00:00:00',	'2023-06-30 00:00:00',	0,	1),
(3,	'A la Une du biathlon',	'Kennedy réussi un doublé',	'2023-05-20 00:00:00',	'2023-06-30 00:00:00',	4,	3),
(4,	'Natation',	'Une nouvelle tendance l\'apéro piscine',	'2023-06-28 00:00:00',	'2023-07-01 00:00:00',	5,	2),
(5,	'Tir à l\'arc',	'Robin des bois perds en finale de brocéliande',	'2023-06-28 00:00:00',	'2023-07-25 00:00:00',	2,	5),
(6,	'Barbecue',	'jeanne d\'arc fini par mettre le feu',	'2023-06-28 00:00:00',	'2023-07-25 00:00:00',	5,	1);

DROP TABLE IF EXISTS `Articles_Categories`;
CREATE TABLE `Articles_Categories` (
  `Articles_ID` int(11) NOT NULL,
  `Categories_ID` int(11) NOT NULL,
  PRIMARY KEY (`Articles_ID`,`Categories_ID`),
  KEY `fk_Articles_has_Categories_Categories1_idx` (`Categories_ID`),
  KEY `fk_Articles_has_Categories_Articles1_idx` (`Articles_ID`),
  CONSTRAINT `fk_Articles_has_Categories_Articles1` FOREIGN KEY (`Articles_ID`) REFERENCES `Articles` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Articles_has_Categories_Categories1` FOREIGN KEY (`Categories_ID`) REFERENCES `Categories` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Articles_Categories` (`Articles_ID`, `Categories_ID`) VALUES
(2,	3),
(3,	3),
(3,	5),
(4,	3),
(5,	3),
(6,	4);

DROP TABLE IF EXISTS `Authors`;
CREATE TABLE `Authors` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `pseudo` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `pseudo_UNIQUE` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Authors` (`ID`, `first_name`, `last_name`, `pseudo`) VALUES
(1,	'Alexandre',	'wacquet',	'Matéo'),
(2,	'Fofie',	'Gauthier de Breuvand',	'Valentine'),
(3,	'Victor',	NULL,	'neeko'),
(4,	'Aurélien',	NULL,	'twitch'),
(5,	'Mélanie',	NULL,	'Lafolle');

DROP TABLE IF EXISTS `Categories`;
CREATE TABLE `Categories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Categories` (`ID`, `name`) VALUES
(2,	'Loisirs'),
(3,	'Sport'),
(4,	'faits divers'),
(5,	'politique');

DROP TABLE IF EXISTS `Comments`;
CREATE TABLE `Comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(150) NOT NULL,
  `comment_date` datetime NOT NULL DEFAULT current_timestamp(),
  `Authors_ID` int(11) NOT NULL,
  `Articles_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Comments_Authors_idx` (`Authors_ID`),
  KEY `fk_Comments_Articles1_idx` (`Articles_ID`),
  CONSTRAINT `fk_Comments_Articles1` FOREIGN KEY (`Articles_ID`) REFERENCES `Articles` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comments_Authors` FOREIGN KEY (`Authors_ID`) REFERENCES `Authors` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Comments` (`ID`, `text`, `comment_date`, `Authors_ID`, `Articles_ID`) VALUES
(2,	'Bravo',	'2023-06-28 12:05:41',	2,	2),
(4,	'Elle a eu chaud',	'2023-06-28 13:22:32',	1,	5),
(5,	'Je me suis trompé c\'était Notre Dame',	'2023-06-28 13:23:56',	1,	6),
(6,	'sans avis',	'2023-06-28 13:31:37',	2,	5);

-- 2023-06-28 11:34:01
