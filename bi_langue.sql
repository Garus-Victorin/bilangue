-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 13 fév. 2026 à 18:42
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bi_langue`
--

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `couleurs`
--

DROP TABLE IF EXISTS `couleurs`;
CREATE TABLE IF NOT EXISTS `couleurs` (
  `id_couleur` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `couleur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `francais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `typecouleur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_couleur`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `couleurs`
--

INSERT INTO `couleurs` (`id_couleur`, `couleur`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`, `typecouleur`) VALUES
(1, 'rouge', 'Rouge', 'Wɛ̀wɛ', 'Wɛ̀wɛ', 'Pupa', 'Kɔrɔ', 'Red', NULL, '2026-02-05 16:24:39', '#FF0000'),
(2, 'bleu', 'Bleu', 'Sinsɛn', 'Sinsɛn', 'Búlúù', 'Bulu', 'Blue', NULL, NULL, '#0000FF'),
(3, 'vert', 'Vert', 'Wɛ̀lɛ', 'Wɛ̀lɛ', 'Àwọ̀ ewé', 'Kɔrɔ wɛ', 'Green', NULL, NULL, '#00FF00'),
(4, 'jaune', 'Jaune', 'Sɛ̀nsɛ̀n', 'Sɛ̀nsɛ̀n', 'Àwọ̀ ofeefee', 'Sɛ̀n', 'Yellow', NULL, NULL, '#FFFF00'),
(5, 'noir', 'Noir', 'Zùn', 'Zùn', 'Dúdú', 'Dibi', 'Black', NULL, NULL, '#000000'),
(6, 'blanc', 'Blanc', 'Wɛ̀', 'Wɛ̀', 'Funfun', 'Fɔ̀', 'White', NULL, NULL, '#FFFFFF'),
(8, 'rouge', 'Rouge', 'Wɛ̀wɛ', 'Wɛ̀wɛ', 'Pupa', 'Kɔrɔ', 'Red', NULL, NULL, NULL),
(9, 'bleu', 'Bleu', 'Sinsɛn', 'Sinsɛn', 'Búlúù', 'Bulu', 'Blue', NULL, NULL, NULL),
(10, 'vert', 'Vert', 'Wɛ̀lɛ', 'Wɛ̀lɛ', 'Àwọ̀ ewé', 'Kɔrɔ wɛ', 'Green', NULL, NULL, NULL),
(11, 'jaune', 'Jaune', 'Sɛ̀nsɛ̀n', 'Sɛ̀nsɛ̀n', 'Àwọ̀ ofeefee', 'Sɛ̀n', 'Yellow', NULL, NULL, NULL),
(12, 'noir', 'Noir', 'Zùn', 'Zùn', 'Dúdú', 'Dibi', 'Black', NULL, NULL, NULL),
(13, 'blanc', 'Blanc', 'Wɛ̀', 'Wɛ̀', 'Funfun', 'Fɔ̀', 'White', NULL, NULL, NULL),
(14, 'rouge', 'Rouge', 'Wɛ̀wɛ', 'Wɛ̀wɛ', 'Pupa', 'Kɔrɔ', 'Red', NULL, NULL, NULL),
(15, 'bleu', 'Bleu', 'Sinsɛn', 'Sinsɛn', 'Búlúù', 'Bulu', 'Blue', NULL, NULL, NULL),
(16, 'vert', 'Vert', 'Wɛ̀lɛ', 'Wɛ̀lɛ', 'Àwọ̀ ewé', 'Kɔrɔ wɛ', 'Green', NULL, NULL, NULL),
(17, 'jaune', 'Jaune', 'Sɛ̀nsɛ̀n', 'Sɛ̀nsɛ̀n', 'Àwọ̀ ofeefee', 'Sɛ̀n', 'Yellow', NULL, NULL, NULL),
(18, 'noir', 'Noir', 'Zùn', 'Zùn', 'Dúdú', 'Dibi', 'Black', NULL, NULL, NULL),
(19, 'blanc', 'Blanc', 'Wɛ̀', 'Wɛ̀', 'Funfun', 'Fɔ̀', 'White', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `demandes_aide`
--

DROP TABLE IF EXISTS `demandes_aide`;
CREATE TABLE IF NOT EXISTS `demandes_aide` (
  `id_demande_aide` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `demande_aide` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `francais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_demande_aide`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demandes_aide`
--

INSERT INTO `demandes_aide` (`id_demande_aide`, `demande_aide`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`) VALUES
(1, 'Aide-moi s’il te plaît', 'Aide-moi s’il te plaît', 'Aide-moi s’il te plaît (Goun)', 'Aide-moi s’il te plaît (Fon)', 'Aide-moi s’il te plaît (Yoruba)', 'Aide-moi s’il te plaît (Dendi)', 'Help me please', '2026-02-08 20:15:04', '2026-02-08 20:15:04'),
(2, 'Peux-tu m’aider ?', 'Peux-tu m’aider ?', 'Peux-tu m’aider ? (Goun)', 'Peux-tu m’aider ? (Fon)', 'Peux-tu m’aider ? (Yoruba)', 'Peux-tu m’aider ? (Dendi)', 'Can you help me?', '2026-02-08 20:15:04', '2026-02-08 20:15:04'),
(3, 'J’ai besoin d’aide', 'J’ai besoin d’aide', 'J’ai besoin d’aide (Goun)', 'J’ai besoin d’aide (Fon)', 'J’ai besoin d’aide (Yoruba)', 'J’ai besoin d’aide (Dendi)', 'I need help', '2026-02-08 20:15:04', '2026-02-08 20:15:04'),
(4, 'Où puis-je trouver de l’aide ?', 'Où puis-je trouver de l’aide ?', 'Où puis-je trouver de l’aide ? (Goun)', 'Où puis-je trouver de l’aide ? (Fon)', 'Où puis-je trouver de l’aide ? (Yoruba)', 'Où puis-je trouver de l’aide ? (Dendi)', 'Where can I find help?', '2026-02-08 20:15:04', '2026-02-08 20:15:04'),
(5, 'Excuse-moi, j’ai un problème', 'Excuse-moi, j’ai un problème', 'Excuse-moi, j’ai un problème (Goun)', 'Excuse-moi, j’ai un problème (Fon)', 'Excuse-moi, j’ai un problème (Yoruba)', 'Excuse-moi, j’ai un problème (Dendi)', 'Excuse me, I have a problem', '2026-02-08 20:15:04', '2026-02-08 20:15:04'),
(6, 'S’il vous plaît, aidez-moi', 'S’il vous plaît, aidez-moi', 'S’il vous plaît, aidez-moi (Goun)', 'S’il vous plaît, aidez-moi (Fon)', 'S’il vous plaît, aidez-moi (Yoruba)', 'S’il vous plaît, aidez-moi (Dendi)', 'Please help me', '2026-02-08 20:15:04', '2026-02-08 20:15:04');

-- --------------------------------------------------------

--
-- Structure de la table `expressions_basiques`
--

DROP TABLE IF EXISTS `expressions_basiques`;
CREATE TABLE IF NOT EXISTS `expressions_basiques` (
  `id_expression_basique` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `francais` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_expression_basique`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `expressions_basiques`
--

INSERT INTO `expressions_basiques` (`id_expression_basique`, `nom`, `image`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`) VALUES
(1, 'bonjour', 'expressions_basiques/WPjJBqAX4CiYJXJuuOlVCOPKR62W27CLuUrjtbX5.jpg', 'Bonjour', 'Wézon', 'Wézon', 'Ẹ káàárọ̀', 'Fofo', 'Hello', NULL, '2026-02-07 16:19:58'),
(2, 'merci beaucoup', 'expressions_basiques/Q5vnlymCXC4ID7Y3YyM8FCtMroWJnFduI6pJ1BC0.jpg', 'Merci beaucoup', 'Akpè nú', 'Akpè nú', 'Ẹ ṣeun púpọ̀', 'Akpè nú', 'Thank you very much', NULL, '2026-02-07 16:22:04'),
(3, 'à demain', 'expressions_basiques/kb7Y4ele9SZuMO0YkPCaUy3B9He2cS8LJYys6uhy.jpg', 'À demain', 'Kù zɔ̀n', 'Kù zɔ̀n', 'Ó dàbọ̀ lọ́la', 'Kù zɔ̀n', 'See you tomorrow', NULL, '2026-02-08 08:22:03'),
(4, 'comment vas-tu', 'expressions_basiques/H5yGvuHlPP4Vx0gUV0NTc634AmquU1p23rq9zHqi.jpg', 'Comment vas-tu ?', 'Nǔ wè ?', 'Nǔ wè ?', 'Báwo ni o ṣe wà ?', 'Nǔ wè ?', 'How are you?', NULL, '2026-02-08 08:20:28'),
(5, 'à bientôt', 'expressions_basiques/krKEyAHpK1Ef3EFvjJNKC882NXddR1eb9VqaKv4a.png', 'À bientôt', 'Kù wá', 'Kù wá', 'Ó dàbọ̀ láìpẹ́', 'Kù wá', 'See you soon', NULL, '2026-02-08 08:39:44'),
(6, 'ça va', 'expressions_basiques/HH9oLySd7l6ruZUa71dfN94fV7FVbAcQFarXuF7T.jpg', 'Ça va', 'Nǔ wè', 'Nǔ wè', 'Ó dára', 'Nǔ wè', 'It\'s fine', NULL, '2026-02-08 08:20:40'),
(7, 'pardon', 'expressions_basiques/FcmGkVNqgcdNlCYFPGw9oPWF37T332F3aQrc2HP9.jpg', 'Pardon', 'Ma lɛ', 'Ma lɛ', 'Dá bí', 'Ma lɛ', 'Sorry', NULL, '2026-02-08 08:21:13'),
(20, 'ça va', NULL, 'Ça va', 'Nǔ wè', 'Nǔ wè', 'Ó dára', 'Nǔ wè', 'It\'s fine', NULL, NULL),
(19, 'à bientôt', NULL, 'À bientôt', 'Kù wá', 'Kù wá', 'Ó dàbọ̀ láìpẹ́', 'Kù wá', 'See you soon', NULL, NULL),
(18, 'comment vas-tu', NULL, 'Comment vas-tu ?', 'Nǔ wè ?', 'Nǔ wè ?', 'Báwo ni o ṣe wà ?', 'Nǔ wè ?', 'How are you?', NULL, NULL),
(17, 'à demain', NULL, 'À demain', 'Kù zɔ̀n', 'Kù zɔ̀n', 'Ó dàbọ̀ lọ́la', 'Kù zɔ̀n', 'See you tomorrow', NULL, NULL),
(16, 'merci beaucoup', NULL, 'Merci beaucoup', 'Akpè nú', 'Akpè nú', 'Ẹ ṣeun púpọ̀', 'Akpè nú', 'Thank you very much', NULL, NULL),
(15, 'bonjour', NULL, 'Bonjour', 'Wézon', 'Wézon', 'Ẹ káàárọ̀', 'Fofo', 'Hello', NULL, NULL),
(21, 'pardon', NULL, 'Pardon', 'Ma lɛ', 'Ma lɛ', 'Dá bí', 'Ma lɛ', 'Sorry', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `expressions_ecole`
--

DROP TABLE IF EXISTS `expressions_ecole`;
CREATE TABLE IF NOT EXISTS `expressions_ecole` (
  `id_expression_ecole` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `francais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_expression_ecole`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `expressions_ecole`
--

INSERT INTO `expressions_ecole` (`id_expression_ecole`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`) VALUES
(1, 'Bonjour professeur', 'Goun translation for Bonjour professeur', 'Fon translation for Bonjour professeur', 'Yoruba translation for Bonjour professeur', 'Dendi translation for Bonjour professeur', 'Good morning teacher', '2026-02-08 20:41:46', '2026-02-08 20:41:46'),
(2, 'S\'il vous plaît, puis-je entrer ?', 'Goun translation for S\'il vous plaît, puis-je entrer ?', 'Fon translation for S\'il vous plaît, puis-je entrer ?', 'Yoruba translation for S\'il vous plaît, puis-je entrer ?', 'Dendi translation for S\'il vous plaît, puis-je entrer ?', 'Please, may I come in?', '2026-02-08 20:41:46', '2026-02-08 20:41:46'),
(3, 'Je n\'ai pas compris', 'Goun translation for Je n\'ai pas compris', 'Fon translation for Je n\'ai pas compris', 'Yoruba translation for Je n\'ai pas compris', 'Dendi translation for Je n\'ai pas compris', 'I didn\'t understand', '2026-02-08 20:41:46', '2026-02-08 20:41:46'),
(4, 'Pouvez-vous répéter, s\'il vous plaît ?', 'Goun translation for Pouvez-vous répéter, s\'il vous plaît ?', 'Fon translation for Pouvez-vous répéter, s\'il vous plaît ?', 'Yoruba translation for Pouvez-vous répéter, s\'il vous plaît ?', 'Dendi translation for Pouvez-vous répéter, s\'il vous plaît ?', 'Can you repeat, please?', '2026-02-08 20:41:46', '2026-02-08 20:41:46'),
(5, 'J\'ai fini mon exercice', 'Goun translation for J\'ai fini mon exercice', 'Fon translation for J\'ai fini mon exercice', 'Yoruba translation for J\'ai fini mon exercice', 'Dendi translation for J\'ai fini mon exercice', 'I finished my exercise', '2026-02-08 20:41:46', '2026-02-08 20:43:47'),
(6, 'Puis-je sortir ?', 'Goun translation for Puis-je sortir ?', 'Fon translation for Puis-je sortir ?', 'Yoruba translation for Puis-je sortir ?', 'Dendi translation for Puis-je sortir ?', 'May I go out?', '2026-02-08 20:41:46', '2026-02-08 20:41:46'),
(7, 'Je suis en retard', 'Goun translation for Je suis en retard', 'Fon translation for Je suis en retard', 'Yoruba translation for Je suis en retard', 'Dendi translation for Je suis en retard', 'I am late', '2026-02-08 20:41:46', '2026-02-08 20:41:46'),
(8, 'Merci beaucoup, professeur', 'Goun translation for Merci beaucoup, professeur', 'Fon translation for Merci beaucoup, professeur', 'Yoruba translation for Merci beaucoup, professeur', 'Dendi translation for Merci beaucoup, professeur', 'Thank you very much, teacher', '2026-02-08 20:41:46', '2026-02-08 20:41:46');

-- --------------------------------------------------------

--
-- Structure de la table `expressions_maison`
--

DROP TABLE IF EXISTS `expressions_maison`;
CREATE TABLE IF NOT EXISTS `expressions_maison` (
  `id_expression_maison` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `francais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_expression_maison`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `expressions_maison`
--

INSERT INTO `expressions_maison` (`id_expression_maison`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`) VALUES
(1, 'Bonjour maman', 'Mi sú dɔ nɔ', 'Un sú dɔ nɔ', 'Ẹ káàrọ̀ màmá', 'Mi sú dɔ nɔ', 'Good morning mom', '2026-02-08 21:01:19', '2026-02-08 21:06:19'),
(2, 'J\'ai faim', 'Mi wú', 'Un wú', 'Ẹbi ń pa mí', 'Mi wú', 'I am hungry', '2026-02-08 21:01:19', '2026-02-08 21:01:19'),
(3, 'J\'ai soif', 'Mi wú nú', 'Un wú nú', 'Ọ̀nà ń gbẹ mí', 'Mi wú nú', 'I am thirsty', '2026-02-08 21:01:19', '2026-02-08 21:01:19'),
(4, 'Où est papa ?', 'Papa yɔ dɛ ?', 'Papa yɔ dɛ ?', 'Níbo ni bàbá wà?', 'Papa yɔ dɛ ?', 'Where is dad?', '2026-02-08 21:01:19', '2026-02-08 21:01:19'),
(5, 'Je vais sortir', 'Mi na wá', 'Un na wá', 'Èmi yóò jáde', 'Mi na wá', 'I am going out', '2026-02-08 21:01:19', '2026-02-08 21:01:19'),
(6, 'Aide-moi, s\'il te plaît', 'Na mi kpɔn', 'Na un kpɔn', 'Ràn mí lọ́wọ́, jọ̀wọ́', 'Na mi kpɔn', 'Help me, please', '2026-02-08 21:01:19', '2026-02-08 21:01:19'),
(7, 'J\'ai fini de manger', 'Mi xwé nú', 'Un xwé nú', 'Mo ti jẹun tán', 'Mi xwé nú', 'I finished eating', '2026-02-08 21:01:19', '2026-02-08 21:01:19'),
(8, 'Bonne nuit', 'Mi sú dɔ', 'Un sú dɔ', 'Ẹ̀ṣẹ̀rẹ̀', 'Mi sú dɔ', 'Good night', '2026-02-08 21:01:19', '2026-02-08 21:01:19');

-- --------------------------------------------------------

--
-- Structure de la table `expressions_voyage`
--

DROP TABLE IF EXISTS `expressions_voyage`;
CREATE TABLE IF NOT EXISTS `expressions_voyage` (
  `id_expression_voyage` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `francais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_expression_voyage`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `expressions_voyage`
--

INSERT INTO `expressions_voyage` (`id_expression_voyage`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`) VALUES
(1, 'Où est la gare ?', 'Ayi kɔnɔ ga ?', 'Afɔdji ɖɔ ɖe ?', 'Nibo ni ibudo wa?', 'Gaar ɗoo ɗe ?', 'Where is the station?', '2026-02-08 21:20:42', '2026-02-08 21:26:53'),
(2, 'Combien coûte le billet ?', 'Tikɛti sɔrɔ jɛn ?', 'Tikɛti ɖɔ ɖe ?', 'Elo ni tikẹti na?', 'Tikɛti ɗoo ɗe ?', 'How much is the ticket?', '2026-02-08 21:20:42', '2026-02-08 21:20:42'),
(3, 'Je veux aller à…', 'N bɛna taa…', 'Un ɖɔ ɖe…', 'Mo fẹ lọ si…', 'N ɗoo ɗe…', 'I want to go to…', '2026-02-08 21:20:42', '2026-02-08 21:20:42'),
(4, 'À quelle heure part le bus ?', 'Bus bɛna kɔ waati jɛn ?', 'Bus ɖɔ ɖe ?', 'Akoko wo ni ọkọ akẹru naa maa lọ?', 'Bus ɗoo ɗe ?', 'What time does the bus leave?', '2026-02-08 21:20:42', '2026-02-08 21:20:42'),
(5, 'Pouvez-vous m’aider, s’il vous plaît ?', 'I bɛna sɔrɔ n dɛmɛ wa ?', 'Un ɖɔ ɖe ?', 'Ṣe o le ran mi lọwọ, jọwọ?', 'I ɗoo ɗe ?', 'Can you help me, please?', '2026-02-08 21:20:42', '2026-02-08 21:20:42'),
(6, 'Je suis perdu', 'N bɛna bɔ', 'Un ɖɔ ɖe', 'Mo ti ṣọna', 'N ɗoo ɗe', 'I am lost', '2026-02-08 21:20:42', '2026-02-08 21:20:42'),
(7, 'Où se trouve l’hôtel ?', 'Otɛli kɔnɔ ga ?', 'Otɛli ɖɔ ɖe ?', 'Nibo ni hotẹẹli wa?', 'Otɛli ɗoo ɗe ?', 'Where is the hotel?', '2026-02-08 21:20:42', '2026-02-08 21:20:42'),
(8, 'Merci pour votre aide', 'A’ni sɔrɔ i dɛmɛ', 'Akpɛ ɖɔ ɖe', 'O ṣeun fun iranlọwọ rẹ', 'A’ni ɗoo ɗe', 'Thank you for your help', '2026-02-08 21:20:42', '2026-02-08 21:20:42');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2026_02_04_165232_create_salutations_table', 2),
(4, '2026_02_05_144627_create_sessions_table', 3),
(5, '2026_02_05_150000_create_nombres_table', 4),
(6, '2026_02_05_160048_add_bariba_to_salutations_table', 5),
(7, '2026_02_05_165523_create_couleurs_table', 6),
(8, '2026_02_07_141645_add_typecouleur_to_couleurs_table', 7),
(9, '2026_02_07_142429_update_typecouleur_in_couleurs_table', 8),
(12, '2026_02_07_154639_create_partie_du_corps_table', 9),
(13, '2026_02_07_160629_create_partie_du_corps_table', 10),
(14, '2026_02_07_162612_change_image_column_to_text_in_partie_du_corps_table', 11),
(15, '2026_02_08_120000_create_expressions_basiques_table', 12),
(18, '2026_02_08_094738_create_phrases_basiques_table', 15),
(17, '2026_02_08_101031_create_users_table', 14),
(19, '2026_02_08_130000_create_presentations_table', 16),
(20, '2026_02_08_140000_create_demandes_aide_table', 17),
(21, '2026_02_08_150000_create_expressions_ecole_table', 18),
(22, '2026_02_08_214637_create_expressions_maison_table', 19),
(23, '2026_02_08_160000_create_expressions_voyage_table', 20),
(24, '2026_02_08_223105_create_produits_table', 21);

-- --------------------------------------------------------

--
-- Structure de la table `nombres`
--

DROP TABLE IF EXISTS `nombres`;
CREATE TABLE IF NOT EXISTS `nombres` (
  `id_nombre` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` int NOT NULL,
  `francais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `nombres`
--

INSERT INTO `nombres` (`id_nombre`, `nombre`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`) VALUES
(1, 1, 'un', 'dé', 'dé', 'ọ̀kan', 'foy', 'one', NULL, '2026-02-05 14:47:14'),
(2, 2, 'deux', 'éwé', 'éwé', 'èjì', 'hinka', 'two', NULL, NULL),
(3, 3, 'trois', 'étà', 'étà', 'ẹ̀ta', 'hinka-foy', 'three', NULL, NULL),
(4, 4, 'quatre', 'énè', 'énè', 'ẹ̀rin', 'foy-hinka', 'four', NULL, NULL),
(5, 5, 'cinq', 'énùn', 'énùn', 'àrùn', 'hinku', 'five', NULL, NULL),
(8, 1, 'un', 'dé', 'dé', 'ọ̀kan', 'foy', 'one', NULL, NULL),
(9, 2, 'deux', 'éwé', 'éwé', 'èjì', 'hinka', 'two', NULL, NULL),
(10, 3, 'trois', 'étà', 'étà', 'ẹ̀ta', 'hinka-foy', 'three', NULL, NULL),
(11, 4, 'quatre', 'énè', 'énè', 'ẹ̀rin', 'foy-hinka', 'four', NULL, NULL),
(12, 5, 'cinq', 'énùn', 'énùn', 'àrùn', 'hinku', 'five', NULL, NULL),
(13, 1, 'un', 'dé', 'dé', 'ọ̀kan', 'foy', 'one', NULL, NULL),
(14, 2, 'deux', 'éwé', 'éwé', 'èjì', 'hinka', 'two', NULL, NULL),
(15, 3, 'trois', 'étà', 'étà', 'ẹ̀ta', 'hinka-foy', 'three', NULL, NULL),
(16, 4, 'quatre', 'énè', 'énè', 'ẹ̀rin', 'foy-hinka', 'four', NULL, NULL),
(17, 5, 'cinq', 'énùn', 'énùn', 'àrùn', 'hinku', 'five', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `partie_du_corps`
--

DROP TABLE IF EXISTS `partie_du_corps`;
CREATE TABLE IF NOT EXISTS `partie_du_corps` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `francais` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `partie_du_corps`
--

INSERT INTO `partie_du_corps` (`id`, `nom`, `image`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`) VALUES
(1, 'Tête', 'partie_du_corps/YP4VXiaPAQquqcITIw2vqkI4eyRqq3mV67MTq6hJ.png', 'Tête', 'Ta', 'Ta', 'Ori', 'Ta', 'Head', '2026-02-07 15:17:11', '2026-02-07 15:46:56'),
(2, 'Yeux', 'partie_du_corps/BIa4H3cNwq7NMA6leSS3yEHj6G6V1t4NXnUx2ib6.jpg', 'Yeux', 'Nyen', 'Ado', 'Oju', 'Nyen', 'Eyes', '2026-02-07 15:17:11', '2026-02-07 15:44:08'),
(3, 'Nez', 'partie_du_corps/LSlvuRmdcTgz9wyHRNJDhaUZwKxUW0SPAY909tDg.jpg', 'Nez', 'Nyon', 'Nyon', 'Imu', 'Nyon', 'Nose', '2026-02-07 15:17:11', '2026-02-07 15:44:18'),
(4, 'Bouche', 'partie_du_corps/QQuUj9aOMZKAKgA5FxmrQT60TDOHXGRCjTgDn56G.jpg', 'Bouche', 'Nu', 'Nu', 'Enu', 'Nu', 'Mouth', '2026-02-07 15:17:11', '2026-02-07 15:44:26'),
(5, 'Oreilles', 'partie_du_corps/dm15HRPfimA4KFlAuzed4voR7ViYwgm8mIMEaMBC.jpg', 'Oreilles', 'Toli', 'Toli', 'Eti', 'Toli', 'Ears', '2026-02-07 15:17:11', '2026-02-07 15:44:35'),
(6, 'Bras', 'partie_du_corps/NXROjOWIJz7OFQYdNrA8ubZYmKID6tUmKmyUUsen.jpg', 'Bras', 'Woli', 'Aba', 'Apa', 'Woli', 'Arms', '2026-02-07 15:17:11', '2026-02-07 15:44:47'),
(8, 'Doigts', 'partie_du_corps/OlMfVymZySsAuUIkOB0eUEREv8tTxK1kY6QWFW6m.jpg', 'Doigts', 'Nusi', 'Asosi', 'Ika', 'Nusi', 'Fingers', '2026-02-07 15:17:11', '2026-02-07 15:45:31'),
(9, 'Jambes', 'partie_du_corps/GXIB6yYdF5sIvhHzBTAGbbq09nMbRiDxWw1DgF37.jpg', 'Jambes', 'Koli', 'Afan', 'Ese', 'Koli', 'Legs', '2026-02-07 15:17:11', '2026-02-07 15:45:40'),
(29, 'Jambes', NULL, 'Jambes', 'Koli', 'Afan', 'Ese', 'Koli', 'Legs', '2026-02-08 09:11:47', '2026-02-08 09:11:47'),
(30, 'Pieds', NULL, 'Pieds', 'Afi', 'Afan', 'Ese', 'Afi', 'Feet', '2026-02-08 09:11:47', '2026-02-08 09:11:47'),
(31, 'Tête', NULL, 'Tête', 'Ta', 'Ta', 'Ori', 'Ta', 'Head', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(32, 'Yeux', NULL, 'Yeux', 'Nyen', 'Ado', 'Oju', 'Nyen', 'Eyes', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(21, 'Tête', NULL, 'Tête', 'Ta', 'Ta', 'Ori', 'Ta', 'Head', '2026-02-08 09:11:47', '2026-02-08 09:11:47'),
(22, 'Yeux', NULL, 'Yeux', 'Nyen', 'Ado', 'Oju', 'Nyen', 'Eyes', '2026-02-08 09:11:47', '2026-02-08 09:11:47'),
(23, 'Nez', NULL, 'Nez', 'Nyon', 'Nyon', 'Imu', 'Nyon', 'Nose', '2026-02-08 09:11:47', '2026-02-08 09:11:47'),
(24, 'Bouche', NULL, 'Bouche', 'Nu', 'Nu', 'Enu', 'Nu', 'Mouth', '2026-02-08 09:11:47', '2026-02-08 09:11:47'),
(25, 'Oreilles', NULL, 'Oreilles', 'Toli', 'Toli', 'Eti', 'Toli', 'Ears', '2026-02-08 09:11:47', '2026-02-08 09:11:47'),
(26, 'Bras', NULL, 'Bras', 'Woli', 'Aba', 'Apa', 'Woli', 'Arms', '2026-02-08 09:11:47', '2026-02-08 09:11:47'),
(27, 'Main', NULL, 'Main', 'Nu', 'Aso', 'Owo', 'Nu', 'Hand', '2026-02-08 09:11:47', '2026-02-08 09:11:47'),
(28, 'Doigts', NULL, 'Doigts', 'Nusi', 'Asosi', 'Ika', 'Nusi', 'Fingers', '2026-02-08 09:11:47', '2026-02-08 09:11:47'),
(33, 'Nez', NULL, 'Nez', 'Nyon', 'Nyon', 'Imu', 'Nyon', 'Nose', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(34, 'Bouche', NULL, 'Bouche', 'Nu', 'Nu', 'Enu', 'Nu', 'Mouth', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(35, 'Oreilles', NULL, 'Oreilles', 'Toli', 'Toli', 'Eti', 'Toli', 'Ears', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(36, 'Bras', NULL, 'Bras', 'Woli', 'Aba', 'Apa', 'Woli', 'Arms', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(37, 'Main', NULL, 'Main', 'Nu', 'Aso', 'Owo', 'Nu', 'Hand', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(38, 'Doigts', NULL, 'Doigts', 'Nusi', 'Asosi', 'Ika', 'Nusi', 'Fingers', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(39, 'Jambes', NULL, 'Jambes', 'Koli', 'Afan', 'Ese', 'Koli', 'Legs', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(40, 'Pieds', NULL, 'Pieds', 'Afi', 'Afan', 'Ese', 'Afi', 'Feet', '2026-02-08 20:11:19', '2026-02-08 20:11:19');

-- --------------------------------------------------------

--
-- Structure de la table `phrases_basiques`
--

DROP TABLE IF EXISTS `phrases_basiques`;
CREATE TABLE IF NOT EXISTS `phrases_basiques` (
  `id_phrase_basique` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `phrase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `francais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_phrase_basique`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `phrases_basiques`
--

INSERT INTO `phrases_basiques` (`id_phrase_basique`, `phrase`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`) VALUES
(1, 'je viens déjà', 'je viens déjà', 'mi wa kɔn', 'un dɔ xɔ', 'mo ti wa', 'ayi naa', 'I am coming already', '2026-02-08 09:21:48', '2026-02-08 09:29:19'),
(2, 'je te connais', 'je te connais', 'mi mɔ wɛ', 'un mɔ wɛ', 'mo mọ ọ', 'ayi mɔ wɛ', 'I know you', '2026-02-08 09:21:48', '2026-02-08 09:21:48'),
(3, 'j’ai faim', 'j’ai faim', 'mi dɔ', 'un dɔ', 'ebi n pa mi', 'ayi dɔ', 'I am hungry', '2026-02-08 09:21:48', '2026-02-08 09:21:48'),
(4, 'j’ai froid', 'j’ai froid', 'mi kɔn', 'un kɔn', 'otutu n pa mi', 'ayi kɔn', 'I am cold', '2026-02-08 09:21:48', '2026-02-08 09:21:48'),
(5, 'bonjour', 'bonjour', 'kɔn', 'kɔn', 'e kaaro', 'kɔn', 'good morning', '2026-02-08 09:21:48', '2026-02-08 09:29:26'),
(6, 'au revoir', 'au revoir', 'kɔn', 'kɔn', 'o daaro', 'kɔn', 'goodbye', '2026-02-08 09:21:48', '2026-02-08 09:21:48'),
(7, 'merci', 'merci', 'akpɛ', 'akpɛ', 'e se', 'akpɛ', 'thank you', '2026-02-08 09:21:48', '2026-02-08 09:21:48'),
(8, 's’il vous plaît', 's’il vous plaît', 'dɔ', 'dɔ', 'jowo', 'dɔ', 'please', '2026-02-08 09:21:48', '2026-02-08 09:21:48'),
(9, 'je viens déjà', 'je viens déjà', 'mi wa kɔn', 'un dɔ xɔ', 'mo ti wa', 'ayi naa', 'I am coming already', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(10, 'je te connais', 'je te connais', 'mi mɔ wɛ', 'un mɔ wɛ', 'mo mọ ọ', 'ayi mɔ wɛ', 'I know you', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(11, 'j’ai faim', 'j’ai faim', 'mi dɔ', 'un dɔ', 'ebi n pa mi', 'ayi dɔ', 'I am hungry', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(12, 'j’ai froid', 'j’ai froid', 'mi kɔn', 'un kɔn', 'otutu n pa mi', 'ayi kɔn', 'I am cold', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(13, 'bonjour', 'bonjour', 'kɔn', 'kɔn', 'e kaaro', 'kɔn', 'good morning', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(14, 'au revoir', 'au revoir', 'kɔn', 'kɔn', 'o daaro', 'kɔn', 'goodbye', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(15, 'merci', 'merci', 'akpɛ', 'akpɛ', 'e se', 'akpɛ', 'thank you', '2026-02-08 20:11:19', '2026-02-08 20:11:19'),
(16, 's’il vous plaît', 's’il vous plaît', 'dɔ', 'dɔ', 'jowo', 'dɔ', 'please', '2026-02-08 20:11:19', '2026-02-08 20:11:19');

-- --------------------------------------------------------

--
-- Structure de la table `presentations`
--

DROP TABLE IF EXISTS `presentations`;
CREATE TABLE IF NOT EXISTS `presentations` (
  `id_presentation` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `presentation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `francais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_presentation`),
  UNIQUE KEY `presentations_presentation_unique` (`presentation`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `presentations`
--

INSERT INTO `presentations` (`id_presentation`, `presentation`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`) VALUES
(1, 'Je m\'appelle…', 'Je m\'appelle…', 'Mi yɔ…', 'Un na ɖɔ…', 'Orúkọ mi ni…', 'Mi yɔ…', 'My name is…', '2026-02-08 17:41:05', '2026-02-08 17:41:05'),
(2, 'Comment tu t\'appelles ?', 'Comment tu t\'appelles ?', 'A yɔ dɛ ?', 'A na ɖɔ dɛ ?', 'Kí ni orúkọ rẹ ?', 'A yɔ dɛ ?', 'What is your name?', '2026-02-08 17:41:06', '2026-02-08 17:41:06'),
(3, 'Je suis développeur', 'Je suis développeur', 'Mi yɔ dɛvlɔpɔ', 'Un yɔ dɛvlɔpɔ', 'Èmi jẹ́ òǹgbàágbọ̀', 'Mi yɔ dɛvlɔpɔ', 'I am a developer', '2026-02-08 17:41:06', '2026-02-08 17:41:06'),
(4, 'Je viens du Bénin', 'Je viens du Bénin', 'Mi wá tɔ Bɛnin', 'Un wá tɔ Bɛnin', 'Mo wá láti Bẹ̀nẹ̀', 'Mi wá tɔ Bɛnin', 'I come from Benin', '2026-02-08 17:41:06', '2026-02-08 17:57:05'),
(5, 'Enchanté de te rencontrer', 'Enchanté de te rencontrer', 'Mi sú dɔ a', 'Un sú dɔ a', 'Inú mi dùn láti pàdé rẹ', 'Mi sú dɔ a', 'Nice to meet you', '2026-02-08 17:41:06', '2026-02-08 17:41:06'),
(6, 'Permets-moi de me présenter', 'Permets-moi de me présenter', 'Na mi na mi kpɔn', 'Na un na un kpɔn', 'Jẹ́ kí n ṣe àfihàn ara mi', 'Na mi na mi kpɔn', 'Let me introduce myself', '2026-02-08 17:41:06', '2026-02-08 17:41:06');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id_produit` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `francais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `image`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`) VALUES
(1, 'produits/U0TMgxHvdtdJUqFDb4MmzFKCB041pID8sqO3oNQM.jpg', 'Riz', 'Mali', 'Mali', 'Iresi', 'Shinkafa', 'Rice', '2026-02-08 21:39:16', '2026-02-08 21:43:17'),
(2, 'produits/kdUaMDDMkW1dh1z7XbgugJ7CtjLbOtrv6YI9tygw.jpg', 'Maïs', 'Koko', 'Agbado', 'Agbado', 'Masara', 'Corn', '2026-02-08 21:39:16', '2026-02-08 21:43:44'),
(3, 'produits/x9skik7a2BYZd4CpM4JnYUeqjhYUaJeTyNYNODRB.jpg', 'Haricot', 'Awinsa', 'Ewa', 'Ewa', 'Wake', 'Beans', '2026-02-08 21:39:16', '2026-02-08 21:44:42'),
(4, 'produits/tpaOusEsJNgZlNRONaPuLc5yvpGBWSvt5iTBNY4R.jpg', 'Huile', 'Ami', 'Ami', 'Epo', 'Mai', 'Oil', '2026-02-08 21:39:16', '2026-02-08 21:45:13'),
(5, 'produits/LyLmBlNcghCpx4KxgQNFhXoFiIQ80A3FPv4JAWje.jpg', 'Sel', 'Sika', 'Yinyin', 'Iyọ', 'Gishiri', 'Salt', '2026-02-08 21:39:16', '2026-02-08 21:45:44'),
(6, 'produits/alT6SncJyDcDNzAdltFAepv2uRs4gUXxo70SkHzC.jpg', 'Sucre', 'Sukali', 'Sukali', 'Sukari', 'Sukari', 'Sugar', '2026-02-08 21:39:16', '2026-02-13 17:39:30'),
(7, 'produits/CVO36raziQjM0wWtFkrpssayABlTpPkbpsLxBuSP.jpg', 'Piment', 'Taka', 'Taka', 'Ata', 'Barkono', 'Pepper', '2026-02-08 21:39:16', '2026-02-13 17:39:40'),
(8, 'produits/p2sdVYNJVB5KQKIk3reNsKiXg2T843hhV5DuZM1b.jpg', 'Tomate', 'Timati', 'Timati', 'Timati', 'Timatar', 'Tomato', '2026-02-08 21:39:16', '2026-02-13 17:39:49'),
(9, 'produits/Ed7EnopBGSs06zkUQsOIEaaV0aab5Pa6tL1RTwSo.jpg', 'Oignon', 'Alubosa', 'Alubosa', 'Alubosa', 'Albasa', 'Onion', '2026-02-08 21:39:16', '2026-02-13 17:39:57'),
(10, 'produits/QD1k7pQfzzfG6OOqcJnFahpAnFpJoqO3qLWXcGYK.jpg', 'Poisson', 'Hùn', 'Hùn', 'Ẹja', 'Kifi', 'Fish', '2026-02-08 21:39:16', '2026-02-13 17:40:05'),
(11, NULL, 'Viande', 'Ẹran', 'Ẹran', 'Ẹran', 'Nama', 'Meat', '2026-02-08 21:39:16', '2026-02-08 21:39:16'),
(12, NULL, 'Pain', 'Búrẹdi', 'Búrẹdi', 'Búrẹdi', 'Burodi', 'Bread', '2026-02-08 21:39:16', '2026-02-08 21:39:16'),
(13, NULL, 'Lait', 'Wara', 'Wara', 'Wara', 'Madara', 'Milk', '2026-02-08 21:39:16', '2026-02-08 21:39:16'),
(14, NULL, 'Beurre', 'Bọta', 'Bọta', 'Bọta', 'Bata', 'Butter', '2026-02-08 21:39:16', '2026-02-08 21:39:16'),
(15, NULL, 'Œufs', 'Ẹyin', 'Ẹyin', 'Ẹyin', 'Kwai', 'Eggs', '2026-02-08 21:39:16', '2026-02-08 21:39:16');

-- --------------------------------------------------------

--
-- Structure de la table `salutations`
--

DROP TABLE IF EXISTS `salutations`;
CREATE TABLE IF NOT EXISTS `salutations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `francais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yoruba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dendi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anglais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bariba` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `salutations`
--

INSERT INTO `salutations` (`id`, `francais`, `goun`, `fon`, `yoruba`, `dendi`, `anglais`, `created_at`, `updated_at`, `bariba`) VALUES
(1, 'Bonjour', 'Wézon', 'Wézon', 'Ẹ káàárọ̀', 'Fofo', 'Hello', NULL, NULL, 'Baani'),
(2, 'Bonsoir', 'Wézɔn zán', 'Wézɔn zán', 'Ẹ káalẹ́', 'Fofo zaan', 'Good evening', NULL, NULL, 'Baani zaan'),
(3, 'Bienvenue', 'Wá wá', 'Wá wá', 'Ẹ kú àbọ̀', 'Fofo kɔ', 'Welcome', NULL, NULL, 'Baani wa'),
(4, 'Au revoir', 'Kù dó', 'Kù dó', 'Ó dàbọ̀', 'Fofo bɔ', 'Goodbye', NULL, NULL, 'Baani bɔ'),
(5, 'Bonne journée', 'Azǎn ɖagbe', 'Zɔ̀n nú', 'Ẹ kú ọjọ́', 'Fofo zɔn', 'Have a nice day', NULL, '2026-02-05 15:52:07', 'Baani zɔn'),
(6, 'Bonjour', 'Wézon', 'Wézon', 'Ẹ káàárọ̀', 'Fofo', 'Hello', NULL, NULL, 'Baani'),
(7, 'Bonsoir', 'Wézɔn zán', 'Wézɔn zán', 'Ẹ káalẹ́', 'Fofo zaan', 'Good evening', NULL, NULL, 'Baani zaan'),
(8, 'Bienvenue', 'Wá wá', 'Wá wá', 'Ẹ kú àbọ̀', 'Fofo kɔ', 'Welcome', NULL, NULL, 'Baani wa'),
(9, 'Au revoir', 'Kù dó', 'Kù dó', 'Ó dàbọ̀', 'Fofo bɔ', 'Goodbye', NULL, NULL, 'Baani bɔ'),
(10, 'Bonne journée', 'Zɔ̀n nú', 'Zɔ̀n nú', 'Ẹ kú ọjọ́', 'Fofo zɔn', 'Have a nice day', NULL, NULL, 'Baani zɔn'),
(11, 'Bonjour', 'Wézon', 'Wézon', 'Ẹ káàárọ̀', 'Fofo', 'Hello', NULL, NULL, 'Baani'),
(12, 'Bonsoir', 'Wézɔn zán', 'Wézɔn zán', 'Ẹ káalẹ́', 'Fofo zaan', 'Good evening', NULL, NULL, 'Baani zaan'),
(13, 'Bienvenue', 'Wá wá', 'Wá wá', 'Ẹ kú àbọ̀', 'Fofo kɔ', 'Welcome', NULL, NULL, 'Baani wa'),
(14, 'Au revoir', 'Kù dó', 'Kù dó', 'Ó dàbọ̀', 'Fofo bɔ', 'Goodbye', NULL, NULL, 'Baani bɔ'),
(15, 'Bonne journée', 'Zɔ̀n nú', 'Zɔ̀n nú', 'Ẹ kú ọjọ́', 'Fofo zɔn', 'Have a nice day', NULL, NULL, 'Baani zɔn');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('QZrrGcnEhakjD4mDwxBUYkvLL3dxJWrUfzp7iOOL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZG1XZ0RDUFFtQnU4S1Q1aUZVczJ6ek9oN0R4ZERVT2htY2hUZ3B2YSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWl0cyI7czo1OiJyb3V0ZSI7czoxNDoicHJvZHVpdHMuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1770590744),
('xJWMpmrM82j3qv1NjZyvEGR3G08g0gzSPJnBm4PP', NULL, '127.0.0.1', 'PostmanRuntime/7.51.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicDhMYU81bk9Td1lZYUJ2azdEbzIxQWo2UUZDcDNsTUJkc3NNN2FKdCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9kdWl0cyI7czo1OiJyb3V0ZSI7czoxNDoicHJvZHVpdHMuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1770593982),
('IJZR3tkywJ8UuMZK7Wc1sLNBYeMDd1es85J68IUM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0ttcFJ1V0R2UXlUYTJmNUlNbFVudzVzNTN3SHlEUEs4MWdESU43YSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWl0cz9wYWdlPTEiO3M6NToicm91dGUiO3M6MTQ6InByb2R1aXRzLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1771008017);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2026-02-08 09:11:46', '$2y$12$AUgYonoFDnISkW/FBh4FUuUqGpokJcrBeQPoEdAywmFklwtTdG3gu', '8EQyQcxUQP', '2026-02-08 09:11:47', '2026-02-08 09:11:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
