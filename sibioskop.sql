-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 07:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bioskops`
--

CREATE TABLE `bioskops` (
  `bioskopID` bigint(20) UNSIGNED NOT NULL,
  `cinemaID` bigint(20) UNSIGNED NOT NULL,
  `bioskop` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bioskops`
--

INSERT INTO `bioskops` (`bioskopID`, `cinemaID`, `bioskop`, `created_at`, `updated_at`) VALUES
(1, 2, '2D', '2023-06-18 01:02:02', '2023-06-18 01:02:02'),
(2, 2, '3D', '2023-06-18 01:02:02', '2023-06-18 01:02:02'),
(3, 3, 'REGULAR 2D', '2023-06-18 01:02:02', '2023-06-18 01:02:02'),
(4, 3, 'STARIUM ATMOS 2D', '2023-06-18 01:02:03', '2023-06-18 01:02:03'),
(5, 4, '4DX2D', '2023-06-18 01:02:03', '2023-06-18 01:02:03'),
(6, 4, 'SPHEREX 2D', '2023-06-18 01:02:03', '2023-06-18 01:02:03'),
(7, 5, '2D', '2023-06-18 01:02:03', '2023-06-18 01:02:03'),
(8, 5, 'REGULAR 3D', '2023-06-18 01:02:03', '2023-06-18 01:02:03'),
(9, 6, '4DX3D', '2023-06-18 01:02:03', '2023-06-18 01:02:03'),
(10, 6, '3D', '2023-06-18 01:02:03', '2023-06-18 01:02:03'),
(11, 7, '2D', '2023-06-18 01:02:03', '2023-06-18 01:02:03'),
(12, 7, 'STARIUM ATMOS 2D', '2023-06-18 01:02:03', '2023-06-18 01:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE `cinemas` (
  `cinemaID` bigint(20) UNSIGNED NOT NULL,
  `lokasiID` bigint(20) UNSIGNED NOT NULL,
  `cinema` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `linkGMaps` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`cinemaID`, `lokasiID`, `cinema`, `slug`, `linkGMaps`, `created_at`, `updated_at`) VALUES
(1, 1, 'Silahkan Pilih Lokasi', 'silahkan-pilih-lokasi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.634549007205!2d112.79235037465187!3d-7.282355992724917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa1323221a93%3A0x306c3c99adedb258!2sSepuluh%20Nopember%20Institute%20of%20Technology!5e0!3m2!1sen!2sid!4v1685464476580!5m2!1sen!2sid', '2023-06-18 01:02:02', '2023-06-18 01:02:02'),
(2, 2, 'BG Junction CGV', 'bg-junction-cgv', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8724376321243!2d112.73121817465156!3d-7.255355892751291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f944808906ff%3A0xb49024a3b07c8918!2sBG%20Junction%20Surabaya!5e0!3m2!1sen!2sid!4v1685463805048!5m2!1sen!2sid', '2023-06-18 01:02:02', '2023-06-18 01:02:02'),
(3, 2, 'Ciputra World Premiere', 'ciputra-world-premiere', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5433961682493!2d112.71671087465181!3d-7.292675392714824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb8af981617d%3A0xd85ddf73b988ae56!2sCiputra%20World%20XXI!5e0!3m2!1sen!2sid!4v1685463871140!5m2!1sen!2sid', '2023-06-18 01:02:02', '2023-06-18 01:02:02'),
(4, 2, 'CITO 21', 'cito-21', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0772373127397!2d112.72531137465242!3d-7.34522374266348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fca9c2171c9f%3A0xefadbc76ce524bdc!2sCity%20of%20Tomorrow%20Mall!5e0!3m2!1sen!2sid!4v1685463962291!5m2!1sen!2sid', '2023-06-18 01:02:02', '2023-06-18 01:02:02'),
(5, 3, 'Citra XXI Semarang', 'citra-xxi-semarang', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1726456064807!2d110.42081127464874!3d-6.988935293012059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6371dc7edbf%3A0xc09f7d0520aaaf90!2sCitra%20XXI!5e0!3m2!1sen!2sid!4v1685464026127!5m2!1sen!2sid', '2023-06-18 01:02:02', '2023-06-18 01:02:02'),
(6, 3, 'Tentrem Mall XXI', 'tentrem-mall-xxi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1913232761726!2d110.41927637464876!3d-6.986730593014224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ba5eccf390f%3A0xcb6b2ed622293930!2sTentrem%20Mall!5e0!3m2!1sen!2sid!4v1685464074989!5m2!1sen!2sid', '2023-06-18 01:02:02', '2023-06-18 01:02:02'),
(7, 3, 'Paragon XXI', 'paragon-xxi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2551965757298!2d110.41340207464866!3d-6.979185793021598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b5242b2daf9%3A0x590ece08d249b4e3!2sMall%20Paragon%20City%20Semarang!5e0!3m2!1sen!2sid!4v1685464143416!5m2!1sen!2sid', '2023-06-18 01:02:02', '2023-06-18 01:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `filmID` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `linkPoster` varchar(255) NOT NULL,
  `linkTrailerID` varchar(255) NOT NULL,
  `linkCoverTrailer` varchar(255) NOT NULL,
  `skorFilm` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL,
  `sutradara` varchar(255) NOT NULL,
  `ratingUsia` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`filmID`, `title`, `slug`, `linkPoster`, `linkTrailerID`, `linkCoverTrailer`, `skorFilm`, `genre`, `durasi`, `sutradara`, `ratingUsia`, `sinopsis`, `created_at`, `updated_at`) VALUES
(1, 'John Wick Chapter 4', 'john-wick-chapter-4', 'https://pics.filmaffinity.com/John_Wick_Chapter_4-101402041-large.jpg', 'yjRHZEUamCc', 'https://i.ytimg.com/vi/yjRHZEUamCc/maxresdefault.jpg', 5, 'Action, Neon-noir, Crime film, Thriller', '2 Jam 49 Menit', 'Chad Stahelski', 'D 17+', 'With the price on his head ever increasing, legendary hit man John Wick takes his fight against the High Table global as he seeks out the most powerful players in the underworld, from New York to Paris to Japan to Berlin.', '2023-06-18 01:02:01', '2023-06-18 01:02:01'),
(2, 'Ant Man : Quantumania', 'ant-man-quantumania', 'https://images.thedirect.com/media/photos/4am_screenx.jpg', '5WfTEZJnv_8', 'https://i.ytimg.com/vi/QbZqS2pvEmQ/maxresdefault.jpg', 5, 'Action, Comedy, Superhero, Science fiction', '2 Jam 4 Menit', 'Peyton Reed', 'R 13+', 'Pada suatu hari', '2023-06-18 01:02:01', '2023-06-18 01:02:01'),
(3, 'Avatar: The Way of Water', 'avatar-the-way-of-water', 'https://i.kinja-img.com/gawker-media/image/upload/c_fit,f_auto,g_center,q_60,w_645/eb4a61461794d426df55290532e15503.jpg', 'o5F8MOz_IDw', 'https://i.ytimg.com/vi/o5F8MOz_IDw/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLC6EfY_-phwEFh_PGn7lQo_4gi6Pg', 5, 'Action', '3 Jam 12 Menit', 'James Cameron', 'PG 13+', 'Pada suatu hari', '2023-06-18 01:02:01', '2023-06-18 01:02:01'),
(4, 'Guardian of The Galaxy Vol 3', 'guardian-of-the-galaxy-vol-3', 'https://www.themoviedb.org/t/p/original/r2J02Z2OpNTctfOSN1Ydgii51I3.jpg', 'u3V5KDHRQvk', 'https://i.ytimg.com/vi/u3V5KDHRQvk/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCPjju4861mrOfgN9gsO8r90BYcEg', 5, 'Action, Drama, Fantasy, Adventure', '2 Jam 29 Menit', 'James Gunn', 'PG 13+', 'Pada suatu hari', '2023-06-18 01:02:01', '2023-06-18 01:02:01'),
(5, 'Oppenheimer', 'oppenheimer', 'https://assets-a1.kompasiana.com/items/album/2023/05/08/poster-film-oppenheimer-2023-foto-dari-rotten-tomatoes-6458adb408a8b57cba48adb3.jpg', 'uYPbbksJxIg', 'https://i.ytimg.com/vi/uYPbbksJxIg/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLA2M_LSAVX5C1yeaypLoWxlz78y5Q', 5, 'History, War, Mystery, Drama, Thriller', '2 Jam 30 Menit', 'Christopher Nolan', 'R 13+', 'Pada suatu hari', '2023-06-18 01:02:01', '2023-06-18 01:02:01'),
(6, 'Buya Hamka', 'buya-hamka', 'https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/n2wfjd2hadzvmcyqhrjugo.jpg', 'fAQnkdaGisM', 'https://i.ytimg.com/vi/fAQnkdaGisM/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLC1DjtaaWcAXTdYBR7OJgZMehgiHA', 5, 'Drama, Biografi, Sejarah', '1 Jam 46 Menit', 'Fajar Bustomi', 'SU', 'Pada suatu hari', '2023-06-18 01:02:01', '2023-06-18 01:02:01'),
(7, 'The Super Mario Bros. Movie', 'the-super-mario-bros.-movie', 'https://upload.wikimedia.org/wikipedia/en/4/44/The_Super_Mario_Bros._Movie_poster.jpg', 'DUnQcJz76Ck', 'https://i.ytimg.com/vi/DUnQcJz76Ck/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLApZDekbvN2Quai5HqyzHMFcSy3xw', 5, 'Animation, Family film, Fantasy, Adventure', '1 Jam 32 Menit', 'Aaron Horvath, Michael Jelenic', 'SU', 'Pada suatu hari', '2023-06-18 01:02:01', '2023-06-18 01:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `history_lokasis`
--

CREATE TABLE `history_lokasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_lokasis`
--

INSERT INTO `history_lokasis` (`id`, `user_id`, `lokasi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Surabaya', '2023-06-18 10:04:50', '2023-06-18 10:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `history_lokasi_guests`
--

CREATE TABLE `history_lokasi_guests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history_lokasi_guests`
--

INSERT INTO `history_lokasi_guests` (`id`, `lokasi`, `created_at`, `updated_at`) VALUES
(1, 'silahkanPilihLokasi', '2023-06-18 01:02:03', '2023-06-18 01:02:03'),
(2, 'Surabaya', '2023-06-18 01:08:37', '2023-06-18 01:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_films`
--

CREATE TABLE `jadwal_films` (
  `showID` bigint(20) UNSIGNED NOT NULL,
  `bioskopID` bigint(20) UNSIGNED NOT NULL,
  `startTimeID` bigint(20) UNSIGNED NOT NULL,
  `filmID` bigint(20) UNSIGNED NOT NULL,
  `showDateID` bigint(20) UNSIGNED NOT NULL,
  `studioID` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,0) NOT NULL,
  `endTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_films`
--

INSERT INTO `jadwal_films` (`showID`, `bioskopID`, `startTimeID`, `filmID`, `showDateID`, `studioID`, `price`, `endTime`) VALUES
(1, 1, 1, 1, 1, 1, 25000, '00:00'),
(2, 1, 8, 1, 1, 1, 25000, '00:00'),
(3, 1, 42, 1, 1, 1, 25000, '00:00'),
(4, 2, 6, 1, 1, 1, 32500, '00:00'),
(5, 2, 19, 1, 1, 1, 32500, '00:00'),
(6, 2, 26, 1, 1, 1, 32500, '00:00'),
(7, 2, 57, 1, 1, 1, 32500, '00:00'),
(8, 3, 4, 1, 1, 1, 32500, '00:00'),
(9, 3, 25, 1, 1, 1, 32500, '00:00'),
(10, 3, 56, 1, 1, 1, 32500, '00:00'),
(11, 3, 60, 1, 1, 1, 32500, '00:00'),
(12, 5, 7, 1, 1, 1, 35500, '00:00'),
(13, 5, 19, 1, 1, 1, 35500, '00:00'),
(14, 5, 36, 1, 1, 1, 35500, '00:00'),
(15, 5, 40, 1, 1, 1, 35500, '00:00'),
(16, 6, 10, 1, 1, 1, 32500, '00:00'),
(17, 6, 50, 1, 1, 1, 32500, '00:00'),
(18, 6, 60, 1, 1, 1, 32500, '00:00'),
(19, 5, 7, 1, 2, 1, 35500, '00:00'),
(20, 5, 19, 1, 2, 1, 35500, '00:00'),
(21, 5, 36, 1, 2, 1, 35500, '00:00'),
(22, 6, 10, 1, 2, 1, 32500, '00:00'),
(23, 6, 50, 1, 2, 1, 32500, '00:00'),
(24, 6, 60, 1, 2, 1, 32500, '00:00'),
(25, 4, 7, 1, 1, 1, 35500, '00:00'),
(26, 4, 19, 1, 1, 1, 35500, '00:00'),
(27, 4, 36, 1, 1, 1, 35500, '00:00'),
(28, 3, 4, 2, 1, 1, 28500, '00:00'),
(29, 3, 25, 2, 1, 1, 28500, '00:00'),
(30, 3, 56, 2, 1, 1, 28500, '00:00'),
(31, 3, 59, 2, 1, 1, 28500, '00:00'),
(32, 4, 11, 2, 1, 1, 28500, '00:00'),
(33, 4, 33, 2, 1, 1, 28500, '00:00'),
(34, 4, 51, 2, 1, 1, 28500, '00:00'),
(35, 5, 13, 2, 1, 1, 28500, '00:00'),
(36, 5, 35, 2, 1, 1, 28500, '00:00'),
(37, 5, 48, 2, 1, 1, 28500, '00:00'),
(38, 2, 13, 3, 1, 1, 28500, '00:00'),
(39, 2, 35, 3, 1, 1, 28500, '00:00'),
(40, 2, 48, 3, 1, 1, 28500, '00:00'),
(41, 3, 3, 4, 1, 1, 27500, '00:00'),
(42, 3, 12, 4, 1, 1, 27500, '00:00'),
(43, 3, 36, 4, 1, 1, 27500, '00:00'),
(44, 3, 51, 4, 1, 1, 27500, '00:00'),
(45, 4, 9, 4, 1, 1, 32000, '00:00'),
(46, 4, 17, 4, 1, 1, 32000, '00:00'),
(47, 4, 29, 4, 1, 1, 32000, '00:00'),
(48, 5, 21, 4, 1, 1, 32500, '00:00'),
(49, 5, 44, 4, 1, 1, 32500, '00:00'),
(50, 5, 55, 4, 1, 1, 32500, '00:00'),
(51, 6, 13, 4, 1, 1, 30000, '00:00'),
(52, 6, 34, 4, 1, 1, 30000, '00:00'),
(53, 6, 47, 4, 1, 1, 30000, '00:00'),
(54, 5, 10, 5, 1, 1, 37000, '00:00'),
(55, 5, 20, 5, 1, 1, 37000, '00:00'),
(56, 5, 30, 5, 1, 1, 37000, '00:00'),
(57, 6, 20, 5, 1, 1, 35500, '00:00'),
(58, 6, 30, 5, 1, 1, 35500, '00:00'),
(59, 6, 40, 5, 1, 1, 35500, '00:00'),
(60, 1, 19, 6, 1, 1, 35000, '00:00'),
(61, 1, 29, 6, 1, 1, 35000, '00:00'),
(62, 1, 39, 6, 1, 1, 35000, '00:00'),
(63, 2, 7, 6, 1, 1, 33500, '00:00'),
(64, 2, 23, 6, 1, 1, 33500, '00:00'),
(65, 2, 45, 6, 1, 1, 33500, '00:00'),
(66, 2, 56, 6, 1, 1, 33500, '00:00'),
(67, 3, 8, 6, 1, 1, 32000, '00:00'),
(68, 3, 17, 6, 1, 1, 32000, '00:00'),
(69, 3, 26, 6, 1, 1, 32000, '00:00'),
(70, 3, 49, 6, 1, 1, 32000, '00:00'),
(71, 4, 19, 6, 1, 2, 37500, '00:00'),
(72, 4, 36, 6, 1, 1, 37500, '00:00'),
(73, 4, 46, 6, 1, 3, 37500, '00:00'),
(74, 1, 19, 7, 1, 2, 36000, '00:00'),
(75, 1, 36, 7, 1, 1, 36000, '00:00'),
(76, 1, 46, 7, 1, 3, 36000, '00:00'),
(77, 2, 13, 7, 1, 2, 34500, '00:00'),
(78, 2, 24, 7, 1, 1, 34500, '00:00'),
(79, 2, 53, 7, 1, 3, 34500, '00:00'),
(80, 5, 17, 7, 1, 2, 49000, '00:00'),
(81, 5, 28, 7, 1, 1, 49000, '00:00'),
(82, 5, 41, 7, 1, 3, 49000, '00:00'),
(83, 6, 2, 7, 1, 2, 47000, '00:00'),
(84, 6, 19, 7, 1, 1, 47000, '00:00'),
(85, 6, 31, 7, 1, 3, 47000, '00:00'),
(86, 7, 1, 1, 1, 1, 25000, '00:00'),
(87, 7, 8, 1, 1, 1, 25000, '00:00'),
(88, 7, 42, 1, 1, 1, 25000, '00:00'),
(89, 8, 6, 1, 1, 1, 32500, '00:00'),
(90, 8, 19, 1, 1, 1, 32500, '00:00'),
(91, 8, 26, 1, 1, 1, 32500, '00:00'),
(92, 8, 57, 1, 1, 1, 32500, '00:00'),
(93, 9, 4, 1, 1, 1, 32500, '00:00'),
(94, 9, 25, 1, 1, 1, 32500, '00:00'),
(95, 9, 56, 1, 1, 1, 32500, '00:00'),
(96, 9, 60, 1, 1, 1, 32500, '00:00'),
(97, 12, 10, 1, 1, 1, 32500, '00:00'),
(98, 12, 50, 1, 1, 1, 32500, '00:00'),
(99, 12, 60, 1, 1, 1, 32500, '00:00'),
(100, 11, 7, 1, 2, 1, 35500, '00:00'),
(101, 11, 19, 1, 2, 1, 35500, '00:00'),
(102, 11, 36, 1, 2, 1, 35500, '00:00'),
(103, 12, 10, 1, 2, 1, 32500, '00:00'),
(104, 12, 50, 1, 2, 1, 32500, '00:00'),
(105, 12, 60, 1, 2, 1, 32500, '00:00'),
(106, 10, 7, 1, 1, 1, 35500, '00:00'),
(107, 10, 19, 1, 1, 1, 35500, '00:00'),
(108, 10, 36, 1, 1, 1, 35500, '00:00'),
(109, 9, 4, 2, 1, 1, 28500, '00:00'),
(110, 9, 25, 2, 1, 1, 28500, '00:00'),
(111, 9, 56, 2, 1, 1, 28500, '00:00'),
(112, 9, 59, 2, 1, 1, 28500, '00:00'),
(113, 10, 11, 2, 1, 1, 28500, '00:00'),
(114, 10, 33, 2, 1, 1, 28500, '00:00'),
(115, 10, 51, 2, 1, 1, 28500, '00:00'),
(116, 11, 13, 2, 1, 1, 28500, '00:00'),
(117, 11, 35, 2, 1, 1, 28500, '00:00'),
(118, 11, 48, 2, 1, 1, 28500, '00:00'),
(119, 8, 13, 3, 1, 1, 28500, '00:00'),
(120, 8, 35, 3, 1, 1, 28500, '00:00'),
(121, 8, 48, 3, 1, 1, 28500, '00:00'),
(122, 9, 3, 4, 1, 1, 27500, '00:00'),
(123, 9, 12, 4, 1, 1, 27500, '00:00'),
(124, 9, 36, 4, 1, 1, 27500, '00:00'),
(125, 9, 51, 4, 1, 1, 27500, '00:00'),
(126, 10, 9, 4, 1, 1, 32000, '00:00'),
(127, 10, 17, 4, 1, 1, 32000, '00:00'),
(128, 10, 29, 4, 1, 1, 32000, '00:00'),
(129, 11, 21, 4, 1, 1, 32500, '00:00'),
(130, 11, 44, 4, 1, 1, 32500, '00:00'),
(131, 11, 55, 4, 1, 1, 32500, '00:00'),
(132, 12, 13, 4, 1, 1, 30000, '00:00'),
(133, 12, 34, 4, 1, 1, 30000, '00:00'),
(134, 12, 47, 4, 1, 1, 30000, '00:00'),
(135, 11, 10, 5, 1, 1, 37000, '00:00'),
(136, 11, 20, 5, 1, 1, 37000, '00:00'),
(137, 11, 30, 5, 1, 1, 37000, '00:00'),
(138, 12, 20, 5, 1, 1, 35500, '00:00'),
(139, 12, 30, 5, 1, 1, 35500, '00:00'),
(140, 12, 40, 5, 1, 1, 35500, '00:00'),
(141, 7, 19, 6, 1, 1, 35000, '00:00'),
(142, 7, 29, 6, 1, 1, 35000, '00:00'),
(143, 7, 39, 6, 1, 1, 35000, '00:00'),
(144, 8, 7, 6, 1, 1, 33500, '00:00'),
(145, 8, 23, 6, 1, 1, 33500, '00:00'),
(146, 8, 45, 6, 1, 1, 33500, '00:00'),
(147, 8, 56, 6, 1, 1, 33500, '00:00'),
(148, 9, 8, 6, 1, 1, 32000, '00:00'),
(149, 9, 17, 6, 1, 1, 32000, '00:00'),
(150, 9, 26, 6, 1, 1, 32000, '00:00'),
(151, 9, 49, 6, 1, 1, 32000, '00:00'),
(152, 10, 19, 6, 1, 2, 37500, '00:00'),
(153, 10, 36, 6, 1, 1, 37500, '00:00'),
(154, 10, 46, 6, 1, 3, 37500, '00:00'),
(155, 7, 19, 7, 1, 2, 36000, '00:00'),
(156, 7, 36, 7, 1, 1, 36000, '00:00'),
(157, 7, 46, 7, 1, 3, 36000, '00:00'),
(158, 8, 13, 7, 1, 2, 34500, '00:00'),
(159, 8, 24, 7, 1, 1, 34500, '00:00'),
(160, 8, 53, 7, 1, 3, 34500, '00:00'),
(161, 12, 2, 7, 1, 2, 47000, '00:00'),
(162, 12, 19, 7, 1, 1, 47000, '00:00'),
(163, 12, 31, 7, 1, 3, 47000, '00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kursis`
--

CREATE TABLE `kursis` (
  `seatID` bigint(20) UNSIGNED NOT NULL,
  `bioskopID` bigint(20) UNSIGNED NOT NULL,
  `seatNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kursis`
--

INSERT INTO `kursis` (`seatID`, `bioskopID`, `seatNumber`) VALUES
(1, 1, 'A1'),
(2, 1, 'A2'),
(3, 1, 'A3'),
(4, 1, 'A4'),
(5, 1, 'A5'),
(6, 1, 'A6'),
(7, 1, 'A7'),
(8, 1, 'A8'),
(9, 1, 'B1'),
(10, 1, 'B2'),
(11, 1, 'B3'),
(12, 1, 'B4'),
(13, 1, 'B5'),
(14, 1, 'B6'),
(15, 1, 'B7'),
(16, 1, 'B8'),
(17, 1, 'C1'),
(18, 1, 'C2'),
(19, 1, 'C3'),
(20, 1, 'C4'),
(21, 1, 'C5'),
(22, 1, 'C6'),
(23, 1, 'C7'),
(24, 1, 'C8'),
(25, 1, 'D1'),
(26, 1, 'D2'),
(27, 1, 'D3'),
(28, 1, 'D4'),
(29, 1, 'D5'),
(30, 1, 'D6'),
(31, 1, 'D7'),
(32, 1, 'D8'),
(33, 1, 'E1'),
(34, 1, 'E2'),
(35, 1, 'E3'),
(36, 1, 'E4'),
(37, 1, 'E5'),
(38, 1, 'E6'),
(39, 1, 'E7'),
(40, 1, 'E8'),
(41, 1, 'F1'),
(42, 1, 'F2'),
(43, 1, 'F3'),
(44, 1, 'F4'),
(45, 1, 'F5'),
(46, 1, 'F6'),
(47, 1, 'F7'),
(48, 1, 'F8'),
(49, 1, 'G1'),
(50, 1, 'G2'),
(51, 1, 'G3'),
(52, 1, 'G4'),
(53, 1, 'G5'),
(54, 1, 'G6'),
(55, 1, 'G7'),
(56, 1, 'G8'),
(57, 1, 'H1'),
(58, 1, 'H2'),
(59, 1, 'H3'),
(60, 1, 'H4'),
(61, 1, 'H5'),
(62, 1, 'H6'),
(63, 1, 'H7'),
(64, 1, 'H8'),
(65, 2, 'A1'),
(66, 2, 'A2'),
(67, 2, 'A3'),
(68, 2, 'A4'),
(69, 2, 'A5'),
(70, 2, 'A6'),
(71, 2, 'A7'),
(72, 2, 'A8'),
(73, 2, 'B1'),
(74, 2, 'B2'),
(75, 2, 'B3'),
(76, 2, 'B4'),
(77, 2, 'B5'),
(78, 2, 'B6'),
(79, 2, 'B7'),
(80, 2, 'B8'),
(81, 2, 'C1'),
(82, 2, 'C2'),
(83, 2, 'C3'),
(84, 2, 'C4'),
(85, 2, 'C5'),
(86, 2, 'C6'),
(87, 2, 'C7'),
(88, 2, 'C8'),
(89, 2, 'D1'),
(90, 2, 'D2'),
(91, 2, 'D3'),
(92, 2, 'D4'),
(93, 2, 'D5'),
(94, 2, 'D6'),
(95, 2, 'D7'),
(96, 2, 'D8'),
(97, 2, 'E1'),
(98, 2, 'E2'),
(99, 2, 'E3'),
(100, 2, 'E4'),
(101, 2, 'E5'),
(102, 2, 'E6'),
(103, 2, 'E7'),
(104, 2, 'E8'),
(105, 2, 'F1'),
(106, 2, 'F2'),
(107, 2, 'F3'),
(108, 2, 'F4'),
(109, 2, 'F5'),
(110, 2, 'F6'),
(111, 2, 'F7'),
(112, 2, 'F8'),
(113, 2, 'G1'),
(114, 2, 'G2'),
(115, 2, 'G3'),
(116, 2, 'G4'),
(117, 2, 'G5'),
(118, 2, 'G6'),
(119, 2, 'G7'),
(120, 2, 'G8'),
(121, 2, 'H1'),
(122, 2, 'H2'),
(123, 2, 'H3'),
(124, 2, 'H4'),
(125, 2, 'H5'),
(126, 2, 'H6'),
(127, 2, 'H7'),
(128, 2, 'H8'),
(129, 3, 'A1'),
(130, 3, 'A2'),
(131, 3, 'A3'),
(132, 3, 'A4'),
(133, 3, 'A5'),
(134, 3, 'A6'),
(135, 3, 'A7'),
(136, 3, 'A8'),
(137, 3, 'B1'),
(138, 3, 'B2'),
(139, 3, 'B3'),
(140, 3, 'B4'),
(141, 3, 'B5'),
(142, 3, 'B6'),
(143, 3, 'B7'),
(144, 3, 'B8'),
(145, 3, 'C1'),
(146, 3, 'C2'),
(147, 3, 'C3'),
(148, 3, 'C4'),
(149, 3, 'C5'),
(150, 3, 'C6'),
(151, 3, 'C7'),
(152, 3, 'C8'),
(153, 3, 'D1'),
(154, 3, 'D2'),
(155, 3, 'D3'),
(156, 3, 'D4'),
(157, 3, 'D5'),
(158, 3, 'D6'),
(159, 3, 'D7'),
(160, 3, 'D8'),
(161, 3, 'E1'),
(162, 3, 'E2'),
(163, 3, 'E3'),
(164, 3, 'E4'),
(165, 3, 'E5'),
(166, 3, 'E6'),
(167, 3, 'E7'),
(168, 3, 'E8'),
(169, 3, 'F1'),
(170, 3, 'F2'),
(171, 3, 'F3'),
(172, 3, 'F4'),
(173, 3, 'F5'),
(174, 3, 'F6'),
(175, 3, 'F7'),
(176, 3, 'F8'),
(177, 3, 'G1'),
(178, 3, 'G2'),
(179, 3, 'G3'),
(180, 3, 'G4'),
(181, 3, 'G5'),
(182, 3, 'G6'),
(183, 3, 'G7'),
(184, 3, 'G8'),
(185, 3, 'H1'),
(186, 3, 'H2'),
(187, 3, 'H3'),
(188, 3, 'H4'),
(189, 3, 'H5'),
(190, 3, 'H6'),
(191, 3, 'H7'),
(192, 3, 'H8'),
(193, 4, 'A1'),
(194, 4, 'A2'),
(195, 4, 'A3'),
(196, 4, 'A4'),
(197, 4, 'A5'),
(198, 4, 'A6'),
(199, 4, 'A7'),
(200, 4, 'A8'),
(201, 4, 'B1'),
(202, 4, 'B2'),
(203, 4, 'B3'),
(204, 4, 'B4'),
(205, 4, 'B5'),
(206, 4, 'B6'),
(207, 4, 'B7'),
(208, 4, 'B8'),
(209, 4, 'C1'),
(210, 4, 'C2'),
(211, 4, 'C3'),
(212, 4, 'C4'),
(213, 4, 'C5'),
(214, 4, 'C6'),
(215, 4, 'C7'),
(216, 4, 'C8'),
(217, 4, 'D1'),
(218, 4, 'D2'),
(219, 4, 'D3'),
(220, 4, 'D4'),
(221, 4, 'D5'),
(222, 4, 'D6'),
(223, 4, 'D7'),
(224, 4, 'D8'),
(225, 4, 'E1'),
(226, 4, 'E2'),
(227, 4, 'E3'),
(228, 4, 'E4'),
(229, 4, 'E5'),
(230, 4, 'E6'),
(231, 4, 'E7'),
(232, 4, 'E8'),
(233, 4, 'F1'),
(234, 4, 'F2'),
(235, 4, 'F3'),
(236, 4, 'F4'),
(237, 4, 'F5'),
(238, 4, 'F6'),
(239, 4, 'F7'),
(240, 4, 'F8'),
(241, 4, 'G1'),
(242, 4, 'G2'),
(243, 4, 'G3'),
(244, 4, 'G4'),
(245, 4, 'G5'),
(246, 4, 'G6'),
(247, 4, 'G7'),
(248, 4, 'G8'),
(249, 4, 'H1'),
(250, 4, 'H2'),
(251, 4, 'H3'),
(252, 4, 'H4'),
(253, 4, 'H5'),
(254, 4, 'H6'),
(255, 4, 'H7'),
(256, 4, 'H8'),
(257, 5, 'A1'),
(258, 5, 'A2'),
(259, 5, 'A3'),
(260, 5, 'A4'),
(261, 5, 'A5'),
(262, 5, 'A6'),
(263, 5, 'A7'),
(264, 5, 'A8'),
(265, 5, 'B1'),
(266, 5, 'B2'),
(267, 5, 'B3'),
(268, 5, 'B4'),
(269, 5, 'B5'),
(270, 5, 'B6'),
(271, 5, 'B7'),
(272, 5, 'B8'),
(273, 5, 'C1'),
(274, 5, 'C2'),
(275, 5, 'C3'),
(276, 5, 'C4'),
(277, 5, 'C5'),
(278, 5, 'C6'),
(279, 5, 'C7'),
(280, 5, 'C8'),
(281, 5, 'D1'),
(282, 5, 'D2'),
(283, 5, 'D3'),
(284, 5, 'D4'),
(285, 5, 'D5'),
(286, 5, 'D6'),
(287, 5, 'D7'),
(288, 5, 'D8'),
(289, 5, 'E1'),
(290, 5, 'E2'),
(291, 5, 'E3'),
(292, 5, 'E4'),
(293, 5, 'E5'),
(294, 5, 'E6'),
(295, 5, 'E7'),
(296, 5, 'E8'),
(297, 5, 'F1'),
(298, 5, 'F2'),
(299, 5, 'F3'),
(300, 5, 'F4'),
(301, 5, 'F5'),
(302, 5, 'F6'),
(303, 5, 'F7'),
(304, 5, 'F8'),
(305, 5, 'G1'),
(306, 5, 'G2'),
(307, 5, 'G3'),
(308, 5, 'G4'),
(309, 5, 'G5'),
(310, 5, 'G6'),
(311, 5, 'G7'),
(312, 5, 'G8'),
(313, 5, 'H1'),
(314, 5, 'H2'),
(315, 5, 'H3'),
(316, 5, 'H4'),
(317, 5, 'H5'),
(318, 5, 'H6'),
(319, 5, 'H7'),
(320, 5, 'H8'),
(321, 6, 'A1'),
(322, 6, 'A2'),
(323, 6, 'A3'),
(324, 6, 'A4'),
(325, 6, 'A5'),
(326, 6, 'A6'),
(327, 6, 'A7'),
(328, 6, 'A8'),
(329, 6, 'B1'),
(330, 6, 'B2'),
(331, 6, 'B3'),
(332, 6, 'B4'),
(333, 6, 'B5'),
(334, 6, 'B6'),
(335, 6, 'B7'),
(336, 6, 'B8'),
(337, 6, 'C1'),
(338, 6, 'C2'),
(339, 6, 'C3'),
(340, 6, 'C4'),
(341, 6, 'C5'),
(342, 6, 'C6'),
(343, 6, 'C7'),
(344, 6, 'C8'),
(345, 6, 'D1'),
(346, 6, 'D2'),
(347, 6, 'D3'),
(348, 6, 'D4'),
(349, 6, 'D5'),
(350, 6, 'D6'),
(351, 6, 'D7'),
(352, 6, 'D8'),
(353, 6, 'E1'),
(354, 6, 'E2'),
(355, 6, 'E3'),
(356, 6, 'E4'),
(357, 6, 'E5'),
(358, 6, 'E6'),
(359, 6, 'E7'),
(360, 6, 'E8'),
(361, 6, 'F1'),
(362, 6, 'F2'),
(363, 6, 'F3'),
(364, 6, 'F4'),
(365, 6, 'F5'),
(366, 6, 'F6'),
(367, 6, 'F7'),
(368, 6, 'F8'),
(369, 6, 'G1'),
(370, 6, 'G2'),
(371, 6, 'G3'),
(372, 6, 'G4'),
(373, 6, 'G5'),
(374, 6, 'G6'),
(375, 6, 'G7'),
(376, 6, 'G8'),
(377, 6, 'H1'),
(378, 6, 'H2'),
(379, 6, 'H3'),
(380, 6, 'H4'),
(381, 6, 'H5'),
(382, 6, 'H6'),
(383, 6, 'H7'),
(384, 6, 'H8'),
(385, 7, 'A1'),
(386, 7, 'A2'),
(387, 7, 'A3'),
(388, 7, 'A4'),
(389, 7, 'A5'),
(390, 7, 'A6'),
(391, 7, 'A7'),
(392, 7, 'A8'),
(393, 7, 'B1'),
(394, 7, 'B2'),
(395, 7, 'B3'),
(396, 7, 'B4'),
(397, 7, 'B5'),
(398, 7, 'B6'),
(399, 7, 'B7'),
(400, 7, 'B8'),
(401, 7, 'C1'),
(402, 7, 'C2'),
(403, 7, 'C3'),
(404, 7, 'C4'),
(405, 7, 'C5'),
(406, 7, 'C6'),
(407, 7, 'C7'),
(408, 7, 'C8'),
(409, 7, 'D1'),
(410, 7, 'D2'),
(411, 7, 'D3'),
(412, 7, 'D4'),
(413, 7, 'D5'),
(414, 7, 'D6'),
(415, 7, 'D7'),
(416, 7, 'D8'),
(417, 7, 'E1'),
(418, 7, 'E2'),
(419, 7, 'E3'),
(420, 7, 'E4'),
(421, 7, 'E5'),
(422, 7, 'E6'),
(423, 7, 'E7'),
(424, 7, 'E8'),
(425, 7, 'F1'),
(426, 7, 'F2'),
(427, 7, 'F3'),
(428, 7, 'F4'),
(429, 7, 'F5'),
(430, 7, 'F6'),
(431, 7, 'F7'),
(432, 7, 'F8'),
(433, 7, 'G1'),
(434, 7, 'G2'),
(435, 7, 'G3'),
(436, 7, 'G4'),
(437, 7, 'G5'),
(438, 7, 'G6'),
(439, 7, 'G7'),
(440, 7, 'G8'),
(441, 7, 'H1'),
(442, 7, 'H2'),
(443, 7, 'H3'),
(444, 7, 'H4'),
(445, 7, 'H5'),
(446, 7, 'H6'),
(447, 7, 'H7'),
(448, 7, 'H8'),
(449, 8, 'A1'),
(450, 8, 'A2'),
(451, 8, 'A3'),
(452, 8, 'A4'),
(453, 8, 'A5'),
(454, 8, 'A6'),
(455, 8, 'A7'),
(456, 8, 'A8'),
(457, 8, 'B1'),
(458, 8, 'B2'),
(459, 8, 'B3'),
(460, 8, 'B4'),
(461, 8, 'B5'),
(462, 8, 'B6'),
(463, 8, 'B7'),
(464, 8, 'B8'),
(465, 8, 'C1'),
(466, 8, 'C2'),
(467, 8, 'C3'),
(468, 8, 'C4'),
(469, 8, 'C5'),
(470, 8, 'C6'),
(471, 8, 'C7'),
(472, 8, 'C8'),
(473, 8, 'D1'),
(474, 8, 'D2'),
(475, 8, 'D3'),
(476, 8, 'D4'),
(477, 8, 'D5'),
(478, 8, 'D6'),
(479, 8, 'D7'),
(480, 8, 'D8'),
(481, 8, 'E1'),
(482, 8, 'E2'),
(483, 8, 'E3'),
(484, 8, 'E4'),
(485, 8, 'E5'),
(486, 8, 'E6'),
(487, 8, 'E7'),
(488, 8, 'E8'),
(489, 8, 'F1'),
(490, 8, 'F2'),
(491, 8, 'F3'),
(492, 8, 'F4'),
(493, 8, 'F5'),
(494, 8, 'F6'),
(495, 8, 'F7'),
(496, 8, 'F8'),
(497, 8, 'G1'),
(498, 8, 'G2'),
(499, 8, 'G3'),
(500, 8, 'G4'),
(501, 8, 'G5'),
(502, 8, 'G6'),
(503, 8, 'G7'),
(504, 8, 'G8'),
(505, 8, 'H1'),
(506, 8, 'H2'),
(507, 8, 'H3'),
(508, 8, 'H4'),
(509, 8, 'H5'),
(510, 8, 'H6'),
(511, 8, 'H7'),
(512, 8, 'H8'),
(513, 9, 'A1'),
(514, 9, 'A2'),
(515, 9, 'A3'),
(516, 9, 'A4'),
(517, 9, 'A5'),
(518, 9, 'A6'),
(519, 9, 'A7'),
(520, 9, 'A8'),
(521, 9, 'B1'),
(522, 9, 'B2'),
(523, 9, 'B3'),
(524, 9, 'B4'),
(525, 9, 'B5'),
(526, 9, 'B6'),
(527, 9, 'B7'),
(528, 9, 'B8'),
(529, 9, 'C1'),
(530, 9, 'C2'),
(531, 9, 'C3'),
(532, 9, 'C4'),
(533, 9, 'C5'),
(534, 9, 'C6'),
(535, 9, 'C7'),
(536, 9, 'C8'),
(537, 9, 'D1'),
(538, 9, 'D2'),
(539, 9, 'D3'),
(540, 9, 'D4'),
(541, 9, 'D5'),
(542, 9, 'D6'),
(543, 9, 'D7'),
(544, 9, 'D8'),
(545, 9, 'E1'),
(546, 9, 'E2'),
(547, 9, 'E3'),
(548, 9, 'E4'),
(549, 9, 'E5'),
(550, 9, 'E6'),
(551, 9, 'E7'),
(552, 9, 'E8'),
(553, 9, 'F1'),
(554, 9, 'F2'),
(555, 9, 'F3'),
(556, 9, 'F4'),
(557, 9, 'F5'),
(558, 9, 'F6'),
(559, 9, 'F7'),
(560, 9, 'F8'),
(561, 9, 'G1'),
(562, 9, 'G2'),
(563, 9, 'G3'),
(564, 9, 'G4'),
(565, 9, 'G5'),
(566, 9, 'G6'),
(567, 9, 'G7'),
(568, 9, 'G8'),
(569, 9, 'H1'),
(570, 9, 'H2'),
(571, 9, 'H3'),
(572, 9, 'H4'),
(573, 9, 'H5'),
(574, 9, 'H6'),
(575, 9, 'H7'),
(576, 9, 'H8'),
(577, 10, 'A1'),
(578, 10, 'A2'),
(579, 10, 'A3'),
(580, 10, 'A4'),
(581, 10, 'A5'),
(582, 10, 'A6'),
(583, 10, 'A7'),
(584, 10, 'A8'),
(585, 10, 'B1'),
(586, 10, 'B2'),
(587, 10, 'B3'),
(588, 10, 'B4'),
(589, 10, 'B5'),
(590, 10, 'B6'),
(591, 10, 'B7'),
(592, 10, 'B8'),
(593, 10, 'C1'),
(594, 10, 'C2'),
(595, 10, 'C3'),
(596, 10, 'C4'),
(597, 10, 'C5'),
(598, 10, 'C6'),
(599, 10, 'C7'),
(600, 10, 'C8'),
(601, 10, 'D1'),
(602, 10, 'D2'),
(603, 10, 'D3'),
(604, 10, 'D4'),
(605, 10, 'D5'),
(606, 10, 'D6'),
(607, 10, 'D7'),
(608, 10, 'D8'),
(609, 10, 'E1'),
(610, 10, 'E2'),
(611, 10, 'E3'),
(612, 10, 'E4'),
(613, 10, 'E5'),
(614, 10, 'E6'),
(615, 10, 'E7'),
(616, 10, 'E8'),
(617, 10, 'F1'),
(618, 10, 'F2'),
(619, 10, 'F3'),
(620, 10, 'F4'),
(621, 10, 'F5'),
(622, 10, 'F6'),
(623, 10, 'F7'),
(624, 10, 'F8'),
(625, 10, 'G1'),
(626, 10, 'G2'),
(627, 10, 'G3'),
(628, 10, 'G4'),
(629, 10, 'G5'),
(630, 10, 'G6'),
(631, 10, 'G7'),
(632, 10, 'G8'),
(633, 10, 'H1'),
(634, 10, 'H2'),
(635, 10, 'H3'),
(636, 10, 'H4'),
(637, 10, 'H5'),
(638, 10, 'H6'),
(639, 10, 'H7'),
(640, 10, 'H8'),
(641, 11, 'A1'),
(642, 11, 'A2'),
(643, 11, 'A3'),
(644, 11, 'A4'),
(645, 11, 'A5'),
(646, 11, 'A6'),
(647, 11, 'A7'),
(648, 11, 'A8'),
(649, 11, 'B1'),
(650, 11, 'B2'),
(651, 11, 'B3'),
(652, 11, 'B4'),
(653, 11, 'B5'),
(654, 11, 'B6'),
(655, 11, 'B7'),
(656, 11, 'B8'),
(657, 11, 'C1'),
(658, 11, 'C2'),
(659, 11, 'C3'),
(660, 11, 'C4'),
(661, 11, 'C5'),
(662, 11, 'C6'),
(663, 11, 'C7'),
(664, 11, 'C8'),
(665, 11, 'D1'),
(666, 11, 'D2'),
(667, 11, 'D3'),
(668, 11, 'D4'),
(669, 11, 'D5'),
(670, 11, 'D6'),
(671, 11, 'D7'),
(672, 11, 'D8'),
(673, 11, 'E1'),
(674, 11, 'E2'),
(675, 11, 'E3'),
(676, 11, 'E4'),
(677, 11, 'E5'),
(678, 11, 'E6'),
(679, 11, 'E7'),
(680, 11, 'E8'),
(681, 11, 'F1'),
(682, 11, 'F2'),
(683, 11, 'F3'),
(684, 11, 'F4'),
(685, 11, 'F5'),
(686, 11, 'F6'),
(687, 11, 'F7'),
(688, 11, 'F8'),
(689, 11, 'G1'),
(690, 11, 'G2'),
(691, 11, 'G3'),
(692, 11, 'G4'),
(693, 11, 'G5'),
(694, 11, 'G6'),
(695, 11, 'G7'),
(696, 11, 'G8'),
(697, 11, 'H1'),
(698, 11, 'H2'),
(699, 11, 'H3'),
(700, 11, 'H4'),
(701, 11, 'H5'),
(702, 11, 'H6'),
(703, 11, 'H7'),
(704, 11, 'H8'),
(705, 12, 'A1'),
(706, 12, 'A2'),
(707, 12, 'A3'),
(708, 12, 'A4'),
(709, 12, 'A5'),
(710, 12, 'A6'),
(711, 12, 'A7'),
(712, 12, 'A8'),
(713, 12, 'B1'),
(714, 12, 'B2'),
(715, 12, 'B3'),
(716, 12, 'B4'),
(717, 12, 'B5'),
(718, 12, 'B6'),
(719, 12, 'B7'),
(720, 12, 'B8'),
(721, 12, 'C1'),
(722, 12, 'C2'),
(723, 12, 'C3'),
(724, 12, 'C4'),
(725, 12, 'C5'),
(726, 12, 'C6'),
(727, 12, 'C7'),
(728, 12, 'C8'),
(729, 12, 'D1'),
(730, 12, 'D2'),
(731, 12, 'D3'),
(732, 12, 'D4'),
(733, 12, 'D5'),
(734, 12, 'D6'),
(735, 12, 'D7'),
(736, 12, 'D8'),
(737, 12, 'E1'),
(738, 12, 'E2'),
(739, 12, 'E3'),
(740, 12, 'E4'),
(741, 12, 'E5'),
(742, 12, 'E6'),
(743, 12, 'E7'),
(744, 12, 'E8'),
(745, 12, 'F1'),
(746, 12, 'F2'),
(747, 12, 'F3'),
(748, 12, 'F4'),
(749, 12, 'F5'),
(750, 12, 'F6'),
(751, 12, 'F7'),
(752, 12, 'F8'),
(753, 12, 'G1'),
(754, 12, 'G2'),
(755, 12, 'G3'),
(756, 12, 'G4'),
(757, 12, 'G5'),
(758, 12, 'G6'),
(759, 12, 'G7'),
(760, 12, 'G8'),
(761, 12, 'H1'),
(762, 12, 'H2'),
(763, 12, 'H3'),
(764, 12, 'H4'),
(765, 12, 'H5'),
(766, 12, 'H6'),
(767, 12, 'H7'),
(768, 12, 'H8');

-- --------------------------------------------------------

--
-- Table structure for table `kursi_pesanans`
--

CREATE TABLE `kursi_pesanans` (
  `seatID` bigint(20) UNSIGNED NOT NULL,
  `orderNumber` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kursi_pesanans`
--

INSERT INTO `kursi_pesanans` (`seatID`, `orderNumber`) VALUES
(1, 1),
(261, 2),
(262, 2),
(270, 2),
(285, 3),
(286, 3);

-- --------------------------------------------------------

--
-- Table structure for table `lokasis`
--

CREATE TABLE `lokasis` (
  `lokasiID` bigint(20) UNSIGNED NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasis`
--

INSERT INTO `lokasis` (`lokasiID`, `lokasi`) VALUES
(1, 'silahkanPilihLokasi'),
(2, 'Surabaya'),
(3, 'Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_05_09_182126_create_users_table', 1),
(5, '2023_05_17_011743_create_films_table', 1),
(6, '2023_05_26_170324_create_lokasis_table', 1),
(7, '2023_05_26_172738_create_cinemas_table', 1),
(8, '2023_05_27_154533_create_history_lokasi_guests_table', 1),
(9, '2023_05_28_095549_create_bioskops_table', 1),
(10, '2023_05_30_170831_create_studios_table', 1),
(11, '2023_05_31_113829_create_waktu_tayangs_table', 1),
(12, '2023_05_31_114106_create_tanggal_tayangs_table', 1),
(13, '2023_05_31_114755_create_jadwal_films_table', 1),
(14, '2023_06_02_172950_create_sessions_table', 1),
(15, '2023_06_06_144458_create_kursis_table', 1),
(16, '2023_06_06_145020_create_pesanans_table', 1),
(17, '2023_06_06_155108_create_kursi_pesanans_table', 1),
(18, '2023_06_06_162059_create_history_lokasis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `orderNumber` bigint(20) UNSIGNED NOT NULL,
  `showID` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bookingCode` varchar(255) NOT NULL,
  `totalPembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`orderNumber`, `showID`, `user_id`, `bookingCode`, `totalPembayaran`) VALUES
(1, 1, 1, '2106547', '100000'),
(2, 81, 1, '444345', '162000'),
(3, 54, 1, '486323', '84000');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

CREATE TABLE `studios` (
  `studioID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studios`
--

INSERT INTO `studios` (`studioID`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Table structure for table `tanggal_tayangs`
--

CREATE TABLE `tanggal_tayangs` (
  `showDateID` bigint(20) UNSIGNED NOT NULL,
  `showDate` date NOT NULL,
  `showDateStr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tanggal_tayangs`
--

INSERT INTO `tanggal_tayangs` (`showDateID`, `showDate`, `showDateStr`) VALUES
(1, '2023-06-14', '14 Jun'),
(2, '2023-06-15', '15 Jun'),
(3, '2023-06-16', '16 Jun'),
(4, '2023-06-17', '17 Jun'),
(5, '2023-06-18', '18 Jun');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `phoneNumber`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', '$2y$10$Fo1IN3I1VmwlnOkowM3wz.j3FyFC0mp1USAyfNc9kJje8hl/ec5Ba', '08123456789', 'johndoe@gmail.com', '2023-06-18 01:56:45', NULL, '2023-06-18 01:02:01', '2023-06-18 01:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_tayangs`
--

CREATE TABLE `waktu_tayangs` (
  `startTimeID` bigint(20) UNSIGNED NOT NULL,
  `startTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `waktu_tayangs`
--

INSERT INTO `waktu_tayangs` (`startTimeID`, `startTime`) VALUES
(1, '10:30'),
(2, '10:45'),
(3, '11:00'),
(4, '11:15'),
(5, '11:30'),
(6, '11:45'),
(7, '12:00'),
(8, '12:15'),
(9, '12:30'),
(10, '12:45'),
(11, '12:00'),
(12, '13:15'),
(13, '13:20'),
(14, '14:30'),
(15, '14:40'),
(16, '14:45'),
(17, '14:55'),
(18, '15:00'),
(19, '15:15'),
(20, '15:25'),
(21, '15:30'),
(22, '15:45'),
(23, '15:55'),
(24, '15:00'),
(25, '15:10'),
(26, '15:15'),
(27, '15:30'),
(28, '15:40'),
(29, '15:45'),
(30, '16:00'),
(31, '16:10'),
(32, '16:15'),
(33, '16:30'),
(34, '16:45'),
(35, '17:00'),
(36, '17:15'),
(37, '17:30'),
(38, '17:35'),
(39, '17:45'),
(40, '17:50'),
(41, '18:00'),
(42, '18:05'),
(43, '18:15'),
(44, '18:20'),
(45, '18:30'),
(46, '18:35'),
(47, '18:45'),
(48, '19:00'),
(49, '19:15'),
(50, '19:30'),
(51, '19:45'),
(52, '20:00'),
(53, '20:15'),
(54, '20:30'),
(55, '20:45'),
(56, '21:00'),
(57, '21:15'),
(58, '21:30'),
(59, '21:45'),
(60, '21:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bioskops`
--
ALTER TABLE `bioskops`
  ADD PRIMARY KEY (`bioskopID`),
  ADD KEY `bioskops_cinemaid_foreign` (`cinemaID`);

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`cinemaID`),
  ADD KEY `cinemas_lokasiid_foreign` (`lokasiID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`filmID`);

--
-- Indexes for table `history_lokasis`
--
ALTER TABLE `history_lokasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_lokasis_user_id_foreign` (`user_id`);

--
-- Indexes for table `history_lokasi_guests`
--
ALTER TABLE `history_lokasi_guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_films`
--
ALTER TABLE `jadwal_films`
  ADD PRIMARY KEY (`showID`),
  ADD KEY `jadwal_films_bioskopid_foreign` (`bioskopID`),
  ADD KEY `jadwal_films_starttimeid_foreign` (`startTimeID`),
  ADD KEY `jadwal_films_filmid_foreign` (`filmID`),
  ADD KEY `jadwal_films_showdateid_foreign` (`showDateID`),
  ADD KEY `jadwal_films_studioid_foreign` (`studioID`);

--
-- Indexes for table `kursis`
--
ALTER TABLE `kursis`
  ADD PRIMARY KEY (`seatID`),
  ADD KEY `kursis_bioskopid_foreign` (`bioskopID`);

--
-- Indexes for table `kursi_pesanans`
--
ALTER TABLE `kursi_pesanans`
  ADD KEY `kursi_pesanans_seatid_foreign` (`seatID`),
  ADD KEY `kursi_pesanans_ordernumber_foreign` (`orderNumber`);

--
-- Indexes for table `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`lokasiID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`orderNumber`),
  ADD KEY `pesanans_showid_foreign` (`showID`),
  ADD KEY `pesanans_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `studios`
--
ALTER TABLE `studios`
  ADD PRIMARY KEY (`studioID`);

--
-- Indexes for table `tanggal_tayangs`
--
ALTER TABLE `tanggal_tayangs`
  ADD PRIMARY KEY (`showDateID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `waktu_tayangs`
--
ALTER TABLE `waktu_tayangs`
  ADD PRIMARY KEY (`startTimeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bioskops`
--
ALTER TABLE `bioskops`
  MODIFY `bioskopID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `cinemaID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `filmID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `history_lokasis`
--
ALTER TABLE `history_lokasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_lokasi_guests`
--
ALTER TABLE `history_lokasi_guests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal_films`
--
ALTER TABLE `jadwal_films`
  MODIFY `showID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `kursis`
--
ALTER TABLE `kursis`
  MODIFY `seatID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=769;

--
-- AUTO_INCREMENT for table `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `lokasiID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `orderNumber` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studios`
--
ALTER TABLE `studios`
  MODIFY `studioID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tanggal_tayangs`
--
ALTER TABLE `tanggal_tayangs`
  MODIFY `showDateID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `waktu_tayangs`
--
ALTER TABLE `waktu_tayangs`
  MODIFY `startTimeID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bioskops`
--
ALTER TABLE `bioskops`
  ADD CONSTRAINT `bioskops_cinemaid_foreign` FOREIGN KEY (`cinemaID`) REFERENCES `cinemas` (`cinemaID`) ON DELETE CASCADE;

--
-- Constraints for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD CONSTRAINT `cinemas_lokasiid_foreign` FOREIGN KEY (`lokasiID`) REFERENCES `lokasis` (`lokasiID`) ON DELETE CASCADE;

--
-- Constraints for table `history_lokasis`
--
ALTER TABLE `history_lokasis`
  ADD CONSTRAINT `history_lokasis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jadwal_films`
--
ALTER TABLE `jadwal_films`
  ADD CONSTRAINT `jadwal_films_bioskopid_foreign` FOREIGN KEY (`bioskopID`) REFERENCES `bioskops` (`bioskopID`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_films_filmid_foreign` FOREIGN KEY (`filmID`) REFERENCES `films` (`filmID`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_films_showdateid_foreign` FOREIGN KEY (`showDateID`) REFERENCES `tanggal_tayangs` (`showDateID`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_films_starttimeid_foreign` FOREIGN KEY (`startTimeID`) REFERENCES `waktu_tayangs` (`startTimeID`) ON DELETE CASCADE,
  ADD CONSTRAINT `jadwal_films_studioid_foreign` FOREIGN KEY (`studioID`) REFERENCES `studios` (`studioID`) ON DELETE CASCADE;

--
-- Constraints for table `kursis`
--
ALTER TABLE `kursis`
  ADD CONSTRAINT `kursis_bioskopid_foreign` FOREIGN KEY (`bioskopID`) REFERENCES `bioskops` (`bioskopID`) ON DELETE CASCADE;

--
-- Constraints for table `kursi_pesanans`
--
ALTER TABLE `kursi_pesanans`
  ADD CONSTRAINT `kursi_pesanans_ordernumber_foreign` FOREIGN KEY (`orderNumber`) REFERENCES `pesanans` (`orderNumber`) ON DELETE CASCADE,
  ADD CONSTRAINT `kursi_pesanans_seatid_foreign` FOREIGN KEY (`seatID`) REFERENCES `kursis` (`seatID`) ON DELETE CASCADE;

--
-- Constraints for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD CONSTRAINT `pesanans_showid_foreign` FOREIGN KEY (`showID`) REFERENCES `jadwal_films` (`showID`) ON DELETE CASCADE,
  ADD CONSTRAINT `pesanans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
