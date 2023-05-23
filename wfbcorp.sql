-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2023 at 07:44 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wfbcorp`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `enunciate` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `p1` longtext NOT NULL,
  `p2` longtext NOT NULL,
  `p3` longtext NOT NULL,
  `conclusion` longtext NOT NULL,
  `date` datetime NOT NULL,
  `id_category_article` int NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `articles_category_articles_FK` (`id_category_article`),
  KEY `articles_users0_FK` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_articles`
--

DROP TABLE IF EXISTS `category_articles`;
CREATE TABLE IF NOT EXISTS `category_articles` (
  `id_category_article` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category_article`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category_articles`
--

INSERT INTO `category_articles` (`id_category_article`, `category`) VALUES
(1, 'Développement Web'),
(2, 'Web Design'),
(3, 'Web Référencement');

-- --------------------------------------------------------

--
-- Table structure for table `category_projects`
--

DROP TABLE IF EXISTS `category_projects`;
CREATE TABLE IF NOT EXISTS `category_projects` (
  `id_category_project` int NOT NULL AUTO_INCREMENT,
  `category_project` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category_project`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category_projects`
--

INSERT INTO `category_projects` (`id_category_project`, `category_project`) VALUES
(1, 'Site vitrine'),
(2, 'e-Commerce'),
(3, 'Application');

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

DROP TABLE IF EXISTS `code`;
CREATE TABLE IF NOT EXISTS `code` (
  `id_code` int NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id_image_article` int NOT NULL AUTO_INCREMENT,
  `image_head` varchar(255) NOT NULL,
  `image_content` varchar(255) NOT NULL,
  `id_article` int DEFAULT NULL,
  PRIMARY KEY (`id_image_article`),
  KEY `images_articles_FK` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id_project` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_category_project` int NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_project`),
  KEY `projects_category_projects_FK` (`id_category_project`),
  KEY `projects_users0_FK` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `id_role` int DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `users_role_FK` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_articles_FK` FOREIGN KEY (`id_category_article`) REFERENCES `category_articles` (`id_category_article`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_users0_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_articles_FK` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_category_projects_FK` FOREIGN KEY (`id_category_project`) REFERENCES `category_projects` (`id_category_project`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `projects_users0_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
