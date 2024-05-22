-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 04:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `client_name` varchar(512) NOT NULL,
  `client_address` varchar(512) NOT NULL,
  `client_phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client_name`, `client_address`, `client_phone`) VALUES
(22, 'asas', '0351562', 'ednf ,qam');

-- --------------------------------------------------------

--
-- Table structure for table `daily_reports`
--

CREATE TABLE `daily_reports` (
  `report_id` int(11) NOT NULL,
  `sales` float NOT NULL,
  `expensses` float NOT NULL,
  `revenues` float NOT NULL,
  `expensses_comments` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(512) DEFAULT NULL,
  `emloyee_address` varchar(512) DEFAULT NULL,
  `phone_numper` varchar(512) DEFAULT NULL,
  `user_name` varchar(50) NOT NULL,
  `employee_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `emloyee_address`, `phone_numper`, `user_name`, `employee_password`) VALUES
(10, 'Omar glal', '12 st 67', '01125548457', 'Omar', '500'),
(11, 'omar galal', '1شارع جمال حمدان', '016451853152', 'galilio', '01391965'),
(13, 'mostafa', '01125612588', 'nasr city', 'zoz', '5060');

-- --------------------------------------------------------

--
-- Table structure for table `exbensess`
--

CREATE TABLE `exbensess` (
  `exbensess_id` int(11) NOT NULL,
  `amount` int(255) NOT NULL,
  `comments` varchar(512) NOT NULL,
  `date` varchar(50) NOT NULL,
  `employee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exbensess`
--

INSERT INTO `exbensess` (`exbensess_id`, `amount`, `comments`, `date`, `employee_id`) VALUES
(4, 60, 'شراء ادوات نظافه', '2024-04-22', 10),
(7, 10, 'اقلام', '2024-04-22', 10);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_price` float DEFAULT NULL,
  `item_name` varchar(512) DEFAULT NULL,
  `item_amount` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_price`, `item_name`, `item_amount`, `section_id`, `supplier_id`) VALUES
(77, 12.5, 'aef', 150, 9, 20),
(83, 0, '', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_invoices`
--

CREATE TABLE `item_invoices` (
  `item_id` int(11) NOT NULL DEFAULT 1,
  `sales_invoices_id_` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_return_invoices`
--

CREATE TABLE `item_return_invoices` (
  `item_id` int(11) NOT NULL,
  `return_invoices_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `return_invoices`
--

CREATE TABLE `return_invoices` (
  `id` int(11) NOT NULL DEFAULT 1,
  `date` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoices`
--

CREATE TABLE `sales_invoices` (
  `id` int(11) NOT NULL,
  `discount` float DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `client_id` int(50) DEFAULT NULL,
  `item_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_invoices`
--

INSERT INTO `sales_invoices` (`id`, `discount`, `date`, `amount`, `total`, `client_id`, `item_id`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 7),
(2, NULL, NULL, NULL, NULL, 22, 77),
(3, 0, NULL, 10, 120, 22, 77),
(4, 0, NULL, 10, 120, 22, 77),
(5, 0, NULL, 0, 0, 0, 83),
(6, 100, NULL, 10, 120, 22, 77);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section_name` varchar(512) NOT NULL,
  `employee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `employee_id`) VALUES
(1, 'pins', NULL),
(7, 'efa', NULL),
(9, 'الادوات', NULL),
(10, 'اللوحات', NULL),
(11, 'الكتب الخارجيه ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `supplier_phone` varchar(512) DEFAULT '',
  `supplier_name` varchar(512) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_phone`, `supplier_name`) VALUES
(1, 'asas55544', 'sasa'),
(20, '011546512358', 'محمد'),
(21, '015348524555', 'مصطفى'),
(23, '0213515', 'asa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `daily_reports`
--
ALTER TABLE `daily_reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `exbensess`
--
ALTER TABLE `exbensess`
  ADD PRIMARY KEY (`exbensess_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `employee_id_2` (`employee_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `items_fk4` (`section_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `item_invoices`
--
ALTER TABLE `item_invoices`
  ADD KEY `Item_invoices_fk0` (`item_id`),
  ADD KEY `Item_invoices_fk1` (`sales_invoices_id_`);

--
-- Indexes for table `item_return_invoices`
--
ALTER TABLE `item_return_invoices`
  ADD KEY `item_id` (`item_id`),
  ADD KEY `return_invoices_id` (`return_invoices_id`);

--
-- Indexes for table `return_invoices`
--
ALTER TABLE `return_invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sales_invoices`
--
ALTER TABLE `sales_invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `Sections_fk2` (`employee_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `daily_reports`
--
ALTER TABLE `daily_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exbensess`
--
ALTER TABLE `exbensess`
  MODIFY `exbensess_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `sales_invoices`
--
ALTER TABLE `sales_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exbensess`
--
ALTER TABLE `exbensess`
  ADD CONSTRAINT `exbensess_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_fk4` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`),
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item_invoices`
--
ALTER TABLE `item_invoices`
  ADD CONSTRAINT `Item_invoices_fk0` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `Item_invoices_fk1` FOREIGN KEY (`sales_invoices_id_`) REFERENCES `sales_invoices` (`id`);

--
-- Constraints for table `item_return_invoices`
--
ALTER TABLE `item_return_invoices`
  ADD CONSTRAINT `item_return_invoices_ibfk_1` FOREIGN KEY (`return_invoices_id`) REFERENCES `return_invoices` (`id`),
  ADD CONSTRAINT `item_return_invoices_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `Sections_fk2` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
