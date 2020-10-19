-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 12:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject1`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `oderitemsview`
-- (See below for the actual view)
--
CREATE TABLE `oderitemsview` (
`OrderID` varchar(250)
,`Price` float
,`Quantity` int(11)
,`ProductName` varchar(250)
);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderID` varchar(250) NOT NULL,
  `ProductID` varchar(250) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`OrderID`, `ProductID`, `Price`, `Quantity`) VALUES
('SOF1602485858', 'F1', 108, 1),
('SOF1602485858', 'J1', 30, 2),
('SOF1602485858', 'V1', 120, 1),
('SOF1602485858', 'V3', 20, 1),
('SOF1602485968', 'F20201019093050', 50000, 5),
('SOF1602485997', 'D1', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` char(250) NOT NULL,
  `UserID` char(250) NOT NULL,
  `Address` text NOT NULL,
  `Phone` varchar(250) NOT NULL,
  `CreateTime` datetime NOT NULL,
  `OrderStatus` char(250) NOT NULL,
  `Payment` varchar(250) NOT NULL,
  `TotalPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `UserID`, `Address`, `Phone`, `CreateTime`, `OrderStatus`, `Payment`, `TotalPrice`) VALUES
('SOF1602485198', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Shipping', 'Cash', 7.7),
('SOF1602485858', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:57:38', 'Cancel', 'Cash', 338.8),
('SOF1602485898', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Cancel', 'Cash', 7.7),
('SOF1602485968', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Cancel', 'Cash', 7.7),
('SOF1602485991', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Cancel', 'Cash', 7.7),
('SOF1602485992', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Waiting', 'Cash', 7.7),
('SOF1602485993', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Cancel', 'Cash', 7.7),
('SOF1602485994', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Shipping', 'Cash', 7.7),
('SOF1602485995', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Waiting', 'Cash', 7.7),
('SOF1602485996', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Shipping', 'Cash', 7.7),
('SOF1602485997', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Waiting', 'Cash', 7.7),
('SOF1602485998', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Waiting', 'Cash', 7.7),
('SOF1602485999', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Cancel', 'Cash', 7.7);

-- --------------------------------------------------------

--
-- Stand-in structure for view `orderview`
-- (See below for the actual view)
--
CREATE TABLE `orderview` (
`OrderID` char(250)
,`FirstName` varchar(250)
,`LastName` varchar(250)
,`Address` text
,`Phone` varchar(250)
,`CreateTime` datetime
,`OrderStatus` char(250)
,`Payment` varchar(250)
,`TotalPrice` float
);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` char(250) NOT NULL,
  `ProductName` varchar(250) NOT NULL,
  `Price` float NOT NULL,
  `Discount` float NOT NULL,
  `Amount` int(11) NOT NULL,
  `Description` text DEFAULT NULL,
  `Category` varchar(250) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Price`, `Discount`, `Amount`, `Description`, `Category`, `Image`) VALUES
('F20201019093050', 'nho', 100000, 0.5, 100, 'aaaaaaaaaaaaaaa', 'Fruits', '../../utilities/media/nho2020-10-19.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` char(250) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `FirstName` varchar(250) DEFAULT NULL,
  `LastName` varchar(250) DEFAULT NULL,
  `Password` varchar(250) NOT NULL,
  `Phone` varchar(250) DEFAULT NULL,
  `Mail` varchar(250) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `Avatar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `FirstName`, `LastName`, `Password`, `Phone`, `Mail`, `Address`, `Avatar`) VALUES
('USER1602476009', 'ledung', 'Lê', 'Dũng', '202cb962ac59075b964b07152d234b70', '123', 'ledung@gmail.com', '36 hoang cau, ha noi', NULL),
('USER1602476675', 'dungle', NULL, NULL, 'caf1a3dfb505ffed0d024130f58c5cfa', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure for view `oderitemsview`
--
DROP TABLE IF EXISTS `oderitemsview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `oderitemsview`  AS  select `orderdetail`.`OrderID` AS `OrderID`,`orderdetail`.`Price` AS `Price`,`orderdetail`.`Quantity` AS `Quantity`,`products`.`ProductName` AS `ProductName` from (`orderdetail` join `products`) where `orderdetail`.`ProductID` = `products`.`ProductID` ;

-- --------------------------------------------------------

--
-- Structure for view `orderview`
--
DROP TABLE IF EXISTS `orderview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orderview`  AS  select `orders`.`OrderID` AS `OrderID`,`users`.`FirstName` AS `FirstName`,`users`.`LastName` AS `LastName`,`orders`.`Address` AS `Address`,`orders`.`Phone` AS `Phone`,`orders`.`CreateTime` AS `CreateTime`,`orders`.`OrderStatus` AS `OrderStatus`,`orders`.`Payment` AS `Payment`,`orders`.`TotalPrice` AS `TotalPrice` from (`orders` join `users`) where `orders`.`UserID` = `users`.`UserID` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderID`,`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
