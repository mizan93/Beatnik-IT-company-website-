-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 02:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beatniktest`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '<h3 style=\"box-sizing: border-box; margin: 0px 0px 20px; font-weight: 400; line-height: 1.2; font-size: 22px; font-family: Montserrat, sans-serif; padding: 0px; color: #696592; font-style: italic;\">We are an international award-winning IT company with 6 offices across Bangladesh, and offers web design, web development and digital marketing services.</h3>', '<p>&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; color: #444444; font-family: \'Open Sans\', sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;\">Beatnik is rated as one of the top web agencies in Bangladesh by various industry magazines and review sites. We have a right blend of award-winning designers, expert web developers and Google certified digital marketers which make us a unique one-stop solution for hundreds of our clients, spread across 80+ countries.</p>', 'examptmpphp84e0tmp-2020-10-09-5f7ff34d0ac45.jpg', '2020-10-08 23:21:17', '2020-10-08 23:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `asked_questions`
--

CREATE TABLE `asked_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asked_questions`
--

INSERT INTO `asked_questions` (`id`, `question`, `ans`, `created_at`, `updated_at`) VALUES
(1, 'Are your Websites Custom? Do you use templates?', '<p><span style=\"color: #444444; font-family: \'Open Sans\', sans-serif; font-size: 16px;\">Yes, everything we build is 100% Custom made with unlimited revisions to the design. We are custom starting from the design all the way to your administration area to manage the website yourself.</span></p>', '2020-10-08 17:02:07', '2020-10-08 17:02:07'),
(2, 'What if I need HELP, Do you offer support?', '<p><a class=\"\" style=\"box-sizing: border-box; color: #0a98c0; text-decoration-line: none; transition: all 0.5s ease 0s; outline: none; padding: 22px 20px 22px 0px; display: block; position: relative; font-family: Montserrat, sans-serif; font-size: 20px; line-height: 1;\" href=\"file:///H:/C%20v%20and%20job/IT-TEST/Website/index.html#faq2\" data-toggle=\"collapse\"><span style=\"color: #444444; font-family: \'Open Sans\', sans-serif; font-size: 16px;\">Yes, we offer LIFETIME SUPPORT You will be able to change modify or add anything to your website yourself thru the administration (CMS) that we will build for you. But most important you will have access to our developers for any questions you might need. We use the same style of support as apple.com which means we connect to your computer and teach/help you with your questions or modifications to the website. We also give you unlimited training on our administration area. We offer LIFETIME SUPPORT because 99% of our customer only need training once as the administration area is super simple and easy to learn. You don\'t need any knowledge on coding and you know we are just a phone call way.</span><br /></a></p>', '2020-10-08 17:04:19', '2020-10-08 17:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'App', 'app', '2020-10-08 12:24:06', '2020-10-08 12:24:06'),
(2, 'Card', 'card', '2020-10-08 12:24:20', '2020-10-08 12:24:20'),
(3, 'Web', 'web', '2020-10-08 12:24:29', '2020-10-08 12:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfos`
--

CREATE TABLE `companyinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ln_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companyinfos`
--

INSERT INTO `companyinfos` (`id`, `address`, `city`, `phone`, `email`, `details`, `fb_link`, `tw_link`, `insta_link`, `ln_link`, `created_at`, `updated_at`) VALUES
(1, '1/35 road', 'Mohakhali DOS, Dhaka.', '014720021', 'djsdkjk@gmail.com', '<p>dkjfs fjksjfs fkls fsjfkls</p>', 'sljd.com', 'jkdjfks', NULL, 'sjfksdklf', NULL, '2020-10-09 00:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `support` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worker` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `desc1`, `desc2`, `image`, `client`, `project`, `support`, `worker`, `created_at`, `updated_at`) VALUES
(1, 'Make The Ordinary Into Extraordinary', '<p><span style=\"color: #535074; font-family: \'Open Sans\', sans-serif; font-size: 15px; text-align: center;\">Beatnik creative effort aims to convert the ordinary into extraordinary and build authoritative presence. We work on establishing consumer perception, build value &amp; successfully present and communicate that value to the consumer.</span></p>', '<p><span style=\"color: #444444; font-family: \'Open Sans\', sans-serif; font-size: 16px;\">Crafting a compelling websites can sometimes become a hard task. This is where our years of knowledge and deep understanding of user habits and behaviors comes in handy to design websites that are lucrative. We believe that your online presence - is your business front, it is a gateway to infinite scalability.</span></p>', 'make-the-ordinary-into-extraordinary-2020-10-09-5f8034812c652.jpg', '274', '421', '1,364', '18', '2020-10-09 03:49:43', '2020-10-09 03:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inboxes`
--

CREATE TABLE `inboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intros`
--

CREATE TABLE `intros` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intros`
--

INSERT INTO `intros` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Technology Solutions', 'technology-solutions-2020-10-09-5f803dafe3363.jpg', '2020-10-09 04:38:40', '2020-10-09 04:38:40');

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
(4, '2020_10_07_214021_create_about_us_table', 1),
(5, '2020_10_08_045738_create_services_table', 1),
(6, '2020_10_08_063413_create_categories_table', 1),
(7, '2020_10_08_131847_create_images_table', 1),
(8, '2020_10_08_133744_create_portfolios_table', 1),
(9, '2020_10_08_193946_create_portfolio_images_table', 2),
(10, '2020_10_08_223358_create_asked_questions_table', 3),
(11, '2020_10_09_052444_create_companyinfos_table', 4),
(12, '2020_10_09_071243_create_inboxes_table', 5),
(13, '2020_10_09_085621_create_experiences_table', 5),
(14, '2020_10_09_101407_create_intros_table', 6);

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
-- Table structure for table `portfolio_images`
--

CREATE TABLE `portfolio_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `port_folio_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `port_folio_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 11, 'dfkjkfkd-2020-10-08-5f7f6ce5ae3ab.jpg', '2020-10-08 13:47:49', '2020-10-08 13:47:49'),
(2, 12, 'fjskljfkls-2020-10-08-5f7f705adeafe.jpg', '2020-10-08 14:02:35', '2020-10-08 14:02:35'),
(3, 13, 'dfjfjkldjklfd-2020-10-08-5f7f7356a7c19.jpg', '2020-10-08 14:15:18', '2020-10-08 14:15:18'),
(4, 13, 'dfjfjkldjklfd-2020-10-08-5f7f7356d266f.jpg', '2020-10-08 14:15:18', '2020-10-08 14:15:18'),
(5, 13, 'dfjfjkldjklfd-2020-10-08-5f7f73570aaa3.jpg', '2020-10-08 14:15:19', '2020-10-08 14:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `port_folios`
--

CREATE TABLE `port_folios` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `port_folios`
--

INSERT INTO `port_folios` (`id`, `category_id`, `client`, `pro_url`, `title`, `details`, `created_at`, `updated_at`) VALUES
(2, 2, 'sjfkdsjkd', 'dmsfs fskdjfk', 'jflsjflsjkjfkd', '<p>flskjfls fklsjlfs f</p>', '2020-10-08 12:56:14', '2020-10-08 12:56:14'),
(3, 3, 'jfksjfklsj', 'skfjksjf', 'skfjskjkfd', '<p>sfjlsf jfsa fjlsfj sf slkfsk</p>', '2020-10-08 13:15:53', '2020-10-08 13:15:53'),
(4, 2, 'kdskfskjfkd', 'kjskjfkdjk', 'sdkfjksjkf', '<p>jdkfjklsjfkljdkjksj</p>', '2020-10-08 13:22:28', '2020-10-08 13:22:28'),
(5, 2, 'kdskfskjfkd', 'kjskjfkdjk', 'sdkfjksjkf', '<p>jdkfjklsjfkljdkjksj</p>', '2020-10-08 13:23:59', '2020-10-08 13:23:59'),
(6, 2, 'kdskfskjfkd', 'kjskjfkdjk', 'sdkfjksjkf', '<p>jdkfjklsjfkljdkjksj</p>', '2020-10-08 13:24:52', '2020-10-08 13:24:52'),
(7, 2, 'kdskfskjfkd', 'kjskjfkdjk', 'sdkfjksjkf', '<p>jdkfjklsjfkljdkjksj</p>', '2020-10-08 13:26:25', '2020-10-08 13:26:25'),
(8, 2, 'ksjkfj', 'jkdjkfks', 'UI Design', '<p>fjskd fskfha sfjsf hak fsfaj fjkdk</p>', '2020-10-08 13:29:26', '2020-10-08 13:29:26'),
(9, 2, 'ksjkfj', 'jkdjkfks', 'UI Design', '<p>fjskd fskfha sfjsf hak fsfaj fjkdk</p>', '2020-10-08 13:37:01', '2020-10-08 13:37:01'),
(10, 2, 'dfkdkjfkd', 'fkskfdk', 'dfkjkfkd', '<p>dkjklsjf sjfksjf jfjfkd f</p>', '2020-10-08 13:46:31', '2020-10-08 13:46:31'),
(11, 2, 'dfkdkjfkd', 'fkskfdk', 'dfkjkfkd', '<p>dkjklsjf sjfksjf jfjfkd f</p>', '2020-10-08 13:47:49', '2020-10-08 13:47:49'),
(12, 3, 'sjfkdsjkd', 'dkddkjfks', 'fjskljfkls', '<p>kjkfjklsjfk</p>', '2020-10-08 14:02:34', '2020-10-08 14:02:34'),
(13, 3, 'fskflkld edited', 'djflksfkjd edited', 'photo12', '<p>dlksf sjfkdjlfks fjlfs edited</p>', '2020-10-08 14:15:18', '2020-10-08 14:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `details`, `created_at`, `updated_at`) VALUES
(1, 'UI/UX Design support', '<p><span style=\"color: #444444; font-family: \'Open Sans\', sans-serif; font-size: 14px;\">Intuitive interface design and the logical flow of information with sensible user experience</span></p>', '2020-10-09 00:40:00', '2020-10-09 00:40:00'),
(2, 'Digital Marketing', '<p><span style=\"color: #444444; font-family: \'Open Sans\', sans-serif; font-size: 14px;\">Creating a powerful presence in the all-pervasive digital media, accessible anytime and anyplace for consumers</span></p>', '2020-10-09 00:40:28', '2020-10-09 00:40:28');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Admin', 'admin@test.com', NULL, '$2y$10$AZthZyV1tDstCt/v3geIA.qamrT95casNU0QcsQm4pRuMjtP9nM6i', NULL, '2020-10-08 12:18:09', '2020-10-08 12:18:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asked_questions`
--
ALTER TABLE `asked_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companyinfos`
--
ALTER TABLE `companyinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inboxes`
--
ALTER TABLE `inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intros`
--
ALTER TABLE `intros`
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
-- Indexes for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port_folios`
--
ALTER TABLE `port_folios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asked_questions`
--
ALTER TABLE `asked_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companyinfos`
--
ALTER TABLE `companyinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inboxes`
--
ALTER TABLE `inboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intros`
--
ALTER TABLE `intros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `portfolio_images`
--
ALTER TABLE `portfolio_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `port_folios`
--
ALTER TABLE `port_folios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
