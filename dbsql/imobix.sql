-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2020 at 08:50 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.12

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
(40, 'Tip apartament', 'apartment_type', NULL, '2020-12-13 12:09:00', '2020-12-13 12:09:00', NULL),
(41, 'Nr. balcoane', 'balconies', NULL, '2020-12-13 12:14:07', '2020-12-13 12:14:07', NULL),
(42, 'Nr. bai', 'bathrooms', NULL, '2020-12-13 12:15:00', '2020-12-13 12:15:32', NULL),
(43, 'Dormitoare', 'bedrooms', NULL, '2020-12-13 12:16:18', '2020-12-13 12:16:18', NULL),
(44, 'Anul constructiei', 'building_construction_year', NULL, '2020-12-13 12:17:37', '2020-12-13 12:17:37', NULL),
(45, 'Nr. et. clădire', 'building_floors', NULL, '2020-12-13 12:18:41', '2020-12-13 12:18:41', NULL),
(46, 'Nr. et. retrase', 'building_retired_floors', NULL, '2020-12-13 12:19:14', '2020-12-13 12:19:14', NULL),
(47, 'Tip constr.', 'building_structure', NULL, '2020-12-13 12:20:03', '2020-12-13 12:20:03', NULL),
(48, 'Imobil', 'building_type', NULL, '2020-12-13 12:20:36', '2020-12-13 12:20:36', NULL),
(49, 'Nr. subsoluri', 'building_underground_floors', NULL, '2020-12-13 12:21:06', '2020-12-13 12:21:06', NULL),
(50, 'Localitate', 'city', NULL, '2020-12-13 12:22:26', '2020-12-13 12:22:26', NULL),
(51, 'Confort', 'comfort', NULL, '2020-12-13 12:23:33', '2020-12-13 12:23:33', NULL),
(52, 'Stadiu construcție', 'construction_status', NULL, '2020-12-13 12:25:46', '2020-12-13 12:25:46', NULL),
(53, 'Ultimul preț închiriere', 'currency_rent', NULL, '2020-12-13 12:26:28', '2020-12-13 12:26:28', NULL),
(54, 'Preț vânzare', 'currency_sale', NULL, '2020-12-13 12:27:56', '2020-12-13 12:27:56', NULL),
(55, 'Adăugată la', 'date_added', NULL, '2020-12-13 12:29:42', '2020-12-13 12:29:42', NULL),
(56, 'Descriere', 'description', NULL, '2020-12-13 12:32:48', '2020-12-13 12:32:48', NULL),
(57, 'Disponibilitate', 'disponibility', NULL, '2020-12-13 12:34:39', '2020-12-13 12:34:39', NULL),
(58, 'Destinație', 'destination', NULL, '2020-12-13 12:34:53', '2020-12-13 12:34:53', NULL),
(59, 'Indice emisii echivalent CO2 (kg)', 'emission_index', NULL, '2020-12-13 12:36:05', '2020-12-13 12:36:05', NULL),
(60, 'Clasă Energetică', 'energy_class', NULL, '2020-12-13 12:36:37', '2020-12-13 12:36:37', NULL),
(61, 'Intermediere exclusivă', 'exclusive_rent', NULL, '2020-12-13 12:39:05', '2020-12-13 12:39:05', NULL),
(63, 'Reprezentare exclusivă', 'exclusive_representation_rent', NULL, '2020-12-13 12:40:05', '2020-12-13 12:40:05', NULL),
(64, 'Etaje', 'floor', NULL, '2020-12-13 12:43:41', '2020-12-13 12:43:41', NULL),
(65, 'De închiriat', 'for_rent', NULL, '2020-12-13 12:45:23', '2020-12-13 12:45:23', NULL),
(66, 'De vânzare', 'for_sale', NULL, '2020-12-13 15:39:23', '2020-12-13 15:39:23', NULL),
(67, 'Nr. garaje', 'garages', NULL, '2020-12-13 15:40:11', '2020-12-13 15:40:11', NULL),
(68, 'Garanție', 'guarantee_cost', NULL, '2020-12-13 15:40:49', '2020-12-13 15:40:49', NULL),
(69, 'Are pod', 'has_attic', NULL, '2020-12-13 15:41:18', '2020-12-13 15:41:18', NULL),
(70, 'Geam la baie', 'has_bathroom_window', NULL, '2020-12-13 15:45:50', '2020-12-13 15:45:50', NULL),
(71, 'Are mansardă', 'has_mansard', NULL, '2020-12-13 15:46:21', '2020-12-13 15:46:21', NULL),
(72, 'Are demisol', 'has_semibasement', NULL, '2020-12-13 15:46:50', '2020-12-13 15:46:50', NULL),
(73, 'Monument Istoric', 'historical_monument', NULL, '2020-12-13 15:47:20', '2020-12-13 15:47:20', NULL),
(74, 'Stare interior', 'interior_state', NULL, '2020-12-13 15:48:46', '2020-12-13 15:48:46', NULL),
(75, 'Nr. bucătării', 'kitchens', NULL, '2020-12-13 15:49:26', '2020-12-13 15:49:26', NULL),
(76, 'Reper', 'landmark', NULL, '2020-12-13 15:50:23', '2020-12-13 15:50:23', NULL),
(77, 'Valoare întreținere medie', 'maintenance_cost', NULL, '2020-12-13 15:51:35', '2020-12-13 15:51:35', NULL),
(78, 'Vecinătăți [en]', 'nearby_en', NULL, '2020-12-13 15:52:56', '2020-12-13 15:52:56', NULL),
(79, 'Preț închiriere negociabil', 'negotiable_rent_price', NULL, '2020-12-13 15:53:26', '2020-12-13 15:53:26', NULL),
(80, 'Preț vânzare negociabil', 'negotiable_sale_price', NULL, '2020-12-13 15:53:50', '2020-12-13 15:53:50', NULL),
(81, 'Clădiri de Birouri', 'office_building', NULL, '2020-12-13 15:55:20', '2020-12-13 15:55:20', NULL),
(82, 'Orientare', 'orientation', NULL, '2020-12-13 15:56:23', '2020-12-13 15:56:23', NULL),
(83, 'Nr. locuri parcare', 'parking_spots', NULL, '2020-12-13 15:57:20', '2020-12-13 15:57:20', NULL),
(84, 'Compart.', 'partitioning', NULL, '2020-12-13 15:58:59', '2020-12-13 15:58:59', NULL),
(85, 'Anul finisării', 'polish_year', NULL, '2020-12-13 15:59:28', '2020-12-13 15:59:28', NULL),
(86, 'Preț chirie/lună', 'price_rent', NULL, '2020-12-13 16:00:16', '2020-12-13 16:00:16', NULL),
(87, 'Preț vânzare', 'price_sale', NULL, '2020-12-13 16:00:43', '2020-12-13 16:00:43', NULL),
(88, 'Preț chirie mp/lună', 'price_sqm_rent', NULL, '2020-12-13 16:01:29', '2020-12-13 16:01:29', NULL),
(89, 'Preț vânzare/mp', 'price_sqm_sale', NULL, '2020-12-13 16:01:50', '2020-12-13 16:01:50', NULL),
(90, 'Comision cerut de la chiriaș la închiriere', 'promote_commission_rent', NULL, '2020-12-13 16:02:32', '2020-12-13 16:02:32', NULL),
(91, 'Comision cerut de la cumpărător la vânzare', 'promote_commission_sale', NULL, '2020-12-13 16:02:53', '2020-12-13 16:02:53', NULL),
(92, 'Promovează locația exactă a proprietății', 'promote_exact_location', NULL, '2020-12-13 16:03:30', '2020-12-13 16:03:30', NULL),
(93, 'Tip', 'property_type', NULL, '2020-12-13 16:04:30', '2020-12-13 16:04:30', NULL),
(94, 'Județ', 'region', NULL, '2020-12-13 16:05:05', '2020-12-13 16:05:05', NULL),
(95, 'Consum total din surse regenerabile (kWh)', 'renewable_sources_consumption', NULL, '2020-12-13 16:05:32', '2020-12-13 16:05:32', NULL),
(96, 'Ansamblu rezidențial', 'residential_complex', NULL, '2020-12-13 16:06:22', '2020-12-13 16:06:22', NULL),
(97, 'Model apartament', 'residential_complex_model', NULL, '2020-12-13 16:06:46', '2020-12-13 16:06:46', NULL),
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
(110, 'TVA', 'vat_rent', NULL, '2020-12-13 16:19:45', '2020-12-13 16:19:45', NULL),
(111, 'TVA', 'vat_sale', NULL, '2020-12-13 16:20:08', '2020-12-13 16:20:08', NULL),
(112, 'Link video', 'video_link', NULL, '2020-12-13 16:20:49', '2020-12-13 16:20:49', NULL),
(113, 'Link tur virtual', 'virtual_tour_link', NULL, '2020-12-13 16:21:07', '2020-12-13 16:21:07', NULL),
(114, 'Comision 0% la închiriere cerut de la chiriaș', 'zero_commission_rent', NULL, '2020-12-13 16:22:03', '2020-12-13 16:22:03', NULL),
(115, 'Comision 0% la vânzare cerut de la cumpărător', 'zero_commission_sale', NULL, '2020-12-13 16:22:24', '2020-12-13 16:22:24', NULL),
(116, 'Zonă', 'zone', NULL, '2020-12-13 16:23:25', '2020-12-13 16:23:25', NULL),
(119, 'Dotari', 'tags.dotari', NULL, '2020-12-13 16:51:54', '2020-12-13 16:51:54', NULL),
(120, 'Dotări imobil', 'tags.dotari_imobil', NULL, '2020-12-13 16:53:39', '2020-12-13 16:53:39', NULL),
(121, 'Ușă intrare', 'tags.usa_intrare', NULL, '2020-12-13 16:55:19', '2020-12-13 16:55:19', NULL),
(122, 'Uși interior', 'tags.usi_interior', NULL, '2020-12-13 16:56:17', '2020-12-13 16:56:17', NULL),
(123, 'Pereți', 'tags.pereti', NULL, '2020-12-13 16:57:48', '2020-12-13 16:57:48', NULL),
(124, 'Podele', 'tags.podele', NULL, '2020-12-13 17:00:03', '2020-12-13 17:00:03', NULL),
(125, 'Mobilat', 'tags.mobilat', NULL, '2020-12-13 17:00:46', '2020-12-13 17:00:46', NULL),
(126, 'Amenajare străzi', 'tags.amenajare_strazi', NULL, '2020-12-13 17:01:53', '2020-12-13 17:01:53', NULL),
(127, 'Bucătărie', 'tags.bucatarie', NULL, '2020-12-13 17:02:48', '2020-12-13 17:02:48', NULL),
(128, 'Alte spații', 'tags.alte_spatii', NULL, '2020-12-13 17:03:11', '2020-12-13 17:03:11', NULL),
(129, 'Parcare', 'tags.parcare', NULL, '2020-12-13 17:03:31', '2020-12-13 17:03:31', NULL),
(130, 'Ferestre', 'tags.ferestre', NULL, '2020-12-13 17:04:09', '2020-12-13 17:04:09', NULL),
(131, 'Utilități generale', 'tags.utilitati_generale', NULL, '2020-12-13 17:05:42', '2020-12-13 17:05:42', NULL),
(132, 'Sistem încălzire', 'tags.sistem_incalzire', NULL, '2020-12-13 17:06:29', '2020-12-13 17:06:29', NULL),
(133, 'Rulouri / Obloane', 'tags.rulouri_obloane', NULL, '2020-12-13 17:07:35', '2020-12-13 17:07:35', NULL),
(134, 'Izolații termice', 'tags.izolatii_termice', NULL, '2020-12-13 17:07:50', '2020-12-13 17:07:50', NULL),
(135, 'Contorizare', 'tags.contorizare', NULL, '2020-12-13 17:08:06', '2020-12-13 17:08:06', NULL),
(136, 'Jaluzele', 'tags.jaluzele', NULL, '2020-12-13 17:08:23', '2020-12-13 17:08:23', NULL),
(137, 'Priveliște', 'tags.priveliste', NULL, '2020-12-13 17:08:39', '2020-12-13 17:08:39', NULL),
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
(148, 'Tip imobil', 'commercial_building_type', NULL, '2020-12-13 17:32:56', '2020-12-13 17:32:56', NULL),
(149, 'Reprezentare exclusivă', 'exclusive_representation_sale', NULL, '2020-12-13 17:48:41', '2020-12-13 17:48:41', NULL),
(150, 'Intermediere exclusivă', 'exclusive_sale', NULL, '2020-12-13 17:49:12', '2020-12-13 17:49:12', NULL),
(151, 'Etaje', 'floor_multi', NULL, '2020-12-13 17:49:57', '2020-12-13 17:49:57', NULL),
(152, 'Agent', 'agent', NULL, '2020-12-13 17:50:37', '2020-12-13 17:50:37', NULL),
(153, 'lat', 'lat', NULL, '2020-12-13 17:52:24', '2020-12-13 17:52:24', NULL),
(154, 'long', 'lng', NULL, '2020-12-13 17:52:31', '2020-12-13 17:52:31', NULL),
(155, 'Front stradal (m)', 'street_opening_length', NULL, '2020-12-13 17:55:41', '2020-12-13 17:55:41', NULL),
(156, 'Are subsol', 'has_basement', NULL, '2020-12-13 17:57:02', '2020-12-13 17:57:02', NULL),
(157, 'Înălțime interioară', 'interior_height', NULL, '2020-12-13 17:57:31', '2020-12-13 17:57:31', NULL),
(158, 'Trafic pietonal', 'pedestrian_traffic', NULL, '2020-12-13 17:58:26', '2020-12-13 17:58:26', NULL),
(159, 'Titlu', 'title', NULL, '2020-12-13 17:59:39', '2020-12-13 17:59:39', NULL),
(160, 'Nr. vestiare', 'lockers', NULL, '2020-12-13 18:04:10', '2020-12-13 18:04:10', NULL),
(161, 'S. producție (mp)', 'surface_production', NULL, '2020-12-13 18:05:34', '2020-12-13 18:05:34', NULL),
(162, 'S. teren (mp)', 'surface_land', NULL, '2020-12-13 18:06:38', '2020-12-13 18:06:38', NULL),
(163, 'S. depozitare (mp)', 'surface_storage', NULL, '2020-12-13 18:07:48', '2020-12-13 18:07:48', NULL),
(164, 'Alte Caracteristici', 'tags.Alte_caracteristici', NULL, NULL, NULL, NULL);

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
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

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
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `judet`, `localitate`, `strada`, `apartament`, `nr_strada`, `lat`, `long`, `type`, `pret`, `created_at`, `updated_at`, `deleted_at`, `title`, `description`, `transaction_type`, `slug`) VALUES
(1092805, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.02681771357', '23.264880300333', '1', '89000', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL, 'Apartament 4camere, etaj 1, strada Victoriei', 'Vă propunem spre vânzare apartament 4 camere, decomandat, situat în Municipiul Târgu-Jiu, strada Victoriei, etajul 1, in aproprierea Shopping City Mall, cu o suprafață totala de 87 mp, din care suprafata utila fiind de 76 mp iar balconul avand o suprafata de 11 mp.\r\n   Imobilul dispune de urmatoarele îmbunătățiri: gresie, faianță, parchet, centrală termică, ușă metalică la intrare, tâmplărie pvc cu geam termopan, izolatie exterioara, vederea fiind bilaterala.\r\n   În apropriere aflanduse  supermarket-uri, școli, farmacii, spatiu de joaca.\r\n   Apartamentul se vinde complet mobilat si utilat.\r\n \r\nPreț 89000 euro negociabil.', '1', NULL),
(1092839, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.027323748629', '23.275310756978', '1', '34000', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL, 'Apartament 2 camere, parter, strada MInerilor', 'Vă propunem spre vânzare apartament 2 camere, situat în Municipiul Târgu-Jiu, strada Minerilor, parter, cu o suprafață totală de 25 mp.\r\n   Apartamentul este momentan transformat in spatiu comercial.\r\n   Dispune de multiple îmbunătățiri: gresie, faianță, centrală termică, izolat termic exterior, uși interioare schimbate, ușă la intrarea exterioara cu gratar, tâmplărie pvc cu geam termopan.\r\n   În vecinatate se află supermarket-uri, școli, grădinițe, piata, etc.\r\n\r\nPreț 34000 euro negociabil.', '1', NULL),
(1092861, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.035510576064', '23.279558320289', '1', '58000', '2020-12-13 19:05:41', '2020-12-13 19:05:41', NULL, 'Apartament 2 camere, zona Gardu', 'Vă propunem spre vânzare apartament 2 camere, etaj 4, cu o suprafață totală de 48 mp., semidecomandat, situat în Municipiul Târgu-Jiu, strada 16 Febrarie ( zona Gardu).\r\n   Dispune de multiple îmbunătățiri: gresie, faianță, centrală termică, izolat termic exterior, parchet, uși interioare schimbate, ușă metalică la intrare, tâmplărie pvc cu geam termopan, balcon inchis, loc de parcare si boxa pe casa scarii.\r\n   Apartamentul se vinde complet mobilat si utilat.\r\n   În vecinatate se află supermarket-uri, școli, grădinițe, etc.\r\n\r\nPreț 58.000 euro negociabil.', '1', NULL),
(1092881, 'Gorj', 'Turcinesti', '', NULL, NULL, '45.084407620058', '23.304329007472', '6', '16500', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL, 'Teren Turcinesti 400 mp, Turcinesti', 'Va propunem spre vanzare teren pretabil pentru constructie casa, situat in Turcinesti, langa Primarie, cu o suprafata de 400 mp, deschidere de 22 ml la strada si o adancime de 18 m.\r\n   Dispune de utilitati zonei precum apa, gaze, electricitate.\r\n\r\nPret 16 500 euro, negociabil.', '1', NULL),
(1092887, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.028165077613', '23.26133537227', '6', '39920', '2020-12-13 19:05:32', '2020-12-13 19:05:32', NULL, 'Parcela Teren 4990, strada Panduri', 'Vă propunem spre vânzare teren extravilan, situat în Municipiul Târgu-Jiu, strada Panduri, cu o suprafață de 4990 mp, front stradal de 13.30 ml si o adancime de 384 m, dispune de utilitățile zonei.\r\n\r\nPreț 8 euro/mp negociabil.', '1', NULL),
(1093014, 'Gorj', 'Stanesti', '', NULL, NULL, '45.117892832385', '23.237800842647', '3', '36900', '2020-12-13 19:04:24', '2020-12-13 19:04:24', NULL, 'Casa comuna Stanesti, judetul Gorj', 'Va propunem spre vanzare casa situata in Comuna Stanesti, Sat Stanesti, Judetul Gorj,  la aproximativ 16 km de Targu Jiu, cu o amprenta la sol in suprafata de 117 mp plus teren aferent cu o suprafata de 600 mp, deschiderea la strada fiind de 29 ml .\r\nImobilul este compus din 2 camere,  bucatarie, baie,  sufragerie, beneficiind de anexe, terasa, cuptor din caramida, camera centralei.\r\nCasa dispune de: gresie faianta, tamplarie PVC cu geam termopan, boilar electric.\r\n\r\nPret 36 900 Euro, negociabil.', '1', NULL),
(1093100, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.044069822817', '23.272670977057', '3', '128900', '2020-12-13 19:04:17', '2020-12-13 19:04:17', NULL, 'Casa batraneasca , stradaComuna din Paris', 'Vă propunem spre vânzare casa situata în Municipiul Târgu-Jiu, strada Comuna din Paris, la 5 minute de centrul orasului, cu teren aferent in suprafata de 344 mp, si deschidere la strada de 16 ml, avand o amprenta la sol de 99 mp, iar suprafata construita desfasurata fiind de 113 mp..\r\n   Imobilul este construit din caramida si acoperit cu tigla, compartimentat astfel: hol, camera de zi, dormitor, baie, bucatarie, hol, plus o anexa lipita de casa cu un dormitor si baie proprie, sub care se afla beciul. In spatele casei se gaseste un foisor.\r\n   În vecinatate se află terasa si hotelul Anna, supermarketuri, scoli, licee, mijloace de transport in comun.\r\n\r\nPreț 128900 euro, negociabil.', '1', NULL),
(1093159, 'Gorj', 'Stanesti', '', NULL, NULL, '45.106102704271', '23.243372056473', '3', '80000', '2020-12-13 19:04:13', '2020-12-13 19:04:13', NULL, 'Casa comuna Stanesti, judetul Gorj', 'Va propunem spre vanzare proprietate superba in satul Stanesti, judetul Gorj.\r\n    Proprietatea dispune de un imobil cu o amprenta la sol de 87 mp, construit pe un nivel, compartimentarea oferind 3 camere si un grup sanitar; si o anexa de 54 mp amenajata pentru cresterea gainilor.\r\n    Imbunatatirile imobilului sunt: tamplarie PVC cu geam termopan, parchet, gresie, faianta.\r\n    Terenul are o suprafata totala de 7846 mp si este impartit astfel: 1584 mp incadrati ca intravilan; se continua cu un platou de 5265 mp extravilan livada si arabil ce ofera multiple posibilitati de amenajare si exploatare datorita faptului ca este un teren plat; si 997 mp sunt acoperiti de vie.\r\n     Proprietatea este racordata electric, gazele si canalizarea fiind la limita proprietatii.\r\n     De asemenea, frumusetea imprejurimilor, apropierea de zona montana, dar si distanta mica fata de orasul Targu Jiu (14 km),  sunt atuuri ce nu pot fi ignorate, proprietatea putand fi folosita ca locuinta, ferma de familie, dar existand potential si pentru pensiune.\r\n     Pentru mai multe detalii va asteptam la sediul agentiei noastre de la Paralela 45.\r\n\r\n     Pret: 80000 Euro negociabil', '1', NULL),
(1093192, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.032698620537', '23.273382325082', '4', '400', '2020-12-13 19:04:06', '2020-12-13 19:04:06', NULL, 'Spatiu 37 mp, Bld. Ecaterina Teodoroiu, zona Hotel Anna', 'Va propunem spre inchiriere spatiu comercial, cu o suprafata utila de 37 mp, situat in Municipiul Targu Jiu, Bulevardul Ecaterina Teodoroiu, zona Hotel Anna.\r\n   Interiorul a fost renovat si dispune de urmatoarele: gresie, faianta, aer conditionat, tamplarie PVC cu geam termopan, loc de parcare pentru patru masini.\r\n   Spatiul este  pretabil pentru birouri sau orice tip de activitate comerciala.\r\n\r\nPret 400 euro, usor negociabil.', '2', NULL),
(1094052, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.068389172402', '23.287539097496', '6', '154750', '2020-12-13 19:04:02', '2020-12-13 19:04:02', NULL, 'Teren intravilan, Aleea Dumbrava', 'Va propunem spre vanzare teren intravilan, situat in Municipiul Tg-Jiu, Aleea Dumbrava, cu o suprafata de 6190 mp, terenul se vinde si in parcele de 1000 mp sau mai mari iar pretul se discuta direct cu clientii interesati.\r\n    Dispune de utilitati zonei.\r\n\r\nPret 25 euro/mp, negociabil.', '1', NULL),
(1094067, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.022664509498', '23.278159634417', '1', '47000', '2020-12-13 19:03:56', '2020-12-13 19:03:56', NULL, '', 'Vă propunem spre vânzare apartament 2 camere, decomandat, situat în Municipiul Târgu-Jiu, Aleea Plopilor, parter, cu o suprafață utila de 36 mp.\r\nDispune de: gresie, faianță, centrală termică, izolat termic exterior, parchet, uși interioare schimbate, ușă metalică la intrare, tâmplărie pvc cu geam termopan, loc de parcare.\r\nÎn vecinatate se află supermarket-uri, școli, grădinițe, piata, policlinica , etc.\r\nApartamentul se vinde complet mobilat si utilat.\r\n\r\nPreț 227000 lei, negociabil.', '1', NULL),
(1094102, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.024528027219', '23.262100670624', '3', '137000', '2020-12-13 19:03:51', '2020-12-13 19:03:51', NULL, 'Casa strada Panduri, Tg-Jiu', 'Va propunem spre vanzare casa situata in Targu Jiu, str. Panduri, judetul Gorj.\r\nCasa are o suprafata construita de 240 mp, amprenta la sol de 150 mp, este compusa din 4 camere, 1 living,  1 bucatarie, 3 bai, dressing, camera centralei si doua terase exterioare.\r\nImbunatatirile imobilului sunt: ferestre din tamplarie PVC cu geam termopan, instalatie electrica trifazica cu intrerupatoare cap-scara, izolatie termica la exterior cu polistiren de 10 cm, scara interioara cu doua rampe si podest intermediar.\r\nTerenul are o suprafata de 570 mp, curtea este imprejmuita de un gard zidit ce ofera intimitate proprietarilor, iar ca amenajare regasim o alee generoasa si gazon.\r\n\r\nPret: 137000 euro.', '1', NULL),
(1094121, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.029213009809', '23.272210660239', '1', '45000', '2020-12-13 19:03:45', '2020-12-13 19:03:45', NULL, 'Apartament doua camere, etajul 4, Strada Paacii', 'Vă propunem spre vânzare apartament 2 camere, semidecomandat, situat în Municipiul Târgu-Jiu, str. Pacii, et.4, cu o suprafață totală de 42 mp.\r\nApartamentul se vinde complet mobilat si utilat.\r\nDispune de multiple îmbunătățiri: gresie, faianță, centrală termică, aer conditionat, izolat termic exterior, parchet, uși interioare schimbate, ușă metalică la intrare, tâmplărie pvc cu geam termopan, balcon inchis, loc de parcare.\r\nÎn vecinatate se află supermarket-uri, școli, grădinițe, piata, etc.\r\n\r\nPreț 45000 euro negociabil.', '1', NULL),
(1094142, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.008399477323', '23.258150829116', '7', '5100', '2020-12-13 19:03:40', '2020-12-13 19:03:40', NULL, 'Hala si teren Cartier Romanesti', 'Va propunem spre inchiriere hale industriale + teren aferent, situate in Targu-Jiu, cartier Romanesti, o hala de 400 mp construita din panouri sandwich, si o a doua hala de 450 mp construita din tabla, suprafata totala utila fiind de 850 mp,  terenul avand o suprafata de 4282 mp.\r\nAccesul la imobil se face prin drumul de servitute propriu, cu o latime de 10 m, si lung de 76 m.\r\n\r\nPreț  6 euro/mp hala usor negociabil.', '2', NULL),
(1094506, 'Gorj', 'Calnic', '', NULL, NULL, '44.965874702398', '23.072285632954', '3', '39000', '2020-12-13 19:03:33', '2020-12-13 19:03:33', NULL, 'Casa si teren, sat Calnic', 'Va propunem spre vanzare casa + teren situata in sat Calnic, comuna Calnic, judetul Gorj.\r\nCasa este finalizata partial, are regim de inaltime P+1 si o suprafata de 180 mp.\r\nConfortul termic este asigurat cu ajutorul sobelor pe lemne, iar apa provine de la fantana din curte.\r\nTerenul aferent proprietatii este in suprafata de 2833, din care 1106 mp sunt incadrati ca intravilan.\r\n\r\nPret: 39000 euro negociabil', '1', NULL),
(1094516, 'Gorj', 'Targu-Jiu', '', NULL, NULL, '45.018420734203', '23.259404613932', '6', '5500', '2020-12-13 18:04:59', '2020-12-13 18:04:59', NULL, 'Teren 367 mp, strada Panduri', 'Va oferim spre vanzare teren extravilan situat in Municipiul Targu-Jiu, zona prelungirea Panduri, in suprafata de 367 mp., zona in continua dezvoltare.\r\n\r\nPret 5500 Euro.', '1', NULL);

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
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertie_attributes`
--

INSERT INTO `propertie_attributes` (`id`, `propertie_id`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1094516', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-10T15:28:38.646Z\",\"56\":\"Va oferim spre vanzare teren extravilan situat in Municipiul Targu-Jiu, zona prelungirea Panduri, in suprafata de 367 mp., zona in continua dezvoltare.\\r\\n\\r\\nPret 5500 Euro.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.0184207342026,\"154\":23.2594046139316,\"80\":true,\"87\":5500,\"89\":14.99,\"90\":\"standard\",\"91\":\"standard\",\"93\":6,\"94\":\"Gorj\",\"162\":367,\"159\":\"Teren 367 mp, strada Panduri\",\"110\":1,\"111\":1,\"116\":\"Sud-Vest\"}', '2020-12-13 19:04:56', '2020-12-13 19:04:58', NULL),
(2, '1094516', '[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]', '2020-12-13 19:04:56', '2020-12-13 19:04:56', NULL),
(3, '1094506', '{\"50\":\"Calnic\",\"53\":1,\"54\":1,\"55\":\"2020-12-10T15:11:37.446Z\",\"56\":\"Va propunem spre vanzare casa + teren situata in sat Calnic, comuna Calnic, judetul Gorj.\\r\\nCasa este finalizata partial, are regim de inaltime P+1 si o suprafata de 180 mp.\\r\\nConfortul termic este asigurat cu ajutorul sobelor pe lemne, iar apa provine de la fantana din curte.\\r\\nTerenul aferent proprietatii este in suprafata de 2833, din care 1106 mp sunt incadrati ca intravilan.\\r\\n\\r\\nPret: 39000 euro negociabil\",\"57\":\"Imediat\",\"66\":true,\"153\":44.9658747023983,\"154\":23.0722856329541,\"80\":true,\"87\":39000,\"89\":216.67,\"90\":\"standard\",\"91\":\"standard\",\"93\":3,\"94\":\"Gorj\",\"162\":2833,\"159\":\"Casa si teren, sat Calnic\",\"110\":1,\"111\":1,\"116\":\"Sud-Vest\",\"105\":180}', '2020-12-13 19:04:58', '2020-12-13 19:05:01', NULL),
(4, '1094506', '[\"Gresie\",\"Parchet\"]', '2020-12-13 19:04:58', '2020-12-13 19:04:58', NULL),
(5, '1094506', '[\"Aragaz\",\"Frigider\"]', '2020-12-13 19:04:58', '2020-12-13 19:04:58', NULL),
(6, '1094506', '[\"Faian\\u021b\\u0103\"]', '2020-12-13 19:04:58', '2020-12-13 19:04:58', NULL),
(7, '1094506', '[\"Sob\\u0103 \\/ Teracot\\u0103\"]', '2020-12-13 19:04:58', '2020-12-13 19:04:58', NULL),
(8, '1094506', '[\"Ap\\u0103\",\"Canalizare\",\"Curent\",\"Gaz\",\"Internet\",\"Telefon\"]', '2020-12-13 19:04:58', '2020-12-13 19:04:58', NULL),
(9, '1094506', '[\"Lemn\"]', '2020-12-13 19:04:58', '2020-12-13 19:04:58', NULL),
(10, '1094142', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-10T09:39:23.349Z\",\"56\":\"Va propunem spre inchiriere hale industriale + teren aferent, situate in Targu-Jiu, cartier Romanesti, o hala de 400 mp construita din panouri sandwich, si o a doua hala de 450 mp construita din tabla, suprafata totala utila fiind de 850 mp,\\u00a0 terenul avand o suprafata de 4282 mp.\\r\\nAccesul la imobil se face prin drumul de servitute propriu, cu o latime de 10 m, si lung de 76 m.\\r\\n\\r\\nPre\\u021b\\u00a0 6 euro\\/mp hala usor negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.008399477323,\"154\":23.2581508291163,\"80\":true,\"87\":39000,\"89\":216.67,\"90\":\"standard\",\"91\":\"standard\",\"93\":7,\"94\":\"Gorj\",\"162\":4282,\"159\":\"Hala si teren Cartier Romanesti\",\"110\":1,\"111\":1,\"116\":\"Sud\",\"105\":850,\"42\":1,\"148\":4,\"65\":true,\"79\":true,\"142\":2,\"86\":5100,\"88\":6,\"98\":2}', '2020-12-13 19:05:01', '2020-12-13 19:05:04', NULL),
(11, '1094142', '[\"Acces TIR\",\"U\\u0219i de acces\"]', '2020-12-13 19:05:01', '2020-12-13 19:05:01', NULL),
(12, '1094142', '[\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]', '2020-12-13 19:05:01', '2020-12-13 19:05:01', NULL),
(13, '1094142', '[\"Utilit\\u0103\\u021bi \\u00een zon\\u0103\"]', '2020-12-13 19:05:01', '2020-12-13 19:05:01', NULL),
(14, '1094121', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-10T09:20:50.780Z\",\"56\":\"V\\u0103 propunem spre v\\u00e2nzare apartament 2 camere, semidecomandat, situat \\u00een Municipiul T\\u00e2rgu-Jiu, str. Pacii, et.4, cu o suprafa\\u021b\\u0103 total\\u0103 de 42 mp.\\r\\nApartamentul se vinde complet mobilat si utilat.\\r\\nDispune de multiple \\u00eembun\\u0103t\\u0103\\u021biri: gresie, faian\\u021b\\u0103, central\\u0103 termic\\u0103, aer conditionat, izolat termic exterior, parchet, u\\u0219i interioare schimbate, u\\u0219\\u0103 metalic\\u0103 la intrare, t\\u00e2mpl\\u0103rie pvc cu geam termopan, balcon inchis, loc de parcare.\\r\\n\\u00cen vecinatate se afl\\u0103 supermarket-uri, \\u0219coli, gr\\u0103dini\\u021be, piata, etc.\\r\\n\\r\\nPre\\u021b 45000 euro negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.0292130098085,\"154\":23.2722106602388,\"80\":true,\"87\":45000,\"89\":1071.43,\"90\":\"standard\",\"91\":\"standard\",\"93\":1,\"94\":\"Gorj\",\"162\":4282,\"159\":\"Apartament doua camere, etajul 4, Strada Paacii\",\"110\":1,\"111\":1,\"116\":\"Nicolae Titulescu\",\"105\":42,\"42\":1,\"148\":4,\"65\":true,\"79\":true,\"142\":2,\"86\":5100,\"88\":6,\"98\":2,\"40\":6,\"43\":1,\"45\":4,\"48\":1,\"64\":6,\"74\":5,\"75\":1,\"84\":2}', '2020-12-13 19:05:05', '2020-12-13 19:05:07', NULL),
(15, '1094121', '[\"Gresie\",\"Parchet\"]', '2020-12-13 19:05:05', '2020-12-13 19:05:05', NULL),
(16, '1094121', '[\"Mobilat\\u0103\",\"Utilat\\u0103\"]', '2020-12-13 19:05:05', '2020-12-13 19:05:05', NULL),
(17, '1094121', '[\"Aragaz\",\"Cad\\u0103\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\"]', '2020-12-13 19:05:05', '2020-12-13 19:05:05', NULL),
(18, '1094121', '[\"PVC\"]', '2020-12-13 19:05:05', '2020-12-13 19:05:05', NULL),
(19, '1094121', '[\"Complet\"]', '2020-12-13 19:05:05', '2020-12-13 19:05:05', NULL),
(20, '1094121', '[\"Faian\\u021b\\u0103\"]', '2020-12-13 19:05:05', '2020-12-13 19:05:05', NULL),
(21, '1094121', '[\"Calorifere\",\"Central\\u0103 proprie\"]', '2020-12-13 19:05:05', '2020-12-13 19:05:05', NULL),
(22, '1094121', '[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\",\"Internet\",\"Telefon\"]', '2020-12-13 19:05:05', '2020-12-13 19:05:05', NULL),
(23, '1094121', '[\"Lemn\"]', '2020-12-13 19:05:05', '2020-12-13 19:05:05', NULL),
(24, '1094121', '[\"Metal\"]', '2020-12-13 19:05:05', '2020-12-13 19:05:05', NULL),
(25, '1094102', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-10T09:04:00.412Z\",\"56\":\"Va propunem spre vanzare casa situata in Targu Jiu, str. Panduri, judetul Gorj.\\r\\nCasa are o suprafata construita de 240 mp, amprenta la sol de 150 mp, este compusa din 4 camere, 1 living,  1 bucatarie, 3 bai, dressing, camera centralei si doua terase exterioare.\\r\\nImbunatatirile imobilului sunt: ferestre din tamplarie PVC cu geam termopan, instalatie electrica trifazica cu intrerupatoare cap-scara, izolatie termica la exterior cu polistiren de 10 cm, scara interioara cu doua rampe si podest intermediar.\\r\\nTerenul are o suprafata de 570 mp, curtea este imprejmuita de un gard zidit ce ofera intimitate proprietarilor, iar ca amenajare regasim o alee generoasa si gazon.\\r\\n\\r\\nPret: 137000 euro.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.0245280272193,\"154\":23.2621006706245,\"80\":true,\"87\":137000,\"89\":1071.43,\"90\":\"standard\",\"91\":\"standard\",\"93\":3,\"94\":\"Gorj\",\"162\":570,\"159\":\"Casa strada Panduri, Tg-Jiu\",\"110\":1,\"111\":1,\"116\":\"Sud-Vest\",\"105\":42,\"42\":3,\"148\":4,\"65\":true,\"79\":true,\"142\":2,\"86\":5100,\"88\":6,\"98\":4,\"40\":6,\"43\":1,\"45\":1,\"48\":1,\"64\":6,\"74\":5,\"75\":1,\"84\":2,\"52\":9,\"85\":2019,\"102\":240,\"107\":2}', '2020-12-13 19:05:07', '2020-12-13 19:05:10', NULL),
(26, '1094102', '[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]', '2020-12-13 19:05:07', '2020-12-13 19:05:07', NULL),
(27, '1094102', '[\"Geamuri termopan\"]', '2020-12-13 19:05:07', '2020-12-13 19:05:07', NULL),
(28, '1094102', '[\"Exterior\"]', '2020-12-13 19:05:07', '2020-12-13 19:05:07', NULL),
(29, '1094102', '[\"Ap\\u0103\",\"Curent\",\"Gaz\"]', '2020-12-13 19:05:07', '2020-12-13 19:05:07', NULL),
(30, '1094102', '[\"MDF\",\"PVC\"]', '2020-12-13 19:05:07', '2020-12-13 19:05:07', NULL),
(31, '1094102', '[\"Metal\"]', '2020-12-13 19:05:07', '2020-12-13 19:05:07', NULL),
(32, '1094067', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-10T08:22:29.980Z\",\"56\":\"V\\u0103 propunem spre v\\u00e2nzare apartament 2 camere, decomandat, situat \\u00een Municipiul T\\u00e2rgu-Jiu, Aleea Plopilor, parter, cu o suprafa\\u021b\\u0103 utila de 36 mp.\\r\\nDispune de: gresie, faian\\u021b\\u0103, central\\u0103 termic\\u0103, izolat termic exterior, parchet, u\\u0219i interioare schimbate, u\\u0219\\u0103 metalic\\u0103 la intrare, t\\u00e2mpl\\u0103rie pvc cu geam termopan, loc de parcare.\\r\\n\\u00cen vecinatate se afl\\u0103 supermarket-uri, \\u0219coli, gr\\u0103dini\\u021be, piata, policlinica , etc.\\r\\nApartamentul se vinde complet mobilat si utilat.\\r\\n\\r\\nPre\\u021b 227000 lei, negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.022664509498,\"154\":23.2781596344175,\"80\":true,\"87\":47000,\"89\":1305.56,\"90\":\"standard\",\"91\":\"standard\",\"93\":1,\"94\":\"Gorj\",\"162\":570,\"159\":\"Casa strada Panduri, Tg-Jiu\",\"110\":1,\"111\":1,\"116\":\"Plopilor\",\"105\":36,\"42\":1,\"148\":4,\"65\":true,\"79\":true,\"142\":2,\"86\":5100,\"88\":6,\"98\":2,\"40\":6,\"43\":1,\"45\":4,\"48\":1,\"64\":2,\"74\":7,\"75\":1,\"84\":1,\"52\":9,\"85\":2019,\"102\":42,\"107\":2}', '2020-12-13 19:05:10', '2020-12-13 19:05:13', NULL),
(33, '1094067', '[\"Gresie\",\"Parchet\"]', '2020-12-13 19:05:10', '2020-12-13 19:05:10', NULL),
(34, '1094067', '[\"Mobilat\\u0103\",\"Utilat\\u0103\"]', '2020-12-13 19:05:10', '2020-12-13 19:05:10', NULL),
(35, '1094067', '[\"Aragaz\",\"Cad\\u0103\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\",\"TV\"]', '2020-12-13 19:05:10', '2020-12-13 19:05:10', NULL),
(36, '1094067', '[\"Geamuri termopan\"]', '2020-12-13 19:05:10', '2020-12-13 19:05:10', NULL),
(37, '1094067', '[\"Complet\"]', '2020-12-13 19:05:10', '2020-12-13 19:05:10', NULL),
(38, '1094067', '[\"Parcare deschis\\u0103\"]', '2020-12-13 19:05:10', '2020-12-13 19:05:10', NULL),
(39, '1094067', '[\"Faian\\u021b\\u0103\"]', '2020-12-13 19:05:10', '2020-12-13 19:05:10', NULL),
(40, '1094067', '[\"Calorifere\",\"Central\\u0103 proprie\"]', '2020-12-13 19:05:10', '2020-12-13 19:05:10', NULL),
(41, '1094067', '[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\",\"Internet\",\"Telefon\"]', '2020-12-13 19:05:10', '2020-12-13 19:05:10', NULL),
(42, '1094067', '[\"Lemn\"]', '2020-12-13 19:05:10', '2020-12-13 19:05:10', NULL),
(43, '1094067', '[\"Metal\"]', '2020-12-13 19:05:10', '2020-12-13 19:05:10', NULL),
(44, '1094052', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-10T07:51:44.128Z\",\"56\":\"Va propunem spre vanzare teren intravilan, situat in Municipiul Tg-Jiu, Aleea Dumbrava, cu o suprafata de 6190 mp, terenul se vinde si in parcele de 1000 mp sau mai mari iar pretul se discuta direct cu clientii interesati.\\r\\n    Dispune de utilitati zonei.\\r\\n\\r\\nPret 25 euro\\/mp, negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.0683891724016,\"154\":23.2875390974955,\"80\":true,\"87\":154750,\"89\":25,\"90\":\"standard\",\"91\":\"standard\",\"93\":6,\"94\":\"Gorj\",\"162\":6190,\"159\":\"Teren intravilan, Aleea Dumbrava\",\"110\":1,\"111\":1,\"116\":\"Nord\",\"105\":36,\"42\":1,\"148\":4,\"65\":true,\"79\":true,\"142\":2,\"86\":5100,\"88\":6,\"98\":2,\"40\":6,\"43\":1,\"45\":4,\"48\":1,\"64\":2,\"74\":7,\"75\":1,\"84\":1,\"52\":9,\"85\":2019,\"102\":42,\"107\":2}', '2020-12-13 19:05:13', '2020-12-13 19:05:16', NULL),
(45, '1094052', '[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]', '2020-12-13 19:05:13', '2020-12-13 19:05:13', NULL),
(46, '1094052', '[\"Ap\\u0103\",\"Curent\",\"Gaz\"]', '2020-12-13 19:05:13', '2020-12-13 19:05:13', NULL),
(47, '1093192', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-08T15:08:01.572Z\",\"56\":\"Va propunem spre inchiriere spatiu comercial, cu o suprafata utila de 37 mp, situat in Municipiul Targu Jiu, Bulevardul Ecaterina Teodoroiu, zona Hotel Anna.\\r\\n   Interiorul a fost renovat si dispune de urmatoarele: gresie, faianta, aer conditionat, tamplarie PVC cu geam termopan, loc de parcare pentru patru masini.\\r\\n   Spatiul este  pretabil pentru birouri sau orice tip de activitate comerciala.\\r\\n\\r\\nPret 400 euro, usor negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.032698620537,\"154\":23.2733823250817,\"80\":true,\"87\":154750,\"89\":25,\"90\":\"standard\",\"91\":\"standard\",\"93\":4,\"94\":\"Gorj\",\"162\":6190,\"159\":\"Spatiu 37 mp, Bld. Ecaterina Teodoroiu, zona Hotel Anna\",\"110\":1,\"111\":1,\"116\":\"Central\",\"105\":37,\"42\":1,\"148\":3,\"65\":true,\"79\":true,\"142\":2,\"86\":400,\"88\":6,\"98\":2,\"40\":6,\"43\":1,\"45\":4,\"48\":1,\"64\":2,\"74\":7,\"75\":1,\"84\":1,\"52\":9,\"85\":2019,\"102\":42,\"107\":2,\"143\":4,\"83\":4}', '2020-12-13 19:05:16', '2020-12-13 19:05:18', NULL),
(48, '1093192', '[\"Internet\",\"Telefon\"]', '2020-12-13 19:05:16', '2020-12-13 19:05:16', NULL),
(49, '1093159', '{\"50\":\"Stanesti\",\"53\":1,\"54\":1,\"55\":\"2020-12-08T14:31:25.243Z\",\"56\":\"Va propunem spre vanzare proprietate superba in satul Stanesti, judetul Gorj.\\r\\n    Proprietatea dispune de un imobil cu o amprenta la sol de 87 mp, construit pe un nivel, compartimentarea oferind 3 camere si un grup sanitar; si o anexa de 54 mp amenajata pentru cresterea gainilor.\\r\\n    Imbunatatirile imobilului sunt: tamplarie PVC cu geam termopan, parchet, gresie, faianta.\\r\\n    Terenul are o suprafata totala de 7846 mp si este impartit astfel: 1584 mp incadrati ca intravilan; se continua cu un platou de 5265 mp extravilan livada si arabil ce ofera multiple posibilitati de amenajare si exploatare datorita faptului ca este un teren plat; si 997 mp sunt acoperiti de vie.\\r\\n     Proprietatea este racordata electric, gazele si canalizarea fiind la limita proprietatii.\\r\\n     De asemenea, frumusetea imprejurimilor, apropierea de zona montana, dar si distanta mica fata de orasul Targu Jiu (14 km),  sunt atuuri ce nu pot fi ignorate, proprietatea putand fi folosita ca locuinta, ferma de familie, dar existand potential si pentru pensiune.\\r\\n     Pentru mai multe detalii va asteptam la sediul agentiei noastre de la Paralela 45.\\r\\n\\r\\n     Pret: 80000 Euro negociabil\",\"57\":\"Imediat\",\"66\":true,\"153\":45.1061027042706,\"154\":23.243372056473,\"80\":true,\"87\":80000,\"89\":987.65,\"90\":\"standard\",\"91\":\"standard\",\"93\":3,\"94\":\"Gorj\",\"162\":7846,\"159\":\"Casa comuna Stanesti, judetul Gorj\",\"110\":1,\"111\":1,\"116\":\"Central\",\"105\":81,\"42\":1,\"148\":3,\"65\":true,\"79\":true,\"142\":2,\"86\":400,\"88\":6,\"98\":3,\"40\":6,\"43\":2,\"45\":4,\"48\":1,\"64\":2,\"74\":7,\"75\":1,\"84\":1,\"52\":9,\"85\":2019,\"102\":42,\"107\":2,\"143\":4,\"83\":4,\"47\":2}', '2020-12-13 19:05:18', '2020-12-13 19:05:21', NULL),
(50, '1093159', '[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]', '2020-12-13 19:05:18', '2020-12-13 19:05:18', NULL),
(51, '1093159', '[\"Gresie\",\"Parchet\"]', '2020-12-13 19:05:18', '2020-12-13 19:05:18', NULL),
(52, '1093159', '[\"Mobilat\\u0103\",\"Utilat\\u0103\"]', '2020-12-13 19:05:18', '2020-12-13 19:05:18', NULL),
(53, '1093159', '[\"Aragaz\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\"]', '2020-12-13 19:05:18', '2020-12-13 19:05:18', NULL),
(54, '1093159', '[\"Geamuri termopan\"]', '2020-12-13 19:05:18', '2020-12-13 19:05:18', NULL),
(55, '1093159', '[\"Complet\"]', '2020-12-13 19:05:18', '2020-12-13 19:05:18', NULL),
(56, '1093159', '[\"Vopsea lavabil\\u0103\"]', '2020-12-13 19:05:18', '2020-12-13 19:05:18', NULL),
(57, '1093159', '[\"Sob\\u0103 \\/ Teracot\\u0103\"]', '2020-12-13 19:05:18', '2020-12-13 19:05:18', NULL),
(58, '1093159', '[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\",\"Internet\",\"Telefon\"]', '2020-12-13 19:05:18', '2020-12-13 19:05:18', NULL),
(59, '1093159', '[\"PVC\"]', '2020-12-13 19:05:18', '2020-12-13 19:05:18', NULL),
(60, '1093100', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-08T14:08:05.845Z\",\"56\":\"V\\u0103 propunem spre v\\u00e2nzare casa situata \\u00een Municipiul T\\u00e2rgu-Jiu, strada Comuna din Paris, la 5 minute de centrul orasului, cu teren aferent in suprafata de 344 mp, si deschidere la strada de 16 ml, avand o amprenta la sol de 99 mp, iar suprafata construita desfasurata fiind de 113 mp..\\r\\n   Imobilul este construit din caramida si acoperit cu tigla, compartimentat astfel: hol, camera de zi, dormitor, baie, bucatarie, hol, plus o anexa lipita de casa cu un dormitor si baie proprie, sub care se afla beciul. In spatele casei se gaseste un foisor.\\r\\n   \\u00cen vecinatate se afl\\u0103 terasa si hotelul Anna, supermarketuri, scoli, licee, mijloace de transport in comun.\\r\\n\\r\\nPre\\u021b 128900 euro, negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.0440698228168,\"154\":23.2726709770574,\"80\":true,\"87\":128900,\"89\":987.65,\"90\":\"standard\",\"91\":\"standard\",\"93\":3,\"94\":\"Gorj\",\"162\":344,\"159\":\"Casa batraneasca , stradaComuna din Paris\",\"110\":1,\"111\":1,\"116\":\"Comuna din Paris\",\"105\":81,\"42\":2,\"148\":3,\"65\":true,\"79\":true,\"142\":2,\"86\":400,\"88\":6,\"98\":3,\"40\":6,\"43\":2,\"45\":4,\"48\":1,\"64\":2,\"74\":5,\"75\":1,\"84\":1,\"52\":9,\"85\":2019,\"102\":113,\"107\":2,\"143\":4,\"83\":4,\"47\":2}', '2020-12-13 19:05:22', '2020-12-13 19:05:24', NULL),
(61, '1093100', '[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]', '2020-12-13 19:05:22', '2020-12-13 19:05:22', NULL),
(62, '1093100', '[\"Gresie\"]', '2020-12-13 19:05:22', '2020-12-13 19:05:22', NULL),
(63, '1093100', '[\"Mobilat\\u0103\",\"Utilat\\u0103\"]', '2020-12-13 19:05:22', '2020-12-13 19:05:22', NULL),
(64, '1093100', '[\"Aragaz\",\"Cad\\u0103\",\"Frigider\"]', '2020-12-13 19:05:22', '2020-12-13 19:05:22', NULL),
(65, '1093100', '[\"Lemn\"]', '2020-12-13 19:05:22', '2020-12-13 19:05:22', NULL),
(66, '1093100', '[\"Faian\\u021b\\u0103\"]', '2020-12-13 19:05:22', '2020-12-13 19:05:22', NULL),
(67, '1093100', '[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\"]', '2020-12-13 19:05:22', '2020-12-13 19:05:22', NULL),
(68, '1093100', '[\"Lemn\"]', '2020-12-13 19:05:22', '2020-12-13 19:05:22', NULL),
(69, '1093100', '[\"Lemn\"]', '2020-12-13 19:05:22', '2020-12-13 19:05:22', NULL),
(70, '1093014', '{\"50\":\"Stanesti\",\"53\":1,\"54\":1,\"55\":\"2020-12-08T12:59:40.791Z\",\"56\":\"Va propunem spre vanzare casa situata in Comuna Stanesti, Sat Stanesti, Judetul Gorj,  la aproximativ 16 km de Targu Jiu, cu o amprenta la sol in suprafata de 117 mp plus teren aferent cu o suprafata de 600 mp, deschiderea la strada fiind de 29 ml .\\r\\nImobilul este compus din 2 camere,  bucatarie, baie,  sufragerie, beneficiind de anexe, terasa, cuptor din caramida, camera centralei.\\r\\nCasa dispune de: gresie faianta, tamplarie PVC cu geam termopan, boilar electric.\\r\\n\\r\\nPret 36 900 Euro, negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.1178928323854,\"154\":23.2378008426474,\"80\":true,\"87\":36900,\"89\":987.65,\"90\":\"standard\",\"91\":\"standard\",\"93\":3,\"94\":\"Gorj\",\"162\":600,\"159\":\"Casa comuna Stanesti, judetul Gorj\",\"110\":1,\"111\":1,\"116\":\"Comuna din Paris\",\"105\":81,\"42\":1,\"148\":3,\"65\":true,\"79\":true,\"142\":2,\"86\":400,\"88\":6,\"98\":3,\"40\":6,\"43\":1,\"45\":4,\"48\":1,\"64\":2,\"74\":5,\"75\":1,\"84\":1,\"52\":9,\"85\":2019,\"102\":117,\"107\":2,\"143\":4,\"83\":4,\"47\":2}', '2020-12-13 19:05:24', '2020-12-13 19:05:27', NULL),
(71, '1093014', '[\"Gresie\"]', '2020-12-13 19:05:24', '2020-12-13 19:05:24', NULL),
(72, '1093014', '[\"Faian\\u021b\\u0103\"]', '2020-12-13 19:05:24', '2020-12-13 19:05:24', NULL),
(73, '1093014', '[\"Ap\\u0103\",\"Canalizare\",\"Curent\",\"Gaz\",\"Internet\"]', '2020-12-13 19:05:24', '2020-12-13 19:05:24', NULL),
(74, '1092887', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-08T11:34:11.824Z\",\"56\":\"V\\u0103 propunem spre v\\u00e2nzare teren extravilan, situat \\u00een Municipiul T\\u00e2rgu-Jiu, strada Panduri, cu o suprafa\\u021b\\u0103 de 4990 mp, front stradal de 13.30 ml si o adancime de 384 m, dispune de utilit\\u0103\\u021bile zonei.\\r\\n\\r\\nPre\\u021b 8 euro\\/mp negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.0281650776128,\"154\":23.2613353722697,\"80\":true,\"87\":39920,\"89\":8,\"90\":\"standard\",\"91\":\"standard\",\"93\":6,\"94\":\"Gorj\",\"162\":4990,\"159\":\"Parcela Teren 4990, strada Panduri\",\"110\":1,\"111\":1,\"116\":\"Sud-Vest\",\"105\":81,\"42\":1,\"148\":3,\"65\":true,\"79\":true,\"142\":2,\"86\":400,\"88\":6,\"98\":3,\"40\":6,\"43\":1,\"45\":4,\"48\":1,\"64\":2,\"74\":5,\"75\":1,\"84\":1,\"52\":9,\"85\":2019,\"102\":117,\"107\":2,\"143\":4,\"83\":4,\"47\":2,\"155\":13}', '2020-12-13 19:05:27', '2020-12-13 19:05:32', NULL),
(75, '1092887', '[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]', '2020-12-13 19:05:27', '2020-12-13 19:05:27', NULL),
(76, '1092881', '{\"50\":\"Turcinesti\",\"53\":1,\"54\":1,\"55\":\"2020-12-08T11:19:55.990Z\",\"56\":\"Va propunem spre vanzare teren pretabil pentru constructie casa, situat in Turcinesti, langa Primarie, cu o suprafata de 400 mp, deschidere de 22 ml la strada si o adancime de 18 m.\\r\\n   Dispune de utilitati zonei precum apa, gaze, electricitate.\\r\\n\\r\\nPret 16 500 euro, negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.0844076200576,\"154\":23.3043290074719,\"80\":true,\"87\":16500,\"89\":41.25,\"90\":\"standard\",\"91\":\"standard\",\"93\":6,\"94\":\"Gorj\",\"162\":400,\"159\":\"Teren Turcinesti 400 mp, Turcinesti\",\"110\":1,\"111\":1,\"116\":\"Sud-Vest\",\"105\":81,\"42\":1,\"148\":3,\"65\":true,\"79\":true,\"142\":2,\"86\":400,\"88\":6,\"98\":3,\"40\":6,\"43\":1,\"45\":4,\"48\":1,\"64\":2,\"74\":5,\"75\":1,\"84\":1,\"52\":9,\"85\":2019,\"102\":117,\"107\":2,\"143\":4,\"83\":4,\"47\":2,\"155\":13}', '2020-12-13 19:05:32', '2020-12-13 19:05:35', NULL),
(77, '1092881', '[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]', '2020-12-13 19:05:32', '2020-12-13 19:05:32', NULL),
(78, '1092881', '[\"Ap\\u0103\",\"Curent\",\"Gaz\"]', '2020-12-13 19:05:32', '2020-12-13 19:05:32', NULL),
(79, '1092861', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-08T10:48:43.076Z\",\"56\":\"V\\u0103 propunem spre v\\u00e2nzare apartament 2 camere, etaj 4, cu o suprafa\\u021b\\u0103 total\\u0103 de 48 mp., semidecomandat, situat \\u00een Municipiul T\\u00e2rgu-Jiu, strada 16 Febrarie ( zona Gardu).\\r\\n   Dispune de multiple \\u00eembun\\u0103t\\u0103\\u021biri: gresie, faian\\u021b\\u0103, central\\u0103 termic\\u0103, izolat termic exterior, parchet, u\\u0219i interioare schimbate, u\\u0219\\u0103 metalic\\u0103 la intrare, t\\u00e2mpl\\u0103rie pvc cu geam termopan, balcon inchis, loc de parcare si boxa pe casa scarii.\\r\\n   Apartamentul se vinde complet mobilat si utilat.\\r\\n   \\u00cen vecinatate se afl\\u0103 supermarket-uri, \\u0219coli, gr\\u0103dini\\u021be, etc.\\r\\n\\r\\nPre\\u021b 58.000 euro negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.0355105760635,\"154\":23.2795583202889,\"80\":true,\"87\":58000,\"89\":1208.33,\"90\":\"standard\",\"91\":\"standard\",\"93\":1,\"94\":\"Gorj\",\"162\":400,\"159\":\"Apartament 2 camere, zona Gardu\",\"110\":1,\"111\":1,\"116\":\"Unirii\",\"105\":48,\"42\":1,\"148\":3,\"65\":true,\"79\":true,\"142\":2,\"86\":400,\"88\":6,\"98\":2,\"40\":6,\"43\":1,\"45\":4,\"48\":1,\"64\":6,\"74\":7,\"75\":1,\"84\":2,\"52\":9,\"85\":2019,\"102\":117,\"107\":2,\"143\":4,\"83\":4,\"47\":2,\"155\":13,\"41\":1}', '2020-12-13 19:05:35', '2020-12-13 19:05:41', NULL),
(80, '1092861', '[\"Gresie\",\"Parchet\"]', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL),
(81, '1092861', '[\"\\u00cenchis\\u0103\",\"Utilat\\u0103\"]', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL),
(82, '1092861', '[\"Aragaz\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\"]', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL),
(83, '1092861', '[\"Geamuri termopan\"]', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL),
(84, '1092861', '[\"Exterior\"]', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL),
(85, '1092861', '[\"Complet\"]', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL),
(86, '1092861', '[\"Faian\\u021b\\u0103\",\"Vopsea lavabil\\u0103\"]', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL),
(87, '1092861', '[\"Central\\u0103 proprie\"]', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL),
(88, '1092861', '[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\",\"Internet\",\"Telefon\"]', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL),
(89, '1092861', '[\"Lemn\"]', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL),
(90, '1092861', '[\"Metal\"]', '2020-12-13 19:05:35', '2020-12-13 19:05:35', NULL),
(91, '1092839', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-08T10:35:46.400Z\",\"56\":\"V\\u0103 propunem spre v\\u00e2nzare apartament 2 camere, situat \\u00een Municipiul T\\u00e2rgu-Jiu, strada Minerilor, parter, cu o suprafa\\u021b\\u0103 total\\u0103 de 25 mp.\\r\\n   Apartamentul este momentan transformat in spatiu comercial.\\r\\n   Dispune de multiple \\u00eembun\\u0103t\\u0103\\u021biri: gresie, faian\\u021b\\u0103, central\\u0103 termic\\u0103, izolat termic exterior, u\\u0219i interioare schimbate, u\\u0219\\u0103 la intrarea exterioara cu gratar, t\\u00e2mpl\\u0103rie pvc cu geam termopan.\\r\\n   \\u00cen vecinatate se afl\\u0103 supermarket-uri, \\u0219coli, gr\\u0103dini\\u021be, piata, etc.\\r\\n\\r\\nPre\\u021b 34000 euro negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.027323748629,\"154\":23.2753107569779,\"80\":true,\"87\":34000,\"89\":1360,\"90\":\"standard\",\"91\":\"standard\",\"93\":1,\"94\":\"Gorj\",\"162\":400,\"159\":\"Apartament 2 camere, parter, strada MInerilor\",\"110\":1,\"111\":1,\"116\":\"9 Mai\",\"105\":25,\"42\":1,\"148\":3,\"65\":true,\"79\":true,\"142\":2,\"86\":400,\"88\":6,\"98\":2,\"40\":6,\"43\":1,\"45\":4,\"48\":1,\"64\":2,\"74\":7,\"75\":1,\"84\":2,\"52\":9,\"85\":2019,\"102\":117,\"107\":2,\"143\":4,\"83\":4,\"47\":2,\"155\":13,\"41\":1}', '2020-12-13 19:05:41', '2020-12-13 19:05:45', NULL),
(92, '1092839', '[\"Gresie\"]', '2020-12-13 19:05:41', '2020-12-13 19:05:41', NULL),
(93, '1092839', '[\"Frigider\"]', '2020-12-13 19:05:41', '2020-12-13 19:05:41', NULL),
(94, '1092839', '[\"Geamuri termopan\"]', '2020-12-13 19:05:41', '2020-12-13 19:05:41', NULL),
(95, '1092839', '[\"Exterior\"]', '2020-12-13 19:05:41', '2020-12-13 19:05:41', NULL),
(96, '1092839', '[\"Faian\\u021b\\u0103\"]', '2020-12-13 19:05:41', '2020-12-13 19:05:41', NULL),
(97, '1092839', '[\"Central\\u0103 proprie\"]', '2020-12-13 19:05:41', '2020-12-13 19:05:41', NULL),
(98, '1092839', '[\"Ap\\u0103\",\"Canalizare\",\"Curent\",\"Gaz\",\"Internet\"]', '2020-12-13 19:05:41', '2020-12-13 19:05:41', NULL),
(99, '1092839', '[\"Lemn\"]', '2020-12-13 19:05:41', '2020-12-13 19:05:41', NULL),
(100, '1092839', '[\"Metal\"]', '2020-12-13 19:05:41', '2020-12-13 19:05:41', NULL),
(101, '1092805', '{\"50\":\"Targu-Jiu\",\"53\":1,\"54\":1,\"55\":\"2020-12-08T10:13:47.484Z\",\"56\":\"V\\u0103 propunem spre v\\u00e2nzare apartament 4 camere, decomandat, situat \\u00een Municipiul T\\u00e2rgu-Jiu, strada Victoriei, etajul 1, in aproprierea Shopping City Mall, cu o suprafa\\u021b\\u0103 totala de 87 mp, din care suprafata utila fiind de 76 mp iar balconul avand o suprafata de 11 mp.\\r\\n   Imobilul dispune de urmatoarele \\u00eembun\\u0103t\\u0103\\u021biri: gresie, faian\\u021b\\u0103, parchet, central\\u0103 termic\\u0103, u\\u0219\\u0103 metalic\\u0103 la intrare, t\\u00e2mpl\\u0103rie pvc cu geam termopan, izolatie exterioara, vederea fiind bilaterala.\\r\\n   \\u00cen apropriere aflanduse  supermarket-uri, \\u0219coli, farmacii, spatiu de joaca.\\r\\n   Apartamentul se vinde complet mobilat si utilat.\\r\\n \\r\\nPre\\u021b 89000 euro negociabil.\",\"57\":\"Imediat\",\"66\":true,\"153\":45.0268177135698,\"154\":23.2648803003331,\"80\":true,\"87\":89000,\"89\":1171.05,\"90\":\"standard\",\"91\":\"standard\",\"93\":1,\"94\":\"Gorj\",\"162\":400,\"159\":\"Apartament 4camere, etaj 1, strada Victoriei\",\"110\":1,\"111\":1,\"116\":\"9 Mai\",\"105\":76,\"42\":1,\"148\":3,\"65\":true,\"79\":true,\"142\":2,\"86\":400,\"88\":6,\"98\":4,\"40\":6,\"43\":3,\"45\":4,\"48\":1,\"64\":3,\"74\":7,\"75\":1,\"84\":1,\"52\":9,\"85\":2019,\"102\":83,\"107\":2,\"143\":4,\"83\":4,\"47\":2,\"155\":13,\"41\":1,\"101\":11}', '2020-12-13 19:05:45', '2020-12-13 19:05:53', NULL),
(102, '1092805', '[\"Gresie\",\"Parchet\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(103, '1092805', '[\"Mobilat\\u0103\",\"Utilat\\u0103\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(104, '1092805', '[\"Contor electric\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(105, '1092805', '[\"Aragaz\",\"Cad\\u0103\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\",\"TV\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(106, '1092805', '[\"Geamuri termopan\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(107, '1092805', '[\"Exterior\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(108, '1092805', '[\"Complet\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(109, '1092805', '[\"Faian\\u021b\\u0103\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(110, '1092805', '[\"Calorifere\",\"Central\\u0103 proprie\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(111, '1092805', '[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\",\"Internet\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(112, '1092805', '[\"Lemn\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(113, '1092805', '[\"Metal\"]', '2020-12-13 19:05:45', '2020-12-13 19:05:45', NULL),
(114, '1092735', '[\"Asfaltate\",\"Iluminat stradal\",\"Mijloace de transport \\u00een comun\"]', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL),
(115, '1092735', '[\"Gresie\",\"Parchet\"]', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL),
(116, '1092735', '[\"Mobilat\\u0103\",\"Utilat\\u0103\"]', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL),
(117, '1092735', '[\"Aragaz\",\"Cad\\u0103\",\"Frigider\",\"Ma\\u0219in\\u0103 de sp\\u0103lat rufe\"]', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL),
(118, '1092735', '[\"Geamuri termopan\"]', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL),
(119, '1092735', '[\"Complet\"]', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL),
(120, '1092735', '[\"Faian\\u021b\\u0103\"]', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL),
(121, '1092735', '[\"Central\\u0103 proprie\"]', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL),
(122, '1092735', '[\"Ap\\u0103\",\"Canalizare\",\"CATV\",\"Curent\",\"Gaz\",\"Internet\"]', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL),
(123, '1092735', '[\"Lemn\"]', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL),
(124, '1092735', '[\"Metal\"]', '2020-12-13 19:05:53', '2020-12-13 19:05:53', NULL);

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
(3, NULL, 'savedem', 'cred@ro.com', 'users/default.png', NULL, '1q2w3e4r', NULL, NULL, '2020-12-15 18:39:42', '2020-12-15 18:39:42', 'mere', 'cred', 'ro', 'pit', 'esti', '0726495929'),
(4, NULL, 'Aphrodite Rojas', 'pegomonab@mailinator.com', 'users/default.png', NULL, '$2y$10$N22DbapSKxnC8p/Mp5ual.rMRpllD6IUHRJm73QJjY9NBf3FMQCLe', NULL, NULL, '2020-12-16 18:49:39', '2020-12-16 18:49:39', 'Neve', 'Dudley', 'Et ut quos qui quia', 'Cupiditate obcaecati', 'Natus ut est corrup', '+1 (674) 571-8663'),
(6, NULL, 'Gretchen Pierce', 'hapexupeky@mailinator.com', 'users/default.png', NULL, '$2y$10$VC5w2frkfRnY3fFFjyIzrOPRoSFrXYHceJ00.8331C/ofAF9ugVWK', NULL, NULL, '2020-12-16 18:50:54', '2020-12-16 19:52:25', 'Coltona', 'Berger', 'Sed repudiandae accu', 'Iusto eiusmod except', 'Laboris aute aliquid', '+1 (196) 839-7475'),
(7, NULL, 'Gisela Trujillo', 'qati@mailinator.com', 'users/default.png', NULL, '$2y$10$vuV7nD9Shu3cyvGmmMSvxOAVKevhwdt7UQaO8hKZ4cbpAPOf8djQC', NULL, NULL, '2020-12-16 18:57:00', '2020-12-16 19:52:40', 'McKenzie', 'Blakey', 'Cupiditate incididun', 'Sint consectetur su', 'Iure officia ut adip', '+1 (781) 428-3065');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1094517;

--
-- AUTO_INCREMENT for table `propertie_attributes`
--
ALTER TABLE `propertie_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
