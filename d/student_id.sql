-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 07:24 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `customer` (
  `customer_id` int(50) NOT NULL,
  `profile` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `level` varchar(5) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `category` varchar(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `u_id` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `issued_date` varchar(6) NOT NULL,
  `exp_date` varchar(6) NOT NULL,
  `d_confirm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `profile`, `name`, `f_name`, `m_name`, `level`, `mobile`, `category`, `sex`, `u_id`, `dept`, `issued_date`, `exp_date`, `d_confirm`) VALUES
(1, '001.jpg', 'Ohuka', 'Ikenna', 'Valentine', 'HND', '09095639302','Student', 'M','23037', 'CS', '2019', '2021','Computer Sceince'),
(2, '002.jpg', 'Egwu', 'James', 'Chukwu', 'HND', '08082639302','Student', 'M','13047', 'PA', '2019', '2021','Public Admin');
--
-- Table structure for table `user`
--
CREATE TABLE `user` 
( `id` INT(5) NOT NULL , 
  `name` VARCHAR(250) NOT NULL , 
  `college` VARCHAR(500) NOT NULL , 
  `email` VARCHAR(250) NOT NULL , 
  `password` VARCHAR(26) NOT NULL 
) ENGINE = InnoDB DEFAULT CHARSET=latin1;
  --
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `college`, `email`, `password`) VALUES 
(1, 'Ohuka', 'Akanu Ibiam Fed Poly Unwana', 'ohukaiv@gmail.com', 'iamohuka'), 
(2, 'Iamohuka', 'Federal Poly Nekede', 'iamohuka@gmail.com', '12345');

--
-- Table structure for table `dept`
--
CREATE TABLE `dept` ( 
  `dept_id` int(50) NOT NULL, 
  `dept_name` varchar(500) NOT NULL, 
  `dept_code` varchar(4) NOT NULL 
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`, `dept_code`) VALUES 
(1, 'Computer Science', 'CS'), 
(2, 'Elect Elect Eng', 'EE'), 
(3, 'Marketing', 'MK'), 
(4, 'Public Admin', 'PA'), 
(5, 'Quantity Surveying', 'QS'), 
(6, 'Computer Eng', 'CE'), 
(7, 'Food Science and Tech', 'FST'), 
(8, 'Hosp Mgt and Tourism', 'HMT'), 
(9, 'Maths and Stats', 'MS'), 
(10, 'Estate Mgt and Valuation', 'EM'), 
(11, 'Surveying and Geoinfo', 'SUG'), 
(12, 'Science and Lab Tech', 'SLT'), 
(13, 'Agric Tech', 'AGT'), 
(14, 'Accountancy', 'ACC'), 
(15, 'Office Tech and Mgt', 'OTM'), 
(16, 'Business Admin and Mgt', 'BAM'), 
(17, 'Mechanical Eng', 'ME'), 
(18, 'Mechatronics', 'MA'), 
(19, 'Architectural Techn', 'AT');
--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);
--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
  --
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_id`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `dept_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
