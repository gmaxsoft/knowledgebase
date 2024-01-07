-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Sty 07, 2024 at 12:42 AM
-- Wersja serwera: 8.0.32
-- Wersja PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowledgebase`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2023_11_28_193045_create_navposts_table', 3),
(7, '2023_11_28_214234_create_page_posts_table', 3),
(8, '2023_12_31_020349_add_new_fields_users', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nav_posts`
--

CREATE TABLE `nav_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int NOT NULL,
  `user_id` int NOT NULL,
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav_posts`
--

INSERT INTO `nav_posts` (`id`, `name`, `parent_id`, `user_id`, `position`, `created_at`, `updated_at`) VALUES
(8, 'Linux', 0, 2, 1, '2024-01-06 02:03:13', '2024-01-06 23:04:17'),
(9, 'WSL Installation', 8, 2, 2, '2024-01-06 02:03:40', '2024-01-06 23:04:17'),
(10, 'WSL Commands', 8, 2, 3, '2024-01-06 02:03:59', '2024-01-06 23:04:17'),
(11, 'Docker', 0, 2, 4, '2024-01-06 02:04:23', '2024-01-06 23:04:17'),
(12, 'Docker Installation', 11, 2, 5, '2024-01-06 02:04:42', '2024-01-06 23:04:18'),
(13, 'Docker Commands', 11, 2, 6, '2024-01-06 02:05:03', '2024-01-06 23:04:18'),
(14, 'Github', 0, 2, 7, '2024-01-06 02:05:21', '2024-01-06 23:04:18'),
(15, 'Github Installation', 14, 2, 8, '2024-01-06 02:05:42', '2024-01-06 23:04:18'),
(16, 'Github Commands', 14, 2, 9, '2024-01-06 02:06:00', '2024-01-06 23:04:18'),
(17, 'Composer', 0, 2, 10, '2024-01-06 19:04:37', '2024-01-06 23:04:18'),
(18, 'Composer Commands', 17, 2, 11, '2024-01-06 19:05:31', '2024-01-06 23:04:18'),
(19, 'Laravel', 0, 2, 12, '2024-01-06 22:55:55', '2024-01-06 23:04:18'),
(20, 'Laravel Installation', 19, 2, 13, '2024-01-06 22:57:48', '2024-01-06 23:04:18'),
(21, 'Laravel Commands', 19, 2, 14, '2024-01-06 22:58:43', '2024-01-06 23:04:18'),
(22, 'Getting Started', 0, 2, 0, '2024-01-06 23:04:07', '2024-01-06 23:04:17');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page_posts`
--

CREATE TABLE `page_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `category` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int DEFAULT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_posts`
--

INSERT INTO `page_posts` (`id`, `title`, `content`, `category`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Getting Started', '<div class=\"raw-html-embed\"><h2>This is Your Knowledge Base.</h2>\r\n        <p class=\"lead\">Thank you for using our program.</p>\r\n		<hr>\r\n		<div class=\"row\">\r\n			<div class=\"col-sm-6 col-lg-4\">\r\n				<ul class=\"list-unstyled\">\r\n					<li><strong>Version:</strong> 1.07</li>\r\n					<li><strong>Author:</strong> <a href=\"http://www.maxsoft.pl\" target=\"_blank\">Maxsoft</a></li>\r\n				</ul>\r\n			</div>\r\n			<div class=\"col-sm-6 col-lg-4\">\r\n				<ul class=\"list-unstyled\">\r\n					<li><strong class=\"font-weight-700\">Created:</strong> 14 September, 2023</li>\r\n					<li><strong>Update:</strong> 12 December, 2023</li>\r\n				</ul>\r\n			</div>\r\n		</div>\r\n        <p class=\"alert alert-info\">If you have any questions that are beyond the scope of this help file, Please feel free to email via <a target=\"_blank\" href=\"https://maxsoft.pl/\">Item Support Page</a>.</p></div>', 'Getting Started', 22, 2, '2024-01-06 23:08:05', '2024-01-06 23:17:23'),
(5, 'Linux', '<div class=\"raw-html-embed\"><p class=\"lead mb-5\">Linux Installation, documentation and commands.</p></div>', 'Linux', 8, 2, '2024-01-06 23:21:19', '2024-01-06 23:21:19'),
(6, 'WSL Installation', '<h3 style=\"text-align:justify;\">How to Install WSL</h3><p style=\"text-align:justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices bibendum semper. Nunc at dictum felis. Mauris at turpis at ante eleifend semper. Morbi ac dictum justo. Suspendisse et nunc in justo posuere bibendum. Curabitur quam velit, porttitor non sollicitudin nec, tincidunt a enim. Aenean rhoncus justo at tellus aliquam suscipit. Aenean vestibulum nec erat sed porttitor. Donec vestibulum cursus mattis. Curabitur convallis suscipit porttitor. Nam ante justo, porttitor in purus nec, dignissim efficitur elit. Sed ac neque orci. Nulla dapibus faucibus nulla. Nulla felis quam, vehicula in augue ac, elementum fermentum quam. Donec elit diam, commodo sit amet luctus venenatis, placerat non quam.</p><p style=\"text-align:justify;\">Suspendisse cursus urna et bibendum fermentum. Nulla facilisi. Curabitur at nibh vitae turpis cursus ullamcorper. Sed quis justo a orci congue consectetur. Sed libero nulla, vulputate quis egestas sed, mollis consectetur ante. Nunc non ipsum ligula. Donec at mattis sapien, at vestibulum lacus. Nullam vulputate felis tortor, sed suscipit sem viverra mattis. Morbi ac congue est. In finibus scelerisque accumsan. Etiam scelerisque tortor at sollicitudin lobortis. Aliquam sed eros ornare, ullamcorper orci sit amet, blandit massa.</p>', 'WSL Installation', 9, 2, '2024-01-06 23:23:22', '2024-01-06 23:23:22'),
(7, 'WSL Commands', '<h3>WSL index of commands</h3><p style=\"text-align:justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices bibendum semper. Nunc at dictum felis. Mauris at turpis at ante eleifend semper. Morbi ac dictum justo. Suspendisse et nunc in justo posuere bibendum. Curabitur quam velit, porttitor non sollicitudin nec, tincidunt a enim. Aenean rhoncus justo at tellus aliquam suscipit. Aenean vestibulum nec erat sed porttitor. Donec vestibulum cursus mattis. Curabitur convallis suscipit porttitor. Nam ante justo, porttitor in purus nec, dignissim efficitur elit. Sed ac neque orci. Nulla dapibus faucibus nulla. Nulla felis quam, vehicula in augue ac, elementum fermentum quam. Donec elit diam, commodo sit amet luctus venenatis, placerat non quam.</p><p style=\"text-align:justify;\">Suspendisse cursus urna et bibendum fermentum. Nulla facilisi. Curabitur at nibh vitae turpis cursus ullamcorper. Sed quis justo a orci congue consectetur. Sed libero nulla, vulputate quis egestas sed, mollis consectetur ante. Nunc non ipsum ligula. Donec at mattis sapien, at vestibulum lacus. Nullam vulputate felis tortor, sed suscipit sem viverra mattis. Morbi ac congue est. In finibus scelerisque accumsan. Etiam scelerisque tortor at sollicitudin lobortis. Aliquam sed eros ornare, ullamcorper orci sit amet, blandit massa.</p>', 'WSL Commands', 10, 2, '2024-01-06 23:24:54', '2024-01-07 00:27:53'),
(8, 'Docker', '<div class=\"raw-html-embed\"><p class=\"lead mb-5\">Docker Installation, documentation and commands.</p></div>', 'Docker', 11, 2, '2024-01-06 23:26:47', '2024-01-06 23:26:47');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `phone`, `city`) VALUES
(2, 'Grzegorz Miśków', 'g.miskow@wp.pl', NULL, '$2y$12$hXq5ciFy4SM.1ceaIyEfUu3yIBplWnCl28O5Cqofiptz3TRbsV74e', 'SnPhN9dSFnIE0936zSYIxRTOBfyIjDOLKPUWvVRUPkF7zKn7MUMWnc4p4ilq', '2023-12-26 22:26:33', '2023-12-31 02:33:27', '1703990007.jpg', '+48791821908', 'Zielona Góra');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `nav_posts`
--
ALTER TABLE `nav_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nav_posts_parent_id_index` (`parent_id`),
  ADD KEY `nav_posts_user_id_index` (`user_id`),
  ADD KEY `nav_posts_position_index` (`position`);

--
-- Indeksy dla tabeli `page_posts`
--
ALTER TABLE `page_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_posts_user_id_index` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nav_posts`
--
ALTER TABLE `nav_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `page_posts`
--
ALTER TABLE `page_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
