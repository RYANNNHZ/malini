-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2025 at 12:01 PM
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
-- Database: `malini`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` char(36) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `image_url` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `image_url`, `created_at`, `updated_at`) VALUES
('9de94c91-6b7b-48c4-989c-cc48876afe0c', 'fresh', '/foto_categories/fresh.jpg', '2025-01-07 05:36:15', '2025-01-07 05:36:15'),
('9de94c92-0534-445d-9647-d31a4e1f635c', 'sweet', '/foto_categories/sweet.jpg', '2025-01-07 05:36:15', '2025-01-07 05:36:15'),
('9de94c92-167d-4287-8f75-2ed84205f959', 'woody', '/foto_categories/woody.jpg', '2025-01-07 05:36:15', '2025-01-07 05:36:15'),
('9de94c92-3081-48d0-8e16-4f2381d864fa', 'Floral', '/foto_categories/flora.jpg', '2025-01-07 05:36:15', '2025-01-07 05:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `coments`
--

CREATE TABLE `coments` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `coment_text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coments`
--

INSERT INTO `coments` (`id`, `product_id`, `user_id`, `coment_text`, `created_at`, `updated_at`) VALUES
('9de94c94-e6be-49e6-b11f-776497853e2c', '9de94c92-8738-4b7a-a3c4-5125cea83f9d', '9de94c90-7d1f-44f5-abd7-e0a6b98e826d', 'yang solaris favorite aku nih', '2025-01-07 05:36:17', '2025-01-07 05:36:17'),
('9de94c95-08b6-419e-bb14-4798e92a3874', '9de94c92-42d2-49d9-883b-81954c744cd1', '9de94c90-7d1f-44f5-abd7-e0a6b98e826d', 'kaya nya yg sotb nih yang paling laris', '2025-01-07 05:36:17', '2025-01-07 05:36:17'),
('9de94c95-484d-43ba-97ce-09384e59cc1d', '9de94c92-6866-400b-b683-ea9644be53be', '9de94c91-1ea2-4155-aa7c-943dcf7253d1', 'love love bgt sama yg ini', '2025-01-07 05:36:17', '2025-01-07 05:36:17'),
('9de94c95-5da7-491b-aa2a-884267994bd4', '9de94c92-c8bf-4caf-9a90-3f13d5af5eb4', '9de94c90-d49c-4597-bcfe-c6845514a606', 'gila aku pake tiap hari njir saking enak nya', '2025-01-07 05:36:17', '2025-01-07 05:36:17'),
('9de94c95-72c6-4de1-b315-715a68abc645', '9de94c92-da22-48e7-8f84-82ba18e57059', '9de94c90-7d1f-44f5-abd7-e0a6b98e826d', 'wanginya kaya gulali', '2025-01-07 05:36:18', '2025-01-07 05:36:18'),
('9de94c95-8a6a-4efc-98b7-767c3084a0eb', '9de94c92-42d2-49d9-883b-81954c744cd1', '9de94c90-d49c-4597-bcfe-c6845514a606', 'premium best lah', '2025-01-07 05:36:18', '2025-01-07 05:36:18'),
('9de94c95-a350-4df9-9733-93d1631bec8a', '9de94c92-42d2-49d9-883b-81954c744cd1', '9de94c90-7d1f-44f5-abd7-e0a6b98e826d', 'premium best lah', '2025-01-07 05:36:18', '2025-01-07 05:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_13_020740_create_products_table', 1),
(6, '2024_08_13_021639_create_ratings_table', 1),
(7, '2024_08_13_022737_create_categories_table', 1),
(8, '2024_08_13_032935_create_coments_table', 1),
(9, '2024_08_15_042210_create_product_categories_table', 1),
(10, '2024_09_24_020058_create_product_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(36) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `image_url`, `price`, `created_at`, `updated_at`) VALUES
('9de94c92-42d2-49d9-883b-81954c744cd1', 'Saff & Co sotb', 'wowowowowowowow', '/foto/sotb.webp', 45000.00, '2025-01-07 05:36:15', '2025-01-07 05:36:15'),
('9de94c92-6866-400b-b683-ea9644be53be', 'Saff & Co chno mini', 'a flora things here', '/foto/chino.png', 45000.00, '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c92-8738-4b7a-a3c4-5125cea83f9d', 'Saff & Co solaris mini', 'fresh things come on', '/foto/solaris.webp', 45000.00, '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c92-c8bf-4caf-9a90-3f13d5af5eb4', 'Saff & Co 540 mini', ' a wood fragrant perfume', '/foto/540.webp', 45000.00, '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c92-da22-48e7-8f84-82ba18e57059', 'Saff & Co Cascavel mini', 'a sweet and aromatic perfume', '/foto/cascavel.jpg', 45000.00, '2025-01-07 05:36:16', '2025-01-07 05:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `category_id` char(36) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
('9de94c92-efe1-4e74-9aeb-95972d618d5d', '9de94c92-42d2-49d9-883b-81954c744cd1', '9de94c91-6b7b-48c4-989c-cc48876afe0c', '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c93-023e-480c-b3f8-83334ad23269', '9de94c92-6866-400b-b683-ea9644be53be', '9de94c92-0534-445d-9647-d31a4e1f635c', '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c93-144a-4005-a982-c5f49efb6349', '9de94c92-8738-4b7a-a3c4-5125cea83f9d', '9de94c92-167d-4287-8f75-2ed84205f959', '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c93-261a-407f-ba22-5d81533f10d9', '9de94c92-c8bf-4caf-9a90-3f13d5af5eb4', '9de94c92-3081-48d0-8e16-4f2381d864fa', '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c93-3a7a-47db-a12b-27936767cc84', '9de94c92-da22-48e7-8f84-82ba18e57059', '9de94c92-0534-445d-9647-d31a4e1f635c', '2025-01-07 05:36:16', '2025-01-07 05:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `product_users`
--

CREATE TABLE `product_users` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `is_checkout` tinyint(1) NOT NULL DEFAULT 0,
  `qty` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `rating_value` enum('1','2','3','4','5') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `product_id`, `user_id`, `rating_value`, `created_at`, `updated_at`) VALUES
('9de94c93-4e42-44d2-8c2e-2c66927974f8', '9de94c92-42d2-49d9-883b-81954c744cd1', '9de94c90-3011-4d04-a174-a2cc3739592e', '5', '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c93-6393-4db5-ad35-e1da30d614c1', '9de94c92-42d2-49d9-883b-81954c744cd1', '9de94c90-d49c-4597-bcfe-c6845514a606', '5', '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c93-ab0a-4bc7-98c9-a407672468af', '9de94c92-6866-400b-b683-ea9644be53be', '9de94c91-1ea2-4155-aa7c-943dcf7253d1', '5', '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c93-bced-4326-a8b1-2116ff954493', '9de94c92-6866-400b-b683-ea9644be53be', '9de94c90-7d1f-44f5-abd7-e0a6b98e826d', '3', '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c93-cf26-4176-a0d7-4de775dbadfa', '9de94c92-8738-4b7a-a3c4-5125cea83f9d', '9de94c90-d49c-4597-bcfe-c6845514a606', '5', '2025-01-07 05:36:16', '2025-01-07 05:36:16'),
('9de94c93-dfd4-4b14-95e0-2e0abf61d544', '9de94c92-8738-4b7a-a3c4-5125cea83f9d', '9de94c91-1ea2-4155-aa7c-943dcf7253d1', '3', '2025-01-07 05:36:17', '2025-01-07 05:36:17'),
('9de94c94-06a9-4109-89e3-81f7b66a229f', '9de94c92-c8bf-4caf-9a90-3f13d5af5eb4', '9de94c90-7d1f-44f5-abd7-e0a6b98e826d', '5', '2025-01-07 05:36:17', '2025-01-07 05:36:17'),
('9de94c94-2697-4550-a16f-c42bbf420dd6', '9de94c92-c8bf-4caf-9a90-3f13d5af5eb4', '9de94c90-d49c-4597-bcfe-c6845514a606', '4', '2025-01-07 05:36:17', '2025-01-07 05:36:17'),
('9de94c94-6232-49b5-8cbf-78e9f997794c', '9de94c92-da22-48e7-8f84-82ba18e57059', '9de94c91-1ea2-4155-aa7c-943dcf7253d1', '4', '2025-01-07 05:36:17', '2025-01-07 05:36:17'),
('9de94c94-bb30-4a9c-ba20-8c147df326fa', '9de94c92-da22-48e7-8f84-82ba18e57059', '9de94c90-7d1f-44f5-abd7-e0a6b98e826d', '2', '2025-01-07 05:36:17', '2025-01-07 05:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_baned` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `role`, `email`, `email_verified_at`, `password`, `is_baned`, `remember_token`, `created_at`, `updated_at`) VALUES
('9de94c90-3011-4d04-a174-a2cc3739592e', 'adrianhamzah', 'admin', 'ryanhzashari13@gmail.com', NULL, '$2y$10$PXsa0mDGLWzfMYtAO.Pdue6hA/vf8V.0jKuB4qutF7TcUNiBC4L8G', 0, NULL, '2025-01-07 05:36:14', '2025-01-07 05:36:14'),
('9de94c90-7d1f-44f5-abd7-e0a6b98e826d', 'zein akbar', 'user', 'zeinAkbar22@gmail.com', NULL, '$2y$10$e40uBwqSTm4luVbvfoGiveHdMW6j32pxkij6EWMeEGJSnHgHZ.oay', 0, NULL, '2025-01-07 05:36:14', '2025-01-07 05:36:14'),
('9de94c90-d49c-4597-bcfe-c6845514a606', 'faraz', 'user', 'Farazzz3@gmail.com', NULL, '$2y$10$EScGhfzZIr4ePzKwqpCIPuZiKquOmFem.u3jE4u.yJgTH6w3eevm6', 0, NULL, '2025-01-07 05:36:15', '2025-01-07 05:36:15'),
('9de94c91-1ea2-4155-aa7c-943dcf7253d1', 'hasban fardani', 'user', 'fardanihasban@gmail.com', NULL, '$2y$10$6NkoztrhNSRI2ZRcFxrtMe3Aedag3wZNW2JNWe1HakPHslQL/FL3a', 0, NULL, '2025-01-07 05:36:15', '2025-01-07 05:36:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coments_product_id_foreign` (`product_id`),
  ADD KEY `coments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_id_foreign` (`product_id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_users`
--
ALTER TABLE `product_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_users_product_id_foreign` (`product_id`),
  ADD KEY `product_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_product_id_foreign` (`product_id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coments`
--
ALTER TABLE `coments`
  ADD CONSTRAINT `coments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_users`
--
ALTER TABLE `product_users`
  ADD CONSTRAINT `product_users_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
