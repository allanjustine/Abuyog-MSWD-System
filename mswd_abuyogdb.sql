-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 03:53 AM
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
(2, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-21', 'rejected', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":\"43543\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":\"7676\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":\"656\"}', NULL, NULL, NULL, '2025-01-16 00:45:21', '2025-01-16 15:03:19', 'DI KO'),
(3, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-29', 'rejected', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":\"43543\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":\"7676\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":\"656\"}', NULL, NULL, NULL, '2025-01-16 00:52:23', '2025-01-16 16:43:47', 'EH'),
(4, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-22', 'approved', 1, 'employee tocson', '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":\"43543\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":\"7676\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":\"656\"}', NULL, NULL, NULL, '2025-01-16 00:52:54', '2025-01-16 16:57:17', NULL),
(5, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-22', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":\"43543\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":\"7676\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":\"656\"}', NULL, NULL, NULL, '2025-01-16 00:54:19', '2025-01-16 00:54:19', NULL),
(6, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-21', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":\"43543\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":\"7676\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":\"656\"}', NULL, NULL, NULL, '2025-01-16 00:56:29', '2025-01-16 00:56:29', NULL),
(7, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-23', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":\"43543\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":\"7676\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":\"656\"}', NULL, NULL, NULL, '2025-01-16 00:56:42', '2025-01-16 00:56:42', NULL),
(8, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-22', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":\"43543\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":\"7676\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":\"656\"}', NULL, NULL, NULL, '2025-01-16 00:57:51', '2025-01-16 00:57:51', NULL),
(9, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-17', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":\"43543\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":\"7676\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":\"656\"}', NULL, NULL, NULL, '2025-01-16 00:58:00', '2025-01-16 00:58:00', NULL),
(10, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-17', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":\"43543\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":\"7676\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":\"656\"}', NULL, NULL, NULL, '2025-01-16 00:59:00', '2025-01-16 00:59:00', NULL),
(13, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-21', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":\"43543\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":\"7676\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":\"656\"}', NULL, NULL, NULL, '2025-01-16 01:17:33', '2025-01-16 01:17:33', NULL),
(14, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 2, '2025-01-29', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"suffix\":null,\"application_type\":\"new_applicant\",\"pwd_num\":null,\"landline\":null,\"blood_type\":\"O\",\"sex\":\"female\",\"birthdate\":\"2025-01-03\",\"civil_status\":\"single\",\"specify_cause_of_disability_congenital\":null,\"for_acquired\":\"chronic\",\"street\":\"Real Street\",\"barangay\":\"Victory\",\"municipality\":\"Abuyog\",\"province\":\"Leyte\",\"region\":\"Region VIII\",\"educational_attainment\":\"elementary\",\"occupation_pwd\":\"technicians\",\"specify_occupation\":null,\"status_of_employment\":\"unemployed\",\"org_affiliate\":null,\"org_contact_person\":null,\"org_office\":null,\"org_tel_no\":null,\"sss_no\":null,\"gsis_no\":null,\"pag_ibig_no\":null,\"psn_no\":null,\"philhealth_no\":null,\"father_name\":null,\"father_occupation\":null,\"father_contact\":null,\"mother_name\":null,\"mother_occupation\":null,\"mother_contact\":null,\"guardian_name\":null,\"guardian_occupation\":null,\"guardian_contact\":null,\"applicant_lastname\":null,\"applicant_firstname\":null,\"applicant_middlename\":null,\"guardian_lastname\":null,\"guardian_firstname\":null,\"guardian_middlename\":null,\"representative_lastname\":null,\"representative_firstname\":null,\"representative_middlename\":null}', NULL, NULL, NULL, '2025-01-16 01:55:42', '2025-01-16 01:55:42', NULL),
(15, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 2, '2025-01-21', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"suffix\":null,\"application_type\":\"new_applicant\",\"pwd_num\":null,\"landline\":null,\"blood_type\":\"O\",\"sex\":\"female\",\"birthdate\":\"2025-01-03\",\"civil_status\":\"single\",\"specify_cause_of_disability_congenital\":null,\"for_acquired\":\"chronic\",\"street\":\"Real Street\",\"barangay\":\"Victory\",\"municipality\":\"Abuyog\",\"province\":\"Leyte\",\"region\":\"Region VIII\",\"educational_attainment\":\"elementary\",\"occupation_pwd\":\"technicians\",\"specify_occupation\":null,\"status_of_employment\":\"unemployed\",\"org_affiliate\":null,\"org_contact_person\":null,\"org_office\":null,\"org_tel_no\":null,\"sss_no\":null,\"gsis_no\":null,\"pag_ibig_no\":null,\"psn_no\":null,\"philhealth_no\":null,\"father_name\":null,\"father_occupation\":null,\"father_contact\":null,\"mother_name\":null,\"mother_occupation\":null,\"mother_contact\":null,\"guardian_name\":null,\"guardian_occupation\":null,\"guardian_contact\":null,\"role\":\"guardian\",\"applicant_lastname\":null,\"applicant_firstname\":null,\"applicant_middlename\":null,\"guardian_lastname\":\"gdhgd\",\"guardian_firstname\":\"hdgh\",\"guardian_middlename\":\"htrhte\",\"representative_lastname\":null,\"representative_firstname\":null,\"representative_middlename\":null}', NULL, NULL, NULL, '2025-01-16 02:00:37', '2025-01-16 02:00:37', NULL),
(16, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-01-20', 'Pending', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":null,\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-17\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":\"20, 000\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-09\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":\"5, 000\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-09\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":\"N\\/A\",\"classification_of_SP\":null,\"needs_or_problems\":null,\"emergency_contact_name\":null,\"emergency_contact_address\":null,\"emergency_contact_relationship\":null,\"emergency_contact_number\":null}', NULL, NULL, NULL, '2025-01-16 02:11:00', '2025-01-16 02:11:00', NULL),
(17, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-01-20', 'Pending', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-17\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":\"20, 000\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-09\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":\"5, 000\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-09\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":\"N\\/A\",\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:12:08', '2025-01-16 02:12:08', NULL),
(18, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-01-20', 'Pending', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-17\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":\"20, 000\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-09\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":\"5, 000\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-09\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":\"N\\/A\",\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:12:43', '2025-01-16 02:12:43', NULL),
(19, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-01-21', 'Pending', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-17\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":\"20, 000\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-09\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":\"5, 000\",\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-09\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":\"N\\/A\",\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:13:13', '2025-01-16 02:13:13', NULL),
(20, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-28', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 02:13:46', '2025-01-16 02:13:46', NULL),
(21, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-28', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 02:14:50', '2025-01-16 02:14:50', NULL),
(22, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-28', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 02:15:57', '2025-01-16 02:15:57', NULL),
(23, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-28', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 02:17:28', '2025-01-16 02:17:28', NULL),
(24, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-28', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 02:22:39', '2025-01-16 02:22:39', NULL),
(25, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-28', 'approved', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', '2025-01-16 11:19:59', NULL, 3, '2025-01-16 02:28:39', '2025-01-16 11:19:59', NULL),
(26, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-01-21', 'Pending', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:29:22', '2025-01-16 02:29:22', NULL),
(27, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-01-22', 'Pending', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:29:44', '2025-01-16 02:29:44', NULL),
(28, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-01-22', 'Pending', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:30:14', '2025-01-16 02:30:14', NULL),
(29, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-02-05', 'Pending', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:30:43', '2025-01-16 02:30:43', NULL),
(30, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-02-05', 'Pending', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:31:21', '2025-01-16 02:31:21', NULL),
(31, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-02-05', 'Pending', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:32:43', '2025-01-16 02:32:43', NULL),
(32, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-02-05', 'rejected', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:35:07', '2025-01-16 15:23:59', 'hgfhgf'),
(33, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-02-05', 'approved', 1, 'employee tocson', '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:35:23', '2025-01-16 15:23:34', NULL),
(34, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-02-05', 'approved', 1, 'employee tocson', '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:39:24', '2025-01-16 14:57:23', NULL),
(35, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-02-05', 'approved', 1, 'employee tocson', '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:39:48', '2025-01-16 12:32:27', NULL),
(36, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-02-05', 'approved', 1, NULL, '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', '2025-01-16 11:19:30', NULL, 3, '2025-01-16 02:39:56', '2025-01-16 11:19:30', NULL),
(37, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-02-05', 'approved', 1, 'employee tocson', '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-15\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-16\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-21\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:41:21', '2025-01-16 11:14:25', NULL),
(38, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-21', 'approved', 1, 'employee tocson', '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 02:41:49', '2025-01-16 04:23:53', NULL),
(39, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 2, '2025-01-28', 'approved', 1, 'employee tocson', '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"suffix\":null,\"application_type\":\"new_applicant\",\"pwd_num\":null,\"landline\":null,\"blood_type\":\"O\",\"sex\":\"male\",\"birthdate\":\"2025-01-03\",\"civil_status\":\"single\",\"specify_cause_of_disability_congenital\":null,\"for_acquired\":\"chronic\",\"street\":\"Real Street\",\"barangay\":\"Victory\",\"municipality\":\"Abuyog\",\"province\":\"Leyte\",\"region\":\"Region VIII\",\"educational_attainment\":\"vocational\",\"occupation_pwd\":\"technicians\",\"specify_occupation\":null,\"status_of_employment\":\"unemployed\",\"org_affiliate\":null,\"org_contact_person\":null,\"org_office\":null,\"org_tel_no\":null,\"sss_no\":null,\"gsis_no\":null,\"pag_ibig_no\":null,\"psn_no\":null,\"philhealth_no\":null,\"father_name\":null,\"father_occupation\":null,\"father_contact\":null,\"mother_name\":null,\"mother_occupation\":null,\"mother_contact\":null,\"guardian_name\":null,\"guardian_occupation\":null,\"guardian_contact\":null,\"applicant_lastname\":null,\"applicant_firstname\":null,\"applicant_middlename\":null,\"guardian_lastname\":null,\"guardian_firstname\":null,\"guardian_middlename\":null,\"representative_lastname\":null,\"representative_firstname\":null,\"representative_middlename\":null}', NULL, NULL, NULL, '2025-01-16 02:42:45', '2025-01-16 03:58:40', NULL),
(40, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-01-21', 'approved', 1, 'employee tocson', '{\"birthdate\":\"2025-01-03\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"Elementary Graduate\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-08\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":\"20, 000\",\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-10\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-09\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":\"N\\/A\",\"classification_of_SP\":\"qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\",\"needs_or_problems\":\"ghiib\",\"emergency_contact_name\":\"vregr\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"gfsgf\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-16 02:43:41', '2025-01-16 03:16:40', NULL);
INSERT INTO `applications` (`id`, `name`, `email`, `phone`, `service_id`, `date_applied`, `status`, `user_id`, `employee_name`, `custom_fields`, `approved_at`, `appearance_date`, `approved_by`, `created_at`, `updated_at`, `cancellation_reason`) VALUES
(46, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-17', 'approved', 1, 'employee tocson', '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-02\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"Elementary Graduate\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 11:29:57', '2025-01-16 11:30:10', NULL),
(47, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-17', 'approved', 1, 'employee tocson', '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-02\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"Elementary Graduate\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 11:32:59', '2025-01-16 11:33:14', NULL),
(48, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-29', 'approved', 1, 'employee tocson', '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-02\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"Elementary Graduate\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 11:39:21', '2025-01-16 11:39:33', NULL),
(49, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-22', 'approved', 1, 'employee tocson', '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-02\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"Elementary Graduate\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 11:41:43', '2025-01-16 11:41:55', NULL),
(50, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-22', 'approved', 1, 'employee tocson', '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-02\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"Elementary Graduate\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 12:05:11', '2025-01-16 12:05:24', NULL),
(51, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-30', 'approved', 1, 'employee tocson', '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"2025-01-02\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"Elementary Graduate\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null}', NULL, NULL, NULL, '2025-01-16 12:23:28', '2025-01-16 12:23:42', NULL),
(58, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 1, '2025-01-23', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"birthdate\":\"1965-01-17\",\"age\":\"60\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"status\":\"Single\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"Elementary Graduate\",\"occupation\":\"Student\",\"annual_income\":\"43333\",\"other_skills\":\"NOTHING\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"civil_1\":\"Married\",\"occupation_1\":\"Receptionist\",\"income_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"civil_2\":\"MArried\",\"occupation_2\":\"Driver\",\"income_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"civil_3\":\"Single\",\"occupation_3\":\"Student\",\"income_3\":null,\"person_name_4\":\"Lindley E. Chavez\",\"relation_4\":\"Brother\",\"age_4\":\"21\",\"civil_4\":\"Single\",\"occupation_4\":\"Student\",\"income_4\":null}', NULL, NULL, NULL, '2025-01-17 00:15:50', '2025-01-17 00:15:50', NULL),
(59, 'lovely rose', 'rlovie0403@gmail.com', '09268307424', 2, '2025-01-23', 'Pending', 1, NULL, '{\"last_name\":\"chavez\",\"middle_name\":\"escano\",\"suffix\":null,\"application_type\":\"new_applicant\",\"pwd_num\":null,\"landline\":null,\"blood_type\":\"O\",\"sex\":\"female\",\"birthdate\":\"2025-01-17\",\"age\":\"0\",\"civil_status\":\"single\",\"type_of_disability\":\"rare_disease\",\"cause_of_disability\":\"congenital\",\"congenital_or_inborn\":\"others\",\"specify_cause_of_disability_congenital\":\"Deaf\",\"street\":\"Real Street\",\"barangay\":\"Victory\",\"municipality\":\"Abuyog\",\"province\":\"Leyte\",\"region\":\"Region VIII\",\"educational_attainment\":\"college\",\"occupation_pwd\":\"technicians\",\"specify_occupation\":null,\"status_of_employment\":\"unemployed\",\"category_of_employment\":\"government\",\"types_of_employment\":\"permanent_or_regular\",\"org_affiliate\":null,\"org_contact_person\":null,\"org_office\":null,\"org_tel_no\":null,\"sss_no\":null,\"gsis_no\":null,\"pag_ibig_no\":null,\"psn_no\":null,\"philhealth_no\":null,\"father_name\":\"Roslin Chavez\",\"father_occupation\":\"Driver\",\"father_contact\":\"09368532932\",\"mother_name\":\"Estrella Chavez\",\"mother_occupation\":\"Receptionist\",\"mother_contact\":\"09061573601\",\"guardian_name\":null,\"guardian_occupation\":null,\"guardian_contact\":null,\"role\":\"representative\",\"applicant_lastname\":null,\"applicant_firstname\":null,\"applicant_middlename\":null,\"guardian_lastname\":null,\"guardian_firstname\":null,\"guardian_middlename\":null,\"representative_lastname\":\"Chavez\",\"representative_firstname\":\"Jhon Esli\",\"representative_middlename\":\"Escano\"}', NULL, NULL, NULL, '2025-01-17 00:17:44', '2025-01-17 00:17:44', NULL),
(60, 'lovely rose escano chavez', 'rlovie0403@gmail.com', '09268307424', 3, '2025-01-23', 'Pending', 1, NULL, '{\"birthdate\":\"2025-01-17\",\"age\":\"0\",\"sex\":\"Female\",\"birthplace\":\"LEYTE\",\"address\":\"Abuyog Leyte\",\"educational_attainment\":\"Not Attended School\",\"occupation\":\"Student\",\"status\":\"Single\",\"religion\":null,\"company_or_agency\":null,\"monthly_income\":\"12345\",\"fourps_beneficiary\":\"Yes\",\"indigenous_person\":\"Yes\",\"person_name_1\":\"papsi\",\"relation_1\":\"Mother\",\"age_1\":\"435\",\"birthday_1\":\"2025-01-10\",\"civil_1\":\"Married\",\"education_1\":\"College Graduate\",\"occupation_1\":\"Receptionist\",\"monthly_1\":null,\"person_name_2\":\"Roslin L. Chavez\",\"relation_2\":\"Father\",\"age_2\":\"45\",\"birthday_2\":\"2025-01-04\",\"civil_2\":\"MArried\",\"education_2\":\"College Graduate\",\"occupation_2\":\"Driver\",\"monthly_2\":null,\"person_name_3\":\"Jhon Esli E. Chavez\",\"relation_3\":\"Brother\",\"age_3\":\"22\",\"birthday_3\":\"2025-01-18\",\"civil_3\":\"Single\",\"education_3\":\"Elementary\",\"occupation_3\":\"Student\",\"monthly_3\":null,\"person_name_4\":\"Lindley E. Chavez\",\"relation_4\":\"Brother\",\"age_4\":\"21\",\"birthday_4\":\"2025-01-08\",\"civil_4\":\"Single\",\"education_4\":\"College\",\"occupation_4\":\"Student\",\"monthly_4\":null,\"classification_of_SP\":\"he passed away\",\"needs_or_problems\":\"financial support for education\",\"emergency_contact_name\":\"jellamay\",\"emergency_contact_address\":\"Zone 3, Brgy. Sto. nino Abuyog, Leyte\",\"emergency_contact_relationship\":\"daughter\",\"emergency_contact_number\":\"09123456789\"}', NULL, NULL, NULL, '2025-01-17 00:21:25', '2025-01-17 00:21:25', NULL),
(62, 'ian pensona banggay', 'villegasryan10@gmaail.com', '09563669997', 4, '2025-01-23', 'approved', 11, 'employee tocson', '{\"birthdate\":\"2025-01-20\",\"age\":null,\"birthplace\":\"abuyog,leyte\",\"aics_type\":\"Educational Assistance\",\"address\":\"brgy guintagbucan abuyog leyte\",\"educational_attainment\":\"College Level\",\"occupation\":\"na\",\"status\":\"single\",\"referral_source\":null,\"religion\":\"romancatholic\",\"person_name_1\":\"francisca\",\"age_1\":\"54\",\"sex_1\":\"Male\",\"civil_1\":\"married\",\"relation_1\":\"son\",\"education_1\":\"college level\",\"occupation_1\":\"house wife\"}', NULL, NULL, NULL, '2025-01-19 09:36:19', '2025-01-19 09:38:06', NULL),
(63, 'crisostomo', 'jadecapnayan09@gmail.com', '09949420699', 2, '2025-01-22', 'approved', 14, 'employee tocson', '{\"last_name\":\"arias\",\"middle_name\":\"modena\",\"suffix\":null,\"application_type\":\"new_applicant\",\"pwd_num\":null,\"landline\":null,\"blood_type\":\"o\",\"sex\":\"male\",\"birthdate\":\"2025-01-06\",\"age\":\"0\",\"civil_status\":\"married\",\"type_of_disability\":\"deaf\",\"cause_of_disability\":\"acquired\",\"specify_cause_of_disability_congenital\":null,\"for_acquired\":\"injury\",\"street\":\"01\",\"barangay\":\"Guintagbucan\",\"municipality\":\"Abuyog\",\"province\":\"Leyte\",\"region\":\"Region VIII\",\"educational_attainment\":\"vocational\",\"occupation_pwd\":\"professional\",\"specify_occupation\":null,\"status_of_employment\":\"employed\",\"category_of_employment\":\"government\",\"types_of_employment\":\"casual\",\"org_affiliate\":null,\"org_contact_person\":null,\"org_office\":null,\"org_tel_no\":null,\"sss_no\":null,\"gsis_no\":null,\"pag_ibig_no\":null,\"psn_no\":null,\"philhealth_no\":null,\"father_name\":null,\"father_occupation\":null,\"father_contact\":null,\"mother_name\":null,\"mother_occupation\":null,\"mother_contact\":null,\"guardian_name\":null,\"guardian_occupation\":null,\"guardian_contact\":null,\"applicant_lastname\":null,\"applicant_firstname\":null,\"applicant_middlename\":null,\"guardian_lastname\":null,\"guardian_firstname\":null,\"guardian_middlename\":null,\"representative_lastname\":null,\"representative_firstname\":null,\"representative_middlename\":null}', NULL, NULL, NULL, '2025-01-19 10:00:31', '2025-01-19 10:02:56', NULL);

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
(189, 'Victory', 10.739811, 125.016096, NULL, NULL);

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
  `date_of_birth` date NOT NULL,
  `age` int(10) UNSIGNED NOT NULL,
  `gender` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `program_enrolled` bigint(20) UNSIGNED NOT NULL,
  `barangay_id` bigint(20) UNSIGNED DEFAULT NULL,
  `civil_status` enum('Single','Married','Widowed','Divorced') NOT NULL,
  `educational_attainment` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `monthly_income` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_number` varchar(255) DEFAULT NULL,
  `id_status` enum('valid','invalid','not_provided','') NOT NULL DEFAULT 'not_provided',
  `disability_type` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,6) DEFAULT NULL,
  `longitude` decimal(10,6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `date_of_birth`, `age`, `gender`, `place_of_birth`, `program_enrolled`, `barangay_id`, `civil_status`, `educational_attainment`, `occupation`, `religion`, `monthly_income`, `phone`, `email`, `id_number`, `id_status`, `disability_type`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(3, 'jonas', 'villote', 'Balongag', NULL, '2001-02-22', 23, 'Male', 'Abuyog', 1, 1, 'Single', 'College', 'Student', 'Other', 'Below 5,000', '09925730026', 'jm@gmail.com', '123456', 'not_provided', NULL, NULL, NULL, '2025-01-19 19:12:06', '2025-01-19 19:12:06'),
(4, 'labli rose', 'Escano', 'chavez', NULL, '1991-12-19', 33, 'Female', 'Abuyog', 3, 1, 'Single', 'College', 'Student', 'Other', 'Below 5,000', '09925730026', 'jm@gmail.com', '133', 'valid', NULL, NULL, NULL, '2025-01-19 19:24:15', '2025-01-22 02:35:16'),
(5, 'test', 'asdf', 'Test', 'a', '2022-06-21', 2, 'Male', 'Tesadsfasd', 2, 15, 'Single', 'Elementary', 'asdf', 'Hinduism', '10,000 - 15,000', '123123', 'adasd@adfd.com', 'asdasd', 'invalid', 'Test', NULL, NULL, '2025-01-22 01:11:03', '2025-01-22 01:11:03'),
(6, 'Galvin', 'Noelle Dyer', 'Rowe', 'Asperiores ut soluta', '1989-02-26', 35, 'Female', 'Sed et minim cumque', 2, 105, 'Widowed', 'High School', 'Cupidatat dolore rat', 'Christianity', 'Below 5,000', '+1 (231) 485-4149', 'bunykopite@mailinator.com', '11', 'not_provided', 'Select Disability Type', NULL, NULL, '2025-01-22 01:18:24', '2025-01-22 01:18:24'),
(7, 'Rama', 'Ora Tate', 'Spence', 'Iste in cillum reici', '1998-10-26', 26, 'Female', 'Minima earum officia', 2, 77, 'Widowed', 'College', 'Dignissimos tenetur', 'Islam', '10,000 - 15,000', '+1 (684) 586-6636', 'nydajaqo@mailinator.com', '424', 'not_provided', 'Chronic Illness', NULL, NULL, '2025-01-22 01:20:54', '2025-01-22 01:20:54'),
(8, 'Salvador', 'Karyn Copeland', 'Colon', 'Labore at commodo po', '2016-11-18', 8, 'Female', 'Quia iste iure anim', 2, 79, 'Single', 'Postgraduate', 'Ullamco occaecat inv', 'Hinduism', 'Above 15,000', '+1 (695) 118-8086', 'zuluduzar@mailinator.com', '553', 'not_provided', 'Select Disability Type', NULL, NULL, '2025-01-22 01:21:03', '2025-01-22 01:21:03'),
(9, 'Thaddeus', 'Britanney Livingston', 'Gutierrez', 'Expedita amet dolor', '2020-10-23', 4, 'Male', 'Do autem laborum per', 2, 133, 'Divorced', 'College', 'Magnam et magni quid', 'Other', 'Below 5,000', '+1 (945) 697-2816', 'quzohalym@mailinator.com', '757', 'valid', 'Hearing and Speech Impairment', NULL, NULL, '2025-01-22 01:26:08', '2025-01-22 02:47:25'),
(10, 'Baker', 'Iris Hendricks', 'Ruiz', 'Obcaecati exercitati', '2005-12-28', 19, 'Male', 'Sit eiusmod esse omn', 2, 134, 'Widowed', 'High School', 'Ut eu omnis inventor', 'Christianity', '5,000 - 10,000', '+1 (225) 401-2082', 'fegehe@mailinator.com', '644', 'invalid', 'Mobility Impairment', NULL, NULL, '2025-01-22 01:32:08', '2025-01-22 01:32:08'),
(11, 'Jeremy', 'Montana Knox', 'Schneider', 'Dolor elit quo sed', '1972-11-19', 52, 'Male', 'Voluptatem eveniet', 1, 151, 'Married', 'College', 'Eaque in aperiam dol', 'Christianity', '10,000 - 15,000', '+1 (162) 384-9649', 'dapyk@mailinator.com', '991', 'not_provided', NULL, NULL, NULL, '2025-01-22 01:54:32', '2025-01-22 01:54:32'),
(12, 'Oren', 'Eleanor Browning', 'Mitchell', 'Pariatur Duis offic', '2002-05-07', 22, 'Female', 'Animi earum accusam', 3, 186, 'Divorced', 'No Formal Education', 'Hic aliquip voluptas', 'Other', 'Below 5,000', '+1 (431) 923-3961', 'poxatifo@mailinator.com', '187', 'invalid', NULL, NULL, NULL, '2025-01-22 01:54:49', '2025-01-22 01:54:49'),
(13, 'Wylie', 'Karly Donaldson', 'Greer', 'Ipsa hic enim volup', '2008-06-05', 16, 'Male', 'Quaerat voluptatem', 2, 108, 'Single', 'Elementary', 'Est omnis ipsa omni', 'Hinduism', '10,000 - 15,000', '+1 (131) 205-7689', 'qerehovyxo@mailinator.com', '595', 'invalid', 'Test', NULL, NULL, '2025-01-22 01:54:59', '2025-01-22 01:54:59'),
(14, 'Isaac', 'Cairo West', 'Bishop', 'Laborum Esse et dic', '1978-02-07', 46, 'Female', 'Et voluptas placeat', 1, 98, 'Widowed', 'Elementary', 'Doloribus enim dolor', 'Buddhism', '10,000 - 15,000', '+1 (567) 335-1655', 'nazacuwe@mailinator.com', '233', 'not_provided', NULL, NULL, NULL, '2025-01-22 01:57:14', '2025-01-22 01:57:14'),
(15, 'Luke', 'Kalia Banks', 'Neal', 'Architecto est liber', '2017-04-18', 7, 'Female', 'Non nisi ut perspici', 2, 164, 'Widowed', 'Elementary', 'Qui irure voluptas d', 'Christianity', 'Below 5,000', '+1 (905) 664-5766', 'mewos@mailinator.com', '248', 'invalid', NULL, NULL, NULL, '2025-01-22 01:57:22', '2025-01-22 01:57:22'),
(16, 'John', 'Colleen Sawyer', 'Fuentes', 'Doloremque nihil tem', '1996-04-11', 28, 'Female', 'Tempora eligendi vol', 2, 187, 'Married', 'Postgraduate', 'Consequatur error t', 'Buddhism', 'Above 15,000', '+1 (907) 652-2841', 'qyxivy@mailinator.com', '572', 'invalid', NULL, NULL, NULL, '2025-01-22 01:58:41', '2025-01-22 01:58:41'),
(17, 'Cruz', 'Regina Emerson', 'Mueller', 'Delectus duis labor', '1995-11-22', 29, 'Female', 'Velit quidem totam o', 2, 50, 'Single', 'High School', 'Reiciendis lorem cum', 'Buddhism', 'Above 15,000', '+1 (648) 573-2095', 'domi@mailinator.com', '762', 'valid', NULL, NULL, NULL, '2025-01-22 01:58:53', '2025-01-22 02:44:39'),
(18, 'Harding', 'Nell King', 'Boyd', 'Suscipit consequatur', '2002-08-04', 22, 'Female', 'Beatae rem ex magna', 1, 17, 'Divorced', 'Postgraduate', 'Omnis dolor temporib', 'Islam', 'Below 5,000', '+1 (828) 137-1269', 'kequdif@mailinator.com', '945', 'not_provided', NULL, NULL, NULL, '2025-01-22 02:00:32', '2025-01-22 02:00:32'),
(19, 'Yetta', 'Jada Macdonald', 'Noel', 'Cupiditate omnis exc', '2017-03-07', 7, 'Female', 'Minim non at non dis', 2, 171, 'Divorced', 'Elementary', 'Quisquam cupidatat a', 'Christianity', '5,000 - 10,000', '+1 (688) 951-8807', 'kygucogadu@mailinator.com', '884', 'invalid', 'Hearing and Speech Impairment', NULL, NULL, '2025-01-22 02:00:42', '2025-01-22 02:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_receiveds`
--

CREATE TABLE `beneficiary_receiveds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `beneficiary_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `item_type` enum('cash','food','other') DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `date_received` varchar(255) DEFAULT NULL,
  `date_expired` varchar(255) DEFAULT NULL,
  `status` enum('received','not_received','pending','') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiary_receiveds`
--

INSERT INTO `beneficiary_receiveds` (`id`, `beneficiary_id`, `user_id`, `item_type`, `remarks`, `date_received`, `date_expired`, `status`, `created_at`, `updated_at`) VALUES
(8, 3, 2, 'food', 'adsfasdf', '2024-07-01 00:00:00', '2024-10-01 00:00:00', 'pending', '2025-01-21 09:21:06', '2025-01-21 09:21:06'),
(9, 3, 2, 'food', 'asdasd', '2024-07-08 00:00:00', '2024-10-08 00:00:00', 'pending', '2025-01-21 09:33:22', '2025-01-21 09:33:22'),
(10, 3, 2, 'food', 'sfdg', '2025-01-21 00:00:00', '2025-04-21 00:00:00', 'pending', '2025-01-21 09:35:55', '2025-01-21 09:35:55'),
(11, 4, 2, 'food', 'sdfg', '2025-01-21 00:00:00', '2025-04-21 00:00:00', 'received', '2025-01-21 09:36:07', '2025-01-22 02:35:16'),
(12, 19, 2, 'cash', 'Test', '2025-01-21 00:00:00', '2025-02-21 00:00:00', 'not_received', '2025-01-22 02:13:07', '2025-01-22 02:35:45'),
(13, 5, 2, 'food', 'test', '2025-01-14 00:00:00', '2025-02-14 00:00:00', 'pending', '2025-01-22 02:18:49', '2025-01-22 02:18:49'),
(14, 17, 2, 'cash', 'test', '2025-01-21 00:00:00', '2025-02-21 00:00:00', 'received', '2025-01-22 02:19:06', '2025-01-22 02:44:39'),
(15, 12, 2, 'food', 'etst', '2025-01-21 00:00:00', '2025-02-21 00:00:00', 'pending', '2025-01-22 02:19:22', '2025-01-22 02:19:22'),
(16, 9, 2, 'cash', 'Test', '2024-06-22 00:00:00', '2024-07-22 00:00:00', 'received', '2025-01-22 02:45:38', '2025-01-22 02:47:25'),
(17, 9, 2, 'other', 'Twewsads', '2025-01-21 00:00:00', '2025-02-21 00:00:00', 'pending', '2025-01-22 02:50:59', '2025-01-22 02:50:59');

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
('a739eb2cce820da781b0b30981a58db5', 'i:1;', 1737514332),
('a739eb2cce820da781b0b30981a58db5:timer', 'i:1737514332;', 1737514332),
('c525a5357e97fef8d3db25841c86da1a', 'i:1;', 1737514301),
('c525a5357e97fef8d3db25841c86da1a:timer', 'i:1737514301;', 1737514301);

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
(68, '2025_01_21_140852_create_beneficiary_receiveds_table', 4);

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
('1PPNQMsNV9CN0CE2oytQKJZ2kIsauqKKnV88qt8q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0h4SDNWdjJsS1NXWmJCSlR5YzBGY3hveEJlc2daeWxiV2V2OGF6VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcHBseS1iZW5lZml0cy80Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1745312292),
('aBKhbNBIb141Nm5QXM2CsibSc5Urxx5gwVD7BZDj', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOExJZ3RLSFJxbkt4eTdVT2ZVNnAxblB6RnZaSjQ2dDBRNkFud0VKNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93YmVuZWZpY2lhcmllc19hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745312103),
('bj9zNOACqD6fRjthLFyCt56BLrB8TEbQCiVN65CR', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVG1hQzJFeFk2TXo3MHpjV0UzYTMxWncwdnJObDNsRUZ6aFFGREZBNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbXBsb3llZS9tb25pdG9yaW5nIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1737514392),
('eP6kZZ64gXULiG74utLMWFO4icQ2yuZEeUDh58br', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3ZGRjl5SXFsOG1ZVWVyY1RucnJRMklIUlFNY0ZCZDVjWmhiRmp1eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93YmVuZWZpY2lhcmllc19hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745312265),
('kelIIlHcR7xLMPay8Y43yy4Jy7Jhiz8LKImeFGCI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQWdqWDFLR0hhSWFZT1FrWFBOenNIcEVabHRvRHRrMjcwMVBOeU5QZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93YmVuZWZpY2lhcmllc19hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745312264),
('KGZRUJjNzL9zTJWi9tqKFwZeDH97y7WAFDComDal', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0NMRmZja1M5Vno5WjY4WWVIWHZ5TW1jSnQwTVVNaDI2R1VQY1JwMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaG93YmVuZWZpY2lhcmllc19hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1745312265);

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
(34, '+639949420699', 'Your application has been approved. Please log in to your account for further instructions.', 'Sent', NULL, '2025-01-19 10:03:07', '2025-01-19 10:03:07');

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
  `barangay` varchar(255) DEFAULT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `middle_name`, `suffix`, `email`, `phone`, `barangay`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'chavez', 'lovely rose', 'escano', NULL, 'rlovie0403@gmail.com', '09268307424', 'Santo Niño', 'beneficiary', '2024-12-31 17:50:02', '$2y$12$L1k.3TNVvkzajntCnXFwPufl3XoNdc/3dOityspQ9OJBBSXzAHM8e', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 17:49:22', '2025-01-15 17:49:22'),
(2, 'jordan', 'admin', NULL, NULL, 'admin@gmail.com', '09064209450', '', 'admin', '2024-12-31 18:01:21', '$2y$12$nub4LGmOHXqZ7Ohb91j82.WHDyyVRCn5/4wpoxMC.b3iHaqxO2r26', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 17:59:23', '2025-01-15 17:59:23'),
(3, 'tocson', 'employee', NULL, NULL, 'employeetocson@gmail.com', '', '', 'employee', '2025-01-14 03:15:28', '$2y$12$nub4LGmOHXqZ7Ohb91j82.WHDyyVRCn5/4wpoxMC.b3iHaqxO2r26', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-16 03:15:13', '2025-01-16 03:15:13'),
(4, 'operator', 'mswd', NULL, NULL, 'operator@gmail.com', '09268307424', '', 'operator', '2025-01-16 11:09:36', '$2y$12$nub4LGmOHXqZ7Ohb91j82.WHDyyVRCn5/4wpoxMC.b3iHaqxO2r26', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-17 11:08:58', '2025-01-17 11:08:58'),
(5, 'BALONGAG', 'djfiq', NULL, NULL, 'jm@gmail.com', '758668', 'Cadac-an', 'beneficiary', '2025-01-01 03:59:07', '$2y$12$nub4LGmOHXqZ7Ohb91j82.WHDyyVRCn5/4wpoxMC.b3iHaqxO2r26', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:22:34', '2025-01-19 08:22:34'),
(6, 'BALONGAG', 'djfiq', NULL, NULL, 'try@gmail.com', '758668', 'Bito', 'beneficiary', NULL, '$2y$12$aWJR6ReLt0Nma4Kw.WSZlOqjtd2HHPLPspk7b9z6c9An5yuMS8GAu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:23:46', '2025-01-19 08:23:46'),
(7, 'BALONGAG', 'JONAS Miguel', 'vill', NULL, 'tryyy@gmail.com', '09054524106', 'Burubud-an', 'beneficiary', '2025-01-09 08:25:58', '$2y$12$zPLaYS03A8WZIKLKni5DFeH1ape75pYSPl5v2T7HyNDgpk/xHQTny', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:25:12', '2025-01-19 08:25:12'),
(8, 'marquez', 'faye', 'l', NULL, 'faye@gmail.com', '09659247108', 'Balocawehay', 'beneficiary', NULL, '$2y$12$i0g6ostPBH5KZPSI.PGnZeuXbicMfLsu5BbuWjUfnDgNmXfeWNSWy', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:31:53', '2025-01-19 08:31:53'),
(9, 'marquez', 'faye', 'l', NULL, 'fayeangelamarquez@gmail.com', '09659247108', 'Balocawe', 'beneficiary', '2025-01-10 08:36:28', '$2y$12$MvMwxVktMZNFA2N3X8wEae7U0FhKBC7d1swd26FOKF3PKXNZ7.wA6', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 08:35:27', '2025-01-19 08:35:27'),
(10, 'villegas', 'ryan', 'pensona', NULL, 'villegasryan105@gmaail.com', '09563669997', 'Guintagbucan', 'beneficiary', NULL, '$2y$12$qAtkfowqZ668uD3OmZ9dFuKIog/U5yzx9juBZLdZvP4d6bKgV8niG', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:16:59', '2025-01-19 09:16:59'),
(11, 'banggay', 'ian', 'pensona', NULL, 'villegasryan10@gmaail.com', '09563669997', 'Guintagbucan', 'beneficiary', '2025-01-09 09:29:41', '$2y$12$BsJ20i4utfoZunEztW1/EeaaWsVwIaAnGYnsMMo1/8bkahpDm2Bhi', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:22:33', '2025-01-19 09:22:33'),
(12, 'arias', 'crisostomo', 'modena', NULL, 'jadecapnayan@gmail.com', '09949420699', 'Guintagbucan', 'beneficiary', NULL, '$2y$12$oWRX06/l8c1sR1QmZmEMuO.aMQByjFqJ2byy6kJlkaJmVSqg/6E0G', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:47:39', '2025-01-19 09:47:39'),
(13, 'arias', 'crisostomo', 'modena', NULL, 'jadecapnayan29@gmail.com', '09949420699', 'Guintagbucan', 'beneficiary', NULL, '$2y$12$4ta0iW.oT.DijJlkYCrP/.JYfPyt3eKE6D0Thud0kyuK7Dpyz5aeu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:48:49', '2025-01-19 09:48:49'),
(14, 'arias', 'crisostomo', 'modena', NULL, 'jadecapnayan09@gmail.com', '09949420699', 'Guintagbucan', 'beneficiary', '2025-01-09 09:51:13', '$2y$12$7rudgH3nSerAU9VqTVDXjusYM7vNr32QJ/WQaiZ.nQ4mBHH.o6Clu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-19 09:50:18', '2025-01-19 09:50:18'),
(15, 'adsfsadf', 'asdfasdf', 'asdfasdf', 'asdf', 'asdfsdf@adsfasdf.com', '123123', 'Bulak', 'beneficiary', NULL, '$2y$12$nub4LGmOHXqZ7Ohb91j82.WHDyyVRCn5/4wpoxMC.b3iHaqxO2r26', NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-21 03:53:50', '2025-01-21 03:53:50');

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
(46, 11, 'family_members', '[{\"name\":\"francisca\",\"relation\":\"son\",\"age\":\"54\",\"civil_status\":\"married\",\"occupation\":\"house wife\",\"income\":null,\"education\":\"college level\",\"monthly\":null,\"birthday\":null,\"sex\":\"Male\"}]', NULL, NULL);

--
-- Indexes for dumped tables
--

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
  ADD KEY `beneficiaries_barangay_id_foreign` (`barangay_id`);

--
-- Indexes for table `beneficiary_receiveds`
--
ALTER TABLE `beneficiary_receiveds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beneficiary_receiveds_beneficiary_id_foreign` (`beneficiary_id`),
  ADD KEY `beneficiary_receiveds_user_id_foreign` (`user_id`);

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `barangays`
--
ALTER TABLE `barangays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `beneficiary_receiveds`
--
ALTER TABLE `beneficiary_receiveds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sms_logs`
--
ALTER TABLE `sms_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `beneficiary_receiveds`
--
ALTER TABLE `beneficiary_receiveds`
  ADD CONSTRAINT `beneficiary_receiveds_beneficiary_id_foreign` FOREIGN KEY (`beneficiary_id`) REFERENCES `beneficiaries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `beneficiary_receiveds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD CONSTRAINT `user_meta_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
