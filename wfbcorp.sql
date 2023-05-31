-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2023 at 12:10 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `enunciate`, `intro`, `p1`, `p2`, `p3`, `conclusion`, `date`, `id_category_article`, `id_user`) VALUES
(1, 'Titre Test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis massa tincidunt dui ut ornare lectus sit amet. Amet nisl suscipit adipiscing bibendum. Eu consequat ac felis donec et odio p', 'Pretium viverra suspendisse potenti nullam ac tortor vitae purus. Id volutpat lacus laoreet non curabitur. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Pellentesque massa placerat duis ultricies lacus. Gravida neque convallis a cra', 'In ornare quam viverra orci sagittis eu. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Quis lectus nulla at volutpat. Lectus arcu bibendum at varius vel pharetra. Dignissim convallis aenean et tortor at risus viverra adipiscing at. Eget magna fermentum iaculis eu non diam phasellus vestibulum lorem. Ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Donec massa sapien faucibus et molestie. Morbi enim nunc faucibus a. Magna sit amet purus gravida quis blandit turpis cursus in. Nec feugiat in fermentum posuere urna. Ut diam quam nulla porttitor massa id neque aliquam. Ac turpis egestas integer eget aliquet nibh praesent tristique. Volutpat lacus laoreet non curabitur gravida arcu. Platea dictumst vestibulum rhoncus est.', 'Bibendum est ultricies integer quis. Sed sed risus pretium quam vulputate dignissim suspendisse in est. Purus ut faucibus pulvinar elementum. Tempor orci eu lobortis elementum nibh tellus molestie nunc non. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Lacinia quis vel eros donec ac. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Nam aliquam sem et tortor consequat id porta. Egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. Lacus viverra vitae congue eu consequat ac felis. Sem viverra aliquet eget sit amet tellus cras adipiscing. Justo donec enim diam vulputate ut pharetra sit amet aliquam. Ut lectus arcu bibendum at varius. Hendrerit gravida rutrum quisque non tellus. Urna duis convallis convallis tellus id interdum velit laoreet.', 'Magna sit amet purus gravida. Tortor aliquam nulla facilisi cras fermentum odio. Libero enim sed faucibus turpis in eu mi bibendum neque. Eu mi bibendum neque egestas congue quisque egestas diam in. Ut venenatis tellus in metus vulputate eu scelerisque. Nibh mauris cursus mattis molestie a iaculis at erat. Dui sapien eget mi proin. Ut porttitor leo a diam. Rhoncus aenean vel elit scelerisque. Purus sit amet luctus venenatis lectus magna fringilla urna. Sit amet nisl suscipit adipiscing bibendum est. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed.', 'Egestas egestas fringilla phasellus faucibus scelerisque eleifend donec. Nunc lobortis mattis aliquam faucibus purus in massa tempor nec. Hendrerit dolor magna eget est. Eget nullam non nisi est sit amet. Odio ut sem nulla pharetra. Accumsan in nisl nisi scelerisque eu ultrices. Tristique nulla aliquet enim tortor at auctor urna nunc id. Volutpat blandit aliquam etiam erat velit scelerisque in. ', '2023-05-23 08:52:56', 1, 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_image_article`, `image_head`, `image_content`, `id_article`) VALUES
(1, '/assets/images/articles/AI.webp', '/assets/images/articles/concept-fournitures-bureau-milieu-travail-contemporain.webp', 4);

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
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `id_role` int DEFAULT NULL,
  `job_title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `users_role_FK` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `firstname`, `email`, `password`, `token`, `active`, `id_role`, `job_title`, `description`, `facebook`, `twitter`, `linkedin`) VALUES
(3, 'Admin', 'Admin', 'admin@admin.net', '$2y$10$AYMHRg2MH2u.WTZL/q6ELeaVADERvZI59VTnkxDl0shhjg1FjBfia', '', 1, 1, '', '', '', '', '');

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
