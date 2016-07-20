-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2016 at 07:03 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsonta`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_detail`
--

CREATE TABLE `daftar_detail` (
  `d_detail_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `daftar_event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_event`
--

CREATE TABLE `daftar_event` (
  `daftar_event_id` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `users_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `ebook_id` int(11) NOT NULL,
  `kategori_ebook_id` int(11) NOT NULL,
  `penulis_id` int(11) NOT NULL,
  `nama_ebook` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_ebook` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `dibaca` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`ebook_id`, `kategori_ebook_id`, `penulis_id`, `nama_ebook`, `nama_file`, `judul`, `isi_ebook`, `gambar`, `dibaca`) VALUES
(1, 2, 2, 'Peraturan Bawaslu Nomor !! Tahun 2014 Tentang Pengawasan Pemilihan Umum', 'perbawaslunomor11tahun2014.pdf', 'perbawaslunomor11tahun2014', 'Peraturan Bawaslu Nomor !! Tahun 2014 Tentang Pengawasan Pemilihan Umum', 'perbawasluno11tahun2014.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `kategori_event_id` int(11) NOT NULL,
  `nama_event` varchar(100) NOT NULL,
  `hari_event` varchar(10) NOT NULL,
  `tanggal_event` date NOT NULL,
  `jam_event` time NOT NULL,
  `Tempat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_ebook`
--

CREATE TABLE `kategori_ebook` (
  `kategori_ebook_id` int(11) NOT NULL,
  `kategori_ebook_nm` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1236 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_ebook`
--

INSERT INTO `kategori_ebook` (`kategori_ebook_id`, `kategori_ebook_nm`) VALUES
(1, 'Undang Undang'),
(2, 'Perbawaslu'),
(3, 'SOP bro');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_event`
--

CREATE TABLE `kategori_event` (
  `kategori_event_id` int(11) NOT NULL,
  `kategori_event_nm` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_event`
--

INSERT INTO `kategori_event` (`kategori_event_id`, `kategori_event_nm`) VALUES
(1, 'Sosialisasi'),
(2, 'Bimtek');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `penulis_id` int(11) NOT NULL,
  `penulis_nm` varchar(100) NOT NULL,
  `penulis_email` varchar(100) NOT NULL,
  `penulis_hp` varchar(20) NOT NULL,
  `blokir` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`penulis_id`, `penulis_nm`, `penulis_email`, `penulis_hp`, `blokir`) VALUES
(1, 'Pemerintah RI', '', '', 'N'),
(2, 'Bawaslu RI', 'sekretariat@bawaslu.go.id', '021-3905889', 'N'),
(9, 'asdas', 'asdasd', 'sadas2132', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `j_kel` enum('pria','wanita') NOT NULL,
  `hp` varchar(20) NOT NULL,
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `last_login` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `nama_lengkap`, `username`, `password`, `alamat`, `email`, `pekerjaan`, `j_kel`, `hp`, `level`, `status`, `last_login`) VALUES
(1, 'sonta', 'sonta', 'c4ca4238a0b923820dcc509a6f75849b', 'sonta', 'sonta@sonta.com', 'sonta', 'pria', '0009999111', 1, 1, '2016-07-10'),
(10, 'ibrahim', 'ibrahim', 'c81e728d9d4c2f636f067f89cc14862c', 'Jalan Pedongkelan Dalam Rt.03 RW04 No32 Pedongkelan Raya, Cengkareng, Jakarta Barat', 'ibrahim@ibrahim.com', 'mahasiswa', 'pria', '098127367763256', 2, 1, '2016-07-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_detail`
--
ALTER TABLE `daftar_detail`
  ADD PRIMARY KEY (`d_detail_id`);

--
-- Indexes for table `daftar_event`
--
ALTER TABLE `daftar_event`
  ADD PRIMARY KEY (`daftar_event_id`),
  ADD UNIQUE KEY `daftar_event_id_3` (`daftar_event_id`),
  ADD KEY `daftar_event_id` (`daftar_event_id`),
  ADD KEY `daftar_event_id_2` (`daftar_event_id`),
  ADD KEY `daftar_event_id_4` (`daftar_event_id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`ebook_id`),
  ADD KEY `kategori_ebook_id` (`kategori_ebook_id`),
  ADD KEY `kategori_ebook_id_2` (`kategori_ebook_id`),
  ADD KEY `penulis_id` (`penulis_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `kategori_event_id` (`kategori_event_id`);

--
-- Indexes for table `kategori_ebook`
--
ALTER TABLE `kategori_ebook`
  ADD PRIMARY KEY (`kategori_ebook_id`),
  ADD KEY `kategori_ebook_id` (`kategori_ebook_id`);

--
-- Indexes for table `kategori_event`
--
ALTER TABLE `kategori_event`
  ADD PRIMARY KEY (`kategori_event_id`),
  ADD KEY `kategori_event_id` (`kategori_event_id`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`penulis_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `users_id_3` (`users_id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `users_id_2` (`users_id`),
  ADD KEY `users_id_4` (`users_id`),
  ADD KEY `users_id_5` (`users_id`),
  ADD KEY `users_id_6` (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_detail`
--
ALTER TABLE `daftar_detail`
  MODIFY `d_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daftar_event`
--
ALTER TABLE `daftar_event`
  MODIFY `daftar_event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `ebook_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori_ebook`
--
ALTER TABLE `kategori_ebook`
  MODIFY `kategori_ebook_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1236;
--
-- AUTO_INCREMENT for table `kategori_event`
--
ALTER TABLE `kategori_event`
  MODIFY `kategori_event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `penulis_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_event`
--
ALTER TABLE `daftar_event`
  ADD CONSTRAINT `daftar_event_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  ADD CONSTRAINT `daftar_event_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);

--
-- Constraints for table `ebook`
--
ALTER TABLE `ebook`
  ADD CONSTRAINT `ebook_ibfk_2` FOREIGN KEY (`penulis_id`) REFERENCES `penulis` (`penulis_id`),
  ADD CONSTRAINT `ebook_ibfk_1` FOREIGN KEY (`kategori_ebook_id`) REFERENCES `kategori_ebook` (`kategori_ebook_id`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`kategori_event_id`) REFERENCES `kategori_event` (`kategori_event_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
