-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 04:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pokemon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `product_id` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pokemon`
--

CREATE TABLE `tbl_pokemon` (
  `id` int(11) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `password` varchar(128) NOT NULL,
  `player_id` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pokemon`
--

INSERT INTO `tbl_pokemon` (`id`, `email_address`, `password`, `player_id`) VALUES
(1, 'sample@gmail.com', 'password', '8910 1207 3538');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_image`, `product_name`, `product_price`) VALUES
(1, '..\\\\images\\\\600-pokecoins.jpg', '600 PokéCoins', 249.00),
(2, '..\\\\images\\\\1300-pokecoins.png', '1300 PokéCoins', 499.00),
(3, '..\\\\images\\\\2700-pokecoins.png', '2700 PokéCoins', 999.00),
(4, '..\\\\images\\\\5600-pokecoins.png', '5600 PokéCoins', 1990.00),
(5, '..\\\\images\\\\15500-pokecoins.png', '15500 PokéCoins', 4990.00),
(6, '..\\\\images\\\\beginner-box.jpg', 'Beginner Box', 49.00),
(7, '..\\\\images\\\\new-trainer-box.jpg', 'New Trainer Box', 19.00),
(8, '..\\\\images\\\\trainee-box.jpg', 'Trainee Box', 99.00),
(9, '..\\\\images\\\\voyager-box.jpg', 'Voyager Box', 599.00),
(10, '..\\\\images\\\\egg-incubator.png', 'Egg Incubator', 49.00),
(11, '..\\\\images\\\\super-incubator.png', 'Super Incubator', 69.00),
(12, '..\\\\images\\\\poffin.png', 'Poffin', 29.00),
(13, '..\\\\images\\\\20-pokeballs.png', '20 Poké Balls', 29.00),
(14, '..\\\\images\\\\100-pokeballs.png', '100 Poké Balls', 139.00),
(15, '..\\\\images\\\\200-pokeballs.png', '200 Poké Balls', 249.00),
(16, '..\\\\images\\\\incense.png', 'Incense', 9.00),
(17, '..\\\\images\\\\8-incense.png', '8 Incense', 59.00),
(18, '..\\\\images\\\\star-piece.png', 'Star Piece', 29.00),
(19, '..\\\\images\\\\8-star-pieces.png', '8 Star Pieces', 219.00),
(20, '..\\\\images\\\\lucky-egg.png', 'Lucky Egg', 19.00),
(21, '..\\\\images\\\\8-lucky-eggs.png', '8 Lucky Eggs', 129.00),
(22, '..\\\\images\\\\10-max-potions.png', '10 Max Potions', 69.00),
(23, '..\\\\images\\\\6-max-revives.png', '6 Max Revives', 59.00),
(24, '..\\\\images\\\\glacial-lure-module.png', 'Glacial Lure Module', 59.00),
(25, '..\\\\images\\\\mossy-lure-module.png', 'Mossy Lure Module', 59.00),
(26, '..\\\\images\\\\magnetic-lure-module.png', 'Magnetic Lure Module', 59.00),
(27, '..\\\\images\\\\rainy-lure-module.png', 'Rainy Lure Module', 59.00),
(28, '..\\\\images\\\\lure-module.png', 'Lure Module', 29.00),
(29, '..\\\\images\\\\8-lure-modules.png', '8 Lure Modules', 219.00),
(30, '..\\\\images\\\\item-bag.png', 'Item Bag', 69.00),
(31, '..\\\\images\\\\pokemon-storage.png', 'Pokémon Storage', 69.00),
(32, '..\\\\images\\\\postcard-pages.png', 'Postcard Pages', 29.00),
(33, '..\\\\images\\\\anniversary-box.png', 'Anniversary Box', 249.00),
(34, '..\\\\images\\\\community-box.png', 'Ultra Community Day Box', 499.00),
(35, '..\\\\images\\\\global-ticket.jpg', 'Pokémon GO Fest 2023: Global Ticket', 649.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quantity`
--

CREATE TABLE `tbl_quantity` (
  `transaction_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_quantity`
--

INSERT INTO `tbl_quantity` (`transaction_id`, `product_name`, `quantity`) VALUES
(1, '600 PokéCoins', 9),
(6, '600 PokéCoins', 1),
(6, 'Beginner Box', 3),
(6, 'Poffin', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
  `transaction_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `email_address` varchar(256) NOT NULL,
  `gcash_num` varchar(15) NOT NULL,
  `total_amount` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transactions`
--

INSERT INTO `tbl_transactions` (`transaction_id`, `date_time`, `email_address`, `gcash_num`, `total_amount`) VALUES
(1, '2023-07-14 12:39:08', 'sample@gmail.com', '09062693495', 2241.00),
(6, '2023-07-14 12:54:11', 'sample@gmail.com', '09062693495', 512.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pokemon`
--
ALTER TABLE `tbl_pokemon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pokemon`
--
ALTER TABLE `tbl_pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
