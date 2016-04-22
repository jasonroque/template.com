-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2016 at 01:45 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `template.com`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `test_table`
--

INSERT INTO `test_table` (`_id`, `title`, `author`, `slug`, `img`, `paragraph`, `category`, `date_published`) VALUES
(1, 'First Post', 'Author', 'first-post', 'featured-2.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.</p>', 'Category 1', '2016-04-15 22:39:17'),
(2, 'Second Post', 'Jason', 'second-post', 'featured-1.jpg', '<p>For many potential buyers, kitchen is often a deciding factor before purchasing or declining a house. Hence it is a smart move to renovate the Kitchen before putting your house for sale. More often than not, it can earn you about 70 percent return on investment once the sale is through.</p>', 'Category 2', '2016-04-15 22:42:13'),
(3, 'Third Post', 'Jason', 'third-post', '', '<p>So in this example, $mdarray might be a two-dimensional array, like an array of database records. In this example, 0 is the index of the ''date'' column in each record (or row). So you construct the $dates array (basically the same array, but with only that column), and tell the array_multisort function to sort $mdarray based on that particular column''s values</p>', 'Category 3', '2016-04-15 22:51:16'),
(4, 'Fourth Post', 'Jiminy Cricket', 'fourth-post', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet urna in eros eleifend viverra. Cras vulputate arcu quis sapien dignissim, vel ultricies lacus fringilla. Aliquam ac turpis leo.</p>', 'Category 3|Category 1', '2016-04-15 23:02:10'),
(5, 'Fifth Post', 'John Cena', 'fifth-post', '', '<p>Due to the specific HTML and CSS used to justify buttons (namely display: table-cell), the borders between them are doubled. In regular button groups, margin-left: -1px is used to stack the borders instead of removing them. However, margin doesn''t work with display: table-cell. As a result, depending on your customizations to Bootstrap, you may wish to remove or re-color the borders.</p>', 'Category 1|Category 2|Category 3', '2016-04-15 23:06:14'),
(6, 'Latest Post', 'Late Night With Seth Meyers', 'latest-post', '', '<p>Due to the specific HTML and CSS used to justify buttons (namely display: table-cell), the borders between them are doubled. In regular button groups, margin-left: -1px is used to stack the borders instead of removing them. However, margin doesn''t work with display: table-cell. As a result, depending on your customizations to Bootstrap, you may wish to remove or re-color the borders.</p>\n<p>\nDue to the specific HTML and CSS used to justify buttons (namely display: table-cell), the borders between them are doubled. In regular button groups, margin-left: -1px is used to stack the borders instead of removing them. However, margin doesn''t work with display: table-cell. As a result, depending on your customizations to Bootstrap, you may wish to remove or re-color the borders.</p>', 'Category 2', '2016-04-15 23:10:00'),
(7, 'Second Copy Post', 'Jason Jr.', 'second-copy-post', 'featured-1.jpg', '<p><i>For many potential buyers</i>, kitchen is often a deciding factor before purchasing or declining a house. Hence it is a smart move to renovate the Kitchen before putting your house for sale. More often than not, it can earn you about 70 percent return on investment once the sale is through.</p>', 'Category 2|Category 4', '2016-04-15 22:42:13'),
(19, 'omg', 'JPAGJPO', 'omg', NULL, '<p>JPEOJGPOJGOPEJGOPSJGPOES JPOS JGPOSJGPO JPOS JOPS JOPS JGPOS JOSJVKLS JVKSL; JVKL;SIJ</p>', NULL, '2016-04-22 23:09:09'),
(15, 'Let''s Break this', 'Jason', 'lets-break-this', '', '<h1>Hello there fellow breakers</h1>\r\n<p>What will happen when i have a few things before the paragraph.</p>\r\n<p>fjdapfjsdopafjsdopajfospjafospa</p>', 'Category 2|Category 4', '2016-04-22 19:38:25'),
(20, 'Author', 'Wihohioawf', 'author', 'collage-pic52.jpg', '<p>fwahiohfiewoa;fhiofhifhiof hio hios hvios hvisovhisovhisohfivso hios vhiohvks&nbsp;</p>', '', '2016-04-22 23:27:30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
