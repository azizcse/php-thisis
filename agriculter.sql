-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 27, 2013 at 10:14 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `agriculture`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `cropsinfo`
-- 

DROP TABLE IF EXISTS `cropsinfo`;
CREATE TABLE `cropsinfo` (
  `district_name` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `crops` varchar(20) NOT NULL,
  `amount_products` varchar(20) NOT NULL,
  `required` varchar(20) NOT NULL,
  `purchage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `cropsinfo`
-- 

INSERT INTO `cropsinfo` (`district_name`, `year`, `crops`, `amount_products`, `required`, `purchage`) VALUES 
('Dhaka District', 1998, 'Paddy', '244', '344', '345'),
('Dhaka District', 2000, 'Paddy', '565', '56', '34'),
('Rajshahi District', 2001, 'Paddy', '5656', '45', '56');

-- --------------------------------------------------------

-- 
-- Table structure for table `districtdescription`
-- 

DROP TABLE IF EXISTS `districtdescription`;
CREATE TABLE `districtdescription` (
  `id` int(11) NOT NULL auto_increment,
  `districtInfo` text,
  `climate` text,
  `landuse` text,
  `maincrop` text,
  `mainfruit` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `districtdescription`
-- 

INSERT INTO `districtdescription` (`id`, `districtInfo`, `climate`, `landuse`, `maincrop`, `mainfruit`) VALUES 
(1, 'Dhaka District  is a district located in central Bangladesh, and is the densest district in the nation. It is a part of the Dhaka Division. Dhaka, the capital of Bangladesh, rests on the eastern banks of the Buriganga River which flows from the Turag to the south of the district. While Dhaka (city) occupies only about a fifth of the area of Dhaka district, it is the economic, political and cultural center of the district and the country as a whole.', 'Temperature Average max:35.8c  min:12.6 cTotal rainfall 2105 mm.', 'Total cultivable 110951 hectares; fallow land 36697 hectares; single crop 37% double crop49.96% and treble crop land 13.04%', 'Paddy, jute, sugarcane and ground nut.', 'Mango, black berry, palm, banana. Jackfruit.'),
(2, 'Rajshahi District is a district in north-western Bangladesh. It is a part of the Rajshahi Division. The metropolitan city of Rajshahi is in Rajshahi District.', 'Annual average temperature maximum 37.8 c\r\nminimum 11.2 c. Annual rainfall 1862mm.', 'Cultivable land 157728.05 hectares; fallow land 73554.03 hectares; single crop 22% double crop 68% and treble crop land 10%. Cultivable land under irrigation is 56%.', 'Paddy, wheat, jute, sugarcane, turmeric, oil seed, onion, garlic, potato, betel leaf and mulberry plant.', 'Mango, jackfruit, banana, litchi, black berry, coconut, palm and papaya.'),
(3, 'The divisions of Bangladesh are divided into 64 districts, or zila . The districts are further subdivided into 493 sub-districts, or upazila.The district are run by a Deputy Commissioner (popularly abbreviated to "DC") who is appointed by the government from a Deputy secretary of B.C.S. Administration Cadre.', 'Annual average temperature max:35.1C min:12.1c Annual rainfall 1955.', 'Cultivable land 178601 hectares fallow land 5784.4 hectares single crop 37.68% double crop 48.80% and treble crop land 13.52%.', 'Paddy, jute, oil seed, betel leaf, onion, sugarcane and garlic', 'Mango, jackfruit, banana, coconut, litchi, betel nut, black berry, guava, amra,'),
(5, 'Jhenidah is a district in South-western Bangladesh. It is a part of the Khulna Division. It is an area 1949.62 km². On the norther it borders the Kushtia District on the north, to the south by Jessore District and West Bengal (India), to the east by Rajbari District and Magura District and to the west by Chuadanga District and West Bengal (India) on the west.', 'Annual average temperature maximum 37.1 c minmum 11.2 c annual rainfall 1467mm.', 'Total cultivable land 168310 hectares, single crop 10% double crop 72.11% and treple crop 17.89%.', 'Paddy, Jute, Wheat, sugarcane and mustared seed onion garlic and varieties of pulse and vegetable.', 'Mango, Jackfruit, Banana, Litchi, coconut, Dates, and palm.'),
(6, 'Magura (Bengali: &#2478;&#2494;&#2455;&#2497;&#2480;&#2494; &#2460;&#2503;&#2482;&#2494;) is a district in South-Western Bangladesh. It is a part of the Khulna Division.Magura District (Khulna Division) with an area of 1048 km2, is bounded by Rajbari district on the north, Jessore and Narail districts on the south, Faridpur district on the east and Jhenaidaha district on the west. Annual average temperature: maximum 37.1 °C, minimum 11.2 °C; annual rainfall 1467 mm. Main rivers are Gorai, Madhumati, Kumar, Nabaganga and Fatki; Ramsagar and Bural Baor are notable.', 'Annual average temperature highest 37.1 c and lowest 11.2 c annual rainfall 1467mm.', 'Cultivable land 46582 hectares, fallow land 165 hectares, single crop 13% double crop 70% and triple crop 17% land under irrigation 63%.', 'Paddy, Jute, Sugarcane, Tobacco, Chilli, Kachu, Sweet pototo, ground nut.', 'mango, banana, litchi, Jacafruit, coconut, guava, and palm.'),
(7, 'Narail town was named after a feudal lord (Zamindars). The zaminders established a market at Roopgonj, named after a zaminder. They established a post office for the first time in the district during British Raj near Rotongonj, named after another member of the feudal lord family. They modernised Narail. They promoted culture, sports and education in that part of the world.\r\n\r\nThe large playing field "Kuriddobe" was a gift of the feudal lord family. They introduced football competition in that part with a shield given to the champions and a cup the runners-up as well as medals to all players from early twentieth century. One of the feudal lords moved away from Narail and settled in Hatbaria and established another large manor (jomidarbaari)', 'Annual average temperature maximum 37.1 c minimum 11.2 annual rainfall 1467 mm.', 'Total cultivable land 78458 hectares single crop 43.17% double crop 44.25 % and treble crop land 8.94%.', 'Paddy, jute, wheat, Oil seed, Mustared, Pototo, Sugarcane, Kalai, and khesari. ', 'Mango, Jackfruit, Papaya, Banana, Black berry, Coconut and Betel nut.');

-- --------------------------------------------------------

-- 
-- Table structure for table `districtinfo`
-- 

DROP TABLE IF EXISTS `districtinfo`;
CREATE TABLE `districtinfo` (
  `id` int(5) NOT NULL auto_increment,
  `districtName` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `area` varchar(10) NOT NULL,
  `image` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `districtinfo`
-- 

INSERT INTO `districtinfo` (`id`, `districtName`, `division`, `area`, `image`) VALUES 
(1, 'Dhaka District', 'Dhaka', '1464 (km2)', 'Dhaka.jpg'),
(2, 'Rajshahi District', 'Rajshahi', '2407 (km2)', 'Rajshahi.gif'),
(3, 'Barisal District', 'Barisal Division', '3422(km2)', 'Barisal+District+Map.GIF'),
(5, 'Jhenaidah District', 'Khulna Division', '1961 km2', 'Jhenaidaha+District+Map.gif'),
(6, 'Magura district', 'Khulna Division', '1049 mk2', 'Magura+District+Map.GIF'),
(7, 'Narial district', 'Khulna Division', '990 km2', 'Narail+District+Map.GIF');

-- --------------------------------------------------------

-- 
-- Table structure for table `farmarsinfo`
-- 

DROP TABLE IF EXISTS `farmarsinfo`;
CREATE TABLE `farmarsinfo` (
  `id` varchar(10) NOT NULL,
  `land` varchar(30) NOT NULL,
  `year` varchar(10) NOT NULL,
  `crops` text NOT NULL,
  `totalamount` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `farmarsinfo`
-- 

INSERT INTO `farmarsinfo` (`id`, `land`, `year`, `crops`, `totalamount`, `cost`) VALUES 
('bar-01', '12 hectares', '2005', 'Paddy, Jute, oil seed.', 123000, 100000),
('bar-01', '12 hectares', '2011', 'Paddy, potato,chili,Vegetable.', 123000, 100000),
('dha-01', '12 hectares', '2011', 'Paddy, Wheat, sugarcane.', 14344, 13444),
('jhe-01', '15 hectares', '2011', 'Wheat, Paddy, Oil seedand vegetable.', 235566, 23333),
('mag-01', '12 hectares', '2011', 'Sugarcane, wheat, Paddy.', 12312, 10023),
('nar-01', '15 hectares', '2011', 'Paddy, onion, garlic, wheat.', 235566, 55466),
('raj-01', '12 hectares', '2011', 'Paddy, Fruit.', 146565, 12222);

-- --------------------------------------------------------

-- 
-- Table structure for table `problems`
-- 

DROP TABLE IF EXISTS `problems`;
CREATE TABLE `problems` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `date` varchar(15) NOT NULL,
  `problem` text NOT NULL,
  `solution` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `problems`
-- 

INSERT INTO `problems` (`id`, `name`, `address`, `date`, `problem`, `solution`) VALUES 
(1, 'Abdul Mozid', 'Village:Kamalhat Post Offic:Khalkula Thana:Kaligonj District:Jhenaidah', '2012-05-22', 'It as a great problem of my paddy field\r\nthe color of paddy leaf gradually become fade. ', 'You should use different types of fertilizer'),
(2, 'Md. abdul Kuddis', 'Vill Post :Baker Gonj', '0000-00-00', 'It as a great problem of my paddy field the color of paddy leaf gradually become fade. ', 'You should use different types of fertilizer');

-- --------------------------------------------------------

-- 
-- Table structure for table `registration`
-- 

DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `name` varchar(40) NOT NULL,
  `id` varchar(10) NOT NULL,
  `address` text,
  `districtName` varchar(30) NOT NULL,
  `image` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `registration`
-- 

INSERT INTO `registration` (`name`, `id`, `address`, `districtName`, `image`) VALUES 
('Rashid ali', 'bar-01', 'Barishal-12', 'Barisal District', '4380788725_ed2d6eb1f7_z.jpg'),
('Md. Anawarul haque', 'dha-01', 'Savar', 'Dhaka District', 'farming home.jpg'),
('Md. Nazir Ali', 'jhe-01', ' V:kamalhat, P:khalkula, Thana:Kaligonj, district: Jhenaidah.', 'Jhenaidah District', '4195.jpg'),
('Md. Murad haque', 'mag-01', 'V:boluhar, thana:kaligonj district:jhenaidah', 'Magura district', 'BangladeshiShrimpFarmer.jpg'),
('Sirazul Haque', 'nar-01', 'narial -12', 'Narial district', 'a-bangladeshi-farmer-using-org.jpg'),
('Md. Abdur Razzak', 'raj-01', 'Road no:4 House no:12 rajshahi', 'Rajshahi District', 'farmer.jpg');
