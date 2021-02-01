-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2020 at 07:11 PM
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
(137, 'Priveliște', 'tags.priveliste', NULL, '2020-12-13 17:08:39', '2020-12-13 17:08:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
