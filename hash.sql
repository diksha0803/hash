-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 04:06 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hash`
--

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `criteria_id` int(4) NOT NULL,
  `state` int(2) NOT NULL,
  `min_age` int(2) NOT NULL DEFAULT '0',
  `max_age` int(3) NOT NULL DEFAULT '100',
  `gender` int(1) NOT NULL,
  `need_bpl` int(1) NOT NULL,
  `cancer_patient` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`criteria_id`, `state`, `min_age`, `max_age`, `gender`, `need_bpl`, `cancer_patient`) VALUES
(1, 2, 19, 100, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `scheme_id` int(4) NOT NULL,
  `sheme_name` varchar(100) NOT NULL,
  `criteria_id` int(4) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `eligiblity` varchar(1000) NOT NULL,
  `websites` varchar(1000) NOT NULL,
  `benefits` varchar(1000) NOT NULL,
  `add_info` int(250) NOT NULL,
  `how_to_apply` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`scheme_id`, `sheme_name`, `criteria_id`, `description`, `eligiblity`, `websites`, `benefits`, `add_info`, `how_to_apply`) VALUES
(1, 'JANANI SURAKSHA YOJANA (JSY) ', 1, 'The scheme focuses on the poor pregnant woman with special dispensation for states having low institutional delivery rates namely the states of Uttar Pradesh, Uttaranchal, Bihar, Jharkhand, Madhya Pradesh, Chhattisgarh, Assam, Rajasthan, Orissa and Jammu and Kashmir. While these states have been named as Low Performing States (LPS), the remaining states have been named as High performing States \\r\\n(HPS).\\r\\n', '1. All pregnant women delivering in Government health centres like Sub-centre, PHC/CHC/ FRU / general wards of District and state Hospitals or accredited private institutions HPS States.\\r\\n\\r\\n2. BPL pregnant women, aged 19 years and above.\\r\\n\\r\\n3.All  SC  and  ST  women delivering  in  a  government  health centre  like  Sub-centre,  PHC/CHC/  FRU  /  general  ward\\r\\nof District and state Hospitals or accredited private institutions ', 'http://ayushmanbharat.net/wp-content/uploads/2018/02/JSR.pdf', 'Mothers in Rural Areas from LPS will be provided a package of Rs.1400 and for HPS it is Rs.700.\\r\\n\\r\\nIn Urban Areas, Mothers from LPS will be provided a package of Rs.1000 and for HPS it is Rs.600.', 0, 'Mother who fullfill above criteria can contact with their local ASHA.\\r\\n\\r\\nThe Yojana has identified ASHA, the accredited social health activist as an effective link between the Government and the poor pregnant women in l0 low performing states, namely the 8 EAG states and Assam and J&K and the remaining NE States. In ot\\r\\nher eligible states and UTs, wherever,AWW and TBAs or ASHA like activist has been engaged in this purpose, she can be associated with this Yojana for providing the services. ');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_id` int(11) NOT NULL,
  `emobile` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` int(1) NOT NULL,
  `bpl` int(1) NOT NULL,
  `bday` date NOT NULL,
  `state` int(2) NOT NULL,
  `cancer` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `emobile`, `username`, `password`, `gender`, `bpl`, `bday`, `state`, `cancer`) VALUES
(796615, 'iitnmitesh@gmail.com', 'Mitesh Kumar', '5147769afd', 0, 0, '0000-00-00', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
