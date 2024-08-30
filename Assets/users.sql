-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2024 at 07:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `InappTest`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `doj` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `designation`, `mobile_number`, `doj`) VALUES
(1, 'admin', NULL, 'admin@example.com', NULL, '$2y$12$zWnyji8N7y/4/M3FS0kEyuW5Jxq.6UEpu19gMMmGtltUaHEGZWpD.', 'admin', NULL, '2024-08-30 09:43:49', '2024-08-30 09:43:49', NULL, NULL, NULL),
(160, 'Donald', 'OConnell', 'test1@yopmail.com', NULL, '$2y$12$TIk3Fdudkzqu6446TfarYe4j7H/.gTQLVHnRXT3iPEDoCp6aZY4ge', 'user', NULL, '2024-08-30 12:20:34', '2024-08-30 12:20:34', 'SE', '1234567890', '21-Jun-07'),
(161, 'Douglas', 'Grant', 'test2@yopmail.com', NULL, '$2y$12$3opoV4rfb2240eRuoIZvb.XpjVd74s.WOqHfALf2FXEruUoRfzg/i', 'user', NULL, '2024-08-30 12:20:35', '2024-08-30 12:20:35', 'SE', '1234567891', '13-Jan-08'),
(162, 'Jennifer', 'Whalen', 'test3@yopmail.com', NULL, '$2y$12$tiTC7.aCYzq0gd3wLN.V.eKewyceAsXx9VbGqdulGMMh58Ppn0AsC', 'user', NULL, '2024-08-30 12:20:35', '2024-08-30 12:20:35', 'SSE', '1234567892', '17-Sep-03'),
(163, 'Michael', 'Hartstein', 'test4@yopmail.com', NULL, '$2y$12$c1B0yZqyNcgGAhTnEiUWP.Jhh8X5r.kdHhU4YVAV5KtOnHp/HM1OS', 'user', NULL, '2024-08-30 12:20:35', '2024-08-30 12:20:35', 'SSE', '1234567893', '17-Feb-04'),
(164, 'Susan', 'Mavris', 'test5@yopmail.com', NULL, '$2y$12$7584qGC.V0NsYuj/URp8nOOTS.LiquVbcF6BdiCSHeMtQCzAM0mWK', 'user', NULL, '2024-08-30 12:20:35', '2024-08-30 12:20:35', 'SA', '1234567895', '07-Jun-02'),
(165, 'Hermann', 'Baer', 'test6@yopmail.com', NULL, '$2y$12$g52f3H63yctKKBPWYPYyU.KBllWWy5gGfqetxZ1gavWZAjca63iV.', 'user', NULL, '2024-08-30 12:20:35', '2024-08-30 12:20:35', 'SA', '1234567896', '07-Jun-02'),
(166, 'Shelley', 'Higgins', 'test7@yopmail.com', NULL, '$2y$12$vvs7ppmxWr9qeFGhcD8izOOUZSG6FGHLsu.LJmDGG/Wji3jH2Z90S', 'user', NULL, '2024-08-30 12:20:36', '2024-08-30 12:20:36', 'SSA', '1234567897', '07-Jun-02'),
(167, 'William', 'Gietz', 'test8@yopmail.com', NULL, '$2y$12$HQO7lQR6c3neDSN..mN8xumNVxhfm/LG5.EsV44BHiEKw9Lx9YsBi', 'user', NULL, '2024-08-30 12:20:36', '2024-08-30 12:20:36', 'SSA', '1234567898', '07-Jun-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
