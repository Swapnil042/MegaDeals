-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 06:06 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megadeals`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `name`) VALUES
(1, 'Samsung'),
(2, 'One Plus'),
(3, 'Iphone'),
(4, 'LG'),
(5, 'HUAWEI'),
(6, 'ASUS'),
(7, 'DELL'),
(8, 'Hp'),
(9, 'LENOVA'),
(10, 'Canon'),
(11, 'Nikon'),
(12, 'Panasonic'),
(13, 'Sony'),
(14, 'JBL'),
(15, 'MOKI'),
(16, 'JABRA');

-- --------------------------------------------------------

--
-- Table structure for table `camera_info`
--

CREATE TABLE `camera_info` (
  `c_id` int(200) NOT NULL,
  `c_Name` varchar(200) NOT NULL,
  `lens_mount` varchar(200) NOT NULL,
  `total_pixel` varchar(200) NOT NULL,
  `effective_pixel` varchar(200) NOT NULL,
  `img_quality` varchar(200) NOT NULL,
  `white_balance` varchar(200) NOT NULL,
  `aspect_ratio` varchar(200) NOT NULL,
  `photo_4k` varchar(200) NOT NULL,
  `focus` varchar(200) NOT NULL,
  `battery` varchar(200) NOT NULL,
  `dimension` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `connectivity` varchar(200) NOT NULL,
  `price` int(200) NOT NULL,
  `Img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camera_info`
--

INSERT INTO `camera_info` (`c_id`, `c_Name`, `lens_mount`, `total_pixel`, `effective_pixel`, `img_quality`, `white_balance`, `aspect_ratio`, `photo_4k`, `focus`, `battery`, `dimension`, `weight`, `connectivity`, `price`, `Img`) VALUES
(9, 'Panasonic Lumix GX9', 'Micro Four Thirds mount', '21.77 Megapixels', '20.30 Megapixels', '4:3, 3:2, 16:9, 1:1', 'RAW, RAW+Fine, RAW+Standard, Fine, Standard', 'MP4', 'AWB / AWBc / Daylight / Cloudy / Shade / Incandescent', 'Contrast AF system Eye Sensor manual focus', 'Li-ion Battery Pack (7.2V, 1025mAh, 7.4Wh)', '124 x 72.1 x 46.8 mm', 'N/a', 'Standards: IEEE 802.11b, IEEE 802.11g Operating', 999, 'images/camera/lumix.jpg'),
(10, 'Nikon D850', 'Nikon F bayonet mount', '46.83 Megapixels', '45.7 Megapixels', '4:3, 3:2, 16:9, 1:1', 'RAW, RAW+Fine, RAW+Standard, Fine, Standard', 'MP4', 'AWB / AWBc / Daylight / Cloudy / Shade / Incandescent', 'Contrast AF system Eye Sensor manual focus', 'EN-EL15a Rechargeable Li-ion Battery', '124 x 72.1 x 46.8 mm', 'N/a', 'Standards: IEEE 804.11b, IEEE 804.11g Operating frequency: 2402–2482 MHz', 3299, 'images/camera/nikon.jpg'),
(11, 'samsung 6470', 'Digital double Lens Mirrorless camera E-mount', '21.77 Megapixels', '21.77 Megapixels', '4:3, 3:2, 16:9, 1:1', 'RAW, RAW & JPEG (Extra fine, Fine, Standard)', 'mp4', 'AWB / AWB / Daylight / Cloudy', 'Contrast AF system Eye Sensor manual focus ', 'One rechargeable battery pack NP-FZ100', '124 x 72.1 x 46.8 mm', 'N/a', '2412–2462 MHz (channels 1–12) Maximum output power: 8.5 dBm', 2000, 'images/camera/s-camera.jpg'),
(12, 'Sony 9830', 'sony F bayonet mount', '46.89 Megapixels', '46.89 Megapixels', '4:3, 3:2, 16:9, 1:1', 'RAW, RAW+JPEG, RAW+Standard, Fine, Standard', 'MP4', 'AWB / AWBc / Daylight / Cloudy / Flash / White Set  4', 'Contrast AF system  manual focus', 'EN-EL15a Rechargeable Li-ion Battery ,1500 shots', '124 x 72.1 x 46.8 mm', 'n/a', 'n/a', 1090, 'images/camera/sony-c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'mobile'),
(2, 'laptop'),
(3, 'camera'),
(4, 'Earphone');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 3, 'hi', '2018-12-22 22:47:53', 0),
(2, 2, 3, 'hi', '2018-12-22 22:48:06', 0),
(3, 2, 3, 'he', '2018-12-22 22:48:53', 0),
(4, 3, 1, 'hi', '2018-12-22 23:06:01', 0),
(5, 1, 3, 'hey how r u?\n\n', '2018-12-22 23:06:38', 0),
(6, 3, 1, 'i''m fine and u?\n\n', '2018-12-22 23:06:57', 0),
(7, 3, 1, '?', '2018-12-22 23:07:01', 0),
(8, 1, 3, 'great', '2018-12-22 23:07:18', 0),
(9, 0, 1, 'hi all', '2018-12-23 00:30:47', 1),
(10, 0, 2, 'hi', '2018-12-23 00:32:17', 1),
(11, 0, 2, 'hey&nbsp;', '2018-12-23 00:33:43', 1),
(12, 0, 3, 'jhh', '2018-12-23 00:34:29', 1),
(13, 1, 2, 'hi', '2018-12-23 04:50:50', 0),
(14, 2, 1, 'hello', '2018-12-23 04:51:02', 0),
(15, 0, 4, 'eareaiuhiourtwsj', '2018-12-23 04:55:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commments`
--

CREATE TABLE `commments` (
  `user_id` int(200) DEFAULT NULL,
  `p_id` int(200) DEFAULT NULL,
  `commment` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `earphone_info`
--

CREATE TABLE `earphone_info` (
  `e_id` int(200) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `Colour` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Frequency` varchar(200) NOT NULL,
  `Accessories` varchar(200) NOT NULL,
  `Warranty` varchar(200) NOT NULL,
  `Audio` varchar(200) NOT NULL,
  `Bluetooth` varchar(200) NOT NULL,
  `Price` int(200) NOT NULL,
  `Img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earphone_info`
--

INSERT INTO `earphone_info` (`e_id`, `p_name`, `Colour`, `Type`, `Frequency`, `Accessories`, `Warranty`, `Audio`, `Bluetooth`, `Price`, `Img`) VALUES
(13, 'JBLE45BTBLK', 'black', 'on ear headphone', '20-20000hz', '1 Detachable cable, 1 Charging cable, Warning card', '1 year', '100db', 'yes', 1590, 'images/headphone/JBL.jpg'),
(14, 'MOKI ACC-HPEXDB', 'black', 'On ear headphone', '20-20000hz', '1 Detachable cable, 1 Charging cable', '1 year', '120db', 'yes', 5900, 'images/headphone/Moki.jpg'),
(15, 'SONY MDRZ1R', 'black', 'over ear headphone', '10-12000hz', '1 Detachable cable, 1 Charging cable', '1 year', '100db', 'no', 1862, 'images/headphone/sony.jpg'),
(16, 'Beats ML9F2AM/A', 'red', 'on ear headphone', '20-20000hz', '1 Detachable cable, 1 Charging cable, QSG', '1 year', '100db', 'yes', 1790, 'images/headphone/jabra.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(200) NOT NULL,
  `user_id` int(200) DEFAULT NULL,
  `s_date` varchar(200) DEFAULT NULL,
  `shipping_ads` varchar(200) DEFAULT NULL,
  `payment_m` varchar(200) DEFAULT NULL,
  `s_status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laptop_info`
--

CREATE TABLE `laptop_info` (
  `l_id` int(200) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `Processor` varchar(200) NOT NULL,
  `Os` varchar(200) NOT NULL,
  `Graphics` varchar(200) NOT NULL,
  `Memory` varchar(200) NOT NULL,
  `Storage` varchar(200) NOT NULL,
  `Camera` varchar(200) NOT NULL,
  `Battery` varchar(200) NOT NULL,
  `Display` varchar(200) NOT NULL,
  `Touch_screen` varchar(200) NOT NULL,
  `Audio` varchar(200) NOT NULL,
  `Port` varchar(200) NOT NULL,
  `Connectivity` varchar(200) NOT NULL,
  `Dimensions` varchar(200) NOT NULL,
  `Weight` varchar(200) NOT NULL,
  `Price` int(200) NOT NULL,
  `Img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop_info`
--

INSERT INTO `laptop_info` (`l_id`, `p_name`, `Processor`, `Os`, `Graphics`, `Memory`, `Storage`, `Camera`, `Battery`, `Display`, `Touch_screen`, `Audio`, `Port`, `Connectivity`, `Dimensions`, `Weight`, `Price`, `Img`) VALUES
(5, 'HP EliteBook X 360', '7th Generation Intel® Core™ i5 processor  Intel® Core™ i5-7200U with Intel® HD Graphics 620', 'Windows 10 64', 'Intel® HD Graphics 620', '8 GB LPDDR3-1866 SDRAM', '256 GB PCIe® NVMe™ SSD', 'HD 720p   Optional: IR camera', '4-cell, long life 49.28 Wh Li-ion  Up to 15 hours and 30 minutes', 'HP Sure View Integrated Privacy Screen 12.5\\" diagonal FHD IPS eDP LED-backlit touch screen with Corning® Gorilla® Glass 4, 700 cd/m2, 72% sRGB (1920 x 1080)', 'Standard', 'Audio by Bang & Olufsen; Digital dual-array microphone; Premium stereo speakers', '2 USB 3.1 Type-C™ with Thunderbolt™ support; 1 HDMI 1.4a; 1 headphone/microphone combo', 'Intel® Dual Band Wireless-AC 8265 802.11a/b/g/n/ac (2x2) WiFi and Bluetooth® 4.2 Combo (non-vPro™)', '11.41 x 8.02 x 0.53 in', 'Starting at 2.5 lbs', 16190, 'images/laptop/elitebook.jpg'),
(6, 'Lenevo Thinkpad X1 Yoga', 'Up to 8th Generation Intel® Core™ i7-8650U with vPro®', 'Windows 10 64', 'Integrated Intel® UHD Graphics 620', 'Up to 16 GB LPDDR3 2133 MHz (Onboard)', 'Up to 1 TB PCIe-NVME SSD OPAL2.0', 'HD 720p Optional: IR camera', 'Up to 15.4 hours*, integrated Li-ion 54 Whr with RapidCharge technology', '14\\" WQHD (2560 x 1440) IPS anti-reflective anti-smudge multi-touch, 300 nits', 'Standard', 'Dolby® Audio™ Premium <br> Noise-cancelling dual-array far-field microphones', '2 x USB 3.1 Gen 1 (one Always On) <br> 2 x USB 3.1 Gen 2 Type-C / Intel Thunderbolt 3 (Power Delivery, DisplayPort, Data transfer) <br>HDMI <br>Headphone / microphone combo jack <br> 4-in-1 MicroSD ca', 'WLAN: Intel® Dual-Band Wireless-AC (2 x 2)8265 + Bluetooth® 4.1', '333 mm x 229 mm x 17.05 mm / 13.11\\" x 9.01\\" x 0.67\\"', 'Starting at 3.08 lbs (1.4 kg)', 14840, 'images/laptop/asus-lap.jpg'),
(7, 'Asus Zenbook Pro UX550VE', 'Intel® Core™ i7-7700HQ 2.8GHz (Turbo up to 3.8GHz)', 'Windows 10 64', 'NVIDIA GTX 1050Ti 4GB GDDR5', '16GB DDR4 (On Board)', '512GB NVMe PCIE G3x4 SSD', 'HD 720p  <br> Optional: IR camera', '73WHrs, 4S2P, 8-cell Li-ion', '15.6\\" NanoEdge FHD (1920*1080), glossy', 'Standard', 'Audio by Bang & Olufsen; Digital dual-array microphone; Premium stereo speakers', '1x Headphone-out & Audio-in Combo Jack <br> 1x HDMI <br> 1x USB3.1-Type C(Gen1) <br> 1x USB3.1-Type C(Gen2) with Thunderbolt <br> 2x USB 3.0 <br> 1x Micro SD Card Reader', 'Wireless Data Network <br> 802.11AC <br> Bluetooth 4.1', '14.4\\" x 9.9\\" x 0.6\\" ~ 0.7', 'Starting at 4 lbs', 16990, 'images/laptop/asus-lap.jpg'),
(8, 'Asus Vivobook Pro N580VD', 'Intel® Core™ i5-7300HQ 2.5 GHz (6M Cache, up to 3.5 GHz)', 'Windows 10 64', 'NVIDIA GeForce GTX 1050, 4GB DDR5', '8 GB DDR4', '1TB SATA 5400RPM HDD', 'HD web camera', '47WHrs, 3S1P, 3-cell Li-ion Battery', '15.6” Ultra Slim FHD (1920x1080) 16:9 Anti-Glare', 'Standard', 'Audio by Bang & Olufsen; Digital dual-array microphone; Premium stereo speakers', '1x Headphone-out & Audio-in Combo Jack <br> 1x HDMI <br> 1x USB3-Type C(Gen1) <br> 1x USB3-Type C(Gen2) with Thunderbolt <br> 2x USB 2.0 <br> 1x Micro SD Card Reader', '802.11ac Wi-Fi+Bluetooth 4.2 (Dual band) 2x2', '15.6\\" x 9.9\\" x 0.6\\" ~ 0.7', 'Starting at 2 lbs', 16190, 'images/laptop/al.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latest`
--

CREATE TABLE `latest` (
  `p_id` int(200) NOT NULL,
  `times` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'toma', '$2y$10$tnrNqExO5sAu.7VspUI87OkrblvYlK120JMBCLtJQj3B06ncI2AFy'),
(2, 'sharif', '$2y$10$T8sQnDLzWF8IzVX3QQIdPu9osSOvEMYefWdNizUKN6E/8PoVv/eRm'),
(3, 'shan', '$2y$10$AwSvyw37D9nWqBlRVKttv.jL.GmGPICMUzfGCHtP.y90NjMYhleiO'),
(4, 'hofaiza', '$2y$10$mDB2tq8Ji4ptpg1P0XQ2n.kJUOPP8TEeXvTPVq4VpaKLN/L4zdski'),
(12, 'abc', '$2y$10$t5A8YgUrMknZvCjoAQ3Ojupi251/L/hc0tq.Bhym8St4X2hlFk3yi');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2018-12-22 22:47:17', 'no'),
(2, 1, '2018-12-22 23:09:59', 'no'),
(3, 3, '2018-12-22 23:11:37', 'no'),
(4, 1, '2018-12-22 23:43:24', 'no'),
(5, 1, '2018-12-22 23:43:57', 'no'),
(6, 1, '2018-12-22 23:46:33', 'no'),
(7, 1, '2018-12-23 00:31:34', 'no'),
(8, 1, '2018-12-23 00:36:20', 'no'),
(9, 2, '2018-12-23 01:26:48', 'no'),
(10, 2, '2018-12-23 00:33:57', 'no'),
(11, 3, '2018-12-23 01:40:06', 'no'),
(12, 1, '2018-12-23 00:57:29', 'no'),
(13, 1, '2018-12-23 01:13:09', 'no'),
(14, 1, '2018-12-23 01:25:42', 'no'),
(15, 4, '2018-12-23 01:33:42', 'no'),
(16, 1, '2018-12-23 01:41:11', 'no'),
(17, 1, '2018-12-23 01:47:40', 'no'),
(18, 1, '2018-12-23 01:48:11', 'no'),
(19, 2, '2018-12-23 01:49:52', 'no'),
(20, 3, '2018-12-23 01:51:01', 'no'),
(21, 1, '2018-12-23 01:56:59', 'no'),
(22, 2, '2018-12-23 01:54:02', 'no'),
(23, 2, '2018-12-23 01:58:55', 'no'),
(24, 1, '2018-12-23 01:58:55', 'no'),
(25, 1, '2018-12-23 04:57:07', 'no'),
(26, 2, '2018-12-23 04:56:57', 'no'),
(27, 4, '2018-12-23 04:51:50', 'no'),
(28, 4, '2018-12-23 04:57:16', 'no'),
(29, 4, '2018-12-23 04:57:28', 'no'),
(30, 4, '2018-12-23 04:58:54', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_info`
--

CREATE TABLE `mobile_info` (
  `m_id` int(200) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `technology` varchar(200) NOT NULL,
  `dimensions` varchar(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `sim` varchar(200) NOT NULL,
  `disp_type` varchar(200) NOT NULL,
  `disp_size` varchar(200) NOT NULL,
  `disp_resolution` varchar(200) NOT NULL,
  `Os` varchar(200) NOT NULL,
  `chipset` varchar(200) NOT NULL,
  `Wlan` varchar(200) NOT NULL,
  `CPU` varchar(200) NOT NULL,
  `GPU` varchar(200) NOT NULL,
  `USB` varchar(200) NOT NULL,
  `Memory` varchar(200) NOT NULL,
  `Bluetooth` varchar(200) NOT NULL,
  `Battery` varchar(200) NOT NULL,
  `colors` varchar(200) NOT NULL,
  `Price` int(255) DEFAULT NULL,
  `Img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_info`
--

INSERT INTO `mobile_info` (`m_id`, `p_name`, `technology`, `dimensions`, `weight`, `sim`, `disp_type`, `disp_size`, `disp_resolution`, `Os`, `chipset`, `Wlan`, `CPU`, `GPU`, `USB`, `Memory`, `Bluetooth`, `Battery`, `colors`, `Price`, `Img`) VALUES
(1, 'OnePlus 6', 'GSM / CDMA / HSPA / LTE', '7.5 mm thickness', '175 g', 'Dual SIM (Nano-SIM, dual stand-by)', 'Optic AMOLED capacitive touchscreen, 16M colors', '6.28 inches', '1080 x 2280 pixels', 'Android 8.1 (Oreo)', 'Qualcomm SDM845 Snapdragon 845', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, WiFi Direct, D', 'Octa-core (4x2.7 GHz Kryo 385 Gold & 4x1.7 GHz Kry', 'Adreno 630', 'No  2.0, Type-C 1.0 reversible connector', '256 GB, 8 GB RAM or 64/128 GB, 6 GB RAM', '5.0, A2DP, LE, aptX HD', 'Non-removable Li-Po 3450 mAh battery', 'Midnight Black, Lava Red, Sandstone White', 16000, 'images/mobile/one-plus.jpg'),
(2, 'Apple iPhone X', 'GSM / HSPA / LTE', '143.6 x 70.9 x 7.7 mm', '174 g', 'Nano-SIM', 'Super AMOLED capacitive touchscreen, 16M colors', '5.8 inches', '1125 x 2436 pixels', 'iOS 11.1.1, upgradable to', 'Apple A11 Bionic', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', 'Hexa-core 2.39 GHz', 'Adreno 512', '2.0, proprietary reversible connector', '64/256 GB, 3 GB RAM', '5.0, A2DP, LE', 'Non-removable Li-Ion 2716 mAh battery', 'Space Gray, Silver', 1399, 'images/mobile/i-phone,jpg'),
(3, 'Huawei P20', 'GSM / HSPA / LTE', '149.1 x 70.8 x 7.7 mm', '165 g', 'Dual SIM (Nano-SIM, dual stand-by)', 'LTPS IPS LCD capacitive touchscreen, 16M colors', '5.8 inches', '1080 x 2240 pixels', 'Android 8.1 (Oreo)', 'Hisilicon Kirin 970', 'Wi-Fi 802.11 a/b/g/n/ac, hotspot', 'Octa-core (4x2.4 GHz Cortex-A73 & 4x1.8 GHz Cortex', 'Mali-G72 MP12', '3.1, Type-C 1.0 reversible connector', '128 GB, 4 GB RAM', '4.2, A2DP, LE, EDR, aptX HD', 'Non-removable Li-Po 3400 mAh battery', 'Twilight, Black, Midnight Blue, Pink Gold', 810, 'images/mobile/Huawei.jpg'),
(4, 'Samsung Galaxy S9', 'GSM / CDMA / HSPA / EVDO / LTE', '147.7 x 68.7 x 8.5 mm', '163 g', 'Hybrid Dual SIM (Nano-SIM, dual stand-by)', 'Super AMOLED capacitive touchscreen, 16M colors', '5.8 inches', '1440 x 2960 pixels', 'Android 8.0 (Oreo)', 'Exynos 9810 Octa - EMEA', 'Wi-Fi 802.11 a/b/g/n/ac, hotspot', 'Octa-core (4x2.8 GHz Kryo 385 Gold & 4x1.7 GHz Kry', 'Adreno 630', '3.1, Type-C 1.0 reversible connector', '64/128/256 GB, 4 GB RAM', '5.0, A2DP, LE, aptX', 'Non-removable Li-Ion 3000 mAh battery (11.55 Wh)', 'Midnight Black, Coral Blue, Titanium Gray, Lilac P', 1000, 'images/mobile/samsung.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(200) NOT NULL,
  `p_id` int(200) DEFAULT NULL,
  `user_id` int(200) DEFAULT NULL,
  `O_quantity` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(200) NOT NULL,
  `p_name` varchar(200) DEFAULT NULL,
  `category_id` int(200) DEFAULT NULL,
  `brand_id` int(200) DEFAULT NULL,
  `quantity` int(200) DEFAULT NULL,
  `unit_price` int(200) DEFAULT NULL,
  `rating` varchar(200) DEFAULT NULL,
  `sales` varchar(200) DEFAULT NULL,
  `p_photo` varchar(200) DEFAULT NULL,
  `A_Date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `category_id`, `brand_id`, `quantity`, `unit_price`, `rating`, `sales`, `p_photo`, `A_Date`) VALUES
(1, 'OnePlus 6', 1, 2, 4, 1600, '4', '2', 'images/mobile/one-plus.jpg', '2018-04-21 20:07:17'),
(2, 'Apple iPhone X', 1, 3, 3, 1050, '1', '0', 'images/mobile/i-phone.jpg', '2017-04-21 20:07:17'),
(3, 'Huawei P20', 1, 5, 6, 1500, '2', '1', 'images/mobile/Huawei.jpg', '2017-04-21 20:07:17'),
(4, 'Samsung Galaxy S9', 1, 1, 4, 1600, '1', '1', 'images/mobile/samsung.jpg', '2017-04-21 20:07:17'),
(5, 'HP EliteBook X 360', 2, 8, 4, 1400, '2', '0', 'images/laptop/elitebook.jpg', '2017-04-21 19:07:18'),
(6, 'Lenevo Thinkpad X1 Yoga', 2, 9, 5, 1300, '2', '1', 'images/laptop/asus-lap.jpg', '2017-04-21 19:07:18'),
(7, 'Asus Zenbook Pro UX550VE', 2, 6, 7, 1350, '2', '1', 'images/laptop/asus-lap.jpg', '2017-04-21 19:07:18'),
(8, 'Asus Vivobook Pro N580VD', 2, 6, 6, 1500, '2', '0', 'images/laptop/al.jpg', '2017-04-21 19:07:18'),
(9, 'Panasonic Lumix GX9', 3, 12, 6, 1200, '1', '2', 'images/camera/lumix.jpg', '2017-04-28 17:07:18'),
(10, 'Nikon D850', 3, 11, 5, 1100, '3', '1', 'images/camera/nikon.jpg', '2017-04-28 17:07:18'),
(11, 'samsung 6470', 3, 1, 8, 1058, '0', '0', 'images/camera/s-camera.jpg', '2017-04-28 17:07:18'),
(12, 'Sony 9830', 3, 13, 5, 1600, '3', '2', 'images/camera/sony-c.jpg', '2017-04-28 17:07:18'),
(13, 'JBLE45BTBLK', 4, 14, 3, 950, '1', '1', 'images/headphone/JBL.jpg', '2018-06-28 16:07:16'),
(14, 'MOKI ACC-HPEXDB', 4, 15, 7, 1350, '2', '2', 'images/headphone/Moki.jpg', '2018-06-28 16:07:16'),
(15, 'SONY MDRZ1R', 4, 13, 5, 1360, '1', '0', 'images/headphone/sony.jpg', '2018-06-28 16:07:16'),
(16, 'Beats ML9F2AM/A', 4, 16, 4, 1260, '0', '0', 'images/headphone/jabra.jpg', '2018-06-28 16:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `phone_number`) VALUES
(1, 'alisha', 'xyz@gmail.com', '0000', NULL),
(2, 'sadik', 'sadik@gmail.com', '1234', NULL),
(3, 'alisha', 'alishatomtom@gmai.com', 'toma000$', '01267839477'),
(4, 'tanha', 'tanha@gmail.com', 'tanha000$', '01568387646');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `p_id` int(200) NOT NULL,
  `num_of_view` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`p_id`, `num_of_view`) VALUES
(1, '4'),
(4, '6'),
(3, '5'),
(9, '7'),
(10, '4'),
(13, '5'),
(6, '3');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `user_id` int(200) NOT NULL,
  `p_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `camera_info`
--
ALTER TABLE `camera_info`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `commments`
--
ALTER TABLE `commments`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `earphone_info`
--
ALTER TABLE `earphone_info`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `laptop_info`
--
ALTER TABLE `laptop_info`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `latest`
--
ALTER TABLE `latest`
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `mobile_info`
--
ALTER TABLE `mobile_info`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `p_id` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `camera_info`
--
ALTER TABLE `camera_info`
  MODIFY `c_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `earphone_info`
--
ALTER TABLE `earphone_info`
  MODIFY `e_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laptop_info`
--
ALTER TABLE `laptop_info`
  MODIFY `l_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `mobile_info`
--
ALTER TABLE `mobile_info`
  MODIFY `m_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `commments`
--
ALTER TABLE `commments`
  ADD CONSTRAINT `commments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `commments_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `latest`
--
ALTER TABLE `latest`
  ADD CONSTRAINT `latest_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`);

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
