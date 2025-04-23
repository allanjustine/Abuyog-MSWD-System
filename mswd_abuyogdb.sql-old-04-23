-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 11:01 AM
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
-- Database: `mswd_abuyogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomplished_bies`
--

CREATE TABLE `accomplished_bies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pwd_detail_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accomplished_bies`
--

INSERT INTO `accomplished_bies` (`id`, `pwd_detail_id`, `first_name`, `last_name`, `middle_name`, `created_at`, `updated_at`) VALUES
(3, 11, 'Hillary', 'Terrell', 'Erica Frost', '2025-02-06 03:55:55', '2025-02-06 03:55:55'),
(5, 15, 'Melberth', 'Dancil', 'C.', '2025-02-08 09:02:06', '2025-02-08 09:02:06'),
(6, 16, 'Brooke', 'Flores', 'Rajah Berg', '2025-02-14 01:56:40', '2025-02-14 01:56:40'),
(7, 17, 'lovely rose', 'chavez', 'escano', '2025-02-17 05:30:14', '2025-02-17 05:30:14'),
(13, 24, NULL, NULL, NULL, '2025-02-19 05:43:37', '2025-02-19 05:43:37'),
(14, 25, NULL, NULL, NULL, '2025-02-19 07:31:49', '2025-02-19 07:31:49'),
(16, 27, NULL, NULL, NULL, '2025-04-09 08:23:10', '2025-04-09 08:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `aics_details`
--

CREATE TABLE `aics_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_id` bigint(20) UNSIGNED DEFAULT NULL,
  `case_no` varchar(255) DEFAULT NULL,
  `new_or_old` enum('New','Old') DEFAULT NULL,
  `date_applied` date DEFAULT NULL,
  `source_of_referral` varchar(255) DEFAULT NULL,
  `problem_presented` text DEFAULT NULL,
  `findings` text DEFAULT NULL,
  `action_taken` text DEFAULT NULL,
  `type_of_assistance` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aics_details`
--

INSERT INTO `aics_details` (`id`, `beneficiary_id`, `case_no`, `new_or_old`, `date_applied`, `source_of_referral`, `problem_presented`, `findings`, `action_taken`, `type_of_assistance`, `created_at`, `updated_at`) VALUES
(1, 15, 'Perspiciatis cupidi', 'Old', '1988-01-19', 'Minus omnis odit aut', 'Rerum aliquip nostru', 'Qui temporibus fugia', 'test', NULL, '2025-02-01 00:06:15', '2025-02-01 00:33:31'),
(2, 16, 'In dolorem fugiat qu', 'New', '1981-04-09', 'Libero dolore libero', 'Eveniet ducimus do', 'Autem elit non est', 'Expedita eiusmod qui', NULL, '2025-02-01 00:07:12', '2025-02-01 00:07:12'),
(3, 8, 'Lorem dolor eaque es', 'Old', '1995-07-01', 'Aut similique facere', 'Eveniet tempor simi', 'Aut impedit quo tem', 'Quas laboriosam per', NULL, '2025-02-01 00:36:05', '2025-02-02 12:04:39'),
(6, 30, 'Omnis dolores volupt', 'New', '2019-04-13', 'Quasi mollit aut in', 'Modi qui architecto', 'Ut exercitation haru', 'Aut nemo sed sed qui', NULL, '2025-02-02 05:05:57', '2025-02-02 05:05:57'),
(7, 35, 'Voluptatem Ducimus', 'New', '1983-03-01', 'Ea dolore aperiam do', 'Consequatur beatae v', 'Et est voluptas Nam', 'Adipisicing ex aut s', NULL, '2025-02-02 05:20:06', '2025-02-02 05:20:06'),
(14, 49, 'Tempora laboriosam', 'New', '1990-01-10', 'At ullamco aut volup', 'Deserunt voluptatem', 'Accusantium vitae do', 'Elit minus odit rer', NULL, '2025-02-02 07:57:54', '2025-02-02 07:57:54'),
(19, 65, '123', 'New', '2025-02-07', 'asdasd', 'Wa kwarta', 'Haha', 'Pagtrabaho uy', 'Burial Assistance', '2025-02-06 09:08:36', '2025-02-07 01:04:11'),
(21, 70, '123', 'Old', '2025-02-10', 'Wa', 'Wa kwarta', 'Haha', 'Pagtrabaho uy', 'Burial Assistance', '2025-02-07 01:57:37', '2025-02-07 02:02:04'),
(24, 75, 'Eiusmod consequatur', 'New', '2017-12-21', 'Animi ea modi tempo', 'Excepteur voluptas e', 'Consectetur aut obca', 'Porro qui cupiditate', NULL, '2025-02-08 03:31:42', '2025-02-08 03:31:42'),
(25, 76, 'Incididunt eu perfer', 'Old', '2021-04-08', 'Impedit sed nesciun', 'Libero quidem tempor', 'Est aute ea ut repe', 'Sunt facilis aute an', NULL, '2025-02-08 03:36:24', '2025-02-08 03:36:24'),
(26, 78, 'Fugiat molestiae ex', 'New', '1983-07-20', 'Aliquip architecto m', 'Sed saepe at reicien', 'Quia ullamco id dolo', 'Cum repudiandae nost', NULL, '2025-02-08 03:52:17', '2025-02-08 03:52:17'),
(27, 91, NULL, NULL, '2025-02-17', 'Incidunt nulla lore', NULL, NULL, NULL, 'Medical Assistance', '2025-02-14 02:12:48', '2025-02-14 02:12:48'),
(28, 94, NULL, NULL, '2025-02-19', 'N/A', NULL, NULL, NULL, 'Medical Assistance', '2025-02-17 05:37:00', '2025-02-17 05:37:00'),
(30, 98, NULL, NULL, '2025-02-20', 'N/A', NULL, NULL, NULL, 'Medical Assistance', '2025-02-17 15:31:50', '2025-02-17 15:31:50'),
(31, 99, NULL, NULL, '2025-02-19', 'N/A', NULL, NULL, NULL, 'Burial Assistance', '2025-02-17 15:38:33', '2025-02-17 15:38:33'),
(32, 100, NULL, NULL, '2025-02-20', 'N/A', NULL, NULL, NULL, 'Medical Assistance', '2025-02-17 15:42:15', '2025-02-17 15:42:15'),
(33, 101, NULL, NULL, '2025-02-27', 'N/A', NULL, NULL, NULL, 'Medical Assistance', '2025-02-17 15:44:59', '2025-02-17 15:44:59'),
(34, 102, NULL, NULL, '2025-02-20', 'N/A', NULL, NULL, NULL, 'Medical Assistance', '2025-02-17 16:27:51', '2025-02-17 16:27:51'),
(35, 103, NULL, NULL, '2025-02-19', 'N/A', NULL, NULL, NULL, 'Medical Assistance', '2025-02-17 16:29:27', '2025-02-17 16:29:27'),
(36, 110, NULL, NULL, '2025-02-19', 'Temporibus odit sed', NULL, NULL, NULL, 'Emergency Shelter Assistance', '2025-02-18 01:33:40', '2025-02-18 01:33:40'),
(37, 114, NULL, NULL, '2025-02-20', 'Ducimus dolorum lab', NULL, NULL, NULL, 'Medical Assistance', '2025-02-18 02:55:39', '2025-02-18 02:55:39'),
(38, 115, NULL, NULL, '2025-02-19', 'Do sint neque repudi', NULL, NULL, NULL, 'Emergency Shelter Assistance', '2025-02-18 02:56:07', '2025-02-18 02:56:07'),
(39, 117, NULL, NULL, '2025-02-21', 'test', NULL, NULL, NULL, 'Educational Assistance', '2025-02-19 02:17:47', '2025-02-19 02:17:47'),
(40, 118, NULL, NULL, '2025-02-20', 'Test', NULL, NULL, NULL, 'Transportation Assistance', '2025-02-19 03:36:59', '2025-02-19 03:36:59'),
(41, 119, NULL, NULL, '2025-02-21', 'test', NULL, NULL, NULL, 'Burial Assistance', '2025-02-19 03:37:32', '2025-02-19 03:37:32'),
(42, 120, NULL, NULL, '2025-02-20', 'Nostrum eligendi eve', NULL, NULL, NULL, 'Emergency Shelter Assistance', '2025-02-19 03:39:44', '2025-02-19 03:39:44'),
(43, 124, 'Do sit inventore et', 'New', '1998-10-17', 'Facilis ut soluta ev', 'Id tenetur blanditii', 'Nobis distinctio Vo', 'Incididunt voluptas', NULL, '2025-02-19 04:18:30', '2025-02-19 04:18:30'),
(44, 127, NULL, NULL, '2025-02-20', 'N/A', NULL, NULL, NULL, 'Medical Assistance', '2025-02-19 05:45:33', '2025-02-19 05:45:33'),
(45, 128, NULL, NULL, '2025-02-20', 'N/A', NULL, NULL, NULL, 'Medical Assistance', '2025-02-19 05:45:35', '2025-02-19 05:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `date_applied` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `employee_name` varchar(255) DEFAULT NULL,
  `custom_fields` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`custom_fields`)),
  `approved_at` timestamp NULL DEFAULT NULL,
  `appearance_date` timestamp NULL DEFAULT NULL,
  `approved_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cancellation_reason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `email`, `phone`, `service_id`, `date_applied`, `status`, `user_id`, `employee_name`, `custom_fields`, `approved_at`, `appearance_date`, `approved_by`, `created_at`, `updated_at`, `cancellation_reason`) VALUES
(67, 'Lab', 'sircsaira@gmail.com', '09949420699', 2, '2025-02-06', 'pending', 15, NULL, '{\"last_name\":\"Chavez\",\"middle_name\":null,\"suffix\":null,\"application_type\":\"new_applicant\",\"pwd_num\":\"Perferendis ut tempo\",\"landline\":\"Deserunt est quis si\",\"blood_type\":\"Velit elit est simi\",\"sex\":\"male\",\"birthdate\":\"1978-12-26\",\"age\":\"46\",\"civil_status\":\"separated\",\"type_of_disability\":\"visual\",\"cause_of_disability\":\"congenital\",\"congenital_or_inborn\":\"autism\",\"street\":\"Officia dolore sequi\",\"barangay\":\"252\",\"municipality\":\"Accusamus non a duci\",\"province\":\"Est sed asperiores\",\"region\":\"Et beatae excepteur\",\"educational_attainment\":\"college\",\"occupation_pwd\":\"technicians\",\"specify_occupation\":null,\"status_of_employment\":\"employed\",\"category_of_employment\":\"private\",\"types_of_employment\":\"casual\",\"org_affiliate\":\"Voluptas sed illo ci\",\"org_contact_person\":\"Autem molestias enim\",\"org_office\":\"Nesciunt ratione el\",\"org_tel_no\":\"Quidem veritatis dui\",\"email_address\":\"pabixonoq@mailinator.com\",\"sss_no\":\"Suscipit rem ut itaq\",\"gsis_no\":\"In dolore eligendi n\",\"pag_ibig_no\":\"Et animi quaerat te\",\"psn_no\":\"Duis praesentium ips\",\"philhealth_no\":\"Qui rem voluptatem\",\"father_name\":\"Maggy Moses\",\"father_occupation\":\"Magni magna dolor is\",\"father_contact\":\"Quia nulla at ipsum\",\"mother_name\":\"Abraham Mcintosh\",\"mother_occupation\":\"Pariatur Non in por\",\"mother_contact\":\"Iusto cillum corpori\",\"guardian_name\":\"Shaine Nichols\",\"guardian_occupation\":\"Autem ut ea cumque m\",\"guardian_contact\":\"Perferendis dignissi\",\"role\":\"representative\",\"applicant_lastname\":\"Vaughn\",\"applicant_firstname\":\"Louis\",\"applicant_middlename\":\"Jelani Phelps\",\"guardian_lastname\":null,\"guardian_firstname\":null,\"guardian_middlename\":null,\"representative_lastname\":\"Jennings\",\"representative_firstname\":\"Micah\",\"representative_middlename\":\"Baxter Gates\"}', NULL, NULL, NULL, '2025-02-06 03:28:36', '2025-02-06 03:28:36', NULL),
(68, 'Lab', 'sircsaira@gmail.com', '09949420699', 2, '2025-02-06', 'pending', 15, NULL, '{\"last_name\":\"Chavez\",\"middle_name\":null,\"suffix\":null,\"application_type\":\"renewal\",\"pwd_num\":\"Veritatis nihil ut c\",\"landline\":\"Aute lorem autem rei\",\"blood_type\":\"Aut quia et eveniet\",\"sex\":\"female\",\"birthdate\":\"1995-09-12\",\"age\":\"29\",\"civil_status\":\"single\",\"type_of_disability\":\"deaf\",\"cause_of_disability\":\"congenital\",\"congenital_or_inborn\":\"autism\",\"street\":\"Iusto aut dolores an\",\"barangay\":\"207\",\"municipality\":\"Vel et elit praesen\",\"province\":\"Quia dolores aut ab\",\"region\":\"Nihil dolore vero qu\",\"educational_attainment\":\"kindergarten\",\"occupation_pwd\":\"others\",\"specify_occupation\":null,\"status_of_employment\":\"unemployed\",\"category_of_employment\":\"government\",\"types_of_employment\":\"seasonal\",\"org_affiliate\":\"Ex inventore eaque r\",\"org_contact_person\":\"Suscipit voluptatem\",\"org_office\":\"Pariatur Nobis culp\",\"org_tel_no\":\"A dolor rem dolor vo\",\"email_address\":\"xyvowy@mailinator.com\",\"sss_no\":\"Ad ullamco molestias\",\"gsis_no\":\"Et qui inventore ius\",\"pag_ibig_no\":\"Ex temporibus et err\",\"psn_no\":\"Ea et iste id repell\",\"philhealth_no\":\"Et eaque ex totam mi\",\"father_name\":\"Chava Graham\",\"father_occupation\":\"Magni voluptate est\",\"father_contact\":\"Deleniti et eligendi\",\"mother_name\":\"Cody King\",\"mother_occupation\":\"Et est dolorem accu\",\"mother_contact\":\"Non laborum et ad ut\",\"guardian_name\":\"Duncan Emerson\",\"guardian_occupation\":\"Aut natus expedita N\",\"guardian_contact\":\"Qui et mollit dolore\",\"role\":\"representative\",\"applicant_lastname\":\"Vaughn\",\"applicant_firstname\":\"Louis\",\"applicant_middlename\":\"Jelani Phelps\",\"guardian_lastname\":\"Soto\",\"guardian_firstname\":\"Mufutau\",\"guardian_middlename\":\"Florence Vaughn\",\"representative_lastname\":\"Burks\",\"representative_firstname\":\"Ivor\",\"representative_middlename\":\"Basil Buckner\"}', NULL, NULL, NULL, '2025-02-06 03:33:46', '2025-02-06 03:33:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assistances`
--

CREATE TABLE `assistances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_of_assistance` varchar(255) DEFAULT NULL,
  `type_of_assistance` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `benefits_received_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assistances`
--

INSERT INTO `assistances` (`id`, `name_of_assistance`, `type_of_assistance`, `amount`, `date_received`, `created_at`, `updated_at`, `benefits_received_id`) VALUES
(1, 'Test Assistance', 'Medical Assistance', '2000', '2025-02-11', '2025-02-09 17:47:05', '2025-02-10 18:31:31', NULL),
(6, 'akap', 'Financial Assistance', '10000', '2025-02-13', '2025-02-10 00:52:50', '2025-02-12 21:29:58', NULL),
(9, 'pension', 'Financial Assistance', '20000', '2025-02-11', '2025-02-10 19:05:05', '2025-02-10 19:05:30', NULL),
(14, 'para sa lahat', 'Financial Assistance', '10000', '2025-02-17', '2025-02-16 18:07:01', '2025-02-16 18:08:24', NULL),
(15, 'Bag o', 'Educational Assistance', '5000', '2025-02-18', '2025-02-17 09:35:50', '2025-02-18 03:36:51', NULL),
(16, 'test', 'Financial Assistance', '123123', '2025-02-18', '2025-02-18 03:37:15', '2025-02-18 03:37:28', NULL),
(17, 'Aics', 'Financial Assistance', '50', '2025-02-18', '2025-02-18 04:23:41', '2025-02-18 04:23:41', NULL),
(18, 'test', 'Financial Assistance', '33333', '2025-02-18', '2025-02-18 08:44:13', '2025-02-18 08:44:43', NULL),
(19, 'test', 'Financial Assistance', '34445', '2025-02-18', '2025-02-18 08:45:23', '2025-02-18 08:46:02', NULL),
(20, 'sample', 'Educational Assistance', '-300', '2025-02-18', '2025-02-18 08:51:36', '2025-02-18 08:58:48', NULL),
(21, 'keta', 'Educational Assistance', '0', '2025-02-18', '2025-02-18 08:59:12', '2025-02-18 09:24:27', NULL),
(22, 'try', 'Educational Assistance', '20', '2025-02-19', '2025-02-18 13:27:31', '2025-02-19 00:49:58', NULL),
(23, 'sample', 'Educational Assistance', '1', '2025-04-10', '2025-02-18 14:24:35', '2025-04-10 05:20:47', NULL),
(24, 'Test', 'Educational Assistance', '11111', '2025-04-10', '2025-02-19 00:40:52', '2025-04-10 05:19:27', NULL),
(25, 'Test', 'Educational Assistance', '123', '2025-04-10', '2025-02-19 00:44:44', '2025-04-10 05:17:06', NULL),
(26, 'test', 'Medical Assistance', '1', '2025-04-10', '2025-02-19 00:46:56', '2025-04-10 05:15:57', NULL),
(27, 'try assistance', 'Financial Assistance', '0', '2025-04-10', '2025-02-19 04:18:54', '2025-04-10 05:09:25', NULL),
(28, 'try assistance 2', 'Financial Assistance', '1000', '2025-02-19', '2025-02-19 04:19:21', '2025-02-19 04:21:55', NULL),
(29, 'test 2', 'Medical Assistance', '2', '2025-04-10', '2025-02-19 04:31:03', '2025-04-10 05:08:29', NULL),
(30, 'test', 'Financial Assistance', '100', '2025-02-19', '2025-02-19 05:51:01', '2025-02-19 05:51:56', NULL),
(31, 'FRANCO SCHOLAR', 'Financial Assistance', '20000', '2025-02-19', '2025-02-19 07:58:32', '2025-02-19 08:01:43', NULL),
(32, 'Test new 1', 'Food Assistance', '22', '2025-04-10', '2025-04-10 05:21:30', '2025-04-10 05:22:34', NULL),
(33, 'Test', 'Medical Assistance', '12', NULL, '2025-04-11 06:15:35', '2025-04-11 06:15:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `barangays`
--

CREATE TABLE `barangays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `latitude` decimal(10,6) NOT NULL,
  `longitude` decimal(10,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangays`
--

INSERT INTO `barangays` (`id`, `name`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Alangilan', 10.639663, 125.026233, NULL, NULL),
(2, 'Anibongan', 10.604396, 125.055671, NULL, NULL),
(3, 'Bagacay', 10.602055, 125.119004, NULL, NULL),
(4, 'Bahay', 10.713999, 125.036289, NULL, NULL),
(5, 'Balinsasayao', 10.685820, 124.945723, NULL, NULL),
(6, 'Balocawe', 10.744168, 124.979454, NULL, NULL),
(7, 'Balocawehay', 10.715140, 124.954343, NULL, NULL),
(8, 'Barayong', 10.750247, 124.999026, NULL, NULL),
(9, 'Bayabas', 10.661993, 124.997613, NULL, NULL),
(10, 'Bito', 10.751443, 125.007141, NULL, NULL),
(11, 'Buaya', 10.706317, 125.088063, NULL, NULL),
(12, 'Buenavista', 10.730378, 125.019642, NULL, NULL),
(13, 'Bulak', 10.608689, 125.109174, NULL, NULL),
(14, 'Bunga', 10.762420, 125.004221, NULL, NULL),
(15, 'Buntay', 10.746587, 125.009780, NULL, NULL),
(16, 'Burubud-an', 10.694385, 125.008166, NULL, NULL),
(17, 'Cadac-an', 10.727157, 125.008402, NULL, NULL),
(18, 'Cagbolo', 10.655158, 125.033982, NULL, NULL),
(19, 'Can-aporong', 10.740469, 125.004260, NULL, NULL),
(20, 'Canmarating', 10.727620, 124.989305, NULL, NULL),
(21, 'Can-uguib', 10.738780, 125.010513, NULL, NULL),
(22, 'Capilian', 10.702818, 124.970223, NULL, NULL),
(23, 'Combis', 10.625630, 125.052533, NULL, NULL),
(24, 'Dingle', 10.649738, 125.013784, NULL, NULL),
(25, 'Guintagbucan', 10.755187, 125.005037, NULL, NULL),
(26, 'Hampipila', 10.672836, 125.044107, NULL, NULL),
(27, 'Katipunan', 10.726032, 124.963230, NULL, NULL),
(28, 'Kikilo', 10.620450, 125.099493, NULL, NULL),
(29, 'Laray', 10.668573, 125.014197, NULL, NULL),
(30, 'Lawa-an', 10.723881, 125.030668, NULL, NULL),
(31, 'Libertad', 10.594563, 125.044698, NULL, NULL),
(32, 'Loyonsawang', 10.743351, 125.012011, NULL, NULL),
(33, 'Mag-atubang', 10.739173, 124.993437, NULL, NULL),
(34, 'Mahagna', 10.641091, 125.036142, NULL, NULL),
(35, 'Mahayahay', 10.551441, 125.063625, NULL, NULL),
(36, 'Maitum', 10.683090, 124.970008, NULL, NULL),
(37, 'Malaguicay', 10.708644, 125.069049, NULL, NULL),
(38, 'Matagnao', 10.679914, 125.020918, NULL, NULL),
(39, 'Nalibunan', 10.737801, 125.013356, NULL, NULL),
(40, 'Nebga', 10.633512, 125.058107, NULL, NULL),
(41, 'New Taligue', 10.580738, 125.077415, NULL, NULL),
(42, 'Odiongan', 10.709654, 124.986526, NULL, NULL),
(43, 'Old Taligue', 10.567503, 125.052548, NULL, NULL),
(44, 'Pagsang-an', 10.711419, 124.997964, NULL, NULL),
(45, 'Paguite', 10.702430, 124.956347, NULL, NULL),
(46, 'Parasanon', 10.617123, 125.042960, NULL, NULL),
(47, 'Picas Sur', 10.688059, 124.989370, NULL, NULL),
(48, 'Pilar', 10.703188, 125.036069, NULL, NULL),
(49, 'Pinamanagan', 10.535713, 125.055325, NULL, NULL),
(50, 'Salvacion', 10.688237, 125.041579, NULL, NULL),
(51, 'San Francisco', 10.692974, 125.099314, NULL, NULL),
(52, 'San Isidro', 10.761967, 124.998946, NULL, NULL),
(53, 'San Roque', 10.637231, 125.088157, NULL, NULL),
(54, 'Santa Fe', 10.737336, 125.017482, NULL, NULL),
(55, 'Santa Lucia', 10.649735, 125.066381, NULL, NULL),
(56, 'Santo Niño', 10.734838, 125.017494, NULL, NULL),
(57, 'Tabigue', 10.737717, 124.982338, NULL, NULL),
(58, 'Tadoc', 10.708175, 125.007126, NULL, NULL),
(59, 'Tib-o', 10.672394, 125.091167, NULL, NULL),
(60, 'Tinalian', 10.710104, 125.019556, NULL, NULL),
(61, 'Tinocolan', 10.554889, 125.074629, NULL, NULL),
(62, 'Tuy-a', 10.626923, 125.043031, NULL, NULL),
(63, 'Victory', 10.739811, 125.016096, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basic_infos`
--

CREATE TABLE `basic_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `house_no_street` varchar(255) DEFAULT NULL,
  `municipality` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `civil_status` varchar(255) DEFAULT NULL,
  `blood_type` varchar(255) DEFAULT NULL,
  `land_line_no` varchar(255) DEFAULT NULL,
  `educational_attainment` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `status_of_employment` varchar(255) DEFAULT NULL,
  `types_of_employment` varchar(255) DEFAULT NULL,
  `category_of_employment` varchar(255) DEFAULT NULL,
  `organization_affiliated` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `tel_no` varchar(255) DEFAULT NULL,
  `sss_no` varchar(255) DEFAULT NULL,
  `gsis_no` varchar(255) DEFAULT NULL,
  `pag_ibig_no` varchar(255) DEFAULT NULL,
  `psn_no` varchar(255) DEFAULT NULL,
  `philhealth_no` varchar(255) DEFAULT NULL,
  `four_ps_beneficiary` varchar(255) DEFAULT NULL,
  `indigenouse_person` varchar(255) DEFAULT NULL,
  `company_agency` varchar(255) DEFAULT NULL,
  `icoe_name` varchar(255) DEFAULT NULL,
  `icoe_address` varchar(255) DEFAULT NULL,
  `icoe_relationship` varchar(255) DEFAULT NULL,
  `icoe_contact_number` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `annual_income` varchar(255) DEFAULT NULL,
  `type_of_disability` varchar(255) DEFAULT NULL,
  `cause_of_disability` varchar(255) DEFAULT NULL,
  `pwd_status` varchar(255) DEFAULT NULL,
  `pwd_number` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_occupation` varchar(255) DEFAULT NULL,
  `father_contact` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_occupation` varchar(255) DEFAULT NULL,
  `mother_contact` varchar(255) DEFAULT NULL,
  `guardian_name` varchar(255) DEFAULT NULL,
  `guardian_occupation` varchar(255) DEFAULT NULL,
  `guardian_contact` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_infos`
--

INSERT INTO `basic_infos` (`id`, `user_id`, `place_of_birth`, `house_no_street`, `municipality`, `region`, `province`, `religion`, `civil_status`, `blood_type`, `land_line_no`, `educational_attainment`, `occupation`, `status_of_employment`, `types_of_employment`, `category_of_employment`, `organization_affiliated`, `contact_person`, `office_address`, `tel_no`, `sss_no`, `gsis_no`, `pag_ibig_no`, `psn_no`, `philhealth_no`, `four_ps_beneficiary`, `indigenouse_person`, `company_agency`, `icoe_name`, `icoe_address`, `icoe_relationship`, `icoe_contact_number`, `skills`, `annual_income`, `type_of_disability`, `cause_of_disability`, `pwd_status`, `pwd_number`, `father_name`, `father_occupation`, `father_contact`, `mother_name`, `mother_occupation`, `mother_contact`, `guardian_name`, `guardian_occupation`, `guardian_contact`, `created_at`, `updated_at`) VALUES
(12, 12, 'Commodo amet placea', 'Quibusdam eos nemo', 'Nihil illo aut adipi', 'Deserunt porro facil', 'Pariatur Ea nobis v', 'Baha\'i', 'Married', 'O-', 'Dicta ab eaque atque', 'No Formal Education', 'Plant and Machine Operators and Assemblers', 'Employed', 'Emergency', NULL, 'Moses and Morrison Traders', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-09 06:44:07', '2025-04-09 06:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` int(10) UNSIGNED DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `program_enrolled` bigint(20) UNSIGNED NOT NULL,
  `barangay_id` bigint(20) UNSIGNED DEFAULT NULL,
  `complete_address` varchar(255) DEFAULT NULL,
  `civil_status` varchar(255) DEFAULT NULL,
  `educational_attainment` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `monthly_income` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_number` varchar(255) DEFAULT NULL,
  `annual_income` varchar(255) DEFAULT NULL,
  `other_skills` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,6) DEFAULT NULL,
  `longitude` decimal(10,6) DEFAULT NULL,
  `approved_at` timestamp NULL DEFAULT NULL,
  `appearance_date` timestamp NULL DEFAULT NULL,
  `approved_by` bigint(20) UNSIGNED DEFAULT NULL,
  `accepted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) DEFAULT 'pending',
  `is_deceased` tinyint(1) NOT NULL DEFAULT 0,
  `message_count` int(2) NOT NULL DEFAULT 0,
  `cancellation_reason` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `date_of_birth`, `age`, `gender`, `place_of_birth`, `program_enrolled`, `barangay_id`, `complete_address`, `civil_status`, `educational_attainment`, `occupation`, `religion`, `monthly_income`, `phone`, `email`, `id_number`, `annual_income`, `other_skills`, `latitude`, `longitude`, `approved_at`, `appearance_date`, `approved_by`, `accepted_by`, `user_id`, `status`, `is_deceased`, `message_count`, `cancellation_reason`, `created_at`, `updated_at`) VALUES
(3, 'jonas miguel', 'villotee', 'Balongag', NULL, '2001-02-22', 23, 'Male', 'Abuyog', 1, 11, NULL, 'Single', 'College', 'Student', 'Other', 'Below 5,000', '09268307424', 'jm@gmail.com', '123456', 'Below 60,000', 'test', NULL, NULL, NULL, NULL, NULL, 3, NULL, 'rejected', 0, 0, 'wwewwaadf', '2025-01-19 19:12:06', '2025-02-05 06:26:53'),
(4, 'Desirae', 'Escano', 'Navarro', NULL, '1975-06-29', 33, 'Female', 'Lorem eum dolorem ad', 2, 25, NULL, 'Divorced', 'No Formal Education', 'Magni minus sit vol', 'Ex blanditiis sed ve', 'Below 5,000', '+1 (853) 984-5192', 'jm@gmail.com', '133', '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rejected', 0, 0, 'totot', '2025-01-19 19:24:15', '2025-02-05 06:09:02'),
(8, 'Sopoline', 'Brody Mcfarland', 'Thornton', NULL, '1994-04-21', 30, 'Female', 'Ut laboriosam quam', 4, 14, NULL, 'Married', 'Postgraduate', 'Sed totam cupidatat', 'Eos alias elit vit', 'Below 5,000', '09061573601', 'lily@gmail.com', '123-456', 'Below 60,000', 'Ea ut sit quasi reru', NULL, NULL, NULL, NULL, NULL, 3, NULL, 'rejected', 0, 0, 'invalid date', '2025-01-25 12:00:40', '2025-02-19 04:16:21'),
(9, 'Baxter', 'Kyle Nelson', 'Carlson', NULL, '2003-12-17', 21, 'Male', 'Et nemo in delectus', 3, 25, NULL, 'Widowed', 'Postgraduate', 'Dolores suscipit ips', 'Harum sed molestiae', 'Below 5,000', '+1 (796) 782-1255', 'labli@gmail.com', '123456', 'Below 60,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-01-27 07:03:22', '2025-02-02 12:48:04'),
(12, 'Basil', 'Gwendolyn Bradley', 'Arnold', NULL, '2016-02-08', 8, 'Female', 'Vel aliquid doloribu', 1, 23, NULL, 'Divorced', 'High School', 'Nulla enim ducimus', NULL, NULL, '09064209450', NULL, NULL, 'Above 180,000', 'Quidem proident aut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-01-31 17:00:16', '2025-01-31 17:00:16'),
(15, 'Rachel', 'Mariko Hall', 'Mcfarland', NULL, '2014-08-24', NULL, NULL, 'Ipsam et qui itaque', 4, 17, NULL, 'Divorced', 'College', 'Sit impedit ipsum', 'Ducimus voluptates', NULL, '09262385703', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-01 00:06:15', '2025-02-01 00:06:15'),
(16, 'Kitra', 'Risa Nixon', 'Alexander', NULL, '2009-03-24', NULL, NULL, 'Sunt sint incididu', 4, 63, NULL, 'Widowed', 'Elementary', 'Quae ab laborum Dis', 'Quidem id eum quasi', NULL, '09368532932', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-01 00:07:12', '2025-02-01 00:07:12'),
(17, 'Anjolie', 'Test', 'Donaldson', NULL, '2015-06-10', 9, 'Female', 'Alias qui et fugiat', 3, 16, NULL, 'Single', 'High School', 'Dolor veniam anim v', 'Eum rerum saepe cum', NULL, '+1 (898) 623-2983', NULL, NULL, 'Above 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-01 02:55:00', '2025-02-01 04:08:34'),
(18, 'Craig', NULL, 'Ramirez', NULL, '2021-07-21', NULL, 'Male', 'Ducimus culpa facer', 3, 19, NULL, 'Single', 'College', 'Voluptas asperiores', 'Eveniet nihil dolor', NULL, '+1 (787) 556-6102', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-01 02:56:39', '2025-02-01 02:56:39'),
(20, 'Ingrid', 'Hu Santana', 'Hickman', NULL, '2023-04-15', 1, 'Male', 'Illum molestiae fug', 1, 16, NULL, 'Single', 'College', 'Minim ut similique m', NULL, NULL, '09123456789', NULL, NULL, 'Above 180,000', 'Facere suscipit aut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-01 04:34:18', '2025-02-01 04:34:18'),
(26, 'Simon', NULL, 'Thompson', NULL, '2003-11-26', 21, 'Female', 'Quo deleniti aut ali', 2, 63, NULL, 'Single', 'Postgraduate', 'Ut fugiat odio moles', 'Fugiat est voluptatu', NULL, '+1 (133) 913-8532', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 02:19:39', '2025-02-02 02:19:39'),
(27, 'Arsenio', 'Barrett Nguyen', 'Matthews', NULL, '2017-06-15', 7, 'Female', 'Dolores quo mollit a', 1, 13, NULL, 'Divorced', 'High School', 'Et ad animi nulla v', NULL, NULL, '09123456789', NULL, NULL, 'Below 60,000', 'Iste rerum voluptatu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:01:46', '2025-02-02 05:01:46'),
(28, 'Paul', NULL, 'Mcmahon', NULL, '1979-05-05', 45, 'Male', 'Exercitation unde om', 2, 50, NULL, 'Married', 'College', 'Officia totam volupt', 'Tempora quas eiusmod', NULL, '+1 (525) 747-8577', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:02:42', '2025-02-02 05:02:42'),
(29, 'Petra', 'Beau Mcgee', 'Mercado', NULL, '2014-04-17', 10, 'Male', 'Quae velit velit ip', 3, 25, NULL, 'Married', 'Elementary', 'Amet et consequatur', 'Cupiditate sit anim', NULL, '+1 (219) 226-4236', NULL, NULL, 'Above 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:04:12', '2025-02-02 05:04:12'),
(30, 'Cally', 'Haviva Roach', 'Johnson', NULL, '2023-03-16', 1, NULL, 'Laboris voluptas seq', 4, 14, NULL, 'Married', 'Postgraduate', 'Culpa consectetur de', 'Quia iure fuga Aute', NULL, '09268307424', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:05:57', '2025-02-02 05:05:57'),
(32, 'Aline', NULL, 'Mathews', NULL, '2000-07-16', 24, 'Male', 'Rerum amet vel exer', 2, 16, NULL, 'Widowed', 'College', 'Ut fuga Et aute sap', 'Et magna rerum sunt', NULL, '+1 (369) 264-1541', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:19:03', '2025-02-02 05:19:03'),
(33, 'Hasad', 'Christopher Mcclure', 'Richmond', NULL, '1984-05-26', 40, 'Female', 'Placeat mollit sequ', 3, 17, NULL, 'Widowed', 'No Formal Education', 'Cupidatat pariatur', 'Et qui nostrum incid', NULL, '+1 (173) 123-8464', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:19:38', '2025-02-02 05:19:38'),
(34, 'Honorato', 'Cairo Padilla', 'Vang', NULL, '2002-01-24', 23, 'Female', 'Nisi commodi sit deb', 3, 59, NULL, 'Married', 'Postgraduate', 'Tempore reprehender', 'Illo pariatur Minim', NULL, '+1 (893) 321-8271', NULL, NULL, 'Above 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:19:45', '2025-02-02 05:19:45'),
(35, 'Barrett', 'Anne Walker', 'Mack', NULL, '2021-07-11', 3, NULL, 'Cupidatat sit volup', 4, 23, NULL, 'Divorced', 'College', 'Et maiores delectus', 'Aut qui deserunt qui', NULL, '09061573601', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:20:06', '2025-02-02 05:20:06'),
(41, 'Hillary', 'Audrey Pierce', 'Sullivan', NULL, '2003-09-23', 21, 'Male', 'Cillum fuga Dolor d', 1, 12, NULL, 'Widowed', 'High School', 'Labore nemo magnam d', NULL, NULL, '09061573601', NULL, NULL, '60,000 - 120,000', 'Ut sapiente dolore n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:45:25', '2025-02-02 05:45:25'),
(42, 'Jordan', 'Colton Bowen', 'Sanchez', NULL, '1974-04-25', 50, 'Male', 'Cumque et labore ess', 3, 19, NULL, 'Single', 'High School', 'Voluptates eaque omn', 'Illum totam nihil c', NULL, '+1 (377) 241-2773', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:46:13', '2025-02-02 05:46:13'),
(43, 'Gavin', 'Nathan Buchanan', 'Ramsey', NULL, '1985-07-10', 39, 'Female', 'Fuga Atque et corru', 3, 20, NULL, 'Divorced', 'College', 'Eos debitis volupta', 'Odit qui est illum', NULL, '+1 (945) 654-5712', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:46:42', '2025-02-02 05:46:42'),
(44, 'Selma', NULL, 'Ortiz', NULL, '1970-04-12', 54, 'Male', 'Quae sed soluta nihi', 2, 1, NULL, 'Married', 'High School', 'Molestias quam molli', 'Blanditiis minus nes', NULL, '+1 (408) 548-4352', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 05:47:25', '2025-02-02 05:47:25'),
(46, 'Kenyon', 'Kiona Morrison', 'Patrick', NULL, '1997-12-19', 27, 'Female', 'Laudantium iste ad', 1, 12, NULL, 'Single', 'Elementary', 'Aut sit deserunt ip', NULL, NULL, '09268307424', NULL, NULL, 'Below 60,000', 'Sed et porro tenetur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 07:11:55', '2025-02-02 07:11:55'),
(47, 'Tamekah', NULL, 'Logan', NULL, '2017-10-08', 7, 'Female', 'Minim rerum non offi', 1, 23, NULL, 'Widowed', 'High School', 'Dolor eos velit ci', NULL, NULL, '09876543217', NULL, NULL, '60,000 - 120,000', 'Quidem reprehenderit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 07:14:35', '2025-02-02 07:14:35'),
(49, 'Danielle', 'Ariana Atkinson', 'Swanson', NULL, '1998-12-13', 26, NULL, 'Est consectetur lor', 4, 4, NULL, 'Married', 'Postgraduate', 'Et architecto et mai', 'Facere nostrud sint', NULL, '09064209450', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 07:57:54', '2025-02-02 07:57:54'),
(50, 'Daria', 'Kyra Cooley', 'Reilly', NULL, '2011-07-23', 13, 'Female', 'Sunt dignissimos qu', 3, 21, NULL, 'Divorced', 'No Formal Education', 'Molestiae magna dolo', 'Molestias corrupti', NULL, '+1 (493) 865-5196', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, 0, NULL, '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(58, 'Lab', ' ', ' Chavez', '', '1989-03-24', 59, 'Female', 'Quod sint alias esse', 3, 31, 'Pariatur Et expedit', 'Single', 'College Level', 'Qui minim soluta ex', 'Ullamco enim sed ab', '342', '09949420699', 'sircsaira@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-08 02:48:45', '1983-11-28 16:00:00', 2, 3, 15, 'approved', 0, 11, NULL, '2025-02-06 02:30:02', '2025-04-10 05:22:10'),
(62, 'Lab', NULL, 'Chavez', NULL, '1982-01-17', 59, 'Female', NULL, 2, 63, NULL, 'Single', 'Senior High', 'professional', NULL, NULL, '09949420699', 'sircsaira@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-06 06:53:23', '2025-11-18 16:00:00', 2, 2, 15, 'approved', 0, 15, NULL, '2025-02-06 03:55:55', '2025-04-10 05:22:11'),
(64, 'Rachel', NULL, 'Bruce', NULL, '2003-08-25', 21, 'Female', 'Magnam velit ut in r', 2, 62, NULL, 'Single', 'College', 'Impedit vel sunt f', 'Exercitation volupta', NULL, '+1 (597) 704-3473', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, '2025-02-06 07:24:29', NULL, 2, 2, NULL, 'released', 0, 10, NULL, '2025-02-06 07:24:29', '2025-04-10 05:22:12'),
(65, 'Lab', ' ', ' Chavez', '', '2016-01-13', 60, NULL, 'Abuyog leyte', 4, 32, 'Abuyog leyte', 'Single', 'College Graduate', 'Student', 'Adventist', NULL, '09949420699', 'sircsaira@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-07 01:04:11', '2025-02-06 16:00:00', 2, 3, 15, 'released', 0, 9, NULL, '2025-02-06 09:08:36', '2025-04-10 05:22:13'),
(66, 'Lab', NULL, 'Cha', NULL, '2025-02-07', 0, 'Female', 'Abuyog', 1, 56, NULL, 'Single', 'College', 'Student', NULL, NULL, '09268307424', NULL, NULL, 'Below 60,000', 'Wa', NULL, NULL, '2025-02-07 01:07:33', NULL, 2, 2, NULL, 'released', 0, 10, NULL, '2025-02-07 01:07:33', '2025-04-10 05:22:14'),
(67, 'Jonas', 'Villote', 'Balongag', NULL, '2002-02-07', 23, 'Male', 'Abuyog Leyte', 1, 37, NULL, 'Single', 'College', 'Stufent', NULL, NULL, '09925730026', NULL, NULL, 'Below 60,000', 'N/A', NULL, NULL, '2025-02-07 01:23:40', NULL, 2, 2, NULL, 'released', 0, 10, NULL, '2025-02-07 01:23:40', '2025-04-10 05:22:15'),
(68, 'Lablay', NULL, 'Chavezzz', NULL, '2025-02-02', 0, 'Female', 'Abuyog', 3, 7, NULL, 'Widowed', 'Elementary', 'Student', 'Adventist', NULL, '09268307424', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, '2025-02-07 01:33:31', NULL, 2, 2, NULL, 'released', 0, 12, NULL, '2025-02-07 01:33:31', '2025-04-10 05:22:16'),
(70, 'Lovely', ' Escano', ' Chavez', '', '1962-02-07', 63, NULL, 'Abuyog', 4, 56, 'Abuyog leyte', 'Single', 'Vocational', 'Student', 'Adventist', NULL, '09268307424', 's.crl0043@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-07 02:02:04', '2025-02-09 16:00:00', 2, 3, 25, 'released', 0, 9, NULL, '2025-02-07 01:57:37', '2025-04-10 05:22:17'),
(74, 'Juuju', NULL, 'Ju', NULL, '2025-02-07', 0, 'Male', 'Abuyog Leyte', 1, 56, NULL, 'Single', 'College', 'Student', NULL, NULL, '09064209450', NULL, NULL, 'Above 180,000', 'Wa', NULL, NULL, '2025-02-07 08:43:56', NULL, 2, 2, NULL, 'released', 0, 10, NULL, '2025-02-07 08:43:56', '2025-04-10 05:22:17'),
(75, 'Kirestin', 'Kamal Byers', 'Mack', NULL, '2014-02-21', 10, NULL, 'Aut sunt dolorum et', 4, 18, NULL, 'Married', 'High School', 'Sint dolore animi a', 'Sit incididunt sequ', NULL, '+1 (846) 282-8007', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-08 03:31:42', NULL, 2, 2, NULL, 'released', 1, 8, NULL, '2025-02-08 03:31:42', '2025-04-11 06:00:37'),
(76, 'Stacy', 'Vernon Russo', 'Morris', NULL, '1985-11-12', 39, NULL, 'Perspiciatis minus', 4, 39, NULL, 'Married', 'College', 'Hic nemo voluptate a', 'Culpa et accusamus', NULL, '+1 (158) 123-7081', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-08 03:36:24', NULL, 2, 2, NULL, 'released', 0, 8, NULL, '2025-02-08 03:36:24', '2025-04-11 05:58:52'),
(77, 'Grace', 'Fleur Stout', 'Schroeder', NULL, '2023-02-04', 2, 'Male', 'Amet eiusmod Nam qu', 3, 27, NULL, 'Single', 'High School', 'Et et omnis Nam omni', 'Blanditiis commodi u', NULL, '+1 (784) 263-1084', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, '2025-02-08 03:42:36', NULL, 2, 2, NULL, 'approved', 0, 8, NULL, '2025-02-08 03:42:36', '2025-04-10 05:22:20'),
(78, 'Odessa', NULL, 'Silva', NULL, '2015-10-19', 9, NULL, 'Dolore quos eum sit', 4, 26, NULL, 'Widowed', 'No Formal Education', 'Ipsum sit quia obc', 'Ea dolor distinctio', NULL, '+1 (342) 714-1374', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-08 03:52:17', NULL, 2, 2, NULL, 'released', 0, 8, NULL, '2025-02-08 03:52:17', '2025-04-11 05:59:03'),
(79, 'Belle', NULL, 'Craft', NULL, '1971-06-08', 53, 'Male', 'Necessitatibus in et', 1, 16, NULL, 'Married', 'Postgraduate', 'Anim ut possimus ex', NULL, NULL, '+1 (653) 195-8177', NULL, NULL, 'Above 180,000', 'Soluta possimus nob', NULL, NULL, '2025-02-08 03:53:41', NULL, 2, 2, NULL, 'approved', 0, 9, NULL, '2025-02-08 03:53:41', '2025-04-10 05:22:21'),
(80, 'Camille', 'Hiroko Delacruz', 'Savageee', NULL, '1983-01-17', 42, 'Female', 'Necessitatibus culpa', 3, 22, NULL, 'Married', 'College', 'Omnis reprehenderit', 'Est dolorem consequa', NULL, '+1 (889) 714-6702', NULL, NULL, 'Below 60,000', NULL, NULL, NULL, '2025-02-08 03:54:18', NULL, 2, 2, NULL, 'approved', 0, 8, NULL, '2025-02-08 03:54:18', '2025-04-10 05:22:22'),
(81, 'Lindley Mae', NULL, 'Chavezzz', NULL, '2025-01-12', 0, 'Male', 'Abuyog', 1, 10, NULL, 'Divorced', 'College', 'Student', NULL, NULL, '09268307424', NULL, NULL, 'Above 180,000', 'Wa', NULL, NULL, '2025-02-08 03:54:58', NULL, 2, 2, NULL, 'released', 0, 8, NULL, '2025-02-08 03:54:58', '2025-04-10 05:22:23'),
(82, 'Nita', NULL, 'Velazquez', NULL, '2008-08-17', 16, 'Female', 'Sed ab quas eum aspe', 2, 5, NULL, 'Widowed', 'Postgraduate', 'Excepteur aliqua Te', 'Accusamus eu assumen', NULL, '+1 (267) 953-8984', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, '2025-02-08 04:19:15', NULL, 2, 2, NULL, 'released', 0, 9, NULL, '2025-02-08 04:19:15', '2025-04-10 05:22:24'),
(83, 'Hanna', NULL, 'Fitzpatrick', NULL, '2012-05-19', 12, 'Male', 'Ab asperiores neque', 3, 13, NULL, 'Widowed', 'College', 'Et nostrud suscipit', 'Quo repellendus Nam', NULL, '+1 (751) 663-4462', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, '2025-02-08 04:19:59', NULL, 2, 2, NULL, 'approved', 0, 8, NULL, '2025-02-08 04:19:59', '2025-04-10 05:22:25'),
(87, 'Melberth', ' C.', ' Dancil', ' None', '2010-10-01', 59, 'Female', 'Perspiciatis explic', 3, 41, 'Vero molestias et en', 'Voluptate pariatur', 'Elementary Graduate', 'Ex sunt qui necessit', 'Non aliquam quas eli', '758', '09673701823', 'melberthdancil04@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-08 09:12:25', '2025-09-06 16:00:00', 2, 3, 17, 'approved', 0, 8, NULL, '2025-02-08 09:01:49', '2025-04-10 05:22:25'),
(88, 'Melberth', NULL, 'Dancil', NULL, '2017-09-28', 59, 'male', NULL, 2, 9, NULL, 'Widowed', 'Kindergarten', 'Service and Sales Workers', NULL, NULL, '09673701823', 'melberthdancil04@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-14 04:01:42', '2025-05-01 16:00:00', 2, 3, 17, 'released', 0, 6, NULL, '2025-02-08 09:02:05', '2025-04-11 06:00:20'),
(89, 'Brooke', 'Rajah Berg', 'Flores', ' Qui corrupti velit', '2011-08-19', 42, 'Female', 'Aspernatur et aut ip', 3, 1, 'Eaque laborum Fuga', 'Single', 'Elementary', 'Omnis necessitatibus', 'Voluptatum qui enim', '993', '09268307424', 'rega@mailinator.com', NULL, '60,000 - 120,000', NULL, NULL, NULL, '2025-02-19 04:15:22', '2025-02-14 16:00:00', 2, 3, 24, 'approved', 0, 6, NULL, '2025-02-14 01:56:17', '2025-04-10 05:22:27'),
(90, 'Brooke', NULL, 'Flores', NULL, '1990-08-19', 42, 'Male', 'Test', 2, 35, NULL, 'Divorced', 'Elementary', 'Clerical Support Workers', 'test', NULL, '+1 (298) 481-3981', 'rega@mailinator.com', NULL, 'Below 60,000', NULL, NULL, NULL, NULL, '2025-02-14 16:00:00', NULL, 3, 24, 'rejected', 0, 0, 'not eligible', '2025-02-14 01:56:40', '2025-02-18 15:20:54'),
(91, 'Brooke', ' Rajah Berg', ' Flores', ' Qui corrupti velit', '1994-10-31', 30, NULL, 'Et esse aut eos in', 4, 20, 'Ex ut numquam provid', 'Et quibusdam ea qui', 'Highschool Graduate', 'Voluptas qui dolorib', 'Mollitia voluptate m', NULL, '+1 (298) 481-3981', 'rega@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-16 16:00:00', NULL, NULL, 24, 'rejected', 0, 0, 'di ko', '2025-02-14 02:12:48', '2025-02-16 08:10:31'),
(92, 'lovely rose', NULL, 'chavez', NULL, '2021-02-01', 4, 'female', NULL, 2, 3, NULL, 'Separated', 'Elementary', 'Elementary Occupations', NULL, NULL, '09268307424', 'rlovie0403@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-18 16:00:00', NULL, NULL, 1, 'pending', 0, 0, NULL, '2025-02-17 05:30:14', '2025-02-17 05:30:14'),
(93, 'lovely rose', ' escano', ' chavez', '', '2025-02-14', 4, 'Female', 'LEYTE', 3, 3, 'Abuyog, Leyte', 'Single', 'Not Attended School', 'Student', 'Christianity', 'Below 5,000', '09268307424', 'rlovie0403@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-18 16:00:00', NULL, NULL, 1, 'pending', 0, 0, NULL, '2025-02-17 05:33:59', '2025-02-17 05:33:59'),
(94, 'lovely rose', ' escano', ' chavez', '', '1998-02-13', 27, NULL, 'LEYTE', 4, 3, 'Abuyog, Leyte', 'Single', 'Not Attended School', 'Student', 'Adventist', NULL, '09268307424', 'rlovie0403@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-20 16:00:00', NULL, 3, 1, 'accepted', 0, 0, NULL, '2025-02-19 03:16:59', '2025-02-19 04:29:11'),
(96, 'Yvonne', 'Remedios Quinn', 'Shepherd', '', '2022-11-26', 2, 'Male', 'Laborum Reiciendis', 3, 24, 'Abuyog, Leyte', 'Widowed', 'College', 'Quis vel mollitia ea', 'Ea voluptatem sit do', 'Below 5,000', '+1 (893) 972-9896', 'ninetowu@mailinator.com', NULL, '60,000 - 120,000', NULL, NULL, NULL, '2025-02-17 07:51:37', '2025-02-20 16:00:00', 2, 3, 32, 'approved', 0, 6, NULL, '2025-02-17 06:11:26', '2025-04-11 05:27:06'),
(98, 'beth', ' ', ' Sebios', '', '2025-02-06', 0, NULL, 'Abuyog, Leyte', 4, 7, 'Zone 3, Brgy. Sto. Nino Abuyog, Leyte', 'Single', 'College Graduate', 'wala', 'Christianity', NULL, '09164321071', 'beth.mamasig@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 16:00:00', NULL, NULL, 33, 'rejected', 0, 0, 'di ko', '2025-02-17 15:31:50', '2025-02-17 17:40:30'),
(99, 'beth', ' ', ' Sebios', '', '2025-02-05', 0, NULL, 'Abuyog, Leyte', 4, 7, 'Zone 3, Brgy. Sto. Nino Abuyog, Leyte', 'Married', 'Elementary Level', 'Student', 'Atheist', NULL, '09164321071', 'beth.mamasig@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-18 16:00:00', NULL, NULL, 33, 'pending', 0, 0, NULL, '2025-02-17 15:38:33', '2025-02-17 15:38:33'),
(100, 'beth', ' ', ' Sebios', '', '2025-02-05', 0, NULL, 'Abuyog, Leyte', 4, 7, 'Zone 3, Brgy. Sto. Nino Abuyog, Leyte', 'Single', 'Not Attended School', 'wala', 'Christianity', NULL, '09164321071', 'beth.mamasig@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 16:00:00', NULL, NULL, 33, 'pending', 0, 0, NULL, '2025-02-18 08:32:22', '2025-02-18 08:32:22'),
(101, 'beth', ' ', ' Sebios', '', '2025-02-07', 0, NULL, 'Abuyog, Leyte', 4, 7, 'Zone 3, Brgy. Sto. Nino Abuyog, Leyte', 'Single', 'Not Attended School', 'wala', 'Other', NULL, '09164321071', 'beth.mamasig@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-26 16:00:00', NULL, NULL, 33, 'rejected', 0, 0, 'di ko', '2025-02-18 08:31:00', '2025-02-19 04:28:59'),
(102, 'beth', ' ', ' Sebios', '', '2025-02-14', 0, NULL, 'Abuyog, Leyte', 4, 7, 'Zone 3, Brgy. Sto. Nino Abuyog, Leyte', 'Single', 'Not Attended School', 'wala lang', 'Other', NULL, '09164321071', 'beth.mamasig@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 16:00:00', NULL, NULL, 33, 'pending', 0, 0, NULL, '2025-02-17 16:27:51', '2025-02-17 16:27:51'),
(103, 'beth', ' ', ' Sebios', '', '2025-02-18', 0, NULL, 'Abuyog, Leyte', 4, 7, 'Zone 3, Brgy. Sto. Nino Abuyog, Leyte', 'Single', 'Elementary Level', 'wala', 'Other', NULL, '09164321071', 'beth.mamasig@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-18 16:00:00', NULL, NULL, 33, 'pending', 0, 0, NULL, '2025-02-17 16:29:27', '2025-02-17 16:29:27'),
(110, 'beth', '', 'Sebios', '', '2016-12-26', 8, NULL, 'Consequatur nulla au', 4, 19, 'Quis tempor molestia Can-aporong Minima praesentium a Veritatis minim elit Fugiat accusamus con', 'Single', 'College', 'Provident vel repre', 'Islam', NULL, '09164321071', 'beth.mamasig@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-18 16:00:00', NULL, NULL, 33, 'pending', 0, 0, NULL, '2025-02-18 01:33:40', '2025-02-18 01:33:40'),
(114, 'beth', '', 'Sebios', '', '2005-02-14', 20, NULL, 'Ut qui animi mollit', 4, 34, 'Enim id mollitia ut Mahagna Repudiandae enim ips Recusandae Deleniti Cillum molestiae eos', 'Separated', 'Vocational', 'Assumenda consequat', 'Buddhism', NULL, '09164321071', 'beth.mamasig@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 16:00:00', NULL, NULL, 33, 'pending', 0, 0, NULL, '2025-02-18 02:55:39', '2025-02-18 02:55:39'),
(115, 'beth', '', 'Sebios', '', '2005-02-14', 20, NULL, 'Voluptatum laborum o', 4, 4, 'Nisi quas tempor qua Bahay Et debitis quidem ve Non non qui qui pari Est laboriosam magn', 'Married', 'Kindergarten', 'Sit inventore delect', 'Buddhism', NULL, '09164321071', 'beth.mamasig@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-18 16:00:00', NULL, NULL, 33, 'pending', 0, 0, NULL, '2017-02-07 02:56:07', '2025-02-18 02:56:07'),
(117, 'lovely', 'rose', 'escano', 'chavez', '2001-01-18', 4, NULL, 'test', 4, 3, 'test Bagacay Abuyog Leyte Region VIII', 'Married', 'Kindergarten', 'test', 'Roman Catholic', NULL, '09268307424', 'rlovie0403@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-20 16:00:00', NULL, NULL, 1, 'pending', 0, 0, NULL, '2025-02-19 02:17:47', '2025-02-19 02:17:47'),
(118, 'lovely', 'rose', 'escano', 'chavez', '2001-01-18', 4, NULL, 'Test', 4, 3, 'Test Bagacay Abuyog Leyte Region VIII', 'Single', 'College', 'test', 'Agnostic', NULL, '09268307424', 'rlovie0403@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 16:00:00', NULL, NULL, 1, 'pending', 0, 0, NULL, '2025-02-19 03:36:58', '2025-02-19 03:36:58'),
(119, 'lovely', 'rose', 'escano', 'chavez', '2001-01-18', 4, NULL, 'test', 4, 3, 'test Bagacay Abuyog Leyte Region VIII', 'Married', 'Elementary', 'test', 'Shinto', NULL, '09268307424', 'rlovie0403@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-20 16:00:00', NULL, NULL, 1, 'pending', 0, 0, NULL, '2025-02-19 03:37:32', '2025-02-19 03:37:32'),
(120, 'lovely', 'rose', 'escano', 'chavez', '2001-01-18', 4, NULL, 'Fugit asperiores ea', 4, 36, 'Soluta eum nulla dol Maitum Amet est quia odio Sunt quia accusamus Eius quisquam ab sed', 'Married', 'Senior High', 'Ut proident qui vel', 'Sikhism', NULL, '09268307424', 'rlovie0403@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 16:00:00', NULL, NULL, 1, 'pending', 0, 0, NULL, '2025-02-19 03:39:44', '2025-02-19 03:39:44'),
(121, 'Shelley', 'Uta Bird', 'Jones', NULL, '2000-04-13', 24, 'Male', 'Illo mollit voluptas', 1, 9, NULL, 'Widowed', 'No Formal Education', 'Excepturi fugiat ve', NULL, NULL, '+1 (583) 322-6582', NULL, NULL, '120,000 - 180,000', 'Autem mollitia volup', NULL, NULL, '2025-02-19 04:16:56', NULL, 2, 2, NULL, 'approved', 0, 4, NULL, '2025-02-19 04:16:56', '2025-04-10 05:22:28'),
(122, 'Stone', NULL, 'Carpenter', NULL, '2000-08-16', 24, 'Female', 'At aliqua Temporibu', 2, 3, NULL, 'Divorced', 'Postgraduate', 'Dolorum sit cumque u', 'Quis aperiam corpori', NULL, '+1 (625) 587-8256', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, '2025-02-19 04:17:42', NULL, 2, 2, NULL, 'approved', 0, 4, NULL, '2025-02-19 04:17:42', '2025-04-10 05:22:29'),
(123, 'Leo', 'Shea Carroll', 'Dyer', NULL, '1974-12-19', 50, 'Male', 'Harum in aut quis co', 3, 23, NULL, 'Married', 'College', 'Voluptatem impedit', 'Accusamus cillum imp', NULL, '+1 (432) 233-9296', NULL, NULL, 'Above 180,000', NULL, NULL, NULL, '2025-02-19 04:18:10', NULL, 2, 2, NULL, 'approved', 0, 6, NULL, '2025-02-19 04:18:10', '2025-04-10 05:22:31'),
(124, 'Isabelle', 'Gage Robbins', 'England', NULL, '1974-04-04', 50, NULL, 'Quia ullam quo volup', 4, 34, NULL, 'Divorced', 'No Formal Education', 'Ullamco quo eaque fa', 'Adipisci obcaecati n', NULL, '+1 (276) 609-8506', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 04:18:30', NULL, 2, 2, NULL, 'approved', 0, 4, NULL, '2025-02-19 04:18:30', '2025-04-10 05:22:32'),
(125, 'joven', '', 'torejas', '', '1995-04-07', 29, 'Male', 'Abuyog, Leyte', 3, 17, 'REAL STREET Cadac-an Abuyog Leyte Region VIII', 'Single', 'No Formal Education', 'Student', 'Christianity', 'Below 5,000', '09268307424', 'joven@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-20 16:00:00', NULL, NULL, 35, 'pending', 0, 0, NULL, '2025-02-19 05:41:14', '2025-02-19 05:41:14'),
(126, 'joven', NULL, 'torejas', NULL, '2025-02-20', 29, 'Male', NULL, 2, 17, NULL, 'Single', 'No Formal Education', 'Technicians and Associate Professionals', NULL, NULL, '09268307424', 'joven@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-19 05:48:01', '2025-02-26 16:00:00', 2, 3, 35, 'approved', 0, 5, NULL, '2025-02-19 05:43:37', '2025-04-10 05:22:33'),
(127, 'joven', '', 'torejas', '', '1995-04-07', 29, NULL, 'Abuyog', 4, 17, 'REAL STREET Cadac-an Abuyog Leyte Region VIII', 'Single', 'No Formal Education', 'Technicians and Associate Professionals', 'Atheist', NULL, '09268307424', 'joven@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 16:00:00', NULL, NULL, 35, 'pending', 0, 0, NULL, '2025-02-19 05:45:33', '2025-02-19 05:45:33'),
(128, 'joven', '', 'torejas', '', '1995-04-07', 29, NULL, 'Abuyog', 4, 17, 'REAL STREET Cadac-an Abuyog Leyte Region VIII', 'Single', 'No Formal Education', 'Technicians and Associate Professionals', 'Atheist', NULL, '09268307424', 'joven@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 16:00:00', NULL, NULL, 35, 'pending', 0, 0, NULL, '2025-02-19 05:45:35', '2025-02-19 05:45:35'),
(131, 'Gerry', NULL, '1111', NULL, '2025-02-06', 0, 'Male', NULL, 2, 21, NULL, 'Married', 'Vocational', 'Elementary Occupations', NULL, NULL, '09557153573', 'gerrysolisgohiljr1990@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-18 16:00:00', NULL, NULL, 36, 'pending', 0, 0, NULL, '2025-02-19 07:31:49', '2025-02-19 07:31:49'),
(140, 'crisostomo', 'modena', 'Juan', 'Tamad', '2016-01-12', 59, 'Male', 'Commodo amet placea', 3, 25, 'Quibusdam eos nemo Guintagbucan Nihil illo aut adipi Pariatur Ea nobis v Deserunt porro facil', 'Married', 'No Formal Education', 'Plant and Machine Operators and Assemblers', 'Baha\'i', '100,000 and above', '09949420699', 'juan@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-04-09 06:47:11', '2024-01-08 16:00:00', 2, 3, 12, 'approved', 0, 0, NULL, '2020-01-08 16:00:00', '2025-04-09 06:47:11'),
(142, 'crisostomo', NULL, 'Juan Tamad', NULL, '2016-01-12', 59, 'Male', NULL, 2, 25, NULL, 'Married', 'No Formal Education', 'Plant and Machine Operators and Assemblers', NULL, NULL, '09949420699', 'juan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-08 16:00:00', 2, 3, 12, 'approved', 0, 0, NULL, '2024-03-09 08:23:10', '2025-04-09 08:23:10'),
(158, 'crisostomo', 'modena', 'Juan Tamad', NULL, '2016-01-12', 60, 'Male', 'Commodo amet placea', 1, 25, 'Quibusdam eos nemo Guintagbucan Nihil illo aut adipi Pariatur Ea nobis v Deserunt porro facil', 'Married', 'No Formal Education', 'Plant and Machine Operators and Assemblers', NULL, NULL, '09949420699', 'juan@gmail.com', NULL, '865', 'Reiciendis sed lorem', NULL, NULL, NULL, '2025-04-10 16:00:00', NULL, NULL, 12, 'pending', 0, 0, NULL, '2025-04-11 08:59:18', '2025-04-11 08:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `benefits_received`
--

CREATE TABLE `benefits_received` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_id` bigint(20) UNSIGNED NOT NULL,
  `assistance_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `not_received_reason` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_received` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefits_received`
--

INSERT INTO `benefits_received` (`id`, `beneficiary_id`, `assistance_id`, `status`, `not_received_reason`, `created_at`, `updated_at`, `date_received`) VALUES
(220, 64, 4, 'Pending', NULL, '2025-02-11 01:29:04', '2025-02-11 01:29:04', NULL),
(221, 67, 4, 'Pending', NULL, '2025-02-11 01:29:04', '2025-02-11 01:29:04', NULL),
(222, 76, 4, 'Pending', NULL, '2025-02-11 01:29:04', '2025-02-11 01:29:04', NULL),
(223, 80, 4, 'Pending', NULL, '2025-02-11 01:29:04', '2025-02-11 01:29:04', NULL),
(233, 58, 5, 'Pending', NULL, '2025-02-11 02:54:53', '2025-02-11 02:54:53', NULL),
(234, 62, 5, 'Pending', NULL, '2025-02-11 02:54:54', '2025-02-11 02:54:54', NULL),
(235, 87, 5, 'Pending', NULL, '2025-02-11 02:54:54', '2025-02-11 02:54:54', NULL),
(237, 65, 9, 'Pending', NULL, '2025-02-11 03:05:28', '2025-02-11 03:05:28', NULL),
(238, 70, 9, 'Received', NULL, '2025-02-11 03:05:29', '2025-02-11 03:06:58', '2025-02-11 11:06:58'),
(240, 65, 10, 'Pending', NULL, '2025-02-11 03:09:30', '2025-02-11 03:09:30', NULL),
(241, 70, 10, 'Pending', NULL, '2025-02-11 03:09:31', '2025-02-11 03:09:31', NULL),
(243, 62, 6, 'Received', NULL, '2025-02-13 05:25:20', '2025-02-19 01:49:31', '2025-02-19 09:49:31'),
(246, 62, 6, 'Received', NULL, '2025-02-13 05:29:49', '2025-02-19 01:49:35', '2025-02-19 09:49:35'),
(247, 64, 6, 'Received', NULL, '2025-02-13 05:29:51', '2025-02-19 01:51:28', '2025-02-19 09:51:28'),
(248, 66, 6, 'Pending', NULL, '2025-02-13 05:29:52', '2025-02-13 05:29:52', NULL),
(249, 67, 6, 'Pending', NULL, '2025-02-13 05:29:53', '2025-02-13 05:29:53', NULL),
(250, 74, 6, 'Pending', NULL, '2025-02-13 05:29:54', '2025-02-13 05:29:54', NULL),
(251, 79, 6, 'Received', NULL, '2025-02-13 05:29:55', '2025-02-19 01:51:32', '2025-02-19 09:51:32'),
(252, 81, 6, 'Received', NULL, '2025-02-13 05:29:56', '2025-02-13 05:35:27', '2025-02-13 13:35:27'),
(253, 82, 6, 'Pending', NULL, '2025-02-13 05:29:57', '2025-02-13 05:29:57', NULL),
(256, 66, 3, 'Pending', NULL, '2025-02-16 18:03:29', '2025-02-16 18:03:29', NULL),
(257, 67, 3, 'Pending', NULL, '2025-02-16 18:03:30', '2025-02-16 18:03:30', NULL),
(258, 74, 3, 'Pending', NULL, '2025-02-16 18:03:31', '2025-02-16 18:03:31', NULL),
(259, 79, 3, 'Pending', NULL, '2025-02-16 18:03:32', '2025-02-16 18:03:32', NULL),
(260, 81, 3, 'Pending', NULL, '2025-02-16 18:03:33', '2025-02-16 18:03:33', NULL),
(263, 58, 7, 'Pending', NULL, '2025-02-16 18:05:40', '2025-02-16 18:05:40', NULL),
(264, 62, 7, 'Pending', NULL, '2025-02-16 18:05:41', '2025-02-16 18:05:41', NULL),
(265, 64, 7, 'Pending', NULL, '2025-02-16 18:05:42', '2025-02-16 18:05:42', NULL),
(266, 65, 7, 'Pending', NULL, '2025-02-16 18:05:43', '2025-02-16 18:05:43', NULL),
(267, 66, 7, 'Pending', NULL, '2025-02-16 18:05:44', '2025-02-16 18:05:44', NULL),
(268, 67, 7, 'Pending', NULL, '2025-02-16 18:05:46', '2025-02-16 18:05:46', NULL),
(269, 68, 7, 'Received', NULL, '2025-02-16 18:05:47', '2025-02-18 09:29:34', '2025-02-18 17:29:34'),
(270, 70, 7, 'Pending', NULL, '2025-02-16 18:05:48', '2025-02-16 18:05:48', NULL),
(273, 74, 7, 'Pending', NULL, '2025-02-16 18:05:52', '2025-02-16 18:05:52', NULL),
(274, 75, 7, 'Pending', NULL, '2025-02-16 18:05:53', '2025-02-16 18:05:53', NULL),
(275, 76, 7, 'Pending', NULL, '2025-02-16 18:05:54', '2025-02-16 18:05:54', NULL),
(276, 77, 7, 'Pending', NULL, '2025-02-16 18:05:55', '2025-02-16 18:05:55', NULL),
(277, 78, 7, 'Pending', NULL, '2025-02-16 18:05:57', '2025-02-16 18:05:57', NULL),
(278, 79, 7, 'Pending', NULL, '2025-02-16 18:05:59', '2025-02-16 18:05:59', NULL),
(279, 80, 7, 'Pending', NULL, '2025-02-16 18:06:00', '2025-02-16 18:06:00', NULL),
(280, 81, 7, 'Pending', NULL, '2025-02-16 18:06:01', '2025-02-16 18:06:01', NULL),
(281, 82, 7, 'Pending', NULL, '2025-02-16 18:06:02', '2025-02-16 18:06:02', NULL),
(282, 83, 7, 'Pending', NULL, '2025-02-16 18:06:04', '2025-02-16 18:06:04', NULL),
(283, 87, 7, 'Pending', NULL, '2025-02-16 18:06:05', '2025-02-16 18:06:05', NULL),
(284, 88, 7, 'Pending', NULL, '2025-02-16 18:06:06', '2025-02-16 18:06:06', NULL),
(287, 58, 14, 'Pending', NULL, '2025-02-16 18:07:57', '2025-02-16 18:07:57', NULL),
(288, 62, 14, 'Pending', NULL, '2025-02-16 18:07:59', '2025-02-16 18:07:59', NULL),
(289, 64, 14, 'Pending', NULL, '2025-02-16 18:08:00', '2025-02-16 18:08:00', NULL),
(290, 65, 14, 'Pending', NULL, '2025-02-16 18:08:01', '2025-02-16 18:08:01', NULL),
(291, 66, 14, 'Pending', NULL, '2025-02-16 18:08:03', '2025-02-16 18:08:03', NULL),
(292, 67, 14, 'Received', NULL, '2025-02-16 18:08:04', '2025-02-16 18:15:58', '2025-02-17 02:15:58'),
(293, 68, 14, 'Pending', NULL, '2025-02-16 18:08:05', '2025-02-16 18:08:05', NULL),
(294, 70, 14, 'Pending', NULL, '2025-02-16 18:08:06', '2025-02-16 18:08:06', NULL),
(297, 74, 14, 'Pending', NULL, '2025-02-16 18:08:10', '2025-02-16 18:08:10', NULL),
(298, 75, 14, 'Pending', NULL, '2025-02-16 18:08:11', '2025-02-16 18:08:11', NULL),
(299, 76, 14, 'Pending', NULL, '2025-02-16 18:08:12', '2025-02-16 18:08:12', NULL),
(300, 77, 14, 'Pending', NULL, '2025-02-16 18:08:13', '2025-02-16 18:08:13', NULL),
(301, 78, 14, 'Pending', NULL, '2025-02-16 18:08:14', '2025-02-16 18:08:14', NULL),
(302, 79, 14, 'Pending', NULL, '2025-02-16 18:08:15', '2025-02-16 18:08:15', NULL),
(303, 80, 14, 'Pending', NULL, '2025-02-16 18:08:17', '2025-02-16 18:08:17', NULL),
(304, 81, 14, 'Pending', NULL, '2025-02-16 18:08:18', '2025-02-16 18:08:18', NULL),
(305, 82, 14, 'Pending', NULL, '2025-02-16 18:08:19', '2025-02-16 18:08:19', NULL),
(306, 83, 14, 'Pending', NULL, '2025-02-16 18:08:21', '2025-02-16 18:08:21', NULL),
(307, 87, 14, 'Pending', NULL, '2025-02-16 18:08:22', '2025-02-16 18:08:22', NULL),
(308, 88, 14, 'Pending', NULL, '2025-02-16 18:08:23', '2025-02-16 18:08:23', NULL),
(309, 68, NULL, 'Pending', NULL, '2025-02-17 09:38:31', '2025-02-17 09:38:31', NULL),
(315, 58, 15, 'Pending', NULL, '2025-02-18 03:36:49', '2025-02-18 03:36:49', NULL),
(316, 62, 15, 'Pending', NULL, '2025-02-18 03:36:49', '2025-02-18 03:36:49', NULL),
(317, 64, 15, 'Pending', NULL, '2025-02-18 03:36:50', '2025-02-18 03:36:50', NULL),
(321, 68, 18, 'Pending', NULL, '2025-02-18 08:44:40', '2025-02-18 08:44:40', NULL),
(324, 82, 19, 'Pending', NULL, '2025-02-18 08:46:01', '2025-02-18 08:46:01', NULL),
(326, 82, 20, 'Received', NULL, '2025-02-18 08:58:46', '2025-02-19 01:54:09', '2025-02-19 09:54:09'),
(327, 68, 21, 'Pending', NULL, '2025-02-18 09:24:24', '2025-02-18 09:24:24', NULL),
(329, 58, 22, 'Pending', NULL, '2025-02-19 00:49:20', '2025-02-19 00:49:20', NULL),
(330, 62, 22, 'Pending', NULL, '2025-02-19 00:49:28', '2025-02-19 00:49:28', NULL),
(331, 64, 22, 'Pending', NULL, '2025-02-19 00:49:29', '2025-02-19 00:49:29', NULL),
(332, 65, 22, 'Pending', NULL, '2025-02-19 00:49:31', '2025-02-19 00:49:31', NULL),
(333, 66, 22, 'Pending', NULL, '2025-02-19 00:49:32', '2025-02-19 00:49:32', NULL),
(334, 67, 22, 'Pending', NULL, '2025-02-19 00:49:34', '2025-02-19 00:49:34', NULL),
(335, 68, 22, 'Pending', NULL, '2025-02-19 00:49:35', '2025-02-19 00:49:35', NULL),
(336, 70, 22, 'Pending', NULL, '2025-02-19 00:49:37', '2025-02-19 00:49:37', NULL),
(337, 74, 22, 'Pending', NULL, '2025-02-19 00:49:38', '2025-02-19 00:49:38', NULL),
(338, 75, 22, 'Received', NULL, '2025-02-19 00:49:40', '2025-02-19 01:51:48', '2025-02-19 09:51:48'),
(339, 76, 22, 'Pending', NULL, '2025-02-19 00:49:41', '2025-02-19 00:49:41', NULL),
(340, 77, 22, 'Pending', NULL, '2025-02-19 00:49:42', '2025-02-19 00:49:42', NULL),
(341, 78, 22, 'Pending', NULL, '2025-02-19 00:49:44', '2025-02-19 00:49:44', NULL),
(342, 79, 22, 'Pending', NULL, '2025-02-19 00:49:45', '2025-02-19 00:49:45', NULL),
(343, 80, 22, 'Pending', NULL, '2025-02-19 00:49:47', '2025-02-19 00:49:47', NULL),
(344, 81, 22, 'Pending', NULL, '2025-02-19 00:49:48', '2025-02-19 00:49:48', NULL),
(345, 82, 22, 'Pending', NULL, '2025-02-19 00:49:49', '2025-02-19 00:49:49', NULL),
(346, 83, 22, 'Pending', NULL, '2025-02-19 00:49:51', '2025-02-19 00:49:51', NULL),
(347, 87, 22, 'Pending', NULL, '2025-02-19 00:49:53', '2025-02-19 00:49:53', NULL),
(348, 88, 22, 'Pending', NULL, '2025-02-19 00:49:55', '2025-02-19 00:49:55', NULL),
(349, 96, 22, 'Pending', NULL, '2025-02-19 00:49:57', '2025-02-19 00:49:57', NULL),
(350, 89, 28, 'Received', NULL, '2025-02-19 04:21:42', '2025-02-19 04:29:57', '2025-02-19 12:29:57'),
(351, 121, 28, 'Pending', NULL, '2025-02-19 04:21:50', '2025-02-19 04:21:50', NULL),
(352, 122, 28, 'Pending', NULL, '2025-02-19 04:21:51', '2025-02-19 04:21:51', NULL),
(353, 123, 28, 'Pending', NULL, '2025-02-19 04:21:52', '2025-02-19 04:21:52', NULL),
(354, 124, 28, 'Pending', NULL, '2025-02-19 04:21:54', '2025-02-19 04:21:54', NULL),
(355, 126, 30, 'Received', NULL, '2025-02-19 05:51:54', '2025-02-19 05:52:37', '2025-02-19 13:52:37'),
(356, 58, 31, 'Pending', NULL, '2025-02-19 08:01:29', '2025-02-19 08:01:29', NULL),
(357, 68, 31, 'Pending', NULL, '2025-02-19 08:01:31', '2025-02-19 08:01:31', NULL),
(358, 77, 31, 'Pending', NULL, '2025-02-19 08:01:32', '2025-02-19 08:01:32', NULL),
(359, 80, 31, 'Pending', NULL, '2025-02-19 08:01:34', '2025-02-19 08:01:34', NULL),
(360, 83, 31, 'Pending', NULL, '2025-02-19 08:01:35', '2025-02-19 08:01:35', NULL),
(361, 87, 31, 'Pending', NULL, '2025-02-19 08:01:36', '2025-02-19 08:01:36', NULL),
(362, 89, 31, 'Pending', NULL, '2025-02-19 08:01:38', '2025-02-19 08:01:38', NULL),
(363, 96, 31, 'Pending', NULL, '2025-02-19 08:01:39', '2025-02-19 08:01:39', NULL),
(364, 123, 31, 'Pending', NULL, '2025-02-19 08:01:40', '2025-02-19 08:01:40', NULL),
(366, 58, 29, 'Pending', NULL, '2025-04-10 05:08:25', '2025-04-10 05:08:25', NULL),
(367, 62, 29, 'Pending', NULL, '2025-04-10 05:08:28', '2025-04-10 05:08:28', NULL),
(368, 58, 27, 'Pending', NULL, '2025-04-10 05:09:23', '2025-04-10 05:09:23', NULL),
(369, 62, 27, 'Pending', NULL, '2025-04-10 05:09:24', '2025-04-10 05:09:24', NULL),
(370, 58, 26, 'Pending', NULL, '2025-04-10 05:15:29', '2025-04-10 05:15:29', NULL),
(371, 62, 26, 'Pending', NULL, '2025-04-10 05:15:30', '2025-04-10 05:15:30', NULL),
(372, 64, 26, 'Pending', NULL, '2025-04-10 05:15:31', '2025-04-10 05:15:31', NULL),
(373, 65, 26, 'Pending', NULL, '2025-04-10 05:15:32', '2025-04-10 05:15:32', NULL),
(374, 66, 26, 'Pending', NULL, '2025-04-10 05:15:33', '2025-04-10 05:15:33', NULL),
(375, 67, 26, 'Pending', NULL, '2025-04-10 05:15:34', '2025-04-10 05:15:34', NULL),
(376, 68, 26, 'Pending', NULL, '2025-04-10 05:15:35', '2025-04-10 05:15:35', NULL),
(377, 70, 26, 'Pending', NULL, '2025-04-10 05:15:36', '2025-04-10 05:15:36', NULL),
(378, 74, 26, 'Pending', NULL, '2025-04-10 05:15:37', '2025-04-10 05:15:37', NULL),
(379, 75, 26, 'Pending', NULL, '2025-04-10 05:15:38', '2025-04-10 05:15:38', NULL),
(380, 76, 26, 'Pending', NULL, '2025-04-10 05:15:38', '2025-04-10 05:15:38', NULL),
(381, 77, 26, 'Pending', NULL, '2025-04-10 05:15:39', '2025-04-10 05:15:39', NULL),
(382, 78, 26, 'Pending', NULL, '2025-04-10 05:15:40', '2025-04-10 05:15:40', NULL),
(383, 79, 26, 'Pending', NULL, '2025-04-10 05:15:41', '2025-04-10 05:15:41', NULL),
(384, 80, 26, 'Pending', NULL, '2025-04-10 05:15:42', '2025-04-10 05:15:42', NULL),
(385, 81, 26, 'Pending', NULL, '2025-04-10 05:15:43', '2025-04-10 05:15:43', NULL),
(386, 82, 26, 'Pending', NULL, '2025-04-10 05:15:44', '2025-04-10 05:15:44', NULL),
(387, 83, 26, 'Pending', NULL, '2025-04-10 05:15:44', '2025-04-10 05:15:44', NULL),
(388, 87, 26, 'Pending', NULL, '2025-04-10 05:15:46', '2025-04-10 05:15:46', NULL),
(389, 88, 26, 'Pending', NULL, '2025-04-10 05:15:47', '2025-04-10 05:15:47', NULL),
(390, 89, 26, 'Pending', NULL, '2025-04-10 05:15:49', '2025-04-10 05:15:49', NULL),
(391, 96, 26, 'Pending', NULL, '2025-04-10 05:15:50', '2025-04-10 05:15:50', NULL),
(392, 121, 26, 'Pending', NULL, '2025-04-10 05:15:51', '2025-04-10 05:15:51', NULL),
(393, 122, 26, 'Pending', NULL, '2025-04-10 05:15:52', '2025-04-10 05:15:52', NULL),
(394, 123, 26, 'Pending', NULL, '2025-04-10 05:15:53', '2025-04-10 05:15:53', NULL),
(395, 124, 26, 'Pending', NULL, '2025-04-10 05:15:54', '2025-04-10 05:15:54', NULL),
(396, 126, 26, 'Pending', NULL, '2025-04-10 05:15:54', '2025-04-10 05:15:54', NULL),
(398, 58, 25, 'Pending', NULL, '2025-04-10 05:16:45', '2025-04-10 05:16:45', NULL),
(399, 62, 25, 'Pending', NULL, '2025-04-10 05:16:46', '2025-04-10 05:16:46', NULL),
(400, 64, 25, 'Pending', NULL, '2025-04-10 05:16:47', '2025-04-10 05:16:47', NULL),
(401, 65, 25, 'Pending', NULL, '2025-04-10 05:16:48', '2025-04-10 05:16:48', NULL),
(402, 66, 25, 'Pending', NULL, '2025-04-10 05:16:49', '2025-04-10 05:16:49', NULL),
(403, 67, 25, 'Pending', NULL, '2025-04-10 05:16:50', '2025-04-10 05:16:50', NULL),
(404, 68, 25, 'Pending', NULL, '2025-04-10 05:16:51', '2025-04-10 05:16:51', NULL),
(405, 70, 25, 'Pending', NULL, '2025-04-10 05:16:52', '2025-04-10 05:16:52', NULL),
(406, 74, 25, 'Pending', NULL, '2025-04-10 05:16:53', '2025-04-10 05:16:53', NULL),
(407, 75, 25, 'Pending', NULL, '2025-04-10 05:16:55', '2025-04-10 05:16:55', NULL),
(408, 76, 25, 'Pending', NULL, '2025-04-10 05:16:55', '2025-04-10 05:16:55', NULL),
(409, 77, 25, 'Pending', NULL, '2025-04-10 05:16:56', '2025-04-10 05:16:56', NULL),
(410, 78, 25, 'Pending', NULL, '2025-04-10 05:16:57', '2025-04-10 05:16:57', NULL),
(411, 79, 25, 'Pending', NULL, '2025-04-10 05:16:58', '2025-04-10 05:16:58', NULL),
(412, 80, 25, 'Pending', NULL, '2025-04-10 05:16:58', '2025-04-10 05:16:58', NULL),
(413, 83, 25, 'Pending', NULL, '2025-04-10 05:16:59', '2025-04-10 05:16:59', NULL),
(414, 87, 25, 'Pending', NULL, '2025-04-10 05:17:00', '2025-04-10 05:17:00', NULL),
(415, 89, 25, 'Pending', NULL, '2025-04-10 05:17:01', '2025-04-10 05:17:01', NULL),
(416, 96, 25, 'Pending', NULL, '2025-04-10 05:17:02', '2025-04-10 05:17:02', NULL),
(417, 123, 25, 'Pending', NULL, '2025-04-10 05:17:03', '2025-04-10 05:17:03', NULL),
(418, 126, 25, 'Pending', NULL, '2025-04-10 05:17:04', '2025-04-10 05:17:04', NULL),
(420, 62, 24, 'Pending', NULL, '2025-04-10 05:19:18', '2025-04-10 05:19:18', NULL),
(421, 64, 24, 'Pending', NULL, '2025-04-10 05:19:19', '2025-04-10 05:19:19', NULL),
(422, 65, 24, 'Pending', NULL, '2025-04-10 05:19:20', '2025-04-10 05:19:20', NULL),
(423, 66, 24, 'Pending', NULL, '2025-04-10 05:19:21', '2025-04-10 05:19:21', NULL),
(424, 67, 24, 'Pending', NULL, '2025-04-10 05:19:22', '2025-04-10 05:19:22', NULL),
(425, 70, 24, 'Pending', NULL, '2025-04-10 05:19:23', '2025-04-10 05:19:23', NULL),
(426, 74, 24, 'Pending', NULL, '2025-04-10 05:19:24', '2025-04-10 05:19:24', NULL),
(427, 75, 24, 'Pending', NULL, '2025-04-10 05:19:25', '2025-04-10 05:19:25', NULL),
(428, 76, 24, 'Pending', NULL, '2025-04-10 05:19:25', '2025-04-10 05:19:25', NULL),
(429, 78, 24, 'Pending', NULL, '2025-04-10 05:19:26', '2025-04-10 05:19:26', NULL),
(430, 58, 23, 'Pending', NULL, '2025-04-10 05:20:22', '2025-04-10 05:20:22', NULL),
(431, 62, 23, 'Pending', NULL, '2025-04-10 05:20:23', '2025-04-10 05:20:23', NULL),
(432, 64, 23, 'Pending', NULL, '2025-04-10 05:20:24', '2025-04-10 05:20:24', NULL),
(433, 65, 23, 'Pending', NULL, '2025-04-10 05:20:25', '2025-04-10 05:20:25', NULL),
(434, 66, 23, 'Pending', NULL, '2025-04-10 05:20:26', '2025-04-10 05:20:26', NULL),
(435, 67, 23, 'Pending', NULL, '2025-04-10 05:20:27', '2025-04-10 05:20:27', NULL),
(436, 68, 23, 'Pending', NULL, '2025-04-10 05:20:29', '2025-04-10 05:20:29', NULL),
(437, 70, 23, 'Pending', NULL, '2025-04-10 05:20:29', '2025-04-10 05:20:29', NULL),
(438, 74, 23, 'Pending', NULL, '2025-04-10 05:20:30', '2025-04-10 05:20:30', NULL),
(439, 75, 23, 'Pending', NULL, '2025-04-10 05:20:32', '2025-04-10 05:20:32', NULL),
(440, 76, 23, 'Pending', NULL, '2025-04-10 05:20:32', '2025-04-10 05:20:32', NULL),
(441, 77, 23, 'Pending', NULL, '2025-04-10 05:20:33', '2025-04-10 05:20:33', NULL),
(442, 78, 23, 'Pending', NULL, '2025-04-10 05:20:34', '2025-04-10 05:20:34', NULL),
(443, 79, 23, 'Pending', NULL, '2025-04-10 05:20:34', '2025-04-10 05:20:34', NULL),
(444, 80, 23, 'Pending', NULL, '2025-04-10 05:20:35', '2025-04-10 05:20:35', NULL),
(445, 81, 23, 'Pending', NULL, '2025-04-10 05:20:36', '2025-04-10 05:20:36', NULL),
(446, 82, 23, 'Pending', NULL, '2025-04-10 05:20:37', '2025-04-10 05:20:37', NULL),
(447, 83, 23, 'Pending', NULL, '2025-04-10 05:20:38', '2025-04-10 05:20:38', NULL),
(448, 87, 23, 'Pending', NULL, '2025-04-10 05:20:39', '2025-04-10 05:20:39', NULL),
(449, 88, 23, 'Pending', NULL, '2025-04-10 05:20:40', '2025-04-10 05:20:40', NULL),
(450, 89, 23, 'Pending', NULL, '2025-04-10 05:20:41', '2025-04-10 05:20:41', NULL),
(451, 96, 23, 'Pending', NULL, '2025-04-10 05:20:42', '2025-04-10 05:20:42', NULL),
(452, 121, 23, 'Pending', NULL, '2025-04-10 05:20:43', '2025-04-10 05:20:43', NULL),
(453, 122, 23, 'Pending', NULL, '2025-04-10 05:20:44', '2025-04-10 05:20:44', NULL),
(454, 123, 23, 'Pending', NULL, '2025-04-10 05:20:45', '2025-04-10 05:20:45', NULL),
(455, 124, 23, 'Pending', NULL, '2025-04-10 05:20:45', '2025-04-10 05:20:45', NULL),
(456, 126, 23, 'Pending', NULL, '2025-04-10 05:20:46', '2025-04-10 05:20:46', NULL),
(458, 58, 32, 'Pending', NULL, '2025-04-10 05:22:09', '2025-04-10 05:22:09', NULL),
(459, 62, 32, 'Pending', NULL, '2025-04-10 05:22:10', '2025-04-10 05:22:10', NULL),
(460, 64, 32, 'Pending', NULL, '2025-04-10 05:22:11', '2025-04-10 05:22:11', NULL),
(461, 65, 32, 'Pending', NULL, '2025-04-10 05:22:12', '2025-04-10 05:22:12', NULL),
(462, 66, 32, 'Pending', NULL, '2025-04-10 05:22:13', '2025-04-10 05:22:13', NULL),
(463, 67, 32, 'Pending', NULL, '2025-04-10 05:22:14', '2025-04-10 05:22:14', NULL),
(464, 68, 32, 'Pending', NULL, '2025-04-10 05:22:15', '2025-04-10 05:22:15', NULL),
(465, 70, 32, 'Pending', NULL, '2025-04-10 05:22:16', '2025-04-10 05:22:16', NULL),
(466, 74, 32, 'Pending', NULL, '2025-04-10 05:22:17', '2025-04-10 05:22:17', NULL),
(467, 75, 32, 'Pending', NULL, '2025-04-10 05:22:17', '2025-04-10 05:22:17', NULL),
(468, 76, 32, 'Pending', NULL, '2025-04-10 05:22:18', '2025-04-10 05:22:18', NULL),
(469, 77, 32, 'Pending', NULL, '2025-04-10 05:22:19', '2025-04-10 05:22:19', NULL),
(470, 78, 32, 'Pending', NULL, '2025-04-10 05:22:20', '2025-04-10 05:22:20', NULL),
(471, 79, 32, 'Pending', NULL, '2025-04-10 05:22:20', '2025-04-10 05:22:20', NULL),
(472, 80, 32, 'Pending', NULL, '2025-04-10 05:22:21', '2025-04-10 05:22:21', NULL),
(473, 81, 32, 'Pending', NULL, '2025-04-10 05:22:22', '2025-04-10 05:22:22', NULL),
(474, 82, 32, 'Pending', NULL, '2025-04-10 05:22:23', '2025-04-10 05:22:23', NULL),
(475, 83, 32, 'Pending', NULL, '2025-04-10 05:22:24', '2025-04-10 05:22:24', NULL),
(476, 87, 32, 'Pending', NULL, '2025-04-10 05:22:25', '2025-04-10 05:22:25', NULL),
(477, 88, 32, 'Pending', NULL, '2025-04-10 05:22:25', '2025-04-10 05:22:25', NULL),
(478, 89, 32, 'Pending', NULL, '2025-04-10 05:22:26', '2025-04-10 05:22:26', NULL),
(479, 96, 32, 'Pending', NULL, '2025-04-10 05:22:27', '2025-04-10 05:22:27', NULL),
(480, 121, 32, 'Pending', NULL, '2025-04-10 05:22:27', '2025-04-10 05:22:27', NULL),
(481, 122, 32, 'Pending', NULL, '2025-04-10 05:22:28', '2025-04-10 05:22:28', NULL),
(482, 123, 32, 'Pending', NULL, '2025-04-10 05:22:29', '2025-04-10 05:22:29', NULL),
(483, 124, 32, 'Pending', NULL, '2025-04-10 05:22:31', '2025-04-10 05:22:31', NULL),
(484, 126, 32, 'Pending', NULL, '2025-04-10 05:22:32', '2025-04-10 05:22:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('4b49b3936b53fdaff3cde3443b1c7135', 'i:1;', 1744356879),
('4b49b3936b53fdaff3cde3443b1c7135:timer', 'i:1744356879;', 1744356879),
('c525a5357e97fef8d3db25841c86da1a', 'i:1;', 1744354518),
('c525a5357e97fef8d3db25841c86da1a:timer', 'i:1744354518;', 1744354518),
('d705d38f09e57c5916c5360104cc1825', 'i:1;', 1744354349),
('d705d38f09e57c5916c5360104cc1825:timer', 'i:1744354349;', 1744354349),
('dfeb3af24ea7e8e481743a29eae589ba', 'i:1;', 1744352735),
('dfeb3af24ea7e8e481743a29eae589ba:timer', 'i:1744352734;', 1744352734);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_emergencies`
--

CREATE TABLE `contact_emergencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT 'Not set',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_emergencies`
--

INSERT INTO `contact_emergencies` (`id`, `beneficiary_id`, `name`, `address`, `contact_number`, `relationship`, `created_at`, `updated_at`) VALUES
(1, 17, 'Cameron Sharp', 'Suscipit ut odio sun', '2123', 'Not set', '2025-02-01 02:55:00', '2025-02-01 04:06:04'),
(2, 18, 'Chelsea Wilder', 'Cupiditate perferend', '573', 'Not set', '2025-02-01 02:56:39', '2025-02-01 02:56:39'),
(4, 9, 'Jeremy Hancock', 'Aut deserunt asperio', '+1 (966) 457-8324', 'Not set', '2025-02-01 04:13:53', '2025-02-02 12:48:04'),
(5, 29, 'Troy Flynn', 'Laboris in voluptate', '+1 (419) 804-9731', 'Not set', '2025-02-02 05:04:12', '2025-02-02 05:04:12'),
(6, 33, 'Lynn Walls', 'Et amet dicta aliqu', '+1 (534) 806-4922', 'Not set', '2025-02-02 05:19:38', '2025-02-02 05:19:38'),
(7, 34, 'Lunea Dudley', 'Eiusmod eius recusan', '+1 (941) 724-2754', 'Not set', '2025-02-02 05:19:45', '2025-02-02 05:19:45'),
(8, 42, 'Joshua Ramsey', 'Blanditiis est nihi', '+1 (463) 558-9851', 'Not set', '2025-02-02 05:46:13', '2025-02-02 05:46:13'),
(9, 43, 'Prescott Callahan', 'Dolor iusto quaerat', '+1 (413) 874-1012', 'Not set', '2025-02-02 05:46:42', '2025-02-02 05:46:42'),
(10, 50, 'Celeste Newton', 'Elit ad voluptatem', '+1 (414) 405-4923', 'Not set', '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(11, 58, 'Kai Rosa', 'Quia omnis voluptas', '954', 'Labore esse amet se', '2025-02-06 02:30:02', '2025-02-06 02:30:02'),
(12, 68, 'Wa', 'Abuuog', '09123456789', 'Not set', '2025-02-07 01:33:31', '2025-02-07 01:33:31'),
(13, 77, 'Ezekiel Booth', 'Dolore ad a nulla do', '+1 (903) 494-4099', 'Not set', '2025-02-08 03:42:36', '2025-02-08 03:42:36'),
(14, 80, 'Shay Peterson', 'Vel ipsam ut dolorem', '+1 (492) 673-9653', 'Not set', '2025-02-08 03:54:18', '2025-02-08 03:54:18'),
(15, 83, 'Tobias Hammond', 'Dignissimos numquam', '+1 (131) 408-8093', 'Not set', '2025-02-08 04:19:59', '2025-02-08 04:19:59'),
(18, 87, 'Willow Frye', 'Et assumenda corrupt', '322', 'Nam voluptatem Sapi', '2025-02-08 09:01:49', '2025-02-08 09:01:49'),
(19, 89, 'Samson Trujillo', 'Soluta qui corporis', '988', 'Non et distinctio P', '2025-02-14 01:56:17', '2025-02-14 01:56:17'),
(20, 93, 'jellamay', 'Zone 3, Brgy. Sto. nino Abuyog, Leyte', '09123456789', 'daughter', '2025-02-17 05:33:59', '2025-02-17 05:33:59'),
(21, 96, 'Madeline Raymond', 'Ea totam cillum maxi', '+1 (494) 642-1819', 'GFDUFGO', '2025-02-17 06:11:26', '2025-02-19 04:29:38'),
(25, 123, 'Illiana Perkins', 'Autem laudantium am', '+1 (629) 188-6835', 'Not set', '2025-02-19 04:18:10', '2025-02-19 04:18:10'),
(26, 125, 'Papa', 'Abuyog', '09123456789', 'Papa', '2025-02-19 05:41:14', '2025-02-19 05:41:14'),
(33, 140, 'Susan Bowman', 'Est perferendis itaq', '861', 'Iure amet tempore', '2025-04-09 06:44:20', '2025-04-09 06:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `deceased`
--

CREATE TABLE `deceased` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `barangay_id` bigint(20) UNSIGNED DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `civil_status` varchar(255) DEFAULT NULL,
  `gov_id_number` varchar(255) DEFAULT NULL,
  `program_specific_id` varchar(255) DEFAULT NULL,
  `date_of_application` date DEFAULT NULL,
  `assistance_availed` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deceased`
--

INSERT INTO `deceased` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `barangay_id`, `service_id`, `date_of_birth`, `age`, `gender`, `civil_status`, `gov_id_number`, `program_specific_id`, `date_of_application`, `assistance_availed`, `created_at`, `updated_at`) VALUES
(1, 'jellamay', NULL, 'dayaguit', 'jellamay@gmail.com', '09061573601', 9, NULL, '2025-01-01', 0, 'Female', 'Single', NULL, NULL, NULL, NULL, '2025-01-23 19:29:35', '2025-01-23 19:29:35'),
(2, 'faye', NULL, 'marquez', 'faye@gmail.com', '09673701820', 189, NULL, '2025-01-14', 0, 'Female', 'Single', NULL, NULL, NULL, NULL, '2025-01-23 19:32:46', '2025-01-23 19:32:46'),
(3, 'Lovely Rose', NULL, 'Chavez', 'jellamay@gmail.com', '1233333333', 12, NULL, '2025-01-15', 0, 'Male', 'Single', NULL, NULL, NULL, NULL, '2025-01-24 01:49:06', '2025-01-24 01:49:06'),
(4, 'admin', ' ', ' jordan', 'admin@gmail.com', '09064209450', 23, NULL, '2017-09-09', 7, NULL, 'Deserunt cupidatat o', NULL, NULL, NULL, NULL, '2025-02-16 08:25:25', '2025-02-16 08:25:25'),
(5, 'kaye', NULL, 'jordan', 'admin@gmail.com', '09064209450', 5, NULL, '2025-02-11', 0, NULL, 'Single', NULL, NULL, NULL, NULL, '2025-02-18 09:26:01', '2025-02-18 09:26:01'),
(6, 'Gerry', '', '1111', 'gerrysolisgohiljr1990@gmail.com', '09557153573', 21, NULL, '2025-02-19', 0, 'Male', 'Married', NULL, NULL, NULL, NULL, '2025-04-11 05:25:07', '2025-04-11 05:25:07');

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
-- Table structure for table `family_backgrounds`
--

CREATE TABLE `family_backgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_id` bigint(20) UNSIGNED DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `guardian_name` varchar(255) DEFAULT NULL,
  `father_occupation` varchar(255) DEFAULT NULL,
  `mother_occupation` varchar(255) DEFAULT NULL,
  `guardian_occupation` varchar(255) DEFAULT NULL,
  `father_phone` varchar(255) DEFAULT NULL,
  `mother_phone` varchar(255) DEFAULT NULL,
  `guardian_phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `family_backgrounds`
--

INSERT INTO `family_backgrounds` (`id`, `beneficiary_id`, `father_name`, `mother_name`, `guardian_name`, `father_occupation`, `mother_occupation`, `guardian_occupation`, `father_phone`, `mother_phone`, `guardian_phone`, `created_at`, `updated_at`) VALUES
(4, 26, 'Clark Raymond', 'Angelica Daugherty', 'Akeem Keith', 'Alias animi quia al', 'Illo velit perspicia', 'Voluptatem Facere v', '+1 (734) 877-8531', '+1 (953) 573-3727', '+1 (478) 136-4356', '2025-02-02 02:19:39', '2025-02-02 02:19:39'),
(5, 28, 'Joseph Hoffman', 'Jillian Myers', 'Mikayla Figueroa', 'Nam impedit tempori', 'Est pariatur Disti', 'Sed placeat officia', '+1 (239) 649-2272', '+1 (949) 801-8979', '+1 (997) 419-7002', '2025-02-02 05:02:42', '2025-02-02 05:02:42'),
(6, 32, 'Colette Knox', 'Yoshi Hopper', 'Madison Morgan', 'Et commodo facilis e', 'Et accusamus esse pa', 'Duis eum necessitati', '+1 (752) 963-5034', '+1 (611) 369-9021', '+1 (479) 719-5886', '2025-02-02 05:19:03', '2025-02-02 05:19:03'),
(7, 4, 'Hedley Henson', 'Anastasia Hobbs', 'Mari Zamora', 'Dolor corporis magna', 'Officia nostrud cum', 'Iusto aliqua Quia o', '+1 (857) 975-9097', '+1 (592) 972-9263', '+1 (605) 737-6408', '2025-02-02 05:42:32', '2025-02-02 05:42:32'),
(8, 44, 'Clarke Morrison', 'Mufutau Short', 'Jessica Hebert', 'Qui dicta proident', 'Quis commodi molesti', 'Sit voluptate quod', '+1 (966) 141-1922', '+1 (526) 973-6881', '+1 (561) 522-3242', '2025-02-02 05:47:25', '2025-02-02 05:47:25'),
(11, 62, 'Amanda Bryant', 'Travis Reeves', 'Brielle Stanton', 'Distinctio Sint et', 'A saepe qui omnis cu', 'Ipsum excepteur qui', '+1 (897) 457-9004', '+1 (182) 636-8985', '+1 (777) 414-4465', '2025-02-06 03:55:55', '2025-02-06 03:55:55'),
(12, 64, 'Thaddeus Battle', 'Slade Long', 'Jordan Britt', 'Lorem sunt voluptas', 'Aut id libero quibus', 'Modi repellendus Et', '+1 (497) 949-3331', '+1 (807) 714-8323', '+1 (326) 953-4516', '2025-02-06 07:24:29', '2025-02-06 07:24:29'),
(13, 82, 'Leila Sullivan', 'Desiree Pugh', 'Montana Madden', 'Est saepe porro sit', 'Aut at natus qui lab', 'Molestias nisi repel', '+1 (943) 506-6673', '+1 (273) 466-2509', '+1 (109) 178-3648', '2025-02-08 04:19:15', '2025-02-08 04:19:15'),
(15, 88, 'Kibo Orr', 'Wynter Woods', 'Graham Burns', 'Repudiandae aliquip', 'Natus doloremque del', 'Voluptatum vel assum', '+1 (582) 651-8498', '+1 (278) 516-1804', '+1 (727) 195-3184', '2025-02-08 09:02:06', '2025-02-08 09:02:06'),
(16, 90, 'Gil Buchanan', 'Carla Hubbard', 'Rhiannon Warren', 'Autem at recusandae', 'Officia eveniet vel', 'Sapiente libero et s', '+1 (972) 659-3122', '+1 (186) 828-4352', '+1 (313) 682-6066', '2025-02-14 01:56:40', '2025-02-14 01:56:40'),
(17, 92, 'N/A', 'Estrella Chavez', 'N/A', 'Driver', 'Receptionist', 'N/A', '09368532932', '09061573601', 'N/A', '2025-02-17 05:30:14', '2025-02-17 05:30:14'),
(23, 122, 'Margaret Owen', 'Karleigh Hardin', 'Miranda Diaz', 'Dolor odit ex nisi a', 'Ex qui dolor recusan', 'At perspiciatis dol', '+1 (689) 901-3889', '+1 (934) 951-5599', '+1 (846) 796-4238', '2025-02-19 04:17:43', '2025-02-19 04:17:43'),
(24, 126, 'Roslin Chavez', 'Estrella Chavez', 'ghtghetr', 'Driver', 'Receptionist', 'hgrehger', '09123456789', '09123456789', '09123456789', '2025-02-19 05:43:37', '2025-02-19 05:43:37'),
(25, 131, 'mARK sIMBORIO', 'jELLAMAY', 'fAYE', 'fARMER', 'lABANDERA', 'wA', '09123456789', '09826567890', '09776543247', '2025-02-19 07:31:49', '2025-02-19 07:31:49'),
(27, 142, 'Zeph Mccoy', 'Akeem White', 'Darrel Meadows', 'Aliquip debitis temp', 'Cupiditate excepturi', 'Veritatis unde id sa', '+1 (638) 636-3584', '+1 (823) 432-4585', '+1 (807) 974-3139', '2025-04-09 08:23:10', '2025-04-09 08:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `family_compositions`
--

CREATE TABLE `family_compositions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `civil_status` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `educational` varchar(255) DEFAULT NULL,
  `income` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `family_compositions`
--

INSERT INTO `family_compositions` (`id`, `beneficiary_id`, `name`, `relationship`, `age`, `civil_status`, `occupation`, `birthday`, `educational`, `income`, `gender`, `created_at`, `updated_at`) VALUES
(3, 12, 'Azalia Berry', 'Officia ea est illum', '94', 'Married', 'Non exercitation arc', NULL, NULL, 'Above 180,000', NULL, '2025-01-31 17:00:16', '2025-01-31 17:00:16'),
(4, 3, 'asdas', 'dasdasd', '123', 'Divorced', 'asdasd', NULL, NULL, 'Above 180,000', NULL, '2025-01-31 18:18:36', '2025-02-01 00:13:34'),
(5, 15, 'Ivory Flores', 'Ut voluptatem Sint', '23', 'Divorced', 'Qui qui voluptatem q', NULL, 'Postgraduate', NULL, 'Female', '2025-02-01 00:06:15', '2025-02-01 00:33:31'),
(6, 16, 'Edan Rosario', 'In et aut illo aliqu', '5', 'Divorced', 'Et quo consectetur i', NULL, 'Postgraduate', NULL, 'Female', '2025-02-01 00:07:12', '2025-02-01 00:07:12'),
(9, 17, 'Erich Wood', 'Quo iste dolore magn', '39', 'Divorced', 'Quidem dolorem cupid', '2009-02-18', 'High School', '120,000 - 180,000', NULL, '2025-02-01 02:55:00', '2025-02-01 02:55:00'),
(10, 18, 'Regan Whitfield', 'Autem laboris in eli', '75', 'Single', 'Aut exercitation neq', '1996-10-12', 'No Formal Education', '120,000 - 180,000', NULL, '2025-02-01 02:56:39', '2025-02-01 02:56:39'),
(13, 20, 'Guy Chambers', 'Nulla asperiores et', '38', 'Widowed', 'Et voluptatibus dolo', NULL, NULL, '120,000 - 180,000', NULL, '2025-02-01 04:34:18', '2025-02-01 04:34:18'),
(15, 27, 'Mariko Stanton', 'Pariatur Quisquam q', '70', 'Divorced', 'Atque et aut quisqua', NULL, NULL, 'Above 180,000', NULL, '2025-02-02 05:01:46', '2025-02-02 05:07:09'),
(16, 29, 'Imogene Turner', 'Dolore laboris quia', '6', 'Widowed', 'Quidem pariatur Ips', '2018-02-11', 'No Formal Education', '60,000 - 120,000', NULL, '2025-02-02 05:04:12', '2025-02-02 05:14:31'),
(17, 30, 'Price Langley', 'Velit ex nobis mole', '96', 'Single', 'Consectetur quae off', NULL, 'Elementary', NULL, 'Female', '2025-02-02 05:05:57', '2025-02-02 05:05:57'),
(19, 33, 'Camden Day', 'Est blanditiis ea el', '75', 'Single', 'Autem dolor vel qui', '2005-04-13', 'High School', '60,000 - 120,000', NULL, '2025-02-02 05:19:38', '2025-02-02 05:19:38'),
(20, 34, 'Chancellor Albert', 'Aut tempore error u', '54', 'Widowed', 'Est aliquid facere a', '2017-12-02', 'High School', '60,000 - 120,000', NULL, '2025-02-02 05:19:45', '2025-02-02 05:19:45'),
(21, 35, 'Boris Jenkins', 'Qui qui non et persp', '14', 'Widowed', 'Alias eum rem velit', NULL, 'No Formal Education', NULL, 'Male', '2025-02-02 05:20:06', '2025-02-02 05:20:06'),
(27, 41, 'Claudia Rivera', 'Ad dolore molestiae', '59', 'Widowed', 'Nostrud magna numqua', NULL, NULL, 'Below 60,000', NULL, '2025-02-02 05:45:25', '2025-02-02 05:45:25'),
(28, 42, 'Cyrus Glenn', 'Duis omnis hic in iu', '48', 'Widowed', 'Vero ad natus sit be', '1985-10-30', 'Elementary', '120,000 - 180,000', NULL, '2025-02-02 05:46:13', '2025-02-02 05:46:13'),
(29, 43, 'Carson Montoya', 'Obcaecati sunt qui', '25', 'Widowed', 'Neque qui accusantiu', '1970-12-24', 'Postgraduate', '60,000 - 120,000', NULL, '2025-02-02 05:46:42', '2025-02-02 05:46:42'),
(31, 46, 'Omar Randolph', 'Temporibus vitae qui', '9', 'Divorced', 'Unde obcaecati commo', NULL, NULL, 'Above 180,000', NULL, '2025-02-02 07:11:55', '2025-02-02 07:11:55'),
(32, 46, 'Lisandra Burris', 'Fugiat inventore no', '35', 'Widowed', 'Vel voluptate elit', NULL, NULL, '60,000 - 120,000', NULL, '2025-02-02 07:11:55', '2025-02-02 07:11:55'),
(33, 46, 'Hanae Mcknight', 'Quos placeat animi', '64', 'Divorced', 'Et obcaecati sunt du', NULL, NULL, 'Below 60,000', NULL, '2025-02-02 07:11:55', '2025-02-02 07:11:55'),
(34, 47, 'Graiden Clayton', 'Voluptas non consequ', '21', 'Widowed', 'Dicta officia odio n', NULL, NULL, '60,000 - 120,000', NULL, '2025-02-02 07:14:35', '2025-02-02 07:14:35'),
(35, 47, 'Phyllis Rosa', 'Non modi ipsam modi', '97', 'Divorced', 'Dolorum laborum Con', NULL, NULL, '60,000 - 120,000', NULL, '2025-02-02 07:14:35', '2025-02-02 07:14:35'),
(36, 47, 'Rosalyn Brock', 'Optio qui odit dict', '37', 'Widowed', 'Et maiores qui aperi', NULL, NULL, '120,000 - 180,000', NULL, '2025-02-02 07:14:35', '2025-02-02 07:14:35'),
(37, 47, 'Yardley Patel', 'Libero officiis magn', '98', 'Single', 'Porro et magni ut en', NULL, NULL, '120,000 - 180,000', NULL, '2025-02-02 07:14:35', '2025-02-02 07:14:35'),
(40, 49, 'Burke Lester', 'Maxime culpa ut exe', '83', 'Divorced', 'Dolor accusamus id p', NULL, 'College', NULL, 'Female', '2025-02-02 07:57:54', '2025-02-02 07:57:54'),
(41, 49, 'Channing Sullivan', 'Ex aperiam nihil cup', '63', 'Divorced', 'Magnam sunt vitae mo', NULL, 'Postgraduate', NULL, 'Female', '2025-02-02 07:57:54', '2025-02-02 07:57:54'),
(42, 50, 'Callie Allison', 'Ut Nam aute est vol', '47', 'Widowed', 'Animi mollitia aut', '1976-03-03', 'College', '6', NULL, '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(43, 50, 'Susan Miles', 'Harum enim eu dolor', '31', 'Widowed', 'Dolor non tenetur la', '2009-10-04', 'Elementary', '0', NULL, '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(44, 50, 'Jasmine Peck', 'Voluptatem aut earum', '90', 'Widowed', 'Corporis modi sunt e', '1999-08-16', 'No Formal Education', ',', NULL, '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(45, 50, 'Kennan Chan', 'Ut dignissimos nihil', '84', 'Widowed', 'In quis voluptatem q', '1975-07-07', 'No Formal Education', '0', NULL, '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(46, 50, 'Lana Parsons', 'Sit possimus neque', '65', 'Widowed', 'Non soluta in beatae', '2004-07-25', 'College', '0', NULL, '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(47, 50, 'Wang Rodriguez', 'Doloremque laudantiu', '95', 'Married', 'Corporis architecto', '1990-08-09', 'No Formal Education', '0', NULL, '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(48, 50, 'Merrill Roth', 'Voluptatem Quos acc', '27', 'Widowed', 'Quibusdam exercitati', '1980-03-05', 'High School', ' ', NULL, '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(49, 50, 'Sacha Valencia', 'Dolore enim officia', '5', 'Married', 'Sit error numquam in', '1987-11-07', 'Elementary', '-', NULL, '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(67, 8, 'Lev Pate', 'Provident animi al', '64', 'Single', 'Officia ad alias ut', NULL, 'Postgraduate', NULL, 'Female', '2025-02-02 12:04:39', '2025-02-02 12:04:39'),
(68, 8, 'Denise Joyce', 'Quo nulla sit imped', '49', 'Widowed', 'Minus blanditiis con', NULL, 'High School', NULL, 'Male', '2025-02-02 12:04:39', '2025-02-02 12:04:39'),
(69, 8, 'Quintessa Lindsey', 'A sed occaecat nobis', '65', 'Married', 'Molestiae totam elig', NULL, 'High School', NULL, 'Male', '2025-02-02 12:04:39', '2025-02-02 12:04:39'),
(70, 8, 'Hammett Carpenter', 'Mollitia quasi cupid', '92', 'Divorced', 'Et iste in cupiditat', NULL, 'College', NULL, 'Female', '2025-02-02 12:04:39', '2025-02-02 12:04:39'),
(72, 9, 'Plato Finley', 'Corporis accusamus c', '25', 'Married', 'Voluptas tempora vel', '2023-09-22', 'College', 'Above 180,000', NULL, '2025-02-02 12:48:04', '2025-02-02 12:48:04'),
(73, 9, 'Rose Ewing', 'Molestias provident', '8', 'Single', 'Sunt sed animi est', '2022-12-07', 'College', 'Above 180,000', NULL, '2025-02-02 12:48:04', '2025-02-02 12:48:04'),
(74, 9, 'Murphy Herrera', 'Doloribus vel dolor', '92', 'Divorced', 'Repudiandae Nam elit', '1974-05-29', 'College', 'Below 60,000', NULL, '2025-02-02 12:48:04', '2025-02-02 12:48:04'),
(75, 9, 'Hasad Lowery', 'Culpa quia consequat', '56', 'Single', 'Cum nulla pariatur', '2001-07-31', 'Elementary', 'Above 180,000', NULL, '2025-02-02 12:48:04', '2025-02-02 12:48:04'),
(76, 9, 'Jamal Grant', 'Ut consectetur unde', '67', 'Married', 'Assumenda asperiores', '2009-01-25', 'High School', '120,000 - 180,000', NULL, '2025-02-02 12:48:04', '2025-02-02 12:48:04'),
(77, 9, 'Lamar Simon', 'Nisi facilis volupta', '95', 'Married', 'Autem adipisicing ve', '2012-07-03', 'No Formal Education', 'Below 60,000', NULL, '2025-02-02 12:48:04', '2025-02-02 12:48:04'),
(78, 9, 'Erin Bender', 'Nihil cupidatat exce', '43', 'Married', 'Exercitation quisqua', '2020-09-15', 'College', 'Below 60,000', NULL, '2025-02-02 12:48:04', '2025-02-02 12:48:04'),
(79, 9, 'Zenaida Potts', 'Et est proident et', '42', 'Married', 'Fugiat recusandae O', '1980-08-12', 'No Formal Education', '120,000 - 180,000', NULL, '2025-02-02 12:48:04', '2025-02-02 12:48:04'),
(86, 58, 'Danielle Ferrell', 'Eos non deleniti ani', '79', 'Rerum corrupti nihi', 'Aut aliquip quibusda', '2017-02-28', 'Exercitation exercit', '884', NULL, '2025-02-06 02:30:02', '2025-02-06 02:30:02'),
(88, 65, 'asdfas', 'asdf', '12', 'asdf', 'adsfsdaf', NULL, 'asdf', NULL, 'Female', '2025-02-06 09:08:36', '2025-02-06 09:08:36'),
(89, 66, 'Papsi', 'Paps', '20', 'Married', 'Wa', NULL, NULL, 'Above 180,000', NULL, '2025-02-07 01:07:33', '2025-02-07 01:07:33'),
(90, 67, 'N/A', 'N/A', '49', 'Married', 'N/A', NULL, NULL, 'Below 60,000', NULL, '2025-02-07 01:23:40', '2025-02-07 01:23:40'),
(91, 68, 'Papsi', 'Paps', '0', 'Married', 'Wa', '2025-02-06', 'College', '1', NULL, '2025-02-07 01:33:31', '2025-02-07 01:33:31'),
(93, 70, 'Papsi', 'Paps', '50', 'Single', 'Wa', NULL, 'College', NULL, 'Male', '2025-02-07 01:57:37', '2025-02-07 01:57:37'),
(97, 74, 'N/A', 'N/A', '50', 'Married', 'N/A', NULL, NULL, 'Below 60,000', NULL, '2025-02-07 08:43:56', '2025-02-07 08:43:56'),
(98, 75, 'David Beasley', 'Consectetur fugit', '95', 'Divorced', 'Fugiat atque aut bl', NULL, 'Postgraduate', NULL, 'Male', '2025-02-08 03:31:42', '2025-02-08 03:31:42'),
(99, 76, 'Hadley Lara', 'Ut commodi tenetur r', '12', 'Married', 'Sit quidem commodi u', NULL, 'High School', NULL, 'Male', '2025-02-08 03:36:24', '2025-02-08 03:36:24'),
(100, 77, 'Kibo Medina', 'Omnis sapiente dolor', '92', 'Single', 'Velit odio soluta iu', '1976-01-02', 'Elementary', 'Above 180,000', NULL, '2025-02-08 03:42:36', '2025-02-08 03:42:36'),
(101, 78, 'Calvin Mack', 'Ex velit aut a repre', '57', 'Single', 'Aliquid cupidatat si', NULL, 'Postgraduate', NULL, 'Female', '2025-02-08 03:52:17', '2025-02-08 03:52:17'),
(102, 79, 'Halee Goodwin', 'Quod velit necessita', '90', 'Divorced', 'Veniam voluptates a', NULL, NULL, '60,000 - 120,000', NULL, '2025-02-08 03:53:41', '2025-02-08 03:53:41'),
(103, 80, 'Brynn Keller', 'Id distinctio Repre', '96', 'Divorced', 'Sit aspernatur repre', '1985-03-10', 'Postgraduate', '60,000 - 120,000', NULL, '2025-02-08 03:54:18', '2025-02-08 03:54:18'),
(104, 81, 'Papsi', 'Paps', '2', 'Divorced', 'Wa', NULL, NULL, 'Above 180,000', NULL, '2025-02-08 03:54:58', '2025-02-08 03:54:58'),
(105, 83, 'Ivy Frank', 'Maiores nemo fugiat', '58', 'Divorced', 'Cupidatat vero anim', '2002-07-17', 'Postgraduate', 'Below 60,000', NULL, '2025-02-08 04:19:59', '2025-02-08 05:27:27'),
(108, 87, 'Kaden Sykes', 'Tenetur et facere qu', '84', 'Praesentium distinct', 'Cillum qui necessita', '1980-12-16', 'Aut et occaecat moll', '644', NULL, '2025-02-08 09:01:49', '2025-02-08 09:01:49'),
(109, 89, 'Jarrod Weber', 'Officiis non perspic', '33', 'Married', 'Tempora nihil est i', '2020-12-08', 'No Formal Education', 'Below 60,000', NULL, '2025-02-14 01:56:17', '2025-02-16 08:24:47'),
(110, 91, 'Sharon Keller', 'Maxime ullamco velit', '78', 'Minim quibusdam ulla', 'Est consectetur vit', NULL, 'Tempor duis ea velit', NULL, 'Male', '2025-02-14 02:12:48', '2025-02-14 02:12:48'),
(111, 93, 'papsi', 'Mother', '435', 'Married', 'Receptionist', '2025-02-12', 'College Graduate', '8', NULL, '2025-02-17 05:33:59', '2025-02-17 05:33:59'),
(112, 93, 'Roslin L. Chavez', 'Father', '45', 'MArried', 'Driver', '2025-02-06', 'College Graduate', '9', NULL, '2025-02-17 05:33:59', '2025-02-17 05:33:59'),
(113, 94, 'papsi', 'Mother', '435', 'Married', 'Receptionist', NULL, 'N/A', NULL, 'Male', '2025-02-17 05:37:00', '2025-02-17 05:37:00'),
(114, 94, 'Roslin L. Chavez', 'Father', '45', 'MArried', 'Driver', NULL, 'N/A', NULL, 'Male', '2025-02-17 05:37:00', '2025-02-17 05:37:00'),
(115, 96, 'Lynn Bush', 'Proident Nam obcaec', '9', 'Divorced', 'Non qui cillum ad so', '2004-03-01', 'Postgraduate', '120,000 - 180,000', NULL, '2025-02-17 06:11:26', '2025-02-19 04:29:38'),
(117, 98, 'Papsi', 'Papa', '25', 'Married', 'wala', NULL, 'College Grad', NULL, 'Male', '2025-02-17 15:31:50', '2025-02-17 15:31:50'),
(118, 99, 'Papsi', 'Papa', '6', 'Married', 'wala', NULL, 'College Grad', NULL, 'Male', '2025-02-17 15:38:33', '2025-02-17 15:38:33'),
(119, 100, 'Papsi', 'Papa', '4', 'Married', 'wala', NULL, 'College Grad', NULL, 'Male', '2025-02-17 15:42:15', '2025-02-17 15:42:15'),
(120, 101, 'Papsi', 'Papa', '2', 'Married', 'wala', NULL, 'College Grad', NULL, 'Male', '2025-02-17 15:44:59', '2025-02-17 15:44:59'),
(121, 102, 'Papsi', 'Papa', '8', 'Married', 'wala', NULL, 'College Grad', NULL, 'Male', '2025-02-17 16:27:51', '2025-02-17 16:27:51'),
(122, 103, 'Papsi', 'Papa', '8', 'Married', 'wala', NULL, 'College Grad', NULL, 'Male', '2025-02-17 16:29:27', '2025-02-17 16:29:27'),
(124, 110, 'Alexa Rich', 'Quasi expedita accus', '77', 'Ab sint veritatis ei', 'Magna voluptatem Bl', NULL, 'Enim perferendis ea', NULL, 'Female', '2025-02-18 01:33:40', '2025-02-18 01:33:40'),
(127, 114, 'Beatrice Obrien', 'Omnis laborum Cupid', '99', 'Laborum Nam ad volu', 'Et harum commodi rec', NULL, 'Voluptatem non qui', NULL, 'Male', '2025-02-18 02:55:39', '2025-02-18 02:55:39'),
(128, 115, 'Lila Sweet', 'Neque nulla cupidita', '59', 'Excepturi incidunt', 'Ea tempor et id labo', NULL, 'Neque sed ut excepte', NULL, 'Male', '2025-02-18 02:56:07', '2025-02-18 02:56:07'),
(130, 117, 'papsi', 'Mother', '435', 'Married', 'Receptionist', NULL, 'test', NULL, 'Male', '2025-02-19 02:17:47', '2025-02-19 02:17:47'),
(131, 117, 'Roslin L. Chavez', 'Father', '45', 'MArried', 'Driver', NULL, 'test', NULL, 'Male', '2025-02-19 02:17:47', '2025-02-19 02:17:47'),
(132, 117, 'Jhon Esli E. Chavez', 'Brother', '22', 'Single', 'Student', NULL, 'test', NULL, 'Male', '2025-02-19 02:17:47', '2025-02-19 02:17:47'),
(133, 117, 'Lindley E. Chavez', 'Brother', '21', 'Single', 'Student', NULL, 'test', NULL, 'Male', '2025-02-19 02:17:47', '2025-02-19 02:17:47'),
(134, 118, 'papsi', 'Mother', '435', 'Married', 'Receptionist', NULL, 'Test', NULL, 'Male', '2025-02-19 03:36:59', '2025-02-19 03:36:59'),
(135, 118, 'Roslin L. Chavez', 'Father', '45', 'MArried', 'Driver', NULL, 'test', NULL, 'Male', '2025-02-19 03:36:59', '2025-02-19 03:36:59'),
(136, 118, 'Jhon Esli E. Chavez', 'Brother', '22', 'Single', 'Student', NULL, 'test', NULL, 'Male', '2025-02-19 03:36:59', '2025-02-19 03:36:59'),
(137, 118, 'Lindley E. Chavez', 'Brother', '21', 'Single', 'Student', NULL, 'test', NULL, 'Male', '2025-02-19 03:36:59', '2025-02-19 03:36:59'),
(138, 119, 'papsi', 'Mother', '435', 'Married', 'Receptionist', NULL, 'Test', NULL, 'Male', '2025-02-19 03:37:32', '2025-02-19 03:37:32'),
(139, 119, 'Roslin L. Chavez', 'Father', '45', 'MArried', 'Driver', NULL, 'test', NULL, 'Male', '2025-02-19 03:37:32', '2025-02-19 03:37:32'),
(140, 119, 'Jhon Esli E. Chavez', 'Brother', '22', 'Single', 'Student', NULL, 'test', NULL, 'Male', '2025-02-19 03:37:32', '2025-02-19 03:37:32'),
(141, 119, 'Lindley E. Chavez', 'Brother', '21', 'Single', 'Student', NULL, 'test', NULL, 'Male', '2025-02-19 03:37:32', '2025-02-19 03:37:32'),
(142, 120, 'Stewart Middleton', 'Quis sed fugiat null', '20', 'Atque distinctio Eu', 'Aute laudantium obc', NULL, 'Aspernatur alias nos', NULL, 'Female', '2025-02-19 03:39:44', '2025-02-19 03:39:44'),
(143, 120, 'Dante Knowles', 'Nam cupiditate aliqu', '85', 'Quae quidem quis rer', 'Libero assumenda qui', NULL, 'Molestiae vero nemo', NULL, 'Female', '2025-02-19 03:39:44', '2025-02-19 03:39:44'),
(144, 120, 'May Morton', 'Harum maiores dolore', '61', 'Aut quibusdam est a', 'Culpa totam nesciun', NULL, 'Qui eiusmod quasi nu', NULL, 'Male', '2025-02-19 03:39:44', '2025-02-19 03:39:44'),
(145, 120, 'Iola Peterson', 'Cupiditate illo vel', '34', 'Quibusdam at ea dolo', 'Dolore aperiam magna', NULL, 'A aliquam tempora au', NULL, 'Female', '2025-02-19 03:39:44', '2025-02-19 03:39:44'),
(146, 121, 'Anika Hodge', 'Eos dignissimos sap', '33', 'Widowed', 'Esse architecto exp', NULL, NULL, '120,000 - 180,000', NULL, '2025-02-19 04:16:56', '2025-02-19 04:16:56'),
(147, 123, 'Hannah Jacobson', 'Placeat reiciendis', '25', 'Widowed', 'Aut repudiandae volu', '1999-08-07', 'Elementary', 'Above 180,000', NULL, '2025-02-19 04:18:10', '2025-02-19 04:18:10'),
(148, 124, 'Brianna Pearson', 'Aut in consequatur', '65', 'Divorced', 'Laboriosam modi asp', NULL, 'Postgraduate', NULL, 'Male', '2025-02-19 04:18:30', '2025-02-19 04:18:30'),
(149, 125, 'Papsi', 'Papa', '1', 'Married', 'wala', '2025-02-05', 'college', '9', NULL, '2025-02-19 05:41:14', '2025-02-19 05:41:14'),
(150, 127, 'LAB', 'Papa', '55', 'Married', 'wala', NULL, 'College Grad', NULL, 'Male', '2025-02-19 05:45:33', '2025-02-19 05:45:33'),
(151, 128, 'LAB', 'Papa', '55', 'Married', 'wala', NULL, 'College Grad', NULL, 'Male', '2025-02-19 05:45:35', '2025-02-19 05:45:35'),
(163, 140, 'Dara Terry', 'Nesciunt veniam mo', '63', 'Beatae sed magni mol', 'Excepturi architecto', '2005-08-28', 'Aliquid nobis dolore', '835', NULL, '2025-04-09 06:44:20', '2025-04-09 06:44:20'),
(186, 158, 'Hop Parks', 'Quia labore dolorem', '62', 'Voluptatem enim corp', 'Quia ex esse ut exp', NULL, NULL, '758', NULL, '2025-04-11 08:59:18', '2025-04-11 08:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `for_spd_or_spo_use_onlies`
--

CREATE TABLE `for_spd_or_spo_use_onlies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `solo_parent_detail_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `id_type` varchar(255) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `for_spd_or_spo_use_onlies`
--

INSERT INTO `for_spd_or_spo_use_onlies` (`id`, `solo_parent_detail_id`, `status`, `id_type`, `card_number`, `category`, `created_at`, `updated_at`) VALUES
(4, 18, 'Disapproved', 'New', 'ID Card Number test', 'Category test', '2025-02-08 09:12:25', '2025-02-08 09:12:25'),
(5, 21, 'Approved', 'New', '986546', 'try', '2025-02-17 07:51:38', '2025-02-17 07:51:38'),
(6, 19, 'Approved', 'New', '123', 'test', '2025-02-19 04:15:22', '2025-02-19 04:15:22'),
(8, 33, 'Approved', 'New', '456456456', 'asdfd', '2025-04-09 06:47:11', '2025-04-09 06:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `gis`
--

CREATE TABLE `gis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `beneficiary_id` bigint(20) UNSIGNED DEFAULT NULL,
  `log_entry` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `beneficiary_id`, `log_entry`, `created_at`, `updated_at`) VALUES
(1, 3, 81, 'Updated beneficiary record with the following changes: Date of Birth: 2025-02-12 00:00:00 → 2025-01-12, Barangay: 10 → 10, Age: 0 → 0', '2025-02-14 02:51:41', '2025-02-14 02:51:41'),
(3, 3, 90, 'Updated beneficiary record with the following changes: Place of Birth:  → Test, Date of Birth: 1990-08-19 00:00:00 → 1990-08-19, Religion:  → test, Gender: male → Male, Barangay: 35 → 35, Annual Income:  → Below 60,000, Educational Attainment: Senior High → Elementary, Age: 42 → 42', '2025-02-14 03:56:25', '2025-02-14 03:56:25'),
(6, 3, 89, 'Updated beneficiary record with the following changes: Last Name:  Flores → Flores, Middle Name:  Rajah Berg → Rajah Berg, Date of Birth: 2011-08-19 00:00:00 → 2011-08-19, Barangay: 1 → 1, Civil Status: Voluptatem neque an → Single, Annual Income:  → 60,000 - 120,000, Educational Attainment: College Level → Elementary, Age: 42 → 42', '2025-02-16 08:24:47', '2025-02-16 08:24:47'),
(7, 2, 89, 'Updated beneficiary record with the following changes: Date of Birth: 2011-08-19 00:00:00 → 2011-08-19, Barangay: 1 → 1, Phone: +1 (298) 481-3981 → 09268307424, Age: 42 → 42', '2025-02-19 04:16:01', '2025-02-19 04:16:01'),
(8, 3, 96, 'Updated beneficiary record with the following changes: Last Name:  Deleon → Shepherd, First Name: Raja → Yvonne, Middle Name:  Barrett → Remedios Quinn, Place of Birth: Abuyog → Laborum Reiciendis, Date of Birth: 2025-02-20 00:00:00 → 2022-11-26, Religion: Christianity → Ea voluptatem sit do, Barangay: 53 → 24, Civil Status: Single → Widowed, Annual Income:  → 60,000 - 120,000, Educational Attainment: Not Attended School → College, Occupation: Student → Quis vel mollitia ea, Phone: 09925730026 → +1 (893) 972-9896, Age: 14 → 2', '2025-02-19 04:29:38', '2025-02-19 04:29:38');

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
(43, '0001_01_01_000001_create_cache_table', 1),
(44, '0001_01_01_000002_create_jobs_table', 1),
(45, '2024_11_25_134913_create_personal_access_tokens_table', 1),
(46, '2024_11_26_161029_create_services_table', 1),
(47, '2024_12_29_031811_create_gis_table', 1),
(48, '2024_12_29_073254_create_barangays_table', 1),
(49, '2024_12_30_083654_create_beneficiaries_table', 1),
(50, '2025_01_16_002016_create_users_table', 1),
(51, '2025_01_16_002457_add_two_factor_columns_to_users_table', 1),
(52, '2025_01_16_002640_create_applications_table', 1),
(53, '2025_01_16_002807_add_cancellation_reason_to_applications_table', 1),
(54, '2025_01_16_002946_create_user_meta_table', 1),
(55, '2025_01_16_194705_create_sms_logs_table', 2),
(67, '2025_01_17_093509_create_beneficiaries_table', 3),
(70, '2025_01_23_153242_create_benefits_received_table', 4),
(71, '2025_01_24_031924_create_deceased_table', 5),
(72, '2025_01_31_223332_create_family_compositions_table', 6),
(73, '2025_01_31_223525_create_contact_emergencies_table', 6),
(74, '2025_01_31_223724_create_pwd_details_table', 6),
(75, '2025_01_31_224016_create_solo_parent_details_table', 6),
(76, '2025_01_31_230039_create_aics_details_table', 6),
(77, '2025_02_01_134256_create_family_backgrounds_table', 7),
(78, '2025_02_06_111518_create_accomplished_bies_table', 8),
(79, '2025_02_08_155800_create_for_spd_or_spo_use_onlies_table', 9),
(80, '2025_01_23_153241_create_assistances_table', 10),
(81, '0001_01_01_000004_create_barangays_table', 11),
(82, '2025_02_14_085445_create_logs_table', 12),
(84, '2025_02_16_224306_create_assistances_table', 14),
(85, '2025_02_16_224932_create_assistances_table', 15),
(86, '2025_02_16_221120_add_beneficiary_id_to_assistances_table', 16),
(87, '2025_04_05_085146_create_basic_infos_table', 17),
(88, '2025_04_05_085147_create_basic_infos_table', 18),
(89, '2025_04_11_151632_create_saved_family_compositions_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('elizabeth.sebios@gmail.com', '$2y$12$bK0dtVC07YasD6k.PjvyZeWPAF77sLZ.HqvpoxiPiz/6Gn.fKybRi', '2025-02-17 08:43:07'),
('rlovie0403@gmail.com', '$2y$12$5BsOabOjFtTUKRXF0ckIQOtCUinCHP3s6mjACRet3I0Kl8LjXhTxq', '2025-02-17 07:19:15');

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
-- Table structure for table `pwd_details`
--

CREATE TABLE `pwd_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_of_disability` varchar(255) DEFAULT NULL,
  `cause_of_disability` varchar(255) DEFAULT NULL,
  `acquired` varchar(255) DEFAULT NULL,
  `congenital_inborn` varchar(255) DEFAULT NULL,
  `house_no_and_street` varchar(255) DEFAULT NULL,
  `municipality` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `landline_no` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `status_of_employment` varchar(255) DEFAULT NULL,
  `category_of_employment` varchar(255) DEFAULT NULL,
  `types_of_employment` varchar(255) DEFAULT NULL,
  `organization_affiliated` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `tel_no` varchar(255) DEFAULT NULL,
  `sss_no` varchar(255) DEFAULT NULL,
  `gsis_no` varchar(255) DEFAULT NULL,
  `pag_ibig_no` varchar(255) DEFAULT NULL,
  `psn_no` varchar(255) DEFAULT NULL,
  `philhealth_no` varchar(255) DEFAULT NULL,
  `accomplished_by` enum('applicant','guardian','representative') DEFAULT NULL,
  `blood_type` varchar(255) DEFAULT NULL,
  `pwd_number` varchar(255) DEFAULT NULL,
  `application_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pwd_details`
--

INSERT INTO `pwd_details` (`id`, `beneficiary_id`, `type_of_disability`, `cause_of_disability`, `acquired`, `congenital_inborn`, `house_no_and_street`, `municipality`, `province`, `region`, `landline_no`, `email_address`, `status_of_employment`, `category_of_employment`, `types_of_employment`, `organization_affiliated`, `contact_person`, `office_address`, `tel_no`, `sss_no`, `gsis_no`, `pag_ibig_no`, `psn_no`, `philhealth_no`, `accomplished_by`, `blood_type`, `pwd_number`, `application_type`, `created_at`, `updated_at`) VALUES
(4, 26, 'Physical Disability (Orthopedic)', 'Other, Cause of Disability Other Test', 'Other, Acquired other test', 'Other, Other, Congenital/Inborn Other Test', 'Illo aliqua Fugit', 'Elit ullamco repreh', 'Modi tenetur ad dele', 'Iure quasi quibusdam', 'Et totam sed dolores', 'fybyp@mailinator.com', 'Self-Employed', 'Full-Time', 'Other', 'Gallegos Mayo Co', 'Vel Nam eveniet del', 'Aut nihil aliquid od', 'Occaecat corporis vi', 'Unde consequatur Te', 'Sunt neque est in e', 'Perspiciatis dolore', 'Libero quos esse do', 'Velit dolorem atque', 'applicant', 'A', NULL, 'New Applicant', '2025-02-02 02:19:39', '2025-02-02 03:00:38'),
(5, 28, 'Physical Disability (Orthopedic)', 'Congenital/Inborn', 'Injury', 'Down Syndrome', 'Omnis a porro harum', 'Facere laudantium i', 'Dolor deserunt place', 'Nulla nemo ipsum mod', 'Ut libero error eum', 'nyfihyb@mailinator.com', 'Retired', 'Part-Time', 'Remote', 'Ray and Mcleod Inc', 'Blanditiis suscipit', 'Labore qui earum mol', 'Voluptates qui dolor', 'Alias nihil irure no', 'Nostrud voluptas in', 'Sint ullamco sit et', 'Sunt non velit exe', 'Quasi incidunt id', 'applicant', 'B', 'AS-FSDS-W23-KSK40SA', 'New Applicant', '2025-02-02 05:02:42', '2025-02-05 01:58:01'),
(6, 32, 'Rare Disease (RA10747)', 'Down Syndrome', 'Injury', 'Down Syndrome', 'Maxime tempor archit', 'Tempor ad repellendu', 'Omnis error recusand', 'Voluptatem Laudanti', 'Commodi enim molesti', 'cafekyreta@mailinator.com', 'Other', 'Part-Time', 'Remote', 'Steele Patton Trading', 'Corrupti aute cillu', 'Laborum aute rerum h', 'Mollit expedita qui', 'Iure ea voluptas et', 'Enim dolore vel et f', 'Ratione voluptatem', 'Voluptatum ratione n', 'Eum aliquid enim aut', 'applicant', NULL, NULL, 'Renewal', '2025-02-02 05:19:03', '2025-02-02 05:19:03'),
(7, 4, 'Speech and Language Impairment', 'ADHD', 'Cerebral Palsy', 'Down Syndrome', 'Voluptas quo et ut o', 'Commodo dolore liber', 'In rem est vel quis', 'Aliquam delectus la', 'Beatae dolorem delen', 'nyzeq@mailinator.com', 'Unemployed', 'Temporary', 'Office', 'Blankenship Sanford Plc', 'Quia eum sunt volup', 'Quam nemo eligendi n', 'Asperiores unde non', 'Aut quo sit volupta', 'Assumenda reiciendis', 'Nulla omnis voluptat', 'Aut exercitation sus', 'Modi ipsa quidem no', 'applicant', NULL, NULL, 'New Applicant', '2025-02-02 05:42:32', '2025-02-02 05:42:32'),
(8, 44, 'Mental Disability', 'Acquired', 'Other, Wako balo sakit ayo', 'ADHD', 'Earum rem et magna v', 'Consequat Officiis', 'Omnis rerum aut quas', 'Do nihil in exercita', 'Eius dolore aliquid', 'rote@mailinator.com', 'Self-Employed', 'Full-Time', 'Remote', 'Floyd Reynolds Traders', 'Iure nisi commodo vo', 'Voluptas recusandae', 'Sequi est doloremqu', 'Consequatur omnis p', 'Sequi ipsum quod con', 'Consectetur velit e', 'Eaque perferendis di', 'Voluptatem maxime ve', 'applicant', 'A', 'F2-SDS-V092-KSDXCV2', 'Renewal', '2025-02-02 05:47:25', '2025-02-05 02:42:09'),
(11, 62, 'Psychosocial Disability', 'acquired', 'injury', NULL, 'Veniam accusantium', 'Laborum culpa non e', 'Animi porro ea numq', 'Molestias animi tem', 'Debitis consequatur', 'sircsaira@gmail.com', 'Employed', 'government', 'Seasonal', 'Salinas Ingram Traders', 'Culpa iure esse so', 'Consequuntur tempora', 'Cupidatat voluptatem', 'Ut doloribus dolorem', 'Odit maxime ratione', 'Dolore laborum at pa', 'Ea sint ullamco qui', 'In est nostrum aliqu', 'applicant', 'Laborum dolore qui e', '115', 'New Applicant', '2025-02-06 03:55:55', '2025-02-06 03:55:55'),
(12, 64, 'Learning Disability', 'Acquired', 'Chronic Illness', 'ADHD', 'Et eum in sunt cupid', 'Duis qui voluptatem', 'Quia odio lorem labo', 'Eu molestiae commodi', 'Pariatur Nihil nisi', 'favifyvegi@mailinator.com', 'Self-Employed', 'Contractual', 'Field', 'Rhodes and Marsh Inc', 'Distinctio A qui re', 'Irure cupiditate ull', 'Voluptatem Similiqu', 'Adipisci reprehender', 'Quam veniam et eum', 'Voluptate sunt in qu', 'Reiciendis dolor et', 'Quo officiis soluta', 'applicant', 'Eiusmod sed neque vo', '397', 'Renewal', '2025-02-06 07:24:29', '2025-02-06 07:24:29'),
(13, 82, 'Visual Disability', 'Congenital/Inborn', NULL, 'Cerebral Palsy', 'Laudantium sit id', 'Accusamus molestiae', 'Voluptatem esse qui', 'Quidem ullam et id', 'Ut voluptas consequa', 'nuhovyde@mailinator.com', 'Retired', 'Temporary', 'Other', 'Guzman Mercado Inc', 'Illo aperiam nihil o', 'Est et nisi qui odit', 'Voluptate quis fugit', 'Qui pariatur Quos s', 'Esse maiores explic', 'Sint qui rerum impe', 'Cupiditate dolorem v', 'Laborum aut ex offic', 'guardian', 'Esse incididunt aut', '967', 'Renewal', '2025-02-08 04:19:15', '2025-02-08 04:19:15'),
(15, 88, 'Speech and Language Impairment', 'acquired', 'injury', NULL, 'Amet aut culpa sit', 'Saepe architecto pos', 'Aut voluptatibus nos', 'Quis est pariatur', 'Sit voluptates simil', 'melberthdancil04@gmail.com', 'Employed', 'Private', 'Permanent Or Regular', 'Melton and Whitaker Associates', 'Veritatis occaecat u', 'Dolores id ea quia i', 'Ex nemo labore cupid', 'Voluptatum commodi v', 'Sint voluptas vero', 'Voluptatem Nesciunt', 'Et saepe quae nostru', 'Dolore consequat Re', 'applicant', 'Temporibus dolores d', '386', 'New Applicant', '2025-02-08 09:02:06', '2025-02-08 09:02:06'),
(16, 90, 'Learning Disability', 'Congenital/Inborn', NULL, 'ADHD', 'Atque labore suscipi', 'Ut similique aut rep', 'Minim voluptatem Vo', 'Accusantium sed nihi', 'Vel velit in eius in', 'rega@mailinator.com', 'Unemployed', 'Volunteer', 'Remote', 'Langley Petersen Trading', 'Hic dolorum Nam iust', 'Doloribus nostrum et', 'Soluta voluptas corr', 'At eu tempore non a', 'Eiusmod porro nisi i', 'Aliqua Vero volupta', 'Rerum quia aut sequi', 'Adipisicing aperiam', 'applicant', 'Aut facere pariatur', '570', 'Renewal', '2025-02-14 01:56:40', '2025-02-14 03:56:25'),
(17, 92, 'Cancer (RA11215)', 'congenital', NULL, 'adhd', 'Real Street', 'Abuyog', 'Leyte', 'Region VIII', 'N/A', 'rlovie0403@gmail.com', 'Employed', 'Government', 'Seasonal', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'applicant', 'O', 'N/A', 'New Applicant', '2025-02-17 05:30:14', '2025-02-17 05:30:14'),
(23, 122, 'Visual Disability', 'Acquired', 'Other, wa', NULL, 'Labore incididunt do', 'Perferendis atque au', 'Nobis modi ut esse e', 'Rerum aperiam consec', 'Cum dicta in sit bla', 'duvu@mailinator.com', 'Other', 'Volunteer', 'Remote', 'Hubbard and Petty Associates', 'Dolorem explicabo Q', 'Non quia consectetur', 'Nostrud nisi enim es', 'Numquam harum qui iu', 'Consectetur nisi la', 'In sit et quidem qu', 'Sit sint accusamus', 'Similique ex ea labo', 'guardian', 'Aut nobis iste molli', '776', 'Renewal', '2025-02-19 04:17:43', '2025-02-19 04:17:43'),
(24, 126, 'deaf', 'Acquired', 'chronic', NULL, 'REAL STREET', 'Abuyog', 'Leyte', 'Region VIII', 'fd', 'joven@gmail.com', 'Employed', 'Government', 'Permanent Or Regular', 'idunno', '09393476', 'Abuyog', '0978878787', '123', '123', '123', '123', '123', NULL, 'A-', '8947839758', 'Renewal', '2025-02-19 05:43:37', '2025-02-19 05:43:37'),
(25, 131, 'Rare Disease (RA10747)', 'Acquired', 'chronic', NULL, 'Real street', 'Abuyog', 'Leyte', 'Region VIII', 'n/a', 'gerrysolisgohiljr1990@gmail.com', 'Employed', 'Government', 'Permanent Or Regular', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', NULL, 'A-', 'n/a', 'New Applicant', '2025-02-19 07:31:49', '2025-02-19 07:31:49'),
(27, 142, 'Cancer (RA11215)', 'Acquired', 'injury', NULL, 'Quibusdam eos nemo', 'Nihil illo aut adipi', 'Pariatur Ea nobis v', 'Deserunt porro facil', 'Dicta ab eaque atque', 'juan@gmail.com', 'Self-Employed', 'Government', 'Permanent Or Regular', 'Ingram Strickland Trading', 'Est anim tenetur rei', 'Dolor odit quia esse', 'Modi omnis cupiditat', 'Necessitatibus cillu', 'Voluptas qui tempora', 'Dicta perferendis vo', 'Dolor ducimus iure', 'Alias autem ut obcae', NULL, 'O-', '190', 'Renewal', '2025-04-09 08:23:10', '2025-04-09 08:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `saved_family_compositions`
--

CREATE TABLE `saved_family_compositions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_saved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saved_family_compositions`
--

INSERT INTO `saved_family_compositions` (`id`, `user_id`, `is_saved`, `created_at`, `updated_at`) VALUES
(1, 12, 1, '2025-04-11 07:47:06', '2025-04-11 07:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `saved_family_composition_details`
--

CREATE TABLE `saved_family_composition_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `saved_family_composition_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `civil_status` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `educational` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `income` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'OSCA(Office of Senior Citizens)', '60 years old and above indigent senior citizens can avail the program. Senior citizens who are not yet beneficiary but qualified within the eligibility criteria can apply', '1737115036.jpg', 1, '2025-01-15 18:04:34', '2025-04-08 09:14:02'),
(2, 'PWD(Persons with Disabilities)', 'those suffering from restrictions or different abilities, as a result of a mental or sensory impairment, to perform an activity in the manner within the range considered normal for a human being, male or female, 0-59 years of age.', '1737115054.jpg', 1, '2025-01-15 18:05:29', '2025-04-08 09:14:13'),
(3, 'Solo Parent', 'a parent who \'is left alone with the responsibility of parenthood due to death, detention, mental incapacity or legal separation with spouse. It also refers to women who became pregnant due to abuse.', '1736964404.jpg', 0, '2025-01-15 18:06:44', '2025-04-08 09:13:59'),
(4, 'AICS(Assistance to Individuals in Crisis)', 'provides medical assistance, burial, transportation, education, food, or financial assistance for other support services or needs of a person or family.', '1737115421.jpg', 0, '2025-01-17 12:03:41', '2025-01-17 12:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7WTTmRqhX5zGsYTEUUUSWE3ZFOoKJ9LPgCLICgaw', 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUk9ZbFpaNVRlTHRIUXU0Z0RCVlhXNDJhcWFBRFVxQ2xwaHRFNE9TciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9mb3JtLzEiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMjtzOjIyOiJzYXZlZF9hcHBsaWNhdGlvbl9kYXRhIjthOjI2OntzOjk6Imxhc3RfbmFtZSI7czoxMDoiSnVhbiBUYW1hZCI7czoxMDoiZmlyc3RfbmFtZSI7czoxMDoiY3Jpc29zdG9tbyI7czoxMToibWlkZGxlX25hbWUiO3M6NjoibW9kZW5hIjtzOjEzOiJkYXRlX29mX2JpcnRoIjtzOjEwOiIyMDE2LTAxLTEyIjtzOjM6ImFnZSI7czoyOiI2MCI7czo1OiJwaG9uZSI7czoxMToiMDk5NDk0MjA2OTkiO3M6NToiZW1haWwiO3M6MTQ6Imp1YW5AZ21haWwuY29tIjtzOjY6ImdlbmRlciI7czo0OiJNYWxlIjtzOjE5OiJob3VzZV9ub19hbmRfc3RyZWV0IjtzOjE4OiJRdWlidXNkYW0gZW9zIG5lbW8iO3M6ODoiYmFyYW5nYXkiO3M6MjoiMjUiO3M6MTI6Im11bmljaXBhbGl0eSI7czoyMDoiTmloaWwgaWxsbyBhdXQgYWRpcGkiO3M6ODoicHJvdmluY2UiO3M6MTk6IlBhcmlhdHVyIEVhIG5vYmlzIHYiO3M6NjoicmVnaW9uIjtzOjIwOiJEZXNlcnVudCBwb3JybyBmYWNpbCI7czoxNDoicGxhY2Vfb2ZfYmlydGgiO3M6MTk6IkNvbW1vZG8gYW1ldCBwbGFjZWEiO3M6MTI6ImNpdmlsX3N0YXR1cyI7czo3OiJNYXJyaWVkIjtzOjIyOiJlZHVjYXRpb25hbF9hdHRhaW5tZW50IjtzOjE5OiJObyBGb3JtYWwgRWR1Y2F0aW9uIjtzOjEwOiJvY2N1cGF0aW9uIjtzOjQyOiJQbGFudCBhbmQgTWFjaGluZSBPcGVyYXRvcnMgYW5kIEFzc2VtYmxlcnMiO3M6MTM6ImFubnVhbF9pbmNvbWUiO3M6MzoiMzA5IjtzOjEyOiJvdGhlcl9za2lsbHMiO3M6MjA6Ik51bGxhIGVuaW0gYXV0IGNvcnBvIjtzOjE1OiJhcHBlYXJhbmNlX2RhdGUiO3M6MTA6IjIwMjUtMDQtMTEiO3M6NDoibmFtZSI7YToxOntpOjA7czoxNDoiVmFuY2UgUmFuZG9scGgiO31zOjEyOiJyZWxhdGlvbnNoaXAiO2E6MTp7aTowO3M6MjA6Ik1pbmltIG9mZmljaWEgc2l0IG5vIjt9czo2OiJhZ2VfZmMiO2E6MTp7aTowO3M6MToiNyI7fXM6MTU6ImNpdmlsX3N0YXR1c19mYyI7YToxOntpOjA7czoxNzoiT3B0aW8gY29uc2VjdGV0dXIiO31zOjEzOiJvY2N1cGF0aW9uX2ZjIjthOjE6e2k6MDtzOjIwOiJOdW1xdWFtIGRvbG9ydW0gZXhlciI7fXM6NjoiaW5jb21lIjthOjE6e2k6MDtzOjM6IjIyNiI7fX19', 1744361975);

-- --------------------------------------------------------

--
-- Table structure for table `sms_logs`
--

CREATE TABLE `sms_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `error_message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_logs`
--

INSERT INTO `sms_logs` (`id`, `phone_number`, `message`, `status`, `error_message`, `created_at`, `updated_at`) VALUES
(1, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Failed', NULL, '2025-01-16 12:23:44', '2025-01-16 12:56:19'),
(2, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Failed', NULL, '2025-01-16 12:23:46', '2025-01-16 12:56:19'),
(3, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Failed', NULL, '2025-01-16 12:44:24', '2025-01-16 12:56:19'),
(4, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Failed', NULL, '2025-01-16 12:44:26', '2025-01-16 12:56:19'),
(5, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Failed', NULL, '2025-01-16 12:47:16', '2025-01-16 12:56:19'),
(6, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Failed', NULL, '2025-01-16 12:47:18', '2025-01-16 12:56:19'),
(7, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Failed', NULL, '2025-01-16 13:33:14', '2025-01-16 13:33:14'),
(8, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Failed', NULL, '2025-01-16 13:33:16', '2025-01-16 13:33:16'),
(9, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Failed', NULL, '2025-01-16 14:11:50', '2025-01-16 14:11:50'),
(10, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-16 14:11:51', '2025-01-17 13:50:54'),
(11, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-16 14:15:15', '2025-01-16 14:15:15'),
(12, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-16 14:15:17', '2025-01-16 14:48:01'),
(13, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-16 14:48:01', '2025-01-16 14:55:48'),
(14, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-16 14:55:48', '2025-01-16 14:55:48'),
(15, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-16 14:57:24', '2025-01-16 14:57:24'),
(16, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-16 14:57:26', '2025-01-16 14:57:26'),
(17, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-16 15:23:37', '2025-01-16 15:23:37'),
(18, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-16 15:23:39', '2025-01-16 15:23:39'),
(19, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-16 16:57:20', '2025-01-16 16:57:20'),
(20, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-16 16:57:23', '2025-01-16 16:57:23'),
(21, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-17 13:15:49', '2025-01-17 13:15:49'),
(22, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-17 13:15:50', '2025-01-17 13:15:50'),
(23, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-17 13:15:52', '2025-01-17 13:15:52'),
(24, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-17 13:15:53', '2025-01-17 13:15:53'),
(25, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-17 13:15:56', '2025-01-17 13:15:56'),
(26, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-17 13:19:31', '2025-01-17 13:19:31'),
(27, '+639268307424', 'HIHI', 'Sent', NULL, '2025-01-17 13:28:59', '2025-01-17 13:28:59'),
(28, '+639268307424', 'HEHEHEHE', 'Sent', NULL, '2025-01-17 13:33:07', '2025-01-17 13:33:07'),
(29, '+639268307424', 'HAHAHH', 'Sent', NULL, '2025-01-17 13:35:56', '2025-01-17 13:35:56'),
(30, '+639064209450', 'HAHAHH', 'Sent', NULL, '2025-01-17 13:35:57', '2025-01-17 13:35:57'),
(31, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-17 13:50:52', '2025-01-17 13:50:52'),
(32, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-17 13:50:54', '2025-01-17 13:50:54'),
(33, '+639563669997', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-19 09:38:11', '2025-01-19 09:38:11'),
(34, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-19 10:03:07', '2025-01-19 10:03:07'),
(35, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-24 03:42:40', '2025-01-24 03:42:40'),
(36, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-24 03:42:43', '2025-01-24 03:42:43'),
(37, '+639064209450', 'wait maderrr', 'Sent', NULL, '2025-01-25 12:18:24', '2025-01-25 12:18:24'),
(38, '+639061573601', 'wait maderrr', 'Sent', NULL, '2025-01-25 12:18:26', '2025-01-25 12:18:26'),
(39, '+639064209450', 'malapit na hooo', 'Sent', NULL, '2025-01-25 12:19:42', '2025-01-25 12:19:42'),
(40, '+639061573601', 'malapit na hooo', 'Sent', NULL, '2025-01-25 12:19:43', '2025-01-25 12:19:43'),
(41, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-26 09:45:22', '2025-01-26 09:45:22'),
(42, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-26 09:45:46', '2025-01-26 09:45:46'),
(43, '+639673701823', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-27 02:15:14', '2025-01-27 02:15:14'),
(44, '+639164321071', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-30 01:56:57', '2025-01-30 01:56:57'),
(45, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-05 06:05:49', '2025-02-05 06:05:49'),
(46, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-05 06:05:50', '2025-02-05 06:05:50'),
(47, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-05 06:06:49', '2025-02-05 06:06:49'),
(48, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-05 06:06:50', '2025-02-05 06:06:50'),
(49, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-05 09:08:16', '2025-02-05 09:08:16'),
(50, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-05 09:08:17', '2025-02-05 09:08:17'),
(51, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-06 06:18:58', '2025-02-06 06:18:58'),
(52, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-06 06:19:00', '2025-02-06 06:19:00'),
(53, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-06 09:09:21', '2025-02-06 09:09:21'),
(54, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-06 09:09:23', '2025-02-06 09:09:23'),
(55, '+1 (597) 704-3473', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 00:55:46', '2025-02-07 00:55:46'),
(56, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 01:04:44', '2025-02-07 01:04:44'),
(57, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 01:06:01', '2025-02-07 01:06:01'),
(58, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 01:09:52', '2025-02-07 01:09:52'),
(59, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 01:13:53', '2025-02-07 01:13:53'),
(60, '+639925730026', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 01:24:18', '2025-02-07 01:24:18'),
(61, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 02:00:36', '2025-02-07 02:00:36'),
(62, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 02:02:46', '2025-02-07 02:02:46'),
(63, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 02:43:29', '2025-02-07 02:43:29'),
(64, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 02:47:05', '2025-02-07 02:47:05'),
(65, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 06:05:10', '2025-02-07 06:05:10'),
(66, '+639064209450', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 07:44:43', '2025-02-07 07:44:43'),
(67, '+639064209450', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 07:44:51', '2025-02-07 07:44:51'),
(68, '+639064209450', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 07:45:02', '2025-02-07 07:45:02'),
(69, '+639064209450', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-02-07 08:45:46', '2025-02-07 08:45:46'),
(70, '+639064209450', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 08, 2025', 'Sent', NULL, '2025-02-08 01:08:36', '2025-02-08 01:08:36'),
(71, '+639064209450', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 08, 2025', 'Sent', NULL, '2025-02-08 01:17:29', '2025-02-08 01:17:29'),
(72, '+639949420699', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 08, 2025', 'Sent', NULL, '2025-02-08 01:30:23', '2025-02-08 01:30:23'),
(73, '+639949420699', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 08, 2025', 'Sent', NULL, '2025-02-08 01:43:52', '2025-02-08 01:43:52'),
(74, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 08, 2025', 'Sent', NULL, '2025-02-08 01:51:49', '2025-02-08 01:51:49'),
(75, '+639064209450', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 08, 2025', 'Sent', NULL, '2025-02-08 02:46:19', '2025-02-08 02:46:19'),
(76, '+1 (267) 953-8984', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 08, 2025', 'Sent', NULL, '2025-02-08 07:51:37', '2025-02-08 07:51:37'),
(77, '+639673701823', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 08, 2025', 'Sent', NULL, '2025-02-08 09:03:15', '2025-02-08 09:03:15'),
(78, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the Test Assistance. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 02:31:31', '2025-02-11 02:31:31'),
(79, '+639268307424', 'Good day, Lab  Chavez! You are eligible for the Test 2 Assistance. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 02:40:56', '2025-02-11 02:40:56'),
(80, '+639268307424', 'Good day, Lab  Chavez! You are eligible for the Test 4. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 02:54:53', '2025-02-11 02:54:53'),
(81, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the Test 4. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 02:54:54', '2025-02-11 02:54:54'),
(82, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the Test 4. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 02:54:54', '2025-02-11 02:54:54'),
(83, '+639673701823', 'Good day, Melberth  C.  Dancil! You are eligible for the Test 4. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 02:54:55', '2025-02-11 02:54:55'),
(84, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the pension. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Medical Certification/Clinical Abstract issued within 3 months (with signature and license number of the attending physician - 1 original and 2 photocopy\n- Statement of Account/Billing Statement(for Billing) - 1 original and 2 photocopy\n- Pharmacy Receipt - 1 original and 2 photocopy\n- Doctor\'s Prescription - 1 original and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 03:05:28', '2025-02-11 03:05:28'),
(85, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the pension. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 03:05:29', '2025-02-11 03:05:29'),
(86, '+639268307424', 'Good day, Lovely  Escano  Chavez! You are eligible for the pension. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 03:05:30', '2025-02-11 03:05:30'),
(87, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the try last. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Medical Certification/Clinical Abstract issued within 3 months (with signature and license number of the attending physician - 1 original and 2 photocopy\n- Statement of Account/Billing Statement(for Billing) - 1 original and 2 photocopy\n- Pharmacy Receipt - 1 original and 2 photocopy\n- Doctor\'s Prescription - 1 original and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 03:09:30', '2025-02-11 03:09:30'),
(88, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the try last. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 03:09:31', '2025-02-11 03:09:31'),
(89, '+639268307424', 'Good day, Lovely  Escano  Chavez! You are eligible for the try last. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-11 03:09:32', '2025-02-11 03:09:32'),
(90, '+1 (342) 714-1374', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 13, 2025', 'Sent', NULL, '2025-02-13 05:17:25', '2025-02-13 05:17:25'),
(91, '+639064209450', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 13, 2025', 'Sent', NULL, '2025-02-13 05:18:05', '2025-02-13 05:18:05'),
(92, '+1 (846) 282-8007', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 13, 2025', 'Sent', NULL, '2025-02-13 05:19:54', '2025-02-13 05:19:54'),
(93, '+639268307424', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 13, 2025', 'Sent', NULL, '2025-02-13 05:23:35', '2025-02-13 05:23:35'),
(94, '+639268307424', 'Good day, Lab  Chavez! You are eligible for the akap. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-13 05:25:20', '2025-02-13 05:25:20'),
(95, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the akap. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-13 05:25:21', '2025-02-13 05:25:21'),
(96, '+639268307424', 'Good day, Lab  Chavez! You are eligible for the akap. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-13 05:29:49', '2025-02-13 05:29:49'),
(97, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the akap. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-13 05:29:51', '2025-02-13 05:29:51'),
(98, '+1 (597) 704-3473', 'Good day, Rachel  Bruce! You are eligible for the akap. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-13 05:29:52', '2025-02-13 05:29:52'),
(99, '+639268307424', 'Good day, Lab  Cha! You are eligible for the akap. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-13 05:29:53', '2025-02-13 05:29:53'),
(100, '+639925730026', 'Good day, Jonas Villote Balongag! You are eligible for the akap. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-13 05:29:54', '2025-02-13 05:29:54'),
(101, '+639064209450', 'Good day, Juuju  Ju! You are eligible for the akap. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-13 05:29:55', '2025-02-13 05:29:55'),
(102, '+1 (653) 195-8177', 'Good day, Belle  Craft! You are eligible for the akap. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-13 05:29:56', '2025-02-13 05:29:56'),
(103, '+639268307424', 'Good day, Lindley Mae  Chavezzz! You are eligible for the akap. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-13 05:29:57', '2025-02-13 05:29:57'),
(104, '+1 (267) 953-8984', 'Good day, Nita  Velazquez! You are eligible for the akap. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-13 05:29:58', '2025-02-13 05:29:58'),
(105, '+639064209450', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 13, 2025', 'Sent', NULL, '2025-02-13 09:21:15', '2025-02-13 09:21:15'),
(106, '+1 (158) 123-7081', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 13, 2025', 'Sent', NULL, '2025-02-13 09:24:33', '2025-02-13 09:24:33'),
(107, '+639064209450', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 13, 2025', 'Sent', NULL, '2025-02-13 09:36:46', '2025-02-13 09:36:46'),
(108, '+639673701823', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 13, 2025', 'Sent', NULL, '2025-02-13 09:42:50', '2025-02-13 09:42:50'),
(109, '+639673701823', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 14, 2025', 'Sent', NULL, '2025-02-14 04:02:09', '2025-02-14 04:02:09'),
(110, '+1 (298) 481-3981', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 16, 2025', 'Sent', NULL, '2025-02-16 08:10:40', '2025-02-16 08:10:40'),
(111, '+639061573601', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 16, 2025', 'Sent', NULL, '2025-02-16 08:10:50', '2025-02-16 08:10:50'),
(112, '+639268307424', 'Good day, Lab  Chavez! You are eligible for the Test 3 Assistance. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:03:28', '2025-02-16 18:03:28'),
(113, '+639268307424', 'Good day, Lab  Cha! You are eligible for the Test 3 Assistance. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:03:30', '2025-02-16 18:03:30'),
(114, '+639925730026', 'Good day, Jonas Villote Balongag! You are eligible for the Test 3 Assistance. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:03:31', '2025-02-16 18:03:31'),
(115, '+639064209450', 'Good day, Juuju  Ju! You are eligible for the Test 3 Assistance. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:03:32', '2025-02-16 18:03:32'),
(116, '+1 (653) 195-8177', 'Good day, Belle  Craft! You are eligible for the Test 3 Assistance. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:03:33', '2025-02-16 18:03:33'),
(117, '+639268307424', 'Good day, Lindley Mae  Chavezzz! You are eligible for the Test 3 Assistance. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:03:35', '2025-02-16 18:03:35'),
(118, '+639268307424', 'Good day, Lab  Chavez! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:38', '2025-02-16 18:05:38'),
(119, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Medical Certification/Clinical Abstract issued within 3 months (with signature and license number of the attending physician - 1 original and 2 photocopy\n- Statement of Account/Billing Statement(for Billing) - 1 original and 2 photocopy\n- Pharmacy Receipt - 1 original and 2 photocopy\n- Doctor\'s Prescription - 1 original and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:40', '2025-02-16 18:05:40'),
(120, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:41', '2025-02-16 18:05:41'),
(121, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:42', '2025-02-16 18:05:42'),
(122, '+1 (597) 704-3473', 'Good day, Rachel  Bruce! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:43', '2025-02-16 18:05:43'),
(123, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:44', '2025-02-16 18:05:44'),
(124, '+639268307424', 'Good day, Lab  Cha! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:46', '2025-02-16 18:05:46'),
(125, '+639925730026', 'Good day, Jonas Villote Balongag! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:47', '2025-02-16 18:05:47'),
(126, '+639268307424', 'Good day, Lablay  Chavezzz! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:48', '2025-02-16 18:05:48'),
(127, '+639268307424', 'Good day, Lovely  Escano  Chavez! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:49', '2025-02-16 18:05:49'),
(128, '+639064209450', 'Good day, admin  jordan! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Fully accomplished Application Form\n- Bureau of Fire Protection Certification\n- Intake/Interview of client to determine one\'s eligibility for assistance\n- Picture of the damaged house - 3 copies\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:50', '2025-02-16 18:05:50'),
(129, '+639064209450', 'Good day, kaye  jordan! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Social Case Study Report - 2 Original Copy\n- Letter Request - 1 original and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:52', '2025-02-16 18:05:52'),
(130, '+639064209450', 'Good day, Juuju  Ju! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:53', '2025-02-16 18:05:53'),
(131, '+1 (846) 282-8007', 'Good day, Kirestin Kamal Byers Mack! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:54', '2025-02-16 18:05:54'),
(132, '+1 (158) 123-7081', 'Good day, Stacy Vernon Russo Morris! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:55', '2025-02-16 18:05:55'),
(133, '+1 (784) 263-1084', 'Good day, Grace Fleur Stout Schroeder! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:57', '2025-02-16 18:05:57'),
(134, '+1 (342) 714-1374', 'Good day, Odessa  Silva! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:05:59', '2025-02-16 18:05:59'),
(135, '+1 (653) 195-8177', 'Good day, Belle  Craft! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:06:00', '2025-02-16 18:06:00'),
(136, '+1 (889) 714-6702', 'Good day, Camille Hiroko Delacruz Savageee! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:06:01', '2025-02-16 18:06:01'),
(137, '+639268307424', 'Good day, Lindley Mae  Chavezzz! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:06:02', '2025-02-16 18:06:02'),
(138, '+1 (267) 953-8984', 'Good day, Nita  Velazquez! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:06:04', '2025-02-16 18:06:04'),
(139, '+1 (751) 663-4462', 'Good day, Hanna  Fitzpatrick! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:06:05', '2025-02-16 18:06:05'),
(140, '+639673701823', 'Good day, Melberth  C.  Dancil! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:06:06', '2025-02-16 18:06:06'),
(141, '+639673701823', 'Good day, Melberth  Dancil! You are eligible for the ayuda. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:06:07', '2025-02-16 18:06:07'),
(142, '+639268307424', 'Good day, Lab  Chavez! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:07:56', '2025-02-16 18:07:56'),
(143, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Medical Certification/Clinical Abstract issued within 3 months (with signature and license number of the attending physician - 1 original and 2 photocopy\n- Statement of Account/Billing Statement(for Billing) - 1 original and 2 photocopy\n- Pharmacy Receipt - 1 original and 2 photocopy\n- Doctor\'s Prescription - 1 original and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:07:57', '2025-02-16 18:07:57'),
(144, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:07:59', '2025-02-16 18:07:59'),
(145, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:00', '2025-02-16 18:08:00'),
(146, '+1 (597) 704-3473', 'Good day, Rachel  Bruce! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:01', '2025-02-16 18:08:01'),
(147, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:03', '2025-02-16 18:08:03'),
(148, '+639268307424', 'Good day, Lab  Cha! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:04', '2025-02-16 18:08:04'),
(149, '+639925730026', 'Good day, Jonas Villote Balongag! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:05', '2025-02-16 18:08:05'),
(150, '+639268307424', 'Good day, Lablay  Chavezzz! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:06', '2025-02-16 18:08:06'),
(151, '+639268307424', 'Good day, Lovely  Escano  Chavez! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:07', '2025-02-16 18:08:07'),
(152, '+639064209450', 'Good day, admin  jordan! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Fully accomplished Application Form\n- Bureau of Fire Protection Certification\n- Intake/Interview of client to determine one\'s eligibility for assistance\n- Picture of the damaged house - 3 copies\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:08', '2025-02-16 18:08:08'),
(153, '+639064209450', 'Good day, kaye  jordan! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Social Case Study Report - 2 Original Copy\n- Letter Request - 1 original and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:10', '2025-02-16 18:08:10'),
(154, '+639064209450', 'Good day, Juuju  Ju! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:11', '2025-02-16 18:08:11'),
(155, '+1 (846) 282-8007', 'Good day, Kirestin Kamal Byers Mack! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:12', '2025-02-16 18:08:12');
INSERT INTO `sms_logs` (`id`, `phone_number`, `message`, `status`, `error_message`, `created_at`, `updated_at`) VALUES
(156, '+1 (158) 123-7081', 'Good day, Stacy Vernon Russo Morris! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:13', '2025-02-16 18:08:13'),
(157, '+1 (784) 263-1084', 'Good day, Grace Fleur Stout Schroeder! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:14', '2025-02-16 18:08:14'),
(158, '+1 (342) 714-1374', 'Good day, Odessa  Silva! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:15', '2025-02-16 18:08:15'),
(159, '+1 (653) 195-8177', 'Good day, Belle  Craft! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:17', '2025-02-16 18:08:17'),
(160, '+1 (889) 714-6702', 'Good day, Camille Hiroko Delacruz Savageee! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:18', '2025-02-16 18:08:18'),
(161, '+639268307424', 'Good day, Lindley Mae  Chavezzz! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:19', '2025-02-16 18:08:19'),
(162, '+1 (267) 953-8984', 'Good day, Nita  Velazquez! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:21', '2025-02-16 18:08:21'),
(163, '+1 (751) 663-4462', 'Good day, Hanna  Fitzpatrick! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:22', '2025-02-16 18:08:22'),
(164, '+639673701823', 'Good day, Melberth  C.  Dancil! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:23', '2025-02-16 18:08:23'),
(165, '+639673701823', 'Good day, Melberth  Dancil! You are eligible for the para sa lahat. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-16 18:08:24', '2025-02-16 18:08:24'),
(166, '+1 (298) 481-3981', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 17, 2025', 'Sent', NULL, '2025-02-17 04:59:48', '2025-02-17 04:59:48'),
(167, '+1 (298) 481-3981', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 17, 2025', 'Sent', NULL, '2025-02-17 04:59:50', '2025-02-17 04:59:50'),
(168, '+639925730026', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 17, 2025', 'Sent', NULL, '2025-02-17 06:51:47', '2025-02-17 06:51:47'),
(169, '+639925730026', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 17, 2025', 'Sent', NULL, '2025-02-17 06:52:09', '2025-02-17 06:52:09'),
(170, '+639925730026', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 17, 2025', 'Sent', NULL, '2025-02-17 07:52:40', '2025-02-17 07:52:40'),
(171, '+639164321071', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 17, 2025', 'Sent', NULL, '2025-02-17 09:31:38', '2025-02-17 09:31:38'),
(172, '+639268307424', 'Good day, Lab  Chavez! You are eligible for the Bag o. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 03:36:48', '2025-02-18 03:36:48'),
(173, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the Bag o. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Medical Certification/Clinical Abstract issued within 3 months (with signature and license number of the attending physician - 1 original and 2 photocopy\n- Statement of Account/Billing Statement(for Billing) - 1 original and 2 photocopy\n- Pharmacy Receipt - 1 original and 2 photocopy\n- Doctor\'s Prescription - 1 original and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 03:36:49', '2025-02-18 03:36:49'),
(174, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the Bag o. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 03:36:49', '2025-02-18 03:36:49'),
(175, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the Bag o. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 03:36:50', '2025-02-18 03:36:50'),
(176, '+1 (597) 704-3473', 'Good day, Rachel  Bruce! You are eligible for the Bag o. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 03:36:51', '2025-02-18 03:36:51'),
(177, '+639268307424', 'Good day, Lab  Chavez! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 03:37:28', '2025-02-18 03:37:28'),
(178, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Medical Certification/Clinical Abstract issued within 3 months (with signature and license number of the attending physician - 1 original and 2 photocopy\n- Statement of Account/Billing Statement(for Billing) - 1 original and 2 photocopy\n- Pharmacy Receipt - 1 original and 2 photocopy\n- Doctor\'s Prescription - 1 original and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 03:37:28', '2025-02-18 03:37:28'),
(179, '+639164321071', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 18, 2025', 'Sent', NULL, '2025-02-18 04:23:41', '2025-02-18 04:23:41'),
(180, '+639268307424', 'Good day, Lablay  Chavezzz! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 08:44:42', '2025-02-18 08:44:42'),
(181, '+639164321071', 'Good day, beth    Sebios! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Intake/Interview of clients suffering from starvation to determine eligibility for assistance\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 08:44:43', '2025-02-18 08:44:43'),
(182, '+639064209450', 'Good day, kaye  jordan! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Social Case Study Report - 2 Original Copy\n- Letter Request - 1 original and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 08:46:01', '2025-02-18 08:46:01'),
(183, '+1 (267) 953-8984', 'Good day, Nita  Velazquez! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 08:46:02', '2025-02-18 08:46:02'),
(184, '+639064209450', 'Good day, kaye  jordan! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Social Case Study Report - 2 Original Copy\n- Letter Request - 1 original and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 08:58:46', '2025-02-18 08:58:46'),
(185, '+1 (267) 953-8984', 'Good day, Nita  Velazquez! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 08:58:48', '2025-02-18 08:58:48'),
(186, '+639268307424', 'Good day, Lablay  Chavezzz! You are eligible for the keta. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 09:24:26', '2025-02-18 09:24:26'),
(187, '+639164321071', 'Good day, beth    Sebios! You are eligible for the keta. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Intake/Interview of clients suffering from starvation to determine eligibility for assistance\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-18 09:24:27', '2025-02-18 09:24:27'),
(188, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:28', '2025-02-19 00:49:28'),
(189, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:29', '2025-02-19 00:49:29'),
(190, '+1 (597) 704-3473', 'Good day, Rachel  Bruce! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:31', '2025-02-19 00:49:31'),
(191, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:32', '2025-02-19 00:49:32'),
(192, '+639268307424', 'Good day, Lab  Cha! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:34', '2025-02-19 00:49:34'),
(193, '+639925730026', 'Good day, Jonas Villote Balongag! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:35', '2025-02-19 00:49:35'),
(194, '+639268307424', 'Good day, Lablay  Chavezzz! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:37', '2025-02-19 00:49:37'),
(195, '+639268307424', 'Good day, Lovely  Escano  Chavez! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:38', '2025-02-19 00:49:38'),
(196, '+639064209450', 'Good day, Juuju  Ju! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:39', '2025-02-19 00:49:39'),
(197, '+1 (846) 282-8007', 'Good day, Kirestin Kamal Byers Mack! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:41', '2025-02-19 00:49:41'),
(198, '+1 (158) 123-7081', 'Good day, Stacy Vernon Russo Morris! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:42', '2025-02-19 00:49:42'),
(199, '+1 (784) 263-1084', 'Good day, Grace Fleur Stout Schroeder! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:44', '2025-02-19 00:49:44'),
(200, '+1 (342) 714-1374', 'Good day, Odessa  Silva! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:45', '2025-02-19 00:49:45'),
(201, '+1 (653) 195-8177', 'Good day, Belle  Craft! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:47', '2025-02-19 00:49:47'),
(202, '+1 (889) 714-6702', 'Good day, Camille Hiroko Delacruz Savageee! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:48', '2025-02-19 00:49:48'),
(203, '+639268307424', 'Good day, Lindley Mae  Chavezzz! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:49', '2025-02-19 00:49:49'),
(204, '+1 (267) 953-8984', 'Good day, Nita  Velazquez! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:51', '2025-02-19 00:49:51'),
(205, '+1 (751) 663-4462', 'Good day, Hanna  Fitzpatrick! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:53', '2025-02-19 00:49:53'),
(206, '+639673701823', 'Good day, Melberth  C.  Dancil! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:54', '2025-02-19 00:49:54'),
(207, '+639673701823', 'Good day, Melberth  Dancil! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:57', '2025-02-19 00:49:57'),
(208, '+639925730026', 'Good day, Raja  Barrett  Deleon! You are eligible for the try. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 00:49:58', '2025-02-19 00:49:58'),
(209, '+639268307424', 'Good day, Brooke Rajah Berg Flores! You are eligible for the try assistance 2. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 04:21:50', '2025-02-19 04:21:50'),
(210, '+1 (583) 322-6582', 'Good day, Shelley Uta Bird Jones! You are eligible for the try assistance 2. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 04:21:51', '2025-02-19 04:21:51'),
(211, '+1 (625) 587-8256', 'Good day, Stone  Carpenter! You are eligible for the try assistance 2. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 04:21:52', '2025-02-19 04:21:52'),
(212, '+1 (432) 233-9296', 'Good day, Leo Shea Carroll Dyer! You are eligible for the try assistance 2. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 04:21:54', '2025-02-19 04:21:54'),
(213, '+1 (276) 609-8506', 'Good day, Isabelle Gage Robbins England! You are eligible for the try assistance 2. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 04:21:55', '2025-02-19 04:21:55'),
(214, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 19, 2025', 'Sent', NULL, '2025-02-19 04:29:13', '2025-02-19 04:29:13'),
(215, '+639268307424', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 19, 2025', 'Sent', NULL, '2025-02-19 05:47:11', '2025-02-19 05:47:11'),
(216, '+639268307424', 'Good day, joven  torejas! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 05:51:56', '2025-02-19 05:51:56'),
(217, '+639557153573', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 19, 2025', 'Sent', NULL, '2025-02-19 07:36:14', '2025-02-19 07:36:14'),
(218, '+639557153573', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 19, 2025', 'Sent', NULL, '2025-02-19 07:52:32', '2025-02-19 07:52:32'),
(219, '+639557153573', 'Your request has been approved. Please proceed to the MSWD office for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 19, 2025', 'Sent', NULL, '2025-02-19 07:56:00', '2025-02-19 07:56:00'),
(220, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the FRANCO SCHOLAR. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 08:01:31', '2025-02-19 08:01:31'),
(221, '+639268307424', 'Good day, Lablay  Chavezzz! You are eligible for the FRANCO SCHOLAR. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 08:01:32', '2025-02-19 08:01:32'),
(222, '+1 (784) 263-1084', 'Good day, Grace Fleur Stout Schroeder! You are eligible for the FRANCO SCHOLAR. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 08:01:33', '2025-02-19 08:01:33'),
(223, '+1 (889) 714-6702', 'Good day, Camille Hiroko Delacruz Savageee! You are eligible for the FRANCO SCHOLAR. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 08:01:35', '2025-02-19 08:01:35'),
(224, '+1 (751) 663-4462', 'Good day, Hanna  Fitzpatrick! You are eligible for the FRANCO SCHOLAR. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 08:01:36', '2025-02-19 08:01:36'),
(225, '+639673701823', 'Good day, Melberth  C.  Dancil! You are eligible for the FRANCO SCHOLAR. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 08:01:38', '2025-02-19 08:01:38'),
(226, '+639268307424', 'Good day, Brooke Rajah Berg Flores! You are eligible for the FRANCO SCHOLAR. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 08:01:39', '2025-02-19 08:01:39'),
(227, '+1 (893) 972-9896', 'Good day, Yvonne Remedios Quinn Shepherd! You are eligible for the FRANCO SCHOLAR. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 08:01:40', '2025-02-19 08:01:40'),
(228, '+1 (432) 233-9296', 'Good day, Leo Shea Carroll Dyer! You are eligible for the FRANCO SCHOLAR. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 08:01:41', '2025-02-19 08:01:41'),
(229, '+639557153573', 'Good day, Gerry  1111! You are eligible for the FRANCO SCHOLAR. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-02-19 08:01:43', '2025-02-19 08:01:43'),
(230, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nApril 09, 2025', 'Sent', NULL, '2025-04-09 06:46:13', '2025-04-09 06:46:13'),
(231, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nApril 09, 2025', 'Sent', NULL, '2025-04-09 06:46:15', '2025-04-09 06:46:15'),
(232, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the test 2. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:08:28', '2025-04-10 05:08:28'),
(233, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the test 2. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:08:29', '2025-04-10 05:08:29'),
(234, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the try assistance. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:09:24', '2025-04-10 05:09:24'),
(235, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the try assistance. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:09:25', '2025-04-10 05:09:25'),
(236, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:30', '2025-04-10 05:15:30'),
(237, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:31', '2025-04-10 05:15:31'),
(238, '+1 (597) 704-3473', 'Good day, Rachel  Bruce! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:32', '2025-04-10 05:15:32'),
(239, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:33', '2025-04-10 05:15:33'),
(240, '+639268307424', 'Good day, Lab  Cha! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:34', '2025-04-10 05:15:34'),
(241, '+639925730026', 'Good day, Jonas Villote Balongag! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:35', '2025-04-10 05:15:35'),
(242, '+639268307424', 'Good day, Lablay  Chavezzz! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:36', '2025-04-10 05:15:36'),
(243, '+639268307424', 'Good day, Lovely  Escano  Chavez! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:37', '2025-04-10 05:15:37'),
(244, '+639064209450', 'Good day, Juuju  Ju! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:38', '2025-04-10 05:15:38'),
(245, '+1 (846) 282-8007', 'Good day, Kirestin Kamal Byers Mack! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:38', '2025-04-10 05:15:38'),
(246, '+1 (158) 123-7081', 'Good day, Stacy Vernon Russo Morris! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:39', '2025-04-10 05:15:39'),
(247, '+1 (784) 263-1084', 'Good day, Grace Fleur Stout Schroeder! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:40', '2025-04-10 05:15:40'),
(248, '+1 (342) 714-1374', 'Good day, Odessa  Silva! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:41', '2025-04-10 05:15:41'),
(249, '+1 (653) 195-8177', 'Good day, Belle  Craft! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:42', '2025-04-10 05:15:42'),
(250, '+1 (889) 714-6702', 'Good day, Camille Hiroko Delacruz Savageee! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:43', '2025-04-10 05:15:43'),
(251, '+639268307424', 'Good day, Lindley Mae  Chavezzz! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:44', '2025-04-10 05:15:44'),
(252, '+1 (267) 953-8984', 'Good day, Nita  Velazquez! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:44', '2025-04-10 05:15:44'),
(253, '+1 (751) 663-4462', 'Good day, Hanna  Fitzpatrick! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:46', '2025-04-10 05:15:46'),
(254, '+639673701823', 'Good day, Melberth  C.  Dancil! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:47', '2025-04-10 05:15:47'),
(255, '+639673701823', 'Good day, Melberth  Dancil! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:49', '2025-04-10 05:15:49'),
(256, '+639268307424', 'Good day, Brooke Rajah Berg Flores! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:50', '2025-04-10 05:15:50'),
(257, '+1 (893) 972-9896', 'Good day, Yvonne Remedios Quinn Shepherd! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:51', '2025-04-10 05:15:51');
INSERT INTO `sms_logs` (`id`, `phone_number`, `message`, `status`, `error_message`, `created_at`, `updated_at`) VALUES
(258, '+1 (583) 322-6582', 'Good day, Shelley Uta Bird Jones! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:52', '2025-04-10 05:15:52'),
(259, '+1 (625) 587-8256', 'Good day, Stone  Carpenter! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:53', '2025-04-10 05:15:53'),
(260, '+1 (432) 233-9296', 'Good day, Leo Shea Carroll Dyer! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:54', '2025-04-10 05:15:54'),
(261, '+1 (276) 609-8506', 'Good day, Isabelle Gage Robbins England! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:54', '2025-04-10 05:15:54'),
(262, '+639268307424', 'Good day, joven  torejas! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:56', '2025-04-10 05:15:56'),
(263, '+639557153573', 'Good day, Gerry  1111! You are eligible for the test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:15:57', '2025-04-10 05:15:57'),
(264, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:46', '2025-04-10 05:16:46'),
(265, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:47', '2025-04-10 05:16:47'),
(266, '+1 (597) 704-3473', 'Good day, Rachel  Bruce! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:48', '2025-04-10 05:16:48'),
(267, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:49', '2025-04-10 05:16:49'),
(268, '+639268307424', 'Good day, Lab  Cha! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:50', '2025-04-10 05:16:50'),
(269, '+639925730026', 'Good day, Jonas Villote Balongag! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:51', '2025-04-10 05:16:51'),
(270, '+639268307424', 'Good day, Lablay  Chavezzz! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:52', '2025-04-10 05:16:52'),
(271, '+639268307424', 'Good day, Lovely  Escano  Chavez! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:53', '2025-04-10 05:16:53'),
(272, '+639064209450', 'Good day, Juuju  Ju! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:55', '2025-04-10 05:16:55'),
(273, '+1 (846) 282-8007', 'Good day, Kirestin Kamal Byers Mack! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:55', '2025-04-10 05:16:55'),
(274, '+1 (158) 123-7081', 'Good day, Stacy Vernon Russo Morris! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:56', '2025-04-10 05:16:56'),
(275, '+1 (784) 263-1084', 'Good day, Grace Fleur Stout Schroeder! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:57', '2025-04-10 05:16:57'),
(276, '+1 (342) 714-1374', 'Good day, Odessa  Silva! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:58', '2025-04-10 05:16:58'),
(277, '+1 (653) 195-8177', 'Good day, Belle  Craft! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:58', '2025-04-10 05:16:58'),
(278, '+1 (889) 714-6702', 'Good day, Camille Hiroko Delacruz Savageee! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:16:59', '2025-04-10 05:16:59'),
(279, '+1 (751) 663-4462', 'Good day, Hanna  Fitzpatrick! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:17:00', '2025-04-10 05:17:00'),
(280, '+639673701823', 'Good day, Melberth  C.  Dancil! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:17:01', '2025-04-10 05:17:01'),
(281, '+639268307424', 'Good day, Brooke Rajah Berg Flores! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:17:02', '2025-04-10 05:17:02'),
(282, '+1 (893) 972-9896', 'Good day, Yvonne Remedios Quinn Shepherd! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:17:03', '2025-04-10 05:17:03'),
(283, '+1 (432) 233-9296', 'Good day, Leo Shea Carroll Dyer! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:17:04', '2025-04-10 05:17:04'),
(284, '+639268307424', 'Good day, joven  torejas! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:17:05', '2025-04-10 05:17:05'),
(285, '+639557153573', 'Good day, Gerry  1111! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:17:06', '2025-04-10 05:17:06'),
(286, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:19:19', '2025-04-10 05:19:19'),
(287, '+1 (597) 704-3473', 'Good day, Rachel  Bruce! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:19:20', '2025-04-10 05:19:20'),
(288, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:19:21', '2025-04-10 05:19:21'),
(289, '+639268307424', 'Good day, Lab  Cha! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:19:22', '2025-04-10 05:19:22'),
(290, '+639925730026', 'Good day, Jonas Villote Balongag! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:19:23', '2025-04-10 05:19:23'),
(291, '+639268307424', 'Good day, Lovely  Escano  Chavez! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:19:24', '2025-04-10 05:19:24'),
(292, '+639064209450', 'Good day, Juuju  Ju! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:19:25', '2025-04-10 05:19:25'),
(293, '+1 (846) 282-8007', 'Good day, Kirestin Kamal Byers Mack! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:19:25', '2025-04-10 05:19:25'),
(294, '+1 (158) 123-7081', 'Good day, Stacy Vernon Russo Morris! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:19:26', '2025-04-10 05:19:26'),
(295, '+1 (342) 714-1374', 'Good day, Odessa  Silva! You are eligible for the Test. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:19:27', '2025-04-10 05:19:27'),
(296, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:23', '2025-04-10 05:20:23'),
(297, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:24', '2025-04-10 05:20:24'),
(298, '+1 (597) 704-3473', 'Good day, Rachel  Bruce! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:25', '2025-04-10 05:20:25'),
(299, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:26', '2025-04-10 05:20:26'),
(300, '+639268307424', 'Good day, Lab  Cha! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:27', '2025-04-10 05:20:27'),
(301, '+639925730026', 'Good day, Jonas Villote Balongag! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:29', '2025-04-10 05:20:29'),
(302, '+639268307424', 'Good day, Lablay  Chavezzz! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:29', '2025-04-10 05:20:29'),
(303, '+639268307424', 'Good day, Lovely  Escano  Chavez! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:30', '2025-04-10 05:20:30'),
(304, '+639064209450', 'Good day, Juuju  Ju! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:31', '2025-04-10 05:20:31'),
(305, '+1 (846) 282-8007', 'Good day, Kirestin Kamal Byers Mack! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:32', '2025-04-10 05:20:32'),
(306, '+1 (158) 123-7081', 'Good day, Stacy Vernon Russo Morris! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:33', '2025-04-10 05:20:33'),
(307, '+1 (784) 263-1084', 'Good day, Grace Fleur Stout Schroeder! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:34', '2025-04-10 05:20:34'),
(308, '+1 (342) 714-1374', 'Good day, Odessa  Silva! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:34', '2025-04-10 05:20:34'),
(309, '+1 (653) 195-8177', 'Good day, Belle  Craft! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:35', '2025-04-10 05:20:35'),
(310, '+1 (889) 714-6702', 'Good day, Camille Hiroko Delacruz Savageee! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:36', '2025-04-10 05:20:36'),
(311, '+639268307424', 'Good day, Lindley Mae  Chavezzz! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:37', '2025-04-10 05:20:37'),
(312, '+1 (267) 953-8984', 'Good day, Nita  Velazquez! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:38', '2025-04-10 05:20:38'),
(313, '+1 (751) 663-4462', 'Good day, Hanna  Fitzpatrick! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:39', '2025-04-10 05:20:39'),
(314, '+639673701823', 'Good day, Melberth  C.  Dancil! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:40', '2025-04-10 05:20:40'),
(315, '+639673701823', 'Good day, Melberth  Dancil! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:41', '2025-04-10 05:20:41'),
(316, '+639268307424', 'Good day, Brooke Rajah Berg Flores! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:42', '2025-04-10 05:20:42'),
(317, '+1 (893) 972-9896', 'Good day, Yvonne Remedios Quinn Shepherd! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:43', '2025-04-10 05:20:43'),
(318, '+1 (583) 322-6582', 'Good day, Shelley Uta Bird Jones! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:44', '2025-04-10 05:20:44'),
(319, '+1 (625) 587-8256', 'Good day, Stone  Carpenter! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:45', '2025-04-10 05:20:45'),
(320, '+1 (432) 233-9296', 'Good day, Leo Shea Carroll Dyer! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:45', '2025-04-10 05:20:45'),
(321, '+1 (276) 609-8506', 'Good day, Isabelle Gage Robbins England! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:46', '2025-04-10 05:20:46'),
(322, '+639268307424', 'Good day, joven  torejas! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:47', '2025-04-10 05:20:47'),
(323, '+639557153573', 'Good day, Gerry  1111! You are eligible for the sample. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:20:47', '2025-04-10 05:20:47'),
(324, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:10', '2025-04-10 05:22:10'),
(325, '+639949420699', 'Good day, Lab  Chavez! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:11', '2025-04-10 05:22:11'),
(326, '+1 (597) 704-3473', 'Good day, Rachel  Bruce! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:12', '2025-04-10 05:22:12'),
(327, '+639949420699', 'Good day, Lab    Chavez! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:13', '2025-04-10 05:22:13'),
(328, '+639268307424', 'Good day, Lab  Cha! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:14', '2025-04-10 05:22:14'),
(329, '+639925730026', 'Good day, Jonas Villote Balongag! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:15', '2025-04-10 05:22:15'),
(330, '+639268307424', 'Good day, Lablay  Chavezzz! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:16', '2025-04-10 05:22:16'),
(331, '+639268307424', 'Good day, Lovely  Escano  Chavez! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Barangay Certification/Certificate of Indigency - 1 original and 2 photocopy\n- Registered Death Certificate - 1 original and 2 photocopy\n- Funeral Contract - 1 original and 2 photocopy\n- Senior Citizen Certification (deceased senior citizen) - 1 original and 2 photocopy\n- Senior Citizen\'s Id (deceased senior citizen) - Certified True Copy and 2 photocopy\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:17', '2025-04-10 05:22:17'),
(332, '+639064209450', 'Good day, Juuju  Ju! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:17', '2025-04-10 05:22:17'),
(333, '+1 (846) 282-8007', 'Good day, Kirestin Kamal Byers Mack! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:18', '2025-04-10 05:22:18'),
(334, '+1 (158) 123-7081', 'Good day, Stacy Vernon Russo Morris! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:19', '2025-04-10 05:22:19'),
(335, '+1 (784) 263-1084', 'Good day, Grace Fleur Stout Schroeder! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:20', '2025-04-10 05:22:20'),
(336, '+1 (342) 714-1374', 'Good day, Odessa  Silva! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:20', '2025-04-10 05:22:20'),
(337, '+1 (653) 195-8177', 'Good day, Belle  Craft! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:21', '2025-04-10 05:22:21'),
(338, '+1 (889) 714-6702', 'Good day, Camille Hiroko Delacruz Savageee! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:22', '2025-04-10 05:22:22'),
(339, '+639268307424', 'Good day, Lindley Mae  Chavezzz! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:23', '2025-04-10 05:22:23'),
(340, '+1 (267) 953-8984', 'Good day, Nita  Velazquez! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:23', '2025-04-10 05:22:23'),
(341, '+1 (751) 663-4462', 'Good day, Hanna  Fitzpatrick! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:25', '2025-04-10 05:22:25'),
(342, '+639673701823', 'Good day, Melberth  C.  Dancil! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:25', '2025-04-10 05:22:25'),
(343, '+639673701823', 'Good day, Melberth  Dancil! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:26', '2025-04-10 05:22:26'),
(344, '+639268307424', 'Good day, Brooke Rajah Berg Flores! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:27', '2025-04-10 05:22:27'),
(345, '+1 (893) 972-9896', 'Good day, Yvonne Remedios Quinn Shepherd! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:27', '2025-04-10 05:22:27'),
(346, '+1 (583) 322-6582', 'Good day, Shelley Uta Bird Jones! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Valid ID\n- Accomplished Certification and Authorization\n- Certificate of Existence\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:28', '2025-04-10 05:22:28'),
(347, '+1 (625) 587-8256', 'Good day, Stone  Carpenter! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:29', '2025-04-10 05:22:29'),
(348, '+1 (432) 233-9296', 'Good day, Leo Shea Carroll Dyer! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:31', '2025-04-10 05:22:31'),
(349, '+1 (276) 609-8506', 'Good day, Isabelle Gage Robbins England! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- No specific requirements. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:32', '2025-04-10 05:22:32'),
(350, '+639268307424', 'Good day, joven  torejas! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Updated Barangay Certificate\n- 1x1 ID Picture\n- Birth Certificate / Voter\'s Certification\n- Medical Certificate\n- Whole Body picture of PWD applicant\n- Fully accomplished Application Form. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:33', '2025-04-10 05:22:33'),
(351, '+639557153573', 'Good day, Gerry  1111! You are eligible for the Test new 1. Kindly visit MSWD OFFICE of Abuyog to claim/avail the assistance. Please bring:\n- Certificate of No Marriage (CENOMAR)\n- 2×2 Photo\n- Fully accomplished Application Form\n- PSA Birth Certificate/s\n- Spouse’s Death Certificate\n- Certificate of Annulment/Nullity of Marriage\n- Income Tax Return (ITR) or Document Showing Income Level\n- Barangay Certificate\n- Proof of Financial Status\n- Supporting Documents/Certificates. For inquiries, contact us at 09367639686. Thank you!', 'Sent', NULL, '2025-04-10 05:22:34', '2025-04-10 05:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `solo_parent_details`
--

CREATE TABLE `solo_parent_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_agency` varchar(255) DEFAULT NULL,
  `four_ps_beneficiary` varchar(255) DEFAULT NULL,
  `indigenous_person` varchar(255) DEFAULT NULL,
  `classification_circumtances` varchar(255) DEFAULT NULL,
  `needs_problems` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solo_parent_details`
--

INSERT INTO `solo_parent_details` (`id`, `beneficiary_id`, `company_agency`, `four_ps_beneficiary`, `indigenous_person`, `classification_circumtances`, `needs_problems`, `created_at`, `updated_at`) VALUES
(1, 17, 'Garrison Shepard Traders', 'no', 'yes', 'Voluptatem qui maxim', 'Nihil in officiis ve', '2025-02-01 02:55:00', '2025-02-01 02:55:00'),
(2, 18, 'Duran Harrell Inc', 'yes', 'yes', 'Ipsum ipsa enim ve', 'Voluptas suscipit as', '2025-02-01 02:56:39', '2025-02-01 02:56:39'),
(4, 9, 'Cummings and Tran Trading', 'no', 'no', 'Sed do rerum accusan', 'Velit tenetur odio', '2025-02-01 04:13:53', '2025-02-02 12:48:04'),
(5, 29, 'Schneider and Cox Associates', 'yes', 'no', 'Amet dolore reprehe', 'Qui id quo quo et eu', '2025-02-02 05:04:12', '2025-02-02 05:04:12'),
(6, 33, 'Bowers Blair Traders', 'no', 'yes', 'Suscipit impedit qu', 'Excepteur sapiente a', '2025-02-02 05:19:38', '2025-02-02 05:19:38'),
(7, 34, 'Roy and Mcdonald Inc', 'no', 'no', 'Magna mollitia neces', 'Consequatur Irure m', '2025-02-02 05:19:45', '2025-02-02 05:19:45'),
(8, 42, 'Salazar and Heath Associates', 'yes', 'no', 'Et consequatur Aliq', 'Blanditiis consectet', '2025-02-02 05:46:13', '2025-02-02 05:46:13'),
(9, 43, 'Herring Peck Associates', 'no', 'no', 'Consequuntur exercit', 'Adipisci eaque dolor', '2025-02-02 05:46:42', '2025-02-02 05:46:42'),
(10, 50, 'Phillips and Clarke Plc', 'no', 'no', 'Officiis reiciendis', 'Velit autem dolore e', '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(11, 58, 'Olson and Luna Co', 'Yes', 'Yes', 'Voluptate libero cum', 'Officia eum exceptur', '2025-02-06 02:30:02', '2025-02-06 02:30:02'),
(12, 68, 'Wa', 'no', 'yes', 'Laborum dolore qui e', 'Laborum dolore qui e Laborum dolore qui e', '2025-02-07 01:33:31', '2025-02-07 01:33:31'),
(13, 77, 'Barnes and Barker Associates', 'no', 'yes', 'Eveniet irure in la', 'Dicta aut consequat', '2025-02-08 03:42:36', '2025-02-08 03:42:36'),
(14, 80, 'Hays Marks Plc', 'no', 'no', 'Aperiam est commodi', 'Deleniti reiciendis', '2025-02-08 03:54:18', '2025-02-08 03:54:18'),
(15, 83, 'Summers and Richards Associates', 'yes', 'yes', 'Sint corporis eu ut', 'Aliqua Quos ipsum', '2025-02-08 04:19:59', '2025-02-08 04:19:59'),
(18, 87, 'Malone Howell Trading', 'No', 'Yes', 'Sed non sint aut par', 'Architecto in vel do', '2025-02-08 09:01:49', '2025-02-08 09:01:49'),
(19, 89, 'Reyes Moran Traders', 'yes', 'yes', 'Et cupidatat amet s', 'Error vero qui est', '2025-02-14 01:56:17', '2025-02-16 08:24:47'),
(20, 93, 'N/A', 'Yes', 'Yes', 'he passed away', 'financial support for education', '2025-02-17 05:33:59', '2025-02-17 05:33:59'),
(21, 96, 'Patrick and Ratliff Plc', 'no', 'no', 'Quis ad dolorem temp', 'Enim quae distinctio', '2025-02-17 06:11:26', '2025-02-19 04:29:38'),
(25, 123, 'Mullen and Cox Associates', 'no', 'no', 'Et id ut sed quam eu', 'Excepturi reprehende', '2025-02-19 04:18:10', '2025-02-19 04:18:10'),
(26, 125, 'Wa', 'Yes', 'Yes', 'spouse died', 'no kwarta', '2025-02-19 05:41:14', '2025-02-19 05:41:14'),
(33, 140, 'Washington and Dyer Associates', 'Yes', 'No', 'Iusto nemo quidem ma', 'Dolor quas ducimus', '2025-04-09 06:44:20', '2025-04-09 06:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `barangay_id` bigint(20) UNSIGNED DEFAULT NULL,
  `usertype` enum('beneficiary','employee','operator','admin') NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `has_minor_child` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `middle_name`, `suffix`, `email`, `phone`, `barangay_id`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `date_of_birth`, `age`, `gender`, `has_minor_child`) VALUES
(1, 'chavez', 'lovely rose', 'escano', NULL, 'rlovie0403@gmail.com', '09268307424', 3, 'beneficiary', '2024-12-31 17:50:02', '$2y$12$L1k.3TNVvkzajntCnXFwPufl3XoNdc/3dOityspQ9OJBBSXzAHM8e', NULL, NULL, NULL, 'F8dvubDWCjFpqEZXhzxszE8KKSfuFe6xzgd84MgUzX2d6xZSDLZumJnM8rRT', NULL, NULL, '2025-01-15 17:49:22', '2025-01-15 17:49:22', '2001-01-18', '4', 'Female', 0),
(2, 'jordan', 'admin', NULL, NULL, 'admin@gmail.com', '09064209450', 5, 'admin', '2024-12-31 18:01:21', '$2y$12$C2zD5TrJ9u8xiguSH8sZX.QODGppqcu9D7yk54fxGwHQIC2K2PEVa', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 17:59:23', '2025-01-15 17:59:23', '2010-01-09', '60', 'Rather not to say', 0),
(3, 'tocson', 'employee', NULL, NULL, 'employee@gmail.com', '', 2, 'employee', '2025-01-14 03:15:28', '$2y$12$C2zD5TrJ9u8xiguSH8sZX.QODGppqcu9D7yk54fxGwHQIC2K2PEVa', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-16 03:15:13', '2025-01-16 03:15:13', '2001-01-18', '2', 'Female', 0),
(4, 'operator', 'mswd', NULL, NULL, 'operator@gmail.com', '09268307424', 12, 'operator', '2025-01-16 11:09:36', '$2y$12$C2zD5TrJ9u8xiguSH8sZX.QODGppqcu9D7yk54fxGwHQIC2K2PEVa', NULL, NULL, NULL, 'Hh9b5JtoRMZ0wg6PVF4hzjw8yuoJ9fQhEj0741NLxMrdtcULoD3xn07nEHSh', NULL, NULL, '2025-01-17 11:08:58', '2025-01-17 11:08:58', '2010-01-13', '5', 'Male', 0),
(5, 'BALONGAG', 'djfiqTest', NULL, NULL, 'jm@gmail.com', '758668', 18, 'operator', NULL, '$2y$12$bIpOZTxFNhrfukTXEEEKC.6HPaFM1xOZDc3BGaNKNq6r1QJo/aIJ.', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:22:34', '2025-02-18 03:19:33', '2016-01-13', '76', 'Female', 0),
(6, 'BALONGAG', 'djfiq', NULL, NULL, 'try@gmail.com', '758668', 2, 'beneficiary', NULL, '$2y$12$ctPLenj1YeamPRNbFmlY7.SRsxJ3cCZXhLm6Wv.BqY3kPRJfS3X2e', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:23:46', '2025-02-18 03:16:17', '2001-01-18', '5', 'Rather not to say', 0),
(7, 'BALONGAG', 'JONAS Miguel', 'vill', NULL, 'tryyy@gmail.com', '09054524106', 5, 'beneficiary', '2025-01-09 08:25:58', '$2y$12$zPLaYS03A8WZIKLKni5DFeH1ape75pYSPl5v2T7HyNDgpk/xHQTny', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:25:12', '2025-01-19 08:25:12', '2010-01-17', '3', 'Female', 0),
(8, 'marquez', 'faye', 'l', NULL, 'faye@gmail.com', '09659247108', 11, 'beneficiary', NULL, '$2y$12$i0g6ostPBH5KZPSI.PGnZeuXbicMfLsu5BbuWjUfnDgNmXfeWNSWy', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:31:53', '2025-01-19 08:31:53', '2001-01-18', '4', 'Rather not to say', 0),
(9, 'marquez', 'faye', 'l', NULL, 'fayeangelamarquez@gmail.com', '09659247108', 12, 'beneficiary', '2025-01-10 08:36:28', '$2y$12$MvMwxVktMZNFA2N3X8wEae7U0FhKBC7d1swd26FOKF3PKXNZ7.wA6', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:35:27', '2025-01-19 08:35:27', '2010-01-19', '2', 'Male', 0),
(10, 'villegas', 'ryan', 'pensona', NULL, 'villegasryan105@gmaail.com', '09563669997', 14, 'beneficiary', NULL, '$2y$12$qAtkfowqZ668uD3OmZ9dFuKIog/U5yzx9juBZLdZvP4d6bKgV8niG', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:16:59', '2025-01-19 09:16:59', '2010-01-13', '4', 'Male', 0),
(11, 'banggay', 'ian', 'pensona', NULL, 'villegasryan10@gmail.com', '09563669997', 2, 'beneficiary', '2025-01-09 09:29:41', '$2y$12$UPJj0pbdaMhABFKuYs95oOS6EpGgWqYSPGRN.YDbdA4P6mFoa1JbK', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:22:33', '2025-02-18 13:38:29', '2001-01-18', '3', 'Male', 0),
(12, 'Juan Tamad', 'crisostomo', 'modena', NULL, 'juan@gmail.com', '09949420699', 25, 'beneficiary', '2025-04-04 01:00:06', '$2y$12$C2zD5TrJ9u8xiguSH8sZX.QODGppqcu9D7yk54fxGwHQIC2K2PEVa', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:47:39', '2025-04-05 03:42:21', '2016-01-12', '60', 'Male', 0),
(13, 'arias', 'crisostomo', 'modena', NULL, 'jadecapnayan29@gmail.com', '09949420699', 22, 'beneficiary', NULL, '$2y$12$4ta0iW.oT.DijJlkYCrP/.JYfPyt3eKE6D0Thud0kyuK7Dpyz5aeu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:48:49', '2025-01-19 09:48:49', '2016-01-05', '54', 'Rather not to say', 0),
(14, 'arias', 'crisostomo', 'modena', NULL, 'jadecapnayan09@gmail.com', '09949420699', 21, 'beneficiary', '2025-01-09 09:51:13', '$2y$12$7rudgH3nSerAU9VqTVDXjusYM7vNr32QJ/WQaiZ.nQ4mBHH.o6Clu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:50:18', '2025-01-19 09:50:18', '2016-01-01', '2', 'Rather not to say', 0),
(15, 'Chavez', 'Lab', NULL, NULL, 'sircsaira@gmail.com', '09949420699', 32, 'beneficiary', '2025-01-26 09:39:24', '$2y$12$VeI.EZ3H1hzIC/TCx0d9te5HxwuT.lvSB20Prll/eANo1MUsbihre', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-26 09:38:35', '2025-01-26 09:39:24', '2016-01-13', '60', 'Female', 0),
(16, 'Dancil', 'Melberth', 'C.', 'None', 'melberthdancil00@gmail.com', '09673701823', 22, 'beneficiary', '2025-01-08 02:05:42', '$2y$12$93ASRxKoEZXxkIoQ6aZOZ.mQOgxpNdfeXs2u2V7drP6KAiwF.7jtu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-27 01:59:48', '2025-01-27 01:59:48', '2016-01-03', '74', 'Male', 0),
(17, 'Dancil', 'Melberth', 'C.', 'None', 'melberthdancil04@gmail.com', '09673701823', 31, 'beneficiary', '2025-01-08 02:07:37', '$2y$12$VeI.EZ3H1hzIC/TCx0d9te5HxwuT.lvSB20Prll/eANo1MUsbihre', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-27 02:02:59', '2025-01-27 02:02:59', '2016-01-13', '59', 'Rather not to say', 0),
(18, 'sebios', 'elizabeth', 'mamasig', NULL, 'elizabeth.sebios@gmail.com', '09164321071', 22, 'beneficiary', '2025-01-31 01:35:03', '$2y$12$7dDW73svMHkaMKymuC424elRFtPk4wQT6Hfvjq7rF1A5hP0M1z8Ye', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-30 01:27:03', '2025-01-30 01:27:03', '2016-01-13', '3', 'Male', 0),
(19, 'Downs', 'Anthony', 'Signe Montgomery', 'Et itaque aut autem', 'fukazena@mailinator.com', '+1 (646) 258-9102', 11, 'beneficiary', NULL, '$2y$12$Rc7c2gGz3XB1JjlrrEA2Aej.18iDXyV62.Vaq2agESpHKlePWzvEC', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-05 01:03:31', '2025-02-05 01:03:31', '2001-01-09', '21', 'Male', 0),
(20, 'Miles', 'Ciaran', 'Savannah Talley', 'Aut et quia ea volup', 'lupigu@mailinator.com', '+1 (165) 679-3735', 2, 'beneficiary', NULL, '$2y$12$dzw5vI/t/mQwBfvzWT0dV.ZgbmrlrQsrhBYgMuWU/mdXynkF5fLNi', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-05 03:21:34', '2025-02-05 03:21:34', '2001-01-09', '23', 'Female', 0),
(21, 'Aguilar', 'Sebastian', 'Cynthia Conley', 'Eveniet aliquip fac', 'dywuz@mailinator.com', '+1 (323) 631-3364', 15, 'beneficiary', NULL, '$2y$12$LYcv1tpSK5Lty9WOPoCsOexoBVURMu/vW6Cx3f0qmTfCNOoMFa.n2', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-05 03:23:51', '2025-02-05 03:23:51', '1998-04-03', '60', 'Rather not to say', 0),
(22, 'Blankenship', 'Ivan', 'Silas Suarez', 'Autem quia similique', 'wufibime@mailinator.com', '+1 (729) 758-9016', 288, 'beneficiary', NULL, '$2y$12$clvKMTGWY.D815v8HOw.k.PdkY9bJNnJkXGuf2lWHB/6PdE1lnJj2', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-05 07:44:57', '2025-02-05 07:44:57', '2008-08-06', '16', 'Male', 0),
(23, 'Patterson', 'Alisa', 'Jin Tyler', 'Maxime cumque nesciu', 'bywiqa@mailinator.com', '+1 (316) 741-4913', 51, 'beneficiary', NULL, '$2y$12$1OAjlSXf/CYQMjTgiJyEQuPmnGiZccfk2f8HkHnop40QWrbgMMk12', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-05 07:47:19', '2025-02-05 07:47:19', '1984-09-13', '40', 'Rather not to say', 1),
(24, 'Flores', 'Brooke', 'Rajah Berg', 'Qui corrupti velit', 'rega@mailinator.com', '+1 (298) 481-3981', 275, 'beneficiary', '2025-02-14 01:55:36', '$2y$12$YM2w9l52eNmLizMIXQBFkuOUXCR5RXkcJQ8XCdIQM8J3EnCqIbjLy', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-05 07:47:40', '2025-02-05 07:47:40', '1982-09-07', '42', 'Male', 0),
(25, 'Chavez', 'Lovely', 'Escano', NULL, 's.crl0043@gmail.com', '09268307424', 56, 'beneficiary', '2025-02-07 01:37:43', '$2y$12$YM2w9l52eNmLizMIXQBFkuOUXCR5RXkcJQ8XCdIQM8J3EnCqIbjLy', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-07 01:36:43', '2025-02-07 01:37:43', '1962-02-07', '63', 'Female', 1),
(26, 'Balongag', 'Jonas', NULL, 'Villote', 'jonasmiguelbalongag@gmail.com', '09925730026', 8, 'beneficiary', '2025-02-07 01:53:12', '$2y$12$jDzCMKVgPPuOZoysmDihE.kCS8DSMKxuKs7c8J3VXMWHXvQJQ6PD2', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-07 01:52:23', '2025-02-07 01:53:12', '1973-02-07', '52', 'Male', 1),
(27, 'Dayaguit', 'Jellamay', 'Managabanag', NULL, 'dayaguitjellamay@gmail.com', '09659247108', 9, 'beneficiary', NULL, '$2y$12$mf8aI51G62pp5PGoQDGyue.IBsWxwq3ujDOzo2ubjxg0eJ3s3O7nW', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-07 08:13:56', '2025-02-07 08:13:56', '2001-07-13', '23', 'Female', 0),
(28, 'Abelgas', 'Justine', 'Binondo', NULL, 'lablayescano@gmail.com', '09064209450', 56, 'beneficiary', NULL, '$2y$12$3gMO0GH4KMb43vdjQ63dueiU.UGNfhKjveibM16nYdUJ6RmFUNdsm', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13 10:31:06', '2025-02-13 10:31:06', '1994-04-03', '30', 'Male', 1),
(29, 'Chavez', 'Lily', 'Escano', NULL, 'chavezestrella1974@gmail.com', '09064209450', 56, 'beneficiary', '2025-02-16 03:02:58', '$2y$12$jHhHdpc90cK2pJ8KWFp..ehreJtcqgWi8FWzBCUxiGe2DwWDmy1ru', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13 10:42:37', '2025-02-16 03:02:58', '1974-05-16', '50', 'Female', 1),
(30, 'Arnold', 'Lance', 'Quincy Harvey', 'Adipisicing maiores', 'qiceri@mailinator.com', '+1 (849) 142-3476', 21, 'beneficiary', '2025-02-18 16:02:06', '$2y$12$ZBxdkGh3k8wVUnb2rTLw0u5rw45hKxQNIz2dkAV51ltZ4roEy8Plq', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-16 16:01:34', '2025-02-16 16:01:34', '2003-12-11', '21', 'Female', 0),
(31, 'George', 'Walker', 'Linda Barton', 'Et est rerum laboru', 'fanycile@mailinator.com', '09268307424', 10, 'beneficiary', '2025-02-08 05:02:02', '$2y$12$xgIIWNL/HlZ/8jGxGb9U2ep2ELVymHfVxMrwplJApi3Ta7bxrusZ.', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-17 05:01:01', '2025-02-17 05:01:01', '1974-07-15', '50', 'Rather not to say', 1),
(32, 'Deleon', 'Raja', 'Barrett', NULL, 'ninetowu@mailinator.com', '09925730026', 53, 'beneficiary', '2025-02-12 06:09:28', '$2y$12$2LvfSCHLEPRrpADmiEzcA.RcGo5SYpAVIHdX.uSLIsHcnIK6IsEHm', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-17 06:09:08', '2025-02-17 07:16:15', '2010-09-14', '14', 'Male', 1),
(34, 'Ray', 'Merritt', NULL, NULL, 'ryqageputi@mailinator.com', '+1 (138) 765-5067', 25, 'employee', NULL, '$2y$12$B7t3MzzDooUDUn99l8AJRu4/8arzw6xKQrlzDj2wRlI8/MICaTjNu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 03:59:16', '2025-02-19 03:59:16', NULL, NULL, NULL, 0),
(35, 'torejas', 'joven', NULL, NULL, 'joven@gmail.com', '09268307424', 17, 'beneficiary', '2025-02-20 05:35:12', '$2y$12$2fAxWONpR9uoZI2gAq/0/e/WAc17WEpAyBFEPdoG1kB5WkBQ/G.5u', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 05:32:28', '2025-02-19 05:32:28', '1995-04-07', '29', 'Male', 1),
(36, '1111', 'Gerry', NULL, NULL, 'gerrysolisgohiljr1990@gmail.com', '09557153573', 21, 'beneficiary', '2025-02-19 06:45:51', '$2y$12$x9sGG7fGH2WBxzV02562x.AjBJSGAhQvZcJEOXTXMM8AG/.OL9Iza', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-19 06:41:34', '2025-02-19 06:45:51', '2025-02-19', '0', 'Male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_meta`
--

INSERT INTO `user_meta` (`id`, `user_id`, `meta_key`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, 1, 'middle_name', 'escano', NULL, NULL),
(2, 1, 'birthdate', '2025-01-16', NULL, NULL),
(3, 1, 'age', '0', NULL, NULL),
(4, 1, 'sex', 'Female', NULL, NULL),
(5, 1, 'birthplace', 'LEYTE', NULL, NULL),
(6, 1, 'status', 'Single', NULL, NULL),
(7, 1, 'address', 'Abuyog Leyte', NULL, NULL),
(8, 1, 'educational_attainment', 'Not Attended School', NULL, NULL),
(9, 1, 'occupation', 'Student', NULL, NULL),
(10, 1, 'annual_income', '43333', NULL, NULL),
(11, 1, 'other_skills', 'NOTHING', NULL, NULL),
(12, 1, 'family_members', '[{\"name\":\"Stewart Middleton\",\"relationship\":\"Quis sed fugiat null\",\"age\":\"20\",\"gender\":\"Female\",\"civil_status\":\"Atque distinctio Eu\",\"occupation\":\"Aute laudantium obc\",\"educational\":\"Aspernatur alias nos\"},{\"name\":\"Dante Knowles\",\"relationship\":\"Nam cupiditate aliqu\",\"age\":\"85\",\"gender\":\"Female\",\"civil_status\":\"Quae quidem quis rer\",\"occupation\":\"Libero assumenda qui\",\"educational\":\"Molestiae vero nemo\"},{\"name\":\"May Morton\",\"relationship\":\"Harum maiores dolore\",\"age\":\"61\",\"gender\":\"Male\",\"civil_status\":\"Aut quibusdam est a\",\"occupation\":\"Culpa totam nesciun\",\"educational\":\"Qui eiusmod quasi nu\"},{\"name\":\"Iola Peterson\",\"relationship\":\"Cupiditate illo vel\",\"age\":\"34\",\"gender\":\"Female\",\"civil_status\":\"Quibusdam at ea dolo\",\"occupation\":\"Dolore aperiam magna\",\"educational\":\"A aliquam tempora au\"}]', NULL, NULL),
(13, 1, 'application_type', 'new_applicant', NULL, NULL),
(14, 1, 'blood_type', 'O', NULL, NULL),
(15, 1, 'civil_status', 'single', NULL, NULL),
(16, 1, 'for_acquired', 'chronic', NULL, NULL),
(17, 1, 'street', 'Real Street', NULL, NULL),
(18, 1, 'barangay', 'Victory', NULL, NULL),
(19, 1, 'occupation_pwd', 'technicians', NULL, NULL),
(20, 1, 'status_of_employment', 'unemployed', NULL, NULL),
(21, 1, 'fourps_beneficiary', 'Yes', NULL, NULL),
(22, 1, 'indigenous_person', 'Yes', NULL, NULL),
(23, 1, 'monthly_income', '12345', NULL, NULL),
(24, 1, 'classification_of_SP', 'he passed away', NULL, NULL),
(25, 1, 'needs_or_problems', 'financial support for education', NULL, NULL),
(26, 1, 'emergency_contact_name', 'jellamay', NULL, NULL),
(27, 1, 'emergency_contact_address', 'Zone 3, Brgy. Sto. nino Abuyog, Leyte', NULL, NULL),
(28, 1, 'emergency_contact_relationship', 'daughter', NULL, NULL),
(29, 1, 'emergency_contact_number', '09123456789', NULL, NULL),
(30, 1, 'aics_type', 'Food Assistance', NULL, NULL),
(31, 1, 'type_of_disability', 'rare_disease', NULL, NULL),
(32, 1, 'cause_of_disability', 'congenital', NULL, NULL),
(33, 1, 'congenital_or_inborn', 'others', NULL, NULL),
(34, 1, 'specify_cause_of_disability_congenital', 'Deaf', NULL, NULL),
(35, 1, 'category_of_employment', 'government', NULL, NULL),
(36, 1, 'types_of_employment', 'permanent_or_regular', NULL, NULL),
(37, 1, 'father_occupation', 'Driver', NULL, NULL),
(38, 1, 'father_contact', '09368532932', NULL, NULL),
(39, 1, 'mother_name', 'Estrella Chavez', NULL, NULL),
(40, 1, 'mother_occupation', 'Receptionist', NULL, NULL),
(41, 1, 'mother_contact', '09061573601', NULL, NULL),
(42, 1, 'role', 'representative', NULL, NULL),
(43, 1, 'representative_lastname', 'Chavez', NULL, NULL),
(44, 1, 'representative_firstname', 'Jhon Esli', NULL, NULL),
(45, 1, 'representative_middlename', 'Escano', NULL, NULL),
(46, 11, 'family_members', '[{\"name\":\"francisca\",\"relation\":\"son\",\"age\":\"54\",\"civil_status\":\"married\",\"occupation\":\"house wife\",\"income\":null,\"education\":\"college level\",\"monthly\":null,\"birthday\":null,\"sex\":\"Male\"}]', NULL, NULL),
(47, 15, 'birthdate', '2025-01-27', NULL, NULL),
(48, 15, 'birthplace', 'Abuyog leyte', NULL, NULL),
(49, 15, 'status', 'Single', NULL, NULL),
(50, 15, 'address', 'Abuyog leyte', NULL, NULL),
(51, 15, 'educational_attainment', 'College Graduate', NULL, NULL),
(52, 15, 'occupation', 'Student', NULL, NULL),
(53, 15, 'religion', 'Adventist', NULL, NULL),
(54, 17, 'birthdate', '2000-12-04', NULL, NULL),
(55, 17, 'age', '24', NULL, NULL),
(56, 17, 'sex', 'Male', NULL, NULL),
(57, 17, 'birthplace', 'Capili-An', NULL, NULL),
(58, 17, 'status', 'Single', NULL, NULL),
(59, 17, 'address', 'ABUYOG LEYTE', NULL, NULL),
(60, 17, 'educational_attainment', 'College Level', NULL, NULL),
(61, 17, 'occupation', 'Student', NULL, NULL),
(62, 17, 'religion', 'Roman Catholic', NULL, NULL),
(63, 17, 'company_or_agency', 'None', NULL, NULL),
(64, 17, 'monthly_income', '1000000', NULL, NULL),
(65, 17, 'fourps_beneficiary', 'No', NULL, NULL),
(66, 17, 'indigenous_person', 'No', NULL, NULL),
(67, 17, 'classification_of_SP', 'Non', NULL, NULL),
(68, 17, 'needs_or_problems', 'No money', NULL, NULL),
(69, 17, 'emergency_contact_name', '09673701823', NULL, NULL),
(70, 17, 'emergency_contact_address', 'Capili-an', NULL, NULL),
(71, 17, 'emergency_contact_relationship', 'None', NULL, NULL),
(72, 17, 'emergency_contact_number', '09674701823', NULL, NULL),
(73, 35, 'family_members', '[{\"name\":\"LAB\",\"relationship\":\"Papa\",\"age\":\"55\",\"gender\":\"Male\",\"civil_status\":\"Married\",\"occupation\":\"wala\",\"educational\":\"College Grad\"}]', NULL, NULL),
(74, 12, 'family_members', '[{\"name\":\"Mercedes Dale\",\"relationship\":\"Ipsum atque cupidata\",\"age\":\"36\",\"gender\":\"Female\",\"civil_status\":\"Molestias quia qui n\",\"occupation\":\"Modi explicabo Nihi\",\"educational\":\"Modi aut maxime qui\"}]', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomplished_bies`
--
ALTER TABLE `accomplished_bies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accomplished_bies_pwd_detail_id_foreign` (`pwd_detail_id`);

--
-- Indexes for table `aics_details`
--
ALTER TABLE `aics_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aics_details_beneficiary_id_foreign` (`beneficiary_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_service_id_foreign` (`service_id`),
  ADD KEY `applications_user_id_foreign` (`user_id`),
  ADD KEY `applications_approved_by_foreign` (`approved_by`);

--
-- Indexes for table `assistances`
--
ALTER TABLE `assistances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assistances_benefits_received_id_foreign` (`benefits_received_id`);

--
-- Indexes for table `barangays`
--
ALTER TABLE `barangays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_infos`
--
ALTER TABLE `basic_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `basic_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beneficiaries_program_enrolled_foreign` (`program_enrolled`),
  ADD KEY `beneficiaries_barangay_id_foreign` (`barangay_id`),
  ADD KEY `approved_by` (`approved_by`),
  ADD KEY `accepted_by` (`accepted_by`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `benefits_received`
--
ALTER TABLE `benefits_received`
  ADD PRIMARY KEY (`id`),
  ADD KEY `benefits_received_beneficiary_id_foreign` (`beneficiary_id`),
  ADD KEY `assistance_id` (`assistance_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contact_emergencies`
--
ALTER TABLE `contact_emergencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_emergencies_beneficiary_id_foreign` (`beneficiary_id`);

--
-- Indexes for table `deceased`
--
ALTER TABLE `deceased`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `family_backgrounds`
--
ALTER TABLE `family_backgrounds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `family_backgrounds_beneficiary_id_foreign` (`beneficiary_id`);

--
-- Indexes for table `family_compositions`
--
ALTER TABLE `family_compositions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `family_compositions_beneficiary_id_foreign` (`beneficiary_id`);

--
-- Indexes for table `for_spd_or_spo_use_onlies`
--
ALTER TABLE `for_spd_or_spo_use_onlies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `for_spd_or_spo_use_onlies_solo_parent_detail_id_foreign` (`solo_parent_detail_id`);

--
-- Indexes for table `gis`
--
ALTER TABLE `gis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`),
  ADD KEY `logs_beneficiary_id_foreign` (`beneficiary_id`);

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
-- Indexes for table `pwd_details`
--
ALTER TABLE `pwd_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pwd_details_beneficiary_id_foreign` (`beneficiary_id`);

--
-- Indexes for table `saved_family_compositions`
--
ALTER TABLE `saved_family_compositions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saved_family_compositions_user_id_foreign` (`user_id`);

--
-- Indexes for table `saved_family_composition_details`
--
ALTER TABLE `saved_family_composition_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sms_logs`
--
ALTER TABLE `sms_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solo_parent_details`
--
ALTER TABLE `solo_parent_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solo_parent_details_beneficiary_id_foreign` (`beneficiary_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_barangay_id_foreign` (`barangay_id`) USING BTREE;

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_meta_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomplished_bies`
--
ALTER TABLE `accomplished_bies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `aics_details`
--
ALTER TABLE `aics_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `assistances`
--
ALTER TABLE `assistances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `barangays`
--
ALTER TABLE `barangays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `basic_infos`
--
ALTER TABLE `basic_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `benefits_received`
--
ALTER TABLE `benefits_received`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=486;

--
-- AUTO_INCREMENT for table `contact_emergencies`
--
ALTER TABLE `contact_emergencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `deceased`
--
ALTER TABLE `deceased`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_backgrounds`
--
ALTER TABLE `family_backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `family_compositions`
--
ALTER TABLE `family_compositions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `for_spd_or_spo_use_onlies`
--
ALTER TABLE `for_spd_or_spo_use_onlies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gis`
--
ALTER TABLE `gis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pwd_details`
--
ALTER TABLE `pwd_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `saved_family_compositions`
--
ALTER TABLE `saved_family_compositions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saved_family_composition_details`
--
ALTER TABLE `saved_family_composition_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sms_logs`
--
ALTER TABLE `sms_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=352;

--
-- AUTO_INCREMENT for table `solo_parent_details`
--
ALTER TABLE `solo_parent_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accomplished_bies`
--
ALTER TABLE `accomplished_bies`
  ADD CONSTRAINT `accomplished_bies_pwd_detail_id_foreign` FOREIGN KEY (`pwd_detail_id`) REFERENCES `pwd_details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `aics_details`
--
ALTER TABLE `aics_details`
  ADD CONSTRAINT `aics_details_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `applications_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `assistances`
--
ALTER TABLE `assistances`
  ADD CONSTRAINT `assistances_benefits_received_id_foreign` FOREIGN KEY (`benefits_received_id`) REFERENCES `benefits_received` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `basic_infos`
--
ALTER TABLE `basic_infos`
  ADD CONSTRAINT `basic_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD CONSTRAINT `beneficiaries_barangay_id_foreign` FOREIGN KEY (`barangay_id`) REFERENCES `barangays` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `beneficiaries_program_enrolled_foreign` FOREIGN KEY (`program_enrolled`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `benefits_received`
--
ALTER TABLE `benefits_received`
  ADD CONSTRAINT `benefits_received_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contact_emergencies`
--
ALTER TABLE `contact_emergencies`
  ADD CONSTRAINT `contact_emergencies_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `family_backgrounds`
--
ALTER TABLE `family_backgrounds`
  ADD CONSTRAINT `family_backgrounds_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `family_compositions`
--
ALTER TABLE `family_compositions`
  ADD CONSTRAINT `family_compositions_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `for_spd_or_spo_use_onlies`
--
ALTER TABLE `for_spd_or_spo_use_onlies`
  ADD CONSTRAINT `for_spd_or_spo_use_onlies_solo_parent_detail_id_foreign` FOREIGN KEY (`solo_parent_detail_id`) REFERENCES `solo_parent_details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pwd_details`
--
ALTER TABLE `pwd_details`
  ADD CONSTRAINT `pwd_details_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `saved_family_compositions`
--
ALTER TABLE `saved_family_compositions`
  ADD CONSTRAINT `saved_family_compositions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `solo_parent_details`
--
ALTER TABLE `solo_parent_details`
  ADD CONSTRAINT `solo_parent_details_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD CONSTRAINT `user_meta_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
