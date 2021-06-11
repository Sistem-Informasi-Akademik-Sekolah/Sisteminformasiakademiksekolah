-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 02:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisteminformasiakademiksekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gurudankaryawans`
--

CREATE TABLE `gurudankaryawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nutpk` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuspegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt` date NOT NULL,
  `nohp` int(11) NOT NULL,
  `usernametelegram` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelass`
--

CREATE TABLE `kelass` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `walas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahunajaran` year(4) NOT NULL,
  `keterangan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_05_29_082013_create_siswas_table', 2),
(8, '2021_05_29_121648_create_gurudankaryawans_table', 2),
(9, '2021_05_29_122232_create_kelass_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wahyu@gmel', '$2y$10$IaiOsjOG9RuUHsVG7TJ47ePfGR6yQvpOBGmadDkPnBIFCSU4iu.xO', '2021-05-28 03:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nipd` int(11) NOT NULL,
  `jeniskelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` int(11) NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenistinggal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `transportasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beratbadan` int(11) NOT NULL,
  `tinggibadan` int(11) NOT NULL,
  `jarakrumah` int(11) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jumlah_sudara` int(11) NOT NULL,
  `kebutuhankhusus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noakte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `namalengkap`, `nipd`, `jeniskelamin`, `kelas`, `nisn`, `ttl`, `nik`, `agama`, `alamat`, `jenistinggal`, `transportasi`, `nohp`, `email`, `beratbadan`, `tinggibadan`, `jarakrumah`, `anak_ke`, `jumlah_sudara`, `kebutuhankhusus`, `noakte`, `created_at`, `updated_at`) VALUES
(1, 'Achmad Fadli', 1215, 'laki-laki', '11 Rpl 2', '0031016219', '17 september 2003 bandung', 12345, 'islam', 'jalan kopo depok', 'sama orang tua', 'motor', 819051576, 'af137375@gmail.com', 55, 175, 6, 1, 3, 'tidak ada', '012', '2021-05-29 22:39:59', '2021-05-30 02:24:09'),
(2, 'Agus Diana', 1212, 'laki-laki', '10 rpl 2', '012132', '17 april 1992 sumedang', 121, 'islam', 'jalan ninja depok', 'sama orang tua', 'motor', 1212, 'agusdiana@gmail.com', 62, 179, 2, 1, 7, 'tidak ada', '0121211', '2021-05-29 22:39:59', '2021-05-30 02:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','guru','kurikulum','siswa','kaprog','walas') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'siswa',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'adminsias@gmail.com', NULL, '$2y$10$Fjjz3O5me.Mae625TdRp0.AAqi5O4mJHRRNBXkWR/WYnT1HRwLQr6', 'admin', 'l64dLDYYYEj2FR6z9P5chDtK6KVoTEyJ2pF8rCJHyplqCDxHKKydyy0fPnKi', '2021-05-24 07:09:44', '2021-05-24 07:09:44'),
(2, 'Arifin', 'arifinilham28mei@gmail.com', NULL, '$2y$10$VWjUDG51WhurU12tpOyKPeycr9y8CK6syE2JfZoiLfiMYRHkHKXH2', 'siswa', NULL, '2021-05-24 07:11:47', '2021-05-24 07:11:47'),
(5, 'Novita Ambarwati', 'ambarodioda@gmail.com', NULL, '$2y$10$2a4jttPNc8Z9owC2J9GA3.efISpS6Ap6hnSgSNS7rOtQlwgKuo3Nq', 'guru', NULL, '2021-05-24 07:15:09', '2021-05-24 07:15:09'),
(6, 'Vera Rousmawati', 'verarosmawati27@gmail.com', NULL, '$2y$10$k8Phdn3ed6W3GYw731YApO4MALDPC.8bKiTUNtw4b4YUERasWbNm2', 'kurikulum', NULL, '2021-05-24 07:16:03', '2021-05-24 07:16:03'),
(7, 'Puguh Rismadi Ismail', 'puguh.rismadi@gmail.com', NULL, '$2y$10$t9ghfx4AV/iznCxBehhSjORfT6uokRkaCnNAitVrWvDdjbMYsTU0G', 'kaprog', NULL, '2021-05-24 07:16:45', '2021-05-24 07:16:45'),
(8, 'Furida lusi siagian', 'furidatb@gmail.com', NULL, '$2y$10$rrSgsDlqWucLg5MRfnhB7u.gqNDdoP59sxdPBVLu2tGu8HMEekAwS', 'walas', NULL, '2021-05-24 07:17:55', '2021-05-24 07:17:55'),
(9, 'anisa', 'anisa1234@gmail.com', NULL, '$2y$10$V.VJFANM8uO7ni1xpv3cBOorp0a5uJB9iYQVqMcnpu50kNb.hi1LS', 'siswa', NULL, '2021-05-27 19:43:36', '2021-05-27 19:43:36'),
(10, 'arya', 'arya@gmail.com', NULL, '$2y$10$wEcgnbi5.Ts7QlknYFYLm.TNTfh28sbIMz1JYUzzRY1WCiIPFN1lW', 'siswa', NULL, '2021-05-28 01:38:44', '2021-05-28 01:38:44'),
(11, 'wahyu', 'wahyu@gmel', NULL, '$2y$10$.PmFXUrC07VEN9mlFZCAQ.aLKxQ2FM1Tt9reVuyM0lp1MSSnjR74a', 'siswa', NULL, '2021-05-28 03:13:24', '2021-05-28 03:13:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gurudankaryawans`
--
ALTER TABLE `gurudankaryawans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelass`
--
ALTER TABLE `kelass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gurudankaryawans`
--
ALTER TABLE `gurudankaryawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelass`
--
ALTER TABLE `kelass`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
