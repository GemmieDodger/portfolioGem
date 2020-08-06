-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 04:19 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` int(6) NOT NULL,
  `title` varchar(100) NOT NULL,
  `technologies` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) DEFAULT NULL,
  `image4` varchar(200) DEFAULT NULL,
  `image5` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `title`, `technologies`, `content`, `link`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES
(1, 'The Daily Lockdown Blog', 'PHP, MySQL, HTML, JavaScript, CSS, Bootstrap, Agile', 'This is some content that needs updating', NULL, 'public/images/content/projects/lockdown1.JPG', 'public/images/content/projects/lockdown2.JPG', 'public/images/content/projects/lockdown3.JPG', NULL, NULL),
(2, 'Personal Website', 'HTML, JavaScript, CSS', 'This is some content that needs updating', 'https://gemmiedodger.github.io/Personal.website/index.html', 'public/images/content/projects/personal1.JPG', 'public/images/content/projects/personal2.JPG', 'public/images/content/projects/personal3.JPG', NULL, NULL),
(3, 'Portfolio', 'HTML, JavaScript, CSS', 'This is some content that needs updating', NULL, 'public/images/content/projects/portfolio1.JPG', 'public/images/content/projects/portfolio2.JPG', 'public/images/content/projects/portfolio3.JPG', NULL, NULL),
(4, 'Coffee Pages', 'PHP, MySQL, HTML, Bootstrap, CSS, Agile', 'This is some content that needs updating', NULL, 'public/images/content/projects/coffeepages1.JPG', 'public/images/content/projects/coffeepages2.JPG', 'public/images/content/projects/coffeepages3.JPG', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
