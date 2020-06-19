--
-- Database: `conf`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pending` ()  NO SQL
select * from player1 WHERE status='pending'$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `co_id` int(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`co_id`, `password`) VALUES
(8792, '8792');
INSERT INTO `coordinator` (`co_id`, `password`) VALUES
(9981, '8692');
INSERT INTO `coordinator` (`co_id`, `password`) VALUES
(7789, '8702');

-- --------------------------------------------------------

--
-- Table structure for table `group_a`
--

CREATE TABLE `group_a` (
  `team_id` int(50) NOT NULL,
  `form_id` int(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_a`
--

INSERT INTO `group_a` (`team_id`, `form_id`, `nationality`, `zone`) VALUES
(1234, 1, 'Indian', 'ZONE-A(NORTH)');
INSERT INTO `group_a` (`team_id`, `form_id`, `nationality`, `zone`) VALUES
(1235, 2, 'Indian', 'ZONE-A(SOUTH)');
INSERT INTO `group_a` (`team_id`, `form_id`, `nationality`, `zone`) VALUES
(1236, 5, 'Indian', 'ZONE-A(NORTH)');

-- --------------------------------------------------------

--
-- Table structure for table `group_b`
--

CREATE TABLE `group_b` (
  `team_id` int(50) NOT NULL,
  `form_id` int(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_b`
--

INSERT INTO `group_b` (`team_id`, `form_id`, `nationality`, `zone`, `file`) VALUES
(8866, 90, 'england', 'ZONE-B(SOUTH)', 0x63626f74322e6a7067),
(2, 2, 'Indian', 'ZONE-B(SOUTH)', 0x3674687320656d2e6a7067),
(556699, 4455, 'Indian', 'ZONE-B(SOUTH)', 0x4e657720446f6320355f312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `group_c`
--

CREATE TABLE `group_c` (
  `team_id` int(50) NOT NULL,
  `form_id` int(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_d`
--

CREATE TABLE `group_d` (
  `team_id` int(50) NOT NULL,
  `form_id` int(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manid` int(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manid`, `password`) VALUES
(8792, '8792');

-- --------------------------------------------------------

--
-- Table structure for table `manager_add`
--

CREATE TABLE `manager_add` (
  `man_id` int(50) NOT NULL,
  `man_name` varchar(50) NOT NULL,
  `man_city` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `man_email` varchar(50) NOT NULL,
  `man_phno` int(50) NOT NULL,
  `man_zone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_add`
--

INSERT INTO `manager_add` (`man_id`, `man_name`, `man_city`, `password`, `man_email`, `man_phno`, `man_zone`) VALUES
(9696, 'shashank', 'hassan', '9696', 'rkmshashank7@gmail.com', 2147483647, 'ZONE-B(SOUTH)'),
(0, '', '', '96969', '', 0, ''),
(8792, 'sriki', 'bengaluru', '8792', 'sdf@gmail.com', 454545, 'ZONE-A(NORTH)');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `team_id` int(50) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_city` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `team_email` varchar(50) NOT NULL,
  `phno` int(10) NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`team_id`, `team_name`, `team_city`, `password`, `team_email`, `phno`, `year`) VALUES
(2, 'up yodh', 'uttarpradesh', '0002', 'up@gmail', 2147483647, 2018),
(1234, 'devils', 'Bangalore', '1234', 'devils@gmail', 2147483647, 2016),
(3456, 'shukla team', 'Bangalore', '3456', '3456@gmail.com', 2147483647, 2017),
(556699, 'bullsb', 'bengaluru', '556699', 'abcbulls@gmail.com', 2147483647, 2018),
(1006232, 'asdfgh', 'Bangalore', '123456', 'sre@gmail.com', 1234567890, 1225);

-- --------------------------------------------------------

--
-- Table structure for table `player1`
--

CREATE TABLE `player1` (
  `team_id` int(50) NOT NULL,
  `form_id` int(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `year` int(10) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `sub_date` date NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `comments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player1`
--

INSERT INTO `player1` (`team_id`, `form_id`, `nationality`, `year`, `zone`, `sub_date`, `file`, `status`, `comments`) VALUES
(1234, 1, 'Indian', 2016, 'ZONE-A(NORTH)', '2018-11-15', 'puc.jpg', 'accept', 'selected'),
(2, 2, 'Indian', 2018, 'ZONE-B(SOUTH)', '2018-11-16', '6ths em.jpg', 'accept', 'accepted for tournament'),
(3456, 3, 'indian', 2017, 'ZONE-D(WEST)', '2018-11-17', 'cbot2.jpg', 'accept', 'yes'),
(3456, 8585, 'brazil', 2018, 'ZONE-D(WEST)', '2018-11-18', 'Chatbots.ppt', 'pending', ''),
(556699, 4455, 'Indian', 2018, 'ZONE-B(SOUTH)', '2018-12-07', 'New Doc 5_1.jpg', 'accept', 'yes selected');

--
-- Triggers `player1`
--
DELIMITER $$
CREATE TRIGGER `tr` AFTER INSERT ON `player1` FOR EACH ROW BEGIN
if new.zone='ZONE-A(NORTH)' THEN
insert into group_a values(new.team_id,new.form_id,new.nationality,new.zone);
END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr1` BEFORE INSERT ON `player1` FOR EACH ROW BEGIN
if new.zone='ZONE-B(SOUTH)' THEN
insert into group_b values(new.team_id,new.form_id,new.nationality,new.zone,new.file);
END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`team_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
