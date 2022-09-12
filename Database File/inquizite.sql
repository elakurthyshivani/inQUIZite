-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 03:16 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inquizite`
--

-- --------------------------------------------------------

--
-- Table structure for table `inq_participant_attempted`
--

CREATE TABLE `inq_participant_attempted` (
  `PartID` int(11) NOT NULL,
  `QuesID` int(11) NOT NULL,
  `SelectedOption` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inq_participant_attempted`
--

INSERT INTO `inq_participant_attempted` (`PartID`, `QuesID`, `SelectedOption`) VALUES
(1, 1, 3),
(1, 4, 1),
(1, 9, 2),
(1, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `inq_participant_details`
--

CREATE TABLE `inq_participant_details` (
  `PartID` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `College` varchar(100) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `MobileNo` bigint(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inq_participant_details`
--

INSERT INTO `inq_participant_details` (`PartID`, `Name`, `College`, `Email`, `MobileNo`) VALUES
(1, 'Nitya', 'Jntuh', 'nityamula@gmail.com', 9553744355),
(2, 'K.Niranjana kumari ', 'Geethanjali college of engineering and technology ', 'kondisettiniranjanakumari@gmail.com ', 8143882353),
(3, 'Katta Rohith Reddy', 'Sphoorthy engineering college', 'kattarohithreddy1996@gmail.com', 8333865253),
(4, 'chamana Geethanaidu', 'Sphoorthy Engineering college', 'geethanaiduchamana1@gmail.com', 7893164748),
(5, 'JANGAM AVINASH', 'Sreenidhi institute of science and technology', 'avinashjangam23@gmail.com', 9032426967),
(6, 'Kamuju Maheshwari', 'Snist', 'Maheshwari.kamuju@gmail.com', 9700309690),
(7, 'Chingepally Priyanka ', 'Sreenidhi Institute of science and technology ', 'Chingepallypriyanka054@gmail.com', 9704345086),
(8, 'K.RAVITEJA', 'Sreenidhi institute of science and technology', 'ravitejakarnati21@gmail.com', 9676273136),
(9, 'B SATHYA SUHASINI', 'Keshav Memorial Institute of Technology', 'bsathyasuhasini@gmail.com', 7997563011),
(10, 'K.Imran', 'Sreenidhi institute of science and technology', 'imranimran5078@gmail.com', 9110731244),
(12, 'S. B. N. M. Abbas', 'Snist', 'noorabbas58@gmail.com ', 7702537287),
(13, 'K.SRINIVAS', 'IARE', 'kolipakabunty1998@gmail.com', 9550431400),
(14, 'P.steffi', 'Sreenidhi institute of science and technology', 'steffipeter.123@gmail.com', 8790244262),
(15, 'Rohit', 'Sreenidhi institute of science and technology', 'rebelrockstarrohit@gmail.com', 9059873015),
(16, 'Undadi Geetha', 'Sreenidhi institution of science and technology ', 'undadigeetha1997@gmail.com', 9652331466),
(17, 'Kathi Navya sri', 'Snist', 'Knavya12345@gmail.com', 8885402236),
(18, 'Ushashwini', 'Stanley college', 'Ushashwini.1997@gmail.com', 9100981369),
(19, 'Srilekha V', 'Sreenidhi institute of science and technology', 'srilekhavadlapudi97@gmail.com', 9989098220),
(20, 'S.Sri Sai Vinuthna', 'snist', 'sai.vinnu2998@gmail.com', 9494531885),
(21, 'Shivam Kumar Sharma ', 'GIHSM', 'shivamparvez98@gmail.com', 9565445075),
(22, 'Preethi', 'CVR', 'preethi8555@gmail.com', 9515128384),
(23, 'I Saiseshu Reddy', 'Sreenidhi Institute of Science and Technology', 'seshu.123494@gmail.com', 8317501746),
(26, 'Katkam Saipriya', 'Geethanjali College of Engineering And Technology', 'katkamsaipriya.99@gmail.com', 9951097639),
(27, 'Swathi Danturi', 'Geethanjali College of Engineering and Technology', 'danturiswathi1999@gmail.com', 7674079884),
(28, 'M.Sharvani', 'CVR', 'sharvanimuppirishetty@gmail.com', 7095723168),
(29, 'Konda shashanka', 'Cvr College of engineering ', 'Kondashashanka@gmail.com ', 7036770763),
(30, 'Katragadda venkatasai ritesh', 'CVR college of engineering', 'Riteshchowdary1631998@gmail.com', 7032343838),
(31, 'Vandanapu Sowmya', 'CVR COLLEGE OF ENGINEERING', 'vandanapusowmya010@gmail.com', 9951482007),
(32, 'Sai Sravani', 'CVR College Of Engineering', 'sravanisai0901@gmail.com', 9160226356),
(33, 'P.Varsha', 'Kitsw', 'padamatintivarsha@gmail.com', 9666930120),
(34, 'Ganta Pramod', 'CMR College of Engineering & Technology', 'pramod.ganta95@gmail.com', 9642446511),
(35, 'PRAJWAL H S', 'MYSURU ROYAL INSTITUTE OF TECHNOLOGY ', 'prajwal7nov@gmail.com', 9886174965),
(36, 'Venkata Sai Harshith Penugonda', 'JNTUHCEH', 'pvsharshith@gmail.com', 9849136536),
(37, 'R. Santhoshi', 'CVR college of engineering', 'santhoshirapolu@gmail.c', 7095989990),
(38, 'Navya', 'G.Narayanamma institute of technology', 'navyakrishnaiah@gmail.com', 9182775873);

-- --------------------------------------------------------

--
-- Table structure for table `inq_participant_remaining_time`
--

CREATE TABLE `inq_participant_remaining_time` (
  `PartID` int(11) NOT NULL,
  `RemainingTIme` int(11) NOT NULL DEFAULT '1200000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inq_participant_remaining_time`
--

INSERT INTO `inq_participant_remaining_time` (`PartID`, `RemainingTIme`) VALUES
(1, 1077511),
(2, 1200000),
(3, 1200000),
(4, 1200000),
(5, 1200000),
(6, 1200000),
(7, 1200000),
(8, 1200000),
(9, 1200000),
(10, 1200000),
(12, 1200000),
(13, 1200000),
(14, 1200000),
(15, 1200000),
(16, 1200000),
(17, 1200000),
(18, 1200000),
(19, 1200000),
(20, 1200000),
(21, 1200000),
(22, 1200000),
(23, 1200000),
(26, 1200000),
(27, 1200000),
(28, 1200000),
(29, 1200000),
(30, 1200000),
(31, 1200000),
(32, 1200000),
(33, 1200000),
(34, 1200000),
(35, 1200000),
(36, 1200000),
(37, 1200000),
(38, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `inq_questions`
--

CREATE TABLE `inq_questions` (
  `QuesID` int(11) NOT NULL,
  `Question` text NOT NULL,
  `Opt1` text NOT NULL,
  `Opt2` text NOT NULL,
  `Opt3` text NOT NULL,
  `Opt4` text NOT NULL,
  `Ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inq_questions`
--

INSERT INTO `inq_questions` (`QuesID`, `Question`, `Opt1`, `Opt2`, `Opt3`, `Opt4`, `Ans`) VALUES
(1, 'Which company acquired sun microsystems on january 27,2010?', 'Apple Inc.', 'Microsoft', 'Oracle cooperation', 'IBM', 3),
(2, 'In computers which is the smallest and basic unit of information storage?', 'Bit', 'Byte', 'Newton', 'Megabyte', 1),
(3, 'Which is the first web browser?', 'world wide web', 'Netscape Navigator', 'internet explorer', 'safari', 1),
(4, 'What allows multiple programs to run on a computer?', 'NIC', 'OS', 'API', 'GUI', 2),
(5, 'Who developed Yahoo?', 'Dennis Ritchie & Ken Thompson', 'David Filo & Jerry Yang', 'Vint Cerf & Robert Kahn', 'Steve Case & Jeff Bezos', 2),
(6, 'What is the difference between a DVD+R and a regular DVD?', 'DVD+Rs can be erased while a DVD cannot.', 'A DVD writer can record data to a DVD+R, but not a DVD.', 'DVD+Rs can be used internationally, while DVDs are designed for the U.S.', 'DVD+R discs can be read much faster than DVDs.', 2),
(7, 'What of the following best describes the purpose of a \\"captcha?\\"', 'It captures keystrokes as a user types.', 'It captures personal information through spyware.', 'It records web browsing history.', 'It prevents bots from submitting online forms.', 4),
(8, 'This game was developed and published by Nintendo for iOS and Android devices. It was released first for iOS on December 15, 2016, and will be released for Android in 2017. It became the fastest game ever to get 40 million downloads on Apple app store, reaching the milestone within four days of launch. Which game?', 'Dota', 'Clash of clans', 'Super Mario Run', 'Pokemon Go', 3),
(9, 'Virtual or Personal Assistants ?\nSiri.. Apple\nCortana.. Microsoft \nM..? ', 'Google', 'Amazon', 'Yahoo', 'Facebook', 4),
(10, 'Technology to enter words by sliding fingers on the letters without lifting it, on touch screen devices.', 'swipe', 'slide', 'swype', 'slider', 3),
(11, 'First Indian cinema released through internet is .....', 'Kabhi kushi kabhi gum', 'Hum Apke hein kon', 'Maine Pyar kiya', 'Vivah', 4),
(12, 'Which IT company\\''s nickname is \\'' The Big Blue \\'' ?', 'IBM', 'Microsoft', 'Google', 'Facebook', 1),
(13, 'World''s first microprocessor is .....', 'canio', 'Intel 4004', 'Selinium', 'Motorola', 2),
(14, 'Orkut.com is now owned by...........', 'Yahoo', 'Microsoft', 'Facebook', 'Google', 4),
(15, 'Email was developed by......', 'James T Russel', 'Dennis Ritchie', 'Raymond Samuel Tomlinson (Ray Tomlinson)', 'Edward Loui', 3);

-- --------------------------------------------------------

--
-- Table structure for table `inq_r1_finished_quiz`
--

CREATE TABLE `inq_r1_finished_quiz` (
  `PartID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inq_r1_qualified_participants`
--

CREATE TABLE `inq_r1_qualified_participants` (
  `PartID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inq_participant_attempted`
--
ALTER TABLE `inq_participant_attempted`
  ADD PRIMARY KEY (`PartID`,`QuesID`),
  ADD KEY `F2` (`QuesID`);

--
-- Indexes for table `inq_participant_details`
--
ALTER TABLE `inq_participant_details`
  ADD PRIMARY KEY (`PartID`);

--
-- Indexes for table `inq_participant_remaining_time`
--
ALTER TABLE `inq_participant_remaining_time`
  ADD PRIMARY KEY (`PartID`);

--
-- Indexes for table `inq_questions`
--
ALTER TABLE `inq_questions`
  ADD PRIMARY KEY (`QuesID`);

--
-- Indexes for table `inq_r1_finished_quiz`
--
ALTER TABLE `inq_r1_finished_quiz`
  ADD PRIMARY KEY (`PartID`);

--
-- Indexes for table `inq_r1_qualified_participants`
--
ALTER TABLE `inq_r1_qualified_participants`
  ADD PRIMARY KEY (`PartID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inq_participant_details`
--
ALTER TABLE `inq_participant_details`
  MODIFY `PartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `inq_questions`
--
ALTER TABLE `inq_questions`
  MODIFY `QuesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `inq_participant_attempted`
--
ALTER TABLE `inq_participant_attempted`
  ADD CONSTRAINT `F1` FOREIGN KEY (`PartID`) REFERENCES `inq_participant_details` (`PartID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `F2` FOREIGN KEY (`QuesID`) REFERENCES `inq_questions` (`QuesID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inq_participant_remaining_time`
--
ALTER TABLE `inq_participant_remaining_time`
  ADD CONSTRAINT `F3` FOREIGN KEY (`PartID`) REFERENCES `inq_participant_details` (`PartID`);

--
-- Constraints for table `inq_r1_finished_quiz`
--
ALTER TABLE `inq_r1_finished_quiz`
  ADD CONSTRAINT `F4` FOREIGN KEY (`PartID`) REFERENCES `inq_participant_details` (`PartID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inq_r1_qualified_participants`
--
ALTER TABLE `inq_r1_qualified_participants`
  ADD CONSTRAINT `F5` FOREIGN KEY (`PartID`) REFERENCES `inq_participant_details` (`PartID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
