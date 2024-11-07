-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 01:01 PM
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
-- Database: `belajarlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `NamaKursus` varchar(255) NOT NULL,
  `KontenCourse` text NOT NULL,
  `RingkasanDeskripsi` text NOT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `created_at`, `updated_at`, `NamaKursus`, `KontenCourse`, `RingkasanDeskripsi`, `categories_id`) VALUES
(1, '2024-11-05 13:12:53', '2024-11-05 13:12:53', 'Machine Learning', 'Laborum velit sequi assumenda esse quidem voluptas. Minus perspiciatis nulla perferendis voluptatem facere. Deserunt ut nemo ea eum recusandae possimus eligendi. Et soluta est optio consequatur sit corrupti. Sapiente ducimus porro velit odit ab numquam.', 'Nostrum voluptas voluptatem ea qui. Commodi eum soluta debitis aut. Possimus sed quisquam consequatur eaque dolores ut. Qui ipsum earum odio nihil corporis harum iusto et.', 1),
(2, '2024-11-05 13:12:53', '2024-11-05 13:12:53', 'Deep Learning', 'In fugit asperiores repellat quibusdam magnam nostrum. Provident assumenda quis ab. Est aut alias et reprehenderit perspiciatis placeat qui.', 'A nulla doloribus et rerum quas voluptatem dicta. Doloremque beatae et repudiandae ad eos.', 1),
(3, '2024-11-05 13:12:53', '2024-11-05 13:12:53', 'Natural Language Processing', 'Esse voluptatem autem explicabo similique molestias quo eos. Et corrupti quod quis perferendis omnis. Quia qui voluptatem enim sed quia ut quos. Dolorem voluptas nisi iure distinctio quis.', 'Id fuga officia tempore esse necessitatibus dolorem quas. Voluptas officia culpa voluptate molestias accusamus optio molestiae. Qui ut distinctio praesentium molestias dolorem ut qui voluptas.', 1),
(4, '2024-11-05 13:12:53', '2024-11-05 13:12:53', 'Software Security', 'Omnis ut est at voluptatibus deserunt vero perspiciatis. Totam enim modi enim exercitationem eaque dolores blanditiis.', 'Et quia sunt corporis aliquid officiis tempora. Accusantium commodi eaque deserunt vero eligendi id. Itaque nam sunt aliquid est. Maxime reiciendis est omnis est.', 2),
(5, '2024-11-05 13:12:53', '2024-11-05 13:12:53', 'Network Administration', 'Labore voluptatibus ipsa ad qui reiciendis aut. Et velit rerum in itaque culpa nihil necessitatibus. Quis id reprehenderit facere odit quisquam magni impedit.', 'Numquam dolorem laboriosam eum nostrum esse. Illum sed qui ea minima dolor vitae. Nemo laudantium aut repellat asperiores doloremque debitis aspernatur. Excepturi qui ea ad nobis et iusto.', 2),
(6, '2024-11-05 13:12:53', '2024-11-05 13:12:53', 'Popular Network Processing', 'Deserunt est magni sed maxime veritatis neque doloremque. Consectetur laborum accusamus nihil soluta consequuntur magnam quod. Accusantium dolore minus debitis tempora ex inventore. Sint a sequi et voluptas iure modi.', 'Magni saepe saepe sed cum ducimus. Neque quibusdam rem quia minima.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_categories_id_foreign` (`categories_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
