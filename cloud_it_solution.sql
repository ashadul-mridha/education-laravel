-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 05:03 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud_it_solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ask_questions`
--

CREATE TABLE `ask_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic_info_settings`
--

CREATE TABLE `basic_info_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copywright_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_info_settings`
--

INSERT INTO `basic_info_settings` (`id`, `logo`, `favicon`, `title`, `phone`, `email`, `fb_link`, `youtube_link`, `linkedin_link`, `address`, `copywright_text`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(2, '20210517081511.jpg', '20210517081511.jpg', 'Exam Management', '01718069307', 'ashadulmridhaprog@gmail.com', 'fb.com/ashadul-mridha', 'youtube.com/ashadulmridha', 'linkedin.com/ashadulmridha', 'Gournodi, Barishal, Bangladesh', 'Copywright @ ashadulmridha', '1', NULL, NULL, '2021-05-17 02:15:11', '2021-05-17 02:15:11'),
(3, '20210526115531.jpg', '20210526115531.png', 'Education', '01613503047', 'education@gmail.com', 'fb.com', 'youtube.com', 'linkedin.com', 'Bottala,Barishal,Bangladesh', '<font style=\"background-color: rgb(255, 255, 255);\" color=\"#636363\">Ashadul Islam</font>', '1', '1', NULL, '2021-05-26 05:55:31', '2021-05-26 05:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Asad', 'asad@gmail.com', '01718069307', NULL, NULL),
(2, 'zerin', 'zerin@gmail.com', '01613503047', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_title`, `slug`, `exam_start_date`, `exam_start_time`, `exam_end_time`, `exam_description`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(14, 'English', 'engvsafdsa', '2021-07-30', '16:50', '18:50', 'English Exam', '1', '1', NULL, '2021-04-26 04:50:47', '2021-06-16 06:20:19'),
(15, 'ICT', 'ictaaa', '2021-04-28', '12:30', '13:30', 'Ict Exam Help On 04/28/2021', '1', NULL, NULL, '2021-04-26 23:21:15', '2021-04-26 23:21:15'),
(19, 'Bangla', 'bangla43nsdnf', '2021-05-05', '17:56', '18:56', 'yes', '1', NULL, NULL, '2021-05-05 05:56:56', '2021-05-05 05:56:56'),
(20, 'MAth', 'mathjklasjwe32', '2021-05-10', '18:04', '20:04', 'Bla', '1', NULL, NULL, '2021-05-10 01:05:07', '2021-05-10 01:05:07'),
(21, 'abc', 'abckosyRYGXYFxOL2ko', '2021-05-23', '21:56', '21:56', 'bdfjksa', '1', NULL, NULL, '2021-05-23 10:03:45', '2021-05-23 10:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `exam_questions`
--

CREATE TABLE `exam_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `question_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_option_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_option_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_option_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_option_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `right_answare` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_count_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_questions`
--

INSERT INTO `exam_questions` (`id`, `exam_id`, `question_title`, `question_option_1`, `question_option_2`, `question_option_3`, `question_option_4`, `right_answare`, `exam_count_time`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 15, 'Ict Exam Title', '1', '2', '3', '4', '2', '14:30', '1', '1', NULL, '2021-04-28 04:32:26', '2021-05-28 00:09:23'),
(2, 14, 'Text', '1', '5', '5', '8', '8', '12:00', '1', '1', NULL, '2021-04-28 23:57:58', '2021-05-28 00:00:39'),
(3, 20, 'TItle', 'A', 'B', 'C', 'D', 'C', '16:05', '1', NULL, NULL, '2021-05-10 01:06:24', '2021-05-10 01:06:24'),
(4, 14, 'How Many Article Are?', '4', '5', '7', '2', '5', '11:34', '1', NULL, NULL, '2021-05-27 23:34:08', '2021-05-27 23:34:08'),
(7, 15, 'What is means ICT?', 'ict1', 'ict2', 'ict3', 'ict4', 'ict3', '18:31', '1', NULL, NULL, '2021-06-10 06:38:01', '2021-06-10 06:38:01'),
(8, 14, 'Count use', 'if else', 'loop', 'variable', 'array', 'array', '00:10', '1', NULL, NULL, '2021-06-10 12:10:27', '2021-06-10 12:10:27'),
(9, 14, '5+10', '5', '15', '4', '9', '15', '12:16', '1', NULL, NULL, '2021-06-10 12:14:38', '2021-06-10 12:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question_answare`
--

CREATE TABLE `exam_question_answare` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answare_mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_question_answare`
--

INSERT INTO `exam_question_answare` (`id`, `user_id`, `question_id`, `answare_mark`, `exam_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(132, 13, 2, '0', 14, NULL, NULL, NULL, '2021-06-17 13:07:21', '2021-06-17 13:07:21'),
(133, 13, 4, '0', 14, NULL, NULL, NULL, '2021-06-17 13:07:25', '2021-06-17 13:07:25'),
(134, 13, 8, '0', 14, NULL, NULL, NULL, '2021-06-17 13:07:30', '2021-06-17 13:07:30'),
(135, 13, 9, '1', 14, NULL, NULL, NULL, '2021-06-17 13:07:33', '2021-06-17 13:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `exam_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_id` bigint(20) UNSIGNED DEFAULT NULL,
  `mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `user_id`, `exam_slug`, `exam_id`, `mark`, `comment`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(10, 12, 'ictaaa', NULL, '67', 'dsfd', NULL, NULL, NULL, '2021-05-23 12:48:20', '2021-05-23 23:30:16'),
(11, 13, 'ictaaa', NULL, '98', '98', NULL, NULL, NULL, '2021-05-23 13:30:24', '2021-05-23 13:32:56'),
(12, 1, 'engvsafdsa', NULL, '90', '90 paise', '1', NULL, NULL, '2021-05-23 13:32:11', '2021-05-23 13:32:11'),
(13, 8, 'ictaaa', NULL, '59', '3rd', NULL, NULL, NULL, '2021-05-23 14:15:40', '2021-05-23 23:43:36');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_feedback` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(4, '2020_09_13_142506_create_settings_table', 1),
(5, '2021_04_22_160231_create_roles_table', 2),
(6, '2021_04_22_160348_create_user_profiles_table', 2),
(7, '2021_04_22_160439_create_subscriptions_table', 2),
(8, '2021_04_22_160530_create_user_subscriptions_table', 2),
(9, '2021_04_22_160550_create_exams_table', 2),
(10, '2021_04_22_160727_create_exam_questions_table', 2),
(11, '2021_04_22_160811_create_exam_question_answare_table', 2),
(12, '2021_04_22_161242_create_topices_table', 2),
(13, '2021_04_22_161405_create_topices_details_table', 2),
(14, '2021_04_22_161454_create_exam_results_table', 2),
(15, '2021_04_22_161534_create_previous_question_types_table', 2),
(16, '2021_04_22_161601_create_question_details_table', 2),
(17, '2021_04_22_161641_create_ask_questions_table', 2),
(18, '2021_04_22_161704_create_feedback_table', 2),
(19, '2021_04_22_161742_create_professions_table', 2),
(20, '2021_04_22_161802_create_about_us_table', 2),
(21, '2021_04_22_161854_create_basic_info_settings_table', 2),
(22, '2021_04_27_053658_create_contacts_table', 3),
(23, '2021_05_24_055515_create_topicstypes_table', 4);

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
-- Table structure for table `previous_question_types`
--

CREATE TABLE `previous_question_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `previous_question_types`
--

INSERT INTO `previous_question_types` (`id`, `question_title`, `question_year`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(2, 'English', '2019-01-01', '1', NULL, NULL, '2021-04-29 03:47:24', '2021-04-29 03:47:24'),
(3, 'Ict', '2020-01-12', '1', '1', NULL, '2021-05-01 22:06:49', '2021-06-16 12:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professions`
--

INSERT INTO `professions` (`id`, `title`, `img_path`, `profession_link`, `start_date`, `end_date`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(3, 'Teacher', '20210505055405.jpg', 'ashadulmridha.com', '2021-02-28', '2021-05-05', '1', NULL, NULL, '2021-05-04 23:42:33', '2021-05-04 23:54:05'),
(4, 'Programmer', '20210505013734.jpg', 'sfadskf', '2021-05-02', '2021-05-05', '1', NULL, NULL, '2021-05-05 07:37:34', '2021-05-05 07:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `question_details`
--

CREATE TABLE `question_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_type_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descreption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_details`
--

INSERT INTO `question_details` (`id`, `question_type_id`, `title`, `descreption`, `file`, `solution_file`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(3, 2, 'English Exam', '3rdChange', '20210502053909.pdf', '20210502053951.pdf', '1', '1', NULL, '2021-05-01 23:39:09', '2021-06-16 12:27:09'),
(8, 3, 'Exam Held In Corona Pandamic', 'Hi All See This ict 2020 Questions', '20210616063950.pdf', '20210616063950.pdf', '1', NULL, NULL, '2021-06-16 12:39:50', '2021-06-16 12:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `phone`, `address`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Management', 'm@gmail.com', '01765566656', 'Dhaka', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `subscription_details`, `price`, `discount_price`, `active`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(2, 'One', '2322', '2000', 'active', NULL, NULL, NULL, '2021-05-02 23:30:58', '2021-05-22 08:03:09'),
(3, 'Two', '1000', '550', 'active', '1', NULL, NULL, '2021-05-22 04:11:31', '2021-05-22 04:11:31'),
(4, 'Three', '3000', '2500', 'inactive', NULL, NULL, NULL, '2021-05-22 04:12:10', '2021-05-23 09:18:57'),
(5, 'Description', '500', '200', 'inactive', NULL, NULL, NULL, '2021-05-22 07:52:52', '2021-05-23 09:18:41'),
(6, '<b style=\"background-color: rgb(255, 255, 0);\">Four&nbsp;</b>', '4000', '3499', 'active', '1', NULL, NULL, '2021-05-23 08:20:41', '2021-05-23 08:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `topices`
--

CREATE TABLE `topices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topices_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topices_title_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topices_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topices_view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topices`
--

INSERT INTO `topices` (`id`, `topices_title`, `topices_title_slug`, `topices_type`, `topices_view`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(7, 'Html Basic', 'Html Basicz5MpPVt3opfSxq6x', 'HtmlgrVLP4G0IE652b33', 'free', '1', '1', NULL, '2021-05-24 07:29:56', '2021-05-24 08:27:23'),
(8, 'Html Elements', 'Html ElementsOZLMc7nfxP1jbVIz', 'HtmlgrVLP4G0IE652b33', 'free', '1', NULL, NULL, '2021-05-24 07:30:20', '2021-05-24 07:30:20'),
(9, 'Basic', 'BasicjxdxxecC4nKrXgnq', 'Css8aOtpPOYLhdAerQ1', 'free', '1', NULL, NULL, '2021-05-24 07:45:56', '2021-05-24 07:45:56'),
(11, 'CSS Advanced', 'AdvancedeQ4xtSEeKg0zCo4U', 'Css8aOtpPOYLhdAerQ1', 'free', '1', '1', NULL, '2021-05-24 08:34:03', '2021-05-24 09:24:16'),
(14, 'Python Basic', 'Python Basic3POAzijc1ag4R8he', 'Python7hBHgBFEBvMnxPWs', 'free', '1', NULL, NULL, '2021-05-24 09:13:49', '2021-05-24 09:13:49'),
(15, 'Html Advanced', 'Html AdvancedFAYrfm9x2zzY2u2C', 'HtmlgrVLP4G0IE652b33', 'paid', '1', '1', NULL, '2021-05-24 09:26:46', '2021-05-26 06:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `topices_details`
--

CREATE TABLE `topices_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topices_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topices_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topices_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic_view` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topices_details`
--

INSERT INTO `topices_details` (`id`, `topices_id`, `topices_slug`, `description`, `file`, `video_path`, `topices_details`, `title`, `topic_view`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(8, 'Html Basicz5MpPVt3opfSxq6x', 'HtmlgrVLP4G0IE652b33', '<span style=\"background-color: rgb(255, 0, 0);\">Html </span>Basic <u>here</u>', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2021-05-24 07:32:08', '2021-05-24 07:32:08'),
(9, 'Html ElementsOZLMc7nfxP1jbVIz', 'HtmlgrVLP4G0IE652b33', '<span style=\"font-family: &quot;Segoe UI&quot;;\">Element fd</span>', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2021-05-24 07:38:15', '2021-05-24 07:38:15'),
(11, 'AdvancedeQ4xtSEeKg0zCo4U', 'Css8aOtpPOYLhdAerQ1', '<b>Advan<span style=\"background-color: rgb(255, 255, 0);\">ced</span></b>', '20210524023807.jpg', NULL, NULL, NULL, NULL, '1', NULL, NULL, '2021-05-24 08:38:07', '2021-05-24 08:38:07'),
(12, 'AdvancedPypqym6e8XZGtwvl', 'HtmlgrVLP4G0IE652b33', 'Adva<span style=\"background-color: rgb(255, 255, 0);\"><font color=\"#ce0000\">nced</font></span>', '20210524030652.jpg', NULL, NULL, NULL, NULL, '1', '1', NULL, '2021-05-24 08:50:32', '2021-05-24 09:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `topicstypes`
--

CREATE TABLE `topicstypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topics_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topics_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topicstypes`
--

INSERT INTO `topicstypes` (`id`, `topics_type`, `topics_slug`, `created_by`, `created_at`, `updated_at`) VALUES
(5, 'Html', 'HtmlgrVLP4G0IE652b33', '1', '2021-05-24 07:28:52', '2021-05-24 07:28:52'),
(6, 'Css', 'Css8aOtpPOYLhdAerQ1', '1', '2021-05-24 07:29:00', '2021-05-24 07:29:00'),
(7, 'Python', 'Python7hBHgBFEBvMnxPWs', '1', '2021-05-24 09:11:45', '2021-05-24 09:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_account` tinyint(4) DEFAULT 0,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `gender`, `image`, `userType`, `verify_account`, `role`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$ZdV0RXAlp9R9YPAZ0/M15.BsyZv74mfu7PaAfRcpF5KOHJPTIMXGm', '01765555445', 'Barishal', 'Male', 'assets/backend/images/profile/kpffdPZRge.jpg', 'admin', 1, 'admin', 'admin', NULL, NULL, '2021-04-24 23:07:09'),
(2, 'Zerin', 'zerin@gmail.com', NULL, '$2y$10$ZdV0RXAlp9R9YPAZ0/M15.BsyZv74mfu7PaAfRcpF5KOHJPTIMXGm', '0423423', 'Gournodi', 'male', NULL, 'user', 1, 'user', 'user', NULL, NULL, NULL),
(8, 'zerin', 'zerinmridha@gmail.com', NULL, '$2y$10$jIyPCOMyEfjujsCRQHiUHuQFq008EI7/1QvyPzDJ/wj/SdxFW642.', '01718069307', 'Bottala,Barishal,Bangladesh, Agailjhara,Barishal,Bangladesh', 'women', '20210520074013.jpg', 'user', 0, 'user', NULL, NULL, NULL, NULL),
(9, 'Ruba', 'ruba@gmail.com', NULL, '$2y$10$inegdB1q.egpnL7zpzKrUuEdtuLpAET0.JNtMnNqsr29arISvUXxK', '13123124', 'Lakharmatia', 'women', '20210520082532.jpg', 'user', 0, 'user', NULL, NULL, NULL, NULL),
(10, 'Habiba', 'habiba@gmail.com', NULL, '$2y$10$.6s7e9w0qgSUciqFo6aXSuZvyThadz0TSEJZxmgdzfSpMZENKjO1K', '2232', 'Vurgata', 'women', '20210520082822.jpg', NULL, 0, 'user', NULL, NULL, NULL, NULL),
(11, 'Jisan', 'jisan@gmail.com', NULL, '$2y$10$tE7NPmaMxrUkd9yhMB78keqKE9IKBV.ztMMe.lgvAJramrpiOV8zm', '01613503047', 'Barishal', 'men', '20210520083535.jpg', 'user', 0, 'user', 'user', NULL, NULL, NULL),
(12, 'abul', 'abul@gmail.com', NULL, '$2y$10$fwILrZOMEgrjk3dno/47ceRXboyPdAxb80WQbIcT0nbIQv/23q6rG', '2342349023', 'torki', 'men', '20210520083653.jpg', 'user', 0, 'user', 'user', NULL, NULL, NULL),
(13, 'Moti', 'moti@gmail.com', NULL, '$2y$10$1MOEW4yk6.4faH9/2KvqWOo2uj4PQ2LkaiydncZd4zrp4OsFliP.K', '21312312', 'Mridha Bari', 'men', '20210520083956.jpg', 'user', 0, 'user', 'user', NULL, NULL, NULL),
(16, 'dgfdsg', 'sdfgfsd@gmail.com', NULL, '$2y$10$VRBoiJAjtf9YXf9EDfkjiuQLOtXaUpDB41npm12Bxl8uT1Sh7naMa', '01718069307', 'Bottala,Barishal,Bangladesh', 'women', '20210615100734.png', 'user', 0, 'user', 'user', NULL, '2021-06-15 04:07:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_education_degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_education_institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_subscriptions`
--

CREATE TABLE `user_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ask_questions`
--
ALTER TABLE `ask_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_info_settings`
--
ALTER TABLE `basic_info_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_questions`
--
ALTER TABLE `exam_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_questions_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `exam_question_answare`
--
ALTER TABLE `exam_question_answare`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_question_answare_user_id_foreign` (`user_id`),
  ADD KEY `exam_question_answare_question_id_foreign` (`question_id`),
  ADD KEY `exam_question_answare_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_results_user_id_foreign` (`user_id`),
  ADD KEY `exam_results_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
-- Indexes for table `previous_question_types`
--
ALTER TABLE `previous_question_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_details`
--
ALTER TABLE `question_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_details_question_type_id_foreign` (`question_type_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topices`
--
ALTER TABLE `topices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topices_details`
--
ALTER TABLE `topices_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topicstypes`
--
ALTER TABLE `topicstypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_subscriptions_user_id_foreign` (`user_id`),
  ADD KEY `user_subscriptions_subscription_id_foreign` (`subscription_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ask_questions`
--
ALTER TABLE `ask_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic_info_settings`
--
ALTER TABLE `basic_info_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `exam_questions`
--
ALTER TABLE `exam_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exam_question_answare`
--
ALTER TABLE `exam_question_answare`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `previous_question_types`
--
ALTER TABLE `previous_question_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `question_details`
--
ALTER TABLE `question_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topices`
--
ALTER TABLE `topices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `topices_details`
--
ALTER TABLE `topices_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `topicstypes`
--
ALTER TABLE `topicstypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam_questions`
--
ALTER TABLE `exam_questions`
  ADD CONSTRAINT `exam_questions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`);

--
-- Constraints for table `exam_question_answare`
--
ALTER TABLE `exam_question_answare`
  ADD CONSTRAINT `exam_question_answare_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`),
  ADD CONSTRAINT `exam_question_answare_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `exam_questions` (`id`),
  ADD CONSTRAINT `exam_question_answare_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD CONSTRAINT `exam_results_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`),
  ADD CONSTRAINT `exam_results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `question_details`
--
ALTER TABLE `question_details`
  ADD CONSTRAINT `question_details_question_type_id_foreign` FOREIGN KEY (`question_type_id`) REFERENCES `previous_question_types` (`id`);

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD CONSTRAINT `user_subscriptions_subscription_id_foreign` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`),
  ADD CONSTRAINT `user_subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
