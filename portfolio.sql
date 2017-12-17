-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 14 déc. 2017 à 22:24
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
(1, 'Bonjour, je m\'appelle prénom nom et je suis actuellement étudiant en développement Web à Vichy. J\'ai débuté dans le développement Web en 2015 par curiosité et depuis ce jour je suis passionné par les technologies du web. J\'adore créer de belles pages Web en HTML5, CSS3 et JavaScript ainsi que de belles animations en jQuery. Mes autres compétences comprennent des CMS comme WordPress, Prestashop. Je débute également dans le graphisme sous le logiciel Photoshop.', 'Valentin', 'Laidet', 19, NULL, NULL);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `galeries`
--

INSERT INTO `galeries` (`id`, `name`, `image`, `lien`, `created_at`, `updated_at`) VALUES
(1, 'Graphomax', 'img/accueil_graphomax.png', 'http://graphomax.fr', '2017-12-14 09:00:00', '2017-12-14 09:00:00'),
(2, 'Graphomax', 'img/accueil_graphomax.png', 'http://graphomax.fr', '2017-12-14 09:00:00', '2017-12-14 09:00:00');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, '2017_12_14_112339_create_contact_table', 6);

-- --------------------------------------------------------

--
-- Structure de la table `old_users`
--

DROP TABLE IF EXISTS `old_users`;
CREATE TABLE IF NOT EXISTS `old_users` (
  `id_users` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `years` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_users`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `skills_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `name`, `level`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Html5', 9, 'https://upload.wikimedia.org/wikipedia/commons/3/38/HTML5_Badge.svg', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(2, 'Css3', 9, 'img/css3.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(3, 'Bootstrap', 9, 'img/bs.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(4, 'Javascript', 5, 'img/js.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(5, 'Wordpress', 7, 'img/wp.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(6, 'jQuery', 5, 'img/jy.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(7, 'PHPmySQL', 4, 'img/phpmysql.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00'),
(8, 'Laravel', 2, 'img/laravel.png', 1, '2017-12-13 14:00:00', '2017-12-13 14:00:00');

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
(2, 'Valentin', 'Laidet', 'v.laidet@aformac-vichy.fr', '$2y$10$OaJO4bN6KVjaeY.eHQH.NORO98YsqeqeTYQptLbk53Epc3TFc0nde', 'da3GghZhA7hdBukC4cLZPizsSxqNLVrABKCtdwQiTq3f0C1apQLePY6StFu2', '2017-12-14 14:07:34', '2017-12-14 14:07:34'),
(3, 'Valentin', 'Laidet', 'valentinlaidet1@gmail.com', '$2y$10$J6MhB75V1tf/YCX4mRlN5.CQhq5bwNpRoSKbqWVM/UjKU3GKF/lU6', 'JsVliJmwgo56B2MRaRdrLB19tdgzatgP4Z73cwCfavfdZ9PM44UpgwpgT573', '2017-12-14 21:16:29', '2017-12-14 21:16:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
