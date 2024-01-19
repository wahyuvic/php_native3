-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2016 at 03:59 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sablon`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutme`
--

CREATE TABLE IF NOT EXISTS `aboutme` (
  `id_aboutme` int(20) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_aboutme`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `aboutme`
--

INSERT INTO `aboutme` (`id_aboutme`, `tanggal`, `judul`, `gambar`, `keterangan`) VALUES
(1, '2009-2011', 'Our Humble Beginnings', '1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!'),
(2, 'MARCH 2011', 'An Agency is Born', '2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!'),
(3, 'DECEMBER 2012', 'Transition to Full Service', '3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!'),
(4, 'JULY 2014', 'Phase Two Expansion', '4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!'),
(5, '2016-12-20', 'Damar Apparel Berdiri', '1797487_696503117157377_4970717399425866309_n.jpg', '<p>Damar Apparel Bediri</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(23) NOT NULL,
  `password` varchar(23) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `hak_akses`) VALUES
(1, 'wahyu', 'wahyu', '5'),
(4, 'ilham', 'ilham', '3'),
(5, 'riko', 'riko', '2'),
(6, 'anton', '12345678', '6'),
(10, 'mujib', 'mujib123', '1'),
(11, 'wahyu', 'wahyu123', '1'),
(12, 'ahmad', '12345678a', '2'),
(13, 'ardiansyah', '1218029a', '3');

-- --------------------------------------------------------

--
-- Table structure for table `gov_hak_akses`
--

CREATE TABLE IF NOT EXISTS `gov_hak_akses` (
  `id_gov_hak_akses` int(11) NOT NULL AUTO_INCREMENT,
  `id_hak_akses` int(11) NOT NULL,
  `index` varchar(23) NOT NULL,
  `harga_kaos` varchar(23) NOT NULL,
  `jenis_kaos` varchar(23) NOT NULL,
  `ukuran_kaos` varchar(23) NOT NULL,
  `warna_kaos` varchar(23) NOT NULL,
  `harga_sablon` varchar(23) NOT NULL,
  `paket_sablon` varchar(23) NOT NULL,
  `member` varchar(23) NOT NULL,
  `pemesanan` varchar(11) NOT NULL,
  `produk_apparel` varchar(20) NOT NULL,
  `team` varchar(30) NOT NULL,
  `tampilan` varchar(20) NOT NULL,
  `patner` varchar(20) NOT NULL,
  `pesan` varchar(20) NOT NULL,
  `video` varchar(20) NOT NULL,
  PRIMARY KEY (`id_gov_hak_akses`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gov_hak_akses`
--

INSERT INTO `gov_hak_akses` (`id_gov_hak_akses`, `id_hak_akses`, `index`, `harga_kaos`, `jenis_kaos`, `ukuran_kaos`, `warna_kaos`, `harga_sablon`, `paket_sablon`, `member`, `pemesanan`, `produk_apparel`, `team`, `tampilan`, `patner`, `pesan`, `video`) VALUES
(1, 1, 'V', 'V,A,P,E,D', 'V,A,P,E,D', 'V,A,P,E,D', 'V,P,E,D', 'V,A,P,E,D', 'V,P,D', 'V,A,P,E,D', '0', '', '', '', '', '', ''),
(2, 2, 'V', 'V,A,P,E,D', 'V,A,P,E,D', 'V,A,P,E,D', 'V,P', 'V,A,P', 'V,P,D', 'V,P,E,D', '0', '', '', '', '', '', ''),
(3, 3, 'V', 'V,P', 'V,P', 'V,P', 'V,P', 'V,P', 'V,P,D', 'V,A,P,E,D', '0', '', '', '', '', '', ''),
(4, 4, 'V', 'V', 'V', 'V', '0', '0', '0', '0', '0', '', '', '', '', '', ''),
(5, 5, 'V', '0', '0', '0', 'V,P,E,D', 'V,A,P', '0', '0', '0', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE IF NOT EXISTS `hak_akses` (
  `id_akses` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hak_akses` varchar(144) NOT NULL,
  `deskipsi` varchar(111) NOT NULL,
  PRIMARY KEY (`id_akses`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_akses`, `nama_hak_akses`, `deskipsi`) VALUES
(1, 'onwer', 'pemlik'),
(2, 'supervisor', 'supervisor'),
(3, 'manager', '-'),
(4, 'waiter', '-'),
(5, 'kasir', '-');

-- --------------------------------------------------------

--
-- Table structure for table `harga_kaos`
--

CREATE TABLE IF NOT EXISTS `harga_kaos` (
  `id_harga` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL,
  `id_jenis` int(20) NOT NULL,
  PRIMARY KEY (`id_harga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `harga_kaos`
--

INSERT INTO `harga_kaos` (`id_harga`, `nama`, `harga`, `id_jenis`) VALUES
(1, 'wahyu', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kaos`
--

CREATE TABLE IF NOT EXISTS `jenis_kaos` (
  `id_jenis` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `id_ukuran` int(20) NOT NULL,
  `id_warna` int(20) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jenis_kaos`
--

INSERT INTO `jenis_kaos` (`id_jenis`, `nama`, `id_ukuran`, `id_warna`) VALUES
(1, 'merah delima', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama`
--

CREATE TABLE IF NOT EXISTS `kerjasama` (
  `id_kerjasama` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kerjasama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kerjasama`
--

INSERT INTO `kerjasama` (`id_kerjasama`, `nama`, `alamat`, `gambar`) VALUES
(1, 'zeora', 'tumpang', 'logz.jpg'),
(2, 'crativ', 'malang', 'creative-market.jpg'),
(3, 'envato', 'envato', 'designmodo.jpg'),
(4, 'envato', 'envato', 'designmodo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(20) NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(100) NOT NULL,
  `no_telpon` varchar(100) NOT NULL,
  `no_ktp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `kode_member` varchar(50) NOT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `no_telpon`, `no_ktp`, `email`, `alamat`, `jenis_kelamin`, `kode_member`) VALUES
(1, 'wahy', '32932973293', '12u9172', 'swd', 'wdd', 'Laki - Laki', 'D112u91721'),
(2, 'wahyu', '930913193', '31-93-13', '3193-13', '391-31-93', 'Laki - Laki', 'D231-93-132'),
(3, 'wahyu', '9319-391-3', '381083013', 'wardiansyah62@gmail.com', 'malang-tumpang', 'Laki - Laki', 'D33810830133');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_sablon` int(11) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `harga` varchar(30) NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama`, `id_sablon`, `jumlah`, `harga`) VALUES
(1, 'wali', 1, '30', '7000');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` int(20) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_member` int(20) NOT NULL,
  `id_paket` int(20) NOT NULL,
  `total_biaya` int(20) NOT NULL,
  `staus` varchar(40) NOT NULL,
  `jenis_pemesanan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `tanggal`, `gambar`, `id_member`, `id_paket`, `total_biaya`, `staus`, `jenis_pemesanan`) VALUES
(1, '12/12/2012', 'mandarin.png', 1, 1, 3000, 'selesai', ''),
(2, '-', 'indonesia.png', 2, 0, 0, 'pemesan', '-'),
(3, '2016-12-25', 'close.png', 2, 1, 200, 'pemesan', 'Sablon Manual dan Kaos'),
(4, '-', '-', 3, 0, 0, 'pemesan', '-'),
(5, '2016-12-14', 'new_indo.png', 3, 1, 7000, 'selesai', 'Sablon Manual dan Kaos');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE IF NOT EXISTS `portofolio` (
  `id_portofolio` int(20) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_portofolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `gambar`, `judul`, `jenis`, `keterangan`) VALUES
(1, 'header-bg1.jpg', 'wo', 'wo', 'Startup Framework is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.\r\n\r\nYou can preview Startup Framework here.'),
(2, 'startup-framework.png', 'Startup Framework', 'Website Design', 'Startup Framework is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.\r\n\r\nYou can preview Startup Framework here.'),
(3, 'manis.jpg', 'Treehouse', 'Website Design', 'Treehouse is a free PSD web template built by Mathavan Jaya. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.\r\n\r\nYou can download the PSD template in this portfolio sample item at FreebiesXpress.com.'),
(4, 'adem.jpg', 'Golden', 'Website Design', 'Start Bootstrap''s Agency theme is based on Golden, a free PSD website template built by Mathavan Jaya. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.\r\n\r\nYou can download the PSD template in this portfolio sample item at FreebiesXpress.com.'),
(6, 'dreams-preview.png', 'Dreams', 'Website Design', 'Dreams is a free PSD web template built by Mathavan Jaya. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.\r\n\r\nYou can download the PSD template in this portfolio sample item at FreebiesXpress.com.');

-- --------------------------------------------------------

--
-- Table structure for table `sablon`
--

CREATE TABLE IF NOT EXISTS `sablon` (
  `id_sablon` int(20) NOT NULL,
  `id_harga` varchar(20) NOT NULL,
  `nama_sablon` varchar(200) NOT NULL,
  `harga_sablon` int(20) NOT NULL,
  `jenis_sablon` varchar(30) NOT NULL,
  PRIMARY KEY (`id_sablon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sablon`
--

INSERT INTO `sablon` (`id_sablon`, `id_harga`, `nama_sablon`, `harga_sablon`, `jenis_sablon`) VALUES
(1, '1', 'wahyuvic', 2000, 'Manual');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id_team` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `posisi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `linked_in` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `nama`, `posisi`, `gambar`, `facebook`, `linked_in`, `twitter`) VALUES
(1, 'Kay Garland', 'Lead Designer', '1.jpg', '', '', ''),
(2, 'Larry Parker', 'model', '2.jpg', '', '', ''),
(3, 'Diana Pertersen', 'presenter', '13501584_1113991798672429_4447655237515853681_n.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ukuran`
--

CREATE TABLE IF NOT EXISTS `ukuran` (
  `id_ukuran` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `ukuran_kaos` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ukuran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ukuran`
--

INSERT INTO `ukuran` (`id_ukuran`, `nama`, `ukuran_kaos`) VALUES
(1, 'Ukuran L', 'L'),
(2, 'Ukuran M', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul`, `alamat`, `keterangan`) VALUES
(1, 'anu', 'youtube', '<iframe class="table" width="640" height="400" src="https://www.youtube.com/embed/oOQcfp36LDo" frameborder="0" allowfullscreen></iframe>\r\n	');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE IF NOT EXISTS `view` (
  `id_view` int(111) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_view`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id_view`, `nama`, `gambar`) VALUES
(1, 'Halaman Welcome', 'header-bg.jpg'),
(2, 'Background Putih', 'map-image.png'),
(3, 'logo', 'login_icon-large.png'),
(4, 'Pesan Sablon + Kaos', 'Untitled-1 copy.png'),
(5, 'Sablon Manual', 'icon.jpg'),
(6, 'Sablon lainya', '1.jpg'),
(7, 'Panduan Pesan Sablon Manual +Kaos', 'order_cart.png'),
(8, 'Panduan Pesan Sablon Manual', 'login_icon-large.png');

-- --------------------------------------------------------

--
-- Table structure for table `warna_kaos`
--

CREATE TABLE IF NOT EXISTS `warna_kaos` (
  `id_warna` int(20) NOT NULL AUTO_INCREMENT,
  `warna_kaos` varchar(100) NOT NULL,
  PRIMARY KEY (`id_warna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `warna_kaos`
--

INSERT INTO `warna_kaos` (`id_warna`, `warna_kaos`) VALUES
(1, 'merah'),
(2, 'hitam'),
(3, 'hijau');
