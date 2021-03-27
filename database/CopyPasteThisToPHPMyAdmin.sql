-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 09:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `economics`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodlist`
--

CREATE TABLE `foodlist` (
  `foodID` int(11) NOT NULL,
  `foodName` varchar(35) NOT NULL,
  `foodCuisine` varchar(10) NOT NULL,
  `foodType` varchar(10) NOT NULL,
  `imageLocation` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodlist`
--

INSERT INTO `foodlist` (`foodID`, `foodName`, `foodCuisine`, `foodType`, `imageLocation`) VALUES
(1, 'Filipino Lumpia', 'Filipino', 'Appetizer', 'lumpia.jpg'),
(2, 'Pork Meatballs', 'Filipino', 'Appetizer', 'meatballs.jpg'),
(3, 'Cheese Sticks', 'Filipino', 'Appetizer', 'cheesesticks.jpg'),
(4, 'Lumpiang Ubod', 'Filipino', 'Appetizer', 'lumpiangubod.jpg'),
(5, 'Fried Calamari', 'Filipino', 'Appetizer', 'friedcalamari.jpg'),
(6, 'Bangus Sisig', 'Filipino', 'Main dish', 'bangussisig.jpg'),
(7, 'Pork Sisig', 'Filipino', 'Main dish', 'porksisig.jpg'),
(8, 'Pininyahang Manok', 'Filipino', 'Main dish', 'pininyahangmanok.jpg'),
(9, 'Adobo', 'Filipino', 'Main dish', 'adobo.jpg'),
(10, 'Paksiw na Pata', 'Filipino', 'Main dish', 'paksiwnapata.jpg'),
(11, 'Galbi', 'Filipino', 'Main dish', 'galbi.jpg'),
(12, 'Lechon Kawali', 'Filipino', 'Main dish', 'lechonkawali.jpg'),
(13, 'Beef Kaldereta', 'Filipino', 'Main dish', 'beefcaldereta.jpg'),
(14, 'Squid Ball Chop Suey', 'Filipino', 'Main dish', 'squidballchopsuey.jpg'),
(15, 'Molo Soup', 'Filipino', 'Soup', 'molosoup.jpg'),
(16, 'Sinigang na Hipon', 'Filipino', 'Soup', 'sinigangnahipon.jpg'),
(17, 'Tinola', 'Filipino', 'Soup', 'tinola.jpg'),
(18, 'Chicken Sopas', 'Filipino', 'Soup', 'chickensopas.jpg'),
(19, 'Pork Lomi', 'Filipino', 'Soup', 'porklomi.jpg'),
(20, 'Papaitan', 'Filipino', 'Soup', 'papaitan.jpg'),
(21, 'Bulalo', 'Filipino', 'Soup', 'bulalo.jpg'),
(22, 'Halo-halo', 'Filipino', 'Dessert', 'halohalo.jpg'),
(23, 'Buko Pandan', 'Filipino', 'Dessert', 'bukopandan.jpg'),
(24, 'Leche Flan', 'Filipino', 'Dessert', 'lecheflan.jpg'),
(25, 'Puto at Kutsinta', 'Filipino', 'Dessert', 'putoatkutsinta.jpg'),
(26, 'Taho', 'Filipino', 'Dessert', 'taho.jpg'),
(27, 'Turon', 'Filipino', 'Dessert', 'turon.jpg'),
(28, 'Banana Cue', 'Filipino', 'Dessert', 'bananacue.jpg'),
(29, 'Gyoza', 'Japanese', 'Appetizer', 'gyoza.jpg'),
(30, 'Agedashi Tofu', 'Japanese', 'Appetizer', 'agedashitofu.jpg'),
(31, 'Salted Chicken Wings', 'Japanese', 'Appetizer', 'saltedchicken.jpg'),
(32, 'Chilled Tofu', 'Japanese', 'Appetizer', 'chilledtofu.jpg'),
(33, 'Karaage', 'Japanese', 'Appetizer', 'karaage.jpg'),
(34, 'Tuna Sashimi', 'Japanese', 'Main dish', 'tunasashimi.jpg'),
(35, 'Kakiage Tempura', 'Japanese', 'Main dish', 'kakiagetempura.jpg'),
(36, 'Beef Skewers', 'Japanese', 'Main dish', 'beefskewers.jpg'),
(37, 'Spaghetti Napolitan', 'Japanese', 'Main dish', 'spaghettinapolitan.jpg'),
(38, 'Tuna Teriyaki', 'Japanese', 'Main dish', 'tunateriyaki.jpg'),
(39, 'Goya Chanpuru', 'Japanese', 'Main dish', 'goyachanpuru.jpg'),
(40, 'Sushi', 'Japanese', 'Main dish', 'sushi.jpg'),
(41, 'Sashimi', 'Japanese', 'Main dish', 'sashimi.jpg'),
(42, 'Beef Sukiyaki', 'Japanese', 'Main dish', 'beefsukiyaki.jpg'),
(43, 'Miso Soup', 'Japanese', 'Soup', 'misosoup.jpg'),
(44, 'Cream Stew', 'Japanese', 'Soup', 'creamstew.jpg'),
(45, 'Ramen', 'Japanese', 'Soup', 'ramen.jpg'),
(46, 'Japanese Onion Soup', 'Japanese', 'Soup', 'onionsoup.jpg'),
(47, 'Mochi', 'Japanese', 'Dessert', 'mochi.jpg'),
(48, 'Daifuku', 'Japanese', 'Dessert', 'daifuku.jpg'),
(49, 'Dango', 'Japanese', 'Dessert', 'dango.jpg'),
(50, 'Coffee Jelly', 'Japanese', 'Dessert', 'coffeejelly.jpg'),
(51, 'Namagashi', 'Japanese', 'Dessert', 'Namagashi.jpg'),
(52, 'Vegetable Samosa', 'Indian', 'Appetizer', 'vegetablesamosa.jpg'),
(53, 'Baby Corn Spring Rolls', 'Indian', 'Appetizer', 'babycornspringrolls.jpg'),
(54, 'Masala Crackers', 'Indian', 'Appetizer', 'masalacrackers.jpg'),
(55, 'Sweet Corn Fritters', 'Indian', 'Appetizer', 'sweetcornfritters.jpg'),
(56, 'Potato Bonda', 'Indian', 'Appetizer', 'potatobonda.jpg'),
(57, 'Sweet and Spicy Curry', 'Indian', 'Main dish', 'sweetandspicycurry.jpg'),
(58, 'Indian Curry', 'Indian', 'Main dish', 'indiancurry.jpg'),
(59, 'Squash Coconut Curry', 'Indian', 'Main dish', 'squashcoconutcurry.jpg'),
(60, 'Reshmi Kebab', 'Indian', 'Main dish', 'reshmikebab.jpg'),
(61, 'Indian Butter Chicken', 'Indian', 'Main dish', 'butterchicken.jpg'),
(62, 'Indian Tandoori Chicken', 'Indian', 'Main dish', 'tandoorichicken.jpg'),
(63, 'Indian Fish Curry', 'Indian', 'Main dish', 'fishcurry.jpg'),
(64, 'Indian Stuffed Roast Chicken', 'Indian', 'Main dish', 'stuffedroastchicken.jpg'),
(65, 'Sweet and Sour Pumpkin Soup', 'Indian', 'Soup', 'pumpkinsoup.jpg'),
(66, 'Bottle Gourd Soup', 'Indian', 'Soup', 'bottlegourdsoup.jpg'),
(67, 'Raw Mango Soup', 'Indian', 'Soup', 'rawmango.jpg'),
(68, 'Tomato Soup', 'Indian', 'Soup', 'tomatosoup.jpg'),
(69, 'Rasam Soup', 'Indian', 'Soup', 'rasamsoup.jpg'),
(70, 'Gulab Jamun', 'Indian', 'Dessert', 'gulabjamun.jpg'),
(71, 'Sandesh', 'Indian', 'Dessert', 'sandesh.jpg'),
(72, 'Modak', 'Indian', 'Dessert', 'modak.jpg'),
(73, 'Payasam', 'Indian', 'Dessert', 'payasam.jpg'),
(74, 'Kulfi', 'Indian', 'Dessert', 'kulfi.jpg'),
(75, 'Chinese Pork Potstickers', 'Chinese', 'Appetizer', 'porkpotstickers.jpg'),
(76, 'Traditional Crab Rangoon', 'Chinese', 'Appetizer', 'crabrangoon.jpg'),
(77, 'Vegetable Spring Rolls', 'Chinese', 'Appetizer', 'vegetablespringrolls.jpg'),
(78, 'Lettuce Wraps', 'Chinese', 'Appetizer', 'lettucewraps.jpg'),
(79, 'Pineapple Chicken Stir Fry', 'Chinese', 'Main dish', 'pineapplechickenstirfry.jpg'),
(80, 'Beggar’s chicken', 'Chinese', 'Main dish', 'beggarschicken.jpg'),
(81, 'Chicken Wings with Oyster Sauce', 'Chinese', 'Main dish', 'chickenwingsoystersauce.jpg'),
(82, 'Chicken Fried Rice', 'Chinese', 'Main dish', 'chickenfriedrice.jpg'),
(83, 'Shrimp Fried Rice', 'Chinese', 'Main dish', 'shrimpfriedrice.jpg'),
(84, 'Beef with broccoli', 'Chinese', 'Main dish', 'beefwithbroccoli.jpg'),
(85, 'Chicken Chop Suey', 'Chinese', 'Main dish', 'chickenchopsuey.jpg'),
(86, 'Mu Shu Pork', 'Chinese', 'Main dish', 'mushupork.jpg'),
(87, 'Wonton Soup', 'Chinese', 'Soup', 'wontonsoup.jpg'),
(88, 'Egg Drop Soup', 'Chinese', 'Soup', 'eggdropsoup.jpg'),
(89, 'Cream Corn Soup', 'Chinese', 'Soup', 'creamycornsoup.jpg'),
(90, 'Red Bean Soup', 'Chinese', 'Soup', 'redbeansoup.jpg'),
(91, 'Fortune Cookies', 'Chinese', 'Dessert', 'fortunecookie.jpg'),
(92, 'Mango Pudding', 'Chinese', 'Dessert', 'mangopudding.jpg'),
(93, 'Egg Tarts', 'Chinese', 'Dessert', 'eggtarts.jpg'),
(94, 'Sweet Egg Bun', 'Chinese', 'Dessert', 'sweeteggbun.jpg'),
(95, 'Sweet Pea Pesto Crostini', 'Italian', 'Appetizer', 'springsweetpeacrostini.jpg'),
(96, 'Focaccia Barese', 'Italian', 'Appetizer', 'focacciabarese.jpg'),
(97, 'Slow Cooked Italian Meatballs', 'Italian', 'Appetizer', 'slowcookedmeatballs.jpg'),
(98, 'Marinated Mozzarella and Tomato', 'Italian', 'Appetizer', 'marinatedmozzarellaandtomato.jpg'),
(99, 'Balsamic Green Salad', 'Italian', 'Appetizer', 'balsamicgreensalad.jpg'),
(100, 'Chicken Parmesan', 'Italian', 'Main dish', 'chickenparmesan.jpg'),
(101, 'Swordfish with Puttanesca Sauce', 'Italian', 'Main dish', 'swordfishwithputtanescasauce.jpg'),
(102, 'Beef Braised in Chianti', 'Italian', 'Main dish', 'beefbraisedinchianti.jpg'),
(103, 'Meatballs with White Wine Sauce', 'Italian', 'Main dish', 'meatballswithwhitewinesauce.jpg'),
(104, 'Lasagna Bolognese', 'Italian', 'Main dish', 'lasagnabolognese.jpg'),
(105, 'Italian Pasta Salad', 'Italian', 'Main dish', 'italianpastasalad.jpg'),
(106, '5 Cheese Ziti', 'Italian', 'Main dish', '5cheeseziti.jpg'),
(107, 'Chicken Parm Soup', 'Italian', 'Soup', 'chickenparmsoup.jpg'),
(108, 'Meatball Sub Soup', 'Italian', 'Soup', 'meatballsubsoup.jpg'),
(109, 'Chicken Alfredo Soup', 'Italian', 'Soup', 'chickenalfredosoup.jpg'),
(110, 'Slow Cooker Chicken Tortellini Soup', 'Italian', 'Soup', 'slowcookerchickentortellinisoup.jpg'),
(111, 'Strawberry Gelato', 'Italian', 'Dessert', 'strawberrygelato.jpg'),
(112, 'Chocolate and Pistachio Biscotti', 'Italian', 'Dessert', 'chocolateandpistachiobiscotti.jpg'),
(113, 'Pumpkin Tiramisu', 'Italian', 'Dessert', 'pumpkintiramisu.jpg'),
(114, 'White Peach Tart', 'Italian', 'Dessert', 'whitepeachtart.jpg'),
(115, 'Lemon Honey Semifreddo', 'Italian', 'Dessert', 'lemonhoneysemifreddo.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodlist`
--
ALTER TABLE `foodlist`
  ADD PRIMARY KEY (`foodID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodlist`
--
ALTER TABLE `foodlist`
  MODIFY `foodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
