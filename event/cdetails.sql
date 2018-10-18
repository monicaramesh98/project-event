-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 06:59 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE IF NOT EXISTS `cdetails` (
  `name` varchar(40) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `nod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdetails`
--

INSERT INTO `cdetails` (`name`, `phno`, `email`, `address`, `date`, `nod`) VALUES
('p.monica', '789000098', 'mail??@', '4354,yfuygkjn', '2018-06-13', 4),
('monicaramesh', '38764838', '37,shgfju', 'lavanyaasrir21@gmail.com', '2018-06-20', 5),
('bavya', '325789', '37,shgfju', 'lavanyaasrir21@gmail.com', '2018-06-29', 8),
('abcdef', '325789', '37,shgfju', 'sdkvldj@mail.com', '2018-06-23', 2),
('bavya', '38764838', '37,shgfju', 'lavanyaasrir21@gmail.com', '2018-06-21', 4),
('bavya', '38764838', '37,shgfju', 'monicaramesh98@gmail.com', '2018-07-14', 9),
('xyz', '6349384298', '23,sjgsukhi', 'dhgck@gmail.com', '2018-06-13', 2),
('', '', '', '', '0000-00-00', 0),
('abcdef', '325789', '37,shgfju', 'sdkvldj@mail.com', '2018-06-08', 1),
('P.monica', '325789', '23,sjgsukhi', 'lavanyaasrir21@gmail.com', '2018-06-09', 10),
('P.monica', '325789', '23,sjgsukhi', 'lavanyaasrir21@gmail.com', '2018-06-09', 10),
('P.monica', '325789', '23,sjgsukhi', 'lavanyaasrir21@gmail.com', '2018-06-09', 10),
('P.monica', '325789', '23,sjgsukhi', 'lavanyaasrir21@gmail.com', '2018-06-09', 10),
('P.monica', '325789', '23,sjgsukhi', 'lavanyaasrir21@gmail.com', '2018-06-09', 10),
('P.monica', '325789', '23,sjgsukhi', 'lavanyaasrir21@gmail.com', '2018-06-09', 10),
('aaish', '87639873', '49,dbfjdbjj', 'aaish@gmail.com', '2018-06-22', 3),
('abc', '5576809095', '234,sgckj', 'abc@gmail.com', '2018-06-30', 3),
('abc', '', '', '', '0000-00-00', 0),
('', '', '', '', '0000-00-00', 0),
('anu', '9775662890', 'anu@gmail.com', '346,sdugfsdj', '2018-07-06', 3),
('pqr', '3786930654', 'pqr@gmail.com', '346,dbvbjfnvkk', '2018-07-07', 4),
('taju', '4587838997', 'taju@gmail.com', '35,dfvj', '2018-07-27', 2),
('sai', '364329877', 'sai@gmail.com', '123,T nagar,chennai', '2018-07-06', 2),
('krishna', '38764838', 'krish@gmail.com', '37,shgfju', '2018-07-08', 5),
('yoga', '8537464394', 'abc@gmail.com', '9/189', '0000-00-00', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
