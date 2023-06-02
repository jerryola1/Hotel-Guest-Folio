-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2023 at 03:05 PM
-- Server version: 5.7.39-42-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db3yhfhgjwokrx`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(15) NOT NULL,
  `arrival_date` date NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `resident_address` varchar(255) NOT NULL,
  `state` varchar(30) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `departure_date` date NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `vehicle_number` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `room_number` varchar(15) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `passport_number` varchar(30) NOT NULL,
  `place_issue` varchar(30) NOT NULL,
  `visa` varchar(50) NOT NULL,
  `coming_from` varchar(50) NOT NULL,
  `going_to` varchar(50) NOT NULL,
  `next_Of_Kin` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `nok_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `arrival_date`, `full_name`, `resident_address`, `state`, `phone_number`, `company_name`, `departure_date`, `occupation`, `vehicle_number`, `email`, `room_number`, `nationality`, `passport_number`, `place_issue`, `visa`, `coming_from`, `going_to`, `next_Of_Kin`, `payment`, `nok_number`) VALUES
(1, '2022-09-27', 'Korrect Technologies', '', 'FCT', '8163551780', '', '2022-09-29', 'jrjr', '99292', 'fff@gmail.com', '55', '005050', '05050', 'kur', 'p4pp4', 'jg', ';pp', '', '', ''),
(2, '2022-09-27', 'Korrect Technologies', '', 'FCT', '8163551780', '', '2022-09-29', 'jrjr', '99292', 'fff@gmail.com', '55', '005050', '05050', 'kur', 'p4pp4', 'jg', ';pp', '', '', ''),
(3, '2022-09-27', 'Korrect Technologies', '', 'FCT', '8163551780', '', '2022-09-29', 'jrjr', '99292', 'fff@gmail.com', '55', '005050', '05050', 'kur', 'p4pp4', 'jg', ';pp', '', '', ''),
(4, '2022-09-27', 'Korrect Technologies', 'Chief Okon Street', 'FCT', '8163551780', '4012 coronet lane', '2022-09-28', 'Student', '577', 'olagunjujeremiah@gmail.com', 'room306', 'nigerian', '99447382', 'Abuja', '49400499', 'Lagos', 'Osun', '', '', ''),
(5, '2022-09-27', 'Olagunju Abayomi ', 'Kubwa, abuja', 'Osun', '08163551780', 'Korrect ', '2022-09-28', 'Student', '577', 'olagunjujeremiah@gmail.com', '333', 'Ghanaian ', '183', 'Kubwa', 'Qwerty', 'Kano', 'Kaduna', '', '', ''),
(6, '2022-09-27', 'Korrect Technologies', 'Chief Okon Street', 'FCT', '8163551780', '4012 coronet lane', '2022-09-28', 'Student', 'BDG577FD', 'olagunjujeremiah@gmail.com', 'room306', 'nigerian', '99447382', 'Abuja', '49400499', 'Lagos', 'Osun', '', '', ''),
(7, '2022-09-27', 'Korrect Technologies', 'Chief Okon Street', 'FCT', '8163551780', '4012 coronet lane', '2022-09-28', 'Student', 'BDG577FD', 'olagunjujeremiah@gmail.com', 'room306', 'nigerian', '99447382', 'Abuja', '49400499', 'Lagos', 'Osun', '', '', ''),
(8, '2022-09-27', 'Olagunju Jerry', ' Apo abuja', 'FCT', '08163551780', 'Korrect ', '2022-09-28', 'Student ', 'HGG128GV', 'olagunjujeremiah@gmail.com', '3636', 'American ', '', '', '', '', '', '', '', ''),
(9, '2022-09-27', 'Martha Fola', '                    Nasarawa', 'Gombe', '08163551780', 'Kaduna', '2022-09-30', 'Farmer', 'GAJ', 'olagunjujeremiah@gmail.com', '102', 'American', '28466', 'Abuja', 'H/H', 'Kano', 'Ondo', '', '', ''),
(10, '2022-09-14', 'Korrect Technologies', 'Chief Okon Street', 'Edo', '8163551780', '33 freemont street', '2022-09-30', 'Student', '99292', 'olagunjujeremiah@gmail.com', '988', 'nigerian', '05050', 'jos', '49400499', 'Keffi', 'London', 'Jerry', 'Cash', ''),
(11, '2022-09-14', 'Michael Bola', 'Chief Okon Street', 'Edo', '8163551780', '33 freemont street', '2022-09-30', 'Student', '99292', 'olagunjujeremiah@gmail.com', '988', 'nigerian', '05050', 'jos', '49400499', 'Keffi', 'London', 'Jerry', 'Cash', ''),
(12, '2022-09-27', 'Martha fola ', 'Sultan dasuki streetBack block, flat 1', 'Ekiti', '+2348163551780', 'Sultan dasuki street\r\nBack block, flat 1', '2022-09-30', 'Farmer', '', 'olagunjujeremiah@gmail.com', '6:11', 'Nigeria', '', 'Jos', '', 'Abuja', 'Abia', 'Jeremiah', 'Cash', ''),
(13, '2022-09-28', 'Ifeanyi George ', '                   Phase II site 1 kubwa ', 'FCT', '08066170238', 'Soul lounge event center ', '2022-09-30', 'Students ', 'Acs12355', 'ifeanyigeorge609@gmail.com', '12', 'Nigerian', '124', 'Nigeria ', 'Yes', 'Lagos', 'England ', 'Jerry ', 'Cash', ''),
(14, '2022-09-27', 'Gbenga Adeboye', 'Sultan dasuki streetBack block, flat 1', 'Cross River', '+2348163551780', 'Sultan dasuki street\r\nBack block, flat 1', '2022-09-30', 'Driver', 'Lag', 'olagunjujeremiah@gmail.com', 'Go', 'Kongo', '', '', '', 'Ajaokuta', 'Kongolese', 'John doe', 'POS', '+2348163551780');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
