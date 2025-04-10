-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 02:10 PM
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
-- Database: `mswd_abuyogleytedb`
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
(5, 15, 'Melberth', 'Dancil', 'C.', '2025-02-08 09:02:06', '2025-02-08 09:02:06');

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
(15, 52, 'Ipsum quia eaque ve', 'New', '1988-06-30', 'Ipsum voluptatem p', 'Sed voluptatem beata', 'Sed eos est nisi dol', 'Eaque sunt aliquid v', NULL, '2025-02-02 12:34:10', '2025-02-02 12:34:10'),
(18, 57, NULL, NULL, '2025-02-06', 'asdasd', NULL, NULL, NULL, 'Medical Assistance', '2025-02-05 08:55:50', '2025-02-05 08:55:50'),
(19, 65, '123', 'New', '2025-02-07', 'asdasd', 'Wa kwarta', 'Haha', 'Pagtrabaho uy', 'Burial Assistance', '2025-02-06 09:08:36', '2025-02-07 01:04:11'),
(20, 69, '123', 'New', '2025-02-07', 'Rerum ut laudantium', 'Wa kwarta', 'Haha', 'Pagtrabaho uy', 'Educational Assistance', '2025-02-07 01:50:28', '2025-02-08 02:45:36'),
(21, 70, '123', 'Old', '2025-02-10', 'Wa', 'Wa kwarta', 'Haha', 'Pagtrabaho uy', 'Burial Assistance', '2025-02-07 01:57:37', '2025-02-07 02:02:04'),
(22, 72, '20', 'New', '2025-02-13', 'Placeat quia tempor', 'Totot', 'Wala rapud', 'Actions hold', 'Emergency Shelter Assistance', '2025-02-07 02:16:35', '2025-02-08 01:49:24'),
(23, 73, '2', 'New', '2025-02-11', 'asdf', 'asd', 'aa', 'sd', 'Transportation Assistance', '2025-02-07 02:17:34', '2025-02-08 00:51:33'),
(24, 75, 'Eiusmod consequatur', 'New', '2017-12-21', 'Animi ea modi tempo', 'Excepteur voluptas e', 'Consectetur aut obca', 'Porro qui cupiditate', NULL, '2025-02-08 03:31:42', '2025-02-08 03:31:42'),
(25, 76, 'Incididunt eu perfer', 'Old', '2021-04-08', 'Impedit sed nesciun', 'Libero quidem tempor', 'Est aute ea ut repe', 'Sunt facilis aute an', NULL, '2025-02-08 03:36:24', '2025-02-08 03:36:24'),
(26, 78, 'Fugiat molestiae ex', 'New', '1983-07-20', 'Aliquip architecto m', 'Sed saepe at reicien', 'Quia ullamco id dolo', 'Cum repudiandae nost', NULL, '2025-02-08 03:52:17', '2025-02-08 03:52:17');

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
(25, 'Guintagbucan', 10.755187, 125.005037, '2025-01-09 09:26:06', '2025-01-09 09:26:06'),
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
(63, 'Victory', 10.739811, 125.016096, NULL, NULL),
(64, 'Alangilan', 10.639663, 125.026233, NULL, NULL),
(65, 'Anibongan', 10.604396, 125.055671, NULL, NULL),
(66, 'Bagacay', 10.602055, 125.119004, NULL, NULL),
(67, 'Bahay', 10.713999, 125.036289, NULL, NULL),
(68, 'Balinsasayao', 10.685820, 124.945723, NULL, NULL),
(69, 'Balocawe', 10.744168, 124.979454, NULL, NULL),
(70, 'Balocawehay', 10.715140, 124.954343, NULL, NULL),
(71, 'Barayong', 10.750247, 124.999026, NULL, NULL),
(72, 'Bayabas', 10.661993, 124.997613, NULL, NULL),
(73, 'Bito', 10.751443, 125.007141, NULL, NULL),
(74, 'Buaya', 10.706317, 125.088063, NULL, NULL),
(75, 'Buenavista', 10.730378, 125.019642, NULL, NULL),
(76, 'Bulak', 10.608689, 125.109174, NULL, NULL),
(77, 'Bunga', 10.762420, 125.004221, NULL, NULL),
(78, 'Buntay', 10.746587, 125.009780, NULL, NULL),
(79, 'Burubud-an', 10.694385, 125.008166, NULL, NULL),
(80, 'Cadac-an', 10.727157, 125.008402, NULL, NULL),
(81, 'Cagbolo', 10.655158, 125.033982, NULL, NULL),
(82, 'Can-aporong', 10.740469, 125.004260, NULL, NULL),
(83, 'Canmarating', 10.727620, 124.989305, NULL, NULL),
(84, 'Can-uguib', 10.738780, 125.010513, NULL, NULL),
(85, 'Capilian', 10.702818, 124.970223, NULL, NULL),
(86, 'Combis', 10.625630, 125.052533, NULL, NULL),
(87, 'Dingle', 10.649738, 125.013784, NULL, NULL),
(88, 'Guintagbucan', 10.755187, 125.005037, NULL, NULL),
(89, 'Hampipila', 10.672836, 125.044107, NULL, NULL),
(90, 'Katipunan', 10.726032, 124.963230, NULL, NULL),
(91, 'Kikilo', 10.620450, 125.099493, NULL, NULL),
(92, 'Laray', 10.668573, 125.014197, NULL, NULL),
(93, 'Lawa-an', 10.723881, 125.030668, NULL, NULL),
(94, 'Libertad', 10.594563, 125.044698, NULL, NULL),
(95, 'Loyonsawang', 10.743351, 125.012011, NULL, NULL),
(96, 'Mag-atubang', 10.739173, 124.993437, NULL, NULL),
(97, 'Mahagna', 10.641091, 125.036142, NULL, NULL),
(98, 'Mahayahay', 10.551441, 125.063625, NULL, NULL),
(99, 'Maitum', 10.683090, 124.970008, NULL, NULL),
(100, 'Malaguicay', 10.708644, 125.069049, NULL, NULL),
(101, 'Matagnao', 10.679914, 125.020918, NULL, NULL),
(102, 'Nalibunan', 10.737801, 125.013356, NULL, NULL),
(103, 'Nebga', 10.633512, 125.058107, NULL, NULL),
(104, 'New Taligue', 10.580738, 125.077415, NULL, NULL),
(105, 'Odiongan', 10.709654, 124.986526, NULL, NULL),
(106, 'Old Taligue', 10.567503, 125.052548, NULL, NULL),
(107, 'Pagsang-an', 10.711419, 124.997964, NULL, NULL),
(108, 'Paguite', 10.702430, 124.956347, NULL, NULL),
(109, 'Parasanon', 10.617123, 125.042960, NULL, NULL),
(110, 'Picas Sur', 10.688059, 124.989370, NULL, NULL),
(111, 'Pilar', 10.703188, 125.036069, NULL, NULL),
(112, 'Pinamanagan', 10.535713, 125.055325, NULL, NULL),
(113, 'Salvacion', 10.688237, 125.041579, NULL, NULL),
(114, 'San Francisco', 10.692974, 125.099314, NULL, NULL),
(115, 'San Isidro', 10.761967, 124.998946, NULL, NULL),
(116, 'San Roque', 10.637231, 125.088157, NULL, NULL),
(117, 'Santa Fe', 10.737336, 125.017482, NULL, NULL),
(118, 'Santa Lucia', 10.649735, 125.066381, NULL, NULL),
(119, 'Santo Niño', 10.734838, 125.017494, NULL, NULL),
(120, 'Tabigue', 10.737717, 124.982338, NULL, NULL),
(121, 'Tadoc', 10.708175, 125.007126, NULL, NULL),
(122, 'Tib-o', 10.672394, 125.091167, NULL, NULL),
(123, 'Tinalian', 10.710104, 125.019556, NULL, NULL),
(124, 'Tinocolan', 10.554889, 125.074629, NULL, NULL),
(125, 'Tuy-a', 10.626923, 125.043031, NULL, NULL),
(126, 'Victory', 10.739811, 125.016096, NULL, NULL),
(127, 'Alangilan', 10.639663, 125.026233, NULL, NULL),
(128, 'Anibongan', 10.604396, 125.055671, NULL, NULL),
(129, 'Bagacay', 10.602055, 125.119004, NULL, NULL),
(130, 'Bahay', 10.713999, 125.036289, NULL, NULL),
(131, 'Balinsasayao', 10.685820, 124.945723, NULL, NULL),
(132, 'Balocawe', 10.744168, 124.979454, NULL, NULL),
(133, 'Balocawehay', 10.715140, 124.954343, NULL, NULL),
(134, 'Barayong', 10.750247, 124.999026, NULL, NULL),
(135, 'Bayabas', 10.661993, 124.997613, NULL, NULL),
(136, 'Bito', 10.751443, 125.007141, NULL, NULL),
(137, 'Buaya', 10.706317, 125.088063, NULL, NULL),
(138, 'Buenavista', 10.730378, 125.019642, NULL, NULL),
(139, 'Bulak', 10.608689, 125.109174, NULL, NULL),
(140, 'Bunga', 10.762420, 125.004221, NULL, NULL),
(141, 'Buntay', 10.746587, 125.009780, NULL, NULL),
(142, 'Burubud-an', 10.694385, 125.008166, NULL, NULL),
(143, 'Cadac-an', 10.727157, 125.008402, NULL, NULL),
(144, 'Cagbolo', 10.655158, 125.033982, NULL, NULL),
(145, 'Can-aporong', 10.740469, 125.004260, NULL, NULL),
(146, 'Canmarating', 10.727620, 124.989305, NULL, NULL),
(147, 'Can-uguib', 10.738780, 125.010513, NULL, NULL),
(148, 'Capilian', 10.702818, 124.970223, NULL, NULL),
(149, 'Combis', 10.625630, 125.052533, NULL, NULL),
(150, 'Dingle', 10.649738, 125.013784, NULL, NULL),
(151, 'Guintagbucan', 10.755187, 125.005037, NULL, NULL),
(152, 'Hampipila', 10.672836, 125.044107, NULL, NULL),
(153, 'Katipunan', 10.726032, 124.963230, NULL, NULL),
(154, 'Kikilo', 10.620450, 125.099493, NULL, NULL),
(155, 'Laray', 10.668573, 125.014197, NULL, NULL),
(156, 'Lawa-an', 10.723881, 125.030668, NULL, NULL),
(157, 'Libertad', 10.594563, 125.044698, NULL, NULL),
(158, 'Loyonsawang', 10.743351, 125.012011, NULL, NULL),
(159, 'Mag-atubang', 10.739173, 124.993437, NULL, NULL),
(160, 'Mahagna', 10.641091, 125.036142, NULL, NULL),
(161, 'Mahayahay', 10.551441, 125.063625, NULL, NULL),
(162, 'Maitum', 10.683090, 124.970008, NULL, NULL),
(163, 'Malaguicay', 10.708644, 125.069049, NULL, NULL),
(164, 'Matagnao', 10.679914, 125.020918, NULL, NULL),
(165, 'Nalibunan', 10.737801, 125.013356, NULL, NULL),
(166, 'Nebga', 10.633512, 125.058107, NULL, NULL),
(167, 'New Taligue', 10.580738, 125.077415, NULL, NULL),
(168, 'Odiongan', 10.709654, 124.986526, NULL, NULL),
(169, 'Old Taligue', 10.567503, 125.052548, NULL, NULL),
(170, 'Pagsang-an', 10.711419, 124.997964, NULL, NULL),
(171, 'Paguite', 10.702430, 124.956347, NULL, NULL),
(172, 'Parasanon', 10.617123, 125.042960, NULL, NULL),
(173, 'Picas Sur', 10.688059, 124.989370, NULL, NULL),
(174, 'Pilar', 10.703188, 125.036069, NULL, NULL),
(175, 'Pinamanagan', 10.535713, 125.055325, NULL, NULL),
(176, 'Salvacion', 10.688237, 125.041579, NULL, NULL),
(177, 'San Francisco', 10.692974, 125.099314, NULL, NULL),
(178, 'San Isidro', 10.761967, 124.998946, NULL, NULL),
(179, 'San Roque', 10.637231, 125.088157, NULL, NULL),
(180, 'Santa Fe', 10.737336, 125.017482, NULL, NULL),
(181, 'Santa Lucia', 10.649735, 125.066381, NULL, NULL),
(182, 'Santo Niño', 10.734838, 125.017494, NULL, NULL),
(183, 'Tabigue', 10.737717, 124.982338, NULL, NULL),
(184, 'Tadoc', 10.708175, 125.007126, NULL, NULL),
(185, 'Tib-o', 10.672394, 125.091167, NULL, NULL),
(186, 'Tinalian', 10.710104, 125.019556, NULL, NULL),
(187, 'Tinocolan', 10.554889, 125.074629, NULL, NULL),
(188, 'Tuy-a', 10.626923, 125.043031, NULL, NULL),
(189, 'Victory', 10.739811, 125.016096, NULL, NULL),
(190, 'Alangilan', 10.639663, 125.026233, NULL, NULL),
(191, 'Anibongan', 10.604396, 125.055671, NULL, NULL),
(192, 'Bagacay', 10.602055, 125.119004, NULL, NULL),
(193, 'Bahay', 10.713999, 125.036289, NULL, NULL),
(194, 'Balinsasayao', 10.685820, 124.945723, NULL, NULL),
(195, 'Balocawe', 10.744168, 124.979454, NULL, NULL),
(196, 'Balocawehay', 10.715140, 124.954343, NULL, NULL),
(197, 'Barayong', 10.750247, 124.999026, NULL, NULL),
(198, 'Bayabas', 10.661993, 124.997613, NULL, NULL),
(199, 'Bito', 10.751443, 125.007141, NULL, NULL),
(200, 'Buaya', 10.706317, 125.088063, NULL, NULL),
(201, 'Buenavista', 10.730378, 125.019642, NULL, NULL),
(202, 'Bulak', 10.608689, 125.109174, NULL, NULL),
(203, 'Bunga', 10.762420, 125.004221, NULL, NULL),
(204, 'Buntay', 10.746587, 125.009780, NULL, NULL),
(205, 'Burubud-an', 10.694385, 125.008166, NULL, NULL),
(206, 'Cadac-an', 10.727157, 125.008402, NULL, NULL),
(207, 'Cagbolo', 10.655158, 125.033982, NULL, NULL),
(208, 'Can-aporong', 10.740469, 125.004260, NULL, NULL),
(209, 'Canmarating', 10.727620, 124.989305, NULL, NULL),
(210, 'Can-uguib', 10.738780, 125.010513, NULL, NULL),
(211, 'Capilian', 10.702818, 124.970223, NULL, NULL),
(212, 'Combis', 10.625630, 125.052533, NULL, NULL),
(213, 'Dingle', 10.649738, 125.013784, NULL, NULL),
(214, 'Guintagbucan', 10.755187, 125.005037, NULL, NULL),
(215, 'Hampipila', 10.672836, 125.044107, NULL, NULL),
(216, 'Katipunan', 10.726032, 124.963230, NULL, NULL),
(217, 'Kikilo', 10.620450, 125.099493, NULL, NULL),
(218, 'Laray', 10.668573, 125.014197, NULL, NULL),
(219, 'Lawa-an', 10.723881, 125.030668, NULL, NULL),
(220, 'Libertad', 10.594563, 125.044698, NULL, NULL),
(221, 'Loyonsawang', 10.743351, 125.012011, NULL, NULL),
(222, 'Mag-atubang', 10.739173, 124.993437, NULL, NULL),
(223, 'Mahagna', 10.641091, 125.036142, NULL, NULL),
(224, 'Mahayahay', 10.551441, 125.063625, NULL, NULL),
(225, 'Maitum', 10.683090, 124.970008, NULL, NULL),
(226, 'Malaguicay', 10.708644, 125.069049, NULL, NULL),
(227, 'Matagnao', 10.679914, 125.020918, NULL, NULL),
(228, 'Nalibunan', 10.737801, 125.013356, NULL, NULL),
(229, 'Nebga', 10.633512, 125.058107, NULL, NULL),
(230, 'New Taligue', 10.580738, 125.077415, NULL, NULL),
(231, 'Odiongan', 10.709654, 124.986526, NULL, NULL),
(232, 'Old Taligue', 10.567503, 125.052548, NULL, NULL),
(233, 'Pagsang-an', 10.711419, 124.997964, NULL, NULL),
(234, 'Paguite', 10.702430, 124.956347, NULL, NULL),
(235, 'Parasanon', 10.617123, 125.042960, NULL, NULL),
(236, 'Picas Sur', 10.688059, 124.989370, NULL, NULL),
(237, 'Pilar', 10.703188, 125.036069, NULL, NULL),
(238, 'Pinamanagan', 10.535713, 125.055325, NULL, NULL),
(239, 'Salvacion', 10.688237, 125.041579, NULL, NULL),
(240, 'San Francisco', 10.692974, 125.099314, NULL, NULL),
(241, 'San Isidro', 10.761967, 124.998946, NULL, NULL),
(242, 'San Roque', 10.637231, 125.088157, NULL, NULL),
(243, 'Santa Fe', 10.737336, 125.017482, NULL, NULL),
(244, 'Santa Lucia', 10.649735, 125.066381, NULL, NULL),
(245, 'Santo Niño', 10.734838, 125.017494, NULL, NULL),
(246, 'Tabigue', 10.737717, 124.982338, NULL, NULL),
(247, 'Tadoc', 10.708175, 125.007126, NULL, NULL),
(248, 'Tib-o', 10.672394, 125.091167, NULL, NULL),
(249, 'Tinalian', 10.710104, 125.019556, NULL, NULL),
(250, 'Tinocolan', 10.554889, 125.074629, NULL, NULL),
(251, 'Tuy-a', 10.626923, 125.043031, NULL, NULL),
(252, 'Victory', 10.739811, 125.016096, NULL, NULL),
(253, 'Alangilan', 10.639663, 125.026233, NULL, NULL),
(254, 'Anibongan', 10.604396, 125.055671, NULL, NULL),
(255, 'Bagacay', 10.602055, 125.119004, NULL, NULL),
(256, 'Bahay', 10.713999, 125.036289, NULL, NULL),
(257, 'Balinsasayao', 10.685820, 124.945723, NULL, NULL),
(258, 'Balocawe', 10.744168, 124.979454, NULL, NULL),
(259, 'Balocawehay', 10.715140, 124.954343, NULL, NULL),
(260, 'Barayong', 10.750247, 124.999026, NULL, NULL),
(261, 'Bayabas', 10.661993, 124.997613, NULL, NULL),
(262, 'Bito', 10.751443, 125.007141, NULL, NULL),
(263, 'Buaya', 10.706317, 125.088063, NULL, NULL),
(264, 'Buenavista', 10.730378, 125.019642, NULL, NULL),
(265, 'Bulak', 10.608689, 125.109174, NULL, NULL),
(266, 'Bunga', 10.762420, 125.004221, NULL, NULL),
(267, 'Buntay', 10.746587, 125.009780, NULL, NULL),
(268, 'Burubud-an', 10.694385, 125.008166, NULL, NULL),
(269, 'Cadac-an', 10.727157, 125.008402, NULL, NULL),
(270, 'Cagbolo', 10.655158, 125.033982, NULL, NULL),
(271, 'Can-aporong', 10.740469, 125.004260, NULL, NULL),
(272, 'Canmarating', 10.727620, 124.989305, NULL, NULL),
(273, 'Can-uguib', 10.738780, 125.010513, NULL, NULL),
(274, 'Capilian', 10.702818, 124.970223, NULL, NULL),
(275, 'Combis', 10.625630, 125.052533, NULL, NULL),
(276, 'Dingle', 10.649738, 125.013784, NULL, NULL),
(277, 'Guintagbucan', 10.755187, 125.005037, NULL, NULL),
(278, 'Hampipila', 10.672836, 125.044107, NULL, NULL),
(279, 'Katipunan', 10.726032, 124.963230, NULL, NULL),
(280, 'Kikilo', 10.620450, 125.099493, NULL, NULL),
(281, 'Laray', 10.668573, 125.014197, NULL, NULL),
(282, 'Lawa-an', 10.723881, 125.030668, NULL, NULL),
(283, 'Libertad', 10.594563, 125.044698, NULL, NULL),
(284, 'Loyonsawang', 10.743351, 125.012011, NULL, NULL),
(285, 'Mag-atubang', 10.739173, 124.993437, NULL, NULL),
(286, 'Mahagna', 10.641091, 125.036142, NULL, NULL),
(287, 'Mahayahay', 10.551441, 125.063625, NULL, NULL),
(288, 'Maitum', 10.683090, 124.970008, NULL, NULL),
(289, 'Malaguicay', 10.708644, 125.069049, NULL, NULL),
(290, 'Matagnao', 10.679914, 125.020918, NULL, NULL),
(291, 'Nalibunan', 10.737801, 125.013356, NULL, NULL),
(292, 'Nebga', 10.633512, 125.058107, NULL, NULL),
(293, 'New Taligue', 10.580738, 125.077415, NULL, NULL),
(294, 'Odiongan', 10.709654, 124.986526, NULL, NULL),
(295, 'Old Taligue', 10.567503, 125.052548, NULL, NULL),
(296, 'Pagsang-an', 10.711419, 124.997964, NULL, NULL),
(297, 'Paguite', 10.702430, 124.956347, NULL, NULL),
(298, 'Parasanon', 10.617123, 125.042960, NULL, NULL),
(299, 'Picas Sur', 10.688059, 124.989370, NULL, NULL),
(300, 'Pilar', 10.703188, 125.036069, NULL, NULL),
(301, 'Pinamanagan', 10.535713, 125.055325, NULL, NULL),
(302, 'Salvacion', 10.688237, 125.041579, NULL, NULL),
(303, 'San Francisco', 10.692974, 125.099314, NULL, NULL),
(304, 'San Isidro', 10.761967, 124.998946, NULL, NULL),
(305, 'San Roque', 10.637231, 125.088157, NULL, NULL),
(306, 'Santa Fe', 10.737336, 125.017482, NULL, NULL),
(307, 'Santa Lucia', 10.649735, 125.066381, NULL, NULL),
(308, 'Santo Niño', 10.734838, 125.017494, NULL, NULL),
(309, 'Tabigue', 10.737717, 124.982338, NULL, NULL),
(310, 'Tadoc', 10.708175, 125.007126, NULL, NULL),
(311, 'Tib-o', 10.672394, 125.091167, NULL, NULL),
(312, 'Tinalian', 10.710104, 125.019556, NULL, NULL),
(313, 'Tinocolan', 10.554889, 125.074629, NULL, NULL),
(314, 'Tuy-a', 10.626923, 125.043031, NULL, NULL),
(315, 'Victory', 10.739811, 125.016096, NULL, NULL);

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
  `message_count` int(2) NOT NULL DEFAULT 0,
  `cancellation_reason` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `date_of_birth`, `age`, `gender`, `place_of_birth`, `program_enrolled`, `barangay_id`, `complete_address`, `civil_status`, `educational_attainment`, `occupation`, `religion`, `monthly_income`, `phone`, `email`, `id_number`, `annual_income`, `other_skills`, `latitude`, `longitude`, `approved_at`, `appearance_date`, `approved_by`, `accepted_by`, `user_id`, `status`, `message_count`, `cancellation_reason`, `created_at`, `updated_at`) VALUES
(3, 'jonas miguel', 'villotee', 'Balongag', NULL, '2001-02-22', 23, 'Male', 'Abuyog', 1, 11, NULL, 'Single', 'College', 'Student', 'Other', 'Below 5,000', '09268307424', 'jm@gmail.com', '123456', 'Below 60,000', 'test', NULL, NULL, NULL, NULL, NULL, 3, NULL, 'rejected', 0, 'wwewwaadf', '2025-01-19 19:12:06', '2025-02-05 06:26:53'),
(4, 'Desirae', 'Escano', 'Navarro', NULL, '1975-06-29', 33, 'Female', 'Lorem eum dolorem ad', 2, 279, NULL, 'Divorced', 'No Formal Education', 'Magni minus sit vol', 'Ex blanditiis sed ve', 'Below 5,000', '+1 (853) 984-5192', 'jm@gmail.com', '133', '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rejected', 0, 'totot', '2025-01-19 19:24:15', '2025-02-05 06:09:02'),
(8, 'Sopoline', 'Brody Mcfarland', 'Thornton', NULL, '1994-04-21', 30, 'Female', 'Ut laboriosam quam', 4, 182, NULL, 'Married', 'Postgraduate', 'Sed totam cupidatat', 'Eos alias elit vit', 'Below 5,000', '09061573601', 'lily@gmail.com', '123-456', 'Below 60,000', 'Ea ut sit quasi reru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-01-25 12:00:40', '2025-02-02 12:04:39'),
(9, 'Baxter', 'Kyle Nelson', 'Carlson', NULL, '2003-12-17', 21, 'Male', 'Et nemo in delectus', 3, 253, NULL, 'Widowed', 'Postgraduate', 'Dolores suscipit ips', 'Harum sed molestiae', 'Below 5,000', '+1 (796) 782-1255', 'labli@gmail.com', '123456', 'Below 60,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-01-27 07:03:22', '2025-02-02 12:48:04'),
(12, 'Basil', 'Gwendolyn Bradley', 'Arnold', NULL, '2016-02-08', 8, 'Female', 'Vel aliquid doloribu', 1, 223, NULL, 'Divorced', 'High School', 'Nulla enim ducimus', NULL, NULL, NULL, NULL, NULL, 'Above 180,000', 'Quidem proident aut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-01-31 17:00:16', '2025-01-31 17:00:16'),
(15, 'Rachel', 'Mariko Hall', 'Mcfarland', NULL, '2014-08-24', NULL, NULL, 'Ipsam et qui itaque', 4, 171, NULL, 'Divorced', 'College', 'Sit impedit ipsum', 'Ducimus voluptates', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-01 00:06:15', '2025-02-01 00:06:15'),
(16, 'Kitra', 'Risa Nixon', 'Alexander', NULL, '2009-03-24', NULL, NULL, 'Sunt sint incididu', 4, 65, NULL, 'Widowed', 'Elementary', 'Quae ab laborum Dis', 'Quidem id eum quasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-01 00:07:12', '2025-02-01 00:07:12'),
(17, 'Anjolie', 'Test', 'Donaldson', NULL, '2015-06-10', 9, 'Female', 'Alias qui et fugiat', 3, 168, NULL, 'Single', 'High School', 'Dolor veniam anim v', 'Eum rerum saepe cum', NULL, '+1 (898) 623-2983', NULL, NULL, 'Above 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-01 02:55:00', '2025-02-01 04:08:34'),
(18, 'Craig', NULL, 'Ramirez', NULL, '2021-07-21', NULL, 'Male', 'Ducimus culpa facer', 3, 19, NULL, 'Single', 'College', 'Voluptas asperiores', 'Eveniet nihil dolor', NULL, '+1 (787) 556-6102', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-01 02:56:39', '2025-02-01 02:56:39'),
(20, 'Ingrid', 'Hu Santana', 'Hickman', NULL, '2023-04-15', 1, 'Male', 'Illum molestiae fug', 1, 165, NULL, 'Single', 'College', 'Minim ut similique m', NULL, NULL, NULL, NULL, NULL, 'Above 180,000', 'Facere suscipit aut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-01 04:34:18', '2025-02-01 04:34:18'),
(26, 'Simon', NULL, 'Thompson', NULL, '2003-11-26', 21, 'Female', 'Quo deleniti aut ali', 2, 76, NULL, 'Single', 'Postgraduate', 'Ut fugiat odio moles', 'Fugiat est voluptatu', NULL, '+1 (133) 913-8532', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 02:19:39', '2025-02-02 02:19:39'),
(27, 'Arsenio', 'Barrett Nguyen', 'Matthews', NULL, '2017-06-15', 7, 'Female', 'Dolores quo mollit a', 1, 131, NULL, 'Divorced', 'High School', 'Et ad animi nulla v', NULL, NULL, NULL, NULL, NULL, 'Below 60,000', 'Iste rerum voluptatu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:01:46', '2025-02-02 05:01:46'),
(28, 'Paul', NULL, 'Mcmahon', NULL, '1979-05-05', 45, 'Male', 'Exercitation unde om', 2, 193, NULL, 'Married', 'College', 'Officia totam volupt', 'Tempora quas eiusmod', NULL, '+1 (525) 747-8577', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:02:42', '2025-02-02 05:02:42'),
(29, 'Petra', 'Beau Mcgee', 'Mercado', NULL, '2014-04-17', 10, 'Male', 'Quae velit velit ip', 3, 298, NULL, 'Married', 'Elementary', 'Amet et consequatur', 'Cupiditate sit anim', NULL, '+1 (219) 226-4236', NULL, NULL, 'Above 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:04:12', '2025-02-02 05:04:12'),
(30, 'Cally', 'Haviva Roach', 'Johnson', NULL, '2023-03-16', 1, NULL, 'Laboris voluptas seq', 4, 149, NULL, 'Married', 'Postgraduate', 'Culpa consectetur de', 'Quia iure fuga Aute', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:05:57', '2025-02-02 05:05:57'),
(32, 'Aline', NULL, 'Mathews', NULL, '2000-07-16', 24, 'Male', 'Rerum amet vel exer', 2, 160, NULL, 'Widowed', 'College', 'Ut fuga Et aute sap', 'Et magna rerum sunt', NULL, '+1 (369) 264-1541', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:19:03', '2025-02-02 05:19:03'),
(33, 'Hasad', 'Christopher Mcclure', 'Richmond', NULL, '1984-05-26', 40, 'Female', 'Placeat mollit sequ', 3, 178, NULL, 'Widowed', 'No Formal Education', 'Cupidatat pariatur', 'Et qui nostrum incid', NULL, '+1 (173) 123-8464', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:19:38', '2025-02-02 05:19:38'),
(34, 'Honorato', 'Cairo Padilla', 'Vang', NULL, '2002-01-24', 23, 'Female', 'Nisi commodi sit deb', 3, 59, NULL, 'Married', 'Postgraduate', 'Tempore reprehender', 'Illo pariatur Minim', NULL, '+1 (893) 321-8271', NULL, NULL, 'Above 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:19:45', '2025-02-02 05:19:45'),
(35, 'Barrett', 'Anne Walker', 'Mack', NULL, '2021-07-11', 3, NULL, 'Cupidatat sit volup', 4, 236, NULL, 'Divorced', 'College', 'Et maiores delectus', 'Aut qui deserunt qui', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:20:06', '2025-02-02 05:20:06'),
(41, 'Hillary', 'Audrey Pierce', 'Sullivan', NULL, '2003-09-23', 21, 'Male', 'Cillum fuga Dolor d', 1, 216, NULL, 'Widowed', 'High School', 'Labore nemo magnam d', NULL, NULL, NULL, NULL, NULL, '60,000 - 120,000', 'Ut sapiente dolore n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:45:25', '2025-02-02 05:45:25'),
(42, 'Jordan', 'Colton Bowen', 'Sanchez', NULL, '1974-04-25', 50, 'Male', 'Cumque et labore ess', 3, 196, NULL, 'Single', 'High School', 'Voluptates eaque omn', 'Illum totam nihil c', NULL, '+1 (377) 241-2773', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:46:13', '2025-02-02 05:46:13'),
(43, 'Gavin', 'Nathan Buchanan', 'Ramsey', NULL, '1985-07-10', 39, 'Female', 'Fuga Atque et corru', 3, 120, NULL, 'Divorced', 'College', 'Eos debitis volupta', 'Odit qui est illum', NULL, '+1 (945) 654-5712', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:46:42', '2025-02-02 05:46:42'),
(44, 'Selma', NULL, 'Ortiz', NULL, '1970-04-12', 54, 'Male', 'Quae sed soluta nihi', 2, 1, NULL, 'Married', 'High School', 'Molestias quam molli', 'Blanditiis minus nes', NULL, '+1 (408) 548-4352', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 05:47:25', '2025-02-02 05:47:25'),
(46, 'Kenyon', 'Kiona Morrison', 'Patrick', NULL, '1997-12-19', 27, 'Female', 'Laudantium iste ad', 1, 121, NULL, 'Single', 'Elementary', 'Aut sit deserunt ip', NULL, NULL, NULL, NULL, NULL, 'Below 60,000', 'Sed et porro tenetur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 07:11:55', '2025-02-02 07:11:55'),
(47, 'Tamekah', NULL, 'Logan', NULL, '2017-10-08', 7, 'Female', 'Minim rerum non offi', 1, 203, NULL, 'Widowed', 'High School', 'Dolor eos velit ci', NULL, NULL, NULL, NULL, NULL, '60,000 - 120,000', 'Quidem reprehenderit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 07:14:35', '2025-02-02 07:14:35'),
(49, 'Danielle', 'Ariana Atkinson', 'Swanson', NULL, '1998-12-13', 26, NULL, 'Est consectetur lor', 4, 148, NULL, 'Married', 'Postgraduate', 'Et architecto et mai', 'Facere nostrud sint', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 07:57:54', '2025-02-02 07:57:54'),
(50, 'Daria', 'Kyra Cooley', 'Reilly', NULL, '2011-07-23', 13, 'Female', 'Sunt dignissimos qu', 3, 212, NULL, 'Divorced', 'No Formal Education', 'Molestiae magna dolo', 'Molestias corrupti', NULL, '+1 (493) 865-5196', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 08:13:34', '2025-02-02 08:13:34'),
(51, 'Byron', 'Cally Melendez', 'Gamble', NULL, '1987-05-24', 37, 'Female', 'Sunt ad quia labore', 1, 260, NULL, 'Divorced', 'College', 'Quia et nostrum mole', NULL, NULL, NULL, NULL, NULL, '60,000 - 120,000', 'Assumenda veritatis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 09:11:34', '2025-02-02 10:19:11'),
(52, 'Steven', 'Sage Nicholson', 'Crane', NULL, '1990-03-14', 34, NULL, 'Tempora omnis commod', 4, 113, NULL, 'Divorced', 'College', 'Reprehenderit qui mi', 'Labore rerum et exce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', 0, NULL, '2025-02-02 12:34:10', '2025-02-02 12:34:10'),
(54, 'Lab', NULL, 'Chavez', NULL, '2016-01-13', 59, 'Female', 'Abuyog leyte', 1, 32, 'Abuyog leyte', 'Single', 'College Graduate', 'Student', NULL, NULL, '09949420699', 'sircsaira@gmail.com', NULL, '1223', 'asdasd', NULL, NULL, '2025-02-05 06:26:47', '2025-02-05 16:00:00', 2, 3, 15, 'released', 0, NULL, '2025-02-05 05:28:13', '2025-02-07 01:06:01'),
(57, 'Lab', ' ', ' Chavez', '', '2016-01-13', 60, NULL, 'Abuyog leyte', 4, 32, 'Abuyog leyte', 'Single', 'College Graduate', 'Student', 'Adventist', NULL, '09949420699', 'sircsaira@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-06 06:57:08', '2025-02-05 16:00:00', 2, 3, 15, 'released', 0, NULL, '2025-02-05 08:55:50', '2025-02-07 01:13:53'),
(58, 'Lab', ' ', ' Chavez', '', '1989-03-24', 59, 'Female', 'Quod sint alias esse', 3, 311, 'Pariatur Et expedit', 'Single', 'College Level', 'Qui minim soluta ex', 'Ullamco enim sed ab', '342', '09949420699', 'sircsaira@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-08 02:48:45', '1983-11-28 16:00:00', 2, 3, 15, 'approved', 0, NULL, '2025-02-06 02:30:02', '2025-02-08 02:48:45'),
(62, 'Lab', NULL, 'Chavez', NULL, '1982-01-17', 59, 'Female', NULL, 2, 64, NULL, 'Single', 'Senior High', 'professional', NULL, NULL, '09949420699', 'sircsaira@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-06 06:53:23', '2025-11-18 16:00:00', 2, 2, 15, 'approved', 2, NULL, '2025-02-06 03:55:55', '2025-02-08 01:43:52'),
(63, 'Kylan', 'Aspen Martinez', 'Morrison', NULL, '1980-02-12', 44, 'Female', 'Aute veritatis ab ni', 1, 211, NULL, 'Widowed', 'Elementary', 'Culpa pariatur Aut', NULL, NULL, NULL, NULL, NULL, 'Below 60,000', 'Ullam beatae odit re', NULL, NULL, '2025-02-06 07:23:18', NULL, 2, 2, NULL, 'approved', 0, NULL, '2025-02-06 07:19:40', '2025-02-06 07:19:40'),
(64, 'Rachel', NULL, 'Bruce', NULL, '2003-08-25', 21, 'Female', 'Magnam velit ut in r', 2, 267, NULL, 'Single', 'College', 'Impedit vel sunt f', 'Exercitation volupta', NULL, '+1 (597) 704-3473', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, '2025-02-06 07:24:29', NULL, 2, 2, NULL, 'released', 0, NULL, '2025-02-06 07:24:29', '2025-02-07 00:55:46'),
(65, 'Lab', ' ', ' Chavez', '', '2016-01-13', 60, NULL, 'Abuyog leyte', 4, 32, 'Abuyog leyte', 'Single', 'College Graduate', 'Student', 'Adventist', NULL, '09949420699', 'sircsaira@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-07 01:04:11', '2025-02-06 16:00:00', 2, 3, 15, 'released', 0, NULL, '2025-02-06 09:08:36', '2025-02-07 01:04:44'),
(66, 'Lab', NULL, 'Cha', NULL, '2025-02-07', 0, 'Female', 'Abuyog', 1, 56, NULL, 'Single', 'College', 'Student', NULL, NULL, '09268307424', NULL, NULL, 'Below 60,000', 'Wa', NULL, NULL, '2025-02-07 01:07:33', NULL, 2, 2, NULL, 'released', 0, NULL, '2025-02-07 01:07:33', '2025-02-07 01:09:52'),
(67, 'Jonas', 'Villote', 'Balongag', NULL, '2002-02-07', 23, 'Male', 'Abuyog Leyte', 1, 37, NULL, 'Single', 'College', 'Stufent', NULL, NULL, '09925730026', NULL, NULL, 'Below 60,000', 'N/A', NULL, NULL, '2025-02-07 01:23:40', NULL, 2, 2, NULL, 'released', 0, NULL, '2025-02-07 01:23:40', '2025-02-07 01:24:18'),
(68, 'Lablay', NULL, 'Chavezzz', NULL, '2025-02-02', 0, 'Female', 'Abuyog', 3, 7, NULL, 'Widowed', 'Elementary', 'Student', 'Adventist', NULL, '09268307424', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, '2025-02-07 01:33:31', NULL, 2, 2, NULL, 'released', 2, NULL, '2025-02-07 01:33:31', '2025-02-07 06:05:10'),
(69, 'admin', ' ', ' jordan', '', '2017-09-09', 7, NULL, 'Sint ullamco atque', 4, 230, 'Eiusmod nobis minus', 'Deserunt cupidatat o', 'Elementary Level', 'Omnis beatae cupidit', 'Mollitia eligendi qu', NULL, '09064209450', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-08 02:45:36', '2025-02-06 16:00:00', 2, 3, 2, 'released', 0, NULL, '2025-02-07 01:50:28', '2025-02-08 02:46:19'),
(70, 'Lovely', ' Escano', ' Chavez', '', '1962-02-07', 63, NULL, 'Abuyog', 4, 56, 'Abuyog leyte', 'Single', 'Vocational', 'Student', 'Adventist', NULL, '09268307424', 's.crl0043@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-07 02:02:04', '2025-02-09 16:00:00', 2, 3, 25, 'released', 0, NULL, '2025-02-07 01:57:37', '2025-02-07 02:02:46'),
(71, 'elizabeth', 'mamasig', 'sebios', NULL, '1940-01-01', 85, 'Male', 'Abuyog Leyte', 1, 22, 'Barangay capilian', 'Married', 'Post Graduate', 'N/a', NULL, NULL, '09164321071', 'elizabeth.sebios@gmail.com', NULL, '1000', 'N/a', NULL, NULL, NULL, '2025-02-11 16:00:00', NULL, NULL, 18, 'rejected', 0, 'Di diay ko', '2025-02-07 02:00:06', '2025-02-07 07:44:58'),
(72, 'admin', ' ', ' jordan', '', '2021-04-15', 3, NULL, 'Ex ut eaque commodo', 4, 154, 'Reiciendis earum adi', 'Sint omnis earum dol', 'Post Graduate', 'Dolor aut optio pro', 'Cupidatat atque pari', NULL, '09064209450', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-08 01:49:24', '2025-02-12 16:00:00', 2, 3, 2, 'approved', 0, NULL, '2025-02-07 02:16:35', '2025-02-08 01:49:24'),
(73, 'admin', ' ', ' jordan', '', '2025-02-08', NULL, NULL, 'asd', 4, 5, 'asd', 'asdf', 'Elementary Graduate', 'asda', 'asdf', NULL, '09064209450', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-08 00:51:33', '2025-02-10 16:00:00', 2, 3, 2, 'approved', 2, NULL, '2025-02-07 02:17:34', '2025-02-08 01:17:29'),
(74, 'Juuju', NULL, 'Ju', NULL, '2025-02-07', 0, 'Male', 'Abuyog Leyte', 1, 56, NULL, 'Single', 'College', 'Student', NULL, NULL, '09064209450', NULL, NULL, 'Above 180,000', 'Wa', NULL, NULL, '2025-02-07 08:43:56', NULL, 2, 2, NULL, 'released', 0, NULL, '2025-02-07 08:43:56', '2025-02-07 08:45:46'),
(75, 'Kirestin', 'Kamal Byers', 'Mack', NULL, '2014-02-21', 10, NULL, 'Aut sunt dolorum et', 4, 187, NULL, 'Married', 'High School', 'Sint dolore animi a', 'Sit incididunt sequ', NULL, '+1 (846) 282-8007', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-08 03:31:42', NULL, 2, 2, NULL, 'approved', 0, NULL, '2025-02-08 03:31:42', '2025-02-08 03:31:42'),
(76, 'Stacy', 'Vernon Russo', 'Morris', NULL, '1985-11-12', 39, NULL, 'Perspiciatis minus', 4, 39, NULL, 'Married', 'College', 'Hic nemo voluptate a', 'Culpa et accusamus', NULL, '+1 (158) 123-7081', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-08 03:36:24', NULL, 2, 2, NULL, 'approved', 0, NULL, '2025-02-08 03:36:24', '2025-02-08 03:36:24'),
(77, 'Grace', 'Fleur Stout', 'Schroeder', NULL, '2023-02-04', 2, 'Male', 'Amet eiusmod Nam qu', 3, 227, NULL, 'Single', 'High School', 'Et et omnis Nam omni', 'Blanditiis commodi u', NULL, '+1 (784) 263-1084', NULL, NULL, '60,000 - 120,000', NULL, NULL, NULL, '2025-02-08 03:42:36', NULL, 2, 2, NULL, 'approved', 0, NULL, '2025-02-08 03:42:36', '2025-02-08 03:42:36'),
(78, 'Odessa', NULL, 'Silva', NULL, '2015-10-19', 9, NULL, 'Dolore quos eum sit', 4, 297, NULL, 'Widowed', 'No Formal Education', 'Ipsum sit quia obc', 'Ea dolor distinctio', NULL, '+1 (342) 714-1374', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-08 03:52:17', NULL, 2, 2, NULL, 'approved', 0, NULL, '2025-02-08 03:52:17', '2025-02-08 03:52:17'),
(79, 'Belle', NULL, 'Craft', NULL, '1971-06-08', 53, 'Male', 'Necessitatibus in et', 1, 169, NULL, 'Married', 'Postgraduate', 'Anim ut possimus ex', NULL, NULL, '+1 (653) 195-8177', NULL, NULL, 'Above 180,000', 'Soluta possimus nob', NULL, NULL, '2025-02-08 03:53:41', NULL, 2, 2, NULL, 'approved', 0, NULL, '2025-02-08 03:53:41', '2025-02-08 03:53:41'),
(80, 'Camille', 'Hiroko Delacruz', 'Savage', NULL, '1983-01-17', 42, 'Female', 'Necessitatibus culpa', 3, 22, NULL, 'Married', 'College', 'Omnis reprehenderit', 'Est dolorem consequa', NULL, '+1 (889) 714-6702', NULL, NULL, 'Below 60,000', NULL, NULL, NULL, '2025-02-08 03:54:18', NULL, 2, 2, NULL, 'approved', 0, NULL, '2025-02-08 03:54:18', '2025-02-08 03:54:18'),
(81, 'Lindley Mae', NULL, 'Chavezzz', NULL, '2025-02-08', 0, 'Male', 'Abuyog', 1, 10, NULL, 'Divorced', 'College', 'Student', NULL, NULL, '09268307424', NULL, NULL, 'Above 180,000', 'Wa', NULL, NULL, '2025-02-08 03:54:58', NULL, 2, 2, NULL, 'approved', 0, NULL, '2025-02-08 03:54:58', '2025-02-08 04:44:08'),
(82, 'Nita', NULL, 'Velazquez', NULL, '2008-08-17', 16, 'Female', 'Sed ab quas eum aspe', 2, 65, NULL, 'Widowed', 'Postgraduate', 'Excepteur aliqua Te', 'Accusamus eu assumen', NULL, '+1 (267) 953-8984', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, '2025-02-08 04:19:15', NULL, 2, 2, NULL, 'released', 0, NULL, '2025-02-08 04:19:15', '2025-02-08 07:51:37'),
(83, 'Hanna', NULL, 'Fitzpatrick', NULL, '2012-05-19', 12, 'Male', 'Ab asperiores neque', 3, 132, NULL, 'Widowed', 'College', 'Et nostrud suscipit', 'Quo repellendus Nam', NULL, '+1 (751) 663-4462', NULL, NULL, '120,000 - 180,000', NULL, NULL, NULL, '2025-02-08 04:19:59', NULL, 2, 2, NULL, 'approved', 0, NULL, '2025-02-08 04:19:59', '2025-02-08 04:19:59'),
(87, 'Melberth', ' C.', ' Dancil', ' None', '2010-10-01', 59, 'Female', 'Perspiciatis explic', 3, 41, 'Vero molestias et en', 'Voluptate pariatur', 'Elementary Graduate', 'Ex sunt qui necessit', 'Non aliquam quas eli', '758', '09673701823', 'melberthdancil04@gmail.com', NULL, NULL, NULL, NULL, NULL, '2025-02-08 09:12:25', '2025-09-06 16:00:00', 2, 3, 17, 'approved', 0, NULL, '2025-02-08 09:01:49', '2025-02-08 09:12:25'),
(88, 'Melberth', NULL, 'Dancil', NULL, '2017-09-28', 59, 'male', NULL, 2, 109, NULL, 'Widowed', 'Kindergarten', 'Service and Sales Workers', NULL, NULL, '09673701823', 'melberthdancil04@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-01 16:00:00', NULL, NULL, 17, 'pending', 0, NULL, '2025-02-08 09:02:05', '2025-02-08 09:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `benefits_received`
--

CREATE TABLE `benefits_received` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_id` bigint(20) UNSIGNED NOT NULL,
  `name_of_assistance` varchar(255) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `not_received_reason` text DEFAULT NULL,
  `type_of_assistance` varchar(255) NOT NULL DEFAULT 'Others',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefits_received`
--

INSERT INTO `benefits_received` (`id`, `beneficiary_id`, `name_of_assistance`, `amount`, `date_received`, `status`, `not_received_reason`, `type_of_assistance`, `created_at`, `updated_at`) VALUES
(1, 3, 'tesda', 1000.00, '2025-01-24', 'Received', NULL, 'Educational', '2025-01-23 17:04:04', '2025-01-23 19:00:46'),
(2, 4, 'financial', 2.00, NULL, 'Pending', NULL, 'Others', '2025-01-23 17:05:03', '2025-01-23 17:05:03'),
(3, 3, 'tuition fee support', 20000.00, '2025-01-24', 'Received', NULL, 'Educational', '2025-01-23 17:06:02', '2025-01-23 17:23:44'),
(4, 4, 'tuition fee support', 20000.00, NULL, 'Not Received', NULL, 'Educational', '2025-01-23 17:06:02', '2025-01-23 17:23:47'),
(5, 3, 'scholarship program', 50000.00, NULL, 'Not Received', NULL, 'Educational', '2025-01-23 19:54:01', '2025-01-24 01:04:29'),
(6, 4, 'scholarship program', 50000.00, '2025-01-24', 'Received', NULL, 'Educational', '2025-01-23 19:54:01', '2025-01-24 01:08:36'),
(7, 4, 'medical support', 5000.00, '2025-01-24', 'Received', NULL, 'Medical', '2025-01-24 01:01:21', '2025-01-24 01:04:18'),
(14, 65, 'Aics', 2.00, '2025-02-07', 'Received', NULL, 'Burial Assistance', '2025-02-07 01:04:44', '2025-02-07 01:04:44'),
(15, 57, 'Aics', 10000.00, '2025-02-07', 'Received', NULL, 'Medical Assistance', '2025-02-07 01:13:53', '2025-02-07 01:13:53'),
(16, 70, 'Aics', 5.00, '2025-02-07', 'Received', NULL, 'Burial Assistance', '2025-02-07 02:02:46', '2025-02-07 02:02:46'),
(17, 69, 'Aics', 50.00, '2025-02-08', 'Received', NULL, 'Educational Assistance', '2025-02-08 02:46:19', '2025-02-08 02:46:19');

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
('0db084d73ddf281adab27f4d644a0800', 'i:1;', 1738893583),
('0db084d73ddf281adab27f4d644a0800:timer', 'i:1738893583;', 1738893583),
('1950de5a4e3f1fc9eb1702b941305745', 'i:1;', 1739451571),
('1950de5a4e3f1fc9eb1702b941305745:timer', 'i:1739451571;', 1739451571),
('270449d34295413a5a1b910175c6208e', 'i:1;', 1738893499),
('270449d34295413a5a1b910175c6208e:timer', 'i:1738893499;', 1738893499),
('30dc4533dfafd67923c2bcaf20d1ee32', 'i:1;', 1738738685),
('30dc4533dfafd67923c2bcaf20d1ee32:timer', 'i:1738738685;', 1738738685),
('3101fa3a49a7355e0eb2a840f03b0e80', 'i:1;', 1739005445),
('3101fa3a49a7355e0eb2a840f03b0e80:timer', 'i:1739005445;', 1739005445),
('4007a77d61f38f0a451d12d0610c1f37', 'i:1;', 1738835281),
('4007a77d61f38f0a451d12d0610c1f37:timer', 'i:1738835281;', 1738835281),
('415886638bfb6d1276c7b037dec12fe2', 'i:1;', 1738918422),
('415886638bfb6d1276c7b037dec12fe2:timer', 'i:1738918422;', 1738918422),
('5793bf1bfc8e31789fcf075b09082eb5', 'i:1;', 1738893030),
('5793bf1bfc8e31789fcf075b09082eb5:timer', 'i:1738893030;', 1738893030),
('57bc340b768240bc71899f9cec326b87', 'i:1;', 1739005466),
('57bc340b768240bc71899f9cec326b87:timer', 'i:1739005466;', 1739005466),
('62f6764ce3900ca6fe94fc37f330e5a5', 'i:1;', 1738997696),
('62f6764ce3900ca6fe94fc37f330e5a5:timer', 'i:1738997696;', 1738997696),
('6b801e0706537ffd8809f8548c9779cd', 'i:1;', 1738892151),
('6b801e0706537ffd8809f8548c9779cd:timer', 'i:1738892151;', 1738892151),
('7cbeb0036cfc340dd3575bd7ba11aefa', 'i:1;', 1738917467),
('7cbeb0036cfc340dd3575bd7ba11aefa:timer', 'i:1738917467;', 1738917467),
('83722385b126f8825efd310322616a0e', 'i:1;', 1738982690),
('83722385b126f8825efd310322616a0e:timer', 'i:1738982690;', 1738982690),
('887309d048beef83ad3eabf2a79a64a389ab1c9f', 'i:1;', 1738893213),
('887309d048beef83ad3eabf2a79a64a389ab1c9f:timer', 'i:1738893213;', 1738893213),
('a06530ca9a7e3707387eea48ed0beb2a', 'i:1;', 1738911787),
('a06530ca9a7e3707387eea48ed0beb2a:timer', 'i:1738911787;', 1738911787),
('a58bd458a97af5bc385e536131ed49dd', 'i:1;', 1738982821),
('a58bd458a97af5bc385e536131ed49dd:timer', 'i:1738982821;', 1738982821),
('a690d1fb45e49d8463b62d74867f25ff', 'i:1;', 1738893251),
('a690d1fb45e49d8463b62d74867f25ff:timer', 'i:1738893251;', 1738893251),
('a739eb2cce820da781b0b30981a58db5', 'i:1;', 1738833116),
('a739eb2cce820da781b0b30981a58db5:timer', 'i:1738833115;', 1738833115),
('ab99253ddeaa5a4fbd3ace83b0682b23', 'i:1;', 1738916796),
('ab99253ddeaa5a4fbd3ace83b0682b23:timer', 'i:1738916796;', 1738916796),
('ba0afe957f18044bbd08ee8cb08ccfeb', 'i:3;', 1739002890),
('ba0afe957f18044bbd08ee8cb08ccfeb:timer', 'i:1739002890;', 1739002890),
('c525a5357e97fef8d3db25841c86da1a', 'i:1;', 1739077764),
('c525a5357e97fef8d3db25841c86da1a:timer', 'i:1739077764;', 1739077764),
('c559ce6440ef714c0e125cc4c9d3cce8', 'i:1;', 1738916261),
('c559ce6440ef714c0e125cc4c9d3cce8:timer', 'i:1738916261;', 1738916261),
('d705d38f09e57c5916c5360104cc1825', 'i:1;', 1738738142),
('d705d38f09e57c5916c5360104cc1825:timer', 'i:1738738141;', 1738738142),
('e49b6a0551e27a13f57cd9a2ae910395', 'i:1;', 1738890616),
('e49b6a0551e27a13f57cd9a2ae910395:timer', 'i:1738890616;', 1738890616),
('siraics@gmail.com|10.10.2.254', 'i:1;', 1738916796),
('siraics@gmail.com|10.10.2.254:timer', 'i:1738916796;', 1738916796);

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
(18, 87, 'Willow Frye', 'Et assumenda corrupt', '322', 'Nam voluptatem Sapi', '2025-02-08 09:01:49', '2025-02-08 09:01:49');

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
(3, 'Lovely Rose', NULL, 'Chavez', 'jellamay@gmail.com', '1233333333', 12, NULL, '2025-01-15', 0, 'Male', 'Single', NULL, NULL, NULL, NULL, '2025-01-24 01:49:06', '2025-01-24 01:49:06');

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
(15, 88, 'Kibo Orr', 'Wynter Woods', 'Graham Burns', 'Repudiandae aliquip', 'Natus doloremque del', 'Voluptatum vel assum', '+1 (582) 651-8498', '+1 (278) 516-1804', '+1 (727) 195-3184', '2025-02-08 09:02:06', '2025-02-08 09:02:06');

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
(63, 51, 'Emi Jennings', 'Reprehenderit delect', '79', 'Single', 'Rem quod assumenda m', NULL, NULL, '60,000 - 120,000', NULL, '2025-02-02 09:47:39', '2025-02-02 10:19:11'),
(64, 51, 'Beatrice Ortiz', 'Voluptas voluptas vo', '11', 'Divorced', 'Qui qui nulla accusa', NULL, NULL, '120,000 - 180,000', NULL, '2025-02-02 09:47:39', '2025-02-02 10:19:11'),
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
(81, 54, 'asda', 'sdasdasd', '12', 'asdasd', 'asdasd', NULL, NULL, '123', NULL, '2025-02-05 05:28:13', '2025-02-05 05:28:13'),
(85, 57, 'asda', 'asdf', '12', 'asdf', 'asdf', NULL, 'asdf', NULL, 'Female', '2025-02-05 08:55:50', '2025-02-05 08:55:50'),
(86, 58, 'Danielle Ferrell', 'Eos non deleniti ani', '79', 'Rerum corrupti nihi', 'Aut aliquip quibusda', '2017-02-28', 'Exercitation exercit', '884', NULL, '2025-02-06 02:30:02', '2025-02-06 02:30:02'),
(87, 63, 'Gil Singleton', 'Ea voluptatem Ducim', '64', 'Married', 'Illo ea consectetur', NULL, NULL, 'Below 60,000', NULL, '2025-02-06 07:19:40', '2025-02-06 07:19:40'),
(88, 65, 'asdfas', 'asdf', '12', 'asdf', 'adsfsdaf', NULL, 'asdf', NULL, 'Female', '2025-02-06 09:08:36', '2025-02-06 09:08:36'),
(89, 66, 'Papsi', 'Paps', '20', 'Married', 'Wa', NULL, NULL, 'Above 180,000', NULL, '2025-02-07 01:07:33', '2025-02-07 01:07:33'),
(90, 67, 'N/A', 'N/A', '49', 'Married', 'N/A', NULL, NULL, 'Below 60,000', NULL, '2025-02-07 01:23:40', '2025-02-07 01:23:40'),
(91, 68, 'Papsi', 'Paps', '0', 'Married', 'Wa', '2025-02-06', 'College', '1', NULL, '2025-02-07 01:33:31', '2025-02-07 01:33:31'),
(92, 69, 'Ulysses Chaney', 'A alias consequuntur', '53', 'Commodi voluptate cu', 'In mollit magna duci', NULL, 'Doloremque veritatis', NULL, 'Male', '2025-02-07 01:50:28', '2025-02-07 01:50:28'),
(93, 70, 'Papsi', 'Paps', '50', 'Single', 'Wa', NULL, 'College', NULL, 'Male', '2025-02-07 01:57:37', '2025-02-07 01:57:37'),
(94, 71, 'N/a', 'N/A', '50', 'N/A', 'N/A', NULL, NULL, 'N/A', NULL, '2025-02-07 02:00:06', '2025-02-07 02:00:06'),
(95, 72, 'Colton Peterson', 'Non in quia atque ei', '86', 'Deserunt rerum volup', 'Consequatur Pariatu', NULL, 'Quis quis velit in', NULL, 'Female', '2025-02-07 02:16:35', '2025-02-07 02:16:35'),
(96, 73, 'asd', 'asd', '12', 'asdasd', 'asd', NULL, 'asd', NULL, 'Female', '2025-02-07 02:17:34', '2025-02-07 02:17:34'),
(97, 74, 'N/A', 'N/A', '50', 'Married', 'N/A', NULL, NULL, 'Below 60,000', NULL, '2025-02-07 08:43:56', '2025-02-07 08:43:56'),
(98, 75, 'David Beasley', 'Consectetur fugit', '95', 'Divorced', 'Fugiat atque aut bl', NULL, 'Postgraduate', NULL, 'Male', '2025-02-08 03:31:42', '2025-02-08 03:31:42'),
(99, 76, 'Hadley Lara', 'Ut commodi tenetur r', '12', 'Married', 'Sit quidem commodi u', NULL, 'High School', NULL, 'Male', '2025-02-08 03:36:24', '2025-02-08 03:36:24'),
(100, 77, 'Kibo Medina', 'Omnis sapiente dolor', '92', 'Single', 'Velit odio soluta iu', '1976-01-02', 'Elementary', 'Above 180,000', NULL, '2025-02-08 03:42:36', '2025-02-08 03:42:36'),
(101, 78, 'Calvin Mack', 'Ex velit aut a repre', '57', 'Single', 'Aliquid cupidatat si', NULL, 'Postgraduate', NULL, 'Female', '2025-02-08 03:52:17', '2025-02-08 03:52:17'),
(102, 79, 'Halee Goodwin', 'Quod velit necessita', '90', 'Divorced', 'Veniam voluptates a', NULL, NULL, '60,000 - 120,000', NULL, '2025-02-08 03:53:41', '2025-02-08 03:53:41'),
(103, 80, 'Brynn Keller', 'Id distinctio Repre', '96', 'Divorced', 'Sit aspernatur repre', '1985-03-10', 'Postgraduate', '60,000 - 120,000', NULL, '2025-02-08 03:54:18', '2025-02-08 03:54:18'),
(104, 81, 'Papsi', 'Paps', '2', 'Divorced', 'Wa', NULL, NULL, 'Above 180,000', NULL, '2025-02-08 03:54:58', '2025-02-08 03:54:58'),
(105, 83, 'Ivy Frank', 'Maiores nemo fugiat', '58', 'Divorced', 'Cupidatat vero anim', '2002-07-17', 'Postgraduate', 'Below 60,000', NULL, '2025-02-08 04:19:59', '2025-02-08 05:27:27'),
(108, 87, 'Kaden Sykes', 'Tenetur et facere qu', '84', 'Praesentium distinct', 'Cillum qui necessita', '1980-12-16', 'Aut et occaecat moll', '644', NULL, '2025-02-08 09:01:49', '2025-02-08 09:01:49');

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
(4, 18, 'Disapproved', 'New', 'ID Card Number test', 'Category test', '2025-02-08 09:12:25', '2025-02-08 09:12:25');

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
(79, '2025_02_08_155800_create_for_spd_or_spo_use_onlies_table', 9);

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
(15, 88, 'Speech and Language Impairment', 'acquired', 'injury', NULL, 'Amet aut culpa sit', 'Saepe architecto pos', 'Aut voluptatibus nos', 'Quis est pariatur', 'Sit voluptates simil', 'melberthdancil04@gmail.com', 'Employed', 'Private', 'Permanent Or Regular', 'Melton and Whitaker Associates', 'Veritatis occaecat u', 'Dolores id ea quia i', 'Ex nemo labore cupid', 'Voluptatum commodi v', 'Sint voluptas vero', 'Voluptatem Nesciunt', 'Et saepe quae nostru', 'Dolore consequat Re', 'applicant', 'Temporibus dolores d', '386', 'New Applicant', '2025-02-08 09:02:06', '2025-02-08 09:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'OSCA(Office of Senior Citizens)', '60 years old and above indigent senior citizens can avail the program. Senior citizens who are not yet beneficiary but qualified within the eligibility criteria can apply', '1737115036.jpg', '2025-01-15 18:04:34', '2025-01-17 11:57:16'),
(2, 'PWD(Persons with Disabilities)', 'those suffering from restrictions or different abilities, as a result of a mental or sensory impairment, to perform an activity in the manner within the range considered normal for a human being, male or female, 0-59 years of age.', '1737115054.jpg', '2025-01-15 18:05:29', '2025-01-17 11:57:34'),
(3, 'Solo Parent', 'a parent who \'is left alone with the responsibility of parenthood due to death, detention, mental incapacity or legal separation with spouse. It also refers to women who became pregnant due to abuse.', '1736964404.jpg', '2025-01-15 18:06:44', '2025-01-15 18:06:44'),
(4, 'AICS(Assistance to Individuals in Crisis)', 'provides medical assistance, burial, transportation, education, food, or financial assistance for other support services or needs of a person or family.', '1737115421.jpg', '2025-01-17 12:03:41', '2025-01-17 12:03:41');

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
('2PoMplIUmtnTi9U8SCb1kZSAEcVQVYumyVtjz1TJ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:134.0) Gecko/20100101 Firefox/134.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTERoR056NmpMY2lLNWFNZWg1RWJiNzhRbER5MlR5YTJNeHBKVHVhTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kaXNwbGF5YXBwbGljYXRpb24/c3RhdHVzPWFwcHJvdmVkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1739078560),
('fAW5JaS0D14eZNTyG7GJZBSALw7C6YyyyFKLEAws', NULL, '  192.168.2.139:5173:5173  ', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:134.0) Gecko/20100101 Firefox/134.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM29jNkxZOW5oaTJhTTFZY0RNdFlQM2FjVVY3VXZsMTlLcHRFVEpnZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xOTIuMTY4LjI1NC4xMjc6ODAwMC9sb2dpbiI7fX0=', 1739452197);

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
(77, '+639673701823', 'Your application has been approved. Please log in to your account for further instructions.\n\n-FROM MSWD ABUYOG.\nFebruary 08, 2025', 'Sent', NULL, '2025-02-08 09:03:15', '2025-02-08 09:03:15');

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
(18, 87, 'Malone Howell Trading', 'No', 'Yes', 'Sed non sint aut par', 'Architecto in vel do', '2025-02-08 09:01:49', '2025-02-08 09:01:49');

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
(1, 'chavez', 'lovely rose', 'escano', NULL, 'rlovie0403@gmail.com', '09268307424', 3, 'beneficiary', '2024-12-31 17:50:02', '$2y$12$L1k.3TNVvkzajntCnXFwPufl3XoNdc/3dOityspQ9OJBBSXzAHM8e', NULL, NULL, NULL, 'OcjmQKwQonjSPJ2POSIjejzHhH15XUKA11NTzTbeGgt5WNcHTmMgSTkEzTMS', NULL, NULL, '2025-01-15 17:49:22', '2025-01-15 17:49:22', '2001-01-18', '4', 'Female', 0),
(2, 'jordan', 'admin', NULL, NULL, 'admin@gmail.com', '09064209450', 5, 'admin', '2024-12-31 18:01:21', '$2y$12$GkbjYgXOLmaNVeOIrkLHwOQUUBTFhN0OBh95pJNTK8Vd/n2PE/7I.', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 17:59:23', '2025-01-15 17:59:23', '2010-01-09', '60', 'Rather not to say', 0),
(3, 'tocson', 'employee', NULL, NULL, 'employeetocson@gmail.com', '', 2, 'employee', '2025-01-14 03:15:28', '$2y$12$P7PqW1T5c2nTK08QnHCmqePf4L/2/jMCLn1XtgeisN6U.oVRLX/6C', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-16 03:15:13', '2025-01-16 03:15:13', '2001-01-18', '2', 'Female', 0),
(4, 'operator', 'mswd', NULL, NULL, 'operator@gmail.com', '09268307424', 12, 'operator', '2025-01-16 11:09:36', '$2y$12$dN1WpdMN6iT5Iymxs33Y/eJwigE7WoaqEjgtMzYkKoF.PQC6.AEmu', NULL, NULL, NULL, 'KH2pi0N2MTvkCXmzBJaAXrnyfctHI0S8E1yPg416zVwuLJ8H9svZa570TmLi', NULL, NULL, '2025-01-17 11:08:58', '2025-01-17 11:08:58', '2010-01-13', '5', 'Male', 0),
(5, 'BALONGAG', 'djfiq', NULL, NULL, 'jm@gmail.com', '758668', 23, 'beneficiary', NULL, '$2y$12$sacRxPjRQhwG1tZPYJ95X.2ROIE.WiUyJ0.UCi35qDD210l.NmejC', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:22:34', '2025-01-19 08:22:34', '2016-01-13', '76', 'Female', 0),
(6, 'BALONGAG', 'djfiq', NULL, NULL, 'try@gmail.com', '758668', 2, 'beneficiary', NULL, '$2y$12$aWJR6ReLt0Nma4Kw.WSZlOqjtd2HHPLPspk7b9z6c9An5yuMS8GAu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:23:46', '2025-01-19 08:23:46', '2001-01-18', '5', 'Rather not to say', 0),
(7, 'BALONGAG', 'JONAS Miguel', 'vill', NULL, 'tryyy@gmail.com', '09054524106', 5, 'beneficiary', '2025-01-09 08:25:58', '$2y$12$zPLaYS03A8WZIKLKni5DFeH1ape75pYSPl5v2T7HyNDgpk/xHQTny', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:25:12', '2025-01-19 08:25:12', '2010-01-17', '3', 'Female', 0),
(8, 'marquez', 'faye', 'l', NULL, 'faye@gmail.com', '09659247108', 11, 'beneficiary', NULL, '$2y$12$i0g6ostPBH5KZPSI.PGnZeuXbicMfLsu5BbuWjUfnDgNmXfeWNSWy', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:31:53', '2025-01-19 08:31:53', '2001-01-18', '4', 'Rather not to say', 0),
(9, 'marquez', 'faye', 'l', NULL, 'fayeangelamarquez@gmail.com', '09659247108', 12, 'beneficiary', '2025-01-10 08:36:28', '$2y$12$MvMwxVktMZNFA2N3X8wEae7U0FhKBC7d1swd26FOKF3PKXNZ7.wA6', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:35:27', '2025-01-19 08:35:27', '2010-01-19', '2', 'Male', 0),
(10, 'villegas', 'ryan', 'pensona', NULL, 'villegasryan105@gmaail.com', '09563669997', 14, 'beneficiary', NULL, '$2y$12$qAtkfowqZ668uD3OmZ9dFuKIog/U5yzx9juBZLdZvP4d6bKgV8niG', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:16:59', '2025-01-19 09:16:59', '2010-01-13', '4', 'Male', 0),
(11, 'banggay', 'ian', 'pensona', NULL, 'villegasryan10@gmaail.com', '09563669997', 2, 'beneficiary', '2025-01-09 09:29:41', '$2y$12$BsJ20i4utfoZunEztW1/EeaaWsVwIaAnGYnsMMo1/8bkahpDm2Bhi', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:22:33', '2025-01-19 09:22:33', '2001-01-18', '3', 'Male', 0),
(12, 'arias', 'crisostomo', 'modena', NULL, 'jadecapnayan@gmail.com', '09949420699', 25, 'beneficiary', NULL, '$2y$12$oWRX06/l8c1sR1QmZmEMuO.aMQByjFqJ2byy6kJlkaJmVSqg/6E0G', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:47:39', '2025-01-19 09:47:39', '2016-01-12', '12', 'Male', 0),
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
(24, 'Flores', 'Brooke', 'Rajah Berg', 'Qui corrupti velit', 'rega@mailinator.com', '+1 (298) 481-3981', 275, 'beneficiary', NULL, '$2y$12$i0/VpqW.XLlmj2UBEIqVauMrFZ5yJoVr8yi4oJn1UtQR1nOv7h0QW', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-05 07:47:40', '2025-02-05 07:47:40', '1982-09-07', '42', 'Male', 0),
(25, 'Chavez', 'Lovely', 'Escano', NULL, 's.crl0043@gmail.com', '09268307424', 56, 'beneficiary', '2025-02-07 01:37:43', '$2y$12$YM2w9l52eNmLizMIXQBFkuOUXCR5RXkcJQ8XCdIQM8J3EnCqIbjLy', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-07 01:36:43', '2025-02-07 01:37:43', '1962-02-07', '63', 'Female', 1),
(26, 'Balongag', 'Jonas', NULL, 'Villote', 'jonasmiguelbalongag@gmail.com', '09925730026', 8, 'beneficiary', '2025-02-07 01:53:12', '$2y$12$jDzCMKVgPPuOZoysmDihE.kCS8DSMKxuKs7c8J3VXMWHXvQJQ6PD2', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-07 01:52:23', '2025-02-07 01:53:12', '1973-02-07', '52', 'Male', 1),
(27, 'Dayaguit', 'Jellamay', 'Managabanag', NULL, 'dayaguitjellamay@gmail.com', '09659247108', 9, 'beneficiary', NULL, '$2y$12$mf8aI51G62pp5PGoQDGyue.IBsWxwq3ujDOzo2ubjxg0eJ3s3O7nW', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-07 08:13:56', '2025-02-07 08:13:56', '2001-07-13', '23', 'Female', 0);

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
(12, 1, 'family_members', '[{\"name\":\"papsi\",\"relation\":\"Mother\",\"age\":\"435\",\"civil_status\":\"Married\",\"occupation\":\"Receptionist\",\"income\":null,\"education\":\"College Graduate\",\"monthly\":null,\"birthday\":null,\"sex\":\"Male\"},{\"name\":\"Roslin L. Chavez\",\"relation\":\"Father\",\"age\":\"45\",\"civil_status\":\"MArried\",\"occupation\":\"Driver\",\"income\":null,\"education\":\"College Graduate\",\"monthly\":null,\"birthday\":null,\"sex\":\"Male\"},{\"name\":\"Jhon Esli E. Chavez\",\"relation\":\"Brother\",\"age\":\"22\",\"civil_status\":\"Single\",\"occupation\":\"Student\",\"income\":null,\"education\":\"Elementary\",\"monthly\":null,\"birthday\":null,\"sex\":\"Male\"},{\"name\":\"Lindley E. Chavez\",\"relation\":\"Brother\",\"age\":\"21\",\"civil_status\":\"Single\",\"occupation\":\"Student\",\"income\":null,\"education\":\"College\",\"monthly\":null,\"birthday\":null,\"sex\":\"Male\"}]', NULL, NULL),
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
(72, 17, 'emergency_contact_number', '09674701823', NULL, NULL);

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
-- Indexes for table `barangays`
--
ALTER TABLE `barangays`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `benefits_received_beneficiary_id_foreign` (`beneficiary_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aics_details`
--
ALTER TABLE `aics_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `barangays`
--
ALTER TABLE `barangays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `benefits_received`
--
ALTER TABLE `benefits_received`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_emergencies`
--
ALTER TABLE `contact_emergencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `deceased`
--
ALTER TABLE `deceased`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_backgrounds`
--
ALTER TABLE `family_backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `family_compositions`
--
ALTER TABLE `family_compositions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `for_spd_or_spo_use_onlies`
--
ALTER TABLE `for_spd_or_spo_use_onlies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pwd_details`
--
ALTER TABLE `pwd_details`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `solo_parent_details`
--
ALTER TABLE `solo_parent_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

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
-- Constraints for table `pwd_details`
--
ALTER TABLE `pwd_details`
  ADD CONSTRAINT `pwd_details_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE;

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
