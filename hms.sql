-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 07:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant_info`
--

CREATE TABLE `accountant_info` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(100) NOT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accountant_info`
--

INSERT INTO `accountant_info` (`id`, `userid`, `password`, `fullname`, `gender`, `address`, `email`, `phone`, `blood_group`, `dob`) VALUES
(1, '5001', '$2y$10$2ySrBURNPFguCahrkoH.LOJyd6AE.cyBXBLgdmrNtgwola//vNUTe', 'new', 'Female', 'addre', 'test@test.com', 12131313, 'AB+', '2020-08-08'),
(2, '5002', '$2y$10$sXLDF8GYx2csMRNv.GG9T./tZWDbVY/OK2rz6N1c.XYL6tIDJ3iii', 'sadasd dasdad', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'b+', '2020-08-19'),
(3, '5003', '$2y$10$t99bF0syPcrRvA0Gyhg5HeRS05vmPjTjPD/o53IhgFUJwl4eceYOO', 'sadasd dasdad', 'male', 'asdadasdasd', 'test@test.com', 121212, 'AB+', '2020-09-17'),
(4, '5004', '$2y$10$isF8tMi6qQNkwA.ZMRedXuudLVHA8fX5DSxNE19ixBnijuq.9vs2C', 'sadasd dasdad', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'AB+', '2020-09-20'),
(6, '5006', '$2y$10$TWKs00mqWwUKJwQ5SUpgBOIqmWt8JzvJL.0Y1qM9P7iZ.bnGWDvO6', 'new name', 'Female', 'asdadasdasd', 'test@test.com', 121212, 'AB+', '2020-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(100) NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `userid`, `password`) VALUES
(1, '9001', '$2y$10$dybyk.yjIsErUQ9/OS6kiOhL2rw/3/WBsBcEJtuJBUd.8Bwl9SnVS');

-- --------------------------------------------------------

--
-- Table structure for table `appointments_nurse`
--

CREATE TABLE `appointments_nurse` (
  `id` int(100) NOT NULL,
  `nid` int(100) NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_date` date NOT NULL,
  `d_time` time(6) NOT NULL,
  `ward` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments_nurse`
--

INSERT INTO `appointments_nurse` (`id`, `nid`, `fullname`, `d_date`, `d_time`, `ward`) VALUES
(1, 3004, 'dhadksahd', '2020-09-23', '12:40:00.000000', 202),
(2, 3002, 'nn', '2020-09-12', '13:04:00.000000', 201);

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank_request`
--

CREATE TABLE `blood_bank_request` (
  `id` int(100) NOT NULL,
  `patient_id` int(100) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Blood_Group` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` time(6) NOT NULL,
  `Date` date NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_bank_request`
--

INSERT INTO `blood_bank_request` (`id`, `patient_id`, `fullname`, `Blood_Group`, `Time`, `Date`, `status`) VALUES
(15, 0, 'new', 'a+', '21:18:55.000000', '2020-08-24', 'waiting'),
(16, 0, 'asdasd', 'a+', '21:18:59.000000', '2020-08-24', 'waiting'),
(17, 0, 'hello', 'b-', '21:19:04.000000', '2020-08-24', 'waiting'),
(18, 0, 'mysad', 'a+', '15:20:51.000000', '2020-08-25', 'waiting'),
(19, 0, 'yess', 'a+', '15:39:48.000000', '2020-08-25', 'waiting'),
(20, 0, 'sadasd dasdad', 'A+', '19:02:00.000000', '2020-09-10', 'waiting'),
(21, 1007, 'sadasd dasdad', 'A+', '16:05:00.000000', '2020-09-12', 'waiting'),
(22, 1007, 'sadasd dasdad', 'B+', '16:06:00.000000', '2020-09-11', 'waiting'),
(23, 1007, 'sadasd dasdad', 'A-', '16:07:00.000000', '2020-09-11', 'available'),
(24, 1007, 'sadasd dasdad', 'B+', '16:07:00.000000', '2020-09-02', 'available'),
(25, 1007, 'sadasd dasdad', 'A-', '16:08:00.000000', '2020-09-03', 'donated');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank_staff`
--

CREATE TABLE `blood_bank_staff` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blood_staff_info`
--

CREATE TABLE `blood_staff_info` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `blood_group` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_staff_info`
--

INSERT INTO `blood_staff_info` (`id`, `userid`, `password`, `fullname`, `gender`, `address`, `email`, `phone`, `blood_group`, `dob`) VALUES
(1, '7001', '$2y$10$VRGDjHDdIk499XdNlmYmluIP/tGRf83VOAh2PsBJgygfeSCJYmUiO', 'nn', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'ab+', '2020-08-12'),
(2, '7002', '$2y$10$ys2U0uc1tYKIEeoDRnK3UOmJEYEZ88AtEGIu6eohfzb1XaPvOyFxm', 'sadasd dasdad', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'ab+', '2020-08-19'),
(4, '7004', '$2y$10$3qoeKa0zoWOOc8gjK61luex1Np5HkFWkuSa2BiPjxe8sUQnNrqZRW', 'sadasd dasdad', 'Female', 'asdadasdasd', 'test@test.com', 121212, 'AB-', '2020-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(100) NOT NULL,
  `fees` int(100) NOT NULL,
  `specialization` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`id`, `userid`, `password`, `fullname`, `blood_group`, `gender`, `email`, `phone`, `fees`, `specialization`, `days`, `time`, `dob`, `address`, `degree`) VALUES
(1, '2001', '$2y$10$jhpVzCtVbA3bUiZzylD7oenoZJt2kWwZKSrGchsYuMD5w5xL0EDqK', 'newnname', 'b+', 'Male', 'test@test.com', 121212, 1000, 'Allergists/Immunologist', 'sunday,', '21:21-23:23', '2020-08-08', 'new', 'MBBS,FCPS,MS,Mphil,'),
(2, '2002', '$2y$10$QYg8CMsj.NlBCRKuusPdOOwZ174k3aY6lIKjOx8lMmdZSbDNVd.9K', 'again', 'b+', 'Male', 'test@test.com', 123564, 1222, 'Eye Specialist', 'saturday,sunday,tuesday,', '21:22-12:22', '2020-08-08', 'yea', 'MBBS,FCPS,MD,'),
(3, '2003', '$2y$10$Z3FeteCl5/i5JPGOmH2fHOnWNEvY6a46zxlL1JxcWznz/0UneN4bm', 'new', 'b+', 'Male', 'test@test.com', 121212, 1000, 'Dermatologist', 'sunday,tuesday,', '04:18-00:23', '2020-08-12', 'asdadasdasd', 'MBBS,FCPS,MD,'),
(8, '2005', '$2y$10$H/A6F5i7xQEGDpMRI8xFce0OOJLBbyp743J4cT4a7OQvXEPTZgE4i', 'new full name', 'A-', 'Male', 'test@test.com', 121212, 1200, 'Dentist', 'friday,saturday,sunday,', '14:04-14:04', '2020-09-24', 'asdadasdasd', 'MBBS,FCPS,MD,MS,Mphil,'),
(9, '2006', '$2y$10$dzmcFBe9GsHQcnhrmqRrmuhl3V8ZG3866BneDvBobBKGvNKthevEC', 'sadasd dasdad', 'AB+', 'Male', 'test@test.com', 121212, 1200, 'Gastroenterologist', 'friday,saturday,sunday,', '03:34-03:34', '2020-09-18', 'asdadasdasd', 'MBBS,FCPS,MD,MS,'),
(10, '2007', '$2y$10$KHeiimceI7QIhn7nOP.ble.lHSd1mlJTA8PJgYQL8Ow0I13/MWrsq', 'sadasd dasdad', 'A-', 'Male', 'test@test.com', 121212, 2000, 'Cardiologist', 'friday,saturday,sunday,', '23:45-14:41', '2020-09-26', 'asdadasdasd', 'MBBS,FCPS,MD,'),
(11, '2008', '$2y$10$N2M.fn/uVFS41ZmC.nwx7OXV5BuCHSxyFC2jO8aiMMhLVR3lDW3uS', 'sadasd dasdad', 'B+', 'Male', 'test@test.com', 121212, 2000, 'Critical care Medicine Specialist', 'friday,saturday,sunday,', '11:42-11:42', '2020-10-03', 'asdadasdasd', 'MBBS,FCPS,MD,'),
(12, '2009', '$2y$10$DTEaMUZSGj9KuWO6PgfBIOM.Y4enZclB5ClCyHHQleW7jpln3scyW', 'sadasd dasdad', 'AB+', 'Male', 'test@test.com', 121212, 1200, 'Dentist', 'friday,saturday,sunday,monday,', '23:54-15:50', '2020-10-02', 'asdadasdasd', 'MBBS,FCPS,MD,MS,Mphil,'),
(13, '2010', '$2y$10$c5RuuhDajNkT4JlSgZE5VOkF3egstAefiF1M999xFPG6ZxWFRqQDK', 'sadasd dasdad', 'B+', 'Male', 'test@test.com', 121212, 1200, 'Ear-Nose-Throat(ENT) Specialist', 'friday,saturday,sunday,monday,', '11:56-23:59', '2020-09-25', 'asdadasdasd', 'MBBS,FCPS,MD,MS,Mphil,FRCS,'),
(14, '2011', '$2y$10$YZ03d54Y3l.prsGroKLpt.Wpn5Ef4Kf3wLmVFBjjKuHdNSuY1RAhS', 'sadasd dasdad', 'AB+', 'Male', 'test@test.com', 121212, 5000, 'Eye Specialist', 'saturday,sunday,monday,', '11:57-11:57', '2020-09-17', 'asdadasdasd', 'MBBS,FCPS,MD,MS,'),
(15, '2012', '$2y$10$kzy0R6b5c1Tgja8kNkNvn.5lSEylHG7g13nSuo8xlRWJEsBWKUe3S', 'sadasd dasdad', 'AB+', 'Male', 'test@test.com', 121212, 2000, 'Gastroenterologist', 'saturday,sunday,monday,', '11:57-23:00', '2020-09-16', 'asdadasdasd', 'MBBS,FCPS,MD,MS,'),
(16, '2013', '$2y$10$oeWuJghKJWd7vD7lwR6Ox.o7MGJ1h/I1gVqqYnIAYjrAEalX31nN2', 'sadasd dasdad', 'A+', 'Male', 'test@test.com', 121212, 2000, 'Dermatologist', 'monday,tuesday,wednesday,thursday,', '11:58-11:58', '2020-09-23', 'asdadasdasd', 'MBBS,FCPS,MD,MS,Mphil,'),
(17, '2014', '$2y$10$mq0odFWxnGpX0S/598/DsO2YNz0NMG6xltxnXFfNk9.B0MNM52XUm', 'sadasd dasdad', 'AB-', 'Male', 'test@test.com', 121212, 200, 'Medicine', 'sunday,monday,tuesday,wednesday,', '23:01-15:58', '2020-09-25', 'asdadasdasd', 'MBBS,FCPS,MD,MS,'),
(18, '2015', '$2y$10$ucsl4AXGpnEOD.3flG7alukLJqS/NMB02yLxpi7uxvG4Pseek08iW', 'sadasd dasdad', 'A+', 'Male', 'test@test.com', 121212, 2000, 'Ophthalmologist', 'saturday,sunday,monday,', '11:59-23:04', '2020-09-10', 'asdadasdasd', 'MBBS,FCPS,MD,MS,'),
(19, '2016', '$2y$10$A3zhXfDeeleIbmUBSgo/h.p/ZPO7xKboqAU5R42ahUaGjyxv6A3Xy', 'sadasd dasdad', 'AB-', 'Male', 'test@test.com', 121212, 1200, 'Obstetrician/gynecologist', 'friday,saturday,sunday,monday,', '12:00-12:00', '2020-09-26', 'asdadasdasd', 'MBBS,FCPS,MD,MS,'),
(20, '2017', '$2y$10$atlVybKUH.TjNZBKfggh8eWdoetZgRZaH0B0Jr/veDZP6booXLJbS', 'sadasd dasdad', 'A+', 'Male', 'test@test.com', 121212, 1000, 'Neurologist', 'friday,saturday,sunday,monday,', '12:07-00:11', '2020-09-18', 'asdadasdasd', 'MBBS,FCPS,MD,MS,'),
(21, '2018', '$2y$10$OKm420dVS8FRHJ3qYLBio.yN8fRqY5HbUP1cOwtcpT9rOSQkNrRz2', 'sadasd dasdad', 'A+', 'Male', 'test@test.com', 121212, 300, 'Anesthesiologist', 'friday,saturday,sunday,monday,', '12:07-15:11', '2020-09-13', 'asdadasdasd', 'MBBS,FCPS,MD,MS,Mphil,FRCS,'),
(22, '2019', '$2y$10$1.BXF6ktMbHDcz6.NsIR8.pA.1OJ8MV5lNrLl5lnrfJnVR/zpRwL6', 'sadasd dasdad', 'A+', 'Male', 'test@test.com', 121212, 400, 'Allergists/Immunologist', 'sunday,monday,', '12:08-17:13', '2020-09-13', 'asdadasdasd', 'MBBS,FCPS,MD,'),
(23, '2020', '$2y$10$3NnqSYI.yXjqJZQB78djyuyy5kRKoCOQawtN4Mk/FUKVJ0wOumfd2', 'fllname', 'A+', 'Male', 'test@test.com', 123, 100, 'Gastroenterologist', 'friday,saturday,sunday,', '02:11-07:16', '2020-09-17', 'address', 'MBBS,FCPS,MD,MS,');

-- --------------------------------------------------------

--
-- Table structure for table `lab_staff_info`
--

CREATE TABLE `lab_staff_info` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(100) NOT NULL,
  `blood_group` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_staff_info`
--

INSERT INTO `lab_staff_info` (`id`, `userid`, `password`, `fullname`, `gender`, `address`, `email`, `phone`, `blood_group`, `dob`, `specialty`) VALUES
(2, '6002', '$2y$10$XjIIaKGFz5Lpi7qFnRU5O.KTbehzoa5v23AT995xVFnYQ8KgBl/Om', 'new name', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'ab-', '2020-08-19', 'Imaging'),
(3, '6003', '$2y$10$VgGL4CZd2RHCGDXVUAgg4eRYgLXAs7Ir8ozJprezdLTSAR01R8OK.', 'sadasd dasdad', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'A-', '2020-09-19', 'Pathology'),
(4, '6004', '$2y$10$E17AFRaYo7LXEGStxMp3j.KCqhfVAU.YgXNtjg9BIg.Fe7Idopgne', 'sadasd dasdad', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'AB+', '2020-09-19', 'Imaging');

-- --------------------------------------------------------

--
-- Table structure for table `lab_test_info`
--

CREATE TABLE `lab_test_info` (
  `id` int(100) NOT NULL,
  `test_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(50) NOT NULL,
  `days` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_test_info`
--

INSERT INTO `lab_test_info` (`id`, `test_name`, `test_type`, `price`, `days`, `time`, `status`) VALUES
(1, 'Blood Test', 'Pathology', 600, 'Everyday', '13:18-17:22', 'Available'),
(2, 'Urine Test', 'Pathology', 1000, 'Everyday', '13:18-19:24', 'Available'),
(3, 'Stool Test', 'Pathology', 1200, 'Everyday', '01:18-19:23', 'Available'),
(4, 'X-Ray', 'Imaging', 1000, 'Everyday', '13:21-18:26', 'Available'),
(5, 'Computed Tomography (CT) Scans', 'Imaging', 1500, 'Everyday', '13:22-19:28', 'Available'),
(7, 'Magnetic Resonance Imaging (MRI)', 'Imaging', 1200, 'Everyday', '13:26-19:32', 'Available'),
(8, 'Ultrasonography', 'Imaging', 1200, 'Everyday', '13:27-19:33', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `management_info`
--

CREATE TABLE `management_info` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management_info`
--

INSERT INTO `management_info` (`id`, `userid`, `password`, `fullname`, `gender`, `address`, `email`, `phone`, `blood_group`, `dob`) VALUES
(1, '4001', '$2y$10$LIE3E97H9KlLsi3rXI1Y8ezlnTlRtuOWD0RiACf3g7fKbLhKi1b9m', 'new', 'Male', 'new add', 'test@test.com', 123546565, 'b+', '2020-08-08'),
(2, '4002', '$2y$10$mLjDw8rg9UH62JFJ4vZ5qeZ4dD//dMjFLVa9EjpXMQ4/4H96uuhK6', 'sadasd dasdad', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'AB+', '2020-09-19'),
(3, '4003', '$2y$10$ndQ9/Up3aA7xtnMDRETsJ..HGFpZlwuAPA9Ts7ToPzcmW7EO1kVdW', 'sadasd dasdad', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'AB+', '2020-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `nurse_info`
--

CREATE TABLE `nurse_info` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(100) NOT NULL,
  `blood_group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nurse_info`
--

INSERT INTO `nurse_info` (`id`, `userid`, `password`, `fullname`, `gender`, `address`, `email`, `phone`, `blood_group`, `dob`) VALUES
(6, '3002', '$2y$10$eQAYqJ/L6Zwt4ooVhDk0ZOd0E/0GO66XYkkrWoxMBjFWG5wFfaZD6', 'nn', 'Female', 'asdadasdasd', 'test@test.com', 5555, 'ab+', '2020-08-08'),
(9, '3004', '$2y$10$ALGM22UBpdcywwtpoiWRie2HpqRE6JpLcV4iny2iswLWetx4kvsmK', 'dhadksahd', 'Male', 'new address', 'yeah@test.com', 1233421212, 'b-', '2020-08-08'),
(10, '3005', '$2y$10$nU/jP8X4bdyrS1Ho.sXrJeR2.8NmvYh9pg5hrX2vIG6/AXSdVLm5W', 'new name', 'Female', 'asdadasdasd', 'test@test.com', 121212, 'ab+', '2020-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allergy` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`id`, `userid`, `fullname`, `password`, `email`, `phone`, `dob`, `blood_group`, `gender`, `allergy`, `address`) VALUES
(3, '1001', 'sadasd dasdad', '$2y$10$0tzs1tE.mrkUwo1i5j1t2eD5CP5WME.y2U9xJTNksZ33pDr/h98oK', 'test@test.com', '121212', '2020-08-08', 'a+', 'male', 'Atopic Eczema', 'asdadasdasd'),
(4, '1002', 'sadasd dasdad', '$2y$10$0tzs1tE.mrkUwo1i5j1t2eD5CP5WME.y2U9xJTNksZ33pDr/h98oK', 'test@test.com', '121212', '2020-08-08', 'a-', 'male', 'Atopic Eczema', 'asdadasdasd'),
(5, '1003', 'test', '$2y$10$0tzs1tE.mrkUwo1i5j1t2eD5CP5WME.y2U9xJTNksZ33pDr/h98oK', 'test@test.com', '121212', '2020-08-06', 'a-', 'male', 'Rhinitis', 'asdadasdasd'),
(6, '1004', 'sadasd dasdad', '$2y$10$0tzs1tE.mrkUwo1i5j1t2eD5CP5WME.y2U9xJTNksZ33pDr/h98oK', 'test@test.com', '121212', '2020-08-15', 'b+', 'male', 'Atopic Eczema', 'asdadasdasd'),
(10, '1005', 'sadasd dasdad', '$2y$10$0tzs1tE.mrkUwo1i5j1t2eD5CP5WME.y2U9xJTNksZ33pDr/h98oK', 'test@test.com', '121212', '2020-08-18', 'ab+', 'Male', 'Drug Allergy', 'asdadasdasd'),
(22, '1006', 'sadasd dasdad', '$2y$10$0tzs1tE.mrkUwo1i5j1t2eD5CP5WME.y2U9xJTNksZ33pDr/h98oK', 'test@test.com', '121212', '2020-09-19', 'O+', 'male', 'Food Allergy and Food Intolerance', 'asdadasdasd'),
(25, '1007', 'sadasd dasdad', '$2y$10$6g3Z5mnlzuCwDcw4PGnhHef1gcXbmqaPxt.ra1F8lswuz6HT6jMle', 'test@test.com', '121212', '2000-07-12', 'a-', 'Male', 'Asthma', 'asdadasdasd'),
(26, '1008', 'nnnn', '$2y$10$9lTBdi4yHok6.s/SSMItFuLlhado9jYN2xzTM850mhBareKhe4ojC', 'test@test.com', '0123456789', '2020-09-17', 'a-', 'Male', 'Atopic Eczema', 'adsddasd'),
(27, '1009', 'smthng', '$2y$10$YAD4TJg/SXLRfUdQnHnXVOWEL.EWGqfI2LaKRyTuvEf5/qyj/nvhe', 'test@test.com', '1234566', '2020-09-22', 'b-', 'Male', 'Drug Allergy', 'adress'),
(28, '1010', 'new', '$2y$10$choPhD2Eu3Lj5UoTRd.jzuxopFAheQezVwjyJiljJgiZloXjbED0a', 'test@test.com', '123456', '2020-10-02', 'b+', 'Male', 'Atopic Eczema', 'new add'),
(29, '1011', 'test', '$2y$10$VuSK7ZpEKnpjL.nG8pgN5enrPdhQxvojnGvs6q8DoTKm6ptKs5acG', 'test@test.com', '123', '2020-09-15', 'a-', 'Male', 'Atopic Eczema', 'adsddasd'),
(30, '1012', 'asads', '$2y$10$t99R2ixn3lSGhmHWhBJPwO2swu8x/FOfJFfwXuwcBCSlMK8aIQlTu', 'test@test.com', '121212', '2020-09-16', 'a-', 'Female', 'Atopic Eczema', 'adsddasd'),
(31, '1013', 'sadasd dasdad', '$2y$10$PdjX/QWuGtausIMQmWV6s.n3zVgo9tE/zIxI6zawm0vYEr1k/BwS.', 'test@test.com', '121212', '1995-07-17', 'a-', 'Male', 'Atopic Eczema', 'asdadasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `physio_therapist_info`
--

CREATE TABLE `physio_therapist_info` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `blood_group` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `therapy_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `physio_therapist_info`
--

INSERT INTO `physio_therapist_info` (`id`, `userid`, `password`, `fullname`, `gender`, `address`, `email`, `phone`, `blood_group`, `dob`, `therapy_type`) VALUES
(1, 8001, '$2y$10$oyuoCC16U.K5iGlQCRWQXu6CfEsTh3awOGY/vzvcKVMKpCquKJYOi', 'ny', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'AB-', '2020-09-14', 'Geriatric Physical Therapy'),
(2, 8002, '$2y$10$hGijl3KONJT9arMkG4sSNe1iHC/C9aHlJqWprwyBljx6uUI7X46DK', 'sadasd dasdad', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'AB+', '2020-09-26', 'Sports Physical Therapy'),
(4, 8004, '$2y$10$XBZvkmZkTriwyT7Yz5L8wuQr5.ZDXZdgC4ZdyA6iwK5OFDG/G7se.', 'sadasd dasdad', 'Male', 'asdadasdasd', 'test@test.com', 121212, 'AB+', '2020-09-12', 'Geriatric Physical Therapy'),
(5, 8005, '$2y$10$xVLNV/nY5C9DpQ58LAy25.h0wJMrK4DAYaytg.jDTr9rV9mwvCSg.', 'asads', 'Male', 'adsddasd', 'test@test.com', 123456789, 'B-', '2020-09-26', 'Geriatric Physical Therapy');

-- --------------------------------------------------------

--
-- Table structure for table `physio_therapy_info`
--

CREATE TABLE `physio_therapy_info` (
  `id` int(100) NOT NULL,
  `therapy_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fees` int(100) NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `physio_therapy_info`
--

INSERT INTO `physio_therapy_info` (`id`, `therapy_name`, `days`, `time`, `fees`, `status`) VALUES
(1, 'Pediatric Physiotherapy', 'friday,saturday,sunday,monday,', '15:00-16:00', 1200, 'Available'),
(2, 'Geriatric Physiotherapy', 'saturday,sunday,monday,', '14:00-18:00', 4000, 'Available'),
(3, 'Neurological Physiotherapy', 'tuesday,wednesday,', '14:00-17:00', 4000, 'Available'),
(4, 'Cardiorespiratory/pulmonary/vascular Physiotherapy', 'sunday,monday,tuesday,wednesday,', '14:00-17:00', 1200, 'Available'),
(5, 'Musculoskeletal Physiotherapy', 'tuesday,wednesday,thursday,', '14:00-19:00', 2000, 'Available'),
(6, 'Rehabilitation and Pain Management', 'sunday,monday,tuesday,', '15:01-17:01', 3000, 'Available'),
(7, 'Sports Physiotherapy', 'sunday,monday,tuesday,', '14:01-17:01', 3000, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(255) NOT NULL,
  `downloads` int(255) NOT NULL,
  `rid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `size`, `downloads`, `rid`) VALUES
(1, 'test.pdf', 29938, 1, 1),
(2, 'test2.pdf', 29938, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `req_to_accountant`
--

CREATE TABLE `req_to_accountant` (
  `id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `did` int(100) NOT NULL,
  `pname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_fees` int(100) NOT NULL,
  `day` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_number` int(20) NOT NULL,
  `trx_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_date_time` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `req_to_accountant`
--

INSERT INTO `req_to_accountant` (`id`, `pid`, `did`, `pname`, `dname`, `specialization`, `doctor_fees`, `day`, `time`, `date`, `payment_method`, `sender_number`, `trx_id`, `status`, `comments`, `p_date_time`) VALUES
(1, 1007, 2002, 'sadasd dasdad', 'again', 'Eye Specialist', 1222, 'saturday', '20:17', '2020-09-16', 'bkash', 123456789, 'HJASD67682', 'canceled by doctor', 'done', '2020-09-07 03:29:44.000000'),
(2, 1007, 2001, 'sadasd dasdad', 'new', 'Allergists/Immunologist', 1000, 'saturday', '18:19', '2020-09-16', 'bkash', 1234567899, 'JADKJADK3242354', 'waiting', 'Something is missing', '2020-09-07 03:29:44.000000'),
(3, 1007, 2001, 'sadasd dasdad', 'new', 'Allergists/Immunologist', 1000, 'sunday', '17:29', '2020-09-16', 'nagad', 2147483647, 'J432KDAHD', 'visited', 'none', '2020-09-07 03:29:44.000000'),
(4, 1007, 2001, 'sadasd dasdad', 'new', 'Allergists/Immunologist', 1000, 'saturday', '02:31', '2020-09-16', 'bkash', 123456789, 'HJASD67682', 'waiting', 'none', '2020-09-12 14:31:55.000000'),
(5, 1007, 2001, 'sadasd dasdad', 'newnname', 'Allergists/Immunologist', 1000, 'saturday', '21:36', '2020-09-17', 'bkash', 12345699, 'HJASD67682', 'waiting', 'none', '2020-09-12 18:36:27.000000'),
(6, 1001, 2001, 'sadasd dasdad', 'newnname', 'Allergists/Immunologist', 1000, 'sunday', '10:23', '2020-09-09', 'bkash', 1233546588, 'HJASD67682', 'confirmed', 'none', '2020-09-22 19:21:44.000000');

-- --------------------------------------------------------

--
-- Table structure for table `req_to_accountant_test`
--

CREATE TABLE `req_to_accountant_test` (
  `id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `tid` int(100) NOT NULL,
  `pname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(50) NOT NULL,
  `day` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `date` date DEFAULT NULL,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_number` int(30) NOT NULL,
  `trx_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_date_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `req_to_accountant_test`
--

INSERT INTO `req_to_accountant_test` (`id`, `pid`, `tid`, `pname`, `tname`, `price`, `day`, `time`, `date`, `payment_method`, `sender_number`, `trx_id`, `status`, `comments`, `p_date_time`) VALUES
(1, 1007, 1, 'sadasd dasdad', 'Blood Test', 500, 'saturday', '14:13:00', '2020-09-16', 'bkash', 123456789, 'HJASD67682', 'tested', 'donee', '2020-09-11 02:24:24.000000'),
(2, 1007, 8, 'sadasd dasdad', 'Ultrasonography', 1200, 'saturday', '03:50:00', '2020-09-16', 'bkash', 123456789, 'HJASD67682', 'waiting', 'none', '2020-09-12 15:50:17.000000'),
(3, 1008, 4, 'nnnn', 'X-Ray', 1000, 'saturday', '08:36:00', '2020-09-11', 'bkash', 123445555, 'HJASD67682', 'tested', 'none', '2020-09-13 20:37:01.000000');

-- --------------------------------------------------------

--
-- Table structure for table `req_to_accountant_therapy`
--

CREATE TABLE `req_to_accountant_therapy` (
  `id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `tid` int(100) NOT NULL,
  `pname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(100) NOT NULL,
  `day` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trx_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_date_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `req_to_accountant_therapy`
--

INSERT INTO `req_to_accountant_therapy` (`id`, `pid`, `tid`, `pname`, `tname`, `price`, `day`, `time`, `date`, `payment_method`, `sender_number`, `trx_id`, `status`, `comments`, `p_date_time`) VALUES
(1, 1007, 1, 'sadasd dasdad', 'Pediatric Physiotherapy', 1200, 'friday', '15:32', '2020-09-17', 'bkash', '0123456789', 'HJASD67682', 'done', 'done', '2020-09-09 12:33:20.000000'),
(2, 1007, 1, 'sadasd dasdad', 'Pediatric Physiotherapy', 1200, 'saturday', '03:51', '2020-09-17', 'nagad', '0123456789', 'HJASD67682', 'waiting', 'none', '2020-09-12 15:51:39.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant_info`
--
ALTER TABLE `accountant_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments_nurse`
--
ALTER TABLE `appointments_nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_bank_request`
--
ALTER TABLE `blood_bank_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_bank_staff`
--
ALTER TABLE `blood_bank_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_staff_info`
--
ALTER TABLE `blood_staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_staff_info`
--
ALTER TABLE `lab_staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_test_info`
--
ALTER TABLE `lab_test_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management_info`
--
ALTER TABLE `management_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse_info`
--
ALTER TABLE `nurse_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`userid`);

--
-- Indexes for table `physio_therapist_info`
--
ALTER TABLE `physio_therapist_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physio_therapy_info`
--
ALTER TABLE `physio_therapy_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_to_accountant`
--
ALTER TABLE `req_to_accountant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_to_accountant_test`
--
ALTER TABLE `req_to_accountant_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_to_accountant_therapy`
--
ALTER TABLE `req_to_accountant_therapy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant_info`
--
ALTER TABLE `accountant_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments_nurse`
--
ALTER TABLE `appointments_nurse`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blood_bank_request`
--
ALTER TABLE `blood_bank_request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `blood_bank_staff`
--
ALTER TABLE `blood_bank_staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_staff_info`
--
ALTER TABLE `blood_staff_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lab_staff_info`
--
ALTER TABLE `lab_staff_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lab_test_info`
--
ALTER TABLE `lab_test_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `management_info`
--
ALTER TABLE `management_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nurse_info`
--
ALTER TABLE `nurse_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `physio_therapist_info`
--
ALTER TABLE `physio_therapist_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `physio_therapy_info`
--
ALTER TABLE `physio_therapy_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `req_to_accountant`
--
ALTER TABLE `req_to_accountant`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `req_to_accountant_test`
--
ALTER TABLE `req_to_accountant_test`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `req_to_accountant_therapy`
--
ALTER TABLE `req_to_accountant_therapy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
