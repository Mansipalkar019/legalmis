-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 05:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u144953935_u144953935stz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_id` int(11) NOT NULL,
  `email_address` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL,
  `level` enum('1','2','3') DEFAULT '2' COMMENT '1:admin, 2:Counter_user,3:dp_user',
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `email_address`, `password`, `full_name`, `mobile_number`, `level`, `added_on`) VALUES
(1, 'counter@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Counter', '8424940007', '1', '2018-04-07 06:33:51'),
(2, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '8766787666', '2', '2019-09-16 07:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(2) COLLATE utf8_unicode_ci DEFAULT '1' COMMENT '1:active,0 inactive',
  `added_on` datetime DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT current_timestamp(),
  `uploaded_By` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `description`, `image_name`, `status`, `added_on`, `date_modified`, `uploaded_By`) VALUES
(31, 'mutant', 'hi', '122694129761PHq7M9xUL._SL1024_.jpg', '1', '2019-07-24 00:00:00', '2019-07-24 17:05:09', 'wheyfood'),
(30, 'it is resr 2222', 'healtxp is pryuftfh<br>', '35876855PRE workout 42% discounts.jpg', '1', '2019-07-16 00:00:00', '2019-07-16 14:13:11', 'wheyfood'),
(29, 'It is a test', 'it is a tetst', '1516734522582278952download.jpg', '1', '2019-07-16 00:00:00', '2019-07-16 12:53:00', 'Mr. RAJ NAMDEV');

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `blog_detail_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`blog_detail_id`, `blog_id`, `title`, `description`, `image_name`) VALUES
(1, 1, 'KAR Enterprises', 'KAR Enterprises are the official importer of brands like Ultimate Nutrition and BioX Nutrition in India.\n\nUltimate Nutrition - Ultimate Nutrition was founded in 1979 by Victor H. Rubino. Ultimate Nutrition was among the first companies to have Amino Acid tablets, protein powders, carbohydrate powders, and various types of Fat Burners.\nBioX Nutrition - BioX Nutrition offers the widest assortment of athletic supplements in the business ranging from Protein Powders, Ready to Drink Protein and Energy Drinks, High Protein Nutrition Bars, Weight Gain and Weight loss aids as well as athletic performance enhancing supplements.', 'a2.png'),
(2, 7, 'demo4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'freight-train-363436_1920.jpg'),
(3, 7, 'dsem6', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'meeting.png'),
(4, 9, 'fg', 'Gymnasia apparatus such as barbells, parallel bars, jumping board, running path, tennis-balls, cricket field, and fencing area are used as exercises. In safe weather, outdoor locations are the most conducive to health.[2] Gyms were popular in ancient Greece. Their curricula included Gymnastica militaria or self-defense, gymnastica medica, or physical therapy to help the sick and injured, and gymnastica athletica for physical fitness and sports, from boxing to dancing.[3]\n\nGymnasia also had teachers of wisdom and philosophy. Community gymnastic events were done as part of the celebrations during various village festivals. In ancient Greece there was a phrase of contempt, \"He can neither swim nor write.\" After a while, however, Olympic athletes began training in buildings specifically designed for them. Community sports never became as popular among ancient Romans as it had among the ancient Greeks. Gyms were used more as a preparation for military service or spectator sports. During the Roman Empire, the gymnastic art was forgotten. In the Dark Ages there were sword fighting tournaments and of chivalry; and after gunpowder was invented sword fighting began to be replaced by the sport of fencing, as well as schools of dagger fighting and wrestling and boxing.[4]\n\nThen in the 18th century, Salzmann, German clergyman, opened a gym in Thuringia teaching bodily exercises, including running and swimming. Clias and Volker established gyms in London, and in 1825, Doctor Beck, a German immigrant, established the first gymnasium in the United States. It was found that gym pupils lose interest in doing the same exercises, partly because of age. Variety in exercises included skating, dancing, and swimming. Some gym activities can be done by 6 to 8-year-olds while age 16 has been considered mature enough for boxing and horseback riding.[5]\n\nIn Ancient Greece, the gymnasion (γυμνάσιον) was a locality for both physical and intellectual education of young men. The latter meaning of intellectual education persisted in Greek, German and other languages to denote a certain type of school providing secondary education, the gymnasium, whereas in English the meaning of physical education pertained in the word \'gym\'.[6] The Greek word gymnasium, which means \"school for naked exercise,\" was used to designate a locality for the education of young men, including physical education (gymnastics, for example, exercise) which was customarily performed naked, as well as bathing, and studies. For the Greeks, physical education was considered as important as cognitive learning. Most Greek gymnasia had libraries that for use after relaxing in the baths.', 'maxresdefault.jpg'),
(5, 11, 'fg', 'Gymnasia apparatus such as barbells, parallel bars, jumping board, running path, tennis-balls, cricket field, and fencing area are used as exercises. In safe weather, outdoor locations are the most conducive to health.[2] Gyms were popular in ancient Greece. Their curricula included Gymnastica militaria or self-defense, gymnastica medica, or physical therapy to help the sick and injured, and gymnastica athletica for physical fitness and sports, from boxing to dancing.[3]\n\nGymnasia also had teachers of wisdom and philosophy. Community gymnastic events were done as part of the celebrations during various village festivals. In ancient Greece there was a phrase of contempt, \"He can neither swim nor write.\" After a while, however, Olympic athletes began training in buildings specifically designed for them. Community sports never became as popular among ancient Romans as it had among the ancient Greeks. Gyms were used more as a preparation for military service or spectator sports. During the Roman Empire, the gymnastic art was forgotten. In the Dark Ages there were sword fighting tournaments and of chivalry; and after gunpowder was invented sword fighting began to be replaced by the sport of fencing, as well as schools of dagger fighting and wrestling and boxing.[4]\n\nThen in the 18th century, Salzmann, German clergyman, opened a gym in Thuringia teaching bodily exercises, including running and swimming. Clias and Volker established gyms in London, and in 1825, Doctor Beck, a German immigrant, established the first gymnasium in the United States. It was found that gym pupils lose interest in doing the same exercises, partly because of age. Variety in exercises included skating, dancing, and swimming. Some gym activities can be done by 6 to 8-year-olds while age 16 has been considered mature enough for boxing and horseback riding.[5]\n\nIn Ancient Greece, the gymnasion (γυμνάσιον) was a locality for both physical and intellectual education of young men. The latter meaning of intellectual education persisted in Greek, German and other languages to denote a certain type of school providing secondary education, the gymnasium, whereas in English the meaning of physical education pertained in the word \'gym\'.[6] The Greek word gymnasium, which means \"school for naked exercise,\" was used to designate a locality for the education of young men, including physical education (gymnastics, for example, exercise) which was customarily performed naked, as well as bathing, and studies. For the Greeks, physical education was considered as important as cognitive learning. Most Greek gymnasia had libraries that for use after relaxing in the baths.', 'biggest-sale-offer-banner-template-for-brand-promotion-vector.jpg'),
(6, 21, '', '', ''),
(7, 22, '', '', ''),
(8, 23, '', '', ''),
(9, 24, '', '', ''),
(10, 25, '', '', ''),
(11, 26, '', '', ''),
(12, 27, '', '', ''),
(13, 28, '', '', ''),
(14, 29, '', '', ''),
(15, 30, '', '', ''),
(16, 31, '', '', ''),
(17, 31, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `br_id` bigint(20) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  `branch_id` varchar(30) NOT NULL,
  `branch_manager` varchar(30) NOT NULL,
  `no_of_emps` bigint(20) NOT NULL,
  `branch_location` varchar(30) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`br_id`, `branch_name`, `branch_id`, `branch_manager`, `no_of_emps`, `branch_location`, `contact_no`, `email`, `status`) VALUES
(6, 'Thane', 'THANE01', 'Pratik', 10, 'Thane', '2323423432', 'pratik@gmail.com', '1'),
(7, 'Dadar', 'DADAR02', 'Amul', 20, 'Dadar', '23423', 'amul@gmail.com', '1'),
(8, 'Vashi', 'VASHI001', 'Mahesh', 15, 'Vashi', '9999999999', 'vashi@microlan.in', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(5) NOT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `brand_name_ar` varchar(255) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `status` int(5) DEFAULT 1,
  `date_modified` timestamp NULL DEFAULT current_timestamp(),
  `active_inactive` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_name_ar`, `image_name`, `img_url`, `status`, `date_modified`, `active_inactive`) VALUES
(1, 'Apple', 'fdfdffgf1232', '1.png', 'uploads/1.png', 0, '2022-08-16 13:21:30', '1'),
(2, 'avon', NULL, 'phone.png', 'uploads/phone1.png', 0, '2022-08-16 13:23:58', '1'),
(3, 'avon', NULL, 'mobile-cover.png', 'uploads/phone2.png', 0, '2022-08-16 13:23:58', '1'),
(4, 'Samsung', '', '2.jpg', 'uploads/2.jpg', 0, '2022-08-16 19:35:13', '1'),
(5, 'oppo', '', '3.jpg', 'uploads/3.jpg', 0, '2022-08-17 07:25:50', '1'),
(6, 'avon1', NULL, 'mobile-cover.png', 'uploads/mobile-cover.png', 0, '2022-08-17 07:26:28', '1'),
(7, 'avon3', '', '4.png', 'uploads/4.png', 0, '2022-08-17 07:27:27', '1'),
(9, 'Boat', '', '5.png', 'uploads/5.png', 0, '2022-08-17 12:31:55', '1'),
(10, 'Apple', 'Apple1', '11.png', 'uploads/11.png', 1, '2022-08-21 17:39:01', '1'),
(11, 'Anker', 'Anker', '9.png', 'uploads/9.png', 1, '2022-08-21 17:40:25', '1'),
(12, 'Aynola', 'Aynola', 'download.png', 'uploads/download.png', 1, '2022-08-21 17:43:10', '1'),
(13, 'Baseus', 'Baseus', '2.png', 'uploads/2.png', 1, '2022-08-21 17:43:42', '1'),
(14, 'Dobe', 'Dobe', 'download_(1).png', 'uploads/download_(1).png', 1, '2022-08-21 17:49:09', '1'),
(15, 'Duka', 'Duka', '19.png', 'uploads/19.png', 0, '2022-08-21 17:51:33', '1'),
(16, 'Goovi', 'Goovi', 'download_(2).png', 'uploads/download_(2).png', 1, '2022-08-21 17:54:56', '1'),
(17, 'Gosund', 'Gosund', 'download_(3).png', 'uploads/download_(3).png', 1, '2022-08-21 17:56:01', '1'),
(18, 'Goui', 'Goui', '8.png', 'uploads/8.png', 1, '2022-08-21 17:56:31', '1'),
(19, 'Govee', 'Govee', 'download_(4).png', 'uploads/download_(4).png', 1, '2022-08-21 17:57:04', '1'),
(20, 'Green', 'Green', '161.png', 'uploads/161.png', 1, '2022-08-21 17:57:34', '1'),
(21, 'HailiCare', 'HailiCare', 'download_(5).png', 'uploads/download_(5).png', 1, '2022-08-21 18:01:09', '1'),
(22, 'Hipee', 'Hipee', 'images.png', 'uploads/images.png', 1, '2022-08-21 18:04:46', '1'),
(23, 'Hxsj', 'Hxsj', 'download_(6)1.png', 'uploads/download_(6)1.png', 1, '2022-08-21 18:08:34', '1'),
(24, 'iLepo', 'iLepo', 'download_(7).png', 'uploads/download_(7).png', 1, '2022-08-21 18:11:10', '1'),
(25, 'Joyroom', 'Joyroom', 'download_(9).png', 'uploads/download_(9).png', 1, '2022-08-21 18:14:06', '1'),
(26, 'Kjh', 'Kjh', 'logo1.png', 'uploads/logo1.png', 1, '2022-08-21 18:21:30', '1'),
(27, 'Leaven', 'Leaven', 'download_(8)2.png', 'uploads/download_(8)2.png', 1, '2022-08-21 18:24:54', '1'),
(28, 'Maono', 'Maono', 'download_(10).png', 'uploads/download_(10).png', 1, '2022-08-21 18:28:11', '1'),
(29, 'Moft', 'Moft', '12.png', 'uploads/12.png', 1, '2022-08-21 18:28:58', '1'),
(30, '10moons', '10moons', 'download_(11).png', 'uploads/download_(11).png', 1, '2022-08-21 18:30:41', '1'),
(31, 'Porodo', 'Porodo', '10.png', 'uploads/10.png', 1, '2022-08-21 18:33:27', '1'),
(32, 'Powerology', 'Powerology', '15.png', 'uploads/15.png', 1, '2022-08-21 18:34:00', '1'),
(33, 'Proda', 'Proda', 'download_(12).png', 'uploads/download_(12).png', 1, '2022-08-21 18:34:48', '1'),
(34, 'Rako', 'Rako', '171.png', 'uploads/171.png', 1, '2022-08-21 18:35:58', '1'),
(35, 'Remax', 'Remax', 'download_(14).png', 'uploads/download_(14).png', 1, '2022-08-21 18:48:26', '1'),
(36, 'Reolink', 'Reolink', '111.png', 'uploads/111.png', 1, '2022-08-21 18:51:12', '1'),
(37, 'Rocketek', 'Rocketek', 'download_(15).png', 'uploads/download_(15).png', 1, '2022-08-21 18:53:31', '1'),
(38, 'Sades', 'Sades', 'download_(16).png', 'uploads/download_(16).png', 1, '2022-08-21 18:56:11', '1'),
(39, 'Sandisk', 'Sandisk', '51.png', 'uploads/51.png', 1, '2022-08-21 18:56:51', '1'),
(40, 'Sensibo', 'Sensibo', 'download_(17).png', 'uploads/download_(17).png', 1, '2022-08-21 18:57:44', '1'),
(41, 'Soaiy', 'Soaiy', 'download_(18).png', 'uploads/download_(18).png', 1, '2022-08-21 18:58:51', '1'),
(42, 'Sunfoot', 'Sunfoot', 'download_(19).png', 'uploads/download_(19).png', 1, '2022-08-21 18:59:51', '1'),
(43, 'Tronsmart', 'Tronsmart', 'download1.png', 'uploads/download1.png', 1, '2022-08-21 19:02:43', '1'),
(44, 'Torras', 'Torras', 'download_(20).png', 'uploads/download_(20).png', 1, '2022-08-21 19:03:49', '1'),
(45, 'UNIQ', 'UNIQ', '14.png', 'uploads/14.png', 1, '2022-08-21 19:04:28', '1'),
(46, 'uGreen', 'uGreen', 'download_(21).png', 'uploads/download_(21).png', 1, '2022-08-21 19:05:12', '1'),
(47, 'Vention', 'Vention', 'download_(22).png', 'uploads/download_(22).png', 1, '2022-08-21 19:06:09', '1'),
(48, 'Xiaomi', 'Xiaomi', 'download_(23).png', 'uploads/download_(23).png', 1, '2022-08-21 19:07:10', '1'),
(49, 'Zendure', 'Zendure', '6.png', 'uploads/6.png', 1, '2022-08-21 19:07:43', '1'),
(50, 'Ziyou Lang', 'Ziyou Lang', 'images_(1).png', 'uploads/images_(1).png', 1, '2022-08-21 19:10:41', '1'),
(51, 'inateck', 'inateck', 'download_(24).png', 'uploads/download_(24).png', 1, '2022-08-21 19:16:37', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `qty`, `status`, `created_at`, `updated_at`) VALUES
(32, 39, 1, 1, 1, '2022-07-23 10:44:58', '2022-07-23 10:44:58'),
(34, 41, 2, 1, 1, '2022-07-23 18:05:21', '2022-07-23 18:05:21'),
(52, 32, 3, 14, 1, '2022-08-01 09:15:02', '2022-08-01 09:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `fk_lang_id` int(11) DEFAULT NULL,
  `category_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `category_name_ar` varchar(100) CHARACTER SET utf8 DEFAULT '',
  `image_path` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `sort_order` int(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT '1' COMMENT '0:disabled, 1:enabled',
  `active_inactive` enum('1','0') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `date_modeified` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `fk_lang_id`, `category_name`, `category_name_ar`, `image_path`, `sort_order`, `status`, `active_inactive`, `created_at`, `date_modeified`, `category_type`) VALUES
(1, NULL, 'Smartphone', 'شاومى', 'uploads/offer02.jpg', 12, '0', '1', '2022-08-10 14:44:41', '2022-08-10 14:44:41', 'Normal'),
(3, NULL, 'Special Prices', 'اسعار مميزة', 'uploads/Special_Offers.png', 1, '1', '1', '2022-08-10 19:02:42', '2022-08-10 19:02:42', 'Normal'),
(4, NULL, 'Gift Cards', 'بطاقات الكترونية', 'uploads/cgift_cards.png', 2, '1', '1', '2022-08-10 19:03:48', '2022-08-10 19:03:48', 'Gift Card'),
(5, NULL, 'Home Gadgets', 'منتجات منزلية', 'uploads/Home_gadgets.png', 3, '1', '1', '2022-08-10 19:04:12', '2022-08-10 19:04:12', 'Normal'),
(6, NULL, 'Smart Devices', 'الأجهزة الذكية', 'uploads/Samrt_devices.png', 4, '1', '1', '2022-08-10 19:04:27', '2022-08-10 19:04:27', 'Normal'),
(7, NULL, 'Audio', 'الصوتيات', 'uploads/audio.png', 5, '1', '1', '2022-08-10 19:05:05', '2022-08-10 19:05:05', 'Normal'),
(8, NULL, 'Gaming', 'جيمنغ', 'uploads/gaming.png', 6, '1', '1', '2022-08-10 19:05:29', '2022-08-10 19:05:29', 'Normal'),
(9, NULL, 'Cables & Adapters', 'الاسلاك والتوصيلات', 'uploads/cabels.png', 7, '1', '1', '2022-08-10 19:06:03', '2022-08-10 19:06:03', 'Normal'),
(10, NULL, 'Accessories', 'إكسسوارات', 'uploads/Accessories_.png', 9, '1', '1', '2022-08-10 19:06:34', '2022-08-10 19:06:34', 'Normal'),
(11, NULL, 'Stands & Mounts', 'ستاندات وقواعد', 'uploads/Stands.png', 10, '1', '1', '2022-08-10 19:07:52', '2022-08-10 19:07:52', 'Normal'),
(12, NULL, 'Others', 'اخرى', 'uploads/Others.png', 11, '1', '1', '2022-08-10 19:12:28', '2022-08-10 19:12:28', 'Normal'),
(13, NULL, 'Chargers', 'شواحن', 'uploads/Cahrgers1.png', 8, '0', '1', '2022-08-10 19:13:24', '2022-08-10 19:13:24', 'Normal'),
(14, NULL, 'test', 'test', 'uploads/Screen_Shot_2022-08-11_at_2_02_24_PM.png', 0, '0', '1', '2022-08-11 08:47:08', '2022-08-11 08:47:08', 'Normal'),
(15, NULL, 'Chargers', 'شواحن', 'uploads/Cahrgers2.png', 8, '1', '1', '2022-08-21 19:25:57', '2022-08-21 19:25:57', 'Normal'),
(16, NULL, 'Gift Cards', 'كرت هدية', 'uploads/5.jpg', 0, '0', '1', '2022-08-25 09:55:07', '2022-08-25 09:55:07', 'Gift Card');

-- --------------------------------------------------------

--
-- Table structure for table `childcategory`
--

CREATE TABLE `childcategory` (
  `child_category_id` bigint(20) NOT NULL,
  `fk_lang_id` int(11) DEFAULT NULL,
  `category_id` bigint(20) NOT NULL,
  `sub_category_id` bigint(20) NOT NULL,
  `child_category_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `child_category_name_ar` varchar(100) CHARACTER SET utf32 NOT NULL,
  `sort_order` varchar(100) CHARACTER SET utf32 NOT NULL,
  `status` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childcategory`
--

INSERT INTO `childcategory` (`child_category_id`, `fk_lang_id`, `category_id`, `sub_category_id`, `child_category_name`, `child_category_name_ar`, `sort_order`, `status`) VALUES
(1, 1, 13, 13, 'Zendure A5PD Power Bank 2 Ports 16,750mAh', 'زندور A5PD باور بانك منفذين 16،750 مللي أمبير', '1', 1),
(3, 1, 13, 13, 'Powerology 10,000mAh 8 in 1 Power Bank Charging Do', 'قاعدة شحن باورولوجي بقوة 10،000 مللي أمبير 8 في 1 - أبيض', '2', 1),
(5, 1, 13, 15, 'uGreen Gan 4 Ports 100w Charger', 'شاحن uGreen Gan 4 منافذ 100 واط', '3', 1),
(7, 1, 13, 15, 'iLepo 60W 6 Ports Charging Station', 'محطة شحن iLepo 60 واط 6 منافذ', '4', 1),
(22, NULL, 1, 1, 'Govee Smart Mini Hygrometer Thermometer', 'جهاز ذكي بلوتوث لقياس درجة الحرارة والرطوبة من Govee * متوفر', '7', 0),
(23, NULL, 11, 23, 'MOFT X Phone Stand – White', 'ستاند ومحفظة للجوال من موفت – ابيض', '10', 1),
(24, NULL, 13, 13, 'Added By Rahfdgf', '1Arabic chilf ', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `child_banner`
--

CREATE TABLE `child_banner` (
  `bottom_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(2) COLLATE utf8_unicode_ci DEFAULT '1' COMMENT '1:active,0 inactive',
  `added_on` datetime DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `child_banner`
--

INSERT INTO `child_banner` (`bottom_id`, `category_id`, `image_name`, `img_url`, `status`, `added_on`, `date_modified`) VALUES
(1, 1, '2072865493web banner whey orotein.jpg', 'http://healthxp.microlan.co.in/product/listing/sports-nutrition-1/protein-1/whey-protein--3', '1', NULL, '2019-03-01 08:05:33'),
(4, 4, '157666950web banner mass gainer.jpg', 'http://healthxp.microlan.co.in/product/listing/sports-nutrition-1/gainers--2/mass-gainer-8', '1', NULL, '2019-03-01 14:56:26'),
(3, 3, '1843112364web banner whey isolate.jpg', 'http://healthxp.microlan.co.in/product/listing/sports-nutrition-1/protein-1/whey-protein-isolate-2', '1', NULL, '2019-03-01 08:51:00'),
(5, 2, '1749281204web banner pre workout.jpg', 'http://healthxp.microlan.co.in/product/listing/sports-nutrition-1/pre-or-post-workout-4/pre-workout-10', '1', NULL, '2019-03-01 14:57:16'),
(6, 1, '166989904web banner bcaa.jpg', 'http://healthxp.microlan.co.in/product/listing/sports-nutrition-1/pre-or-post-workout-4/bcaas-amino-acids-11', '1', NULL, '2019-03-01 14:58:06'),
(7, 4, '407663138web banner fat burner.jpg', 'http://healthxp.microlan.co.in/product/listing/sports-nutrition-1/workout-essentials-5/fat-burners-15', '1', NULL, '2019-03-01 14:59:03'),
(8, 2, '1007108630web banner multivitamin.jpg', 'http://healthxp.microlan.co.in/product/listing/sports-nutrition-1/workout-essentials-5/multivitamins-17', '1', NULL, '2019-03-01 14:59:55'),
(9, 3, '731913152web banner fitness essential.jpg', 'http://healthxp.microlan.co.in/product/listing/sports-nutrition-1/workout-essentials-5', '1', NULL, '2019-03-01 15:02:24'),
(10, 4, '12529959070207b2f2-41ea-4c02-92ca-ccf0f4885a56._CR0,0,300,300_PT0_SX300__.jpg', 'http://healthxp.microlan.co.in/product/listing/sports-nutrition-1/pre-or-post-workout-4/creatine-12', '1', NULL, '2019-03-01 17:07:54'),
(11, 6, '2028009091def9cfe5-f100-49af-98cb-08f057072738._CR0,0,970,300_PT0_SX970__.jpg', 'http://healthxp.microlan.co.in/product/detailing/on-optimum-nutrition-gold-standard-whey-protein-5lbs-3', '1', NULL, '2019-03-23 12:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `company_setting`
--

CREATE TABLE `company_setting` (
  `comp_sett_id` bigint(20) NOT NULL,
  `company_id` varchar(40) NOT NULL,
  `company_name` varchar(35) NOT NULL,
  `company_logo` text NOT NULL,
  `billing_address` varchar(50) NOT NULL,
  `gst_no` varchar(30) NOT NULL,
  `state_code` varchar(30) NOT NULL,
  `pan_no` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `support_email` varchar(40) NOT NULL,
  `company_website` varchar(50) NOT NULL,
  `bank_ac_name` varchar(30) NOT NULL,
  `bank_ac_no` varchar(30) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `ifsc_no` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `member_id_prefix` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_setting`
--

INSERT INTO `company_setting` (`comp_sett_id`, `company_id`, `company_name`, `company_logo`, `billing_address`, `gst_no`, `state_code`, `pan_no`, `contact`, `email`, `support_email`, `company_website`, `bank_ac_name`, `bank_ac_no`, `bank_name`, `ifsc_no`, `branch`, `member_id_prefix`) VALUES
(1, '', 'Circuit Store', '1172932750logo-2-1.png', '', '', '27', 'AZDSDS34324', '345452453452', 'info@sabratechnologies.in', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_master`
--

CREATE TABLE `coupon_master` (
  `coupon_id` int(11) NOT NULL,
  `coupon_code` varchar(50) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `discount_type` enum('1','2') DEFAULT '1' COMMENT '1:Percentage, 2:Cash Amount',
  `expired_on` date DEFAULT NULL,
  `status` enum('0','1') DEFAULT '0' COMMENT '0:unused,1:used',
  `description` varchar(255) DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courier_charges`
--

CREATE TABLE `courier_charges` (
  `id` bigint(20) NOT NULL,
  `bill_amount_from` float(11,2) NOT NULL,
  `bill_amount_to` float(11,2) NOT NULL,
  `courier_charge` float(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier_charges`
--

INSERT INTO `courier_charges` (`id`, `bill_amount_from`, `bill_amount_to`, `courier_charge`) VALUES
(1, 1.00, 1000.00, 75.00),
(2, 1001.00, 2000.00, 150.00);

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password`
--

CREATE TABLE `forgot_password` (
  `fp_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `requested_on` datetime DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgot_password`
--

INSERT INTO `forgot_password` (`fp_id`, `user_id`, `email_address`, `requested_on`, `modified_at`) VALUES
(5, 8, 'lalit.prajapati@microlan.in', '2016-09-11 16:13:35', '2016-09-10 23:43:35'),
(6, 7, 'ajay_ncy@outlook.com', '2016-12-20 13:06:10', '2016-12-20 02:06:10'),
(7, 4, 'aman.navghane@microlan.in', '2019-03-07 14:11:39', '2019-03-07 08:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `gift_card`
--

CREATE TABLE `gift_card` (
  `id` int(5) NOT NULL,
  `cat_id` varchar(255) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `uniq_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift_card`
--

INSERT INTO `gift_card` (`id`, `cat_id`, `status`, `uniq_code`) VALUES
(1, '1', 1, 'ABCGD123'),
(2, '1', 1, 'ABCGD456'),
(3, '1', 1, 'ABCGD789'),
(4, '5', 1, 'HDFSHD6465');

-- --------------------------------------------------------

--
-- Table structure for table `gift_card_cat`
--

CREATE TABLE `gift_card_cat` (
  `id` int(5) NOT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `sort_order` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift_card_cat`
--

INSERT INTO `gift_card_cat` (`id`, `categories`, `status`, `sort_order`) VALUES
(1, 'abc', '1', 10),
(2, 'abcsds', '1', 4),
(3, 'abcsds12', '1', 5),
(4, 'aadsabc', '1', 5),
(5, '', '0', 0),
(6, '', '0', 0),
(7, '', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gst_setting`
--

CREATE TABLE `gst_setting` (
  `gst_set_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `sub_category_id` bigint(20) NOT NULL,
  `gst_type` enum('I','E') NOT NULL,
  `SGST` float NOT NULL,
  `CGST` float NOT NULL,
  `IGST` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst_setting`
--

INSERT INTO `gst_setting` (`gst_set_id`, `category_id`, `sub_category_id`, `gst_type`, `SGST`, `CGST`, `IGST`) VALUES
(1, 1, 1, 'I', 0, 0, 0),
(2, 1, 2, 'I', 0, 0, 0),
(3, 1, 0, 'I', 0, 0, 0),
(5, 3, 3, 'I', 0, 0, 0),
(7, 6, 0, 'I', 0, 0, 0),
(8, 16, 0, 'I', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(5) NOT NULL,
  `supplier_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `add_qty` bigint(20) DEFAULT NULL,
  `deduct_qty` bigint(20) DEFAULT NULL,
  `qty` bigint(20) DEFAULT NULL,
  `used_status` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) DEFAULT '1',
  `user_status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `supplier_id`, `product_id`, `add_qty`, `deduct_qty`, `qty`, `used_status`, `date`, `created_at`, `modified_at`, `status`, `user_status`) VALUES
(1, '1', '1', 100, NULL, 100, '0', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', NULL),
(2, '1', '2', 100, NULL, 100, '0', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', NULL),
(3, '1', '3', 100, NULL, 100, '0', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', NULL),
(4, '1', '4', 100, NULL, 100, '1', NULL, '2022-07-22 11:22:35', '2022-07-22 11:22:35', '1', NULL),
(5, '1', '5', 100, NULL, 100, '0', NULL, '2022-07-22 11:23:22', '2022-07-22 11:23:22', '1', NULL),
(6, '1', '6', 100, NULL, 0, '1', NULL, '2022-07-22 11:23:41', '2022-07-22 11:23:41', '1', NULL),
(7, NULL, '1', NULL, 2, 98, '0', '07/23/2022', '2022-07-23 08:56:10', '2022-07-23 08:56:10', '1', NULL),
(8, NULL, '3', NULL, 1, 99, '1', '07/23/2022', '2022-07-23 08:56:10', '2022-07-23 08:56:10', '1', NULL),
(9, NULL, '5', NULL, 1, 99, '0', '07/23/2022', '2022-07-23 08:56:10', '2022-07-23 08:56:10', '1', NULL),
(10, NULL, '5', NULL, 2, 97, '1', '07/25/2022', '2022-07-25 12:06:14', '2022-07-25 12:06:14', '1', NULL),
(11, NULL, '2', NULL, 1, 99, '1', '07/25/2022', '2022-07-25 12:06:14', '2022-07-25 12:06:14', '1', NULL),
(12, NULL, '1', NULL, 1, 97, '1', '07/25/2022', '2022-07-25 12:06:14', '2022-07-25 12:06:14', '1', NULL),
(13, NULL, '7', 10, NULL, 10, '1', '07/26/2022', '2022-07-26 05:24:01', '2022-07-26 05:24:01', '1', NULL),
(14, NULL, '8', 12, NULL, 12, '1', '07/30/2022', '2022-07-30 04:57:35', '2022-07-30 04:57:35', '1', NULL),
(15, NULL, '9', 54, NULL, 54, '1', '07/30/2022', '2022-07-30 05:35:23', '2022-07-30 05:35:23', '1', NULL),
(16, NULL, '11', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 05:43:20', '2022-08-05 05:43:20', '1', NULL),
(17, NULL, '12', 13, NULL, 13, '1', '08/05/2022', '2022-08-05 06:04:42', '2022-08-05 06:04:42', '1', NULL),
(18, NULL, '13', 34, NULL, 34, '1', '08/05/2022', '2022-08-05 06:21:15', '2022-08-05 06:21:15', '1', NULL),
(19, NULL, '14', 23, NULL, 23, '1', '08/05/2022', '2022-08-05 06:24:26', '2022-08-05 06:24:26', '1', NULL),
(20, NULL, '16', 13, NULL, 13, '1', '08/05/2022', '2022-08-05 06:36:09', '2022-08-05 06:36:09', '1', NULL),
(21, NULL, '17', 23, NULL, 23, '1', '08/05/2022', '2022-08-05 06:39:43', '2022-08-05 06:39:43', '1', NULL),
(22, NULL, '18', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 06:40:39', '2022-08-05 06:40:39', '1', NULL),
(23, NULL, '19', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 06:44:02', '2022-08-05 06:44:02', '1', NULL),
(24, NULL, '20', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 06:44:25', '2022-08-05 06:44:25', '1', NULL),
(25, NULL, '21', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 06:56:06', '2022-08-05 06:56:06', '1', NULL),
(26, NULL, '23', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 07:26:32', '2022-08-05 07:26:32', '1', NULL),
(27, NULL, '27', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 10:30:05', '2022-08-05 10:30:05', '1', NULL),
(28, NULL, '29', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 10:31:36', '2022-08-05 10:31:36', '1', NULL),
(29, NULL, '32', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 10:32:43', '2022-08-05 10:32:43', '1', NULL),
(30, NULL, '32', 0, NULL, 0, '1', NULL, '0000-00-00 00:00:00', '2022-08-05 10:36:50', '1', NULL),
(31, NULL, '32', 0, NULL, 0, '1', NULL, '0000-00-00 00:00:00', '2022-08-05 10:37:06', '1', NULL),
(32, NULL, '32', 0, NULL, 0, '1', NULL, '0000-00-00 00:00:00', '2022-08-05 10:38:02', '1', NULL),
(33, NULL, '32', 0, NULL, 0, '1', NULL, '0000-00-00 00:00:00', '2022-08-05 10:39:11', '1', NULL),
(34, NULL, '32', 0, NULL, 0, '1', NULL, '0000-00-00 00:00:00', '2022-08-05 10:41:36', '1', NULL),
(35, NULL, '32', 0, NULL, 0, '1', NULL, '0000-00-00 00:00:00', '2022-08-05 10:41:48', '1', NULL),
(36, NULL, '35', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 11:19:30', '2022-08-05 11:19:30', '1', NULL),
(37, NULL, '37', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 12:49:04', '2022-08-05 12:49:04', '1', NULL),
(38, NULL, '43', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 12:49:58', '2022-08-05 12:49:58', '1', NULL),
(39, NULL, '49', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 12:51:44', '2022-08-05 12:51:44', '1', NULL),
(40, NULL, '59', 0, NULL, 0, '1', '08/05/2022', '2022-08-05 12:53:02', '2022-08-05 12:53:02', '1', NULL),
(41, NULL, NULL, 0, NULL, 0, '1', NULL, '0000-00-00 00:00:00', '2022-08-05 13:17:51', '1', NULL),
(42, NULL, NULL, 0, NULL, 0, '1', NULL, '0000-00-00 00:00:00', '2022-08-05 13:18:57', '1', NULL),
(43, NULL, NULL, 0, NULL, 0, '1', NULL, '0000-00-00 00:00:00', '2022-08-05 13:22:03', '1', NULL),
(44, NULL, NULL, 0, NULL, 0, '1', NULL, '0000-00-00 00:00:00', '2022-08-05 13:31:25', '1', NULL),
(45, NULL, '62', 0, NULL, 0, '1', '08/06/2022', '2022-08-06 04:13:42', '2022-08-06 04:13:42', '1', NULL),
(46, NULL, '63', 20, NULL, 0, '1', '08/06/2022', '2022-08-06 04:15:46', '2022-08-06 04:15:46', '1', NULL),
(47, NULL, '67', 0, NULL, 0, '1', '08/06/2022', '2022-08-06 04:17:56', '2022-08-06 04:17:56', '1', NULL),
(48, NULL, '70', 0, NULL, 0, '1', '08/06/2022', '2022-08-06 04:19:44', '2022-08-06 04:19:44', '1', NULL),
(49, NULL, '80', 0, NULL, 0, '1', '08/06/2022', '2022-08-06 05:50:06', '2022-08-06 05:50:06', '1', NULL),
(50, NULL, '87', 0, NULL, 0, '1', '08/06/2022', '2022-08-06 05:51:57', '2022-08-06 05:51:57', '1', NULL),
(51, NULL, '92', 0, NULL, 0, '1', '08/06/2022', '2022-08-06 05:57:42', '2022-08-06 05:57:42', '1', NULL),
(52, NULL, '99', 0, NULL, 0, '1', '08/06/2022', '2022-08-06 05:59:15', '2022-08-06 05:59:15', '1', NULL),
(53, NULL, '100', 54, NULL, 54, '1', '08/06/2022', '2022-08-06 07:27:09', '2022-08-06 07:27:09', '1', NULL),
(54, NULL, '101', 23, NULL, 23, '1', '08/08/2022', '2022-08-08 11:07:49', '2022-08-08 11:07:49', '1', NULL),
(55, NULL, '104', 0, NULL, 0, '1', '08/08/2022', '2022-08-08 11:25:56', '2022-08-08 11:25:56', '1', NULL),
(56, NULL, '105', 10, NULL, 10, '1', '08/08/2022', '2022-08-08 11:54:40', '2022-08-08 11:54:40', '1', NULL),
(57, NULL, '108', 0, NULL, 0, '1', '08/08/2022', '2022-08-08 11:55:18', '2022-08-08 11:55:18', '1', NULL),
(58, NULL, '109', 0, NULL, 0, '1', '08/10/2022', '2022-08-10 09:19:07', '2022-08-10 09:19:07', '1', NULL),
(59, NULL, '110', 0, NULL, 0, '1', '08/10/2022', '2022-08-10 09:20:21', '2022-08-10 09:20:21', '1', NULL),
(60, NULL, '111', 0, NULL, 0, '1', '08/10/2022', '2022-08-10 09:21:01', '2022-08-10 09:21:01', '1', NULL),
(61, NULL, '112', 0, NULL, 0, '1', '08/10/2022', '2022-08-10 09:33:23', '2022-08-10 09:33:23', '1', NULL),
(62, NULL, '117', 0, NULL, 0, '1', '08/10/2022', '2022-08-10 09:36:07', '2022-08-10 09:36:07', '1', NULL),
(63, NULL, '119', 0, NULL, 0, '1', '08/10/2022', '2022-08-10 10:18:45', '2022-08-10 10:18:45', '1', NULL),
(64, '1', '1', 12, NULL, 12, '1', NULL, '0000-00-00 00:00:00', '2022-08-11 09:18:39', '1', NULL),
(65, '', '111', 11, NULL, 11, '1', NULL, '0000-00-00 00:00:00', '2022-08-11 09:18:48', '1', NULL),
(66, '1', '1', 14, NULL, 14, '1', NULL, '0000-00-00 00:00:00', '2022-08-11 09:18:57', '1', NULL),
(67, '1', '1', 16, NULL, 16, '1', NULL, '0000-00-00 00:00:00', '2022-08-11 09:19:09', '1', NULL),
(68, '1', '1', 200, NULL, 200, '1', NULL, '0000-00-00 00:00:00', '2022-08-11 09:19:40', '1', NULL),
(69, NULL, '120', 13, NULL, 13, '1', '08/12/2022', '2022-08-12 09:42:16', '2022-08-12 09:42:16', '1', NULL),
(70, NULL, '121', 10, NULL, 10, '1', '08/12/2022', '2022-08-12 09:44:27', '2022-08-12 09:44:27', '1', NULL),
(71, NULL, '122', 10, NULL, 10, '1', '08/16/2022', '2022-08-16 10:59:17', '2022-08-16 10:59:17', '1', NULL),
(72, NULL, '123', 34, NULL, 34, '1', '08/16/2022', '2022-08-16 11:02:32', '2022-08-16 11:02:32', '1', NULL),
(73, NULL, '124', 20, NULL, 20, '1', '08/16/2022', '2022-08-16 11:16:45', '2022-08-16 11:16:45', '1', NULL),
(74, NULL, '125', 0, NULL, 0, '1', '08/16/2022', '2022-08-16 12:03:58', '2022-08-16 12:03:58', '1', NULL),
(75, NULL, '126', 0, NULL, 0, '1', '08/16/2022', '2022-08-16 12:03:58', '2022-08-16 12:03:58', '1', NULL),
(76, NULL, '127', 0, NULL, 0, '1', '08/16/2022', '2022-08-16 12:06:57', '2022-08-16 12:06:57', '1', NULL),
(77, NULL, '128', 0, NULL, 0, '1', '08/16/2022', '2022-08-16 12:06:57', '2022-08-16 12:06:57', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_address_type`
--

CREATE TABLE `master_address_type` (
  `id` int(11) NOT NULL,
  `address_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_address_type`
--

INSERT INTO `master_address_type` (`id`, `address_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 1, '2022-07-02 07:29:34', '2022-07-02 07:29:34'),
(2, 'Office', 1, '2022-07-02 07:29:34', '2022-07-02 07:29:34'),
(3, 'Others', 1, '2022-07-02 07:29:42', '2022-07-02 07:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `master_product_type`
--

CREATE TABLE `master_product_type` (
  `id` int(11) NOT NULL,
  `fk_lang_id` int(11) DEFAULT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_product_type`
--

INSERT INTO `master_product_type` (`id`, `fk_lang_id`, `product_type`, `product_type_ar`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'New Products', 'منتجات جديدة', 1, '2022-06-25 10:06:27', '2022-06-25 10:06:27'),
(2, NULL, 'Best selling', 'أفضل مبيعات', 1, '2022-06-25 10:06:35', '2022-06-25 10:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `offer_master`
--

CREATE TABLE `offer_master` (
  `offer_id` int(11) NOT NULL,
  `offer_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `org_id` int(11) DEFAULT NULL,
  `on_first_order_only` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '0' COMMENT '0:No,1:Yes',
  `nos_of_uses` int(20) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `offer_type` enum('1','2','3') COLLATE utf8_unicode_ci DEFAULT '3' COMMENT '1:Percentage,2:Rupees,3:Cash Back',
  `offer_amount` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `min_amount_purchase` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `offer_category` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_on` datetime DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `offer_master`
--

INSERT INTO `offer_master` (`offer_id`, `offer_name`, `org_id`, `on_first_order_only`, `nos_of_uses`, `from_date`, `to_date`, `offer_type`, `offer_amount`, `min_amount_purchase`, `offer_category`, `added_on`, `status`, `updated_at`) VALUES
(1, 'offer7777', 2, '1', 100, '2018-04-05', '2018-05-31', '3', '150', '300', '2', '2019-05-03 00:00:00', '1', '2019-05-03 08:18:34'),
(2, 'tyyyyyyy', 2, '1', 100, '2018-04-05', '2018-04-07', '3', '150', '23', '1', '2018-04-05 00:00:00', '0', '2018-04-05 14:23:53'),
(3, 'uiiuu', 2, '1', 100, '2018-04-05', '2018-04-22', '3', '150', '45', '7', '2018-04-05 00:00:00', '0', '2018-04-05 14:22:30'),
(4, 'ioo', 2, '1', 100, '2018-04-05', '2018-04-07', '3', '150', '454', '2', '2018-04-05 00:00:00', '0', '2018-04-05 14:22:26'),
(5, 'cash', 2, '1', 100, '2018-04-05', '2018-04-07', '3', '150', '56', '4', '2018-04-05 00:00:00', '1', '2018-04-05 14:24:18'),
(6, '18', 3, '0', 200, '2019-05-03', '2019-05-31', '1', '5', '0', '1,2', '2019-05-03 00:00:00', '1', '2019-05-03 08:44:14'),
(7, 'ON500', 1, '0', 15, '2019-05-04', '2019-05-05', '2', '500', '5000', '1', '2019-05-04 00:00:00', '1', '2019-05-04 12:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `online_txn_data`
--

CREATE TABLE `online_txn_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_date` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_time` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discounted_amount` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `offer_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `session_id` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `txn_data` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `online_txn_data`
--

INSERT INTO `online_txn_data` (`id`, `user_id`, `address_id`, `txn_id`, `del_date`, `del_time`, `amount`, `discounted_amount`, `offer_code`, `status`, `session_id`, `txn_data`, `modified_at`) VALUES
(1, 1, NULL, 'ATEWCM', '2018-06-13', '13:37:48', '400', NULL, 'MONEY_ADDED_TO_WALLET', 'failure', '2c95ce016a5ee9e53cd5780126b8573e', '{\"mihpayid\":\"195529491\",\"mode\":\"\",\"status\":\"failure\",\"unmappedstatus\":\"userCancelled\",\"key\":\"Jhl5t4FM\",\"txnid\":\"ATEWCM\",\"amount\":\"400.0\",\"addedon\":\"2018-06-13 17:08:51\",\"productinfo\":\"DIRECT FARM ADD MONEY TO Wallet\",\"firstname\":\"member\",\"lastname\":\"\",\"address1\":\"\",\"address2\":\"\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"member@gmail.com\",\"phone\":\"5353245342\",\"udf1\":\"\",\"udf2\":\"\",\"udf3\":\"\",\"udf4\":\"\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"01c1fabafe464f0370b1557cf4c4af3d85bd14ff94ae60f80bfbfa4e0a91be0432c70eadfcd9493f1cb21fd1ccafab6070ad193883b1470f26317332528b723a\",\"field1\":\"\",\"field2\":\"\",\"field3\":\"\",\"field4\":\"\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"\",\"field8\":\"\",\"field9\":\"Cancelled by user\",\"PG_TYPE\":\"PAISA\",\"bank_ref_num\":\"195529491\",\"bankcode\":\"PAYUW\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"payuMoneyId\":\"195529491\"}', '2018-06-13 11:38:53'),
(2, 1, NULL, '3DP3CW', '2018-06-13', '13:39:24', '300', NULL, 'MONEY_ADDED_TO_WALLET', 'failure', '2c95ce016a5ee9e53cd5780126b8573e', '{\"mihpayid\":\"195529785\",\"mode\":\"\",\"status\":\"failure\",\"unmappedstatus\":\"userCancelled\",\"key\":\"Jhl5t4FM\",\"txnid\":\"3DP3CW\",\"amount\":\"300.0\",\"addedon\":\"2018-06-13 17:11:37\",\"productinfo\":\"DIRECT FARM ADD MONEY TO Wallet\",\"firstname\":\"member\",\"lastname\":\"\",\"address1\":\"\",\"address2\":\"\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"zipcode\":\"\",\"email\":\"member@gmail.com\",\"phone\":\"5353245342\",\"udf1\":\"\",\"udf2\":\"\",\"udf3\":\"\",\"udf4\":\"\",\"udf5\":\"\",\"udf6\":\"\",\"udf7\":\"\",\"udf8\":\"\",\"udf9\":\"\",\"udf10\":\"\",\"hash\":\"2226db052459370441c76bd72cccf5e63567a6eb69ab5c4c2e26440d28a1e52f0a08933273d07041edeee27cda1c83979d153c18783a567d2a588cdbf9547eb7\",\"field1\":\"\",\"field2\":\"\",\"field3\":\"\",\"field4\":\"\",\"field5\":\"\",\"field6\":\"\",\"field7\":\"\",\"field8\":\"\",\"field9\":\"Cancelled by user\",\"PG_TYPE\":\"PAISA\",\"bank_ref_num\":\"195529785\",\"bankcode\":\"PAYUW\",\"error\":\"E000\",\"error_Message\":\"No Error\",\"payuMoneyId\":\"195529785\"}', '2018-06-13 11:41:38'),
(3, 4, 13, 'DF1551512827424', '2019-03-28', '03.00 PM - 06.00 PM', '6899', '00.00', '', '0', 'ad3e06f15f56c772d5c4ae2a4f182d26', NULL, '2019-03-02 08:50:41'),
(4, 4, 13, 'DF1551512846440', '2019-03-28', '03.00 PM - 06.00 PM', '6899', '00.00', '', '0', 'ad3e06f15f56c772d5c4ae2a4f182d26', NULL, '2019-03-02 08:51:00'),
(5, 4, 13, 'DF1551512926487', '2019-03-28', '06.00 PM - 10.00 PM', '6899', '00.00', '', '0', 'ad3e06f15f56c772d5c4ae2a4f182d26', NULL, '2019-03-02 08:52:20'),
(6, 4, 12, 'DF1551513007064', '2019-03-28', '06.00 PM - 10.00 PM', '6899', '00.00', '', '0', 'ad3e06f15f56c772d5c4ae2a4f182d26', NULL, '2019-03-02 08:53:40'),
(7, 4, 13, 'DF1551513312632', '2019-03-28', '06.00 PM - 10.00 PM', '6899', '00.00', '', '0', 'ad3e06f15f56c772d5c4ae2a4f182d26', NULL, '2019-03-02 08:58:46'),
(8, 4, 13, 'DF1551513419508', '2019-03-28', '06.00 PM - 10.00 PM', '6899', '00.00', '', '0', 'ad3e06f15f56c772d5c4ae2a4f182d26', NULL, '2019-03-02 09:00:33'),
(9, 4, 12, 'DF1551513505075', '2019-03-28', '03.00 PM - 06.00 PM', '6899', '00.00', '', '0', 'ad3e06f15f56c772d5c4ae2a4f182d26', NULL, '2019-03-02 09:01:58'),
(10, 4, 12, 'DF1551513673746', '2019-03-28', '03.00 PM - 06.00 PM', '6899', '00.00', '', '0', 'ad3e06f15f56c772d5c4ae2a4f182d26', NULL, '2019-03-02 09:04:47'),
(11, 4, 13, 'DF1551513844397', '2019-03-28', '03.00 PM - 06.00 PM', '6899', '00.00', '', '0', 'ad3e06f15f56c772d5c4ae2a4f182d26', NULL, '2019-03-02 09:07:38'),
(12, 4, 13, 'DF1551514127247', '2019-03-21', '06.00 PM - 10.00 PM', '6899', '00.00', '', '0', 'ad3e06f15f56c772d5c4ae2a4f182d26', NULL, '2019-03-02 09:12:20'),
(13, 4, 13, 'DF1551514241085', '2019-03-21', '06.00 PM - 10.00 PM', '6899', '00.00', '', '0', 'ad3e06f15f56c772d5c4ae2a4f182d26', NULL, '2019-03-02 09:14:15'),
(14, 4, 12, 'DF1551529647432', '2019-03-21', '03.00 PM - 06.00 PM', '5999', '00.00', '', '0', '0dbc4fc0fa72e38493f9bba4f449609e', NULL, '2019-03-02 13:31:01'),
(15, 4, 13, 'WH1552565653093', '1970-01-01', '12.00 PM - 03.00 PM', '5999', '00.00', '', '0', 'c2f7dce2294ef3893e3310e1869ad146', NULL, '2019-03-14 13:18:03'),
(16, 4, 13, 'WH1552565695165', '1970-01-01', '03.00 PM - 06.00 PM', '5999', '00.00', '', '0', 'c2f7dce2294ef3893e3310e1869ad146', NULL, '2019-03-14 13:18:45'),
(17, 4, 13, 'WH1553777512003', '1970-01-01', 'undefined', '3399', '00.00', '', '0', '236e1a43090029e3a88b3e3dc073c619', NULL, '2019-03-28 13:55:46'),
(18, 4, 12, 'WH1554962251859', '1970-01-01', 'undefined', '10499', '00.00', '', '0', '84c13e7df0f6c8444505b639bd08a88e', NULL, '2019-04-11 07:01:28'),
(19, 4, 13, 'WH1554970309851', '1970-01-01', 'undefined', '5999', '00.00', '', '0', '84c13e7df0f6c8444505b639bd08a88e', NULL, '2019-04-11 09:15:47'),
(20, 4, 13, 'WH1556070952865', '1970-01-01', 'undefined', '17997', '00.00', '', '0', '28c0b26767fd520e416a19f7576b39f2', NULL, '2019-04-24 02:59:46'),
(21, 4, 13, 'WH1556103134525', '1970-01-01', 'undefined', '17997', '00.00', '', '0', '6c2eaa8e687ba30353a2d04c3f441f43', NULL, '2019-04-24 11:56:04'),
(22, 4, 13, 'WH1556460815651', '1970-01-01', 'undefined', '6299', '00.00', '', '0', '2eacddbab01014615c2e2b859d95548a', NULL, '2019-04-28 15:17:30'),
(23, 4, 2, 'WH1556976360350', '1970-01-01', 'undefined', '1649', '00.00', '', '0', '6a39104d7543a1b9661954a303587b02', NULL, '2019-05-04 14:29:48'),
(24, 4, 2, 'WH1562751552910', '1970-01-01', 'undefined', '11998', '00.00', '', '0', 'c7f263cac4e24716f9bd122d1e462373', NULL, '2019-07-10 10:43:18'),
(25, 4, 2, 'WH1562765665024', '1970-01-01', 'undefined', '5999', '00.00', '', '0', '6440b3f773302e2430cd3c425d3a6131', NULL, '2019-07-10 14:38:27'),
(26, 4, 2, 'WH1562767272394', '1970-01-01', 'undefined', '5199', '00.00', '', '0', '6440b3f773302e2430cd3c425d3a6131', NULL, '2019-07-10 15:05:14'),
(27, 4, 2, 'WH1570616799500', '1970-01-01', 'undefined', '5999', '00.00', '', '0', '0b64a081e554b4be97c8cca4993dc9ef', NULL, '2019-10-09 11:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `op_user`
--

CREATE TABLE `op_user` (
  `op_user_id` bigint(20) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contact_no` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `profile_photo` text DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '1=active,0=deactive',
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `deactivation_date` date DEFAULT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `device_type` int(11) DEFAULT NULL COMMENT '1=Android and 2=ios',
  `notifn_topic` varchar(255) NOT NULL,
  `terms_condition` int(11) NOT NULL DEFAULT 1 COMMENT '1=yes,0=no',
  `terms_conditn_id` int(11) NOT NULL DEFAULT 0,
  `app_version` varchar(255) DEFAULT NULL,
  `app_build_no` int(11) DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `otp_verify_status` enum('0','1') NOT NULL,
  `date` datetime DEFAULT NULL,
  `active_inactive` enum('1','0') NOT NULL,
  `login_time_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op_user`
--

INSERT INTO `op_user` (`op_user_id`, `user_name`, `email`, `contact_no`, `address`, `role_id`, `password`, `profile_photo`, `status`, `added_on`, `deactivation_date`, `device_id`, `device_type`, `notifn_topic`, `terms_condition`, `terms_conditn_id`, `app_version`, `app_build_no`, `otp`, `otp_verify_status`, `date`, `active_inactive`, `login_time_date`) VALUES
(10, 'rktyu', 'rert@g.com', '7654363738', 'efsvsdfsdfsd', 2, '123456', 'https://bhoomifile.com/dev/uploads/35cc10d93c455dbf274c55caa0989f4b.png', '0', '2022-06-23 13:34:00', '0000-00-00', 'rewet4trgreg23r2', 1, '7654363738ecom', 1, 1, '1.0.0', 1, NULL, '0', NULL, '1', NULL),
(11, 'rktyu', 'rert@g.com', '7654363738', 'efsvsdfsdfsd', 2, '123456', 'https://bhoomifile.com/dev/uploads/35cc10d93c455dbf274c55caa0989f4b.png', '0', '2022-06-23 13:35:44', '0000-00-00', 'rewet4trgreg23r2', 1, '7654363738ecom', 1, 1, '1.0.0', 1, NULL, '0', NULL, '1', NULL),
(12, 'rktyu', 'rert@g.com', '7654363735', 'efsvsdfsdfsd', 2, '123456', 'https://bhoomifile.com/dev/uploads/35cc10d93c455dbf274c55caa0989f4b.png', '0', '2022-06-23 13:35:56', '0000-00-00', 'rewet4trgreg23r2', 1, '7654363735ecom', 1, 1, '1.0.0', 1, NULL, '0', NULL, '1', NULL),
(13, 'rktyu', 'rert@g.com', '8654363735', 'efsvsdfsdfsd', 2, '$2y$10$J1KcBJEGEpeY65l75hL3cORrDNlE63x009R2XuW12fx', 'https://bhoomifile.com/dev/uploads/35cc10d93c455dbf274c55caa0989f4b.png', '1', '2022-06-24 04:45:30', '0000-00-00', 'rewet4trgreg23r2', 1, '8654363735ecom', 1, 1, '1.0.0', 1, NULL, '0', NULL, '1', NULL),
(14, 'rkty4', 'rert@g.com', '8654363735', 'efsvsdfsdfsd', 2, '$2y$10$FNk2BEm9iKwocPGLVCfu2eG8.nyuSKAgq8FNFIbraxY', 'a3ba1a34cbaada9936b447d3fa190d46.png', '1', '2022-06-24 04:49:28', '0000-00-00', 'rewet4trgreg23r2', 1, '8654363735ecom', 1, 1, '1.0.0', 1, NULL, '0', NULL, '1', NULL),
(15, 'rktyu', 'rert@g.com', '9654363735', 'efsvsdfsdfsd', 2, '$2y$10$kWn/P8ByEeEqT/XuZ2mTUeDaP4t.F5C5PjpzYAE1xXZ', 'https://bhoomifile.com/dev/uploads/35cc10d93c455dbf274c55caa0989f4b.png', '1', '2022-06-24 05:34:30', '0000-00-00', 'rewet4trgreg23r2', 1, '9654363735ecom', 1, 1, '1.0.0', 1, NULL, '0', NULL, '1', NULL),
(16, 'rktyu', 'rert@g.com', '4654363735', 'efsvsdfsdfsd', 2, 'e10adc3949ba59abbe56e057f20f883e', 'https://bhoomifile.com/dev/uploads/35cc10d93c455dbf274c55caa0989f4b.png', '1', '2022-06-24 05:40:11', '0000-00-00', 'rewet4trgreg23r2', 1, '4654363735ecom', 1, 1, '1.0.0', 1, NULL, '0', NULL, '1', NULL),
(17, 'rkty3', 'rert@g.com', '4754363735', 'efsvsdfsdfsd', 2, 'e10adc3949ba59abbe56e057f20f883e', 'https://bhoomifile.com/dev/uploads/067a4c9131bbb5bcae638f506206080a.png', '1', '2022-06-24 05:40:37', '0000-00-00', 'rewet4trgreg23r2', 1, '4754363735ecom', 1, 1, '1.0.0', 1, NULL, '0', NULL, '1', NULL),
(18, 'rk123', '', '4354363735', '', 2, 'e10adc3949ba59abbe56e057f20f883e', '', '1', '2022-06-24 08:41:48', '0000-00-00', 'rewet4trgreg23r2', 1, '4354363735ecom', 1, 1, '1.0.0', 1, NULL, '0', NULL, '1', NULL),
(19, 'rk', 'rk@gmail.com', '7777788888', '', 2, 'e10adc3949ba59abbe56e057f20f883e', '', '1', '2022-07-04 10:30:56', '0000-00-00', 'safsefefwe3232', 1, '7777788888ecom', 1, 1, '1.0.1', 1, NULL, '0', NULL, '1', NULL),
(21, 's', '', '7875279816', NULL, 2, 'bDVVT3J4N2tXZ3JvdU01UEIxQmVmQT09', NULL, '1', '2022-07-08 10:45:20', NULL, NULL, NULL, '7875279816ecom', 1, 0, NULL, NULL, NULL, '0', NULL, '1', NULL),
(22, 'nssksjk', '', '9309303909309', NULL, 2, 'bTVVbENLRHQzL2NOQlhlck1td2RZdz09', NULL, '1', '2022-07-08 11:08:18', NULL, NULL, NULL, '9309303909309ecom', 1, 0, NULL, NULL, NULL, '0', NULL, '1', NULL),
(23, 'ddd', '', '22333333', NULL, 2, 'bDVVT3J4N2tXZ3JvdU01UEIxQmVmQT09', NULL, '1', '2022-07-08 11:12:15', NULL, NULL, NULL, '22333333ecom', 1, 0, NULL, NULL, NULL, '0', NULL, '1', NULL),
(24, 'eieuieuei', '', '4089484849', NULL, 2, 'bDVVT3J4N2tXZ3JvdU01UEIxQmVmQT09', NULL, '1', '2022-07-08 11:12:45', NULL, NULL, NULL, '4089484849ecom', 1, 0, NULL, NULL, NULL, '0', NULL, '1', NULL),
(25, 'eerrr', '', '435355657777', NULL, 2, 'bDVVT3J4N2tXZ3JvdU01UEIxQmVmQT09', NULL, '1', '2022-07-08 11:13:37', NULL, NULL, NULL, '435355657777ecom', 1, 0, NULL, NULL, NULL, '0', NULL, '1', NULL),
(26, 'ssksj', '', '3898398399', NULL, 2, 'bDVVT3J4N2tXZ3JvdU01UEIxQmVmQT09', NULL, '1', '2022-07-08 11:15:01', NULL, NULL, NULL, '3898398399ecom', 1, 0, NULL, NULL, NULL, '0', NULL, '1', NULL),
(27, 'djdlfdfldq', '', '30904940940', NULL, 2, 'bDVVT3J4N2tXZ3JvdU01UEIxQmVmQT09', NULL, '1', '2022-07-08 11:16:01', NULL, NULL, NULL, '30904940940ecom', 1, 0, NULL, NULL, NULL, '0', NULL, '1', NULL),
(28, 'rkhgg', 'rk@gmail.com', '7744112255', NULL, 2, 'Qjl4dUM1cWtqbnFBTkp1dzZveUJVUT09', NULL, '1', '2022-07-12 07:11:00', NULL, '', 1, '7744112255ecom', 1, 1, '1.0.0', 1, NULL, '0', NULL, '1', NULL),
(31, 'rgytrr', 'rk@gmail.com', '8888899999', NULL, 2, 'Qjl4dUM1cWtqbnFBTkp1dzZveUJVUT09', NULL, '1', '2022-07-12 07:55:42', NULL, '', 1, '8888899999ecom', 1, 1, '1.0.0', 1, NULL, '0', NULL, '1', NULL),
(32, 'Shirin Ragbansingh', 'ragbansinghshirin@gmail.com', '8010597075', NULL, 2, 'SUpmVkE3SmlpQks0Y0thVU1KUklUUT09', NULL, '1', '2022-07-13 07:21:50', NULL, NULL, NULL, '8010597075ecom', 1, 0, NULL, NULL, 366047, '1', NULL, '1', '27/08/2022 11:06:52'),
(34, 'Raj', 'raj.namdev@gmail.com', '8080416002', NULL, 2, 'TW9wOGNDeGlvVVpJNm11RVl2V20rQT09', NULL, '1', '2022-07-13 11:10:40', NULL, NULL, NULL, '8080416002ecom', 1, 0, NULL, NULL, 1945, '1', NULL, '1', NULL),
(35, 'rest rj', 'rk123@gmail.com', '9999988888', NULL, 2, 'Qjl4dUM1cWtqbnFBTkp1dzZveUJVUT09', NULL, '1', '2022-07-14 06:33:15', NULL, '', 1, '9999988888ecom', 1, 1, '1.0.0', 1, 9242, '0', NULL, '1', NULL),
(36, 'ashishshivshive', 'ashishs@bdsserv.com', '8329994314', NULL, 2, 'ZndUbk5jYUhIdHJhaUpDaysxbDA3dz09', NULL, '1', '2022-07-14 15:32:04', NULL, NULL, NULL, '8329994314ecom', 1, 0, NULL, NULL, 3993, '0', NULL, '1', NULL),
(37, 'Taufeek', 't@gmail.com', '70051095', NULL, 2, 'aUpJdzZ3N1hjcC9BbnJYQnA1R3BYZz09', NULL, '1', '2022-07-15 10:42:30', NULL, NULL, NULL, '70051095ecom', 1, 0, NULL, NULL, 54321, '1', NULL, '1', NULL),
(39, 'Mansi Palkar', 'mansipalkar@stzsoft.com', '8651238443', NULL, 2, 'UkxpZlUzSloxYmd4OGJGNjJkV0RjUT09', NULL, '1', '2022-07-23 10:39:34', NULL, NULL, NULL, '8651238443ecom', 1, 0, NULL, NULL, 54321, '1', NULL, '1', NULL),
(40, 'Mansi Palkar', 'mansipalkar12@stzsoft.com', '8652878447', NULL, 2, 'cUZEakJtNFFXOWpRcFdIeFV2dzZuUT09', NULL, '1', '2022-07-23 10:44:16', NULL, NULL, NULL, '8652878447ecom', 1, 0, NULL, NULL, 54321, '0', NULL, '1', NULL),
(41, 'hamad', 'arcanist555@gmail.com', '33203337', NULL, 2, 'Qjl4dUM1cWtqbnFBTkp1dzZveUJVUT09', NULL, '1', '2022-07-23 18:04:57', NULL, NULL, NULL, '33203337ecom', 1, 0, NULL, NULL, 54321, '1', NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `op_user_role`
--

CREATE TABLE `op_user_role` (
  `role_id` bigint(20) NOT NULL,
  `role_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `op_user_role`
--

INSERT INTO `op_user_role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'restrict'),
(4, 'updater'),
(5, 'Purchase ');

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `id` bigint(11) NOT NULL,
  `fk_user_id` varchar(50) DEFAULT NULL,
  `order_number` varchar(20) DEFAULT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `has_coupon_code` enum('0','1') DEFAULT '0' COMMENT '0:no,1:yes',
  `coupon_number` varchar(255) DEFAULT NULL,
  `offer_code` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `sub_total` double DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `grand_total` double DEFAULT NULL,
  `order_date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` varchar(20) DEFAULT NULL,
  `payment_method` varchar(100) DEFAULT NULL COMMENT 'COD, NET_BANKING, WALLET, WALLET_NETBANKING, WALLET_COD',
  `payment_status` varchar(100) DEFAULT NULL,
  `fk_address_id` int(11) DEFAULT NULL,
  `fk_product_id` int(11) DEFAULT NULL,
  `order_source` enum('1','2','3','4','5') DEFAULT '1' COMMENT '1:Website,2:App,3:Counter,4:Grofers',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_data_details`
--

CREATE TABLE `order_data_details` (
  `order_detail_id` int(11) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `order_number` varchar(50) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `pack_size` float(11,2) NOT NULL,
  `qty` varchar(10) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `unit_total` varchar(10) DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orgnisation_master`
--

CREATE TABLE `orgnisation_master` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '1' COMMENT '0:de-activate, 1:active',
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `org_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orgnisation_master`
--

INSERT INTO `orgnisation_master` (`org_id`, `org_name`, `contact_number`, `email_address`, `address_1`, `address_2`, `city`, `state`, `pincode`, `status`, `added_on`, `org_code`) VALUES
(1, 'ALL', '9892066185', '9892066185', 'Address 1', 'Address 2', 'City', '12', '400607', '1', '2016-11-13 13:26:14', ''),
(2, 'Feb Month ', '9004454377', '9004454377', 'koper Khairane', 'koper Khairane', 'mumbai', '12', '400709', '1', '2017-02-18 06:56:56', ''),
(3, 'microlan', '9702266075', 'client@gmail.com', 'LBS Marg, Adersh Chawl,Suryanagar Vikhroli west', 'thane', 'Mumbai', '1', '400083', '1', '2018-04-05 11:08:29', '100'),
(4, 'cmd', '8655615809', 'client@gmail.com', 'kalyan', 'fuit', 'Mumbai', '1', '400083', '1', '2018-04-05 13:22:16', '100');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `fk_lang_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `child_category_id` int(11) NOT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_name_ar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_in_marathi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pack_size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `max_sell_limit` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_offer_price` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_purchase_price` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `listed_in_super_deal` enum('0','1') COLLATE utf8_unicode_ci DEFAULT '1' COMMENT '1:listed,0:not listed',
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_ar` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `relatable_products` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_url` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `product_barcode` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(2) COLLATE utf8_unicode_ci DEFAULT '1' COMMENT '1:active,0 inactive',
  `unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mrp` int(11) NOT NULL,
  `stock_status` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1: InStock ,0: Out of Stock',
  `added_on` datetime DEFAULT current_timestamp(),
  `date_modified` timestamp NULL DEFAULT current_timestamp(),
  `popular` int(5) DEFAULT 0,
  `featured` int(5) DEFAULT 0,
  `best_selling` int(5) DEFAULT 0,
  `qty` int(50) NOT NULL,
  `supplier_id` int(50) NOT NULL,
  `currency_in_english` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_in_arabic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_arrival` int(5) DEFAULT 0,
  `product_offer` int(5) DEFAULT 0,
  `gift_card_stock` int(5) DEFAULT 1,
  `category_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uniq_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_status` int(11) DEFAULT 1,
  `brand_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `fk_lang_id`, `category_id`, `sub_category_id`, `child_category_id`, `unit_id`, `product_name`, `product_code`, `product_name_ar`, `product_in_marathi`, `image_name`, `pack_size`, `product_price`, `max_sell_limit`, `product_offer_price`, `product_purchase_price`, `listed_in_super_deal`, `description`, `description_ar`, `relatable_products`, `video_url`, `product_barcode`, `status`, `unit`, `mrp`, `stock_status`, `added_on`, `date_modified`, `popular`, `featured`, `best_selling`, `qty`, `supplier_id`, `currency_in_english`, `currency_in_arabic`, `new_arrival`, `product_offer`, `gift_card_stock`, `category_type`, `uniq_code`, `product_status`, `brand_id`) VALUES
(1, NULL, 1, 1, 22, 1, 'Xiaomi Smart Air Fryer 3.5L3', '299 QAR', 'مقلاة هوائية ذكية بسعة 3.5 لتر من شاومي', '', 'uploads/products/xsaf1.jpg', '23', '299', '2', '299', '299 ', '0', '<p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Smart air fryer that can be controlled through the control panel or by phone from Xiaomi.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">The air fryer is characterized by fast food preparation with a 24 hour timer that makes it easy for you to prepare food without being at home.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">The temperature can be controlled from 40 to 200 degrees Celsius.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Distinctive shape and spacious interior with a capacity of 3.5 liters.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Digital display showing the temperature and time, in addition to what was chosen from the recipe for preparation.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">It contains 100 different recipes that can be viewed through the control application, which makes it unique.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Control Application: Xiaomi Homes.</p>', '<div class=\"woocommerce-product-details__short-description\" style=\"line-height: 1.5em; color: rgb(125, 125, 125); margin-bottom: 2.5em; font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\"><p>مواصفات المنتج:</p><p>– مقلاة هوائية ذكية يمكن التحكم بها من خلال لوحة التحكم او عن طريق الهاتف من</p></div>', NULL, 'https://www.youtube.com/embed/GcRv-3-pXeI', '299 QAR', '1', '', 0, '1', '2022-07-20 15:22:53', '2022-07-20 09:52:53', 1, 1, 0, 200, 1, 'QAR', 'ر.ق', 1, 1, 1, '', NULL, 1, NULL),
(2, NULL, 1, 3, 0, 1, 'Eufy By Anker Smart Scale C1', 'QARS189', 'ميزان ذكي ومقياس لكتلة الجسم C1 من Anker', '', 'uploads/products/ufi1.jpg', '23', '189', '3', '189', '189', '0', '<p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Smart scale with a digital screen for the body from Anker.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">It is characterized by its high accuracy of daily body sensing when used.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Intelligent analysis system that allows you to - share it with your family members and can save the data of up to 16 people.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">It can be controlled by your phone so you can follow up your data.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Control app: EufyLife</p>', '<p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">– يتميز بدقته العالية لاستشعار الجسد يومياً عند استعمالة.</p><p style=\"color: rgb(125, 125, 125', 'Xiaomi Smart Air Fryer 3.5L', '', 'QARS189', '1', '', 0, '1', '2022-07-20 15:30:26', '2022-07-20 10:00:26', 1, 1, 1, 15, 1, 'QAR', 'ر.ق', 0, 1, 1, 'Normal', NULL, 1, NULL),
(3, NULL, 3, 20, 0, 1, '3D Moon Light With Stand', '200 QAR', 'ستاند مع إضاءة بشكل القمر', '', 'uploads/products/srlal4.jpg', '24', '200', '2', '200', '200', '0', '<p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Moon shaped illumination with a stand, 3D high quality refining to the real moon shape.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">It works by touch and the color can be changed or turned off in the same way.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Brightness can be adjusted by touching and holding the power button.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Rechargeable and does not require batteries. Charging time takes 2-3 hours and works for 6-12 hours, depending on use.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Two different lighting colors ( cold white, warm white ).</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Creates a suitable atmosphere for sleep and can be used in rooms or at home.</p>', '<p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">مواصفات المنتج:</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">– ستاند مع إضاءة بشكل القمر مطبوعة بتنقية 3D ثلاثية الابعاد عالية الجودة لشكل الق', NULL, '', '200 QAR', '1', '', 0, '1', '2022-07-20 15:46:49', '2022-07-20 10:16:49', 1, 1, 0, 12, 0, 'QAR', 'ر.ق', 0, 0, 1, NULL, NULL, 1, NULL),
(5, NULL, 9, 22, 0, 7, 'uGreen Cat8 Fast Ethernet Cable - 3 Meter', '110QAR', 'كابل انترنت سريع كات 8 – 3 متر من uGreen', '', 'uploads/products/cables.jpg', '56', '110', '3', '110', '110', '0', '<p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">The latest and fastest internet cable, Cat8 category, from uGreen.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">The Data transfer speed of the cable is 40 gigabytes per second.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Length: 3 Meters.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Supports the frequency of 2000MHz.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Suitable for gaming, downloading and uploading videos online.</p>', '<div><br></div><div><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">– كابل الانترنت الاحدث والأسرع حاليًا فئة كات 8 من شركة uGreen.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">– تصل سرعة نق', NULL, '', '110QAR', '1', '', 0, '1', '2022-07-20 15:59:08', '2022-07-20 10:29:08', 1, 1, 1, 46, 0, 'QAR', 'ر.ق', 0, 1, 1, NULL, NULL, 1, NULL),
(6, NULL, 9, 22, 0, 7, '	Powerology 10,000mAh 8 in 1 Power Bank Charging Dock - Black', '999 QAR', ' قاعدة شواحن باوربانك 8 في 1 بقوة 10,000 مللي امبير من ', '', 'uploads/products/ss1.jpg', '23', '999', '23', '999', '999', '0', '<p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">(New version) of the 8 portable chargers, each with a capacity of 10,000mAh from Powerology.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Each portable charger contains two built-in wires, Type C and Lightning, in addition to a USB port and an 18W PD port for fast charging.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">Each charger supports 15W wireless charging technology.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">The charging base contains 4 additional USB ports.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">It is characterized by ease of movement and light weight.</p>', '<div><br></div><div><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-size: 14px; letter-spacing: -0.14px;\">– كل شاحن متنقل يحتوي على وايرين مدمجين تايب سي و لايتننغ بالإضافة الى مدخل يو اس بي ومدخل PD 18 واط للشحن السريع.</p><p style=\"color: rgb(125, 125, 125); font-family: Cairo; font-', 'uGreen Cat8 Fast Ethernet Cable - 3 Meter', '', '999 QAR', '1', '', 0, '1', '2022-07-20 16:10:22', '2022-07-20 10:40:22', 1, 1, 1, 45, 1, 'QAR', 'ر.ق', 1, 0, 1, NULL, NULL, 1, NULL),
(128, NULL, 33, 31, 0, NULL, 'erfdsfdg', '', 'fgfgfh', '', 'uploads/products/wifi.webp', NULL, NULL, NULL, '2332', '', '1', NULL, NULL, NULL, '', '', '1', '', 0, '1', '2022-08-16 17:36:57', '2022-08-16 12:06:57', 0, 0, 0, 0, 0, 'QAR', 'ر.ق', 0, 0, 1, 'Gift Card', '343', 1, '4,5'),
(127, NULL, 33, 31, 0, NULL, 'erfdsfdg', '', 'fgfgfh', '', 'uploads/products/wifi.webp', NULL, NULL, NULL, '2332', '', '1', NULL, NULL, NULL, '', '', '1', '', 0, '1', '2022-08-16 17:36:57', '2022-08-16 12:06:57', 0, 0, 0, 0, 0, 'QAR', 'ر.ق', 0, 0, 1, 'Gift Card', '23', 1, '4,5'),
(126, NULL, 33, 31, 0, NULL, 'demostzsoft123', '', 'ميزان ذكي ومقياس لكتلة الجسم C1 من Anker', '', '/uploads/products/audio12.png', NULL, NULL, NULL, '2332', '', '1', NULL, NULL, NULL, '', '', '1', '', 0, '1', '2022-08-16 17:33:58', '2022-08-16 12:03:58', 0, 0, 0, 0, 0, 'QAR', 'ر.ق', 0, 0, 1, 'Gift Card', '2323', 1, NULL),
(125, NULL, 33, 31, 0, NULL, 'demostzsoft123', '', ' قاعدة شواحن باوربانك 8 في 1 بقوة 10,000 مللي امبير من ', '', '/uploads/products/bag_-_Copy1.png', NULL, NULL, NULL, '2332', '', '1', NULL, NULL, NULL, '', '', '1', '', 0, '1', '2022-08-16 17:33:58', '2022-08-16 12:03:58', 0, 0, 0, 0, 0, 'QAR', 'ر.ق', 0, 0, 1, 'Gift Card', '122', 1, NULL),
(123, NULL, 5, 11, 0, NULL, 'demostzsoft123hh', '2020', 'ميزان ذكي ومقياس لكتلة الجسم C1 من Anker', '', 'uploads/products/charger.png', NULL, '123', '23', '123', '123', '1', 'rgtfhg', 'hgjhkj', 'Eufy By Anker Smart Scale C1,3D Moon Light With Stand', 'htp://fgfgfg', '456', '1', '', 0, '1', '2022-08-16 16:32:32', '2022-08-16 11:02:32', 1, NULL, 1, 34, 2, 'QAR', 'ر.ق', NULL, NULL, 1, 'Normal', NULL, 1, '4,5'),
(124, NULL, 9, 22, 0, NULL, 'testproductfdrfd', '2323', ' قاعدة شواحن باوربانك 8 في 1 بقوة 10,000 مللي امبير من ', '', 'uploads/products/audio1.webp', NULL, '23', '', '3', '454', '1', '', '', NULL, '', '', '1', '', 0, '1', '2022-08-16 16:46:45', '2022-08-16 11:16:45', 1, 1, NULL, 20, 0, 'QAR', 'ر.ق', NULL, NULL, 1, 'Normal', NULL, 0, '3,4');

-- --------------------------------------------------------

--
-- Table structure for table `product_comment`
--

CREATE TABLE `product_comment` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(500) CHARACTER SET utf32 NOT NULL,
  `adminaction` int(11) NOT NULL DEFAULT 0 COMMENT '0=pending,1=approved,2=rejected,',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,2=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_comment`
--

INSERT INTO `product_comment` (`id`, `product_id`, `user_id`, `comment`, `adminaction`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 'this product is very good vsvcsa', 1, 1, '2022-06-28 12:03:18', '2022-06-28 12:03:18'),
(4, 1, 1, 'this product is very good', 1, 1, '2022-06-28 12:03:18', '2022-06-28 12:03:18'),
(5, 1, 1, 'this product is very good', 1, 1, '2022-06-28 12:03:18', '2022-06-28 12:03:18'),
(6, 1, 3, 'this product is very good', 1, 1, '2022-06-28 12:08:42', '2022-06-28 12:08:42'),
(7, 1, 20, 'test', 0, 1, '2022-07-12 08:39:26', '2022-07-12 08:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` int(5) NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(5) DEFAULT 1 COMMENT '1=active,0=inactive',
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified_on` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_id`, `img_name`, `img_url`, `status`, `modified_by`, `modified_on`, `created_at`) VALUES
(1, '1', 'xsaf1.jpg', 'uploads/products/xsaf1.jpg', 1, '2', '2022-07-12 04:18:21', '2022-07-12 04:18:21'),
(2, '1', 'xsaf11.jpg', 'uploads/products/xsaf11.jpg', 1, '2', '2022-07-12 04:22:07', '2022-07-12 04:22:07'),
(3, '1', 'xsaf12.jpg', 'uploads/products/xsaf12.jpg', 1, '2', '2022-07-12 04:22:07', '2022-07-12 04:22:07'),
(4, '1', 'xsaf13.jpg', 'uploads/products/xsaf13.jpg', 1, '2', '2022-07-12 04:22:07', '2022-07-12 04:22:07'),
(5, '2', 'xsaf3.jpg', 'uploads/products/xsaf3.jpg', 1, '2', '2022-07-12 04:25:22', '2022-07-12 04:25:22'),
(6, '2', 'xsaf4.jpg', 'uploads/products/xsaf4.jpg', 1, '2', '2022-07-12 04:25:22', '2022-07-12 04:25:22'),
(7, '2', 'xsaf5.jpg', 'uploads/products/xsaf5.jpg', 1, '2', '2022-07-12 04:25:22', '2022-07-12 04:25:22'),
(8, '2', 'xsaf6.jpg', 'uploads/products/xsaf6.jpg', 1, '2', '2022-07-12 04:25:22', '2022-07-12 04:25:22'),
(9, '3', 'ufi11.jpg', 'uploads/products/ufi11.jpg', 1, '2', '2022-07-12 04:53:44', '2022-07-12 04:53:44'),
(10, '3', 'ufi12.jpg', 'uploads/products/ufi12.jpg', 1, '2', '2022-07-12 04:53:44', '2022-07-12 04:53:44'),
(11, '3', 'ufi13.jpg', 'uploads/products/ufi13.jpg', 1, '2', '2022-07-12 04:53:44', '2022-07-12 04:53:44'),
(12, '3', 'ufi14.jpg', 'uploads/products/ufi14.jpg', 1, '2', '2022-07-12 04:53:44', '2022-07-12 04:53:44'),
(13, '4', 'ufi16.jpg', 'uploads/products/ufi16.jpg', 1, '2', '2022-07-12 04:55:21', '2022-07-12 04:55:21'),
(15, '4', 'ufi18.jpg', 'uploads/products/ufi18.jpg', 1, '2', '2022-07-12 04:55:21', '2022-07-12 04:55:21'),
(16, '4', 'ufi19.jpg', 'uploads/products/ufi19.jpg', 1, '2', '2022-07-12 04:55:21', '2022-07-12 04:55:21'),
(17, '5', 'srlal11.jpg', 'uploads/products/srlal11.jpg', 1, '2', '2022-07-12 05:02:01', '2022-07-12 05:02:01'),
(18, '5', 'srlal12.jpg', 'uploads/products/srlal12.jpg', 1, '2', '2022-07-12 05:02:01', '2022-07-12 05:02:01'),
(19, '5', 'srlal13.jpg', 'uploads/products/srlal13.jpg', 1, '2', '2022-07-12 05:02:01', '2022-07-12 05:02:01'),
(20, '5', 'srlal14.jpg', 'uploads/products/srlal14.jpg', 1, '2', '2022-07-12 05:02:01', '2022-07-12 05:02:01'),
(21, '5', 'srlal15.jpg', 'uploads/products/srlal15.jpg', 1, '2', '2022-07-12 05:02:01', '2022-07-12 05:02:01'),
(22, '5', 'srlal16.jpg', 'uploads/products/srlal16.jpg', 1, '2', '2022-07-12 05:02:01', '2022-07-12 05:02:01'),
(23, '6', 'srlal18.jpg', 'uploads/products/srlal18.jpg', 1, '2', '2022-07-12 05:05:16', '2022-07-12 05:05:16'),
(24, '6', 'srlal19.jpg', 'uploads/products/srlal19.jpg', 1, '2', '2022-07-12 05:05:16', '2022-07-12 05:05:16'),
(25, '6', 'srlal110.jpg', 'uploads/products/srlal110.jpg', 1, '2', '2022-07-12 05:05:16', '2022-07-12 05:05:16'),
(26, '6', 'srlal111.jpg', 'uploads/products/srlal111.jpg', 1, '2', '2022-07-12 05:05:16', '2022-07-12 05:05:16'),
(27, '6', 'srlal112.jpg', 'uploads/products/srlal112.jpg', 1, '2', '2022-07-12 05:05:16', '2022-07-12 05:05:16'),
(28, '6', 'srlal113.jpg', 'uploads/products/srlal113.jpg', 1, '2', '2022-07-12 05:05:16', '2022-07-12 05:05:16'),
(29, '7', 'afp11.jpeg', 'uploads/products/afp11.jpeg', 1, '2', '2022-07-12 05:21:55', '2022-07-12 05:21:55'),
(30, '7', 'afp12.jpeg', 'uploads/products/afp12.jpeg', 1, '2', '2022-07-12 05:21:55', '2022-07-12 05:21:55'),
(31, '7', 'afp13.jpeg', 'uploads/products/afp13.jpeg', 1, '2', '2022-07-12 05:21:55', '2022-07-12 05:21:55'),
(32, '7', 'afp14.jpeg', 'uploads/products/afp14.jpeg', 1, '2', '2022-07-12 05:21:55', '2022-07-12 05:21:55'),
(33, '7', 'afp15.jpeg', 'uploads/products/afp15.jpeg', 1, '2', '2022-07-12 05:21:55', '2022-07-12 05:21:55'),
(34, '8', 'afp17.jpeg', 'uploads/products/afp17.jpeg', 1, '2', '2022-07-12 05:24:04', '2022-07-12 05:24:04'),
(35, '8', 'afp18.jpeg', 'uploads/products/afp18.jpeg', 1, '2', '2022-07-12 05:24:04', '2022-07-12 05:24:04'),
(36, '8', 'afp19.jpeg', 'uploads/products/afp19.jpeg', 1, '2', '2022-07-12 05:24:04', '2022-07-12 05:24:04'),
(37, '8', 'afp110.jpeg', 'uploads/products/afp110.jpeg', 1, '2', '2022-07-12 05:24:04', '2022-07-12 05:24:04'),
(38, '8', 'afp111.jpeg', 'uploads/products/afp111.jpeg', 1, '2', '2022-07-12 05:24:04', '2022-07-12 05:24:04'),
(39, '9', 'ww11.png', 'uploads/products/ww11.png', 1, '2', '2022-07-12 05:27:58', '2022-07-12 05:27:58'),
(40, '9', 'ww12.png', 'uploads/products/ww12.png', 1, '2', '2022-07-12 05:27:58', '2022-07-12 05:27:58'),
(41, '9', 'ww13.png', 'uploads/products/ww13.png', 1, '2', '2022-07-12 05:27:58', '2022-07-12 05:27:58'),
(42, '9', 'ww14.png', 'uploads/products/ww14.png', 1, '2', '2022-07-12 05:27:58', '2022-07-12 05:27:58'),
(43, '10', 'ss11.jpg', 'uploads/products/ss11.jpg', 1, '2', '2022-07-12 05:32:25', '2022-07-12 05:32:25'),
(44, '10', 'ss12.jpg', 'uploads/products/ss12.jpg', 1, '2', '2022-07-12 05:32:25', '2022-07-12 05:32:25'),
(45, '10', 'ss13.jpg', 'uploads/products/ss13.jpg', 1, '2', '2022-07-12 05:32:25', '2022-07-12 05:32:25'),
(46, '10', 'ss14.jpg', 'uploads/products/ss14.jpg', 1, '2', '2022-07-12 05:32:25', '2022-07-12 05:32:25'),
(47, '10', 'ss15.jpg', 'uploads/products/ss15.jpg', 1, '2', '2022-07-12 05:32:25', '2022-07-12 05:32:25'),
(48, '11', 'ss17.jpg', 'uploads/products/ss17.jpg', 1, '2', '2022-07-12 05:34:10', '2022-07-12 05:34:10'),
(49, '11', 'ss18.jpg', 'uploads/products/ss18.jpg', 1, '2', '2022-07-12 05:34:10', '2022-07-12 05:34:10'),
(50, '11', 'ss19.jpg', 'uploads/products/ss19.jpg', 1, '2', '2022-07-12 05:34:10', '2022-07-12 05:34:10'),
(51, '11', 'ss110.jpg', 'uploads/products/ss110.jpg', 1, '2', '2022-07-12 05:34:10', '2022-07-12 05:34:10'),
(52, '11', 'ss111.jpg', 'uploads/products/ss111.jpg', 1, '2', '2022-07-12 05:34:10', '2022-07-12 05:34:10'),
(53, '12', 're11.jpg', 'uploads/products/re11.jpg', 1, '2', '2022-07-12 05:36:26', '2022-07-12 05:36:26'),
(54, '12', 're12.jpg', 'uploads/products/re12.jpg', 1, '2', '2022-07-12 05:36:26', '2022-07-12 05:36:26'),
(55, '12', 're13.jpg', 'uploads/products/re13.jpg', 1, '2', '2022-07-12 05:36:26', '2022-07-12 05:36:26'),
(56, '12', 're14.jpg', 'uploads/products/re14.jpg', 1, '2', '2022-07-12 05:36:26', '2022-07-12 05:36:26'),
(57, '12', 're15.jpg', 'uploads/products/re15.jpg', 1, '2', '2022-07-12 05:36:26', '2022-07-12 05:36:26'),
(58, '12', 're16.jpg', 'uploads/products/re16.jpg', 1, '2', '2022-07-12 05:36:26', '2022-07-12 05:36:26'),
(59, '13', 'afp42.jpeg', 'uploads/products/afp42.jpeg', 1, '2', '2022-07-13 12:24:09', '2022-07-13 12:24:09'),
(60, '13', 'afp43.jpeg', 'uploads/products/afp43.jpeg', 1, '2', '2022-07-13 12:24:09', '2022-07-13 12:24:09'),
(61, '13', 'afp44.jpeg', 'uploads/products/afp44.jpeg', 1, '2', '2022-07-13 12:24:09', '2022-07-13 12:24:09'),
(62, '14', 'afp21.jpeg', 'uploads/products/afp21.jpeg', 1, '2', '2022-07-16 01:31:42', '2022-07-16 01:31:42'),
(63, '14', 'afp22.jpeg', 'uploads/products/afp22.jpeg', 1, '2', '2022-07-16 01:31:42', '2022-07-16 01:31:42'),
(64, '14', 'afp23.jpeg', 'uploads/products/afp23.jpeg', 1, '2', '2022-07-16 01:31:42', '2022-07-16 01:31:42'),
(65, '14', 'afp24.jpeg', 'uploads/products/afp24.jpeg', 1, '2', '2022-07-16 01:31:42', '2022-07-16 01:31:42'),
(66, '15', 'afp26.jpeg', 'uploads/products/afp26.jpeg', 1, '2', '2022-07-16 01:48:56', '2022-07-16 01:48:56'),
(67, '15', 'afp27.jpeg', 'uploads/products/afp27.jpeg', 1, '2', '2022-07-16 01:48:56', '2022-07-16 01:48:56'),
(68, '15', 'afp28.jpeg', 'uploads/products/afp28.jpeg', 1, '2', '2022-07-16 01:48:56', '2022-07-16 01:48:56'),
(69, '15', 'afp29.jpeg', 'uploads/products/afp29.jpeg', 1, '2', '2022-07-16 01:48:56', '2022-07-16 01:48:56'),
(70, '16', 'banner-011.png', 'uploads/products/banner-011.png', 1, '2', '2022-07-20 02:15:24', '2022-07-20 02:15:24'),
(71, '1', 'xsaf1.jpg', 'uploads/products/xsaf1.jpg', 1, '2', '2022-07-20 03:22:53', '2022-07-20 03:22:53'),
(72, '1', 'xsaf2.jpg', 'uploads/products/xsaf2.jpg', 1, '2', '2022-07-20 03:22:53', '2022-07-20 03:22:53'),
(73, '1', 'xsaf3.jpg', 'uploads/products/xsaf3.jpg', 1, '2', '2022-07-20 03:22:53', '2022-07-20 03:22:53'),
(74, '1', 'xsaf4.jpg', 'uploads/products/xsaf4.jpg', 1, '2', '2022-07-20 03:22:53', '2022-07-20 03:22:53'),
(75, '2', 'ufi11.jpg', 'uploads/products/ufi11.jpg', 1, '2', '2022-07-20 03:30:26', '2022-07-20 03:30:26'),
(76, '2', 'ufi12.jpg', 'uploads/products/ufi12.jpg', 1, '2', '2022-07-20 03:30:26', '2022-07-20 03:30:26'),
(77, '2', 'ufi13.jpg', 'uploads/products/ufi13.jpg', 1, '2', '2022-07-20 03:30:26', '2022-07-20 03:30:26'),
(78, '2', 'ufi14.jpg', 'uploads/products/ufi14.jpg', 1, '2', '2022-07-20 03:30:26', '2022-07-20 03:30:26'),
(79, '3', 'srlal41.jpg', 'uploads/products/srlal41.jpg', 1, '2', '2022-07-20 03:46:49', '2022-07-20 03:46:49'),
(80, '3', 'srlal42.jpg', 'uploads/products/srlal42.jpg', 1, '2', '2022-07-20 03:46:49', '2022-07-20 03:46:49'),
(81, '3', 'srlal43.jpg', 'uploads/products/srlal43.jpg', 1, '2', '2022-07-20 03:46:49', '2022-07-20 03:46:49'),
(83, '4', 'afp37.jpeg', 'uploads/products/afp37.jpeg', 1, '2', '2022-07-20 03:55:20', '2022-07-20 03:55:20'),
(84, '4', 'afp38.jpeg', 'uploads/products/afp38.jpeg', 1, '2', '2022-07-20 03:55:20', '2022-07-20 03:55:20'),
(85, '4', 'afp39.jpeg', 'uploads/products/afp39.jpeg', 1, '2', '2022-07-20 03:55:20', '2022-07-20 03:55:20'),
(86, '4', 'afp310.jpeg', 'uploads/products/afp310.jpeg', 1, '2', '2022-07-20 03:55:20', '2022-07-20 03:55:20'),
(87, '5', 'cables1.jpg', 'uploads/products/cables1.jpg', 1, '2', '2022-07-20 03:59:08', '2022-07-20 03:59:08'),
(88, '5', 'cables2.jpg', 'uploads/products/cables2.jpg', 1, '2', '2022-07-20 03:59:08', '2022-07-20 03:59:08'),
(89, '6', 'ss11.jpg', 'uploads/products/ss11.jpg', 1, '2', '2022-07-20 04:10:22', '2022-07-20 04:10:22'),
(90, '6', 'ss12.jpg', 'uploads/products/ss12.jpg', 1, '2', '2022-07-20 04:10:22', '2022-07-20 04:10:22'),
(91, '6', 'ss13.jpg', 'uploads/products/ss13.jpg', 1, '2', '2022-07-20 04:10:22', '2022-07-20 04:10:22'),
(92, '6', 'ss14.jpg', 'uploads/products/ss14.jpg', 1, '2', '2022-07-20 04:10:22', '2022-07-20 04:10:22'),
(93, '7', 'WhatsApp_Image_2022-07-08_at_11_56_46_AM2.jpeg', 'uploads/products/WhatsApp_Image_2022-07-08_at_11_56_46_AM2.jpeg', 1, '2', '2022-07-26 10:54:01', '2022-07-26 10:54:01'),
(94, '7', 'WhatsApp_Image_2022-07-08_at_11_56_46_AM3.jpeg', 'uploads/products/WhatsApp_Image_2022-07-08_at_11_56_46_AM3.jpeg', 1, '2', '2022-07-26 10:54:01', '2022-07-26 10:54:01'),
(95, '8', 'theqa1.png', 'uploads/products/theqa1.png', 1, '2', '2022-07-30 10:27:35', '2022-07-30 10:27:35'),
(96, '9', 'theqa3.png', 'uploads/products/theqa3.png', 1, '2', '2022-07-30 11:05:23', '2022-07-30 11:05:23'),
(105, '16', 'phone11.png', 'uploads/products/phone11.png', 1, '2', '2022-08-05 12:06:09', '2022-08-05 12:06:09'),
(106, '16', 'phone12.png', 'uploads/products/phone12.png', 1, '2', '2022-08-05 12:06:09', '2022-08-05 12:06:09'),
(107, '17', 'contactusbanner1.jpg', 'uploads/products/contactusbanner1.jpg', 1, '2', '2022-08-05 12:09:43', '2022-08-05 12:09:43'),
(108, '17', 'contactusbanner2.jpg', 'uploads/products/contactusbanner2.jpg', 1, '2', '2022-08-05 12:09:43', '2022-08-05 12:09:43'),
(109, '21', 'iosstore-icon1.png', 'uploads/products/iosstore-icon1.png', 1, '2', '2022-08-05 12:26:06', '2022-08-05 12:26:06'),
(110, '21', 'iosstore-icon2.png', 'uploads/products/iosstore-icon2.png', 1, '2', '2022-08-05 12:26:06', '2022-08-05 12:26:06'),
(111, '23', 'abc12.png', 'uploads/products/abc12.png', 1, '2', '2022-08-05 12:56:32', '2022-08-05 12:56:32'),
(112, '23', 'abc13.png', 'uploads/products/abc13.png', 1, '2', '2022-08-05 12:56:32', '2022-08-05 12:56:32'),
(113, '27', 'abc15.png', 'uploads/products/abc15.png', 1, '2', '2022-08-05 04:00:05', '2022-08-05 04:00:05'),
(114, '27', 'abc16.png', 'uploads/products/abc16.png', 1, '2', '2022-08-05 04:00:05', '2022-08-05 04:00:05'),
(115, '29', 'abc18.png', 'uploads/products/abc18.png', 1, '2', '2022-08-05 04:01:36', '2022-08-05 04:01:36'),
(116, '29', 'abc19.png', 'uploads/products/abc19.png', 1, '2', '2022-08-05 04:01:36', '2022-08-05 04:01:36'),
(117, '32', 'bag1.png', 'uploads/products/bag1.png', 1, '2', '2022-08-05 04:02:43', '2022-08-05 04:02:43'),
(118, '32', 'bag2.png', 'uploads/products/bag2.png', 1, '2', '2022-08-05 04:02:43', '2022-08-05 04:02:43'),
(119, '37', 'audio4.png', 'uploads/products/audio4.png', 1, '2', '2022-08-05 06:19:04', '2022-08-05 06:19:04'),
(120, '37', 'audio5.png', 'uploads/products/audio5.png', 1, '2', '2022-08-05 06:19:04', '2022-08-05 06:19:04'),
(121, '43', 'BANNER-CIR-DD21.jpg', 'uploads/products/BANNER-CIR-DD21.jpg', 1, '2', '2022-08-05 06:19:58', '2022-08-05 06:19:58'),
(122, '59', 'abc111.png', 'uploads/products/abc111.png', 1, '2', '2022-08-05 06:23:02', '2022-08-05 06:23:02'),
(123, '59', 'abc112.png', 'uploads/products/abc112.png', 1, '2', '2022-08-05 06:23:02', '2022-08-05 06:23:02'),
(124, '62', 'abc114.png', 'uploads/products/abc114.png', 1, '2', '2022-08-06 09:43:43', '2022-08-06 09:43:43'),
(125, '62', 'abc115.png', 'uploads/products/abc115.png', 1, '2', '2022-08-06 09:43:43', '2022-08-06 09:43:43'),
(126, '62', 'abc116.png', 'uploads/products/abc116.png', 1, '2', '2022-08-06 09:43:43', '2022-08-06 09:43:43'),
(127, '63', 'audio7.png', 'uploads/products/audio7.png', 1, '2', '2022-08-06 09:45:46', '2022-08-06 09:45:46'),
(128, '63', 'audio8.png', 'uploads/products/audio8.png', 1, '2', '2022-08-06 09:45:46', '2022-08-06 09:45:46'),
(129, '67', 'audio10.png', 'uploads/products/audio10.png', 1, '2', '2022-08-06 09:47:56', '2022-08-06 09:47:56'),
(130, '67', 'audio11.png', 'uploads/products/audio11.png', 1, '2', '2022-08-06 09:47:56', '2022-08-06 09:47:56'),
(133, '70', 'abc119.png', 'uploads/products/abc119.png', 1, '2', '2022-08-06 10:14:03', '2022-08-06 10:14:03'),
(135, '70', 'abc126.png', 'uploads/products/abc126.png', 1, '2', '2022-08-06 10:14:03', '2022-08-06 10:14:03'),
(136, '70', 'BANNER-CIR-DD22.jpg', 'uploads/products/BANNER-CIR-DD22.jpg', 1, '2', '2022-08-06 10:15:17', '2022-08-06 10:15:17'),
(137, '80', '111.jpg', 'uploads/products/111.jpg', 1, '2', '2022-08-06 11:20:06', '2022-08-06 11:20:06'),
(138, '80', '112.jpg', 'uploads/products/112.jpg', 1, '2', '2022-08-06 11:20:06', '2022-08-06 11:20:06'),
(139, '87', '68.jpg', 'uploads/products/68.jpg', 1, '2', '2022-08-06 11:21:57', '2022-08-06 11:21:57'),
(140, '87', '69.jpg', 'uploads/products/69.jpg', 1, '2', '2022-08-06 11:21:57', '2022-08-06 11:21:57'),
(141, '92', '114.jpg', 'uploads/products/114.jpg', 1, '2', '2022-08-06 11:27:42', '2022-08-06 11:27:42'),
(142, '92', '115.jpg', 'uploads/products/115.jpg', 1, '2', '2022-08-06 11:27:42', '2022-08-06 11:27:42'),
(143, '99', '42.jpg', 'uploads/products/42.jpg', 1, '2', '2022-08-06 11:29:15', '2022-08-06 11:29:15'),
(144, '99', '43.jpg', 'uploads/products/43.jpg', 1, '2', '2022-08-06 11:29:15', '2022-08-06 11:29:15'),
(145, '100', '611.jpg', 'uploads/products/611.jpg', 1, '2', '2022-08-06 12:57:09', '2022-08-06 12:57:09'),
(146, '100', '612.jpg', 'uploads/products/612.jpg', 1, '2', '2022-08-06 12:57:09', '2022-08-06 12:57:09'),
(147, '101', 'phone3.webp', 'uploads/products/phone3.webp', 1, '2', '2022-08-08 04:37:49', '2022-08-08 04:37:49'),
(148, '101', 'phone4.webp', 'uploads/products/phone4.webp', 1, '2', '2022-08-08 04:37:49', '2022-08-08 04:37:49'),
(149, '101', 'phone5.webp', 'uploads/products/phone5.webp', 1, '2', '2022-08-08 04:37:49', '2022-08-08 04:37:49'),
(150, '104', 'phone7.webp', 'uploads/products/phone7.webp', 1, '2', '2022-08-08 04:55:56', '2022-08-08 04:55:56'),
(151, '104', 'phone8.webp', 'uploads/products/phone8.webp', 1, '2', '2022-08-08 04:55:56', '2022-08-08 04:55:56'),
(152, '104', 'phone9.webp', 'uploads/products/phone9.webp', 1, '2', '2022-08-08 04:55:56', '2022-08-08 04:55:56'),
(153, '105', 'phone11.webp', 'uploads/products/phone11.webp', 1, '2', '2022-08-08 05:24:40', '2022-08-08 05:24:40'),
(154, '105', 'phone12.webp', 'uploads/products/phone12.webp', 1, '2', '2022-08-08 05:24:40', '2022-08-08 05:24:40'),
(155, '105', 'phone13.webp', 'uploads/products/phone13.webp', 1, '2', '2022-08-08 05:24:40', '2022-08-08 05:24:40'),
(156, '108', 'phone15.webp', 'uploads/products/phone15.webp', 1, '2', '2022-08-08 05:25:18', '2022-08-08 05:25:18'),
(157, '108', 'phone16.webp', 'uploads/products/phone16.webp', 1, '2', '2022-08-08 05:25:18', '2022-08-08 05:25:18'),
(168, '117', 'xsaf7.jpg', 'uploads/products/xsaf7.jpg', 1, '2', '2022-08-11 05:32:49', '2022-08-11 05:32:49'),
(169, '112', 'xsaf8.jpg', 'uploads/products/xsaf8.jpg', 1, '2', '2022-08-11 05:38:10', '2022-08-11 05:38:10'),
(170, '120', 'bag1.webp', 'uploads/products/bag1.webp', 1, '2', '2022-08-12 03:12:16', '2022-08-12 03:12:16'),
(171, '120', 'bag2.webp', 'uploads/products/bag2.webp', 1, '2', '2022-08-12 03:12:16', '2022-08-12 03:12:16'),
(172, '121', 'logo-new2.png', 'uploads/products/logo-new2.png', 1, '2', '2022-08-12 03:14:27', '2022-08-12 03:14:27'),
(173, '122', 'bag4.webp', 'uploads/products/bag4.webp', 1, '2', '2022-08-16 04:29:17', '2022-08-16 04:29:17'),
(174, '122', 'bag5.webp', 'uploads/products/bag5.webp', 1, '2', '2022-08-16 04:29:17', '2022-08-16 04:29:17'),
(175, '123', 'charger1.png', 'uploads/products/charger1.png', 1, '2', '2022-08-16 04:32:32', '2022-08-16 04:32:32'),
(176, '123', 'charger2.png', 'uploads/products/charger2.png', 1, '2', '2022-08-16 04:32:32', '2022-08-16 04:32:32'),
(177, '124', 'audio1.webp', 'uploads/products/audio1.webp', 1, '2', '2022-08-16 04:46:45', '2022-08-16 04:46:45'),
(178, '126', 'audio12.png', 'uploads/products/audio12.png', 1, '2', '2022-08-16 05:33:58', '2022-08-16 05:33:58'),
(179, '126', 'audio12.png', 'uploads/products/audio12.png', 1, '2', '2022-08-16 05:33:58', '2022-08-16 05:33:58'),
(180, '128', 'wifi1.webp', 'uploads/products/wifi1.webp', 1, '2', '2022-08-16 05:36:57', '2022-08-16 05:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `product_relative`
--

CREATE TABLE `product_relative` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `rel_product_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_relative`
--

INSERT INTO `product_relative` (`id`, `product_id`, `rel_product_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(2, 4, 16, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(3, 31, 6, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(4, 31, 3, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(5, 31, 6, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(6, 1, 1, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(7, 1, 7, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(8, 1, 10, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(9, 28, 1, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(10, 1, 10, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(11, 30, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(12, 107, 12, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(13, 32, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(14, 33, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(15, 3, 15, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(16, 4, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(17, 34, 31, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(18, 31, 34, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(19, 31, 31, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(20, 36, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(21, 37, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(22, 35, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(23, 38, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(24, 39, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(25, 40, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(26, 41, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(27, 42, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(28, 42, 32, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(29, 43, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(30, 44, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(31, 45, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(32, 46, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(33, 47, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(34, 48, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(35, 49, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(36, 50, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(37, 51, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(38, 52, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(39, 53, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(40, 54, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(41, 55, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(43, 57, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(44, 58, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(45, 59, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(46, 60, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(47, 61, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(48, 62, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(49, 63, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(51, 65, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(52, 66, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(53, 67, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(54, 68, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(56, 70, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(57, 71, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(58, 69, 58, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(59, 73, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(60, 69, 60, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(61, 75, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(62, 69, 62, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(63, 77, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(64, 69, 64, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(65, 79, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(66, 80, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(67, 81, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(68, 82, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(69, 64, 69, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(71, 85, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(72, 86, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(73, 72, 73, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(74, 88, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(75, 89, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(76, 90, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(77, 91, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(78, 92, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(79, 84, 83, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(86, 83, 84, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(87, 83, 85, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(88, 93, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(89, 94, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(90, 95, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(95, 31, 34, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(96, 34, 31, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(97, 96, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(98, 97, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(99, 98, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(100, 99, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(101, 100, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(102, 104, 102, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(103, 102, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(104, 101, 102, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(105, 103, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(106, 104, 102, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(107, 105, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(108, 106, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(109, 100, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(110, 20, 3, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(111, 20, 10, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(112, 20, 15, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(113, 107, 12, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(114, 12, 107, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(115, 108, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(116, 109, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(117, 110, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(118, 111, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(119, 112, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(120, 113, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(121, 114, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(122, 115, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(135, 116, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(136, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(137, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(138, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(139, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(140, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(141, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(142, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(143, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(144, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(145, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(146, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(147, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(148, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(149, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(150, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(151, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(152, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(153, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(154, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(155, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(156, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(157, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(158, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(159, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(160, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(161, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(162, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(163, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(164, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(165, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(166, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(167, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(168, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(169, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(170, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(171, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(172, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(173, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(174, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(175, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(176, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(177, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(178, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(179, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(180, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(181, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(182, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(183, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(184, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(185, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(186, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(187, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(188, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(189, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(190, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(191, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(192, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(193, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(194, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(195, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(196, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(197, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(198, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(199, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(200, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(201, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(202, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(203, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(204, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(205, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(206, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(207, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(208, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(209, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(210, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(211, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(212, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(213, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(214, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(215, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(216, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(217, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(218, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(219, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(220, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(221, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(222, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(223, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(224, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(225, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(226, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(227, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(228, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(229, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(230, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(231, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(232, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(233, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(234, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(235, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(236, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(237, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(238, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(239, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(240, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(241, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(242, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(243, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(244, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(245, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(246, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(247, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(248, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(249, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(250, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(251, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(252, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(253, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(254, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(255, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(256, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(257, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(258, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(259, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(260, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(261, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(262, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(263, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(264, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(265, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(266, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(267, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(268, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(269, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(270, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(271, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(272, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(273, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(274, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(275, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(276, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(277, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(278, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(279, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(280, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(281, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(282, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(283, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(284, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(285, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(286, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(287, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(288, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(289, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(290, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(291, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(292, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(293, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(294, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(295, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(296, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(297, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(298, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(299, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(300, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(301, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(302, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(303, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(304, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(305, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(306, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(307, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(308, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(309, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(310, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(311, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(312, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(313, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(314, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(315, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(316, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(317, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(318, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(319, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(320, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(321, 117, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(343, 72, 73, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(344, 73, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(345, 4, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(346, 4, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(347, 4, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(348, 10, 3, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(349, 10, 15, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(350, 10, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(351, 72, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(352, 61, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(353, 15, 10, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(354, 15, 3, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(355, 15, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(356, 73, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(357, 73, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(361, 84, 85, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(362, 85, 83, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(363, 85, 84, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(364, 69, 58, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(365, 69, 60, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(366, 69, 62, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(367, 69, 64, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(369, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(370, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(371, 118, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(372, 118, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(373, 118, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(374, 118, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(376, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(378, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(380, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(382, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(383, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(384, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(386, 118, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(387, 118, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(388, 118, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(389, 118, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(390, 119, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(391, 95, 62, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(392, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(393, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(394, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(395, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(396, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(397, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(398, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(399, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(400, 120, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(401, 121, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(402, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(403, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(404, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(405, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(406, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(407, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(408, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(409, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(410, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(411, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(412, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(413, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(414, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(415, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(416, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(417, 3, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(418, 58, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18'),
(419, 122, 0, 1, '2022-06-28 07:19:18', '2022-06-28 07:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `product_type_id`, `product_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2022-06-25 11:01:23', '2022-06-25 11:01:23'),
(2, 1, 2, 1, '2022-06-25 11:01:33', '2022-06-25 11:01:33'),
(3, 2, 3, 1, '2022-06-25 11:01:44', '2022-06-25 11:01:44'),
(4, 2, 4, 1, '2022-06-25 11:01:56', '2022-06-25 11:01:56'),
(5, 1, 5, 1, '2022-06-27 07:01:53', '2022-06-27 07:01:53'),
(6, 1, 6, 1, '2022-06-27 07:02:05', '2022-06-27 07:02:05'),
(7, 1, 7, 1, '2022-06-27 07:02:19', '2022-06-27 07:02:19'),
(8, 1, 8, 1, '2022-06-27 07:02:30', '2022-06-27 07:02:30'),
(9, 1, 9, 1, '2022-06-27 07:02:44', '2022-06-27 07:02:44'),
(10, 1, 10, 1, '2022-06-27 07:02:53', '2022-06-27 07:02:53'),
(11, 1, 11, 1, '2022-06-27 07:03:15', '2022-06-27 07:03:15'),
(12, 1, 12, 1, '2022-06-27 07:03:08', '2022-06-27 07:03:08'),
(13, 1, 13, 1, '2022-06-27 07:03:26', '2022-06-27 07:03:26'),
(14, 1, 14, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1, 31, 1, '2022-07-05 09:20:30', '2022-07-05 09:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_unit`
--

CREATE TABLE `product_unit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(255) DEFAULT NULL,
  `abbrivation` varchar(10) DEFAULT NULL,
  `max_cost` decimal(10,2) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1' COMMENT '0:Disabled, 1:Enabled'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_unit`
--

INSERT INTO `product_unit` (`unit_id`, `unit_name`, `abbrivation`, `max_cost`, `status`) VALUES
(1, 'Kilogram', 'Kg', '1000.00', '1'),
(2, 'Gram', 'Gm', '1000.00', '1'),
(3, 'Liter', 'Ltr', '1000.00', '1'),
(4, 'Piece', 'Pcs', '1.00', '1'),
(5, 'Dozen', 'Dzn', '12.00', '1'),
(6, 'Milli liter', 'Ml', '1000.00', '1'),
(7, 'Bunch', 'Bunch', '1.00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(5) NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ratings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('62c0c5f041de04b45ba33312a987cf74', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656416975, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"1\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('19d0298e2bdea16f923c350ea69b47ea', '202.179.95.82', 'PostmanRuntime/7.29.0', 1656417285, ''),
('84c29dca999b393cf2d9d26b00c28509', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656418826, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('d9723f6eba5c3b80584760a456bcc78b', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656418781, ''),
('79185b7b964bb2a9d65151091e510979', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656418996, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('618923102a2e91f8877e587591314c4e', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656419054, ''),
('c1c8c7469477d16085ead614b9a1ed4a', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/', 1656419258, ''),
('05405ab1f59a7d8c39959381a36661e1', '202.179.95.82', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1656469938, ''),
('b20ef3dd1456701bda3c38b42458b064', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/', 1656419210, ''),
('24030e76b3df405c5149a57622230aa1', '202.179.95.82', 'PostmanRuntime/7.29.0', 1656485663, ''),
('b09d8c38e2d14ecd347035cc05fb04ea', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656509821, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('abbd42ee532ece8199581bb033fa156d', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656510756, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('eda0c85c274d8a24c217dcaa46d584d4', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656601170, ''),
('38350113eb825fb32e4b08203c294a32', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656586771, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('f2dfaf05d61b629a9b352e1028447d84', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656598434, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('d6b565bfbff173597e937ba906432cea', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656598818, ''),
('cc5599ae743d8eafda39daa9346a8b60', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656599194, ''),
('b79dcc56d981aee252a5aeab86b3def3', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656599344, ''),
('fabceca37814178a42e807dc8de4907b', '37.210.155.63', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1656608714, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('8c297f71edab794808e5dfb4388ca13e', '2409:4040:d06:ee46:240a:5344:648d:6af9', 'WhatsApp/2.22.10.73 A', 1656601039, ''),
('244a532dcdec021c9f8507f6a35743fa', '2409:4040:d06:ee46:240a:5344:648d:6af9', 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Saf', 1656601016, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('e520affe1c291fdeacce615ecda1f8b3', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656657047, ''),
('3b90b9b4b0a785399e2ba0e204825a58', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656657496, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('ab1a6a6b20affdf7c6094b147b60ca45', '37.210.155.63', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656663526, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('bdd319c43ac5f65fdcbf8a98bb685807', '49.248.21.18', 'Mozilla/5.0 (Linux; Android 11; M2007J20CI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1656663768, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('f617bff2ecdd97e0c8fe054d619726cc', '49.248.21.18', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656663795, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('23a07b9f1f95f0a4253e899eaad7ac59', '2409:4040:d06:ee46:7003:b4df:c513:5b06', 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Saf', 1656663996, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('d64ae1bec1fa1a5acab0b97e7081e01f', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656666687, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('22265dceb572a04f0bcba40b223e56fb', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656767039, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('9205d97c1cb4f02eead2a2d96443f83a', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656668765, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('bc6a53136d33d6f100f739496e3bfce0', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656669342, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('5372b937e8ed37e3591ed7059b22db4e', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656673390, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('1a1647bc1592f60b31e50a25ebf64be8', '49.248.21.18', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Sa', 1656676547, ''),
('8414dbb90b7da93166cc4d771a96d649', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656676611, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('cd656b74665e00dd7e2fe70abe45e3df', '49.248.21.18', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Sa', 1656678768, ''),
('1f9717ee19c005ee7eae897b8dc14cb0', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656678780, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('68da35cebc12f30ff68ab2cefe491f06', '49.248.21.18', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Sa', 1656679286, ''),
('59c8bcc7351bfe68d1d63c08c2bcd195', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656683056, ''),
('371cab673706e0e43c1006aef101a068', '103.58.155.224', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656691362, ''),
('92183af4086c5edbaebf66e8cf667890', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656736721, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('eab0a262d5b164dacf5ca66b4e42390d', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656736791, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('2954fa404f51bfbfc2a65f4608b50530', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656740447, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('4fdb17c48630e350052964dfbe6286d6', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656745553, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('64ceb63155f293515bf0d646a3ca5998', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656908001, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('836511c8bcbe455f4f9299e1f610f7a9', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657709858, 'a:7:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('3779b7410c8db743df78ec402aeb3559', '49.44.122.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1656758632, ''),
('1e9f1cdc0989a44835625b0c76ebcb0a', '203.109.91.133', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1656758632, ''),
('5be7717ef6a2fa64a15ff42540e5b882', '106.51.113.228', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1656758641, ''),
('86ffb6ee4be0f8735b0af1bde276b4bf', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656917153, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('5cdfad28f96d9a03ec2d3fdac5e91845', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656917305, ''),
('9fec115339fae76ab0e79e93787e9ced', '202.179.95.82', 'PostmanRuntime/7.29.0', 1656917385, ''),
('3e945ff5aaa6b450b7a00a71c76b60e5', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656919808, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('697771cdc68b2c7361b79fb354da18b0', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656924368, 'a:8:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;s:16:\"flash:old:status\";s:1:\"1\";s:13:\"flash:old:msg\";s:43:\"Sub category has been updated successfully.\";}'),
('5d8341bbeb06419738a844c4c6f9c353', '2409:4040:d06:ee46:d06a:f4d:2c92:f25', 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Saf', 1656926410, ''),
('a231d22d157b34f73591ec567dc57052', '1.38.216.171', 'Dart/2.17 (dart:io)', 1656935692, ''),
('f38a478f416c46b150811626a99bb23c', '1.38.216.171', 'Dart/2.17 (dart:io)', 1656935694, ''),
('2fe71f61093af2e03942db893453795a', '1.38.216.171', 'Dart/2.17 (dart:io)', 1656935864, ''),
('74afe42cfe911fb48322db4003d80251', '1.38.216.171', 'Dart/2.17 (dart:io)', 1656939741, ''),
('b5f75a41302b680c60b0e4452f04d3b1', '1.38.216.171', 'Dart/2.17 (dart:io)', 1656941617, ''),
('3bb157e22bcdcf2a1bb36777ca987e70', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1656994842, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('e6ab51f5a2e9d4a6a56ba6719bfedd4d', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657001165, ''),
('c1b21ccf1426dc3ba89e5ffb1ca36e47', '202.179.95.82', 'PostmanRuntime/7.29.0', 1657001270, ''),
('eee46058d55ce72d5996ff3e1f9e7029', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657001664, ''),
('f0187e66d82267028ccf6bbe25a969c6', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657001664, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('45790c9cd2ef8a278168f5f156d0348f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657001760, ''),
('c88df2b335b18b08f8c95c5103374b2b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657001799, ''),
('4cad95d1a3724e2dc5c13e16e2cf356b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657002099, ''),
('56bb407151a45f0681583767116ebf67', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657002258, ''),
('6a3f8ed957c11320f463127cc283ff7a', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657002261, ''),
('c875a920d8b095508d43c27155cf3f35', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657002428, ''),
('1b82873e8557737e2aad49aa2df70d58', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657002474, ''),
('1cb8826c534921471f31b93072039712', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657002702, ''),
('eaf3da91bd5b72b6054f08ce1ebdcd38', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657002748, ''),
('6b990164d599c5a9d57c1d612e4c3c2c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657002807, ''),
('4d720dd47e4b6f1ff714eab13b386bf2', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657002863, ''),
('7387f3cfeb353dc09d06378db052fc85', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657003081, ''),
('a22393c9125bc16a661f1660038d6828', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657003450, ''),
('81bd2bdb1763a8dfc9905990973fb9e2', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657003744, ''),
('1e111ecb717d1cf30bf4cc721beefe40', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657003820, ''),
('76d55c0d7a43173e936d1bd27d859247', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657003820, ''),
('8647e1d8766b74a0e000274c77c18a19', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657004420, ''),
('19cde084d21dab1d06f235d4067bc6ee', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657004420, ''),
('7c98976b241cd95aa651539a07c390a2', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657004701, ''),
('fb50a0f42745a7f8324aa0bc81e73d50', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657004701, ''),
('a80158c2792f9bd16081a7a641c19346', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657004835, ''),
('445081f470c29ebe3ea272a499dc6966', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657004835, ''),
('f6c2afc7d28f8f638924b53d976f089c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657005460, ''),
('975b5a40b6c12dddc6b25b2ff196d40f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657005460, ''),
('37b205dcd32618dab0a0bf562970e8e8', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657005626, ''),
('ac5a04735a39ac8c77f0c2ce43e5a41f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657005626, ''),
('b6449341cc96d7195c1891b70fb704aa', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657005665, ''),
('fba5951f5cbf2693f2ec2d44c9301092', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657005789, ''),
('1843f125c68fcab72ec934d4cdc6eb25', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657005873, ''),
('8ef2ded9c5abb61bfd0584f3000db7a8', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657007776, ''),
('377382a29ebd93f4ea2640649c47348c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657007887, ''),
('53fa88737854df8c931f46423d8da183', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657007934, ''),
('3aceab569284cd01e4651d844c01a41e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657008058, ''),
('b776efb64cb6f18e88ef5cf5f61fbb85', '37.210.152.144', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0) Gecko/20100101 Firefox/102.0', 1657008297, ''),
('bb1746c1855be3b6adc070652560dae7', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657010711, ''),
('43d24d7a5c761d2e3ba654bd8e42b480', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657010744, ''),
('8335335b862c71bbd486a97e44b599fe', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657010961, ''),
('d35ca66f579b1a868114feca770cf85a', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657011062, ''),
('3df9d5d3f5ae26f4d09e48dad1a51287', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657011801, ''),
('c30a0181e101e767c4b5e5a871d7bff1', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657011958, ''),
('ae8ccd27cfc1fda77e870e5cd1457ae6', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657012267, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('2888092bfe48c5dba6eaef95b13a6944', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657012286, ''),
('5ee99294bc33e2fc0aa16c134e989082', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657012851, ''),
('bd84ce07bdb8d3ae365fc483f2b78149', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657012645, ''),
('d9cddbf8edf61734c637a58587fdf884', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657012720, ''),
('9bf4b34e144e9ee89197e810635283ea', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657012912, ''),
('61078af77b0ee56420776fbdef24ef0c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657013937, ''),
('be50060fdd82d74e4bd7dd225b9d428b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657014437, ''),
('49d67f6a14bc0da54dfb0a4ab8fa7933', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657014559, ''),
('9fa9b4ee5306b98ec4f6435c203ff87a', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657014559, ''),
('a129544a4ec62885596b5a1b13ddfc23', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657014595, ''),
('11290ef42cef85667bd2c147233b536a', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657014595, ''),
('6bc334e3aba9c1e9fcbbcb3fa3c8be6d', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657019399, ''),
('b4cd1ae1e3a8f647ff40676ed03dd5f9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657019399, ''),
('9c33f2dcfecfeba90f4371ecfc045f58', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657022767, ''),
('94b8bb98e7262f08ee3140b519abd246', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657022767, ''),
('978be8cda6feb2796731eb8f7f0fff36', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657023436, ''),
('3ac0c55dd58ba8d1bf6b3a69a12d1bea', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657023531, ''),
('c0105fa133705bd50c341218a5674c8b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657023559, ''),
('8ce7a3791ccadaadebe86eeea4747968', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657023615, ''),
('f7429494bb5d64236cf694e94b28ea11', '202.179.95.82', 'PostmanRuntime/7.29.0', 1657026551, ''),
('352bf999f53b1c049c7da20cf365db11', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085255, ''),
('bd587a61546d38476162e57c438585db', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085369, ''),
('21b18ece34ca83a00913c5451630c8e5', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085379, ''),
('868492168733d5d6f3a411322c348ba5', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085394, ''),
('59b199360ac2410469aa13b8252ddfdc', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085471, ''),
('f7dff0966955ddcb9ae1c56f5b73e104', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085561, ''),
('3468c8c543a2b7329c98754ba7570439', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085566, ''),
('bc6ffc4751f9c4dee7bf8b4088203398', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085618, ''),
('2057eaa0f5457e6b34676af534fd82a2', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085625, ''),
('6797e456ca3595d1e11782f38c47bc20', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085798, ''),
('d6df2c9a2fe5d9dff77d10ad0bdf42bd', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085802, ''),
('584495540e38f025f736561f7a59f478', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085860, ''),
('4207c5c76f5a448b03b7a846a11a4b10', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085908, ''),
('5866907ef3fc5993f6dd80708c01128f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085915, ''),
('65810dbb55e8430fade00eafd394f494', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657085925, ''),
('81c33f1aba95f2337dd2bb7928501e84', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086527, ''),
('b48b2cf78a1ca9e4c9e39a0fb7b1d1d3', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086539, ''),
('e395429a2b67740fa4e7be3e5321efc8', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086623, ''),
('891d888f08c3db847d4bb59dd9ec03d9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086631, ''),
('014d67e635c0845b22ee468dc5f47685', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086667, ''),
('acd00eef57e9bc22c788ab7436627a49', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086671, ''),
('0b2a2c403ca730bfface965705f85ba7', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086727, ''),
('8fba561b3a5333d3b5272ac6dac86d5b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086731, ''),
('2a471bd411d829a8f0b8daffba6de1b1', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086733, ''),
('12317486231c48645122da438e43c062', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086733, ''),
('1a6c0c7dca286e40b2c78cff54dfada6', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086746, ''),
('170bfbc43991fea4d666ac6b8f47b14e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086746, ''),
('179c3b64368cf09a9e65bf6ce4492435', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086750, ''),
('4db165b7f225d5215281b85c22b97d70', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657086751, ''),
('ac1d8c9f706575d4af9cb4d972cbc8c4', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087176, ''),
('8a7b165ae0ed86b39294819d97baafcb', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087180, ''),
('4fe913f3d8a5c5ba26bfaa9c074e8908', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087182, ''),
('13f5804653bdb3049018ecbc38f343d8', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087182, ''),
('93eceaf169f4e65483e4d6197ca00b2c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087184, ''),
('690849a781e7664ea7eb1cf485fa03d6', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087184, ''),
('b62617d1f260c33fcf5f389ce144130d', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087185, ''),
('8915b624e6483eb3da05712159f6f18f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087185, ''),
('d84c53b88577ea363992b8e7c2aab90f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087187, ''),
('5d07e6d27469eeb9a75dedc962470367', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087187, ''),
('77ccf7fef30d1e1f15c2c65faa0f3a5b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087188, ''),
('75d3755b0f749b83fad971d746519914', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087188, ''),
('43d255f80a8fbe75e1ed8a292a5a174f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087189, ''),
('a96baa66611932f0a585c484cba9c8d9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087189, ''),
('8db3274dfc21048f19f05f32aecc30d6', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087191, ''),
('fb15b0880a18f0c48dac30044e5b37d1', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087191, ''),
('460935a4d47084e3dc9a0092bdb2812c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087260, ''),
('ae28ac301ddd04b891b111fa806433e3', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087260, ''),
('13542cdf3e7e7d7961dfa2d684ce9e92', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087261, ''),
('250a0c1b79970b6bb58e970a498d7e1e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087261, ''),
('eeab1178e897272968bcfb6782628697', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087505, ''),
('d19d225d913b67aef035b73560f41453', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087613, ''),
('7cfb33aadfd08b11e686cb63bd47e817', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087629, ''),
('b2943ba5f76ae965daf4d38992cfb381', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087629, ''),
('709c793b5968440b972ad2b2371dbe46', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087688, ''),
('dbd0b0523fe6a09be69f896887182c8b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087691, ''),
('47d20fbba986c1437c70fcdd5243213a', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087691, ''),
('c581cf4704a3221831630b20c3627042', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087692, ''),
('f74d22acc99050c3504b69f330682b7b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087693, ''),
('750beebd44600141622dc670442499a5', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087695, ''),
('32cf21f7feebcd6b51e044ba1077b310', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087695, ''),
('cd86a4a5b45b1d4bf73be094655260ea', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087696, ''),
('ca6524db41d6956633ffd28454428155', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087697, ''),
('25cf16de36fb8c6939fab19de12178d9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087697, ''),
('14526b7ed2c07a74eb60005fa9239a18', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657087697, ''),
('9f959f3b43a220cd211a2d5d8c4583f5', '202.179.95.82', 'PostmanRuntime/7.29.0', 1657088889, ''),
('95818001df1720a54502c42d3bb2a042', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657089459, ''),
('13c58ffa38634e1c113c28776589639d', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657089468, ''),
('5fbc99c8c496a56297ba13ef718593e9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657089550, ''),
('2dbdaaf46bb6a8f534a6df04c5685646', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657089550, ''),
('905967879a892d2c68f40d7eed0534f3', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657089601, ''),
('58e9abd1870c52d08456d5f1f0045f31', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657089731, ''),
('56f8ac29bccd71b64c72932aaac09eee', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657089822, ''),
('bc3d96c17b1f4330ce59e51422dfcbb8', '37.210.152.144', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:102.0) Gecko/20100101 Firefox/102.0', 1657090695, ''),
('8e7cda74cd6f21c393daff547b122e65', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657091152, ''),
('ca8840b0b3208e9487276ab501f94a12', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657091152, ''),
('96a7e885510f8a1641f474d23ce70c50', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657098601, ''),
('19385b208d56f01ed6b8086af03a0113', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657098601, ''),
('91eed13f549e9eac4b3aa2bcb64a039f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657098601, ''),
('4d0b778120f5322d2a574113fed8a72e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657098715, ''),
('c84350241616456a16d2c7b57741f9e6', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657098715, ''),
('e101f924da9b24a46f7359da47815bab', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657098715, ''),
('da6f35564c79bc1842e64ceb09ecd2f8', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657099233, ''),
('c70a78b6595789f35b20ed026c9d7631', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657100072, ''),
('1d79c1b1b3ea51a52b4be6238c09e6e1', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657100072, ''),
('19d241477683c8cc91128fd2d59dc352', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657100072, ''),
('9c2921f4048567f4b99b35a589da8d85', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657101816, ''),
('e93e031ead9b4fc03e1703ab2cadba6d', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657102060, ''),
('ef940725516644654d9953e2469c9a86', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103003, ''),
('1e64081f21aa3cb71445d08f78cc3b25', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103003, ''),
('55860c642cd48d63705be08e810bce48', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103003, ''),
('0419bf8d8f4ddecf064c784310533a37', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103022, ''),
('afecfb01e61d82903f043b669b7ff4ef', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103023, ''),
('3d90846075db65114c70f78413788a3f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103081, ''),
('213cb88c289e5f01dcb5d6d4b74f4741', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103081, ''),
('8bb2935ff56671126129f61b4d681a3b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103084, ''),
('7417ea2d2dae64068249ede696edb413', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103084, ''),
('4c6a8cbbf4a941d3d7d089755e8fde36', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103096, ''),
('e65ed5b366cf19718b7aa17394d74ef0', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103097, ''),
('54640f65392d8bc52109cc1e40da83e4', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103106, ''),
('e3af956928a3ba95fcf47fa976a805f3', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103124, ''),
('2109090008cd428a6f9cdc324dc450b8', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103125, ''),
('fe2e06104bb0b1ec5019751d6ee2bdf1', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103255, ''),
('c7dde32f919c4e2be7a7ec0b61c493c6', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103255, ''),
('0b3dce8c5e54bfaed8166446d856df42', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103271, ''),
('670db2b97844e8ad2489211bcb40aa50', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103271, ''),
('a2d8cdbb3667b5afd1d10dde934e0e3b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657103295, ''),
('ca1584ee5dcb08e9705d25f0eb9c2556', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107323, ''),
('a9d2bef7afdf78b49c2bef8637301760', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107323, ''),
('6ea23589deaf67eb16378babd694d656', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107323, ''),
('1d2ec9ab41beeb0576e0d6716705d30e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107699, ''),
('20b7b594d8d26d3a02e3675ebec2c984', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107699, ''),
('237850fb2e4db6ea8d09951e33b6764a', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107699, ''),
('81ec295198826c9a203f14f745542beb', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107769, ''),
('5ed26ec1f4543df04cb041604bab8658', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107769, ''),
('d27dc4d4fcb50f65e7b3cff6bfe8afab', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107779, ''),
('2ed91d5c5f8009ffc43b474487db200d', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107785, ''),
('0c9afc55a143382115389901b78731e1', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107785, ''),
('e57dafba498c41f104076eee5b5dd75e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107793, ''),
('a1e06ba34d846ce1df8ccb45def79f0c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107793, ''),
('415c1c0e9048e7e66571bb3ee7e446ed', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107803, ''),
('dc2f2e5cc2fb043bd564456ebe0dec12', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107812, ''),
('f8d87b914a0c566e748df9e6455315f9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107812, ''),
('66e8eb38b9f132832186c1c7dac4b464', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107814, ''),
('78d6f71cef4cdda40f756565f03805ee', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107814, ''),
('39e0111366cf4749f96e05f1275c597a', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107815, ''),
('a1f0d03b6e3f3009440dae7c2240275c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657107815, ''),
('51817b7612a12b9ae68f846cff4c5880', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109099, ''),
('6ebf478edc0c6c2879b52f3855b315cb', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109099, ''),
('3b0dadf2444116a1a21322395c02c2a9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109099, ''),
('55185730dd3a3fb6521fa6eacd1bd596', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109681, ''),
('cda692d514382b1183cc9cc6f4582c8f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109795, ''),
('a121830abff9a281ffb6fe7e37c2ec57', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109798, ''),
('d69037760a62ca59485a81e8868ad731', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109799, ''),
('7035131bf0a4586429c128192c43bacb', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109799, ''),
('07f63b868747f02562e9ec6aa31b1826', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109800, ''),
('75fffc4ec8adc30776e15301787cc6b4', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109801, ''),
('64af390c7d4bedd80c09d011456f9372', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109802, ''),
('1583779c97aebd20612e8684d7f9fee8', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109802, ''),
('1ebe3b4a3adb60b52c83b8943a867056', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109802, ''),
('16d4311d453b0444f6238120df9e053c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109803, ''),
('2e7b591aa0ef3618ae8d648e5debca86', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109803, ''),
('ec41b0da9bd4bb5e23d30dfd956a2be5', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109804, ''),
('d2d200a85988e94fb0601f1b5acc65c5', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109805, ''),
('825c6aac10c24998cc7488c5f5a0914e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109806, ''),
('7d2ade4eb2d933c04ba4a6fbe4e2460f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109806, ''),
('547dfe28a6538a640726e68f8b2ffd01', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109810, ''),
('6dde7f44c9e6e66ddf5d7ce92c003b12', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109810, ''),
('d78f6103e8094425c446e4f7a4a49029', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109816, ''),
('9feb117347cbed02f6946e035c3c801c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109816, ''),
('a23d8f0df98f266b68f1660f02b7085f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109817, ''),
('33b16b5d497b68d4f96154fd4cc847c4', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109818, ''),
('170ed368b28a0f44b5dba8a923afcfcb', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109819, ''),
('be5eaa796c87c7fd290a1583507df158', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109819, ''),
('0c5bf017562d790db8fde7f50d91c0a5', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109823, ''),
('cbcca14b06f215db23351a5b39a497cf', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109823, ''),
('ae13f50e8523fc51a2ee94b38d762cfd', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109824, ''),
('214979f10a50aeccd0e64b515fd2030b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109825, ''),
('7a351c064ce281050b18ee248a9e8e41', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109826, ''),
('da6f444902b3b7220083cdb30022f355', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109826, ''),
('14e225419435154af4183add8bc1098e', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657109898, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('6e2c5d116bb0ffa0c58cf9e1dffae975', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657116162, ''),
('b8d1bcb4c8b69744192e3be945c2cdbb', '202.179.95.82', 'PostmanRuntime/7.29.0', 1657163725, ''),
('31945163ee2e1951fa72e9861658523b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657165929, ''),
('d6881160fe4147c05033113d25c7bd1d', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657165929, ''),
('b4b1e1b08a28d8c77fce02149106328d', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657165933, ''),
('5834ab84b08adf1cd625252794124120', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657166003, ''),
('cf75f38b6068c36a5ef95fd2de4f37c3', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657166003, ''),
('dc0320c6b4866e1a9d16d1ed98143a66', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657109972, ''),
('fdb277d9b3ff4a4fe4577c7c959ee8c3', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657166003, ''),
('eb29ed7162609a4f97af1e2f424cc499', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657167425, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('f16557cbdcc11d9baccef603ab939fe8', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657169038, ''),
('ecf7676e01bd9de069afa9f3c87caefd', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657169061, ''),
('4a4ba14c039bfdd336bea40d0566d6db', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657169061, ''),
('a0755d4bf1592ceaa08cab659079e834', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657169061, ''),
('207ca554d3057d59d96f8a79950cbf2b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657169073, ''),
('428fbcac235955a97287e1f000107bad', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657169097, ''),
('846dac9f35ff9e83f87780fdb5180a36', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657169097, ''),
('dbb6ae4a537a0671d07e9f5257a1bd5f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657169143, ''),
('e9fe06e9fef31413073037441dfc4fce', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657168969, ''),
('620ba4b4e23b493d4f4c685b5da6de17', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657168969, ''),
('7bffa0451f6e5c21a31a231c4279c62b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657168970, ''),
('5c82d936af3eceda3baecf3fe2f48c96', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657169144, ''),
('14f8c61d0d4ae2a83c455cd7834f276a', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657169152, ''),
('752e28f17c963b8f438bf9626674e6bf', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657169293, ''),
('5524788d1fba64579723ecff7e35e218', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657173404, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('7189a25951fad5ca2ed5290b27388a66', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657254753, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('b1f4a3ddbbc396e4ae0cd51869d7d2a9', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657260675, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('e2aa502ed967126fe7e5599f079c6d2b', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657515808, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('4a19c80db10f0de280a937ef32039f89', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657521241, 'a:8:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;s:15:\"flash:old:class\";s:7:\"success\";s:13:\"flash:old:msg\";s:39:\"Category has been updated successfully.\";}'),
('42eb3f979021a015a5820d175cf5a239', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657522375, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('4244cca9f90c9e510e74afdd2dee80e7', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657522594, ''),
('52358e2d82e583acd23c745ea885ad94', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657522594, ''),
('9ac13f0d1bb494d31093d5beddb6cc5b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657522594, ''),
('8f10a978d90e60963ef8a453973eb6de', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657522863, ''),
('3fcd265cbcc7e12a6bfa92510c742366', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657522863, ''),
('1f7a49191e2fa257d0ab581193289b84', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657522863, ''),
('bdbc0fbc531e0c64d28c4edae322efac', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657523404, ''),
('c9a6e3dda2e51ea41eeba823371346d3', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657523404, ''),
('d8e02140cf2e3eb9ee577ba264aa530b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657523404, ''),
('605d91887e38e5e588871d2cab54fb7c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657526774, ''),
('0b5a492be47f91f03156c2e7d6571356', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657526774, ''),
('f3d1a828998472fb68a7ee8983dfc52a', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657526774, ''),
('636c34acec29f43876b15b5e893ce894', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529268, ''),
('7715f238ac0dc8add5d447c208888f28', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529268, ''),
('e949be9a318cb5551bdacb8f0917f74d', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529268, ''),
('607461c4675e83e03fb9872eb02a0643', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529560, ''),
('9c72d7d1ddf29eadde752aa991e294d1', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529560, ''),
('39da94871b4d6ac68ab400e23cfc8dcb', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529560, ''),
('077e2f9f7c2860ff163fcf58a3d5e19c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529684, ''),
('6bf5db4f53eaa9cab05f06c5afec04a2', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529684, ''),
('e44bafc2747b50cda0b879443b74a59c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529684, ''),
('d559b938b0643354c4fcc9d88ab87f87', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529785, ''),
('2e7f78e39e812fc62d37bea5ddb4d094', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529785, ''),
('01ae5e4b877a8ae4bcc8fcf856b59e0e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529785, ''),
('415505140749ccb5e7f08a3e5fd29519', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529890, ''),
('db5aee7cf384111729e6b71548984d6a', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529890, ''),
('5679d80b7c9a10f16429809fce977611', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657529890, ''),
('82bac39e23921103f2b8115a5841a49f', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657530073, ''),
('3e134fdda67893550dc1a9837fb89dd0', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657530288, ''),
('f89bf48dcd074a870f0d9e186ccc1277', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657530288, ''),
('c1b12e492cc1baa48b76f8fd6d11e169', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657530288, ''),
('23ff6de60a91f450946589dd047bdca9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657530722, ''),
('5cc0d964a29dff735c2459593edabf14', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531063, ''),
('1ffe06703fce0911ee38b4d28bbf88b8', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531065, ''),
('4bf07cf051c6003a32d231f1a7aa7a78', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531065, ''),
('90012d438fcaee46bb754f48c2ca4c70', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531065, ''),
('2cd32afe764d929236ee5374e355b8f3', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531065, ''),
('bc202197eec2fa99dddf1ea793d8eaba', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531067, ''),
('ef49c0ccf41a6888439873afb68d1f16', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531067, ''),
('8432f7b2941122d3bfec9060e583c416', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531068, ''),
('ab5fdbef2597838516f7aaf4ebafa17b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531068, ''),
('3c3e1c2bff7c62d373b42ee38af148f7', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531069, ''),
('60c977ed6e4e552b16e498fddbe8b6b9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531069, ''),
('021fc2147048da721254dcd331b0b1c1', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531070, ''),
('4defc6ec63f1aa4e041c2fcf4b61d4d2', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531070, ''),
('34c626bd10bafc43d32ad02cff282463', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531073, ''),
('db2833a69cfe7f549952ae72c31e54aa', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531074, ''),
('54673cc1e785d24ca90d0b78172076ca', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531336, ''),
('40508f509ddd6aa523a320aeb65c0da9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531344, ''),
('d315f154ebf222a3e2c85dcfce0bae75', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531547, ''),
('b65f5e6d4fbcaad37061b61ab024d17c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531547, ''),
('37d3e0cc5d389faf54f61ab71270c1ab', '202.179.95.82', 'PostmanRuntime/7.29.0', 1657531580, ''),
('749e2a39398db5d9e2da2156a87c5970', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531870, ''),
('f37b2213a89151af63946afa4097b5bc', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531870, ''),
('752a35abb0352b97b38c4a5adf3567a9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531882, ''),
('5782295a1eeec789328fe7d0479bbf68', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657531882, ''),
('0547e79733d8ab7df047d29fa0079f6a', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657533868, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('0e666177c425230e7e5b45fcccd6b5fa', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657535338, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('d007ea8bc5e3250334e447d90e6b002a', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657536742, ''),
('5916c907a6965d7346723e1aa0cace57', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657536742, ''),
('62edac5ffc20c308b6fe08b54ca5292e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657536446, ''),
('2244969e21967ab7b32da224533ec212', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657535966, ''),
('3e2773d898ec05585f6e684c2b86afa2', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657535967, ''),
('58b6a3924ec479c2cb6cb590444e561e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657536746, ''),
('4fcc72905075b87d5ec5a13379a26fbf', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657537208, '');
INSERT INTO `sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('d70d037f58e565ee5ca906b699e49df4', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657537208, ''),
('fdb7e7948ee2c017ad11756e1704a0d0', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657537816, ''),
('b4eaf821b7120a21b048957c842b8255', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657537210, ''),
('028b04a0572ede2fd56e40a5fb5ea4a8', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657545017, ''),
('45312ead856b89279c96eb63e6d76e86', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657545017, ''),
('aa4968a7b4192eaacc7ebf8f0cbb712e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657545157, ''),
('9a8664d1cec1edc2a44d44c182ef1bb2', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657608871, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('1fbb615eed16b576b9c69c9cbae8a671', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657609532, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('6c3bd5e8d17c519c8b733647c3234775', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657537816, ''),
('ca39fd260ed133a61a11769c00389c0e', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657538058, ''),
('729fb6136c10a9d8e4982d920822f497', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657539230, ''),
('b2c302b3f345bcee9efe548160b085fd', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657539985, ''),
('3f0f407814a46414c109d152a77be882', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657539985, ''),
('fdcfad1d15cab313f5309b2712b2ef8b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540046, ''),
('9e8c5824c6cd43fb68ca57aa34346e16', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540049, ''),
('801add6119b690475612c30bfe861d9d', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540060, ''),
('7c9f60053f54d3e7e58230c88365cf06', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540060, ''),
('1d35147dab3e47f58df2ddf3c303ed6c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540984, ''),
('d0ed6057b4e2c28e6bf53298eed45d05', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540646, ''),
('b8822d7da659900f57332b2dd4f2e123', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540646, ''),
('a2edad56028666c0956f8d69e3a058d3', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540648, ''),
('6aeba434a99b91a605733db56bd45758', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540651, ''),
('cee8aca1dee82cc2f760c047ea4e1a0c', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540652, ''),
('f136e7dcf648dabb9832a905dfc5e1e4', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540686, ''),
('da85bd5668d5ceb4a1ca416faf884265', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540686, ''),
('f1b0e615c8b7174adce96c55ea7c712b', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540690, ''),
('4860361564cce86fcc162066383a4d5d', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657540690, ''),
('93a860da3e2f488f13ea9e28a61a7eb9', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657612560, ''),
('cfde3d3e9f31d578a8ef953cf09718d6', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657612560, ''),
('bf9a8dc28c023b7de265fa9cd18414a3', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657612560, ''),
('8be929a93553e365cbb20c3965226be3', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657613190, ''),
('c735b6a87f866082b1a2ae4f2b8c15ca', '202.179.95.82', 'Dart/2.17 (dart:io)', 1657613444, ''),
('177893932eb94cae2c12ea15f88179f7', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657617253, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('ee2e2e8fa1d51bb0b8e923f6bf4bf956', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657617908, ''),
('c131667deb71a4b5c196e6aa47ec2bd9', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/', 1657618544, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('3cbb17543b26be19f48cd405f38a4b36', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657623982, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('6b0fbe183c9953ecf949fb5849bb6648', '49.248.21.18', 'Mozilla/5.0 (Linux; Android 11; Pixel 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36', 1657624548, ''),
('d8ef8d012ccb4cc740a9983a36d75f0d', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657624628, ''),
('20eab18e05ab5e6b33b1ed1a38cdb5d5', '49.248.21.18', 'Mozilla/5.0 (Linux; Android 11; Pixel 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36', 1657624688, ''),
('184c5e9ff5b6afde675637ae687be166', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657624787, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('98567fbba07ad7c70558d1526bae5470', '49.248.21.18', 'Mozilla/5.0 (Linux; Android 11; Pixel 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36', 1657627775, ''),
('67557f80af655c14d50bc6412388946c', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657628963, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"2\";}}'),
('babec209e4a417fdc617d6e1d87b463b', '182.237.154.148', 'Mozilla/5.0 (Linux; Android 11; RMX3241) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1657646478, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('8cb820e90ec5af009afaf4ec69ee5112', '182.237.154.148', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657646655, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('98234d783b60111e09dd3a9bd4783b08', '182.237.154.148', 'Mozilla/5.0 (Linux; Android 11; RMX3241) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1657646748, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('e521b038259d1794ee04e4257fab6aa0', '182.237.154.148', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657646807, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('00d27f9baf9ef3bb78627e83871c4777', '182.237.154.148', 'Mozilla/5.0 (Linux; Android 11; RMX3241) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1657646863, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('ca8aacaa0edfe40bef8a14d4bf95864d', '182.237.154.148', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657646866, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('cea704f0e30a48811d4dc4da69573967', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657687805, 'a:7:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('0510d57ffba8f1a8bd01e4089cc417ea', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657696427, 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"32\";s:9:\"user_name\";s:18:\"Shirin Ragbansingh\";s:5:\"email\";s:27:\"ragbansinghshirin@gmail.com\";s:10:\"contact_no\";s:10:\"8010597075\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"SUpmVkE3SmlpQks0Y0thVU1KUklUUT09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-13 07:21:50\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:14:\"8010597075ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:4:\"2479\";s:17:\"otp_verify_status\";s:1:\"1\";}}'),
('14ea1311667987cd1075401fa2654bef', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657710009, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('19f5d84413116f4d69b7b70f412874e4', '202.179.95.82', 'PostmanRuntime/7.29.0', 1657710023, ''),
('f8a523e47c3c096e93b0f842e13761e8', '202.179.95.82', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Sa', 1657710165, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('de0861de743847aba367e9a9513e9bc9', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657812387, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('48adcbbae71eca9c50428fa21758ffad', '49.248.21.18', 'Mozilla/5.0 (Linux; Android 11; Pixel 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36', 1657710325, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('2b2782640b0a03c1dc627d315544f4ce', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657710399, 'a:8:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"2\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"34\";s:9:\"user_name\";s:3:\"Raj\";s:5:\"email\";s:20:\"raj.namdev@gmail.com\";s:10:\"contact_no\";s:10:\"8080416002\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"TW9wOGNDeGlvVVpJNm11RVl2V20rQT09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-13 11:10:40\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:14:\"8080416002ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:4:\"1945\";s:17:\"otp_verify_status\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('3117a5f6082081f7a8f3f9bfd5b2ae0a', '2405:204:22ac:40e0:603c:a501:4006:6cb4', 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Saf', 1657711399, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"2\";}}'),
('12ba8190194d7d3ccbabcdcc358995d5', '49.248.21.18', 'Mozilla/5.0 (Linux; Android 11; Pixel 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36', 1657711450, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('7a5d09206eb9d6cb0e02679a553310b1', '49.248.21.18', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/', 1657711524, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('146d571023dd7e2fce639c3418fecef5', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657785435, 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"33\";s:9:\"user_name\";s:12:\"Mansi Palkar\";s:5:\"email\";s:23:\"mansipalkar@stzsoft.com\";s:10:\"contact_no\";s:10:\"8652878447\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"NDVTMVhhQXM4NXlTUWtVaU9TWmkxQT09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-13 11:08:33\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:14:\"8652878447ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:4:\"8147\";s:17:\"otp_verify_status\";s:1:\"1\";}}'),
('65a29837c328df7bf16a92230024cbd6', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657786385, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('bc59905d48e243e9bd5e8dd4f3f40e20', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657813116, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('8217c9ebe4f7f19cdc47444950d8286d', '182.237.154.148', 'Mozilla/5.0 (Linux; Android 11; RMX3241) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1657819790, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('4827190eed86fe85002ec5df552ff8c9', '27.106.94.7', 'Mozilla/5.0 (Linux; Android 11; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Mobile Safari/', 1657819793, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('6f4a2884a42b25cff1f6ea12462ccfbb', '182.237.154.148', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657819862, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('fcbe0e350cd18bb97645b314abf614fb', '182.237.154.148', 'Mozilla/5.0 (Linux; Android 11; RMX3241) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1657820015, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('726d1ced08ec00e67de2f9e0de8e40d3', '182.237.154.148', 'Mozilla/5.0 (Linux; Android 11; RMX3241) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1657825627, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('a85b3c16a4c8bdba4dad5d7085c1dbca', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657861393, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('aa7c18cc494cb525d7759662f1f81dc0', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658151473, 'a:7:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('9858e8124c2d2566fb3e51913e7440f8', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657880336, 'a:8:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"37\";s:9:\"user_name\";s:7:\"Taufeek\";s:5:\"email\";s:11:\"t@gmail.com\";s:10:\"contact_no\";s:8:\"70051095\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"aUpJdzZ3N1hjcC9BbnJYQnA1R3BYZz09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-15 10:42:30\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:12:\"70051095ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:5:\"54321\";s:17:\"otp_verify_status\";s:1:\"1\";}}'),
('7dfd986c19181b6453c1d24e540b09d7', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657880417, 'a:8:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"2\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"32\";s:9:\"user_name\";s:18:\"Shirin Ragbansingh\";s:5:\"email\";s:27:\"ragbansinghshirin@gmail.com\";s:10:\"contact_no\";s:10:\"8010597075\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"SUpmVkE3SmlpQks0Y0thVU1KUklUUT09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-13 07:21:50\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:14:\"8010597075ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:4:\"2479\";s:17:\"otp_verify_status\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('5e8301a58db16442f8b062df37323ca6', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657880477, 'a:7:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('ace8bb2a8b477b986bbb877ca310e0a0', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657882189, 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"32\";s:9:\"user_name\";s:18:\"Shirin Ragbansingh\";s:5:\"email\";s:27:\"ragbansinghshirin@gmail.com\";s:10:\"contact_no\";s:10:\"8010597075\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"SUpmVkE3SmlpQks0Y0thVU1KUklUUT09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-13 07:21:50\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:14:\"8010597075ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:4:\"2479\";s:17:\"otp_verify_status\";s:1:\"1\";}}'),
('e5573147f52b5b6e974b85978cbd4ff1', '202.179.95.82', 'Mozilla/5.0 (iPad; CPU OS 13_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/87.0.4280.77 Mobile/15E148 ', 1657885063, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('bba71435a42fda7203ea316b4c8a63b7', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657885395, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('8c47e4259f591b2e9c646f3b6f1e48ca', '2409:4040:e91:d5de:540:b93d:292:b843', 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Saf', 1657885587, ''),
('304a7884d65d7199e7058ade12985c94', '78.101.92.43', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657888486, ''),
('9c23fa52cff4fa6024b682eaec304549', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1657977700, 'a:7:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('333eadf5337f83a114d64c9c53b1e942', '122.177.233.133', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 1657984277, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('a0b84992e382e07795c5ebced8e29362', '122.177.233.133', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36', 1657986621, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"2\";}}'),
('97b55c9fcb9995ea9b67a8d3c0609beb', '103.183.229.241', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658031518, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('04142d867c3a4c8be294b5e29a432db8', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658116569, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('768daab1a479a8e069b9f374aeefedf2', '2401:4900:1a57:fa53:ed76:231d:ec81:1e5c', 'Mozilla/5.0 (Linux; Android 10; Redmi Note 9 Pro Max) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.0.0 Mobile Saf', 1658127778, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('1a550ee87df930e0ec2a9c9c98fbaf7e', '78.101.87.211', 'WhatsApp/2.22.14.74 A', 1658131948, ''),
('28020737d8028dbb75bf4b188a9dd0fb', '78.101.87.211', 'Mozilla/5.0 (Linux; Android 12; M2012K11AI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1658131950, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('d1ae8732ad9129c26ccf11c588da33d5', '176.203.87.49', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E1', 1658131959, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('ecc664dfcc43acdedea5a974d37ad95b', '49.44.78.135', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1658132008, ''),
('847501b84077d358c12df7490c103f03', '78.101.87.211', 'Mozilla/5.0 (Linux; Android 12; M2012K11AI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1658132532, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('c3c0438607f654f9963ecd4505540b5d', '2401:4900:51cb:7015:93c:88b8:4889:fa6a', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 1658158223, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('64e2047a61b3565bc3801bddadead22b', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658220598, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('b1e7a2bb943dd95b0629c7634d556008', '37.19.199.207', 'Mozilla/5.0 (Linux; Android 12; M2012K11AI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1658223884, ''),
('dc17fb42530825af541aabd833b9c16a', '37.210.152.152', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.66 Safari/537.36 Edg/', 1658329505, 'a:7:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('05b789536b1f7434ae5294ae4c921e57', '78.101.84.60', 'WhatsApp/2.22.14.74 A', 1658248881, ''),
('81bf8c2a9c2b358dea6c0e09704082d2', '176.203.87.23', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E1', 1658248920, ''),
('75629e22099ea7383047ccd69aa9b2ee', '176.203.87.23', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E1', 1658249533, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('41eb4535a8ad1f1f91802e4be53723b3', '37.210.116.82', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658249539, 'a:7:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('3184b751f0ab68c7ed2fbef631373d6f', '176.203.87.23', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E1', 1658249640, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('1c5872ace70d330fb552b43c75857243', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658292879, 'a:7:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('510a5f33a31fc1c54d800f1ee437172d', '78.101.87.211', 'Mozilla/5.0 (Linux; Android 12; M2012K11AI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1658296646, 'a:7:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"2\";}}'),
('ea1118786c71b05323eef81becd17973', '64.222.84.196', 'Mozilla/5.0 (Linux; Android 12; SAMSUNG SM-G975U) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/17.0 Chrome/96.0', 1658296648, ''),
('b198a570ae52e2c5a80f9822a0d100dd', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658297459, 'a:7:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('2b4460a794d15fad31aee325d8393c61', '78.101.87.211', 'Mozilla/5.0 (Linux; Android 12; M2012K11AI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1658299442, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('9eaca46cdd5b5a472b45238abd364fa3', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658302335, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('61b7344866a897bbb7ae2548378faabc', '202.179.95.82', 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Saf', 1658304785, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('c8b5d79340f5632ccd8439bec7b14868', '202.179.95.82', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/', 1658304850, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('1531f97bc4fe425335798748246ae5a3', '37.211.205.27', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E1', 1658324134, ''),
('a2e06bd173549c5b18cb6dd3d0f3fbbd', '176.203.86.183', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E1', 1658331706, ''),
('f1381c661d5154df5bd0e1a3e3cbe86e', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658378995, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('1a2a3224c07258cc7f12b8f736b1bac9', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658379022, 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"32\";s:9:\"user_name\";s:18:\"Shirin Ragbansingh\";s:5:\"email\";s:27:\"ragbansinghshirin@gmail.com\";s:10:\"contact_no\";s:10:\"8010597075\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"SUpmVkE3SmlpQks0Y0thVU1KUklUUT09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-13 07:21:50\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:14:\"8010597075ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:4:\"2479\";s:17:\"otp_verify_status\";s:1:\"1\";}}'),
('c302d6d1cb3c68d8629d8803fef2ce68', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658385852, 'a:7:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('55d3f142ae64a028e69020856d4c0762', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658385993, 'a:6:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('4c659677fd4b851ee094542f1417db4b', '202.179.95.82', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/', 1658387966, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('b4dca76dcc2af4a50818dbb0a2102220', '202.179.95.82', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658399606, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('c221060f11cd38af3dc9f960f181a75f', '202.179.95.82', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658564901, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('0c7ade0464dd727c7e7912d60eb9c0a4', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658463777, 'a:8:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"38\";s:9:\"user_name\";s:12:\"Mansi Palkar\";s:5:\"email\";s:24:\"mansipalkars@stzsoft.com\";s:10:\"contact_no\";s:10:\"8652858445\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"RkljYklUVFU0RGJObzNSZWc0SFlSZz09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-22 06:05:48\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:14:\"8652858445ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:5:\"54321\";s:17:\"otp_verify_status\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('77cb02f248b171df43db8b299f63a2e9', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658468109, 'a:7:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('5749d81d1253091282bfed874a1268f5', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658468254, 'a:8:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"32\";s:9:\"user_name\";s:18:\"Shirin Ragbansingh\";s:5:\"email\";s:27:\"ragbansinghshirin@gmail.com\";s:10:\"contact_no\";s:10:\"8010597075\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"SUpmVkE3SmlpQks0Y0thVU1KUklUUT09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-13 07:21:50\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:14:\"8010597075ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:4:\"2479\";s:17:\"otp_verify_status\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('8c0ea42906a819605da541d252e9eeeb', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658475290, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('6b5121f45f7993cee1976ec0b5f93595', '202.179.95.82', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/', 1658475335, ''),
('00eda8ac6171ac8cb70596a3cb2ac41f', '202.179.95.82', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/', 1658475336, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('f47b1f13ecd4ea849ddfaeaadc8b9900', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658498844, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('bad8d37c81525cfcc614d3ed10477f51', '202.179.95.82', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/', 1658498886, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('f87ff2c182ce56636f1d79a9529e5bcb', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658498894, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('548bb24c59c1f63e8c4fb56d71df023e', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658546548, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('f63cee9d91bf236408e0bd7dd0d46d09', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658546674, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('646bc8408e94578e41432c4babefd141', '202.179.95.83', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Sa', 1658565814, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('a5a1cc28cb9ad8e11cf39d91b731fe18', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658570155, 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"32\";s:9:\"user_name\";s:18:\"Shirin Ragbansingh\";s:5:\"email\";s:27:\"ragbansinghshirin@gmail.com\";s:10:\"contact_no\";s:10:\"8010597075\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"SUpmVkE3SmlpQks0Y0thVU1KUklUUT09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-13 07:21:50\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:14:\"8010597075ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:4:\"2479\";s:17:\"otp_verify_status\";s:1:\"1\";}}'),
('aa898ecb5ebfdc98aa8eed40f824fb3c', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658561694, 'a:7:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('6ba8db080290578483d46b05537880a6', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658565245, 'a:3:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"32\";s:9:\"user_name\";s:18:\"Shirin Ragbansingh\";s:5:\"email\";s:27:\"ragbansinghshirin@gmail.com\";s:10:\"contact_no\";s:10:\"8010597075\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"SUpmVkE3SmlpQks0Y0thVU1KUklUUT09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-13 07:21:50\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:14:\"8010597075ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:4:\"2479\";s:17:\"otp_verify_status\";s:1:\"1\";}}'),
('48a4e34d7ed67bffe94bde68deb6f329', '49.248.21.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658569532, 'a:8:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"39\";s:9:\"user_name\";s:12:\"Mansi Palkar\";s:5:\"email\";s:23:\"mansipalkar@stzsoft.com\";s:10:\"contact_no\";s:10:\"8651238443\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"UkxpZlUzSloxYmd4OGJGNjJkV0RjUT09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-23 10:39:34\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:14:\"8651238443ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:5:\"54321\";s:17:\"otp_verify_status\";s:1:\"1\";}s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;}'),
('dc6b575dd1361a4d35760c772ff7f197', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658569595, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('109c1b9a283322ce271fd76485c82631', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/', 1658569249, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('87fd3cd4a06a06a0331e39ed903b1ede', '49.248.21.18', 'Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mob', 1658569487, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('3af790bebb08267793f2d59c485bbb18', '66.102.7.98', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36 Google-PageRend', 1658573229, ''),
('62a06bc116ab1559aa4ac6dbcb6d9ca7', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658576076, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('1ed488a2b9d7f934af2cbd68d589c9f9', '202.179.95.82', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658584349, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('bcf138d39d5e6c1602131b11b81bf689', '49.36.98.80', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Safari/605.1.15', 1658591923, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('ad833efdfce334f448827f37a34eb1d8', '2405:204:2092:b191:93c7:b4ee:726:6b79', 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Saf', 1658592074, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('db778529a84da26de51c5bec74a12c4c', '2405:204:2092:b191:93c7:b4ee:726:6b79', 'WhatsApp/2.22.10.73 A', 1658592086, ''),
('bbefab74692b61edb7117a5cf8ccf1e0', '178.153.43.90', 'Mozilla/5.0 (Linux; Android 12; M2012K11AI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36', 1658592101, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('ddb2ca02ea6632800685c04bc7308d81', '204.85.30.6', 'Mozilla/5.0 (Linux; Android 12; SM-G998U) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Mobile Safari/537.36', 1658592103, ''),
('055e09292f0f423560a78da6a046f851', '178.153.43.90', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658592260, 'a:8:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}s:14:\"user_logged_in\";a:20:{s:10:\"op_user_id\";s:2:\"41\";s:9:\"user_name\";s:5:\"hamad\";s:5:\"email\";s:21:\"arcanist555@gmail.com\";s:10:\"contact_no\";s:8:\"33203337\";s:7:\"address\";N;s:7:\"role_id\";s:1:\"2\";s:8:\"password\";s:32:\"Qjl4dUM1cWtqbnFBTkp1dzZveUJVUT09\";s:13:\"profile_photo\";N;s:6:\"status\";s:1:\"1\";s:8:\"added_on\";s:19:\"2022-07-23 18:04:57\";s:17:\"deactivation_date\";N;s:9:\"device_id\";N;s:11:\"device_type\";N;s:12:\"notifn_topic\";s:12:\"33203337ecom\";s:15:\"terms_condition\";s:1:\"1\";s:16:\"terms_conditn_id\";s:1:\"0\";s:11:\"app_version\";N;s:12:\"app_build_no\";N;s:3:\"otp\";s:5:\"54321\";s:17:\"otp_verify_status\";s:1:\"1\";}}'),
('de23955bf1fdddde79167483fdd594a3', '2405:204:2092:b191:8f4:1195:2037:e774', 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Saf', 1658638782, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"1\";}}'),
('59456d08bccf513190f1fb64b2c9dc97', '37.210.167.9', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658692567, 'a:7:{s:9:\"user_data\";s:0:\"\";s:10:\"op_user_id\";s:1:\"2\";s:7:\"user_id\";s:15:\"admin@gmail.com\";s:9:\"user_name\";s:5:\"Admin\";s:9:\"user_role\";s:1:\"2\";s:18:\"is_admin_logged_in\";b:1;s:9:\"logged_in\";a:1:{s:7:\"lang_id\";s:1:\"2\";}}'),
('e41137a4a546b17e7b832d430f3e38ab', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658724663, ''),
('84e0c260567f3dc286a78c2f6933edb3', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658817253, ''),
('44e7f21de2a655dd68b69b42f8364dcc', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658901998, ''),
('8dc40e22382fdef3602b50b74225527f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1658987460, ''),
('2ff271021c1f2fe0fa15e373dc465a95', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1659180511, ''),
('f5dfe1f7e5707ee974a7ccdc2d302ee9', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1659415656, ''),
('d96f715a34ceedd574b90bd6cb6b7f5f', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 1659430495, ''),
('5b20b032e9056c6b450b934e4e542b59', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 1659934939, ''),
('1c842515d299f3b1f2b4bf5179053662', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 1660207220, ''),
('ccef6aecbad0f43ce6a7537f6ec65759', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 1660278902, ''),
('f27bb0b628bc90b45d383eb21616de28', '::1', 'Mozilla/5.0 (Linux; Android 9.0; SAMSUNG SM-F900U Build/PPR1.180610.011) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/1', 1660279044, ''),
('8f07f39159fa5cb103029a93d384b674', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 1660970942, ''),
('b2220c0f45b49fa84c1e94127ce05156', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 1661142020, '');

-- --------------------------------------------------------

--
-- Table structure for table `slider_info`
--

CREATE TABLE `slider_info` (
  `slider_id` int(11) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1' COMMENT '0:Disabled, 1:Enabled',
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_info`
--

INSERT INTO `slider_info` (`slider_id`, `image_name`, `status`, `date_modified`) VALUES
(1, '01.jpg', '1', '2016-09-13 23:43:18'),
(2, '02.jpg', '1', '2016-09-13 23:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) DEFAULT NULL,
  `state_name` varchar(31) CHARACTER SET utf8 DEFAULT NULL,
  `state_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `state_code`) VALUES
(1, 'JAMMU AND KASHMIR', 1),
(2, 'HIMACHAL PRADESH', 2),
(3, 'PUNJAB', 3),
(4, 'CHANDIGARH', 4),
(5, 'UTTARAKHAND', 5),
(6, 'HARYANA', 6),
(7, 'DELHI', 7),
(8, 'RAJASTHAN', 8),
(9, 'UTTAR PRADESH', 9),
(10, 'BIHAR', 10),
(11, 'SIKKIM', 11),
(12, 'ARUNACHAL PRADESH', 12),
(13, 'NAGALAND', 13),
(14, 'MANIPUR', 14),
(15, 'MIZORAM', 15),
(16, 'TRIPURA', 16),
(17, 'MEGHLAYA', 17),
(18, 'ASSAM', 18),
(19, 'WEST BENGAL', 19),
(20, 'JHARKHAND', 20),
(21, 'ODISHA', 21),
(22, 'CHATTISGARH', 22),
(23, 'MADHYA PRADESH', 23),
(24, 'GUJARAT', 24),
(25, 'DAMAN AND DIU', 25),
(26, 'DADRA AND NAGAR HAVELI', 26),
(27, 'MAHARASHTRA', 27),
(28, 'ANDHRA PRADESH(BEFORE DIVISION)', 28),
(29, 'KARNATAKA', 29),
(30, 'GOA', 30),
(31, 'LAKSHWADEEP', 31),
(32, 'KERALA', 32),
(33, 'TAMIL NADU', 33),
(34, 'PUDUCHERRY', 34),
(35, 'ANDAMAN AND NICOBAR ISLANDS', 35),
(36, 'TELANGANA', 36),
(37, 'ANDHRA PRADESH (NEW)', 37);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sub_category_id` int(11) NOT NULL,
  `fk_lang_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `sub_category_name_ar` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `sort_order` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `status` varchar(10) DEFAULT '1' COMMENT '1=active,0=disable',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `active_inactive` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_category_id`, `fk_lang_id`, `category_id`, `sub_category_name`, `sub_category_name_ar`, `sort_order`, `status`, `created_at`, `date_modified`, `active_inactive`) VALUES
(1, 1, 1, 'Smart Wi-Fi Door & Window Sensors1fgfdf', 'الأجهزة الذكية', '23', '0', '2022-07-12 10:13:58', '2022-07-12 10:13:58', '1'),
(3, 1, 1, 'Xiaomi Smart Air Fryer 3.5L', 'أضواء', '2', '0', '2022-07-12 10:16:33', '2022-07-12 10:16:33', '1'),
(5, 1, 3, 'Smart Qur\'an Multi-Color Lamp', 'توفر \"شتوكا\" الصوتَ لجمل تتويبا.', '3', '0', '2022-07-12 10:18:18', '2022-07-12 10:18:18', '1'),
(7, 1, 3, '3D Moon Light With Stand', 'مُكَمِّلات', '4', '0', '2022-07-12 10:20:02', '2022-07-12 10:20:02', '1'),
(9, 1, 5, 'Anker Soundcore Life Q10 Wireless Headphone - Blue', 'الألعاب	', '5', '0', '2022-07-12 10:21:26', '2022-07-12 10:21:26', '1'),
(11, 1, 5, 'Anker Life P2 Mini Earphone - Black', 'الكابلات والمحول', '6', '1', '2022-07-12 10:22:46', '2022-07-12 10:22:46', '1'),
(13, 1, 13, 'Power Banks', 'توفر \"شتوكا\" الصوتَ لجمل تتويبا.', '7', '1', '2022-07-12 10:24:58', '2022-07-12 10:24:58', '1'),
(15, 1, 13, 'Wall Charger', 'أضواء', '8', '0', '2022-07-12 10:26:08', '2022-07-12 10:26:08', '1'),
(22, NULL, 9, 'uGreen Cat8 Fast Ethernet Cable - 3 Meter', 'كابل انترنت سريع كات 8 – 3 متر من uGreen', '9', '1', '2022-07-20 09:17:14', '2022-07-20 09:17:14', '1'),
(23, NULL, 11, 'MOFT Snap-On MagSafe Phone Stand – Seafoam', 'ستاند ومحفظة للجوال MagSafe من موفت – تركوازي غامج', '10', '1', '2022-07-20 09:18:17', '2022-07-20 09:18:17', '1'),
(24, NULL, 16, 'Playstore', 'بلاي ستور', '2', '1', '2022-08-02 12:43:01', '2022-08-02 12:43:01', '1'),
(25, NULL, 16, 'Itunes', 'اي تيونز', '3', '1', '2022-08-02 12:43:32', '2022-08-02 12:43:32', '1'),
(31, NULL, 33, 'BULB1', 'الأجهزة الذكية	', '2', '1', '2022-08-11 09:00:30', '2022-08-11 09:00:30', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subscribed`
--

CREATE TABLE `subscribed` (
  `id` int(5) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribed`
--

INSERT INTO `subscribed` (`id`, `email`, `status`) VALUES
(1, 'mansipalkar@gmail.com', 0),
(2, 'mansi@gmail.com', 0),
(3, 'mansi@gmail.com', 0),
(4, 'mansi@gmail.com', 0),
(5, 'mansi@gmail.com', 0),
(6, 'mans@gmail.com', 0),
(7, 'mans@gmail.com', 0),
(8, 'mans@gmail.com', 0),
(9, 'jashaj@gmail.com', 0),
(10, 'mans@gmail.com', 0),
(11, 'mans@gmail.com', 0),
(12, 'mans@gmail.com', 0),
(13, 'mans@gmail.com', 0),
(14, 'mans@gmail.com', 0),
(15, 'mans@gmail.com', 0),
(16, 'mans@gmail.com', 0),
(17, 'mans@gmail.com', 0),
(18, 'mans@gmail.com', 0),
(19, 'mansipalkar19@gmail.com', 0),
(20, 'mansiabc@gmail.com', 0),
(21, 'mansabc@gmail.com', 0),
(22, 'mans1904@gmail.com', 0),
(23, 'mans1213@gmail.com', 0),
(24, 'mans19041997@gmail.com', 0),
(25, 'mansabc19@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_list`
--

CREATE TABLE `supplier_list` (
  `id` int(5) NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier_list`
--

INSERT INTO `supplier_list` (`id`, `supplier_name`, `phone_number`, `email_address`, `contact_person_name`, `address_1`, `address_2`, `area_name`, `city_name`, `state`, `pincode`, `gst_number`, `gst_file_name`, `pan_number`, `pan_file_name`, `account_name`, `account_no`, `bank_name`, `branch_name`, `ifsc_code`, `swift_code`, `created_at`, `status`) VALUES
(1, 'demo', '3452657465', 'demostzsoft@gmail.com', 'demo', 'xyz', 'abc', 'bhandup', 'mumbai', 'maharashtra', '400012', '', '', '', '', 'demo', 'FSTEH4354667', 'DEMO', 'BHANDUP', 'YRGHJF224344', 'YRGHJF224344', '2022-07-12 12:58:10', 0),
(2, 'demo1', '3452657465', 'demostzsoft@gmail.com', 'demo', 'xyz', 'abc', 'bhandup', 'mumbai', 'maharashtra', '400012', '', '', '', '', 'demo', 'FSTEH4354667', 'DEMO', 'BHANDUP', 'YRGHJF224344', 'YRGHJF224344', '2022-07-12 13:00:16', 0),
(3, 'demo2', '3452657465', 'demostzsoft@gmail.com', 'demo', 'xyz', 'abc', 'bhandup', 'mumbai', 'maharashtra', '400012', '', '', '', '', 'demo', 'FSTEH4354667', 'DEMO', 'BHANDUP', 'YRGHJF224344', 'YRGHJF224344', '2022-07-12 13:02:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `id` bigint(20) NOT NULL,
  `module` bigint(20) NOT NULL COMMENT '1= user app',
  `title` varchar(500) NOT NULL,
  `details` text NOT NULL COMMENT 'encoded in base64',
  `type` int(11) NOT NULL COMMENT '1= t&C , 2=P&P',
  `is_deleted` int(11) NOT NULL COMMENT '0=deleted,1=live 	',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`id`, `module`, `title`, `details`, `type`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'Terms & Conditions', 'PHNlY3Rpb24gaWQ9ImFib3V0LXVzIiBzdHlsZT0iZm9udC1mYW1pbHk6ICdWYXJlbGEgUm91bmQnLCBzYW5zLXNlcmlmOyI+DQogICAgICAgIDxkaXYgY2xhc3M9ImNvbnRhaW5lciI+DQogICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8ZGl2IGRhdGEtYW9zPSJmYWRlLWxlZnQiPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGgyIGNsYXNzPSJ0ZXh0LWNlbnRlciI+UGFya2luZ0FkZGEgV29yazwvaDI+DQogICAgICAgICAgICAgICAgICAgICAgICA8b2w+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxiPlRFUk1TIE9GIENPTlRSQUNUPC9iPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUGFya2luZ0FkZGEgd2lsbCBpbnN0YWxsLCBtYWludGFpbiwgYW5kIG9wZXJhdGUgYW4gSVQtQmFzZWQgU21hcnQgUGFya2luZyBTeXN0ZW0gdG8gY29sbGVjdCBwYXJraW5nIGZlZXMgaW4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aGUgYXNzaWduZWQgUGFya2luZyBTcGFjZXMgb2YgdGhlIGNpdHkuIFRlY2huaWNhbCBzcGVjaWZpY2F0aW9ucyBmb3Igc3BlY2lmaWMgY29tcG9uZW50cyBhcmUgZGVzY3JpYmVkLg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIEJ5IHVzaW5nIHRoZSBQYXJraW5nQWRkYSB3ZWJzaXRlICgid3d3LnBhcmtpbmdhZGRhLmNvbSIpIGFuZCBTbWFydCBQaG9uZSBBcHAgKOKAnVBhcmtpbmdBZGRhIEFwcCksDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgeW91IGFncmVlIHRvIGJlIGJvdW5kIGJ5IHRoZSBmb2xsb3dpbmcgdGVybXMgYW5kIGNvbmRpdGlvbnMgKHRoZSAiVGVybXMgb2YgVXNlIiBvciAiQWdyZWVtZW50IikuIEFzIHVzZWQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbiB0aGlzIEFncmVlbWVudCwgUGFya2luZ0FkZGEgd2lsbCBiZSByZWZlcnJlZCB0byBhcyAiUGFya2luZ0EiIG9yICJ3ZSIgYW5kIHlvdSB3aWxsIGJlIHJlZmVyZW5jZWQgYXMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAieW91Ii4gVGhpcyBBZ3JlZW1lbnQgaW5jb3Jwb3JhdGVzIGJ5IHJlZmVyZW5jZSB0aGUgZm9sbG93aW5nIHBvbGljaWVzIGFuZCBkb2N1bWVudHMgYWxzbyBmb3VuZCBvbiB0aGlzDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgV2Vic2l0ZSBhbmQgdGhlIE1vYmlsZSBBcHAuDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCg0KDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxiPkFDQ0VQVEFOQ0U8L2I+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBUaGUgZm9sbG93aW5nIHRlcm1zIGFuZCBjb25kaXRpb25zIGdvdmVybiB5b3VyIHVzZSBvZiB0aGUgcGFya2luZyBpbmZvcm1hdGlvbiwgbWF0ZXJpYWxzIGFuZCBkb2N1bWVudHMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBiZWluZyBtYWRlIGF2YWlsYWJsZSB0byB5b3UgYXQgdGhpcyB3ZWJzaXRlIG9yIFNtYXJ0IFBob25lIEFwcCwgaW5jbHVkaW5nLCB0byB0aGUgZXh0ZW50IGFwcGxpY2FibGUsIHRoZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFZlbmRvciBEYXNoYm9hcmQgYW5kIG90aGVyIHRvb2xzIHByb3ZpZGVkIGZvciB1c2VycyB3aG8gc2VsbCBwYXJraW5nICgiVmVuZG9ycyIpIGFuZCB0aGUgUGFya2luZ0FkZGENCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBBUEkgYW5kIG90aGVyIHRvb2xzIHByb3ZpZGVkIGFuZCB1c2VycyB3aG8gdXNlZCAoc2VhcmNoIGFuZCBib29rKSBwYXJraW5nICgiQ3VzdG9tZXJzIikuDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgQnkgdXNpbmcgdGhlIE1hdGVyaWFscywgeW91IHNpZ25pZnkgeW91ciBhZ3JlZW1lbnQgdG8gYWxsIHRlcm1zLCBjb25kaXRpb25zLCBhbmQgbm90aWNlcyBjb250YWluZWQgb3INCiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZWZlcmVuY2VkIGhlcmVpbi4gSWYgeW91IGRvIG5vdCBhZ3JlZSB0byB0aGVzZSBUZXJtcyBvZiBVc2UgcGxlYXNlIGRvIG5vdCB1c2UgdGhpcyBXZWJzaXRlLCBNb2JpbGUgQXBwIG9yDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhlIE1hdGVyaWFscy4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBXZSByZXNlcnZlIHRoZSByaWdodCwgYXQgb3VyIGRpc2NyZXRpb24sIHRvIHVwZGF0ZSBvciByZXZpc2UgdGhlc2UgVGVybXMgb2YgVXNlLiBQbGVhc2UgY2hlY2sgdGhlIFRlcm1zIG9mDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgVXNlIHBlcmlvZGljYWxseSBmb3IgY2hhbmdlcy4gWW91ciBjb250aW51ZWQgdXNlIG9mIHRoaXMgV2Vic2l0ZSwgTW9iaWxlIGFwcCBvciB0aGUgTWF0ZXJpYWxzIGZvbGxvd2luZyB0aGUNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBwb3N0aW5nIG9mIGFueSBjaGFuZ2VzIHRvIHRoZSBUZXJtcyBvZiBVc2UgY29uc3RpdHV0ZXMgYWNjZXB0YW5jZSBvZiB0aG9zZSBjaGFuZ2VzLg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDM+PGI+UEFSVCBJOiBHRU5FUkFMIFRFUk1TIEFORCBDT05ESVRJT05TPC9iPjwvaDM+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+PGI+QS4gICBSZXNlcnZhdGlvbiBvZiBSaWdodHM8L2I+PC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRoZSBQYXJraW5nQWRkYSBuYW1lIGFuZCBsb2dvLCBhbmQgYWxsIHJlbGF0ZWQgcHJvZHVjdCBhbmQgc2VydmljZSBuYW1lcywgZGVzaWduIG1hcmtzIGFuZCBzbG9nYW5zIGFyZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRoZSB0cmFkZW1hcmtzIG9yIHJlZ2lzdGVyZWQgdHJhZGVtYXJrcyBvZiBQYXJraW5nQWRkYSBQdnQuIEx0ZC4gWW91IG1heSBub3QgdXNlIGFueSBQYXJraW5nQWRkYSBvcg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRoaXJkIHBhcnR5IHRyYWRlbWFya3Mgb3IgbG9nb3Mgd2l0aG91dCB0aGUgcHJpb3Igd3JpdHRlbiBjb25zZW50IG9mIFBhcmtpbmdBZGRhLg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRoZSBzZXJ2aWNlIHByb3ZpZGVkIGJ5IFBhcmtpbmdBZGRhIGlzIGxpbWl0ZWQgdG86IChpKSBpbmZvcm1pbmcgb3VyIGN1c3RvbWVycyBvZiB0aGUgbG9jYXRpb24gYW5kIGFwcGFyZW50DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgYXZhaWxhYmlsaXR5IG9mIHBhcmtpbmcsIGFuZCAoaWkpIHByb3ZpZGluZyBjdXN0b21lcnMgdGhlIGFiaWxpdHkgdG8gYm9vayBwYXJraW5nLg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFRoaXMgV2Vic2l0ZSBhbmQgU21hcnQgUGhvbmUgQXBwIGFyZSBpbnRlbmRlZCBmb3IgcGVyc29uYWwsIG5vbi1jb21tZXJjaWFsIHVzZSAoZXhjZXB0IGJ5IFZlbmRvcnMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhbmQgaW4gYWNjb3JkYW5jZSB3aXRoIHRoZSBhcHBsaWNhYmxlIHRlcm1zIGFuZCBjb25kaXRpb25zIHNldCBmb3J0aCBiZWxvdykuIFlvdSBtYXkgbm90IHVzZSByb2JvdHMgb3INCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBvdGhlciBhdXRvbWF0ZWQgbWVhbnMgdG8gYWNjZXNzIHRoaXMgV2Vic2l0ZSBhbmQgTW9iaWxlIGFwcCB1bmxlc3Mgc3BlY2lmaWNhbGx5IHBlcm1pdHRlZCBieQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBhcmtpbmdBZGRhLiBZb3UgcmVwcmVzZW50IHRoYXQgeW91IGFyZSBvZiBzdWZmaWNpZW50IGxlZ2FsIGFnZSB0byBjcmVhdGUgYmluZGluZyBsZWdhbCBvYmxpZ2F0aW9ucyBmb3IgYW55DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgbGlhYmlsaXR5IHlvdSBtYXkgaW5jdXIgYXMgYSByZXN1bHQgb2YgeW91ciB1c2Ugb2YgdGhpcyBXZWJzaXRlIGFuZCBNb2JpbGUgYXBwLg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIEFueSBvdGhlciB1c2Ugb2YgbWF0ZXJpYWxzIG9yIENvbnRlbnQgb24gdGhpcyBXZWJzaXRlIGFuZCBNb2JpbGUgQXBwLCBpbmNsdWRpbmcgcmVwcm9kdWN0aW9uIGZvciBhDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgcHVycG9zZSBvdGhlciB0aGFuIHRoYXQsIG5vdGVkIGFib3ZlIHdpdGhvdXQgUGFya2luZyBBZGRhJ3MgcHJpb3Igd3JpdHRlbiBjb25zZW50LCBpcyBwcm9oaWJpdGVkLg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD48Yj5CLiBQcml2YWN5IFBvbGljeTogU2VjdXJpdHk8L2I+PC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPllvdSBjb25maXJtIHRoYXQgeW91IGhhdmUgcmVhZCBhbmQgYWNjZXB0IG91ciBQcml2YWN5IFBvbGljeSwgdGhlIHRlcm1zIG9mIHdoaWNoIGFyZSBpbmNvcnBvcmF0ZWQgaGVyZWluLA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFuZCBhZ3JlZSB0aGF0IHRoZSB0ZXJtcyBvZiB0aGlzIHBvbGljeSBhcmUgcmVhc29uYWJsZSBhbmQgc2F0aXNmYWN0b3J5IHRvIHlvdS4gWW91IGNvbnNlbnQgdG8gdGhlIHVzZSBvZiB5b3VyDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgcGVyc29uYWwgaW5mb3JtYXRpb24gYnkgUGFya2luZ0FkZGEgUHZ0LiBMdGQuIGFuZC9vciBpdHMgdGhpcmQtcGFydHkgcHJvdmlkZXJzIGFuZCBkaXN0cmlidXRvcnMgaW4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhY2NvcmRhbmNlIHdpdGggdGhlIHRlcm1zIG9mIGFuZCBmb3IgdGhlIHB1cnBvc2VzIHNldCBmb3J0aCBpbiB0aGUgUHJpdmFjeSBQb2xpY3kuDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUGFya2luZ0FkZGEgbWFrZXMgbm8gcmVwcmVzZW50YXRpb24gb3Igd2FycmFudHksIGFuZCBoZXJlYnkgZGlzY2xhaW1zIGFueSBhbmQgYWxsIGxpYWJpbGl0eSwgd2l0aCByZWdhcmQgDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgdG8gdGhlIHN1ZmZpY2llbmN5IG9mIHRoZSBzZWN1cml0eSBtZWFzdXJlcyB1c2VkIGZvciBkYXRhIGhhbmRsaW5nIGFuZCBzdG9yYWdlLiBQYXJraW5nQWRkYSB3aWxsIG5vdCBiZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJlc3BvbnNpYmxlIGZvciBhbnkgYWN0dWFsIG9yIGNvbnNlcXVlbnRpYWwgZGFtYWdlcyB0aGF0IHJlc3VsdCBmcm9tIGEgc2VjdXJpdHkgYnJlYWNoIG9yIHRlY2huaWNhbA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1hbGZ1bmN0aW9uLjwvcD4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGI+SEFSRFdBUkUsIFNPRlRXQVJFLCBGQUNJTElUSUVTPC9iPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx1bCBzdHlsZT0ibGlzdC1zdHlsZS10eXBlOnNxdWFyZTsiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBUbyBwcm92aWRlIGluc3RhbGwgbmVjZXNzYXJ5IGNvbXBsZXRlIGhhcmR3YXJlIGFuZCBzb2Z0d2FyZSBzb2x1dGlvbnMsIHN1Y2ggYXMgYnV0IG5vdCBsaW1pdGVkIHRvIGJvb20NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBiYXJyaWVycywgYXV0byBwYXkgc3RhdGlvbiwgZGV2aWNlcywgcG9ydC1jYWJpbnMsIHN3aXRjaGVzLCBnYXRld2F5LCBndWlkYW5jZSBzeXN0ZW0sIGZvciBvbiBzdHJlZXQsIG9mZiBzdHJlZXQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhbmQgbXVsdGktbGV2ZWwgcGFya2luZyBzeXN0ZW0uDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUHJvdmlkZSBQYXJraW5nIE1hbmFnZW1lbnQgYW5kIFBhcmtpbmcgR3VpZGFuY2UgU3lzdGVtIHRvIGRpcmVjdCBkcml2ZXJzIHRvIGF2YWlsYWJsZSB0aHJvdWdoIHBhcmtpbmcNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzbG90cyBTbWFydCBQYXJraW5nIFNtYXJ0IFBob25lIEFwcGxpY2F0aW9uLiAgICAgICAgICAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBQcm92aWRlIGFuZCBpbnN0YWxsIG5lY2Vzc2FyeSBzaWduYWdlIHdoaWNoIGFsc28gaW5jbHVkZXMgdmFyaWFibGUgbWVzc2FnZSBzaWduIGJvYXJkcyBmb3IgZ3VpZGFuY2UgdG8gcHVibGljDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVnYXJkaW5nIGF2YWlsYWJpbGl0eSBvZiBwYXJraW5nIHNwYWNlcyBvdGhlciBuZWNlc3NhcnkgaW5mb3JtYXRpb24uDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgSW5zdGFsbCwgb3BlcmF0ZSBhbmQgbWFpbnRhaW4gYW4gSVQgc3lzdGVtLCBmb3IgcGFya2luZyBmZWUgcGF5bWVudHMsIG1vbml0b3JpbmcsIGFuZCBlbmZvcmNlbWVudC4gUHJvY3VyZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNvZnR3YXJlIGhhcmR3YXJlIGZvciB0aGUgcHJvY2Vzc2luZyBvZiBjdXN0b21lciBwYXltZW50cyB2aWEgY3JlZGl0IGNhcmQsIG5ldCBiYW5raW5nLCBtb2JpbGUtYmFzZWQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBiYW5raW5nIHN5c3RlbXMsIG90aGVyIG1lZGlhOyB0aGUgaW1wZXR1cyBpcyBvbiBjYXNobGVzcyBwYXltZW50IHN5c3RlbSBhdCBhbGwgdGhlIHBhcmtpbmcgbG90cy4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBTbWFydCBQYXJraW5nIFNtYXJ0IFBob25lIEFwcGxpY2F0aW9uIGZvciBwYXJraW5nIHNlcnZpY2VzOiBBcHAgc2hhbGwgc2hvdyB0aGUgYXZhaWxhYmxlIHNsb3Qgb24gcmVhbCB0aW1lDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgYmFzaXMsIGJvb2tpbmcgb2YgcGFya2luZyBzcGFjZSwgcGF5bWVudCBtZWNoYW5pc20gdGhyb3VnaCB2YXJpb3VzIG1vZGVzIG9mIHBheW1lbnQsIHJlc2VydmF0aW9uIGZvcg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNwZWNpYWxseS1hYmxlIGNpdGl6ZW5zLCBmYWNpbGl0eSBmb3IgZXh0ZW5zaW9uIG9mIHByZS1ib29rZWQgcGFya2luZyBzcGFjZS4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBQcm9jdXJlIGhhcmR3YXJlIHNvZnR3YXJlIHRvIGFpZCBpbiB0aGUgcGxhbm5pbmcgbW9uaXRvcmluZyBvZiBlbmZvcmNlbWVudCBhY3Rpdml0aWVzLg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIEVzdGFibGlzaCB0aGUgcmVxdWlyZWQgZmFjaWxpdGllcywgZXF1aXBtZW50LCBpbmZvcm1hdGlvbiBzeXN0ZW1zIGZvciB0aGUgb3BlcmF0aW9ucyBvZiB0aGUgUGFya2luZyBTeXN0ZW0uIA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC91bD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGI+T1BFUkFUSU9OUzwvYj48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx1bCBzdHlsZT0ibGlzdC1zdHlsZS10eXBlOnNxdWFyZTsiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+UGFya2luZ0FkZGEgd2lsbCBkZXZlbG9wIG1vZGlmeSwgZnJvbSB0aW1lIHRvIHRpbWUsIGEgZGV0YWlsZWQgb3BlcmF0aW5nIHBsYW4gKOKAnE9wZXJhdGluZyBQbGFu4oCdKSBmb3IgdGhlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBQYXJraW5nIFN5c3RlbS4gVGhlIE9wZXJhdGluZyBQbGFuIHdpbGwgZGV0YWlsIGFsbCBhc3BlY3RzIG9mIG9wZXJhdGlvbnMgaW5jbHVkaW5nIGJ1dCBub3QgTGltaXRlZCB0byBicmluZywNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNpZ25hZ2UsIGdlb21ldHJpYyBkZXNpZ24gKGkuZS4gZGVsaW5lYXRpb24gb2YgZnJlZSBwYXJraW5nLCBwYWlkIHBhcmtpbmcsIG5vLXBhcmtpbmcgYXJlYXMpLCBmZWUgY29sbGVjdGlvbiwNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVuZm9yY2VtZW50LCBmYWNpbGl0eSBtYWludGVuYW5jZSwgY3VzdG9tZXIgc2VydmljZSBwcm9jZWR1cmVzLiANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBQYXJraW5nQWRkYSBhbHNvIHdpbGwgcHJlcGFyZSBkZXRhaWxlZCBQYXJraW5nIE1hbmFnZW1lbnQgUGxhbnMgZm9yIGFsbCBvbi1zdHJlZXQsIG9mZi1zdHJlZXQgYW5kIG11bHRpbGV2ZWwgc2l0ZXMgYXNzaWduZWQgdG8gUGFya2luZ0FkZGEuDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUGFya2luZ0FkZGEgd2lsbCBiZSByZXNwb25zaWJsZSBmb3IgY29tcGxldGUgb3BlcmF0aW9ucyBhbmQgbWFpbnRlbmFuY2Ugb2YgYWxsIHRoZSBwYXJraW5nIHNwYWNlcy4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBDb2xsZWN0IGN1c3RvbWVyIHBheW1lbnRzIHRvd2FyZCBVc2VyIEFjY291bnRzIHZpYSBjYXNobGVzcyBwYXltZW50IHN5c3RlbQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIENvbGxlY3QgYXBwbGljYWJsZSBQYXJraW5nIEZlZXMgdXNpbmcgYW4gSVQtYmFzZWQgc3lzdGVtIChDYXNobGVzcyBQYXltZW50IFN5c3RlbSkgZnJvbSBhbGwgdXNlcnMgd2hvDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhcmsgdGhlaXIgdmVoaWNsZXMgaW4gb24tc3RyZWV0LCBvZmYtc3RyZWV0IGFuZCBtdWx0aWxldmVsIHBhcmtpbmcgc2l0ZXMgYXNzaWduZWQgdG8gUGFya2luZ0FkZGEuIFBhcmtpbmdBZGRhDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpbGwgbm90IGNvbGxlY3QgY2FzaCBvciBvdGhlciBmb3JtcyBvZiBkaXJlY3QgcGF5bWVudCBvbiB0aGUgc3RyZWV0LiANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBVbmlxdWUgaWRlbnRpZmljYXRpb24gb2YgZWFjaCB2ZWhpY2xlIGVudGVyaW5nIGFueSBvZiB0aGUgcGFya2luZyBsb3RzIHRocm91Z2ggYmFyLWNvZGVkIHRpY2tldHMsDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFJGSUQvU21hcnQgQ2FyZHMvUVIgQ29kZWQgZW50cnkgTkZDIGVuYWJsZWQgZXRjLiBhcyBhcHBsaWNhYmxlLiANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBFbmxpc3QgdHJhaW5lZCBwcm9mZXNzaW9uYWxzIGFuZCB2ZXJpZmllcnMgdG8gb3BlcmF0ZSB0aGUgUGFya2luZyBTeXN0ZW0uIFBhcmtpbmdBZGRhIHdpbGwgcHJlcGFyZSBhIEh1bWFuDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFJlc291cmNlcyBQbGFuIHNwZWNpZnlpbmcgaG93IHBlcnNvbm5lbCB3aWxsIGJlIHRyYWluZWQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBCZWFyIGFsbCBleHBlbnNlcyB0b3dhcmRzIG9wZXJhdGlvbiBvZiB0aGUgUGFya2luZyBTeXN0ZW0gdGhyb3VnaCB0aGUgZW50aXJlIHBlcmlvZCBhbmQgbm90IGNsYWltIGFueQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhZGRpdGlvbmFsIGV4cGVuc2VzLiANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBVc2luZyB0aGUgZGF0YSBnZW5lcmF0ZWQgdGhyb3VnaCB0aGUgcGFya2luZyBzb2x1dGlvbiBzb2Z0d2FyZSBmb3IgYW5hbHl0aWNzIHB1cnBvc2VzLCBzdWNoIGFzIHRpbWUgYmFzZWQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgKGhvdXJseS9kYWlseS93ZWVrbHkvbW9udGhseS9hbm51YWxseSkgdHJlbmRzLCBhcmVhIHNwZWNpZmljIHRyZW5kcywgdmVoaWNsZSAoY2Fy4oCTU1VWL3NlZGFuL2hhdGNoYmFjaywNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZXRjLikgc3BlY2lmaWMgdHJlbmRzLCB1c2FnZSB2YWNhbmN5IHBlcmlvZHMsIHByZW1pdW0gcGFya2luZyBkZW1hbmQgYW5kLCBldGMuLCBmb3IgdGhlIHB1cnBvc2Ugb2YgYmV0dGVyDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1hbmFnZW1lbnQgb2YgcGFya2luZy4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3VsPg0KDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48Yj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBPUEVSQVRJTkcgTUFOVUFMPC9iPiANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBhcmtpbmdBZGRhIHdpbGwgZGV2ZWxvcCBhbiBPcGVyYXRpbmcgTWFudWFsIGZvciB0aGUgU3lzdGVtIGluZGljYXRpbmcgdGhlIGZvbGxvd2luZzoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx1bCAgc3R5bGU9Imxpc3Qtc3R5bGUtdHlwZTpzcXVhcmU7Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPlBhcmtpbmcgRGVzaWduPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPlByb2NlZHVyZXMgZm9yIGRldGVybWluaW5nIHBhcmtpbmcgbm8tcGFya2luZyBhcmVhcy4gPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPkN1c3RvbWVyIGluZm9ybWF0aW9uIDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5TeXN0ZW0gbG9nbywgc2xvZ2FuLCBvdGhlciBicmluZyBlbGVtZW50cy4gR3VpZGVsaW5lcyBmb3IgdGhlIHBsYWNlbWVudCBvZiBzdGF0aWMgZHluYW1pYyBzaWduYWdlLiA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+U2lnbmFnZSBkZXNpZ24sIGluY2x1ZGluZyBzcGVjaWZpY2F0aW9ucyBmb3IgbGF5b3V0LCBjb2xvdXIgdHlwZWZhY2UuIDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5TcGVjaWZpY2F0aW9ucyBmb3IgcGF2ZW1lbnQgY3VyYiBtYXJraW5ncywgaW5jbHVkaW5nIGxheW91dCwgY29sb3VyLCBhbmQgdHlwZWZhY2UuIDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5GZWUgY29sbGVjdGlvbiBwcm9jZWR1cmVzIChjYXNobGVzcyBwYXltZW50IHN5c3RlbSkgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPkVuZm9yY2VtZW50IHByb2NlZHVyZXMgKFBoeXNpY2FsICYgVGVjaG5vbG9neSBlbmFibGVkKTwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5NYWludGVuYW5jZSBwcm9jZWR1cmVzIGZvciBvbi1zdHJlZXQsIE9mZiBzdHJlZXQgYW5kIG11bHRpLWxldmVsIGVsZW1lbnRzIGFuZCBoYXJkd2FyZSBvdGhlciBlcXVpcG1lbnQgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPklUIHN5c3RlbSBjb21tdW5pY2F0aW9uIHByb3RvY29scyA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+RGF0YSBzZWN1cml0eS4gPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3VsPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGI+UEFSS0lORyBNQU5BR0VNRU5UIFBMQU5TIDwvYj48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBhcmtpbmdBZGRhIHdpbGwgcHJlcGFyZSBkZXRhaWxlZCBQYXJraW5nIE1hbmFnZW1lbnQgUGxhbnMgZm9yIGFsbCBvbi1zdHJlZXQsIG9mZi1zdHJlZXQmIG11bHRpLWxldmVsIHNpdGVzDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgYXNzaWduZWQgdG8gUGFya2luZ0FkZGEuIEZvciBhbGwgb24tc3RyZWV0LCBvZmYtc3RyZWV0IHNpdGVzIGFuZCBNdWx0aS1sZXZlbCBwYXJraW5ncyB0aGUgUGFya2luZyBNYW5hZ2VtZW50DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgUGxhbiB3aWxsIGluY29ycG9yYXRlIHRoZSBmb2xsb3dpbmc6IA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx1bCAgc3R5bGU9Imxpc3Qtc3R5bGUtdHlwZTpzcXVhcmU7Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPiBDbGVhciBkZXNpZ25hdGlvbiBvZiBQYXJraW5nIEZhY2lsaXRpZXMgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPlRoZSBsYXlvdXQgb3JpZW50YXRpb24gb2YgcGFya2luZyBzbG90cywgaW5jbHVkaW5nIHRoZSB0eXBlIG9mIHZlaGljbGUgcGVybWl0dGVkIDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5BcHBsaWNhYmxlIFBhcmtpbmcgRmVlcyBhcyBsaXN0ZWQgb24gdGhlIFNtYXJ0IFBob25lIEFwcDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5TdWZmaWNpZW50IGJheSBzaXplIHRvIGZhY2lsaXRhdGUgdGhlIGxlbmd0aCwgd2lkdGgsIGhlYWQgcm9vbSBvcGVuaW5nIG9mIGRvb3JzIGJhc2VkIG9uIHRoZSBjb3JyZXNwb25kaW5nIHZlaGljbGUgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3VsPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGI+VVNFUiBBQ0NPVU5UUzwvYj48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBhcmtpbmdBZGRhIHdpbGwgcHJvdmlkZSB0aGUgb3B0aW9uIG9mIFVzZXIgQWNjb3VudHMgZm9yIGZyZXF1ZW50IFN5c3RlbSB1c2Vycy4gVGhlIFVzZXIgQWNjb3VudHMgd2lsbA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhhdmUgdGhlIGZvbGxvd2luZyBmZWF0dXJlczogDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHVsID4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPkFiaWxpdHkgdG8gb3BlbiBhbiBhY2NvdW50IG9ubGluZSwgdGhyb3VnaCBhIHNtYXJ0IHBob25lIGFwcCwgb3IgYXQgYSBjdXN0b21lciBzZXJ2aWNlIGtpb3NrPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPlJlcXVpcmVkIGRhdGEgdG8gb3BlbiBhbiBhY2NvdW50IGluY2x1ZGUgdGhlIHVzZXLigJ9zIG5hbWUsIG1vYmlsZSBudW1iZXIgYW5kIHZlaGljbGUgbGljZW5zZSBwbGF0ZSBudW1iZXIocyk8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+QWJpbGl0eSB0byByZWNoYXJnZSB0aGUgYWNjb3VudCB1c2luZyBjYXNobGVzcyBwYXltZW50IHN5c3RlbS48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdWw+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxiPkZFRSBQQVlNRU5UIFNZU1RFTTwvYj48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBhcmtpbmdBZGRhIHdpbGwgY3JlYXRlIGEgZmVlIHBheW1lbnQgc3lzdGVtIGJ5IHdoaWNoIHVzZXJzIGNhbiBwYXkgcGFya2luZyBmZWVzIHVzaW5nIGEgbW9iaWxlIHBob25lIG9yDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgc21hcnQgcGhvbmUgYXBwbGljYXRpb24uIFRoZSBwYXltZW50IHN5c3RlbSB3aWxsOiANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dWwgIHN0eWxlPSJsaXN0LXN0eWxlLXR5cGU6c3F1YXJlOyI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5SZWdpc3RlciB0aGUgYmVnaW5uaW5nIGVuZCBvZiBhIFBhcmtpbmcgRXZlbnQgdGhyb3VnaCBhIHRleHQgbWVzc2FnZSBvciB0aHJvdWdoIGEgU21hcnRwaG9uZSBhcHBsaWNhdGlvbi4gPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPlNlbmQgYW4gYWxlcnQgd2hlbiB0aGUgZHVyYXRpb24gb2YgdGhlIFBhcmtpbmcgRXZlbnQgaXMgYWJvdXQgdG8gZXhjZWVkIHRoZSB1c2Vy4oCZcyBiYWxhbmNlLiA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+U2VuZCBhIHJlc3BvbnNlL2NvbmZpcm1hdGlvbiBtZXNzYWdlIGZvciBhbGwgdXNlciBhY3Rpb25zIDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5IYW5kbGUgdHJhbnNhY3Rpb25zIGJ5IHVzZXJzIHdpdGggVXNlciBBY2NvdW50czwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5IYXZlIHRoZSBhYmlsaXR5IHRvIGRpZmZlcmVudGlhdGUgY2hhcmdlcyBiYXNlZCBvbjo8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dWw+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+RHVyYXRpb24gb2YgdGhlIFBhcmtpbmcgRXZlbnQgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5QYXJraW5nQWRkYSB3aWxsIG5vdCBjYXJyeSBvdXQgZGlyZWN0IGNhc2ggY29sbGVjdGlvbiBmcm9tIFVzZXJzLiA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdWw+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC91bD4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGI+Q0FTSExFU1MgUEFZTUVOVCBTWVNURU08L2I+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dWwgIHN0eWxlPSJsaXN0LXN0eWxlLXR5cGU6c3F1YXJlOyI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5UaGUgc29mdHdhcmUgc2hvdWxkIHByb2Nlc3MgY2FzaGxlc3MgcGF5bWVudCB0cmFuc2FjdGlvbnMuIFRyYW5zYWN0aW9uIGNhbiBlaXRoZXIgYmUgaW5pdGlhdGVkIHZpYSBhdHRlbmRhbnQgdmlhIHRoZSBJbnRlcm5ldCBvciBtb2JpbGVzIGRldmljZXMuIDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5QYXktQnktUGhvbmUgKFNtYXJ0IFBob25lIEFwcCkgLSBDYXNobGVzcyBwYXJraW5nIGlzIGEgcXVpY2sgc2VjdXJlIHdheSB0byBwYXkgZm9yIHBhcmtpbmcgaWYgeW91IGRvIG5vdA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBoYXZlIHRvIHVzZSB0aGUgY2FzaC4gQSBQYXktQnktUGhvbmUgU21hcnQgUGhvbmUgQXBwbGljYXRpb24gd2lsbCBiZSBkZXZlbG9wZWQsIHNvIHRoYXQgVXNlciB3aWxsIHVzZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aGVpciBtb2JpbGUgcGhvbmUgaW5zdGVhZCBvZiBwYXlpbmcgaW4gY2FzaCB0aGUgcGF5bWVudCBpcyBtYWRlIHVzaW5nIHRoZWlyIHJlZ2lzdGVyZWQgY3JlZGl0IG9yIGRlYml0IGNhcmQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnkgcmVnaXN0ZXJpbmcgb24gUGF5LUJ5LVBob25lIFNtYXJ0IFBob25lIEFwcGxpY2F0aW9uIG9yIGV2ZW4gd2l0aG91dCByZWdpc3RlcmluZyBvbiBQYXktQnktUGhvbmUgYXBwDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJ5IHVzaW5nIGd1ZXN0IGNoZWNrLW91dCBkaXJlY3RseSBieSBwYXlpbmcgdGhlIHBhcmtpbmcgY2hhcmdlcy48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+VGhpcmQgUGFydHkgTW9iaWxlIFdhbGxldHMgKFVQSSkgRm9yIEVnLiAoQkhJTSxGcmVlIENoYXJnZSwgUGF5dG0sR3BheSxQaG9uZVBlIGV0Yy4pIDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC91bD4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGI+RU5GT1JDRU1FTlQgU1lTVEVNIDwvYj4gPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dWwgIHN0eWxlPSJsaXN0LXN0eWxlLXR5cGU6c3F1YXJlOyI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5DYXIgY2xhbXBzIHRvIGJlIGF0dGFjaGVkIG9uIGlsbGVnYWwgcGFya2luZyBpbiBvdXIgUGFpZCBQYXJraW5nIExvdHMsIGluIHByaXZhdGUgcHJvcGVydGllcy48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+Rm9yIGFueSB2aW9sYXRpb25zIGluIG9uIHN0cmVldCBwYXJraW5ncywgb2Zmc3RyZWV0IHBhcmtpbmcsIG9yIHByaXZhdGUgcHJvcGVydHksIHJlbGV2YW50IHBhcmtpbmcgYXV0aG9yaXRpZXMgc2hhbGwgYmUgaW50aW1hdGVkLjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5BZnRlciBhIHBlcmlvZCBvZiAyNGhvdXJzIHNpbmNlIHRoZSB2aW9sYXRpb24sIHJlc3BlY3RpdmUgY2l0eSB0cmFmZmljIGF1dGhvcml0eSBzaGFsbCBiZSBpbnRpbWF0ZWQgdG8gdG93IHRoZSB2ZWhpY2xlIGF3YXk8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+RW5mb3JjZW1lbnQgdGVhbXMgc2hhbGwgYmUgZGVzaWduYXRlZCBhcmVhIHdpc2Ugcm91bmQgdGhlIGNsb2NrLjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPC91bD4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGI+VkVSSUZJQ0FUSU9OIFNZU1RFTTwvYj48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBhcmtpbmdBZGRhIHdpbGwgb3BlcmF0ZSB2ZXJpZmljYXRpb24gYWN0aXZpdGllcyBhcyBmb2xsb3dzOg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dWwgIHN0eWxlPSJsaXN0LXN0eWxlLXR5cGU6c3F1YXJlOyI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+Q29uZHVjdCBjaGVja3MgZm9yIGEgc2FtcGxlIG9mIHZlaGljbGVzIGluIGFsbCBQYWlkIFBhcmtpbmcgTG90cyB0aHJvdWdoIHZlcmlmaWVycyB3aG8gd2lsbCBiZSBpbnN0YXRlZCBhdA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYWxsIGRlc2lnbmF0ZWQgcGFya2luZyBzcG90cy4gVGhlIGNoZWNrcyBzaG91bGQgYmUgY2FycmllZCBvdXQgYXQgbGVhc3QgZXZlcnkgMjAgbWludXRlcyB3aWxsIHJlbHkgb24NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZlcmlmaWNhdGlvbiBvZiB0aGUgdmVoaWNsZSBsaWNlbnNlIHBsYXRlIG51bWJlci4gVGhlIHN5c3RlbSB3aWxsIGNyZWF0ZSBhIHJlY29yZCBmb3IgZXZlcnkgdmVoaWNsZSBvYnNlcnZlZA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgd2l0aCBkZXRhaWxzIHN1Y2ggYXMgdGhlIHRpbWUgb2Ygb2JzZXJ2YXRpb24gbGljZW5zZSBwbGF0ZSBudW1iZXI8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPkluc3RhbGwgdmVoaWNsZSBkZXRlY3Rpb24gc2Vuc29ycyBmb3IgYWxsIG9uIHN0cmVldCwgb2ZmIHN0cmVldCBhbmQgaW4gbXVsdGktbGV2ZWwgcGFya2luZ3MgdG8gdHJhY2sgbW9uaXRvciB0aGUNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFycml2YWwgZGVwYXJ0dXJlIG9mIGV2ZXJ5IHZlaGljbGUgdGhhdCBwYXJrcyBpbiBhIGRlc2lnbmF0ZWQgUGFya2luZyBTbG90IHNlbmQgcmVhbC10aW1lIGluZm9ybWF0aW9uIHRvIHRoZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZW5mb3JjZW1lbnQgdGVhbSB3aGVuIHJlcXVpcmVkIG9uIHN1Y2ggUGFya2luZyBFdmVudHMgPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5JZiBhIHZlaGljbGUgaW4gYW4gb24tc3RyZWV0LCBvZmYtc3RyZWV0IGFuZCBtdWx0aS1sZXZlbCBwYXJraW5nIGlzIGZvdW5kIHRvIGJlIHVucGFpZCwgdGhlIFN5c3RlbSB3aWxsDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbW1lZGlhdGVseSByZWNvcmQgdGhlIHZpb2xhdGlvbiBpbiB0aGUgSVQgc3lzdGVtIHBsYWNlIGEgZmluZSBvbiB0aGUgdmVoaWNsZSByZWNvcmQuIFBhcmtpbmdBZGRhIHdpbGwgdGFrZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGhvdG9zIHRvIGRvY3VtZW50IHRoZSBsb2NhdGlvbiBsaWNlbnNlIHBsYXRlIG9mIHRoZSB2ZWhpY2xlLiBQYXJraW5nQWRkYSB3aWxsIHJlY29yZCB0aGUgdmlvbGF0aW9uDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBSZWNvcmRpbmcgb2YgdGhlIHZpb2xhdGlvbiBpbW1vYmlsaXNhdGlvbiB3aWxsIG9jY3VyIGFmdGVyIGEgZ3JhY2UgcGVyaW9kIG9mIDE1bWlucyBmcm9tIG9ic2VydmF0aW9uLiBJZg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhlIHZlaGljbGUgdXNlciBwYXlzIHRoZSBQYXJraW5nIEZlZSB2aWEgZGVzaWduYXRlZCBjYXNobGVzcyBwYXltZW50IG1vZGUgKFVQSSkgYmVmb3JlIHRoZSBlbmQgb2YgdGhlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBncmFjZSBwZXJpb2QsIHRoZSBTeXN0ZW0gd2lsbCBub3QgcmVjb3JkIGEgdmlvbGF0aW9uLiBUaGUgU3lzdGVtIHNoYWxsIGFsc28gc2VuZCBpbmZvcm1hdGlvbiBvZiB2aW9sYXRpb25zDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhbG9uZyB3aXRoIHRoZSBwaG90b2dyYXBoIG9mIHRoZSB2aW9sYXRpb24gYWxvbmcgd2l0aCB0aGUgbGljZW5zZSBwbGF0ZSBvZiB0aGUgdmVoaWNsZS4gPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5UaGUgZW5mb3JjZW1lbnRzIGF1dGhvcml0aWVzIHNob3VsZCBiZSBpbmZvcm1lZCB3aXRoaW4gMSBob3VyIG9mIHRoZSB2aW9sYXRpb24gb2NjdXJyaW5nIGFsb25nIHdpdGggdGhlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwaG90b2dyYXBocyBvZiB0aGUgdmlvbGF0aW9uLCBwaG90byBvZiB0aGUgbGljZW5jZSBwbGF0ZSBhbmQgZGV0YWlscyBvZiB0aGUgdmVoaWNsZS4gDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPk5lY2Vzc2FyeSBpbmZvcm1hdGlvbiByZWdhcmRpbmcgdmVoaWNsZXMgdG93ZWQgYnkgdGhlIGNvbmNlcm5lZCBhdXRob3JpdGllcyB3aWxsIGJlIHVwZGF0ZWQgb24gdGhlIFNtYXJ0DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBQYXJraW5nIEFwcCB3ZWIgcG9ydGFsIGltbWVkaWF0ZWx5LiBBZGRpdGlvbmFsbHksIGluZm9ybWF0aW9uIHJlZ2FyZGluZyBkZXRhaWxzIG9mIHRvd2VkIHZlaGljbGVzIHNoYWxsDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBiZSBhdmFpbGFibGUgdG8gdXNlcnMgdGhyb3VnaCBhIGRlZGljYXRlZCBoZWxwbGluZSBudW1iZXIuIFRoZSBkZWRpY2F0ZWQgaGVscGxpbmUgd2lsbCBiZSBvcGVyYXRlZCBieQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUGFya2luZ0FkZGE8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3VsPg0KDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGI+T1dORVJTSElQIE9GIElQPC9iPiA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBZb3UgYWNrbm93bGVkZ2UgdGhhdCB0aGUgV2Vic2l0ZSBhbmQgU21hcnQgUGhvbmUgQXBwIENvbnRlbnQgaXMgYW5kIHNoYWxsIHJlbWFpbiB0aGUgcHJvcGVydHkgb2YNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgUGFya2luZ0FkZGEgb3IgaXRzIGxpY2Vuc29ycy4gWW91IGFncmVlIHRvIGNvbXBseSB3aXRoIGFsbCBpbnRlbGxlY3R1YWwgcHJvcGVydHkgbGF3cyBhbmQgeW91IHNoYWxsIG5vdA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBlbmN1bWJlciBhbnkgaW50ZXJlc3QgaW4sIG9yIGFzc2VydCBhbnkgcmlnaHRzIHRvLCB0aGUgV2Vic2l0ZSBhbmQgU21hcnQgUGhvbmUgQXBwIENvbnRlbnQuIFlvdSBtYXkgbm90IA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtb2RpZnksIHRyYW5zbWl0LCBwYXJ0aWNpcGF0ZSBpbiB0aGUgc2FsZSBvciB0cmFuc2ZlciBvZiwgb3IgY3JlYXRlIGRlcml2YXRpdmUgd29ya3MgYmFzZWQgb24gYW55IFdlYnNpdGUgb3INCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgU21hcnQgUGhvbmUgQXBwIENvbnRlbnQgLCBpbiB3aG9sZSBvciBpbiBwYXJ0Lg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEFzIGJldHdlZW4gUGFya2luZ0FkZGEgYW5kIHlvdTogKGkpIFBhcmtpbmdBZGRhIHJldGFpbnMgYWxsIHJpZ2h0cywgdGl0bGUgYW5kIGludGVyZXN0IGluIGFuZCB0byBhbGwgaW50ZWxsZWN0dWFsDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHByb3BlcnR5IHJpZ2h0cyBlbWJvZGllZCBpbiBvciBhc3NvY2lhdGVkIHdpdGggdGhlIFdlYnNpdGUgYW5kIFNtYXJ0IFBob25lIEFwcCwgaW5jbHVkaW5nLCB3aXRob3V0DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxpbWl0YXRpb24sIHRoZSBBUEksIERhdGFiYXNlLCBQYXJraW5nQWRkYSBDb250ZW50LCB0cmFkZW1hcmtzLCBhbmQgYW55IGFuZCBhbGwgUGFya2luZ0FkZGEgc2VydmljZXMgYW5kDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFueSBjb250ZW50IGNyZWF0ZWQgb3IgZGVyaXZlZCB0aGVyZWZyb20gKGNvbGxlY3RpdmVseSwgdGhlICJQYXJraW5nQWRkYSBJUCIpLiBUaGVyZSBhcmUgbm8gaW1wbGllZCBsaWNlbnNlcw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB1bmRlciB0aGlzIEFncmVlbWVudCwgYW5kIGFueSByaWdodHMgbm90IGV4cHJlc3NseSBncmFudGVkIHRvIHlvdSBoZXJldW5kZXIgYXJlIHJlc2VydmVkIGJ5IFBhcmtpbmdBZGRhDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9yIGl0cyBzdXBwbGllcnMuIFlvdSBzaGFsbCBub3QgdGFrZSBhbnkgYWN0aW9uIGluY29uc2lzdGVudCB3aXRoIFBhcmtpbmcgQWRkYSdzIG93bmVyc2hpcCBvZiBQYXJraW5nQWRkYSBJUC4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgTmVpdGhlciBwYXJ0eSBzaGFsbCBleGNlZWQgdGhlIHNjb3BlIG9mIHRoZSBsaWNlbnNlcyBncmFudGVkIGhlcmV1bmRlci4gQWxsIGxpY2Vuc2UgcmlnaHRzICh1bmRlciBhbnkgYXBwbGljYWJsZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbnRlbGxlY3R1YWwgcHJvcGVydHkgcmlnaHQpIGdyYW50ZWQgaGVyZWluIGFyZSBub3QgdHJhbnNmZXJhYmxlIG9yIGFzc2lnbmFibGUuDQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxiPlRFUk1JTkFUSU9OPC9iPiA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBVc2VyIGFjY2VzcyB0byBhbGwgb3IgcGFydCBvZiB0aGlzIFdlYnNpdGUgYW5kIFNtYXJ0IFBob25lIEFwcCBtYXkgYmUgdGVybWluYXRlZCBvciBzdXNwZW5kZWQgYXQgYW55IHRpbWUsDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHdpdGhvdXQgbm90aWNlIGFuZCBmb3IgYW55IHJlYXNvbi4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGI+RElTQ0xBSU1FUiBBTkQgTElBQklMSVRZPC9iPiA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUaGUgV2Vic2l0ZSwgdGhlIFdlYnNpdGUgQ29udGVudCwgdGhlIFNtYXJ0IFBob25lIEFwcCwgdGhlIEFQSSwgdGhlIERhdGFCYXNlLCBhbmQgYW55IG90aGVyIG1hdGVyaWFscw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhbmQgcHJvZHVjdHMgb24gdGhpcyBXZWJzaXRlIGFyZSBwcm92aWRlZCAiYXMgaXMiIGFuZCB3aXRob3V0IHdhcnJhbnRpZXMgb2YgYW55IGtpbmQsIHdoZXRoZXIgZXhwcmVzcyBvcg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbXBsaWVkLiBXZSBhc3N1bWUgbm8gcmVzcG9uc2liaWxpdHkgZm9yIHRoZSBhY2N1cmFjeSBvZiBhbnkgaW5mb3JtYXRpb24gY29udGFpbmVkIG9uIG91ciBXZWJzaXRlIGFuZA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBTbWFydCBQaG9uZSBBcHAgZm9yIGFueSBpbnRlcnJ1cHRpb25zIG9yIGVycm9ycyBvciBmb3IgYW55IHZpcnVzZXMgb3Igb3RoZXIgaGFybWZ1bCBjb21wb25lbnRzIGNvbnRhaW5lZC4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgV2UgbWFrZSBubyB3YXJyYW50aWVzIG9yIHJlcHJlc2VudGF0aW9ucyByZWdhcmRpbmcgdGhlIHVzZSBvZiB0aGUgbWF0ZXJpYWxzIGluIHRoaXMgV2Vic2l0ZSBpbiB0ZXJtcyBvZiB0aGVpcg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb3JyZWN0bmVzcywgYWNjdXJhY3ksIGFkZXF1YWN5LCB1c2VmdWxuZXNzLCB0aW1lbGluZXNzLCByZWxpYWJpbGl0eSBvciBvdGhlcndpc2UuIA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBXRSBETyBOT1QgTUFLRSwgQU5EIEhFUkVCWSBESVNDTEFJTSwgQU5ZIEFORCBBTEwgV0FSUkFOVElFUyBPRiBBTlkgS0lORA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBXSVRIIFJFU1BFQ1QgVE8gT1VSIFdFQlNJVEUgT1IgVEhFIFBST0RVQ1RTIE9SIFNFUlZJQ0VTIE9GRkVSRUQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgVEhST1VHSCBPVVIgV0VCU0lURSwgRUlUSEVSIEVYUFJFU1MgT1IgSU1QTElFRCwgSU5DTFVESU5HLCBCVVQgTk9UDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIExJTUlURUQgVE8sIFRIRSBJTVBMSUVEIFdBUlJBTlRJRVMgT0YgTUVSQ0hBTlRBQklMSVRZLCBGSVRORVNTIEZPUiBBDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBBUlRJQ1VMQVIgUFVSUE9TRSwgTk9OLUlORlJJTkdFTUVOVCBPUiBBTlkgV0FSUkFOVElFUyBBUklTSU5HIEZST00gQQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBDT1VSU0UgT0YgUEVSRk9STUFOQ0UsIEEgQ09VUlNFIE9GIERFQUxJTkcgT1IgVFJBREUgVVNBR0UuDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFVOREVSIE5PIENJUkNVTVNUQU5DRVMgV0lMTCBXRSBPUiBPVVIgT0ZGSUNFUlMsIERJUkVDVE9SUywgTUVNQkVSUywNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgTUFOQUdFUlMsIEVNUExPWUVFUywgQUdFTlRTLCBTVVBQTElFUlMgT1IgU1VDQ0VTU09SUyBCRSBMSUFCTEUgVE8gQU5ZDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBFUlNPTiBGT1IgQU5ZIERJUkVDVCwgU1BFQ0lBTCwgSU5DSURFTlRBTCwgUFVOSVRJVkUsIElORElSRUNUIE9SDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIENPTlNFUVVFTlRJQUwgREFNQUdFUyAoSU5DTFVESU5HLCBCVVQgTk9UIExJTUlURUQgVE8sIExPU1MgT0YgUFJPRklUUyBPUg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBSRVZFTlVFUywgTE9TVCBEQVRBIE9SIElORk9STUFUSU9OLCBMT1NTIE9GIFVTRSBPRiBPVVIgV0VCU0lURSBBTkQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgTU9CSUxFIEFQUCwgQlVTSU5FU1MgSU5URVJSVVBUSU9OLCBMT1NTIE9GIEJVU0lORVNTIFJFUFVUQVRJT04gT1INCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgR09PRFdJTEwsIENPU1RTIE9GIFNVQlNUSVRVVEUgU0VSVklDRVMsIE9SIERPV05USU1FIENPU1RTKSBSRUxBVElORyBUTw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBUSEUgV0VCU0lURSBPUiBUSEUgUFJPRFVDVFMgT1IgU0VSVklDRVMgT0ZGRVJFRCBPTiBPVVIgV0VCU0lURSBPUg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBSRVNVTFRJTkcgRlJPTSBBQ0NFU1MgVE8gT1IgT1RIRVIgVVNFIE9GIE9VUiBXRUJTSVRFIE9SIFJFTElBTkNFIE9OIEFOWQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBJTkZPUk1BVElPTiBQUkVTRU5URUQgT04gT1VSIFdFQlNJVEUsIEVWRU4gSUYgV0UgQVJFIElORk9STUVEIElODQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEFEVkFOQ0UgT0YgVEhFIFBPU1NJQklMSVRZIE9GIFNVQ0ggREFNQUdFUyBBTkQgTk9UV0lUSFNUQU5ESU5HIEFOWQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBGQUlMVVJFIE9GIEVTU0VOVElBTCBQVVJQT1NFIE9GIEFOWSBMSU1JVEVEIFJFTUVEWS4gDQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48Yj5HT1ZFUk5JTkcgTEFXPC9iPiA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD5UaGlzIEFncmVlbWVudCBzaGFsbCBiZSBnb3Zlcm5lZCBieSBhbmQgaW50ZXJwcmV0ZWQgaW4gYWNjb3JkYW5jZSB3aXRoIHRoZSBsYXdzIG9mIEhpZ2ggQ291cnQgb2YgTXVtYmFpLA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBNYWhhcmFzaHRyYSwgSW5kaWEsIHdpdGhvdXQgcmVnYXJkIHRvIGl0cyBwcm92aXNpb25zIGdvdmVybmluZyBjb25mbGljdHMgb2YgbGF3LiBJZiB3ZSBhbGxlZ2UgdGhhdCB5b3UgaGF2ZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbmZyaW5nZWQgb3IgdGhyZWF0ZW5lZCB0byBpbmZyaW5nZSBvdXIgaW50ZWxsZWN0dWFsIHByb3BlcnR5IHJpZ2h0cywgdGhlbiwgaW4gYWRkaXRpb24gdG8gYW55IG90aGVyIHJpZ2h0cyBhbmQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVtZWRpZXMgd2UgbWF5IGhhdmUsIHdlIG1heSBzZWVrIGFueSBwcmVsaW1pbmFyeSBvciBwZXJtYW5lbnQgaW5qdW5jdGl2ZSByZWxpZWYgZnJvbSBhbnkgY291cnQgb2YNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29tcGV0ZW50IGp1cmlzZGljdGlvbi4gWW91IHN1Ym1pdCB0byB0aGUgZXhjbHVzaXZlIGp1cmlzZGljdGlvbiBvZiB0aGUgaGlnaCBjb3VydCBsb2NhdGVkIGluIE11bWJhaSwgSW5kaWE8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDQ+PHU+QURESVRJT05BTCBURVJNUyBBTkQgQ09ORElUSU9OUyBTUEVDSUZJQyBUTyBDVVNUT01FUlM8L3U+PC9oND4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+QS4gQm9va2VkIFBhcmtpbmcgVXNhZ2U8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD5Vc2VycyB3aG8gYm9vayBwYXJraW5nIHRocm91Z2ggdGhlIFdlYnNpdGUgb3IgdGhlIFNtYXJ0IFBob25lIEFwcCAoIkN1c3RvbWVycyIpIG11c3QgcHJlc2VudCB0aGUNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFBhcmtpbmdBZGRhIHBhcmtpbmcgcGFzcyBpbiBhY2NvcmRhbmNlIHdpdGggdGhlIGluc3RydWN0aW9ucyBpbmNsdWRlZCB3aXRoIHRoZSBib29raW5nIHRvIHJlY2VpdmUgdGhlaXINCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHBhcmtpbmcgc3BhY2Ugb24gdGhlIGRheSBvZiByZXNlcnZhdGlvbi4gQ3VzdG9tZXJzIGFyZSByZXNwb25zaWJsZSBmb3IgZW5zdXJpbmcgdGhleSBhcnJpdmUgYXQgdGhlaXIgYm9va2VkDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYXJraW5nIGxvY2F0aW9uLiBQYXJraW5nQWRkYSBpcyBub3QgbGlhYmxlIGZvciByb2FkIGNsb3N1cmVzIG9yIGNoYW5naW5nIHRyYWZmaWMgY29uZGl0aW9ucy48L3A+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+VGhlIHBhcmtpbmcgYm9va2VkIGlzIHZhbGlkIG9ubHkgZm9yIHRoZSB0aW1lcyBsaXN0ZWQgb24gdGhlIHBhcmtpbmcgcGFzcy48L3A+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD5SZXNhbGUgb2YgUGFya2luZ0FkZGEgcGFya2luZyBwYXNzZXMgaXMgbm90IHBlcm1pdHRlZC48L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD5CLiBDYW5jZWxsYXRpb25zIGFuZCBSZWZ1bmRzPC9wPg0KDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPlBhcmtpbmcgYm9va2VkIHRocm91Z2ggUGFya2luZ0FkZGEgU21hcnQgUGhvbmUgQXBwIG9yIHdlYnNpdGUgaXMgZnVsbHkgcmVmdW5kYWJsZSB1cCB0byAyNCBob3VycyBiZWZvcmUNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhlIHN0YXJ0IG9mIHRoZSByZXNlcnZhdGlvbiB1bmxlc3Mgbm90ZWQgb3RoZXJ3aXNlLiBQYXJraW5nIGN1c3RvbWVycyBjYW4gY2FuY2VsIHRoZWlyIGJvb2tpbmcgZm9yIGFueSByZWFzb24NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYmVmb3JlIHRoaXMgdGltZS4gQ2FuY2VsbGF0aW9ucyBtdXN0IGJlIHN1Ym1pdHRlZCB0byB0aGUgUGFya2luZ0FkZGEgU21hcnQgUGhvbmUgQXBwLCBhbmQgYXJlIG5vdA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhY2NlcHRlZCB2aWEgcGhvbmUgb3IgZW1haWwuIFBhcmtpbmcgYm9va2VkIHZpYSBQYXJraW5nIEFkZGHigJlzIHBhcnRuZXIgd2Vic2l0ZXMgb3IgdGhlIFNtYXJ0IFBob25lIEFwcA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpcyBub3QgcmVmdW5kYWJsZSBmb3IgYW55IHJlYXNvbi4gQWZ0ZXIgMjQgaG91cnMgcHJpb3IgdG8gdGhlIHN0YXJ0IG9mIHRoZSBwYXJraW5nIHJlc2VydmF0aW9uLCBhbGwgYm9va2luZ3MgYXJlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG5vbi1yZWZ1bmRhYmxlLCBldmVuIGlmIHRoZSBDdXN0b21lciB3YXMgdW5hYmxlIHRvIHVzZSB0aGUgcGFya2luZzwvcD4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+Qy4gRXZlbnQgQ2FuY2VsbGF0aW9ucyBhbmQgQ29udGluZ2VudCBFdmVudHM8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+VW5mb3J0dW5hdGVseSwgdGhlIGNpcmN1bXN0YW5jZXMgc3Vycm91bmRpbmcgcG9zdHBvbmVkIGV2ZW50cyBhcmUgdW5wcmVkaWN0YWJsZS4gQWx0aG91Z2ggd2Ugd2lsbCB0cnkgdG8NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaGVscCB5b3UgcmVzb2x2ZSB5b3VyIHBhcmtpbmcgc2l0dWF0aW9uLCB3ZSBhcmUgbm90IHJlc3BvbnNpYmxlIGZvciBwb3N0cG9uZWQgZXZlbnRzLCBwYXJ0aWFsIHBlcmZvcm1hbmNlcywNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb3IgdmVudWUsIGRhdGUsIG9yIHRpbWUgY2hhbmdlcy4gTm8gcmVmdW5kcyB3aWxsIGJlIGlzc3VlZC48L3A+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+QWZ0ZXIgMjQgaG91cnMgcHJpb3IgdG8gdGhlIHN0YXJ0IG9mIHRoZSBwYXJraW5nIHJlc2VydmF0aW9uLCBhbGwgYm9va2luZ3MgYXJlIG5vbi1yZWZ1bmRhYmxlLCBldmVuIGlmIHRoZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBDdXN0b21lciB3YXMgdW5hYmxlIHRvIHVzZSB0aGUgcGFya2luZy48L3A+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGI+SU5ERU1OSVRZPC9iPiA8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD5Zb3UgYWdyZWUgdG8gaW5kZW1uaWZ5IGFuZCBob2xkIFBhcmtpbmdBZGRhIGFuZCAoaWYgYXBwbGljYWJsZSkgYW55IHBhcmVudCwgc3Vic2lkaWFyaWVzLCBhZmZpbGlhdGVzLCBvZmZpY2VycywNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGlyZWN0b3JzLCBsYXd5ZXJzLCBhZ2VudHMgYW5kIGVtcGxveWVlcywgaGFybWxlc3MgYWdhaW5zdCBhbnkgY2xhaW0gb3IgZGVtYW5kIGFuZCBhbGwgbGlhYmlsaXRpZXMsIGNvc3RzIGFuZA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBleHBlbnNlcyAoaW5jbHVkaW5nIHJlYXNvbmFibGUgbGF3eWVycydzIGZlZXMpIGluY3VycmVkIGJ5IFBhcmtpbmcgQWRkYTsgYW5kIChpZiBhcHBsaWNhYmxlKSBhbnkgcGFyZW50cywNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3Vic2lkaWFyaWVzLCBhZmZpbGlhdGVzLCBvZmZpY2VycywgZGlyZWN0b3JzLCBhZ2VudHMsIGxhd3llcnMgYW5kIGVtcGxveWVlcyB0aGF0IGFyaXNlIG91dCBvZiBhbnkgY2xhaW0gYXNzZXJ0ZWQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYnkgYSB0aGlyZCBwYXJ0eSB0aGF0IGludm9sdmVzLCByZWxhdGVzIHRvIG9yIGNvbmNlcm5zIGFueSBvZiB5b3VyIGFjdGlvbnMgb3Igb21pc3Npb25zIG9uIHRoaXMgV2Vic2l0ZSwgaW5jbHVkaW5nDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJ1dCBub3QgbGltaXRlZCB0byB5b3VyIGJyZWFjaCBvZiB0aGlzIEFncmVlbWVudCwgb3IgeW91ciB2aW9sYXRpb24gb2YgYW55IGxhdyBvciB0aGUgcmlnaHRzIG9mIGEgdGhpcmQgcGFydHkuPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48Yj5DT05UQUNUIFVTPC9iPjwvbGk+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+VGhlIGFib3ZlIHBvbGljaWVzIG1heSBiZSBzdXBlcnNlZGVkIGJ5IHJlcXVpcmVtZW50cyBvciBvYmxpZ2F0aW9ucyBpbXBvc2VkIGJ5IHN0YXR1dGUsIHJlZ3VsYXRpb24sIG9yIGxlZ2FsDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHByb2Nlc3MuIElmIHlvdSBoYXZlIGFueSBxdWVzdGlvbnMgb3IgY29uY2VybnMgcmVnYXJkaW5nIG91ciB1c2FnZSBhZ3JlZW1lbnQsIHBsZWFzZSBlbWFpbCB1cyBhdA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA6IDxhIGhyZWY9IiMiPmN1c3RvbWVyc3VwcG9ydEBwYXJraW5nYWRkYS5jb208L2E+PC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgPC9vbD4NCiAgICAgICAgICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICA8L2Rpdj4NCiAgICA8L3NlY3Rpb24+', 1, 1, '2022-05-21 10:57:59', '2022-05-21 10:57:59');
INSERT INTO `tbl_about_us` (`id`, `module`, `title`, `details`, `type`, `is_deleted`, `created_at`, `updated_at`) VALUES
(2, 1, 'Privacy and Policy', 'PHNlY3Rpb24gaWQ9ImFib3V0LXVzIiBzdHlsZT0iZm9udC1mYW1pbHk6ICdWYXJlbGEgUm91bmQnLCBzYW5zLXNlcmlmOyI+DQogICAgICAgIDxkaXYgY2xhc3M9ImNvbnRhaW5lciI+DQogICAgICAgICAgICANCiAgICAgICAgICAgICAgICA8ZGl2IGRhdGEtYW9zPSJmYWRlLWxlZnQiPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGgyPjxiPkNPTU1JVE1FTlQgVE8gUFJJVkFDWTwvYj48L2gyPg0KICAgICAgICAgICAgICAgICAgICAgICAgPHA+DQogICAgICAgICAgICAgICAgICAgICAgICBQcm90ZWN0aW5nIHlvdXIgcGVyc29uYWwgZGF0YSBpcyBpbXBvcnRhbnQgdG8gUGFya2luZ0FkZGEgUHZ0IEx0ZC4sIChoZXJlaW5hZnRlcjog4oCcV2XigJ0sDQogICAgICAgICAgICAgICAgICAgICAgICDigJxVc+KAnSDigJxPdXLigJ0pIGFuZCB0byBvdXIgYnVzaW5lc3MgcHJhY3RpY2VzLCBpbiBjb21wbGlhbmNlIHdpdGggdGhlIHBlcnRhaW5pbmcgbGF3cyBvbg0KICAgICAgICAgICAgICAgICAgICAgICAgcHJpdmFjeSwgZGF0YSBwcm90ZWN0aW9uIGFuZCBkYXRhIHNlY3VyaXR5LiBUaGUgc3RhdGVtZW50IGJlbG93IG91dGxpbmVzIGhvdyB3ZSBtYXkNCiAgICAgICAgICAgICAgICAgICAgICAgIGNvbGxlY3QsIHVzZSBhbmQgc2FmZWd1YXJkIHRoYXQgaW5mb3JtYXRpb24gYW5kIHdpdGggd2hvbSB3ZSBtYXkgc2hhcmUgaXQuIFRoaXMNCiAgICAgICAgICAgICAgICAgICAgICAgIFByaXZhY3kgU3RhdGVtZW50IGFsc28gY292ZXJzIHdlYnNpdGVzIG1hbmFnZWQgYnkgdXMuIFdlIGVuY291cmFnZSB5b3UgdG8gcmVhZCBpdA0KICAgICAgICAgICAgICAgICAgICAgICAgYW5kIHRoZSBwb2xpY2llcyBvZiBhbGwgd2Vic2l0ZXMgeW91IG1heSB2aXNpdC4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvcD4gDQogICAgICAgICAgICAgICAgICAgICAgICA8b2w+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPkRBVEEgUFJPQ0VTU0lORyBJTiBSRUxBVElPTiBPRiBDT05UUkFDVDwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPjEuMS4gUFVSUE9TRSBPRiBEQVRBIFBST0NFU1NJTkc8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBXZSBtaWdodCBwcm9jZXNzIHlvdXIgZGF0YSBmb3IgdGhlIHByZXBhcmF0aW9uLCBjb25jbHVzaW9uLCBwZXJmb3JtYW5jZSBhbmQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGVybWluYXRpb24gb2YgYSBjb250cmFjdCBhbmQgaW4gb3JkZXIgdG8gYmUgYWJsZSB0byBjb250YWN0IHlvdSBkdXJpbmcgdGhlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbnRyYWN0aW5nIHBlcmlvZC4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEFjY29yZGluZyB0byB0aGUgcHJpbmNpcGxlIG9mIGRhdGEgbWluaW1pc2F0aW9uLCB0aGUgZGF0YSBvZiB0aGUgbmF0dXJhbCBwZXJzb24NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29udHJhY3RlZCBhcyBhIHB1cmNoYXNlciBvciBhcyBhIHN1cHBsaWVyLCBhcmUgb25seSBwcm9jZXNzZWQgb24gYSBjYXNlLWJ5Y2FzZSBiYXNpcywgYXMgdGhlIGN1c3RvbWVy4oCZcyBuYW1lLCB0ZWxlcGhvbmUgbnVtYmVyLCBlLW1haWwgYWRkcmVzcyBhbmQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb25saW5lIGlkZW50aWZpZXIgKGJ1eWVyLCBzdXBwbGllciBsaXN0LCBsb3lhbHR5IGxpc3QpLiBUaGlzIGRhdGEgcHJvY2Vzc2luZyBpcw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25zaWRlcmVkIGxlZ2l0aW1hdGUgZXZlbiBpZiB0aGUgZGF0YSBwcm9jZXNzaW5nIGlzIG5lY2Vzc2FyeSBiZWZvcmUgdGhlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbnRyYWN0IGlzIGNvbmNsdWRlZCB0byB0YWtlIGFjdGlvbiBvbiB0aGUgcmVxdWVzdCBvZiB0aGUgcGVyc29uIGNvbmNlcm5lZC4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD4xLjIuIFNDT1BFIE9GIFBST0NFU1NFRCBEQVRBPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPkN1c3RvbWVyIGNvbnRhY3QgbmFtZSwgcGhvbmUgbnVtYmVyLCBlLW1haWwgYWRkcmVzcywgVmVoaWNsZSBSZWdpc3RyYXRpb24NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBOdW1iZXI8L3A+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+MS4zLiBSRVRFTlRJT04gVElNRSBPRiBQUk9DRVNTRUQgREFUQTwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD5UaGUgZHVyYXRpb24gb2YgdGhlIGRhdGEgcHJvY2Vzc2luZyBiZWdpbnMgYXQgdGhlIHRpbWUgb2YgdGhlIGZpcnN0IGFwcGVhcmFuY2UNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBvZiB5b3VyIHBlcnNvbmFsIGRhdGEgYW5kIGxhc3RzIHVudGlsIHRoZSBjaGFuZ2Ugb2YgeW91ciBkYXRhIG9yIGV2ZW4gYWZ0ZXIgdGhlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgdGVybWluYXRpb24gb2Ygb3VyIGNvbnRyYWN0IGZvciBhIGRlZmluZWQgcGVyaW9kIG9mIHRpbWUuIFdlIHdpbGwgcmV0YWluIHRoZSBkYXRhIA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHVudGlsIHRoZSBkZWFkbGluZSBmb3IgZW5mb3JjaW5nIGxlZ2FsIGNsYWltcyBpbiByZWxhdGlvbiB0byBhIGNvbnRyYWN0IG9yIGZvciA1IHllYXJzDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgYWZ0ZXIgb3VyIGxhc3Qgc3VjY2Vzc2Z1bCBjb250YWN0LiBUaGUgcHVycG9zZSBvZiBzdWNoIHJldGVudGlvbiBpcyB0byBiZSBhYmxlIHRvDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgcmUtZW5nYWdlIHdpdGggeW91LjwvcD4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPjEuNC4gUE9TU0lCTEUgQ09OU0VRVUVOQ0VTIE9GIEZBSUxVUkUgVE8gUFJPVklERSBEQVRBPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPlNwZWNpZnlpbmcgeW91ciBkYXRhIGlzIHJlcXVpcmVkIHRvIGVzdGFibGlzaCBhIGNvbnRyYWN0dWFsIHJlbGF0aW9uc2hpcCBhbmQgdG8NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBtYWludGFpbiBjb250YWN0IHdpdGggeW91LjwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+SWYgeW91IGRvIG5vdCBwcm92aWRlIHlvdXIgbmVjZXNzYXJ5IHBlcnNvbmFsIGRhdGEsIGl0IGlzIG5vdCBwb3NzaWJsZSB0bw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbmNsdWRlIGEgY29udHJhY3QgYW5kIG1haW50YWluIGJ1c2luZXNzIHJlbGF0aW9uc2hpcC48L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPlJlZ2lzdHJhdGlvbiB3aXRoIEtZQyBkZXRhaWxzIGlzIG1hbmRhdG9yeSBmb3IgVmVuZG9ycy48L3A+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD4xLjUuIERBVEEgVFJBTlNNSVNTSU9OPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPldlIHdpbGwgbm90IGZvcndhcmQgeW91ciBwZXJzb25hbCBkYXRhIHRvIHRoaXJkIHBhcnRpZXMgZXhjZXB0IGluIHRoZSBmb2xsb3dpbmcNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2FzZXM6PC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD5hKSBEYXRhIHByb2Nlc3NvcnMgb2Ygb3VyIGFmZmlsaWF0ZWQgY29tcGFuaWVzIGFuZCBvdXIgbG9jYWwgZGlzdHJpYnV0b3JzLDwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+YikgSWYgdGhlIHRyYW5zbWlzc2lvbiBvZiB0aGUgZGF0YSB0byBhIHRoaXJkIHBhcnR5IGlzIG5lY2Vzc2FyeSB0byBwcm92aWRlIHlvdQ0Kd2l0aCB0aGUgcmVxdWVzdGVkIHByb3Bvc2FscyBhbmQgc2VydmljZXMuPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5TVVBQT1JUIFJFR0lTVFJBVElPTjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPjIuMS4gUFVSUE9TRSBPRiBEQVRBIFBST0NFU1NJTkc8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+Q29udGFjdCBiZXR3ZWVuIG91ciBjdXN0b21lciBhbmQgdXMgdG8gYmUgYWJsZSB0byBwcm92aWRlIG91ciBzZXJ2aWNlcyB0bw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHlvdSDigJMgd2hpY2ggaW5jbHVkZXMgdXBkYXRpbmcsIHNlY3VyaW5nIGFuZCB0cm91Ymxlc2hvb3RpbmcsIGFzIHdlbGwgYXMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBwcm92aWRpbmcgc3VwcG9ydC4gSXQgYWxzbyBpbmNsdWRlczwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dWw+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5TaGFyaW5nIGRhdGEsIHdoZW4gaXQgaXMgcmVxdWlyZWQgdG8gcHJvdmlkZSB0aGUgc2VydmljZSBvciBjYXJyeSBvdXQgdGhlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRyYW5zYWN0aW9ucyB5b3UgcmVxdWVzdC48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+IEltcHJvdmUgYW5kIGRldmVsb3Agb3VyIHNlcnZpY2VzLjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5QZXJzb25hbGlzZSBvdXIgc2VydmljZXMgYW5kIG1ha2UgcmVjb21tZW5kYXRpb25zLjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5BZHZlcnRpc2UgYW5kIG1hcmtldCB0byB5b3UsIHdoaWNoIGluY2x1ZGVzIHNlbmRpbmcgcHJvbW90aW9uYWwNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29tbXVuaWNhdGlvbnMsIHRhcmdldGluZyBhZHZlcnRpc2luZyBhbmQgcHJlc2VudGluZyB5b3Ugd2l0aCByZWxldmFudCBvZmZlcnMuPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3VsPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD4yLjIuIFNDT1BFIE9GIFBST0NFU1NFRCBEQVRBPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPkN1c3RvbWVyIGNvbnRhY3QgbmFtZSwgZS1tYWlsIGFkZHJlc3MsIGNvdW50cnkgYW5kIHBob25lIG51bWJlci48L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPjIuMy4gUkVURU5USU9OIFRJTUUgT0YgUFJPQ0VTU0VEIERBVEE8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+VGhlIGR1cmF0aW9uIG9mIHRoZSBkYXRhIHByb2Nlc3NpbmcgYmVnaW5zIGF0IHRoZSB0aW1lIG9mIHRoZSBmaXJzdCBhcHBlYXJhbmNlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgb2YgeW91ciBwZXJzb25hbCBkYXRhIGFuZCBsYXN0cyB1bnRpbCB0aGUgY2hhbmdlIG9mIHlvdXIgZGF0YSBvciBldmVuIGFmdGVyIHRoZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRlcm1pbmF0aW9uIG9mIG91ciBjb250cmFjdCBmb3IgYSBkZWZpbmVkIHBlcmlvZCBvZiB0aW1lLiBXZSB3aWxsIHJldGFpbiB0aGUgZGF0YQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHVudGlsIHRoZSBkZWFkbGluZSBmb3IgZW5mb3JjaW5nIGxlZ2FsIGNsYWltcyBpbiByZWxhdGlvbiB0byBhIGNvbnRyYWN0IG9yIGZvciA1IHllYXJzDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgYWZ0ZXIgb3VyIGxhc3Qgc3VwcG9ydCBzZXJ2aWNlIGNvbnRhY3Q8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPjIuNC4gUE9TU0lCTEUgQ09OU0VRVUVOQ0VTIE9GIEZBSUxVUkUgVE8gUFJPVklERSBEQVRBPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPklmIHlvdSBkbyBub3QgcHJvdmlkZSB0aGUgcmVxdWVzdGVkIGRhdGEsIHlvdSBhcmUgbm90IGVudGl0bGVkIHRvIHVzZSBvdXIgc3VwcG9ydA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNlcnZpY2Ugc3lzdGVtPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD4yLjUuIERBVEEgVFJBTlNNSVNTSU9OPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPldlIHdpbGwgbm90IGZvcndhcmQgeW91ciBwZXJzb25hbCBkYXRhIHRvIHRoaXJkIHBhcnRpZXMgZXhjZXB0IGluIHRoZSBmb2xsb3dpbmcNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjYXNlczo8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHVsPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+RGF0YSBwcm9jZXNzb3JzIG9mIG91ciBhZmZpbGlhdGVkIGNvbXBhbmllcyBhbmQgb3VyIGxvY2FsIGRpc3RyaWJ1dG9ycyw8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+SWYgdGhlIHRyYW5zbWlzc2lvbiBvZiB0aGUgZGF0YSB0byBhIHRoaXJkIHBhcnR5IGlzIG5lY2Vzc2FyeSB0byBwcm92aWRlIHlvdQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aXRoIHRoZSByZXF1ZXN0ZWQgc3VwcG9ydCBzZXJ2aWNlcy48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdWw+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5WSVNJVElORyBPVVIgV0VCU0lURVM8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD4zLjEuIFBFUlNPTkFMIERBVEE8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+VGhyb3VnaCBvdXIgd2Vic2l0ZSwgd2UgZG8gbm90IGNvbGxlY3QgYW55IHBlcnNvbmFsbHkgaWRlbnRpZmlhYmxlIGluZm9ybWF0aW9uDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgYWJvdXQgeW91IChpLmUuOiB5b3VyIG5hbWUsIGFkZHJlc3MsIHBob25lIG51bWJlciBvciBlbWFpbCwgY291bnRyeSwgZXRjLikNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB1bmxlc3MgeW91IHZvbHVudGFyaWx5IGRpc2Nsb3NlIGl0IHRvIHVzIHRocm91Z2ggcmVnaXN0cmF0aW9uLCBpbiBhIHN1cnZleSBvciBieQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGVtYWlsLiBJZiB5b3UgZG8gbm90IHdhbnQgeW91ciBwZXJzb25hbCBkYXRhIGNvbGxlY3RlZCwgcGxlYXNlIGRvIG5vdCBzdWJtaXQgaXQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0byB1cy4gSWYgeW91IHByb3ZpZGUgeW91ciBwZXJzb25hbCBkYXRhLCB3ZSB1c3VhbGx5IHVzZSBpdCB0byByZXNwb25kIHRvIHlvdXINCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpbnF1aXJ5LCBwcm9jZXNzIHlvdXIgb3JkZXIgb3Igb2ZmZXIgYWNjZXNzIHRvIHNwZWNpZmljIGFjY291bnQgaW5mb3JtYXRpb24uIEFsc28sDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgdG8gc3VwcG9ydCBvdXIgY3VzdG9tZXIgcmVsYXRpb25zaGlwIHdpdGggeW91OiAoYSkgd2UgbWF5IHN0b3JlIGFuZCBwcm9jZXNzDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgcGVyc29uYWwgZGF0YSBhbmQgc2hhcmUgaXQgd2l0aCBvdXIgYWZmaWxpYXRlcyB0byBiZXR0ZXIgdW5kZXJzdGFuZCB5b3VyIGJ1c2luZXNzDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgbmVlZHMsIHRvIGltcHJvdmUgb3VyIHByb2R1Y3RzIGFuZCBzZXJ2aWNlcy48L3A+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+My4yLiBBVVRPTUFUSUNBTExZIENPTExFQ1RFRCBOT04tUEVSU09OQUwgREFUQSBUSFJPVUdIDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgQ09PS0lFUzwvcD4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPldoZW4geW91IGFjY2VzcyBvdXIgd2Vic2l0ZSwgd2UgbWF5IGF1dG9tYXRpY2FsbHkgKGkuZS46IG5vdCB0aHJvdWdoDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgcmVnaXN0cmF0aW9uKSBjb2xsZWN0IGluZm9ybWF0aW9uIHNvIGNhbGxlZCBjb29raWVzIG9uIHlvdXIgZGV2aWNlLiBDb29raWVzIGFyZQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNtYWxsIHRleHQgZmlsZXMgdGhhdCBzdG9yZSBkYXRhIHRoYXQgY2FuIGJlIHJlY2FsbGVkIGJ5IGEgd2ViIHNlcnZlciBpbiB0aGUgZG9tYWluDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhhdCBwbGFjZWQgdGhlIGNvb2tpZS4gV2UgdXNlIGNvb2tpZXMgYW5kIHNpbWlsYXIgdGVjaG5vbG9naWVzIGZvciBzdG9yaW5nIGFuZA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhvbm9yaW5nIHlvdXIgcHJlZmVyZW5jZXMgYW5kIHNldHRpbmdzLCBlbmFibGluZyB5b3UgdG8gc2lnbiBpbiwgcHJvdmlkaW5nDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgaW50ZXJlc3QtYmFzZWQgYWR2ZXJ0aXNpbmcsIGNvbWJhdGluZyBmcmF1ZCwgYW5hbHlzaW5nIGhvdyBvdXIgcHJvZHVjdHMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBwZXJmb3JtIGFuZCBmdWxmaWxsaW5nIG90aGVyIGxlZ2l0aW1hdGUgcHVycG9zZXMuIFRoZSBpbmZvcm1hdGlvbiBnYWluZWQgdGhyb3VnaA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRoaXMgbWV0aG9kIGlzIG5vdCBwZXJzb25hbGx5IGlkZW50aWZpYWJsZSAoZS5nLjogdHlwZSBvZiBicm93c2VyIGFuZCBjb21wdXRlcg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9wZXJhdGluZyBzeXN0ZW0gdXNlZDsgZG9tYWluIG5hbWUgb2YgdGhlIHdlYnNpdGUgZnJvbSB3aGljaCB5b3UgYXJyaXZlZDsNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1iZXIgb2YgdmlzaXRzLCBhdmVyYWdlIHRpbWUgc3BlbnQsIHBhZ2VzIHZpZXdlZCkgYnV0IGhlbHBzIHVzIGltcHJvdmUgdGhlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb25pbmcgb2Ygb3VyIHdlYnNpdGUgYW5kIHByb3ZpZGUgeW91IHdpdGggYW4gb3B0aW1hbCB1c2VyIGV4cGVyaWVuY2UuDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgWW91IGNhbiBlYXNpbHkgcmVtb3ZlIHRoZXNlIGNvb2tpZXMgdGhyb3VnaCB5b3VyIHdlYiBicm93c2VyKHMpIHNldHRpbmdzIGFuZA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1heSBhbHNvIHNldCB0aGVyZSB3aGV0aGVyIHRvIGFsbG93IGNvb2tpZXMgdG8gYmUgcGxhY2VkIG9uIHlvdXIgY29tcHV0ZXIgYnkNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aGUgc2l0ZXMgeW91IHZpc2l0LiBIb3dldmVyLCB3ZSBhbHNvIG5vdGUgdGhhdCBjZXJ0YWluIHNpdGUgZmVhdHVyZXMgb3Igc2VydmljZXMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBtYXkgbm90IGZ1bmN0aW9uIHByb3Blcmx5IHdpdGhvdXQgY29va2llcy48L3A+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+My4zLiBMSU5LUyBUTyBPVEhFUiBTSVRFUzwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD5PdXIgd2Vic2l0ZSBtYXkgaGF2ZSBsaW5rcyB0byBvdGhlciBzaXRlcy4gV2UgZG8gbm90IGNvbnRyb2wgdGhlIGluZm9ybWF0aW9uDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgY29sbGVjdGVkIG9uIHRoZSBzaXRlcyB0aGF0IGNhbiBiZSByZWFjaGVkIHRocm91Z2ggc3VjaCBsaW5rcy4gSWYgeW91IGhhdmUNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBxdWVzdGlvbnMgYWJvdXQgdGhlIGRhdGEgY29sbGVjdGlvbiBwcmFjdGljZXMgb2YgdGhlIGxpbmtlZCBzaXRlcywgcGxlYXNlIGNvbnRhY3QNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aG9zZSBjb21wYW5pZXMgZGlyZWN0bHkuPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPjMuNC4gVU5ERVJBR0UgVVNFUlM8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+Tm8gcGVyc29uYWwgZGF0YSBzaG91bGQgYmUgc3VibWl0dGVkIHRvIHVzIGJ5IHVuZGVyYWdlIHVzZXJzIHdpdGhvdXQgdGhlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uc2VudCBvZiB0aGVpciBwYXJlbnRzIG9yIGd1YXJkaWFucy4gV2UgZW5jb3VyYWdlIGFsbCBwYXJlbnRzIG9yIGd1YXJkaWFucw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRvIGluc3RydWN0IHRoZWlyIGNoaWxkcmVuIGluIHRoZSBzYWZlIGFuZCByZXNwb25zaWJsZSB1c2Ugb2YgdGhlaXIgcGVyc29uYWwgZGF0YQ0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9uIHRoZSBJbnRlcm5ldC4gV2UgZG8gbm90IGtub3dpbmdseSBjb2xsZWN0IG9yIHVzZSBhbnkgcGVyc29uYWwgZGF0YSBmcm9tIA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHVuZGVyYWdlIHVzZXJzIGZvciBhbnkgcHVycG9zZSB3aGF0c29ldmVyLCBpbmNsdWRpbmcgdGhlIGRpc2Nsb3N1cmUgdG8gdGhpcmQNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBwYXJ0aWVzLjwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+REFUQSBTRUNVUklUWTwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPldlIHdpbGwgdGFrZSB0aGUgbmVjZXNzYXJ5IHRlY2huaWNhbCBhbmQgb3JnYW5pemF0aW9uYWwgc3RlcHMgYW5kIGVzdGFibGlzaA0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFwcHJvcHJpYXRlIHJ1bGVzIHRvIGVuc3VyZSB0aGUgc2VjdXJpdHkgb2YgeW91ciBwZXJzb25hbCBkYXRhLjwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD5XZSBzZWxlY3QgYW5kIG9wZXJhdGUgdGhlIElUIHRvb2xzIHVzZWQgdG8gbWFuYWdlIHlvdXIgcGVyc29uYWwgZGF0YSBzbyB0aGF0DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgdGhlIGRhdGEgcHJvY2Vzc2VkOjwvcD4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPuKAkyByZW1haW5zIGFjY2Vzc2libGUgdG8gdGhlIGF1dGhvcml6ZWQgcGVyc29uIG9ubHkgKGF2YWlsYWJpbGl0eSk7PC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPuKAkyBoYXMgYXNzdXJhbmNlIG9mIGF1dGhlbnRpY2l0eSBhbmQgYXV0aGVudGljYXRpb24gKGNyZWRpYmlsaXR5IG9mIGRhdGENCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBtYW5hZ2VtZW50KTs8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+4oCTIGhhcyBhc3N1cmFuY2Ugb2YgdGhlIGFjY3VyYWN5IGFuZCBjb25zaXN0ZW5jeSAoZGF0YSBpbnRlZ3JpdHkpOzwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD7igJMgaXMgcHJvdGVjdGVkIGFnYWluc3QgdW5hdXRob3JpemVkIGFjY2VzcyAoY29uZmlkZW50aWFsaXR5IG9mIGRhdGEpLg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIFdlIGFsc28gZW5zdXJlIHRoYXQ6PC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPldlIGltcGxlbWVudCBhIHZhcmlldHkgb2Ygc2VjdXJpdHkgbWVhc3VyZXMgdG8gbWFpbnRhaW4gdGhlIHNhZmV0eSBvZiB5b3VyDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgcGVyc29uYWwgaW5mb3JtYXRpb24gd2hlbiB5b3UgcGxhY2UgYW4gb3JkZXIgb3IgZW50ZXIsIHN1Ym1pdCwgb3IgYWNjZXNzIHlvdXINCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBwZXJzb25hbCBpbmZvcm1hdGlvbjwvcD4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxicj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD5BbGwgc3VwcGxpZWQgc2Vuc2l0aXZlL2NyZWRpdCBpbmZvcm1hdGlvbiBpcyB0cmFuc21pdHRlZCB2aWEgU2VjdXJlIFNvY2tldCBMYXllcg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIChTU0wpIHRlY2hub2xvZ3kgYW5kIHRoZW4gZW5jcnlwdGVkIGludG8gb3VyIFBheW1lbnQgZ2F0ZXdheSBwcm92aWRlcnMNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAoUmF6b3JwYXksIFphYWtwYXkpIGRhdGFiYXNlIG9ubHkgdG8gYmUgYWNjZXNzaWJsZSBieSB0aG9zZSBhdXRob3JpemVkIHdpdGgNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzcGVjaWFsIGFjY2VzcyByaWdodHMgdG8gc3VjaCBzeXN0ZW1zLCBhbmQgYXJlIHJlcXVpcmVkIHRvIGtlZXAgdGhlDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgaW5mb3JtYXRpb24gY29uZmlkZW50aWFsLjwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPlRFUk1TIEFORCBDT05ESVRJT05TPC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD5QbGVhc2UgYWxzbyB2aXNpdCBvdXIgVGVybXMgYW5kIENvbmRpdGlvbnMgc2VjdGlvbiBlc3RhYmxpc2hpbmcgdGhlIHVzZSwNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICBkaXNjbGFpbWVycywgYW5kIGxpbWl0YXRpb25zIG9mIGxpYWJpbGl0eSBnb3Zlcm5pbmcgdGhlIHVzZSBvZiBvdXIgd2Vic2l0ZSBhdCBUJkM8L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGJyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT5DSEFOR0VTIFRPIE9VUiBQUklWQUNZIFBPTElDWTwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+SWYgd2UgZGVjaWRlIHRvIGNoYW5nZSBvdXIgcHJpdmFjeSBwb2xpY3ksIHdlIHdpbGwgbWFrZSBjaGFuZ2VzIG9uIHRoaXMgcGFnZTwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YnI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPkNPTlRBQ1RJTkcgVVM8L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwPklmIHRoZXJlIGFyZSBhbnkgcXVlc3Rpb25zIHJlZ2FyZGluZyB0aGlzIHByaXZhY3kgcG9saWN5IHlvdSBtYXkgY29udGFjdCB1cyB1c2luZw0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRoZSBpbmZvcm1hdGlvbiBiZWxvdy48L3A+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgRW1haWw6IDxhIGhyZWY9IiMiPmN1c3RvbWVyc3VwcG9ydEBwYXJraW5nYWRkYS5jb208L2E+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgIDwvb2w+IA0KICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICA8L2Rpdj4NCiAgICA8L3NlY3Rpb24+', 2, 1, '2022-05-21 10:57:59', '2022-05-21 10:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banners`
--

CREATE TABLE `tbl_banners` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` text CHARACTER SET utf32 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_banners`
--

INSERT INTO `tbl_banners` (`id`, `image_name`, `img_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'firs banner', 'uploads/Appbanners/banner.png', 1, '2022-07-04 07:19:41', '2022-07-04 07:19:41'),
(2, '2nd banner', 'uploads/Appbanners/banner2.jpg', 1, '2022-07-04 07:21:51', '2022-07-04 07:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mansi palkar', 'mansipalkar19@stzsoft.com', 'hello', '2022-07-29 10:48:09', '2022-07-29 10:48:09'),
(2, 'mansi', 'mansipalkar19@gmail.com', 'abc', '2022-08-03 14:30:59', '2022-08-03 14:30:59'),
(3, 'mansi', 'mansipalkar@stzsoft.com', 'demo', '2022-08-03 15:36:37', '2022-08-03 15:36:37'),
(4, 'mansi', 'mansipalkar19@gmail.com', 'abc', '2022-08-03 15:37:09', '2022-08-03 15:37:09'),
(5, 'mansi', 'mansipalkar@stzsoft.com', 'dfdsf', '2022-08-03 15:38:03', '2022-08-03 15:38:03'),
(6, 'mansi', 'mansipalkar@stzsoft.com', 'dsds', '2022-08-03 15:38:57', '2022-08-03 15:38:57'),
(7, 'mansi', 'mansipalkar@stzsoft.com', 'abc', '2022-08-03 15:40:37', '2022-08-03 15:40:37'),
(8, 'mansi', 'mansipalkar@stzsoft.com', 'wderrf', '2022-08-03 15:42:10', '2022-08-03 15:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delivery_rate`
--

CREATE TABLE `tbl_delivery_rate` (
  `id` bigint(20) NOT NULL,
  `from_km` varchar(50) DEFAULT NULL,
  `to_km` varchar(50) DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `status` enum('1','0') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_delivery_rate`
--

INSERT INTO `tbl_delivery_rate` (`id`, `from_km`, `to_km`, `rate`, `status`, `created_at`, `updated_at`) VALUES
(1, '0', '10', 10, '1', '2022-07-23 04:14:58', '2022-07-23 05:02:40'),
(2, '10', '20', 20, '1', '2022-07-23 04:15:55', '2022-07-23 05:02:52'),
(3, '20', '30', 30, '1', '2022-07-23 04:16:06', '2022-07-23 05:03:04'),
(4, '30', '40', 40, '1', '2022-07-23 04:16:57', '2022-07-23 05:03:13'),
(5, '40', '50', 50, '1', '2022-07-23 04:17:17', '2022-07-23 05:03:22'),
(6, '50', NULL, 50, '1', '2022-07-23 05:30:04', '2022-07-23 05:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `id` int(11) NOT NULL,
  `lang_name` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `lang_name`, `created_at`) VALUES
(1, 'English', '2022-07-06 17:11:35'),
(2, 'Arabic', '2022-07-06 17:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_status`
--

CREATE TABLE `tbl_order_status` (
  `id` bigint(20) NOT NULL,
  `fk_order_id` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_id` int(15) DEFAULT NULL,
  `used_status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_status_master`
--

CREATE TABLE `tbl_order_status_master` (
  `id` bigint(20) NOT NULL,
  `order_status` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_status_master`
--

INSERT INTO `tbl_order_status_master` (`id`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 'Order Place', '2022-07-19 11:37:08', '2022-07-19 11:37:08'),
(2, 'Shipped', '2022-07-19 11:37:25', '2022-07-19 11:37:25'),
(3, 'Out For Delivery', '2022-07-19 11:37:41', '2022-07-19 11:37:41'),
(4, 'Delivered', '2022-07-19 11:37:51', '2022-07-19 11:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` bigint(20) NOT NULL,
  `order_id` varchar(100) DEFAULT NULL,
  `order_no` varchar(100) DEFAULT NULL,
  `fk_product_id` int(11) DEFAULT NULL,
  `fk_user_id` int(11) DEFAULT NULL,
  `fk_address_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `sub_total` double DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `grand_total` double DEFAULT NULL,
  `payment_type` varchar(100) DEFAULT NULL,
  `payment_id` longtext DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `order_id`, `order_no`, `fk_product_id`, `fk_user_id`, `fk_address_id`, `quantity`, `unit_price`, `total`, `sub_total`, `tax`, `grand_total`, `payment_type`, `payment_id`, `date`, `created_at`, `updated_at`) VALUES
(1, '59797', '347494', 2, 32, 4, 21, 189, 3969, 10827, 50, 11127, NULL, NULL, '04/08/2022 12:02:15', '2022-08-04 09:02:15', '2022-08-04 09:02:15'),
(2, '59797', '790954', 1, 32, 4, 17, 299, 5083, 10827, 50, 11127, NULL, NULL, '04/08/2022 12:02:15', '2022-08-04 09:02:15', '2022-08-04 09:02:15'),
(3, '59797', '881438', 7, 32, 4, 2, 123, 246, 10827, 50, 11127, NULL, NULL, '04/08/2022 12:02:15', '2022-08-04 09:02:15', '2022-08-04 09:02:15'),
(4, '59797', '949442', 5, 32, 4, 3, 110, 330, 10827, 50, 11127, NULL, NULL, '04/08/2022 12:02:15', '2022-08-04 09:02:15', '2022-08-04 09:02:15'),
(5, '59797', '621009', 6, 32, 4, 1, 999, 999, 10827, 50, 11127, NULL, NULL, '04/08/2022 12:02:15', '2022-08-04 09:02:15', '2022-08-04 09:02:15'),
(6, '59797', '576109', 3, 32, 4, 1, 200, 200, 10827, 50, 11127, NULL, NULL, '04/08/2022 12:02:15', '2022-08-04 09:02:15', '2022-08-04 09:02:15'),
(7, '690859', '349189', 3, 32, 4, 1, 200, 200, 200, 50, 250, NULL, NULL, '04/08/2022 16:07:57', '2022-08-04 13:07:57', '2022-08-04 13:07:57'),
(8, '25139', '815645', 3, 32, 4, 1, 200, 200, 3458, 50, 3608, NULL, NULL, '06/08/2022 11:01:45', '2022-08-06 08:01:45', '2022-08-06 08:01:45'),
(9, '25139', '305427', 1, 32, 4, 9, 299, 2691, 3458, 50, 3608, NULL, NULL, '06/08/2022 11:01:45', '2022-08-06 08:01:45', '2022-08-06 08:01:45'),
(10, '25139', '944726', 2, 32, 4, 3, 189, 567, 3458, 50, 3608, NULL, NULL, '06/08/2022 11:01:45', '2022-08-06 08:01:45', '2022-08-06 08:01:45'),
(11, '84676', '731169', 3, 32, 4, 1, 200, 200, 5790, 50, 5990, NULL, NULL, '06/08/2022 11:40:37', '2022-08-06 08:40:37', '2022-08-06 08:40:37'),
(12, '84676', '106791', 1, 32, 4, 9, 299, 2691, 5790, 50, 5990, NULL, NULL, '06/08/2022 11:40:37', '2022-08-06 08:40:37', '2022-08-06 08:40:37'),
(13, '84676', '753975', 2, 32, 4, 3, 189, 567, 5790, 50, 5990, NULL, NULL, '06/08/2022 11:40:37', '2022-08-06 08:40:37', '2022-08-06 08:40:37'),
(14, '84676', '565265', 99, 32, 4, 1, 2332, 2332, 5790, 50, 5990, NULL, NULL, '06/08/2022 11:40:37', '2022-08-06 08:40:37', '2022-08-06 08:40:37'),
(15, '20631', '720201', 3, 32, 4, 1, 200, 200, 5790, 50, 5990, NULL, NULL, '06/08/2022 11:55:17', '2022-08-06 08:55:17', '2022-08-06 08:55:17'),
(16, '20631', '733904', 1, 32, 4, 9, 299, 2691, 5790, 50, 5990, NULL, NULL, '06/08/2022 11:55:17', '2022-08-06 08:55:17', '2022-08-06 08:55:17'),
(17, '20631', '838687', 2, 32, 4, 3, 189, 567, 5790, 50, 5990, NULL, NULL, '06/08/2022 11:55:17', '2022-08-06 08:55:17', '2022-08-06 08:55:17'),
(18, '20631', '387322', 99, 32, 4, 1, 2332, 2332, 5790, 50, 5990, NULL, NULL, '06/08/2022 11:55:17', '2022-08-06 08:55:17', '2022-08-06 08:55:17'),
(19, '71108', '487471', 3, 32, 4, 1, 200, 200, 3458, 50, 3608, NULL, NULL, '06/08/2022 12:06:33', '2022-08-06 09:06:33', '2022-08-06 09:06:33'),
(20, '71108', '614335', 1, 32, 4, 9, 299, 2691, 3458, 50, 3608, NULL, NULL, '06/08/2022 12:06:33', '2022-08-06 09:06:33', '2022-08-06 09:06:33'),
(21, '71108', '334168', 2, 32, 4, 3, 189, 567, 3458, 50, 3608, NULL, NULL, '06/08/2022 12:06:33', '2022-08-06 09:06:33', '2022-08-06 09:06:33'),
(22, '39952', '142665', 3, 32, 4, 1, 200, 200, 10577, 50, 10627, NULL, NULL, '06/08/2022 14:47:49', '2022-08-06 11:47:49', '2022-08-06 11:47:49'),
(23, '39952', '139475', 1, 32, 4, 9, 299, 2691, 10577, 50, 10627, NULL, NULL, '06/08/2022 14:47:49', '2022-08-06 11:47:49', '2022-08-06 11:47:49'),
(24, '39952', '258054', 2, 32, 4, 3, 189, 567, 10577, 50, 10627, NULL, NULL, '06/08/2022 14:47:49', '2022-08-06 11:47:49', '2022-08-06 11:47:49'),
(25, '39952', '888726', 99, 32, 4, 3, 2332, 6996, 10577, 50, 10627, NULL, NULL, '06/08/2022 14:47:49', '2022-08-06 11:47:49', '2022-08-06 11:47:49'),
(26, '39952', '677445', 92, 32, 4, 1, 123, 123, 10577, 50, 10627, NULL, NULL, '06/08/2022 14:47:49', '2022-08-06 11:47:49', '2022-08-06 11:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `top_banner`
--

CREATE TABLE `top_banner` (
  `bottom_id` int(11) NOT NULL,
  `image_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(2) COLLATE utf8_unicode_ci DEFAULT '1' COMMENT '1:active,0 inactive',
  `added_on` datetime DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT current_timestamp(),
  `fk_lang_id` int(50) DEFAULT NULL,
  `relatable_products` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `active_inactive` enum('1','0') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `top_banner`
--

INSERT INTO `top_banner` (`bottom_id`, `image_name`, `img_url`, `status`, `added_on`, `date_modified`, `fk_lang_id`, `relatable_products`, `active_inactive`) VALUES
(1, 'banner1.jpg', 'uploads/banner14.jpg', '0', NULL, '2022-07-12 10:37:57', 0, '0', '1'),
(2, 'banner2.jpg', 'uploads/banner2.jpg', '0', NULL, '2022-07-12 10:37:57', 0, '0', '1'),
(3, 'banner9.jpg', 'uploads/banner3.jpg', '0', NULL, '2022-07-12 10:37:57', 0, '0', '1'),
(10, 'theqa.png', 'uploads/theqa16.png', '0', NULL, '2022-07-30 05:28:47', NULL, '0', '1'),
(6, 'slider-11-1.jpg', 'uploads/slider-11-1.jpg', '1', NULL, '2022-07-23 10:53:27', NULL, '3,5,6', '1'),
(7, 'slider-11-2.jpg', 'uploads/slider-11-2.jpg', '1', NULL, '2022-07-23 10:53:37', NULL, '3,5,6', '1'),
(8, 'slider-11-3.jpg', 'uploads/slider-11-3.jpg', '1', NULL, '2022-07-23 10:53:45', NULL, '3,5,6', '1'),
(9, 'slides1.jpg', 'uploads/slides1.jpg', '1', NULL, '2022-07-23 10:53:52', NULL, '3,5,6', '1'),
(11, 'theqa.png', 'uploads/wifi.webp', '1', NULL, '2022-07-30 05:29:33', 0, '3,5,6', '1'),
(12, 'phone.webp', 'uploads/phone2.webp', '1', NULL, '2022-08-09 06:08:05', NULL, '5', '1'),
(13, 'mobile-cover.webp', 'uploads/phone3.webp', '1', NULL, '2022-08-09 06:08:05', NULL, '5', '1'),
(14, 'wifi.webp', 'uploads/wifi1.webp', '1', NULL, '2022-08-09 06:17:21', NULL, '3', '1'),
(15, 'abc.png', 'uploads/abc47.png', '0', NULL, '2022-08-09 10:37:14', NULL, NULL, '1'),
(16, 'abc.png', 'uploads/abc48.png', '0', NULL, '2022-08-09 10:38:03', NULL, NULL, '1'),
(17, 'ban3.jpg', 'uploads/ban3.jpg', '0', NULL, '2022-08-09 10:39:20', NULL, NULL, '1'),
(18, 'abc.png', 'uploads/abc49.png', '0', NULL, '2022-08-09 10:40:08', NULL, NULL, '1'),
(19, 'abc.png', 'uploads/abc50.png', '0', NULL, '2022-08-09 10:43:28', NULL, NULL, '1'),
(20, 'BANNER-CIR-DD2 (1).jpg', 'uploads/BANNER-CIR-DD2_(1).jpg', '0', NULL, '2022-08-09 10:48:22', NULL, NULL, '1'),
(21, 'BANNER-CIR-DD2 (1).jpg', 'uploads/BANNER-CIR-DD2_(1)1.jpg', '0', NULL, '2022-08-09 11:03:37', NULL, NULL, '1'),
(22, 'abc.png', 'uploads/abc51.png', '0', NULL, '2022-08-09 11:06:21', NULL, NULL, '1'),
(23, 'abc.png', 'uploads/abc52.png', '0', NULL, '2022-08-09 11:11:28', NULL, NULL, '1'),
(24, 'abc.png', 'uploads/abc53.png', '0', NULL, '2022-08-09 11:15:44', NULL, '2,5', '1'),
(25, 'abc.png', 'uploads/abc54.png', '0', NULL, '2022-08-09 11:17:46', NULL, '3,5', '1'),
(26, 'abc.png', 'uploads/abc55.png', '0', NULL, '2022-08-09 11:26:14', NULL, '3', '1'),
(27, 'abc.png', 'uploads/abc65.png', '1', NULL, '2022-08-09 12:12:17', 0, '2', '1'),
(28, 'abc.png', 'uploads/slider-11-11.jpg', '1', NULL, '2022-08-10 09:05:22', 0, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_delivery_address`
--

CREATE TABLE `user_delivery_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `building` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_type` int(11) NOT NULL DEFAULT 1 COMMENT '1=home,2=office,0=others',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_delivery_address`
--

INSERT INTO `user_delivery_address` (`id`, `user_id`, `roomno`, `building`, `street`, `zone`, `latitude`, `longitude`, `address_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 20, 1, 'Badlapur', 'Badlapur', '01', '198', '180', 1, 1, '2022-07-07 12:48:52', '2022-07-07 12:48:52'),
(2, 20, 0, 'Badlapur', 'Badlapur', '01', '198', '180', 1, 1, '2022-07-21 08:31:20', '2022-07-21 08:31:20'),
(3, 32, 4, 'Badlapur', 'Badlapur', '01', '19.1667854', '73.2367896', 1, 1, '2022-07-21 08:48:24', '2022-07-21 08:48:24'),
(4, 32, 4, 'Asha Vihar, Building No.1 Hendre Pada Road Kulgaon', 'Badlapur', '421503', '19.167275', '73.2422565', 1, 1, '2022-07-21 08:46:55', '2022-07-21 08:46:55'),
(5, 38, 4545, 'Bds Services pvt lmt', 'Kanjurmarg', '400042', '19.1282327', '72.9255991', 2, 1, '2022-07-22 06:07:55', '2022-07-22 06:07:55'),
(6, 32, 0, '65', '88', '15', '19888', '18064', 2, 1, '2022-07-23 12:11:55', '2022-07-23 12:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `link` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(2) COLLATE utf8_unicode_ci DEFAULT '1' COMMENT '1:active,0 inactive',
  `added_on` datetime DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `link`, `status`, `added_on`, `date_modified`) VALUES
(13, 'https://www.youtube.com/embed/dMByhaezv9A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\r\n', '1', NULL, '2019-04-24 12:02:02'),
(23, 'https://www.youtube.com/embed/FtqtiYeDug0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture<br>', '1', NULL, '2019-07-16 14:15:08'),
(22, 'https://www.youtube.com/embed/yEs71WgBpoI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', '1', NULL, '2019-07-16 08:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,0=disable',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `product_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 112, 32, 0, '2022-06-28 05:40:46', '2022-07-06 11:42:49'),
(2, 2, 19, 0, '2022-06-28 06:07:36', '2022-06-28 06:07:36'),
(3, 3, 19, 0, '2022-06-28 06:07:39', '2022-06-28 06:07:39'),
(4, 7, 19, 1, '2022-06-28 06:07:43', '2022-06-28 06:07:43'),
(5, 1, 20, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 33, 1, '2022-07-14 08:21:04', '2022-07-14 08:21:04'),
(9, 5, 33, 1, '2022-07-14 08:36:50', '2022-07-14 08:36:50'),
(11, 5, 19, 1, '2022-07-14 11:10:36', '2022-07-14 11:10:36'),
(12, 2, 20, 1, '2022-07-14 12:01:52', '2022-07-14 12:01:52'),
(13, 6, 19, 1, '2022-07-14 12:51:50', '2022-07-14 12:51:50'),
(16, 1, 37, 1, '2022-07-15 10:42:55', '2022-07-15 10:42:55'),
(63, 6, 32, 1, '2022-08-23 12:46:48', '2022-08-23 12:46:48'),
(64, 5, 32, 1, '2022-08-25 13:47:50', '2022-08-25 13:47:50'),
(65, 2, 32, 1, '2022-08-25 13:47:57', '2022-08-25 13:47:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`blog_detail_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `brand_name` (`brand_name`),
  ADD KEY `image_name` (`image_name`),
  ADD KEY `img_url` (`img_url`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `category_name` (`category_name`),
  ADD KEY `category_name_ar` (`category_name_ar`),
  ADD KEY `image_path` (`image_path`);

--
-- Indexes for table `childcategory`
--
ALTER TABLE `childcategory`
  ADD PRIMARY KEY (`child_category_id`);

--
-- Indexes for table `child_banner`
--
ALTER TABLE `child_banner`
  ADD PRIMARY KEY (`bottom_id`);

--
-- Indexes for table `company_setting`
--
ALTER TABLE `company_setting`
  ADD PRIMARY KEY (`comp_sett_id`);

--
-- Indexes for table `coupon_master`
--
ALTER TABLE `coupon_master`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `courier_charges`
--
ALTER TABLE `courier_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgot_password`
--
ALTER TABLE `forgot_password`
  ADD PRIMARY KEY (`fp_id`);

--
-- Indexes for table `gift_card`
--
ALTER TABLE `gift_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_card_cat`
--
ALTER TABLE `gift_card_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gst_setting`
--
ALTER TABLE `gst_setting`
  ADD PRIMARY KEY (`gst_set_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_address_type`
--
ALTER TABLE `master_address_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_product_type`
--
ALTER TABLE `master_product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_master`
--
ALTER TABLE `offer_master`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `online_txn_data`
--
ALTER TABLE `online_txn_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `op_user`
--
ALTER TABLE `op_user`
  ADD PRIMARY KEY (`op_user_id`);

--
-- Indexes for table `op_user_role`
--
ALTER TABLE `op_user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_data_details`
--
ALTER TABLE `order_data_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `orgnisation_master`
--
ALTER TABLE `orgnisation_master`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `name` (`product_name`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`),
  ADD KEY `popular` (`popular`),
  ADD KEY `featured` (`featured`),
  ADD KEY `best_selling` (`best_selling`),
  ADD KEY `new_arrival` (`new_arrival`),
  ADD KEY `product_name_ar` (`product_name_ar`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `product_comment`
--
ALTER TABLE `product_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img_name` (`img_name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `product_relative`
--
ALTER TABLE `product_relative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_unit`
--
ALTER TABLE `product_unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `slider_info`
--
ALTER TABLE `slider_info`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `subscribed`
--
ALTER TABLE `subscribed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_list`
--
ALTER TABLE `supplier_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_delivery_rate`
--
ALTER TABLE `tbl_delivery_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_status`
--
ALTER TABLE `tbl_order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_status_master`
--
ALTER TABLE `tbl_order_status_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_banner`
--
ALTER TABLE `top_banner`
  ADD PRIMARY KEY (`bottom_id`),
  ADD KEY `bottom_id` (`bottom_id`),
  ADD KEY `image_name` (`image_name`),
  ADD KEY `relatable_products` (`relatable_products`(333));

--
-- Indexes for table `user_delivery_address`
--
ALTER TABLE `user_delivery_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `blog_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `br_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `childcategory`
--
ALTER TABLE `childcategory`
  MODIFY `child_category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `child_banner`
--
ALTER TABLE `child_banner`
  MODIFY `bottom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `company_setting`
--
ALTER TABLE `company_setting`
  MODIFY `comp_sett_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupon_master`
--
ALTER TABLE `coupon_master`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courier_charges`
--
ALTER TABLE `courier_charges`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forgot_password`
--
ALTER TABLE `forgot_password`
  MODIFY `fp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gift_card`
--
ALTER TABLE `gift_card`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gift_card_cat`
--
ALTER TABLE `gift_card_cat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gst_setting`
--
ALTER TABLE `gst_setting`
  MODIFY `gst_set_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `master_address_type`
--
ALTER TABLE `master_address_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_product_type`
--
ALTER TABLE `master_product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offer_master`
--
ALTER TABLE `offer_master`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `online_txn_data`
--
ALTER TABLE `online_txn_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `op_user`
--
ALTER TABLE `op_user`
  MODIFY `op_user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `op_user_role`
--
ALTER TABLE `op_user_role`
  MODIFY `role_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_data_details`
--
ALTER TABLE `order_data_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orgnisation_master`
--
ALTER TABLE `orgnisation_master`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `product_comment`
--
ALTER TABLE `product_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `product_relative`
--
ALTER TABLE `product_relative`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_unit`
--
ALTER TABLE `product_unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_info`
--
ALTER TABLE `slider_info`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subscribed`
--
ALTER TABLE `subscribed`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `supplier_list`
--
ALTER TABLE `supplier_list`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_banners`
--
ALTER TABLE `tbl_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_delivery_rate`
--
ALTER TABLE `tbl_delivery_rate`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order_status`
--
ALTER TABLE `tbl_order_status`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order_status_master`
--
ALTER TABLE `tbl_order_status_master`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `top_banner`
--
ALTER TABLE `top_banner`
  MODIFY `bottom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_delivery_address`
--
ALTER TABLE `user_delivery_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
