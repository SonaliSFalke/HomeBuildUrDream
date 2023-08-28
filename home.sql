-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 12:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home`
--

-- --------------------------------------------------------

--
-- Table structure for table `abhijit_cartproperty`
--

CREATE TABLE `abhijit_cartproperty` (
  `id` int(6) UNSIGNED NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Dimension` varchar(255) NOT NULL,
  `Prize` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `Facility` varchar(255) NOT NULL,
  `Furnished` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ratantupte@gmail.com', 'Pass123');

-- --------------------------------------------------------

--
-- Table structure for table `ashwini_cartproperty`
--

CREATE TABLE `ashwini_cartproperty` (
  `id` int(6) UNSIGNED NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Dimension` varchar(255) NOT NULL,
  `Prize` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `Facility` varchar(255) NOT NULL,
  `Furnished` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`) VALUES
(3, 'ratantupte@gmail.com'),
(4, 'ratantupte@gmail.com'),
(5, 'zandu@gmail.com'),
(6, 'harsh@gmail.com'),
(7, 'cvwRDGFQE@gmail.com'),
(8, 'ibsoratntupte@gmail.com'),
(9, 'zandumailing@gmail.com'),
(10, 'vwdv@gmail.com'),
(11, 'zandu@gmail.com'),
(12, 'mijsgir@gmail.com'),
(13, 'zandu@gmail.com'),
(14, 'zandulalji@gmail.com'),
(15, 'sfalke190@gmail.com'),
(16, 'harsh@gmail.com'),
(17, 'harsh@gmail.com'),
(18, 'ratantupte@gmail.com'),
(19, ''),
(20, 'ratantupte@gmail.com'),
(21, 'ibsoratan@gmail.com'),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, 'ibsoratan@gmail.com'),
(27, 'ibsoratan@gmail.com'),
(28, 'ibsoratan@gmail.com'),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, 'etrgrg@gmail'),
(39, 'ratantupte@gmail.com'),
(40, 'ratantupte@gmail.com'),
(41, 'ratantupte@gmail.com'),
(42, 'ratantupte@gmail.com'),
(43, 'etrgrg@gmail'),
(44, ''),
(45, ''),
(46, ''),
(47, ''),
(48, ''),
(49, ''),
(50, ''),
(51, ''),
(52, ''),
(53, ''),
(54, ''),
(55, ''),
(56, ''),
(57, 'ratantupte@gmail.com'),
(58, 'qecdewfe@gmail.com'),
(59, 'qecdewfe@gmail.com'),
(60, 'ratantupte@gmail.com'),
(61, ''),
(62, ''),
(63, ''),
(64, ''),
(65, ''),
(66, ''),
(67, ''),
(68, 'ratantupte@gmail.com'),
(69, 'ratantupte@gmail.com'),
(70, 'ratantupte@gmail.com'),
(71, 'ratantupte@gmail.com'),
(72, 'ratantupte@gmail.com'),
(73, 'ratantupte@gmail.com'),
(74, 'ratantupte@gmail.com'),
(75, 'ratantupte@gmail.com'),
(76, 'ratantupte@gmail.com'),
(77, ''),
(78, ''),
(79, 'ratantupte@gmail.com'),
(80, 'ratantupte@gmail.com'),
(81, 'ratantupte@gmail.com'),
(82, 'ratantupte@gmail.com'),
(83, 'ratantupte@gmail.com'),
(84, 'etrgrg@gmail.com'),
(85, 'ratantupte@gmail.com'),
(86, 'ratantupte@gmail.com'),
(87, 'ratantupte@gmail.com'),
(88, 'ratantupte@gmail.com'),
(89, 'etrgrg@gmail.com'),
(90, 'ratantupte@gmail.com'),
(91, 'ratantupte@gmail.com'),
(92, 'ratantupte@gmail.com'),
(93, 'ratantupte@gmail.com'),
(94, 'ratantupte@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `Image` varchar(365) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `Image`) VALUES
(81, 'WIN_20210307_16_11_16_Pro.jpg WIN_20210318_10_12_22_Pro.jpg WIN_20210318_10_12_26_Pro.jpg WIN_20210318_10_12_27_Pro.jpg '),
(82, 'MRV_20210621_13_23_25.jpg WIN_20210429_16_53_21_Pro.mp4 WIN_20211002_13_34_01_Pro.mp4 '),
(83, 'fouse.jpg house.jpg house2.jpg '),
(85, 'house.jpg house2.jpg house3.jpg house-g3d1d42fef_1920.jpg '),
(90, 'images.jpg photo-1600585154340-be6161a56a0c.jpg '),
(91, 'flat2.jpg '),
(92, 'Screenshot (2).png Screenshot (3).png Screenshot (4).png '),
(93, 'Screenshot (5).png Screenshot (6).png '),
(94, 'Screenshot (2).png '),
(95, 'Screenshot (6).png '),
(96, 'flta3.jpg,flta6.jpg,'),
(97, 'flat4.jpg,flat5.jpg,flta3.jpg,flta6.jpg,');

-- --------------------------------------------------------

--
-- Table structure for table `intrested`
--

CREATE TABLE `intrested` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intrested`
--

INSERT INTO `intrested` (`id`, `name`, `email`, `address`, `product_id`) VALUES
(24, 'sonali ', 'sonali@gmail.com', 'higna', '59'),
(25, 'sonali ', 'sonali@gmail.com', 'higna', '60'),
(26, 'sonali ', 'sonali@gmail.com', 'higna', '60'),
(32, 'harsh', 'harshsharma@gmail.com', 'xyz', '70'),
(33, 'harsh', 'harshsharma@gmail.com', 'xyz', '74'),
(34, 'abhijit', 'abhijitgode99@gmail.com', 'shitla mata mandir ', '74'),
(35, 'RATAN', 'ratantupte@gmail.com', 'xyz', '74'),
(37, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(38, 'lakshman', 'ratantupte@gmail.com', 'xyz', '71'),
(39, 'lakshman', 'ratantupte@gmail.com', 'xyz', '60'),
(40, 'lakshman', 'ratantupte@gmail.com', 'xyz', '60'),
(41, 'lakshman', 'ratantupte@gmail.com', 'xyz', '60'),
(42, 'lakshman', 'ratantupte@gmail.com', 'xyz', '60'),
(43, 'lakshman', 'ratantupte@gmail.com', 'xyz', '60'),
(44, 'lakshman', 'ratantupte@gmail.com', 'xyz', '60'),
(45, 'lakshman', 'ratantupte@gmail.com', 'xyz', '60'),
(46, 'lakshman', 'ratantupte@gmail.com', 'xyz', '60'),
(47, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(48, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(49, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(50, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(51, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(52, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(53, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(54, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(55, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(56, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(57, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(58, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(59, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(60, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(61, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(62, 'lakshman', 'ratantupte@gmail.com', 'xyz', '73'),
(63, 'lakshman', 'ratantupte@gmail.com', 'xyz', '72'),
(64, 'lakshman', 'ratantupte@gmail.com', 'xyz', '72'),
(65, 'lakshman', 'ratantupte@gmail.com', 'xyz', '72'),
(66, 'lakshman', 'ratantupte@gmail.com', 'xyz', '72'),
(67, 'lakshman', 'ratantupte@gmail.com', 'xyz', '72'),
(68, 'lakshman', 'ratantupte@gmail.com', 'xyz', '72'),
(69, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(70, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(71, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(72, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(73, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(74, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(75, 'lakshman', 'ratantupte@gmail.com', 'xyz', '64'),
(76, 'lakshman', 'ratantupte@gmail.com', 'xyz', '71'),
(77, 'lakshman', 'ratantupte@gmail.com', 'xyz', '72'),
(78, 'lakshman', 'ratantupte@gmail.com', 'xyz', '71'),
(79, 'lakshman', 'ratantupte@gmail.com', 'xyz', '74'),
(80, 'lakshman', 'ratantupte@gmail.com', 'xyz', '64'),
(81, 'lakshman', 'ratantupte@gmail.com', 'xyz', '57'),
(82, 'lakshman', 'ratantupte@gmail.com', 'xyz', '64'),
(83, 'lakshman', 'ratantupte@gmail.com', 'xyz', '72'),
(84, 'vasudha', 'vasudhabawane@gmail.com', 'dighori ', '71'),
(85, 'lakshman', 'ratantupte@gmail.com', 'xyz', '72'),
(86, 'lakshman', 'ratantupte@gmail.com', 'xyz', '63');

-- --------------------------------------------------------

--
-- Table structure for table `kailas_cartproperty`
--

CREATE TABLE `kailas_cartproperty` (
  `id` int(6) UNSIGNED NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Dimension` varchar(255) NOT NULL,
  `Prize` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `Facility` varchar(255) NOT NULL,
  `Furnished` varchar(255) NOT NULL,
  `cartid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kailas_cartproperty`
--

INSERT INTO `kailas_cartproperty` (`id`, `Image`, `Type`, `Dimension`, `Prize`, `Address`, `Description`, `Owner`, `Facility`, `Furnished`, `cartid`) VALUES
(13, '10.4.jpg,rent10.1.jpg,rent10.2.jpg,rent10.3.jpg,rent10.jpg,', 'Rent', '2000sqftt', '    20000', 'nirmal nagri shitla mata mandir nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms,car parking courtyard', 'abhijit gode', '24 hr  water supply ,garden ', 'yes', '73'),
(14, 'rent9.jpg,rent9.1.jpg,rent9.3.jpg,rent9.4.jpg,', 'Rent', '1500sqftt', '    9000-/per month', 'manish nagar  opposite haldiram nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms', 'rushikesh magode', '24 hr  water supply ,garden ', 'yes', '72'),
(15, 'rent8.jpeg,rent8.1.jpg,rent8.2.jpg,rent8.3.jpg,rent8.4.jpg,', 'Rent', '2500sqftt', '    30000', 'wardha road alnkar nagar  nagpur maharashtra ', '2 floor house with balcony modular kitchen  with large bedrooms,attach swiming pool  ', 'nirupa tupte', 'swiming pool 24 water big courtyard ', 'yes', '71'),
(16, '7.2.jpg,rent7.1.webp,rent7.3.jpg,rent7.4.jpg,rent7.jpg,', 'Rent', '2000sqftt', '    25000-/ per month', 'manish nagar opposite green bar nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms', 'kailas tupte', '24 water garden big courtyard ', 'yes', '70'),
(17, 'rent2.1.jpg,rent2.2.jpg,rent2.3.webp,rent2.jpg,', 'Rent', '1000sqft', '    9000-/per month', 'mahal near cp berar college nagpur maharashtra', '4 memeber family house with courtyard', 'yogesh shaniware ', '24 hr  water supply ', 'no', '65'),
(18, 'flat5.jpg,flat4.jpg,', 'flat              ', '1500sqft ', '  300000', 'besa                  ', '3bhk flat with balkny modular kitchen ', 'no', 'seprate parking with teresr garden gym club ', 'yes', '60'),
(19, 'rent1.5.jpg,rent3.1.jpg,rent3.2.jpg,rent3.jpg,', 'Rent', '1500sqftt', '    15000- per month', 'Reshimbhag , near prerna college budhvar bajar  road nagpur  mahrashtra', 'one floor house with balcony modular kitchen  with large bedrooms`', 'kishor dahivale', 'all time water long courtyard', 'yes', '66'),
(20, 'rent1.jpg,rent4.1.jpg,rent4.2.webp,rent4.3.jpg,rent4.4.jpg,', 'Rent', '1500sqftt', '    20000', 'pawan layout dighor nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms,attach swiming pool  ', 'vasudha bawane', '24 hr  water supply ', 'yes', '67');

-- --------------------------------------------------------

--
-- Table structure for table `lakshman_cartproperty`
--

CREATE TABLE `lakshman_cartproperty` (
  `id` int(6) UNSIGNED NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Dimension` varchar(255) NOT NULL,
  `Prize` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `Facility` varchar(255) NOT NULL,
  `Furnished` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lakshman_cartproperty`
--

INSERT INTO `lakshman_cartproperty` (`id`, `Image`, `Type`, `Dimension`, `Prize`, `Address`, `Description`, `Owner`, `Facility`, `Furnished`) VALUES
(15, 'flat2.jpg,flta3.jpg,', 'flat   ', '1500sqft   ', '  15000', 'wardha road    ', '3bhk flat  with balkney   ', 'no', ' seprate parking terest garden gym ', 'yes'),
(16, 'rent1.5.jpg,rent3.1.jpg,rent3.2.jpg,rent3.jpg,', 'Rent', '1500sqftt', '    15000- per month', 'Reshimbhag , near prerna college budhvar bajar  road nagpur  mahrashtra', 'one floor house with balcony modular kitchen  with large bedrooms`', 'kishor dahivale', 'all time water long courtyard', 'yes'),
(17, 'rent1.1.jpg,rent1.3.jpg,rent1.4.jpg,rent1.5.jpg,rent1.jpg,', 'Rent', '1500sqftt', '    25000-/ per month', 'gandhibhag near vr mall nagpur maharashtra  ', '2 floor house with balcony modular kitchen  with large bedrooms,attach swiming pool  ', 'harsh sharma', 'all time water near hospital garden gym ', 'yes'),
(18, '10.4.jpg,rent10.1.jpg,rent10.2.jpg,rent10.3.jpg,rent10.jpg,', 'Rent', '2000sqftt', '    20000', 'nirmal nagri shitla mata mandir nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms,car parking courtyard', 'abhijit gode', '24 hr  water supply ,garden ', 'yes'),
(19, '10.4.jpg,rent10.1.jpg,rent10.2.jpg,rent10.3.jpg,rent10.jpg,', 'Rent', '2000sqftt', '    20000', 'nirmal nagri shitla mata mandir nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms,car parking courtyard', 'abhijit gode', '24 hr  water supply ,garden ', 'yes'),
(20, 'flat7.jpg,flat8.jpg,flta6.jpg,', 'flat', '2000sqft', '    450000', 'Mahalaxmi nagar sadar ', '4bhk flat ', 'Ratan builder', 'gym hospital ', 'yes '),
(21, 'flat7.jpg,flat8.jpg,flta6.jpg,', 'flat', '2000sqft', '    450000', 'Mahalaxmi nagar sadar ', '4bhk flat ', 'Ratan builder', 'gym hospital ', 'yes '),
(22, '10.4.jpg,rent10.1.jpg,rent10.2.jpg,rent10.3.jpg,rent10.jpg,', 'Rent', '2000sqftt', '    20000', 'nirmal nagri shitla mata mandir nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms,car parking courtyard', 'abhijit gode', '24 hr  water supply ,garden ', 'yes'),
(33, '10.4.jpg,rent10.1.jpg,rent10.2.jpg,rent10.3.jpg,rent10.jpg,', 'Rent', '2000sqftt', '    20000', 'nirmal nagri shitla mata mandir nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms,car parking courtyard', 'abhijit gode', '24 hr  water supply ,garden ', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(255) NOT NULL,
  `Image` varchar(500) DEFAULT NULL,
  `Type` varchar(255) NOT NULL,
  `Dimension` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `Facility` varchar(255) NOT NULL,
  `Furnished` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `Image`, `Type`, `Dimension`, `Price`, `Address`, `Description`, `Owner`, `Facility`, `Furnished`) VALUES
(56, 'house2.jpg,images.jpg,residence-g61e210270_1920.jpg,', 'house ', '15000sqft ', '1500000', 'manewada road nagpur', '2bhk', 'no', 'all time water ', 'yes '),
(57, 'flat2.jpg,flta3.jpg,', 'flat    ', '1500sqft    ', '35500', 'wardha road     ', '3bhk flat  with balkney    ', 'no', ' seprate parking terest garden gym ', 'yes'),
(58, 'flat4.jpg,flat7.jpg,flta6.jpg,', 'flat        ', '4500        ', '4500', 'dighori         ', '1bhk         ', 'no', 'gym parking', 'yes'),
(59, 'flta6.jpg,', 'flat', '1500sqft', '150000', 'higna', '3 bhk flat ', ' no', 'seprate parking ', 'yes'),
(60, 'flat5.jpg,flat4.jpg,', 'flat              ', '1500sqft ', '300000', 'besa                  ', '3bhk flat with balkny modular kitchen ', 'no', 'seprate parking with teresr garden gym club ', 'yes'),
(61, 'flat7.jpg,flat10.jpg,flta6.jpg,', 'flat', '15000sqft ', '  400000', 'shivshakt layout khamla ', '2bhk flat with balkney', 'no ', 'gyn garden hospital', 'yes'),
(62, 'flat7.jpg,flat8.jpg,flta6.jpg,', 'flat', '2000sqft', '  450000', 'Mahalaxmi nagar sadar ', '4bhk flat ', 'Ratan builder', 'gym hospital ', 'yes '),
(63, 'flat7.jpg,flat8.jpg,flta6.jpg,', 'flat', '2000sqft', '  450000', 'Mahalaxmi nagar sadar ', '4bhk flat ', 'Ratan builder', 'gym hospital ', 'yes '),
(64, 'rent1.1.jpg,rent1.3.jpg,rent1.4.jpg,rent1.5.jpg,rent1.jpg,', 'Rent', '1500sqftt', '  25000-/ per month', 'gandhibhag near vr mall nagpur maharashtra  ', '2 floor house with balcony modular kitchen  with large bedrooms,attach swiming pool  ', 'harsh sharma', 'all time water near hospital garden gym ', 'yes'),
(65, 'rent2.1.jpg,rent2.2.jpg,rent2.3.webp,rent2.jpg,', 'Rent', '1000sqft', '  9000-/per month', 'mahal near cp berar college nagpur maharashtra', '4 memeber family house with courtyard', 'yogesh shaniware ', '24 hr  water supply ', 'no'),
(66, 'rent1.5.jpg,rent3.1.jpg,rent3.2.jpg,rent3.jpg,', 'Rent', '1500sqftt', '  15000- per month', 'Reshimbhag , near prerna college budhvar bajar  road nagpur  mahrashtra', 'one floor house with balcony modular kitchen  with large bedrooms`', 'kishor dahivale', 'all time water long courtyard', 'yes'),
(67, 'rent1.jpg,rent4.1.jpg,rent4.2.webp,rent4.3.jpg,rent4.4.jpg,', 'Rent', '1500sqftt', '  20000', 'pawan layout dighor nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms,attach swiming pool  ', 'vasudha bawane', '24 hr  water supply ', 'yes'),
(68, 'rent5.1.webp,rent5.2.jpg,rent5.3.jpg,rent5.4.jpg,rent5.jpg,', 'Rent', '2000sqftt', '  250000', 'manish nagar opposite green bar nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms', 'ratan tupte', '24 hr  water supply ,garden ', 'yes'),
(69, '6.4.jpg,rent6.1.webp,rent6.2.jpg,rent6.3.jpeg,rent6.jpg,', 'Rent', '2000sqftt', '  20000', 'civil line nagpur maharshtra  ', 'one floor house with balcony modular kitchen  with large bedrooms`', 'gaurav tupte', '24 hr  water supply ', 'yes'),
(70, '7.2.jpg,rent7.1.webp,rent7.3.jpg,rent7.4.jpg,rent7.jpg,', 'Rent', '2000sqftt', '  25000-/ per month', 'manish nagar opposite green bar nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms', 'kailas tupte', '24 water garden big courtyard ', 'yes'),
(71, 'rent8.jpeg,rent8.1.jpg,rent8.2.jpg,rent8.3.jpg,rent8.4.jpg,', 'Rent', '2500sqftt', '  30000', 'wardha road alnkar nagar  nagpur maharashtra ', '2 floor house with balcony modular kitchen  with large bedrooms,attach swiming pool  ', 'nirupa tupte', 'swiming pool 24 water big courtyard ', 'yes'),
(72, 'rent9.jpg,rent9.1.jpg,rent9.3.jpg,rent9.4.jpg,', 'Rent', '1500sqftt', '  9000-/per month', 'manish nagar  opposite haldiram nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms', 'rushikesh magode', '24 hr  water supply ,garden ', 'yes'),
(73, '10.4.jpg,rent10.1.jpg,rent10.2.jpg,rent10.3.jpg,rent10.jpg,', 'Rent', '2000sqftt', '  20000', 'nirmal nagri shitla mata mandir nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms,car parking courtyard', 'abhijit gode', '24 hr  water supply ,garden ', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `conformpassword` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Email`, `password`, `conformpassword`, `Address`, `contactno`) VALUES
(18, 'sonali ', 'sonali@gmail.com', 'pass123', 'pass123', 'higna', '70833525843'),
(21, 'harsh', 'harshsharma@gmail.com', 'pass123', 'pass123', 'xyz', '7083352843'),
(45, 'vasudha', 'vasudhabawane@gmail.com', 'pass123', 'pass123', 'dighori ', '7083352843'),
(46, 'abhijit', 'abhijitgode99@gmail.com', 'pass123', 'pass123', 'shitla mata mandir ', '7083352843'),
(47, 'shailesh kusram', 'shaileshkusram2000@gmail.com', 'pass123', 'pass123', 'shree hari nagar', '7083352843'),
(48, 'lakshman', 'ratantupte@gmail.com', 'pass123', 'pass123', 'xyz', '7083352843'),
(49, 'ashwini', 'ratantupte@gmail.com', 'pass123', 'pass123', 'pass123', '7083352843'),
(53, 'kailas', 'kailastupte@gmail.com', 'pass123', 'pass123', 'xyz', '7083352843');

-- --------------------------------------------------------

--
-- Table structure for table `vasudha_cartproperty`
--

CREATE TABLE `vasudha_cartproperty` (
  `id` int(6) UNSIGNED NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Dimension` varchar(255) NOT NULL,
  `Prize` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `Facility` varchar(255) NOT NULL,
  `Furnished` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vasudha_cartproperty`
--

INSERT INTO `vasudha_cartproperty` (`id`, `Image`, `Type`, `Dimension`, `Prize`, `Address`, `Description`, `Owner`, `Facility`, `Furnished`) VALUES
(4, 'rent5.1.webp,rent5.2.jpg,rent5.3.jpg,rent5.4.jpg,rent5.jpg,', 'Rent', '2000sqftt', '    250000', 'manish nagar opposite green bar nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms', 'ratan tupte', '24 hr  water supply ,garden ', 'yes'),
(5, 'rent1.jpg,rent4.1.jpg,rent4.2.webp,rent4.3.jpg,rent4.4.jpg,', 'Rent', '1500sqftt', '    20000', 'pawan layout dighor nagpur maharashtra', '2 floor house with balcony modular kitchen  with large bedrooms,attach swiming pool  ', 'vasudha bawane', '24 hr  water supply ', 'yes'),
(6, 'rent2.1.jpg,rent2.2.jpg,rent2.3.webp,rent2.jpg,', 'Rent', '1000sqft', '    9000-/per month', 'mahal near cp berar college nagpur maharashtra', '4 memeber family house with courtyard', 'yogesh shaniware ', '24 hr  water supply ', 'no'),
(7, 'rent8.jpeg,rent8.1.jpg,rent8.2.jpg,rent8.3.jpg,rent8.4.jpg,', 'Rent', '2500sqftt', '    30000', 'wardha road alnkar nagar  nagpur maharashtra ', '2 floor house with balcony modular kitchen  with large bedrooms,attach swiming pool  ', 'nirupa tupte', 'swiming pool 24 water big courtyard ', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abhijit_cartproperty`
--
ALTER TABLE `abhijit_cartproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ashwini_cartproperty`
--
ALTER TABLE `ashwini_cartproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intrested`
--
ALTER TABLE `intrested`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kailas_cartproperty`
--
ALTER TABLE `kailas_cartproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lakshman_cartproperty`
--
ALTER TABLE `lakshman_cartproperty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vasudha_cartproperty`
--
ALTER TABLE `vasudha_cartproperty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abhijit_cartproperty`
--
ALTER TABLE `abhijit_cartproperty`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ashwini_cartproperty`
--
ALTER TABLE `ashwini_cartproperty`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `intrested`
--
ALTER TABLE `intrested`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `kailas_cartproperty`
--
ALTER TABLE `kailas_cartproperty`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lakshman_cartproperty`
--
ALTER TABLE `lakshman_cartproperty`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `vasudha_cartproperty`
--
ALTER TABLE `vasudha_cartproperty`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
