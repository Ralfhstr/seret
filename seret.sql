-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Sep 2023 pada 02.38
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seret`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_22_122730_create_payments_table', 1),
(6, '2023_09_22_131420_create_products_table', 1),
(7, '2023_09_22_122620_create_transactions_table', 2),
(8, '2023_09_22_224601_create_report_table', 3),
(9, '2023_09_22_235755_create_reports_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pyname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `payments`
--

INSERT INTO `payments` (`id`, `pyname`, `created_at`, `updated_at`) VALUES
(1, 'QRIS', NULL, NULL),
(2, 'Cash', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdesc` varchar(255) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pphoto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `pname`, `pdesc`, `pprice`, `pphoto`, `created_at`, `updated_at`) VALUES
(1, 'TUYOGAS 3 KG', 'Pembelian TUYOGAS 3 KG', 15000, '5.5.jpg', NULL, NULL),
(2, 'TUYOGAS 3 KG', 'Pembelian TUYOGAS 3KG', 10000, '3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rdaate` date NOT NULL,
  `rdesc` varchar(255) NOT NULL,
  `rqty` int(11) NOT NULL,
  `rphoto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reports`
--

INSERT INTO `reports` (`id`, `rdaate`, `rdesc`, `rqty`, `rphoto`, `created_at`, `updated_at`) VALUES
(9, '2023-09-23', 'bensin', 100000, '1.jpg', '2023-09-23 03:35:59', '2023-09-23 03:35:59'),
(10, '2023-09-23', 'alat komputer', 50000, '2.jpg', '2023-09-23 04:59:04', '2023-09-23 05:50:53'),
(11, '2023-09-24', 'tabung', 300000, '3KG.png', '2023-09-23 12:39:09', '2023-09-23 12:39:45'),
(12, '2023-09-24', 'tabung', 700000, '3KG.png', '2023-09-23 13:30:07', '2023-09-23 13:30:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `tqty` varchar(255) NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `uname`, `product_id`, `address`, `tqty`, `payment_id`, `created_at`, `updated_at`) VALUES
(8, 2, 'Fahmi', 1, 'Jl. Garut Kulon No.49', '7', 1, '2023-09-23 11:53:08', '2023-09-23 11:53:08'),
(9, 2, 'Fahmi', 1, 'Jl. Garut Kulon No.49', '2', 1, '2023-09-23 12:22:31', '2023-09-23 12:22:31'),
(10, 2, 'Fahmi', 1, 'Jl. Garut Kulon No.39', '9', 1, '2023-09-23 12:23:46', '2023-09-23 12:23:46'),
(11, 2, 'Fahmi', 1, 'Jl. Garut Kulon No.39', '9', 1, '2023-09-23 12:24:12', '2023-09-23 12:24:12'),
(12, 2, 'Fahmi', 1, 'Jl. Garut Kulon No.39', '9', 2, '2023-09-23 12:37:31', '2023-09-23 12:37:31'),
(13, 2, 'Fahmi', 1, 'Jl. Garut Kulon No.39', '9', 2, '2023-09-23 12:38:04', '2023-09-23 12:38:04'),
(14, 2, 'Fahmi', 1, 'Jl. Garut Kulon No.39', '2', 2, '2023-09-23 13:29:20', '2023-09-23 13:29:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin', '08xx', NULL, '$2y$10$hPQoS5nWpvWXt7.jWvTUfuR8EnKnSjoHl6Vo/Po0fnOOt.O7sFwb.', NULL, 'admin', NULL, NULL),
(2, 'customer', 'customer@customer', '09xx', NULL, '$2y$10$cvl3b2KlUwpSS4gMNxJcFusIap1S2ApZ9E3X46lofBFeHEv.9UYDS', NULL, 'customer', NULL, NULL),
(3, 'Fahmi', 'fahmi@fahmi', '081241241', NULL, '$2y$10$k12BRHVzrchjJ5cU09tN3.eNxjbgtGL6zxSK2zEgYtr4cupvTQXD.', NULL, 'customer', '2023-09-23 09:56:40', '2023-09-23 09:56:40'),
(4, 'fahmmi', 'fhm@fhm', '08123121', NULL, '$2y$10$Alg9u7RKGlhcUDpJs7gLMePlfRYZQ1svUtdMKAkivI0tqKmIV1yZS', NULL, 'customer', '2023-09-23 12:12:07', '2023-09-23 12:12:07'),
(5, 'Satria', 'fahmmi@fahmmi', '08123812', NULL, '$2y$10$bua/uKNxeIiVMOEMFoUjwOLK/bfLxxqn4Fhh54.I8XPc.8eq/8KKm', NULL, 'customer', '2023-09-23 12:13:36', '2023-09-23 12:13:36'),
(6, 'Fahmi', 'fahmio@fahmi0', '0812731', NULL, '$2y$10$gQc3Mrz1P1.fSrBSLzLHS.zdiNCq3F6eGD5fZlBGX/oiyDBlKLvSm', NULL, 'customer', '2023-09-23 12:15:31', '2023-09-23 12:15:31'),
(7, 'Satria', 'satria@satria', '0812312', NULL, '$2y$10$gSphOtY226/Gm8RwsXzK/.A0No5BuWFtw7S76orcLUOXhbvtV35Ae', NULL, 'customer', '2023-09-23 13:28:51', '2023-09-23 13:28:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_product_id_foreign` (`product_id`),
  ADD KEY `transactions_payment_id_foreign` (`payment_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
