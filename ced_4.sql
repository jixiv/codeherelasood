-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 12:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ced_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_tb`
--

CREATE TABLE `lecturer_tb` (
  `lec_number` varchar(12) NOT NULL,
  `lec_fullname` varchar(100) NOT NULL,
  `lec_faculty` varchar(100) DEFAULT NULL,
  `lec_department` varchar(100) DEFAULT NULL,
  `pic_lecturer` varchar(200) DEFAULT NULL,
  `member_id` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lecturer_tb`
--

INSERT INTO `lecturer_tb` (`lec_number`, `lec_fullname`, `lec_faculty`, `lec_department`, `pic_lecturer`, `member_id`) VALUES
('001', 'อ.ภาณุพงศ์ บุญรมย์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '1'),
('002', 'อ.พิทักษ์ สุรินทร์วัฒนกุล', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '1'),
('003', 'อ.อรรถพร วรรณทอง', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '1'),
('004', 'อ.อุดมเดช ทาระหอม', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `login_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `member_id` enum('1','2') NOT NULL,
  `number` varchar(12) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `faculty` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`login_id`, `username`, `password`, `member_id`, `number`, `fullname`, `faculty`, `department`) VALUES
(1, '64121130201', '123456', '2', '64121130201', 'จักริน จันทะรัตน์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(2, '64121130202', '123456', '2', '64121130202', 'จีระศักดิ์ ศรีภักดี', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(3, '64121130203', '123456', '2', '64121130203', 'เจริญชัย สายแวว', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(4, '64121130204', '123456', '2', '64121130204', 'เจษฎา จันทร์ที', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(5, '64121130205', '123456', '2', '64121130205', 'ณฐพร รักษ์แก่นทน', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(6, '64121130206', '123456', '2', '64121130206', 'ธรรณธร จำปาหอม', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(7, '64121130207', '123456', '2', '64121130207', 'ปริญญา พิมพกรรณ์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(8, '64121130208', '123456', '2', '64121130208', 'ปุรชัย สาธร', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(9, '64121130209', '123456', '2', '64121130209', 'พงษ์เชษฐ์ ชัยแก้ว', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(10, '64121130210', '123456', '2', '64121130210', 'ภานุพงศ์ แสนนาม', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(11, '64121130211', '123456', '2', '64121130211', 'วัชรพงศ์ ดอกกุลบุตร', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(12, '64121130212', '123456', '2', '64121130212', 'ศิวกร มีศิลป์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(13, '64121130213', '123456', '2', '64121130213', 'ศิวกร สีหาบุตร', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(14, '64121130214', '123456', '2', '64121130214', 'จันทร์จิรา สุวรรณกูฎ', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(15, '64121130215', '123456', '2', '64121130215', 'ชญาดา วาฤทธิ์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(16, '64121130216', '123456', '2', '64121130216', 'ชญานุช ศรีคำ', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(17, '64121130217', '123456', '2', '64121130217', 'ณัฎฐณิชา เล็งสุวรรณ', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(18, '64121130218', '123456', '2', '64121130218', 'ณัฐนิชา วารีพัฒน์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(19, '64121130219', '123456', '2', '64121130219', 'ณัฐพร แสงสว่าง', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(20, '64121130222', '123456', '2', '64121130222', 'เบญจมาศ แสงนิล', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(21, '64121130223', '123456', '2', '64121130223', 'เบญจวรรณ แสงนิล', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(22, '64121130224', '123456', '2', '64121130224', 'ปัทมพร อรอินทร์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(23, '64121130225', '123456', '2', '64121130225', 'ปัทมาวรรณ์ สพสิงห์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(24, '64121130226', '123456', '2', '64121130226', 'ปัทมาสน์ ผลพุฒ', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(25, '64121130227', '123456', '2', '64121130227', 'พัชริดา เทพวงศ์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(26, '64121130228', '123456', '2', '64121130228', 'ลลิตา ปุยทอง', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(27, '64121130229', '123456', '2', '64121130229', 'สุปรียา แก้วพรม ', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(28, 'T_jib', '123456', '1', '001', 'อ.ภาณุพงศ์ บุญรมย์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(29, 'T_eakky', '123456', '1', '002', 'อ.พิทักษ์ สุรินทร์วัฒนกุล', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา'),
(30, 'T_pong', '123456', '1', '003', 'อ.อรรถพร วรรณทอง', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา');

-- --------------------------------------------------------

--
-- Table structure for table `member_tb`
--

CREATE TABLE `member_tb` (
  `member_id` enum('1','2') NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_tb`
--

INSERT INTO `member_tb` (`member_id`, `status`) VALUES
('1', 'lecturer'),
('2', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `report_work_tb`
--

CREATE TABLE `report_work_tb` (
  `report_id` int(10) NOT NULL,
  `work_id` int(10) DEFAULT NULL,
  `std_number` varchar(12) DEFAULT NULL,
  `lec_number` varchar(12) DEFAULT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_work_tb`
--

INSERT INTO `report_work_tb` (`report_id`, `work_id`, `std_number`, `lec_number`, `date_save`) VALUES
(1, 1, '64121130215', '001', '2022-11-14 19:36:12'),
(2, 1, '64121130228', '001', '2022-11-14 19:36:12'),
(3, 1, '64121130229', '001', '2022-11-14 19:36:12'),
(4, 1, '64121130201', '001', '2022-12-21 05:29:14'),
(5, 2, '64121130201', '001', '2022-12-21 05:30:00'),
(6, 1, '64121130205', '001', '2022-12-21 06:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `student_tb`
--

CREATE TABLE `student_tb` (
  `std_number` varchar(12) NOT NULL,
  `std_fullname` varchar(100) NOT NULL,
  `std_faculty` varchar(100) DEFAULT NULL,
  `std_department` varchar(100) DEFAULT NULL,
  `pic_student` varchar(200) DEFAULT NULL,
  `member_id` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_tb`
--

INSERT INTO `student_tb` (`std_number`, `std_fullname`, `std_faculty`, `std_department`, `pic_student`, `member_id`) VALUES
('64121130201', 'จักริน จันทะรัตน์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130202', 'จีระศักดิ์ ศรีภักดี', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130203', 'เจริญชัย สายแวว', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130204', 'เจษฎา จันทร์ที', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130205', 'ณฐพร รักษ์แก่นทน', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130206', 'ธรรณธร จำปาหอม', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130207', 'ปริญญา พิมพกรรณ์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130208', 'ปุรชัย สาธร', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130209', 'พงษ์เชษฐ์ ชัยแก้ว', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130210', 'ภานุพงศ์ แสนนาม', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130211', 'วัชรพงศ์ ดอกกุลบุตร', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130212', 'ศิวกร มีศิลป์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130213', 'ศิวกร สีหาบุตร', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130214', 'จันทร์จิรา สุวรรณกูฎ', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130215', 'ชญาดา วาฤทธิ์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130216', 'ชญานุช ศรีคำ', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130217', 'ณัฎฐณิชา เล็งสุวรรณ', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130218', 'ณัฐนิชา วารีพัฒน์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130219', 'ณัฐพร แสงสว่าง', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130222', 'เบญจมาศ แสงนิล', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130223', 'เบญจวรรณ แสงนิล', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130224', 'ปัทมพร อรอินทร์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130225', 'ปัทมาวรรณ์ สพสิงห์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130226', 'ปัทมาสน์ ผลพุฒ', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130227', 'พัชริดา เทพวงศ์', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130228', 'ลลิตา ปุยทอง', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2'),
('64121130229', 'สุปรียา แก้วพรม ', 'ครุศาสตร์', 'คอมพิวเตอร์ศึกษา', NULL, '2');

-- --------------------------------------------------------

--
-- Table structure for table `work_tb`
--

CREATE TABLE `work_tb` (
  `work_id` int(10) NOT NULL,
  `work_name` varchar(100) DEFAULT NULL,
  `lec_fullname` varchar(100) NOT NULL,
  `work_term` varchar(100) DEFAULT NULL,
  `work_location` varchar(100) DEFAULT NULL,
  `work_date` date DEFAULT NULL,
  `work_hour` int(2) DEFAULT NULL,
  `work_detail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_tb`
--

INSERT INTO `work_tb` (`work_id`, `work_name`, `lec_fullname`, `work_term`, `work_location`, `work_date`, `work_hour`, `work_detail`) VALUES
(1, 'บูมบาย่า', 'อ.ภาณุพงศ์ บุญรมย์', '1/2564', 'คณะครุศาสตร์', '2022-11-11', 4, 'มะแงว'),
(2, 'กิจกรรมไรสักอย่าง', 'อ.อรรถพร วรรณทอง', '1/2565', 'คณะครุศาสตร์', '2022-11-15', 4, 'วดฟ'),
(5, 'กิจกรรมไรสักอย่าง', 'อ.ภาณุพงศ์ บุญรมย์', '2/2565', 'คณะครุศาสตร์', '2022-12-28', 9, 'บลาๆๆๆ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecturer_tb`
--
ALTER TABLE `lecturer_tb`
  ADD PRIMARY KEY (`lec_number`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `member_tb`
--
ALTER TABLE `member_tb`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `report_work_tb`
--
ALTER TABLE `report_work_tb`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `work_id` (`work_id`),
  ADD KEY `std_number` (`std_number`),
  ADD KEY `lec_number` (`lec_number`);

--
-- Indexes for table `student_tb`
--
ALTER TABLE `student_tb`
  ADD PRIMARY KEY (`std_number`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `work_tb`
--
ALTER TABLE `work_tb`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `report_work_tb`
--
ALTER TABLE `report_work_tb`
  MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `work_tb`
--
ALTER TABLE `work_tb`
  MODIFY `work_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecturer_tb`
--
ALTER TABLE `lecturer_tb`
  ADD CONSTRAINT `lecturer_tb_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member_tb` (`member_id`);

--
-- Constraints for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD CONSTRAINT `login_tb_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member_tb` (`member_id`);

--
-- Constraints for table `report_work_tb`
--
ALTER TABLE `report_work_tb`
  ADD CONSTRAINT `report_work_tb_ibfk_1` FOREIGN KEY (`work_id`) REFERENCES `work_tb` (`work_id`),
  ADD CONSTRAINT `report_work_tb_ibfk_2` FOREIGN KEY (`std_number`) REFERENCES `student_tb` (`std_number`),
  ADD CONSTRAINT `report_work_tb_ibfk_3` FOREIGN KEY (`lec_number`) REFERENCES `lecturer_tb` (`lec_number`);

--
-- Constraints for table `student_tb`
--
ALTER TABLE `student_tb`
  ADD CONSTRAINT `student_tb_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member_tb` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
