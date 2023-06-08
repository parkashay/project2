-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 05:26 PM
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
-- Database: `school_of_engineering_pu_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `appgini_query_log`
--

CREATE TABLE `appgini_query_log` (
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `statement` longtext DEFAULT NULL,
  `duration` decimal(10,2) UNSIGNED DEFAULT 0.00,
  `error` text DEFAULT NULL,
  `memberID` varchar(200) DEFAULT NULL,
  `uri` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appgini_query_log`
--

INSERT INTO `appgini_query_log` (`datetime`, `statement`, `duration`, `error`, `memberID`, `uri`) VALUES
('2022-07-07 12:50:23', 'SHOW FIELDS FROM `soe_posts`', '1.13', NULL, 'soeadmin', '/school_of_engineering_admin/soe_posts_view.php'),
('2022-07-31 10:45:19', 'SHOW FIELDS FROM `soe_gallery`', '2.49', NULL, 'soeadmin', '/school_of_engineering_admin/soe_gallery_view.php?SelectedID=2&SortField=&SortDirection=&FirstRecord=1&Embedded=0&DisplayRecords=all&SearchString=&record-updated-ok=913276357');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'general'),
(2, 'Notice'),
(3, 'Results'),
(4, 'Information');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `faculty_name` varchar(40) NOT NULL,
  `faculty_photo` varchar(40) NOT NULL,
  `faculty_description` text NOT NULL,
  `contact` bigint(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `location_google_map_key` varchar(40) DEFAULT NULL,
  `syllabus` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `faculty_name`, `faculty_photo`, `faculty_description`, `contact`, `email`, `location_google_map_key`, `syllabus`) VALUES
(1, 'B.E. Computer', '4c724175074dcce52.jpg', '<div><font size=\"4\">Rich learning experiences that provide a broad liberal arts foundation and deep subject-area expertise</font></div><div><font size=\"4\">Rich learning experiences that provide a broad liberal arts foundation and deep subject-area expertiseRich learning experiences that provide a broad liberal arts foundation and deep subject-area expertise</font></div><div><div align=\"left\"><font size=\"4\">facilitate your academic planning and intellectual development <br></font></div><div align=\"left\"><font size=\"6\"><u>Objecives:</u></font><br></div><div align=\"left\"><ul><li>\r\n                                <font size=\"4\">help frame your reflections throughout your time at Stanford\r\n                            </font></li><li><font size=\"4\">\r\n                                guide your strategic thinking if you face challenges or difficulty\r\n                            </font></li><li><font size=\"4\">\r\n                                acilitate your academic planning and intellectual development\r\n                            </font></li><li><font size=\"4\">\r\n                                support you as you consider post-undergraduate education\r\n                            </font></li></ul><font size=\"4\"></font></div>\r\n                        <h3><br></h3><h3><font size=\"6\"><u>Course Details</u></font></h3>\r\n<p></p>\r\n<h4 class=\"text-center\">Semester I</h4>\r\n<table class=\"table table-striped table-active table-sm\">\r\n<thead>\r\n<tr>\r\n<th scope=\"col\" class=\"\">#</th>\r\n<th scope=\"col\">Course Code</th>\r\n<th scope=\"col\">Course Description</th>\r\n<th scope=\"col\">Credit Hours</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">1</th>\r\n<td>MTH 111 </td>\r\n<td>Engineering Mathematics I</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">2</th>\r\n<td>CHM 103 </td>\r\n<td>Chemistry</td>\r\n<td>4</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">3</th>\r\n<td>ENG 104</td>\r\n<td>Communication Technique</td>\r\n<td>2</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">4</th>\r\n<td>CMP 103 </td>\r\n<td>Programming in C</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">5</th>\r\n<td>ELE 105 </td>\r\n<td>Basic Electrical Engineering</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">6</th>\r\n<td>MEC 178 </td>\r\n<td>Mechanical Workshop</td>\r\n<td>1</td>\r\n</tr>\r\n</tbody>\r\n</table><div xss=\"removed\" class=\"google-auto-placed\"><ins xss=\"removed\" data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-2561802354386043\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\"><ins id=\"aswift_2_expand\" xss=\"removed\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\"><ins id=\"aswift_2_anchor\" xss=\"removed\"></ins></ins></ins></div>\r\n <h4 class=\"text-center\">Semester II</h4>\r\n<table class=\"table table-striped table-active table-sm\">\r\n<thead>\r\n<tr>\r\n<th scope=\"col\" class=\"\">#</th>\r\n<th scope=\"col\">Course Code</th>\r\n<th scope=\"col\">Course Description</th>\r\n<th scope=\"col\">Credit Hours</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">1</th>\r\n<td>MTH 121 </td>\r\n<td>Engineering Mathematics II</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">2</th>\r\n<td>PHY 102 </td>\r\n<td> Physics</td>\r\n<td>4</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">3</th>\r\n<td>MEC 109 </td>\r\n<td>Engineering Drawing </td>\r\n<td>1</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">4</th>\r\n<td>CMP 104 </td>\r\n<td>Object Oriented Programming in C++</td>\r\n<td>2</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">5</th>\r\n<td>MEC 189 </td>\r\n<td>Thermal Science </td>\r\n<td>2</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">6</th>\r\n<td>MEC 119 </td>\r\n<td>Applied Mechanics</td>\r\n<td>3</td>\r\n</tr>\r\n</tbody>\r\n</table><div xss=\"removed\" class=\"google-auto-placed\"><ins xss=\"removed\" data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-2561802354386043\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\"><ins id=\"aswift_3_expand\" xss=\"removed\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\"><ins id=\"aswift_3_anchor\" xss=\"removed\"></ins></ins></ins></div>\r\n<h4 class=\"text-center\">Semester III</h4>\r\n<table class=\"table table-striped table-active table-sm\">\r\n<thead>\r\n<tr>\r\n<th scope=\"col\" class=\"\">#</th>\r\n<th scope=\"col\">Course Code</th>\r\n<th scope=\"col\">Course Description</th>\r\n<th scope=\"col\">Credit Hours</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">1</th>\r\n<td>MTH 211 </td>\r\n<td>Engineering Mathematics III</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">2</th>\r\n<td>CMP 331 </td>\r\n<td>Data Structure and Algorithm</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">3</th>\r\n<td>ELE 226 </td>\r\n<td>Electrical Engineering Materials</td>\r\n<td>2</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">4</th>\r\n<td>ELE 215 </td>\r\n<td>Network Theory</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">5</th>\r\n<td>ELX 213</td>\r\n<td>Electronic Devices</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">6</th>\r\n<td>ELX 212 </td>\r\n<td>Logic Circuits</td>\r\n<td>3</td>\r\n</tr>\r\n</tbody>\r\n</table><div xss=\"removed\" class=\"google-auto-placed\"><ins xss=\"removed\" data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-2561802354386043\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\"><ins id=\"aswift_4_expand\" xss=\"removed\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\"><ins id=\"aswift_4_anchor\" xss=\"removed\"></ins></ins></ins></div>\r\n<h4 class=\"text-center\">Semester IV</h4>\r\n<table class=\"table table-striped table-active table-sm\">\r\n<thead>\r\n<tr>\r\n<th scope=\"col\" class=\"\">#</th>\r\n<th scope=\"col\">Course Code</th>\r\n<th scope=\"col\">Course Description</th>\r\n<th scope=\"col\">Credit Hours</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">1</th>\r\n<td>MTH 223 </td>\r\n<td>Engineering Mathematics IV</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">2</th>\r\n<td>ELE 221 </td>\r\n<td>Instrumentation</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">3</th>\r\n<td>ELX 225 </td>\r\n<td>Electronic Circuits </td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">4</th>\r\n<td>CMP 224 </td>\r\n<td>Theory of Computation</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">5</th>\r\n<td>ELX 226 </td>\r\n<td>Microprocessors</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">6</th>\r\n<td>Proj</td>\r\n<td>Project-I</td>\r\n<td>1</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 class=\"text-center\">Semester V</h4>\r\n<table class=\"table table-striped table-active table-sm\">\r\n<thead>\r\n<tr>\r\n<th scope=\"col\" class=\"\">#</th>\r\n<th scope=\"col\">Course Code</th>\r\n<th scope=\"col\">Course Description</th>\r\n<th scope=\"col\">Credit Hours</th>\r\n </tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">1</th>\r\n<td>MTH 317</td>\r\n<td>Numerical Methods </td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">2</th>\r\n<td>ELX 352 </td>\r\n<td>Microprocessor System and Interfacing</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">3</th>\r\n<td>CMP 332 </td>\r\n<td>Operating System</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">4</th>\r\n<td>CMP 364 </td>\r\n<td>Computer Graphics </td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">5</th>\r\n<td>ELX 353 </td>\r\n<td>Integrated Digital Electronics</td>\r\n<td>3</td>\r\n</tr>\r\n</tbody>\r\n</table><div xss=\"removed\" class=\"google-auto-placed\"><ins xss=\"removed\" data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-2561802354386043\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\"><ins id=\"aswift_5_expand\" xss=\"removed\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\"><ins id=\"aswift_5_anchor\" xss=\"removed\"></ins></ins></ins></div>\r\n<h4 class=\"text-center\">Semester VI</h4>\r\n<table class=\"table table-striped table-active table-sm\">\r\n<thead>\r\n<tr>\r\n<th scope=\"col\" class=\"\">#</th>\r\n<th scope=\"col\">Course Code</th>\r\n<th scope=\"col\">Course Description</th>\r\n<th scope=\"col\">Credit Hours</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">1</th>\r\n<td>MTH 212 </td>\r\n<td>Probability and Statistics </td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">2</th>\r\n<td>CMP 381 </td>\r\n<td>Simulation and Modeling </td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">3</th>\r\n<td>CMM 362 </td>\r\n<td>Data Communication </td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">4</th>\r\n<td>CMP 383 </td>\r\n<td>Database Management System </td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">5</th>\r\n<td>CMP 388 </td>\r\n<td>Object Oriented Software Engineering </td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">6</th>\r\n<td>PRJ 300 </td>\r\n<td>MInor Projects</td>\r\n<td>2</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4 class=\"text-center\">Semester VII</h4>\r\n<table class=\"table table-striped table-active table-sm\">\r\n<thead>\r\n<tr>\r\n<th scope=\"col\" class=\"\">#</th>\r\n<th scope=\"col\">Course Code</th>\r\n<th scope=\"col\">Course Description</th>\r\n<th scope=\"col\">Credit Hours</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">1</th>\r\n<td>MNG 410 </td>\r\n<td>Engineering Economics</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">2</th>\r\n<td>CMP 472 </td>\r\n<td>Computer Architecture</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">3</th>\r\n<td>ELX 482 </td>\r\n<td>Digital Signal Processing </td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">4</th>\r\n<td>CMP 474 </td>\r\n<td>Computer Network </td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">5</th>\r\n<td><br></td>\r\n<td>Elective I</td>\r\n<td>3</td>\r\n</tr>\r\n</tbody>\r\n</table><div xss=\"removed\" class=\"google-auto-placed\"><ins xss=\"removed\" data-ad-format=\"auto\" class=\"adsbygoogle adsbygoogle-noablate\" data-ad-client=\"ca-pub-2561802354386043\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\"><ins id=\"aswift_6_expand\" xss=\"removed\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\"><ins id=\"aswift_6_anchor\" xss=\"removed\"></ins></ins></ins></div>\r\n<h4 class=\"text-center\">Semester VIII</h4>\r\n\r\n<table class=\"table table-striped table-active table-sm\"><thead>\r\n<tr>\r\n<th scope=\"col\" class=\"\">#</th>\r\n<th scope=\"col\">Course Code</th>\r\n<th scope=\"col\">Course Description</th>\r\n<th scope=\"col\">Credit Hours</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<th scope=\"row\">1</th>\r\n<td>MNG 411 </td>\r\n<td>Organization and Management</td>\r\n<td>2</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">3</th>\r\n<td>CMP 421 </td>\r\n<td>Artificial Intelligence</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">4</th>\r\n<td>CMP 481 </td>\r\n<td>Image Processing &amp; Pattern Recognition</td>\r\n<td>3</td>\r\n</tr>\r\n<tr>\r\n<th scope=\"row\">5</th>\r\n<td>PRJ 400 </td>\r\n<td>Project</td>\r\n<td>5</td></tr></tbody></table><p></p><p><br></p></div>', 9810040055, 'admin@pu.edu.np', NULL, NULL),
(2, 'B.E. Civil.', '0beb4f3b3267b5631.webp', 'The Department of Civil Engineering comes under the School of <br>\r\nEngineering, Pokhara University. It was established in 2008. It is a <br>\r\nfour year Bachelor\'s Programs of Engineering based on credit-semester <br>\r\nsystem.', 101855896, 'civil@pusoe.edu.np', NULL, NULL),
(3, 'B.E. Electrical', 'd488b4f757c59365b.webp', 'The Department of Electrical Engineering comes under the School of \r\nEngineering, Pokhara University. It was established in 2008. It is a \r\nfour year Bachelor\'s Programs of Engineering based on credit-semester \r\nsystem.', 12000000, 'electrical@pusoe.edu.np', NULL, NULL),
(4, 'B.E. Software', '7455966d2fd2bf4ff.jpg', 'The Department of Software Engineering comes under the School of \r\nEngineering, Pokhara University. It was established in 2018. It is a \r\nfour year Bachelor\'s Programs of Engineering based on credit-semester \r\nsystem.', 74102585, 'civil@pusoe.edu.np', NULL, NULL),
(5, 'B.E. Civil and Rural', 'b0607cd1720cbd110.jpg', 'The Department of Civil Engineering comes under the School of <br>\r\nEngineering, Pokhara University. It was established in 2008. It is a <br>\r\nfour year Bachelor\'s Programs of Engineering based on credit-semester <br>\r\nsystem.', 158520, 'civil@pusoe.edu.np', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `membership_cache`
--

CREATE TABLE `membership_cache` (
  `request` varchar(100) NOT NULL,
  `request_ts` int(11) DEFAULT NULL,
  `response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 2, 'category', 1, 3, 3, 3),
(2, 2, 'soe_gallery', 1, 3, 3, 3),
(3, 2, 'soe_posts', 1, 3, 3, 3),
(4, 2, 'courses', 1, 3, 3, 3);

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
(2, 'Admins', 'Admin group created automatically on 2022-06-20', 0, 1, 0);

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
(1, 'category', '1', 'soeadmin', 1655717248, 1655717248, 2),
(3, 'category', '2', 'soeadmin', 1655719160, 1655719160, 2),
(5, 'soe_gallery', '1', 'soeadmin', 1655720330, 1655720330, 2),
(6, 'courses', '1', 'soeadmin', 1655720506, 1659352472, 2),
(10, 'category', '3', 'soeadmin', 1656428658, 1656428658, 2),
(18, 'soe_gallery', '2', 'soeadmin', 1659260088, 1663755123, 2),
(19, 'courses', '2', 'soeadmin', 1659280342, 1659371887, 2),
(20, 'courses', '3', 'soeadmin', 1659280420, 1659280420, 2),
(21, 'courses', '4', 'soeadmin', 1659280516, 1659280516, 2),
(22, 'courses', '5', 'soeadmin', 1659280564, 1659371870, 2),
(23, 'category', '4', 'soeadmin', 1659774811, 1659774811, 2),
(25, 'soe_gallery', '3', 'soeadmin', 1663488372, 1663754935, 2),
(27, 'soe_gallery', '5', 'soeadmin', 1663755193, 1663755193, 2),
(28, 'soe_gallery', '6', 'soeadmin', 1663755215, 1663755215, 2),
(29, 'soe_gallery', '7', 'soeadmin', 1663755270, 1663755270, 2),
(30, 'soe_gallery', '8', 'soeadmin', 1663755283, 1663755283, 2),
(31, 'soe_gallery', '9', 'soeadmin', 1663755300, 1663755300, 2),
(32, 'soe_gallery', '10', 'soeadmin', 1663755342, 1663755342, 2),
(34, 'soe_posts', '15', 'soeadmin', 1684979502, 1684979502, 2),
(35, 'soe_posts', '16', 'soeadmin', 1684981356, 1684981356, 2);

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
('guest', NULL, NULL, '2022-06-20', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2022-06-20', NULL, NULL, NULL, 0, NULL),
('soeadmin', '$2y$10$0gQ8a8MzvS6ukNMeyarGpekXu..1g5PsbajqJA59ppJ/LzU.tJDTm', 'admin@pu.edu.np', '2022-06-20', 2, 0, 1, NULL, NULL, NULL, NULL, 'Admin member created automatically on 2022-06-20\nRecord updated automatically on 2022-08-06\nRecord updated automatically on 2022-08-06\nRecord updated automatically on 2022-08-06\nRecord updated automatically on 2022-08-06', NULL, NULL, NULL, 0, NULL);

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

--
-- Dumping data for table `membership_usersessions`
--

INSERT INTO `membership_usersessions` (`memberID`, `token`, `agent`, `expiry_ts`) VALUES
('soeadmin', 'XYp5oKKU3oZjZM34LPdzBUEs8PZDTb', 'Zahsfb3HC8gsyevDc7CbHkw3ui8VQo', 1659785784);

-- --------------------------------------------------------

--
-- Table structure for table `soe_gallery`
--

CREATE TABLE `soe_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `file_photo` varchar(40) DEFAULT NULL,
  `file_video` varchar(200) DEFAULT NULL,
  `youtube_link` varchar(40) DEFAULT NULL,
  `year_calendar` varchar(40) DEFAULT NULL,
  `year` varchar(40) NOT NULL,
  `description` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soe_gallery`
--

INSERT INTO `soe_gallery` (`id`, `event_name`, `file_photo`, `file_video`, `youtube_link`, `year_calendar`, `year`, `description`) VALUES
(1, 'Convocation-2022', 'pu_bg.jpg', NULL, 'https://www.youtube.com', NULL, '2022', '<br>'),
(2, 'Academic Calendar 2021', NULL, NULL, NULL, 'Numerical_methods.pdf', 'April 21, 2021', '<br>'),
(3, 'Academic Calendar 2022', NULL, NULL, NULL, 'khalte.txt', 'April 21, 2022', '<br>'),
(5, 'Project-II Demo', 'about-site-bg.webp', NULL, NULL, NULL, 'September 21, 2022', '<br>'),
(6, 'Project-II Demo', 'campus_aerial-13_resize_0.jpg', NULL, NULL, NULL, 'September 21, 2022', '<br>'),
(7, 'Project-II Demo', '166022.jpg', NULL, NULL, NULL, 'September 21, 2022', '<br>'),
(8, 'Project-II Demo', '1.jpg', NULL, NULL, NULL, 'September 21, 2022', '<br>'),
(9, 'Project-II Demo', '2.jpg', NULL, NULL, NULL, 'September 21, 2022', '<br>'),
(10, 'Project-II Demo', 'soe-graduation.jpg', NULL, NULL, NULL, 'September 21, 2022', '<br>');

-- --------------------------------------------------------

--
-- Table structure for table `soe_posts`
--

CREATE TABLE `soe_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `tags` text NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `content` text NOT NULL,
  `file_name` varchar(40) DEFAULT NULL,
  `photo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soe_posts`
--

INSERT INTO `soe_posts` (`id`, `title`, `tags`, `category`, `date`, `content`, `file_name`, `photo`) VALUES
(15, 'Notice for Sports Meet', 'Sports Meet,\r\nSport', 1, '2023-05-25', 'Notice for sports meet<br>', NULL, 'fc1a13eb92ae07767.jpg'),
(16, '२०२२ स्नातकको रजिष्ट्रेशन फाइल बुझाउने सम्बन्धी सूचना !!!', '२०२२ स्नातकको रजिष्ट्रेशन फाइल बुझाउने सम्बन्धी सूचना !!!', 2, '2023-05-25', '<img src=\"http://https://pu.edu.np/wp-content/uploads/2023/01/registration-page-0011.jpg\" alt=\"\" align=\"none\"><br>', NULL, '00c402469f7a45f75.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_cache`
--
ALTER TABLE `membership_cache`
  ADD PRIMARY KEY (`request`);

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
-- Indexes for table `soe_gallery`
--
ALTER TABLE `soe_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soe_posts`
--
ALTER TABLE `soe_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `soe_gallery`
--
ALTER TABLE `soe_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `soe_posts`
--
ALTER TABLE `soe_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
