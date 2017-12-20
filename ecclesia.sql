-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 05:34 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecclesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(4) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level_login` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `nama`, `username`, `password`, `level_login`, `status`, `foto`) VALUES
(1, 'Andre', 'andre', 'andre', 1, 1, 0x616e6472652e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(4) NOT NULL,
  `id_category` int(4) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` longtext NOT NULL,
  `foto` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL,
  `date_post` date NOT NULL,
  `status` int(2) NOT NULL,
  `counter` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `id_category`, `title`, `description`, `foto`, `author`, `date_post`, `status`, `counter`) VALUES
(1, 1, 'Panti Asuhan Ecclesia', '<p>Panti Asuhan Ecclesia adalah Yayasan khusus diperuntukkan bagi anak-anak yatim piatu, anak-anak terlantar akibat perceraian orang tua, anak-anak terlantar korban bencana alam, sebatang kara, ditolak keluarganya dan kemiskinan.</p>\r\n\r\n<p>Pati Asuhan Ecclesia mengurus, mendidik serta membina anak-anak sebagai jembatan meraih impian dan harapan mereka yang dilandasi tuntunan imam Kristen sesuai Firman Allah yang Alkitabiah.</p>\r\n', '21.jpg', 'Admin', '2017-12-20', 1, 3),
(2, 1, 'Tentang Tujuan Kami', '<p align="center"><strong>VISI</strong></p>\r\n\r\n<p>Menjadi Pati Asuhan terbaik serta berpartisipasi dalam mendidik generasi bangsa yang terlupakan dan terabaikan berlandasan hati nurani yang beriman teguh kepada Tuhan Yesus Kristus yang Alkitabiah sehingga menjadi manusia Indonesia yang berkualitas dan bermartabat.</p>\r\n\r\n<p align="center"><strong>MISI</strong></p>\r\n\r\n<p>Membina anak-anak meraih impian dan harapan yang didukung :</p>\r\n\r\n<ul>\r\n	<li>Menyediakan tempat tinggal yang nyaman, sehat dan asri</li>\r\n	<li>Menyediakan tempat dan segala macam perlengkapan sekolah</li>\r\n	<li>Memberi makanan yang sehat dan bergizi</li>\r\n	<li>Memberi pendidikan Formal di sekolah-sekolah kristen yang baik</li>\r\n	<li>Memberikan pendidikan rohani di Gereja Pentakosta Indonesia (GPI)</li>\r\n	<li>Memberikan bimbingan Psikologi</li>\r\n	<li>Memberikan bimbingan kewira-usahaan (entrepreneurship)</li>\r\n</ul>\r\n\r\n<p>Sekretariat : Jln. Pantai Delapan Ratus Gg. Gereja No. 1 Hp. 0821 6376 8880&nbsp; &ndash; 0813 9680 0380</p>\r\n', 'kitapeduli.jpg', 'Admin', '2017-12-20', 1, 3),
(3, 0, 'Peduli Kasih', '<p>Yayasan Panti Asuhan Ecclesia Medan didirikan tahun 2015 di Medan oleh hambanya <strong>Pdt. Samuel Sitanggang Sth.</strong> Yang menjadi Pembina /Ketua Yayasan Panti Asuhan Ecclesia Medan yang memiliki landasan status hukum dengan Akte Notaris No. 5 Tgl. 5 September 2015. Pelayanan ini adalah dilandasi oleh panggilan hidup yang cukup panjang yang mendasar dari pengalaman hidup yang cukup panjang yang mendasar dari pengalaman kehidupan yang cepat menjadi yatim piatu tanpa kepedulian lingkungan apalagi keluarga. Hingga hambanya menjadi Pendeta dan membangun gereja disebuah desa terpencil terletak di tengah-tengah ladang yang masih jauh dari perkampungan dan keramaian, maka timbuk kerinduan untuk mengumpulkan anak-anak yatim piatu. Korban bencana alam, anak terabaikan terlantar dan masa kala itu terjadi bencana alam akibat letusan gunung Sinabung yang berkepanjangan, membuat anak-anak banyak korban bencana alam tersebut. Misi ini menjadi dasar pelayanan Gereja tersebut hingga sekarang</p>\r\n', 'peduli1.png', 'Andre', '2017-12-20', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id_catalog` int(4) NOT NULL,
  `id_category` int(4) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` longtext NOT NULL,
  `foto` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL,
  `date_post` date NOT NULL,
  `status` int(2) NOT NULL,
  `counter` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `id_category`, `title`, `description`, `foto`, `author`, `date_post`, `status`, `counter`) VALUES
(1, 1, 'PANTI ASUHAN ECCLESIA', '<p align="center"><strong>VISI</strong></p>\r\n\r\n<p>Menjadi Pati Asuhan terbaik serta berpartisipasi dalam mendidik generasi bangsa yang terlupakan dan terabaikan berlandasan hati nurani yang beriman teguh kepada Tuhan Yesus Kristus yang Alkitabiah sehingga menjadi manusia Indonesia yang berkualitas dan bermartabat.</p>\r\n\r\n<p align="center"><strong>MISI</strong></p>\r\n\r\n<p>Membina anak-anak meraih impian dan harapab yang didukung :</p>\r\n\r\n<ul>\r\n	<li>Menyediakan tempat tinggal yang nyaman, sehat dan asri</li>\r\n	<li>Menyediakan tempat dan segala macam perlengkapan sekolah</li>\r\n	<li>Memberi makanan yang sehat dan bergizi</li>\r\n	<li>Memberi pendidikan Formal di sekolah-sekolah kristen yang baik</li>\r\n	<li>Memberikan pendidikan rohani di Gereja Pentakosta Indonesia (GPI)</li>\r\n	<li>Memberikan bimbingan Psikologi</li>\r\n</ul>\r\n\r\n<p>Memberikan bimbingan kewira-usahaan (entrepreneurship)</p>\r\n', '21.jpg', 'Admin', '2015-11-14', 1, 3),
(2, 2, 'SIFAT DAN KARAKTERISTIK', '<p align="center"><strong>SIFAT DAN KARAKTERISTIK</strong></p>\r\n\r\n<p>Panti Asuhan Ecclesia adalah Yayasan khusus diperuntukkan bagi anak-anak yatim piatu, anak-anak terlantar akibat perceraian orang tua, anak-anak terlantar korban bencana alam, sebatang kara, ditolak keluarganya dan kemiskinan.</p>\r\n\r\n<p>Pati Asuhan Ecclesia mengurus, mendidik serta membina anak-anak sebagai jembatan meraih impian dan harapan mereka yang dilandasi tuntunan imam Kristen sesuai Firman Allah yang Alkitabiah.</p>\r\n', 'ECCLESIA1.jpg', '', '0000-00-00', 1, 0),
(3, 3, 'SEJARAH SINGKAT', '<p align="center"><strong>SEJARAH SINGKAT</strong></p>\r\n\r\n<p>Yayasan Panti Asuhan Ecclesia Medan didirikan tahun 2015 di Medan oleh hambanya <strong>Pdt. Samuel Sitanggang Sth.</strong> Yang menjadi Pembina /Ketua Yayasan Panti Asuhan Ecclesia Medan yang memiliki landasan status hukum dengan Akte Notaris No. 5 Tgl. 5 September 2015. Pelayanan ini adalah dilandasi oleh panggilan hidup yang cukup panjang yang mendasar dari pengalaman hidup yang cukup panjang yang mendasar dari pengalaman kehidupan yang cepat menjadi yatim piatu tanpa kepedulian lingkungan apalagi keluarga. Hingga hambanya menjadi Pendeta dan membangun gereja disebuah desa terpencil terletak di tengah-tengah ladang yang masih jauh dari perkampungan dan keramaian, maka timbuk kerinduan untuk mengumpulkan anak-anak yatim piatu. Korban bencana alam, anak terabaikan terlantar dan masa kala itu terjadi bencana alam akibat letusan gunung Sinabung yang berkepanjangan, membuat anak-anak banyak korban bencana alam tersebut. Misi ini menjadi dasar pelayanan Gereja tersebut hingga sekarang</p>\r\n', 'ECCLESIA2.jpg', '', '0000-00-00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(8) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(1, 'VISI DAN MISI'),
(2, 'SIFAT DAN KARAKTERISTIK'),
(3, 'SEJARAH SINGKAT');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(4) NOT NULL,
  `id_article` int(4) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `message` longtext NOT NULL,
  `date_sent` date NOT NULL,
  `author` varchar(225) NOT NULL,
  `message_replay` longtext NOT NULL,
  `status` int(2) NOT NULL,
  `date_replay` date NOT NULL,
  `id` int(4) NOT NULL,
  `id_gallery` int(4) NOT NULL,
  `hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `id_article`, `name`, `email`, `message`, `date_sent`, `author`, `message_replay`, `status`, `date_replay`, `id`, `id_gallery`, `hp`) VALUES
(7, 0, 'Andrea', 'developerpdak@gmail.com', 'God bless', '2017-12-20', '', '', 1, '2017-12-20', 0, 0, '085206451636'),
(8, 0, 'Altrusia', 'al@gmail.com', 'Selamat menyambut natal untuk kita semua', '2017-12-20', '', '', 1, '2017-12-20', 0, 0, '085206451636'),
(9, 0, 'Imel', 'imel@gmail.com', 'Sukses terus yaa', '2017-12-20', '', '', 1, '2017-12-20', 0, 0, '085206451636'),
(10, 0, 'Indri', 'indri@gmail.com', 'Tetap semangat yaa :)', '2017-12-20', '', '', 1, '2017-12-20', 0, 0, '085206451636');

-- --------------------------------------------------------

--
-- Table structure for table `khotbah`
--

CREATE TABLE `khotbah` (
  `id_khotbah` int(8) NOT NULL,
  `nas` varchar(30) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `ringkasan` longtext NOT NULL,
  `status` int(1) NOT NULL,
  `foto` longtext NOT NULL,
  `author` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `khotbah`
--

INSERT INTO `khotbah` (`id_khotbah`, `nas`, `judul`, `ringkasan`, `status`, `foto`, `author`) VALUES
(1, 'Matius 11:28', 'Mari lah kepada-Ku', '<p>Marilah kepada-Ku, semua yang letih lesu dan berbeban berat, Aku akan memberi kelegaan kepadamu.</p>\r\n', 1, 'ecclesialogo1.jpg', 'Andre'),
(2, 'Matius 25:40', 'Dan Raja itu akan menjawab', '<p><span class="red">Dan Raja itu akan menjawab mereka: Aku berkata kepadamu, sesungguhnya segala sesuatu yang kamu lakukan untuk salah seorang dari saudara-Ku yang paling hina ini, kamu telah melakukannya untuk Aku</span></p>\r\n', 1, '', 'Andre');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(4) NOT NULL,
  `id_category` int(4) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` longtext NOT NULL,
  `foto` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL,
  `date_post` date NOT NULL,
  `status` int(2) NOT NULL,
  `counter` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `id_category`, `title`, `description`, `foto`, `author`, `date_post`, `status`, `counter`) VALUES
(4, 0, 'PROFIL PANTI ASUHAN ECCLESIA', '<p>Nama Yayasan PONDOK INJIL ALKITABIAH MASA KINI INDONESIA PANTI REHABILITAS PENDIDIKAN PELITA INJIL ALKITABIAH MASA KINI (PELITA INSANI)</p>\r\n\r\n<p>Yayasan Panti Asuhan Ecclesia Medan didirikan tahun 2015 di Medan oleh hambanya <strong>Pdt. Samuel Sitanggang Sth.</strong> Yang menjadi Pembina /Ketua Yayasan Panti Asuhan Ecclesia Medan yang memiliki landasan status hukum dengan Akte Notaris No. 5 Tgl. 5 September 2015. Pelayanan ini adalah dilandasi oleh panggilan hidup yang cukup panjang yang mendasar dari pengalaman hidup yang cukup panjang yang mendasar dari pengalaman kehidupan yang cepat menjadi yatim piatu tanpa kepedulian lingkungan apalagi keluarga. Hingga hambanya menjadi Pendeta dan membangun gereja disebuah desa terpencil terletak di tengah-tengah ladang yang masih jauh dari perkampungan dan keramaian, maka timbuk kerinduan untuk mengumpulkan anak-anak yatim piatu. Korban bencana alam, anak terabaikan terlantar dan masa kala itu terjadi bencana alam akibat letusan gunung Sinabung yang berkepanjangan, membuat anak-anak banyak korban bencana alam tersebut. Misi ini menjadi dasar pelayanan Gereja tersebut hingga sekarang</p>\r\n', 'ECCLESIA.jpg', 'Admin', '2017-12-08', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `khotbah`
--
ALTER TABLE `khotbah`
  ADD PRIMARY KEY (`id_khotbah`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `khotbah`
--
ALTER TABLE `khotbah`
  MODIFY `id_khotbah` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
