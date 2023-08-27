-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 11:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Hardik Kanajariya', 'hardik', '123'),
(2, 'Rahul Kanajariya', 'rahul', '123');

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
  `date` date NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile`, `msg`, `status`, `date`, `time_stamp`) VALUES
(64, 'Yash Kanajariya', '9909520639', 'Hey Brandon, we’ve stocked our shelves with assorted mint cookie treats for you. Visit your local KookieU store. Hurry! This flavor is for a limited time only.', 'resolved', '2022-05-18', '2022-06-25 03:35:46'),
(65, 'Rahul Kanajariya', '8200058835', 'They’re supposed to interest and engage your subscribers immediately. There’s no time to beat around the bush — you have a few seconds to catch their attention before they move on. ', 'pending', '2022-06-21', '2022-06-25 03:35:46'),
(66, 'Abhay Kachhadiya', '9865321245', 'Mr. Chris, your package has been shipped - ETA: 9-10 A.M. on 18th October at your residence. To track your parcel, visit www.trackmypkg.com.', 'active', '2022-06-19', '2022-06-25 03:35:46');

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
(4, 'Paddy', 'A paddy field is a flooded field of arable land used for growing semiaquatic crops, most notably rice and taro. It originates from the Neolithic rice-farming cultures of the Yangtze River basin in southern China, associated with pre-Austronesian and Hmong-Mien cultures.', '', '', 'paddy.jpg', '2022-06-06 14:27:41'),
(5, 'Sugarcane', 'Sugarcane is a water-intensive crop that remains in the soil all year long. As one of the worlds thirstiest crops, sugarcane has a significant impact on many environmentally sensitive regions, like the Mekong Delta and the Atlantic Forest.', '', '', 'sugar cane.jpg', '2022-06-06 14:32:19'),
(6, 'Wheat', 'The crop is grown mostly across Bhal region of Gujarat, including Ahmedabad, Anand, Kheda, Bhavanagar, Surendranagar, Bharuch districts. The unique characteristic of the wheat variety is that grown in rainfed conditions and cultivated in about two lakh hectares in Gujarat.', '', '', 'wheat.jpg', '2022-06-06 14:35:05'),
(7, 'Strawberry', 'Strawberry, a fruit traditionally flourishing in cold and hilly places, has wonderfully adapted itself even to the harsh and arid terrains of Kutch. A farmer in Bhuj taluka of Kutch district was hugely surprised last week when he saw sweet success budding in the plants that he had planted on a trial mode.', '', '', 'strawberries.jpg', '2022-06-06 14:35:29'),
(8, 'Brocolli', 'Broccoli is an edible green plant in the cabbage family whose large flowering head, stalk and small associated leaves are eaten as a vegetable. Broccoli is classified in the Italica cultivar group of the species Brassica oleracea.', '', '', 'broccoli.jpg', '2022-06-06 14:36:21'),
(9, 'Banana', 'A banana is an elongated, edible fruit – botanically a berry – produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called \"plantains\", distinguishing them from dessert bananas.', '', '', 'banana.jpg', '2022-06-06 14:36:50'),
(10, 'Peanut ', 'The peanut also known as the groundnut, goober, pindar or monkey nut, is a legume crop grown mainly for its edible seeds. It is widely grown in the tropics and subtropics, being important to both small and large commercial producers.', '', '', 'peanuts.jpg', '2022-06-06 14:37:51'),
(11, 'Lemon', 'The lemon is a species of small evergreen trees in the flowering plant family Rutaceae, native to Asia, primarily Northeast India, Northern Myanmar or China', '', '', 'lemon.jpg', '2022-06-06 14:38:46'),
(12, 'Potato', 'The potato is a starchy tuber of the plant Solanum tuberosum and is a root vegetable native to the Americas. The plant is a perennial in the nightshade family Solanaceae. Potato. Potato cultivars appear in a variety of colors, shapes, and sizes. Scientific classification.', '', '', 'potatoes.jpg', '2022-06-06 14:39:17'),
(13, 'Brinjal', 'Eggplant, aubergine or brinjal is a plant species in the nightshade family Solanaceae. Solanum melongena is grown worldwide for its edible fruit. Most commonly purple, the spongy, absorbent fruit is used in several cuisines. Typically used as a vegetable in cooking, it is a berry by botanical definition.', '', '', 'brinjal.jpg', '2022-06-06 14:40:23'),
(14, 'Garlic', 'Garlic is a species of bulbous flowering plant in the genus Allium. Its close relatives include the onion, shallot, leek, chive, Welsh onion and Chinese onion.', '', '', 'garlic.jpg', '2022-06-06 14:42:16'),
(15, 'Coriander ', 'Coriander is a plant. Both the leaves and fruit (seeds) of coriander are used as food and medicine. However, the term \"coriander\" is typically used to refer to the fruit. Coriander leaves are usually referred to as cilantro. In the following sections, the term \"coriander\" will be used to describe the fruit.', '', '', 'coriander.jpg', '2022-06-06 14:42:41'),
(16, 'Water Melon', 'Watermelon is a flowering plant species of the Cucurbitaceae family and the name of its edible fruit. A scrambling and trailing vine-like plant, it is a highly cultivated fruit worldwide, with more than 1,000 varieties.', '', '', 'water-melons.jpg', '2022-06-06 14:43:03'),
(34, 'Something Special', 'This crop is very Rare', '', '', 'arid desert soil.jpg', '2022-06-23 04:14:42');

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
(2, 5, 36500, 122500, 49, '2022-07-04 20:44:37');

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
  `solution` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop-disease`
--

INSERT INTO `crop-disease` (`id`, `crop-id`, `title`, `description`, `symptoms`, `solution`, `image`, `time_stamp`) VALUES
(5, 1, 'Damping off', 'Damping off is a major threat to raising healthy onion seedlings during Khariff season in all onion growing areas of the country. Generally 20-25 per cent onion seedlings get damaged due to this disease especially in nursery. It is caused by soil borne fungal pathogens.', 'Symptoms : Symptoms : Symptoms : Two types of symptoms are observedPre-emergence damping-off: This results in seed and seedling rot before they emerge out of the soil.Post-emergence damping-off: The pathogen attacks the collar region of seedlings on the surface of soil. The collar portion rots and ultimately the seedlings collapse and die.', 'Preventive Measures  : Preventive Measures  : Preventive Measures  : Survival and spreadPathogen(s) survives on infected crop debris and soil which are source of primary inoculum.Favourable conditionsThe disease is more prevalent during Kharif season/rainy season and causes about 60-75% damage.High soil moisture and moderate temperature along with high humidity leads to the development of the disease.', 'download.jfif', '2022-06-24 19:32:17'),
(6, 1, 'Purple blotch', 'Purple Blotch is caused by the fungus Alternaria porri. It is an important disease in warm, humid onion-growing regions around the world. Garlic and leeks may be affected as well as onions.', 'The symptoms occur on leaves and flower stalks as small, sunken, whitish flecks with purple coloured centres.\r\nThe lesions may girdle leaves/stalk and cause their drooping. The infected plants fail to develop bulbs', 'Survival and spread\r\nThe disease is soil borne and fungus survives in soil, infected bulbs and may persist in plant debris or on roots of weeds.\r\nFavourable conditions\r\nHot and humid climate with temperature ranging from 21-30°C and high relative humidity (80-90%) favour the development of the disease.\r\n', 'download (1).jfif', '2022-06-24 19:33:38'),
(7, 1, 'Stemphylium leaf blight', 'Stemphylium leaf blight (SLB), caused by Stemphylium vesicarium, is a foliar disease of onion worldwide, and has recently become an important disease in the northeastern United States and Ontario, Canada. The symptoms begin as small, tan to brown lesions on the leaves that can progress to defoliate plants.', 'Infection occurs on radial leaves of transplanted seedlings at 3- 4 leaf stage during late March and early April.\r\nThe symptoms appear as small yellowish to orange flecks or streaks in the middle of the leaves, which soon develop into elongated spindle shaped spots surrounded by pinkish margin.\r\nThe disease on the inflorescence stalk causes severe damage to the seed crop.', 'Survival and spread\r\nThe fungus survives in plant debris or soil.\r\nFavourable conditions\r\nWarm (18-25°C) humid conditions and long periods of leaf wetness (16 hours or more) favour disease development.\r\n', 'leafblightimg.jpg', '2022-06-24 19:34:37'),
(8, 1, ' Colletotrichum blight/anthracnose/twister disease', 'Onion twister disease is characterized by curling, twisting, and chlorosis of the onion leaves, abnormal elongation of the necks, and formation of slender bulbs. Some diseased plants rot before harvest while others decay rapidly when stored. ', 'Symptoms : Symptoms : The symptoms appear initially on the leaves as water soaked pale yellow spots, which spread lengthwise covering entire leaf blade.The affected leaves shrivel and droop down. ', 'Preventive Measures  : Preventive Measures  : Survival and spreadThe fungus can survive for many years as sclerotia in the soil or for shorter periods in infected plant debris.Favourable conditionsDisease is most severe in warm [25-30°C], moist soils that are high in organic matter.Fungal growth rapidly decreases below 15°C, resulting in little disease development. ', 'download (2).jfif', '2022-06-24 19:35:51'),
(9, 3, 'Ascochyta Blight (Wet Weather Blight)', 'Diagnostic Note: Margins of necrotic regions on leaves and cotyledons will have dark borders. Spots may have a target-like appearance. However, Ascochyta Blight typically occurs early in the season, and small black fruiting structures are observed in the lesions.\r\n\r\nRange and Yield Loss: Ascochyta Blight ha', 'Ascochyta Blight forms lesions on cotyledons, leaves, stems, and bolls. Lesions on the cotyledons and leaves approach 2 mm (<0.1 in) in diameter, are white to light brown and circular in shape. Elongated cankers on the stem are reddish-purple to black or ash gray in color. Small, black fruiting structures are likely to be embedded in symptomatic tissue.', 'Management: Use fungicide treated seed, avoid planting in cool wet weather, and incorporate cotton residue to encourage decomposition, which helps in fields with a history of Ascochyta Blight.', 'Diagnosis-Management-Foliar-Diseases-2.jpg', '2022-06-24 19:38:58');

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
(4, 34, 12, 'Light Plowing ', 'plow lightly', -5, '2022-06-23 04:19:28'),
(5, 34, 12, 'Medium Plowing ', 'medium Plowing ', -4, '2022-06-23 04:19:56'),
(6, 34, 12, 'Fertilizing ', 'manur spreading ', -3, '2022-06-23 04:20:47'),
(7, 34, 12, 'Cultivation', 'Cultivate farm ', -2, '2022-06-23 04:21:23'),
(8, 34, 12, 'Prepare Seeds ', 'Prepare seeds by adding some fertilizer and fungicide into it', -1, '2022-06-23 04:22:10'),
(9, 34, 12, 'Sowing', 'Its time to sow your seeds ', 0, '2022-06-23 04:22:37'),
(10, 34, 12, 'Cutivation', 'After sowing seeds cultivate your field ', 1, '2022-06-23 04:23:15'),
(11, 34, 12, 'irrigation', 'After 10 days of Sowing you need to give water to your Crop', 10, '2022-06-23 04:23:58'),
(12, 34, 12, 'Insecticide / Cultivation / Weeding ', 'After 20 days check your crop if your crop has a insects spread some insecticide and also weeds are growing in field you need to remove all weeds by manually or spread some herbicide to remove some weeds ', 20, '2022-06-23 04:25:54'),
(13, 34, 12, 'irrigation / fungicide / growth helper ', 'its time to give second water to your crop also spread some fungicide and growth helper it will help you to grow your crop and increase yield ', 35, '2022-06-23 04:27:26'),
(14, 34, 12, 'Spread growth helper ', 'Spread some growth helper to increase yield ', 75, '2022-06-23 04:30:48'),
(15, 34, 12, 'irrigation', 'its time to give some water', 45, '2022-06-23 04:32:24'),
(16, 34, 12, 'Cultivation / pesticide ', 'its time to cultivate field and spread some pesticide `', 50, '2022-06-23 04:33:19'),
(17, 34, 12, 'irrigation / weed ', 'manage weeds and give some water ', 60, '2022-06-23 04:34:04'),
(18, 34, 12, 'Cultivation', 'its time to cultivate your field to remove unneccessarry weeds ', 70, '2022-06-23 04:35:32'),
(19, 34, 12, 'Harvesting ', 'its time to harvest your crop', 90, '2022-06-23 04:35:57'),
(22, 34, 12, 'Welcome ', 'Look your Plants are coming out from the soil ', 6, '2022-06-23 04:39:27'),
(23, 34, 12, 'Flowers are Coming ', 'Look at those beautiful orange flowers ', 28, '2022-06-23 04:40:01'),
(24, 34, 12, 'Yield growing ', 'Look at those tiny peanuts growing ', 73, '2022-06-23 04:40:34');

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
(1, 34, 'can you listen me?', 'Yes, I can listen you..', '2022-06-25 03:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `crop-info`
--

CREATE TABLE `crop-info` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `ex-exp` longtext NOT NULL,
  `ex-harvest` longtext NOT NULL,
  `ex-inc` longtext NOT NULL,
  `fav-cli` longtext NOT NULL,
  `fav-temp` longtext NOT NULL,
  `fav-water` longtext NOT NULL,
  `rq-soil-type` longtext NOT NULL,
  `rq-soil-ph` longtext NOT NULL,
  `sowing-info` longtext NOT NULL,
  `lp` longtext NOT NULL,
  `sppc` longtext NOT NULL,
  `rdt` longtext NOT NULL,
  `transplant` longtext NOT NULL,
  `nm-timely-sow` longtext NOT NULL,
  `nm-late-sow` longtext NOT NULL,
  `nm-rain-sow` longtext NOT NULL,
  `irrigation` longtext NOT NULL,
  `yield` longtext NOT NULL,
  `harvesting` longtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop-info`
--

INSERT INTO `crop-info` (`id`, `crop-id`, `ex-exp`, `ex-harvest`, `ex-inc`, `fav-cli`, `fav-temp`, `fav-water`, `rq-soil-type`, `rq-soil-ph`, `sowing-info`, `lp`, `sppc`, `rdt`, `transplant`, `nm-timely-sow`, `nm-late-sow`, `nm-rain-sow`, `irrigation`, `yield`, `harvesting`, `timestamp`) VALUES
(18, 1, '&#8377; 22,500', '110 quintal/acre', '&#8377;  1,10,000', '<li>Onion can be grown in any season, the only condition is harvesting should not coincide with rainy days.</li>\r\n<li>High humidity at vegetive stage leads to more Trips(insects) population.</li>', '<li> 15-25&#8451; is ideal temperature. </li>\n<li> The ideal temperature for vegetative growth is 12.3-23&#8451; </li>\n<li> for bulb formation it requires long days and still higher temperature 20-25&#8451;</li>', '<li>Generally grown in irrigated areas & Water requirement to the rainfall 350-750 mm.</li>\r\n<li>At vegetative growth stage and bulb formation sufficient amount of Water must be provided.</li>\r\n<li>Does not thrive well when the average rainfall exceeds 750-1000 mm during monsoon period.</li>', '<li>sandy loam, loamy soil having sufficient organic matter is required.</li>\r\n<li>Avoid waterlogged soil.</li>', '<li>Required Range - 6.0-7.5</li>\n<li>Strongly acid and alkaline soils are not suitable for growing Onion</li>\n<li>Sensitive to high acidity and alkalinity</li>\n<li>if pH is &lt;6.0 add Lime</li>\n<li>if pH is &gt;7.5 add Gypsum</li>', '<li>Broadcast the seeds on the beds evenly.</li>\r\n<li>Water the nursery beds daily twice till germination and once after germination.</li>\r\n<li>Ten days before transplanting reduce the quantity of Water application to the nursery beds to harden the seedlings.</li>\r\n<li>After 3 days of seed germination drench the seedbed with Ridomil @ 15-20 gram in 10 L of Water, to protect the seedlings from damping-off disease.</li>\r\n<li>Spray 19:19:19 @ 5 gram + Thiamethoxam @ 0.25 gram per L Water at 25 days after sowing.</li>', '<li>Plough the land 1 or 2 times based on soil type.</li>\r\n<li>Mix the following in field and keep it in open air for 10 days for proper decomposition-FYM-2 tons Composting Bacteria - 3kg </li>\r\n<li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth.</li>\r\n<li>Bed preparation-prepare beds of 45 cm width and 10 cm height with convenient length with the help of tractor.</li>', '<table>\r\n    <tr>\r\n        <td>Row to Row</td>\r\n        <td>0.5 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant to Plant</td>\r\n        <td>0.3 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant population</td>\r\n        <td>293,333</td>\r\n    </tr>\r\n</table>', '<li>Take 20 L water in flat container.</li>\n<li>Mix 40 gram Carbendazim + 40 ml Imidacloprid.</li>\n<li>Dip the roots in solution for 5 min before transplanting.</li>', '<li>Follow two row planting on raised beds.</li>\r\n<li>Transplant the seedlings on the beds 15 &#215; &#xD7; &times; 10 cm apart.</li>\r\n<li>Cut upper &#8531; &#x2153; &frac13;rd portion of plants before Transplanting to promote growth.</li>', 'null', 'null', 'null', '<li>Drip - On alternate day.</li>\r\n<li>Flood - Once in a week (based on rainfall).</li>\r\n<li>Summer season- 4 days interval.</li>\r\n\r\n', '<li>Fresh bulbs- 70-80 quintal/acre</li>\r\n', '<li>70-90 days after transplanting.</li>\n<li>Uproot the plants and cut the dried leaves.</li>\n<li>Dry the Onion bulbs in shade.</li>', '2022-06-17 05:35:55'),
(19, 5, '&#8377; 31,500', '65 Metric Tons/acre', '&#8377; 1,62,500', '<li>Hot and moist climate.</li>\r\n<li>Warm long day produce plants with more tillers, juice and high sucrose contents.</li>', '<li>Germination stage- 30-34&#8451</li>\n<li>Vegetative growth- 20-30&#8451</li>\n<li>Ripening stage- 12-15&#8451</li>\n<li>Higher temperature like 50&#8451 stops its growth and very low temperature below 20&#8451 slows down its growth.</li>\n<li>Smut initiation and spread is high at ambient temperatures of 25-30&#8451. Similarly the spread of red rot disease is high at higher temperatures (34-40&#8451)</li>', '<li>Water requirement is equivalent to 1800-2200 mm of rainfall.</li>\r\n<li>Considering 20% field application losses, 1400 to 2000 mm is enough under surface irrigation condition.</li>\r\n<li>During ripening period high rainfall is not desirable because it leads to poor juice quality, encourages vegetative growth, formation of water shoots and increase in the tissue moisture.</li>', '<li>Wide range of medium to heavy soils like sandy-loam, clay-loam, loam or black cotton laterites, reddish or brown soil.</li>\r\n<li>Soil with high contents of organic matter.</li>\r\n<li>Water logged soil should be avoided.</li>\r\n<li>Heavy clay soil with proper drainage or light soils with irrigation facilities are also favourable for sugarcane crop.</li>', '<li>6.5-7.5 is desirable</li>\n<li>If pH is &lt; 6.5 add Lime</li>\n<li>If pH is &gt; 7.5 add Gypsum</li>\n', '<li>Pre seasonal: 15 Oct-30 Nov</li>\r\n<li>Adsali: 15 July-15 August</li>\r\n<li>Suru: 15 Dec-15 Feb</li>\r\n<li>The two budded setts are planted in the furrow at 60 cm apart.</li>\r\n<li>Put setts in soil, cover it with soil by keeping buds open.</li>', '<li>Plough the land 1 or 2 times based on soil type.</li>\r\n<li>5 tons FYM + 2 kg Nitrogen fixing bacteria + 2 kg Phosphorus solubilizing bacteria + 2 kg Potash mobilizing bacteria + 2 kg Zink solubilizing bacteria - Mix all and apply 6 inch deep with rotavator or mix manually per acre in soil.</li>', '<table>\r\n    <tr>\r\n        <td>Row to Row<td><td><td><td><td></td>\r\n        <td>3.9 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant to Plant <td><td><td><td><td></td>\r\n        <td>1.9 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant population<td><td><td><td><td></td>\r\n        <td>5,937</td>\r\n    </tr>\r\n</table>', 'null', 'null', 'null', 'null', 'null', 'null', '<li>60-80 Metric Tons/acre</li>', '<li>330 to 360 Days after sowing</li>\r\n<li>15 days before harvesting irrigation should be stopped.</li>\r\n<li>harvesting is done by cutting the canes at ground level.</li>', '2022-06-17 12:21:11'),
(20, 6, '&#8377; 8,500', '25 Quintal/acre\r\n', '&#8377; 65,500', '<li>Wheat is a rabi season crop.</li>\r\n<li>The cool and sunny winters are very conducive for growth of wheat crop.</li>\r\n<li>For getting higher yield it requires at least 100 cold days.</li>', '<li>At the time of germination it requires mean daily temperature between 20 to 25&#8451.</li>\r\n<li>Mean daily temperature between 20 to 23&#8451 accelerates the crop growth.</li>\r\n<li>For proper grain filling it requires 23 to 25&#8451 mean daily temperature.</li>', '<li>Equivalent to 450-650 mm of rainfall.</li>', '<li>Wheat can be grown on all kinds of soils, except the highly deteriorated alkaline and water logged soils.</li>\r\n<li>Soils with clay loam or loam texture, good structure and moderate water holding capacity are ideal for Wheat cultivation.</li>', '<li>Required range- 6.0-7.0</li>\r\n<li>If pH is &lt; 6.0 add Lime</li>\r\n<li>If pH is &gt; 7.0 add Gypsum</li>\r\n', '<li>For rainfed condition- 2nd week of October.</li>\r\n<li>Irrigated timely sowing- till November 15.</li>', '<li>Ploughing method-plough the land 1 or 2 times based on soil type.</li>\r\n<li>Mix the following in field, and keep it in open air for 10 days for proper decomposition- FYM-2 tons Composting Bacteria-2 kg</li>\r\n<li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth.</li>', '<table>\r\n    <tr>\r\n        <td>Row to Row<td><td><td><td><td></td>\r\n        <td>0.7 </td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant to Plant <td><td><td><td><td></td>\r\n        <td>0.2</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant population<td><td><td><td><td></td>\r\n        <td>314,285</td>\r\n    </tr>\r\n</table><br>\r\n<table>\r\n    <tr>\r\n        <td>Row to Row<td><td><td><td><td></td>\r\n        <td>0.6 ft </td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant to Plant <td><td><td><td><td></td>\r\n        <td>0.2 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant population<td><td><td><td><td></td>\r\n        <td>366,666</td>\r\n    </tr>\r\n</table><br>\r\n<table>\r\n    <tr>\r\n        <td>Row to Row<td><td><td><td><td></td>\r\n        <td>0.7 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant to Plant <td><td><td><td><td></td>\r\n        <td>3.2 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant population<td><td><td><td><td></td>\r\n        <td>19,642</td>\r\n    </tr>\r\n</table>', 'null', 'null', '<li>Total Requirement - 48:24:16 N:P:K kg/acre</li>\r\n<li>At sowing apply- Urea- 52 kg Single super phosphate- 150 kg Muriate of potash- 27 kg</li>\r\n<li>21 Days after sowing- Urea- 52 kg</li>', '<li>Total Requirement - 32:16:16 N:P:K kg/acre</li>\r\n<li>At sowing apply- Urea- 34.5 kg Single super phosphate- 100 kg Muriate of potash- 27 kg</li>\r\n<li>21 Days after sowing- Urea- 34.5 kg</li>', '<li>Total Requirement - 16:8:00 N:P:K kg/acre</li>\r\n<li>At sowing apply- Urea- 35 kg Single super phosphate- 50 kg</li>\r\n<li>At the time of grain filling- Spray 2% urea</li>', '<li>Flood - Give Irrigation at 15-20 days interval.</li>\r\n<li>Avoid water stress at critical growth stages like crown root initiation (18-21 days), tillering stage (40-45 days), flowering stage (60-65 days), milk & dough stage.</li>\r\n<li>in water scarcity areas, give at least three irrigation at these stages, but yield will be reduced by 20-30%.</li>', '<li>Irrigated varieties- 16-20 Quintal per acre.</li>\r\n<li>Rainfed- 4.8-5.6 Quintal per acre.</li>', '<li>110-120 days after sowing.</li>', '2022-06-17 13:03:18'),
(21, 12, '&#8377; 23,500', '125 quintal/acre', '&#8377; 1,50,000', '<li>Potato is preferred in regions where temperature during growing season is cool.</li>', '<li>The vegetative growth is best at 24&#8451; while tuber growth at 20&#8451;.</li>\r\n<li>A temperature ranging from 20-25&#8451; is ideal for growth.</li>\r\n', '<li>Germination, underground stem formation and tuber development are the most critical stages when water must be available.</li>\r\n<li>Water requirement-Equivalent to 500-700 mm of rainfall.</li>', '<li>The potato can be grown almost on any type of soil except saline and alkaline soils.</li>\r\n<li>Choose Sandy loam, Silt loam, Loam and Clay soil (soils should be loose).</li>', '<li>Required range- 5.0-6.5 (Slightly acidic soil)</li>\r\n<li>Strongly alkaline soils are not suitable for growing Potato.</li>\r\n<li>If pH is &lt; 5.0 add Lime</li>\r\n<li>If pH is &gt; 6.5 add Gypsum</li>', '<li>The sprouted tubers be planted in furrows 20 cm apart with sprouts facing upward.</li>\r\n<li>Care should be taken to avoid sprout damage.</li>', '<li>Plough the land 1 or 2 times based on soil type.</li>\r\n<li>Mix the following in field and keep it in open air for 10 days for proper decomposition-FYM- 2 tons Composting Bacteria- 3 kg</li>\r\n<li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth.</li>', '<table>\r\n    <tr>\r\n        <td>Row to Row<td><td><td><td><td></td>\r\n        <td>1.9 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant to Plant <td><td><td><td><td></td>\r\n        <td>0.7 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant population<td><td><td><td><td></td>\r\n        <td>33,082</td>\r\n    </tr>\r\n</table>', 'null', 'null', 'null', 'null', 'null', '<li>Drip-once in 3 days.</li>\r\n<li>Flood-First irrigation should be light and given 5-7 days after planting and subsequent irrigation are given at 7-15 days interval depending upon the climatic condition and soil type.</li>', '<li>100-180 quintal per acre</li>', '<li>100 to 110 Days after sowing</li>', '2022-06-17 13:35:15'),
(22, 13, '&#8377; 36,600', '110 Quintal/acre', '&#8377; 1,65,000', '<li>Brinjal is a warm season crop and requires a long warm growing season.</li>\r\n<li>It is very susceptible to frost.</li>', '<li>A day temperature of below 35&#8451; and night temperature of above 16&#8451; considered optimum.</li>\r\n<li>Temperature below 15&#8451; will affect the growth of the plant as well as fruit quality.</li>\r\n<li>A temperature ranging from 13-21&#8451; is ideal for Brinjal.</li>\r\n<li>Low humidity and high temperature can cause heavy flower drop and poor fruit set.</li>', '<li>Water requirement- Equivalent to 600-1000 mm of rainfall.</li>\r\n<li>It cannot withstand excessive rainfall especially during flowering and fruit set.</li>\r\n<li>Excessive rainfall brings defoliation, wilting and rotting of the plant.</li>', '<li>Sandy loam soil and heavy clay soil with good water holding capacity.</li>\r\n<li>well drained and fertile soil is preferred for the crop.</li>', '<li>Required range- 6.5-7.5</li>\r\n<li>If pH is &lt; 6.5 add Lime</li>\r\n<li>If pH is &gt; 7.5 add Gypsum</li>\r\n', 'null', '<li>Ploughing method-plough the land 1 or 2 times based on soil type.</li>\r\n<li>Mix the following in field, and keep it in open air for 10 days for proper decomposition-FYM- 2 tons Composting Bacteria- 3 kg</li>\r\n<li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth.</li>\r\n<li>Bed preparation-prepare ridges and furrows 2 ft or 3 ft apart with the help of tractor.</li>\r\n<li>Plastic mulching- For Drip irrigation-plastic mulching is required. For Flood irrigation-plastic mulching is not required.</li>', '<table>\r\n    <tr>\r\n        <td>Row to Row<td><td><td><td><td></td>\r\n        <td>2.0 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant to Plant <td><td><td><td><td></td>\r\n        <td>2.0 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant population<td><td><td><td><td></td>\r\n        <td>11,000</td>\r\n    </tr>\r\n</table>\r\n<br>\r\n<table>\r\n    <tr>\r\n        <td>Row to Row<td><td><td><td><td></td>\r\n        <td>3.0 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant to Plant <td><td><td><td><td></td>\r\n        <td>2.0 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant population<td><td><td><td><td></td>\r\n        <td>7,333</td>\r\n    </tr>\r\n</table>\r\n', '<li>Take 20 liter water in a flat container.</li>\r\n<li>Mix 40 gm Carbendazim + 40 ml Imidacloprid.</li>\r\n<li>Dip the roots in solution for 5 minutes before transplanting.</li>\r\n<li>For plants in pro trays Dip the pro trays in container for 5 minutes.</li>', '<li>Transplant the seedlings on the ridges 60 cm apart.</li>\r\n<li>Press the soil firmly around the roots to eliminate air pocket.</li>\r\n<li>It is advisable to transplant the seedlings preferably during the evening hours to protect from hot sun.</li>', 'null', 'null', 'null', '<li>Drip-On alternate day</li>\r\n<li>Flood- Twice in a week (based on rainfall).</li>\r\n<li>Summer season -3-4 days interval.</li>\r\n<li>After every harvesting of brinjal one irrigation should be provided.</li>', '<h4>Each harvest quantity</h4>\r\n<li>6 quantity per acre</li>\r\n<h4>Total harvest quantity</h4>\r\n<li>60 quantity per acre</li>', '<h4>Harvesting duration</h4>\r\n<li>70 to 130 days after transplanting</li>\r\n<h4>Number of harvests</h4>\r\n<li>8 to 10</li>\r\n<h4>Harvesting interval</h4>\r\n<li>5 days</li>', '2022-06-17 14:28:03'),
(23, 17, '&#8377; 23,000', '150 quintal/acre', '&#8377; 90,000', '<li>Grows well in cool and moist climate.</li>\r\n<li>Heavy rains, cloudy weather at the time of curd formation is harmful as it affects the head quality.</li>', '<li>High temperature leads to yellowing of heads.</li>\r\n<li>Temperature range of 15-21&#8451; is considered optimum for growth and curd formation of the crop.</li>', '<li>Equivalent to 350-500 mm of rainfall.</li>', '<li>Sandy loam to Clay.</li>', '<li>Required Range - 5.5 to 6.5</li>\r\n<li>Soils with pH more than 8, leads to more disease incidence.</li>\r\n<li>if pH is &lt; 5.5 add Lime</li>\r\n<li>if pH is &gt; 6.5 add Gypsum</li>', 'null', '<h4>Land preparation</h4>\r\n<li>Ploughing method- plogh the land 1 or 2 times based on soil type.</li>\r\n<h4>Basal dose</h4>\r\n<li>Mix the following in field and keep it in open air for 10 days for proper decomposition- FYM - 2 tons Composting Bacteria- 3 kg</li>\r\n<li>Spread the above mixture over soil and run rotavator to the entire field making the soil as a fine tilth.</li>\r\n<h4>Bed preparation</h4>\r\n<li>prepare Ridges and furrows 45 cm apart with the help of tractor.</li>', '<table>\r\n    <tr>\r\n        <td>Row to Row<td><td><td><td><td></td>\r\n        <td>1.4 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant to Plant <td><td><td><td><td></td>\r\n        <td>1.0 ft</td>\r\n    </tr>\r\n    <tr>\r\n        <td>Plant population<td><td><td><td><td></td>\r\n        <td>31,428</td>\r\n    </tr>\r\n</table>', '<li>Take 20 L water in flat container.</li>\r\n<li>Mix 40 gram Carbendazim + 40 ml Imidacloprid.</li>\r\n<li>Dip the roots in solution before transplanting.</li>\r\n<li>For plants in pro trays- Dip the pro trays in container for 5 min.</li>', '<li>Transplant the seedlings on the ridges 1 ft (30 cm) apart.</li>', 'null', 'null', 'null', '<li>Drip- On alternate day.</li>\r\n<li>Flood- 8-10 days interval.</li>', '<li>100-120 quintal/acre.</li>', '<li>70-75 Days after transplanting.</li>', '2022-06-18 04:54:46');

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
(35, 1, 1, 1, '2022-06-01', '123', 'acre', 'black-soil', 'surface-water,canal-water', '2022-06-29 20:02:12'),
(36, 1, 8, 18, '2022-07-01', '10', 'acre', 'black-soil', 'surface-water', '2022-07-01 14:06:15'),
(37, 1, 64, 1, '2022-07-07', '15', 'acre', 'black-soil', 'canal-water', '2022-07-02 11:10:07');

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
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `name`, `mobile`, `email`, `email-status`, `mail_hash`, `state`, `district`, `taluka`, `village`, `pincode`, `username`, `password`, `timestamp`, `date`) VALUES
(64, 'Hardik Kanajariya', '6353485415', 'my.work.h11k@gmail.com', 'verified', 'a880b08da450e9f652fc824e585ea42a', NULL, NULL, NULL, NULL, NULL, 'hardik', '202cb962ac59075b964b07152d234b70', '2022-07-01 16:52:47', '2022-07-01'),
(65, 'rahul', '9638527415', 'rahul9265@gmail.com', 'verified', '2452543b47c4750de009bbe0d4a9417a', NULL, NULL, NULL, NULL, NULL, 'rahul', '202cb962ac59075b964b07152d234b70', '2022-07-01 17:00:58', '2022-07-01'),
(66, 'abhay', '9516238475', 'abhay@yahoo.com', 'not-verified', '326e564bc0d1133de462348180b2e713', NULL, NULL, NULL, NULL, NULL, 'abhay', '202cb962ac59075b964b07152d234b70', '2022-07-01 17:08:04', '2022-07-01'),
(67, 'ajay', '9106014340', 'ajay@gmail.com', 'not-verified', '3ba1708d4d427814c9fa1b5a56675bee', NULL, NULL, NULL, NULL, NULL, 'ajay', '202cb962ac59075b964b07152d234b70', '2022-07-01 17:09:42', '2022-07-01'),
(68, 'jay', '0123456789', 'jay@gmail.com', 'not-verified', 'aa91ab035440d236e55005a420588e1d', NULL, NULL, NULL, NULL, NULL, 'jay', 'baba327d241746ee0829e7e88117d4d5', '2022-07-01 17:16:05', '2022-07-01'),
(69, 'asdsad', '2343423423', 'hello@yahoo.com', 'not-verified', 'adfadd7ae3a31945bc85ada2976a6edf', NULL, NULL, NULL, NULL, NULL, 'yahoo', '202cb962ac59075b964b07152d234b70', '2022-07-01 17:18:00', '2022-07-01'),
(70, 'sdasd', '5453456454', 'yahoo@gmail.com', 'not-verified', '94cf3e28cd7035e4a8cfc26974610415', NULL, NULL, NULL, NULL, NULL, 'yahoo1', '202cb962ac59075b964b07152d234b70', '2022-07-01 17:19:55', '2022-07-01');

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
(3, 1, '<li>Hot and moist climate</li><li>Warm long day produce plants with mote tillers, juice and high sucrose contents.</li>', '2022-07-04 20:55:31');

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

-- --------------------------------------------------------

--
-- Table structure for table `krishi-book`
--

CREATE TABLE `krishi-book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nutrient-management`
--

CREATE TABLE `nutrient-management` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `nutrient-management-details` longtext NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
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
(12, 34, 'demo seed 1', 'demo descrption', 5, '100', 'ravi', NULL, '2022-06-30 19:13:04'),
(18, 1, 'Bhima red', 'This variety grown in kharif and rabi season. ', 140, '120', 'kharif', 'bhima red onion seed.jpeg', '2022-06-25 04:07:36'),
(20, 5, 'Co-86032', ' Drought tolerant. Ratoon gives Excellent yield.', 280, '384', 'any', '86032-sugar-cane.jpg', '2022-06-25 04:39:49'),
(21, 5, 'Co M-0265', 'Tolerant to drought and salinity and good ratoon. ', 540, '470', 'any', 'co m-0265.jpg', '2022-06-25 04:46:18'),
(22, 5, 'Co C-671 (Vasant-1)', 'Early variety, high sugar content, good for jaggery making. ', 300, '480', 'any', 'co c-671 sugarcane seed.png', '2022-06-25 04:50:30'),
(23, 6, 'Niphad-34', ' Good for late sowing ', 97, '15', 'ravi', 'wheat-seed niphad-34.png', '2022-06-25 04:55:04'),
(24, 6, 'NIAW-301(tryambak)', 'Sarbati variety for timely sowing ', 100, '17', 'ravi', 'Niaw-301.webp', '2022-06-25 05:02:35'),
(25, 6, 'NIAW-917(Tapowan)', 'Sarbati variety for timely sowing ', 110, '18', 'ravi', 'niaw-917.jpg', '2022-06-25 05:07:27'),
(26, 6, 'Lok-1', '(This species is more popular among farmers, Dana Bada, Ambar and Plant middle height, suitable for Chapati, are the old species affected by all diseases.)\r\n\r\n ', 130, '20', 'ravi', 'lok-1 wheat.jpg', '2022-06-27 06:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `soil`
--

CREATE TABLE `soil` (
  `id` int(11) NOT NULL,
  `crop-id` int(11) NOT NULL,
  `soil-details` longtext NOT NULL,
  `req-method` text NOT NULL,
  `time-stamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soil`
--

INSERT INTO `soil` (`id`, `crop-id`, `soil-details`, `req-method`, `time-stamp`) VALUES
(1, 1, '<li>Wide range of medium to heavy soils like sandy-loam, clay-loam, loam or black cotton laterites, reddish or brown soil</li><li>Soil with high contents of organic matter </li><li>water logged soil should be avoided.</li><li>Heavy clay soil should be avoided.</li><li>Heavy clay soil with proper drainage or light soils with irrigation facilities are also favourable for sugarcane crop.</li><li>PH 6.5-7.5 is desirable </li><li>if PH is &lt; 6.5 add Lime </li><li>if PH is &gt; 7.5 add gypsum</li>', '', '2022-07-04 21:11:50');

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
(1, 1, '<li>Germination -30°-34°C</li><li>Vegetative growth -20°-30°C</li><li>Ripening stage- 12°-15°C</li><li>Higher temperature like 50°C stops its growth and very low temperature below 20°C slows down its growth.</li><li>Smut initiation and spread is high at ambient temperatures of 25-30°C. Similarly the spread of red out disease is high at higher temperatures(37°-40°C) </li>', '2022-07-04 21:02:12');

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
(1, 1, '<li>water requirement is equivalent to 1800-2200mm of rainfall </li><li>Considering 20% field application losses, 1400 to 2000 mm is enough under surface irrigation condition </li><li>During ripening period high rainfall is not desirable because it leads to poor juice quality, encourage vegetative growth, formation of water shoots and increase in the tissue moisture</li>', '2022-07-04 21:06:36');

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
-- Indexes for dumped tables
--

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
-- Indexes for table `crop-info`
--
ALTER TABLE `crop-info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `crop-tracking`
--
ALTER TABLE `crop-tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crop_id` (`crop_id`),
  ADD KEY `farmer_id` (`farmer_id`),
  ADD KEY `crop-tracking_ibfk_3` (`seed-id`);

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
-- Indexes for table `krishi-book`
--
ALTER TABLE `krishi-book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutrient-management`
--
ALTER TABLE `nutrient-management`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crop-id` (`crop-id`);

--
-- Indexes for table `recent-updates`
--
ALTER TABLE `recent-updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeds`
--
ALTER TABLE `seeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cropForeignKey` (`crop-id`);

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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `crop`
--
ALTER TABLE `crop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `crop-basic-info`
--
ALTER TABLE `crop-basic-info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crop-disease`
--
ALTER TABLE `crop-disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `crop-event`
--
ALTER TABLE `crop-event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `crop-faq`
--
ALTER TABLE `crop-faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crop-info`
--
ALTER TABLE `crop-info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `crop-tracking`
--
ALTER TABLE `crop-tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `favourable-climate`
--
ALTER TABLE `favourable-climate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `harvesting`
--
ALTER TABLE `harvesting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `irrigation`
--
ALTER TABLE `irrigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `krishi-book`
--
ALTER TABLE `krishi-book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nutrient-management`
--
ALTER TABLE `nutrient-management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recent-updates`
--
ALTER TABLE `recent-updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seeds`
--
ALTER TABLE `seeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `soil`
--
ALTER TABLE `soil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sowing`
--
ALTER TABLE `sowing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temperature`
--
ALTER TABLE `temperature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transplanting`
--
ALTER TABLE `transplanting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `water`
--
ALTER TABLE `water`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yield`
--
ALTER TABLE `yield`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `favourable-climate`
--
ALTER TABLE `favourable-climate`
  ADD CONSTRAINT `favourable_climate_foreign_key` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

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
-- Constraints for table `nutrient-management`
--
ALTER TABLE `nutrient-management`
  ADD CONSTRAINT `nm-crop-id-fk` FOREIGN KEY (`crop-id`) REFERENCES `crop` (`id`);

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
