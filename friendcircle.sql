-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 04:09 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friendcircle`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `comment_post_id` int(100) NOT NULL,
  `comment_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_name`, `comment_post_id`, `comment_data`) VALUES
(1, 'Rohan', 15, 'Hi'),
(2, 'Rohan', 15, 'hi'),
(3, 'Rohan', 15, 'How are you'),
(4, 'Rohan', 15, 'fine'),
(5, 'Rohan', 15, 'oh'),
(6, 'Rohan', 15, 'oh'),
(7, 'Rohan', 15, 'ohhhhhhhh!!!!!!!!!'),
(8, 'Rohan', 15, '8th comment'),
(9, 'Rohan', 15, '9th '),
(10, 'Rohan', 15, '10th'),
(11, 'Rohan', 15, '11'),
(12, 'Rohan', 15, '12'),
(13, 'Rohan', 15, '13'),
(14, 'Rohan', 15, '14'),
(15, 'Rohan', 15, '15'),
(16, 'Rohan', 15, '16'),
(17, 'Rohan', 15, '17'),
(18, 'Rohan', 15, '18'),
(19, 'Rohan', 15, '19'),
(20, 'Rohan', 15, '20'),
(21, 'Rohan', 15, '21'),
(22, 'Rohan', 15, '22'),
(23, 'Rohan', 15, '23'),
(24, 'Rohan', 15, '24'),
(25, 'Rohan', 15, '25'),
(26, 'Rohan', 15, '26'),
(27, 'Rohan', 15, '27'),
(28, 'Rohan', 15, '28'),
(29, 'Rohan', 15, '29'),
(30, 'Rohan', 15, '30'),
(31, 'Rohan', 15, '31'),
(32, 'Rohan', 15, '32'),
(33, 'Rohan', 15, '33'),
(34, 'Rohan', 15, '34'),
(35, 'Rohan', 15, '35'),
(36, 'Rohan', 15, '36'),
(37, 'Rohan', 14, 'HI'),
(38, 'Rohan', 10, 'Hi'),
(39, 'Rohan', 9, 'Hwwwwwww'),
(40, 'Rohan', 8, 'ksrghf sgri gldgj'),
(41, 'Rohan', 7, 'HAhahahah'),
(42, 'Rohan', 7, 'njjjj'),
(43, 'Rohan', 7, 'kaejfjw'),
(44, 'Rohan', 7, 'srgvdfvbfd'),
(45, 'Rohan', 15, 'sdvsdvdv'),
(46, 'Rohan', 15, 'sdvsdvsdvs'),
(47, 'Rohan', 15, '444444444444444444'),
(48, 'Rohan', 15, '999999999999999999999999999'),
(49, 'Rohan', 15, ''),
(50, 'Rohan', 15, ''),
(51, 'Rohan', 15, ''),
(52, 'Rohan', 15, ''),
(53, 'Rohan', 14, ''),
(54, 'Rohan', 14, 'jkafbe jwj bs gsjk ghsk ghdjk g'),
(55, 'Rohan', 15, 'hii'),
(56, 'Rohan', 10, 'nothing'),
(57, 'Rohan', 15, '46'),
(58, '', 15, ''),
(59, 'Rohan', 15, '48'),
(60, '', 15, ''),
(61, 'Rohan', 15, '50'),
(62, 'Rohan', 15, '51'),
(63, 'Rohan', 15, '52'),
(64, 'Rohan', 15, '53'),
(65, 'Rohan', 15, '54'),
(66, 'Rohan', 15, '55'),
(67, 'Rohan', 15, '56'),
(68, 'Rohan', 15, '57'),
(69, 'Rohan', 15, '58'),
(70, 'Rohan', 15, '59'),
(71, 'Rohan', 15, '60'),
(72, 'Rohan', 15, '61'),
(73, 'Rohan', 15, '62'),
(74, 'Rohan', 15, '63'),
(75, 'Rohan', 15, '64'),
(76, 'Rohan', 15, '65'),
(77, 'Rohan', 15, '66'),
(78, 'Rohan', 15, '67'),
(79, 'Rohan', 15, '68'),
(80, 'Rohan', 15, '69'),
(81, 'Rohan', 15, '70'),
(82, 'Rohan', 15, '71'),
(83, 'Rohan', 15, '72'),
(84, 'Rohan', 15, '73'),
(85, 'Rohan', 15, '74'),
(86, 'Rohan', 15, '75'),
(87, 'Rohan', 15, '76'),
(88, 'Rohan', 15, '77'),
(89, 'Rohan', 15, '78'),
(90, 'Rohan', 15, '79'),
(91, 'Rohan', 15, '80'),
(92, 'Rohan', 15, '81'),
(93, 'Rohan', 15, '82'),
(94, 'AA_BB', 15, '83'),
(95, 'Neeraj_012', 18, 'Beautiful'),
(96, 'Neeraj_012', 16, ' Gorgeous'),
(97, 'Neeraj_012', 17, 'Awesome'),
(98, 'Himanshu26th', 18, 'wow'),
(99, 'Soumyadip001', 47, 'nothing'),
(100, 'Soumyadip001', 48, 'hii'),
(101, 'Soumyadip001', 56, 'hynuduh'),
(102, 'Soumyadip001', 57, 'hii'),
(103, 'Soumyadip001', 54, 'hiii'),
(104, 'Soumyadip001', 59, 'hi'),
(105, 'Soumyadip001', 43, 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `like_dislike`
--

CREATE TABLE `like_dislike` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `post_id` int(11) NOT NULL,
  `like_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_dislike`
--

INSERT INTO `like_dislike` (`id`, `user_id`, `post_id`, `like_count`) VALUES
(14, 'Rohan', 8, 2),
(15, 'R', 7, 1),
(16, 'R', 6, 1),
(17, 'R', 5, 1),
(18, 'Rohan', 3, 2),
(19, 'Rohan', 2, 2),
(20, 'Rohan', 1, 1),
(21, 'AA_BB', 4, 1),
(22, 'Soumyadip001', 9, 2),
(23, 'AA_BB', 9, 2),
(24, 'AA_BB', 8, 2),
(25, 'AA_BB', 7, 2),
(26, 'AA_BB', 6, 2),
(27, 'AA_BB', 2, 2),
(28, 'Rohan', 9, 2),
(29, 'Rockkkky1008', 9, 2),
(30, 'Rockkkky1008', 10, 2),
(31, 'Rockkkky1008', 8, 2),
(32, 'Rockkkky1008', 7, 2),
(33, 'AAA', 12, 2),
(34, 'AAA', 13, 2),
(35, 'isha', 15, 2),
(36, 'Rohan', 15, 2),
(37, 'AA_BB', 15, 2),
(38, 'Neeraj_012', 22, 2),
(39, 'Neeraj_012', 21, 2),
(40, 'Neeraj_012', 20, 2),
(41, 'Neeraj_012', 19, 2),
(42, 'Neeraj_012', 18, 2),
(43, 'Neeraj_012', 17, 2),
(44, 'Neeraj_012', 16, 2),
(45, 'Neeraj_012', 7, 2),
(46, 'Arindam_01', 23, 2),
(47, 'Arindam_01', 22, 2),
(48, 'Arindam_01', 21, 2),
(49, 'Arindam_01', 20, 2),
(50, 'Arindam_01', 19, 2),
(51, 'Arindam_01', 18, 2),
(52, 'Arindam_01', 17, 2),
(53, 'Arindam_01', 16, 2),
(54, 'Arindam_01', 7, 2),
(55, 'Arindam_01', 6, 2),
(56, 'Arindam_01', 5, 2),
(57, 'Arindam_01', 24, 2),
(58, 'Arindam_01', 25, 2),
(59, 'Arindam_01', 26, 2),
(60, 'Arindam_01', 27, 2),
(61, 'Arindam_01', 28, 2),
(62, 'Arindam_01', 29, 2),
(63, 'Arindam_01', 30, 2),
(64, 'Cutex_Priyanka', 23, 2),
(65, 'Cutex_Priyanka', 22, 2),
(66, 'Cutex_Priyanka', 21, 2),
(67, 'Cutex_Priyanka', 20, 2),
(68, 'Cutex_Priyanka', 19, 2),
(69, 'Cutex_Priyanka', 18, 2),
(70, 'Cutex_Priyanka', 17, 2),
(71, 'Cutex_Priyanka', 16, 2),
(72, 'Cutex_Priyanka', 15, 2),
(73, 'Cutex_Priyanka', 5, 2),
(74, 'Angel_Piu', 44, 2),
(75, 'Angel_Piu', 43, 2),
(76, 'Angel_Piu', 42, 2),
(77, 'Angel_Piu', 41, 2),
(78, 'Angel_Piu', 40, 2),
(79, 'Angel_Piu', 39, 2),
(80, 'Angel_Piu', 38, 2),
(81, 'Angel_Piu', 37, 2),
(82, 'Angel_Piu', 36, 2),
(83, 'Angel_Piu', 35, 2),
(84, 'Angel_Piu', 34, 2),
(85, 'Angel_Piu', 33, 2),
(86, 'Angel_Piu', 32, 2),
(87, 'Angel_Piu', 31, 2),
(88, 'Angel_Piu', 30, 2),
(89, 'Angel_Piu', 29, 2),
(90, 'Angel_Piu', 28, 2),
(91, 'Angel_Piu', 27, 2),
(92, 'Angel_Piu', 26, 2),
(93, 'Angel_Piu', 25, 2),
(94, 'Angel_Piu', 24, 2),
(95, 'Angel_Piu', 23, 2),
(96, 'Angel_Piu', 22, 2),
(97, 'Angel_Piu', 21, 2),
(98, 'Angel_Piu', 20, 2),
(99, 'Angel_Piu', 19, 2),
(100, 'Angel_Piu', 18, 2),
(101, 'Angel_Piu', 17, 2),
(102, 'Angel_Piu', 16, 2),
(103, 'Arindam_01', 44, 2),
(104, 'Arindam_01', 43, 2),
(105, 'Arindam_01', 42, 2),
(106, 'Arindam_01', 41, 2),
(107, 'Arindam_01', 40, 2),
(108, 'Arindam_01', 39, 2),
(109, 'Arindam_01', 38, 2),
(110, 'Arindam_01', 37, 2),
(111, 'Arindam_01', 36, 2),
(112, 'Arindam_01', 35, 2),
(113, 'Arindam_01', 34, 2),
(114, 'Arindam_01', 33, 2),
(115, 'Arindam_01', 32, 2),
(116, 'Arindam_01', 31, 2),
(117, 'Himanshu26th', 16, 2),
(118, 'Himanshu26th', 17, 2),
(119, 'Himanshu26th', 18, 2),
(120, 'Himanshu26th', 19, 2),
(121, 'Neeraj_012', 56, 2),
(122, 'Neeraj_012', 56, 2),
(123, 'Neeraj_012', 56, 2),
(124, 'Neeraj_012', 57, 2),
(125, 'Arindam_01', 57, 2),
(126, 'Arindam_01', 56, 2),
(127, 'Arindam_01', 55, 2),
(128, 'Arindam_01', 54, 2),
(129, 'Arindam_01', 53, 2),
(130, 'Arindam_01', 52, 2),
(131, 'Arindam_01', 51, 2),
(132, 'Arindam_01', 50, 2),
(133, 'Arindam_01', 49, 2),
(134, 'Arindam_01', 48, 2),
(135, 'Arindam_01', 47, 2),
(136, 'Arindam_01', 46, 2),
(137, 'Arindam_01', 45, 2),
(138, 'Soumyadip001', 47, 2),
(139, 'Soumyadip001', 44, 2),
(140, 'Soumyadip001', 48, 2),
(141, 'Soumyadip001', 57, 2),
(142, 'Soumyadip001', 56, 2),
(143, 'Neeraj_012', 44, 2),
(144, 'Soumyadip001', 55, 2),
(145, 'Soumyadip001', 54, 2),
(146, 'Neeraj_012', 49, 2),
(147, 'Soumyadip001', 59, 2),
(148, 'Soumyadip001', 60, 2),
(149, 'Neeraj_012', 60, 2),
(150, 'Soumyadip001', 62, 2),
(151, 'Soumyadip001', 61, 2),
(152, 'Neeraj_012', 61, 2),
(153, 'Neeraj_012', 62, 2),
(154, 'Soumyadip001', 63, 2),
(155, 'Soumyadip001', 43, 2);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(255) NOT NULL,
  `post_user_name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_user_name`, `text`, `image`) VALUES
(1, 'Rohan', 'Hi, How are you ?', 'Rohan1637920730.jpg'),
(2, 'Rohan', 'Hello', 'Rohan1637920731.jpg'),
(3, 'Rohan', 'Last', 'Rohan1637923575.jpg'),
(4, 'AA_BB', 'hi', 'AA_BB1637926734.jpg'),
(5, 'R', '', 'R1638164629.jpg'),
(6, 'R', 'NEERAJ IS A GOOD BOY', 'R1638164713.jpg'),
(7, 'R', 'nothing', 'R1638164837.jpg'),
(8, 'Rohan', 'SSSS', 'Rohan1638391702.png'),
(9, 'Soumyadip001', 'I AM GOOD BOY', 'Soumyadip0011638402407.jfif'),
(10, 'Rockkkky1008', 'bbbsfsfggshefgsijhfge', 'Rockkkky10081638437249.jfif'),
(11, 'Rockkkky1008', 'jai ho', 'Rockkkky10081638438006.jfif'),
(12, 'AAA', 'life never change', 'AAA1638438483.jpg'),
(13, 'AAA', 'hall of fame', 'AAA1638438587.jpg'),
(14, 'Rohan', 'nothing', 'Rohan1638517067.jpg'),
(15, 'isha', 'climate always change', 'isha1638522159.jpg'),
(16, 'Soumyadip001', '', 'Soumyadip0011639070950.jpeg'),
(17, 'Soumyadip001', '#_I_Will_Win #_Maybe_Not_Today_Or_Tomorrow, #_But_One_Day_I_Will..', 'Soumyadip0011639070977.jpeg'),
(18, 'Soumyadip001', '#_I_Prefer_Loneliness_Over_Fake_Promise.', 'Soumyadip0011639071060.jpeg'),
(19, 'Neeraj_012', 'Nothing', 'Neeraj_0121639072392.jpeg'),
(20, 'Neeraj_012', 'Best. Selfie. Ever.', 'Neeraj_0121639073462.jpeg'),
(21, 'Neeraj_012', 'Life is better when you’re laughing.', 'Neeraj_0121639073573.jpeg'),
(22, 'Neeraj_012', 'I was born to stand out.', 'Neeraj_0121639073624.jpeg'),
(23, 'Neeraj_012', 'WARNING: U may fall in love with my face', 'Neeraj_0121639074020.jpeg'),
(24, 'Arindam_01', 'I Love Life, I Love My Photos.', 'Arindam_011639074630.jpeg'),
(25, 'Arindam_01', 'A Selfie a day keeps the friends away.', 'Arindam_011639074658.jpeg'),
(26, 'Arindam_01', 'Don’t judge, you don’t know my story.', 'Arindam_011639074699.jpeg'),
(27, 'Arindam_01', 'Keep Smiling And Be Beautiful.', 'Arindam_011639074734.jpeg'),
(28, 'Arindam_01', 'My autobiography is this.', 'Arindam_011639074761.jpeg'),
(29, 'Arindam_01', 'I choose to be happy….Be happy always….', 'Arindam_011639074801.jpeg'),
(30, 'Arindam_01', 'It’s cool being me.', 'Arindam_011639074836.jpeg'),
(31, 'Cutex_Priyanka', 'I choose to be happy….Be happy always….', 'Cutex_Priyanka1639076273.jpeg'),
(32, 'Cutex_Priyanka', 'Facebook is the only place where it’s acceptable to talk to a wall.', 'Cutex_Priyanka1639076295.jpeg'),
(33, 'Cutex_Priyanka', 'Seek respect, not attention. It lasts longer.', 'Cutex_Priyanka1639076343.jpeg'),
(34, 'Cutex_Priyanka', 'Always wear your invisible crown.', 'Cutex_Priyanka1639076373.jpeg'),
(35, 'Cutex_Priyanka', 'Love is the beauty of the soul.', 'Cutex_Priyanka1639077798.jpeg'),
(36, 'Cutex_Priyanka', 'You have every right to a beautiful Life!', 'Cutex_Priyanka1639077829.jpeg'),
(37, 'Cutex_Priyanka', 'Surround yourself with those who make you happy.', 'Cutex_Priyanka1639077867.jpeg'),
(38, 'Cutex_Priyanka', 'Being classy isn’t a choice. It’s a lifestyle.', 'Cutex_Priyanka1639077887.jpeg'),
(39, 'Cutex_Priyanka', 'Don’t copy my style of taking Selfies 😀', 'Cutex_Priyanka1639077910.jpeg'),
(40, 'Angel_Piu', 'I am who I am and that’s all I’ll ever be.', 'Angel_Piu1639079091.jpeg'),
(41, 'Angel_Piu', 'I am who I am and that’s all I’ll ever be.', 'Angel_Piu1639079134.jpeg'),
(42, 'Angel_Piu', 'A smile is a curve that sets everything straight.', 'Angel_Piu1639079302.jpeg'),
(43, 'Angel_Piu', 'A smile is a light in the window of your soul.', 'Angel_Piu1639079328.jpeg'),
(44, 'Angel_Piu', 'Don’t forget to…Smile :)', 'Angel_Piu1639079363.jpeg'),
(45, 'Arindam_01', 'Smile, it confuses people.', 'Arindam_011639080058.jpeg'),
(46, 'Arindam_01', 'A smile is the shortest distance between two people.', 'Arindam_011639080073.jpeg'),
(47, 'Rohan', '', 'Rohan1639080231.jpg'),
(48, 'Rohan', '', 'Rohan1639080244.jpg'),
(49, 'Rohan', '', 'Rohan1639080260.jpg'),
(50, 'Rohan', '', 'Rohan1639080271.jpg'),
(51, 'Himanshu26th', 'It’s cool being me.', 'Himanshu26th1639112984.jpeg'),
(52, 'Himanshu26th', 'I am not lazy, I am on energy saving mode.', 'Himanshu26th1639113015.jpeg'),
(53, 'Himanshu26th', 'Always wear your invisible crown.', 'Himanshu26th1639113035.jpeg'),
(54, 'Himanshu26th', 'gudi sikhra te jaat di uton jaat tuda paat ni', 'Himanshu26th1639113118.jpeg'),
(55, 'Himanshu26th', 'soni kudiya lai chute free', 'Himanshu26th1639113154.jpeg'),
(56, 'Soumyadip001', 'Being classy isn’t a choice. It’s a lifestyle.', 'Soumyadip0011639113523.jpeg'),
(57, 'Soumyadip001', 'Life does not have to be perfect to be wonderful.', 'Soumyadip0011639113758.jpeg'),
(58, 'Neeraj_012', 'hhiih', 'Neeraj_0121639124873.jpeg'),
(59, 'Neeraj_012', 'hi', 'Neeraj_0121639126305.jpeg'),
(60, 'Soumyadip001', '', 'Soumyadip0011639727721.jpg'),
(61, 'Neeraj_012', '', 'Neeraj_0121639728186.jpg'),
(62, 'Soumyadip001', '', 'Soumyadip0011639728220.jpg'),
(63, 'Soumyadip001', '', 'Soumyadip0011639731510.jpg'),
(64, 'Soumyadip001', 'certificate', 'Soumyadip0011639732654.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(255) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `number` varchar(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `otp` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `first_name`, `last_name`, `gender`, `dob`, `number`, `user_name`, `email`, `password`, `pic`, `otp`) VALUES
(21, 'Soumyadip', 'Kundu', 'Male', '2001-01-27', '7001137098', 'Soumyadip001', 'soumyadipkundu.ca19@chitkarauniversity.edu.in', '7410', 'Soumyadip001.jpeg', '9618'),
(22, 'Neeraj', 'Jangra', 'Male', '2001-01-26', '9872137001', 'Neeraj_012', 'neerajjangra1008@gmail.com', '8520', 'Neeraj_012.jpeg', '8854'),
(23, 'Arindam', 'Dey', 'Male', '2001-04-19', '8918805067', 'Arindam_01', 'arindamroyda1@gmail.com', 'Arindam_01', 'Arindam_01.jpeg', ''),
(24, 'Priyanka', 'Pal', 'Female', '1999-03-25', '9732724650', 'Cutex_Priyanka', 'arindamroyda1@outlook.com', 'Priyanka1230', 'Cutex_Priyanka.jpeg', NULL),
(25, 'Satarupa', 'Kundu', 'Female', '2007-07-19', '9732724650', 'Angel_Piu', 'newrkautomobiles@rediffmail.com', 'Piu1230', 'Angel_Piu.jpeg', NULL),
(26, 'Rohan', 'Da', 'Male', '2002-03-11', '7585023209', 'Rohan', 'soumyasuparna7585@gmail.com', '1230', 'Rohan.jpg', ''),
(27, 'Himanshu', 'Sharma', 'Male', '2000-03-25', '8295231040', 'Himanshu26th', 'himanshu.ca19@chitkarauniversity.edu.in', 'Himanshu26th', 'Himanshu26th.jpeg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `like_dislike`
--
ALTER TABLE `like_dislike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `like_dislike`
--
ALTER TABLE `like_dislike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
