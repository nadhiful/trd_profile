-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 10:17 AM
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
  `id_event` varchar(7) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_event` date NOT NULL,
  `images` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `karir`
--

CREATE TABLE `karir` (
  `id_karir` varchar(7) NOT NULL,
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

INSERT INTO `karir` (`id_karir`, `job_position`, `job_desc`, `job_location`, `date_create`, `date_close`, `kategori`) VALUES
('CRR-001', 'PPC Staf', '• Prepare production plan and ensure the procurement of its required materials\r\n• Identify production requirement of raw materils and control material stock\r\n• Establish annual plan for raw material procurement in coodination with purchasing Dept.\r\n• Provide the Finance and Account Dept. with the necessary information about the cost calculation\r\n• Responsible for controling input production result and inventory control\r\n• Coordinate with Dept related about production process to achieve the realization of production Job Requirement:\r\n• ​Candidate must possess at least SMU, Diploma, Bachelor\'s Degree in Engineering (Civil), Engineering (Industrial), Engineering (Mechanical) or equivalent.\r\n• At least 1 Year(s) of working experience in the related field is required for this position.\r\n• Required Skill(s): Active, Dynamic, Microsoft Office, Organization Skill & Leadership, Inventory control and Planning production calculation\r\n• Preferably Staff (non-management & non-supervisor specialized in Manufacturing/Production Operations or equivalent', 'Gresik, Jawa Timur', '2020-02-12', '2020-02-12', 2),
('CRR-002', 'Programmer', 'Job Description\r\n• Confirms project requirements by reviewing program objective, input data, and output requirements with analyst, supervisor, and user.\r\n• Arranges project requirements in programming sequence by analyzing requirements; preparing a work flow chart and diagram using knowledge of computer capabilities, subject matter, programming language, and logic.\r\n• Encodes project requirements by converting work flow information into computer language.\r\n• Programs the computer by entering coded information.\r\n• Confirms program operation by conducting tests; modifying program sequence and/or codes.\r\n• Prepares reference for users by writing operating instructions.\r\n• Maintains historical records by documenting program development and revisions.\r\n• Maintains user operations by keeping information confidential.\r\n• Ensures operation of equipment by following manufacturer\'s instructions; troubleshooting malfunctions; calling for repairs; evaluating new equipment and techniques.\r\n• Contributes to team effort by accomplishing related results as needed. Job Requirements :\r\n• Candidate must possess at least Diploma/Bachelor Degree in Engineering (Computer/Telecommunication/Information Technology) or equivalent\r\n• Fresh graduate are welcome\r\n• Required language(s) : English, Bahasa Indonesia\r\n• Required skill(s): ASP.Net or PHP (web based)\r\n• At least 2 Year(s) of working experience in the related field is required for this position.\r\n• Preferably Staff (non-management & non-supervisor) specialized in IT/Computer - Network/System/Database Admin or equivalent.\r\n• Willing to work under pressure\r\n• Result-Oriented\r\n• Presentable, conscientious, and structured in coding', 'Gresik, Jawa Timur', '2020-02-12', '2020-02-21', 2);

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
(6, 'Profile MC');

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
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 1, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ', 1, 'profile_update_2020_02_13.jpg', '2020-02-06', '2020-02-13'),
(2, 2, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1, '', '2020-02-06', '2020-02-06'),
(3, 3, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1, '', '2020-02-06', '2020-02-06'),
(4, 4, 'Where does it come from!', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. ', 1, 'diesel_profile_update_2020_02_13.jpg', '2020-02-10', '2020-02-13'),
(5, 5, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 1, 'marine_profile_update_2020_02_13.jpg', '2020-02-10', '2020-02-13'),
(6, 6, 'Why do we use it!', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1, 'machine_profile_update_2020_02_13.jpg', '2020-02-10', '2020-02-13');

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
('DS-001', 1, 'Mesin Diesel 001', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'diesel_produk_DS-001_2020_02_14.jpg', '2020-02-14', '2020-02-14');

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
('ADM', 'Administrator'),
('DMO', 'Operator Divisi DEM'),
('HRO', 'Operator HR'),
('MCO', 'Operator Divisi MC'),
('SMO', 'Operator Divisi SM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(7) NOT NULL,
  `id_role` varchar(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_role`, `nama`, `password`, `last_login`) VALUES
('USR-001', 'ADM', 'Administrator', '$2y$10$1yWuJPeLI/lNgZ48cpUAUubqMfqyjuRVnRyp/IJlMRiHus81uJSv.', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id_karir`);

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
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_product`
--
ALTER TABLE `kategori_product`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
