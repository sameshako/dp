-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2021 at 05:46 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imobix`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_int` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `key`, `key_int`, `created_at`, `updated_at`, `deleted_at`) VALUES
(41, 'Nr. balcoane', 'balconies', NULL, '2020-12-13 12:14:07', '2020-12-13 12:14:07', NULL),
(42, 'Nr. bai', 'bathrooms', NULL, '2020-12-13 12:15:00', '2020-12-13 12:15:32', NULL),
(43, 'Dormitoare', 'bedrooms', NULL, '2020-12-13 12:16:18', '2020-12-13 12:16:18', NULL),
(44, 'Anul constructiei', 'building_construction_year', NULL, '2020-12-13 12:17:37', '2020-12-13 12:17:37', NULL),
(45, 'Nr. et. clădire', 'building_floors', NULL, '2020-12-13 12:18:41', '2020-12-13 12:18:41', NULL),
(46, 'Nr. et. retrase', 'building_retired_floors', NULL, '2020-12-13 12:19:14', '2020-12-13 12:19:14', NULL),
(49, 'Nr. subsoluri', 'building_underground_floors', NULL, '2020-12-13 12:21:06', '2020-12-13 12:21:06', NULL),
(50, 'Localitate', 'city', NULL, '2020-12-13 12:22:26', '2020-12-13 12:22:26', NULL),
(51, 'Confort', 'comfort', NULL, '2020-12-13 12:23:33', '2020-12-13 12:23:33', NULL),
(52, 'Stadiu construcție', 'construction_status', NULL, '2020-12-13 12:25:46', '2020-12-13 12:25:46', NULL),
(55, 'Adăugată la', 'date_added', NULL, '2020-12-13 12:29:42', '2020-12-13 12:29:42', NULL),
(57, 'Disponibilitate', 'disponibility', NULL, '2020-12-13 12:34:39', '2020-12-13 12:34:39', NULL),
(58, 'Destinație', 'destination', NULL, '2020-12-13 12:34:53', '2020-12-13 12:34:53', NULL),
(59, 'Indice emisii echivalent CO2 (kg)', 'emission_index', NULL, '2020-12-13 12:36:05', '2020-12-13 12:36:05', NULL),
(60, 'Clasă Energetică', 'energy_class', NULL, '2020-12-13 12:36:37', '2020-12-13 12:36:37', NULL),
(61, 'Intermediere exclusivă', 'exclusive_rent', NULL, '2020-12-13 12:39:05', '2020-12-13 12:39:05', NULL),
(63, 'Reprezentare exclusivă', 'exclusive_representation_rent', NULL, '2020-12-13 12:40:05', '2020-12-13 12:40:05', NULL),
(64, 'Etaje', 'floor', NULL, '2020-12-13 12:43:41', '2020-12-13 12:43:41', NULL),
(67, 'Nr. garaje', 'garages', NULL, '2020-12-13 15:40:11', '2020-12-13 15:40:11', NULL),
(68, 'Garanție', 'guarantee_cost', NULL, '2020-12-13 15:40:49', '2020-12-13 15:40:49', NULL),
(70, 'Geam la baie', 'has_bathroom_window', NULL, '2020-12-13 15:45:50', '2020-12-13 15:45:50', NULL),
(71, 'Are mansardă', 'has_mansard', NULL, '2020-12-13 15:46:21', '2020-12-13 15:46:21', NULL),
(72, 'Are demisol', 'has_semibasement', NULL, '2020-12-13 15:46:50', '2020-12-13 15:46:50', NULL),
(75, 'Nr. bucătării', 'kitchens', NULL, '2020-12-13 15:49:26', '2020-12-13 15:49:26', NULL),
(76, 'Reper', 'landmark', NULL, '2020-12-13 15:50:23', '2020-12-13 15:50:23', NULL),
(77, 'Valoare întreținere medie', 'maintenance_cost', NULL, '2020-12-13 15:51:35', '2020-12-13 15:51:35', NULL),
(82, 'Orientare', 'orientation', NULL, '2020-12-13 15:56:23', '2020-12-13 15:56:23', NULL),
(83, 'Nr. locuri parcare', 'parking_spots', NULL, '2020-12-13 15:57:20', '2020-12-13 15:57:20', NULL),
(84, 'Compart.', 'partitioning', NULL, '2020-12-13 15:58:59', '2020-12-13 15:58:59', NULL),
(85, 'Anul finisării', 'polish_year', NULL, '2020-12-13 15:59:28', '2020-12-13 15:59:28', NULL),
(86, 'Preț chirie/lună', 'price_rent', NULL, '2020-12-13 16:00:16', '2020-12-13 16:00:16', NULL),
(88, 'Preț chirie mp/lună', 'price_sqm_rent', NULL, '2020-12-13 16:01:29', '2020-12-13 16:01:29', NULL),
(89, 'Preț vânzare/mp', 'price_sqm_sale', NULL, '2020-12-13 16:01:50', '2020-12-13 16:01:50', NULL),
(92, 'Promovează locația exactă a proprietății', 'promote_exact_location', NULL, '2020-12-13 16:03:30', '2020-12-13 16:03:30', NULL),
(94, 'Județ', 'region', NULL, '2020-12-13 16:05:05', '2020-12-13 16:05:05', NULL),
(95, 'Consum total din surse regenerabile (kWh)', 'renewable_sources_consumption', NULL, '2020-12-13 16:05:32', '2020-12-13 16:05:32', NULL),
(96, 'Ansamblu rezidențial', 'residential_complex', NULL, '2020-12-13 16:06:22', '2020-12-13 16:06:22', NULL),
(98, 'Nr. camere', 'rooms', NULL, '2020-12-13 16:07:37', '2020-12-13 16:07:37', NULL),
(99, 'Nr. camere', 'rooms', NULL, '2020-12-13 16:07:38', '2020-12-13 16:07:38', NULL),
(100, 'Stradă', 'street', NULL, '2020-12-13 16:08:13', '2020-12-13 16:08:13', NULL),
(101, 'S. balcoane (mp)', 'surface_balconies', NULL, '2020-12-13 16:08:57', '2020-12-13 16:08:57', NULL),
(102, 'S. construită (mp)', 'surface_built', NULL, '2020-12-13 16:09:21', '2020-12-13 16:09:21', NULL),
(103, 'S. terasă (mp)', 'surface_terrace', NULL, '2020-12-13 16:10:17', '2020-12-13 16:10:17', NULL),
(104, 'S. totală (mp)', 'surface_total', NULL, '2020-12-13 16:10:34', '2020-12-13 16:10:34', NULL),
(105, 'S. utilă (mp)', 'surface_useable', NULL, '2020-12-13 16:10:59', '2020-12-13 16:10:59', NULL),
(106, 'S. curte (mp)', 'surface_yard', NULL, '2020-12-13 16:11:18', '2020-12-13 16:11:18', NULL),
(107, 'Nr. terase', 'terraces', NULL, '2020-12-13 16:13:36', '2020-12-13 16:13:36', NULL),
(108, 'Consum total de energie primară (kWh)', 'total_energy_consumption', NULL, '2020-12-13 16:18:54', '2020-12-13 16:18:54', NULL),
(109, 'Avans', 'upfront_cost', NULL, '2020-12-13 16:19:26', '2020-12-13 16:19:26', NULL),
(112, 'Link video', 'video_link', NULL, '2020-12-13 16:20:49', '2020-12-13 16:20:49', NULL),
(113, 'Link tur virtual', 'virtual_tour_link', NULL, '2020-12-13 16:21:07', '2020-12-13 16:21:07', NULL),
(116, 'Zonă', 'zone', NULL, '2020-12-13 16:23:25', '2020-12-13 16:23:25', NULL),
(138, 'Suprafață minimă (mp)', 'surface_office_minimum', NULL, '2020-12-13 17:18:50', '2020-12-13 17:18:50', NULL),
(139, 'Suprafață maximă (mp)', 'surface_office_available', NULL, '2020-12-13 17:19:14', '2020-12-13 17:19:14', NULL),
(140, 'Clasă birouri', 'office_class', NULL, '2020-12-13 17:20:53', '2020-12-13 17:20:53', NULL),
(141, 'Rata de ocupare (%)', 'office_occupy_rate', NULL, '2020-12-13 17:21:22', '2020-12-13 17:21:22', NULL),
(142, 'Compartimentare', 'office_partitioning', NULL, '2020-12-13 17:21:45', '2020-12-13 17:21:45', NULL),
(143, 'Parcări suprafață', 'parking_overtheground', NULL, '2020-12-13 17:24:21', '2020-12-13 17:24:21', NULL),
(144, 'Cost / parcare suprafață', 'parking_overtheground_cost', NULL, '2020-12-13 17:24:46', '2020-12-13 17:24:46', NULL),
(145, 'Parcări subterane', 'parking_underground', NULL, '2020-12-13 17:25:10', '2020-12-13 17:25:10', NULL),
(146, 'Cost / parcare subterană', 'parking_underground_cost', NULL, '2020-12-13 17:25:34', '2020-12-13 17:25:34', NULL),
(147, 'S. totală birouri (mp)', 'surface_office', NULL, '2020-12-13 17:29:49', '2020-12-13 17:29:49', NULL),
(149, 'Reprezentare exclusivă', 'exclusive_representation_sale', NULL, '2020-12-13 17:48:41', '2020-12-13 17:48:41', NULL),
(150, 'Intermediere exclusivă', 'exclusive_sale', NULL, '2020-12-13 17:49:12', '2020-12-13 17:49:12', NULL),
(151, 'Etaje', 'floor_multi', NULL, '2020-12-13 17:49:57', '2020-12-13 17:49:57', NULL),
(152, 'Agent', 'agent', NULL, '2020-12-13 17:50:37', '2020-12-13 17:50:37', NULL),
(155, 'Front stradal (m)', 'street_opening_length', NULL, '2020-12-13 17:55:41', '2020-12-13 17:55:41', NULL),
(156, 'Are subsol', 'has_basement', NULL, '2020-12-13 17:57:02', '2020-12-13 17:57:02', NULL),
(157, 'Înălțime interioară', 'interior_height', NULL, '2020-12-13 17:57:31', '2020-12-13 17:57:31', NULL),
(160, 'Nr. vestiare', 'lockers', NULL, '2020-12-13 18:04:10', '2020-12-13 18:04:10', NULL),
(161, 'S. producție (mp)', 'surface_production', NULL, '2020-12-13 18:05:34', '2020-12-13 18:05:34', NULL),
(162, 'S. teren (mp)', 'surface_land', NULL, '2020-12-13 18:06:38', '2020-12-13 18:06:38', NULL),
(163, 'S. depozitare (mp)', 'surface_storage', NULL, '2020-12-13 18:07:48', '2020-12-13 18:07:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `propertie_types` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `propertie_types`, `title`, `slug`, `image`, `body`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 1, 'asdsa', 'asdsa', 'photos/dGd1MvsCOWmaZzY7ItW989MVNrUVHiUx6ZfrEBZI.png', 'fgdgsgds', '1', '2021-01-26 10:12:44', '2021-01-26 10:12:44'),
(4, 2, 1, 'dfsfds', 'dfsfds', 'photos/JkQ8ytPcw3QOpaz7wRK8qRwmC1DVEEbWCZAYPHNX.png', 'dfsfsd', '1', '2021-01-26 10:14:27', '2021-01-26 10:14:27'),
(5, 2, 3, 'asa', 'asa', 'photos/Ia3SiGAjrE6TOhlbnC1UajSfR6W4aclqtDVmy7Ku.png', 'descriere', '0', '2021-01-26 10:20:24', '2021-01-26 10:20:24'),
(6, 2, 2, 'titlue mare', 'titlue-mare', 'photos/GXo1f4BWr8kmysiX2I4uwOGy0TQfFQlvfSgQX8qU.png', 'asa e', '1', '2021-01-26 10:31:34', '2021-01-26 10:31:34'),
(7, 1, 2, 'sasdsad dasfddads', 'sasdsad-dasfddads', 'photos/yxM1pCck9BJtQtMhfBwRjHquxbJ3wrQ3BULn7rdb.png', '<p>gdfdsfdsfsdtest</p>', '1', '2021-01-26 10:36:08', '2021-01-27 14:41:27'),
(8, 2, 2, 'dadsadsa dasdsadas', 'dadsadsa-dasdsadas', 'photos/4hJx3bYNBzhC38RUar65MpCTjpqheIkX07fz09rj.png', 'dasdsas', '1', '2021-01-26 10:44:42', '2021-01-26 10:44:42'),
(9, 1, 2, 'sadsadsa', 'sadsadsa', 'photos/iAtJ055GQb8cQXMAD5GyqiCDRx4VJaIIhJoRBVQo.png', 'fsdfdsfds', '1', '2021-01-26 10:47:16', '2021-01-26 10:47:16'),
(10, 1, 5, 'sadsada', 'sadsada', 'photos/16vUCmqEYwL4bgn6UwhdUNlZuxWDgku6b6h3j88e.png', '<p><strong>eee</strong>exact</p>', '1', '2021-01-26 12:07:21', '2021-01-26 12:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `user_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'categoria unu', NULL, NULL),
(2, 1, 'heavy weigth', NULL, NULL),
(3, 1, 'categorietrei', '2021-01-27 15:45:35', '2021-01-27 15:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(2, NULL, 1, 'Category 2', 'category-2', '2020-12-12 18:50:38', '2020-12-12 18:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 6),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 7),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 9),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 10),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 13),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 15),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 16),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 17),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 14),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'key', 'text', 'Key', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(60, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(61, 7, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 1, 1, 1, 1, '{}', 6),
(62, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(63, 8, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(64, 8, 'key', 'text', 'Key', 0, 1, 1, 1, 1, 1, '{}', 3),
(65, 8, 'key_int', 'text', 'Key Int', 0, 1, 1, 1, 1, 1, '{}', 4),
(66, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(67, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(68, 8, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 1, 1, 1, 1, '{}', 7),
(69, 7, 'key_int', 'text', 'Key Int', 0, 1, 1, 1, 1, 1, '{}', 7),
(70, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 11),
(71, 1, 'first_name', 'text', 'First Name', 0, 1, 1, 1, 1, 1, '{}', 3),
(72, 1, 'last_name', 'text', 'Last Name', 0, 1, 1, 1, 1, 1, '{}', 4),
(73, 1, 'county', 'text', 'County', 0, 1, 1, 1, 1, 1, '{}', 18),
(74, 1, 'city', 'text', 'City', 0, 1, 1, 1, 1, 1, '{}', 19),
(75, 1, 'address', 'text', 'Address', 0, 1, 1, 1, 1, 1, '{}', 8),
(76, 1, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 5);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-12-12 18:50:36', '2020-12-15 17:33:02'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-12-12 18:50:36', '2020-12-12 18:50:36'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-12-12 18:50:36', '2020-12-12 18:50:36'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(7, 'propertie_types', 'propertie-types', 'Propertie Type', 'Propertie Types', NULL, 'App\\PropertieType', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-12-13 11:06:46', '2020-12-13 11:18:13'),
(8, 'attributes', 'attributes', 'Attribute', 'Attributes', NULL, 'App\\Attribute', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-12-13 11:14:28', '2020-12-13 11:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-12-12 18:50:36', '2020-12-12 18:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-12-12 18:50:36', '2020-12-12 18:50:36', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2020-12-12 18:50:36', '2020-12-12 18:50:36', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-12-12 18:50:36', '2020-12-12 18:50:36', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-12-12 18:50:36', '2020-12-12 18:50:36', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2020-12-12 18:50:37', '2020-12-12 18:50:37', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2020-12-12 18:50:37', '2020-12-12 18:50:37', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2020-12-12 18:50:37', '2020-12-12 18:50:37', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2020-12-12 18:50:37', '2020-12-12 18:50:37', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2020-12-12 18:50:37', '2020-12-12 18:50:37', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2020-12-12 18:50:37', '2020-12-12 18:50:37', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2020-12-12 18:50:38', '2020-12-12 18:50:38', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2020-12-12 18:50:38', '2020-12-12 18:50:38', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2020-12-12 18:50:38', '2020-12-12 18:50:38', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2020-12-12 18:50:38', '2020-12-12 18:50:38', 'voyager.hooks', NULL),
(15, 1, 'Propertie Types', '', '_self', NULL, NULL, NULL, 15, '2020-12-13 11:06:46', '2020-12-13 11:06:46', 'voyager.propertie-types.index', NULL),
(16, 1, 'Attributes', '', '_self', NULL, NULL, NULL, 16, '2020-12-13 11:14:28', '2020-12-13 11:14:28', 'voyager.attributes.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(29, '2021_01_26_090306_create_blogs_table', 3),
(30, '2021_01_27_165411_create_blog_categories_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-12-12 18:50:38', '2020-12-12 18:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(2, 'browse_bread', NULL, '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(3, 'browse_database', NULL, '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(4, 'browse_media', NULL, '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(5, 'browse_compass', NULL, '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(6, 'browse_menus', 'menus', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(7, 'read_menus', 'menus', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(8, 'edit_menus', 'menus', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(9, 'add_menus', 'menus', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(10, 'delete_menus', 'menus', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(11, 'browse_roles', 'roles', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(12, 'read_roles', 'roles', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(13, 'edit_roles', 'roles', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(14, 'add_roles', 'roles', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(15, 'delete_roles', 'roles', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(16, 'browse_users', 'users', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(17, 'read_users', 'users', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(18, 'edit_users', 'users', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(19, 'add_users', 'users', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(20, 'delete_users', 'users', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(21, 'browse_settings', 'settings', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(22, 'read_settings', 'settings', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(23, 'edit_settings', 'settings', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(24, 'add_settings', 'settings', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(25, 'delete_settings', 'settings', '2020-12-12 18:50:37', '2020-12-12 18:50:37'),
(26, 'browse_categories', 'categories', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(27, 'read_categories', 'categories', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(28, 'edit_categories', 'categories', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(29, 'add_categories', 'categories', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(30, 'delete_categories', 'categories', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(31, 'browse_posts', 'posts', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(32, 'read_posts', 'posts', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(33, 'edit_posts', 'posts', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(34, 'add_posts', 'posts', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(35, 'delete_posts', 'posts', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(36, 'browse_pages', 'pages', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(37, 'read_pages', 'pages', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(38, 'edit_pages', 'pages', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(39, 'add_pages', 'pages', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(40, 'delete_pages', 'pages', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(41, 'browse_hooks', NULL, '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(42, 'browse_propertie_types', 'propertie_types', '2020-12-13 11:06:46', '2020-12-13 11:06:46'),
(43, 'read_propertie_types', 'propertie_types', '2020-12-13 11:06:46', '2020-12-13 11:06:46'),
(44, 'edit_propertie_types', 'propertie_types', '2020-12-13 11:06:46', '2020-12-13 11:06:46'),
(45, 'add_propertie_types', 'propertie_types', '2020-12-13 11:06:46', '2020-12-13 11:06:46'),
(46, 'delete_propertie_types', 'propertie_types', '2020-12-13 11:06:46', '2020-12-13 11:06:46'),
(47, 'browse_attributes', 'attributes', '2020-12-13 11:14:28', '2020-12-13 11:14:28'),
(48, 'read_attributes', 'attributes', '2020-12-13 11:14:28', '2020-12-13 11:14:28'),
(49, 'edit_attributes', 'attributes', '2020-12-13 11:14:28', '2020-12-13 11:14:28'),
(50, 'add_attributes', 'attributes', '2020-12-13 11:14:28', '2020-12-13 11:14:28'),
(51, 'delete_attributes', 'attributes', '2020-12-13 11:14:28', '2020-12-13 11:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-12-12 18:50:38', '2020-12-12 18:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `judet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localitate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apartament` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nr_strada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `transaction_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `judet`, `localitate`, `strada`, `apartament`, `nr_strada`, `lat`, `long`, `type`, `pret`, `created_at`, `updated_at`, `deleted_at`, `title`, `description`, `transaction_type`, `slug`, `images`, `user_id`) VALUES
(1096399, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '2020-12-29 15:48:34', '2021-01-10 09:18:19', NULL, 'basasdadsa', 'b', 'b', 'ansamblu-duplex-primaverii-comision-0', '[\"16092641131422763519.jpg\",\"16092641131847047437.jpg\",\"1609264113571455395.jpg\",\"16092641131118457777.jpg\",\"1609264114891920471.jpg\",\"1609264114708037945.jpg\"]', 2),
(1096772, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.025594780766', '23.269786425054', '5', '20000', '2020-12-29 15:48:32', '2020-12-29 15:48:32', NULL, 'Afacere la cheie, Magazin alimentar', 'Va propunem spre vanzare  afacere la cheie, magazin alimentar dispunand de echipamentele aferente rafturi, echipamente frigorific ,spatiul este  situat in Targu-Jiu 9 Mai avand un vad foarte bun.\r\nFiind o  investitie excelenta pentru o afacere de familie sau pentru extinderea unei afaceri deja existente cu o noua locatie.\r\nSpatiul este construit pe un teren inchiriat de la Primaria Municipiului Tg-Jiu.\r\n\r\nPret 20.000 lei.', '1', 'afacere-la-cheie-magazin-alimentar', '[\"16092641101606249431.jpg\",\"16092641101441505919.jpg\",\"1609264111999480983.jpg\",\"1609264111666628453.jpg\",\"16092641111932064512.jpg\",\"16092641122135596595.jpg\",\"1609264112212176908.jpg\"]', 1),
(1096795, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.038418869809', '23.274291823142', '1', '160000', '2020-12-29 15:48:29', '2020-12-29 15:48:29', NULL, 'Apartament ultracentral, 99 mp, etajul 2', 'Vă propunem spre vânzare apartament cu 4 camere transformat în 2, ultracentral, situat in  municipiul Tg-Jiu, strada Victoria-Centru, etajul 2, zona pietonala, avand o suprafata utilă de 99 mp, cu  vedere bilaterală, una dintre ele spre Calea Eroilor, beneficiind de două balcoane.\r\nImobilul a fost renovat cu materiale de calitate superioară și dispune multiple dotări și finisaje premium: gresie, faianță, parchet, centrală termică, aer condiționat, ușă metalică antiefracție la intrare, tâmplărie pvc cu geam termopan, izolație exterioară, sistem de alarmă cu senzori de efractie pe toate zonele exterioare, hotă cu TV încorporat, cabină de duș și cadă cu TV încorporat.\r\nIn proximitatea imobilului regăsim licee și școli de renume, supermarket-uri, piata si parcul central, la scara blocului beneficiem de locul de promenadă al orașului.\r\nApartamentul se vinde complet utilat si mobilat.\r\n\r\nPreț 160.000 euro negociabil.', '1', 'apartament-ultracentral-99-mp-etajul-2', '[\"16092641051746905317.jpg\",\"16092641051604359522.jpg\",\"16092641061635863467.jpg\",\"16092641061068354442.jpg\",\"16092641061396581852.jpg\",\"1609264107575863291.jpg\",\"16092641071121370374.jpg\",\"16092641071349347298.jpg\",\"16092641081830420386.jpg\",\"1609264108175637902.jpg\",\"1609264108862466558.jpg\",\"16092641091656159795.jpg\",\"1609264109894373790.jpg\",\"16092641092046656923.jpg\"]', 1),
(1097295, 'Gorj', 'Schela', '', NULL, NULL, '44.947283013775', '23.195400063653', '6', '15900', '2020-12-29 15:48:24', '2020-12-29 15:48:24', NULL, 'Teren intravilan 3969 mp, Comuna Schela', 'Va propunem spre vanzare teren intravilan situat in comuna Schela, sat Schela cu o suprafata de 3969 mp si o deschidere de 21,95 ml la strada principala avand o vedere deosebita spre Pasul Vulcan.\r\n\r\nUtilitati: curent, apa curenta, asfalt.\r\n\r\nPret 4 euro/mp negociabil', '1', 'teren-intravilan-3969-mp-comuna-schela', '[\"16092641022002680077.jpg\",\"1609264103211110142.jpg\",\"1609264103217246049.jpg\",\"1609264104996851547.jpg\",\"16092641041196596418.jpg\",\"16092641041623295233.jpg\"]', 1),
(1097330, 'Gorj', 'Balanesti', '', NULL, NULL, '45.077261136528', '23.43167664811', '6', '24000', '2020-12-29 15:48:22', '2020-12-29 15:48:22', NULL, 'Teren Extravilan Livada, Balanesti', 'Va propunemspre vanzare teren extravilan-livada situat în localitatea Bălănești, compus din 4 parcele a cate 400 mp fiecare.\r\n\r\nPret 15 Euro/mp negociabil.', '1', 'teren-extravilan-livada-balanesti', '[\"1609264100923133057.jpg\",\"16092641011848651491.jpg\",\"1609264101435874706.jpg\",\"16092641022059985916.jpg\"]', 1),
(1097442, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.037220260814', '23.275080289798', '1', '280', '2020-12-29 15:48:20', '2020-12-29 15:48:20', NULL, 'Apartament 3 camere, zona Ambasador', 'Va propunem spre inchiriere un apartament cu 3 camere, decomandat, etajul 2, situat in Municipiul Targu-Jiu, strada Victoriei, zona centrala.\r\n    Apartamentul a fost renovat recent si dispune de: gresie, faianta, parchet, tamplarie  pvc cu geam termopan, centrala termica, balcon inchis.\r\n    Suprafata utila este de 79 mp, apartamentul este compartimentat astfel :  hol, sufragerie, doua dormitoare, bucatarie spatioasa, baie.\r\nImobilul se inchiriaza complet mobilat si utilat.\r\n\r\nPret 280 Euro.', '2', 'apartament-3-camere-zona-ambasador', '[\"160926409789979502.jpg\",\"16092640971244861928.jpg\",\"1609264098446062931.jpg\",\"16092640981838591104.jpg\",\"1609264098322633506.jpg\",\"16092640991773786195.jpg\",\"16092640991079173079.jpg\",\"16092640991506560366.jpg\",\"16092641001472827290.jpg\"]', 1),
(1097526, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.029947044902', '23.269052836229', '5', '850', '2020-12-29 15:48:16', '2020-12-29 15:48:16', NULL, 'Spatiu pretabil cabinete medialce, saloane infrumusetare', 'Vă oferim spre închiriere spațiu comercial situat în Municipiul Târgu-Jiu, strada Mihail Sadoveanu, cu o suprafață de 160 mp utili, parter și etaj,  pretabil pentru diferite tipuri de activități comerciale și de birouri, precum saloane de înfrumusețare, csbinete medicale, sedii de firmă, etc.\r\n\r\nPreț 850 de Euro / lună negociabil.', '2', 'spatiu-pretabil-cabinete-medialce-saloane-infrumusetare', '[\"1609264093492484676.jpg\",\"16092640942114373900.jpg\",\"160926409483050031.jpg\",\"16092640941549637444.jpg\",\"1609264094728487162.jpg\",\"1609264095221468489.jpg\",\"1609264095677440245.jpg\",\"16092640952041842560.jpg\",\"1609264096198029144.jpg\",\"1609264096323442142.jpg\",\"16092640961396220153.jpg\"]', 1),
(1097534, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.0406415294', '23.272782398898', '5', '225', '2020-12-29 15:48:13', '2020-12-29 15:48:13', NULL, 'Spatiu comercial, parter,zona centrala', 'Vă propunem spre închiriere spațiu comercial situat în Municipiul Tg-Jiu, complex comercial Runcu, strada Grivița, cu o suprafata de 18 mp, grup sanitar propriu, pretabil pentru activități comerciale, de birouri, cabinete medicale, saloane de înfurmusețare, recent renovat.\r\n\r\nPreț 1.100 Lei.', '2', 'spatiu-comercial-parterzona-centrala', '[\"16092640921619124097.jpg\",\"1609264092709183146.jpg\",\"16092640921475464908.jpg\",\"16092640931375029962.jpg\",\"16092640931618308953.jpg\"]', 1),
(1097670, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.049846971825', '23.273581935224', '6', '33000', '2020-12-29 15:48:11', '2020-12-29 15:48:11', NULL, 'Teren Intravilan 300 mp, strada Bicaz', 'Vă oferim spre vânzare teren intravilan situat în Municipiul Târgu-Jiu, strada Vasile Cârlova, cartier Bicaz cu o suprafață de 300 mp, beneficiind de un front stradal de 13 ml, dispune de utilitățile zonei, pretabil pentru orice tip de construcție.\r\n\r\nPreț 110 Euro / mp negociabil.', '1', 'teren-intravilan-300-mp-strada-bicaz', '[\"16092640901180814814.jpg\",\"1609264090688996918.jpg\",\"160926409160090357.jpg\",\"16092640911340621672.jpg\",\"16092640911263577663.jpg\"]', 1),
(1098447, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.025219107928', '23.278817461514', '1', '14500', '2020-12-29 15:48:09', '2020-12-29 15:48:09', NULL, 'Garsoniera, etaj 3, Aleea Teilor Târgu-Jiu', 'Va propunem spre vanzare  garsoniera confort 2, situata in Municipiul Targu Jiu, str. Aleea Teilor.\r\nGarsoniera este situata la etajul 3, are o suprafata utila de 11.16 mp si este compusa din camera si grup sanitar.\r\nImbunatatirile de care dispune sunt: parchet, tocarie PVC cu geam termopan, contor apa, usa metalica la exterior.\r\nImprejurimile sunt linistite, iar in apropiere se gasesc gradinite, scoli, magazine, farmacii.\r\n\r\nPret: 14.500 euro negociabil.', '1', 'garsoniera-etaj-3-aleea-teilor-targu-jiu', '[\"16092640881857716084.jpg\",\"1609264088471000709.jpg\",\"16092640891191504058.jpg\",\"1609264089352751188.jpg\"]', 1),
(1098583, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.027745725488', '23.262890144437', '1', '55000', '2020-12-29 15:48:07', '2020-12-29 15:48:07', NULL, 'Apartament 2 camere, strada 9 Mai', 'Vă propunem spre vânzare apartament 2 camere, etajul 4, decomandat, cu o surafata utila de 46 mp, situat în Municipiul Târgu-Jiu, str. 9 Mai, zona Mall.\r\nApartamentul a fost renovat iar bucataria a fost mutata pe balcon, imobilul dispune de gresie, faianță, centrală termică, aer conditionat, izolat termic exterior, parchet, uși interioare schimbate, ușă metalică la intrare, tâmplărie pvc cu geam termopan, loc de parcare.\r\nÎn vecinatate se află supermarket-uri, școli, grădinițe, piata, etc.\r\n\r\nPreț 55000 euro, usor negociabil.', '1', 'apartament-2-camere-strada-9-mai', '[\"1609264085570165862.jpg\",\"16092640851379243041.jpg\",\"16092640851561069475.jpg\",\"16092640861139947087.jpg\",\"1609264086947458343.jpg\",\"1609264086485401177.jpg\",\"16092640871743932196.jpg\",\"160926408766037597.jpg\",\"1609264087128707849.jpg\"]', 1),
(1099489, 'Gorj', 'Scoarta', '', NULL, NULL, '45.014897859589', '23.401983464538', '6', '12600', '2020-12-29 15:48:04', '2020-12-29 15:48:04', NULL, 'Teren Scoarta, Sat Budieni', 'Va propunem spre vanzare teren in comuna Scoarta, sat Budieni in suprafata de 3150 mp cu deschidere 14.05ml la strada principala.\r\n\r\nUtilitatile zonei.\r\n\r\nPret 4 euro/mp negociabil.', '1', 'teren-scoarta-sat-budieni', '[\"1609264082203627992.jpg\",\"16092640821867512547.jpg\",\"160926408389637120.jpg\",\"1609264083731838841.jpg\",\"16092640841552772945.jpg\",\"16092640841280765000.jpg\"]', 1),
(1100005, 'Gorj', 'Curtisoara', '', NULL, NULL, '45.103667339052', '23.356267146584', '6', '17200', '2020-12-29 15:48:01', '2020-12-29 15:48:01', NULL, 'Teren Intravilan Curtisiara, Tg-Jiu', 'Va propunem spre vanzare teren intravilan situat in sat Curtisoara, la 12 km de Tg-Jiu in suprafata de 1654 mp avand o deschidere de 15,52 ml cu urmatoarele utilitati in curte: curent, apa, canalizare si gaze in fata terenului.\r\n\r\nTerenul este ideal pentru constructia unei case, pentru care exista un proiect ce expira in 2020 si o fundatie antiseismica cu camere de aer sub radier si beci de 2,20 h la subsol, este ingradit fiind traversat si de un parau.\r\n\r\nPret: 84.000 lei', '1', 'teren-intravilan-curtisiara-tg-jiu', '[\"1609264079219946627.jpg\",\"16092640791925274665.jpg\",\"16092640801323809915.jpg\",\"1609264080220640789.jpg\",\"16092640811656186243.jpg\",\"16092640812050115828.jpg\"]', 1),
(1100111, 'Gorj', 'Preajba Mare', '', NULL, NULL, '45.046061930433', '23.340144397608', '6', '30600', '2020-12-29 15:47:59', '2020-12-29 15:47:59', NULL, 'Teren 1700 mp, cartier Preajba', 'Va propunem spre vanzare teren extravilan in suprafata de aproximativ 1700 mp, cu o deschidere de 55 ml, pretabil constructie casa.\r\n\r\nPret 18 Euro/mp negociabil.', '1', 'teren-1700-mp-cartier-preajba', '[\"1609264077968230394.jpg\",\"1609264077198866183.jpg\",\"1609264078235054177.jpg\",\"1609264078652175928.jpg\",\"1609264078255511506.jpg\"]', 1),
(1101223, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.048588155086', '23.27576463141', '3', '130000', '2020-12-29 15:47:56', '2020-12-29 15:47:56', NULL, 'Casa si teren 700 mp, strada Vasile Alexandri', 'Va propunem spre vanzare casa in Municipiul Targu-Jiu, strada Vasile Alecsandri, in apropiere de stadionul Municipal Tudor Vladimirescu, Primaria Municipiului Targu-Jiu, Oficiul de Cadastru si publicitate imobiliara, etc.\r\nImobilul dispune de o suprafata de teren de 700  mp cu o deschidere de 14, 35 ml, fiind o casa construita din caramida, acoperita cu tabla si tigla cu o amprenta la sol de 177 mp compusa din 5 camere, hol, baie si bucatarie si anexe in suprafata de 138 mp.\r\n\r\nPret 130.000 euro negociabil.', '1', 'casa-si-teren-700-mp-strada-vasile-alexandri', '[\"16092640731693358316.jpg\",\"16092640731155687713.jpg\",\"16092640741713619685.jpg\",\"16092640742068254753.jpg\",\"16092640751163850439.jpg\",\"1609264075791279531.jpg\",\"1609264075302812640.jpg\",\"1609264076989105709.jpg\",\"1609264076402615476.jpg\"]', 1),
(1102524, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.030277054218', '23.279936318286', '3', '140000', '2020-12-29 15:47:52', '2020-12-29 15:47:52', NULL, 'Cabana Ranca', 'Vânzare cabană în stațiunea Rânca, la 30 de m de pârtia de ski M1, cu un teren aferent în suprafață de 180 mp din acte și din măsurători de 250 mp.\r\n\r\nCabana se vinde complet utilață și mobilată, dispunând de: 6 dormitoare, 4 băi, un living și o buctărie, cu o terasă acoperită și două terase neacoperite.\r\n\r\nConfortul termic este oferit de două centrale pe curent, una de 380 si a doua de 240, în plus față de acestea, imobilul dispune de sobe din teracotă pentru situații neprevăzute.', '1', 'cabana-ranca', '[\"16092640711360965586.jpg\",\"16092640711814242159.jpg\",\"16092640711901721341.jpg\",\"1609264072592004343.jpg\",\"16092640722145334446.jpg\"]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `propertie_attributes`
--

CREATE TABLE `propertie_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `propertie_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertie_attributes`
--

INSERT INTO `propertie_attributes` (`id`, `propertie_id`, `value`, `created_at`, `updated_at`, `deleted_at`, `type`) VALUES
(1, '1102524', '{\"Alte spa\\u021bii\":[\"Zon\\u0103 pentru barbeque\"],\"Amenajare str\\u0103zi\":[\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\",\"Str\\u0103zi asfaltate\"],\"Buc\\u0103t\\u0103rie\":[\"Buc\\u0103t\\u0103rie \\u00eenchis\\u0103\",\"Buc\\u0103t\\u0103rie utilat\\u0103\"],\"Contorizare\":[\"Contor electric\"],\"Dot\\u0103ri\":[\"Aragaz\",\"Cabin\\u0103 de du\\u0219\",\"Cad\\u0103\",\"Frigider\",\"TV\"],\"Dot\\u0103ri imobil\":[\"Acoperi\\u0219\"],\"Ferestre birouri\":[\"Ferestre care se deschid\"],\"IT&C\":[\"Internet\",\"Telefon\"],\"Izola\\u021bii termice\":[\"Izola\\u021bie exterioar\\u0103\"],\"Mobilat\":[\"Mobilat complet\"],\"Parcare\":[\"Parcare deschis\\u0103\"],\"Pere\\u021bi\":[\"Faian\\u021b\\u0103\",\"Vopsea lavabil\\u0103\"],\"Podele\":[\"Du\\u0219umea\"],\"Sistem \\u00eenc\\u0103lzire\":[\"Calorifere\",\"Central\\u0103 proprie\",\"Sob\\u0103 \\/ Teracot\\u0103\"],\"Utilit\\u0103\\u021bi generale\":[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\"],\"U\\u0219\\u0103 intrare\":[\"U\\u0219\\u0103 intrare lemn\"]}', '2020-12-29 15:47:50', '2020-12-29 15:47:50', NULL, 'tags'),
(2, '1102524', '{\"42\":4,\"43\":6,\"50\":\"Targu-Jiu\",\"55\":\"2020-12-29T12:03:48.528Z\",\"57\":\"Imediat\",\"71\":true,\"75\":1,\"83\":2,\"89\":1076.92,\"94\":\"Gorj\",\"98\":7,\"102\":140,\"105\":130,\"107\":2}', '2020-12-29 15:47:52', '2020-12-29 15:47:52', NULL, NULL),
(3, '1101223', '{\"Alte spa\\u021bii\":[\"Curte\",\"Pivni\\u021b\\u0103\"],\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"Arhitectur\\u0103\":[\"Gresie\",\"Parchet\"],\"Buc\\u0103t\\u0103rie\":[\"Mobilat\\u0103\",\"Utilat\\u0103\"],\"Dot\\u0103ri\":[\"Aragaz\",\"Cad\\u0103\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\",\"TV\"],\"Ferestre\":[\"PVC\"],\"IT&C\":[\"Internet\",\"Telefon\"],\"Mobilat\":[\"Complet\"],\"Pere\\u021bi\":[\"Faian\\u021b\\u0103\"],\"Sistem \\u00eenc\\u0103lzire\":[\"Calorifere\",\"Central\\u0103 proprie\"],\"Utilit\\u0103\\u021bi generale\":[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\"],\"U\\u0219i interior\":[\"Lemn\"],\"U\\u0219\\u0103 intrare\":[\"Lemn\"]}', '2020-12-29 15:47:52', '2020-12-29 15:47:52', NULL, 'tags'),
(4, '1101223', '{\"42\":1,\"50\":\"Targu-Jiu\",\"55\":\"2020-12-23T09:41:23.763Z\",\"57\":\"Imediat\",\"75\":1,\"94\":\"Gorj\",\"98\":5,\"162\":700,\"116\":\"Central\"}', '2020-12-29 15:47:56', '2020-12-29 15:47:56', NULL, NULL),
(5, '1100111', '{\"Alte caracteristici\":[\"Acces auto\"],\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]}', '2020-12-29 15:47:56', '2020-12-29 15:47:56', NULL, 'tags'),
(6, '1100111', '{\"50\":\"Preajba Mare\",\"55\":\"2020-12-22T12:25:18.431Z\",\"57\":\"Imediat\",\"89\":18,\"94\":\"Gorj\",\"155\":55,\"162\":1700}', '2020-12-29 15:47:59', '2020-12-29 15:47:59', NULL, NULL),
(7, '1100005', '{\"Alte caracteristici\":[\"Acces auto\"],\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"Utilit\\u0103\\u021bi teren\":[\"Ap\\u0103\",\"Curent\",\"Gaz\",\"Utilit\\u0103\\u021bi \\u00een zon\\u0103\"]}', '2020-12-29 15:47:59', '2020-12-29 15:47:59', NULL, 'tags'),
(8, '1100005', '{\"50\":\"Curtisoara\",\"55\":\"2020-12-22T11:35:41.433Z\",\"57\":\"Imediat\",\"89\":10.4,\"94\":\"Gorj\",\"155\":15,\"162\":1654}', '2020-12-29 15:48:01', '2020-12-29 15:48:01', NULL, NULL),
(9, '1099489', '{\"Alte caracteristici\":[\"Acces auto\"],\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"Utilit\\u0103\\u021bi teren\":[\"Utilit\\u0103\\u021bi \\u00een zon\\u0103\"]}', '2020-12-29 15:48:01', '2020-12-29 15:48:01', NULL, 'tags'),
(10, '1099489', '{\"50\":\"Scoarta\",\"55\":\"2020-12-21T11:17:35.021Z\",\"57\":\"Imediat\",\"89\":4,\"94\":\"Gorj\",\"155\":14,\"162\":3150}', '2020-12-29 15:48:04', '2020-12-29 15:48:04', NULL, NULL),
(11, '1098583', '{\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"Arhitectur\\u0103\":[\"Gresie\",\"Parchet\"],\"Buc\\u0103t\\u0103rie\":[\"Mobilat\\u0103\",\"Utilat\\u0103\"],\"Dot\\u0103ri\":[\"Aer condi\\u021bionat\",\"Aragaz\",\"Cad\\u0103\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\",\"TV\"],\"Electrocasnice\":[\"Hot\\u0103\"],\"Ferestre\":[\"Geamuri termopan\"],\"IT&C\":[\"Internet\",\"Telefon\"],\"Izola\\u021bii termice\":[\"Exterior\"],\"Mobilat\":[\"Complet\"],\"Pere\\u021bi\":[\"Faian\\u021b\\u0103\"],\"Sistem \\u00eenc\\u0103lzire\":[\"Calorifere\",\"Central\\u0103 proprie\"],\"Utilit\\u0103\\u021bi generale\":[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\"],\"U\\u0219i interior\":[\"Lemn\"],\"U\\u0219\\u0103 intrare\":[\"Metal\"]}', '2020-12-29 15:48:04', '2020-12-29 15:48:04', NULL, 'tags'),
(12, '1098583', '{\"42\":1,\"43\":1,\"45\":4,\"50\":\"Targu-Jiu\",\"55\":\"2020-12-18T13:15:20.574Z\",\"57\":\"Imediat\",\"64\":6,\"75\":1,\"84\":1,\"89\":1195.65,\"94\":\"Gorj\",\"98\":2,\"105\":46}', '2020-12-29 15:48:07', '2020-12-29 15:48:07', NULL, NULL),
(13, '1098447', '{\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"Ferestre\":[\"PVC\"],\"U\\u0219\\u0103 intrare\":[\"Metal\"]}', '2020-12-29 15:48:07', '2020-12-29 15:48:07', NULL, 'tags'),
(14, '1098447', '{\"42\":1,\"43\":1,\"50\":\"Targu-Jiu\",\"55\":\"2020-12-18T10:23:57.392Z\",\"57\":\"Imediat\",\"64\":5,\"89\":1318.18,\"94\":\"Gorj\",\"98\":1,\"105\":11,\"116\":\"Teilor\"}', '2020-12-29 15:48:09', '2020-12-29 15:48:09', NULL, NULL),
(15, '1097676', '{\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]}', '2020-12-29 15:48:09', '2020-12-29 15:48:09', NULL, 'tags'),
(16, '1097670', '{\"Alte caracteristici\":[\"Acces auto\"],\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]}', '2020-12-29 15:48:09', '2020-12-29 15:48:09', NULL, 'tags'),
(17, '1097670', '{\"50\":\"Targu-Jiu\",\"55\":\"2020-12-16T15:20:29.598Z\",\"57\":\"Imediat\",\"89\":110,\"94\":\"Gorj\",\"155\":13,\"162\":300}', '2020-12-29 15:48:11', '2020-12-29 15:48:11', NULL, NULL),
(18, '1097534', '{\"Utilit\\u0103\\u021bi teren\":[\"Ap\\u0103\",\"Curent\",\"Gaz\"]}', '2020-12-29 15:48:11', '2020-12-29 15:48:11', NULL, 'tags'),
(19, '1097534', '{\"42\":1,\"50\":\"Targu-Jiu\",\"55\":\"2020-12-16T12:35:51.823Z\",\"57\":\"Imediat\",\"64\":2,\"86\":225,\"88\":12.5,\"94\":\"Gorj\",\"105\":18,\"116\":\"Grivita\"}', '2020-12-29 15:48:13', '2020-12-29 15:48:13', NULL, NULL),
(20, '1097526', '{\"Utilit\\u0103\\u021bi teren\":[\"Ap\\u0103\",\"Curent\",\"Gaz\"]}', '2020-12-29 15:48:13', '2020-12-29 15:48:13', NULL, 'tags'),
(21, '1097526', '{\"44\":2012,\"45\":1,\"50\":\"Targu-Jiu\",\"55\":\"2020-12-16T12:25:52.667Z\",\"57\":\"Imediat\",\"64\":3,\"86\":850,\"88\":5.31,\"94\":\"Gorj\",\"105\":160}', '2020-12-29 15:48:17', '2020-12-29 15:48:17', NULL, NULL),
(22, '1097442', '{\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"Arhitectur\\u0103\":[\"Gresie\",\"Parchet\"],\"Buc\\u0103t\\u0103rie\":[\"Mobilat\\u0103\",\"Utilat\\u0103\"],\"Dot\\u0103ri\":[\"Aragaz\",\"Cad\\u0103\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\",\"TV\"],\"Mobilat\":[\"Complet\"],\"Pere\\u021bi\":[\"Faian\\u021b\\u0103\",\"Vopsea lavabil\\u0103\"],\"Sistem \\u00eenc\\u0103lzire\":[\"Calorifere\",\"Central\\u0103 proprie\"],\"Utilit\\u0103\\u021bi generale\":[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\",\"Internet\",\"Telefon\"],\"U\\u0219\\u0103 intrare\":[\"Metal\"]}', '2020-12-29 15:48:17', '2020-12-29 15:48:17', NULL, 'tags'),
(23, '1097442', '{\"41\":2,\"42\":1,\"43\":2,\"45\":4,\"50\":\"Targu-Jiu\",\"55\":\"2020-12-16T11:07:57.325Z\",\"57\":\"Imediat\",\"64\":4,\"75\":1,\"84\":1,\"86\":280,\"88\":3.54,\"94\":\"Gorj\",\"98\":3,\"105\":79,\"116\":\"Central\"}', '2020-12-29 15:48:20', '2020-12-29 15:48:20', NULL, NULL),
(24, '1097364', '{\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"Arhitectur\\u0103\":[\"Gresie\",\"Parchet\"],\"Ferestre\":[\"Geamuri termopan\"],\"IT&C\":[\"Internet\",\"Telefon\"],\"Pere\\u021bi\":[\"Faian\\u021b\\u0103\"],\"Sistem \\u00eenc\\u0103lzire\":[\"Calorifere\",\"Central\\u0103 proprie\"],\"Utilit\\u0103\\u021bi generale\":[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\"]}', '2020-12-29 15:48:20', '2020-12-29 15:48:20', NULL, 'tags'),
(25, '1097330', '{\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]}', '2020-12-29 15:48:20', '2020-12-29 15:48:20', NULL, 'tags'),
(26, '1097330', '{\"50\":\"Balanesti\",\"55\":\"2020-12-16T09:44:27.825Z\",\"57\":\"Imediat\",\"89\":15,\"94\":\"Gorj\",\"162\":1600}', '2020-12-29 15:48:22', '2020-12-29 15:48:22', NULL, NULL),
(27, '1097295', '{\"Alte caracteristici\":[\"Acces auto\"],\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"Utilit\\u0103\\u021bi teren\":[\"Ap\\u0103\",\"Curent\"]}', '2020-12-29 15:48:22', '2020-12-29 15:48:22', NULL, 'tags'),
(28, '1097295', '{\"50\":\"Schela\",\"55\":\"2020-12-16T09:29:10.678Z\",\"57\":\"Imediat\",\"89\":4.01,\"94\":\"Gorj\",\"155\":21,\"162\":3969}', '2020-12-29 15:48:24', '2020-12-29 15:48:24', NULL, NULL),
(29, '1096795', '{\"Acces Internet\":[\"Wireless\"],\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"Arhitectur\\u0103\":[\"Gresie\",\"Parchet\"],\"Buc\\u0103t\\u0103rie\":[\"Mobilat\\u0103\",\"Utilat\\u0103\"],\"Dot\\u0103ri\":[\"Aer condi\\u021bionat\",\"Aragaz\",\"Bideu\",\"Cabin\\u0103 de du\\u0219\",\"Cad\\u0103\",\"Dressing\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\",\"TV\"],\"Electrocasnice\":[\"Hot\\u0103\"],\"IT&C\":[\"Internet\",\"Telefon\"],\"Izola\\u021bii termice\":[\"Exterior\"],\"Mobilat\":[\"Lux\"],\"Pere\\u021bi\":[\"Faian\\u021b\\u0103\",\"Vopsea lavabil\\u0103\"],\"Siguran\\u021b\\u0103 \\u0219i securitate\":[\"Sistem de alarm\\u0103\"],\"Sistem \\u00eenc\\u0103lzire\":[\"Central\\u0103 proprie\"],\"Utilit\\u0103\\u021bi generale\":[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\"],\"U\\u0219\\u0103 intrare\":[\"Metal\"]}', '2020-12-29 15:48:25', '2020-12-29 15:48:25', NULL, 'tags'),
(30, '1096795', '{\"50\":\"Targu-Jiu\",\"51\":4,\"55\":\"2020-12-15T15:37:24.935Z\",\"57\":\"Imediat\",\"64\":4,\"89\":1616.16,\"94\":\"Gorj\",\"105\":99,\"116\":\"Ultracentral\"}', '2020-12-29 15:48:29', '2020-12-29 15:48:29', NULL, NULL),
(31, '1096772', '{\"Utilit\\u0103\\u021bi teren\":[\"Ap\\u0103\",\"Curent\",\"Gaz\"]}', '2020-12-29 15:48:29', '2020-12-29 15:48:29', NULL, 'tags'),
(32, '1096772', '{\"50\":\"Targu-Jiu\",\"55\":\"2020-12-15T14:44:01.616Z\",\"57\":\"Imediat\",\"64\":2,\"89\":555.56,\"94\":\"Gorj\",\"155\":1,\"105\":36,\"116\":\"9 Mai\"}', '2020-12-29 15:48:32', '2020-12-29 15:48:32', NULL, NULL),
(33, '1096435', '{\"Acces Internet\":[\"Wireless\"],\"Alte spa\\u021bii\":[\"Box\\u0103 la subsol\",\"Curte\",\"Gr\\u0103din\\u0103 proprie\",\"Pivni\\u021b\\u0103\"],\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"Arhitectur\\u0103\":[\"Gresie\",\"Parchet\"],\"Buc\\u0103t\\u0103rie\":[\"Mobilat\\u0103\",\"Utilat\\u0103\"],\"Contorizare\":[\"Apometre\",\"Contor c\\u0103ldur\\u0103\",\"Contor electric\",\"Contor gaz\"],\"Dot\\u0103ri\":[\"Aer condi\\u021bionat\",\"Cabin\\u0103 de du\\u0219\",\"Cad\\u0103\",\"Dressing\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\",\"TV\"],\"Electrocasnice\":[\"Hot\\u0103\"],\"Ferestre\":[\"Geamuri termopan\",\"PVC\"],\"IT&C\":[\"Internet\",\"Telefon\"],\"Izola\\u021bii termice\":[\"Exterior\"],\"Mobilat\":[\"Lux\"],\"Pere\\u021bi\":[\"Faian\\u021b\\u0103\"],\"Sistem \\u00eenc\\u0103lzire\":[\"Calorifere\",\"Central\\u0103 proprie\"],\"Utilit\\u0103\\u021bi generale\":[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\"],\"U\\u0219i interior\":[\"Lemn\"],\"U\\u0219\\u0103 intrare\":[\"Lemn\"]}', '2020-12-29 15:48:32', '2020-12-29 15:48:32', NULL, 'tags'),
(34, '1096399', '{\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"IT&C\":[\"Internet\"],\"Izola\\u021bii termice\":[\"Exterior\"],\"Sistem \\u00eenc\\u0103lzire\":[\"Calorifere\",\"Central\\u0103 proprie\"],\"Utilit\\u0103\\u021bi generale\":[\"Ap\\u0103\",\"Canalizare\",\"Curent\",\"Gaz\"],\"U\\u0219i interior\":[\"PVC\"],\"U\\u0219\\u0103 intrare\":[\"Metal\"]}', '2020-12-29 15:48:32', '2020-12-29 15:48:32', NULL, 'tags'),
(35, '1096399', '{\"42\":2,\"43\":2,\"50\":\"Targu-Jiu\",\"52\":9,\"55\":\"2020-12-15T08:54:17.296Z\",\"57\":\"Imediat\",\"75\":1,\"85\":2020,\"89\":822.78,\"94\":\"Gorj\",\"98\":3,\"102\":100,\"105\":79}', '2020-12-29 15:48:34', '2020-12-29 15:48:34', NULL, NULL),
(36, '1096350', '{\"Alte spa\\u021bii\":[\"Curte\",\"Gr\\u0103din\\u0103 proprie\"],\"Amenajare str\\u0103zi\":[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"],\"Arhitectur\\u0103\":[\"Gresie\",\"Parchet\"],\"Contorizare\":[\"Apometre\",\"Contor electric\",\"Contor gaz\"],\"Dot\\u0103ri\":[\"Aragaz\",\"Cabin\\u0103 de du\\u0219\",\"Cad\\u0103\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\",\"TV\"],\"Ferestre\":[\"Geamuri termopan\"],\"IT&C\":[\"Internet\",\"Telefon\"],\"Mobilat\":[\"Complet\"],\"Parcare\":[\"Garaj\"],\"Pere\\u021bi\":[\"Faian\\u021b\\u0103\"],\"Sistem \\u00eenc\\u0103lzire\":[\"Calorifere\",\"Central\\u0103 proprie\"],\"Utilit\\u0103\\u021bi generale\":[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\"]}', '2020-12-29 15:48:34', '2020-12-29 15:48:34', NULL, 'tags');

-- --------------------------------------------------------

--
-- Table structure for table `propertie_types`
--

CREATE TABLE `propertie_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `key_int` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertie_types`
--

INSERT INTO `propertie_types` (`id`, `name`, `key`, `created_at`, `updated_at`, `deleted_at`, `key_int`) VALUES
(1, 'Cladire de birouri', NULL, '2020-12-13 11:07:00', '2020-12-13 11:20:11', NULL, 8),
(2, 'Apartament', NULL, '2020-12-13 11:07:00', '2020-12-13 11:18:22', NULL, 1),
(3, 'Casa / Vila', NULL, '2020-12-13 11:07:00', '2020-12-13 11:18:49', NULL, 3),
(4, 'Teren', NULL, '2020-12-13 11:07:00', '2020-12-13 11:19:01', NULL, 6),
(5, 'Ansamblu Rezidential', NULL, '2020-12-13 11:07:00', '2020-12-13 11:19:39', NULL, 2),
(6, 'Spatiu Comercial', NULL, '2020-12-13 11:07:00', '2020-12-13 11:19:23', NULL, 5),
(8, 'Spatiu Industrial', NULL, '2020-12-13 11:08:00', '2020-12-13 11:19:32', NULL, 7),
(9, 'Spatiu de birouri', NULL, '2020-12-13 11:08:00', '2020-12-13 11:19:12', NULL, 4),
(10, 'Garsoniere', NULL, '2020-12-13 11:15:00', '2020-12-13 11:20:16', NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Administrator', '2020-12-12 18:50:37', '2020-12-13 11:13:03'),
(2, 'Client', 'Client', '2020-12-12 18:50:37', '2020-12-13 11:12:53'),
(3, 'Agent', 'Agent', '2020-12-13 11:12:05', '2020-12-13 11:12:05'),
(4, 'AgentPartener', 'Agent Partener', '2020-12-13 11:12:35', '2020-12-13 11:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-12-12 18:50:38', '2020-12-12 18:50:38'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-12-12 18:50:38', '2020-12-12 18:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `first_name`, `last_name`, `county`, `city`, `address`, `phone`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$vg5fdNgfg3v42jJVHiLIHuLXzW7MNye9T6qNWFKvbURtx82SGyGMK', 'tHSRfxptCqRd94hr9fO7jOY1ype4KPImrXHtzWuPNJHCa0jzJDlAnBkENEcS', NULL, '2020-12-12 18:50:38', '2020-12-12 18:50:38', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 4, 'savedem', 'cred@ro.com', 'users/default.png', NULL, '1q2w3e4r', NULL, '{\"locale\":\"en\"}', '2020-12-15 18:39:42', '2021-01-12 17:16:48', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 2, 'Aphrodite Rojas', 'pegomonab@mailinator.com', 'users/default.png', NULL, '$2y$10$N22DbapSKxnC8p/Mp5ual.rMRpllD6IUHRJm73QJjY9NBf3FMQCLe', NULL, '{\"locale\":\"en\"}', '2020-12-16 18:49:39', '2021-01-12 16:48:30', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 'Gretchen Pierce', 'hapexupeky@mailinator.com', 'users/default.png', NULL, '$2y$10$VC5w2frkfRnY3fFFjyIzrOPRoSFrXYHceJ00.8331C/ofAF9ugVWK', NULL, '{\"locale\":\"en\"}', '2020-12-16 18:50:54', '2021-01-12 16:48:42', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 3, 'aaaaaaaa', 'aaaa@aaa.com', 'users/default.png', NULL, '$2y$10$SWsJZkvJMa9t3HZfb/yhGuMyjI5mPmINYlkOlrQzjYmE4NbJtF43W', NULL, NULL, '2021-01-12 17:17:33', '2021-01-12 17:17:45', 'aaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaa', 'aaaaaaaaaa', 'aaaa@aaa.com', '0711111111');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertie_attributes`
--
ALTER TABLE `propertie_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertie_types`
--
ALTER TABLE `propertie_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1102525;

--
-- AUTO_INCREMENT for table `propertie_attributes`
--
ALTER TABLE `propertie_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `propertie_types`
--
ALTER TABLE `propertie_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
