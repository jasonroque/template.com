-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2016 at 09:45 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `test_table`
--

CREATE TABLE IF NOT EXISTS `test_table` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `paragraph` text NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `date_published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `test_table`
--

INSERT INTO `test_table` (`_id`, `title`, `author`, `slug`, `img`, `paragraph`, `category`, `date_published`) VALUES
(1, 'First Post', 'Author', 'first-post', 'featured-2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.', 'Category 1', '2016-04-15 22:39:17'),
(2, 'Second Post', 'Jason', 'second-post', 'featured-1.jpg', 'For many potential buyers, kitchen is often a deciding factor before purcha sing or declining a house. Hence it is a smart move to renovate the Kitchen before putting your house for sale. More often than not, it can earn you about 70 percent return on investment once the sale is through.', 'Category 2', '2016-04-15 22:42:13'),
(3, 'Third Post', 'Jason', 'third-post', '', 'So in this example, $mdarray might be a two-dimensional array, like an array of database records. In this example, 0 is the index of the ''date'' column in each record (or row). So you construct the $dates array (basically the same array, but with only that column), and tell the array_multisort function to sort $mdarray based on that particular column''s values', 'Category 3', '2016-04-15 22:51:16'),
(4, 'Fourth Post', 'Jiminy Cricket', 'fourth-post', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.', 'Category 3|Category 1', '2016-04-15 23:02:10'),
(5, 'Fifth Post', 'John Cena', 'fifth-post', '', 'Due to the specific HTML and CSS used to justify buttons (namely display: table-cell), the borders between them are doubled. In regular button groups, margin-left: -1px is used to stack the borders instead of removing them. However, margin doesn''t work with display: table-cell. As a result, depending on your customizations to Bootstrap, you may wish to remove or re-color the borders.', 'Category 1|Category 2|Category 3', '2016-04-15 23:06:14'),
(6, 'Latest Post', 'Late Night With Seth Meyers', 'latest-post', '', 'Due to the specific HTML and CSS used to justify buttons (namely display: table-cell), the borders between them are doubled. In regular button groups, margin-left: -1px is used to stack the borders instead of removing them. However, margin doesn''t work with display: table-cell. As a result, depending on your customizations to Bootstrap, you may wish to remove or re-color the borders.\r\n\r\nDue to the specific HTML and CSS used to justify buttons (namely display: table-cell), the borders between them are doubled. In regular button groups, margin-left: -1px is used to stack the borders instead of removing them. However, margin doesn''t work with display: table-cell. As a result, depending on your customizations to Bootstrap, you may wish to remove or re-color the borders.', 'Category 2', '2016-04-15 23:10:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
