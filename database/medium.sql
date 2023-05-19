-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 06:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medium`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(30) NOT NULL,
  `id_pengguna` int(30) NOT NULL,
  `id_tag` int(30) NOT NULL,
  `judul_artikel` varchar(256) NOT NULL,
  `isi_artikel` varchar(256) NOT NULL,
  `gambar` varchar(60) NOT NULL,
  `tgl_artikel` date NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `id_pengguna`, `id_tag`, `judul_artikel`, `isi_artikel`, `gambar`, `tgl_artikel`) VALUES
(1, 1, 1, 'Why Coding is Sexy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco','coding.jpg','2023-02-13'),
(2, 2, 2, 'Why Everyone is Obsessed With Ui and Ux', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'design.png','2023-03-07'),
(3, 3, 3, 'The Evolution of Education', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','education.png','2023-03-15'),
(4, 4, 4, 'Doing Creativities the Right Way', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','produktif.webp','2023-04-17'),
(5, 5, 5, 'Designs by the Numbers', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.','UX-UI-Design.jpg','2023-02-15'),
(6, 6, 6, 'Who Really Uses Futures?', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt','future.jpg','2023-03-12'),
(7, 7, 7, '14 Ways Art is a Dying Art', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.','art.jpg','2023-03-24'),
(8, 8, 8, '15 Least Favorite Music', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?','musik.png','2023-03-21'),
(9, 9, 9, 'Dont Hold Back Your Film', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?','film.jpg','2023-01-21'),
(10, 10, 10, 'Why Photographies are the New Black', 'Et harum quidem uta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.','fotograpi.jpg','2023-01-27'),
(11, 11, 11, 'The 12 Biggest Family Blunders', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corr et dolorum fuga.','family.webp','2023-01-17'),
(12, 12, 12, '6 Ways Sciences Can Make You Rich', 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae','kaya.jpg','2023-01-27'),
(13, 13, 13, '10 Uses for Mental Health', 'Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.','mental.png','2023-02-13'),
(14, 14, 14, 'The Life Article of Your Dreams', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.','dream.jpeg','2023-02-15'),
(15, 15, 15, 'How Money is Like a School Bully', 'magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora','bully.jpg','2023-03-11'),
(16, 16, 16, '10 Problems with Bussinesses', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ','bisnis.jpg','2023-02-18'),
(17, 17, 17, 'How Technologies are the New Hotness', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.','teknologi.jpg','2023-03-19'),
(18, 18, 18, 'How Programming Made Me a Better Person', 'quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur','program.webp','2023-03-10'),
(19, 19, 19, 'Why Everyone is Obsessed With Gaming', 'quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?  qui dolorem eum fugiat quo voluptas nulla pariatur?','gaming.jpeg','2023-02-01'),
(20, 20, 20, 'Why Humor is Killing You', 'inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit','humor.jpg','2023-05-10');

-- -------------------------------------------------------
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(30) NOT NULL,
  `id_artikel` int(30) NOT NULL,
  `id_pengguna` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  `komentar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_artikel`, `id_pengguna`, `tanggal`, `komentar`) VALUES
(1, 4, 1, '2020-01-15', 'thank you so much for the information'),
(2, 17, 2, '2020-01-18', 'i find your video so relatable'),
(3, 10, 3, '2020-03-29', 'one of the best English teachers ever!'),
(4, 5, 4, '2020-04-16', 'gotchaaa!'),
(5, 14, 5, '2020-04-24', 'really like a post like this'),
(6, 19, 6, '2020-04-30', 'i agree with everything you said in the post.'),
(7, 2, 7, '2020-05-05', 'i find the information very affordable'),
(8, 9, 8, '2020-05-27', 'love it so much!!!'),
(9, 18, 9, '2020-06-12', 'thank youuuuu'),
(10, 12, 9, '2020-06-19', 'so happy ahwukjwhj'),
(11, 3, 10, '2020-06-29', 'the greatest ever'),
(12, 2, 11, '2020-07-09', 'this is one of the most useful tips'),
(13, 1, 12, '2020-07-18', 'so gorgeouss'),
(14, 9, 13, '2020-11-17', 'niceeeee'),
(15, 17, 14, '2020-11-30', 'hope I can be like u too'),
(16, 10, 16, '2020-12-14', 'i can’t get enough of your cooking tutorials'),
(17, 8, 17, '2020-12-21', 'will I get a girlfriend?'),
(18, 10, 18, '2021-01-07', 'i really agree with u'),
(19, 2, 19, '2021-02-19', 'don\'t listen them'),
(20, 16, 20, '2021-03-24', 'will somebody be my friend?'),
(21, 10, 3, '2021-04-13', 'from time to time, yes'),
(22, 18, 2, '2021-05-26', 'i feel depressed from it…'),
(23, 19, 1, '2021-06-18', 'i hate sad endings in anime'),
(24, 13, 4, '2021-07-07', 'vacation is not so important'),
(25, 18, 5, '2021-08-13', 'you need to finish project ASAP'),
(26, 12, 6, '2021-09-01', 'my favorite font? Well'),
(27, 16, 7, '2021-10-10', ' accept it please.'),
(28, 15, 8, '2021-11-12', 'it is clean and reads really well.'),
(29, 1, 9, '2021-12-24', 'thank you, kind sir, for your help.'),
(30, 14, 10, '2022-01-31', 'some of my co-workers are dumb beyond impossibility'),
(31, 3, 11, '2022-02-14', 'just started to play Awesome Tanks'),
(32, 9, 12, '2022-03-05', 'just like you told me'),
(33, 7, 13, '2022-04-25', 'i like using Calibri'),
(34, 8, 14, '2022-05-15', 'i got banned, I talked to GM about it'),
(35, 20, 4, '2022-06-28', 'the game is pretty fun'),
(36, 5, 4, '2022-07-21', 'i will get to you as soon as I will finish it'),
(37, 11, 5, '2022-08-16', 'what kind of magic is it?'),
(38, 20, 5, '2022-09-11', 'don\'t listen them'),
(39, 11, 4, '2022-10-02', 'why charging my phone takes so long'),
(40, 17, 4, '2022-11-19', 'no actually I’m shocked by this');

-- --------------------------------------------------------

--
-- Table structure for table `tb_like`
--

CREATE TABLE `tb_like` (
  `id_like` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_like`
--

INSERT INTO `tb_like` (`id_like`, `id_pengguna`, `id_artikel`) VALUES
(1, 1, 4),
(2, 2, 5),
(3, 3, 6),
(4, 4, 6),
(5, 5, 6),
(6, 6, 2),
(7, 6, 1),
(8, 6, 6),
(9, 6, 7),
(10, 7, 10),
(11, 8, 10),
(12, 9, 12),
(13, 10, 14),
(14, 10, 15),
(15, 11, 15),
(16, 12, 17),
(17, 13, 18),
(18, 14, 3),
(19, 15, 19),
(20, 16, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penanda`
--

CREATE TABLE `tb_penanda` (
  `id_penanda` int(30) NOT NULL,
  `id_artikel` int(30) NOT NULL,
  `id_pengguna` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penanda`
--

INSERT INTO `tb_penanda` (`id_penanda`, `id_artikel`, `id_pengguna`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 3, 4),
(4, 4, 5),
(5, 5, 6),
(6, 6, 7),
(7, 7, 8),
(8, 8, 16),
(9, 9, 15),
(10, 10, 14),
(11, 11, 13),
(12, 12, 11),
(13, 13, 4),
(14, 14, 1),
(15, 15, 5),
(16, 16, 3),
(17, 17, 5),
(18, 18, 4),
(19, 19, 3),
(20, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `foto_profil` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama`, `email`, `password`, `foto_profil`) VALUES
(1, 'Ade Puspasari', 'adepusari@gmail.com', 'rahasia1234', ''),
(2, 'Austin Levesque', 'austue@gmail.com', 'rahasia1235', ''),
(3, 'Ernestina Williamson', 'erneon@gmail.com', 'rahasia1236', ''),
(4, 'Côme Bonnet', 'comeboet@gmail.com', 'rahasia1237', ''),
(5, 'Legawa Prakasa', 'legawasa@gmail.com', 'rahasia1238', ''),
(6, 'Abigail Edwards', 'abigards@gmail.com', 'rahasia1239', ''),
(7, 'Martino Peter', 'marter@gmail.com', 'rahasia1240', ''),
(8, 'Maeva Leclerc', 'maevaerc@gmail.com', 'rahasia1241', ''),
(9, 'Daliman Prasetyo', 'dalimyo@gmail.com', 'rahasia1242', ''),
(10, 'Felix Wright', 'felixght@gmail.com', 'rahasia1243', ''),
(11, 'Ashley Vermeulen', 'ashlen@gmail.com', 'rahasia1244', ''),
(12, 'Augustin Laurent', 'augunt@gmail.com', 'rahasia1245', ''),
(13, 'Catur Haryanto', 'catunto@gmail.com', 'rahasia1246', ''),
(14, 'Citlalli Spencer', 'citlacer@gmail.com', 'rahasia1247', ''),
(15, 'Luke Green', 'lukegeen@gmail.com', 'rahasia1248', ''),
(16, 'Julia Marie', 'juliamrie@gmail.com', 'rahasia1249', ''),
(17, 'Vincenzo Neri', 'vinceri@gmail.com', 'rahasia1250', ''),
(18, 'Evelyn Kelly', 'evelynlly@gmail.com', 'rahasia1251', ''),
(19, 'Olivia Martin', 'oliviatin@gmail.com', 'rahasia1252', ''),
(20, 'Joshua Reed', 'joshueed@gmail.com', 'rahasia1253', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tag`
--

CREATE TABLE `tb_tag` (
  `id_tag` int(30) NOT NULL,
  `tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tag`
--

INSERT INTO `tb_tag` (`id_tag`, `tag`) VALUES
(1, 'Coding'),
(2, 'UI/UX'),
(3, 'Education'),
(4, 'Creativity'),
(5, 'Design'),
(6, 'Future'),
(7, 'Art'),
(8, 'Music'),
(9, 'Film'),
(10, 'Photography'),
(11, 'Family'),
(12, 'Science'),
(13, 'Mental Health'),
(14, 'Life'),
(15, 'Money'),
(16, 'Bussiness'),
(17, 'Technology '),
(18, 'Programming'),
(19, 'Gaming'),
(20, 'Humor');

-- --------------------------------------------------------

--
-- Table structure for table `tb_story`
--

CREATE TABLE `tb_story` (
  `id_story` int(30) NOT NULL,
  `id_pengguna` int(30) NOT NULL,
  `id_tag` int(30) NOT NULL,
  `judul_story` varchar(256) NOT NULL,
  `isi_story` varchar(256) NOT NULL,
  `gambar` varchar(60) NOT NULL,
  `tgl_story` date NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_story`
--

INSERT INTO `tb_story` (`id_story`, `id_pengguna`, `id_tag`, `judul_story`, `isi_story`, `gambar`, `tgl_story`) VALUES
(1, 1, 1, 'Why Coding is Sexy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco','coding.jpg','2023-02-13'),
(2, 2, 2, 'Why Everyone is Obsessed With Ui and Ux', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'design.png','2023-03-07'),
(3, 3, 3, 'The Evolution of Education', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.','education.png','2023-03-15'),
(4, 4, 4, 'Doing Creativities the Right Way', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','produktif.webp','2023-04-17'),
(5, 5, 5, 'Designs by the Numbers', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.','UX-UI-Design.jpg','2023-02-15'),
(6, 6, 6, 'Who Really Uses Futures?', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt','future.jpg','2023-03-12'),
(7, 7, 7, '14 Ways Art is a Dying Art', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.','art.jpg','2023-03-24'),
(8, 8, 8, '15 Least Favorite Music', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?','musik.png','2023-03-21'),
(9, 9, 9, 'Dont Hold Back Your Film', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?','film.jpg','2023-01-21'),
(10, 10, 10, 'Why Photographies are the New Black', 'Et harum quidem uta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.','fotograpi.jpg','2023-01-27'),
(11, 11, 11, 'The 12 Biggest Family Blunders', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corr et dolorum fuga.','family.webp','2023-01-17'),
(12, 12, 12, '6 Ways Sciences Can Make You Rich', 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae','kaya.jpg','2023-01-27'),
(13, 13, 13, '10 Uses for Mental Health', 'Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.','mental.png','2023-02-13'),
(14, 14, 14, 'The Life Article of Your Dreams', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.','dream.jpeg','2023-02-15'),
(15, 15, 15, 'How Money is Like a School Bully', 'magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora','bully.jpg','2023-03-11'),
(16, 16, 16, '10 Problems with Bussinesses', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ','bisnis.jpg','2023-02-18'),
(17, 17, 17, 'How Technologies are the New Hotness', 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.','teknologi.jpg','2023-03-19'),
(18, 18, 18, 'How Programming Made Me a Better Person', 'quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur','program.webp','2023-03-10'),
(19, 19, 19, 'Why Everyone is Obsessed With Gaming', 'quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?  qui dolorem eum fugiat quo voluptas nulla pariatur?','gaming.jpeg','2023-02-01'),
(20, 20, 20, 'Why Humor is Killing You', 'inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit','humor.jpg','2023-05-10');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `tb_artikel_ibfk_1` (`id_pengguna`),
  ADD KEY `id_tag` (`id_tag`);

--
-- Indexes for table `tb_story`
--
ALTER TABLE `tb_story`
  ADD PRIMARY KEY (`id_story`),
  ADD KEY `tb_story_ibfk_1` (`id_pengguna`),
  ADD KEY `id_tag` (`id_tag`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_artikel` (`id_artikel`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `tb_like`
--
ALTER TABLE `tb_like`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `tb_penanda`
--
ALTER TABLE `tb_penanda`
  ADD PRIMARY KEY (`id_penanda`),
  ADD KEY `id_artikel` (`id_artikel`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_tag`
--
ALTER TABLE `tb_tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_story`
--
ALTER TABLE `tb_story`
  MODIFY `id_story` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_like`
--
ALTER TABLE `tb_like`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_penanda`
--
ALTER TABLE `tb_penanda`
  MODIFY `id_penanda` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tb_tag`
--
ALTER TABLE `tb_tag`
  MODIFY `id_tag` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `tb_artikel_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`),
  ADD CONSTRAINT `tb_artikel_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tb_tag` (`id_tag`);

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `tb_artikel` (`id_artikel`),
  ADD CONSTRAINT `tb_komentar_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`);

--
-- Constraints for table `tb_like`
--
ALTER TABLE `tb_like`
  ADD CONSTRAINT `tb_like_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`),
  ADD CONSTRAINT `tb_like_ibfk_2` FOREIGN KEY (`id_artikel`) REFERENCES `tb_artikel` (`id_artikel`);

--
-- Constraints for table `tb_penanda`
--
ALTER TABLE `tb_penanda`
  ADD CONSTRAINT `tb_penanda_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `tb_artikel` (`id_artikel`),
  ADD CONSTRAINT `tb_penanda_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `tb_pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
