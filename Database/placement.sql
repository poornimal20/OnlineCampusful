-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2023 at 05:36 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `companydetails`
--

CREATE TABLE IF NOT EXISTS `companydetails` (
  `CompanyId` varchar(50) DEFAULT NULL,
  `CompanyName` varchar(50) DEFAULT NULL,
  `ContactPerson` varchar(50) DEFAULT NULL,
  `ContactNumber` varchar(50) DEFAULT NULL,
  `Website` varchar(50) DEFAULT NULL,
  `Numberofemp` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companydetails`
--

INSERT INTO `companydetails` (`CompanyId`, `CompanyName`, `ContactPerson`, `ContactNumber`, `Website`, `Numberofemp`, `Address`) VALUES
('454', 'aa', 'aa', 'sdfsghgh', 'sdfs', '4354', '45'),
('23', 'NR', 'viki', '7894561230', 'www.nr.com', '40', 'cbe');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE IF NOT EXISTS `interview` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(25) NOT NULL,
  `Cname` varchar(25) NOT NULL,
  `Colle` varchar(25) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Dept` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `Sname`, `Cname`, `Colle`, `Location`, `Dept`) VALUES
(3, 'ravi', 'cts', 'snmv', 'chennai', 'bca');

-- --------------------------------------------------------

--
-- Table structure for table `jobapply`
--

CREATE TABLE IF NOT EXISTS `jobapply` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Sno` int(4) NOT NULL,
  `Cname` varchar(20) NOT NULL,
  `Applydate` varchar(20) NOT NULL,
  `upload_path` varchar(100) NOT NULL,
  `U_name` varchar(25) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `jobapply`
--

INSERT INTO `jobapply` (`id`, `Sno`, `Cname`, `Applydate`, `upload_path`, `U_name`, `status`) VALUES
(12, 6, 'tcs', '14/02/17', 'form design flower shop.docx', 'ravi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobdetails`
--

CREATE TABLE IF NOT EXISTS `jobdetails` (
  `Sno` int(4) NOT NULL AUTO_INCREMENT,
  `Cuname` varchar(20) NOT NULL,
  `Comname` varchar(100) NOT NULL,
  `Jobname` varchar(20) NOT NULL,
  `JobDesc` varchar(50) NOT NULL,
  `Experience` varchar(10) NOT NULL,
  `Vacancies` varchar(10) NOT NULL,
  `LastDate` varchar(20) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jobdetails`
--

INSERT INTO `jobdetails` (`Sno`, `Cuname`, `Comname`, `Jobname`, `JobDesc`, `Experience`, `Vacancies`, `LastDate`, `Venue`) VALUES
(5, 'psg', 'cts', 'development', 'development', 'fresher', '12', '12/2/2017', 'psg college campus'),
(6, 'snmv', 'tcs', 'testing', 'testing ', '3', '3', '12/2/2017', 'cheenai');

-- --------------------------------------------------------

--
-- Table structure for table `placedstudentslist`
--

CREATE TABLE IF NOT EXISTS `placedstudentslist` (
  `PlacedId` varchar(50) NOT NULL,
  `CompanyName` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Website` varchar(50) DEFAULT NULL,
  `Contact` varchar(50) DEFAULT NULL,
  `InterviewDate` varchar(50) DEFAULT NULL,
  `RegNumber` varchar(50) DEFAULT NULL,
  `StudentName` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `AnnualSalary` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placedstudentslist`
--

INSERT INTO `placedstudentslist` (`PlacedId`, `CompanyName`, `Address`, `Website`, `Contact`, `InterviewDate`, `RegNumber`, `StudentName`, `Department`, `AnnualSalary`) VALUES
('ghjg', '45ghj', 'aa', 'aa@gmail.com', 'aa@gmail.com', 'sdf', 'cbe', 'gg', 'gg', 'gg'),
('3', 'NR', 'cbe', 'www.nr.com', '7894563210', '28/03/2023', '0037', 'vignesh', 'CS', '300000');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `University` varchar(50) DEFAULT NULL,
  `Roll_no` varchar(50) DEFAULT NULL,
  `First_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) DEFAULT NULL,
  `Mobile_Number` varchar(50) DEFAULT NULL,
  `Email_ID` varchar(50) DEFAULT NULL,
  `Date_of_birth` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `tenth_CGPA` float DEFAULT NULL,
  `twelth_CGPA` float DEFAULT NULL,
  `UG_CGPA` float DEFAULT NULL,
  `Year_of_passing3` varchar(50) DEFAULT NULL,
  `Specialization1` varchar(50) DEFAULT NULL,
  `PG_CGPA` float DEFAULT '0',
  `Year_of_passing` varchar(50) DEFAULT NULL,
  `Specialization2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`University`, `Roll_no`, `First_Name`, `Last_Name`, `Mobile_Number`, `Email_ID`, `Date_of_birth`, `Address`, `tenth_CGPA`, `twelth_CGPA`, `UG_CGPA`, `Year_of_passing3`, `Specialization1`, `PG_CGPA`, `Year_of_passing`, `Specialization2`) VALUES
('anna', '2002', 'nanda', 'nanda', '9894497597', 'packtemp1@gmail.com', '2/2/1982', 'mumbai', 90, 85, 80, '2016', 'cs', 80, '2018', 'mca'),
('anna', '2003', 'vikasini', 'vikasini', '9894497597', 'sathiyamoorthy.d@gmail.com', '2/2/1982', 'cbe', 90, 85, 80, '2016', 'IT', 80, '2018', 'mca'),
('anna', '2001', 'sathya', 'sathya', '9894497597', 'techspinesolutionscbe@gmail.com', '2/2/1982', 'chennai', 90, 85, 80, '2016', 'cs', 80, '2018', 'mca'),
('Bharathiar', '0037', 'vignesh', '90s kid', '9715044407', 'vigneshveeraperumal@gmail.com', '30/08/2002', 'cbe', 78, 76, 82, '2018', 'CS', 78, '2020', 'CS'),
('Bharathiar', '0038', 'mano', 'manoj', '7894563210', 'manojkumarkodai1999@gmail.com', '30/08/2002', 'cbe', 85, 86, 90, '2018', 'CS', 86, '2020', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `studregister`
--

CREATE TABLE IF NOT EXISTS `studregister` (
  `Sname` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studregister`
--

INSERT INTO `studregister` (`Sname`, `Password`, `Cpassword`) VALUES
('grd', 'grd@gmail.com', 'ged'),
('psg', 'psg@gmail.com', 'psg'),
('snmv', 'snmv@gmil.com', 'snamv'),
('sasa', 'ss', 'ss'),
('aaa', 'aa', 'aa'),
('sathya', 'sathya', 'sathya'),
('Vicky', 'vicky', 'vicky'),
('mano', 'mano', 'mano');

-- --------------------------------------------------------

--
-- Table structure for table `tab_query`
--

CREATE TABLE IF NOT EXISTS `tab_query` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `question` varchar(500) NOT NULL,
  `ans` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tab_query`
--

INSERT INTO `tab_query` (`id`, `doc_name`, `username`, `question`, `ans`) VALUES
(7, 'admin', 'ravi', 'how to clear pimples', 'soap'),
(8, 'admin', 'ravi', ' sdgdg', ' sdgg'),
(9, 'admin', 'arun', ' sdgsdg', ' sgsdg'),
(10, 'admin', 'ravi', ' how', ' sfs');

-- --------------------------------------------------------

--
-- Table structure for table `tab_user`
--

CREATE TABLE IF NOT EXISTS `tab_user` (
  `first_name` varchar(100) NOT NULL,
  `U_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  PRIMARY KEY (`U_name`),
  UNIQUE KEY `U_name` (`U_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_user`
--

INSERT INTO `tab_user` (`first_name`, `U_name`, `email_id`, `password`, `address`, `city`, `state`, `country`, `mobile`, `phone`, `College`) VALUES
('jeeva', 'jeeva', 'jeeva@gmail.com', 'jeeva', 'cbe', 'cbe', 'tamilnadu', 'india', '9003502338', '9003502338', 'PSG'),
('nanda', 'nanda', 'nandapoy@gmail.com', 'nanda', 'cbe', 'cbe', 'tn', 'in', '9003502338', '9003502338', 'GRD'),
('ravi', 'ravi', 'ravi@gmail.com', 'ravi', 'cbe', 'cbe', 'tn', 'in', '9867867', '343435', 'PSG'),
('tharun', 'tharun', 'tharun@gmail.com', 'tharun', 'cbe', 'cbe', 'tn', 'in', '9324333344', '9002322223', 'snmv');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

CREATE TABLE IF NOT EXISTS `upcoming` (
  `PlacedId` varchar(50) NOT NULL,
  `CompanyName` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Website` varchar(50) DEFAULT NULL,
  `Contact` varchar(50) DEFAULT NULL,
  `InterviewDate` varchar(50) DEFAULT NULL,
  `Venue` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`PlacedId`, `CompanyName`, `Address`, `Website`, `Contact`, `InterviewDate`, `Venue`) VALUES
('121', 'sdsddsfg', 'dsgdsg', 'tytyty', 'fghfgh', 'fdsfds', 'sdfds'),
('1', 'NR', 'cbe', 'www.nr.com', '7894563210', '28/03/2023', 'cbe');
