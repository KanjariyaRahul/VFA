-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 06:27 PM
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
-- Database: `vfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `theme` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `theme`, `image`) VALUES
(1, 'Hardik Kanajariya', 'hardik', '6353485415', 'bg-gradient-success', 'daniel-olah-ZbEURDlbE6o-unsplash (1).jpg'),
(2, 'Rahul Kanajariya', 'rahul', '9265614292', 'bg-gradient-dark', 'shyam-mhKKPSzSkE8-unsplash (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile`, `msg`, `status`, `date`) VALUES
(64, 'Yash Kanajariya', '9909520639', 'Hey Brandon, we’ve stocked our shelves with assorted mint cookie treats for you. Visit your local KookieU store. Hurry! This flavor is for a limited time only.', 'resolved', '2022-05-18 00:00:00'),
(65, 'Rahul Kanajariya', '8200058835', 'They’re supposed to interest and engage your subscribers immediately. There’s no time to beat around the bush — you have a few seconds to catch their attention before they move on. ', 'resolved', '2022-06-21 00:00:00'),
(66, 'Abhay Kachhadiya', '9865321245', 'Mr. Chris, your package has been shipped - ETA: 9-10 A.M. on 18th October at your residence. To track your parcel, visit www.trackmypkg.com.', 'pending', '2022-06-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE `crop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `parent-category` varchar(50) NOT NULL,
  `child-category` varchar(50) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`id`, `name`, `description`, `parent-category`, `child-category`, `image`, `time_stamp`) VALUES
(1, 'Onion', 'The onion, also known as the bulb onion or common onion, is a vegetable that is the most widely cultivated species of the genus Allium. The shallot is a botanical variety of the onion which was classified as a separate species until 2010. Its close relatives include garlic, scallion, leek, and chive.', '', '', 'onion.jpg', '2022-05-27 14:35:03'),
(2, 'soybean', 'soybean, (Glycine max), also called soja bean or soya bean, annual legume of the pea family (Fabaceae) and its edible seed. The soybean is economically the most important bean in the world, providing vegetable protein for millions of people and ingredients for hundreds of chemical products.', '', '', 'soybean.jpg', '2022-06-06 14:25:08'),
(3, 'Cotton ', 'Cotton is a Kharif crop in the major parts of the country viz. Punjab, Haryana, Rajasthan, Uttar Pradesh, Madhya Pradesh, Gujarat, Maharashtra and parts of Andhra Pradesh & Karnataka.', '', '', 'cotton.jpg', '2022-06-06 14:27:06'),
(5, 'Sugarcane', 'Sugarcane is a water-intensive crop that remains in the soil all year long. As one of the worlds thirstiest crops, sugarcane has a significant impact on many environmentally sensitive regions, like the Mekong Delta and the Atlantic Forest.', '', '', 'sugar cane.jpg', '2022-06-06 14:32:19'),
(6, 'Wheat', 'The crop is grown mostly across Bhal region of Gujarat, including Ahmedabad, Anand, Kheda, Bhavanagar, Surendranagar, Bharuch districts. The unique characteristic of the wheat variety is that grown in rainfed conditions and cultivated in about two lakh hectares in Gujarat.', '', '', 'wheat.jpg', '2022-06-06 14:35:05'),
(8, 'Brocolli', 'Broccoli is an edible green plant in the cabbage family whose large flowering head, stalk and small associated leaves are eaten as a vegetable. Broccoli is classified in the Italica cultivar group of the species Brassica oleracea.', '', '', 'broccoli.jpg', '2022-06-06 14:36:21'),
(9, 'Banana', 'A banana is an elongated, edible fruit – botanically a berry – produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called \"plantains\", distinguishing them from dessert bananas.', '', '', 'banana.jpg', '2022-06-06 14:36:50'),
(10, 'Peanut ', 'The peanut also known as the groundnut, goober, pindar or monkey nut, is a legume crop grown mainly for its edible seeds. It is widely grown in the tropics and subtropics, being important to both small and large commercial producers.', '', '', 'peanuts.jpg', '2022-06-06 14:37:51'),
(11, 'Lemon', 'The lemon is a species of small evergreen trees in the flowering plant family Rutaceae, native to Asia, primarily Northeast India, Northern Myanmar or China', '', '', 'lemon.jpg', '2022-06-06 14:38:46'),
(12, 'Potato', 'The potato is a starchy tuber of the plant Solanum tuberosum and is a root vegetable native to the Americas. The plant is a perennial in the nightshade family Solanaceae. Potato. Potato cultivars appear in a variety of colors, shapes, and sizes. Scientific classification.', '', '', 'potatoes.jpg', '2022-06-06 14:39:17'),
(13, 'Brinjal', 'Eggplant, aubergine or brinjal is a plant species in the nightshade family Solanaceae. Solanum melongena is grown worldwide for its edible fruit. Most commonly purple, the spongy, absorbent fruit is used in several cuisines. Typically used as a vegetable in cooking, it is a berry by botanical definition.', '', '', 'brinjal.jpg', '2022-06-06 14:40:23'),
(14, 'Garlic', 'Garlic is a species of bulbous flowering plant in the genus Allium. Its close relatives include the onion, shallot, leek, chive, Welsh onion and Chinese onion.', '', '', 'garlic.jpg', '2022-06-06 14:42:16'),
(15, 'Coriander ', 'Coriander is a plant. Both the leaves and fruit (seeds) of coriander are used as food and medicine. However, the term \"coriander\" is typically used to refer to the fruit. Coriander leaves are usually referred to as cilantro. In the following sections, the term \"coriander\" will be used to describe the fruit.', '', '', 'coriander.jpg', '2022-06-06 14:42:41'),
(16, 'Water Melon', 'Watermelon is a flowering plant species of the Cucurbitaceae family and the name of its edible fruit. A scrambling and trailing vine-like plant, it is a highly cultivated fruit worldwide, with more than 1,000 varieties.', '', '', 'water-melons.jpg', '2022-06-06 14:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `crop-basic-info`
--

CREATE TABLE `crop-basic-info` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `expenses` int(11) NOT NULL,
  `income` int(11) NOT NULL,
  `harvest` int(11) NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop-basic-info`
--

INSERT INTO `crop-basic-info` (`id`, `crop-id`, `expenses`, `income`, `harvest`, `time-stamp`) VALUES
(2, 5, 36500, 122500, 49, '2022-07-04 20:44:37'),
(3, 1, 26000, 80000, 80, '2022-07-05 11:46:52'),
(4, 6, 11000, 47500, 19, '2022-07-05 11:47:14'),
(5, 12, 28000, 120000, 100, '2022-07-05 11:47:46'),
(6, 13, 41000, 130000, 90, '2022-07-05 11:48:06'),
(7, 15, 5000, 30000, 6000, '2022-07-05 11:48:36'),
(8, 14, 28000, 200000, 50, '2022-07-05 11:49:04'),
(9, 16, 30500, 135000, 27, '2022-07-05 11:49:28'),
(10, 11, 32500, 150000, 15, '2022-07-05 11:49:53'),
(11, 3, 26000, 60000, 12, '2022-07-05 11:50:17'),
(12, 2, 14000, 34000, 8, '2022-07-05 11:50:38'),
(14, 9, 62000, 192000, 24, '2022-07-06 12:52:07'),
(15, 10, 18000, 60000, 15, '2022-07-06 13:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `crop-disease`
--

CREATE TABLE `crop-disease` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `symptoms` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop-disease`
--

INSERT INTO `crop-disease` (`id`, `crop-id`, `title`, `description`, `symptoms`, `image`, `time_stamp`) VALUES
(5, 1, 'Damping off', 'Damping off is a major threat to raising healthy onion seedlings during Khariff season in all onion growing areas of the country. Generally 20-25 per cent onion seedlings get damaged due to this disease especially in nursery. It is caused by soil borne fungal pathogens.', 'Symptoms : Symptoms : Symptoms : Two types of symptoms are observedPre-emergence damping-off: This results in seed and seedling rot before they emerge out of the soil.Post-emergence damping-off: The pathogen attacks the collar region of seedlings on the surface of soil. The collar portion rots and ultimately the seedlings collapse and die.', 'download.jfif', '2022-06-24 19:32:17'),
(6, 1, 'Purple blotch', 'Purple Blotch is caused by the fungus Alternaria porri. It is an important disease in warm, humid onion-growing regions around the world. Garlic and leeks may be affected as well as onions.', 'The symptoms occur on leaves and flower stalks as small, sunken, whitish flecks with purple coloured centres.\r\nThe lesions may girdle leaves/stalk and cause their drooping. The infected plants fail to develop bulbs', 'download (1).jfif', '2022-06-24 19:33:38'),
(7, 1, 'Stemphylium leaf blight', 'Stemphylium leaf blight (SLB), caused by Stemphylium vesicarium, is a foliar disease of onion worldwide, and has recently become an important disease in the northeastern United States and Ontario, Canada. The symptoms begin as small, tan to brown lesions on the leaves that can progress to defoliate plants.', 'Infection occurs on radial leaves of transplanted seedlings at 3- 4 leaf stage during late March and early April.\r\nThe symptoms appear as small yellowish to orange flecks or streaks in the middle of the leaves, which soon develop into elongated spindle shaped spots surrounded by pinkish margin.\r\nThe disease on the inflorescence stalk causes severe damage to the seed crop.', 'leafblightimg.jpg', '2022-06-24 19:34:37'),
(8, 1, ' Colletotrichum blight/anthracnose/twister disease', 'Onion twister disease is characterized by curling, twisting, and chlorosis of the onion leaves, abnormal elongation of the necks, and formation of slender bulbs. Some diseased plants rot before harvest while others decay rapidly when stored. ', 'Symptoms : Symptoms : The symptoms appear initially on the leaves as water soaked pale yellow spots, which spread lengthwise covering entire leaf blade.The affected leaves shrivel and droop down. ', 'download (2).jfif', '2022-06-24 19:35:51'),
(9, 3, 'Ascochyta Blight (Wet Weather Blight)', 'Diagnostic Note: Margins of necrotic regions on leaves and cotyledons will have dark borders. Spots may have a target-like appearance. However, Ascochyta Blight typically occurs early in the season, and small black fruiting structures are observed in the lesions.\r\n\r\nRange and Yield Loss: Ascochyta Blight ha', 'Ascochyta Blight forms lesions on cotyledons, leaves, stems, and bolls. Lesions on the cotyledons and leaves approach 2 mm (<0.1 in) in diameter, are white to light brown and circular in shape. Elongated cankers on the stem are reddish-purple to black or ash gray in color. Small, black fruiting structures are likely to be embedded in symptomatic tissue.', 'Diagnosis-Management-Foliar-Diseases-2.jpg', '2022-06-24 19:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `crop-event`
--

CREATE TABLE `crop-event` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `seed-id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `day-after-sowing` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop-event`
--

INSERT INTO `crop-event` (`id`, `crop-id`, `seed-id`, `title`, `description`, `day-after-sowing`, `time_stamp`) VALUES
(25, 1, 1, 'Light Plowing ', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing,  ', -5, '2022-07-16 18:36:58'),
(26, 1, 1, 'Medium Ploughing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 to 18Inches ', -4, '2022-07-16 18:39:07'),
(27, 2, 29, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:15:39'),
(28, 2, 29, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:15:39'),
(29, 2, 29, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:15:39'),
(30, 2, 29, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:15:39'),
(31, 2, 29, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:15:39'),
(32, 2, 29, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:15:39'),
(33, 2, 30, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:15:39'),
(34, 2, 30, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:15:39'),
(35, 2, 30, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:15:39'),
(36, 2, 30, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:15:39'),
(37, 2, 30, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:15:39'),
(38, 2, 30, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:15:39'),
(39, 2, 31, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:15:39'),
(40, 2, 31, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:15:39'),
(41, 2, 31, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:15:39'),
(42, 2, 31, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:15:39'),
(43, 2, 31, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:15:39'),
(44, 2, 31, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:15:39'),
(45, 2, 32, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:15:39'),
(46, 2, 32, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:15:39'),
(47, 2, 32, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:15:39'),
(48, 2, 32, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:15:39'),
(49, 2, 32, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:15:39'),
(50, 2, 32, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:15:39'),
(57, 3, 33, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:18:28'),
(58, 3, 33, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:18:28'),
(59, 3, 33, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:18:28'),
(60, 3, 33, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:18:28'),
(61, 3, 33, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:18:28'),
(62, 3, 33, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:18:28'),
(63, 3, 34, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:18:28'),
(64, 3, 34, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:18:28'),
(65, 3, 34, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:18:28'),
(66, 3, 34, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:18:28'),
(67, 3, 34, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:18:28'),
(68, 3, 34, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:18:28'),
(69, 3, 35, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:18:28'),
(70, 3, 35, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:18:28'),
(71, 3, 35, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:18:28'),
(72, 3, 35, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:18:28'),
(73, 3, 35, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:18:28'),
(74, 3, 35, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:18:28'),
(81, 1, 1, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:24:02'),
(82, 1, 1, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:24:02'),
(83, 1, 1, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:24:02'),
(84, 1, 1, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:24:02'),
(85, 1, 1, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:24:02'),
(86, 1, 1, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:24:02'),
(87, 1, 18, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:24:02'),
(88, 1, 18, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:24:02'),
(89, 1, 18, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:24:02'),
(90, 1, 18, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:24:02'),
(91, 1, 18, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:24:02'),
(92, 1, 18, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:24:02'),
(93, 1, 28, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:24:02'),
(94, 1, 28, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:24:02'),
(95, 1, 28, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:24:02'),
(96, 1, 28, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:24:02'),
(97, 1, 28, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:24:02'),
(98, 1, 28, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:24:02'),
(105, 11, 59, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:38:53'),
(106, 11, 59, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:38:53'),
(107, 11, 59, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:38:53'),
(108, 11, 59, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:38:53'),
(109, 11, 59, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:38:53'),
(110, 11, 59, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:38:53'),
(111, 10, 42, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:51:08'),
(112, 10, 42, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:51:08'),
(113, 10, 42, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:51:08'),
(114, 10, 42, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:51:08'),
(115, 10, 42, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:51:08'),
(116, 10, 42, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:51:08'),
(117, 10, 60, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 06:51:08'),
(118, 10, 60, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 06:51:08'),
(119, 10, 60, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 06:51:08'),
(120, 10, 60, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 06:51:08'),
(121, 10, 60, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 06:51:08'),
(122, 10, 60, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 06:51:08'),
(123, 10, 42, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 07:00:15'),
(124, 10, 42, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 07:00:15'),
(125, 10, 42, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 07:00:15'),
(126, 10, 42, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 07:00:15'),
(127, 10, 42, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 07:00:15'),
(128, 10, 42, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 07:00:15'),
(129, 10, 60, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 07:00:15'),
(130, 10, 60, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 07:00:15'),
(131, 10, 60, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 07:00:15'),
(132, 10, 60, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 07:00:15'),
(133, 10, 60, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 07:00:15'),
(134, 10, 60, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 07:00:15'),
(135, 10, 61, 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', -5, '2022-07-17 07:00:15'),
(136, 10, 61, 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', -4, '2022-07-17 07:00:15'),
(137, 10, 61, 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', -3, '2022-07-17 07:00:15'),
(138, 10, 61, 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', -2, '2022-07-17 07:00:15'),
(139, 10, 61, 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', -1, '2022-07-17 07:00:15'),
(140, 10, 61, 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', 0, '2022-07-17 07:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `crop-faq`
--

CREATE TABLE `crop-faq` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans` varchar(500) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop-faq`
--

INSERT INTO `crop-faq` (`id`, `crop-id`, `question`, `ans`, `time_stamp`) VALUES
(2, 1, 'What are the side effects of onions?', 'Onions may cause symptoms of gastrointestinal upset, such as heartburn, bloating, abdominal discomfort, nausea, and vomiting, in susceptible individuals, which may aggravate symptoms of irritable bowel syndrome in affected individuals. These symptoms are relatively more common when eating onions raw rather than cooked.', '2022-07-08 05:07:11'),
(3, 1, 'What are the health benefits of red onion?', 'Red onions are full of sulfur compounds that protect the body from ulcers and various cancers. They can also fight bacteria in the urinary tract. The most important of these compounds is called quercetin - an antioxidant compound that could provide protection against cancer, heart disease and allergies.', '2022-07-08 05:11:30'),
(4, 1, 'What is the duration of onion crop?', 'The onion is a hardy cool-season biennial but usually grown as annual crop. The onion has narrow, hollow leaves and a base which enlarges to form a bulb. The bulb can be white, yellow, or red and require 80 to 150 days to reach harvest.', '2022-07-08 05:21:07'),
(5, 1, 'In which month onion crop is planted?', 'There are three sowing seasons for the onion crop in India – Kharif (planted between July-August and harvested in October-December); late Kharif (planted between October-November and harvested in January-March); and Rabi (planted between December-January and harvested in March-May)', '2022-07-08 05:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `crop-tracking`
--

CREATE TABLE `crop-tracking` (
  `id` int(11) NOT NULL,
  `crop_id` int(11) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `seed-id` int(11) DEFAULT NULL,
  `sowing_date` date NOT NULL,
  `farm_area` decimal(10,0) NOT NULL,
  `area_type` varchar(100) NOT NULL,
  `soil` varchar(100) NOT NULL,
  `water` varchar(100) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop-tracking`
--

INSERT INTO `crop-tracking` (`id`, `crop_id`, `farmer_id`, `seed-id`, `sowing_date`, `farm_area`, `area_type`, `soil`, `water`, `time_stamp`) VALUES
(27, 1, 4, 14, '2022-06-25', '10', 'acre', 'black-soil', 'rain-water,canal-water,canal-water,canal-water,surface-water', '2022-06-25 03:49:51'),
(36, 1, 8, 18, '2022-07-01', '10', 'acre', 'black-soil', 'surface-water', '2022-07-01 14:06:15'),
(37, 1, 64, 1, '2022-07-07', '15', 'acre', 'black-soil', 'canal-water', '2022-07-02 11:10:07'),
(38, 1, 65, 1, '2022-07-08', '15', 'acre', 'red-soil', 'canal-water', '2022-07-08 05:05:48'),
(39, 1, 65, 18, '2022-07-08', '10', 'acre', 'black-soil', 'rain-water', '2022-07-08 05:10:11'),
(40, 5, 64, 22, '2022-07-14', '3', '', 'forest-soil', 'rain-water,canal-water', '2022-07-14 12:33:12'),
(41, 3, 64, 33, '2022-07-14', '2', '', 'black-soil', 'pond-water,ground-water', '2022-07-14 12:49:43'),
(42, 9, 64, 40, '2022-07-14', '12', '', 'alluvial-soil', 'pond-water,ground-water,river-water', '2022-07-14 15:33:53'),
(43, 3, 77, 33, '2022-07-19', '9', '', 'black-soil', 'canal-water', '2022-07-15 06:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `farmer-id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `transaction-id` varchar(255) NOT NULL,
  `card-number` int(11) NOT NULL,
  `amount` double NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `lattitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `receipt` varchar(500) DEFAULT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `farmer-id`, `name`, `email`, `address`, `transaction-id`, `card-number`, `amount`, `ip`, `location`, `browser`, `lattitude`, `longitude`, `receipt`, `time-stamp`) VALUES
(7, 64, 'Hardik kanajariay ', 'hardikkanajariya@yahoo.com', 'Kalyanpur', '9ddd27816f3a60051686943a4792ade4', 2147483647, 6412, '', '', 'Chrome', '', '', 'receipt/html/9ddd27816f3a60051686943a4792ade4.html', '2022-07-07 06:28:10'),
(8, 64, 'Raul kanajariya', 'rahul@mail.com', 'jamanagar', '718c50aa583db84fbe7ae9605c20cd3a', 2147483647, 7699, '', '', 'Chrome', '', '', 'receipt/html/718c50aa583db84fbe7ae9605c20cd3a.html', '2022-07-07 07:03:59'),
(9, 64, 'Raul kanajariya', 'rahul@mail.com', 'jamanagar', '7625f2fcf0b78c5b47c6e07ced3f7e53', 2147483647, 7699, '', '', 'Chrome', '', '', 'receipt/html/7625f2fcf0b78c5b47c6e07ced3f7e53.html', '2022-07-07 07:05:51'),
(10, 64, 'Raul kanajariya', 'rahul@mail.com', 'jamanagar', 'fcaede4edcbc35f8707a5d9091c84c80', 2147483647, 7699, '', '', 'Chrome', '', '', 'receipt/html/fcaede4edcbc35f8707a5d9091c84c80.html', '2022-07-07 07:06:33'),
(11, 64, 'Raul kanajariya', 'rahul@mail.com', 'jamanagar', '416b991f517b91d05c9fd5b20f0f94e0', 2147483647, 7699, '', '', 'Chrome', '', '', 'receipt/html/416b991f517b91d05c9fd5b20f0f94e0.html', '2022-07-07 07:07:17'),
(12, 64, 'Raul kanajariya', 'rahul@mail.com', 'jamanagar', '82f58da4e3881a3c68b59bbf89e8fd9e', 2147483647, 7699, '', '', 'Chrome', '', '', 'receipt/html/82f58da4e3881a3c68b59bbf89e8fd9e.html', '2022-07-07 07:08:01'),
(13, 64, 'Raul kanajariya', 'rahul@mail.com', 'jamanagar', '7b91896cdda7b830bb7052584beca0f8', 2147483647, 7699, '', '', 'Chrome', '', '', 'receipt/html/7b91896cdda7b830bb7052584beca0f8.html', '2022-07-07 07:08:38'),
(14, 64, 'Raul kanajariya', 'rahul@mail.com', 'jamanagar', '6822f0a6d228d4a03c5058bfddb85cf9', 2147483647, 7699, '', '', 'Chrome', '', '', 'receipt/html/6822f0a6d228d4a03c5058bfddb85cf9.html', '2022-07-07 07:10:16'),
(15, 64, 'Raul kanajariya', 'rahul@mail.com', 'jamanagar', 'a7be6f8b21f4fc33402e9381d14c5813', 2147483647, 7699, '', '', 'Chrome', '', '', 'receipt/html/a7be6f8b21f4fc33402e9381d14c5813', '2022-07-07 07:20:18'),
(16, 64, 'Raul kanajariya', 'rahul@mail.com', 'jamanagar', '145d749022023886b9629a35f91e29f8', 2147483647, 7699, '', '', 'Chrome', '', '', '145d749022023886b9629a35f91e29f8', '2022-07-07 07:21:11'),
(17, 64, 'Raul kanajariya', 'rahul@mail.com', 'jamanagar', '7f60cdbc2b2fa125135f295ba2e0f4e6', 2147483647, 7699, '', '', 'Chrome', '', '', '7f60cdbc2b2fa125135f295ba2e0f4e6', '2022-07-07 07:23:25'),
(18, 64, 'Raul kanajariya', 'rahul@mail.com', 'jamanagar', '660e6b68d355d3deba348a759f0aa6f7', 2147483647, 7699, '', '', 'Chrome', '', '', '660e6b68d355d3deba348a759f0aa6f7', '2022-07-07 07:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `earthing-up`
--

CREATE TABLE `earthing-up` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `earthing-up-details` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `earthing-up`
--

INSERT INTO `earthing-up` (`id`, `crop-id`, `earthing-up-details`, `time-stamp`) VALUES
(2, 5, '<li>Partial earthing-up- 45 Days after planting.</li><li>In this, little amount of soil from either side of the furrow is taken and placed around the base of the shoots.</li><li> Full earthing-up- 120 Days after sowing.</li><li>In this, the soil from the ridge in between is fully removed and placed near the cane on either side.</li>', '2022-07-06 12:39:01'),
(3, 10, '<li> Earthing up is done 40-45 days after sowing. (It helps for the penetration of pegs in the soil and also facilitates for increased pod development).</li>', '2022-07-06 13:13:32'),
(4, 12, '<li>2 times @ 30 days after sowing and 60 days after sowing (Convert ridges into furrows).</li>', '2022-07-06 13:26:18'),
(5, 13, '<li>Cover the roots with soil.</li><li>30 days after transplanting (at flowering time)</li>', '2022-07-06 13:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email-status` varchar(20) NOT NULL DEFAULT 'not-verified',
  `mail_hash` varchar(500) NOT NULL DEFAULT 'mail_hash_value',
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `taluka` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `name`, `mobile`, `email`, `email-status`, `mail_hash`, `state`, `district`, `taluka`, `village`, `pincode`, `username`, `password`, `timestamp`, `date`) VALUES
(64, 'Hardik Kanajariya', '6353485415', 'my.work.h11k@gmail.com', 'verified', 'a880b08da450e9f652fc824e585ea42a', NULL, NULL, NULL, NULL, NULL, 'hardik', '202cb962ac59075b964b07152d234b70', '2022-07-01 16:52:47', '2022-07-01 00:00:00'),
(78, 'Nakum Parimal ', '6351810292', 'parimalnakum089@gmail.com', 'verified', '3ab74ea0826beb5114d054616bb5ba57', NULL, NULL, NULL, NULL, NULL, 'parimal', '76d853b70db9d023ffc7a5fdcc833b59', '2022-07-15 20:44:58', '2022-07-15 20:44:58'),
(79, 'hnew', '9685274100', 'hcollege0@gmail.com', 'verified', '09a30ca7fd690cfa78ab643d2a0e1a6d', NULL, NULL, NULL, NULL, NULL, 'hnew', '202cb962ac59075b964b07152d234b70', '2022-07-15 20:49:58', '2022-07-15 20:49:58'),
(80, 'Kaniariya Aashish', '7862919709', 'aashishkanjariya43@gmail.com', 'verified', 'eef8187db0cf85293469aa4a0f61d391', NULL, NULL, NULL, NULL, NULL, 'Aashish', '339a565a40d9115ea93ac4d27f565745', '2022-07-17 14:04:56', '2022-07-17 14:04:56'),
(81, 'vishal', '9409101849', 'vishalchauhan0046@gmail.com', 'not-verified', '80fc615c4ab76c8c71fcc8738db340fa', NULL, NULL, NULL, NULL, NULL, 'vishal', '7b6cc70959a647646c675486d1c3e108', '2022-07-18 05:20:29', '2022-07-18 05:20:29'),
(82, 'rahul kanjariya', '9265614292', 'rahulkanjariya9265@gmail.com', 'verified', '89298acabd11680203be2226d744ddee', NULL, NULL, NULL, NULL, NULL, 'rahul', 'ebaaba27b32928a25f2ad6185fc0cc74', '2022-07-19 10:29:13', '2022-07-19 10:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `favourable-climate`
--

CREATE TABLE `favourable-climate` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) DEFAULT NULL,
  `climate-details` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourable-climate`
--

INSERT INTO `favourable-climate` (`id`, `crop-id`, `climate-details`, `time-stamp`) VALUES
(4, 1, '<li>Onion can be grown in any season, the only condition is harvesting should not coincide with rainy days.</li><li>High humidity at vegetative stage leads to more thrips (insects) population.</li>', '2022-07-05 11:55:43'),
(5, 5, '<li>Hot and moist climate.</li><li>Warm long day produce plants with more tillers, juice and high sucrose contents.</li>', '2022-07-05 11:57:43'),
(6, 6, '<li>Wheat is a rabi season crop.</li><li>The cool and sunny winters are very conducive for growth of Wheat crop.</li><li>For getting higher yield it requires at least 100 cold days.</li>', '2022-07-05 12:00:26'),
(7, 2, '<li>Soybean can be grown in varied types of climates.</li><li>However dry weather is necessary for ripening.</li>', '2022-07-05 12:02:24'),
(8, 3, '<li>Cotton can be grown in places wherever, at least 180-200 frost free days are available.</li><li>High humidity leads to rotting of cotton.</li><li>Cotton is discoloured due to high light intensity.</li>', '2022-07-05 12:05:35'),
(10, 9, '<li>It prefers tropical humid lowlands and is grown from sea level to an elevation of 2000 m. above mean sea level.</li><li>Banana is being cultivated in climate ranging from humid tropical to dry mild subtropics through selection of appropriate varieties.</li><li>Cold in winter reduces vegetative growth of banana. Fewer leaves are produced and the rate of their emergence is considerably slowed down.</li><li>Also, crowns of the plants at the end of winter are much reduced and bunches are correspondingly slow to develop. This delay results in the reduction of leaf area and thus the fruit may be exposed to severe scorching by the sun.</li><li>In severe cold malformed bunches or incomplete fruits develop in subtropical latitudes.</li><li>Periods of drought or low temperature reduces growth and flowering with the result that the peak production period is delayed.</li><li>High velocity of wind which exceeds 80 km/hr. damages the crop.</li>', '2022-07-05 12:25:10'),
(11, 10, '<li>Warm and moist conditions are very favorable.</li><li>Cool and wet climate, results in slow germination and seedling emergence, increasing the risk of seed rot and seedling diseases.</li>', '2022-07-05 12:44:55'),
(12, 11, '<li>The crop can be cultivated in both Tropical and subtropical climate.</li><li>Frosty weather is harming for acid lime.</li>', '2022-07-05 12:46:35'),
(13, 12, '<li>Potato is preferred in regions where temperature during growing season is cool.</li>', '2022-07-05 12:48:17'),
(14, 13, '<li>Brinjal is a warm season crop and requires a long warm growing season.</li><li>It is very susceptible to frost.</li>', '2022-07-05 12:49:55'),
(15, 14, '<li>Garlic plant requiring cool and moist period during growth and relatively dry period during maturity of bulbs.</li>', '2022-07-05 12:51:32'),
(16, 15, '<li>Grows well in cool and dry weather.</li><li>It can not tolerate frost.</li>', '2022-07-05 12:52:55'),
(17, 16, '<li>It is a warm season crop and grows in tropical and subtropical regions.</li><li>Warm and dry weather with abundant sunshine is required.</li><li>For good quality and sweetness, dry weather during the fruit development is necessary.</li>', '2022-07-05 12:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `feed-back`
--

CREATE TABLE `feed-back` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `bug` longtext NOT NULL,
  `suggest` longtext NOT NULL,
  `sname` varchar(255) NOT NULL,
  `other_name` varchar(525) NOT NULL DEFAULT 'VFA',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed-back`
--

INSERT INTO `feed-back` (`id`, `name`, `rate`, `bug`, `suggest`, `sname`, `other_name`, `status`, `time-stamp`) VALUES
(16, 'Chavda sahil', 5, '', '', '', '', 'resolved', '2022-07-16 18:49:16'),
(19, 'Chirag', 5, '', '', '', '', 'resolved', '2022-07-16 18:49:25'),
(20, 'Dhavsl', 5, 'Ft', 'Rt6', '', 'Gfgj', 'resolved', '2022-07-16 18:49:33'),
(21, 'Jay bhatt', 5, '', '', '', 'Kheti ane khedut', 'resolved', '2022-07-16 18:49:44'),
(22, 'Sunil', 5, 'Whot is this?', '', '', '', 'resolved', '2022-07-16 18:50:03'),
(26, 'Suresh bela', 4, '', '', 'VFA', '', 'resolved', '2022-07-16 18:50:19'),
(29, 'Niyati Radhanpura ', 4, 'No I am not facing any kind of problem while using this website. This website is very flexible to use . Thank you..', '', 'Good Growth', '', 'resolved', '2022-07-16 18:50:43'),
(30, 'Shubham Buddh', 5, '', '', 'Grow Ground', '', 'resolved', '2022-07-16 18:50:53'),
(31, 'Parmar prakash ', 5, 'Very nice projec', 'V good ', 'Good Growth', '', 'resolved', '2022-07-16 18:51:04'),
(32, 'Swati ', 5, '', '', 'VFA', '', 'resolved', '2022-07-16 18:51:21'),
(35, 'Ray.15', 5, '', '', 'VFA', '', 'resolved', '2022-07-16 18:51:33'),
(37, 'Abhay Kachhadiya', 5, '', '', 'A Farmer\'s Touch', '', 'resolved', '2022-07-16 18:52:24'),
(41, 'Ajay', 5, '', '', 'Grow Ground', '', 'resolved', '2022-07-16 18:52:32'),
(42, 'Kanjariya Aashish ', 5, 'No bug', 'Berr good', 'A Farmer\'s Touch', '', 'resolved', '2022-07-18 04:04:53'),
(43, 'Dhavsl', 5, 'Ft', 'Rt6', 'Fresh Farms', 'Gfgj', 'pending', '2022-07-18 10:51:55'),
(44, 'Jay bhatt', 5, '', '', 'VFA', 'Kheti ane khedut', 'pending', '2022-07-19 15:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `gap-feeling`
--

CREATE TABLE `gap-feeling` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `gap-details` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gap-feeling`
--

INSERT INTO `gap-feeling` (`id`, `crop-id`, `gap-details`, `time-stamp`) VALUES
(2, 3, '<li>After 10 days put seeds in gaps where germination is not observed.</li>OR<li>Raise seedlings in polythene bags of size 15 x 10 cm.</li><li>Fill the polythene bags with a mixture of FYM and soil in the ratio of 1:3.</li><li>Dibble one seed per bag on the same day when sowing is taken up in the field.</li><li>Provide water at regular intervals. </li><li>On the 10th day of sowing, plant seedlings maintained in the polythene bags, one in each of the gaps in the field.</li>', '2022-07-06 11:56:09'),
(3, 5, '<li>After 30 days put sprouted setts in gaps where germination is not done.</li>', '2022-07-06 12:40:26'),
(4, 10, '<li>Where seedlings have not germinated, dibble seeds at the rate of 1 seed per hole 10-12 days after sowing and immediately irrigate.</li>', '2022-07-06 13:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `harvesting`
--

CREATE TABLE `harvesting` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `harvesting-details` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harvesting`
--

INSERT INTO `harvesting` (`id`, `crop-id`, `harvesting-details`, `time-stamp`) VALUES
(1, 1, '<h4>Harvesting duration</h4><li>70-90 days after transplanting.</li><h4>Harvesting Method</h4><li>Uproot the plants and cut the dried leaves.</li><li>Dry the Onion bulbs in shade.</li>', '2022-07-07 11:37:03'),
(2, 2, '<li>Harvesting can be done manually, breaking the stalks on the ground level or with sickle.</li><h4>Harvesting duration</h4><li>90-100 Days after sowing</li>', '2022-07-07 11:47:13'),
(3, 3, '<h4>Harvesting duration\n</h4><li>130 to 180 Days after sowing.</li><h4>Number of harvesting</h4><li>4 Time</li><h4>Harvesting interval</h4><li>15 days</li>', '2022-07-07 11:50:17'),
(5, 5, '<h4>Harvesting duration</h4><li>330 to 360 Days after sowing</li><h4>Harvesting method</h4><li>15 days before harvesting irrigation should be stopped.</li><li>Harvesting is done by cutting the canes at ground level.</li>', '2022-07-07 12:00:20'),
(6, 6, '<h4>Harvesting time</h4><li>110-120 days after sowing</li>', '2022-07-07 12:02:54'),
(7, 9, '<li> After 12-15 months after sowing: July to Jan</li><li>Fruit gets ready for harvesting 2-3 months after flowering. </li><li>harvesting should be done when the fruit is slightly or fully mature depending on the market preferences.</li><li>For long distance transportation, harvesting is done at 75-80 % maturity.</li><li>The fruit is climacteric and can reach consumption stage after ripening operation. </li><li>After harvest of bunch, only leaves are to be cut and plant system is retained for ratoon crop development. </li><li>First ratoon crop would be ready by 8-10 month from the harvesting of the main crop and second ratoon by 8-9 months after the second crop. Thus over a period of 28-30 months, it is possible to harvest three crops i.e. one main crop and two ratoon crop.</li><li>Productive life span: 3 years (Depends upon variety) </li><li>Generally it is recommended to grow new orchard after 3 years, but it can be cultivated upto 5-6 years under good management practices.</li>', '2022-07-07 12:09:43'),
(8, 10, '<h4>Harvesting time</h4><li>110-120 Days after sowing </li><h4> Harvesting</h4><li>When leaves become yellow, outer cover of pod become hard.</li><h4>Harvesting Method</h4><li> Groundnut crop is harvested by digging pods or by pulling the plants from field.</li>', '2022-07-07 12:14:39'),
(9, 11, '<h4>Harvesting\n</h4><li>Harvesting period includes two seasons i.e. from july-September and Nov-jan.</li><li>Do harvesting at proper time as too early or too late harvesting will give poor quality.</li>', '2022-07-07 12:22:22'),
(10, 12, '<h4>Harvesting time</h4><li>100 to 110 Days after sowing</li>', '2022-07-07 12:23:24'),
(11, 13, '<h4>Harvesting duration</h4><li>70 to 130 days after transplanting</li><h4>Number of harvests</h4><li>8 to 10 </li><h4>Harvesting interval</h4><li>5 days</li>', '2022-07-07 12:28:53'),
(12, 15, '<h4>Harvesting duration</h4><li>Crop duration: 35-40 days (In summer it may take more time for germination and harvesting).</li>', '2022-07-07 12:35:43'),
(13, 14, '<h4>Harvesting</h4><li>Crop becomes ready in 135-150 days after sowing. </li><li>Crop can be harvested when 50% leaves start yellowing and drying.</li><li>Stop irrigation at least 15 days before harvesting.</li><li> Plants are pull out or uprooted, then tied into small bundle and kept in field or shade for 2-3days.</li>', '2022-07-07 12:38:49'),
(14, 16, '<h4>Harvesting</h4><li>Harvesting stage- Fruits are harvested when it produces dull sound upon tapping or the fruits surface on the ground level produces light yellow colour.</li>', '2022-07-07 12:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `irrigation`
--

CREATE TABLE `irrigation` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `irrigation-details` longtext NOT NULL,
  `required-method` text NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irrigation`
--

INSERT INTO `irrigation` (`id`, `crop-id`, `irrigation-details`, `required-method`, `time-stamp`) VALUES
(2, 1, '<li>Drip -On alternate day.</li><li>Flood - Once in a week (based on rainfall).</li><li>Summer season - 4 days interval. </li>', 'drip irrigation', '2022-07-16 09:40:40'),
(3, 2, '<li>Flood - Once in 10 days.</li>', 'mechanized irrigation (center pivots), hard hose travelers, and solid set irrigation.', '2022-07-16 09:55:48'),
(4, 3, '<li>Flood - At 10 to 12 days interval (based on rainfall).</li><li>Flowering, boll formation and boll development stage are critical stages for irrigation at which irrigation must be applied regularly (Based on rainfall).</li>', 'furrow or alternate furrow method', '2022-07-16 10:01:06'),
(5, 5, '<li>Irrigation is given once in three days based on the evapo-transpiration demand of the crop.</li>', 'surface furrow irrigation, sprinklers on a grid pattern, travelling rainguns, centre pivot irrigators and drip systems', '2022-07-16 10:04:40'),
(6, 6, '<li>Flood- Give Irrigation at 15-20 days interval. </li><li> Avoid water stress at critical growth stages like crown root initiation (18-21 days), tillering stage (40-45 days), flowering stage (60-65 days), milk &amp; dough stage. </li><li>In water scarcity areas, give at least three irrigation at these stages, but yield will be reduced by 20-30%.</li>', 'Drip and sprinkler irrigation systems', '2022-07-16 10:12:34'),
(7, 9, '<li>Drip- Drip Irrigation Schedule (Use dripper or inline dripper system rather than microtubes for good results)<br> 1.After Planting: 1-4 weeks- 4 liter/plant<br> 2.Juvenile Phase: 5-9 weeks: 8-10 Liter/plant<br> 3.Critical Growth Stage 10-19 weeks- 12 liter/pl <br>4.Flower bud differentiation Stage 20-32 weeks16-20 liter/plant <br>5.Shooting Stage 33-37 weeks: 20 liter/plant &amp; above <br>6.Bunch Development Stage:38-50 weeks: 20 liter/plant and above</li><li>Flood-3-4 days in hot days &amp; 7-8 days interval in cold days</li>', ' Flood or Furrow irrigation, Trench irrigation, Drip Irrigation and Fertigation.', '2022-07-16 10:17:50'),
(8, 10, '<li>Flood-8-10 days interval. </li><li> Summer season-5-6 days interval.</li><li>First irrigation should be given 4-5 days after sowing. </li><li>Critical stages for irrigation-<br>Flowering stage (20-30 days)<br> Peg formation (40-45 days) <br>Pod development stage (65-70 days)</li>', 'Border strip method is the most suitable surface method of irrigation for groundnut.', '2022-07-16 10:23:17'),
(9, 11, '<li>Especially during the initial stage, go for light irrigation, Bearing plants require nourishing with watering at 10-15 days interval in dry days while maintaining a gap of 15-20 days in winter.</li>', 'Drip irrigation, Spot Irrigation', '2022-07-16 10:27:21'),
(10, 12, '<li> Drip-once in 3 days.</li><li>Flood- First irrigation should be light and given 5-7 days after planting and subsequent irrigation are given at 7-15 days interval depending upon the climatic condition and soil type.</li>', 'drip irrigation (labor intensive), sprinkler systems, overhead rain guns and boom irrigation.', '2022-07-16 10:30:46'),
(11, 13, '<li>Drip-On alternate day</li><li>Flood- Twice in a week (based on rainfall).</li><li>Summer season-3-4 days interval. </li><li>After every harvesting of brinjal one irrigation should be provided.</li>', ' Flood or Furrow irrigation, Trench irrigation, Drip Irrigation and Fertigation.', '2022-07-16 10:33:33'),
(12, 14, '<li>Sprinkler - Everyday</li><li>Flood- Once in a week (based on soil type)</li><li>1st irrigation immediately after sowing.</li><li>2nd irrigation on the third day.</li>', 'Drip, sprinkler irrigation', '2022-07-16 10:39:02'),
(13, 16, '<li>Flood: 7-10 days interval</li><li>Drip: 1-2 days interval</li><li>Towards maturity irrigation should be given at a longer interval.</li>', ' Flood or Furrow irrigation, Trench irrigation, Drip Irrigation and Fertigation.', '2022-07-16 10:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `land-preparation`
--

CREATE TABLE `land-preparation` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `land-preparation` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land-preparation`
--

INSERT INTO `land-preparation` (`id`, `crop-id`, `land-preparation`, `time-stamp`) VALUES
(3, 1, '<li>Plough the land 1 or 2 times based on soil type.</li><li>Mix the following in field and keep it in open air for 10 days for proper decomposition-FYM - 2 tons Composting Bacteria - 3kg. </li><li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth.</li><li>Bed preparation- Prepare beds of 45 cm width and 10 cm height with convenient length with the help of tractor.</li>', '2022-07-06 10:49:50'),
(4, 2, '<li>Ploughing method- Plough the land 1 or 2 times based on soil type. </li><li>Mix the following in field and keep it in open air for 10 days for proper decomposition-FYM- 2 tonns Composting Bacteria- 3kg</li><li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth.</li><li>Prepare ridges and furrows 45 cm apart with the help of tractor/ manually.</li>', '2022-07-06 10:53:11'),
(6, 3, '<li>Ploughing method - Plough the land 1 or 2 times based on soil type.</li><h4>Basal dose</h4><li>Mix the following in field and keep it in open air for 10 days for proper decomposition• FYM-2 tonns</li><li>Composting Bacteria- 3kg</li><li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth.</li><h4>Bed preparation</h4><li>Prepare ridges and furrows 90 cm apart with the help of tractor.</li>', '2022-07-06 12:17:09'),
(7, 5, '<li>Plough the land 1 or 2 times based on soil type</li><li>5 tons FYM + 2 kg Nitrogen fixing bacteria + 2 kg Phosphorus solubilizing bacteria + 2 kg Potash mobilizing bacteria + 2 kg Zink solubilizing bacteria - Mix all and apply 6 inch deep with rotavator or mix manually per acre in soil. </li><h4>Bed preparation </h4><li>Prepare Ridges and furrows at 120 cm apart.</li>', '2022-07-06 12:19:52'),
(10, 6, '<li>Ploughing method- Plough the land 1 or 2 times based on soil type.</li><li>Mix the following in field, and keep it in open air for 10 days for proper decompositionFYM-2 tons Composting Bacteria- 2 kg </li><li> Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth.</li>', '2022-07-06 12:43:58'),
(11, 9, '<li>Prior to planting banana, green manuring crop like dhaincha, cowpea etc. can be grown.</li><li>In wetlands and hilly areas no land preparation is needed and pits are directly taken in the required spacing. </li><li>Ploughing method- Prepare land to a fine tilth by Rotavator. </li><li>As it is a heavy feeder crop and require very fertile land with good moisture, apply-FYM- 15 tonnes/acre + 5 kg Composting bacteria before last harrowing. </li><li>Field is leveled by passing a blade harrow or laser leveler (Land Leveling through Laser Leveler is one such proven technology that is highly useful in conservation of irrigation water. Laser land leveling is leveling the field within a certain degree of desired slope using a guided laser beam throughout the field.) </li><li>For Hill Banana: Clean the jungle and construct contour stone walls.</li><li>Ridges and furrows are made and the pits (30 cm x 30 cm x 30 cm) are dug and filled up with well decomposed FYM/compost.</li>', '2022-07-06 12:57:48'),
(12, 10, '<li>Ploughing method- Plough the land 1 or 2 times based on soil type.</li><li> Mix the following in field and keep it in open air for 10 days for proper decompositionFYM-2 tons Composting Bacteria- 3 kg </li><li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth.</li><li>Bed preparation- Prepare ridges and furrows 1 ft or 1.5 ft apart with the help of tractor.</li>', '2022-07-06 13:10:37'),
(13, 11, '<li>Land should be ploughed, cross ploughed and leveled properly. </li><li>Planting is done on terraces against slopes in hilly areas.</li><li>Lime plants are extremely vulnerable to water stagnation in rainy season, proper drainage system both in the hills and plains are essential criterion.</li>', '2022-07-06 13:17:21'),
(14, 12, '<li>Plough the land 1 or 2 times based on soil type.</li><li>Mix the following in field and keep it in open air for 10 days for proper decompositionFYM-2 tons Composting Bacteria- 3kg.</li><li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth.</li>', '2022-07-06 13:22:57'),
(15, 13, '<li>Ploughing method-Plough the land 1 or 2 times based on soil type.</li><li>Mix the following in field, and keep it in open air for 10 days for proper decompositionFYM-2 tons Composting Bacteria- 3kg</li><li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth </li><li>Bed preparation- Prepare ridges and furrows 2 ft or 3 ft apart with the help of tractor.</li><li>Plastic mulching For Drip irrigation - Plastic mulching is required. For Flood irrigation - Plastic mulching is not required.</li>', '2022-07-06 13:30:56'),
(16, 14, '<li> Deep ploughing, Add well decomposed cow dung to increase organic content of soil. </li><li>Then levelled soil and divide into small plots and channels.</li>', '2022-07-06 13:38:10'),
(17, 15, '<li> Ploughing method - Plough the land 1 or 2 times based on soil type.</li><li>Mix the following in field and keep it in open air for 10 days for proper decomposition-FYM - 2 tons Composting Bacteria - 3kg </li><li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth. </li><li>Bed preparation- Prepare beds of convenient length and height with the help of tractor. Then prepare small bunds to prevent wash out of seeds at one corner.</li>', '2022-07-06 13:44:27'),
(18, 16, '<li>Ploughing method - Plough the land 1 or 2 times based on soil type.</li><li>Apply 40 kg neem cake before last ploughing. </li><li> Mix the following in field, and keep it in open air for 10 days for proper decomposition - FYM - 3 tons Composting Bacteria - 3kg </li><li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth </li><li>Bed preparation - Raised beds of 1.2 m (4 feet) width and 30 cm height for sowing.</li>', '2022-07-06 13:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` mediumtext NOT NULL,
  `news` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `news`, `image`, `time-stamp`) VALUES
(4, 'ભાવનગર જિલ્લામાં સારો વરસાદ થતાં ખેડૂતોએ શરૂ કરી વાવણી', 'રાજ્યભરમાં જયારે ચોમાસાની ઋતુ સક્રિય બની છે. ત્યારે ભાવનગર શહેર અને જિલ્લાના મોટાભાગના વિસ્તારોમાં છેલ્લા પાંચ દિવસથી વરસાદી માહોલ જોવા મળી રહ્યો છે. જિલ્લાના અનેક વિસ્તારોમાં વાવણી લાયક વરસાદ વરસી રહ્યો છે.', '389580-bvr-vavni.jpg', '2022-07-13 05:56:04'),
(5, 'હોલસેલ બજારમાં લીંબુના ભાવમાં કડાકો પણ છૂટક બજારમાં ભાવ યથાવત', 'ભાવનગર જિલ્લામાં લીંબુ પકવતા ખેડૂતોના ફરી વળતાં પાણી થયાં છે, લીંબુના ભાવ માં ધરખમ ઘટાડો જોવા મળી રહ્યો છે, એક સમયે માર્કેટ યાર્ડમાં 150 થી 200 રૂપિયે કિલો વેચાતા ખેડૂતોના લીંબુ હાલ 60 થી 140 રૂપિયે વેચાઈ રહ્યા છે, જ્યારે રિટેઇલ માર્કેટમાં ગ્રાહકો ને હજુ પણ 250 થી 300 ના ભાવે લીંબુ લેવા પડે છે.\r\nકોરોનાકાળનો સમય ખેડૂતો માટે ખૂબ કપરો સાબિત થયો હતો, જ્યારે ખેડૂતો એ ખુલ્લા મનથી દર્દી નારાયણની સેવા માટે માત્ર 2 રૂપિયે કિલો લીંબુ વેચ્યા હતા. પરંતુ ત્યાર બાદ આવેલા તાઉ\'\'\'\'તે વાવાઝોડાએ ખેડૂતોની વર્ષોની મહેનત પર પાણી ફેરવી દીધું હતું. વાવાઝોડાના ભારે પવનના કારણે લીંબુના હજારો છોડવા મૂળ માથી ખેંચાઈ જતાં ખેડૂતોને વ્યાપક નુકશાન વેઠવાનો વારો આવ્યો હતો. \r\nતો બીજી તરફ વધેલા છોડ માં લીંબુનો ફાલ પણ ઘટી ગયો જેના કારણે લીંબુની પડતર કિંમતમાં ખૂબ વધારો થયો, જેની સામે માર્કેટ યાર્ડમાં પણ ખેડૂતોને વર્ષો બાદ લીંબુના 150 થી 200 રૂપિયા સુધીના યોગ્ય ભાવ મળતા થયા હતા. પરંતુ આ બધું માત્ર થોડા દિવસ ચાલ્યું અને ફરી જાણે કે ખેડૂતોના વળતાં પાણી થયાં હોય એમ લીંબુના ભાવ ફરી ઘટવા લાગ્યા છે. હાલ ખેડૂતોને લીંબુના 60 થી 140 રૂપિયા જેવા ભાવ મળી રહ્યા છે જે તેની મહેનત સામે ખૂબ ઓછા છે, જ્યારે લીંબુ પકવતા ખેડૂતો આઠ મહિના માવજત કરે ત્યારે લીંબુ તૈયાર થાય છે. જેં વેચતા કિલો લીંબુના 60 થી 140 રૂપિયા મળે છે જ્યારે એજ લીંબુ ખરીદી વેપારીઓ 200 રૂપિયા ના ભાવે વેચે છે, અને છૂટક માર્કેટમાં ગ્રાહકો પાસેથી એના ભાવ 250 થી 300 રૂપિયા કિલો દીઠ લેવામાં આવે છે. એટલે કે ખેડૂતોની આઠ મહિનાની મજૂરી સામે એક જ દિવસમાં વેપારી અને છૂટક ફેરિયાના પૈસા ડબલ થઇ જાય છે. જ્યારે ખેડૂતોને તેની પડતર પણ મળતી નથી, ત્યારે માર્કેટ યાર્ડમાં પૂરતા પોષણક્ષમ ભાવો મળી રહે એવી ખેડૂતો દ્વારા માંગ કરવામાં આવી હતી.\r\n\r\nલીંબુના ઘટી રહેલા ભાવ ને પગલે ભાવનગર માર્કેટ યાર્ડ ના વેપારી અને દલાલ એશોષિયેશન ના પ્રમુખ નરેન્દ્રસિંહ એ જણાવ્યું હતું કે હાલ માર્કેટ યાર્ડમાં લીંબુની આવક વધી રહી છે. જે પહેલા 1500 ગાંસડી આવતી હતી તે હાલ 2200 જેટલી આવક થઈ રહી છે અને સામે સાઉથ માથી પણ લીંબુની આવક શરૂ થતાં લીંબુના ભાવ માં ઘટાડો થયો છે. જ્યારે છૂટક બજારમાં ખૂબ ઊંચા ભાવે લીંબુ વેચાતા હોવા નો તેમજ સામે ખેડૂતો ને યોગ્ય ભાવ ના મળતા હોવાનો પણ સ્વીકાર કર્યો હતો.', '382277-lemon.jpg', '2022-07-13 05:58:54'),
(6, 'ગાય આધારિત ખેતી કરી એક પણ રૂપિયાના ખર્ચ વગર કરે છે કરોડોની કમાણી, વિદેશી ગોરાઓ પણ શિખવા આવે છે', 'દેશી ગાય આધારીત પ્રાકૃતિક ખેતી અત્યારના સમયમાં પ્રાકૃતિક ખેતી અંગે લોકોને જાગૃતતા કેળવાય એવું હવે સૌને સમજમાં આવી રહ્યું છે. સરકાર પણ આ અંગે લોકોને આ પ્રાકૃતિક ખેતીમાં જોડાવા અંગેની અપીલો સેમિનારો વગેરે કરી રહી છે. ત્યારે કચ્છના ખેડૂતો પણ છેલ્લા દસ-બાર વર્ષ થી આ ખેતી કરી અને પોતે કઈ રીતે આગળ આવ્યા છે એવી વાત આજે Zee મીડિયા સામે કરી હતી.<br>રાજેન્દ્ર ઠક્કર/ભુજ : દેશી ગાય આધારીત પ્રાકૃતિક ખેતી અત્યારના સમયમાં પ્રાકૃતિક ખેતી અંગે લોકોને જાગૃતતા કેળવાય એવું હવે સૌને સમજમાં આવી રહ્યું છે. સરકાર પણ આ અંગે લોકોને આ પ્રાકૃતિક ખેતીમાં જોડાવા અંગેની અપીલો સેમિનારો વગેરે કરી રહી છે. ત્યારે કચ્છના ખેડૂતો પણ છેલ્લા દસ-બાર વર્ષ થી આ ખેતી કરી અને પોતે કઈ રીતે આગળ આવ્યા છે એવી વાત આજે Zee મીડિયા સામે કરી હતી.<br>Vishwamangal ગૌરવ યાત્રા આજથી ૧૩ વર્ષ પહેલા શરૂઆત થયેલી ત્યારથી આ પ્રેરણા મળી અને ત્રણ દિવસની શિબિર બાદ આ પ્રાકૃતિક ખેતીની મહત્તા સમજીને અમે આ ખેતી શરૂ કરી છે. શરૂઆતના સમયે અમને થોડીક તકલીફ પડી પરંતુ ખર્ચ ના હોવાના કારણે અમને આર્થિક રીતે થોડોક સંઘર્ષ કરવો પડ્યો પણ એના ફળ બહુ જ મીઠા મળ્યા છે. ૧૦૦ ટકા પાક લીધો છે અને પૂરેપૂરી અમને સફળતા મળી છે. કોઇપણ પાક એવો નથી કે જે અમે અહીં પ્રાકૃતિક ખેતીની અંદર તેનું લાભ લીધો હોય. ઘઉં બાજરો મગ સહિતના ચણા ડુંગળી લસણ બાજરો 60 વરસ જુનો કાનપુરી બાજરો પોતે ઉઘાડી અને પોતે વેચાણ કરીએ છીએ. ', '367626-farming-case.jpg', '2022-07-13 06:03:06'),
(7, 'આ કામ માટે ખેડૂતોને 2 કરોડ રૂપિયા સુધીની મળશે લોન, વ્યાજમાં મળશે છૂટ, સરકાર આપશે ગેરંટી', 'જો કોઈ ખેડૂત FPO એટલે કે ફાર્મર પ્રોડ્યુસર ઓર્ગેનાઈઝેશન દ્વારા તેના કૃષિ ઉત્પાદનોને પ્રોસેસ કરવા માંગે છે, તો સરકાર તેને આમાં મદદ કરશે. તેને પ્રોસેસિંગ યુનિટ સ્થાપવા માટે 2 કરોડ રૂપિયા સુધીની લોન સરળતાથી મળી શકે છે. જેના પર ન માત્ર વ્યાજ માફી મળશે પરંતુ સરકાર ગેરંટી પણ આપશે. આનાથી ગ્રામીણ વિસ્તારોમાં રોજગારીની ઉપલબ્ધતા વધશે. આ દાવો કેન્દ્રીય કૃષિ મંત્રી નરેન્દ્ર સિંહ તોમરે કર્યો છે. તેઓ એગ્રીકલ્ચર ઈન્ફ્રાસ્ટ્રક્ચર ફંડ વિશે વાત કરી રહ્યા હતા.<br><br>\nતેમણે કહ્યું કે કૃષિ અને સંલગ્ન ક્ષેત્રો માટે આત્મનિર્ભર પેકેજ હેઠળ કેન્દ્રએ 1.5 લાખ કરોડ રૂપિયાથી વધુની જોગવાઈ કરી છે. તેમાંથી અત્યાર સુધીમાં રાજ્યોને 13 હજાર કરોડ રૂપિયાના પ્રોજેક્ટ મળ્યા છે. લગભગ 9 હજાર કરોડ રૂપિયાના પ્રોજેક્ટ્સને પણ મંજૂરી આપવામાં આવી છે, જે ટૂંક સમયમાં જમીની સ્તરે જોવા મળશે.<br>\nકેન્દ્રીય મંત્રી તોમરે આ વાત સરદાર વલ્લભભાઈ પટેલ યુનિવર્સિટી ઓફ એગ્રીકલ્ચર એન્ડ ટેક્નોલોજી, મેરઠ હેઠળના કૃષિ વિજ્ઞાન કેન્દ્ર, અમરોહાના વહીવટી બિલ્ડિંગના ઉદ્ઘાટન અને KVK, મુરાદાબાદ-2ના વહીવટી બિલ્ડિંગના શિલાન્યાસ પ્રસંગે કહી હતી. તેમણે કહ્યું કે ખેડૂતોને આત્મનિર્ભર બનાવવા અને કૃષિ ક્ષેત્રના વિકાસ માટે ખાનગી રોકાણ જરૂરી છે. કેન્દ્ર સરકાર ખેડૂતોને આત્મનિર્ભર બનાવવા માટે સતત પ્રયાસો કરી રહી છે.<br><br>\nએફપીઓથી નાના ખેડૂતોને ફાયદો થશે<br>\nતોમરે દાવો કર્યો કે ખેડૂતોને આત્મનિર્ભર બનાવવા માટે ઘણી યોજનાઓ ચલાવવામાં આવી રહી છે. જેનો ખેડૂતોને લાભ મળી રહ્યો છે. કેન્દ્ર સરકારે પણ કૃષિ ક્ષેત્રમાં ખાનગી રોકાણ વધારવાની દિશામાં કામ શરૂ કર્યું છે. દેશભરમાં 10,000 FPO બનાવવાનું પણ કામ ચાલી રહ્યું છે. જો વધુને વધુ નાના ખેડૂતો એફપીઓમાં જોડાશે તો ખેતી હેઠળનો વિસ્તાર વધશે, ખેડૂતો નવી ટેકનોલોજી સાથે જોડાઈ શકશે, ઉત્પાદકતા સારી રહેશે અને ઉત્પાદનનું પ્રમાણ વધશે. આનો ફાયદો એ પણ થશે કે ખેડૂતો ઉત્પાદનોની વાજબી કિંમત માટે ભાવતાલ કરી શકશે.<br><br>\nશું કરી રહી છે સરકાર?<br>\nકૃષિ મંત્રીએ કહ્યું કે, ખેતી સામે અનેક પડકારો છે. તેથી ઉત્પાદકતા વધે, ખાતર અને બિયારણ સમયસર મળે, સિંચાઈની સુવિધા મળે અને ખેડૂતોને તેમના પાકના વાજબી ભાવ મળે તેવા પ્રયાસો કરવામાં આવી રહ્યા છે. આમાં ભારતીય કૃષિ સંશોધન પરિષદ મદદરૂપ છે, જે પોતાની સંસ્થાઓ દ્વારા ખેડૂતોને નવી ટેકનોલોજી આપી રહી છે. નવા સંશોધનો ખેડૂતોની ઉત્પાદકતા વધારવામાં મદદ કરે છે અને અર્થતંત્રને મજબૂતી આપે છે.<br><br>\nડ્રોનથી ખેતીમાં શું ફાયદો થશે<br>\nટેક્નોલોજીનો વિસ્તાર કરતા કેન્દ્ર સરકારે ડ્રોન પોલિસી જાહેર કરી છે. જો ડ્રોનનો ઉપયોગ વધશે તો જંતુનાશકોની બચત થશે, તેનો યોગ્ય ઉપયોગ થઈ શકશે. આ સાથે, માનવ શરીરને આડઅસરોથી પણ સુરક્ષિત કરવામાં આવશે. ડ્રોન પોલિસી ગ્રામીણ વિસ્તારોમાં રોજગારીની તકો પણ વધારશે. સરકારે કૃષિમાં ડ્રોનના ઉપયોગ માટે વિવિધ કેટેગરીમાં સબસિડી આપવાનો પણ નિર્ણય કર્યો છે.', 'Agriculture-1-300x169.jpg', '2022-07-13 06:06:51'),
(8, 'સૌરાષ્ટ્રના ખેડૂતની કમાલ, ઇઝરાયેલી ખારેકની ખેતી કરી મેળવે છે લાખોનો નફો', 'મુનાફ બકાલી, જેતપુર : સૌરાષ્ટના ખેડૂત (Saurashtra Farmer) હવે પરંપરાગત ખેતી સાથે બાગાયતી ખેતી (Farmer) પણ કરવા લાગ્યા છે. જેથી એક પાકમાં નુકસાન જાય તો બીજા પાકમાં ફાયદો થાય છે. રાજકોટ જિલ્લાના જેતપુરના મંડલીકપુર ગામના ખેડૂતે પોતાના 11 વીઘા ખેતરમાં ઈજરાયેલ ખારેકની કુદરતી ખેતી કરી છે.<br><br>ટીસ્યુક્લચરથી ખારેકની ખેતી<br>ખારેકની મુખ્યત્વે ખેતી કચ્છમાં થાય છે. કચ્છનું ફળ ગણાતી ખારેકનું સૌરાષ્ટમાં પણ વાવેતર થવા લાગ્યું છે. જેતપુરના ખેડૂત ટીસ્યુક્લચરથી ખારેકની ખેતી કરે છે અને ઉચ્ચ ગુણવતાની ખારેકનું સફળ ઉત્પાદન કરે છે. હાલ પરંપરાગત ખેતીમાં કમોસમી વરસાદ વાવાઝોડું સહિતના મારને લઈ ખેડૂતોને મોટા પ્રમાણમાં નુકસાન જઈ રહ્યું છે. ત્યારે ખેડૂત હવે પોતાના ખેતરમાં પરંપરાગત ખેતી ઉપરાંત બગાયતી ખેતી કરતા થયા છે. ત્યારે જેતપુર તાલુકાના મંડલીકપુર ગામના ખેડૂત ભાઈઓએ પોતાના અગિયાર વીઘા ખેતરમાં ઈઝરાયલી ખારેકનું વાવેતર કર્યું છે. ખેડૂતે ખારેકના એક પ્લાન્ટના 3500 રૂપિયા લેખે લઈ વાવેતર કર્યું છે જેમણે એક વીઘામાં નેવું હજાર જેટલો ખર્ચ થયો છે અને હાલમાં એક વીઘે પચાસ હજારનું ઉત્પાદન ખેડૂત કરે છે.', 'Jetpur-farmer-16556986883x2.jpg', '2022-07-13 06:17:17'),
(9, 'મહેનતની મોસમ-વડોદરા જિલ્લામાં 17 ટકા જમીનમાં વાવણી થઈ', 'શહેર- જિલ્લાના તાલુકાઓમાં નોંધપાત્ર વરસાદ થવાના કારણે કૃષિક્ષેત્રમાં હવે મહેનતની મોસમ આવી છે. જિલ્લામાં હાલમાં વાવણી કાર્ય પૂર જોશમાં ચાલી રહ્યું છે. કુલ વાવેતર વિસ્તારના 17 ટકા જેટલા ક્ષેત્રમાં વાવણી થઇ ચૂકી છે. હજું પણ વાવણી કાર્ય ચાલી રહ્યું છે.<br><br>નીધિ  દવે/વડોદરા: શહેર- જિલ્લાના તાલુકાઓમાં નોંધપાત્ર વરસાદ (Rain) થવાના કારણે કૃષિક્ષેત્રમાં (Agriculture) હવે મહેનતની મોસમ આવી છે. જિલ્લામાં હાલમાં વાવણી કાર્ય પૂર જોશમાં ચાલી રહ્યું છે. કુલ વાવેતર વિસ્તારના 17 ટકા જેટલા ક્ષેત્રમાં વાવણી થઈ ચૂકી છે. હજું પણ વાવણી કાર્ય ચાલી રહ્યું છે. સારો વરસાદ થવાની રાહ જોતા ખેડૂતો મેઘરાજાનાઆશીર્વાદ સાથે જમીનમાં વાવણિયા કરી રહ્યા છે.<br><br>વડોદરા જિલ્લામાં છેલ્લા ત્રણ વર્ષના સરેરાશ આંકડાઓને ધ્યાને રાખતા કુલ વાવેતર વિસ્તાર 2, 45, 978 સામે અત્યાર સુધીમાં 42, 627 હેક્ટર જમીનમાં વાવણી થઇ ચૂકી છે. તાલુકા પ્રમાણે જોઇએ તો કરણજણમાં સૌથી વધારે 29102, ડભોઇમાં 7588, ડેસરમાં 110, પાદરામાં 2008, સાવલીમાં 396, શિનોરમાં 581, વડોદરા તાલુકામાં 2544 અને વાઘોડિયા તાલુકામાં 298 હેક્ટર જમીનમાં ખરીફ પાકની વાવણી થઇ છે.<br><br>પાક પ્રમાણે જોઇએ તો ડાંગરની 61, તુવેરની 2407, સોયાબીનની 540, કપાસની 36325, ગુવારની 11, શાકભાજીની 1469 અને ઘાસચારાની 1418 હેક્ટર જમીનમાં વાવણી થઇ છે. આ વર્ષે સારો એવો પાક થયો છે. જેને લઈને ખેડૂતો પણ ખુશ છે. તથા હાલમાં એમની મહેનત ખૂબ જ વધી ગયેલ છે. કારણે કે, હજી તો આ ચોમાસાની શરૂઆત છે, આવનારા દિવસોમાં વધુ વરસાદ પડે એ પહેલાનો સમય ખેડૂતો માટે ખુબ જ અગત્યનો હોય છે.<br><br>', 'VDR-Farmers-01.jpg', '2022-07-13 06:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `nursery`
--

CREATE TABLE `nursery` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `details` longtext NOT NULL,
  `duration` mediumtext NOT NULL,
  `seed-rate` mediumtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursery`
--

INSERT INTO `nursery` (`id`, `crop-id`, `details`, `duration`, `seed-rate`, `time-stamp`) VALUES
(16, 1, '<li>For transplanting in 1 acre area, 0.12 acre 9 (Guntha) nursery is required.</li><li>Prepare six beds of size 3 m length  X 0.6 width X 10 cm heigth.</li>', '40 days', '1.0-1.5 kg/acre', '2022-07-15 06:07:11'),
(20, 13, '<li>For transplanting in 1 acre area, 0.1 acre (4 Guntha) nursery is required.</li><li>Prepare four beds of size 7.2 m length X 1.2 m width X 10cm height.</li><li> Sow the seeds in line at 5 cm apart and cover with soil.</li><li>Water the nursery beds daily twice till germination and once after germination.</li><li>Ten days before transplanting, reduce the quantity of water application to the nursery beds to harden the seedlings.</li><li>After 3 days of seed germination drench the seedbed with Ridomil @ 20 gms. in 10 lit of water, to protect the seedlings from damping-off disease.</li><li>Spray 19:19:19 @ 5 gm + Thiamethoxam @ 0.25 gm per lit water at 25 days after sowing. </li><h4>OR</h4><li>Fill the pro trays with Cocopeat @ 1.2 kg Cocopeat per tray. </li><li>Sow the treated seeds in protrays @ 1 seed per\ncell.</li><li>Cover the seed with cocopeat and keep the trays one above the other and cover with a polythene sheet till germination starts (5 Days).</li><li>After 6 days, place the pro trays with germinated seeds individually on the raised beds inside a shade net.</li>', '30-35 days', '160-161 gram/acre', '2022-07-19 11:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `nutrient-management`
--

CREATE TABLE `nutrient-management` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `nm-timely` longtext NOT NULL,
  `nm-late` mediumtext NOT NULL,
  `nm-rain` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutrient-management`
--

INSERT INTO `nutrient-management` (`id`, `crop-id`, `nm-timely`, `nm-late`, `nm-rain`, `time-stamp`) VALUES
(2, 1, 'For varieties 40:20:20 N:P:K kg/acre.<li>At transplanting apply Urea- 43 kg Single Super Phosphate- 125 kg Muriate of Potash-33 kg</li><li>30 Days after transplant Urea- 22 kg </li><li>45 Days after transplant Urea- 22 kg</li>', '', '', '2022-07-19 10:46:14'),
(3, 2, '<li>20:30:18 N:P:K kg per acre.</li><li>At sowing apply44 kg Urea 187 kg SSP</li><li>30 Days after sowing30 kg Mop</li>', '', '', '2022-07-19 10:51:09'),
(4, 3, '<h5>For improved varieties 32:16:16 N:P:K kg/acre.</h5><li>at sowing apply - Urea- 15 kg Single Super Phosphate- 35 Muriate of Potash- 100 kg </li><li>30 Days after sowing Urea- 28 kg</li><li>60 Days after sowing Urea- 28 kg</li><br><h5>For Hybrid varieties 40:20:20 N:P:K NPK kg/acre.</h5><li>at sowing apply - Urea- 17 kg Single Super Phosphate- 43 Muriate of Potash- 125 kg</li><li>30 Days after sowing Urea- 35 kg </li><li>60 Days after sowing Urea- 35 kg</li><br><h5>For Bt cotton varieties 50:26:26 N:P:K kg/acre</h5><li>at sowing apply - Urea- 22 kg Single Super Phosphate- 163 kg Muriate of Potash-43 kg </li><li>30 Days after sowing Urea- 43 kg </li><li>60 Days after sowing Urea- 43 kg</li>', '', '', '2022-07-19 10:52:05'),
(5, 5, 'For Adsali 160:68:68 N:P:K kg/acre.<br>\n<li>At Sowing- Urea- 35 Kg, Single Super Phosphate212 Kg, Muriate of Potash- 57 Kg </li>\n<li>42-56 days after Sowing- Urea- 139 kg </li>\n<li>84-112 days after sowing- Urea- 35 kg</li>\n<li>130-150 days after sowing- Urea- 139 Kg, Single Super Phosphate- 212 Kg, Muriate of Potash-57 Kg</li>\n<br>\nPre Seasonal sowing 136:68:68 N:P:K kg/acre.\n<li>At Sowing- Urea- 30 Kg, Single Super Phosphate213 kg, Muriate of Potash-57 Kg</li>\n<li>42-56 days after Sowing- Urea- 118 Kg</li>\n<li>84-112 days after sowing- Urea- 30 Kg </li>\n <li>130-150 days after sowing- Urea- 118 Kg, Single Super Phosphate- 213 kg, Muriate of Potash-57 Kg</li>\n <br>\n For Suru 100:46:46 N:P:K kg/acre.\n <li>At Sowing- Urea- 22 kg , Single Super Phosphate150 Kg, Muriate of Potash- 40 Kg</li>\n  <li>42-56 days after Sowing- Urea-87 Kg</li>\n  <li>84-112 days after sowing- Urea- 22 kg </li>\n  <li>130-150 days after sowing- Urea- 87 kg, Single Super Phosphate- 138 Kg, Muriate of Potash-37 Kg</li>', '', '', '2022-07-19 10:55:22'),
(6, 6, 'For Irrigated and timely sowing\n<li>Total Requirement- 48:24:16 N:P:K kg/acre</li>\n<li>At sowing apply Urea- 52 kg Single super phosphate- 150 kg Muriate of potash- 27 kg</li>\n<li>21 Days after sowing Urea- 52 kg</li><br>\nFor irrigated and late sowing \n<li>Total Requirement- 32:16:16 N:P:K kg/acre</li>\n<li>At sowing apply Urea- 34.5 kg Single super phosphate 100 kg Muriate of potash- 27 kg </li>\n<li>21 Days after sowing Urea- 34.5 kg</li><br>\nRainfed sowing\n<li>Total Requirement- 16:8:00 N:P:k kg/acre </li>\n<li>At sowing apply. Urea- 35 kg Single super phosphate- 50 Kg</li>\n<li>At the time of grain filling-Spray 2% urea</li>', '', '', '2022-07-19 10:58:56'),
(7, 9, '<li>Total requirement- 200 gm N, 60 gm P &amp; 200 gm K per plant.</li><li>30 days within plantingUrea-82 gm/plant Single Super phosphate- 365 gm/plant Muriate of potash-83 gm/plant </li><li>75 Days after planting\nUrea- 82 gm/plant </li><li>120 Days after planting\nUrea- 82 gm/plant </li><li>165 Days after planting Urea- 82 gm/plant Muriate of potash-83 gm/plant </li><li>210 Days after planting\nUrea- 36 gm/plant </li><li>255 Days after planting Urea- 36 gm/plant Muriate of potash-83 gm/plant </li><li>300 Days after planting Urea- 36 gm/plant Muriate of potash-83 gm/plant </li><li>Micronutrient requirements</li><li>2nd &amp; 4th month Spray Zn EDTA 50 gm + Fe EDTA 50 gm in 10 lit water helps to increase yield and quality of banana. </li><li>5th &amp; 7th month Soil application of Zinc sulphate 15 gm &amp; Ferrous sulphate 15 gm in 150 gm FYM/plant.</li><li>Fertigation For higher yield in Banana 75% of total N &amp; K (150 gm) and full P (60 gm) will be recommended by drip application. </li><li>For drip application-</li><li>1-16 week-Urea- 4.5 kg/1000 plants/week Mono Ammonium Phosphate (12:61:00)- 6.5 kg/ 100 plants/week Muriate of Potash-3 kg/1000 plants/week</li><li>17-28 week-Urea- 13.5 kg/1000 plants/week Muriate of Potash-8.5 kg/1000 plants/week </li><li>29-40 weeks-Urea- 5.5 kg/1000 plants/week Muriate of Potash- 7 kg/1000 plants/week </li><li>41-44 weeks Muriate of Potash- 5 kg/1000 plants/week</li>', '', '', '2022-07-19 11:00:05'),
(8, 10, '<li>Total Requirement-10:20:00 N:P:K kg/acre.</li><li>At sowing apply22 kg Urea 123 kg Single Super Phosphate 80 kg Gypsum.</li><li>45 Days after sowing\n80 kg Gypsum (Gypsum is added for yield improvement).</li>', '', '', '2022-07-19 11:01:30'),
(9, 11, '<li>N is applied in two doses during March and October. </li><li>FYM, P205 and K20 are to be applied in October.</li><li>1st Year: FYM-5-10kg + N-200 gm (Urea- 400gm) + P-100 gm (SSP-650 gm)+ K-100 gm(MOP-180 gm). </li><li>Annual increase up to 5th Year:- FYM-5-10 kg + N- 100 gm( Urea- 200gm) + P-25 gm (SSP-162 gm) + K-40 gm(MOP-72 gm).</li><li>From 6th Year Onward:- FYM-10-25 kg, N-600 gm(Urea- 1200 gm)+ P-200 gm (SSP-1300 gm) + K-300 gm(MOP-540 gm). </li><li>Spray Zinc Sulphate @ 0.5% (500 g/100 lit of water) three times a year during March, July and October.</li>', '', '', '2022-07-19 11:02:02'),
(10, 12, '<li>40:55:40 NPK kg per acre</li><li>At sowing apply43 kg Urea 338 kg SSP 67 kg Mop 25 kg MgSO4 </li><li>30 Days after sowing\n22 kg Urea </li><li>45 Days after sowing22 kg Urea</li>', '', '', '2022-07-19 11:02:32'),
(11, 13, 'For varieties 60:30:30 N:P:K kg/acre.<li>At transplanting apply-Urea- 65 kg Single Super Phosphate- 188 kg Muriate of Potash- 50 kg </li><li>30 Days after transplant-Urea- 33 kg </li><li>45 Days after transplantUrea-33 kg</li>', '', '', '2022-07-19 11:02:59'),
(12, 14, '', '<li>The amount of manure and fertilizer depends on the fertility of the soil. •Generally 10-12 tons of cow dung or compost or 2-3 tons of vermicompost per Acre. </li><li>40 kg Nitrogen, 20 kg Phosphorus and 20 kg potash per acre is required.</li><li>For this 70 kg Urea, 43 kg Diammonium phosphate and 33 kg Muriate of potash per Acre is required.</li><li> Full quantity of Manure, DAP &amp; MOP and half quantity of urea should be mixed in the soil at the time of land preparation of the field. </li><li>Remaining quantity of urea should be applied in standing crop after 30-40 days. \n</li><li>The use of micronutrients increases the yield.</li><li>10 kg Zinc sulphate per acre should be applied once in 3 years.</li><li>Use of drip irrigation and fertigation increases the yield, use water soluble fertilizers through drip irrigation.</li>', '', '2022-07-19 11:03:32'),
(13, 15, '<li>Total requirement-8:16:8 NPK kg/acre </li><li>At sowing apply. Urea-9 kg Single super phosphate-98 kg Muriate of Potash- 13 kg </li><li>30 days after sowingUrea-9 kg</li>', '', '', '2022-07-19 11:04:16'),
(15, 16, '<li>Total requirement: 40:20:20 N:P:K kg/acre. </li><li>At sowing apply-Urea- 45 kg Single super phosphate- 105 Kg Murate of potash- 35 kg </li><li>30 Days after sowing-Urea- 15 kg </li><li>45 Days after sowing-Urea- 15 kg</li><li>60 Days after sowing-Urea- 15 kg\n</li>', '', '', '2022-07-19 11:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `preventive-measure`
--

CREATE TABLE `preventive-measure` (
  `id` int(11) NOT NULL,
  `disease-id` int(11) NOT NULL,
  `pest-name` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recent-updates`
--

CREATE TABLE `recent-updates` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recent-updates`
--

INSERT INTO `recent-updates` (`id`, `image`, `msg`, `time_stamp`) VALUES
(1, 'ernest-porzi-Z-Y6I45f9kQ-unsplash.jpg', '\"Agriculture is the most healthful, most useful and most noble employment of man.\"', '2022-06-30 14:03:57'),
(3, 'hans-ripa-4cEmT3AsoVc-unsplash.jpg', 'There are two spiritual dangers in not owning a farm. One is the danger of supposing that breakfast comes from the grocery, and the other that heat comes from the furnace.', '2022-06-30 14:06:21'),
(4, 'karl-wiggers--X401Lkrm0g-unsplash.jpg', 'My grandfather used to say that once in your life you need a doctor, a lawyer, a policeman, and a preacher. But every day, three times a day, you need a farmer.', '2022-06-30 14:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `root-deep-treatment`
--

CREATE TABLE `root-deep-treatment` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `details` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `root-deep-treatment`
--

INSERT INTO `root-deep-treatment` (`id`, `crop-id`, `details`, `time-stamp`) VALUES
(9, 13, '<li>Take 20 liter water in a flat container.</li><li>Mix 40 gm Carbendazim + 40 ml Imidacloprid.</li><li>Dip the roots in solution for 5 minutes before transplanting.</li><li>For plants in pro trays Dip the pro trays in container for 5 min.</li>', '2022-07-13 09:43:43'),
(10, 9, '<li>Dip the selected suckers in 0.2% Carbendazim (2g/liter of water) solution for about 15-20 minutes and keep it in shade overnight before planting to control Fusarium wilt disease.</li>', '2022-07-13 09:51:57'),
(11, 1, '<li>Take 20 L water in flat container.</li><li>Mix 40 gram Carbendazim + 40 ml Imidacloprid.</li><li>Dip the roots in solution for 5 min before transplanting.</li>', '2022-07-13 09:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `seeds`
--

CREATE TABLE `seeds` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `seed-name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `duration` int(11) NOT NULL,
  `yield` varchar(500) NOT NULL,
  `season` varchar(500) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seeds`
--

INSERT INTO `seeds` (`id`, `crop-id`, `seed-name`, `description`, `duration`, `yield`, `season`, `image`, `time_stamp`) VALUES
(1, 1, 'Bhima super', ' Red onion variety for kharif season. it produce mostly single centered bulbs', 140, '110', 'kharif', 'bhima super onion seed.jpeg', '2022-06-25 04:03:07'),
(18, 1, 'Bhima red', 'This variety grown in kharif and rabi season. ', 140, '120', 'kharif', 'bhima red onion seed.jpeg', '2022-06-25 04:07:36'),
(20, 5, 'Co-86032', ' Drought tolerant. Ratoon gives Excellent yield.', 280, '384', 'any', '86032-sugar-cane.jpg', '2022-06-25 04:39:49'),
(21, 5, 'Co M-0265', 'Tolerant to drought and salinity and good ratoon. ', 540, '470', 'any', 'co m-0265.jpg', '2022-06-25 04:46:18'),
(22, 5, 'Co C-671 (Vasant-1)', 'Early variety, high sugar content, good for jaggery making. ', 300, '480', 'any', 'co c-671 sugarcane seed.png', '2022-06-25 04:50:30'),
(23, 6, 'Niphad-34', ' Good for late sowing ', 97, '15', 'ravi', 'wheat-seed niphad-34.png', '2022-06-25 04:55:04'),
(24, 6, 'NIAW-301(tryambak)', 'Sarbati variety for timely sowing ', 100, '17', 'ravi', 'Niaw-301.webp', '2022-06-25 05:02:35'),
(25, 6, 'NIAW-917(Tapowan)', 'Sarbati variety for timely sowing ', 110, '18', 'ravi', 'niaw-917.jpg', '2022-06-25 05:07:27'),
(26, 6, 'Lok-1', '(This species is more popular among farmers, Dana Bada, Ambar and Plant middle height, suitable for Chapati, are the old species affected by all diseases.)\r\n\r\n ', 130, '20', 'ravi', 'lok-1 wheat.jpg', '2022-06-27 06:11:17'),
(28, 1, 'GBR-47', ' Our seeds are the easiest and quickest way of growing healthy and juiciest onions.', 110, '38', 'kharif', 'gbr-47-onion-seeds-1627483808-5917790.jpeg', '2022-07-14 10:42:06'),
(29, 2, 'JS-335', 'Resistant to bacterial pustule, bacterial blight and tolerant to green mosaic.\r\nThe soybean cultivation reached to its height with the release of this early duration and very high yielding variety. It possesses wide adaptability, good germinability, semi dwarf habit, non lodging, non shattering characteristics.', 100, '40', 'kharif', 'product-jpeg-500x500.jpg', '2022-07-14 10:48:24'),
(30, 2, 'NRC-37', ' Moderately resistant to syndromes such as collar rot, bacterial pustules, pod blight and bud blight. Moderately resistant to stem fly and leaf miner.\r\n Semi erect plant growth habit. Spherical seed shape with yellow seed colour. The variety NRC 37 was found superior for seed yield by 17.8 % over national check JS 335 as well as 35.7 and 47.2 % over local check GS 1 and GS 3, respectively. The seed possesses 19.2 % oil and 46.8 % Protein.', 105, '12', 'kharif', 'download.jpg', '2022-07-14 10:58:49'),
(31, 2, 'MAUS 612', 'Rust resistant, three seeded pods 90%, non shattering for 15 days after maturity.', 95, '13', 'kharif', 'certified-soybean-seed-maus-162-500x500.jpeg', '2022-07-14 11:02:14'),
(32, 2, 'MAUS 162', 'Tolerant to Bacterial, Rhizoctonia root rot and aerial blight, collar rot and charcoal rot. dark green leaves, purple flower ', 100, '10', 'kharif', 'maus-162-soybean-seeds-1588404098-4921196.jpg', '2022-07-14 11:05:10'),
(33, 3, 'BNBT', 'The biggest advantage of BN-Bt\r\nover other hybrid Bt varieties in market is that farmers can produce their own\r\nseeds for at least five years as against the current practice where they need to\r\nbuy fresh seeds every year. BN-Bt was formally released by the Indian Council of\r\nAgriculture Research (ICAR) last year but is being made available for commercial\r\nuse to farmers only from the coming Kharif season.', 165, '16', 'kharif', '11_20120215.jpg', '2022-07-14 11:22:32'),
(34, 3, 'Ajeet-155 Bg-II', 'Suitable for rainfed as well as irrigated conditions. Highly tolerant to water stress condition. highly tolerant to sucking pest and leaf reddening. ', 150, '15', 'kharif', 'Ajeet-155 Bg-II.jpg', '2022-07-14 11:32:22'),
(35, 3, 'Ajeet-177 BG-II', 'Suitable for rainfed as well as irrigated conditions. Big boll size with good bearing and retention capacity. highly tolerant to leaf reddening.  ', 160, '15', 'kharif', 'Ajeet-177 Bg-II.jpg', '2022-07-14 11:35:37'),
(40, 9, 'Basrai', ' Superior fruit qualities, dwarf ness sweet aroma when fully ripe. Skin greenish yellow to straw yellow on ripening with 4 mm thick though spongy with loose whitish fiber underneath peels readily.', 395, '180', 'any', 'bird-nest-in-banana.jpg', '2022-07-14 12:13:51'),
(41, 9, 'Shrimanti', ' Fairly tall and robust plant weighing a bunch of 18-20 kg. fruits arebold, stocky, knobbed and pale green in colour.', 375, '250', 'any', 'gettyimages-892779264-612x612.jpg', '2022-07-14 12:19:28'),
(42, 10, 'phule pragati', 'Early, Non spreading type (upati) ', 85, '7', 'kharif', 'images (1).jpg', '2022-07-15 09:48:35'),
(43, 13, 'Manjari', 'Purple colour oval round fruits. All season variety. ', 60, '55', 'kharif', 'MANJARI-BRINJAL_2.jpg', '2022-07-15 09:57:30'),
(44, 13, 'Pusa hybrid-5', 'Non-spiny, with semi-erect branches. fruits long, glossy attractive, dark purple with partially pigmented peduncle weighing about 100 g each.', 80, '100', 'kharif', 'brinjal_ppl_900x.jpg', '2022-07-15 10:01:51'),
(45, 13, 'Pant Rituraj', 'Fruits are almost round. Attractive purple in colour, soft, less seeded and endowed with good flaour. It possesses field resistance to bacterial wilt. ', 75, '127', 'kharif', 'br.jpg', '2022-07-15 10:08:51'),
(46, 14, 'godavari', ' This variety has a medium sized bulb with purple-white color, it matures in 140 to 145 days. The variety has low incidence of diseases and pests and is suitable for storage.', 140, '48', 'any', 'download (1).jpg', '2022-07-15 10:19:23'),
(47, 14, 'Shweta', 'The bulb of this species is large. The color is white and has about 26 cloves. ', 130, '45', 'any', 'download (2).jpg', '2022-07-15 10:24:25'),
(48, 14, 'Bhima Omker', ' The bulb is medium in size and white in color, with 18 to 20 cloves in a bulb.', 135, '32-48', 'any', 'bhima-omkar-250x250.jpg', '2022-07-15 10:28:00'),
(49, 15, 'Kokan kasturi', 'Good fragrance, broad leaves, 30-40 cm height ', 34, '36', 'ravi', 'coriander-seed-parrot-whole-250x250.png', '2022-07-15 10:35:44'),
(50, 15, 'Arka Isha', 'Multi-cut type, bushy plants, broad leaves, with good aroma, good keeping quality (21 days under refrigeration), rich in vitamin C (167mg/100g FW) ', 70, '12', 'ravi', 'rfbti_512.jpg', '2022-07-15 10:39:05'),
(51, 16, 'sugar Baby', 'The variety produces small to medium sized fruits with dark green skin. the flesh of the fruit is deep red and very sweet having 9-10% TSS. ', 90, '20', 'any', '40158961_1-national-gardens-sugar-baby-watermelon-seeds.jpg', '2022-07-15 10:42:29'),
(52, 16, 'Arka Manik', 'Fruits are round (oval) and weigh about 6 kg each. Skin colour is light green with dull green stripes. The flesh is deep red, very sweet (11-12% TSS) and seed arrangement is such that it is removal is easier. It is resistant to powdery mildew, downy mildew, tolerant to anthracnose and blossom-end rot. ', 115, '240', 'any', 'download (3).jpg', '2022-07-15 10:46:39'),
(53, 16, 'Arka Jyoti', ' The plants bear round fruits weighing 6-8 kg each, light green skin with regular dark green stripes, sweet flesh (11-12% TSS) with red colour.', 135, '200', 'any', 'images (2).jpg', '2022-07-15 10:51:00'),
(54, 16, 'Agusta', ' Sweetness 11% to 12% brix. Uniform fruit size. Very good adaptability. Good for Long Distance transportability.', 90, '180', 'any', 'watermelon-Augusta.jpg', '2022-07-15 10:53:02'),
(55, 16, 'Sugar Queen', ' Sweetness TSS 12% to 14%. Prolific fruit set and good yield. Durable rind, good for long distance transportability, Very good shelf life.', 78, '200', 'any', 'watermelon-Super-Queen.jpg', '2022-07-15 10:55:41'),
(59, 11, 'Rasraj ', ' Rasraj is an inter-specific polyembryonic hybrid developed for resistance to bacterial canker disease by breeding. The hybrid derives genes for canker resistance from the Nepali Round lemon parent and other characters from the acid lime parent. The fruit is yellow coloured, weighs on an average about 55 g containing 70% of juice and 12 seeds. The rind is thicker than lime. The acidity is 6% and TSS is around 8°B.', 160, '150-250', 'kharif', 'EUxq5VXU0AA7BsM.jpg', '2022-07-17 06:38:53'),
(60, 10, 'SB-11', ' Dark green foliage with broad leaves. Higher fodder yield. Tall plant height. Resistent for Biotic & A-biotic Stress.', 95, '12', 'kharif', '1-250x250.jpg', '2022-07-17 06:51:08'),
(61, 10, 'GG-8', ' 15 and 7 per cent higher pod yield\r\n(1716 kg/ha) over check variety, JL-24\r\n(1493 kg/ha) and TAG-24 (1608 kg/ha)\r\nrespectively. The kernel yield (1193\r\nkg/ha) was 18.2 and 13.9 per cent\r\nhigher than checks JL-24 and TAG-24,\r\nrespectively. ', 91, '10', 'kharif', 'download (4).jpg', '2022-07-17 07:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `display-error` varchar(100) NOT NULL,
  `maintenance` varchar(255) NOT NULL,
  `smtp-host` varchar(255) NOT NULL,
  `smtp-username` varchar(255) NOT NULL,
  `smtp-password` varchar(255) NOT NULL,
  `smtp-port` varchar(100) NOT NULL,
  `smtp-from` varchar(255) NOT NULL,
  `smtp-from-name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `display-error`, `maintenance`, `smtp-host`, `smtp-username`, `smtp-password`, `smtp-port`, `smtp-from`, `smtp-from-name`) VALUES
(1, '0', 'false', 'smtp-mail.outlook.com', 'vfa2023@outlook.com', 'vfa@password', '587', 'vfa2023@outlook.com', 'VFA AI-Farming Tech. Pvt. Ltd.');

-- --------------------------------------------------------

--
-- Table structure for table `soil`
--

CREATE TABLE `soil` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `soil-details` longtext NOT NULL,
  `req-method` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soil`
--

INSERT INTO `soil` (`id`, `crop-id`, `soil-details`, `req-method`, `time-stamp`) VALUES
(6, 1, '<h3>Type</h3><li>Sandy loam, loamy soil having sufficient organic matter is required.</li><li>Avoid waterlogged soil.</li><h3>pH</h3><li>Required range-6.0-7.5</li><li>Strongly acid and alkaline soils are not suitable for growing Onion.</li><li>It is sensitive to high acidity and alkalinity.</li><li>If pH is &lt;6.0 add Lime</li><li>If pH is &gt;7.5 add Gypsum</li>', ' friable loam and alluvial soils', '2022-07-15 11:03:04'),
(7, 2, '<h3>Type</h3><li>Medium to heavy, loam soil with good water holding capacity.</li><h3>pH </h3><li>Required range-6.0-7.5 </li><li>If pH is &lt;6.0 add Lime.</li><li>If pH is &gt;7.5 add Gypsum.</li>', 'Black, fertile loamy, sandy loam soils', '2022-07-15 11:23:38'),
(8, 3, '<h3>Type</h3><li> Black cotton soil with good water holding capacity.</li><li>Cotton is sensitive to excessive moisture and water logging.</li><h3>pH</h3><li>Required range- 7.0-8.5</li><li>If pH is &lt;7.0 add Lime.</li><li>If pH is &gt;8.5 add Gypsum.</li>', 'Black soils', '2022-07-15 11:44:17'),
(9, 5, '<h3>Type</h3><li>Wide range of medium to heavy soils like sandy-loam, clay-loam, loam or black cotton laterites, reddish or brown soil.</li><li> Soil with high contents of organic matter.</li><li>Water logged soil should be avoided.</li><li>Heavy clay soil with proper drainage or light soils with irrigation facilities are also favourable for sugarcane crop.</li><h3>рH</h3><li>6.5-7.5 is desirable</li><li>If pH is &lt; 6.5 add Lime. </li><li>If pH is &gt; 7.5 add Gypsum</li>', 'loamy and black', '2022-07-15 11:50:59'),
(10, 6, '<h3>Type</h3><li> Wheat can be grown on all kinds of soils, except the highly deteriorated alkaline and water logged soils. </li><li>Soils with clay loam or loam texture, good structure and moderate water holding capacity are ideal for Wheat cultivation.</li><h3>pH</h3><li>Required range-6.0-7.0</li><li>If pH is &lt; 6.0 add Lime</li><li>If pH is &gt; 7.0 add Gypsum</li>', 'Black, Alluvial, Loamy soil ', '2022-07-15 12:00:23'),
(11, 9, '<h3>Type</h3><li> Light to heavy soils are best suited.</li><li>Deep, rich loamy soil, rich in organic material with high nitrogen content, adequate phosphorus level and plenty of potash is also good for bananas.</li><li>Should have good drainage, adequate fertility and moisture. </li><li>Saline solid, calcareous soils are not suitable for banana cultivation.</li><h3>pH</h3><li>Required range-6.5-8.0</li><li>Low pH soil makes banana more susceptible to Panama disease. Avoid soil that is sandy, salty, nutritionally deficient and ill-drained soil. </li><li>Strongly acid and alkaline soils are not suitable for growing banana.</li><li>If pH is &lt;6.5 add Lime</li><li> If pH is &gt;8.0 add Gypsum</li>', 'Deep, rich loamy, Alluvial and volcanic soils', '2022-07-15 12:17:32'),
(13, 10, '<h3>Type </h3><li>\n Well drained, light colored, loose sandy loam to Sandy clay loam soil.</li><h3>pH</h3><li>Require range 5.5 to 7.0 </li><li> If pH is &lt;5.5 add Lime.</li><li> If pH is &gt;7.0 add Gypsum.</li><li>Strongly acid and alkaline soils are not suitable for growing groundnut.</li>', 'sandy loam or clay loam soil', '2022-07-15 12:27:18'),
(14, 11, '<h3>Type</h3><li>Lemons can be grown in all types of soils.</li><li>Light soils having good drainage are suitable for its cultivation.</li><h3>pH</h3><li> Required range-5.5-7.5.</li><li>If pH is &lt;5.5 add Lime.</li><li>If pH is &gt;7.5 add Gypsum.</li>', ' grow best in loamy or sandy loam soils', '2022-07-15 12:35:43'),
(15, 12, '<h3>Type</h3><li>The potato can be grown almost on any type of soil except saline and alkaline soils.</li><li>Choose Sandy loam, Silt loam, Loam and Clay soil (Soils should be loose).</li><h3>pH</h3><li>Required range-5.0-6.5 (Slightly acidic Soil)</li><li>Strongly alkaline soils are not suitable for growing Potato.</li><li>If pH is &lt;5.0 add Lime </li><li>If pH is &gt;6.5 add Gypsum</li>', 'Black, Loamy and sandy loam soils', '2022-07-15 13:44:42'),
(16, 13, '<h3>Type</h3><li>Sandy loam soil and heavy clay soil with good water holding capacity. </li><li>Well drained and fertile soil is preferred for the crop.</li><h3>pH</h3><li> Required range-6.5-7.5 </li><li>If pH is &lt;6.5 add Lime. </li><li>If pH is &gt;7.5 add Gypsum.</li>', ' loam and sandy soil', '2022-07-15 13:53:00'),
(17, 14, '<h3>Type</h3><li>Garlic can be grown on a variety of soils but it thrives better on fertile, well-drained loam soils.</li><li>Highly alkaline and saline soils are not suitable for garlic cultivation.</li><h3>pH</h3><li>The pH of soil between 6 and 7 is suitable for good crop.</li>', 'sandy loam soils', '2022-07-15 13:57:45'),
(18, 15, '<h3>Type</h3><li>In irrigated condition it can be grown in all type of soil with good amount of organic matter. </li><li>Grows well in silty or loamy soil with good water drainage.</li><li>Alkaline, Sandy &amp; light soil is not suitable for coriander.</li><h3>pH</h3><li>Required range-6.0-8.0 </li><li>If pH is &lt;6.0 add Lime</li><li>If pH is &gt;8.0 add Gypsum</li>', 'black,loamy soils', '2022-07-15 14:06:00'),
(19, 16, '<h3>Type</h3><li>Sandy loams are the best for early crops.</li><li>Well drained soil with high organic matter is preferable for the cultivation.</li><li>Waterlogged soil should be avoided. </li><h3>pH</h3><li>Required range - 6.0-7.5</li><li> If pH is &lt; 6.0 add Lime. </li><li>If pH is &gt; 7.5 add Gypsum.</li>', 'loamy, somewhat-sandy, well-drained soil', '2022-07-15 14:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `sowing`
--

CREATE TABLE `sowing` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `sowing-details` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sowing`
--

INSERT INTO `sowing` (`id`, `crop-id`, `sowing-details`, `time-stamp`) VALUES
(1, 1, '<li>Broadcast the seeds on the beds evenly. </li><li>Water the nursery beds daily twice till germination and once after germination.</li><li>Ten days before transplanting reduce the quantity of water application to the nursery beds to harden the seedlings.</li><li>After 3 days of seed germination drench the seedbed with Ridomil @ 15-20 gram in 10 L of water, to protect the seedlings from damping-off disease. </li><li> Spray 19:19:19 @ 5 gram + Thiamethoxam @ 0.25 gram per L water at 25 days after sowing.</li>', '2022-07-06 10:59:22'),
(2, 2, '<li>Sowing time: First week of June.</li><li> Dibble the seeds at a depth of 4 cm along the furrow (in which fertilizers are placed and cover with soil). </li><li> Put 2 seeds per hole in case of varieties, as the germination may be low.</li>', '2022-07-06 11:01:09'),
(3, 3, '<li>Sowing time: April to second week of May.</li><li> Put 2 seeds per hill on ridges at 2-3 inch deep and then cover with soil.</li>', '2022-07-06 11:02:21'),
(4, 5, '<li> Pre seasonal: 15 Oct-30 Nov</li><li>Adsali : 15 July-15 August</li><li>Suru: 15 Dec- 15 Feb</li><li> The two budded setts are planted in the furrow at 60 cm apart</li><li>Put setts in soil, cover it with soil by keeping buds open.</li>', '2022-07-06 11:05:51'),
(5, 6, '<li>For Rainfed condition- 2nd week of october.</li><li>Irrigated timely sowing- till November 15.</li>', '2022-07-06 11:07:58'),
(6, 10, '<li>Pods should be shelled one week before sowing.</li><li>Medium sized seeds should be used for sowing purposes.</li><li>Dibble the seeds at a depth of 4-5 cm along the furrow with the help of bullock drawn seed drill or manually.</li><li> In manual method less seeds will require and also germination will be better.</li>', '2022-07-06 11:10:32'),
(7, 12, '<li>The sprouted tubers should be planted in furrows 20 cm apart with sprouts facing upward.</li><li>Care should be taken to avoid sprout damage.</li>', '2022-07-06 11:12:42'),
(8, 14, '<li>Garlic is sown by Dibbling method.</li><li>The buds are spaced 5-7 cm apart.</li><li> It should be buried in depth and covered with light soil from above. </li><li>While sowing, keep the thin part of the cloves on top.</li>', '2022-07-06 11:14:49'),
(9, 15, '<li>Broadcast the seeds evenly on the beds.</li><li>The seeds will germinate in about 8-15 days.</li>', '2022-07-06 11:16:03'),
(10, 16, 'By using nursery seedlings: <li>Use well decomposed coco peat as medium.</li><li>Raise the seedlings in portrays having 98 cells.</li><li>Sow one seed per cell. Provide water regularly twice a day.</li><li>Use 12 days old healthy seedlings obtained from shade net houses for Transplanting.\n</li>Direct sowing:<li>Seeds can be sown directly in pit in the main field. </li><li>Five seeds can be placed in each hole and keep only 2 plants after 15 days. </li><li>Seeds are sown 1 inch deep with the pointed side of the seed facing down. </li><li>The seeds start germinating after 7 days.</li><li>Summer : January - February </li><li>Kharif : June-July</li>', '2022-07-06 11:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `spacing-and-plant-population`
--

CREATE TABLE `spacing-and-plant-population` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `rtr` float NOT NULL,
  `ptp` float NOT NULL,
  `pp` float NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spacing-and-plant-population`
--

INSERT INTO `spacing-and-plant-population` (`id`, `crop-id`, `rtr`, `ptp`, `pp`, `time-stamp`) VALUES
(2, 1, 0.5, 0.3, 293333, '2022-07-06 10:06:53'),
(3, 2, 1.4, 0.3, 104761, '2022-07-06 10:07:41'),
(4, 3, 2.9, 1.9, 7985, '2022-07-06 10:08:16'),
(9, 5, 3.9, 1.9, 5937, '2022-07-13 10:10:18'),
(10, 6, 0.7, 0.2, 314285, '2022-07-13 10:11:07'),
(11, 9, 5, 5, 1760, '2022-07-13 10:11:55'),
(12, 10, 1, 0.3, 146666, '2022-07-13 10:12:29'),
(13, 11, 15, 15, 195, '2022-07-13 10:12:58'),
(14, 12, 1.9, 0.7, 33082, '2022-07-13 10:13:21'),
(15, 13, 2, 2, 11000, '2022-07-13 10:13:45'),
(16, 14, 0.4921, 0.2624, 340749, '2022-07-13 10:14:28'),
(17, 16, 6.5, 1.7, 3981, '2022-07-13 10:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `msg` longtext NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `title`, `msg`, `status`, `time-stamp`) VALUES
(2, 'Update Weather Icons', 'Update your Weather Icons take weather icons from falticons and replash all old icons listed in weather Page', 'pending', '2022-07-16 17:56:43'),
(3, 'New Bug', 'In home page of Farmer news modal is not scrolling in Mobile Screen and it Overflow through the screen', 'pending', '2022-07-16 18:25:30'),
(4, 'Add New Blog ', 'Publish new Blog post from admin panel and display 3 post in Landing page when users click on that blog redirect them to blog section of VFA | create a new blog part ', 'pending', '2022-07-16 18:27:55'),
(5, 'New Bug', 'In manage seed Information page when trying to update in modal section description was not showing', 'pending', '2022-07-16 18:31:43'),
(6, 'Spelling Mistake ', 'In Farmers Dashboard Change plow to Ploughing in Crop Stage section ', 'solved', '2022-07-16 18:36:17'),
(7, 'Change Title ', 'In Admin Panel change all Title Tag to its related Page currently it was set as Blank page change that ', 'solved', '2022-07-16 18:48:02'),
(8, 'New Bug', 'In AllEvents.php Events are Printing Multiple times (Farmers Home : Farmer Details page : Check All Events )', 'pending', '2022-07-16 19:36:05'),
(9, 'AJAX Error', 'Link redirecting to an Object', 'pending', '2022-07-17 23:37:59'),
(10, 'Root Dip Info Update', 'Generate Root dip info update function ', 'solved', '2022-07-18 00:22:43'),
(11, 'Add MySQL Column', 'Add Display Table Records Settings in table ', 'pending', '2022-07-18 00:26:54'),
(12, 'Update water ', 'In manage crop info water update function was not defined', 'pending', '2022-07-18 00:28:24');

-- --------------------------------------------------------

--
-- Table structure for table `temperature`
--

CREATE TABLE `temperature` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `temperature-details` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temperature`
--

INSERT INTO `temperature` (`id`, `crop-id`, `temperature-details`, `time-stamp`) VALUES
(5, 1, '<li>15-25°C is ideal temperature.</li><li>The ideal temperature for vegetative growth is 12.3-23°C.</li><li>For bulb formation it requires long days and still higher temperature 20-25°C.</li>', '2022-07-06 05:46:39'),
(6, 2, '<li>For good germination soil temperature should be above 15°C and for growth about 26-30°C</li>', '2022-07-06 05:48:18'),
(7, 3, '<li>Optimum temperature for germination is 20-30°C. Germination will be delayed if the temperature is less than 18°C.</li><li>Under adequate soil moisture, cotton can withstand high temperature of 43-45°C for short periods.</li>', '2022-07-06 05:51:39'),
(9, 5, '<li>Germination stage- 30-34°C</li><li>Vegetative growth- 20-30°C</li><li>Ripening stage- 12-15°C</li><li>Higher temperature like 50°C stops its growth and very low temperature below 20°C slows down its growth.</li><li>Smut initiation and spread is high at ambient temperature of 25-30°C. Similarly the spread of red rot disease is high at higher temperatures (37--40°C)</li>', '2022-07-06 06:02:18'),
(10, 6, '<li>At the time of germination it requires mean daily temperature between 20 to 50°C.</li><li>mean daily temperature between 20 to 23°C accelerates the drop growth.</li><li>For proper grain filling it requires 23 to 25°C mean daily temperature.</li>', '2022-07-06 06:05:54'),
(11, 9, '<li>Grows well in a temperature range of 15°C-35°C with relative humidity of 75-85%.</li><li>Growth begins at 18°C, optimal at 27°C and stop when temperature reaches 38°C.</li><li>Chilling injury occurs at temperature below 12°C.</li><li>Although Bananas grow best in bright sunlight, high temperature will scorch leaves and fruit.</li>', '2022-07-06 06:14:22'),
(12, 10, '<li>The optimum temperature for most rapid germination and seedling development is about 30°C </li><li>Temperature above 35°C inhibit the growth of peanut.</li><li>Low temperature at sowing delays germination and increases seed and seedling diseases.</li><li>During ripening period it requires about a month of warm and dry weather.</li>', '2022-07-06 06:21:30'),
(13, 11, '<li>Temperature ranging from 10°C to 40°C is suitable for cultivation of the crop.</li>', '2022-07-06 06:24:27'),
(14, 12, '<li>The vegetative growth is best at 24°C while tuber growth at 20°C.</li><li>A temperature ranging from 20-25°C is ideal for growth.</li>', '2022-07-06 06:26:31'),
(17, 13, '<li>A day temperature of below 35°C and night temperature of above 16°C considered optimum.</li><li>Temperature below 15°C will affect the growth of the plant as well as fruit quality.</li><li>A temperature ranging from 13-12°C is ideal for Brinjal.</li><li>Low humidity and high temperature can cause heavy flower drop and poor fruit set.</li>', '2022-07-06 06:36:38'),
(18, 14, '<li>The temperature of 29.35°C, 10 hours day and 70 humidity is suitable for cultivation of garlic crop.</li>', '2022-07-06 06:38:02'),
(19, 15, '<li>Coriander performs well at a temperature range of 20-30°C.</li><li>High temperature reduce germination percentage and vegetative growth.</li>', '2022-07-06 06:39:47'),
(20, 16, '<li>The ideal temperature for growth is 30-35°C.</li><li>The optimum temperature for germination is 18-25°C</li><li>Cool nights and warm days are ideal for accumulation of sugar in the fruits.</li>', '2022-07-06 06:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `transplanting`
--

CREATE TABLE `transplanting` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `transplanting-details` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transplanting`
--

INSERT INTO `transplanting` (`id`, `crop-id`, `transplanting-details`, `time-stamp`) VALUES
(1, 1, '<li> Follow two row planting on raised beds.</li><li>Transplant the seedlings on the beds 15 X 10 cm apart.</li><li> Cut upper ⅓ rd portion of plants before transplanting to promote growth.</li>', '2022-07-06 11:36:32'),
(3, 13, '<li>Transplant the seedlings on the ridges 60 cm apart. </li><li>Press the soil firmly around the roots to eliminate air pocket.</li><li>It is advisable to transplant the seedlings preferably during the evening hours to protect from hot sun.</li>', '2022-07-06 13:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `water`
--

CREATE TABLE `water` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `water-details` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `water`
--

INSERT INTO `water` (`id`, `crop-id`, `water-details`, `time-stamp`) VALUES
(1, 1, '<li>water requirement is equivalent to 1800-2200mm of rainfall </li><li>Considering 20% field application losses, 1400 to 2000 mm is enough under surface irrigation condition </li><li>During ripening period high rainfall is not desirable because it leads to poor juice quality, encourage vegetative growth, formation of water shoots and increase in the tissue moisture</li>', '2022-07-04 21:06:36'),
(3, 2, '<li> Soybean is moderately drought tolerant crop.</li><li>High moisture requirement is critical at the time of germination, flowering and pod-forming stage which lasts 3-4 months.</li><li>Water requirement- Equivalent to 400 mm of rainfall.</li>', '2022-07-06 10:18:15'),
(4, 3, '<li>Originally it is Kharif crop, but during the vegetative phase, moderate rainfall is good whereas in later stages heavy rains will affect the quality of cotton.</li><li>Water requirement- Equivalent to 650-750 mm of rainfall.</li>', '2022-07-06 10:19:46'),
(6, 5, '<li> Water requirement is equivalent to 1800-2200 mm of rainfall. </li><li>Considering 20% field application losses, 1400 to 2000 mm is enough under surface irrigation condition.</li><li>  During ripening period high rainfall is not desirable because it leads to poor juice quality, encourages vegetative growth, formation of water shoots and increase in the tissue moisture.</li>', '2022-07-06 10:23:12'),
(7, 6, '<li>Equivalent to 450-650 mm of rainfall.</li>', '2022-07-06 10:24:00'),
(8, 9, '<li> Water requirement- Equivalent to 1800-2200 mm of rainfall.</li><li>Being a tropical crop, its water requirement is very high.</li><li>  Early vegetative stage, flower bud differentiation, bunch initiation and flowering are the critical growth stages in banana.</li><li> Four months of monsoon (June to September) with an average 650-750 mm rainfall are most important for vigorous vegetative growth of banana.</li>', '2022-07-06 10:25:58'),
(9, 10, '<li>Flowering, pegging and pod formation stages are the most critical stages when water must be available for maximum yield and quality of groundnut.</li><li> Water requirement- Equivalent to 600-1500 mm of rainfall.</li>', '2022-07-06 10:27:27'),
(10, 11, '<li>An annual rainfall of 75 cm- 200 cm.</li>', '2022-07-06 10:28:13'),
(11, 12, '<li>Germination, underground stem formation and tuber development are the most critical stages when water must be available. </li><li>Water requirement- Equivalent to 500-700 mm of rainfall.</li>', '2022-07-06 10:29:53'),
(12, 13, '<li>Water requirement- Equivalent to 600-1000 mm of rainfall.</li><li>It cannot withstand excessive rainfall especially during flowering and fruit set. </li><li>Excessive rainfall brings defoliation, wilting and rotting of the plant.</li>', '2022-07-06 10:31:16'),
(13, 14, '<li>Crop water requirement- equivalent to 600-700 mm rainfall.</li>', '2022-07-06 10:32:35'),
(14, 15, '<li> Water requirement- equivalent to 75-100 mm of rainfall.</li><li>Water should not be stagnated in field after emergence.</li>', '2022-07-06 10:34:48'),
(15, 16, '<li>Water requirement for the total growing period for a 100-day crop ranges from 400 to 600 mm.</li>', '2022-07-06 10:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `yield`
--

CREATE TABLE `yield` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `yield-details` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yield`
--

INSERT INTO `yield` (`id`, `crop-id`, `yield-details`, `time-stamp`) VALUES
(2, 1, '<li>Fresh bulbs- 70-80 quintal/acre.</li>', '2022-07-07 11:45:09'),
(3, 2, '<li>10 quintal per acre.</li>', '2022-07-07 11:48:00'),
(4, 3, '<h4>Each Harvest quantity</h4><li>3 quintal/acre</li><h4>Total harvest quantity</h4><li>10-12 quintal/acre</li>', '2022-07-07 11:52:41'),
(6, 5, '<h4>Total harvest quantity</h4><li>60-80 Metric Tons/acre</li>', '2022-07-07 12:01:32'),
(7, 6, '<h4>Total harvest quantity</h4><li>Irrigated varieties-16-20 quintal per acre.</li><li>Rainfed- 4.8-5.6 quintal per acre.</li>', '2022-07-07 12:04:45'),
(8, 9, '<h4>Total harvest quantity</h4><li>Yield of banana varies with variety and production practices.</li><li>Generally produce 15-25 kg bunch per plant.</li><li>Tall cultivars usually yield 54-72 quintal/acre.</li><li>Cavendish group varieties yield about 163 quintal/acre. </li><li>Whereas the hill banana/cooking varieties yield about 40-54 quintal/acre.</li>', '2022-07-07 12:11:56'),
(9, 10, '<h4>Total harvest quantity</h4><li>Kharif- 7-8 quintal per acre</li><li>Summer- 10-12 quintal per acre</li>', '2022-07-07 12:17:45'),
(10, 11, '<h4>Total harvest quantity</h4><li>Average yield is 5-7 tonnes/acre.</li>', '2022-07-07 12:19:31'),
(11, 12, '<h4>Total harvest quantity</h4><li>100-180 quintal per acre.</li>', '2022-07-07 12:24:05'),
(13, 13, '<h4>Each harvest quantity</h4><li>6 quintal per acre</li><h4> Total harvest quantity</h4><li>60 Quintal per acre</li>', '2022-07-07 12:31:28'),
(14, 15, '<h4>Total harvest quantity</h4><li>Leaf yield: 21-25 quintal/acre (6000 bunch per acre)</li>', '2022-07-07 12:33:32'),
(15, 14, '<h4>Total harvest quantity</h4><li>40 to 80 quintal/acre.</li>', '2022-07-07 12:39:34'),
(16, 16, '<h4>Total harvest quantity</h4><li>180-200 Quintal/acre depending on variety.</li>', '2022-07-07 12:42:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `crop`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crop-basic-info`
--
ALTER TABLE `crop-basic-info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `crop-disease`
--
ALTER TABLE `crop-disease`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disease-foreign-key` (`crop-id`);

--
-- Indexes for table `crop-event`
--
ALTER TABLE `crop-event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seedForeingKey` (`seed-id`),
  ADD KEY `seed-crop-id` (`crop-id`);

--
-- Indexes for table `crop-faq`
--
ALTER TABLE `crop-faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crop-faq-foreign-key` (`crop-id`);

--
-- Indexes for table `crop-tracking`
--
ALTER TABLE `crop-tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crop_id` (`crop_id`),
  ADD KEY `farmer_id` (`farmer_id`),
  ADD KEY `crop-tracking_ibfk_3` (`seed-id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction-id` (`transaction-id`),
  ADD KEY `donation-farmer-id-fk` (`farmer-id`);

--
-- Indexes for table `earthing-up`
--
ALTER TABLE `earthing-up`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourable-climate`
--
ALTER TABLE `favourable-climate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `feed-back`
--
ALTER TABLE `feed-back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gap-feeling`
--
ALTER TABLE `gap-feeling`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `harvesting`
--
ALTER TABLE `harvesting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `irrigation`
--
ALTER TABLE `irrigation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `land-preparation`
--
ALTER TABLE `land-preparation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery`
--
ALTER TABLE `nursery`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `nutrient-management`
--
ALTER TABLE `nutrient-management`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `preventive-measure`
--
ALTER TABLE `preventive-measure`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disease-fk` (`disease-id`);

--
-- Indexes for table `recent-updates`
--
ALTER TABLE `recent-updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `root-deep-treatment`
--
ALTER TABLE `root-deep-treatment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `seeds`
--
ALTER TABLE `seeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cropForeignKey` (`crop-id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil`
--
ALTER TABLE `soil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `sowing`
--
ALTER TABLE `sowing`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `spacing-and-plant-population`
--
ALTER TABLE `spacing-and-plant-population`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temperature`
--
ALTER TABLE `temperature`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `transplanting`
--
ALTER TABLE `transplanting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `water`
--
ALTER TABLE `water`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `yield`
--
ALTER TABLE `yield`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `yield-crop-id` (`crop-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `crop`
--
ALTER TABLE `crop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `crop-basic-info`
--
ALTER TABLE `crop-basic-info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `crop-disease`
--
ALTER TABLE `crop-disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `crop-event`
--
ALTER TABLE `crop-event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `crop-faq`
--
ALTER TABLE `crop-faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `crop-tracking`
--
ALTER TABLE `crop-tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `earthing-up`
--
ALTER TABLE `earthing-up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `favourable-climate`
--
ALTER TABLE `favourable-climate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feed-back`
--
ALTER TABLE `feed-back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `gap-feeling`
--
ALTER TABLE `gap-feeling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `harvesting`
--
ALTER TABLE `harvesting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `irrigation`
--
ALTER TABLE `irrigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `land-preparation`
--
ALTER TABLE `land-preparation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nursery`
--
ALTER TABLE `nursery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nutrient-management`
--
ALTER TABLE `nutrient-management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `preventive-measure`
--
ALTER TABLE `preventive-measure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recent-updates`
--
ALTER TABLE `recent-updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `root-deep-treatment`
--
ALTER TABLE `root-deep-treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seeds`
--
ALTER TABLE `seeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `soil`
--
ALTER TABLE `soil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sowing`
--
ALTER TABLE `sowing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `spacing-and-plant-population`
--
ALTER TABLE `spacing-and-plant-population`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `temperature`
--
ALTER TABLE `temperature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transplanting`
--
ALTER TABLE `transplanting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `water`
--
ALTER TABLE `water`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `yield`
--
ALTER TABLE `yield`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crop-basic-info`
--
ALTER TABLE `crop-basic-info`
  ADD CONSTRAINT `crop-basic-info-id` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `crop-disease`
--
ALTER TABLE `crop-disease`
  ADD CONSTRAINT `disease-foreign-key` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `crop-event`
--
ALTER TABLE `crop-event`
  ADD CONSTRAINT `seed-crop-id` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`),
  ADD CONSTRAINT `seedForeingKey` FOREIGN KEY (`seed-id`) REFERENCES `seeds` (`id`);

--
-- Constraints for table `crop-faq`
--
ALTER TABLE `crop-faq`
  ADD CONSTRAINT `crop-faq-foreign-key` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation-farmer-id-fk` FOREIGN KEY (`farmer-id`) REFERENCES `farmer` (`id`);

--
-- Constraints for table `earthing-up`
--
ALTER TABLE `earthing-up`
  ADD CONSTRAINT `earthing-up-crop-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `favourable-climate`
--
ALTER TABLE `favourable-climate`
  ADD CONSTRAINT `favourable_climate_foreign_key` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `gap-feeling`
--
ALTER TABLE `gap-feeling`
  ADD CONSTRAINT `gap-crop-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `harvesting`
--
ALTER TABLE `harvesting`
  ADD CONSTRAINT `harvesting-crop-id-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `irrigation`
--
ALTER TABLE `irrigation`
  ADD CONSTRAINT `irrigation-crop-id` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `land-preparation`
--
ALTER TABLE `land-preparation`
  ADD CONSTRAINT `land-crop-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `nursery`
--
ALTER TABLE `nursery`
  ADD CONSTRAINT `nursery-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `nutrient-management`
--
ALTER TABLE `nutrient-management`
  ADD CONSTRAINT `nm-crop-id-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `preventive-measure`
--
ALTER TABLE `preventive-measure`
  ADD CONSTRAINT `disease-fk` FOREIGN KEY (`disease-id`) REFERENCES `crop-disease` (`id`);

--
-- Constraints for table `root-deep-treatment`
--
ALTER TABLE `root-deep-treatment`
  ADD CONSTRAINT `root-depp-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `seeds`
--
ALTER TABLE `seeds`
  ADD CONSTRAINT `cropForeignKey` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `soil`
--
ALTER TABLE `soil`
  ADD CONSTRAINT `soil-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `sowing`
--
ALTER TABLE `sowing`
  ADD CONSTRAINT `sowing-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `spacing-and-plant-population`
--
ALTER TABLE `spacing-and-plant-population`
  ADD CONSTRAINT `spacing-and-plant-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `temperature`
--
ALTER TABLE `temperature`
  ADD CONSTRAINT `temperature-crop-foreign-key` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `transplanting`
--
ALTER TABLE `transplanting`
  ADD CONSTRAINT `transplanting-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `water`
--
ALTER TABLE `water`
  ADD CONSTRAINT `water-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

--
-- Constraints for table `yield`
--
ALTER TABLE `yield`
  ADD CONSTRAINT `yield-crop-id` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
