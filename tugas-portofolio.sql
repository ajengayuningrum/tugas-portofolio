-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 03:21 PM
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
-- Database: `tugas-portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `tentang` text NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `nomor_handphone` varchar(16) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `tentang`, `tanggal_lahir`, `nomor_handphone`, `kota`, `jurusan`, `email`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Je suis tuteur et traductrice  de l’agence Ruang Bahasa et Bimbel Smarter. J\'ai à cœur d’enseigner la langue française et à étudier le domaine de l\'éducation pour préparer à devenir une bonne professeure. Et maintenant, je m\'intéresse à la programmation de web et je l\'étudie actuellement. Dans la section portfolio, vous trouverez plusieurs exemples de résultats de mon portfolio.', '20 Juin', '089689591874', 'Jakarta', 'L’Éducation de langue française ', 'ayumutiara0620@gmail.com', 'fotokomaru.jpg', '2024-10-27 11:56:32', '2024-10-30 14:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `caption` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_setting`
--

CREATE TABLE `general_setting` (
  `id` int(11) NOT NULL,
  `website_name` varchar(50) NOT NULL,
  `website_link` varchar(50) DEFAULT NULL,
  `website_phone` varchar(16) NOT NULL,
  `website_address` text NOT NULL,
  `twitter_link` varchar(100) DEFAULT NULL,
  `fb_link` varchar(100) DEFAULT NULL,
  `ig_link` varchar(100) DEFAULT NULL,
  `linkedin_link` varchar(100) DEFAULT NULL,
  `logo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `website_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_setting`
--

INSERT INTO `general_setting` (`id`, `website_name`, `website_link`, `website_phone`, `website_address`, `twitter_link`, `fb_link`, `ig_link`, `linkedin_link`, `logo`, `created_at`, `updated_at`, `website_email`) VALUES
(1, 'Ajeng Ayuningrum', 'https://web.whatsapp.com/', '089689591874', 'Jalan Pondok Pinang 3', NULL, NULL, NULL, NULL, '', '2024-10-27 08:47:44', '2024-10-30 14:02:39', 'ayumutiara0620@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `universitas` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `jurusan`, `tahun`, `universitas`, `created_at`, `updated_at`) VALUES
(1, 'L’Éducation de langue française', '2021', 'Universitas Ngeri Jakarta', '2024-10-30 12:51:20', '2024-10-30 12:51:20'),
(2, 'L\'Office d\'Administration', '2014', 'SMK Negeri 18 Jakarta', '2024-10-30 12:52:07', '2024-10-30 12:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi_foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `foto`, `deskripsi_foto`, `created_at`, `updated_at`) VALUES
(1, 'fotocimong.jpeg', 'Création de pages web du IPDC', '2024-10-30 13:45:58', '2024-10-30 13:45:58'),
(2, 'fotocimong.jpeg', 'Création de pages web du perpustakaan', '2024-10-30 13:46:48', '2024-10-30 13:46:48'),
(3, 'Screenshot 2024-10-30 211449.png', 'Création de pages web du portfolio', '2024-10-30 13:47:06', '2024-10-30 14:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `profesi` varchar(50) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `deskripsi_profesi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `profesi`, `tempat`, `tahun`, `deskripsi_profesi`, `created_at`, `update_at`) VALUES
(1, 'Tuteur de la langue  française', 'Jakarta Selatan', '2018-2023', 'Enseigner la langue  française au niveau A1-A2', '2024-10-29 08:04:24', '2024-10-30 12:24:29'),
(2, 'Traductrice', 'Jakarta Selatan', '2021', 'Traduire le sous-titre de la série \"Garuda Selection\"', '2024-10-29 08:11:07', '2024-10-30 12:24:16'),
(3, 'Professeur stagiaire', 'Jakarta Timur', '2018', 'Enseigner la langue  française pour le programme d\'activité d\'enseignement.', '2024-10-30 12:29:10', '2024-10-30 12:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(50) NOT NULL,
  `deskripsi_skill` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `deskripsi_skill`, `created_at`, `updated_at`) VALUES
(1, 'La langue française', 'Capable de parler français au niveau B2', '2024-10-27 13:10:13', '2024-10-30 12:09:42'),
(3, 'la langue Indonésien', 'Langue maternelle', '2024-10-29 05:08:33', '2024-10-30 12:13:02'),
(4, 'La langue anglaise', 'Au niveau intermédiaire ', '2024-10-30 12:15:05', '2024-10-30 12:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Ajeng Ayuningrum', 'ajeng@gmail.com', '123', '', '2024-10-27 08:14:25', '2024-10-27 08:14:25'),
(2, 'ajeng', 'admin@gmail.com', '123', 'winter-aespa.jpg', '2024-10-29 07:31:29', '2024-10-29 07:31:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_setting`
--
ALTER TABLE `general_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
