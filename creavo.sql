-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 02:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creavo`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `id_tag` int(11) DEFAULT NULL,
  `id_comment` int(11) DEFAULT NULL,
  `id_like` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_post`, `judul`, `file`, `deskripsi`, `tag`, `id_tag`, `id_comment`, `id_like`, `id_user`, `created_at`, `updated_at`) VALUES
(0, 'Eminem New Show', '1078504164_eminem.mp4', 'eminem video', 'videography', NULL, NULL, NULL, 2, '2022-12-26 07:22:24', '2022-12-26 07:24:18'),
(1, 'Eminem Mocking', '1839441740_eminem.mp4', 'now showing', 'Music', NULL, NULL, NULL, 4, '2022-12-25 19:29:09', NULL),
(2, 'SHAZAM (2022)', '1552827060_shazam.mp4', 'shazam  aja', 'videography', NULL, NULL, NULL, 4, '2022-12-25 19:31:00', NULL),
(3, 'Laut', '492300642_laut.jpg', 'laut', 'nature', NULL, NULL, NULL, 3, '2022-12-25 19:36:13', NULL),
(5, 'Eminem', '1270769476_eminem.mp4', 'eminem dsini', 'videography', NULL, NULL, NULL, 3, '2022-12-25 19:41:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id_tags` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id_tags`, `tags`, `deskripsi`) VALUES
(1, 'PBL', 'ini tag pbl'),
(2, 'Videography', NULL),
(3, 'Fine Art', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT 'guest.jpg',
  `nim` varchar(255) NOT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `desc_user` varchar(255) DEFAULT NULL,
  `tags_user` varchar(255) DEFAULT NULL,
  `user_ig` varchar(255) DEFAULT NULL,
  `user_lin` varchar(255) DEFAULT NULL,
  `user_twt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `nama_lengkap`, `foto`, `nim`, `jurusan`, `desc_user`, `tags_user`, `user_ig`, `user_lin`, `user_twt`) VALUES
(1, 'guest', 'guest', 'guest', 'default.svg', 'guest', '0', '0', '0', NULL, NULL, NULL),
(2, 'test.41230012', 'test12345', 'Nurmala Sari', 'nurmala.jpg', '41230012', NULL, 'Mahasiswa kupu kupu', 'Videography, Codeigniter, Music', 'nurmalaasrr', 'polibatam_', 'twt'),
(3, 'agustin.44212121', 'agustin', 'Agustin', 'default.svg', '44212121', NULL, 'ig tercantum', 'Videography, Codeigniter, Fine Arts', 'nurmalaasrr', 'politeknik-batam', 'twt'),
(4, 'sinta.3312102121', 'sinta', 'Sinta Ningsih', 'default.svg', '3312102121', NULL, 'Sinta and Jojo', 'Music', 'nurmalaasrr', 'politeknik-batam', 'twt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id_tags`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id_tags` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
