-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 11 mai 2025 à 18:12
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecf-blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `category_id` int DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_slug` (`slug`(100)),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content`, `category_id`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Introduction à Python pour les débutants', 'introduction-a-python-pour-les-debutants', 'Python est un langage de programmation accessible et puissant. Cet article vous guide à travers les bases...', 1, '2025-05-05 11:33:33', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(2, 'Créer une API REST avec Symfony 6', 'creer-une-api-rest-avec-symfony-6', 'Symfony 6 permet de développer des API robustes rapidement. Voici un tutoriel pas à pas...', 2, '2025-05-05 11:33:33', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(3, 'Comprendre les relations entre tables en MySQL', 'comprendre-les-relations-entre-tables-en-mysql', 'Les bases de données relationnelles reposent sur les relations entre tables. Cet article les détaille avec des exemples concrets...', 3, '2025-05-05 11:33:33', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(4, 'Les bonnes pratiques du Clean Code', 'les-bonnes-pratiques-du-clean-code', 'Le Clean Code est un ensemble de principes pour écrire du code clair et maintenable...', 4, '2025-05-05 11:33:33', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(5, 'Introduction à React pour les développeurs JavaScript', 'introduction-a-react-pour-les-developpeurs-javascript', 'React est une bibliothèque JavaScript puissante pour construire des interfaces utilisateur dynamiques...', 2, '2025-05-05 11:33:33', '2025-05-05 11:33:33', '2025-05-05 11:33:33');

-- --------------------------------------------------------

--
-- Structure de la table `article_tag`
--

DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE IF NOT EXISTS `article_tag` (
  `article_id` int NOT NULL,
  `tag_id` int NOT NULL,
  PRIMARY KEY (`article_id`,`tag_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article_tag`
--

INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES
(1, 1),
(5, 2),
(3, 3),
(4, 5),
(2, 6),
(5, 7),
(1, 8),
(4, 8);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`(50)),
  UNIQUE KEY `uniq_slug` (`slug`(50))
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Langages de programmation', 'langages-de-programmation', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(2, 'Développement web', 'developpement-web', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(3, 'Bases de données', 'bases-de-donnees', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(4, 'Bonnes pratiques', 'bonnes-pratiques', '2025-05-05 11:33:33', '2025-05-05 11:33:33');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`(50)),
  UNIQUE KEY `uniq_slug` (`slug`(50))
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Python', 'python', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(2, 'JavaScript', 'javascript', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(3, 'MySQL', 'mysql', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(4, 'Git', 'git', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(5, 'Clean Code', 'clean-code', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(6, 'Symfony', 'symfony', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(7, 'React', 'react', '2025-05-05 11:33:33', '2025-05-05 11:33:33'),
(8, 'POO', 'poo', '2025-05-05 11:33:33', '2025-05-05 11:33:33');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
