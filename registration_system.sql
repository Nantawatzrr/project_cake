-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 10:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cakeproduct`
--

CREATE TABLE `cakeproduct` (
  `id_pd` int(11) NOT NULL,
  `name_pd` varchar(225) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cakeproduct`
--

INSERT INTO `cakeproduct` (`id_pd`, `name_pd`, `price`) VALUES
(1, 'เค้กเนยสด', 160),
(2, 'เค้กแยมผลไม้', 190),
(3, 'เค้กกาแฟ', 180),
(4, 'เค้กช็อกโกแลต', 220);

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id_rs` int(11) NOT NULL,
  `name_pd` varchar(225) NOT NULL,
  `size_pd` int(11) NOT NULL,
  `date_rs` timestamp NOT NULL DEFAULT current_timestamp(),
  `name_rs` varchar(225) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `name_rp` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id_rs`, `name_pd`, `size_pd`, `date_rs`, `name_rs`, `price`, `qty`, `name_rp`) VALUES
(1850, 'เค้กเนยสด', 2, '2023-02-26 04:32:14', 'kokok', 640, 2, '17'),
(1850, 'เค้กแยมผลไม้', 2, '2023-02-26 04:32:32', 'kokoko', 1140, 3, '17'),
(4857, 'เค้กเนยสด', 3, '2023-02-26 04:43:30', 'นันทวัฒน์ มาศวิเศษ', 960, 2, '17'),
(4857, 'เค้กกาแฟ', 3, '2023-02-26 04:43:47', 'นันทวัฒน์ มาศวิเศษ', 2700, 5, '17'),
(1517, 'เค้กเนยสด', 2, '2023-02-26 07:53:32', 'อิตติวจัง', 960, 3, '21'),
(1517, 'เค้กแยมผลไม้', 3, '2023-02-26 07:53:59', 'เฟเฟเฟเฟเฟเฟ', 1710, 3, '21'),
(1516, 'เค้กเนยสด', 3, '2023-02-26 08:36:53', '่เบนซ์', 960, 2, '22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `department` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `urole`, `created_at`, `department`, `class`) VALUES
(17, 'นันทวัฒน์ ', 'มาศวิเศษ', 'test3334@gmail.com', '$2y$10$xmwkhzjO.lrD.p8RwPJrheJrwAPRBe/LQOevZAIQL4gi0weIXgklG', 'user', '2023-02-17 13:08:31', 'เทคโนโลยีสารสนเทศ', 'ปวส.1/1'),
(18, 'พงษ์สิทธิ์', 'นาคจันทร์', 'pongsit@gmail.com', '$2y$10$Y4C9rMYRdyh45clKfJmJA.C43MYMv/x8vgksqA7Lc79nRG7.u4Au6', 'user', '2023-02-19 09:26:13', 'เทคโนโลยีสารสนเทศ', 'ปวช.1/1'),
(19, 'kung', 'kyu', 'kyu@gmail.com', '$2y$10$UEI4XwA7jVfQghN3mWImJ.gDYm/xlS/M9rRN3FF2JpTOLS.g6K8w6', 'user', '2023-02-25 17:34:45', 'การโรงเเรม', 'ปวช.3/1'),
(20, 'Test', 'Admin', 'admin@gmail.com', '$2y$10$.dMGcubg3uUE3PRWMZgLven16R.HGsqEg51YSe4ICSwY5uWAiTBfm', 'admin', '2023-02-26 04:37:09', 'การตลาด', 'ปวช.1/2'),
(21, 'ijijijijij', 'jijdadadasda', 'test1122@gmail.com', '$2y$10$bj7bh8VX2o6A1QqUl7G7J.ItViDgsPXEBg6UI6RAnNjv7UAIx5ZZi', 'user', '2023-02-26 07:48:40', 'การโรงเเรม', 'ปวช.2/2'),
(22, 'bfjbakjfbakj', 'bfkjabkjfabjka', 'test123@gmail.com', '$2y$10$y5z0soYcI1H1hdmT1Ui5XukD1DL8zAsd7sClZCO3uHrxDbCjQNxWy', 'user', '2023-02-26 08:35:02', 'ธุรกิจค้าปลีก', 'ปวช.3/2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cakeproduct`
--
ALTER TABLE `cakeproduct`
  ADD PRIMARY KEY (`id_pd`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakeproduct`
--
ALTER TABLE `cakeproduct`
  MODIFY `id_pd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
