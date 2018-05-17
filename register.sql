-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 06:42 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `sellform`
--

CREATE TABLE `sellform` (
  `selllD` int(11) NOT NULL,
  `ownername` varchar(50) NOT NULL,
  `mobileno` bigint(20) NOT NULL,
  `district` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `animaltype` varchar(40) NOT NULL,
  `breed` varchar(30) NOT NULL,
  `animalage` varchar(30) NOT NULL,
  `animalno` int(21) NOT NULL,
  `price` varchar(40) NOT NULL,
  `givingmilk` varchar(40) NOT NULL,
  `milkperday` int(21) NOT NULL,
  `uploadimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellform`
--

INSERT INTO `sellform` (`selllD`, `ownername`, `mobileno`, `district`, `village`, `animaltype`, `breed`, `animalage`, `animalno`, `price`, `givingmilk`, `milkperday`, `uploadimage`) VALUES
(34, 'misty', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Goat', 'dogli', '2 year', 4, '18000', 'No', 2, 'screenshot-pashubazar.telangana.gov.in-2017-10-29-07-51-39.png'),
(35, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Goat', 'dogli', '2 year', 4, '18000', 'No', 2, 'cancellation.png'),
(36, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Goat', 'dogli', '2 year', 4, '18000', 'No', 2, 'cancellation.png'),
(37, '', 0, '', '', '', '', '', 0, '', '', 0, ''),
(38, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Cow', 'dogli', '2 year', 2, '18000', 'Yes', 4, 'sell.png'),
(39, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Cow', 'dogli', '2 year', 2, '18000', 'Yes', 4, 'sell.png'),
(40, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Cow', 'dogli', '2 year', 2, '18000', 'Yes', 4, 'sell.png'),
(41, '', 0, '', '', '', '', '', 0, '', '', 0, ''),
(42, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Cow', 'dogli', '2 year', 2, '18000', 'Yes', 4, ''),
(43, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Cow', 'dogli', '2 year', 2, '18000', 'Yes', 4, 'ud resume.docx'),
(44, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Cow', 'dogli', '2 year', 2, '18000', 'Yes', 4, 'ud resume.docx'),
(45, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Cow', 'dogli', '2 year', 2, '18000', 'Yes', 4, 'buddha.jpg'),
(46, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Cow', 'dogli', '2 year', 2, '18000', 'Yes', 4, 'screenshot-netbanking.netpnb.com-2017-08-22-14-21-54 (1).png'),
(47, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Cow', 'dogli', '2 year', 2, '18000', 'Yes', 4, 'screenshot-netbanking.netpnb.com-2017-08-22-14-21-54 (1).png'),
(48, 'kitu', 8821995774, 'JEHANABAD', 'MAHABALIPUR', 'Cow', 'dogli', '2 year', 2, '18000', 'Yes', 4, 'screenshot-netbanking.netpnb.com-2017-08-22-14-21-54 (1).png'),
(67, 'sapneel saurabha', 7, 'JEHANABAD', 'g', 'Puppies', 'u', '2', 1, '1234545', 'No', 0, 'mahadev (1).jpg'),
(68, ' ', 3, ' ', ' ', '', ' ', '  ', 1, ' ', 'No', 0, ''),
(69, ' ', 4, ' ', ' ', '', ' ', ' ', 1, ' ', 'No', 0, 'cancellation.png'),
(70, ' ', 4, ' ', ' ', '', ' ', ' ', 1, ' ', 'No', 0, 'cancellation.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(4, 'sapneel', 'sapneel8294@gmail.com', '451835994569b7a5be2888e26e71e446', '2017-11-09 17:16:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sellform`
--
ALTER TABLE `sellform`
  ADD PRIMARY KEY (`selllD`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellform`
--
ALTER TABLE `sellform`
  MODIFY `selllD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
