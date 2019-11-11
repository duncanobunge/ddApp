-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 04:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthdiagnostic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnos`
--

CREATE TABLE `diagnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `diagnosis_id` int(11) NOT NULL,
  `profname` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnos`
--

INSERT INTO `diagnos` (`id`, `diagnosis_id`, `profname`, `created_at`, `updated_at`, `status`) VALUES
(1, 128, 'Hemorrhoids', '2019-10-27 07:29:35', '2019-10-27 07:29:54', 'valid'),
(2, 127, 'Anal fissure', '2019-10-27 07:29:36', '2019-10-27 07:29:36', NULL),
(3, 178, 'Anal fistula', '2019-10-27 07:29:36', '2019-10-27 07:29:36', NULL),
(4, 341, 'Perianal hematoma', '2019-10-27 07:29:36', '2019-10-27 07:29:36', NULL),
(5, 293, 'Anal fold', '2019-10-27 07:29:36', '2019-10-27 07:29:36', NULL),
(6, 518, 'Cryptitis', '2019-10-27 07:29:36', '2019-10-27 07:29:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diagnoses`
--

CREATE TABLE `diagnoses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `symptom_id` int(11) NOT NULL,
  `symptom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnoses`
--

INSERT INTO `diagnoses` (`id`, `symptom_id`, `symptom`, `created_at`, `updated_at`) VALUES
(1, 189, 'abdominal pain', '2019-10-26 14:46:43', '2019-10-26 14:19:36'),
(3, 167, 'Joint pain', '2019-10-26 14:43:25', '2019-10-26 14:43:25'),
(4, 469, 'headache and nause', '2019-10-26 14:44:02', '2019-10-26 14:44:02'),
(5, 10, 'Abdominal pain', '2019-10-26 17:51:31', '2019-10-26 17:51:31'),
(6, 238, 'Anxiety', '2019-10-26 17:51:31', '2019-10-26 17:51:31'),
(7, 104, 'Back pain', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(8, 75, 'Burning eyes', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(9, 46, 'Burning in the throat', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(10, 170, 'Cheek swelling', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(11, 17, 'Chest pain', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(12, 31, 'Chest tightness', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(13, 175, 'Chills', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(15, 15, 'Cough', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(16, 207, 'Dizziness', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(17, 244, 'Drooping eyelid', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(18, 273, 'Dry eyes', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(19, 87, 'Earache', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(20, 92, 'Early satiety', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(21, 287, 'Eye pain', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(22, 33, 'Eye redness', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(23, 153, 'Fast, deepened breathing', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(24, 76, 'Feeling of foreign body in the eye', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(25, 11, 'Fever', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(26, 57, 'Going black before the eyes', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(27, 9, 'Headache', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(28, 45, 'Heartburn', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(29, 122, 'Hiccups', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(30, 149, 'Hot flushes', '2019-10-26 17:51:32', '2019-10-26 17:51:32'),
(31, 40, 'Increased thirst', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(32, 73, 'Itching eyes', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(33, 96, 'Itching in the nose', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(34, 35, 'Lip swelling', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(35, 235, 'Memory gap', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(36, 112, 'Menstruation disorder', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(37, 123, 'Missed period', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(38, 44, 'Nausea', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(39, 136, 'Neck pain', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(40, 114, 'Nervousness', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(41, 133, 'Night cough', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(42, 12, 'Pain in the limbs', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(43, 203, 'Pain on swallowing', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(44, 37, 'Palpitations', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(45, 140, 'Paralysis', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(46, 54, 'Reduced appetite', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(47, 14, 'Runny nose', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(48, 29, 'Shortness of breath', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(49, 124, 'Skin rash', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(50, 52, 'Sleeplessness', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(51, 95, 'Sneezing', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(52, 13, 'Sore throat', '2019-10-26 17:51:33', '2019-10-26 17:51:33'),
(53, 64, 'Sputum', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(54, 179, 'Stomach burning', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(55, 28, 'Stuffy nose', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(56, 138, 'Sweating', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(57, 248, 'Swollen glands in the armpits', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(58, 169, 'Swollen glands on the neck', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(59, 211, 'Tears', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(60, 16, 'Tiredness', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(61, 115, 'Tremor at rest', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(62, 144, 'Unconsciousness, short', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(63, 101, 'Vomiting', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(64, 181, 'Vomiting blood', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(65, 56, 'weakness', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(66, 23, 'Weight gain', '2019-10-26 17:51:34', '2019-10-26 17:51:34'),
(67, 30, 'Wheezing', '2019-10-26 17:51:34', '2019-10-26 17:51:34');

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
(4, '2019_10_26_134554_create_diagnoses_table', 1),
(5, '2019_10_26_212353_create_diagnos_table', 2),
(6, '2019_10_27_100519_add_status_to_diagnos', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnos`
--
ALTER TABLE `diagnos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnos`
--
ALTER TABLE `diagnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `diagnoses`
--
ALTER TABLE `diagnoses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
