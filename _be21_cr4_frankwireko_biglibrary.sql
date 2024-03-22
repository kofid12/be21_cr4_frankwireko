-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 11:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: ` be21_cr4_frankwireko_biglibrary`
--
CREATE DATABASE IF NOT EXISTS ` be21_cr4_frankwireko_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE ` be21_cr4_frankwireko_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ISBN_code` varchar(100) NOT NULL,
  `short_description` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `author_first_name` varchar(25) NOT NULL,
  `author_last_name` varchar(25) NOT NULL,
  `publisher_name` varchar(25) NOT NULL,
  `publisher_address` varchar(25) NOT NULL,
  `publish_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `ISBN_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES
(1, 'The Marriage of Anansewaa ', 'https://cdn.pixabay.com/photo/2019/03/13/15/05/fantasy-4053078_1280.jpg', '9780061120084', 'A work of fiction that focuses on the marriage market framework, ', 'book', 'Kofi', 'Dade', 'Chidi', 'Janis_Joplin_promenade 6,', '2023-03-12'),
(2, 'Fourth wing  ', 'https://cdn.pixabay.com/photo/2019/05/06/11/24/portrait-4182841_1280.jpg', '9780141439600', 'its about the daughter of a high-ranked general, Violet, getting ordered into learning how to become a dragon rider', 'cd', 'Rebecca', 'Yarros', 'Red Tower Books', '92 bronx Avenue,New York ', '2023-05-02'),
(3, '50 shades of Grey ', 'https://cdn.pixabay.com/photo/2019/12/31/11/13/fantasy-4731679_1280.jpg', '9780451524935', 'Ana, a college student, interviews an enigmatic billionaire entrepreneur, Christian, for her campus periodical. A steamy sadomasochistic affair starts between the two, whose roots lie in his past.', 'dvd', 'El', 'James', 'Focus Features', '23 st chris street Chicag', '2015-02-13'),
(4, 'The Lost World', 'https://cdn.pixabay.com/photo/2019/06/10/20/26/fantasy-4265254_1280.jpg', '9780141439525', 'A thrilling adventure to a mysterious land.', 'Book', 'Arthur', 'Conan Doyle', 'Penguin Classics', '123 Penguin Street, Londo', '2022-04-22'),
(5, 'Symphony No. 9', 'https://cdn.pixabay.com/photo/2019/03/17/15/16/fantasy-4061185_1280.jpg', '9780486404114', 'A masterpiece of classical music.', 'CD', 'Ludwig van', 'Beethoven', 'Dover Publications', '456 Music Avenue, Vienna', '1999-06-10'),
(6, 'Inception', 'https://cdn.pixabay.com/photo/2015/11/09/11/52/books-1035087_1280.jpg', '9780792191776', 'A mind-bending thriller about dreams.', 'DVD', 'Christopher', 'Nolan', 'Warner Bros. Pictures', '789 Hollywood Boulevard, ', '2010-12-06'),
(7, 'Pride and Prejudice', 'https://cdn.pixabay.com/photo/2019/10/18/08/20/portrait-4558524_1280.jpg', '9780141439518', 'A timeless tale of love and society.', 'Book', 'Jane', 'Austen', 'Penguin Classics', '123 Penguin Street, Londo', '2003-01-30'),
(8, 'Avatar', 'https://cdn.pixabay.com/photo/2019/03/14/14/51/fantasy-4055030_1280.jpg', '9780792191775', 'An epic journey to a distant world.', 'DVD', 'James', 'Cameron', '20th Century Studios', '456 Hollywood Boulevard, ', '2010-04-22'),
(9, 'The Beatles Anthology', 'https://cdn.pixabay.com/photo/2020/02/23/10/21/fantasy-4872927_1280.jpg', '9780811826846', 'A comprehensive collection of The Beatles history.', 'Book', 'The Beatles', 'Dean', 'Chronicle Books', '789 Rock Avenue, Liverpoo', '2000-10-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN_code` (`ISBN_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
