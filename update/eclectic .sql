-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 03:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eclectic`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `ID` int(11) NOT NULL,
  `JobTitle` varchar(255) NOT NULL,
  `JobDescription` varchar(255) NOT NULL,
  `JobRequirements` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`ID`, `JobTitle`, `JobDescription`, `JobRequirements`, `Location`, `Email`, `Contact`) VALUES
(1, 'Programmer', 'Debugging ', 'Diploma in IT', 'Johannesburg ', 'information@uj.ac.za', '+27625148842'),
(3, 'Digital Marketing ', 'Promoting our services', 'Any Marketing Certification ', 'PTA', 'marketing@company.ac.za', '+27758478842'),
(4, 'Data Analyst ', 'Analyze data into info', 'Data Analysis Certificate ', 'East Side', 'analysis@gmail.com', '+27625148842'),
(5, 'Digital Marketing ', 'Debugging ', 'Diploma in IT', 'Johannesburg ', 'gradi@gmail.com', '+27625148842'),
(6, 'Designer', 'Web Designer ', 'Diploma in IT', 'Johannesburg ', 'bydesign@hotmail.com', '+27625148842'),
(7, 'Web designer', 'designs webs', 'diploma in business information technology', 'midrand', 'glassworks@gmail.com', '+27758478842');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(125) NOT NULL,
  `usersEmail` varchar(125) NOT NULL,
  `usersUser` varchar(125) NOT NULL,
  `usersPassword` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUser`, `usersPassword`) VALUES
(1, 'Wahgwan ', 'ygyjg@igb', 'Wahgwan ', '$2y$10$yl2FXwRlJD4VMLusbhFtTOTeor.ahuPoWfmiLbbsOBFEtPSxtO7hC'),
(2, 'gradi', 'gradi@gmail.com', 'gradi', '123'),
(3, 'oh', 'khblj@ig', 'oh', '654'),
(4, 'hello', 'rice@gmail.com', 'hello', '$2y$10$u5vxIwz.RosyiEzsVZOgXOQAUU1nVQIvIAhiD./OaA1gc0OjaLzca'),
(5, 'lekoG', 'leko@gmail.com', 'lekoG', '$2y$10$JrHu8aQ5/Vn0eSNf3ubKruje40vV7Iv02T.pgnkHcEnrs50GC0UcG'),
(6, 'ken05', 'ken@gmail.com', 'ken05', '$2y$10$uzVGfetJgZdKyZ.uGhitOejQbZrcr5oy24gWowa97cN/xsTjX82F2'),
(7, 'dd', 'desorickj@gmail.com', 'dd', '$2y$10$kweopQ.v3ocp6hrn.d.fx.P/lJSTvmBBVwI1UsOc/74jlbIJ0nZ8u'),
(8, 'ThoPe', 'theprodeveder@gmail.com', 'ThoPe', '$2y$10$mQ1HioSC1vQ0kLmq32khqeaT/5SwuQ5tf1hak1KYk5xDxLioUuaMu'),
(9, 'lone', 'lone@gmail.com', 'lone', '$2y$10$P55sUNxFH3ob/ACuhsb8muBBUciCmsKxx7zjHrLoOylSaPGEgkD5C'),
(10, 'lwaziepyt', 'lwaziethabethe@gmail.com', 'lwaziepyt', '$2y$10$uMKzbZzA0h/n9GCDsfQR9O4LiiEiWPNxJjmyOMKz3STLrEQIwZp0q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
