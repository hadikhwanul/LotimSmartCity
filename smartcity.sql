-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 12:47 AM
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
-- Database: `smartcity`
--

-- --------------------------------------------------------

--
-- Table structure for table `brandings`
--

CREATE TABLE `brandings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portal` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `logo_sb` varchar(255) DEFAULT NULL,
  `published_it` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brandings`
--

INSERT INTO `brandings` (`id`, `portal`, `slug`, `deskripsi`, `link`, `status`, `logo_sb`, `published_it`, `created_at`, `updated_at`) VALUES
(1, 'Yayasan Wasita Tbk', 'et-sit-quo-quaerat-ratione', 'Queen, pointing to the Caterpillar, just as I tell you, you coward!\' and at once in the prisoner\'s handwriting?\' asked another of the e--e--evening, Beautiful, beauti--FUL SOUP!\' \'Chorus again!\'.', 'yuliarti.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\3933387d4df44d98975db475399fd8aa.png', NULL, '2024-02-25 20:11:43', '2024-02-25 20:11:43'),
(2, 'CV Puspasari Tbk', 'cupiditate-aliquam-deserunt-voluptate-et-et-omnis-ut', 'I to do?\' said Alice. \'Why, you don\'t even know what you mean,\' the March Hare said in a melancholy air, and, after waiting till she too began dreaming after a few minutes it seemed quite natural to.', 'nurdiyanti.tv', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\7e603eadb1fb1a9c60dcda6da19c7dc0.png', NULL, '2024-02-25 20:11:43', '2024-02-25 20:11:43'),
(3, 'CV Aryani (Persero) Tbk', 'illum-atque-accusamus-magnam-eum-repudiandae-voluptatem', 'Cat, and vanished again. Alice waited patiently until it chose to speak good English); \'now I\'m opening out like the Queen?\' said the Cat, and vanished again. Alice waited patiently until it chose.', 'kusumo.my.id', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\3c0abc19e4187e9299314c59d59dab79.png', NULL, '2024-02-25 20:11:43', '2024-02-25 20:11:43'),
(4, 'Yayasan Wibowo', 'ad-illo-dolor-non-doloremque', 'Dormouse, who was passing at the great question is, what?\' The great question is, Who in the lock, and to her in an encouraging opening for a long argument with the grin, which remained some time.', 'rahimah.biz', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\133198de6b64eefcf48a425bd1906ddc.png', NULL, '2024-02-25 20:11:43', '2024-02-25 20:11:43'),
(5, 'PJ Wahyudin', 'harum-sit-perspiciatis-natus-a-rerum-ex-molestias-fugit', 'I could say if I shall think nothing of the cattle in the pool a little snappishly. \'You\'re enough to get in?\' she repeated, aloud. \'I must be the best thing to eat her up in a hurry to change the.', 'utami.desa.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\e37a10b7c8d6dc93a0de66b4d526ca00.png', NULL, '2024-02-25 20:11:43', '2024-02-25 20:11:43'),
(6, 'Pemkab Lotim', 'pemkab-lotim', 'Pemerintahan kabupaten Lombok Timur adalah lembaga pemerintahan yang bertanggung jawab atas administrasi dan pengelolaan wilayah.', 'https://portal.lomboktimurkab.go.id/', 'Deactive', 'lotim.jpg', NULL, '2024-02-25 20:11:43', '2024-02-25 20:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'PT Puspita Waskita', 'adipisci-voluptas-ipsum-explicabo-doloribus-id-non', '2024-02-25 20:11:43', '2024-02-25 20:11:43'),
(2, 'PD Lestari', 'qui-sed-illo-ducimus-excepturi-accusantium-dignissimos-voluptatem', '2024-02-25 20:11:43', '2024-02-25 20:11:43'),
(3, 'PJ Latupono Situmorang', 'sequi-et-omnis-minima-tempore-est-necessitatibus-sint-dolor', '2024-02-25 20:11:43', '2024-02-25 20:11:43');

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
-- Table structure for table `governances`
--

CREATE TABLE `governances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portal` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `logo_sg` varchar(255) DEFAULT NULL,
  `published_it` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `governances`
--

INSERT INTO `governances` (`id`, `portal`, `category_id`, `user_id`, `slug`, `deskripsi`, `link`, `status`, `logo_sg`, `published_it`, `created_at`, `updated_at`) VALUES
(1, 'PT Wastuti', 3, 1, 'et-saepe-saepe-repellendus-dolor', 'VERY wide, but she had never seen such a capital one for catching mice you can\'t help it,\' said the March Hare. \'Sixteenth,\' added the Hatter, who turned pale and fidgeted. \'Give your evidence,\'.', 'dabukke.org', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\0dc72aa1f9fe4dfb87d4bc706d30b3e5.png', NULL, '2024-02-25 20:11:37', '2024-02-25 20:11:37'),
(2, 'PD Aryani Sudiati Tbk', 3, 2, 'et-adipisci-quas-officiis-cumque-ducimus-aut', 'Alice panted as she swam nearer to watch them, and then raised himself upon tiptoe, put his mouth close to the Knave of Hearts, he stole those tarts, And took them quite away!\' \'Consider your.', 'prasetya.ac.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\abdbfd516b1e1d2d850726d56b436079.png', NULL, '2024-02-25 20:11:37', '2024-02-25 20:11:37'),
(3, 'CV Laksita Marpaung', 2, 4, 'dolor-dolor-sit-aut-vero-dolor-ea', 'I\'ve finished.\' So they began solemnly dancing round and swam slowly back to the door, and knocked. \'There\'s no sort of knot, and then at the proposal. \'Then the words \'DRINK ME,\' but nevertheless.', 'padmasari.com', 'Active', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\5c130485de39f57d4d980429ef8f35ad.png', NULL, '2024-02-25 20:11:37', '2024-02-25 20:11:37'),
(4, 'Fa Handayani (Persero) Tbk', 3, 5, 'aut-et-dolorum-in-vel', 'Rabbit say, \'A barrowful will do, to begin with.\' \'A barrowful will do, to begin at HIS time of life. The King\'s argument was, that you have to turn into a chrysalis--you will some day, you.', 'dabukke.biz.id', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\47ecf6abc96d76cf9e24d6efa10dbdec.png', NULL, '2024-02-25 20:11:37', '2024-02-25 20:11:37'),
(5, 'Yayasan Andriani Rajasa', 1, 3, 'exercitationem-voluptatum-voluptatem-repellendus-sunt-ea-tempore', 'The King and the sound of a sea of green leaves that lay far below her. \'What CAN all that stuff,\' the Mock Turtle: \'crumbs would all wash off in the book,\' said the Queen, stamping on the second.', 'hutapea.asia', 'Deactive', 'C:\\Users\\Panywise\\AppData\\Local\\Temp\\22578b73c03e46f05a8bcbfdefe61487.png', NULL, '2024-02-25 20:11:37', '2024-02-25 20:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(5, '2024_02_12_012458_create_brandings_table', 1),
(6, '2024_02_12_020234_create_jobs_table', 1),
(7, '2024_02_15_022847_create_governances_table', 1),
(8, '2024_02_16_023058_create_categories_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Radika Nasrullah Saputra', 'cager.prasasta', 'uwacana@example.net', '2024-02-25 20:11:30', '$2y$12$1wJDIhtJ1mQ8JvWaF2qE9OvDsmNV6QDX1tlBeHQvGlGYLO2U5e/..', 'kIfKIgEmzS', '2024-02-25 20:11:31', '2024-02-25 20:11:31'),
(2, 'Latika Palastri M.Kom.', 'genta.hastuti', 'firmansyah.bahuwarna@example.org', '2024-02-25 20:11:31', '$2y$12$1wJDIhtJ1mQ8JvWaF2qE9OvDsmNV6QDX1tlBeHQvGlGYLO2U5e/..', 'S9Y32Bd0j1', '2024-02-25 20:11:31', '2024-02-25 20:11:31'),
(3, 'Almira Gasti Winarsih S.Psi', 'saiful21', 'padmasari.olivia@example.net', '2024-02-25 20:11:31', '$2y$12$1wJDIhtJ1mQ8JvWaF2qE9OvDsmNV6QDX1tlBeHQvGlGYLO2U5e/..', 'OgBev2RtJI', '2024-02-25 20:11:31', '2024-02-25 20:11:31'),
(4, 'Padmi Gina Hartati', 'wani.prasasta', 'zalindra.sitorus@example.com', '2024-02-25 20:11:31', '$2y$12$1wJDIhtJ1mQ8JvWaF2qE9OvDsmNV6QDX1tlBeHQvGlGYLO2U5e/..', 'pC2Ha5isFr', '2024-02-25 20:11:31', '2024-02-25 20:11:31'),
(5, 'Waluyo Wibisono', 'nuwais', 'jlaksita@example.com', '2024-02-25 20:11:31', '$2y$12$1wJDIhtJ1mQ8JvWaF2qE9OvDsmNV6QDX1tlBeHQvGlGYLO2U5e/..', 'Wre8b5Ld8W', '2024-02-25 20:11:31', '2024-02-25 20:11:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brandings`
--
ALTER TABLE `brandings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brandings_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_nama_unique` (`nama`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `governances`
--
ALTER TABLE `governances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `governances_slug_unique` (`slug`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- AUTO_INCREMENT for table `brandings`
--
ALTER TABLE `brandings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `governances`
--
ALTER TABLE `governances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
