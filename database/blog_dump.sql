-- Adminer 4.8.1 MySQL 10.6.18-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `authors` (`id`, `name`, `city`, `email`, `phone`) VALUES
(1,	'Monique',	'Crest',	'monique@exemple.fr',	605484545);

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `authors` (`id`),
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `title` varchar(25) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id`) REFERENCES `authors` (`id`),
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`id`) REFERENCES `comments` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-09-06 08:47:05