-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2022 at 06:16 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watania`
--

-- --------------------------------------------------------

--
-- Table structure for table `akd`
--

CREATE TABLE `akd` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `akd`
--

INSERT INTO `akd` (`id`, `content`, `project_id`, `created_at`, `updated_at`) VALUES
(44, '<p>محتوي &nbsp;النص</p>', 62, '2022-07-11 21:28:58', '2022-07-24 14:01:13'),
(45, '<p>cccccccccccccccccccccccccc</p>', 44, '2022-07-22 21:25:36', '2022-07-22 21:25:36'),
(46, '<p>اتفقت &nbsp;الشركه على &nbsp;5000 100 من &nbsp;الشركه الوط</p><p>نيه &nbsp;والمقاولات &nbsp;بحضور &nbsp;المهندس &nbsp;محمد &nbsp;ثروت &nbsp;محمد &nbsp;</p>', 71, '2022-07-24 17:19:35', '2022-07-24 17:19:35'),
(47, '<p>بيانات اضافيه&nbsp;</p>', 72, '2022-07-29 21:31:00', '2022-07-29 21:31:00'),
(48, '<p>ثثثثثثثثثثث</p>', 72, '2022-07-29 21:31:30', '2022-07-29 21:31:30'),
(49, '<p>عقد مالك لمشروع تبطين الترع</p>', 73, '2022-08-01 07:15:14', '2022-08-01 07:15:14'),
(51, '<p>مشروع تجهيز عدد 32 بئر إنتاجي بالأعمال الكهروميكانيكية والكهربية والطاقة الشمسية بالواحات البحرية</p>', 75, '2022-08-02 09:52:33', '2022-08-02 09:52:33'),
(53, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.</p><p>Nunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.</p><p>In sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.</p>', 76, '2022-08-14 19:45:28', '2022-08-14 19:45:28'),
(54, '<p>vxgcgcfh</p>', 77, '2022-08-15 18:04:40', '2022-08-15 18:04:40');

-- --------------------------------------------------------

--
-- Table structure for table `akd_files`
--

CREATE TABLE `akd_files` (
  `id` int(11) NOT NULL,
  `path` varchar(225) NOT NULL,
  `akd_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `akd_files`
--

INSERT INTO `akd_files` (`id`, `path`, `akd_id`, `created_at`, `updated_at`) VALUES
(24, '589_1657584010korasa3.txt', 44, NULL, NULL),
(25, '953_1657584010korasa4.txt', 44, NULL, NULL),
(26, '729_1658532336korasa4.txt', 45, NULL, NULL),
(27, '407_1658690375korasa1.txt', 46, NULL, NULL),
(28, '784_1658690375korasa2.txt', 46, NULL, NULL),
(29, '350_1658690375korasa3.txt', 46, NULL, NULL),
(30, '911_1658690375korasa4.txt', 46, NULL, NULL),
(31, '655_1658690375korasa5.txt', 46, NULL, NULL),
(32, '458_1658690375korasa6.txt', 46, NULL, NULL),
(33, '924_1659137460pdf-test.pdf', 47, NULL, NULL),
(34, '350_1659137490pdf-test.pdf', 48, NULL, NULL),
(35, '447_1659138287pdf-test.pdf', 1, NULL, NULL),
(36, '789_1659345314العقد.PDF', 49, NULL, NULL),
(38, '983_1659441153عقد المالك.PDF', 51, NULL, NULL),
(39, '213_1660502870Screenshot (1).png', 50, NULL, NULL),
(40, '123_1660503682Screenshot (1).png', 52, NULL, NULL),
(41, '119_1660513528Screenshot (1).png', 53, NULL, NULL),
(42, '512_1660593880Screenshot (1).png', 54, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `amresnad`
--

CREATE TABLE `amresnad` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `esnad_number` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `geha_sader` varchar(225) NOT NULL,
  `contract_value` int(11) NOT NULL,
  `start_project` varchar(225) NOT NULL,
  `end_project` varchar(225) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amresnad`
--

INSERT INTO `amresnad` (`id`, `project_id`, `esnad_number`, `date`, `geha_sader`, `contract_value`, `start_project`, `end_project`, `status`, `created_at`, `updated_at`) VALUES
(4, 43, '808000000', '2022-07-23', 'الشركه الوطنيه للمقاولات', 90, '2022/07/28', '2022/07/30', 1, '2022-07-14 10:15:50', '2022-07-14 10:16:30'),
(5, 62, '1245', '2022-07-28', 'الشركه الوطنيه للمقاولات', 80000, '2022/07/29', '2022/07/30', 0, '2022-07-24 15:37:34', '2022-07-24 15:37:34'),
(6, 71, '202021', '2022-07-18', 'الشركه الوطنيه للمقاولات', 20020, '2022/07/23', '2022/07/23', 0, '2022-07-24 17:31:24', '2022-07-24 17:31:24'),
(7, 71, '88000', '2022-07-21', 'الشركه الوطنيه للمقاولات', 7471, '2022/07/28', '2022/07/30', 1, '2022-07-24 17:32:13', '2022-07-24 17:32:13'),
(8, 72, '585555555', '2022-08-05', 'الشركه الوطنيه للمقاولات', 888888, '2022/07/01', '2022/07/16', 0, '2022-07-29 11:30:41', '2022-07-31 13:55:35'),
(11, 74, '74', '2022-08-12', 'جهاز مشروعات الخدمة الوطنية', 345879, '2021/10/03', '2021/10/29', 0, '2022-08-14 18:52:11', '2022-08-14 18:52:11'),
(12, 76, '94533', '2022-08-16', 'dddd', 345879, '2022/08/25', '2022/08/25', 0, '2022-08-14 19:52:43', '2022-08-14 19:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `applicantes`
--

CREATE TABLE `applicantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicantes`
--

INSERT INTO `applicantes` (`id`, `name`, `phone`, `email`, `about`, `image`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 'محمود أحمد على ', '010207158', 'm@gmail.com', 'asdghlkjsadhgasghdhgdaddkasdad', 'test.png ', 1, NULL, NULL),
(2, 'احمد  محمد  ', '0102655845887', 'k@gmail.com', 'dsnldhlsahdhaslkdhklasddsadasd', 'test2.jpg', 2, '2021-03-23 22:00:25', '2021-03-25 22:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_files`
--

CREATE TABLE `applicant_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant_files`
--

INSERT INTO `applicant_files` (`id`, `path`, `applicant_id`, `created_at`, `updated_at`) VALUES
(1, 'test.png', 1, '2021-03-25 02:02:06', '2021-03-26 02:02:06'),
(2, 'test2.png', 2, '2021-03-24 02:02:06', '2021-03-18 02:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `phone`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(2, 'rrrrrrrr', 'admin@gmail.com', '141411414', '414141', '144141', '2021-03-07 00:16:39', '2021-03-07 00:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `eltezam`
--

CREATE TABLE `eltezam` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eltezam`
--

INSERT INTO `eltezam` (`id`, `content`, `project_id`, `created_at`, `updated_at`) VALUES
(1, '<p>قامت &nbsp;الشركه ccccccccc2</p>', 43, '2022-07-22 17:37:13', '2022-07-22 19:39:14'),
(2, '<p>قامت &nbsp;الشركه 2</p>', 43, '2022-07-22 17:37:49', '2022-07-22 17:37:49'),
(5, '<p>ddddddddddddddddd</p>', 44, '2022-07-22 21:24:56', '2022-07-22 21:24:56'),
(6, '<p>Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا الن</p>', 71, '2022-07-24 18:38:09', '2022-07-24 18:38:09'),
(7, '<p>لا يوجد</p>', 73, '2022-08-02 12:26:03', '2022-08-02 12:26:03'),
(8, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis in eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.</p>', 74, '2022-08-14 16:54:03', '2022-08-14 17:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `eltezam_files`
--

CREATE TABLE `eltezam_files` (
  `id` int(11) NOT NULL,
  `path` varchar(225) NOT NULL,
  `eltezam_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eltezam_files`
--

INSERT INTO `eltezam_files` (`id`, `path`, `eltezam_id`, `created_at`, `updated_at`) VALUES
(1, '742_1658518669korasa1.txt', 2, NULL, NULL),
(2, '669_1658518733korasa5.txt', 3, NULL, NULL),
(3, '20_1658518826korasa1.txt', 4, NULL, NULL),
(4, '83_1658525954korasa5.txt', 1, NULL, NULL),
(5, '664_1658532296korasa3.txt', 5, NULL, NULL),
(6, '813_1658695089korasa1.txt', 6, NULL, NULL),
(7, '901_1658695089korasa2.txt', 6, NULL, NULL),
(8, '254_1658695089korasa3.txt', 6, NULL, NULL),
(9, '135_1658695089korasa4.txt', 6, NULL, NULL),
(10, '370_1658695089korasa5.txt', 6, NULL, NULL),
(11, '689_1658695089korasa6.txt', 6, NULL, NULL),
(12, '278_16594503631.pdf', 7, NULL, NULL),
(14, '753_1660505869Screenshot (1).png', 8, NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fax`
--

CREATE TABLE `fax` (
  `id` int(11) NOT NULL,
  `khas_geha` varchar(225) NOT NULL,
  `kaed` varchar(225) NOT NULL,
  `geha_ekhtesas` int(11) NOT NULL,
  `waght_fax` tinyint(4) NOT NULL DEFAULT '0',
  `sader_elgeha_number` int(11) NOT NULL,
  `esdar_date` date NOT NULL,
  `sader_elgeha_date` date NOT NULL,
  `description` text NOT NULL,
  `geha_fax` varchar(225) NOT NULL,
  `addedby` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fax`
--

INSERT INTO `fax` (`id`, `khas_geha`, `kaed`, `geha_ekhtesas`, `waght_fax`, `sader_elgeha_number`, `esdar_date`, `sader_elgeha_date`, `description`, `geha_fax`, `addedby`, `created_at`, `updated_at`) VALUES
(31, 'النظم', '1233', 21, 1, 1114141, '2022-07-07', '2022-07-20', '<p>خاص بالصحه والاسسعاف</p>', '7474', 72, '2022-07-24 21:22:35', '2022-08-14 20:15:05'),
(32, 'النظم', '47474747', 6, 0, 4747474, '2022-07-25', '2022-07-15', '<p>74747474</p>', '474747', 73, '2022-07-24 21:24:30', '2022-07-24 21:24:30'),
(33, 'هيئة إمداد وتموين القوات المسلحة', '11/5654/602', 17, 1, 6170, '2022-08-01', '2022-07-25', '<p>&nbsp; &nbsp; &nbsp;</p><p>تحيه طيبه وبعد،،،</p><p>تتشرف شركة زمالك بزنس سنتر الوكيل المعتمد لشركة زيروكس مصر بتقديم عرض التالى لسيادتكم :</p><p>&nbsp;</p><p>&nbsp;</p><p>شرو ط التوريد : &nbsp;</p><p>• الـــــدفع &nbsp;: نقدا او بشيك بأسم زمالك بزنس سنتر .</p><p>• التوريد &nbsp; : مخازنكم/ بضاعة حاضرة فورا من أستلام &nbsp;امر التوريد.</p><p>• الاسعار : &nbsp;شاملة ضريبة القيمة المضافة &nbsp;.</p><p>• الارتباط :الى 31/12/2021 &nbsp;</p><p>1. علما بان مستلزمات التشغيل الأصلية والمشمولة بضمان شركة زيروكس مصر حاملة للعلامة المائية الحرارية .</p><p>• عند تعرضها لمصدر حرارى يختفى اسم شركة زيروكس ثم لا يلبث ان يعود بعد ابعاد مصدر الحرارة .</p><p>• عند نزع العلامة تتلف وتترك أثرا على العبوة ولايمكن وضعها على عبوة أخرى .</p><p>وتفضلوابقبول فائق الاحترام ،،،</p><p>&nbsp;</p><p>إدارة المبيعات &nbsp;</p><p>ريهام &nbsp;&nbsp;</p>', 'إدارة النقل', 67, '2022-08-01 20:48:43', '2022-08-14 19:49:22'),
(34, 'كلية الطب جامعة الاسكندرية', '6045', 28, 1, 4139, '2022-07-26', '2022-07-17', '<p>&nbsp; &nbsp; &nbsp;</p><p>تحيه طيبه وبعد،،،</p><p>تتشرف شركة زمالك بزنس سنتر الوكيل المعتمد لشركة زيروكس مصر بتقديم عرض التالى لسيادتكم :</p><p>&nbsp;</p><p>&nbsp;</p><p>شرو ط التوريد : &nbsp;</p><p>• الـــــدفع &nbsp;: نقدا او بشيك بأسم زمالك بزنس سنتر .</p><p>• التوريد &nbsp; : مخازنكم/ بضاعة حاضرة فورا من أستلام &nbsp;امر التوريد.</p><p>• الاسعار : &nbsp;شاملة ضريبة القيمة المضافة &nbsp;.</p><p>• الارتباط :الى 31/12/2021 &nbsp;</p><p>1. علما بان مستلزمات التشغيل الأصلية والمشمولة بضمان شركة زيروكس مصر حاملة للعلامة المائية الحرارية .</p><p>• عند تعرضها لمصدر حرارى يختفى اسم شركة زيروكس ثم لا يلبث ان يعود بعد ابعاد مصدر الحرارة .</p><p>• عند نزع العلامة تتلف وتترك أثرا على العبوة ولايمكن وضعها على عبوة أخرى .</p><p>وتفضلوابقبول فائق الاحترام ،،،</p><p>&nbsp;</p><p>إدارة المبيعات &nbsp;</p><p>ريهام &nbsp;&nbsp;</p>', 'مستشفي المواساه الجامعي', 67, '2022-08-01 20:54:08', '2022-08-01 20:54:08'),
(35, 'سايلوفودز', '60/2022', 21, 1, 5678, '2022-07-05', '2022-07-05', '<p>&nbsp; &nbsp; &nbsp;</p><p>تحيه طيبه وبعد،،،</p><p>تتشرف شركة زمالك بزنس سنتر الوكيل المعتمد لشركة زيروكس مصر بتقديم عرض التالى لسيادتكم :</p><p>&nbsp;</p><p>&nbsp;</p><p>شرو ط التوريد : &nbsp;</p><p>• الـــــدفع &nbsp;: نقدا او بشيك بأسم زمالك بزنس سنتر .</p><p>• التوريد &nbsp; : مخازنكم/ بضاعة حاضرة فورا من أستلام &nbsp;امر التوريد.</p><p>• الاسعار : &nbsp;شاملة ضريبة القيمة المضافة &nbsp;.</p><p>• الارتباط :الى 31/12/2021 &nbsp;</p><p>1. علما بان مستلزمات التشغيل الأصلية والمشمولة بضمان شركة زيروكس مصر حاملة للعلامة المائية الحرارية .</p><p>• عند تعرضها لمصدر حرارى يختفى اسم شركة زيروكس ثم لا يلبث ان يعود بعد ابعاد مصدر الحرارة .</p><p>• عند نزع العلامة تتلف وتترك أثرا على العبوة ولايمكن وضعها على عبوة أخرى .</p><p>وتفضلوابقبول فائق الاحترام ،،،</p><p>&nbsp;</p><p>إدارة المبيعات &nbsp;</p><p>ريهام &nbsp;&nbsp;</p>', 'شركة سايلو فودز', 67, '2022-08-01 21:04:35', '2022-08-01 21:04:35'),
(36, 'شركة السويدي', '6133', 24, 1, 6133, '2022-07-31', '2022-07-27', '<p>مشروع &nbsp;تنفيذ عدد 4 خطوط هوائية جهد 220 ك.ف بمدينة السادات</p>', 'شركة السويدي', 67, '2022-08-02 12:50:49', '2022-08-02 12:50:49'),
(37, 'سايلوفودز', '6120', 19, 1, 70320, '2022-08-02', '2022-07-28', '<p>بشتن تنفيذ اعمال التعديلات الخاصة بسايلو -2</p>', 'شركة سايلو فودز', 67, '2022-08-02 12:55:26', '2022-08-02 14:19:25'),
(38, 'بشان اسلوب التراسل بين اجهزة القيادة العامة  5844', '5844', 17, 1, 14915, '2022-07-19', '2022-07-17', '<p>بشان اسلوب التراسل بين اجهزة القيادة العامة &nbsp;5844</p>', 'جهاز مشروعات الخدمة الوطنية', 67, '2022-08-02 14:03:26', '2022-08-02 14:03:26'),
(40, 'جهاز مشروعات الخدمة الوطنية', '2/111', 5, 1, 1332, '2022-07-31', '2022-07-28', '<p>بشان التصديق علي اتمام لقاء السيد السفير ايطاليا بالقاهرة 6110</p>', 'جهاز مشروعات الخدمة الوطنية', 67, '2022-08-02 14:15:50', '2022-08-14 22:19:58'),
(41, 'سايلوفودز', '124577', 6, 0, 1248, '2022-02-08', '2022-02-08', '<p>ازيك تيست&nbsp;</p>', 'test', 77, '2022-08-02 15:33:55', '2022-08-02 15:33:55'),
(42, 'الوطنية', '35648', 16, 1, 12458, '2024-02-08', '2027-02-19', '<p>تيت</p>', 'شركة السويدي', 79, '2022-08-02 15:49:26', '2022-08-02 15:49:26'),
(43, 'الشركة', '12/ق/1254', 1, 0, 1, '2022-08-26', '2022-08-26', '<p>تيييييييييييييي</p>', 'مستشفي المواساه الجامعي', 79, '2022-08-02 15:51:29', '2022-08-02 15:51:29'),
(44, 'الشركة', '12/ق/1254', 1, 0, 1, '2022-08-26', '2022-08-26', '<p>تتتتتتتتتتتتتتتتتت</p>', 'مستشفي المواساه الجامعي', 79, '2022-08-02 15:53:31', '2022-08-02 15:53:31'),
(45, 'ray', '12547', 14, 0, 32546, '2022-08-24', '2022-08-11', '<p>jjhhfuyfty</p>', 'جهاز مشروعات الخدمة الوطنية', 80, '2022-08-02 15:58:19', '2022-08-02 15:58:19'),
(46, 'teeeeeeeeeeet', '12231`', 5, 0, 3431, '2022-08-19', '2022-08-19', '<p>teeeeeeeeeeeeet</p>', 'إدارة النقل', 89, '2022-08-02 16:02:59', '2022-08-02 16:04:22'),
(47, 'الشركة الوطنية للزراعات المحمية', '35648', 31, 0, 5678, '2022-08-25', '2022-08-18', '<p>teeeeeeeeeeeeeey</p>', 'nozom', 85, '2022-08-02 16:06:55', '2022-08-02 16:10:57'),
(48, 'ثروت', '124578/نظم/21', 8, 0, 2354, '2022-08-30', '2022-08-18', '<p>تيسسسسسسسسسسسسسسسسست ثروت</p>', 'شركة سايلو فودز', 67, '2022-08-02 19:52:52', '2022-08-02 19:53:26'),
(49, 'jkldm jkldm تنمية', '1245544', 1, 0, 12453, '2022-08-30', '2022-08-18', '<p>تناناععاععاعاعهخعخههخعهخعخه</p>', 'وزارة الزراعة', 82, '2022-08-02 19:58:19', '2022-08-02 19:58:19'),
(50, 'jkldm jkldm تنمية', '1245544', 1, 0, 12453, '2022-08-30', '2022-08-18', '<p>تناتاناعععععععاااععاععاعا</p>', 'وزارة الزراعة', 82, '2022-08-02 19:59:17', '2022-08-02 19:59:17'),
(51, 'jkldm jkldm تنمية', '1245544', 1, 0, 12453, '2022-08-30', '2022-08-18', '<p>تانتتتاااخخخخخ998989</p>', 'وزارة الزراعة', 82, '2022-08-02 20:00:00', '2022-08-02 20:00:00'),
(52, 'تييييييييت', '20020', 31, 0, 20020, '2022-08-24', '2022-08-12', '<p>تتتتتتتتتتتتتت</p>', '20020', 82, '2022-08-02 20:05:37', '2022-08-02 20:07:38'),
(53, 'سايلوفودز', '12457', 36, 1, 1, '2022-08-25', '2022-08-05', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.</p><p>Nunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.</p><p>In sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.</p>', 'إدارة النقل', 67, '2022-08-14 19:50:01', '2022-08-14 19:50:01'),
(55, 'الشركة الوطنية للزراعات المحمية', '12345', 19, 1, 12453, '2022-08-16', '2022-08-15', '<p>الوطنية</p>', 'شركة سايلو فودز', 90, '2022-08-14 20:15:53', '2022-08-14 20:15:53'),
(56, 'سايلوفودز', '35648', 1, 0, 1212, '2022-08-19', '2022-08-03', '<p>visitor@gmail.comvisitor@gmail.comvisitor@gmail.comvisitor@gmail.comvisitor@gmail.comvisitor@gmail.comvisitor@gmail.comvisitor@gmail.comvisitor@gmail.comvisitor@gmail.comvisitor@gmail.comvisitor@gmail.comvisitor@gmail.comvisitor@gmail.com</p>', 'شركة السويدي', 69, '2022-08-14 20:58:55', '2022-08-14 20:58:55'),
(57, 'سايلوفودز', '12457', 36, 0, 12453, '2022-08-09', '2022-08-03', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.</p><p>Nunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.</p><p>In sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.</p>', 'وزارة الزراعة', 93, '2022-08-14 22:20:35', '2022-08-14 23:15:34'),
(58, 'sgfdgsdfg', '5234523453', 31, 0, 3343, '2022-08-02', '2022-08-13', '<p>frfsdhttp://127.0.0.1:8000/admin/add-admin</p>', '3434', 96, '2022-08-14 23:09:53', '2022-08-14 23:09:53'),
(59, 'sgfdgsdfg', '5234523453', 18, 0, 3343, '2022-08-02', '2022-08-13', '<p>dsfadf</p>', '3434', 96, '2022-08-14 23:10:26', '2022-08-14 23:10:26'),
(60, 'fsadfdsaffdsa', '234', 18, 1, 12453, '2022-08-03', '2022-08-04', '<p>fdsfdafffsd</p>', 'شركة سايلو فودز', 95, '2022-08-14 23:13:38', '2022-08-14 23:13:38'),
(61, 'fdsafds', '342443', 19, 0, 32332, '2022-08-18', '2022-08-25', '<p>fdasfsafd</p>', 'dffsad', 98, '2022-08-14 23:20:27', '2022-08-14 23:20:27'),
(62, 'الشركة الوطنية للزراعات المحمية', '35436', 23, 0, 2323, '2022-08-10', '2022-08-04', '<p>efasddsf</p>', '2332', 97, '2022-08-14 23:21:11', '2022-08-14 23:21:11'),
(63, 'الشركة الوطنية للزراعات المحمية', '232', 19, 0, 23323, '2022-08-03', '2022-08-06', '<p>23232</p>', '2332', 90, '2022-08-14 23:23:17', '2022-08-14 23:23:17'),
(64, 'الشركة الوطنية للزراعات المحمية', '232', 23, 0, 23323, '2022-08-03', '2022-08-06', '<p>fdafd</p>', '2332', 90, '2022-08-14 23:23:34', '2022-08-14 23:23:34'),
(65, 'custom', '3232', 23, 0, 333, '2022-08-17', '2022-08-11', '<p>232332</p>', '3232', 90, '2022-08-14 23:24:15', '2022-08-14 23:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `fax_files`
--

CREATE TABLE `fax_files` (
  `id` int(11) NOT NULL,
  `path` varchar(225) NOT NULL,
  `fax_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fax_files`
--

INSERT INTO `fax_files` (`id`, `path`, `fax_id`, `created_at`, `updated_at`) VALUES
(24, '657_1658697755pdf-test.pdf', 31, NULL, NULL),
(25, '423_1658697870pdf-test.pdf', 32, NULL, NULL),
(26, '137_16593869231.pdf', 33, NULL, NULL),
(27, '839_16593872481.pdf', 34, NULL, NULL),
(28, '824_165938787510001.pdf', 35, NULL, NULL),
(29, '902_165938787510002.pdf', 35, NULL, NULL),
(30, '655_165938787510003.pdf', 35, NULL, NULL),
(31, '312_165938787510004.pdf', 35, NULL, NULL),
(32, '181_165938787510005.pdf', 35, NULL, NULL),
(33, '67_16594446491.pdf', 36, NULL, NULL),
(34, '986_16594449261.pdf', 37, NULL, NULL),
(35, '843_165944900610001.pdf', 38, NULL, NULL),
(37, '301_16594497501.pdf', 40, NULL, NULL),
(38, '826_1659454435Screenshot (1).png', 41, NULL, NULL),
(39, '529_1659455366Screenshot (1).png', 42, NULL, NULL),
(40, '43_1659455611Screenshot (1).png', 44, NULL, NULL),
(41, '175_1659455899Screenshot (1).png', 45, NULL, NULL),
(42, '851_1659456179Screenshot (1).png', 46, NULL, NULL),
(43, '417_1659456415Screenshot (1).png', 47, NULL, NULL),
(44, '66_1659469972Screenshot (1).png', 48, NULL, NULL),
(45, '102_1659470400Screenshot (1).png', 51, NULL, NULL),
(46, '874_1659470737Screenshot (1).png', 52, NULL, NULL),
(47, '804_1660506601Screenshot (1).png', 53, NULL, NULL),
(48, '209_1660508153Screenshot (1).png', 55, NULL, NULL),
(49, '196_1660510735Screenshot (1).png', 56, NULL, NULL),
(50, '839_1660515635Screenshot (1).png', 57, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fax_viewers`
--

CREATE TABLE `fax_viewers` (
  `id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `fax_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fax_viewers`
--

INSERT INTO `fax_viewers` (`id`, `sector_id`, `fax_id`, `created_at`, `updated_at`) VALUES
(31, 1, 1, '2021-10-08', '2021-10-08'),
(32, 3, 29, '2022-07-23', '2022-07-23'),
(33, 3, 29, '2022-07-23', '2022-07-23'),
(34, 4, 29, '2022-07-23', '2022-07-23'),
(35, 4, 29, '2022-07-23', '2022-07-23'),
(36, 4, 29, '2022-07-23', '2022-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `hosts`
--

CREATE TABLE `hosts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hosts`
--

INSERT INTO `hosts` (`id`, `name`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'استضافة بيزنس', 200, 0, '2021-04-15 07:09:51', '2021-04-15 07:09:51'),
(2, 'أستضافه شركات', 100, 0, '2021-04-15 07:11:13', '2021-04-15 07:11:13'),
(3, 'أستضافه مفتوحه', 500, 0, '2021-04-15 07:12:04', '2021-04-15 07:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `host_services`
--

CREATE TABLE `host_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `host_services`
--

INSERT INTO `host_services` (`id`, `name`, `host_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'بريد الكتروني رسمي : 10', 1, 0, '2021-04-15 07:09:51', '2021-04-15 07:09:51'),
(2, 'ترافيك : غير محدود', 1, 0, '2021-04-15 07:09:51', '2021-04-15 07:09:51'),
(3, 'قواعد بيانات: غير محدود', 1, 0, '2021-04-15 07:09:51', '2021-04-15 07:09:51'),
(4, 'لوحة تحكم ® CPanel', 1, 0, '2021-04-15 07:09:51', '2021-04-15 07:09:51'),
(5, 'دعم فني: غير متاح', 1, 0, '2021-04-15 07:09:51', '2021-04-15 07:09:51'),
(6, 'مساحة : 20 جيجا', 2, 0, '2021-04-15 07:11:13', '2021-04-15 07:11:13'),
(7, 'ترافيك : غير محدود', 2, 0, '2021-04-15 07:11:13', '2021-04-15 07:11:13'),
(8, 'قواعد بيانات: غير محدود', 2, 0, '2021-04-15 07:11:13', '2021-04-15 07:11:13'),
(9, 'لوحة تحكم ® CPanel', 2, 0, '2021-04-15 07:11:13', '2021-04-15 07:11:13'),
(10, 'دعم فني: محدود', 2, 0, '2021-04-15 07:11:13', '2021-04-15 07:11:13'),
(11, 'مساحة : غير محدودة', 3, 0, '2021-04-15 07:12:04', '2021-04-15 07:12:04'),
(12, 'بريد الكتروني رسمي : غير محدود', 3, 0, '2021-04-15 07:12:04', '2021-04-15 07:12:04'),
(13, 'ترافيك : غير محدود', 3, 0, '2021-04-15 07:12:04', '2021-04-15 07:12:04'),
(14, 'قواعد بيانات: غير محدود', 3, 0, '2021-04-15 07:12:04', '2021-04-15 07:12:04'),
(15, 'دعم فني: متاح', 3, 0, '2021-04-15 07:12:04', '2021-04-15 07:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `icone`
--

CREATE TABLE `icone` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `icones`
--

CREATE TABLE `icones` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icones`
--

INSERT INTO `icones` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 1, '2021-03-24 01:41:34', '2021-03-24 01:41:34'),
(2, 'instagram', 1, '2021-03-24 01:41:34', '2021-03-23 01:41:34'),
(3, 'linkedin', 2, '2021-03-23 01:42:28', '2021-03-18 01:42:28'),
(4, 'behance ', 2, '2021-03-24 01:42:28', '2021-03-25 01:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Marketing', '2021-03-10 21:28:38', '2021-03-18 21:28:38'),
(2, 'UI, UX ', '2021-03-17 21:28:38', '2021-03-19 21:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `job_applicantes`
--

CREATE TABLE `job_applicantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `korasabaten`
--

CREATE TABLE `korasabaten` (
  `id` int(11) NOT NULL,
  `baten_name` varchar(225) NOT NULL,
  `korasa_id` int(11) NOT NULL,
  `value` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `korasamalekowners`
--

CREATE TABLE `korasamalekowners` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(225) NOT NULL,
  `value` varchar(11) NOT NULL,
  `korasa_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korasamalekowners`
--

INSERT INTO `korasamalekowners` (`id`, `owner_name`, `value`, `korasa_id`, `created_at`, `updated_at`) VALUES
(89, 'مالك 1 ', '7000', 154, '2022-07-07', '2022-07-07'),
(90, 'مالك  2 ', '7885', 154, '2022-07-07', '2022-07-07'),
(93, 'باطن 11', '10000000', 153, '2022-07-07', '2022-07-07'),
(94, 'باطن 88 7', '80000007', 153, '2022-07-07', '2022-07-07'),
(97, '202020', '2020', 158, '2022-07-12', '2022-07-12'),
(98, '2020', '2020', 158, '2022-07-12', '2022-07-12'),
(99, 'مالك 1 ', '1000', 159, '2022-07-12', '2022-07-12'),
(100, 'مالك 2 ', '8000', 159, '2022-07-12', '2022-07-12'),
(101, 'مالك 5555', '80000', 160, '2022-07-12', '2022-07-12'),
(102, 'مالك 99999', '7000', 160, '2022-07-12', '2022-07-12'),
(103, 'مالك 1 ', '100000', 156, '2022-07-12', '2022-07-12'),
(104, 'مالك 2', '200000', 156, '2022-07-12', '2022-07-12'),
(105, 'مالك 1 ', '2000', 162, '2022-07-16', '2022-07-16'),
(106, 'مالك  2 ', '8000', 162, '2022-07-16', '2022-07-16'),
(107, 'ابلاالبالب', '20', 163, '2022-07-16', '2022-07-16'),
(108, 'مالك  2 ', '2020', 163, '2022-07-16', '2022-07-16'),
(109, '', '0', 163, '2022-07-16', '2022-07-16'),
(110, '', '0', 163, '2022-07-16', '2022-07-16'),
(113, 'مالك 1 ', '100000', 167, '2022-07-24', '2022-07-24'),
(114, 'مالك 4', '20000', 167, '2022-07-24', '2022-07-24'),
(115, 'مالك 1 ', '100000', 169, '2022-07-24', '2022-07-24'),
(116, 'مالك  2 ', '100000', 169, '2022-07-24', '2022-07-24'),
(117, 'م احمد ', '55225242', 170, '2022-07-24', '2022-07-24'),
(118, 'م : محود ', '52524', 170, '2022-07-24', '2022-07-24'),
(119, 'شركه ثروت  الباطن ', '800', 171, '2022-07-24', '2022-07-24'),
(120, 'شركه الفرع الجديد ', '8000', 171, '2022-07-24', '2022-07-24'),
(121, 'وزارة الري', '50000000', 172, '2022-08-01', '2022-08-01'),
(122, 'الشركة الوطنية', '10000000000', 172, '2022-08-01', '2022-08-01'),
(123, 'الجارحى', '5000000000', 173, '2022-08-01', '2022-08-01'),
(125, 'وزارة الموارد المائية والري', '35900000', 175, '2022-08-02', '2022-08-02'),
(126, 'بيت الهندسة', '3361200', 174, '2022-08-14', '2022-08-14'),
(127, 'بيت الهندسة', '3361200', 174, '2022-08-14', '2022-08-14'),
(128, 'بروتيكشن', '3361200', 174, '2022-08-14', '2022-08-14'),
(129, '3361200', '3361200', 174, '2022-08-14', '2022-08-14'),
(130, 'الزاهى', '0', 177, '2022-08-14', '2022-08-14'),
(131, 'محافظة كفر الشيخ', '20000000000', 180, '2022-08-14', '2022-08-14'),
(132, 'محافظة كفر الشيخ', '34242343214', 183, '2022-08-14', '2022-08-14'),
(133, 'الزاهى', '1000000000', 184, '2022-08-14', '2022-08-14'),
(134, 'محافظة كفر الشيخ', '45545', 185, '2022-08-14', '2022-08-14'),
(135, '', '0', 185, '2022-08-14', '2022-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `korasa_eshtertat_files`
--

CREATE TABLE `korasa_eshtertat_files` (
  `id` int(11) NOT NULL,
  `path` varchar(225) NOT NULL,
  `korasa_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korasa_eshtertat_files`
--

INSERT INTO `korasa_eshtertat_files` (`id`, `path`, `korasa_id`, `updated_at`, `created_at`) VALUES
(111, '138_1659441137كراسة الشروط والمواصفات_مالك.PDF', 175, NULL, NULL),
(119, '852_1660504100Screenshot (1).png', 184, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `korasa_eshtratat`
--

CREATE TABLE `korasa_eshtratat` (
  `id` int(11) NOT NULL,
  `content` text,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `project_id` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korasa_eshtratat`
--

INSERT INTO `korasa_eshtratat` (`id`, `content`, `status`, `project_id`, `updated_at`, `created_at`) VALUES
(175, '<p>مشروع تجهيز عدد 32 بئر إنتاجي بالأعمال الكهروميكانيكية والكهربية والطاقة الشمسية بالواحات البحرية</p>', 0, 75, '2022-08-02 11:52:17', '2022-08-02 11:52:17'),
(184, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.</p><p>Nunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.</p><p>In sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.</p>', 0, 74, '2022-08-14 19:08:20', '2022-08-14 19:08:20'),
(185, '<p>fl;dskglkfl;kgl;kfdg;lkdsf;</p>', 0, 76, '2022-08-14 21:44:45', '2022-08-14 21:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `mawkef_tanfezy`
--

CREATE TABLE `mawkef_tanfezy` (
  `id` int(11) NOT NULL,
  `project_contents` text NOT NULL,
  `contract_date` date DEFAULT NULL,
  `project_start` text NOT NULL,
  `project_end` text,
  `execuation_percent` int(11) NOT NULL,
  `monsarf` int(11) NOT NULL,
  `monsarf_percent` int(11) NOT NULL,
  `contract_value` text NOT NULL,
  `estechary_office` varchar(225) DEFAULT NULL,
  `estecary_office` varchar(225) DEFAULT NULL,
  `notes` text NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mawkef_tanfezy`
--

INSERT INTO `mawkef_tanfezy` (`id`, `project_contents`, `contract_date`, `project_start`, `project_end`, `execuation_percent`, `monsarf`, `monsarf_percent`, `contract_value`, `estechary_office`, `estecary_office`, `notes`, `project_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'شركه أوراسكوم ', '2021-09-08', '2021-09-08', '2021-09-24', 20, 300, 50, '0', '', 'لاحظ المكتب  الاستشاري  الاتى ....................', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص ', 0, 0, '2021-09-07 12:30:19', '2021-09-03 12:30:19'),
(2, 'شركه حسن علام', NULL, '2021-09-03', '2021-09-18', 60, 300, 20, '302020', NULL, 'sdsadasdsadsad', 'xscdffdesadad', 24, 0, '2021-09-02 14:13:23', '2021-09-02 14:13:23'),
(4, 'شركه حسن علام', NULL, '0000-00-00', '0000-00-00', 200, 600, 20, '30200', NULL, NULL, '<p>sadfsadfsd</p>', 24, 0, '2021-09-11 18:58:22', '2021-09-11 18:58:22'),
(5, 'شركه المحمديه', NULL, '22 Sep, 2021', '23 Sep, 2021', 4141, 414, 41, '54', NULL, NULL, '<p>vbnvcbbvcbvc</p>', 24, 0, '2021-09-11 19:11:43', '2021-09-11 19:11:43'),
(7, 'الوطنيه للدواجن', NULL, '13 Jul, 2022', '13 Jul, 2022', 80, 70000, 50, '10000', NULL, NULL, '<p>ملاحضات المكتب الاستشاري&nbsp;</p>', 43, 0, '2022-07-12 16:49:39', '2022-07-12 16:49:39'),
(8, 'الوطنيه للدواجن', '2022-07-14', '2022-07-01', '2022-07-08', 8000, 80000, 50, '80000', 'رائد : محمد', NULL, '<p>ملاحضات&nbsp;</p>', 43, 0, '2022-07-12 16:54:47', '2022-07-12 16:54:47'),
(9, 'الوطنيه للمقاولات', '2022-07-22', '2022-07-29', '2022-07-31', 80, 70, 900, '8000', 'المكتب الاستشاري', NULL, '<p>الملاحظات العامه للمشروع&nbsp;</p>', 43, 0, '2022-07-12 17:02:05', '2022-07-12 17:02:05'),
(11, 'الوطنيه للدواجن3333xxxxxx', '2022-07-22', '31 Oct, 1914', '31 Oct, 1914', 80000000, 5555, 444, '555', 'ببببب', NULL, '<p>بببببب</p>', 43, 0, '2022-07-12 17:06:19', '2022-07-13 00:17:19'),
(12, 'الوطنيه', '2022-07-09', '2022-07-15', '2022-07-21', 50, 500, 770, '50000000', 'رائد : احمد محمد', NULL, '<p>لبللبيلبيليبليبليبلبيل</p>', 71, 0, '2022-07-24 20:19:54', '2022-07-24 20:21:10'),
(13, 'الوطنيه', '2022-07-16', '2022-07-08', '2022-07-16', 500, 5000, 50, '80000', '800000', NULL, '<p>بلبيليبلبيلبيليبلبيل</p>', 71, 1, '2022-07-24 20:21:54', '2022-07-24 20:21:54'),
(15, 'RGS', '2019-10-02', '2019-10-02', '2021-04-01', 88, 16600000, 63, '35900000', 'الشركة الوطنية للمقاولات', NULL, '<p>لا يوجد</p><p>&nbsp;</p>', 75, 0, '2022-08-02 12:07:33', '2022-08-02 12:07:33'),
(17, 'عدد الشركات المنفذة 5 شركات', '2022-08-11', '2021-10-07', '2021-10-31', 65, 4565654, 54, '345879', '4523534', NULL, '<p>rLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.</p><p>Nunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.</p><p>In sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.</p>', 76, 0, '2022-08-14 21:58:15', '2022-08-14 21:58:15'),
(18, 'عدد الشركات المنفذة 5 شركات', '2022-08-03', '2021-10-07', '2021-10-31', 32, 23232323, 32, '3232', 'الوطنية للمقاولات', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.</p><p>Nunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.</p><p>In sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.</p>', 74, 0, '2022-08-14 21:59:50', '2022-08-14 21:59:50'),
(19, 'tgfdgdfgdgfgdfgdfg', '2022-09-21', '2022-09-29', '2022-09-30', 85, 855, 85852, '11111111111111111111111111111111111111111111111111111111111111111111111', 'hgnghbhfgh', NULL, '<p>gfhgfhfh</p>', 74, 0, '2022-09-03 11:51:03', '2022-09-03 11:51:03'),
(20, 'test', '2022-09-10', '2022-09-29', '2022-09-29', 85, 9555, 1254, '1234567891234456569887745', 'hgnghbhfgh', NULL, '<p>142254122</p>', 74, 0, '2022-09-10 11:50:37', '2022-09-10 11:50:37'),
(21, 'test22', '2022-09-10', '2022-09-07', '2022-09-21', 95, 25545, 2555, '125478996633255412125454', 'hgnghbhfgh', NULL, '<p>12454874</p>', 74, 0, '2022-09-10 13:06:01', '2022-09-10 13:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `mawkef_tanfezy_files`
--

CREATE TABLE `mawkef_tanfezy_files` (
  `id` int(11) NOT NULL,
  `path` varchar(225) NOT NULL,
  `mowakef_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'محمد  ثروت  محمد ', '01062070712', 'm@gmail.com', 'موضوع الرساله ', 'خسائر اللازمة ومطالبة حدة بل. الآخر الحلفاء أن غزو, إجلاء وتنامت عدد مع. لقهر معركة لبلجيكا، بـ انه, ربع الأثنان المقيتة في, اقتصّت المحور حدة و. هذه ما طرفاً عالمية استسلام, الصين وتنامت حين ٣٠, ونتج والحزب المذابح كل جوي. أسر كارثة المشتّتون بل, وبعض وبداية الصفحة غزو قد, أي بحث تعداد الجنوب.', '2021-03-24 06:42:47', '2021-03-18 06:42:47'),
(6, 'ghhjgggjh', '0102071', 'admin@gmail.com', 'hjffj', 'klkjkgfyudttd fffgg vffhhh', '2021-04-17 04:39:50', '2021-04-17 04:39:50'),
(7, 'Eric Jones', '555-555-1212', '555-555-1212', 'Who needs eyeballs, you need BUSINESS', 'My name’s Eric and I just came across your website - server-soft.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like server-soft.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE http://talkwithcustomer.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=server-soft.com', '2021-04-18 05:26:14', '2021-04-18 05:26:14'),
(8, 'Eric Jones', '555-555-1212', '555-555-1212', 'There they go…', 'Hey, my name’s Eric and for just a second, imagine this…\r\n\r\n- Someone does a search and winds up at server-soft.com.\r\n\r\n- They hang out for a minute to check it out.  “I’m interested… but… maybe…”\r\n\r\n- And then they hit the back button and check out the other search results instead. \r\n\r\n- Bottom line – you got an eyeball, but nothing else to show for it.\r\n\r\n- There they go.\r\n\r\nThis isn’t really your fault – it happens a LOT – studies show 7 out of 10 visitors to any site disappear without leaving a trace.\r\n\r\nBut you CAN fix that.\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know right then and there – enabling you to call that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nTime is money when it comes to connecting with leads – the difference between contacting someone within 5 minutes versus 30 minutes later can be huge – like 100 times better!\r\n\r\nPlus, now that you have their phone number, with our new SMS Text With Lead feature you can automatically start a text (SMS) conversation… so even if you don’t close a deal then, you can follow up with text messages for new offers, content links, even just “how you doing?” notes to build a relationship.\r\n\r\nStrong stuff.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=server-soft.com', '2021-04-26 07:32:37', '2021-04-26 07:32:37'),
(9, 'Thomas', '60 717 94 32', '60 717 94 32', 'Freelancers, they are ready to work with you', 'Find your Freelancer professional, worth it to try, believe me!\r\nFreelancers with amazing ideas, perfect skills, outstanding knowledge, low cost, ready to start right now, here: https://bit.ly/3vKlcxo\r\n\r\nSincerely, Thomas', '2021-05-08 07:45:08', '2021-05-08 07:45:08'),
(10, 'Eric Jones', '555-555-1212', '555-555-1212', 'Who needs eyeballs, you need BUSINESS', 'My name’s Eric and I just came across your website - server-soft.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like server-soft.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE http://talkwithcustomer.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=server-soft.com', '2021-05-15 11:54:03', '2021-05-15 11:54:03'),
(11, 'Eric Jones', '555-555-1212', '555-555-1212', 'Who needs eyeballs, you need BUSINESS', 'My name’s Eric and I just came across your website - server-soft.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like server-soft.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE http://talkwithcustomer.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=server-soft.com', '2021-05-19 05:56:55', '2021-05-19 05:56:55'),
(12, 'Eric Jones', '555-555-1212', '555-555-1212', 'how to turn eyeballs into phone calls', 'Hi, Eric here with a quick thought about your website server-soft.com...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=server-soft.com', '2021-05-20 10:09:03', '2021-05-20 10:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2020_08_25_044329_create_social_providers_table', 1),
(18, '2021_02_26_200614_create_services_table', 1),
(19, '2021_02_26_205650_create_teamwork_table', 1),
(20, '2021_02_26_205727_create_teamworkprojects_table', 1),
(21, '2021_02_26_205742_create_teamworktasks_table', 1),
(22, '2021_02_26_212146_create_shows_table', 1),
(23, '2021_02_26_212930_create_job_applicantes_table', 1),
(24, '2021_02_27_074752_create_servicesimages_table', 1),
(25, '2021_03_01_010327_create_projects_table', 1),
(26, '2021_03_01_013120_create_icone_table', 1),
(27, '2021_03_01_042703_create__portofolio_link_table', 2),
(28, '2021_03_01_044304_create_portofolio_images_table', 3),
(29, '2021_03_01_091223_create_offers_table', 4),
(30, '2021_03_02_001105_create__hosts_table', 5),
(31, '2021_03_02_001421_create__host_services_table', 5),
(32, '2021_03_02_073735_create_project_request_table', 6),
(33, '2021_03_02_202608_create_team_table', 7),
(34, '2021_03_02_204255_create_projectstatus_table', 8),
(35, '2021_03_02_205418_create_teamstatus_table', 9),
(36, '2021_03_03_214401_create_project_types_table', 10),
(37, '2021_03_03_221447_create_projectstatuses_table', 11),
(38, '2021_03_03_235355_create_project_files_table', 12),
(39, '2021_03_04_110748_create_project_team_table', 13),
(40, '2021_03_05_113351_create_project_links_table', 14),
(41, '2021_03_05_125626_create_roles_table', 15),
(42, '2021_03_05_171729_create_applicantes_table', 16),
(43, '2021_03_05_185647_create_applicants_table', 16),
(44, '2021_03_05_195645_create_jobs_table', 17),
(45, '2021_03_06_015925_create_applicant_files_table', 18),
(46, '2021_03_07_012642_create_contacts_table', 19),
(47, '2021_03_07_045853_create_table_messages', 20),
(48, '2021_08_23_162008_laratrust_setup_tables', 21);

-- --------------------------------------------------------

--
-- Table structure for table `moda`
--

CREATE TABLE `moda` (
  `id` int(11) NOT NULL,
  `project_start` text NOT NULL,
  `project_end` text NOT NULL,
  `programe` text NOT NULL,
  `project_id` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `amalmonfazavaliue` varchar(225) DEFAULT NULL,
  `egmalykemaamal` varchar(225) DEFAULT NULL,
  `nesbatanfeez` varchar(225) DEFAULT NULL,
  `time_added` varchar(225) DEFAULT NULL,
  `estlam_date` date DEFAULT NULL,
  `estlam_fely` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moda`
--

INSERT INTO `moda` (`id`, `project_start`, `project_end`, `programe`, `project_id`, `created_at`, `updated_at`, `amalmonfazavaliue`, `egmalykemaamal`, `nesbatanfeez`, `time_added`, `estlam_date`, `estlam_fely`) VALUES
(7, '2022/07/08', '2022/07/22', '<p>ccccccccccccccccccccccccccccccccccccccccccccccccccc</p>', 72, '2022-07-29 15:25:11', '2022-07-29 15:25:11', NULL, NULL, NULL, NULL, NULL, NULL),
(8, '12 Jan, 34', '23 Jan, 1934', 'xxxxxxxrrrrrrrrrrrrrrrr', 72, '2022-07-29 15:31:47', '2022-07-29 16:13:46', '2000', '8000', '30s', '47141sssssssssssssss555555', '2022-07-06', '2022-07-30'),
(9, '2019/09/02', '2021/12/11', '<p>تم اضافة 6 شهور لمدة المشروع</p>', 75, '2022-08-02 12:10:24', '2022-08-02 12:10:24', '0', '38900000', '88', '6 شهور', '2019-09-02', '2019-09-02'),
(10, '2022/08/10', '2022/08/10', '<p>لا يوجد</p><p>&nbsp;</p>', 73, '2022-08-02 14:26:32', '2022-08-02 14:26:32', '10000000', '10000000', '88', '6 شهور', '2022-08-16', '2022-09-02'),
(12, '2019/10/02', '2022/08/16', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.</p><p>Nunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.</p><p>In sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.</p>', 76, '2022-08-14 21:57:47', '2022-08-14 21:57:47', '10000000', '38900000', '88', '6 شهور', '2022-08-17', '2022-08-16'),
(13, '2021/10/04', '2021/10/22', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.</p><p>Nunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.</p><p>In sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.</p>', 74, '2022-08-14 22:00:31', '2022-08-14 22:00:31', '43434344', '4343434343', '43', '6 شهور', '2022-08-10', '2022-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `mokaysa`
--

CREATE TABLE `mokaysa` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mokaysa`
--

INSERT INTO `mokaysa` (`id`, `name`, `project_id`, `status`, `updated_at`, `created_at`) VALUES
(42, 'مقايسة إنشاء عدد 1', 74, 0, '2022-09-02 16:38:26', '2022-08-01 20:16:29'),
(43, 'جدول الكميات والفئات لتجهيز مشروع تجهيز عدد 32 بئر إنتاجي بالأعمال الكهروميكانيكية والكهربية والطاقة الشمسية بالواحات البحرية', 75, 0, '2022-08-02 11:56:08', '2022-08-02 11:56:08'),
(46, 'تامر', 76, 0, '2022-08-14 21:45:48', '2022-08-14 21:45:48'),
(47, 'تامر', 76, 0, '2022-08-14 21:47:15', '2022-08-14 21:47:15'),
(48, 'adminray', 76, 0, '2022-08-14 21:47:55', '2022-08-14 21:47:55'),
(49, 'dsafsaf', 74, 0, '2022-08-15 19:39:52', '2022-08-15 19:39:52'),
(50, '525464', 74, 0, '2022-08-15 20:06:20', '2022-08-15 20:06:20'),
(51, 'mohamed salem', 74, 0, '2022-09-03 12:03:26', '2022-09-03 12:03:26'),
(52, '454545', 74, 0, '2022-09-10 11:51:12', '2022-09-10 11:51:12'),
(53, '454545', 74, 0, '2022-09-10 11:53:03', '2022-09-10 11:53:03'),
(54, 'test', 74, 0, '2022-09-10 11:53:14', '2022-09-10 11:53:14'),
(55, '2145544545', 74, 0, '2022-09-10 13:06:31', '2022-09-10 13:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `mokaysa_bnod`
--

CREATE TABLE `mokaysa_bnod` (
  `id` int(11) NOT NULL,
  `element` text NOT NULL,
  `unit` varchar(225) NOT NULL,
  `quantity` int(11) NOT NULL,
  `feka` varchar(225) NOT NULL,
  `total` int(11) NOT NULL DEFAULT '0',
  `mokaysa_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mokaysa_bnod`
--

INSERT INTO `mokaysa_bnod` (`id`, `element`, `unit`, `quantity`, `feka`, `total`, `mokaysa_id`, `created_at`, `updated_at`) VALUES
(1, 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ..', '120', 50, '2', 20055, 10, '2021-10-12 21:04:11', '2021-10-12 21:04:11'),
(2, 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ..', '4', 2551, '14452', 66522, 11, '2021-10-12 21:25:29', '2021-10-12 21:25:29'),
(3, 'ffsdfلوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ..', '41', 4114, '141', 4141, 17, '2021-10-12 22:06:31', '2021-10-12 22:06:31'),
(4, 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ..', '60000', 8000, '9000', 8000, 18, '2022-07-23 19:23:32', '2022-07-23 19:23:32'),
(5, 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ..', 'dsfdsfsfdf', 55282, '58585', 8585, 18, '2022-07-23 19:56:34', '2022-07-23 19:56:34'),
(6, 'لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ..', '1000050', 50000, '50000', 80000, 18, '2022-07-23 22:51:01', '2022-07-23 22:51:01'),
(7, 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', 'متر مكعب', 1000, '5000', 400000, 25, '2022-07-24 19:27:42', '2022-07-24 19:27:42'),
(8, 'Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا الن', '10000', 111, '100', 1010, 25, '2022-07-24 19:28:11', '2022-07-24 19:28:11'),
(9, 'Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا الن  11111111', '741', 4141, '4141', 141, 26, '2022-07-24 19:30:39', '2022-07-24 19:30:39'),
(10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.\r\n\r\nMorbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.\r\n\r\nNunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.\r\n\r\nIn sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.', 'ج', 2321412, '666', 44453, 42, '2022-08-14 19:12:57', '2022-08-14 19:12:57'),
(11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.\r\n\r\nMorbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.\r\n\r\nNunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.\r\n\r\nIn sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.', 'جم', 123, '123', 123455, 42, '2022-08-14 19:19:08', '2022-08-14 19:19:08'),
(12, 'hello', 'hello', 24234, '444', 343543543, 48, '2022-08-14 21:49:52', '2022-08-14 21:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `mokaysa_files`
--

CREATE TABLE `mokaysa_files` (
  `id` int(11) NOT NULL,
  `path` varchar(225) NOT NULL,
  `mokaysa_id` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mokaysa_files`
--

INSERT INTO `mokaysa_files` (`id`, `path`, `mokaysa_id`, `updated_at`, `created_at`) VALUES
(113, '494_1659441368مقايسة المالك.PDF', 43, NULL, NULL),
(117, '28_1660513635Screenshot (1).png', 47, NULL, NULL),
(118, '746_1660513675Screenshot (1).png', 48, NULL, NULL),
(119, '389_1662136706swip.gif', 42, NULL, NULL),
(120, '578_1662206606textmenu.PNG', 51, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mokaysa_owners`
--

CREATE TABLE `mokaysa_owners` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(225) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `mokaysa_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mokaysa_owners`
--

INSERT INTO `mokaysa_owners` (`id`, `owner_name`, `status`, `mokaysa_id`, `created_at`, `updated_at`) VALUES
(30, 'مالك 1 ', 0, 39, '2022-07-26 20:51:12', '2022-07-26 20:51:12'),
(31, 'مالك  2 ', 0, 39, '2022-07-26 20:51:12', '2022-07-26 20:51:12'),
(32, 'مالك 3 ', 0, 39, '2022-07-26 20:51:12', '2022-07-26 20:51:12'),
(36, 'مالك 1 ', 0, 40, '2022-07-29 11:29:33', '2022-07-29 11:29:33'),
(37, 'مالك  2 ', 0, 40, '2022-07-29 11:29:33', '2022-07-29 11:29:33'),
(38, 'مالك 3 ', 0, 40, '2022-07-29 11:29:33', '2022-07-29 11:29:33'),
(39, 'مالك كراسه 4 ', 0, 40, '2022-07-29 11:29:33', '2022-07-29 11:29:33'),
(41, 'وزارة الرى', 0, 41, '2022-08-01 07:17:30', '2022-08-01 07:17:30'),
(43, 'وزارة الري', 0, 43, '2022-08-02 09:56:08', '2022-08-02 09:56:08'),
(44, 'الزاهى', 0, 44, '2022-08-02 17:47:16', '2022-08-02 17:47:16'),
(48, 'الزاهى', 0, 47, '2022-08-14 19:47:15', '2022-08-14 19:47:15'),
(49, 'محافظة كفر الشيخ', 0, 48, '2022-08-14 19:47:55', '2022-08-14 19:47:55'),
(50, 'دار العمارة', 0, 42, '2022-09-02 14:38:26', '2022-09-02 14:38:26'),
(51, 'محافظة السويس', 0, 42, '2022-09-02 14:38:26', '2022-09-02 14:38:26'),
(52, 'fdsfsdfsdfsdf', 0, 51, '2022-09-03 10:03:26', '2022-09-03 10:03:26'),
(53, 'fggfgf', 0, 53, '2022-09-10 09:53:03', '2022-09-10 09:53:03'),
(54, '123456', 0, 54, '2022-09-10 09:53:14', '2022-09-10 09:53:14'),
(55, '4545544545', 0, 55, '2022-09-10 11:06:31', '2022-09-10 11:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `mostaklas`
--

CREATE TABLE `mostaklas` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `value` int(11) NOT NULL,
  `signature_name` varchar(225) NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mostaklas`
--

INSERT INTO `mostaklas` (`id`, `date`, `value`, `signature_name`, `project_id`, `status`, `created_at`, `updated_at`) VALUES
(12, '2022-07-19', 20000000, 'محمد ثروت  محمد', 43, 0, '2022-07-14 18:05:21', '2022-07-14 18:05:21'),
(13, '2022-07-19', 20000000, 'محمد ثروت  محمد', 43, 0, '2022-07-14 18:06:33', '2022-07-14 18:06:33'),
(14, '2022-07-13', 20000, 'محمد ثروت محمد', 43, 0, '2022-07-14 18:07:18', '2022-07-14 18:07:18'),
(15, '2022-07-20', 20202, 'م احمد محمد', 71, 0, '2022-07-24 19:33:03', '2022-07-24 19:33:03'),
(16, '2022-07-14', 2000, 'م محمدوطج', 71, 1, '2022-07-24 19:33:33', '2022-07-24 19:33:33'),
(17, '2022-07-14', 2000, 'م محمدوطجddd', 71, 1, '2022-07-24 20:16:09', '2022-07-24 20:16:09'),
(18, '2022-07-20', 20202, 'م احمد محمدdfsfsdfsdf', 71, 0, '2022-07-24 20:17:54', '2022-07-24 20:17:54'),
(19, '2021-08-01', 508981715, '508981715', 74, 1, '2022-08-01 20:23:17', '2022-08-01 20:23:17'),
(20, '2021-04-19', 3669332, '3669332', 75, 0, '2022-08-02 12:02:36', '2022-08-02 12:02:36'),
(21, '2022-08-25', 10000000, '52000000', 73, 1, '2022-08-02 14:27:23', '2022-08-02 14:27:23'),
(22, '2022-08-10', 100000000, '3669332', 74, 0, '2022-08-14 19:25:13', '2022-08-14 19:25:13'),
(23, '2022-09-01', 24234235, 'العميد مدحت الحديدى', 74, 1, '2022-08-14 19:25:37', '2022-08-14 19:25:37'),
(24, '2022-08-11', 64563, '546356', 76, 0, '2022-08-14 21:55:01', '2022-08-14 21:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `mostaklas_files`
--

CREATE TABLE `mostaklas_files` (
  `id` int(11) NOT NULL,
  `mostaklas_id` int(11) NOT NULL,
  `path` varchar(225) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mostaklas_files`
--

INSERT INTO `mostaklas_files` (`id`, `mostaklas_id`, `path`, `updated_at`, `created_at`) VALUES
(7, 43, '84_1657822038korasa1.txt', NULL, NULL),
(8, 43, '806_1657822038korasa2.txt', NULL, NULL),
(9, 43, '824_1657822038korasa3.txt', NULL, NULL),
(16, 71, '994_1658691213korasa1.txt', NULL, NULL),
(17, 71, '338_1658691213korasa2.txt', NULL, NULL),
(18, 71, '217_1658691213korasa3.txt', NULL, NULL),
(19, 71, '780_1658691213korasa4.txt', NULL, NULL),
(20, 71, '150_1658691213korasa5.txt', NULL, NULL),
(21, 71, '278_1658691213korasa6.txt', NULL, NULL),
(23, 75, '71_1659441756أمر دفع 32 بئر جاري 4.PDF', NULL, NULL),
(24, 73, '632_16594504431.pdf', NULL, NULL),
(29, 27, '821_1662138184projects.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `description`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(5, 'خصم 50%', '<p>تقاصيل العرض&nbsp;</p>', '2021-03-10', '2021-03-18', 0, '2021-03-01 21:34:02', '2021-03-01 21:34:02'),
(6, 'خصم 70%', '<p>عروض &nbsp;وخصومات&nbsp;</p>', '2021-03-25', '2021-03-31', 0, '2021-03-01 21:50:33', '2021-03-01 21:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`id`, `content`, `project_id`, `created_at`, `updated_at`) VALUES
(1, '<p>77777777777777ئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئ</p>', 72, '2022-07-29 23:32:27', '2022-07-30 00:01:42'),
(2, '<p>ئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئئ</p>', 72, '2022-07-29 23:33:19', '2022-07-29 23:33:19'),
(4, '<p>rffsdfsdff</p>', 72, '2022-07-31 15:54:36', '2022-07-31 15:54:36'),
(5, '<p>لا يوجد</p>', 73, '2022-08-02 14:25:36', '2022-08-02 14:25:36'),
(6, '<p>لا يوجد</p>', 73, '2022-08-02 14:25:50', '2022-08-02 14:25:50'),
(9, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egest</p>', 74, '2022-08-14 19:39:42', '2022-08-14 19:39:42'),
(10, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.</p><p>Nunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.</p><p>In sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.</p>', 74, '2022-08-14 19:41:09', '2022-08-14 19:41:09'),
(11, '<p>gfdsgdfgsdgfdsg</p>', 76, '2022-08-14 21:58:59', '2022-08-14 21:58:59'),
(12, '<p>5+6+65+65</p>', 74, '2022-08-15 20:08:56', '2022-08-15 20:08:56'),
(13, '<p>gfdgfdgdfgdfgg</p>', 74, '2022-09-02 13:23:35', '2022-09-02 13:23:35'),
(14, '<p>edfdsfdsfdsfdsfs</p>', 74, '2022-09-02 13:32:15', '2022-09-02 13:32:15'),
(15, '<p>teytytryrt</p>', 74, '2022-09-03 11:54:53', '2022-09-03 11:54:53'),
(16, '<p>thtrghytrghthggh</p>', 74, '2022-09-03 11:55:00', '2022-09-03 11:55:00'),
(17, '<p>52gdfgfdgfdgdfgfgfdgfdg</p>', 74, '2022-09-10 12:19:45', '2022-09-10 12:19:45'),
(18, '<p>fdgdfgdfgfdgdfgdfgfdgfdg</p>', 74, '2022-09-10 12:19:50', '2022-09-10 12:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `other_files`
--

CREATE TABLE `other_files` (
  `id` int(11) NOT NULL,
  `path` varchar(225) NOT NULL,
  `other_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `other_files`
--

INSERT INTO `other_files` (`id`, `path`, `other_id`, `created_at`, `updated_at`) VALUES
(1, '36_1659137599pdf-test.pdf', 2, NULL, NULL),
(2, '515_1659138119pdf-test.pdf', 3, NULL, NULL),
(4, '959_1659139302pdf-test.pdf', 1, NULL, NULL),
(5, '252_16594503501.pdf', 6, NULL, NULL),
(7, '825_1660505940Screenshot (1).png', 7, NULL, NULL),
(8, '706_1660506069Screenshot (1).png', 10, NULL, NULL),
(9, '702_1660514339Screenshot (1).png', 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'creat_users', 'create users', 'creat_user', '2021-08-25 17:15:34', '2021-08-05 17:15:34'),
(2, 'update_users', 'update Users', 'update Users', '2021-09-22 08:51:48', '2021-09-22 08:51:48'),
(3, 'view_users', 'view users', 'view_users', '2021-09-23 05:16:22', '2021-09-23 05:16:22'),
(4, 'delete_users', 'delete users', 'delete_users', '2021-09-22 05:16:22', '2021-09-18 05:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`) VALUES
(1, 42, 'App\\Models\\User'),
(1, 43, 'App\\Models\\User'),
(1, 58, 'App\\Models\\User'),
(1, 59, 'App\\Models\\User'),
(2, 42, 'App\\Models\\User'),
(2, 43, 'App\\Models\\User'),
(2, 58, 'App\\Models\\User'),
(2, 59, 'App\\Models\\User'),
(3, 59, 'App\\Models\\User'),
(4, 59, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio_images`
--

CREATE TABLE `portofolio_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portofolio_images`
--

INSERT INTO `portofolio_images` (`id`, `image`, `project_id`, `created_at`, `updated_at`) VALUES
(1, '603c8be21322d_girl1.jpg', 12, NULL, NULL),
(2, '603c8be814993_gallery4.jpg', 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio_links`
--

CREATE TABLE `portofolio_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portofolio_links`
--

INSERT INTO `portofolio_links` (`id`, `url`, `icon_id`, `project_id`, `created_at`, `updated_at`) VALUES
(7, 'fdfdsfsfsdaf', 1, 12, NULL, NULL),
(8, 'sdfdsfdsfsdf', 2, 12, NULL, NULL),
(9, 'cxzvcvxcvzxcv', 1, 13, NULL, NULL),
(10, 'zxcvcvzxvcx', 1, 13, NULL, NULL),
(11, 'cxzcxvzcxv', 1, 13, NULL, NULL),
(12, 'hgjhgjghj', 1, 14, NULL, NULL),
(13, 'hgjgfhhjfhgj', 1, 14, NULL, NULL),
(14, 'hgjhgfj', 1, 14, NULL, NULL),
(19, 'test.png', 1, 16, NULL, NULL),
(20, 'insta', 2, 16, NULL, NULL),
(21, 'dsfdsfas', 2, 17, NULL, NULL),
(22, 'dsfsdaf', 1, 17, NULL, NULL),
(23, 'bgfgbcvb', 1, 18, NULL, NULL),
(24, 'rffds', 1, 19, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projectconsults`
--

CREATE TABLE `projectconsults` (
  `id` int(11) NOT NULL,
  `consult_name` varchar(225) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projectconsults`
--

INSERT INTO `projectconsults` (`id`, `consult_name`, `project_id`, `created_at`, `updated_at`) VALUES
(24, 'مالك 1', 41, '2022-06-29 22:18:18', '2022-06-29 22:18:18'),
(25, 'مالك  2', 41, '2022-06-29 22:18:18', '2022-06-29 22:18:18'),
(26, 'مالك 3', 41, '2022-06-29 22:18:18', '2022-06-29 22:18:18'),
(27, 'استشاري 11', 41, '2022-06-29 22:55:14', '2022-06-29 22:55:14'),
(28, 'استشارى 2', 41, '2022-06-29 22:55:14', '2022-06-29 22:55:14'),
(29, 'استشاري   3', 41, '2022-06-29 22:55:14', '2022-06-29 22:55:14'),
(30, 'استشاري 1', 41, '2022-06-29 22:55:21', '2022-06-29 22:55:21'),
(31, 'استشارى 255555', 41, '2022-06-29 22:55:21', '2022-06-29 22:55:21'),
(44, 'مالك 11', 42, '2022-06-30 16:09:28', '2022-06-30 16:09:28'),
(45, 'مالك 33', 42, '2022-06-30 16:09:28', '2022-06-30 16:09:28'),
(46, 'مالك 1', 43, '2022-07-03 23:12:55', '2022-07-03 23:12:55'),
(47, 'مالك  2', 43, '2022-07-03 23:12:55', '2022-07-03 23:12:55'),
(48, 'مالك 1 ', 44, '2022-07-07 20:45:25', '2022-07-07 20:45:25'),
(49, '55', 45, '2022-07-07 20:45:48', '2022-07-07 20:45:48'),
(50, '', 45, '2022-07-07 20:45:48', '2022-07-07 20:45:48'),
(51, '', 46, '2022-07-07 20:46:12', '2022-07-07 20:46:12'),
(52, '', 46, '2022-07-07 20:46:12', '2022-07-07 20:46:12'),
(53, 'ؤرءؤرؤءرؤءرءئؤر', 47, '2022-07-17 23:42:53', '2022-07-17 23:42:53'),
(54, '55855656', 48, '2022-07-17 23:45:09', '2022-07-17 23:45:09'),
(55, 'مالك11', 49, '2022-07-17 23:46:20', '2022-07-17 23:46:20'),
(57, 'الاستاذ  احمد محمد ', 50, '2022-07-17 23:52:30', '2022-07-17 23:52:30'),
(58, 'مالك 2', 51, '2022-07-19 20:29:19', '2022-07-19 20:29:19'),
(59, 'مالك 2 ', 51, '2022-07-19 20:29:19', '2022-07-19 20:29:19'),
(60, 'مالك 1 ', 52, '2022-07-19 20:33:36', '2022-07-19 20:33:36'),
(61, '777', 53, '2022-07-19 20:35:35', '2022-07-19 20:35:35'),
(62, '88585', 54, '2022-07-19 20:42:18', '2022-07-19 20:42:18'),
(63, '1414141', 61, '2022-07-24 15:07:23', '2022-07-24 15:07:23'),
(66, 'الاستاذ  احمد محمد ', 63, '2022-07-24 15:18:41', '2022-07-24 15:18:41'),
(69, 'مالك11', 64, '2022-07-24 15:29:37', '2022-07-24 15:29:37'),
(70, 'الاستاذ  احمد محمد ', 62, '2022-07-24 15:53:06', '2022-07-24 15:53:06'),
(71, 'مالك 1 ', 65, '2022-07-24 17:59:34', '2022-07-24 17:59:34'),
(72, 'مالك 2 ', 65, '2022-07-24 17:59:34', '2022-07-24 17:59:34'),
(77, 'م : احمد ', 66, '2022-07-24 18:36:24', '2022-07-24 18:36:24'),
(78, 'م : السيد سعيد', 66, '2022-07-24 18:36:24', '2022-07-24 18:36:24'),
(79, 'جهاز المشروعات  ', 67, '2022-07-24 18:42:27', '2022-07-24 18:42:27'),
(80, '42424242', 68, '2022-07-24 18:47:22', '2022-07-24 18:47:22'),
(81, 'مالك 1 ', 69, '2022-07-24 18:51:22', '2022-07-24 18:51:22'),
(82, 'مالك  2 ', 69, '2022-07-24 18:51:22', '2022-07-24 18:51:22'),
(83, '747474', 70, '2022-07-24 19:04:17', '2022-07-24 19:04:17'),
(84, 'fgh', 71, '2022-07-24 19:07:39', '2022-07-24 19:07:39'),
(85, '4141414', 72, '2022-07-24 21:12:13', '2022-07-24 21:12:13'),
(86, 'وزارة الرى', 73, '2022-07-31 19:03:55', '2022-07-31 19:03:55'),
(88, 'الوطنية للمقاولات العامة والتوريدات', 75, '2022-08-02 11:39:14', '2022-08-02 11:39:14'),
(90, 'محافظة كفر الشيخ', 77, '2022-08-02 19:41:37', '2022-08-02 19:41:37'),
(91, 'الوطنية للمقاولات', 74, '2022-08-02 20:22:36', '2022-08-02 20:22:36'),
(93, '', 78, '2022-08-14 19:45:32', '2022-08-14 19:45:32'),
(94, 'الزاهى', 79, '2022-08-14 19:46:25', '2022-08-14 19:46:25'),
(95, 'الوطنية للمقاولات', 76, '2022-08-14 21:44:16', '2022-08-14 21:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `projectowners`
--

CREATE TABLE `projectowners` (
  `id` int(11) NOT NULL,
  `owner_name` varchar(225) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projectowners`
--

INSERT INTO `projectowners` (`id`, `owner_name`, `project_id`, `created_at`, `updated_at`) VALUES
(26, 'استشاري 1', 41, '2022-06-29 22:18:18', '2022-06-29 22:18:18'),
(27, 'استشارى 2', 41, '2022-06-29 22:18:18', '2022-06-29 22:18:18'),
(28, 'استشاري   3', 41, '2022-06-29 22:18:18', '2022-06-29 22:18:18'),
(36, 'استشاري 11', 42, '2022-06-30 16:09:28', '2022-06-30 16:09:28'),
(37, 'استشاري   33', 42, '2022-06-30 16:09:28', '2022-06-30 16:09:28'),
(38, 'استشاري 1', 43, '2022-07-03 23:12:55', '2022-07-03 23:12:55'),
(39, 'استشارى 2', 43, '2022-07-03 23:12:55', '2022-07-03 23:12:55'),
(40, 'الاستاذ  احمد محمد ', 44, '2022-07-07 20:45:25', '2022-07-07 20:45:25'),
(41, 'الاستاذ  احمد محمد ', 45, '2022-07-07 20:45:48', '2022-07-07 20:45:48'),
(42, 'الاستاذ  احمد محمد ', 46, '2022-07-07 20:46:12', '2022-07-07 20:46:12'),
(43, 'الاستاذ  احمد محمد ', 47, '2022-07-17 23:42:53', '2022-07-17 23:42:53'),
(44, 'تانتاناتناتن', 47, '2022-07-17 23:42:53', '2022-07-17 23:42:53'),
(45, 'الاستاذ  احمد محمد ', 48, '2022-07-17 23:45:09', '2022-07-17 23:45:09'),
(46, 'الاستاذ  احمد محمد ', 49, '2022-07-17 23:46:20', '2022-07-17 23:46:20'),
(48, 'e', 50, '2022-07-17 23:52:30', '2022-07-17 23:52:30'),
(49, 'الاستاذ  احمد محمد ', 51, '2022-07-19 20:29:19', '2022-07-19 20:29:19'),
(50, 'الاستاذ  احمد محمد ', 52, '2022-07-19 20:33:36', '2022-07-19 20:33:36'),
(51, '77', 53, '2022-07-19 20:35:35', '2022-07-19 20:35:35'),
(52, '85858', 54, '2022-07-19 20:42:18', '2022-07-19 20:42:18'),
(53, '4141', 61, '2022-07-24 15:07:23', '2022-07-24 15:07:23'),
(56, 'مالك 1 ', 63, '2022-07-24 15:18:41', '2022-07-24 15:18:41'),
(59, 'الاستاذ  احمد محمد ', 64, '2022-07-24 15:29:37', '2022-07-24 15:29:37'),
(60, 'مالك 1 ', 62, '2022-07-24 15:53:06', '2022-07-24 15:53:06'),
(61, 'د : توفيق عبد  الحميد ', 65, '2022-07-24 17:59:34', '2022-07-24 17:59:34'),
(66, 'الاستاذ  احمد محمد ', 66, '2022-07-24 18:36:24', '2022-07-24 18:36:24'),
(67, 'م احمد محمود ', 66, '2022-07-24 18:36:24', '2022-07-24 18:36:24'),
(68, 'اللواء  علاء ذكى ', 67, '2022-07-24 18:42:27', '2022-07-24 18:42:27'),
(69, 'الاستاذ  احمد محمد ', 68, '2022-07-24 18:47:22', '2022-07-24 18:47:22'),
(70, '1414141', 69, '2022-07-24 18:51:22', '2022-07-24 18:51:22'),
(71, '7474', 70, '2022-07-24 19:04:17', '2022-07-24 19:04:17'),
(72, 'ghgfh', 71, '2022-07-24 19:07:39', '2022-07-24 19:07:39'),
(73, '4114141', 72, '2022-07-24 21:12:13', '2022-07-24 21:12:13'),
(74, 'الوطنية للمقاولات', 73, '2022-07-31 19:03:55', '2022-07-31 19:03:55'),
(76, 'الوطنية للمقاولات', 75, '2022-08-02 11:39:14', '2022-08-02 11:39:14'),
(78, 'الوطنية للمقاولات', 77, '2022-08-02 19:41:37', '2022-08-02 19:41:37'),
(79, 'وزارة الري', 74, '2022-08-02 20:22:36', '2022-08-02 20:22:36'),
(81, 'وزارة الري', 78, '2022-08-14 19:45:32', '2022-08-14 19:45:32'),
(82, '324423', 79, '2022-08-14 19:46:25', '2022-08-14 19:46:25'),
(83, 'محافظة كفر الشيخ', 76, '2022-08-14 21:44:16', '2022-08-14 21:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sector` int(11) NOT NULL,
  `project_status` tinyint(4) NOT NULL,
  `project_type` tinyint(4) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wataniaresp` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `take_amount` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `need_amount` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_amount` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `esteshary_total` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `baten_amount` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `start_date`, `end_date`, `sector`, `project_status`, `project_type`, `description`, `wataniaresp`, `take_amount`, `need_amount`, `total_amount`, `esteshary_total`, `baten_amount`, `created_at`, `updated_at`) VALUES
(74, 'أعمال الحماية من اخطار السيول بمدينة القصير محافظة البحر الاحمر (المرحلة الثامية)', '2019/09/24', '2021/03/23', 3, 1, 0, '<p><a href=\"C:\\tharwat\">C:\\tharwat</a>أعمال الحماية من اخطار السيول بمدينة القصير محافظة البحر الاحمر (المرحلة الثامية)</p>', 'قطاع الري والسدود', '68000000', '53400000', '56000000', '0', '39800000', '2022-08-01 15:29:17', '2022-08-02 18:22:36'),
(75, 'مشروع تجهيز عدد 32 بئر إنتاجي بالأعمال الكهروميكانيكية والكهربية والطاقة الشمسية بالواحات البحرية', '2019/10/02', '2021/04/01', 27, 3, 0, '<p>&nbsp;</p><p><strong>4- المؤهل وتاريخ صوله عليه/ بكالوريوس هندسة – قسم مدنى – 2004.</strong></p><p><strong>7- الأعمال التى باشرها خلال الثلاث سنوات الأخيرة/ مبنى مجلس مدينة بئر العبد – مبنى السوق الجديد ببئر العبد – حوض التبخير بشركة شمال سيناء للبترول.</strong></p><p><strong>8- إسم جهة العملية/ قطاع الموارد المائية والرى.</strong></p><p><strong>9- إسم العملية المراد تعيينه عليها&nbsp;</strong></p>', 'ع/ حازم مكاوي', '35900000', '22700000', '29400000', '0', '16600000', '2022-08-02 09:39:14', '2022-08-02 09:39:14'),
(76, 'أعمال الحماية من اخطار السيول بمدينة القصير محافظة البحر الاحمر (المرحلة الثامية)', '2022/08/11', '2023/09/02', 1, 1, 0, '<p>jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjgghghgghghghgghbldflgl</p>', 'م/ مصطفي عماد', '12478878', '1245', '1245878', '0', '1254', '2022-08-02 17:35:45', '2022-08-14 19:44:16'),
(77, 'مشروع تطوير مستشفى التامين1', '2019/09/24', '2023/10/04', 1, 1, 1, '<p>jjgjhjgf6678898889</p>', 'ع/ حازم مكاوي', '3254887', '32564', '32564', '0', '32564', '2022-08-02 17:41:37', '2022-08-02 17:41:37'),
(78, 'مشروع تغطية جزء من مصرف نشرت الاعلي داخل مدينة قلين', '2022/08/31', '2024/08/30', 7, 5, 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.</p><p>Nunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.</p><p>In sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula non ipsum in vestibulum. Curabitur mauris urna, malesuada dictum mauris sed, gravida elementum elit. Nulla erat tortor, egestas id faucibus eu, fringilla vel erat. Ut tellus justo, rhoncus sit amet pellentesque nec, feugiat eget dolor. Morbi dapibus enim lorem, eu sodales augue pretium vitae. Nullam quis imperdiet turpis. Curabitur consectetur ante id urna malesuada fringilla. In pharetra sapien eu volutpat vehicula. Curabitur vitae ipsum eget dolor maximus ultrices.</p><p>Morbi cursus vehicula dolor vel efficitur. Nulla diam velit, faucibus ac feugiat interdum, porttitor non quam. Suspendisse pellentesque, felis non ullamcorper suscipit, diam lectus sodales dolor, ultrices vulputate dui est a libero. Vestibulum turpis lorem, auctor eu laoreet et, pulvinar id sapien. Quisque quam ante, lobortis vitae molestie ac, dictum ut turpis. Pellentesque auctor varius nisl, non fermentum nisl vehicula ut. Donec efficitur, elit ac porttitor vestibulum, orci leo egestas risus, id dictum nisl velit a turpis. Praesent sit amet dui lacus. Mauris condimentum interdum velit, eget aliquet quam tincidunt congue. Praesent bibendum lacus quis nibh elementum imperdiet. Quisque pulvinar malesuada odio eget commodo. Morbi eleifend et dui sed tincidunt. Sed elementum placerat mattis.</p><p>Nunc varius purus eros, eget pharetra ipsum vulputate quis. Sed condimentum massa non arcu dignissim fermentum. Aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum eros eget lectus commodo, in auctor odio sollicitudin. Sed vitae pharetra libero. Curabitur vitae imperdiet ipsum, et volutpat mauris.</p><p>In sed vulputate ligula. Vivamus maximus metus nec ultricies tempus. Proin eu diam justo. Proin dui quam, ultrices ac pretium sit amet, egestas sit amet velit. Fusce quis risus auctor, porta diam sit amet, lobortis libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vitae scelerisque leo.</p>', 'م/ مصطفي عماد', '6000000000', '500000', '200000000', '2255205', '2000000', '2022-08-14 17:44:33', '2022-08-14 17:45:32'),
(79, 'مشروع تغطية جزء من مصرف نشرت الاعلي داخل مدينة قلين', '2022/08/17', '2022/08/17', 1, 1, 0, '<p>بشيسببشبيبيسششسيبسي</p>', 'قطاع الري والسدود', '3244', '32423', '23432', '23432', '4324', '2022-08-14 17:46:25', '2022-08-14 17:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `projectstatus`
--

CREATE TABLE `projectstatus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_status_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_files`
--

CREATE TABLE `project_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_files`
--

INSERT INTO `project_files` (`id`, `path`, `project_id`, `created_at`, `updated_at`) VALUES
(1, '6040f7a8eef67_img-3.png', 2, NULL, NULL),
(2, '6040f7a8efa70_img-4.png', 2, NULL, NULL),
(3, '6040f7a8f008e_img-5.png', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_links`
--

CREATE TABLE `project_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_links`
--

INSERT INTO `project_links` (`id`, `url`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 'test.com ', 2, '2021-03-24 11:52:38', '2021-03-13 11:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `project_requests`
--

CREATE TABLE `project_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `number_of_screens` int(11) DEFAULT NULL,
  `project_type_id` int(11) DEFAULT NULL,
  `project_status_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_requests`
--

INSERT INTO `project_requests` (`id`, `name`, `email`, `title`, `description`, `logo`, `start_date`, `end_date`, `price`, `number_of_screens`, `project_type_id`, `project_status_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'محمد  ثروت  محمد  ', 'msarwat46@gmail.com', '600apps.com', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي', 'logo.png', '2021-03-20', '2021-03-20', 3000, 500, 1, 1, NULL, NULL, '2021-03-09 19:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `project_statuses`
--

CREATE TABLE `project_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_statuses`
--

INSERT INTO `project_statuses` (`id`, `name`, `color`, `created_at`, `updated_at`) VALUES
(1, 'منتهى ', '1', '2021-03-11 09:58:39', '2021-03-12 09:58:39'),
(2, 'معلق ', '2', '2021-03-12 10:02:05', '2021-03-10 10:02:05'),
(3, 'مرفوض', '3', '2021-03-04 10:03:37', '2021-03-11 10:03:37'),
(4, 'منتهى', '3', '2021-03-04 10:03:37', '2021-03-11 10:03:37'),
(5, 'مكتمل ', '4', NULL, NULL),
(6, 'نشط', '4', '2021-03-11 10:06:40', '2021-03-13 10:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `project_team`
--

CREATE TABLE `project_team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `debtor` float DEFAULT NULL,
  `creditor` float DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `project_request_id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `team_status_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_team`
--

INSERT INTO `project_team` (`id`, `path`, `price`, `debtor`, `creditor`, `project_id`, `project_request_id`, `team_id`, `team_status_id`, `created_at`, `updated_at`) VALUES
(2, NULL, 200, 1500, 4000, NULL, 2, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

CREATE TABLE `project_type` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `color` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`id`, `name`, `color`) VALUES
(1, 'تسليم ابتدائى', '#5b73e8'),
(2, 'تسليم نهائى', '#34c38f'),
(3, 'جارى التنفيذ', '#50a5f1'),
(4, 'تحت الدراسة', '#f1b44c'),
(6, 'تم التنفيذ ', '#777');

-- --------------------------------------------------------

--
-- Table structure for table `project_types`
--

CREATE TABLE `project_types` (
  `id` int(20) NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_type_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_types`
--

INSERT INTO `project_types` (`id`, `project_id`, `project_type_id`, `created_at`, `updated_at`) VALUES
(34, 65, 1, '2022-07-24 15:59:34', '2022-07-24 15:59:34'),
(35, 66, 3, '2022-07-24 16:31:20', '2022-07-24 16:32:49'),
(36, 67, 4, '2022-07-24 16:42:27', '2022-07-24 16:42:27'),
(37, 68, 1, '2022-07-24 16:47:22', '2022-07-24 16:47:22'),
(38, 69, 2, '2022-07-24 16:51:22', '2022-07-24 16:51:22'),
(39, 70, 4, '2022-07-24 17:04:17', '2022-07-24 17:04:17'),
(40, 71, 1, '2022-07-24 17:07:39', '2022-07-24 17:07:39'),
(41, 72, 2, '2022-07-24 19:12:13', '2022-07-24 19:12:13'),
(42, 73, 3, '2022-07-31 17:03:55', '2022-07-31 17:03:55'),
(43, 74, 1, '2022-08-01 15:29:17', '2022-08-01 15:29:17'),
(44, 75, 3, '2022-08-02 09:39:14', '2022-08-02 09:39:14'),
(45, 76, 1, '2022-08-02 17:35:45', '2022-08-02 17:35:45'),
(46, 77, 1, '2022-08-02 17:41:37', '2022-08-02 17:41:37'),
(47, 78, 5, '2022-08-14 17:44:33', '2022-08-14 17:44:33'),
(48, 79, 1, '2022-08-14 17:46:25', '2022-08-14 17:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 'admin', '2021-09-28 08:42:43', '2021-09-23 08:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'App\\User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(2, 13, 'App\\User'),
(2, 15, 'App\\User'),
(2, 16, 'App\\User'),
(2, 18, 'App\\User'),
(2, 21, 'App\\User'),
(2, 24, 'App\\User'),
(2, 26, 'App\\User'),
(2, 29, 'App\\User'),
(2, 31, 'App\\User'),
(2, 33, 'App\\User'),
(2, 35, 'App\\User'),
(2, 37, 'App\\User'),
(2, 38, 'App\\User'),
(2, 40, 'App\\User'),
(2, 41, 'App\\User'),
(2, 42, 'App\\User'),
(2, 43, 'App\\User'),
(2, 53, 'App\\User'),
(2, 55, 'App\\User'),
(2, 57, 'App\\User'),
(2, 58, 'App\\User'),
(2, 62, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `sector_name` varchar(225) NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`id`, `sector_name`, `ordering`, `created_at`, `updated_at`) VALUES
(1, 'نظم المعلومات 1', 0, '2021-09-09 20:10:22', '2021-09-11 20:11:45'),
(3, 'أداره  الشركه', 1, '2021-09-11 20:15:54', '2021-09-11 20:15:54'),
(5, 'الصحه والاسعاف', 22, '2022-07-24 18:53:47', '2022-07-24 18:53:47'),
(6, 'التنميه', 66, '2022-07-24 18:54:00', '2022-07-24 18:54:00'),
(7, 'عسكري 1', 88, '2022-07-24 18:54:25', '2022-07-24 18:54:25'),
(8, 'السيد رئيس مجلس إدارة الشركة', 0, '2022-07-31 17:07:20', '2022-07-31 17:07:20'),
(9, 'السيد نائب رئيس مجلس الإدارة', 2, '2022-07-31 17:07:44', '2022-07-31 17:07:44'),
(10, 'السيد مدير عام الشركة', 3, '2022-07-31 17:07:57', '2022-07-31 17:07:57'),
(11, 'السيد مساعد رئيس مجلس الإدارة', 4, '2022-07-31 17:08:41', '2022-07-31 17:08:41'),
(12, 'السيد مساعد رئيس مجلس الإدارة للتنفيذ', 5, '2022-07-31 17:09:17', '2022-07-31 17:09:17'),
(13, 'الإدارة المالية', 6, '2022-07-31 17:10:18', '2022-07-31 17:10:18'),
(14, 'الشئون الإدارية', 7, '2022-07-31 17:10:32', '2022-07-31 17:10:32'),
(15, 'التنفيذ الذاتى', 8, '2022-07-31 17:10:57', '2022-07-31 17:10:57'),
(16, 'الأمن', 9, '2022-07-31 17:11:08', '2022-07-31 17:11:08'),
(17, 'الاستعلامات', 10, '2022-07-31 17:11:18', '2022-07-31 17:11:18'),
(18, 'فرع نظم المعلومات', 1, '2022-07-31 17:11:43', '2022-07-31 17:11:43'),
(19, 'التخطيط والمتابعة', 11, '2022-07-31 17:12:02', '2022-07-31 17:12:02'),
(20, 'الشئون القانونية', 12, '2022-07-31 17:12:13', '2022-07-31 17:12:13'),
(21, 'المكتب الفنى', 13, '2022-07-31 17:12:28', '2022-07-31 17:12:28'),
(22, 'عسكرى 2', 14, '2022-07-31 17:12:47', '2022-07-31 17:12:47'),
(23, 'الطرق', 15, '2022-07-31 17:12:59', '2022-07-31 17:12:59'),
(24, 'الكهرباء', 16, '2022-07-31 17:13:11', '2022-07-31 17:13:11'),
(25, 'المرافق والسكك الحديدية', 17, '2022-07-31 17:13:29', '2022-07-31 17:13:29'),
(26, 'الصحة والإسعاف', 18, '2022-07-31 17:13:53', '2022-07-31 17:13:53'),
(27, 'المحليات', 19, '2022-07-31 17:14:04', '2022-07-31 17:14:04'),
(28, 'التعليم العالى', 20, '2022-07-31 17:14:18', '2022-07-31 17:14:18'),
(29, 'الآثار', 20, '2022-07-31 17:14:37', '2022-07-31 17:14:37'),
(30, 'وزارة المالية', 21, '2022-07-31 17:15:08', '2022-07-31 17:15:08'),
(31, 'الرى والسدود', 22, '2022-07-31 17:15:17', '2022-07-31 17:15:17'),
(32, 'التنفيذ', 23, '2022-07-31 17:15:27', '2022-07-31 17:15:27'),
(33, 'المنشآت التخصصية', 24, '2022-07-31 17:16:18', '2022-07-31 17:16:18'),
(34, 'الشمال', 25, '2022-07-31 17:16:32', '2022-07-31 17:16:32'),
(35, 'الصعيد', 26, '2022-07-31 17:16:44', '2022-07-31 17:16:44'),
(36, 'الأرشيف العام', 28, '2022-08-01 06:58:56', '2022-08-01 06:58:56'),
(37, 'الأرشيف العام', 29, '2022-08-02 13:35:18', '2022-08-02 13:35:18'),
(38, 'مصنع تدوير المخلفات بمنطقو شق الثعبان', 30, '2022-08-02 13:35:39', '2022-08-02 13:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(4, 'إستضافة المواقع الالكترونية', '<p>باقات مختلفة من افضل أنواع الإستضافة المواقع الالكترونية والتي تمتاز بسرعتها العالية وحمايتها العالية مع خدمة النسخ الإحتياطي</p><p>&nbsp;</p>', 'database', '2021-04-15 05:51:00', '2021-04-15 05:51:00'),
(5, 'تصميم الهوية التجاريه', '<p>هوية الشركة هي شخصيتها، وكلما امتلكت المؤسسة هوية مميزة كلما كانت أكثر قدرة على النجاح والتفوق على منافسيها فقط قدم لنا نبذه عن مشروعك</p>', 'palette', '2021-04-15 05:55:41', '2021-04-15 05:55:41'),
(6, 'تصميم وبرمجة التطبيقات', '<p>لسنا مطوريين تطبيقات نمطيين بل نعمل بمواصفات ومعايير عالمية لإخراج أفضل الأعمال وبإحترافية عالية</p>', 'mobile-alt', '2021-04-15 05:56:08', '2021-04-15 05:56:08'),
(7, 'دعم فني للمواقع', '<p>تأكد تماماً بأن مشروعك سيكون تحت المراقبة والدعم اللازم من أجل ضمان إستقراريته وستتلقى دعم فني وفوري وعلى مدار الساعة والأسبوع 24/7</p>', 'headphones', '2021-04-15 05:56:34', '2021-04-15 05:56:34'),
(8, 'خدمات التسويق الالكتروني', '<p>من اهم الخدمات التي تبرع بها الشركة وتتم من خلال ادارة الحملات الاعلانية المدفوعة على جوجل لتظهر بمنتجك فى اول صفحات محركات البحث بكل احترافية</p>', 'bullhorn', '2021-04-15 05:57:33', '2021-04-15 05:57:33'),
(9, 'توظيف االاعضاء', '<p>الوصف الكامل &nbsp;لتوظيف &nbsp;الاعضاء&nbsp;</p>', NULL, '2021-08-17 18:24:03', '2021-08-17 18:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `servicesimages`
--

CREATE TABLE `servicesimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_images`
--

INSERT INTO `service_images` (`id`, `service_id`, `image`, `created_at`, `updated_at`) VALUES
(37, 37, '603b5fa624181_img-3.png', NULL, NULL),
(43, 4, '607771d24b415_slack.png', NULL, NULL),
(44, 5, '607772ec258c2_dribbble.png', NULL, NULL),
(45, 6, '60777307389d8_bitbucket.png', NULL, NULL),
(46, 7, '6077732032d41_bitbucket.png', NULL, NULL),
(47, 8, '6077735befc89_dribbble.png', NULL, NULL),
(48, 9, '611c1a9e06061_R.png', NULL, NULL),
(49, 9, '611c1aa410bdd_p.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(10) UNSIGNED NOT NULL,
  `show_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `show_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_providers`
--

CREATE TABLE `social_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `project_team` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `phone`, `email`, `about`, `job_id`, `image`, `status`, `project_team`, `created_at`, `updated_at`) VALUES
(1, 'محمد احمد مصطفى  ', '010306040', 'msarwat@gmail.com', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي', 1, 'test.png', 1, 1, '2021-03-04 10:08:19', '2021-03-05 10:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `teamwork`
--

CREATE TABLE `teamwork` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_category` int(11) NOT NULL,
  `responsibilty` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teamworkprojects`
--

CREATE TABLE `teamworkprojects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teamworktasks`
--

CREATE TABLE `teamworktasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_statuses`
--

CREATE TABLE `team_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_statuses`
--

INSERT INTO `team_statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ui ,Ux ', '2021-03-10 12:43:05', '2021-03-10 12:43:05'),
(2, 'Front End', '2021-03-25 12:43:05', '2021-03-24 12:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sector_id` int(11) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `sector_id`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(49, 'admin', 'admin@gmail.com', NULL, '$2y$10$2Fw1sAMOJaRoTon2yqJOZ.ADp0O0kXBneNl8O57Obp/hiZfQznU5K', 3, 2, NULL, '2021-09-15 11:44:20', '2022-07-22 23:06:49'),
(67, 'super', 'super@gmail.com', NULL, '$2y$10$xi9aU8i7uYwm8UaXCjgta.AiQDE9nKa/l2nUIostpXjnao4O2zV56', 3, 1, 'wJ5iqz0i0ixaNjrXtuz9VvZyFzo79w36hJ0DeDLwkUmg7OEUUoCp1rPyq7HP', '2022-07-22 22:58:07', '2022-07-22 22:58:07'),
(68, 'visitor arsheef', 'visitor1', NULL, '$2y$10$QecuRPjcXrlLjFqMJG/vVO1usN9jDVfcf9UoBR4V6UIRvuTVwAuvO', 18, 4, NULL, '2022-07-22 22:59:36', '2022-09-10 11:10:32'),
(69, 'visitor', 'visitor@gmail.com', NULL, '$2y$10$/2wFyCCGKx0ru4/t.nnWueQaFL11MNiIch7d9R6b8WucsbTUt19Jy', 1, 3, NULL, '2022-07-22 22:59:57', '2022-08-14 18:55:30'),
(70, 'archive', 'archive@gmail.com', '2022-07-28 18:56:08', '123', 3, 2, NULL, '2022-07-27 18:56:08', '2022-07-27 18:56:08'),
(71, 'ali', 'ali@watania.com', NULL, '$2y$10$lIcsiFgXw1RLvf805/38leCmdiBOWmwqfGGUhDCj.QILf6k5.jPji', 3, 2, NULL, '2022-07-24 18:47:43', '2022-07-24 18:49:50'),
(72, 'ahmed', 'ahmed@watania.com', NULL, '$2y$10$9oR8R6/l8czaB7WFFeIoV.l2gyovNZ/ZoI.RC2UkkJRYTj5FHzgAy', 6, 4, NULL, '2022-07-24 18:55:56', '2022-07-24 18:55:56'),
(73, 'sayed', 'sayed@gmail.co', NULL, '$2y$10$OxElVPuCkKzGkZbjPiP9se7ym5MFJ/jf1USDXyUJOhccSQrikP52C', 5, 4, NULL, '2022-07-24 18:56:37', '2022-07-24 18:56:37'),
(75, 'shihab', 'shihab@nspo.com', NULL, '$2y$10$5K1jD3rdPDU.EsZgBgSXHeobgOreNKeAQ81URKrKDZmZFbeQtmd5G', 5, 3, NULL, '2022-08-02 12:43:27', '2022-09-03 09:58:25'),
(76, 'tanfeez', 'tanfeez@nspo.com', NULL, '$2y$10$cWkNCCFTHySAB4y2ONHdBuuWdSuOMQmFQXFJhH90SaVyg9ezScbsK', 8, 4, NULL, '2022-08-02 12:44:32', '2022-09-10 10:24:40'),
(77, 'ray', 'ray@nspo.com', NULL, '$2y$10$6Bkh2BSxyOEyh4g0V2bTkOhM4tJLggzuFKTuGAnCqm19iT76FX2NW', 31, 4, NULL, '2022-08-02 12:48:32', '2022-08-02 12:48:32'),
(78, 'sdod', 'sdod@nspo.com', NULL, '$2y$10$npUVC86z29lNzK3ZZhc3e.z8Tu.fmQLJztMRiM68zwID.m040wcui', 31, 3, NULL, '2022-08-02 12:49:38', '2022-08-02 12:49:38'),
(79, 'ahmed', 'ahmed@nspo.com', NULL, '$2y$10$/OTanHjceCqjRtUV/mcTR.JoxyfVxiL5JSfdihHQLMRglRSDbVmZS', 1, 2, NULL, '2022-08-02 13:36:42', '2022-08-02 13:36:42'),
(80, 'ahmed1', 'ahmed1@nspo.com', NULL, '$2y$10$OXZmmN1dezG9MvvRuuQyqeYJVjVKj77LDubvPHIG99Hh1IVWJrqee', 6, 3, NULL, '2022-08-02 13:37:19', '2022-08-02 13:37:19'),
(81, 'ahmed2', 'ahmed2@nspo.mil', NULL, '$2y$10$mVSo42gHfZ3YdjuZzfLpwOHF7BonouAmvhRuTkKs8VseQX8ad/KS2', 37, 3, NULL, '2022-08-02 13:38:04', '2022-08-02 13:38:04'),
(82, 'ahmed3', 'ahmed3@nspo.com', NULL, '$2y$10$4Kd5BIrLWr5RazTpZ7jDkO8eONJF8ZGOsaPawNNAlUIz3mZoi8UIi', 8, 2, NULL, '2022-08-02 13:38:32', '2022-08-02 13:38:32'),
(83, 'ahmed4', 'ahmed4@nspo.com', NULL, '$2y$10$oMNiLBIIIPmihlHaZIuJze1z0REGN4Dd2biZkZyx4iDbK/Z/db0NC', 8, 3, NULL, '2022-08-02 13:40:02', '2022-08-02 13:40:02'),
(84, 'ahmed5', 'ahmed5@nspo.com', NULL, '$2y$10$C7LJL08ocDfi6hmGEWqJxe0uyW/LhXxuwxmVaLIEtOzmACMMlH0ji', 8, 4, NULL, '2022-08-02 13:40:44', '2022-08-02 13:40:44'),
(85, 'ahmed6', 'ahmed6@nspo.com', NULL, '$2y$10$hekr/xbc7lbR8HxSL0nlLe3nnPC9IEuGlfSWwXDdCD.4//5xidspO', 26, 2, NULL, '2022-08-02 13:42:07', '2022-08-02 13:42:07'),
(86, 'ahmed7', 'ahmed7@nspo.com', NULL, '$2y$10$OL7crHqH3ntuQN/mPXOs4.4dGjRWc01fQJHQa1PyggfKLXLkl4Ue.', 26, 3, NULL, '2022-08-02 13:42:37', '2022-08-02 13:42:37'),
(87, 'ahmed8', 'ahmed8@nspo.com', NULL, '$2y$10$yYu2DbQ3cfxJ6v6Ku0GDJeENp/lTUy2NadootX/koCI5G715zrXsK', 26, 4, NULL, '2022-08-02 13:43:17', '2022-08-02 13:43:17'),
(88, 'ahmed9', 'ahmed9@nspo.com', NULL, '$2y$10$R3bdS5xiec2m.obq1HpuZ.CFtkeCDep4LnhOUwpliiDvjw2XMR94S', 31, 3, NULL, '2022-08-02 13:43:49', '2022-08-02 13:43:49'),
(89, 'ahmed10', 'ahmed10@nspo.com', NULL, '$2y$10$XnbgnTmXPmVyc1AXMJapzOnPu7gu5fqh2D8wMznxQ1.29bx1lJavu', 31, 4, NULL, '2022-08-02 13:44:38', '2022-08-02 13:44:38'),
(90, 'custom', 'custom@gmail.com', '2022-08-14 16:41:13', '$2y$10$xi9aU8i7uYwm8UaXCjgta.AiQDE9nKa/l2nUIostpXjnao4O2zV56', 3, 5, '0NQMYNeQMBm3BrYay8lVxMo5MQ9kzNVGTQKGwgbp3IHsbxKfBtkxvwrjfTK4', '2022-08-24 16:41:13', '2022-08-14 16:41:13'),
(91, 'تامر', 'tamer@gmail.com', NULL, '$2y$10$cxRc5ixo35XiR3hVTovPn.k84KX78q7bvZjnTA8bMhPCGuROQvM6K', 1, 2, NULL, '2022-08-14 16:32:25', '2022-08-14 16:32:25'),
(92, 'adminray', 'adminray@gmail.com', NULL, '$2y$10$MiqnYHTODSBmSQHgP800ju508YR9oRK.3svIXPE4M8SzY8HcsSoAW', 31, 2, NULL, '2022-08-14 18:40:12', '2022-08-14 18:40:12'),
(93, 'visitor', 'visitornozom@gmail.com', NULL, '$2y$10$2Fw1sAMOJaRoTon2yqJOZ.ADp0O0kXBneNl8O57Obp/hiZfQznU5K', 18, 3, NULL, '2022-08-14 19:38:34', '2022-08-14 21:02:07'),
(94, 'visitor arsheef', 'visitorarsheef@gmail.com', NULL, '$2y$10$y.jQ0LzbVIB.AonePUsrdOROI0aAuAtrAyFxxUL.wjKeTMsgjGYYe', 36, 4, NULL, '2022-08-14 21:02:59', '2022-08-14 21:02:59'),
(95, 'visitor seha', 'visitorseha@gmail.com', NULL, '$2y$10$oujWMga0GDlHUG8UbXbPjOo9ign9BXYAKjxttpcDUDoYJbEy50Wte', 26, 3, NULL, '2022-08-14 21:03:37', '2022-08-14 21:17:30'),
(96, 'visitor ray', 'visitorray@gmail.com', NULL, '$2y$10$AIG0J2Ym4Tg59EhjtffOwe6UWVBUCaXBDtRSTDer7boIKvg61CR6G', 31, 2, NULL, '2022-08-14 21:04:26', '2022-08-14 21:04:26'),
(97, 'vis', 'vis@gmail.com', NULL, '$2y$10$zzu.hmWQeLg/BOz3OjZq9ecXltleNcxzqXWn0MdzWe2IktO.9RL2u', 19, 4, NULL, '2022-08-14 21:18:51', '2022-08-14 21:18:51'),
(98, 'vis2', 'vis2@gmail.com', NULL, '$2y$10$6uscmEEfjB/zC14tXifLTOvm37uiqnXY2YMh5HgyY4G157MO6/WUW', 23, 3, NULL, '2022-08-14 21:19:21', '2022-09-02 14:25:06'),
(99, 'sarwat', 'msarwat46@gmail.com', NULL, '$2y$10$xi9aU8i7uYwm8UaXCjgta.AiQDE9nKa/l2nUIostpXjnao4O2zV56', 1, 3, NULL, '2022-09-10 10:30:35', '2022-09-10 10:31:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akd`
--
ALTER TABLE `akd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akd_files`
--
ALTER TABLE `akd_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amresnad`
--
ALTER TABLE `amresnad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicantes`
--
ALTER TABLE `applicantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant_files`
--
ALTER TABLE `applicant_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eltezam`
--
ALTER TABLE `eltezam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eltezam_files`
--
ALTER TABLE `eltezam_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fax`
--
ALTER TABLE `fax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fax_files`
--
ALTER TABLE `fax_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `R78` (`fax_id`);

--
-- Indexes for table `fax_viewers`
--
ALTER TABLE `fax_viewers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosts`
--
ALTER TABLE `hosts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `host_services`
--
ALTER TABLE `host_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icone`
--
ALTER TABLE `icone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icones`
--
ALTER TABLE `icones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applicantes`
--
ALTER TABLE `job_applicantes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korasabaten`
--
ALTER TABLE `korasabaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korasamalekowners`
--
ALTER TABLE `korasamalekowners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korasa_eshtertat_files`
--
ALTER TABLE `korasa_eshtertat_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `r1` (`korasa_id`);

--
-- Indexes for table `korasa_eshtratat`
--
ALTER TABLE `korasa_eshtratat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `r77` (`project_id`);

--
-- Indexes for table `mawkef_tanfezy`
--
ALTER TABLE `mawkef_tanfezy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mawkef_tanfezy_files`
--
ALTER TABLE `mawkef_tanfezy_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moda`
--
ALTER TABLE `moda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mokaysa`
--
ALTER TABLE `mokaysa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `R18` (`project_id`);

--
-- Indexes for table `mokaysa_bnod`
--
ALTER TABLE `mokaysa_bnod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mokaysa_files`
--
ALTER TABLE `mokaysa_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u77` (`mokaysa_id`);

--
-- Indexes for table `mokaysa_owners`
--
ALTER TABLE `mokaysa_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mostaklas`
--
ALTER TABLE `mostaklas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mostaklas_files`
--
ALTER TABLE `mostaklas_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_files`
--
ALTER TABLE `other_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `portofolio_images`
--
ALTER TABLE `portofolio_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio_links`
--
ALTER TABLE `portofolio_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectconsults`
--
ALTER TABLE `projectconsults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectowners`
--
ALTER TABLE `projectowners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectstatus`
--
ALTER TABLE `projectstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_files`
--
ALTER TABLE `project_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_links`
--
ALTER TABLE `project_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_requests`
--
ALTER TABLE `project_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_statuses`
--
ALTER TABLE `project_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_team`
--
ALTER TABLE `project_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_type`
--
ALTER TABLE `project_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_types`
--
ALTER TABLE `project_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `E11` (`project_id`),
  ADD KEY `r999` (`project_type_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicesimages`
--
ALTER TABLE `servicesimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_providers`
--
ALTER TABLE `social_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamwork`
--
ALTER TABLE `teamwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamworkprojects`
--
ALTER TABLE `teamworkprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamworktasks`
--
ALTER TABLE `teamworktasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_statuses`
--
ALTER TABLE `team_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `SDSD` (`sector_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akd`
--
ALTER TABLE `akd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `akd_files`
--
ALTER TABLE `akd_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `amresnad`
--
ALTER TABLE `amresnad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `applicantes`
--
ALTER TABLE `applicantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant_files`
--
ALTER TABLE `applicant_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eltezam`
--
ALTER TABLE `eltezam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `eltezam_files`
--
ALTER TABLE `eltezam_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fax`
--
ALTER TABLE `fax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `fax_files`
--
ALTER TABLE `fax_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `fax_viewers`
--
ALTER TABLE `fax_viewers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `hosts`
--
ALTER TABLE `hosts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `host_services`
--
ALTER TABLE `host_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `icone`
--
ALTER TABLE `icone`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `icones`
--
ALTER TABLE `icones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_applicantes`
--
ALTER TABLE `job_applicantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `korasabaten`
--
ALTER TABLE `korasabaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `korasamalekowners`
--
ALTER TABLE `korasamalekowners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `korasa_eshtertat_files`
--
ALTER TABLE `korasa_eshtertat_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `korasa_eshtratat`
--
ALTER TABLE `korasa_eshtratat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `mawkef_tanfezy`
--
ALTER TABLE `mawkef_tanfezy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mawkef_tanfezy_files`
--
ALTER TABLE `mawkef_tanfezy_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `moda`
--
ALTER TABLE `moda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mokaysa`
--
ALTER TABLE `mokaysa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `mokaysa_bnod`
--
ALTER TABLE `mokaysa_bnod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mokaysa_files`
--
ALTER TABLE `mokaysa_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `mokaysa_owners`
--
ALTER TABLE `mokaysa_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `mostaklas`
--
ALTER TABLE `mostaklas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mostaklas_files`
--
ALTER TABLE `mostaklas_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `other_files`
--
ALTER TABLE `other_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portofolio_images`
--
ALTER TABLE `portofolio_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portofolio_links`
--
ALTER TABLE `portofolio_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `projectconsults`
--
ALTER TABLE `projectconsults`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `projectowners`
--
ALTER TABLE `projectowners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `projectstatus`
--
ALTER TABLE `projectstatus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_files`
--
ALTER TABLE `project_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_links`
--
ALTER TABLE `project_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_requests`
--
ALTER TABLE `project_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_statuses`
--
ALTER TABLE `project_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_team`
--
ALTER TABLE `project_team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_type`
--
ALTER TABLE `project_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_types`
--
ALTER TABLE `project_types`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `servicesimages`
--
ALTER TABLE `servicesimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_providers`
--
ALTER TABLE `social_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teamwork`
--
ALTER TABLE `teamwork`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teamworkprojects`
--
ALTER TABLE `teamworkprojects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teamworktasks`
--
ALTER TABLE `teamworktasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_statuses`
--
ALTER TABLE `team_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fax_files`
--
ALTER TABLE `fax_files`
  ADD CONSTRAINT `R78` FOREIGN KEY (`fax_id`) REFERENCES `fax` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `korasa_eshtertat_files`
--
ALTER TABLE `korasa_eshtertat_files`
  ADD CONSTRAINT `r1` FOREIGN KEY (`korasa_id`) REFERENCES `korasa_eshtratat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `korasa_eshtratat`
--
ALTER TABLE `korasa_eshtratat`
  ADD CONSTRAINT `r77` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mokaysa`
--
ALTER TABLE `mokaysa`
  ADD CONSTRAINT `R18` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mokaysa_files`
--
ALTER TABLE `mokaysa_files`
  ADD CONSTRAINT `u77` FOREIGN KEY (`mokaysa_id`) REFERENCES `mokaysa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `SDSD` FOREIGN KEY (`sector_id`) REFERENCES `sector` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
