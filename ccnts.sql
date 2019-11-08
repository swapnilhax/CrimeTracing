-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 06:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccnts`
--

-- --------------------------------------------------------

--
-- Table structure for table `arrested`
--

CREATE TABLE `arrested` (
  `a_id` int(25) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `a_location` varchar(25) NOT NULL,
  `a_crimetype` varchar(25) NOT NULL,
  `a_age` int(25) NOT NULL,
  `a_toa` date NOT NULL,
  `a_district` varchar(25) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arrested`
--

INSERT INTO `arrested` (`a_id`, `a_name`, `a_location`, `a_crimetype`, `a_age`, `a_toa`, `a_district`, `date`, `image`) VALUES
(24, 'Jay', 'mumbai', 'bike', 23, '2019-02-02', 'thane', '2019-06-11 05:05:05', 'Tulips.jpg'),
(26, 'khalid ', 'delhi', 'weapon Smuggler', 24, '2019-01-03', 'thane', '2019-07-05 15:52:15', 'Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(25) NOT NULL,
  `e_name` char(10) NOT NULL,
  `e_organiser` text NOT NULL,
  `e_location` varchar(10) NOT NULL,
  `e_date` date NOT NULL,
  `e_time` varchar(25) NOT NULL,
  `e_discription` varchar(25) NOT NULL,
  `e_district` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `e_name`, `e_organiser`, `e_location`, `e_date`, `e_time`, `e_discription`, `e_district`) VALUES
(1, 'new year', 'swapnil', 'delhi', '2019-06-12', '08.12AM', 'YEs', 'NCR'),
(5, 'Birthday P', 'Swapnil ', 'Delhi', '2019-02-05', '08.21am', 'Birthday Party With 1000 ', 'NCR'),
(6, 'New Year', 'Suryansh', 'Agra  stat', '2019-02-05', '08.21', 'New year party', 'Agra');

-- --------------------------------------------------------

--
-- Table structure for table `e_challan`
--

CREATE TABLE `e_challan` (
  `e_id` int(25) NOT NULL,
  `e_name` varchar(25) NOT NULL,
  `e_vehicalno` varchar(25) NOT NULL,
  `e_violation` char(10) NOT NULL,
  `e_fine` int(10) NOT NULL,
  `e_location` varchar(25) NOT NULL,
  `e_district` varchar(25) NOT NULL,
  `e_offencetime` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_challan`
--

INSERT INTO `e_challan` (`e_id`, `e_name`, `e_vehicalno`, `e_violation`, `e_fine`, `e_location`, `e_district`, `e_offencetime`, `date`) VALUES
(2, 'sunny', 'mh-02-gv-2341', 'traffic', 100, 'mumbaiu', 'thane', '00:13:45', '0000-00-00'),
(3, 'sunny', 'mh-02-gv-2341', 'traffic', 100, 'mumbaiu', 'thane', '00:13:45', '0000-00-00'),
(4, 'sunny', 'mh-02-gv-2341', 'traffic', 100, 'mumbaiu', 'thane', '00:13:45', '2019-07-10'),
(8, 'Khalid', 'jh-02-gv-2542', 'Overloadin', 9000, 'Agra', 'Agra', '13:05:00', '2019-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `f_id` int(25) NOT NULL,
  `autodate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `f_date` date NOT NULL,
  `f_time` time NOT NULL,
  `f_number` varchar(20) NOT NULL,
  `gdnumber` int(50) NOT NULL,
  `infotime` datetime NOT NULL,
  `acts` varchar(200) NOT NULL,
  `district` varchar(25) NOT NULL,
  `f_po` varchar(25) NOT NULL,
  `victimname` text NOT NULL,
  `victimaddress` varchar(25) NOT NULL,
  `victimnationality` text NOT NULL,
  `victimid` int(25) NOT NULL,
  `victimdob` date NOT NULL,
  `victimoccupation` text NOT NULL,
  `criminalname` varchar(200) NOT NULL,
  `incidenttimedate` datetime NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`f_id`, `autodate`, `f_date`, `f_time`, `f_number`, `gdnumber`, `infotime`, `acts`, `district`, `f_po`, `victimname`, `victimaddress`, `victimnationality`, `victimid`, `victimdob`, `victimoccupation`, `criminalname`, `incidenttimedate`, `content`) VALUES
(1, '2019-07-01 11:12:54', '2019-06-06', '12:02:02', 'MAHA-2019-21-2', 25541, '2019-02-02 00:00:00', 'hgjhj', 'thane', 'Borivali', 'Swapnil Talele', 'Mumbai', 'Indian', 2222, '0000-00-00', 'Student', 'hgjghjgjh', '2019-02-02 00:00:00', 'hjhjghj');

-- --------------------------------------------------------

--
-- Table structure for table `intelligence_input`
--

CREATE TABLE `intelligence_input` (
  `i_id` int(25) NOT NULL,
  `i_name` varchar(20) NOT NULL,
  `i_subject` varchar(30) NOT NULL,
  `i_district` varchar(25) NOT NULL,
  `i_detail` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intelligence_input`
--

INSERT INTO `intelligence_input` (`i_id`, `i_name`, `i_subject`, `i_district`, `i_detail`, `date`) VALUES
(1, 'snehal', 'car', 'thane', '', '0000-00-00'),
(2, 'snehal', 'car', 'thane', 'fdafdf', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `misingvehical`
--

CREATE TABLE `misingvehical` (
  `id` int(25) NOT NULL,
  `v_name` varchar(20) NOT NULL,
  `v_company` varchar(10) NOT NULL,
  `v_licence` varchar(10) NOT NULL,
  `v_location` varchar(25) NOT NULL,
  `v_firno` varchar(20) NOT NULL,
  `v_policestation` varchar(25) NOT NULL,
  `v_district` varchar(20) NOT NULL,
  `v_status` varchar(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misingvehical`
--

INSERT INTO `misingvehical` (`id`, `v_name`, `v_company`, `v_licence`, `v_location`, `v_firno`, `v_policestation`, `v_district`, `v_status`, `date`) VALUES
(1, 'swapnil', 'BMW/x2', 'MH-02-AC-3', 'thanee', 'maha-20-2019', 'kashigaon', 'thanr', 'Found', '2019-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `missingmobile`
--

CREATE TABLE `missingmobile` (
  `id` int(25) NOT NULL,
  `name` varchar(35) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `mobno` int(10) NOT NULL,
  `address` varchar(35) NOT NULL,
  `city` varchar(35) NOT NULL,
  `pincode` int(35) NOT NULL,
  `poo` varchar(35) NOT NULL,
  `state` varchar(35) NOT NULL,
  `company` varchar(35) NOT NULL,
  `modelno` varchar(35) NOT NULL,
  `imeino` int(35) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missingmobile`
--

INSERT INTO `missingmobile` (`id`, `name`, `dob`, `gender`, `mobno`, `address`, `city`, `pincode`, `poo`, `state`, `company`, `modelno`, `imeino`, `date`) VALUES
(1, 'sunny', '0000-00-00', 'male', 2147483647, 'mumbai', 'thane', 40104, 'station', 'maharashtra', 'Yuphoria', '0', 2147483647, '2019-05-16 14:46:32'),
(2, 'sunny', '0000-00-00', 'male', 2147483647, 'mumbai', 'thane', 40104, 'station', 'maharashtra', 'Yuphoria', 'X2', 2147483647, '2019-05-16 14:46:32'),
(3, 'sunny', '0000-00-00', 'male', 2147483647, 'mumbai', 'thane', 0, 'station', '', 'education', 'X2', 2147483647, '2019-06-16 15:46:09'),
(4, 'mayur', '0000-00-00', 'male', 0, 'mumbai', 'thane', 40104, 'station', 'maharashtra', 'BMW', 'X2', 2147483647, '2019-06-16 15:49:40'),
(5, 'swapnil s', '2019-07-10', 'M', 1234567895, 'borivali', 'Mumbai', 401104, 'miraroad', 'maha', 'yes', 'Mh34g', 1234567891, '2019-07-05 19:17:07'),
(6, 'yes', '0000-00-00', 'male', 2147483647, 'mumbai', 'thane', 41014, 'scholl', 'delhi', 'education', 'X2', 2147483647, '2019-07-05 19:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `missingperson`
--

CREATE TABLE `missingperson` (
  `m_id` int(25) NOT NULL,
  `m_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `m_name` varchar(25) NOT NULL,
  `m_age` int(20) NOT NULL,
  `m_location` varchar(100) NOT NULL,
  `m_district` varchar(25) NOT NULL,
  `m_po` varchar(25) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missingperson`
--

INSERT INTO `missingperson` (`m_id`, `m_date`, `m_name`, `m_age`, `m_location`, `m_district`, `m_po`, `image`) VALUES
(1, '2019-06-18 21:41:59', 'abhijeet', 22, 'mira road', 'thane', 'kashimira', 'Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `n_id` int(25) NOT NULL,
  `n_subject` varchar(20) NOT NULL,
  `n_date` date NOT NULL,
  `n_message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`n_id`, `n_subject`, `n_date`, `n_message`) VALUES
(1, 'Holiday', '0000-00-00', 'YEs'),
(2, 'n_subject', '0000-00-00', 'hghtygh'),
(3, 'n_subject', '0000-00-00', 'fgg'),
(4, 'n_subject', '0000-00-00', 'sfggfd'),
(5, 'n_subject', '2018-02-02', 'sfggfd'),
(6, 'car', '2018-02-02', 'sfggfd'),
(7, 'Restriction on Road', '2019-06-08', 'Detail here');

-- --------------------------------------------------------

--
-- Table structure for table `no_fly`
--

CREATE TABLE `no_fly` (
  `n_id` int(25) NOT NULL,
  `n_name` char(10) NOT NULL,
  `n_location` varchar(10) NOT NULL,
  `n_district` varchar(20) NOT NULL,
  `n_crimetype` varchar(15) NOT NULL,
  `n_po` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `no_fly`
--

INSERT INTO `no_fly` (`n_id`, `n_name`, `n_location`, `n_district`, `n_crimetype`, `n_po`, `date`) VALUES
(1, 'swapnil', 'Mumbai', '', 'test', '', '0000-00-00 00:00:00'),
(2, '', '', '', '', '', '0000-00-00 00:00:00'),
(3, '', '', '', '', '', '0000-00-00 00:00:00'),
(4, 'trhrthrh', 'trhrgh', 'rthrth', 'trhrth', 'tyth', '0000-00-00 00:00:00'),
(5, '', '', '', '', '', '0000-00-00 00:00:00'),
(6, 'swapnil', 'parliment', 'delhi', 'corruption', 'delhi ', '0000-00-00 00:00:00'),
(7, 'Mayur', 'Chennai', 'Thane', 'Corruption', 'Delhi', '2019-06-11 10:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `recoveredvehical`
--

CREATE TABLE `recoveredvehical` (
  `id` int(25) NOT NULL,
  `v_model` varchar(10) NOT NULL,
  `v_licence` varchar(10) NOT NULL,
  `v_location` varchar(10) NOT NULL,
  `v_po` varchar(25) NOT NULL,
  `v_district` varchar(25) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recoveredvehical`
--

INSERT INTO `recoveredvehical` (`id`, `v_model`, `v_licence`, `v_location`, `v_po`, `v_district`, `date`) VALUES
(2, 'BMW', 'MH-02-AC-3', 'swa@gmail.', '', '', '0000-00-00 00:00:00'),
(3, 'tata', 'v_licence', 'thanee', 'thane', 'thanr', '0000-00-00 00:00:00'),
(4, 'BMW', 'v_licence', 'station', 'Borivali', 'thane', '0000-00-00 00:00:00'),
(5, 'WAGNOR', 'v_licence', 'AIRPORT', 'SAHAR', 'MUMBAI', '2019-06-02 14:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `rewardedcriminal`
--

CREATE TABLE `rewardedcriminal` (
  `id` int(25) NOT NULL,
  `c_name` char(20) NOT NULL,
  `c_age` int(20) NOT NULL,
  `c_crime` varchar(20) NOT NULL,
  `c_amount` int(25) NOT NULL,
  `c_po` char(25) NOT NULL,
  `c_district` char(25) NOT NULL,
  `c_firno` varchar(25) NOT NULL,
  `c_status` char(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rewardedcriminal`
--

INSERT INTO `rewardedcriminal` (`id`, `c_name`, `c_age`, `c_crime`, `c_amount`, `c_po`, `c_district`, `c_firno`, `c_status`, `image`, `c_date`) VALUES
(2, 'Brijesh', 35, 'Terrorist', 9000, 'dahisar', 'Mumbai', 'maharashtra', 'not', 'Hydrangeas.jpg', '0000-00-00'),
(5, 'khalid', 29, 'Drug', 15000, 'borivali', 'Thane', 'maharashtra02-2019', 'not', 'Chrysanthemum.jpg', '0000-00-00'),
(8, 'sahil', 45, 'Bomber', 9000, 'NCR', 'Delhi', 'ma 20/2019', 'not', 'Desert.jpg', '0000-00-00'),
(9, 'Suryansh', 23, 'rioters', 25000, 'Dahisar', 'Mumbai', 'maharashtra03-2019', 'Fouund', 'Chrysanthemum.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `unidentified_body`
--

CREATE TABLE `unidentified_body` (
  `u_id` int(25) NOT NULL,
  `u_deathtype` varchar(20) NOT NULL,
  `u_date` date NOT NULL,
  `u_location` varchar(10) NOT NULL,
  `u_po` char(25) NOT NULL,
  `u_district` varchar(25) NOT NULL,
  `u_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unidentified_body`
--

INSERT INTO `unidentified_body` (`u_id`, `u_deathtype`, `u_date`, `u_location`, `u_po`, `u_district`, `u_status`) VALUES
(1, 'accident', '0000-00-00', 'mumbai', 'thane', 'thane', 'found'),
(2, 'accident', '2019-02-02', 'mumbai', 'thane', 'thane', 'found'),
(3, 'know', '2019-02-02', 'sattion', 'goregaon', 'thane', ' found');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arrested`
--
ALTER TABLE `arrested`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `e_challan`
--
ALTER TABLE `e_challan`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `intelligence_input`
--
ALTER TABLE `intelligence_input`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `misingvehical`
--
ALTER TABLE `misingvehical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missingmobile`
--
ALTER TABLE `missingmobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missingperson`
--
ALTER TABLE `missingperson`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `no_fly`
--
ALTER TABLE `no_fly`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `recoveredvehical`
--
ALTER TABLE `recoveredvehical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewardedcriminal`
--
ALTER TABLE `rewardedcriminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unidentified_body`
--
ALTER TABLE `unidentified_body`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arrested`
--
ALTER TABLE `arrested`
  MODIFY `a_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `e_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `e_challan`
--
ALTER TABLE `e_challan`
  MODIFY `e_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `f_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `intelligence_input`
--
ALTER TABLE `intelligence_input`
  MODIFY `i_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `misingvehical`
--
ALTER TABLE `misingvehical`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `missingmobile`
--
ALTER TABLE `missingmobile`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `missingperson`
--
ALTER TABLE `missingperson`
  MODIFY `m_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `n_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `no_fly`
--
ALTER TABLE `no_fly`
  MODIFY `n_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `recoveredvehical`
--
ALTER TABLE `recoveredvehical`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rewardedcriminal`
--
ALTER TABLE `rewardedcriminal`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `unidentified_body`
--
ALTER TABLE `unidentified_body`
  MODIFY `u_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
