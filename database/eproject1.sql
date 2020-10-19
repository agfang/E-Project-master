-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2020 lúc 04:57 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eproject1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `OrderID` char(250) NOT NULL,
  `UserID` char(250) NOT NULL,
  `Address` text NOT NULL,
  `Phone` varchar(250) NOT NULL,
  `Time` datetime NOT NULL,
  `Status` char(250) NOT NULL,
  `Payment` varchar(250) NOT NULL,
  `TotalAmount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`OrderID`, `UserID`, `Address`, `Phone`, `Time`, `Status`, `Payment`, `TotalAmount`) VALUES
('SOF1602485858', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:57:38', 'Shipping', 'Cash', 338.8),
('SOF1602485997', 'USER1602476009', '36 hoang cau, ha noi', '123', '2020-10-12 08:59:57', 'Shipping', 'Cash', 7.7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `OrderID` varchar(250) NOT NULL,
  `ProductID` varchar(250) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`OrderID`, `ProductID`, `Price`, `Quantity`) VALUES
('SOF1602485858', 'F1', 108, 1),
('SOF1602485858', 'J1', 30, 2),
('SOF1602485858', 'V1', 120, 1),
('SOF1602485858', 'V3', 20, 1),
('SOF1602485997', 'D1', 7, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ProductID` char(250) NOT NULL,
  `ProductName` varchar(250) NOT NULL,
  `Price` float NOT NULL,
  `Discount` float NOT NULL,
  `Amount` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Category` varchar(250) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Price`, `Discount`, `Amount`, `Description`, `Category`, `Image`) VALUES
('D1', 'Garlic', 10, 0.3, 499, 'hahhhhhhhhhh', 'Dried', 'images/product-11.jpg'),
('F1', 'Strawberry', 120, 0.1, 99, 'haaaaaaaaaaaaaaaaa', 'Fruits', 'images/product-2.jpg'),
('F2', 'TOMATOE', 80, 0.1, 500, 'Tomatoe is fruits', 'Fruits', 'images/product-5.jpg'),
('F3', 'APPLE', 140, 0.15, 1000, 'oishi', 'Fruits', 'images/product-10.jpg'),
('J1', 'Apple Juice', 30, 0, 98, 'cccccccccccccccccccccccccc', 'Juice', 'images/product-8.jpg'),
('V1', 'Bell Pepper', 120, 0, 9, 'scssssssssssssssssssss', 'Vegetables', 'images/product-1.jpg'),
('V2', 'Green Beans', 80, 0.5, 200, 'scccccccccccccccccccccc', 'Vegetables', 'images/product-3.jpg'),
('V3', 'Chilli', 20, 0, 4, 'ssssssssssssssssssssssssssss', 'Vegetables', 'images/product-12.jpg'),
('V4', 'PURPLE CABBAGE', 120, 0, 50, 'PPPPPPPPPPPP', 'Vegetables', 'images/product-4.jpg'),
('V5', 'BROCOLLI', 120, 0.2, 300, 'BROCOLLI is ..', 'Vegetables', 'images/product-6.jpg'),
('V6', 'CARROTS', 100, 0.4, 1000, 'CARROTS is vegetables', 'Vegetables', 'images/product-7.jpg'),
('V7', 'ONION', 80, 0.3, 400, 'i dont know', 'Vegetables', 'images/product-9.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `FirstName`, `LastName`, `Password`, `Phone`, `Mail`, `Address`, `Avatar`) VALUES
('USER1602476009', 'ledung', 'Lê', 'Dũng', '202cb962ac59075b964b07152d234b70', '123', 'ledung@gmail.com', '36 hoang cau, ha noi', NULL),
('USER1602476675', 'dungle', NULL, NULL, 'caf1a3dfb505ffed0d024130f58c5cfa', NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderID`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderID`,`ProductID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
