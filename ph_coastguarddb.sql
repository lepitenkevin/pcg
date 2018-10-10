-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 12:05 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ph_coastguarddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ssen_tb`
--

CREATE TABLE `ssen_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `age` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `residentialaddress` varchar(50) NOT NULL,
  `businessaddress` varchar(50) NOT NULL,
  `nameofvessel` varchar(50) NOT NULL,
  `callsign` varchar(50) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `securitynumber` varchar(50) NOT NULL,
  `formernameandregistry` varchar(50) NOT NULL,
  `homeport` varchar(50) NOT NULL,
  `nameofbuilder` varchar(50) NOT NULL,
  `placebuilt` varchar(50) NOT NULL,
  `yearbuild` varchar(50) NOT NULL,
  `certificatevesselregistry` varchar(50) NOT NULL,
  `materialhull` varchar(50) NOT NULL,
  `certificateexpirationdate` date NOT NULL,
  `length` varchar(50) NOT NULL,
  `breadth` varchar(50) NOT NULL,
  `dedth` varchar(50) NOT NULL,
  `grosstonnage` varchar(50) NOT NULL,
  `nettonnage` varchar(50) NOT NULL,
  `deadweight` varchar(50) NOT NULL,
  `enginemake` varchar(50) NOT NULL,
  `serialnumber` varchar(50) NOT NULL,
  `horsepower` varchar(50) NOT NULL,
  `speed` varchar(50) NOT NULL,
  `CRapplicantno` varchar(50) NOT NULL,
  `CRdateissued` date NOT NULL,
  `CRregtype` varchar(50) NOT NULL,
  `CRtin` varchar(50) NOT NULL,
  `CRshipnumber` varchar(50) NOT NULL,
  `CRnameofvessel` varchar(50) NOT NULL,
  `CRhullidno` varchar(50) NOT NULL,
  `CRdecalno` varchar(50) NOT NULL,
  `CRexpirationdate` date NOT NULL,
  `CRlastname` varchar(50) NOT NULL,
  `CRfirstname` varchar(50) NOT NULL,
  `CRmiddlein` varchar(50) NOT NULL,
  `CRnameofboat` varchar(50) NOT NULL,
  `CRcolor` varchar(50) NOT NULL,
  `CRlength` varchar(50) NOT NULL,
  `CRyear` varchar(50) NOT NULL,
  `CRcity` varchar(50) NOT NULL,
  `CRdistrict` varchar(50) NOT NULL,
  `CRzipcode` varchar(50) NOT NULL,
  `CRtype` varchar(50) NOT NULL,
  `CRhull` varchar(50) NOT NULL,
  `CRuse` varchar(50) NOT NULL,
  `CRpropulsion` varchar(50) NOT NULL,
  `CRfuel` varchar(50) NOT NULL,
  `CRhaulingport` varchar(50) NOT NULL,
  `CRindimotormanu1` varchar(50) NOT NULL,
  `CRhp1` varchar(50) NOT NULL,
  `CRmotor1serial` varchar(50) NOT NULL,
  `CRportofdocu` varchar(50) NOT NULL,
  `CRindimotormanu2` varchar(50) NOT NULL,
  `CRhp2` varchar(50) NOT NULL,
  `CRmotor1seria2` varchar(50) NOT NULL,
  `remarks` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssen_tb`
--

INSERT INTO `ssen_tb` (`id`, `name`, `date`, `age`, `sex`, `nationality`, `residentialaddress`, `businessaddress`, `nameofvessel`, `callsign`, `picture`, `securitynumber`, `formernameandregistry`, `homeport`, `nameofbuilder`, `placebuilt`, `yearbuild`, `certificatevesselregistry`, `materialhull`, `certificateexpirationdate`, `length`, `breadth`, `dedth`, `grosstonnage`, `nettonnage`, `deadweight`, `enginemake`, `serialnumber`, `horsepower`, `speed`, `CRapplicantno`, `CRdateissued`, `CRregtype`, `CRtin`, `CRshipnumber`, `CRnameofvessel`, `CRhullidno`, `CRdecalno`, `CRexpirationdate`, `CRlastname`, `CRfirstname`, `CRmiddlein`, `CRnameofboat`, `CRcolor`, `CRlength`, `CRyear`, `CRcity`, `CRdistrict`, `CRzipcode`, `CRtype`, `CRhull`, `CRuse`, `CRpropulsion`, `CRfuel`, `CRhaulingport`, `CRindimotormanu1`, `CRhp1`, `CRmotor1serial`, `CRportofdocu`, `CRindimotormanu2`, `CRhp2`, `CRmotor1seria2`, `remarks`) VALUES
(1, 'testname', '2018-07-31', '22', 'Male', 'filipino', 'testresidentialaddress', 'testbusinessaddress', 'testnameofvessel', 'testcallsign', 'http://localhost/pcg/uploaded-images/1532149310144330685b52be3ecc679agtagatas.png', '1', 'testnameandregistry', 'testhomeport', 'testnameofbuilder', 'testplacebuilt', 'testyearbuild', '2018-05-16', '2018-05-16', '2018-07-31', 'testlength', 'testbreadth', 'testdedth', 'testgrosstonnage', 'testnettonnage', 'testdeadweight', 'testenginemake', 'testserialnum', 'testhorsepower', 'testspeed', 'testapp#', '2018-05-16', 'testregtype', 'testCRtine', 'testCRshipnum', 'testnameofvessel', 'testhullidno', 'testdecalno', '2018-07-31', 'testlastname', 'testfirstname', 'testmiddle', 'testnameofboat', 'red', 'testlength', 'testyear', 'testcity', 'testdistrct', 'testzip', 'testtype', 'testCRhull', 'testCRuse', 'testCRpopulsion', 'testfuel', 'testCRhaulingport', 'testCRindimotormanu1', 'testCRhp1', 'testCRmotor1serial', 'testCRportofdocu', 'testCRindimotormanu2', 'testCRhp1', 'testCRmotor1seria2', 'violated something in some ways');

-- --------------------------------------------------------

--
-- Table structure for table `vessel_tb`
--

CREATE TABLE `vessel_tb` (
  `id` int(11) NOT NULL,
  `nameofvessel` varchar(50) NOT NULL,
  `grosstonnage` varchar(50) NOT NULL,
  `nettonnage` varchar(50) NOT NULL,
  `pssccssc` date NOT NULL,
  `copcspecialpermit` date NOT NULL,
  `msmc` date NOT NULL,
  `loadlinecertificate` date NOT NULL,
  `coastwiselicense` date NOT NULL,
  `docofcompliance` date NOT NULL,
  `certofcompliance` date NOT NULL,
  `safetymancertificate` date NOT NULL,
  `certofstability` date NOT NULL,
  `shipstationlicense` date NOT NULL,
  `paip` date NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `remarks` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vessel_tb`
--

INSERT INTO `vessel_tb` (`id`, `nameofvessel`, `grosstonnage`, `nettonnage`, `pssccssc`, `copcspecialpermit`, `msmc`, `loadlinecertificate`, `coastwiselicense`, `docofcompliance`, `certofcompliance`, `safetymancertificate`, `certofstability`, `shipstationlicense`, `paip`, `capacity`, `picture`, `remarks`) VALUES
(1, 'testkevin', 'grosstonnagetest', 'CRMC, San Vicente st. Bogo City, Cebutest', '2018-07-19', '2018-07-22', '2018-07-23', '2018-07-24', '2018-07-25', '2018-07-26', '2018-07-27', '2018-07-28', '2018-07-29', '2018-07-30', '2018-07-31', 'sd12', 'http://localhost/pcg/uploaded-images/15319025272512546485b4efa3f4d360agtagatas.png', ''),
(3, 'testkevin', 'grosstonnagetest', 'CRMC, San Vicente st. Bogo City, Cebutest', '2018-07-18', '2018-07-18', '2018-07-23', '2018-07-24', '2018-07-25', '2018-07-26', '2018-07-27', '2018-07-28', '2018-07-29', '2018-07-30', '2018-07-31', 'sd1', 'http://localhost/pcg/uploaded-images/153190272620275903125b4efb065f9daworth.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ssen_tb`
--
ALTER TABLE `ssen_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vessel_tb`
--
ALTER TABLE `vessel_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ssen_tb`
--
ALTER TABLE `ssen_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vessel_tb`
--
ALTER TABLE `vessel_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
