-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2020 at 10:18 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
