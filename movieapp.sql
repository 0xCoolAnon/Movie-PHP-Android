-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 04:53 PM
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
-- Database: `eperolehanv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_code` varchar(100) NOT NULL,
  `d_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`d_id`, `d_name`, `d_code`, `d_status`) VALUES
(1, 'Perlesenan', 'LESEN', 1),
(2, 'Ahli Majlis', 'MAJLIS', 1),
(3, 'Orang Awam', 'AWAM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `d_id` int(11) NOT NULL,
  `d_tajuk` varchar(1000) NOT NULL,
  `d_desc` varchar(1000) NOT NULL,
  `d_content` longtext NOT NULL,
  `d_department` int(11) NOT NULL,
  `d_iklan_mula` datetime NOT NULL,
  `d_iklan_tamat` datetime NOT NULL,
  `d_status` int(11) NOT NULL,
  `d_anggaran_kos` double NOT NULL,
  `d_anggaran_masa` varchar(100) NOT NULL,
  `d_no_fail` varchar(100) NOT NULL,
  `d_no_dokumen` varchar(100) NOT NULL,
  `d_lantik` int(11) NOT NULL,
  `d_tarikh_lantik` date NOT NULL,
  `d_keperluan_dokumen` varchar(255) NOT NULL,
  `d_telah_nilai` int(11) NOT NULL,
  `d_user` int(11) NOT NULL,
  `d_uid` varchar(255) NOT NULL,
  `d_harga_dokumen` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`d_id`, `d_tajuk`, `d_desc`, `d_content`, `d_department`, `d_iklan_mula`, `d_iklan_tamat`, `d_status`, `d_anggaran_kos`, `d_anggaran_masa`, `d_no_fail`, `d_no_dokumen`, `d_lantik`, `d_tarikh_lantik`, `d_keperluan_dokumen`, `d_telah_nilai`, `d_user`, `d_uid`, `d_harga_dokumen`) VALUES
(1, 'Sample Projecy', '', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 20000, '3 bulan', 'MBJB/2023/0002', '764897456', 0, '0000-00-00', '', 0, 0, 'dok_64c6833013de8', 0),
(3, 'Projek Naiktaraf Infra Server', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', 'PL/2023/IT/0001', '8976589', 0, '0000-00-00', '', 0, 0, 'dok_64c68427f26d6', 0),
(7, 'dgdfg', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', 'gdfgdfgdfg', 'dfgdgdfg', 0, '0000-00-00', '', 0, 0, 'dok_64c6833013de9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_lampiran`
--

CREATE TABLE `dokumen_lampiran` (
  `dl_id` int(11) NOT NULL,
  `dl_key` varchar(255) NOT NULL,
  `dl_dokumen` int(11) NOT NULL,
  `dl_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_submit`
--

CREATE TABLE `dokumen_submit` (
  `ds_id` int(11) NOT NULL,
  `ds_syarikat` int(11) NOT NULL,
  `ds_dokumen` int(11) NOT NULL,
  `ds_tarikh_submit` datetime NOT NULL,
  `ds_nilai` double NOT NULL,
  `ds_tempoh` varchar(100) NOT NULL,
  `ds_bil_petender` int(11) NOT NULL,
  `ds_user` int(11) NOT NULL,
  `ds_key` varchar(255) NOT NULL,
  `ds_catatan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumen_submit`
--

INSERT INTO `dokumen_submit` (`ds_id`, `ds_syarikat`, `ds_dokumen`, `ds_tarikh_submit`, `ds_nilai`, `ds_tempoh`, `ds_bil_petender`, `ds_user`, `ds_key`, `ds_catatan`) VALUES
(1, 1, 1, '2023-07-30 17:17:53', 0, '', 1, 1, '', ''),
(2, 2, 1, '2023-07-30 17:17:53', 1, '1', 2, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_syarikat`
--

CREATE TABLE `dokumen_syarikat` (
  `ds_id` int(11) NOT NULL,
  `ds_dokumen` int(11) NOT NULL,
  `ds_syarikat` int(11) NOT NULL,
  `ds_tarikh` datetime NOT NULL,
  `ds_harga` double NOT NULL,
  `ds_no_resit` int(11) NOT NULL,
  `ds_user` int(11) NOT NULL,
  `ds_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumen_syarikat`
--

INSERT INTO `dokumen_syarikat` (`ds_id`, `ds_dokumen`, `ds_syarikat`, `ds_tarikh`, `ds_harga`, `ds_no_resit`, `ds_user`, `ds_key`) VALUES
(1, 1, 1, '2023-07-30 17:49:30', 100, 1212, 1, 'ddfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `i_id` int(11) NOT NULL,
  `i_syarikat` int(11) NOT NULL,
  `i_key` varchar(255) NOT NULL,
  `i_nama` varchar(500) NOT NULL,
  `i_keterangan` varchar(1000) NOT NULL,
  `i_kod` varchar(255) NOT NULL,
  `i_jenis` int(11) NOT NULL,
  `i_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`i_id`, `i_syarikat`, `i_key`, `i_nama`, `i_keterangan`, `i_kod`, `i_jenis`, `i_harga`) VALUES
(1, 1, 'aaa', 'produk testing saje', 'Cuma Produk', 'sdfsdf', 0, 2500),
(2, 1, 'bbb', 'asdasdd asda sdsd ', 'cuma produk 2', 'fadfwergever', 1, 1000000),
(3, 1, 'aaasdsfsdf', 'Produk 1fsdsdf', 'Cuma Produksfsdf', 'sdfsdfdsf', 0, 231),
(4, 1, 'aaasdsfsdfsfdg sgfsdgfsg', 'Produk 1fsdsdfsdfgsd fgsdfg', 'Cuma Produksfsdfsdfgsdfgsd', 'sdfsdfdsf gfsdfg', 0, 2345),
(5, 1, 'bbbtttt', 'produk 2ffff', 'cuma produk 2ffff', 'fadfwergeverfff', 1, 670),
(6, 1, 'bbbrrrr', 'produk 2rrr', 'cuma produk 2rrr', 'fadfwergeverrrr', 1, 2500),
(7, 1, 'bbbrrrrrrrrtt', 'produk 2rrrtttt', 'cuma produk 2rrrtttt', 'fadfwergeverrrrtttt', 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `lantikan`
--

CREATE TABLE `lantikan` (
  `l_id` int(11) NOT NULL,
  `l_syarikat` int(11) NOT NULL,
  `l_dokumen` int(11) NOT NULL,
  `l_tarikh_lantikan` varchar(100) NOT NULL,
  `l_tarikh_mula` datetime NOT NULL,
  `l_tarikh_tamat` datetime NOT NULL,
  `l_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lantikan`
--

INSERT INTO `lantikan` (`l_id`, `l_syarikat`, `l_dokumen`, `l_tarikh_lantikan`, `l_tarikh_mula`, `l_tarikh_tamat`, `l_key`) VALUES
(1, 1, 1, '0', '2023-08-01 17:12:05', '2023-08-01 17:12:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `m_id` int(11) NOT NULL,
  `m_main` int(11) NOT NULL,
  `m_sort` int(11) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_url` varchar(255) NOT NULL,
  `m_route` varchar(255) NOT NULL,
  `m_status` int(11) NOT NULL,
  `m_description` varchar(255) NOT NULL,
  `m_short` varchar(3) NOT NULL,
  `m_icon` varchar(255) NOT NULL,
  `m_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`m_id`, `m_main`, `m_sort`, `m_name`, `m_url`, `m_route`, `m_status`, `m_description`, `m_short`, `m_icon`, `m_role`) VALUES
(1, 0, 1, 'Dashboard', 'dashboard', 'dashboard', 1, 'Paparan data mengikut peta kawasan', '', 'typcn typcn-chart-bar', '0'),
(7, 13, 3, 'Gerai', 'gerai', 'gerai', 1, 'Senarai Maklumat Pemohon & Permohonan', 'GER', 'typcn typcn-th-large', '0,1,2'),
(8, 0, 8, 'Pengguna', 'pengguna', 'pengguna', 1, 'Senarai Pengguna Dalaman &amp; Luaran', '', 'fa fa-users', '0'),
(9, 0, 100, 'Settings', 'settings', 'settings', 1, 'All System Settings', '', 'typcn typcn-cog-outline', '0'),
(10, 9, 1, 'Menus', 'menus', 'menus', 1, 'Manage System Menus', 'MNU', '', '0'),
(11, 5, 2, 'Gerai', 'gerai', 'gerai', 1, 'Pengurusan Data Gerai', 'GRI', '', '0,1,2'),
(12, 5, 2, 'Kawasan', 'kawasan-perniagaan', 'kawasan-perniagaan', 1, 'Pengurusan Data Gerai', 'GRI', '', '0,1,2'),
(14, 13, 3, 'Pembaharuan', 'pembaharuan', 'pembaharuan', 1, 'Pembaharuan Kontrak Sewa Gerai', 'BAH', 'typcn typcn-th-large', '0,1,2'),
(15, 13, 3, 'Wang Cagaran', 'cagaran', 'cagaran', 1, 'Permohonan Wang Cagaran', 'WCG', 'typcn typcn-th-large', '0,1,2'),
(16, 13, 3, 'Pindah Milik', 'pindah-milik', 'pindah-milik', 1, 'Permohonan Pindah Milik', 'MLK', 'typcn typcn-th-large', '0,1,2'),
(21, 9, 1, 'Rol Pengguna', 'rols', 'rols', 1, 'Senarai Rol Pengguna', 'ROL', 'typcn typcn-th-large', '0'),
(23, 9, 1, 'Jabatan', 'jabatan', 'jabatan', 1, 'Data-data Jabatan', 'JAB', '', '0'),
(24, 0, 2, 'Dokumen', 'dokumen', 'dokumen', 1, 'Modul pengurusan dokumen-dokumen tender', 'DOK', 'fa fa-file-o', '0'),
(25, 0, 3, 'Syarikat', 'syarikat', 'syarikat', 1, 'Modul pengurusan maklumat syarikat', 'SYK', 'fa fa-building', '0'),
(26, 0, 4, 'Pembuka', 'pembuka', 'pembuka', 1, 'Modul pembuka tender', 'PBK', 'fa fa-envelope', '0'),
(27, 0, 5, 'Penilai', 'penilai', 'penilai', 1, 'Modul penilai tender', 'PEN', 'fa fa-area-chart', '0'),
(28, 0, 6, 'Lantikan', 'lantikan', 'lantikan', 1, 'Modul lantikan tender', 'LAN', 'fa fa-user-secret', '0'),
(29, 0, 7, 'Kewangan', 'kewangan', 'kewangan', 1, 'Pengurusan Kewangan ePerolehan', 'KEW', 'fa fa-dollar', '0'),
(30, 0, 1, 'Dashboard', 'dashboard', 'vendor/dashboard', 1, 'Dashboard venndor', '', 'fa fa-dashboard', '6'),
(31, 0, 2, 'Iklan', 'iklan', 'vendor/iklan', 1, 'Senarai iklan tender/sebutharga', '', 'fa fa-file', '6'),
(32, 0, 3, 'Serahan Dokumen', 'serahan-dokumen', 'vendor/serahan-dokumen', 1, 'Serahan Dokuemen Tender/Sebutharga', '', 'fa fa-check-square', '6'),
(33, 0, 4, 'Lantikan', 'lantikan-syarikat', 'vendor/lantikan', 1, 'Searai tender yang dilantik', '', 'fa fa-certificate', '6'),
(34, 0, 1, 'Katalog', 'katalog', 'vendor/katalog', 1, 'Senarai katalog produk dan perkhidmatan\r\n', '', 'fa fa-bookmark', '6');

-- --------------------------------------------------------

--
-- Table structure for table `mrks`
--

CREATE TABLE `mrks` (
  `m_id` int(11) NOT NULL,
  `m_dokumen` int(11) NOT NULL,
  `m_syarikat` int(11) NOT NULL,
  `m_peratusan_kontraktor` int(11) NOT NULL,
  `m_peratusan_pembekal` int(11) NOT NULL,
  `m_tarikh_kemaskini` datetime NOT NULL,
  `m_user` int(11) NOT NULL,
  `m_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_menu` varchar(100) NOT NULL,
  `r_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`r_id`, `r_name`, `r_menu`, `r_status`) VALUES
(0, 'Admin', '', 1),
(1, 'Jawatankuasa Tertinggi', '', 1),
(2, 'Pengarah Jabatan', '', 1),
(3, 'Ketua Jabatan', '', 1),
(4, 'Kakitangan', '', 1),
(6, 'Vendor', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `syarikat`
--

CREATE TABLE `syarikat` (
  `s_id` int(11) NOT NULL,
  `s_nama` varchar(255) NOT NULL,
  `s_alamat` varchar(255) NOT NULL,
  `s_fon` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_regno` varchar(255) NOT NULL,
  `s_fail` varchar(255) NOT NULL,
  `s_pic` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_status` int(11) NOT NULL,
  `s_user` int(11) NOT NULL,
  `s_pemilik` int(11) NOT NULL,
  `s_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `syarikat`
--

INSERT INTO `syarikat` (`s_id`, `s_nama`, `s_alamat`, `s_fon`, `s_email`, `s_regno`, `s_fail`, `s_pic`, `s_password`, `s_status`, `s_user`, `s_pemilik`, `s_key`) VALUES
(1, 'mbt2', 'Bandar Tawau, 91000 Tawau, Sabah', '089-701 699', 'mbt@mbt', '123123', '1', '', '1234', 0, 1, 0, 'abc'),
(2, 'Helo Malaysia Sdn.Bhd', 'Blok 10, Jalan Merpati,90000 Shah Alam', '03-898562312', 'Helomalaysia@helomalaysia.com', 'Sab/87598345', 'MBJB/2023/0002', '', '1234', 1, 1, 2, 'def');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_key` varchar(255) NOT NULL,
  `u_full_name` varchar(255) NOT NULL,
  `u_ic` varchar(255) NOT NULL,
  `u_alamat` varchar(255) NOT NULL,
  `u_area` varchar(255) NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `u_admin` int(11) NOT NULL DEFAULT 0,
  `u_role` int(11) NOT NULL,
  `u_department` int(11) NOT NULL,
  `u_postcode` varchar(255) NOT NULL,
  `u_country` varchar(255) NOT NULL,
  `u_state` varchar(255) NOT NULL,
  `u_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_password`, `u_key`, `u_full_name`, `u_ic`, `u_alamat`, `u_area`, `u_phone`, `u_admin`, `u_role`, `u_department`, `u_postcode`, `u_country`, `u_state`, `u_picture`) VALUES
(1, 'hery', 'admin@admin', 'cda8206eb90ff0ff143e5ee404d980102b37b7de52774b414bca3cc69d2ef6e3', 'abcd', 'Ahmad Khairi Aiman', '121212121212', '0402 Jalan Pendidikan 3, Taman Universiti ', '', '018-782 4900', 1, 0, 1, '', '', '', '64be99b03ba53-asdasdasd.PNG'),
(2, 'vendor@vendor', 'vendor@vendor', 'cda8206eb90ff0ff143e5ee404d980102b37b7de52774b414bca3cc69d2ef6e3', 'efgh', 'Vendor', '1234', ' 1234', '1234', '1234', 0, 6, 0, '1234', '1234', '1234', ''),
(14, '\' or \'a\'=\'a', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `dokumen_lampiran`
--
ALTER TABLE `dokumen_lampiran`
  ADD PRIMARY KEY (`dl_id`);

--
-- Indexes for table `dokumen_submit`
--
ALTER TABLE `dokumen_submit`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `dokumen_syarikat`
--
ALTER TABLE `dokumen_syarikat`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `lantikan`
--
ALTER TABLE `lantikan`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `mrks`
--
ALTER TABLE `mrks`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `syarikat`
--
ALTER TABLE `syarikat`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dokumen_lampiran`
--
ALTER TABLE `dokumen_lampiran`
  MODIFY `dl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumen_submit`
--
ALTER TABLE `dokumen_submit`
  MODIFY `ds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dokumen_syarikat`
--
ALTER TABLE `dokumen_syarikat`
  MODIFY `ds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lantikan`
--
ALTER TABLE `lantikan`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `mrks`
--
ALTER TABLE `mrks`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `syarikat`
--
ALTER TABLE `syarikat`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
