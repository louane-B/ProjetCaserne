-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2026 at 02:08 PM
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
(1, 'FF-581', 5, 'Gleason', 'Dayna', 7, NULL, NULL),
(2, 'FF-559', 1, 'Lemke', 'Nayeli', 3, NULL, NULL),
(3, 'FF-436', 7, 'Langosh', 'Edyth', 3, NULL, NULL),
(4, 'FF-767', 6, 'Wisozk', 'Lilliana', 6, NULL, NULL),
(5, 'FF-360', 5, 'Bednar', 'Lulu', 8, NULL, NULL),
(6, 'FF-262', 2, 'Gusikowski', 'Doris', 2, NULL, NULL),
(7, 'FF-069', 7, 'Schimmel', 'Mellie', 2, NULL, NULL),
(8, 'FF-359', 1, 'Zemlak', 'Allan', 5, NULL, NULL),
(9, 'FF-288', 1, 'Torp', 'Tyler', 5, NULL, NULL),
(10, 'FF-231', 3, 'Bosco', 'Scarlett', 2, NULL, NULL),
(11, 'FF-443', 5, 'Padberg', 'Maye', 4, NULL, NULL),
(12, 'FF-344', 1, 'Keebler', 'Walker', 10, NULL, NULL),
(13, 'FF-977', 6, 'Littel', 'Barrett', 9, NULL, NULL),
(14, 'FF-441', 3, 'Rodriguez', 'Weston', 7, NULL, NULL),
(15, 'FF-864', 5, 'Lynch', 'Brandy', 5, NULL, NULL),
(16, 'FF-780', 7, 'Bergstrom', 'Penelope', 8, NULL, NULL),
(17, 'FF-086', 5, 'Dickens', 'Felicita', 8, NULL, NULL),
(18, 'FF-408', 7, 'Thompson', 'Karley', 10, NULL, NULL),
(19, 'FF-984', 6, 'Kunde', 'Jakayla', 8, NULL, NULL),
(20, 'FF-204', 6, 'Hickle', 'Donavon', 5, NULL, NULL),
(21, 'FF-656', 3, 'Hoppe', 'Matteo', 3, NULL, NULL),
(22, 'FF-527', 3, 'Jacobi', 'Kaycee', 8, NULL, NULL),
(23, 'FF-444', 3, 'Douglas', 'Rogers', 4, NULL, NULL),
(24, 'FF-109', 3, 'Crist', 'Rickie', 6, NULL, NULL),
(25, 'FF-547', 3, 'Strosin', 'Durward', 9, NULL, NULL),
(26, 'FF-563', 3, 'Altenwerth', 'Ursula', 10, NULL, NULL),
(27, 'FF-417', 3, 'Gaylord', 'Agustina', 5, NULL, NULL),
(28, 'FF-821', 3, 'Maggio', 'Lauriane', 1, NULL, NULL);

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
(1, 'Paucek-Schamberger Fire Station', '517 Nannie Shore', 'Zaneville', '1-352-958-3858', 4, NULL, NULL),
(2, 'Erdman-Runolfsson Fire Station', '86829 Emmet Islands', 'Port Winifredberg', '914-520-4385', 2, NULL, NULL),
(3, 'Koch-Blanda Fire Station', '19590 Hirthe Crest', 'Hillview', '1-850-667-4954', 3, NULL, NULL),
(4, 'McCullough LLC Fire Station', '769 Rick Expressway Suite 369', 'East Millie', '+1-217-484-8357', 1, NULL, NULL),
(5, 'Sauer LLC Fire Station', '44524 Jennyfer Hollow', 'Roweville', '(228) 975-1739', 3, NULL, NULL),
(6, 'Smitham, Hagenes and Haag Fire Station', '45619 Sally Ridges Apt. 817', 'Port Felixberg', '+1-929-386-4823', 3, NULL, NULL),
(7, 'Ankunding-Schmidt Fire Station', '886 Clay Mount Suite 014', 'North Rosalee', '+1.213.472.7085', 2, NULL, NULL),
(8, 'Kuvalis-Reichert Fire Station', '161 Alberta Summit', 'North Amiyaview', '+1 (224) 899-9177', 4, NULL, NULL),
(9, 'Block, Wintheiser and Kuhn Fire Station', '30013 Brekke Well Suite 973', 'Ferryhaven', '+1-701-703-9235', 4, NULL, NULL),
(10, 'Hammes-Runolfsdottir Fire Station', '753 Lorenza Center', 'South Alleneland', '+1-843-469-9243', 4, NULL, NULL);

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
(1, '2025-11-24 08:52:40', '319 Bernard Burgs\nMariahview, ME 78058-1371', 'Nostrum et quidem ea porro saepe excepturi dicta.', 10, 3, 21, NULL, NULL),
(2, '2025-06-01 22:06:19', '6917 West Extensions Suite 712\nLeoraborough, AL 47965', 'Vel in repellendus minus alias et beatae laborum qui praesentium quo error est ipsum repellendus ut.', 20, 8, 22, NULL, NULL),
(3, '2025-12-27 15:55:24', '7221 Javonte Highway\nPort Ariton, IL 34080-2558', 'Et vel voluptatem sint soluta excepturi esse minima dolorem quidem neque rerum in quo.', 11, 4, 23, NULL, NULL),
(4, '2025-08-30 00:03:48', '7848 Caleigh Trafficway Suite 865\nLake Immanuel, OH 55553-5909', 'Doloribus qui ea dicta sit deserunt cupiditate officiis.', 24, 8, 22, NULL, NULL),
(5, '2025-11-23 04:15:58', '5489 Turcotte Course Suite 215\nMannside, VT 07734-2507', 'Eum et vero quaerat et non eaque laborum doloribus modi doloribus ullam rerum laborum nam animi veniam.', 3, 2, 10, NULL, NULL),
(6, '2026-01-15 04:21:21', '669 Dibbert River Apt. 016\nSouth Dejuanville, NV 61811', 'Laboriosam rerum distinctio rerum est itaque dolor voluptate voluptatem minus autem maiores ex voluptatem fugiat.', 16, 6, 24, NULL, NULL),
(7, '2025-12-13 22:55:13', '84670 Beahan Terrace Apt. 130\nHymanbury, MN 72138', 'Recusandae maxime adipisci autem enim veritatis aut quia.', 24, 4, 23, NULL, NULL),
(8, '2025-10-31 08:56:27', '9108 Zachary Shoals\nStromanburgh, IL 86297', 'Nihil temporibus error repellendus exercitationem delectus qui voluptatem commodi nisi blanditiis dolor.', 22, 7, 14, NULL, NULL),
(9, '2025-10-01 10:05:12', '6968 Hettinger Lock Apt. 150\nSouth Retta, CA 60180-9903', 'Officiis vel sint qui dolores rerum provident et qui cupiditate.', 4, 4, 23, NULL, NULL),
(10, '2026-03-01 13:49:24', '5574 Joel Camp Apt. 321\nPort Jamieberg, MA 27152', 'A itaque eveniet nostrum debitis et exercitationem quaerat laudantium rerum dolor praesentium quam est tempora nihil consequuntur.', 24, 9, 25, NULL, NULL),
(11, '2026-01-05 18:50:26', '993 Marquardt Plaza Suite 942\nWest Margretton, TX 02792', 'Recusandae voluptatem molestiae voluptatem rerum qui ratione est earum est minima quis reprehenderit tempora dolorum et est.', 7, 10, 26, NULL, NULL),
(12, '2025-12-29 18:36:28', '8408 Jeanette Shores\nLake Gretchen, AL 80692-9324', 'Labore ea non aut sit qui doloremque occaecati cum aliquam eum officiis et est et et voluptatem.', 11, 3, 21, NULL, NULL),
(13, '2025-12-17 05:55:02', '11661 Bayer Brook Apt. 088\nNorth Dominicburgh, IN 32705', 'Eveniet quasi maiores porro quasi excepturi deserunt alias sequi iusto repellat et dolores sunt est.', 17, 3, 21, NULL, NULL),
(14, '2026-01-08 12:16:03', '454 Zieme Gardens Suite 092\nWest Moses, NY 90536', 'Sit earum quisquam odio consequatur quia non voluptas excepturi ut vitae modi incidunt excepturi odit.', 4, 5, 27, NULL, NULL),
(15, '2026-03-15 20:11:42', '917 Emmerich Trail Suite 519\nSouth Mackenzieville, MN 77919-9553', 'Ut sunt voluptatem reprehenderit repellendus repellendus dolores aut facere reprehenderit.', 16, 8, 22, NULL, NULL),
(16, '2025-09-11 14:01:31', '1423 Schmidt Brook Suite 726\nLake Steve, OH 87178-9947', 'Recusandae eius voluptates est et suscipit repellat dolores nobis in et quos error perferendis harum.', 26, 5, 27, NULL, NULL),
(17, '2025-08-24 00:07:16', '48069 Kertzmann Springs Apt. 972\nSchinnerburgh, WV 44252', 'Occaecati id perspiciatis et tempora atque culpa quia perferendis voluptas rerum.', 21, 2, 10, NULL, NULL),
(18, '2026-03-17 21:14:59', '974 Kertzmann Via\nLake Crystelport, WV 68494', 'Et eos voluptate blanditiis velit nostrum aperiam doloremque reprehenderit temporibus fuga optio repudiandae.', 15, 7, 14, NULL, NULL),
(19, '2025-10-08 07:40:40', '60774 Ervin Center Apt. 346\nKleinport, VT 08508-7292', 'Rem nihil ipsa quam voluptas debitis enim nostrum sed dolor.', 4, 5, 27, NULL, NULL),
(20, '2025-12-18 03:20:40', '7840 McGlynn Lane Apt. 991\nWest Jaymestad, MO 35485-5587', 'Qui in consectetur sit sit sit officia facere qui expedita nostrum et quia perferendis aliquam consequatur.', 18, 6, 24, NULL, NULL),
(21, '2025-07-06 13:13:36', '1582 Taryn Greens\nTremblayfort, OH 34869-7435', 'Asperiores voluptates dolorem enim minima sed non nihil cupiditate dolorem voluptatem modi voluptatum est rerum.', 19, 4, 23, NULL, NULL),
(22, '2025-10-07 11:20:48', '45131 Schinner Court\nTiannaburgh, MN 81726', 'Accusamus earum nesciunt eaque dolor ad quisquam est dolor quam et facere corporis.', 19, 3, 21, NULL, NULL),
(23, '2026-03-10 01:58:54', '85149 Bruen Squares\nDaijaview, DC 27951-8881', 'Est accusamus et dolorem consequatur nostrum cupiditate voluptatem ea et.', 8, 4, 23, NULL, NULL),
(24, '2025-08-04 14:03:54', '988 Ziemann Highway Apt. 309\nNorth Anabelshire, MI 65499', 'Et numquam voluptatibus inventore accusantium doloremque qui sequi.', 9, 3, 21, NULL, NULL),
(25, '2026-03-16 17:33:49', '75197 Breitenberg Field\nNew Annamarieport, NV 42263-8735', 'Est sint adipisci omnis illum officiis in consectetur.', 4, 1, 28, NULL, NULL),
(26, '2025-11-06 23:11:13', '523 O\'Reilly Creek\nLake Bennett, ND 91957', 'Officia et dolores consequatur doloremque accusantium voluptatum molestias nam aspernatur omnis in rerum incidunt velit qui optio.', 3, 5, 27, NULL, NULL),
(27, '2025-10-16 19:05:53', '9482 Lina Forks\nKatelynberg, NM 00570-1798', 'Perspiciatis iure at explicabo alias cumque debitis est praesentium inventore nam odit accusamus commodi autem.', 26, 7, 14, NULL, NULL),
(28, '2026-03-14 20:28:33', '8487 Sawayn Fields Suite 982\nBethelville, HI 53320', 'Unde et dolores quia repudiandae est voluptatem repudiandae est illo provident.', 25, 5, 27, NULL, NULL),
(29, '2025-08-31 04:34:07', '5642 Shanie Passage\nLake Leobury, MA 89557', 'Harum maiores atque non quo nesciunt dignissimos aut quis maiores deserunt veniam consequuntur enim.', 7, 9, 25, NULL, NULL),
(30, '2026-05-08 13:02:59', '177 Parker Fall Suite 643\nKiraberg, GA 16118-7609', 'Repudiandae eveniet earum aspernatur quam reprehenderit sequi molestias.', 14, 5, 27, NULL, NULL),
(31, '2026-02-25 04:26:09', '22488 Emmitt Fields Apt. 826\nMoisesville, MN 22906-9061', 'A excepturi tempora dignissimos sed voluptatem voluptas sit odio.', 8, 8, 22, NULL, NULL),
(32, '2025-06-23 14:51:12', '109 McCullough Divide Apt. 414\nNew Alberthafurt, OK 94454-5727', 'Autem non doloremque dolorem exercitationem quia ut voluptatem modi quia.', 5, 9, 25, NULL, NULL),
(33, '2025-08-14 19:40:49', '67586 Burnice Street\nLurlineport, SD 29572-0858', 'Deserunt totam et culpa qui modi accusamus quo sed aliquid facere ad tenetur magni veritatis.', 16, 2, 10, NULL, NULL),
(34, '2025-05-25 14:41:55', '269 Marques Glens Suite 550\nHyattberg, IN 86600-2378', 'Vitae est magni dignissimos repellat illum quo doloribus ipsam aut illum consequuntur dolor aliquid est eum.', 11, 3, 21, NULL, NULL),
(35, '2026-04-09 14:28:01', '6036 Luettgen Branch Apt. 778\nDamonshire, LA 09675-3838', 'Ea tempore est dolores et beatae nam nesciunt.', 19, 3, 21, NULL, NULL),
(36, '2026-03-21 14:42:54', '1169 Haven Court Suite 161\nWest Hillary, NE 24553', 'Quibusdam nihil quae consequatur illo minus autem omnis ut.', 3, 4, 23, NULL, NULL),
(37, '2025-10-27 17:11:47', '227 Douglas Ports Apt. 191\nSouth Jakob, MO 00759', 'Et necessitatibus consectetur beatae ea tempora qui necessitatibus dolorem fugiat.', 6, 5, 27, NULL, NULL),
(38, '2026-04-16 06:59:06', '42332 Howe Creek Suite 145\nBuckridgehaven, DC 71829', 'Aut explicabo rerum delectus nam et nisi minima iusto adipisci voluptates explicabo reiciendis.', 17, 10, 26, NULL, NULL),
(39, '2026-02-14 01:01:09', '71177 Christelle Cove\nSouth Devynview, VA 72588', 'Ratione aliquam et qui et quidem accusamus architecto sit inventore omnis aut.', 8, 1, 28, NULL, NULL),
(40, '2026-03-10 11:21:28', '751 Hayes Radial Suite 814\nSouth Flavioland, PA 84659', 'Dignissimos quia quia quaerat totam facilis nihil eum placeat.', 3, 9, 25, NULL, NULL),
(41, '2026-01-09 17:44:12', '158 Erik Parkway\nWest Eileen, DE 42092-0021', 'Et non a minima labore nobis nesciunt laborum sit.', 24, 2, 10, NULL, NULL),
(42, '2025-09-28 21:48:58', '566 Wilkinson Plain Suite 507\nDavisbury, FL 84941-7586', 'Voluptas repellat facere sunt ut quibusdam ad rerum commodi aut et consequatur repudiandae harum rerum.', 24, 6, 24, NULL, NULL),
(43, '2026-05-04 19:08:18', '4320 Rogahn Roads\nEast Olinland, VA 36515-0079', 'Fugit aut sint qui autem non quae enim sed ipsa.', 10, 10, 26, NULL, NULL),
(44, '2026-02-17 14:49:39', '5942 Abby Loaf Apt. 235\nSarahborough, MS 36464-6471', 'Impedit recusandae aut nobis quod at vel est cum id maxime dicta beatae deleniti id explicabo.', 22, 5, 27, NULL, NULL),
(45, '2026-03-03 07:56:44', '92479 Huel Track\nLake Nathanael, ME 71258-6682', 'Id iure eum tempora veritatis possimus consequatur rem ut accusamus in minus reprehenderit qui.', 27, 1, 28, NULL, NULL),
(46, '2025-08-10 17:46:50', '70472 Curtis Island\nStarkberg, VA 34680', 'Nostrum possimus quos impedit accusantium eos dolor ullam repellendus laboriosam beatae sit magni.', 24, 1, 28, NULL, NULL),
(47, '2025-08-17 15:00:01', '395 Keebler Mission\nNew Kelli, AK 02537', 'Sit voluptatem voluptatibus et ut corrupti consequatur sed sunt laboriosam provident nihil aut magnam.', 13, 5, 27, NULL, NULL),
(48, '2025-11-10 12:02:17', '69212 Schulist Ports\nAbagailside, UT 40410-9857', 'Laboriosam vel aut rerum perferendis aliquid ut consequuntur perferendis id iste quo atque aperiam et provident.', 17, 6, 24, NULL, NULL),
(49, '2026-01-24 17:02:39', '6592 Ettie Ford\nNew Marcia, OH 69458-3137', 'Iure et sunt nobis minus aperiam rerum qui nam aspernatur alias voluptatibus occaecati ad adipisci beatae.', 4, 3, 21, NULL, NULL),
(50, '2026-02-10 08:06:42', '77155 Gutkowski Ville Apt. 237\nNew Lou, AZ 38155', 'Quisquam aut omnis quis cupiditate illo quod totam voluptas voluptas deleniti.', 16, 10, 26, NULL, NULL);

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
('TAn6gg4uZrbbiS2JtgIDkmH1qkDLWwv0bcQ8sbXv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 Edg/148.0.0.0', 'eyJfdG9rZW4iOiJLRTlWYU9vWHluMDBwaW5MUG0yZDVKZ0Z5aWdDdWxHS0NRdGIyZkNSIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL3Byb2pldGNhc2VybmUudGVzdFwvdHlwZVZlaGljbGVzIiwicm91dGUiOiJ0eXBlVmVoaWNsZS5pbmRleCJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1778853844);

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
(1, 'Active', NULL, NULL),
(2, 'Inactive', NULL, NULL),
(3, 'Under Maintenance', NULL, NULL),
(4, 'Closed', NULL, NULL);

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
(1, 'VEH-183', 'ABC-930', '2003', 'MAN', 'pariatur', 3, 9, NULL, NULL),
(2, 'VEH-395', 'ABC-792', '1980', 'Renault', 'qui', 12, 3, NULL, NULL),
(3, 'VEH-930', 'ABC-677', '2004', 'Iveco', 'numquam', 2, 3, NULL, NULL),
(4, 'VEH-208', 'ABC-737', '2004', 'Mercedes', 'eius', 11, 2, NULL, NULL),
(5, 'VEH-937', 'ABC-321', '2016', 'Iveco', 'repellendus', 10, 5, NULL, NULL),
(6, 'VEH-050', 'ABC-108', '1993', 'Renault', 'sit', 2, 6, NULL, NULL),
(7, 'VEH-290', 'ABC-155', '1979', 'Renault', 'dolorem', 3, 3, NULL, NULL),
(8, 'VEH-573', 'ABC-253', '1990', 'Renault', 'est', 11, 7, NULL, NULL),
(9, 'VEH-340', 'ABC-946', '2003', 'Iveco', 'quia', 10, 5, NULL, NULL),
(10, 'VEH-561', 'ABC-161', '1990', 'MAN', 'et', 8, 2, NULL, NULL),
(11, 'VEH-002', 'ABC-503', '2012', 'MAN', 'repudiandae', 12, 10, NULL, NULL),
(12, 'VEH-595', 'ABC-848', '2019', 'Iveco', 'ut', 7, 6, NULL, NULL),
(13, 'VEH-999', 'ABC-275', '1976', 'Renault', 'at', 5, 6, NULL, NULL),
(14, 'VEH-818', 'ABC-131', '1986', 'Iveco', 'enim', 11, 5, NULL, NULL),
(15, 'VEH-154', 'ABC-895', '2003', 'Iveco', 'cumque', 14, 3, NULL, NULL),
(16, 'VEH-816', 'ABC-080', '1986', 'Iveco', 'commodi', 12, 10, NULL, NULL),
(17, 'VEH-832', 'ABC-822', '2013', 'Renault', 'perferendis', 12, 4, NULL, NULL),
(18, 'VEH-127', 'ABC-533', '1996', 'Renault', 'non', 10, 5, NULL, NULL),
(19, 'VEH-207', 'ABC-183', '1975', 'Iveco', 'porro', 3, 7, NULL, NULL),
(20, 'VEH-025', 'ABC-549', '1998', 'MAN', 'et', 12, 5, NULL, NULL);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
