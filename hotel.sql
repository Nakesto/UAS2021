-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2021 at 07:20 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_kamar`
--

CREATE TABLE `book_kamar` (
  `id_book` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tanggal_book` date NOT NULL,
  `tanggal_out` date NOT NULL,
  `status` int(11) NOT NULL,
  `nomor_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_kamar`
--

INSERT INTO `book_kamar` (`id_book`, `id_user`, `id_kamar`, `tanggal_book`, `tanggal_out`, `status`, `nomor_kamar`) VALUES
(1, 2, 4, '2021-12-07', '2021-12-13', 0, 2),
(2, 3, 1, '2021-12-10', '2021-12-15', 0, 2),
(3, 1, 2, '2021-12-07', '2021-12-12', 0, 3),
(4, 4, 2, '2021-12-21', '2021-12-26', 0, 1),
(5, 3, 1, '2021-12-25', '2021-12-28', 1, 3),
(6, 4, 1, '2021-12-20', '2021-12-24', 2, 2),
(7, 2, 5, '2021-12-10', '2021-12-14', 1, 1),
(8, 1, 7, '2021-12-16', '2021-12-20', 0, 1),
(9, 4, 4, '2021-12-19', '2021-12-23', 1, 3),
(10, 2, 6, '2021-12-28', '2021-12-31', 0, 1),
(11, 4, 1, '2021-12-28', '2021-12-31', 0, 1),
(12, 3, 4, '2021-12-28', '2021-12-31', 1, 3),
(13, 2, 3, '2021-12-29', '2021-12-31', 0, 2),
(14, 1, 3, '2021-12-28', '2021-12-31', 0, 1),
(15, 4, 6, '2021-12-15', '2021-12-19', 0, 2),
(16, 3, 6, '2021-12-24', '2021-12-28', 0, 2),
(17, 3, 5, '2021-12-20', '2021-12-24', 0, 1),
(18, 2, 5, '2021-12-16', '2021-12-22', 0, 2),
(19, 1, 4, '2021-12-15', '2021-12-20', 0, 1),
(20, 4, 2, '2021-12-15', '2021-12-21', 1, 2),
(21, 2, 3, '2021-12-22', '2021-12-26', 0, 3),
(22, 1, 5, '2021-12-21', '2021-12-29', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `detail_kamar`
--

CREATE TABLE `detail_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nomor_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_kamar`
--

INSERT INTO `detail_kamar` (`id_kamar`, `nomor_kamar`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(6, 2),
(7, 1),
(8, 1),
(9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(50) DEFAULT NULL,
  `harga_kamar` int(11) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `gambar_kamar` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nama_kamar`, `harga_kamar`, `deskripsi`, `gambar_kamar`) VALUES
(1, 'Standar Room', 400000, 'Standard room memiliki satu tempat tidur, satu kamar mandi, free wi-fi dan memiliki road view.', 'standar.jpg'),
(2, 'Superior Room', 600000, 'Superior room memiliki dua tempat tidur, satu kamar mandi, free wi-fi dan memiliki road view.', 'superior.jpg'),
(3, 'Deluxe Room', 800000, 'Deluxe room memiliki kamar yang luas dengan dua tempat tidur, satu kamar mandi, free wi-fi dan memiliki pool view.', 'deluxe.jpg'),
(4, 'Junior Suite Room', 1000000, 'Junior suite room memiliki dua kamar tidur, dua kamar mandi,free wi-fi dan memiliki pool view.', 'junior.jpg'),
(5, 'Suite Room', 1500000, 'Suite room memiliki dua kamar tidur, dua kamar mandi, satu ruang tamu, free wi-fi dan memiliki pool view.', 'suite.jpg'),
(6, 'Presindental Suite', 3000000, 'Presindental suite merupakan kamar terluas dalam hotel transyvlania, memiliki desain yang elegan, minimalis, dan modern. Presidental suite memiliki dua kamar tidur, dua kamar mandi,free wi-fi dan memiliki private pool.', 'presidental.jpg'),
(7, 'Translyvania Ballroom Alpha', 20000000, 'Translyvania ballroom alpha cocok buat anda yang ingin mengadakan acara dengan kapasitas maksimal 40 orang', 'alpha.jpg'),
(8, 'Translyvania Ballroom Beta', 40000000, 'Translyvania Ballroom Beta memiliki muatan kapasitas maksmimal 100 orang, cocok buat anda yang ingin mengadakan pesta atau bisnis.', 'beta.jpg'),
(9, 'Berjuta Rasa Restaurant', 5000000, 'Berjuta Rasa Restaurant merupakan restoran terbaik nomor 1 di Indonesia, dengan chef yang professional, cita rasa yang special, dan tema restoran yang modern dan minimalis. Restoran berkapasitas maksmimal 10 orang.', 'berjuta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_depan` varchar(20) DEFAULT NULL,
  `nama_belakang` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `gambar` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_depan`, `nama_belakang`, `email`, `pass`, `gambar`) VALUES
(1, 'Richie', 'Darmawan Oey', 'richie@gmail.com', '$2b$10$80GHE2uSULtsuk669.ETC.buuTYoouPRIQPsSGQwLZm1jnHNBNQvi', 'richie.jpg'),
(2, 'Vincent', 'Gunawan', 'vincent@gmail.com', '$2b$10$1tqqH9/4D6PQ71UtxKoieuUIGYTeWCyQjly58EqdDxvz3/M1TtbXS', 'vincent.jpg'),
(3, 'Rommy', 'Kusuma Jaya', 'rommy@gmail.com', '$2b$10$ahRC6Wtc59EeKpAryN3WEuvUS9vbxLjRCoY0KMBSwp1VR9ZyVxBS.', 'rommy.jpg'),
(4, 'Jezreel', 'Kosasih', 'jezreel@gmail.com', '$2b$10$13hMl6vNDYNPb/zZb9DcfO0dKBcxUW.ucNzwAjN3WW0dw0zJRl6/a', 'jezreel.jpg'),
(5, 'Erick', 'Thohir', 'erick@admin.com', '$2b$10$TxXQIC9HxbgmdNwEZCqLl.TKBemFagQSgD4Wk5TWrSencEaJRtZmC', 'erick.jpg'),
(6, 'Elon', 'Musk', 'elon@management.com', '$2b$10$H0lTRqCCX/zNQURudvSZ0u1MSSiWHJ22zbHEp4lkN1kIM./bHh5Ce', 'elon.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_kamar`
--
ALTER TABLE `book_kamar`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `pesan_kamar` (`id_kamar`),
  ADD KEY `nama_book` (`id_user`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_kamar`
--
ALTER TABLE `book_kamar`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
