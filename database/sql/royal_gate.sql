-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2022 at 10:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royal_gate`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, '2022-07-05 10:50:56', '2022-07-05 10:50:56'),
(2, 'asdf', 'asdf@gmail.com', 'asdf', 'asdfas', 'df', '2022-07-05 10:51:15', '2022-07-05 10:51:15'),
(3, NULL, NULL, NULL, NULL, NULL, '2022-07-05 10:52:40', '2022-07-05 10:52:40'),
(4, 'Mg Mg', 'mgmg@gmail.com', '0944416176', 'Hello', 'Hello aasdf', '2022-07-05 11:16:52', '2022-07-05 11:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Japan', NULL, NULL, NULL),
(2, 'Singapore', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `name`, `email`, `phone`, `country`, `gender`, `current_address`, `additional_note`, `attachment_file`, `path`, `created_at`, `updated_at`) VALUES
(1, 'Mg Mg', 'mgmg@gmail.com', '09444161997', 'Japan', 'Male', 'Yangon', 'No', 'sample.pdf', 'http://localhost/projects/royal_gate/storage/cv/ZIU59wP6Y7hTdNRtV4H8gO4n9Ul0NOQKeICRgMIo.pdf', '2022-07-05 13:09:11', '2022-07-05 13:09:11'),
(2, 'Mg Mg Soe', NULL, '09444171665', 'Japan', 'Male', 'Yangon', NULL, 'sample.pdf', 'http://localhost/projects/royal_gate/storage/cv/Vx37l7cDR31bylNT9uNhg5BeUXbMiRj54NBgBOKg.pdf', '2022-07-05 13:12:12', '2022-07-05 13:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_company` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_limit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_experience_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_additional_requirement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimate_salary_offer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_allowance` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interview_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `company_name`, `type_of_company`, `location`, `website`, `phone`, `email`, `job_category`, `age_limit`, `educational_requirement`, `working_experience_requirement`, `other_additional_requirement`, `estimate_salary_offer`, `other_allowance`, `gender`, `interview_type`, `date`, `created_at`, `updated_at`) VALUES
(1, 'sadf', NULL, 'asdf', NULL, 'asf', 'asfd@gmail.com', 'asdf', 'asdf', 'asdfas', 'dfa', 'sdfasd', 'f', 'sadf', 'asdf', 'asdf', '2022-07-05', '2022-07-05 13:41:15', '2022-07-05 13:41:15'),
(2, 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asd@gmail.com', 'asdf', 'sadfa', 'dsf', 'adsf', 'sadf', 'asdf', 'asdf', 'asdf', 'adsf', '2022-07-05', '2022-07-05 13:42:07', '2022-07-05 13:42:07');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_07_05_171317_create_contacts_table', 1),
(4, '2022_07_05_180331_create_news_table', 2),
(5, '2022_07_05_192314_create_countries_table', 3),
(6, '2022_07_05_193139_create_cvs_table', 4),
(7, '2022_07_05_194430_create_employers_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_eng` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_eng`, `title_jp`, `description_eng`, `description_jp`, `author`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'JOB INTERVIEW TIPS 1', 'JOB INTERVIEW TIPS', 'There are a lot of elements that interest me about this role from the job description, but one of the key elements that really appealed to me is that I feel I would be a great fit within the company culture. I want to work in a progressive team and the collaborative of this company is something that interested me in this job. Looking over the company website, and from our previous discussions, I believe this role would also give me the ability to progress in my career and develop my skills in a lot of different areas such as ‘X, Y, Z’. I feel there would be a lot of opportunities for me to grow in my role and further my knowledge in ‘X’ and progress my career.', 'There are a lot of elements that interest me about this role from the job description, but one of the key elements that really appealed to me is that I feel I would be a great fit within the company culture. I want to work in a progressive team and the collaborative of this company is something that interested me in this job. Looking over the company website, and from our previous discussions, I believe this role would also give me the ability to progress in my career and develop my skills in a lot of different areas such as ‘X, Y, Z’. I feel there would be a lot of opportunities for me to grow in my role and further my knowledge in ‘X’ and progress my career.', 'Admin', 'https://recruitmentmyanmarsak.com/admin/uploads/files/zp_x7oqr40fkmie.png', '2022-05-25 07:46:08', NULL),
(2, 'JOB INTERVIEW TIPS 2', 'JOB INTERVIEW TIPS', 'There are a lot of elements that interest me about this role from the job description, but one of the key elements that really appealed to me is that I feel I would be a great fit within the company culture. I want to work in a progressive team and the collaborative of this company is something that interested me in this job. Looking over the company website, and from our previous discussions, I believe this role would also give me the ability to progress in my career and develop my skills in a lot of different areas such as ‘X, Y, Z’. I feel there would be a lot of opportunities for me to grow in my role and further my knowledge in ‘X’ and progress my career.', 'There are a lot of elements that interest me about this role from the job description, but one of the key elements that really appealed to me is that I feel I would be a great fit within the company culture. I want to work in a progressive team and the collaborative of this company is something that interested me in this job. Looking over the company website, and from our previous discussions, I believe this role would also give me the ability to progress in my career and develop my skills in a lot of different areas such as ‘X, Y, Z’. I feel there would be a lot of opportunities for me to grow in my role and further my knowledge in ‘X’ and progress my career.', 'Admin', 'https://recruitmentmyanmarsak.com/admin/uploads/files/v3bgmik8raeo96w.jpg', '2022-05-25 07:46:08', NULL),
(3, 'JOB INTERVIEW TIPS 3', 'JOB INTERVIEW TIPS', 'There are a lot of elements that interest me about this role from the job description, but one of the key elements that really appealed to me is that I feel I would be a great fit within the company culture. I want to work in a progressive team and the collaborative of this company is something that interested me in this job. Looking over the company website, and from our previous discussions, I believe this role would also give me the ability to progress in my career and develop my skills in a lot of different areas such as ‘X, Y, Z’. I feel there would be a lot of opportunities for me to grow in my role and further my knowledge in ‘X’ and progress my career.', 'There are a lot of elements that interest me about this role from the job description, but one of the key elements that really appealed to me is that I feel I would be a great fit within the company culture. I want to work in a progressive team and the collaborative of this company is something that interested me in this job. Looking over the company website, and from our previous discussions, I believe this role would also give me the ability to progress in my career and develop my skills in a lot of different areas such as ‘X, Y, Z’. I feel there would be a lot of opportunities for me to grow in my role and further my knowledge in ‘X’ and progress my career.', 'Admin', 'https://recruitmentmyanmarsak.com/admin/uploads/files/ovlcd1zkm34xf6_.jpg', '2022-05-25 07:46:08', NULL);

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
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
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
