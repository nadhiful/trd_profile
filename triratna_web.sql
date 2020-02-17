-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2020 at 09:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triratna_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_event` date NOT NULL,
  `images` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `date_event`, `images`) VALUES
(1, 'Upacara Bendera Kemerdekaan', '2018-09-17', '17an.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `karir`
--

CREATE TABLE `karir` (
  `id` int(3) NOT NULL,
  `job_position` varchar(200) NOT NULL,
  `job_desc` text NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `date_create` date NOT NULL,
  `date_close` date NOT NULL,
  `kategori` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karir`
--

INSERT INTO `karir` (`id`, `job_position`, `job_desc`, `job_location`, `date_create`, `date_close`, `kategori`) VALUES
(1, 'PPC Staf', '• Prepare production plan and ensure the procurement of its required materials\r\n• Identify production requirement of raw materils and control material stock\r\n• Establish annual plan for raw material procurement in coodination with purchasing Dept.\r\n• Provide the Finance and Account Dept. with the necessary information about the cost calculation\r\n• Responsible for controling input production result and inventory control\r\n• Coordinate with Dept related about production process to achieve the realization of production Job Requirement:\r\n• ​Candidate must possess at least SMU, Diploma, Bachelor\'s Degree in Engineering (Civil), Engineering (Industrial), Engineering (Mechanical) or equivalent.\r\n• At least 1 Year(s) of working experience in the related field is required for this position.\r\n• Required Skill(s): Active, Dynamic, Microsoft Office, Organization Skill & Leadership, Inventory control and Planning production calculation\r\n• Preferably Staff (non-management & non-supervisor specialized in Manufacturing/Production Operations or equivalent', 'Gresik, Jawa Timur', '2020-02-12', '2020-02-12', 2),
(2, 'Programmer', 'Job Description\r\n• Confirms project requirements by reviewing program objective, input data, and output requirements with analyst, supervisor, and user.\r\n• Arranges project requirements in programming sequence by analyzing requirements; preparing a work flow chart and diagram using knowledge of computer capabilities, subject matter, programming language, and logic.\r\n• Encodes project requirements by converting work flow information into computer language.\r\n• Programs the computer by entering coded information.\r\n• Confirms program operation by conducting tests; modifying program sequence and/or codes.\r\n• Prepares reference for users by writing operating instructions.\r\n• Maintains historical records by documenting program development and revisions.\r\n• Maintains user operations by keeping information confidential.\r\n• Ensures operation of equipment by following manufacturer\'s instructions; troubleshooting malfunctions; calling for repairs; evaluating new equipment and techniques.\r\n• Contributes to team effort by accomplishing related results as needed. Job Requirements :\r\n• Candidate must possess at least Diploma/Bachelor Degree in Engineering (Computer/Telecommunication/Information Technology) or equivalent\r\n• Fresh graduate are welcome\r\n• Required language(s) : English, Bahasa Indonesia\r\n• Required skill(s): ASP.Net or PHP (web based)\r\n• At least 2 Year(s) of working experience in the related field is required for this position.\r\n• Preferably Staff (non-management & non-supervisor) specialized in IT/Computer - Network/System/Database Admin or equivalent.\r\n• Willing to work under pressure\r\n• Result-Oriented\r\n• Presentable, conscientious, and structured in coding', 'Gresik, Jawa Timur', '2020-02-12', '2020-02-12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Profile'),
(2, 'Visi'),
(3, 'Misi'),
(4, 'Profile DM'),
(5, 'Profile SM'),
(6, 'Profile MC'),
(7, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_product`
--

CREATE TABLE `kategori_product` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_product`
--

INSERT INTO `kategori_product` (`id`, `nama`) VALUES
(1, 'Diesel Manufacture'),
(2, 'Sentosa Marine'),
(3, 'Machining Centre');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_create` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `date_create`, `status`) VALUES
(1, '$name', '$email', '$subject', '$message', '0000-00-00', 1),
(2, 'aa', 'aa', 'aa', 'aa', '0000-00-00', 1),
(3, 'aa', 'aa', 'aa', 'aa', '0000-00-00', 1),
(4, 'aaa', 'aa', 'aa', 'q', '0000-00-00', 1),
(5, 'aa', 'aa', 'aa', 'aavv', '0000-00-00', 1),
(6, 'aa', 'aa', 'aa', 't', '0000-00-00', 1),
(7, 'aa', 'aa@i.com', 'a', 'aa', '0000-00-00', 1),
(8, 'anita', 'anitaivi2@gmail.com', 'karir', 'whyyy', '0000-00-00', 1),
(9, 'anita', 'anitaivi2@gmail.com', 'karir', 'whyyy', '0000-00-00', 1),
(10, 'ii', 'anitaivi2@gmail.com', 'ii', 'ii', '0000-00-00', 1),
(11, 'aaa', 'anitaivi2@gmail.com', 'aa', 'asdfghjk', '0000-00-00', 1),
(12, 'anita', 'anitaivi2@gmail.com', 'ii', 'koo', '0000-00-00', 1),
(13, 'ii', 'anitaivi2@gmail.com', 'karir', 'plp', '0000-00-00', 1),
(14, 'Anitaa', 'anitaivi2@gmail.com', 'karir', 'mjkjkd', '0000-00-00', 1),
(15, 'Anitaa', 'anitaivi2@gmail.com', 'aa', 'wsssssss', '0000-00-00', 1),
(16, 'a', 'b', 'c', 'd', '2020-02-14', 1),
(17, 'aaa', 'anitaivi2@gmail.com', 'karir', 'wwwwww', '0000-00-00', 1),
(18, 'aaa', 'anitaivi2@gmail.com', 'karir', 'wwwwww', '2020-02-14', 1),
(19, 'Anitaa', 'anitaivi2@gmail.com', 'karir', 'fdfdfd', '2020-02-14', 1),
(20, 'Anitaa', 'anitaivi2@gmail.com', 'Loremp Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-02-17', 0),
(21, 'Raisa', 'raisa6690@gmail.com', 'Karir', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-02-17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(3) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `status` int(1) NOT NULL,
  `images` varchar(40) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `id_kategori`, `judul`, `isi`, `status`, `images`, `date_created`, `date_updated`) VALUES
(1, 1, 'Profil Perusahaan', '\"Berawal dari timbulnya gagasan pada tahun 1973 Perusahaan Dagang dan Industri PT Rutan yang beberapa tahun sebelumnya telah memperdagangkan small range diesel engine (4-20 HP) keseluruh wilayah Indonesia dengan market share yang cukup potensial.\"<br><br>\r\n\r\nTepat pada tanggal 16 November 1978 PT TRi Ratna Diesel Indonesia secara resmi telah berdiri di Indonesia dan mendapat pengesahan dari Menteri Kehakiman dengan surat keputusan No. Y.A.5/343/11.<br><br>\r\n\r\nPT Tri Ratna Diesel Indonesia yang sebelumnya bekerja sama dengan beberapa perusahaan ternama asal Jepang, dengan menjalani training resmi di Jepang kepada setiap SDM yang ada di dalam PT Tri Ratna Diesel Indonesia.<br><br>\r\n\r\n\"Semangat dan pantang menyerah\" & \"Bekerja dengan giat, jujur serta ketulusan\" yang merupakan ciri khas orang Jepang. Etos kerja yang baik ini menimbulkan suatu dampak kemajuan inovasi perusahaan dan tingkat produksi, yang mampu mempengaruhi perkembangan ekonomi bagi negara Indonesia serta meningkatkan kualitas produk dalam negeri yang mampu mendominasi di Dunia Pasar Internasional.\r\n', 1, 'profil.jpg', '2020-02-06', '2020-02-10'),
(2, 2, 'Visi', 'Menjadi Perusahaan Visioner terintegrasi serta terkemuka dan siap menjadi produk kebanggan Indonesia untuk berkompetisi di dunia bisnis Internasional.\r\n', 1, '', '2020-02-06', '2020-02-06'),
(3, 3, 'Misi', '●  Mengembangkan industri manufaktur mesin diesel dengan kualitas terbaik dan mampu merajai pasar Indonesia bagian Timur dalam tempo yang singkat serta menguasai pasar Indonesia secara keseluruhan dalam beberapa tahun mendatang.<br><br>\r\n\r\n●  Menjadi jasa pusat permesinan yang memberikan kualitas pelayanan terbaik  dengan standar kerja yang cepat dan presisi yang tepat hingga menjadi pilihan utama bagi pelanggan <br><br>\r\n\r\n●  Memproduksi dan mereparasi kapal berbahan alumunium dan baja dalam berbagai jenis serta menguasai industri galangan kapal di sektor maritim dan mampu memberikan kepuasan bagi semua pihak. \r\n', 1, '', '2020-02-06', '2020-02-06'),
(4, 4, 'Diesel Engine Manufacture (DEM)', 'PT Tri Ratna Diesel Indonesia perusahaan yang bergerak dibidang manufaktur dan telah memproduksi motor diesel sendiri dengan merek \"Diamond\" Diesel Engine dan juga pelapor motor diesel dalam negeri. Sebagai sarana kebutuhan para penggerak usaha dibidang pertanian, perkebunan, dan kelautan dalam skala kecil maupun besar.', 1, 'd.jpg', '2020-02-10', '2020-02-13'),
(5, 5, 'Shipyard', 'PT Tri Ratna Diesel berdiri pada tahun 1990 berlokasi di Raya Bambe - Gresik, merupakan pionir perusahaan di Indonesia yang memproduksi berbagai jenis kapal berbahan alumunium yang didukung dengan teknologi dari Australia (COMPUTER DESIGN MARINE) dengan nama Santosa Marine.<br><br>\r\n\r\nDengan menerapkan system dan teknologi yang paling mutakhir, kini PT Tri Ratna Diesel tidak hanya membangun kapal alumunium tetapi juga membangun berbagai jenis kapal berbahan baja, fiber, dan HDPE. PT Tri Ratna Diesel terus berinovasi dalam menciptakan kapal alumunium dan kapal-kapal yang ramah lingkungan demi kemajuan bangsa Indonesia dibidang industri kelautan, untuk rakyat Indonesia yang maju dan sejahtera.<br><br>\r\n\r\nDivisi pembuatan kapal merupakan bagian utama dari operasi PT Tri Ratna Diesel. PT Tri Ratna Diesel memberikan beberapa pelayanan berupa Custom Design, Aftersales Service, ketersediaannya suku cadang (Spare Part Ready), dan Maintenance Fast Response.\r\n', 1, 'sm.jpg', '2020-02-10', '2020-02-10'),
(6, 6, 'Machining Center (MC)', 'Machining Center merupakan proses dari semua pembentukan besi yang akan dimulai dari pengecoran(foundry) hingga finishingnya. Produk yang di supply dari unit ini adalah spare part besi untuk beberapa mesin yang akan diproduksi oleh PT Tri Ratna Diesel seperti : mesin diesel, perkapalan dan pertanian lainnya, berbagai proses pembentukan besi mulai dari perancangan, pola, cetakan, peleburan, hingga finishing semua dilakukan di unit Machining Center.', 1, 'mcc.jpg', '2020-02-10', '2020-02-10'),
(7, 7, 'PT Sinarmas', '', 1, 'a.png', '2020-02-12', '0000-00-00'),
(8, 7, 'PT Agrindo', '', 0, 'b.png', '2020-02-12', '0000-00-00'),
(9, 7, 'PT Caltex', '', 0, 'c.png', '2020-02-12', '0000-00-00'),
(10, 7, 'PT Pertamina', '', 0, 'e.png', '2020-02-12', '0000-00-00'),
(11, 7, 'PT Rutan', '', 0, 'f.png', '2020-02-12', '0000-00-00'),
(12, 7, 'PT INKA', '', 0, 'g.png', '2020-02-12', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` varchar(7) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `images` varchar(40) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_kategori`, `nama`, `deskripsi`, `images`, `date_created`, `date_updated`) VALUES
('DS-001', 1, 'Mesin DCH-9270', '', 'DCH-9270 EDIT3.png', '2020-02-10', '2020-02-10'),
('DS-002', 1, 'Mesin DI 1100 L - Orange', '', 'Mesin DI 1100 L - Orange.png', '2020-02-10', '2020-02-10'),
('DS-003', 1, 'Mesin DI 1100 H - Blue', '', 'Mesin DI 1100 H - Blue4.png', '2020-02-11', '2020-02-11'),
('DS-004', 1, 'Mesin TP 1000', '', 'CIMG4647_.png', '2020-02-11', '2020-02-11'),
('DS-005', 1, 'Transplanter Indo Jarwo', '', 'SAM_1791.png', '2020-02-11', '2020-02-11'),
('DS-006', 1, 'Mesin DI 800 L - Orange', '', 'Mesin DI 800 L - Orange.png', '2020-02-11', '2020-02-11'),
('MC-001', 3, 'SPUR GEAR 7', '', 'spur gear 7.png', '2020-02-11', '2020-02-11'),
('SM-001', 2, 'BMS 174', '', 'bms 174.png', '2020-02-11', '2020-02-11'),
('SM-002', 2, 'KPLP KELAS V2', '', 'KPLP KELAS V2.png', '2020-02-11', '2020-02-11'),
('SM-003', 2, 'SM 22', '', 'SM22.png', '2020-02-11', '2020-02-11'),
('SM-004', 2, 'KLHK', '', 'komodo.png', '2020-02-11', '2020-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` varchar(6) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama`) VALUES
('ADM-01', 'Administrator'),
('WRT-01', 'Writer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(6) NOT NULL,
  `id_role` varchar(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_role`, `nama`, `password`, `last_login`) VALUES
('USR-01', 'ADM-01', 'Administrator', '123456', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_product`
--
ALTER TABLE `kategori_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
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
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karir`
--
ALTER TABLE `karir`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori_product`
--
ALTER TABLE `kategori_product`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
