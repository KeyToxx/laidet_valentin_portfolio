-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 08 jan. 2018 à 10:13
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `text` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `years` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `abouts`
--

INSERT INTO `abouts` (`id`, `text`, `firstname`, `lastname`, `years`, `created_at`, `updated_at`) VALUES
(1, 'Bonjour, je m\'appelle prénom nom et je suis actuellement étudiant en développement Web à Vichy. J\'ai débuté dans le développement Web en 2015 par curiosité et depuis ce jour je suis passionné par les technologies du web. J\'adore créer de belles pages Web en HTML5, CSS3 et JavaScript ainsi que de belles animations en jQuery. Mes autres compétences comprennent des CMS comme WordPress, Prestashop. Je débute également dans le graphisme sous le logiciel Photoshop.', 'Valentin', 'Laidet', 19, '2017-12-15 23:00:00', '2018-01-08 07:26:50');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sujet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mail`, `sujet`, `message`, `created_at`, `updated_at`) VALUES
(7, 'laidet', 'valentinalaidet1@gmail.com', 'sujet', 'message', '2018-01-08 07:10:20', '2018-01-08 07:10:20'),
(8, 'laidet', 'valentinalaidet1@gmail.com', 'sujet', 'message', '2018-01-08 07:12:00', '2018-01-08 07:12:00'),
(10, 'toto', 'v.laidet@aformac-vichy.fr', 'sujet', 'message', '2018-01-08 07:25:34', '2018-01-08 07:25:34');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `link_files` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id`, `link_files`, `created_at`, `updated_at`) VALUES
(1, 'CDC transfire.pdf', NULL, '2017-12-22 11:59:40');

-- --------------------------------------------------------

--
-- Structure de la table `galeries`
--

DROP TABLE IF EXISTS `galeries`;
CREATE TABLE IF NOT EXISTS `galeries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `galeries`
--

INSERT INTO `galeries` (`id`, `name`, `image`, `lien`, `created_at`, `updated_at`) VALUES
(1, 'Graphomax', 'img/accueil_graphomax.png', 'http://graphomax.fr', '2017-12-14 09:00:00', '2017-12-17 15:59:16'),
(4, 'Graphomax', 'img/accueil_graphomax.png', 'http://graphomax.fr', '2017-12-17 15:58:09', '2017-12-17 15:58:09');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_13_131302_create_skills_table', 2),
(4, '2017_12_13_143949_create_about_table', 3),
(5, '2017_12_14_090035_create_gallery_table', 4),
(6, '2017_12_14_091322_create_galerie_table', 5),
(7, '2017_12_14_112339_create_contact_table', 6),
(8, '2017_12_15_181244_create_adminskills_table', 7),
(9, '2017_12_22_091521_create_cv_table', 8);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('v.laidet@aformac-vichy.fr', '$2y$10$tOzyBxp/xe3hIaNcmj0tvuN4aveip8E3pP259.iniKYlYOwNWJ48W', '2017-12-19 11:33:46');

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `skills_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `name`, `level`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'HTML5', 9, 'https://upload.wikimedia.org/wikipedia/commons/3/38/HTML5_Badge.svg', 1, '2017-12-13 14:00:00', '2018-01-08 07:27:22'),
(3, 'Css3', 9, 'img/css3.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(4, 'Bootstrap', 7, 'img/bs.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(5, 'Javascript', 5, 'img/js.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(6, 'jQuery', 5, 'img/jy.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(7, 'Wordpress', 5, 'img/wp.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(8, 'PHPmySQL', 5, 'img/phpmysql.png', 1, '2017-12-13 14:00:00', '2017-12-17 14:39:23'),
(9, 'Laravel', 4, 'img/laravel.png', 1, '2017-12-16 23:00:00', '2017-12-18 10:43:13');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Valentin', 'Laidet', 'v.laidet@aformac-vichy.fr', '$2y$10$OaJO4bN6KVjaeY.eHQH.NORO98YsqeqeTYQptLbk53Epc3TFc0nde', 'FgwtNDzhbI694sn2yBadbwDiwc36vvFHT6TnDVA7H6vZYW2lLhsdm2pRlSUo', '2017-12-14 14:07:34', '2017-12-14 14:07:34'),
(3, 'Valentin', 'Laidet', 'valentinlaidet1@gmail.com', '$2y$10$J6MhB75V1tf/YCX4mRlN5.CQhq5bwNpRoSKbqWVM/UjKU3GKF/lU6', 'qqakuPC52ti4Viw54sW0c1fd8uAxBUZI7JIdGDgJMzubBca7TJByEm0WImcM', '2017-12-14 21:16:29', '2017-12-14 21:16:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
