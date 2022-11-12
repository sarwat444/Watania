-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2021 at 12:52 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serversoft`
--

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
(47, '2021_03_07_045853_create_table_messages', 20);

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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `start_date`, `end_date`, `description`, `logo`, `created_at`, `updated_at`) VALUES
(11, '600apps', '2021-03-01', '2021-03-25', '<p>dsfsfssdfdsfsdfsdfsfsfs</p>', '', '2021-03-01 04:38:36', '2021-03-01 04:38:36'),
(12, '600apps', '2021-03-01', '2021-03-25', '<p>dsfsfssdfdsfsdfsdfsfsfs</p>', '', '2021-03-01 04:42:13', '2021-03-01 04:42:13'),
(13, 'cvcvcxvxczv', '2021-03-18', '2021-03-25', '<p>czxvvzxvcxzv</p>', '', '2021-03-04 19:08:50', '2021-03-04 19:08:50'),
(14, 'cvcvcxvxczv', '2021-03-17', '2021-03-18', '<p>hgjhgfjghfjhfhgj</p>', '', '2021-03-04 19:10:46', '2021-03-04 19:10:46'),
(15, 'sakr', '2021-03-04', '2021-03-12', '<p>sadsadadasdasdsd</p>', '', '2021-03-04 19:13:35', '2021-03-04 19:13:35'),
(16, 'test project', '2021-03-26', '2021-03-27', '<p>test &nbsp;</p>', '', '2021-03-04 19:51:06', '2021-03-04 19:51:06'),
(17, 'dfsfsdfasd', '2021-03-11', '2021-03-19', '<p>dsfsdafsd</p>', '', '2021-03-04 19:54:35', '2021-03-04 19:54:35'),
(18, 'testapp', '2021-03-19', '2021-03-19', '<p>bcvbcvbvcbvcb</p>', 'BX4Y0RqgywaZqAUH3pwpbVqAjNgYw21GKsOHSbtU.png', '2021-03-04 20:31:38', '2021-03-04 20:31:38'),
(19, 'cvcvcxvxczv', '2021-03-16', '2021-03-27', '<p>fdsfsdafsdaf</p>', 'Xmy2F1i2iHbcHO4RTJnVmuHUCtyVH613lu4Jyy8z.png', '2021-03-04 20:32:25', '2021-03-04 20:32:25');

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
-- Table structure for table `project_types`
--

CREATE TABLE `project_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_type_id` int(11) NOT NULL,
  `project_request_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'اضافه مستخدم جديد ', '2021-03-11 14:18:29', '2021-03-19 14:18:29'),
(2, 'حذف  الخدمات ', '2021-03-25 14:18:29', '2021-03-15 14:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(3, 'تصميم المواقع الاكترونية', '<p>تصميم مواقع الكترونية مثل تصميم موقع الشركات و المواقع الشخصية و الطبية والمواقع الحكومية والمؤسسات ومواقع المحاماة … وغيرها</p><p>&nbsp;</p>', 'desktop', '2021-04-15 05:49:04', '2021-04-15 05:49:04'),
(4, 'إستضافة المواقع الالكترونية', '<p>باقات مختلفة من افضل أنواع الإستضافة المواقع الالكترونية والتي تمتاز بسرعتها العالية وحمايتها العالية مع خدمة النسخ الإحتياطي</p><p>&nbsp;</p>', 'database', '2021-04-15 05:51:00', '2021-04-15 05:51:00'),
(5, 'تصميم الهوية التجاريه', '<p>هوية الشركة هي شخصيتها، وكلما امتلكت المؤسسة هوية مميزة كلما كانت أكثر قدرة على النجاح والتفوق على منافسيها فقط قدم لنا نبذه عن مشروعك</p>', 'palette', '2021-04-15 05:55:41', '2021-04-15 05:55:41'),
(6, 'تصميم وبرمجة التطبيقات', '<p>لسنا مطوريين تطبيقات نمطيين بل نعمل بمواصفات ومعايير عالمية لإخراج أفضل الأعمال وبإحترافية عالية</p>', 'mobile-alt', '2021-04-15 05:56:08', '2021-04-15 05:56:08'),
(7, 'دعم فني للمواقع', '<p>تأكد تماماً بأن مشروعك سيكون تحت المراقبة والدعم اللازم من أجل ضمان إستقراريته وستتلقى دعم فني وفوري وعلى مدار الساعة والأسبوع 24/7</p>', 'headphones', '2021-04-15 05:56:34', '2021-04-15 05:56:34'),
(8, 'خدمات التسويق الالكتروني', '<p>من اهم الخدمات التي تبرع بها الشركة وتتم من خلال ادارة الحملات الاعلانية المدفوعة على جوجل لتظهر بمنتجك فى اول صفحات محركات البحث بكل احترافية</p>', 'bullhorn', '2021-04-15 05:57:33', '2021-04-15 05:57:33');

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
(42, 3, '6077715da3994_github.png', NULL, NULL),
(43, 4, '607771d24b415_slack.png', NULL, NULL),
(44, 5, '607772ec258c2_dribbble.png', NULL, NULL),
(45, 6, '60777307389d8_bitbucket.png', NULL, NULL),
(46, 7, '6077732032d41_bitbucket.png', NULL, NULL),
(47, 8, '6077735befc89_dribbble.png', NULL, NULL);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'admin@gmail.com', NULL, '$2y$10$qFb7H9RI.X8u./PkLho7d.g2FGNPPoCV6UT8rNVOJKKZ.PGNlmCJa', 'adL3UmG04Pbc7fCCpEN2WMiJFApl1Z5PQj6FfnIr19O4MuvWjfTaiTe6glVT', '2021-03-01 01:30:51', '2021-03-01 01:30:51'),
(7, 'Mostafa', 'mostafa@gmail.com', NULL, '$2y$10$Dn0Kku.iZLhqyqdXtUrli.iUh8j/Q6tHPW.KpWX02MmO0F7LoAs5u', NULL, '2021-03-05 13:35:24', '2021-03-05 13:35:24'),
(8, 'GGGGGGG@GMAIL.COM', 'TTTTTTT@GMAIL.COM', NULL, '$2y$10$x8ne0snX8fOG06BE9Bv45.cBr3ROsTbU1oZscGEKny7CftMeUf3fm', NULL, '2021-03-05 13:38:26', '2021-03-05 13:38:26');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `project_types`
--
ALTER TABLE `project_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
-- AUTO_INCREMENT for table `project_types`
--
ALTER TABLE `project_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `servicesimages`
--
ALTER TABLE `servicesimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
