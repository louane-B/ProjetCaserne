-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2026 at 07:03 PM
-- Server version: 8.4.3
-- PHP Version: 8.5.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetcaserne`
--
CREATE DATABASE IF NOT EXISTS `projetcaserne` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `projetcaserne`;

-- --------------------------------------------------------

--
-- Table structure for table `firefighters`
--

CREATE TABLE `firefighters` (
  `id` bigint UNSIGNED NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_station_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firefighters`
--

INSERT INTO `firefighters` (`id`, `matricule`, `grade_id`, `nom`, `prenom`, `fire_station_id`, `created_at`, `updated_at`) VALUES
(1, 'FF-194', 6, 'Muller', 'Trent', 10, NULL, NULL),
(2, 'FF-073', 4, 'Gusikowski', 'Nadia', 7, NULL, NULL),
(3, 'FF-492', 5, 'Padberg', 'Kayleigh', 8, NULL, NULL),
(4, 'FF-756', 1, 'Jerde', 'Rosario', 3, NULL, NULL),
(5, 'FF-576', 6, 'Reichel', 'Armando', 4, NULL, NULL),
(6, 'FF-991', 5, 'Stroman', 'Adriana', 5, NULL, NULL),
(7, 'FF-947', 4, 'Walker', 'Birdie', 7, NULL, NULL),
(8, 'FF-313', 2, 'Howell', 'Velva', 4, NULL, NULL),
(9, 'FF-858', 7, 'Wiza', 'Maida', 4, NULL, NULL),
(10, 'FF-937', 5, 'Klein', 'Kevin', 9, NULL, NULL),
(11, 'FF-768', 7, 'Stoltenberg', 'Blaze', 10, NULL, NULL),
(12, 'FF-016', 2, 'Huels', 'Zetta', 9, NULL, NULL),
(13, 'FF-359', 3, 'Medhurst', 'Keith', 10, NULL, NULL),
(14, 'FF-626', 1, 'Schmitt', 'Nicholas', 10, NULL, NULL),
(15, 'FF-876', 3, 'Feil', 'Krystel', 6, NULL, NULL),
(16, 'FF-317', 4, 'Balistreri', 'Marielle', 5, NULL, NULL),
(17, 'FF-251', 1, 'Berge', 'Sigmund', 1, NULL, NULL),
(18, 'FF-725', 2, 'Stokes', 'Madyson', 2, NULL, NULL),
(19, 'FF-866', 4, 'Denesik', 'Allison', 4, NULL, NULL),
(20, 'FF-863', 2, 'Marquardt', 'Johnpaul', 9, NULL, NULL),
(21, 'FF-600', 3, 'Stracke', 'Cordia', 9, NULL, NULL),
(22, 'FF-122', 3, 'Wuckert', 'April', 8, NULL, NULL),
(23, 'FF-243', 3, 'Ratke', 'Jessika', 1, NULL, NULL),
(24, 'FF-280', 3, 'Johns', 'Loyce', 7, NULL, NULL),
(25, 'FF-040', 3, 'Jacobson', 'Billy', 5, NULL, NULL),
(26, 'FF-683', 3, 'Hirthe', 'Jarred', 4, NULL, NULL),
(27, 'FF-247', 3, 'Bergstrom', 'Mekhi', 2, NULL, NULL),
(28, 'FF-763', 3, 'Mertz', 'Darwin', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fire_stations`
--

CREATE TABLE `fire_stations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fire_stations`
--

INSERT INTO `fire_stations` (`id`, `name`, `adress`, `city`, `phone`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Runolfsson, Rau and Turcotte Fire Station', '70167 Zoie Track', 'Anitaborough', '360.842.6861', 8, NULL, NULL),
(2, 'Hansen-Champlin Fire Station', '33401 Rae Ford', 'East Rossie', '1-320-992-4603', 5, NULL, NULL),
(3, 'Herman-Russel Fire Station', '130 Powlowski Viaduct Suite 311', 'Amelymouth', '563-350-1964', 2, NULL, NULL),
(4, 'Zemlak Inc Fire Station', '1583 Marian Loaf Apt. 963', 'Lueilwitzhaven', '(386) 333-5921', 2, NULL, NULL),
(5, 'Waters PLC Fire Station', '439 Zachariah Lodge', 'Farrellbury', '+1-828-944-1577', 2, NULL, NULL),
(6, 'Champlin and Sons Fire Station', '286 Alda Landing Apt. 208', 'North Adelastad', '1-310-637-7770', 5, NULL, NULL),
(7, 'Gusikowski Ltd Fire Station', '31839 Javon Trace', 'Marilouville', '(231) 252-9774', 9, NULL, NULL),
(8, 'Towne LLC Fire Station', '432 Batz Neck', 'North Tomside', '+1.269.424.0800', 2, NULL, NULL),
(9, 'Keeling, Harber and Simonis Fire Station', '782 Kuphal Way Apt. 196', 'Lake Sandrashire', '+1.702.437.0987', 6, NULL, NULL),
(10, 'Hickle-Zieme Fire Station', '9373 Stephan Valley', 'New Violette', '+1 (410) 937-3018', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `description`, `symbol`, `created_at`, `updated_at`) VALUES
(1, 'Directeur', '&#9937;&#9937;&#9937;', NULL, NULL),
(2, 'Directeur adjoint', '&#9937;&#9937;', NULL, NULL),
(3, 'Capitaine', '&#11088;&#11088;', NULL, NULL),
(4, 'Lieutenant', '&#9876;&#9876;', NULL, NULL),
(5, 'Lieutenant substitut', '&#9876;', NULL, NULL),
(6, 'Pompier', '&#128658;', NULL, NULL),
(7, 'Pompier recrue', '&#128680;', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interventions`
--

CREATE TABLE `interventions` (
  `id` bigint UNSIGNED NOT NULL,
  `DateTempsDebut` datetime NOT NULL,
  `Adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Resume` text COLLATE utf8mb4_unicode_ci,
  `type_intervention_id` bigint UNSIGNED NOT NULL,
  `fire_station_id` bigint UNSIGNED NOT NULL,
  `captain_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interventions`
--

INSERT INTO `interventions` (`id`, `DateTempsDebut`, `Adresse`, `Resume`, `type_intervention_id`, `fire_station_id`, `captain_id`, `created_at`, `updated_at`) VALUES
(1, '2025-09-23 02:49:01', '13264 Schimmel Lights\nWest Libbyville, CO 91358', 'Repellendus voluptas consectetur veritatis natus enim tenetur voluptatem hic consectetur facere repellat laudantium.', 2, 9, 21, NULL, NULL),
(2, '2025-10-17 08:28:22', '1250 Fabiola Manors\nNorth Marysehaven, SD 00435-0899', 'Officia qui ipsa tempore et sint voluptatem eum quae consequuntur pariatur occaecati aliquid placeat.', 3, 8, 22, NULL, NULL),
(3, '2025-11-01 11:09:53', '889 Hansen Lake\nCraigside, NE 65969', 'Nisi sapiente qui ut aut quidem velit est facilis inventore blanditiis accusamus.', 13, 1, 23, NULL, NULL),
(4, '2025-08-26 02:33:33', '750 Pouros Square\nPort Kathrynstad, TX 99231-5424', 'Iure illum cumque non modi fugiat itaque dolorem et distinctio quasi est illum aliquid ad perspiciatis.', 15, 1, 23, NULL, NULL),
(5, '2026-05-15 10:40:45', '852 Dach Underpass Suite 758\nPort Fay, AL 69062', 'Omnis error voluptas et dicta molestiae veniam quis consequatur omnis est.', 15, 7, 24, NULL, NULL),
(6, '2026-01-21 06:58:02', '8798 Jany Points\nWisokyton, NV 19213', 'Nesciunt laboriosam voluptate nemo iusto asperiores a quia autem perferendis quas vero est velit aperiam corporis.', 1, 7, 24, NULL, NULL),
(7, '2026-05-10 15:53:02', '15606 Brielle Falls\nMeaghanberg, NH 95444', 'Error perferendis quos tempore voluptatem temporibus consequuntur in.', 10, 6, 15, NULL, NULL),
(8, '2025-09-17 08:23:04', '21154 Helen Pass Apt. 665\nSouth Ralph, DC 83517-6403', 'Assumenda ad quod nesciunt debitis rerum animi molestiae quia.', 2, 8, 22, NULL, NULL),
(9, '2025-07-30 09:29:54', '524 Norbert Skyway Suite 969\nSouth Claire, WA 41004', 'Ut et dolorem qui et est optio dolorem consectetur at dicta incidunt.', 19, 5, 25, NULL, NULL),
(10, '2026-01-05 15:30:05', '357 Ziemann Turnpike Suite 769\nKertzmannbury, DE 18439', 'Omnis adipisci aperiam pariatur provident ut in qui occaecati omnis numquam ab laborum sunt.', 20, 8, 22, NULL, NULL),
(11, '2025-06-11 21:32:47', '33375 Lakin Oval\nHeaneybury, RI 30298', 'Et incidunt enim sunt ut quibusdam et velit in ratione repudiandae.', 17, 10, 13, NULL, NULL),
(12, '2025-08-11 18:52:55', '38797 Adams Crest Suite 592\nNorth Rosalindastad, MI 76211-5021', 'Aliquid nostrum laborum natus facere dolore nihil et est laudantium magni voluptas ullam tempora ut reprehenderit.', 3, 6, 15, NULL, NULL),
(13, '2025-07-18 06:34:58', '43250 Blanda Meadow\nSouth Bernhardton, WI 38484', 'Accusantium sunt praesentium non minima voluptatum fugit atque.', 18, 7, 24, NULL, NULL),
(14, '2025-09-25 19:04:46', '1224 Larue Passage\nPadbergland, OK 31187-2007', 'Dolorem et ut ipsa commodi quae quo eum dolor quis excepturi quis ipsum ut qui qui.', 20, 4, 26, NULL, NULL),
(15, '2026-02-10 14:34:06', '51415 Jaden Haven\nWest Donna, NY 24743', 'In eius eaque et fuga maiores ullam facilis velit amet in ratione aut sed similique aut necessitatibus.', 3, 7, 24, NULL, NULL),
(16, '2025-06-24 07:44:00', '6866 O\'Keefe Throughway\nNorth Courtneyberg, ME 93610', 'Minima natus id expedita ut voluptates explicabo repellendus eum maiores.', 2, 9, 21, NULL, NULL),
(17, '2025-08-16 17:10:05', '7766 Cremin Lakes Apt. 216\nStanfordmouth, NM 72656-0313', 'Et voluptatem occaecati qui quasi quia voluptatem sunt architecto suscipit.', 14, 2, 27, NULL, NULL),
(18, '2025-07-28 03:02:45', '543 Marcos Burg Suite 061\nPort Arleneview, AL 48050', 'Labore vel nesciunt in et dolore distinctio voluptates cumque sed adipisci accusamus.', 19, 5, 25, NULL, NULL),
(19, '2026-05-10 15:30:28', '134 Kim Pike Suite 737\nWeberhaven, GA 42499', 'Placeat fugiat praesentium et animi ipsa vero tempora consequuntur sint nisi optio dolor iusto nostrum cupiditate.', 20, 5, 25, NULL, NULL),
(20, '2025-12-01 04:32:24', '709 Bernhard Via\nSouth Kristin, NE 60454-2243', 'Nesciunt enim recusandae atque laudantium iure quis praesentium laboriosam fuga id rerum est dolore vel incidunt.', 19, 1, 23, NULL, NULL),
(21, '2025-09-17 08:03:51', '64313 Nelda Ferry\nKesslerhaven, LA 19109-6218', 'Aliquam fugiat quas maxime cumque mollitia ullam rerum qui.', 8, 6, 15, NULL, NULL),
(22, '2025-06-28 17:07:39', '7743 Loraine Divide\nJosianneborough, NV 40375-1612', 'Et a sit reprehenderit accusantium ipsum et rem dolorem.', 23, 1, 23, NULL, NULL),
(23, '2025-09-01 22:32:43', '73461 Strosin Square\nHeathcoteside, KS 67803-7044', 'Dolor et in illo est optio magnam voluptas deleniti facere velit placeat labore et quos eligendi.', 11, 4, 26, NULL, NULL),
(24, '2025-11-12 01:26:52', '40486 Lynch Route Apt. 029\nHildaborough, NJ 46719', 'Vitae et aut soluta non est nobis quia hic cumque recusandae qui quam quis veniam.', 25, 3, 28, NULL, NULL),
(25, '2025-08-13 18:01:32', '9493 McClure Prairie Suite 506\nPort Willy, UT 97483', 'Quia consequatur iusto at unde aut dolor et eum placeat ipsa.', 11, 6, 15, NULL, NULL),
(26, '2026-01-15 20:48:15', '13712 Reilly Wall\nStrosinfort, IA 74202', 'Omnis ducimus ab nobis enim suscipit voluptates error rerum rerum maxime ea nemo.', 13, 5, 25, NULL, NULL),
(27, '2026-04-26 12:43:00', '4164 Yost Station\nNew Cecilia, NV 86612-7408', 'Quas odio tempora officia sunt et earum dicta magni ut modi voluptatum vel nesciunt voluptatem eos.', 22, 1, 23, NULL, NULL),
(28, '2025-05-29 05:22:34', '546 Klein Causeway\nPort Richmond, NY 36897', 'Numquam quo in quas soluta rem voluptatem quas reprehenderit sed non minus corporis minima.', 17, 1, 23, NULL, NULL),
(29, '2026-01-04 07:56:12', '7203 Boyle Course Apt. 321\nEast Marcelo, NV 96595-0502', 'Dolorem fugit ducimus pariatur et provident repellat aut ea et itaque qui voluptatem ex nobis.', 12, 4, 26, NULL, NULL),
(30, '2026-02-22 05:16:16', '6868 Schmidt Trace Suite 990\nWuckertchester, MN 36179-6743', 'Voluptas totam rerum sapiente perferendis vel repudiandae ut ut et.', 13, 2, 27, NULL, NULL),
(31, '2025-06-02 18:43:58', '394 Kody Court\nMuellerchester, NJ 11490-3909', 'Ad ea ratione ab earum iure sint enim aut et.', 10, 1, 23, NULL, NULL),
(32, '2025-06-26 17:23:44', '609 Tremaine Landing Suite 227\nRowefurt, ID 25664', 'Non blanditiis aperiam iste praesentium tenetur enim et enim et enim.', 7, 3, 28, NULL, NULL),
(33, '2026-02-08 10:42:49', '54581 Leola Place Suite 666\nWest Margaretteside, CA 42368', 'Ipsum aut placeat odio in aspernatur ratione assumenda perferendis animi quae aut ut ex vero enim laudantium.', 27, 9, 21, NULL, NULL),
(34, '2026-01-11 22:01:04', '12397 Dietrich Springs\nAltenwerthhaven, PA 82895', 'Assumenda tenetur qui saepe aspernatur assumenda laborum sit aut vitae incidunt ex in deserunt magni eum.', 17, 5, 25, NULL, NULL),
(35, '2025-08-06 23:41:31', '1465 Macejkovic Fields Suite 550\nEmmanuelleshire, MI 18636-1761', 'A illum ea qui temporibus est ea totam vel.', 1, 1, 23, NULL, NULL),
(36, '2025-11-04 20:40:23', '883 Lowe Vista\nWest Danielle, AL 53159', 'Perspiciatis et sunt neque soluta quas odio sit et blanditiis a natus nulla rem quis mollitia repellendus.', 23, 9, 21, NULL, NULL),
(37, '2026-02-09 16:07:03', '295 Elmira Garden Apt. 203\nYostton, DC 73273', 'Quos aut est illum ad eos in nobis non sed harum repudiandae ut in modi.', 12, 10, 13, NULL, NULL),
(38, '2026-02-01 02:16:20', '23966 Alvera Neck\nAndersonton, ME 76545-3949', 'Velit ex hic illo id fuga officia et ut voluptatem ea eum quae occaecati assumenda sequi.', 9, 5, 25, NULL, NULL),
(39, '2025-08-09 11:19:55', '759 Vivien Via Suite 903\nMackland, OH 63713-4429', 'Quis est unde ut porro consequatur explicabo excepturi est perferendis dolor quia pariatur.', 18, 10, 13, NULL, NULL),
(40, '2025-08-29 17:12:02', '87377 Ebert Road\nNorth Hellenland, WA 08821-8507', 'Porro iure aliquam occaecati voluptatem aut quae qui voluptatem earum quisquam enim quas voluptas nobis nihil.', 8, 9, 21, NULL, NULL),
(41, '2025-08-23 22:38:30', '378 Jast Land Apt. 038\nEmmerichland, NY 68418-3015', 'Suscipit itaque omnis blanditiis perferendis aliquam dolorum sit et et dolor voluptatem placeat qui dolore officia assumenda.', 22, 4, 26, NULL, NULL),
(42, '2026-05-15 05:21:24', '45555 Dibbert Island\nNew Danfort, DE 50794', 'Mollitia autem et voluptatem dicta accusamus eius totam sit accusamus aspernatur nulla dolorum dicta nemo.', 14, 5, 25, NULL, NULL),
(43, '2025-07-11 12:11:47', '2416 Dominique Ranch\nNew Cole, SD 67635-3767', 'Delectus aliquid soluta sed dolorem sunt iusto quia perferendis et architecto suscipit perferendis dolorem aliquam non voluptas.', 25, 3, 28, NULL, NULL),
(44, '2026-02-15 16:38:02', '11947 Romaguera Fords\nBuddyport, WA 04163-9560', 'Dignissimos iusto excepturi asperiores nihil labore iusto expedita delectus quod voluptatem impedit illo autem occaecati qui perferendis.', 17, 10, 13, NULL, NULL),
(45, '2025-10-20 03:13:29', '6496 Harris Keys Apt. 384\nKadeton, WA 99361-6142', 'Aliquid quaerat et eum veniam quisquam consectetur quidem eum aut.', 11, 2, 27, NULL, NULL),
(46, '2025-07-09 10:24:19', '18288 Summer Bridge Apt. 843\nJerdefort, NM 91280-8131', 'Porro est ut aut delectus quia voluptatibus magnam est perferendis distinctio repellendus odit quam consequatur.', 11, 10, 13, NULL, NULL),
(47, '2026-01-03 02:33:11', '314 Zula Locks Suite 080\nJavonshire, AZ 10734-8842', 'Fugiat et eaque dignissimos quo reiciendis natus ipsum soluta aut sed.', 16, 5, 25, NULL, NULL),
(48, '2025-06-12 11:26:30', '335 Bobby Mills Apt. 187\nEast Xander, ME 32293', 'Est illum placeat quisquam placeat libero id aspernatur est iste aut magni.', 9, 5, 25, NULL, NULL),
(49, '2025-11-25 21:53:25', '96606 Jed Centers Suite 487\nFreddiefurt, VT 64279', 'Qui quaerat odio nam qui similique sed quae.', 26, 2, 27, NULL, NULL),
(50, '2025-11-10 21:52:24', '73792 Desiree Land\nLake Lyric, NE 84768-9277', 'Nobis ut labore atque nam et quis non dolor.', 4, 5, 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2026_04_22_174800_create_states_table', 1),
(2, '2026_04_22_174850_create_fire_stations_table', 1),
(3, '2026_04_29_161238_create_type_interventions_table', 1),
(4, '2026_04_30_162429_create_grades_table', 1),
(5, '2026_04_30_183415_create_firefighters_table', 1),
(6, '2026_05_02_153511_create_interventions_table', 1),
(7, '2026_05_08_140754_create_sessions_table', 1),
(8, '2026_05_13_232006_create_type_vehicles_table', 1),
(9, '2026_05_15_134529_create_vehicles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('vAQNDVZRv5OLJe1CyNKC3DQGz2qAcFh6PosrLdgI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 Edg/148.0.0.0', 'eyJfdG9rZW4iOiJEblVxQmtaTGRick51RllhQXAyUG1PNG9HYnJkMW50NXRDQzBuYXlyIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3Byb2pldGNhc2VybmUudGVzdFwvRmlyZVN0YXRpb25zIiwicm91dGUiOiJmaXJlc3RhdGlvbnMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', 1778958144);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Colombie-Britannique', NULL, NULL),
(2, 'Alberta', NULL, NULL),
(3, 'Saskatchewan', NULL, NULL),
(4, 'Manitoba', NULL, NULL),
(5, 'Ontario', NULL, NULL),
(6, 'Quebec', NULL, NULL),
(7, 'Terre-Neuve-et-Labrador', NULL, NULL),
(8, 'Nouveau-Brunswick', NULL, NULL),
(9, 'Île-du-Prince-Édouard', NULL, NULL),
(10, 'Nouvelle-Écosse', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_interventions`
--

CREATE TABLE `type_interventions` (
  `id` bigint UNSIGNED NOT NULL,
  `NoIntervention` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_interventions`
--

INSERT INTO `type_interventions` (`id`, `NoIntervention`, `description`, `created_at`, `updated_at`) VALUES
(1, 51, 'Urgence Aéronef', NULL, NULL),
(2, 52, 'Alarmes', NULL, NULL),
(3, 53, 'Assistance au citoyen / Appels de Service', NULL, NULL),
(4, 54, 'Espace Clos / Effondrement de Structure / Batiment', NULL, NULL),
(5, 55, 'Risque Electrique', NULL, NULL),
(6, 56, 'Sauvetage D\'ascenseur / Escalier Roulant', NULL, NULL),
(7, 57, 'Explosion', NULL, NULL),
(8, 58, 'Désincarcération / Personne Coincée (Machinerie, Véhicule, Pas AVM)', NULL, NULL),
(9, 59, 'Déversement / Fuite / Odeur de Carburant', NULL, NULL),
(10, 60, 'Fuite de Gaz / Odeur de Gaz (Gaz Naturel et PL)', NULL, NULL),
(11, 61, 'Produits Dangereux', NULL, NULL),
(12, 62, 'Sauvetage en Hauteur (Au-Dessus ou En Dessous du Niveau du Sol)', NULL, NULL),
(13, 63, 'Foudre (Investigation)', NULL, NULL),
(14, 64, 'Incendie Maritime / de Bateau', NULL, NULL),
(15, 65, 'Aide Mutuelle / Assistance Autre Service', NULL, NULL),
(16, 66, 'Odeur (Etrange / Inconnue)', NULL, NULL),
(17, 67, 'Incendie Extérieur', NULL, NULL),
(18, 68, 'Investigation de Fumée (Extérieur)', NULL, NULL),
(19, 69, 'Incendie de Structure / Batiment', NULL, NULL),
(20, 70, 'Collision / Déraillement de Train / Métro', NULL, NULL),
(21, 71, 'Incendie de Véhicule', NULL, NULL),
(22, 72, 'Sauvetage Nautique / Véhicule qui Coule (Immersion) / Véhicule dans un Courant d\'Eau', NULL, NULL),
(23, 73, 'Embarcation en Détresse / Collision', NULL, NULL),
(24, 74, 'Colis Suspect (Lettre, Object, Substance) / Explosifs', NULL, NULL),
(25, 75, 'Incendie de Train', NULL, NULL),
(26, 76, 'Alerte à la Bombe', NULL, NULL),
(27, 77, 'Collision de Véhicule Moteur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_vehicles`
--

CREATE TABLE `type_vehicles` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_vehicles`
--

INSERT INTO `type_vehicles` (`id`, `code`, `description`, `created_at`, `updated_at`) VALUES
(1, 'FPT', 'Fourgon Pompe Tonne', NULL, NULL),
(2, 'FPTL', 'Fourgon Pompe Tonne Léger', NULL, NULL),
(3, 'CCF', 'Camion Citerne Feux de Forêts', NULL, NULL),
(4, 'CCFM', 'Camion Citerne Feux de Forêts Moyen', NULL, NULL),
(5, 'VSAV', 'Véhicule de Secours et d\'Assistance aux Victimes', NULL, NULL),
(6, 'VLM', 'Véhicule Léger Médicalisé', NULL, NULL),
(7, 'VLCG', 'Véhicule de Liaison Chef de Groupe', NULL, NULL),
(8, 'PC', 'Poste de Commandement Mobile', NULL, NULL),
(9, 'VSR', 'Véhicule de Secours Routier', NULL, NULL),
(10, 'VIRT', 'Véhicule d\'Intervention Risques Technologiques', NULL, NULL),
(11, 'EPA', 'Échelle Pivotante Automatique', NULL, NULL),
(12, 'BEA', 'Bras Élévateur Articulé', NULL, NULL),
(13, 'VIR', 'Véhicule d\'Intervention Risques', NULL, NULL),
(14, 'VNRBC', 'Véhicule Risques Nucléaires, Radiologiques, Biologiques et Chimiques', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint UNSIGNED NOT NULL,
  `NoIdentification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Immatriculation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AnneeMiseEnService` year NOT NULL,
  `Marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Modele` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_vehicle_id` bigint UNSIGNED NOT NULL,
  `fire_station_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `NoIdentification`, `Immatriculation`, `AnneeMiseEnService`, `Marque`, `Modele`, `type_vehicle_id`, `fire_station_id`, `created_at`, `updated_at`) VALUES
(1, 'VEH-182', 'ABC-186', '2015', 'Renault', 'eveniet', 12, 5, NULL, NULL),
(2, 'VEH-668', 'ABC-794', '1981', 'Mercedes', 'quia', 4, 5, NULL, NULL),
(3, 'VEH-004', 'ABC-544', '2007', 'Renault', 'non', 7, 10, NULL, NULL),
(4, 'VEH-214', 'ABC-648', '1996', 'MAN', 'labore', 4, 7, NULL, NULL),
(5, 'VEH-385', 'ABC-604', '2008', 'Mercedes', 'recusandae', 10, 3, NULL, NULL),
(6, 'VEH-510', 'ABC-443', '1984', 'Renault', 'reprehenderit', 1, 5, NULL, NULL),
(7, 'VEH-562', 'ABC-655', '1977', 'MAN', 'enim', 8, 9, NULL, NULL),
(8, 'VEH-789', 'ABC-537', '2016', 'Mercedes', 'fugiat', 7, 6, NULL, NULL),
(9, 'VEH-403', 'ABC-650', '2007', 'MAN', 'animi', 7, 9, NULL, NULL),
(10, 'VEH-269', 'ABC-165', '2004', 'Iveco', 'est', 11, 4, NULL, NULL),
(11, 'VEH-249', 'ABC-552', '2003', 'Mercedes', 'iure', 7, 8, NULL, NULL),
(12, 'VEH-512', 'ABC-990', '2014', 'MAN', 'perferendis', 4, 10, NULL, NULL),
(13, 'VEH-897', 'ABC-558', '1995', 'Mercedes', 'ea', 1, 4, NULL, NULL),
(14, 'VEH-715', 'ABC-503', '1980', 'Mercedes', 'cupiditate', 11, 1, NULL, NULL),
(15, 'VEH-792', 'ABC-766', '1987', 'Renault', 'omnis', 2, 7, NULL, NULL),
(16, 'VEH-436', 'ABC-784', '2014', 'Iveco', 'corporis', 8, 4, NULL, NULL),
(17, 'VEH-928', 'ABC-882', '1970', 'Mercedes', 'voluptatibus', 14, 3, NULL, NULL),
(18, 'VEH-227', 'ABC-279', '2005', 'Iveco', 'aspernatur', 4, 10, NULL, NULL),
(19, 'VEH-982', 'ABC-170', '2026', 'MAN', 'fugit', 2, 6, NULL, NULL),
(20, 'VEH-448', 'ABC-805', '1979', 'MAN', 'quaerat', 7, 9, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firefighters`
--
ALTER TABLE `firefighters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firefighters_grade_id_foreign` (`grade_id`),
  ADD KEY `firefighters_fire_station_id_foreign` (`fire_station_id`);

--
-- Indexes for table `fire_stations`
--
ALTER TABLE `fire_stations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fire_stations_state_id_foreign` (`state_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interventions`
--
ALTER TABLE `interventions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interventions_type_intervention_id_foreign` (`type_intervention_id`),
  ADD KEY `interventions_fire_station_id_foreign` (`fire_station_id`),
  ADD KEY `interventions_captain_id_foreign` (`captain_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_interventions`
--
ALTER TABLE `type_interventions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_vehicles`
--
ALTER TABLE `type_vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_vehicles_code_unique` (`code`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicles_noidentification_unique` (`NoIdentification`),
  ADD UNIQUE KEY `vehicles_immatriculation_unique` (`Immatriculation`),
  ADD KEY `vehicles_type_vehicle_id_foreign` (`type_vehicle_id`),
  ADD KEY `vehicles_fire_station_id_foreign` (`fire_station_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `firefighters`
--
ALTER TABLE `firefighters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `fire_stations`
--
ALTER TABLE `fire_stations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `interventions`
--
ALTER TABLE `interventions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `type_interventions`
--
ALTER TABLE `type_interventions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `type_vehicles`
--
ALTER TABLE `type_vehicles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `firefighters`
--
ALTER TABLE `firefighters`
  ADD CONSTRAINT `firefighters_fire_station_id_foreign` FOREIGN KEY (`fire_station_id`) REFERENCES `fire_stations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `firefighters_grade_id_foreign` FOREIGN KEY (`grade_id`) REFERENCES `grades` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fire_stations`
--
ALTER TABLE `fire_stations`
  ADD CONSTRAINT `fire_stations_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `interventions`
--
ALTER TABLE `interventions`
  ADD CONSTRAINT `interventions_captain_id_foreign` FOREIGN KEY (`captain_id`) REFERENCES `firefighters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `interventions_fire_station_id_foreign` FOREIGN KEY (`fire_station_id`) REFERENCES `fire_stations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `interventions_type_intervention_id_foreign` FOREIGN KEY (`type_intervention_id`) REFERENCES `type_interventions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_fire_station_id_foreign` FOREIGN KEY (`fire_station_id`) REFERENCES `fire_stations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicles_type_vehicle_id_foreign` FOREIGN KEY (`type_vehicle_id`) REFERENCES `type_vehicles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
