-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 09:15 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kci_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL,
  `jawaban` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'Bagaimana cara belajar Code Igniter?', 'Bisa buka tutorial di web codeigniter.com'),
(2, 'Apakah CodeIgniter bisa dipakai di hosting?', 'Bisa');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'Saksikan Live Streaming Upacara HUT TNI Ke-72 Sekarang', 'tni', 'Tentara Nasional Indonesia (TNI) akan berusia 72 tahun pada 5 Oktober 2017. Berawal dari Tentara Keamanan Rakyat, yang didirikan pada 5 Oktober 1945, kini TNI sudah memiliki alat utama sistem persenjataan (alutsista) yang canggih.\r\n\r\nSegala alutsista TNI akan dipertunjukkan kepada khalayak yang akan menggelar upacara HUT TNI ke-72 di Dermaga Pantai Indah Kiat, Cilegon, Banten, pada Kamis, 5 Oktober 2017. Upacara ini akan dihadiri langsung oleh Presiden Jokowi. '),
(2, '8 Makanan yang Tak Terduga Ternyata Tinggi Kolesterol', 'kolesterol', 'Kue muffin tergolong makanan favorit sebagai dessert saat sarapan. Namun kandungan mentega, susu, telur dan cokelat yang ada di dalamnya bisa meningkatkan kolesterol. (Foto: thinkstock) '),
(3, '4 Alasan Sepeda Motor Banyak Digemari', 'motor', 'Di zaman yang serba cepat ini, banyak orang mulai mencari berbagai cara yang mampu mendukung aktivitas mereka. Tidak hanya smartphone dan laptop saja, tetapi juga kendaraan. Banyak orang mulai berpikir jenis kendaraan yang tepat untuk mereka kendarai demi mendukung mobilitas mereka yang padat.\r\n\r\nTahukah Anda, sebagian besar orang lebih memilih untuk berpergian dengan menggunakan sepeda motor dibanding kendaraan lain seperti mobil pribadi atau transportasi umum. Tidak hanya laki-laki, sudah banyak perempuan yang menjatuhkan pilihan kepada sepeda motor dibanding dengan mobil. Rupanya sepeda motor semakin digemari karena 4 alasan berikut ini:\r\n'),
(4, 'Pixel 2 Jadi Ponsel Pertama yang Tak Butuh Kartu SIM', 'pixel-2-jadi-ponsel-pertama-yang-tak-butuh-kartu-sim', 'Tren teknologi e-SIM atau perangkat yang tidak perlu ribet menggunakan kartu SIM perlahan muncul ke permukaan. Setelah tersemat di Apple Watch 3, kini teknologi tersebut mangkal di ponsel Google Pixel 2 dan Pixel 2 XL.\r\n\r\nPenggunaan kartu SIM pada perangkat seluler sudah bertahun-tahun disyaratkan, itu dilakukan agar pelanggan mendapati layanan telekomunikasi. Sayangnya pemakaian kartu SIM kadang menjadi kendala bagi pelanggan, mulai dari tidak berfungsi saat dipakai ataupun hilang.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tblinventory`
--

CREATE TABLE `tblinventory` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `merek` varchar(50) DEFAULT NULL,
  `serialno` varchar(25) DEFAULT NULL,
  `lokasi` varchar(20) DEFAULT NULL,
  `tglpengadaan` date DEFAULT NULL,
  `nopengadaan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinventory`
--

INSERT INTO `tblinventory` (`id`, `nama`, `merek`, `serialno`, `lokasi`, `tglpengadaan`, `nopengadaan`) VALUES
(1, 'Router A', 'TPLink', '123456', 'PUSAT', '2017-10-10', '123/3456/2017'),
(2, 'Server Web', 'Dell', '3456789', 'DATACENTER', '2017-10-09', '234/456/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`id`, `username`, `password`) VALUES
(1, 'admin', '77ee6d05b23e742e2aca3fd602f4c599');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `tblinventory`
--
ALTER TABLE `tblinventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblinventory`
--
ALTER TABLE `tblinventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
