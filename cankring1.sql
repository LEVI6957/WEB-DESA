-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2024 at 10:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cankring1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_img` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_img`, `nama`) VALUES
(11, 'IMG_3698.jpg'),
(12, '1 JULI.jpg'),
(13, 'IMG_3901.jpg'),
(14, 'IMG_3919.jpg'),
(15, 'IMG_4057 (1).jpg'),
(16, 'IMG_4284.jpg'),
(17, 'IMG_4354.jpg'),
(18, 'IMG_4414.jpg'),
(19, 'IMG_4477.jpg'),
(20, 'IMG_4745.jpg'),
(21, 'IMG_5236.jpg'),
(22, 'IMG_5453.JPG'),
(23, 'IMG_5955.jpg'),
(24, 'IMG_6753.jpg'),
(25, 'IMG_6169.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lvuser`
--

CREATE TABLE `tbl_lvuser` (
  `id_lvuser` int(10) NOT NULL,
  `leveluser` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lvuser`
--

INSERT INTO `tbl_lvuser` (`id_lvuser`, `leveluser`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organisasi`
--

CREATE TABLE `tbl_organisasi` (
  `id` int(25) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_organisasi`
--

INSERT INTO `tbl_organisasi` (`id`, `image`) VALUES
(1, 'Desa Cangkring_SOTK.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(25) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Judul` varchar(255) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `img`, `Judul`, `isi`) VALUES
(4, 'pembuat.jpg', 'Pembuatan Totebag Tye Dye PKK', 'Pembuatan Totebag Tye Dye dan sosialisasi kekerasan perempuan dan sosialisasi rumah layak huni bersama PKK dan mahasiswa KKN UNNES GIAT 9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id_post` int(25) NOT NULL,
  `img` varchar(255) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `artikel` text DEFAULT NULL,
  `date` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`id_post`, `img`, `judul`, `artikel`, `date`, `kategori`, `author`) VALUES
(23, 'jalan.jpg', 'Pelaksanaan Acara Jalan Sehat Tahun Baru Hijriyah', 'Pelaksanaan acara jalan sehat tanggal 7 Juli 2024 dalam rangka memperingati Tahun Baru Hijriyah', '2024-08-15', 'Berita', 'levi'),
(24, 'pengembangan.jpg', 'Pengembangn Kreatifitas Anak Melalui Pembuatan Totebag Tie Dye', 'Pelatihan pembuatan totebag tie dye pada tanggal 14 Juli untuk mendorong anak-anak berkespresi melalui seni dan memperkenalkan teknik batik jumputannsebagai salah satu warisan budaya', '2024-08-15', 'Berita', 'levi'),
(25, 'acara.jpg', 'Acara Lomba Anak Memperingati Hari Anak Nasional', 'Dalam rangka memperingati Hari Anak Nasional, Tim KKN UNNES Giat 9 Desa Cangkring melaksanakan lomba anak pada tanggal 28 Juli yang bertujuan untuk memberikan wadah dalam perwujudan untuk menanamkan jiwa nasionalisme, patriotisme kepada generasi belia masa kini. Dibungkus dengan kegiatan-kegiatan menarik, seperti lomba cerdas cermat, mewarnai, menyanyi, dan menonton film 3D bersama. Belajar sejarah tidak akan membosankan melalinkan juga menumbuhkan semangat kreativitas dan sportivitas pada diri anak-anak karena dilakukan dalam sebuah perlombaan.', '2024-08-15', 'Berita', 'levi'),
(26, 'curhat.jpg', 'Jumat Curhat Bersama Kapolres Demak', 'Kapolres Demak mengadakan acara Jumat Curhat Bersama Kapolres Demak pada tanggal 26 Juli 2024', '2024-08-15', 'berita', 'levi'),
(27, 'musya.jpg', 'Musyawarah Rembung Stunting Desa Tahun Anggaran 2024', 'Acara Musyawarah Rembung Stunting Desa Tahun Anggaran 2024 Desa Cangkring pada tanggal 23 Juli 2024', '2024-08-15', 'info-umum', 'levi'),
(28, 'pembuat.jpg', 'Pembuatan Totebag Tye Dye PKK', 'Pembuatan Totebag Tye Dye dan sosialisasi kekerasan perempuan dan sosialisasi rumah layak huni bersama PKK dan mahasiswa KKN UNNES GIAT 9', '2024-08-15', 'berita', 'levi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(255) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_lvuser` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `password`, `nama_pengguna`, `img`, `id_lvuser`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'levi', 'logo_RTS_Bulat.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `judul`, `konten`, `date`) VALUES
(5, 'VISI', '“Terwujudnya Pemerintahan Desa Yang Bersih, Maju, sejahtera, Religius dan Bermartabat”', '2024-08-15'),
(6, 'MISI', '1.	Melakukan Perbaikan dan peningkatan  kinerja pemerintahan desa guna meningkatkan pelayanan Masyarakat desa\r\n2.	Menyelenggarakan pemerintahan yang bersih, dan trasnparan\r\n3.	Meningkatkan hubungan antar lembaga pemerintahan desa bersama masyarakat untuk bersama –sama  mewujudkan cita – cita Bersama\r\n4.	Meningkatkan peran serta pemerintah desa dalam urusan kemasyarakatan\r\n5.	Mendorong pembangunan partisipatif, pemuda dan kesetaraan wilayah\r\n6.	Sinergi antara lembaga, ulama, umaro’ dan masyarakat\r\n7.	Meningkatkan kesejahteraan kehidupan masyarakat menuju cangkring yang maju dan mandiri\r\n', '2024-08-15'),
(7, 'TUJUAN', '1.	Terwujudnya Kinerja Pemerintah desa yang Optimal guna Meningkatkan Pelayanan Masyarakat\r\n2.	Terwujudnya Hubungan yang sinergis antar lembaga, pemuda, Ulama dan Umaro dan masyarakat\r\n3.	terwujudnya Kesejahteraan kehidupan Masyarakat  menuju cangkring mandiri dan maju\r\n', '2024-08-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `tbl_lvuser`
--
ALTER TABLE `tbl_lvuser`
  ADD PRIMARY KEY (`id_lvuser`);

--
-- Indexes for table `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `tbl_users_ibfk_1` (`id_lvuser`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_lvuser`
--
ALTER TABLE `tbl_lvuser`
  MODIFY `id_lvuser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id_post` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`id_lvuser`) REFERENCES `tbl_lvuser` (`id_lvuser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
