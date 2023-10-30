-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Feb 2023 pada 07.08
-- Versi server: 5.7.33
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasirpos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `carts`
--

INSERT INTO `carts` (`sale_id`, `product_id`, `amount`, `created_at`, `updated_at`, `created`) VALUES
(1, 1, 3, '2023-02-04 01:20:44', '2023-02-04 01:20:44', '2023-02-04'),
(2, 1, 5, '2023-02-04 01:22:09', '2023-02-04 01:22:09', '2023-02-04'),
(3, 1, 1, '2023-02-04 06:34:04', '2023-02-04 06:34:04', '2023-02-04'),
(4, 4, 2, '2023-02-04 22:14:15', '2023-02-04 22:14:15', '2023-02-05'),
(4, 10, 1, '2023-02-04 22:14:14', '2023-02-04 22:14:14', '2023-02-05'),
(5, 8, 1, '2023-02-04 23:01:36', '2023-02-04 23:01:36', '2023-02-05'),
(5, 9, 2, '2023-02-04 23:01:36', '2023-02-04 23:01:36', '2023-02-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Maknaan', '2023-02-04 01:20:19', '2023-02-04 01:20:19'),
(2, 'Minuman', '2023-02-04 22:10:04', '2023-02-04 22:10:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `clients`
--

CREATE TABLE `clients` (
  `rfc` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `address` mediumtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `clients`
--

INSERT INTO `clients` (`rfc`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'yjyjy', NULL, NULL, NULL, '2023-02-04 01:19:52', '2023-02-04 01:19:52'),
(2, 'Asroni', NULL, NULL, NULL, '2023-02-04 01:22:01', '2023-02-04 01:22:01'),
(3, 'FATIHAH NURUL AZMI', NULL, NULL, NULL, '2023-02-04 06:33:35', '2023-02-04 06:33:35'),
(4, 'Damar', NULL, NULL, NULL, '2023-02-04 21:36:06', '2023-02-04 21:36:06'),
(5, 'Isna', NULL, NULL, NULL, '2023-02-04 21:36:21', '2023-02-04 21:36:21'),
(6, 'Hifzi', NULL, NULL, NULL, '2023-02-04 22:13:42', '2023-02-04 22:13:42'),
(7, 'yaa', NULL, NULL, NULL, '2023-02-04 23:01:30', '2023-02-04 23:01:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2020_04_13_160458_create_clients_table', 1),
(21, '2020_04_13_160512_create_categories_table', 1),
(22, '2020_04_13_160525_create_sales_table', 1),
(23, '2020_04_13_160541_create_products_table', 1),
(24, '2020_04_13_160554_create_carts_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text,
  `product_left` int(11) DEFAULT NULL,
  `price` double(8,2) UNSIGNED NOT NULL,
  `cost` double(8,2) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `product_left`, `price`, `cost`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Ayam Bakar', NULL, NULL, 10000.00, NULL, 1, '2023-02-04 01:20:34', '2023-02-04 01:20:34'),
(2, 'Ikan Bkar Bambu Haur', NULL, NULL, 15000.00, NULL, 1, '2023-02-04 22:09:56', '2023-02-04 22:09:56'),
(3, 'Gurame Goreng', NULL, NULL, 14000.00, NULL, 1, '2023-02-04 22:10:31', '2023-02-04 22:10:31'),
(4, 'Gurame Bakar', NULL, NULL, 14000.00, NULL, 1, '2023-02-04 22:10:45', '2023-02-04 22:10:45'),
(5, 'Gurame Asam Manis', NULL, NULL, 20000.00, NULL, 1, '2023-02-04 22:11:02', '2023-02-04 22:11:02'),
(6, 'Gurame Saos Padang', NULL, NULL, 20000.00, NULL, 1, '2023-02-04 22:11:23', '2023-02-04 22:11:23'),
(7, 'Gurame Cobek', NULL, NULL, 15000.00, NULL, 1, '2023-02-04 22:11:46', '2023-02-04 22:11:46'),
(8, 'Kwe Bakar', NULL, NULL, 16998.00, NULL, 1, '2023-02-04 22:12:09', '2023-02-04 22:12:09'),
(9, 'Kakap asam manis', NULL, NULL, 25000.00, NULL, 1, '2023-02-04 22:12:26', '2023-02-04 22:12:26'),
(10, 'Bawal Bakar / Goreng', NULL, NULL, 17000.00, NULL, 1, '2023-02-04 22:12:44', '2023-02-04 22:12:44'),
(11, 'Kerapu Asam Manis', NULL, NULL, 20000.00, NULL, 1, '2023-02-04 22:13:26', '2023-02-04 22:13:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `total` double(8,2) UNSIGNED NOT NULL,
  `rfc` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`sale_id`, `total`, `rfc`, `id`, `created_at`, `updated_at`, `created`) VALUES
(1, 30000.00, 1, 1, '2023-02-04 01:20:44', '2023-02-04 01:20:44', '2023-02-04'),
(2, 50000.00, 2, 1, '2023-02-04 01:22:09', '2023-02-04 01:22:09', '2023-02-04'),
(3, 10000.00, 3, 1, '2023-02-04 06:34:04', '2023-02-04 06:34:04', '2023-02-04'),
(4, 55000.00, 6, 1, '2023-02-04 22:14:14', '2023-02-04 22:14:14', '2023-02-05'),
(5, 66998.00, 7, 1, '2023-02-04 23:01:36', '2023-02-04 23:01:36', '2023-02-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `administrator` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `administrator`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, NULL, '$2y$10$zz.j.waEankg3fnr107yGOwZu/yKwF9LtIaEM3YaSkbZnjL/zc4Ti', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`sale_id`,`product_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`rfc`),
  ADD UNIQUE KEY `clients_email_unique` (`email`),
  ADD UNIQUE KEY `clients_phone_unique` (`phone`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `sales_id_foreign` (`id`),
  ADD KEY `sales_rfc_foreign` (`rfc`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `clients`
--
ALTER TABLE `clients`
  MODIFY `rfc` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`sale_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_rfc_foreign` FOREIGN KEY (`rfc`) REFERENCES `clients` (`rfc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
