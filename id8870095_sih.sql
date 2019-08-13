-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2019 at 10:57 AM
-- Server version: 10.3.13-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8870095_sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `awareness_camp`
--

CREATE TABLE `awareness_camp` (
  `PHCid` int(11) DEFAULT NULL,
  `state` char(50) DEFAULT NULL,
  `city` char(50) DEFAULT NULL,
  `type` char(50) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `digital_resources`
--

CREATE TABLE `digital_resources` (
  `id` int(11) NOT NULL,
  `FileName` varchar(50) NOT NULL,
  `FilePath` varchar(50) NOT NULL,
  `FileType` varchar(50) NOT NULL,
  `ExpiryDate` date NOT NULL,
  `UploadedBy` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Heading` varchar(200) NOT NULL,
  `Description` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `digital_resources`
--

INSERT INTO `digital_resources` (`id`, `FileName`, `FilePath`, `FileType`, `ExpiryDate`, `UploadedBy`, `Category`, `Heading`, `Description`) VALUES
(1, 'first.jpg', 'guidance_by_ministry/phc.jpg', 'image/jpeg', '2019-03-06', 'Ministry', 'training courses', 'Heading 1', 'Description 1'),
(2, 'first.jpg', 'guidance_by_ministry/phc.jpg', 'image/jpeg', '2019-03-20', 'Ministry', 'training courses', 'Heading 2', 'Description 2'),
(3, 'phc.jpg', 'guidance_by_ministry/phc.jpg', 'image/jpeg', '2019-03-04', 'Ministry', 'training courses', 'Heading 3', 'Description 3'),
(4, 'Seminar progress document.doc', 'guidance_by_ministry/Seminar progress document.doc', 'application/msword', '2019-03-04', 'Ministry', 'women care', 'This is a Heading', 'In the Desc.........'),
(5, 'geminilist(1).pdf', 'guidance_by_ministry/geminilist(1).pdf', 'application/pdf', '2019-03-06', 'Ministry', 'women care', '', ''),
(6, 'Screenshot (11)(2).png', 'guidance_by_ministry/Screenshot (11)(2).png', 'image/png', '2019-03-10', 'Ministry', 'child care', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `dist_id` int(11) NOT NULL,
  `dist_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dist_id`, `dist_name`, `state_id`, `status`) VALUES
(1, 'Akola', 15, 1),
(2, 'Amravati', 15, 1),
(3, 'Buldana', 15, 1),
(4, 'Yavatmal', 15, 1),
(5, 'Washim', 15, 1),
(6, 'Aurangabad', 15, 1),
(7, 'Beed', 15, 1),
(8, 'Jalna', 15, 1),
(9, 'Osmanabad', 15, 1),
(10, 'Nanded', 15, 1),
(11, 'Latur', 15, 1),
(12, 'Parbhani', 15, 1),
(13, 'Hingoli', 15, 1),
(14, 'Mumbai City', 15, 1),
(15, 'Mumbai', 15, 1),
(16, 'Thane', 15, 1),
(17, 'Palghar', 15, 1),
(18, 'Raigad', 15, 1),
(19, 'Ratnagiri', 15, 1),
(20, 'Sindhudurg', 15, 1),
(21, 'Bhandara', 15, 1),
(22, 'Chandrapur', 15, 1),
(23, 'Gadchiroli', 15, 1),
(24, 'Gondia', 15, 1),
(25, 'Nagpur', 15, 1),
(26, 'Wardha', 15, 1),
(27, 'Ahmednagar', 15, 1),
(28, 'Dhule', 15, 1),
(29, 'Jalgaon', 15, 1),
(30, 'Nandurbar', 15, 1),
(31, 'Nashik', 15, 1),
(32, 'Kolhapur', 15, 1),
(33, 'Pune', 15, 1),
(34, 'Sangli', 15, 1),
(35, 'Satara', 15, 1),
(36, 'Solapur', 15, 1),
(37, 'Anantapur', 1, 1),
(38, 'Chittoor', 1, 1),
(39, 'East Godavari', 1, 1),
(40, 'Guntur', 1, 1),
(41, 'Kadapa', 1, 1),
(42, 'Krishna', 1, 1),
(43, 'Kurnool', 1, 1),
(44, 'Sri Potti Sri Ramulu Nellore', 1, 1),
(45, 'Prakasam', 1, 1),
(46, 'Srikakulam', 1, 1),
(47, 'Visakhapatnam', 1, 1),
(48, 'Vizianagaram', 1, 1),
(49, 'West Godavari', 1, 1),
(50, 'Anjaw', 2, 1),
(51, 'Central Siang ', 2, 1),
(52, 'Changlang', 2, 1),
(53, 'East Kameng', 2, 1),
(54, 'East Siang', 2, 1),
(55, 'Kurung Kumey', 2, 1),
(56, 'Kra Daadi', 2, 1),
(57, 'Lohit', 2, 1),
(58, 'Longding', 2, 1),
(59, 'Lower Dibang Valley', 2, 1),
(60, 'Lower Subansiri', 2, 1),
(61, 'Namsai', 2, 1),
(62, 'Papum Pare', 2, 1),
(63, 'Tirap', 2, 1),
(64, 'Tawang', 2, 1),
(65, 'Upper Subansiri', 2, 1),
(66, 'Upper Siang', 2, 1),
(67, 'West Kameng', 2, 1),
(68, 'West Siang', 2, 1),
(69, 'Baksa', 3, 1),
(70, 'Chirang', 3, 1),
(71, 'Darrang', 3, 1),
(72, 'Goalpara', 3, 1),
(73, 'Hojai', 3, 1),
(74, 'Jorhat', 3, 1),
(75, 'Kamrup', 3, 1),
(76, 'Lakhimpur', 3, 1),
(77, 'Murigaon', 3, 1),
(78, 'Nagaon', 3, 1),
(79, 'Sivasagar', 3, 1),
(80, 'Tinsukia', 3, 1),
(81, 'Araria', 4, 1),
(82, 'Arwal', 4, 1),
(83, 'Aurangabad', 4, 1),
(84, 'Banka', 4, 1),
(85, 'Begusarai', 4, 1),
(86, 'Bhabhua', 4, 1),
(87, 'Bhagalpur', 4, 1),
(88, 'Bhojpur', 4, 1),
(89, 'Buxar', 4, 1),
(90, 'Darbhanga', 4, 1),
(91, 'East Champaran', 4, 1),
(92, 'Gaya', 4, 1),
(93, 'Gopalganj', 4, 1),
(94, 'Jamui', 4, 1),
(95, 'Jehanabad', 4, 1),
(96, 'Katihar', 4, 1),
(97, 'Khagaria', 4, 1),
(98, 'Kishanganj', 4, 1),
(99, 'Lakhisaray', 4, 1),
(100, 'Madhepura', 4, 1),
(101, 'Madhubani', 4, 1),
(102, 'Monghyr', 4, 1),
(103, 'Nuzaffarpur', 4, 1),
(104, 'Nalanda', 4, 1),
(105, 'Nawada', 4, 1),
(106, 'Patana', 4, 1),
(107, 'Purnea', 4, 1),
(108, 'Rohtas', 4, 1),
(109, 'Saharsa', 4, 1),
(110, 'Samastipur', 4, 1),
(111, 'Saran', 4, 1),
(112, 'Sheikhpura', 4, 1),
(113, 'Sheohar', 4, 1),
(114, 'Sitamarhi', 4, 1),
(115, 'Siwan', 4, 1),
(116, 'Supaul', 4, 1),
(117, 'Vaishali', 4, 1),
(118, 'West Champaran', 4, 1),
(119, 'Balod', 5, 1),
(120, 'Bastar', 5, 1),
(121, 'Bijapur', 5, 1),
(122, 'Durg', 5, 1),
(123, 'Gariaband', 5, 1),
(124, 'Jashpur', 5, 1),
(125, 'Korba', 5, 1),
(126, 'Mungeli', 5, 1),
(127, 'Narayanpur', 5, 1),
(128, 'Raipur', 5, 1),
(129, 'Rajnandgaon', 5, 1),
(130, 'Surajpur', 5, 1),
(131, 'North Goa', 6, 1),
(132, 'South Goa', 6, 1),
(133, 'Ahmedabad', 7, 1),
(134, 'Bharuch', 7, 1),
(135, 'Chhota Udaipur', 7, 1),
(136, 'Dang', 7, 1),
(137, 'Kutch', 7, 1),
(138, 'Morbi', 7, 1),
(139, 'Narmada', 7, 1),
(140, 'Patan', 7, 1),
(141, 'Rajkot', 7, 1),
(142, 'Surat', 7, 1),
(143, 'Tapi', 7, 1),
(144, 'Valsad', 7, 1),
(145, 'Ambala', 8, 1),
(146, 'Bhiwani', 8, 1),
(147, 'Gurugarm', 8, 1),
(148, 'Hisar', 8, 1),
(149, 'Jind', 8, 1),
(150, 'Karnal', 8, 1),
(151, 'Nuh', 8, 1),
(152, 'Panipat', 8, 1),
(153, 'Rohtak', 8, 1),
(154, 'Sonipat', 8, 1),
(155, 'Bilaspur', 9, 1),
(156, 'Chambal', 9, 1),
(157, 'Hamirpur', 9, 1),
(158, 'Kinnaur', 9, 1),
(159, 'Kullu', 9, 1),
(160, 'nandi', 9, 1),
(161, 'Shimala', 9, 1),
(162, 'Solan', 9, 1),
(163, 'Una', 9, 1),
(164, 'Doda', 10, 1),
(165, 'Jammu', 10, 1),
(166, 'Kishtwar', 10, 1),
(167, 'Poonch', 10, 1),
(168, 'Ramban', 10, 1),
(169, 'Samba', 10, 1),
(170, 'Udhampur', 11, 1),
(171, 'Chatra', 11, 1),
(172, 'Dumka', 11, 1),
(173, 'Godda', 11, 1),
(174, 'Jamtara', 11, 1),
(175, 'Pakur', 11, 1),
(176, 'Bagalkot', 12, 1),
(177, 'Haveri', 12, 1),
(178, 'Koppal', 12, 1),
(179, 'Mysuru', 12, 1),
(180, 'Tumakuru', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_details`
--

CREATE TABLE `equipment_details` (
  `PHCid` int(11) DEFAULT NULL,
  `equipment_name` varchar(50) DEFAULT NULL,
  `availablity` int(11) DEFAULT NULL,
  `functional` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_details`
--

INSERT INTO `equipment_details` (`PHCid`, `equipment_name`, `availablity`, `functional`) VALUES
(1, 'Nail Cutter', 5, 3),
(1, 'aa', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `first_trimester`
--

CREATE TABLE `first_trimester` (
  `pid` int(11) DEFAULT NULL,
  `PHCid` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `pregnancy_week` int(11) DEFAULT NULL,
  `TT_dose` char(10) DEFAULT NULL,
  `abortion` char(3) DEFAULT NULL,
  `ultrasound_scan` char(3) DEFAULT NULL,
  `bp` int(11) DEFAULT NULL,
  `blood_test` char(3) DEFAULT NULL,
  `anemia_screen` char(10) DEFAULT NULL,
  `rubella` char(10) DEFAULT NULL,
  `hepatitis_b` char(10) DEFAULT NULL,
  `syphilis` char(10) DEFAULT NULL,
  `hiv` char(10) DEFAULT NULL,
  `nt` char(10) DEFAULT NULL,
  `cvs` char(10) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_trimester`
--

INSERT INTO `first_trimester` (`pid`, `PHCid`, `weight`, `pregnancy_week`, `TT_dose`, `abortion`, `ultrasound_scan`, `bp`, `blood_test`, `anemia_screen`, `rubella`, `hepatitis_b`, `syphilis`, `hiv`, `nt`, `cvs`, `status`, `date`) VALUES
(8, 1001, 45, 4, 'TT Dose 2', 'No', 'Yes', -12, 'Yes', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 'Positive', 0, '2019-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `guidance_material`
--

CREATE TABLE `guidance_material` (
  `type` varchar(100) DEFAULT NULL,
  `language` char(20) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `video` varchar(500) DEFAULT NULL,
  `image` longblob DEFAULT NULL,
  `pdf` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infant_details`
--

CREATE TABLE `infant_details` (
  `PHCid` int(11) DEFAULT NULL,
  `number_infants` int(11) DEFAULT NULL,
  `number_infant_mortal` int(11) DEFAULT NULL,
  `gender_male` int(11) DEFAULT NULL,
  `gender_female` int(11) DEFAULT NULL,
  `number_above_weight2.5` int(11) DEFAULT NULL,
  `number_below_weight2.5` int(11) DEFAULT NULL,
  `vaccination` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infant_details`
--

INSERT INTO `infant_details` (`PHCid`, `number_infants`, `number_infant_mortal`, `gender_male`, `gender_female`, `number_above_weight2.5`, `number_below_weight2.5`, `vaccination`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure_details`
--

CREATE TABLE `infrastructure_details` (
  `PHCid` int(11) DEFAULT NULL,
  `no_labs` int(11) DEFAULT NULL,
  `no_beds` int(11) DEFAULT NULL,
  `labour_room` tinyint(1) DEFAULT NULL,
  `waiting_circulatory_space` tinyint(1) DEFAULT NULL,
  `opd_room` tinyint(1) DEFAULT NULL,
  `wards` tinyint(1) DEFAULT NULL,
  `operation_theater` tinyint(1) DEFAULT NULL,
  `strechers` tinyint(1) DEFAULT NULL,
  `emergency_entry_exit` tinyint(1) DEFAULT NULL,
  `pharmacy` tinyint(1) DEFAULT NULL,
  `maternity_room` tinyint(1) DEFAULT NULL,
  `doctor_room` tinyint(1) DEFAULT NULL,
  `visiting_doctor_room` tinyint(1) DEFAULT NULL,
  `public_utilities` char(3) DEFAULT NULL,
  `electricity_availability` char(3) DEFAULT NULL,
  `registration_counter` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infrastructure_details`
--

INSERT INTO `infrastructure_details` (`PHCid`, `no_labs`, `no_beds`, `labour_room`, `waiting_circulatory_space`, `opd_room`, `wards`, `operation_theater`, `strechers`, `emergency_entry_exit`, `pharmacy`, `maternity_room`, `doctor_room`, `visiting_doctor_room`, `public_utilities`, `electricity_availability`, `registration_counter`) VALUES
(1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `lab_services`
--

CREATE TABLE `lab_services` (
  `PHCid` int(11) DEFAULT NULL,
  `urine_routine` char(3) DEFAULT NULL,
  `blood_tests` char(3) DEFAULT NULL,
  `diagnosis_RTI_STD` char(3) DEFAULT NULL,
  `sputum_testing` char(3) DEFAULT NULL,
  `malaria_exam` char(3) DEFAULT NULL,
  `rapid_pregnancy_test` char(3) DEFAULT NULL,
  `rapid_HIV_test` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_services`
--

INSERT INTO `lab_services` (`PHCid`, `urine_routine`, `blood_tests`, `diagnosis_RTI_STD`, `sputum_testing`, `malaria_exam`, `rapid_pregnancy_test`, `rapid_HIV_test`) VALUES
(1, 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
(1001, 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`, `usertype`) VALUES
(1000, 'ministry', 'ministry'),
(2000, 'admin', 'admin'),
(1, 'phc', 'phc'),
(2, 'phc', 'phc'),
(1001, 'phc', 'phc');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Display` varchar(500) NOT NULL,
  `File` varchar(225) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `expire_d` date NOT NULL,
  `descr` varchar(500) NOT NULL,
  `uploadedby` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Display`, `File`, `type`, `size`, `expire_d`, `descr`, `uploadedby`) VALUES
('smdj', '14066-ickdst19-schedule.pdf', 'application/pdf', 420, '2020-02-06', 'jjfdj', ''),
('Training ', '81494-screenshot-(11)(2).png', 'image/png', 0, '2019-03-06', 'Health management or healthcare management designates the process of organising and coordinating the performance of a healthcare facility. A health manager supervises the business and administrative aspects of a health care institution, and is responsible for the overall internal healthcare system, including clinical and non-clinical staff, partner organisations, insurance companies, government bodies, etc. ', '1'),
('Train Nutrition', '30639-temp(1)', 'application/octet-stream', 0, '2019-04-11', 'VLCC offers Diploma and certificate courses in regular class room programmes and also has certificate courses in Distance Learning programmes, in varied categories like Nutrition & Dietetics, Clinical Nutrition, Sports and Fitness Nutrition, Child care Nutrition and Weight management and Slimming Therapies, incorporating comprehensive in depth knowledge in Nutrition Sciences, Food Science, Basic and Advance Anatomy & Physiology, Dietetics, Community and Therapeutic Nutrition', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE `patient_registration` (
  `PHCid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `aadhar_no` varchar(14) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`PHCid`, `pid`, `name`, `address`, `aadhar_no`, `contact`, `age`, `email`, `date`) VALUES
(1, 3, 'hghg', 'pune', '457878787878', '7878788989', 25, 'hgghg@gmail.com', '2019-03-03'),
(1, 4, 'patilhhjh', 'pune', '787878898989', '7856986541', 25, 'ftre@gmail.com', '2019-03-03'),
(1, 5, 'mayuri', 'aaa', '11', '99999', 10, 'mayu', '2019-03-03'),
(1, 6, 'patilhhjh', 'pune', '787878898989', '7856986541', 25, 'ftre@gmail.com', '2019-03-03'),
(1, 7, 'hghg', 'h', '78', '4', 25, 'h@ghh.bhs', '2019-03-03'),
(1001, 8, 'Mayuri Nanaware', 'Pune', '111111111111', '9923879288', 19, 'a@gmail.com', '2019-03-03'),
(1001, 9, 'Prajakta Shinde', 'Nikhil Heights , Vadgaon bk , Pune-411041', '864256994512', '9689062290', 20, 'mayunanaware@gmail.com', '2019-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `phcregister`
--

CREATE TABLE `phcregister` (
  `PHCid` int(11) NOT NULL,
  `PHCname` varchar(50) NOT NULL,
  `Mfirstname` varchar(50) NOT NULL,
  `Mlastname` varchar(50) NOT NULL,
  `Phoneno` varchar(20) NOT NULL,
  `Addline1` varchar(100) DEFAULT NULL,
  `Addline2` varchar(100) DEFAULT NULL,
  `State` varchar(50) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `Taluka` varchar(50) DEFAULT NULL,
  `Village` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Beds` varchar(20) NOT NULL,
  `Labs` varchar(20) NOT NULL,
  `Ambulances` varchar(20) NOT NULL,
  `Labourrooms` varchar(20) NOT NULL,
  `Dservices` varchar(20) NOT NULL,
  `Deliveryrooms` varchar(20) NOT NULL,
  `Nutrition` varchar(20) NOT NULL,
  `Femalestaff` varchar(20) NOT NULL,
  `Commfacilities` varchar(20) NOT NULL,
  `Noticeboard` varchar(20) NOT NULL,
  `Pharma` varchar(20) NOT NULL,
  `Password1` varchar(20) NOT NULL,
  `Upload_on` date NOT NULL,
  `Status1` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phcregister`
--

INSERT INTO `phcregister` (`PHCid`, `PHCname`, `Mfirstname`, `Mlastname`, `Phoneno`, `Addline1`, `Addline2`, `State`, `District`, `Taluka`, `Village`, `Email`, `Beds`, `Labs`, `Ambulances`, `Labourrooms`, `Dservices`, `Deliveryrooms`, `Nutrition`, `Femalestaff`, `Commfacilities`, `Noticeboard`, `Pharma`, `Password1`, `Upload_on`, `Status1`) VALUES
(1, 'PHC CHOPDA', 'nnmn', 'mnmnm', '1111-555-2555', 'm,m,mhjhj', 'jhjhj', '15', '29', '51', '21', 'rashmimshewale11@gmail.com', 'Yes', ' No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '123', '2019-02-20', 1),
(2, 'PHC BSL', 'snehal', 'sonawane', '9999-999-9999', 'abc', 'chauk', '15', '29', '51', '29', 'sonawanesnehal41@gmail.com', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', '', 'abc', '2019-02-28', 1),
(3, 'phc coimbatore', 'abc', 'xyz', '9890606020', 'jdgsdg', 'dggc', '15', '29', '51', '21', 'asbbb@dump.com', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'phc', '2019-03-02', 1),
(4, 'PHC abc', 'mayuri', 'hhh', '9999-999-9999', 'ksdjs', 'snbdb', '15', '23', '', '', 'abc@gmail.com', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'phc', '2019-03-02', 0),
(1001, 'KAAATE', 'Swaraj', 'Dhondge', '1111-111-1111', 'asd', 'asd', '15', '29', '51', '18', 'swarajdhondge009@gmail.com', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'phc', '2019-03-03', 0),
(1007, 'Ratna Prabha', 'Shubham', 'Deshpande', '8888-666-8888', 'Pune', 'Pune', '15', '33', '', '', 'rashmishewale11@gmail.com', 'Yes', 'No', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'phc', '2019-03-03', 0),
(1008, 'Kushal Vihar', 'Neha', 'Mali', '2222-555-6666', 'Jalgaon', 'Jalgaon', '15', '29', '51', '27', 'shivani.rajmane123@gmail.com', '', 'Yes', 'Yes', 'Yes', '', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'phc', '2019-03-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pregnancy_details`
--

CREATE TABLE `pregnancy_details` (
  `PHCid` int(11) DEFAULT NULL,
  `pregnancy_count` int(11) DEFAULT NULL,
  `no_expert_treatment` int(11) DEFAULT NULL,
  `no_doctor_treatment` int(11) DEFAULT NULL,
  `no_delivery_SBA` int(11) DEFAULT NULL,
  `no_home_delivery` int(11) DEFAULT NULL,
  `no_institutional_delivery` int(11) DEFAULT NULL,
  `no_complicated_delivery` int(11) DEFAULT NULL,
  `no_maternal_death` int(11) DEFAULT NULL,
  `no_abortion` int(11) NOT NULL,
  `age_group_15_25` int(11) DEFAULT NULL,
  `age_group_26_35` int(11) DEFAULT NULL,
  `age_group_36_45` int(11) DEFAULT NULL,
  `anc` int(11) NOT NULL,
  `inc` int(11) NOT NULL,
  `pnc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pregnancy_details`
--

INSERT INTO `pregnancy_details` (`PHCid`, `pregnancy_count`, `no_expert_treatment`, `no_doctor_treatment`, `no_delivery_SBA`, `no_home_delivery`, `no_institutional_delivery`, `no_complicated_delivery`, `no_maternal_death`, `no_abortion`, `age_group_15_25`, `age_group_26_35`, `age_group_36_45`, `anc`, `inc`, `pnc`) VALUES
(1, 1, 2, 3, 4, 5, 6, 7, 10, 0, 11, 12, 9, 13, 15, 14),
(1, 1, 2, 3, 4, 5, 6, 7, 10, 0, 11, 12, 9, 13, 15, 14),
(1, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7),
(1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(1, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10),
(1, 11, 11, 11, 1, 111, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11),
(1, 10, 1, 1, 1, 1, 1, 1, 1, 1, 5, 5, 5, 0, 0, 0),
(1, 16, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1, 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1, 20, 1, 1, 1, 1, 1, 1, 1, 1, 7, 7, 7, 7, 7, 7),
(1, 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1, 25, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1, 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(1, 20, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanitation_details`
--

CREATE TABLE `sanitation_details` (
  `PHCid` int(11) DEFAULT NULL,
  `waste_disposal` char(3) DEFAULT NULL,
  `sewerage_system` char(3) DEFAULT NULL,
  `medical_disposal` char(3) DEFAULT NULL,
  `female_washroom` char(3) DEFAULT NULL,
  `male_washroom` char(3) DEFAULT NULL,
  `stagnant_pool` char(3) DEFAULT NULL,
  `industry_pollution` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `second_trimester`
--

CREATE TABLE `second_trimester` (
  `PHCid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `weight` float NOT NULL,
  `pregnancy_week` int(11) NOT NULL,
  `bp` int(11) NOT NULL,
  `sequential_screening` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `multiple_marker` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `second_trimester`
--

INSERT INTO `second_trimester` (`PHCid`, `pid`, `weight`, `pregnancy_week`, `bp`, `sequential_screening`, `multiple_marker`, `date`) VALUES
(1001, 8, 40, 5, 150, 'Negative', 'Negative', '2019-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `PHCid` int(11) DEFAULT NULL,
  `opd_services` char(3) DEFAULT NULL,
  `emergency_services` char(3) DEFAULT NULL,
  `antenatal_care` char(3) DEFAULT NULL,
  `postnatal_care` char(3) DEFAULT NULL,
  `intranatal_care` char(3) DEFAULT NULL,
  `newborn_care` char(3) DEFAULT NULL,
  `child_care` char(3) DEFAULT NULL,
  `family_planning` char(3) DEFAULT NULL,
  `24_hours` char(3) DEFAULT NULL,
  `nutrition` char(3) DEFAULT NULL,
  `school_health_program` char(3) DEFAULT NULL,
  `rehabilitation` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`PHCid`, `opd_services`, `emergency_services`, `antenatal_care`, `postnatal_care`, `intranatal_care`, `newborn_care`, `child_care`, `family_planning`, `24_hours`, `nutrition`, `school_health_program`, `rehabilitation`) VALUES
(1, 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No'),
(1001, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `staff_id` int(11) NOT NULL,
  `PHCid` int(11) DEFAULT NULL,
  `name` char(50) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `contact_no` varchar(10) DEFAULT NULL,
  `gender` char(10) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staff_id`, `PHCid`, `name`, `email_id`, `contact_no`, `gender`, `designation`) VALUES
(2, 1, 'komal', 'k@gmail.com', '8888888888', 'female', 'account_operator'),
(4, 1, 'mayuri', 'mayu@gmail.com', '9890606020', 'male', 'nurse_midwife'),
(5, 2, 'Shivani', 'shivani.rajmane123@gmail.com', '7218867653', 'female', 'health_assistant_female'),
(6, 1, 'Rashmi', 'rash@g.com', '9999999999', 'Female', 'asb'),
(7, 1, 'Rashmi', 'r@g.com', '8888888888', 'female', 'medical_officer_ayush'),
(9, 1, 'shivani', 'shivanirajmane06@gmail.com', '9999999999', 'female', 'medical_officer_mbbs');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `status`) VALUES
(1, 'Andhra Pradesh', 1),
(2, 'Arunachal Pradesh', 1),
(3, 'Assam', 1),
(4, 'Bihar', 1),
(5, 'Chhattisgarh', 1),
(6, 'Goa', 1),
(7, 'Gujarat', 1),
(8, 'Haryana', 1),
(9, 'Himachal Pradesh', 1),
(10, 'Jammu and Kashmir', 1),
(11, 'Jharkhand', 1),
(12, 'Karnataka', 1),
(13, 'Kerala', 1),
(14, 'Madhya Pradesh', 1),
(15, 'Maharashtra', 1),
(16, 'Manipur', 1),
(17, 'Meghalaya', 1),
(18, 'Mizoram', 1),
(19, 'Nagaland', 1),
(20, 'Odisha', 1),
(21, 'Punjab', 1),
(22, 'Rajasthan', 1),
(23, 'Sikkim', 1),
(24, 'Tamil Nadu', 1),
(25, 'Telangana', 1),
(26, 'Tripura', 1),
(27, 'Uttar Pradesh', 1),
(28, 'Uttarakhand', 1),
(29, 'West Bengal', 1),
(30, 'Andaman and Nicobar Isaland', 1),
(31, 'Chandigarh', 1),
(32, 'Dadar and Nagar Haveli', 1),
(33, 'Daman and Diu', 1),
(34, 'Delhi', 1),
(35, 'Lakshadweep', 1),
(36, 'Pondicherry', 1),
(37, 'Andhra Pradesh', 1),
(38, 'Arunachal Pradesh', 1),
(39, 'Assam', 1),
(40, 'Bihar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE `taluka` (
  `tal_id` int(11) NOT NULL,
  `tal_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dist_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`tal_id`, `tal_name`, `dist_id`, `status`) VALUES
(1, 'Akola', 1, 1),
(2, 'Akot', 1, 1),
(3, 'Telhara', 1, 1),
(4, 'Balapur', 1, 1),
(5, 'Patur', 1, 1),
(6, 'Murtajapur', 1, 1),
(7, 'Barshitakli', 1, 1),
(8, 'Amravati', 2, 1),
(9, 'Bhatukali', 2, 1),
(10, 'Nandgoan Khandeshwar', 2, 1),
(11, 'Dharni', 2, 1),
(12, 'Chikhaldara', 2, 1),
(13, 'Achalpur', 2, 1),
(14, 'Chandurbazar', 2, 1),
(15, 'Morshi', 2, 1),
(16, 'Warud', 2, 1),
(17, 'Daryapur', 2, 1),
(18, 'Anjangaon', 2, 1),
(19, 'Chandur', 2, 1),
(20, 'Dhamangaon', 2, 1),
(21, 'Tiosa', 2, 1),
(22, 'Dhule', 28, 1),
(23, 'Sakri', 28, 1),
(24, 'Sindkheda', 28, 1),
(25, 'Shirpur', 28, 1),
(26, 'Pune City', 33, 1),
(27, 'Haveli', 33, 1),
(28, 'Khed', 33, 1),
(29, 'Junnar', 33, 1),
(30, 'Ambegaon', 33, 1),
(31, 'Maval', 33, 1),
(32, 'Mulshi', 33, 1),
(33, 'Shirur', 33, 1),
(34, 'Purandhar', 33, 1),
(35, 'Velhe', 33, 1),
(36, 'Bhor', 33, 1),
(37, 'Baramati', 33, 1),
(38, 'Indapur', 33, 1),
(39, 'Daund', 33, 1),
(40, 'Jamner', 29, 1),
(41, 'Jalgaon', 29, 1),
(42, 'Erandol', 29, 1),
(43, 'Dharangaon', 29, 1),
(44, 'Bhusawal', 29, 1),
(45, 'Raver', 29, 1),
(46, 'Muktainagar', 29, 1),
(47, 'Bodwad', 29, 1),
(48, 'Yawal', 29, 1),
(49, 'Amalner', 29, 1),
(50, 'Parola', 29, 1),
(51, 'Chopda', 29, 1),
(52, 'Bhadgaon', 29, 1),
(53, 'Chalisgaon', 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `PHCid` int(11) DEFAULT NULL,
  `traditional_birth_attendants` int(11) DEFAULT NULL,
  `health_worker_female` int(11) DEFAULT NULL,
  `health_worker_male` int(11) DEFAULT NULL,
  `medical_officer` int(11) DEFAULT NULL,
  `minor_treatment` int(11) DEFAULT NULL,
  `asha` int(11) DEFAULT NULL,
  `worker_antenatal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userfiles`
--

CREATE TABLE `userfiles` (
  `PHCid` int(11) NOT NULL,
  `FilePath` varchar(200) NOT NULL,
  `FileName` varchar(200) NOT NULL,
  `FileType` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userfiles`
--

INSERT INTO `userfiles` (`PHCid`, `FilePath`, `FileName`, `FileType`) VALUES
(1, 'phc_files/phc1.jpg', 'phc1.jpg', 'image/jpeg'),
(2, 'phc_files/phc1.jpg', 'phc1.jpg', 'image/jpeg'),
(3, 'phc_files/8._Chap_1_2013.doc', '8._Chap_1_2013.doc', 'application/msword'),
(1007, 'phc_files/mom_3(2).docx', 'mom_3(2).docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
(4, 'phc_files/snehal 2019.doc', 'snehal 2019.doc', 'application/msword'),
(1008, 'phc_files/input.txt', 'input.txt', 'text/plain'),
(1001, 'phc_files/p4019.pdf', 'p4019.pdf', 'application/pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_grievance`
--

CREATE TABLE `user_grievance` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `state` char(20) DEFAULT NULL,
  `district` char(20) DEFAULT NULL,
  `taluka` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_grievance`
--

INSERT INTO `user_grievance` (`id`, `subject`, `description`, `state`, `district`, `taluka`) VALUES
(4, 'abcd', 'qwerty', '15', '29', '51'),
(5, 'hdggdg', 'shhsh', '15', '29', '47'),
(6, 'shgsd', 'ygdgdg', '15', '29', '51'),
(7, 'shgsd', 'ygdgdg', '15', '29', '51'),
(8, 'hhh', 'hhg', '15', '29', '44'),
(9, 'jddyydyd', 'hgg', '15', '29', '44'),
(10, 'djchch', 'gcdgcg', '15', '29', '42'),
(11, '3rd march', 'Related to grievance', '15', '29', '51');

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE `village` (
  `vil_id` int(11) NOT NULL,
  `vil_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tal_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`vil_id`, `vil_name`, `tal_id`, `status`) VALUES
(1, 'Amode Bk.', 41, 1),
(2, 'Amode Kh', 41, 1),
(3, 'Asoda', 41, 1),
(4, 'Awar', 41, 1),
(5, 'Beli', 41, 1),
(6, 'Bhokar', 41, 1),
(7, 'Avhane', 41, 1),
(8, 'Awar', 41, 1),
(9, 'Bhadli Bk.', 41, 1),
(10, 'Bhagpur', 41, 1),
(11, 'Bholane', 41, 1),
(12, 'Bikhede', 41, 1),
(13, 'Bilwadi', 41, 1),
(14, 'Bornar', 41, 1),
(15, 'Dhanore', 41, 1),
(16, 'Dhanwadi', 41, 1),
(17, 'Jalgaon Kh', 41, 1),
(18, 'Adgaon', 51, 1),
(19, 'Adwad', 51, 1),
(20, 'Akulkhede', 51, 1),
(21, 'Bhardu', 51, 1),
(22, 'Bidgaon', 51, 1),
(23, 'Chunchale', 51, 1),
(24, 'Chahardi', 51, 1),
(25, 'Chaugaon', 51, 1),
(26, 'Galwade', 51, 1),
(27, 'Ghodgaon', 51, 1),
(28, 'Ghadwel', 51, 1),
(29, 'Hated', 51, 1),
(30, 'Khachane', 51, 1),
(31, 'Kamalgaon', 51, 1),
(32, 'Kharag', 51, 1),
(33, 'Khardi', 51, 1),
(34, 'Loni', 51, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awareness_camp`
--
ALTER TABLE `awareness_camp`
  ADD KEY `awareness_camp_PHCregister_PHCid_fk` (`PHCid`);

--
-- Indexes for table `digital_resources`
--
ALTER TABLE `digital_resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`dist_id`);

--
-- Indexes for table `equipment_details`
--
ALTER TABLE `equipment_details`
  ADD KEY `equipment_details_PHCregister_PHCid_fk` (`PHCid`);

--
-- Indexes for table `first_trimester`
--
ALTER TABLE `first_trimester`
  ADD KEY `first_trimester_patient_registration_pid_fk` (`pid`),
  ADD KEY `first_trimester_phcregister_PHCid_fk` (`PHCid`);

--
-- Indexes for table `infant_details`
--
ALTER TABLE `infant_details`
  ADD KEY `infant_details_PHCregister_PHCid_fk` (`PHCid`);

--
-- Indexes for table `infrastructure_details`
--
ALTER TABLE `infrastructure_details`
  ADD KEY `infrastructure_details_PHCregister_PHCid_fk` (`PHCid`);

--
-- Indexes for table `lab_services`
--
ALTER TABLE `lab_services`
  ADD KEY `lab_services_PHCregister_PHCid_fk` (`PHCid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_registration`
--
ALTER TABLE `patient_registration`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `PHCid` (`PHCid`);

--
-- Indexes for table `phcregister`
--
ALTER TABLE `phcregister`
  ADD PRIMARY KEY (`PHCid`);

--
-- Indexes for table `pregnancy_details`
--
ALTER TABLE `pregnancy_details`
  ADD KEY `pregnancy_details_PHCregister_PHCid_fk` (`PHCid`);

--
-- Indexes for table `sanitation_details`
--
ALTER TABLE `sanitation_details`
  ADD KEY `sanitation_details_PHCregister_PHCid_fk` (`PHCid`);

--
-- Indexes for table `second_trimester`
--
ALTER TABLE `second_trimester`
  ADD KEY `PHCid` (`PHCid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD KEY `services_PHCregister_PHCid_fk` (`PHCid`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `staff_details_staff_id_uindex` (`staff_id`),
  ADD KEY `staff_details_PHCregister_PHCid_fk` (`PHCid`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `taluka`
--
ALTER TABLE `taluka`
  ADD PRIMARY KEY (`tal_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD KEY `training_PHCregister_PHCid_fk` (`PHCid`);

--
-- Indexes for table `userfiles`
--
ALTER TABLE `userfiles`
  ADD PRIMARY KEY (`PHCid`);

--
-- Indexes for table `user_grievance`
--
ALTER TABLE `user_grievance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`vil_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `digital_resources`
--
ALTER TABLE `digital_resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `dist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `patient_registration`
--
ALTER TABLE `patient_registration`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `taluka`
--
ALTER TABLE `taluka`
  MODIFY `tal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user_grievance`
--
ALTER TABLE `user_grievance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `village`
--
ALTER TABLE `village`
  MODIFY `vil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `awareness_camp`
--
ALTER TABLE `awareness_camp`
  ADD CONSTRAINT `awareness_camp_PHCregister_PHCid_fk` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equipment_details`
--
ALTER TABLE `equipment_details`
  ADD CONSTRAINT `equipment_details_PHCregister_PHCid_fk` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `first_trimester`
--
ALTER TABLE `first_trimester`
  ADD CONSTRAINT `first_trimester_patient_registration_pid_fk` FOREIGN KEY (`pid`) REFERENCES `patient_registration` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `first_trimester_phcregister_PHCid_fk` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `infant_details`
--
ALTER TABLE `infant_details`
  ADD CONSTRAINT `infant_details_PHCregister_PHCid_fk` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `infrastructure_details`
--
ALTER TABLE `infrastructure_details`
  ADD CONSTRAINT `infrastructure_details_PHCregister_PHCid_fk` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lab_services`
--
ALTER TABLE `lab_services`
  ADD CONSTRAINT `lab_services_PHCregister_PHCid_fk` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_registration`
--
ALTER TABLE `patient_registration`
  ADD CONSTRAINT `patient_registration_ibfk_1` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`);

--
-- Constraints for table `pregnancy_details`
--
ALTER TABLE `pregnancy_details`
  ADD CONSTRAINT `pregnancy_details_PHCregister_PHCid_fk` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanitation_details`
--
ALTER TABLE `sanitation_details`
  ADD CONSTRAINT `sanitation_details_PHCregister_PHCid_fk` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `second_trimester`
--
ALTER TABLE `second_trimester`
  ADD CONSTRAINT `second_trimester_ibfk_1` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`),
  ADD CONSTRAINT `second_trimester_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `patient_registration` (`pid`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_PHCregister_PHCid_fk` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD CONSTRAINT `staff_details_PHCregister_PHCid_fk` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_PHCregister_PHCid_fk` FOREIGN KEY (`PHCid`) REFERENCES `phcregister` (`PHCid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
