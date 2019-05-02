-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2019 at 11:25 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cid` int(255) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `dis` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cid`, `cname`, `dis`) VALUES
(3, 'Cold_Drink', '0.05'),
(5, 'Biscuits/Rusks', '0.07'),
(6, 'Namkeen', '0.06'),
(7, 'Face_Cream', '0.06'),
(8, 'Perfumes', '0.10'),
(9, 'Facewash/Soap', '0.03'),
(10, 'Kajal/Mascara', '0.02'),
(13, 'Dry_Fruits', '0.04'),
(15, 'Juices', '0.05'),
(16, 'Milk_Shakes', '0.02'),
(17, 'Face_Powder', '0.05'),
(18, 'Cakes/Pancakes', '0.10'),
(20, 'Washing-Powder', '0.12'),
(21, 'Washing-Soaps', '0.10'),
(22, 'Bathing-Soaps', '0.06'),
(23, 'Handwash-Gel', '0.02'),
(24, 'Toilet-Cleaner', '0.02'),
(25, 'Dal(Unpacked)', '0.02'),
(26, 'Dal(Packed)', '0.00'),
(27, 'Masala', '0.04');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `chid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `product` varchar(100) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`chid`, `uid`, `product`, `cat`, `price`, `img`) VALUES
(4, 3, 'Tropicana_Juice', 'Juices', 95, 'uploads/tropicana 1kg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `uemail` varchar(50) NOT NULL,
  `feedid` int(255) NOT NULL,
  `feedback` text NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`uemail`, `feedid`, `feedback`, `rating`) VALUES
('priyamagarwal97@gmail.com', 1, 'this platform is really good for those buyer who want a value for money deal', 0),
('gaurav.verma_cs16@gla.ac.in', 2, 'hey friend i buy the canon camera from this site and it was the best deal for me', 0),
('priyamagarwal97@gmail.com', 3, 'Mere ko ye site achi lagi par main is per or product variety chahata hoo', 3),
('priyamagarwal97@gmail.com', 4, 'good', 2);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `pid` int(250) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `pprice` int(10) NOT NULL,
  `pquant` int(10) NOT NULL,
  `pimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`pid`, `pname`, `ptype`, `pprice`, `pquant`, `pimg`) VALUES
(2, 'Haldiram Khatta Metha', 'Namkeen_500gm', 45, 500, 'uploads/Haldiram-s-Khatta-Meetha-1-SDL767532628-1-86fdc.jpg'),
(3, 'Haldiram Khatta Metha', 'Namkeen_1kg', 90, 250, 'uploads/1kg.jpg'),
(4, 'Coka Cola', 'Cold_drink_500ml', 35, 450, 'uploads/Coca-Cola-500ml-Bottle-Pack-24-100182.jpg'),
(5, 'Pepsi', 'Cold_drink_500ml', 35, 140, 'uploads/upload.version_1.0.eea55261cdb25c0bca15c86f1d986b11.1350x1350.jpeg'),
(7, 'Coka Cola', 'Cold_drink_1000ml', 72, 399, 'uploads/Coca-Cola-1ltr.jpg'),
(8, 'Pepsi', 'Cold_drink_1000ml', 72, 142, 'uploads/pepsi1ltr.jpg'),
(9, 'Navratan Mixture', 'Namkeen_1kg', 40, 850, 'uploads/navratn_mix.jpg'),
(10, 'Mountain Dew', 'Cold_drink_1000ml', 75, 410, 'uploads/dew_1-1-1-2.jpg'),
(11, 'Fairness Cream', 'Fairness_Cream', 35, 48, 'uploads/fairness-cream-500x500.png'),
(12, 'Fogg Deodrant Perfume', 'Perfumes', 250, 117, 'uploads/fogg.jpg'),
(13, 'Himalaya Facewash', 'Facewash/Soap', 80, 50, 'uploads/HIMALAYA-NEEM-1418102982-10008391.jpg'),
(14, 'Pear Soap', 'Facewash/Soap', 70, 852, 'uploads/pear.jpg'),
(15, 'Lakme iconic Kajal,Black', 'Kajal', 210, 121, 'uploads/kajal_lakme.jpg'),
(16, 'Lakme iconic Mascara,Black', 'Kajal', 271, 51, 'uploads/mascara_lakme.jpg'),
(17, 'White Tone Face Powder', 'Face_Powder', 100, 51, 'uploads/whitetone-face-powder-30g-500x500-500x500.jpg'),
(18, 'Good Day Butter Bite', 'Biscuits/Rusks', 22, 170, 'uploads/good day buter.jpg'),
(19, 'Britania Milk Rusk', 'Biscuits/Rusks', 72, 11, 'uploads/milk rusk.jpeg'),
(20, 'Chocolate Cake', 'Cakes/Pancakes', 350, 2, 'uploads/choco birthday cake.jpg'),
(21, 'Choco-Vanilla Cake', 'Cakes/Pancakes', 500, 1, 'uploads/vanilla choco chip.jpg'),
(22, 'Mother_Day Cake', 'Cakes/Pancakes', 450, 1, 'uploads/choco mothers dya.jpg'),
(23, 'California-Badaam', 'Dry_Fruits', 800, 999, 'uploads/almond 1kg.jpg'),
(24, 'Pista', 'Dry_Fruits', 235, 21, 'uploads/pista1kg.jpg'),
(25, 'Tropicana_Juice', 'Juices_1000ml', 95, 23, 'uploads/tropicana 1kg.jpg'),
(26, 'Real_Juice', 'Juices_500ml', 39, 32, 'uploads/REAL-ACTIVE-MIXED-FRUIT-200-ML-JUICE.jpg'),
(27, 'Mother_Dairy_Choco-milk', 'Milk_Shakes_200ml', 90, 51, 'uploads/mother-dairy-chocolate-milk-shake-500x500.jpg'),
(28, 'Cavin_Choco-milk', 'Milk_Shakes_200ml', 100, 29, 'uploads/cavins-chocolate-milkshake-500x500.jpg'),
(30, 'Ariel-Machine-Powder', 'Washing_Detergants', 350, 44, 'uploads/arial.jpg'),
(31, 'Surf-Excel', 'Washing_Detergants', 280, 65, 'uploads/surf-excel.jpg'),
(32, 'Tide-Plus', 'Washing_Detergants', 180, 63, 'uploads/tide-plus-detergent-powder-2-kg-500x500.jpg'),
(33, 'Rin-Bar', 'Washing-Soap', 10, 854, 'uploads/rin 150g bar.jpg'),
(34, 'Vim-Bar', 'Washing-Soap', 10, 88, 'uploads/Vim Dishwash Bar, 200 gm-500x500.jpg'),
(35, 'Vanish-Bar', 'Washing-Soap', 25, 63, 'uploads/Vanish-Stain-Remover-Bar.jpg'),
(36, 'Surf-Excel_Bar', 'Washing-Soap', 25, 62, 'uploads/surecelbar25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ityp`
--

CREATE TABLE `ityp` (
  `iid` int(100) NOT NULL,
  `tname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ityp`
--

INSERT INTO `ityp` (`iid`, `tname`) VALUES
(21, '	Dal(Packed)'),
(22, '	Dal(Unpacked)'),
(23, '	Masala'),
(11, 'Biscuits/Rusks'),
(12, 'Cakes/Pancakes'),
(5, 'Cold_drink_1000ml'),
(4, 'Cold_drink_500ml'),
(13, 'Dry_Fruits'),
(10, 'Facewash/Soap'),
(9, 'Face_Powder'),
(6, 'Fairness_Cream'),
(15, 'Juices_1000ml'),
(14, 'Juices_500ml'),
(8, 'Kajal'),
(16, 'Milk_Shakes_200ml'),
(3, 'Namkeen_1kg'),
(2, 'Namkeen_500gm'),
(7, 'Perfumes'),
(18, 'Washing-Soap'),
(17, 'Washing_Detergants');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `uid` int(255) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `upass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`uid`, `uname`, `upass`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `uid` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `uphone` bigint(12) NOT NULL,
  `uaddr` varchar(200) NOT NULL,
  `ucity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`uid`, `fname`, `lname`, `uemail`, `upass`, `uphone`, `uaddr`, `ucity`) VALUES
(1, 'Priyam', 'Agarwal', 'priyamagarwal97@gmail.com', 'priyam1234', 7060979363, 'GLA University,Mathura,UP', 'Mathura'),
(2, 'Gaurav', 'Verma', 'gaurav.verma_cs16@gla.ac.in', 'gaurav1234', 8521479630, 'Ganga devi mandir,hathras', 'Hathras'),
(3, 'Sanni', 'Kumar', 'sanni.kumar_cs16@gla.ac.in', '12345', 7896541230, '', ''),
(4, 'Nimish', 'Maheshwari', 'nimish.maheshwari_cs15@gla.ac.in', '123456', 9639269300, 'GLA University,Mathura,UP,India', 'Mathura');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` bigint(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `uaddr` varchar(300) NOT NULL,
  `uphone` bigint(20) NOT NULL,
  `ucity` varchar(50) NOT NULL,
  `ono` bigint(255) NOT NULL,
  `product` varchar(500) NOT NULL,
  `price` int(50) NOT NULL,
  `tprice` int(100) NOT NULL,
  `qty` int(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `odate` date NOT NULL,
  `ostatus` varchar(100) NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `uid`, `uemail`, `fname`, `lname`, `uaddr`, `uphone`, `ucity`, `ono`, `product`, `price`, `tprice`, `qty`, `img`, `odate`, `ostatus`, `ddate`) VALUES
(21, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 8042019155038, 'Glamour-Glow', 38, 38, 1, 'uploads/fairness-cream-500x500.png', '2019-04-08', 'Cancelled', '0000-00-00'),
(22, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 8042019155076, 'Himalaya', 76, 76, 1, 'uploads/HIMALAYA-NEEM-1418102982-10008391.jpg', '2019-04-08', 'Cancelled', '0000-00-00'),
(41, 2, 'gaurav.verma_cs16@gla.ac.in', 'Gaurav', 'Verma', '', 8521479630, '', 904201914294368, 'Britania Rusk', 68, 68, 1, 'uploads/milk rusk.jpeg', '2019-04-09', 'Cancelled', '0000-00-00'),
(44, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 10042019035901225, 'Fogg', 225, 225, 1, 'uploads/fogg.jpg', '2019-04-10', 'Delivered', '2019-04-10'),
(45, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 1004201914410186, 'Mother_Dairy_Choco-milk', 86, 86, 1, 'uploads/mother-dairy-chocolate-milk-shake-500x500.jpg', '2019-04-10', 'Delivered', '2019-04-10'),
(46, 2, 'gaurav.verma_cs16@gla.ac.in', 'Gaurav', 'Verma', 'Ganga devi mandir,hathras', 8521479630, 'Hathras', 10042019144524223, 'Pista', 223, 446, 2, 'uploads/pista1kg.jpg', '2019-04-10', 'Delivered', '2019-04-10'),
(47, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 10042019144756266, 'Surf-Excel', 266, 532, 2, 'uploads/surf-excel.jpg', '2019-04-10', 'Cancelled', '0000-00-00'),
(48, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 1004201914490443, 'Haldiram Navratan Mixture', 43, 43, 1, 'uploads/navratn_mix.jpg', '2019-04-10', 'Cancelled', '0000-00-00'),
(49, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 1004201914514243, 'Haldiram Navratan Mixture', 43, 86, 2, 'uploads/navratn_mix.jpg', '2019-04-10', 'Cancelled', '0000-00-00'),
(50, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 10042019145253225, 'Fogg', 225, 225, 1, 'uploads/fogg.jpg', '2019-04-10', 'Delivered', '2019-04-10'),
(51, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 10042019145408257, 'Lakme-Mascara', 257, 257, 1, 'uploads/mascara_lakme.jpg', '2019-04-10', 'Cancelled', '0000-00-00'),
(52, 2, 'gaurav.verma_cs16@gla.ac.in', 'Gaurav', 'Verma', 'Ganga devi mandir,hathras', 8521479630, 'Hathras', 10042019145547760, 'California-Badaam', 760, 760, 1, 'uploads/almond 1kg.jpg', '2019-04-10', 'Delivered', '2019-04-11'),
(53, 2, 'gaurav.verma_cs16@gla.ac.in', 'Gaurav', 'Verma', 'Ganga devi mandir,hathras', 8521479630, 'Hathras', 1004201914554871, 'Coka Cola', 71, 71, 1, 'uploads/Coca-Cola-1ltr.jpg', '2019-04-10', 'Delivered', '2019-04-10'),
(54, 3, 'sannikumar_cs16@gla.ac.in', 'Sanni', 'Kumar', '', 7896541230, '', 1004201915255938, 'Glamour-Glow', 38, 76, 2, 'uploads/fairness-cream-500x500.png', '2019-04-10', 'Delivered', '2019-04-10'),
(55, 3, 'sanni.kumar_cs16@gla.ac.in', 'Sanni', 'Kumar', '', 7896541230, '', 10042019152919162, 'Good Day', 162, 324, 2, 'uploads/good day buter.jpg', '2019-04-10', 'Cancelled', '0000-00-00'),
(56, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 1004201915422537, 'Real_Juice', 37, 37, 1, 'uploads/REAL-ACTIVE-MIXED-FRUIT-200-ML-JUICE.jpg', '2019-04-10', 'Cancelled', '0000-00-00'),
(57, 4, 'nimish.maheshwari_cs15@gla.ac.in', 'Nimish', 'Maheshwari', 'GLA University,Mathura,UP,India', 9639269300, 'Mathura', 10042019162327225, 'Fogg', 225, 225, 1, 'uploads/fogg.jpg', '2019-04-10', 'Pending', '0000-00-00'),
(58, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 1104201907014710, 'Rin-Bar', 10, 10, 1, 'uploads/rin 150g bar.jpg', '2019-04-11', 'Delivered', '2019-04-11'),
(59, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 1104201907034610, 'Vanish-Bar', 10, 10, 1, 'uploads/Vanish-Stain-Remover-Bar.jpg', '2019-04-11', 'Cancelled', '0000-00-00'),
(60, 3, 'sanni.kumar_cs16@gla.ac.in', 'Sanni', 'Kumar', '', 7896541230, '', 11042019074550200, 'Lakme-Kajal', 200, 200, 1, 'uploads/kajal_lakme.jpg', '2019-04-11', 'Pending', '0000-00-00'),
(61, 3, 'sanni.kumar_cs16@gla.ac.in', 'Sanni', 'Kumar', '', 7896541230, '', 1104201907455037, 'Real_Juice', 37, 37, 1, 'uploads/REAL-ACTIVE-MIXED-FRUIT-200-ML-JUICE.jpg', '2019-04-11', 'Pending', '0000-00-00'),
(62, 1, 'priyamagarwal97@gmail.com', 'Priyam', 'Agarwal', 'GLA University,Mathura,UP', 7060979363, 'Mathura', 1104201907554545, 'Haldiram', 45, 45, 1, 'uploads/Haldiram-s-Khatta-Meetha-1-SDL767532628-1-86fdc.jpg', '2019-04-11', 'Pending', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `did` int(255) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `type` varchar(80) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `oprice` int(10) NOT NULL,
  `desp` varchar(500) NOT NULL,
  `nwt` decimal(10,2) NOT NULL,
  `mdate` date NOT NULL,
  `batch` bigint(30) NOT NULL,
  `lcns` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `img2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`did`, `dname`, `type`, `cat`, `price`, `oprice`, `desp`, `nwt`, `mdate`, `batch`, `lcns`, `img`, `img2`) VALUES
(2, 'Pepsi ', 'Cold_drink_500ml', 'Cold_Drink', 35, 33, 'Its a soft drink for refreshment and comes with new cool bottle and delicious taste ', '500.00', '2019-03-31', 99975305551, 'fssai_84567981023', 'uploads/upload.version_1.0.eea55261cdb25c0bca15c86f1d986b11.1350x1350.jpeg', ''),
(7, 'Haldiram Khatta Metha', 'Namkeen_1kg', 'Namkeen', 95, 90, 'Haldiram Namkeen is a good product', '1000.00', '2019-04-01', 89370623235, 'fssai_7060979363', 'uploads/HALDIRAM-KHATTA-MEETHA-1KG-555x555.jpg', 'uploads/HALDIRAM-KHATTA-MEETHA-1KG-555x555.jpg'),
(8, 'Haldiram Navratan Mixture', 'Namkeen_1kg', 'Namkeen', 45, 43, 'Its a new taste for you and haliram family enjoy it.', '500.00', '2019-03-05', 99270553054, 'fssai_89370623215', 'uploads/navratn_mix.jpg', 'uploads/navratn_mix.jpg'),
(12, 'Pepsi', 'Cold_drink_1000ml', 'Cold_Drink', 75, 71, 'Pepsi is a pepsico product and has refreshment tatse for swag...', '1000.00', '2019-03-20', 951235746, 'fssai_7060912345', 'uploads/pepsi1ltr.jpg', 'uploads/pepsi1ltr.jpg'),
(13, 'Coka Cola', 'Cold_drink_1000ml', 'Cold_Drink', 75, 71, 'Its a soft drink for refreshment and comes with new cool bottle and delicious taste', '1000.00', '2019-03-31', 9278192387, '68465164', 'uploads/Coca-Cola-1ltr.jpg', 'uploads/Coca-Cola-1ltr.jpg'),
(16, 'Haldiram', 'Namkeen_500gm', 'Namkeen', 45, 43, 'Haldiram Namkeen is a good product', '490.00', '2019-04-01', 95441353213, 'fssai_70696846545', 'uploads/Haldiram-s-Khatta-Meetha-1-SDL767532628-1-86fdc.jpg', 'uploads/Haldiram-s-Khatta-Meetha-1-SDL767532628-1-86fdc.jpg'),
(17, 'Mountain Dew', 'Cold_drink_1000ml', 'Cold_Drink', 75, 71, 'Its a soft drink for refreshment and comes with new cool bottle and delicious taste', '1000.00', '2019-03-31', 96486516516, 'fssai_325430321', 'uploads/dew_1-1-1-2.jpg', 'uploads/dew_1-1-1-2.jpg'),
(18, 'Glamour-Glow', 'Fairness_Cream', 'Face_Cream', 40, 38, 'Its a Beaty Product for women.', '50.00', '2019-04-01', 6845165412, '984651', 'uploads/fairness-cream-500x500.png', 'uploads/fairness-cream-500x500.png'),
(21, 'Himalaya', 'Facewash/Soap', 'Facewash/Soap', 80, 76, 'Its a Beaty Product for anyone.', '50.00', '2019-01-15', 651621, '56422', 'uploads/HIMALAYA-NEEM-1418102982-10008391.jpg', 'uploads/HIMALAYA-NEEM-1418102982-10008391.jpg'),
(22, 'Pear', 'Facewash/Soap', 'Facewash/Soap', 70, 67, 'Its a Beaty Product for anyone.', '125.00', '2019-02-13', 965163521, '8652151', 'uploads/pear.jpg', 'uploads/pear.jpg'),
(23, 'Lakme-Kajal', 'Kajal', 'Kajal/Mascara', 210, 200, 'Its a Beaty Product for women.', '0.35', '2019-04-01', 981651, '32454', 'uploads/kajal_lakme.jpg', 'uploads/kajal_lakme.jpg'),
(24, 'Lakme-Mascara', 'Kajal', 'Kajal/Mascara', 271, 257, 'Its a Beaty Product for women.', '9.00', '2019-04-04', 651651, '65161', 'uploads/mascara_lakme.jpg', 'uploads/mascara_lakme.jpg'),
(25, 'White-tone-Powder', 'Face_Powder', 'Face_Powder', 100, 95, 'Its a Beaty Product for women.', '70.00', '2019-04-02', 35465165, '6851351', 'uploads/whitetone-face-powder-30g-500x500-500x500.jpg', 'uploads/whitetone-face-powder-30g-500x500-500x500.jpg'),
(26, 'Good Day', 'Biscuits/Rusks', 'Biscuits/Rusks', 170, 162, 'Its a Britania Product and crispy and crunchy snacks', '170.00', '2019-02-28', 357465135, 'fssai_70635321321', 'uploads/good day buter.jpg', 'uploads/good day buter.jpg'),
(28, 'Britania Rusk', 'Biscuits/Rusks', 'Biscuits/Rusks', 72, 68, 'Its a Britania Product and crispy and crunchy snacks', '560.00', '2019-04-02', 6515152154, 'fssai_70609212121', 'uploads/milk rusk.jpeg', 'uploads/milk rusk.jpeg'),
(29, 'Choco-Vanilla Chip', 'Cakes/Pancakes', 'Cakes/Pancakes', 450, 428, 'Its a Cake for birthday party and prepare only on valid orders.', '500.00', '2019-04-04', 1, 'fssai_70', 'uploads/vanilla choco chip.jpg', 'uploads/vanilla choco chip.jpg'),
(30, 'Chocolate Cake', 'Cakes/Pancakes', 'Cakes/Pancakes', 300, 285, 'Its a Cake for birthday party and prepare only on valid orders.', '500.00', '2019-04-04', 2, 'fssai_71', 'uploads/choco birthday cake.jpg', 'uploads/choco birthday cake.jpg'),
(31, 'Mother_Day Cake', 'Cakes/Pancakes', 'Cakes/Pancakes', 500, 475, 'Its a Cake for birthday party and prepare only on valid orders.', '502.56', '2019-04-04', 63511, '651321', 'uploads/choco mothers dya.jpg', 'uploads/choco mothers dya.jpg'),
(32, 'California-Badaam', 'Dry_Fruits', 'Dry_Fruits', 800, 760, 'These are roasted dry fruits which can be used in dishes or snacks', '1000.00', '2019-04-01', 65135131, 'fssai_354351635', 'uploads/almond 1kg.jpg', 'uploads/almond 1kg.jpg'),
(33, 'Pista', 'Dry_Fruits', 'Dry_Fruits', 235, 223, 'These are roasted dry fruits which can be used in dishes or snacks', '250.00', '2019-04-02', 65432354, 'fssai_845251242', 'uploads/pista1kg.jpg', 'uploads/pista1kg.jpg'),
(34, 'Tropicana_Juice', 'Juices_1000ml', 'Juices', 95, 90, 'Its a soft drink for refreshment and comes with new cool bottle and delicious taste', '1000.00', '2019-03-31', 9876516515, 'fssai_70609000', 'uploads/tropicana 1kg.jpg', 'uploads/tropicana 1kg.jpg'),
(35, 'Real_Juice', 'Juices_500ml', 'Juices', 39, 37, 'Its a soft drink for refreshment and comes with new cool bottle and delicious taste', '500.00', '2019-03-11', 313543131, 'fssai_35432135', 'uploads/REAL-ACTIVE-MIXED-FRUIT-200-ML-JUICE.jpg', 'uploads/REAL-ACTIVE-MIXED-FRUIT-200-ML-JUICE.jpg'),
(36, 'Cavin_Choco-milk', 'Milk_Shakes_200ml', 'Milk_Shakes', 100, 95, 'Its a Milk Shake which gives you protein and nourish your body', '200.00', '2019-02-12', 31351654, 'fssai_706445', 'uploads/cavins-chocolate-milkshake-500x500.jpg', 'uploads/cavins-chocolate-milkshake-500x500.jpg'),
(37, 'Mother_Dairy_Choco-milk', 'Milk_Shakes_200ml', 'Milk_Shakes', 90, 86, 'Its a Milk Shake which gives you protein and nourish your body', '200.00', '2019-02-20', 654651315, 'fssai_70603521', 'uploads/mother-dairy-chocolate-milk-shake-500x500.jpg', 'uploads/mother-dairy-chocolate-milk-shake-500x500.jpg'),
(38, 'Ariel-Machine-Powder', 'Washing_Detergants', 'Washing-Powder', 350, 333, 'Its a Washing detergent to clean the clothes and leave a fragnance', '3000.00', '2019-01-22', 98721654654, '6451', 'uploads/arial.jpg', 'uploads/arial.jpg'),
(39, 'Surf-Excel', 'Washing_Detergants', 'Washing-Powder', 280, 266, 'Its a Washing detergent to clean the clothes and leave a fragnance', '3000.00', '2018-12-27', 984651351, '61241', 'uploads/surf-excel.jpg', 'uploads/surf-excel.jpg'),
(40, 'Tide-Plus', 'Washing_Detergants', 'Washing-Powder', 180, 171, 'Its a Washing detergent to clean the clothes and leave a fragnance', '2000.00', '2019-04-01', 984321354, '63455165', 'uploads/tide-plus-detergent-powder-2-kg-500x500.jpg', 'uploads/tide-plus-detergent-powder-2-kg-500x500.jpg'),
(41, 'Rin-Bar', 'Washing-Soap', 'Washing-Soaps', 10, 10, 'Its a Washing Soap to clean the clothes and leave a fragnance', '150.00', '2019-01-23', 765132131, '12321', 'uploads/rin 150g bar.jpg', 'uploads/rin 150g bar.jpg'),
(42, 'Surf-Excel_Bar', 'Washing-Soap', 'Washing-Soaps', 10, 10, 'Its a Washing Soap to clean the clothes and leave a fragnance', '200.00', '2019-02-12', 9813131, '315654', 'uploads/surecelbar25.jpg', 'uploads/surecelbar25.jpg'),
(43, 'Vanish-Bar', 'Washing-Soap', 'Washing-Soaps', 10, 10, 'Its a Washing Soap to clean the clothes and leave a fragnance', '25.00', '2019-03-31', 6513211, '68546515', 'uploads/Vanish-Stain-Remover-Bar.jpg', 'uploads/Vanish-Stain-Remover-Bar.jpg'),
(44, 'Vim-Bar', 'Perfumes', 'Washing-Soaps', 10, 10, 'Its a Washing Soap to clean the Utensiles and leave a fragnance', '200.00', '2019-01-30', 6152151651, '63455151', 'uploads/Vim Dishwash Bar, 200 gm-500x500.jpg', 'uploads/Vim Dishwash Bar, 200 gm-500x500.jpg'),
(50, 'Coka-cola', 'Cold_drink_500ml', 'Cold_Drink', 35, 33, 'Its a soft drink for refreshment and comes with new cool bottle and delicious taste', '500.00', '2019-04-02', 9512357987, 'fssai_702124231', 'uploads/Coca-Cola-500ml-Bottle-Pack-24-100182.jpg', 'uploads/Free-Coca-Cola-500ml.jpg'),
(52, 'Fogg', 'Perfumes', 'Perfumes', 250, 225, 'Its Body friendly Perfume cum deodrant', '120.00', '2019-03-31', 654321651, '965132', 'uploads/fogg.jpg', 'uploads/fogg.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`chid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedid`),
  ADD KEY `uemail` (`uemail`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `ptype` (`ptype`);

--
-- Indexes for table `ityp`
--
ALTER TABLE `ityp`
  ADD PRIMARY KEY (`iid`),
  ADD UNIQUE KEY `tname` (`tname`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uemail` (`uemail`),
  ADD UNIQUE KEY `uphone` (`uphone`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD UNIQUE KEY `ono` (`ono`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `batch` (`batch`),
  ADD KEY `type` (`type`),
  ADD KEY `cat` (`cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `chid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `pid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ityp`
--
ALTER TABLE `ityp`
  MODIFY `iid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `did` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `login_user` (`uid`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`uemail`) REFERENCES `login_user` (`uemail`);

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`ptype`) REFERENCES `ityp` (`tname`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `login_user` (`uid`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`type`) REFERENCES `inventory` (`ptype`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`cat`) REFERENCES `cat` (`cname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
