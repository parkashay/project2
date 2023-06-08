-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 05:27 PM
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
-- Database: `school_of_engineering_pu_staffs`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) NOT NULL DEFAULT 0,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 2, 'staffs', 1, 3, 3, 3),
(2, 2, 'notes', 1, 3, 3, 3),
(3, 2, 'notes_category', 1, 3, 3, 3),
(4, 2, 'student_achievments', 1, 3, 3, 3),
(9, 4, 'staffs', 1, 3, 3, 3),
(10, 4, 'notes', 1, 1, 1, 1),
(11, 4, 'notes_category', 1, 1, 1, 1),
(12, 4, 'student_achievments', 1, 3, 3, 3),
(37, 3, 'staffs', 1, 1, 1, 1),
(38, 3, 'notes', 1, 1, 1, 1),
(39, 3, 'notes_category', 1, 3, 3, 3),
(40, 3, 'student_achievments', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL,
  `allowCSVImport` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`, `allowCSVImport`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2022-06-20', 0, 0, 0),
(2, 'Admins', 'Admin group created automatically on 2022-06-20', 0, 1, 0),
(3, 'Teachers', '', 0, 1, 1),
(4, 'Co-ordinators', '', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(100) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) NOT NULL DEFAULT 0,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(100) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_userrecords`
--

INSERT INTO `membership_userrecords` (`recID`, `tableName`, `pkValue`, `memberID`, `dateAdded`, `dateUpdated`, `groupID`) VALUES
(1, 'notes_category', '1', 'soeadmin', 1655713398, 1655713398, 2),
(2, 'notes_category', '2', 'udayarajdhungana', 1655713950, 1655713950, 4),
(3, 'staffs', '1', 'udayarajdhungana', 1655714062, 1663677576, 4),
(4, 'notes', '1', 'udayarajdhungana', 1655714138, 1659444152, 4),
(5, 'staffs', '2', 'rajeshkunwar', 1655714384, 1663749282, 3),
(6, 'notes', '2', 'rajeshkunwar', 1655714530, 1659438056, 3),
(9, 'staffs', '5', 'soeadmin', 1659370195, 1659371189, 2),
(10, 'staffs', '6', 'soeadmin', 1659370315, 1663749368, 2),
(11, 'staffs', '7', 'soeadmin', 1659370368, 1659371844, 2),
(12, 'staffs', '8', 'soeadmin', 1659370450, 1659371713, 2),
(13, 'staffs', '9', 'soeadmin', 1659435705, 1659436718, 2),
(14, 'notes', '3', 'soeadmin', 1659461219, 1659461219, 2),
(15, 'notes_category', '3', 'soeadmin', 1659776358, 1659776358, 2),
(16, 'notes_category', '4', 'soeadmin', 1659776421, 1659776421, 2),
(17, 'notes_category', '5', 'soeadmin', 1659776443, 1659776443, 2),
(18, 'notes_category', '6', 'soeadmin', 1659776509, 1659776509, 2),
(19, 'notes_category', '7', 'soeadmin', 1659776541, 1659776541, 2),
(20, 'staffs', '10', 'soeadmin', 1659777508, 1659778860, 2),
(22, 'notes', '5', 'prahladshrestha', 1659778318, 1659778318, 3);

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(100) NOT NULL,
  `passMD5` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text DEFAULT NULL,
  `custom2` text DEFAULT NULL,
  `custom3` text DEFAULT NULL,
  `custom4` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL,
  `flags` text DEFAULT NULL,
  `allowCSVImport` tinyint(4) NOT NULL DEFAULT 0,
  `data` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`, `pass_reset_key`, `pass_reset_expiry`, `flags`, `allowCSVImport`, `data`) VALUES
('bharatsharma', '$2y$10$stbOae3W4DVexBIBqkPDNuL4uAGLjqNjgozFHIzmacVmwBxmSbIe2', 'bharat.sharma@pu.edu.np', '2022-06-20', 3, 0, 1, 'Er. Bharat Sharma', 'Kathmandu, Nepal', 'Kathmandu', '3', '', NULL, NULL, NULL, 0, NULL),
('guest', NULL, NULL, '2022-06-20', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2022-06-20', NULL, NULL, NULL, 0, NULL),
('prahladshrestha', '$2y$10$LbCrY5UAU.nsG8ASFAYbzu2gyS545yCx0mNp2lsnPmk.6rKkhT6ym', 'prahlad@pu.edu.np', '2022-08-06', 3, 0, 1, 'Er. Prahlad Shrestha', 'Pokhara, Kaski', 'Pokhara', '', '', NULL, NULL, NULL, 0, NULL),
('rajeshkunwar', '$2y$10$LX5KNfvMN6j1VEHC/zuRwu6IoyxcmIDlhEpvbYu7LqkryjrA6YdHm', 'rajeshkunwar@pu.edu.np', '2022-06-20', 3, 0, 1, 'Er. Rajesh Kunwar', '', '', '', '', NULL, NULL, NULL, 0, NULL),
('soeadmin', '$2y$10$B4sh2hftqv320U3MIohlpe6LGT1kgZWiycmxf6zwT.udPC6dukIKi', 'admin@pu.edu.np', '2022-06-20', 2, 0, 1, NULL, NULL, NULL, NULL, 'Admin member created automatically on 2022-06-20', NULL, NULL, NULL, 0, NULL),
('udayarajdhungana', '$2y$10$hbegmTa4Zmi/n2aULyA68.cQcsSQmyTWvD.pSBXBDUjLJje7zRxeW', 'udayarajdhungana@pu.edu.np', '2022-06-20', 4, 0, 1, 'Dr. Udaya Raj Dhungana', '', '', '', '', NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `membership_usersessions`
--

CREATE TABLE `membership_usersessions` (
  `memberID` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `agent` varchar(100) NOT NULL,
  `expiry_ts` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `uploaded_by` int(10) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(40) DEFAULT NULL,
  `file_one` varchar(200) DEFAULT NULL,
  `file_two` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `name`, `category`, `uploaded_by`, `description`, `photo`, `file_one`, `file_two`) VALUES
(1, 'Artificial Intelligence', 2, 1, 'This note is of Artificial inteligence chapter 5.<br>', NULL, 'udaya_sir_research_paper.pdf', NULL),
(2, 'Chapter 3 System simulation', 1, 2, '<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper \r\ntellus sapien, sit amet porta augue gravida quis. Donec ut hendrerit \r\nmassa, sit amet porta ipsum. Integer a porttitor risus. Etiam eget dui \r\nat diam sodales tempus. Cras eleifend orci in elit aliquet, eu malesuada\r\n dui sagittis. Aliquam nisl massa, venenatis sed risus sit amet, \r\nsuscipit mattis nisi. Duis accumsan justo non eros dignissim, in \r\nconsectetur tortor mattis. Integer a maximus mi.\r\n</p>\r\n<p>\r\nSuspendisse nec dictum mi, nec rhoncus velit. Vestibulum ante ipsum \r\nprimis in faucibus orci luctus et ultrices posuere cubilia curae; \r\nAliquam id leo sit amet turpis scelerisque euismod. Nulla facilisi. Sed \r\nvestibulum urna ligula, at venenatis turpis bibendum in. Nunc sed nulla \r\nut nulla dapibus interdum a non arcu. Integer commodo est vel odio \r\ntristique sodales. Integer tempor velit sit amet scelerisque auctor. Sed\r\n leo ligula, auctor ut dictum eget, sagittis vel mi. Vestibulum ac \r\nmauris eget eros convallis iaculis. Suspendisse potenti.\r\n</p>', '015132a19ce983f30.webp', NULL, NULL),
(3, 'Artificial Intelligence chapter-8', 2, 1, 'This note is of Artificial inteligence chapter 8.', 'f0ee7203a3a410543.webp', NULL, NULL),
(5, 'JavaScript Arrays', 5, 10, '<div><font size=\"4\">An array is a special variable, which can hold more than one value: <br></font></div><div><font size=\"4\">const cars = [\"Saab\", \"Volvo\", \"BMW\"];</font></div><div><font size=\"4\"><br></font></div><div><font size=\"4\"><b>Why Use Array?</b></font></div><div><font size=\"4\"><br></font></div><div><font size=\"4\">If you have a list of items (a list of car names, for example), storing the \r\ncars in single variables could look like this:</font></div><div><i><font size=\"4\"><br></font></i></div><div><font size=\"4\"><span class=\"jscolor\"><i><span class=\"jskeywordcolor\">let</span> car1 = <span class=\"jsstringcolor\">\"Saab\"</span>;<br>\r\n<span class=\"jskeywordcolor\">let</span> car2 = <span class=\"jsstringcolor\">\"Volvo\"</span>;<br>\r\n<span class=\"jskeywordcolor\">let</span> car3 = <span class=\"jsstringcolor\">\"BMW\"</span>; </i><br></span></font></div><div><font size=\"4\"><span class=\"jscolor\"><br></span></font></div><p><font size=\"4\">However, what if you want to loop through the cars and find a specific one? \r\nAnd what if you had not 3 cars, but 300?</font></p>\r\n<p><font size=\"4\">The solution is an array!</font></p>\r\n<p><font size=\"4\">An array can hold many values under a single name, and you can \r\naccess the values by referring to an index number.</font></p><p><font size=\"4\"><br></font></p><p><font size=\"4\"><b>Creating an Array</b></font></p><p><font size=\"4\">Using an array literal is the easiest way to create a JavaScript Array.</font></p>\r\n<p><font size=\"4\">Syntax: <br></font></p><p><font size=\"4\"><span class=\"jscolor\"><em><span class=\"jskeywordcolor\">const</span> array_name = [item1</em>, <em>item2</em>, .<span class=\"jspropertycolor\"></span>.<span class=\"jspropertycolor\"></span>.<span class=\"jspropertycolor\"></span>]; <br></span></font></p><font size=\"4\"><span class=\"jscolor\">Reference : <font color=\"#0066CC\"><a href=\"http://www.w3schools.com/js/js_arrays.asp\" title=\"W3School\" target=\"_blank\">www.w3schools.com/js/js_arrays.asp</a></font></span></font>', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notes_category`
--

CREATE TABLE `notes_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `notes_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes_category`
--

INSERT INTO `notes_category` (`id`, `notes_category`) VALUES
(1, 'Simulation and modeling'),
(2, 'Artificial Intelligence'),
(3, 'Embedded System'),
(4, 'Object Oriented Software Engineering'),
(5, 'Advance Web Technology'),
(6, 'Project-II'),
(7, 'Data Communication');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `research_paper` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `title`, `photo`, `description`, `research_paper`) VALUES
(1, 'Dr. Udaya Raj Dhungana', 'B.E. Computer Co-ordinator', '75f6e60ea3c231c90.jpg', '<div dir=\"ltr\" style=\"margin-left:0pt;\" id=\"docs-internal-guid-edfe453a-7fff-2253-83e2-efcb6b5f4fdc\" align=\"left\"><table style=\"border:none;border-collapse:collapse;\"><colgroup><col width=\"179\"><col width=\"423\"></colgroup><tbody><tr style=\"height:25pt\"><td style=\"vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Designation:</span></p></td><td style=\"vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Assistant Professor</span></p><br><br></td><td style=\"vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><br></td></tr><tr style=\"height:65.5pt\"><td style=\"vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Qualification:</span></p></td><td style=\"vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><ol style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">PhD in Computer Engineering, IoE, Tribhuvan University.</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">ME (Computer Engineering),Kathmandu University.</span></p></li></ol></td><td style=\"vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><br></td></tr><tr style=\"height:316pt\"><td colspan=\"3\" style=\"vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Experiences:</span></p><ol style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Coordinator, Erasmus+ Scholarship program between Pokhara University and Darmstadt University of Applied Sciences, Darmstadt, Germany (2019 to present)</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Guest Faculty at Darmstadt University of Applied Sciences, Darmstadt, Germany (2018 to present)</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Assistant Professor at Pokhara University, Pokhara (2013-2014 and 2016 to present).</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Assistant Professor at Pokhara Engineering College, Pokhara (2010-2012), at Gandaki College of Engineering and Sciences, Pokhara (2012-2013).</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Developer and Technical Writer at Alternative Technology, Kathmandu (2008-2009).</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:12pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Teaching Assistant at Pokhara Engineering College (2006 to 2008), at Kathmandu University (2008).</span></p></li></ol><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Research Interest:</span></p><ol style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Lexical Databases</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Word Sense Disambiguation</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Machine learning</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Automatic question answering</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Knowledge representation and reasoning</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Machine Learning</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Deep learning</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Data Mining</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:12pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Artificial Neural Network</span></p></li></ol></td></tr><tr style=\"height:299.5pt\"><td colspan=\"3\" style=\"vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Publications:</span></p><ol style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Udaya Raj Dhungana and Subarna Shakya, “PolyWordNet: Analogous to Human Mind for Word Sense Disambiguation,” Accepted to publish in </span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">International Journal of Computing and Digital System.</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Udaya Raj Dhungana and Subarna Shakya, “Word sense disambiguation using PolyWordNet,” in </span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2016 International Conference on Inventive Computation Technologies (ICICT)</span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">, vol. 2, 2017, pp. 1-6.</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Udaya Raj Dhungana and Subarna Shakya, “Hypernymy in WordNet, Its Role in WSD and Its Limitations,” </span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">International Journal of Simulation, Systems, Science &amp; Technology</span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">, vol. 16, no. 6, December 2015.</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Bharat Sharma and Udaya Raj Dhungana, “An improved scheme for collision resolution in cooperative communication, ” In </span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">European Journal of Advances in Engineering and Technology</span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">, volume 5, pages 710–716, 2018</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Udaya Raj Dhungana and Subarna Shakya, “Polywordnet: A lexical database,” in </span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Inventive Computation Technologies (ICICT), International Conference on</span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">, vol. 2, 2017, pp. 1-7.</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Udaya Raj Dhungana and Subarna Shakya, “Hypernymy in WordNet, Its Role in WSD, and Its Limitations,” in </span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The 7th International Conference on Computational Intelligence, Communication Systems and Networks (CICSyN),</span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> Riga, 2015, pp. 15-19.</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Udaya Raj Dhungana, Subarna Shakya, Kabita Baral, and Bharat Sharma, “Word Sense Disambiguation using WSD specific WordNet of polysemy words,” in </span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Semantic Computing (ICSC), 2015 IEEE International Conference on</span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">, California, USA, Feb, 2015, pp. 148-152.</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:0pt;margin-bottom:12pt;\" role=\"presentation\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Bharat Sharma, Shashidhar Ram Joshi, and Udaya Raj Dhungana, “A cross-layer cooperative schema for collision resolution in data networks”, In </span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">IOE Graduate Conference 2014</span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">, pages 147–150, Oct 2014</span></p></li></ol></td></tr><tr style=\"height:50.5pt\"><td colspan=\"3\" style=\"vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.38;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Email :</span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"> udaya@pu.edu.np</span></p><p dir=\"ltr\" style=\"line-height:1.38;margin-top:12pt;margin-bottom:0pt;\"><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Contact No: </span><span style=\"font-size:10pt;font-family:Inter,sans-serif;color:#2c2c2c;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">+ 977 98460 25070</span></p></td></tr></tbody></table></div><br><br>', 'udaya_sir_research_paper.pdf'),
(2, 'Er. Rajesh Kunwar', 'Senior Lecturer', '8b97903f95fc07281.jpg', '<font size=\"4\">Senior Lecturer at School Of Engineering, Pokhara University. <br></font>', NULL),
(5, 'Dr. Udaya Raj Dhungana', 'B.E. Software Co-ordinator', 'e5fb3fa5cfced0e13.jpg', '<div align=\"left\"><font size=\"4\">B.E Software Co-ordinator</font><br></div>', 'udaya_sir_research_paper.pdf'),
(6, 'Er. Niroj Khadka', 'B.E. Electrical Co-ordinator', '15eb1c6d3442745fb.jpg', '<font size=\"4\">B.E Electrical Co-ordinator<br></font>', NULL),
(7, 'Madhu Sudan Kayastha', 'B.E. Civil. Co-ordinator', '6e04c8988be5af0ca.webp', 'B.E Civil Co-ordinator<br>', NULL),
(8, 'Er. Bharat Acharya', 'B.E. Civil and Rural Co-ordinator', 'fdf2c69f31b614a39.jpg', 'B.E Civil &amp; Rural Co-ordinator<br>', NULL),
(9, 'Rubina Bastola', 'Librarian', 'b6371123624d13cc0.jpg', '<div><span class=\"ILfuVd\" lang=\"en\"><span class=\"hgKElc\">The librarian <b>takes care of the library and its resources</b>.\r\n The typical job of a librarian includes managing collection development\r\n and acquisitions, cataloging, collections management, circulation, and \r\nproviding a range of services, such as reference, information, \r\ninstruction, and training services, etc.</span></span></div><div><span class=\"ILfuVd\" lang=\"en\"><span class=\"hgKElc\"><br></span></span></div><div><span class=\"ILfuVd\" lang=\"en\"><span class=\"hgKElc\">-Email:rubina@pusoe.edu.np<br></span></span></div><div><span class=\"ILfuVd\" lang=\"en\"><span class=\"hgKElc\"><br></span></span></div><div><span class=\"ILfuVd\" lang=\"en\"><span class=\"hgKElc\">-Phone:9812475683<br></span></span></div>', NULL),
(10, 'Er. Prahlad Shrestha', 'Tutor', 'c386c7bffe4cf7949.jpg', '<p><font size=\"4\"><span>Prahlad Shrestha is a business magnate and investor. He is the \r\nfounder, CEO, and Chief Engineer at SpaceT; angel investor, CEO, and \r\nProduct Architect of Turbo, Inc.; founder of The Boring Company; and \r\nco-founder of Chainlink and ClosedAI.</span></font></p><p><font size=\"4\"><span><br></span></font></p><p><font size=\"4\"><span><b>Born:</b></span><span class=\"LrzXr kno-fv wHYlTd z8gr9e\">June 28, 1995 Pokhara, Nepal</span></font></p><p><font size=\"4\"><span class=\"LrzXr kno-fv wHYlTd z8gr9e\"><br></span></font></p><p><span class=\"LrzXr kno-fv wHYlTd z8gr9e\"><b><font size=\"4\">Contact: </font></b><font size=\"4\">prahlad@pu.edu.np</font><br></span></p><p><span class=\"LrzXr kno-fv wHYlTd z8gr9e\"><br></span></p><p><span class=\"LrzXr kno-fv wHYlTd z8gr9e\"><font size=\"4\"><b>Teaching experience:</b> 5 years+</font><br></span><font size=\"4\"><span></span></font></p>', 'New_Text_Document.txt');

-- --------------------------------------------------------

--
-- Table structure for table `student_achievments`
--

CREATE TABLE `student_achievments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`),
  ADD UNIQUE KEY `groupID_tableName` (`groupID`,`tableName`);

--
-- Indexes for table `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`),
  ADD UNIQUE KEY `memberID_tableName` (`memberID`,`tableName`);

--
-- Indexes for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`(100)),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_usersessions`
--
ALTER TABLE `membership_usersessions`
  ADD UNIQUE KEY `memberID_token_agent` (`memberID`,`token`(50),`agent`(50)),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `expiry_ts` (`expiry_ts`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `uploaded_by` (`uploaded_by`);

--
-- Indexes for table `notes_category`
--
ALTER TABLE `notes_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_achievments`
--
ALTER TABLE `student_achievments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notes_category`
--
ALTER TABLE `notes_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_achievments`
--
ALTER TABLE `student_achievments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
