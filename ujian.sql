-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 08:16 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` bigint(20) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1214 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `no_telp`, `username`) VALUES
(1213, 'admin', '2313', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` bigint(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `no_telp`, `username`) VALUES
(23423, 'tanti', '241', 'tanti'),
(54333, 'Drs. Mardjo', '0832432534435', 'mardjo'),
(64382, 'Dra. Hartini', '082382384348', 'hartini'),
(112345, 'Drs. Karyono, M.Pd', '089654634234', 'karyono'),
(231243, 'diana ari', '23214', 'diana'),
(324234, 'admin', '2424', 'admin123'),
(28342894, 'Diana Ari Rahamawati', '237403927029', 'dianaari'),
(38247324, 'Drs. Hasan Safingi', '088274891248', 'hasan'),
(62741098, 'Winaryono, S.Pd', '08294872984', 'winaryono'),
(78488432, 'Diyah Herowati, S.Pd', '09384327583', 'diyah'),
(87543270, 'Didit Setya Ely S., S.Pd', '08932742855', 'didit'),
(436298643, 'Dra. Edy Sulistyo', '082834y24', 'edy'),
(834939074, 'Dra. Bopi Suhardiman', '08324782374', 'bopi'),
(3712084012, 'Dra. Agus Purwanto', '0829471894', 'agus'),
(9327640913, 'Dra. Siti Hillaliyatun', '0821936821', 'siti'),
(23947320984, 'Deby Suryo Ningsih, S.Pd', '08294789234', 'deby'),
(821328872391, 'Irfan Aji Subekti, S.Pd.Gr', '093218381928', 'irfan');

-- --------------------------------------------------------

--
-- Table structure for table `guru_mapel`
--

CREATE TABLE IF NOT EXISTS `guru_mapel` (
`id_grmapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `id_mapel` varchar(10) NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru_mapel`
--

INSERT INTO `guru_mapel` (`id_grmapel`, `id_kelas`, `nip`, `id_mapel`, `id_tahun`) VALUES
(1, 37, 23423, 'BIND01', 0),
(2, 37, 54333, 'BING01', 0),
(3, 37, 64382, 'BIO01', 0),
(4, 37, 112345, 'FIS01', 0),
(5, 38, 23423, 'BIND01', 0),
(6, 38, 28342894, 'BING01', 0),
(7, 38, 64382, 'BIO01', 0),
(8, 38, 112345, 'FIS01', 0),
(9, 38, 231243, 'MTK-W', 0),
(10, 39, 28342894, 'BIND01', 0),
(12, 37, 64382, 'MTK-W', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_ujian`
--

CREATE TABLE IF NOT EXISTS `hasil_ujian` (
  `id_soal` int(11) NOT NULL,
  `nis` bigint(20) NOT NULL,
  `nilai_ujian` int(11) NOT NULL,
  `keterangan` enum('Lulus','Tidak Lulus') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`id_kelas` int(11) NOT NULL,
  `jenjang` enum('X','XI','XII') NOT NULL,
  `jenis_kelas` enum('MIPA','IPS') DEFAULT NULL,
  `nama_kelas` char(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `jenjang`, `jenis_kelas`, `nama_kelas`) VALUES
(37, 'X', 'MIPA', '1'),
(38, 'X', 'MIPA', '2'),
(39, 'X', 'MIPA', '3'),
(40, 'X', 'MIPA', '4'),
(41, 'X', 'MIPA', '5'),
(42, 'X', 'IPS', '1'),
(43, 'X', 'IPS', '2'),
(44, 'X', 'IPS', '3'),
(45, 'X', 'IPS', '4'),
(46, 'XI', 'MIPA', '1'),
(47, 'XI', 'MIPA', '2'),
(48, 'XI', 'MIPA', '3'),
(49, 'XI', 'MIPA', '4'),
(50, 'XI', 'MIPA', '5'),
(51, 'XI', 'MIPA', '6'),
(52, 'XI', 'IPS', '1'),
(53, 'XI', 'IPS', '2'),
(54, 'XI', 'IPS', '3'),
(55, 'XI', 'IPS', '4'),
(56, 'XII', 'MIPA', '1'),
(57, 'XII', 'MIPA', '2'),
(58, 'XII', 'MIPA', '3'),
(59, 'XII', 'MIPA', '4'),
(60, 'XII', 'MIPA', '5'),
(61, 'XII', 'IPS', '1'),
(62, 'XII', 'IPS', '2'),
(63, 'XII', 'IPS', '3'),
(64, 'XII', 'IPS', '4');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswa`
--

CREATE TABLE IF NOT EXISTS `kelas_siswa` (
  `nis` bigint(20) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_siswa`
--

INSERT INTO `kelas_siswa` (`nis`, `id_kelas`, `id_tahun`) VALUES
(234234, 37, 0),
(390481941, 37, 0),
(93749230, 37, 0),
(2793, 37, 0),
(849034590, 37, 0),
(648324, 37, 0),
(219432094, 38, 0),
(91739213, 38, 0),
(129803109, 38, 0),
(92739104, 39, 0),
(21414, 37, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` varchar(10) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kkm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `kkm`) VALUES
('BIND01', 'Bahasa Indonesia', 80),
('BING01', 'Bahasa Inggris', 80),
('BIO01', 'Biologi', 80),
('FIS01', 'Fisika', 75),
('MTK-W', 'Matematika Wajib', 75),
('SEJ01', 'Sejarah', 80);

-- --------------------------------------------------------

--
-- Table structure for table `opsi_jawaban`
--

CREATE TABLE IF NOT EXISTS `opsi_jawaban` (
`id_opsi` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `opsi` varchar(2) NOT NULL,
  `isi_opsi` longtext NOT NULL,
  `jawaban` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opsi_jawaban`
--

INSERT INTO `opsi_jawaban` (`id_opsi`, `id_pertanyaan`, `opsi`, `isi_opsi`, `jawaban`) VALUES
(92, 24, 'A', '<p>sah</p>\r\n', 1),
(93, 24, 'B', '<p>sah</p>\r\n', 0),
(94, 24, 'C', '<p>sah</p>\r\n', 0),
(95, 24, 'D', '<p>sah</p>\r\n', 0),
(96, 24, 'E', '<p>sah</p>\r\n', 0),
(97, 25, 'A', '<p>asasaa</p>\r\n', 1),
(98, 25, 'B', '<p>asasaa</p>\r\n', 0),
(99, 25, 'C', '<p>asasaa</p>\r\n', 0),
(100, 25, 'D', '<p>asasaa</p>\r\n', 0),
(101, 25, 'E', '<p>asasaa</p>\r\n', 0),
(102, 26, 'A', '<p>bisa</p>\r\n', 1),
(103, 26, 'B', '<p>bisa</p>\r\n', 0),
(104, 26, 'C', '<p>bisa</p>\r\n', 0),
(105, 26, 'D', '<p>bisa</p>\r\n', 0),
(106, 26, 'E', '<p>bisa</p>\r\n', 0),
(107, 29, 'A', '<p>hwahaha</p>\r\n', 1),
(108, 29, 'B', '<p>hwahaha</p>\r\n', 0),
(109, 29, 'C', '<p>hwahaha</p>\r\n', 0),
(110, 29, 'D', '<p>hwahaha</p>\r\n', 0),
(111, 29, 'E', '<p>hwahaha</p>\r\n', 0),
(112, 30, 'A', '<p>asdasdasd</p>\r\n', 1),
(113, 30, 'B', '<p>asdasda</p>\r\n', 0),
(114, 30, 'C', '<p>asdasdasd</p>\r\n', 0),
(115, 30, 'D', '<p>asadsada</p>\r\n', 0),
(116, 30, 'E', '<p>asdasdasd</p>\r\n', 0),
(117, 31, 'A', '<p>asdasd</p>\r\n', 1),
(118, 31, 'B', '<p>asdasda</p>\r\n', 0),
(119, 31, 'C', '<p>asdasd</p>\r\n', 0),
(120, 31, 'D', '<p>asdasd</p>\r\n', 0),
(121, 31, 'E', '<p>asdasd</p>\r\n', 0),
(122, 32, 'A', '', 1),
(123, 32, 'B', '', 0),
(124, 32, 'C', '', 0),
(125, 32, 'D', '', 0),
(126, 32, 'E', '', 0),
(127, 36, 'A', '<p>cobaaaaa</p>\r\n', 0),
(128, 36, 'B', '<p>cobaaaaa</p>\r\n', 0),
(129, 36, 'C', '<p>cobaaaaa</p>\r\n', 1),
(130, 36, 'D', '<p>cobaaaaa</p>\r\n', 0),
(131, 36, 'E', '<p>cobaaaaa</p>\r\n', 0),
(132, 37, 'A', '<p>cobalgiiii</p>\r\n', 0),
(133, 37, 'B', '<p>cobalgiiii</p>\r\n', 1),
(134, 37, 'C', '<p>cobalgiiii</p>\r\n', 0),
(135, 37, 'D', '<p>cobalgiiii</p>\r\n', 0),
(136, 37, 'E', '<p>cobalgiiii</p>\r\n', 0),
(137, 38, 'A', '<p>ospsiiiiiiia</p>\r\n', 0),
(138, 38, 'B', '<p>ospiiiiiib</p>\r\n', 0),
(139, 38, 'C', '<p>opsiiiiic</p>\r\n', 1),
(140, 38, 'D', '<p>opsiiiiiiiid</p>\r\n', 0),
(141, 38, 'E', '<p>opsiiiiie</p>\r\n', 0),
(142, 39, 'A', '<p>aaaaaa</p>\r\n', 0),
(143, 39, 'B', '<p>bbbbbbbb</p>\r\n', 0),
(144, 39, 'C', '<p>cccccccc</p>\r\n', 0),
(145, 39, 'D', '<p>ddddddd</p>\r\n', 1),
(146, 39, 'E', '<p>eeeee</p>\r\n', 0),
(152, 41, 'A', '<p>aaaaaaaa</p>\r\n', 0),
(153, 41, 'B', '<p>bbbbbbb</p>\r\n', 1),
(154, 41, 'C', '<p>cccccccccc</p>\r\n', 0),
(155, 41, 'D', '<p>ddddddddd</p>\r\n', 0),
(156, 41, 'E', '<p>eeeeeee</p>\r\n', 0),
(157, 42, 'A', '<p>ambuhuhhhhuhh</p>\r\n', 0),
(158, 42, 'B', '<p>badadiadhsidsj</p>\r\n', 1),
(159, 42, 'C', '<p>cnudsdjsndjs</p>\r\n', 0),
(160, 42, 'D', '<p>disdnajndjan</p>\r\n', 0),
(161, 42, 'E', '<p>endtsiudhskncs</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE IF NOT EXISTS `pertanyaan` (
`id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` longtext NOT NULL,
  `jenis_pertanyaan` varchar(20) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `pertanyaan`, `jenis_pertanyaan`, `id_soal`, `gambar`) VALUES
(2, '<p>pertanyaan</p>', 'Single', 1, ''),
(3, '<p>ini soal</p>', 'Single', 1, ''),
(5, '<p>adsad</p>', 'Single', 1, ''),
(7, '<p>dicoba pertanyaan</p>', 'Single', 1, ''),
(8, '<p>dicoba pertanyaan</p>', 'Single', 1, ''),
(9, '<p>dicoba pertanyaan\\</p>', 'Single', 1, ''),
(10, '<p>dicoba pertanyaan\\</p>', 'Single', 1, ''),
(24, '<p>sah</p>', 'Single', 1, ''),
(25, '<p>asasaa</p>', 'Single', 1, ''),
(26, '<p>bisa</p>', 'Single', 1, ''),
(27, '<p>haha</p>', 'Single', 1, ''),
(28, '<p>uuuuu</p>', 'Single', 1, ''),
(29, '<p>hwahaha</p>', 'Single', 1, 'gambar'),
(30, '<p>asdasdasd</p>', 'Single', 1, ''),
(31, '<p>asdasd</p>', 'Single', 1, ''),
(32, '<p>asdsas</p>', 'Single', 1, ''),
(33, '<p>bismillah</p>', 'Single', 1, ''),
(34, '<p>batu</p>', 'Single', 1, ''),
(35, '<p>swak</p>', 'Single', 1, ''),
(36, '<p>cobaaaaa</p>', 'Single', 1, '1898184_287861798088330_723951078853001621_n.jpg'),
(37, '<p>cobalgiiii</p>', 'Single', 1, ''),
(38, '<p>hddjkandka dkadnbkad akdjksadnjsdnskdjnskdns skdnksndksdns ksndksjndksdns skdnskjndskjdn skdnjksdnskjsd skdnskdnskd dksndksndkndse dkndkjbfdfvhdbfoldnfkd kdfboldknfkdfnkdnf fjkdbfkdnfkd ..........</p>', 'Single', 1, ''),
(39, '<p>dieuwoiujwonkewj ewjhkwhoiwjhnieji eowijdewirdewoi kewndkjnewfdew knedfkjenf knefkjnewk kenfkjnekf knefkjenfkje kenfkjnefkjre kjndefkjnedkf kjndekjfndek kndfknf...................</p>', 'Single', 1, ''),
(41, '<p>hjksdhfkjsf n dfkjsndkjsnfd sakjbdnksjbdks dklsjnbdksjndk skjdnkjsdnjks ksdjnkjsnk sdkjnskjns skjndkjsnd skjdnskj ..........</p>', 'Single', 1, 'Relasi-Tabel-Sistem-Informasi-Ujian-Siswa-Online-berbasis-Web-Program-Ujian-Online.jpg'),
(42, '<p>askdnaskld sakndlksand skandksalnd sakndlksad lkashdfuyevfd jbfhbedkf kjnedfkewfbi kjehwnfewb ewifjdewfnl nefdkneof jsdbfkjdsbf.......</p>', 'Single', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` bigint(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `jenkel`, `username`) VALUES
(2793, 'Yunita Setyana Devi', 'P', 'yunita'),
(21414, 'sdddddddddddddddddd', 'P', 'aaaaaa'),
(234234, 'aaaaaaaaaaaaa', 'P', 'siswa'),
(648324, 'Bayu Hery', 'L', 'bayu'),
(91739213, 'Amelia Anisa', 'P', 'amel'),
(92739104, 'anita kusuma', 'P', 'anita'),
(93749230, 'Dwi Ristanti Rahmi', 'P', 'tantiii'),
(129803109, 'alvi bur', 'P', 'alvi'),
(219432094, 'Eko Wahyudi', 'L', 'eko'),
(390481941, 'Diana Ari Rahmawati', 'P', 'dianaa'),
(849034590, 'Indrawan Harwiyanto', 'L', 'indra');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
`id_soal` int(11) NOT NULL,
  `nama_soal` varchar(50) NOT NULL,
  `waktu_mulai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `waktu_akhir` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_mapel` varchar(10) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_ujian` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `nama_soal`, `waktu_mulai`, `waktu_akhir`, `id_mapel`, `id_kelas`, `id_ujian`) VALUES
(1, 'Wajib-Paket A', '2017-05-08 00:30:00', '2017-05-08 02:00:00', 'MTK-W', 37, 'UAS01'),
(2, 'asdsa', '2017-05-01 00:30:00', '2017-05-01 02:25:00', 'BIND01', 44, '12321432');

-- --------------------------------------------------------

--
-- Table structure for table `tahun`
--

CREATE TABLE IF NOT EXISTS `tahun` (
`id_tahun` int(11) NOT NULL,
  `tahun_ajaran` varchar(15) NOT NULL,
  `status_tahun` enum('Aktif','Tidak Aktif') DEFAULT 'Aktif'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun`
--

INSERT INTO `tahun` (`id_tahun`, `tahun_ajaran`, `status_tahun`) VALUES
(0, '2017/2018', 'Aktif'),
(3, '2015/2016', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE IF NOT EXISTS `ujian` (
  `id_ujian` varchar(10) NOT NULL,
  `nama_ujian` varchar(50) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status_ujian` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id_ujian`, `nama_ujian`, `id_tahun`, `tgl_mulai`, `tgl_selesai`, `status_ujian`) VALUES
('12321432', 'Ujian Tengah Semester', 0, '2017-05-11', '2017-05-12', 'Tidak Aktif'),
('2324', 'sadsf', 0, '2017-05-11', '0000-00-00', 'Tidak Aktif'),
('243134', 'ujian semsester', 0, '2017-05-09', '2017-05-10', 'Tidak Aktif'),
('UAS01', 'Ujian Akhir Semester', 0, '2017-05-01', '2017-05-12', 'Aktif'),
('wqde', '12341234', 0, '2017-05-18', '2017-05-10', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('aaaaaa', '4124bc0a9335c27f086f24ba207a4912', 'admin'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('admin123', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('agus', 'fdf169558242ee051cca1479770ebac3', 'guru'),
('alvi', '5aa9114de7d21806f68693601b5842d9', 'siswa'),
('amel', 'da0e22de18e3fbe1e96bdc882b912ea4', 'siswa'),
('anita', '83349cbdac695f3943635a4fd1aaa7d0', 'siswa'),
('bayu', 'a430e06de5ce438d499c2e4063d60fd6', 'siswa'),
('bopi', 'b5fb66798df9455fd076e4c921105f41', 'guru'),
('coba', '9a4d9ae51a4097317711e3955addb505', 'admin'),
('deby', '94169b553688da79735f4a4a1dd781c1', 'guru'),
('diana', 'd198701ea9845a81821458aba5e077d6', 'guru'),
('dianaa', '3a23bb515e06d0e944ff916e79a7775c', 'siswa'),
('dianaari', 'ca7669cfc26196d72f7d5297cf1bc606', 'admin'),
('didit', 'b54158bd2d60aa56125ff181a32fb1d0', 'guru'),
('diyah', '65df1a518a08177a39b57767a338cf77', 'guru'),
('edy', 'f75f761c049dced5d7eb5028ac04174a', 'guru'),
('eko', 'e5ea9b6d71086dfef3a15f726abcc5bf', 'siswa'),
('guru', '77e69c137812518e359196bb2f5e9bb9', 'guru'),
('hartini', '0831c21ab0b7719c1892215fb5f64dfb', 'guru'),
('hasan', 'fc3f318fba8b3c1502bece62a27712df', 'guru'),
('ibu', 'e658791a20540c6592929f1be4d5f68f', 'admin'),
('indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', 'siswa'),
('irfan', '24b90bc48a67ac676228385a7c71a119', 'guru'),
('karyono', '66f978dcc390e912763e287c60703e8a', 'guru'),
('mardjo', '66df42bef151a3e15bed2b01cc95cfcc', 'guru'),
('siswa', 'bcd724d15cde8c47650fda962968f102', 'siswa'),
('siti', 'db04eb4b07e0aaf8d1d477ae342bdff9', 'guru'),
('tanti', '9de8d29fe21d16d43af13b2b516c39de', 'guru'),
('tantiii', '1b2a6e7f215bb7c68af39b2859c991eb', 'guru'),
('winaryono', '083d587074c86f25de05671e2ab1c508', 'guru'),
('wqew', 'a9e49c7aefe022f0a8540361cce7575c', 'admin'),
('wrewer', '48c0b08c21d873f310e4a5c90be3de62', 'admin'),
('yunita', '771393b4e52f91157c7a2dc3ab198037', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`), ADD KEY `user_admin` (`username`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`nip`), ADD KEY `user_guru` (`username`);

--
-- Indexes for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
 ADD PRIMARY KEY (`id_grmapel`), ADD KEY `kelas_grmapel` (`id_kelas`), ADD KEY `guru_grmapel` (`nip`), ADD KEY `mapel_grmapel` (`id_mapel`), ADD KEY `tahun_grmapel` (`id_tahun`);

--
-- Indexes for table `hasil_ujian`
--
ALTER TABLE `hasil_ujian`
 ADD KEY `soal_ujisiswa` (`id_soal`), ADD KEY `siswa_ujisiswa` (`nis`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
 ADD KEY `siswa_kelsiswa` (`nis`), ADD KEY `kelas_kelsiswa` (`id_kelas`), ADD KEY `tahun_kelsiswa` (`id_tahun`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
 ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `opsi_jawaban`
--
ALTER TABLE `opsi_jawaban`
 ADD PRIMARY KEY (`id_opsi`), ADD KEY `pertanyaan_opsi` (`id_pertanyaan`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
 ADD PRIMARY KEY (`id_pertanyaan`), ADD KEY `soal_pertanyaan` (`id_soal`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`), ADD KEY `user_siswa` (`username`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
 ADD PRIMARY KEY (`id_soal`), ADD KEY `mapel_soal` (`id_mapel`), ADD KEY `kelas_soal` (`id_kelas`), ADD KEY `ujian_soal` (`id_ujian`);

--
-- Indexes for table `tahun`
--
ALTER TABLE `tahun`
 ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
 ADD PRIMARY KEY (`id_ujian`), ADD KEY `thn_ujian` (`id_tahun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1214;
--
-- AUTO_INCREMENT for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
MODIFY `id_grmapel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `opsi_jawaban`
--
ALTER TABLE `opsi_jawaban`
MODIFY `id_opsi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tahun`
--
ALTER TABLE `tahun`
MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
ADD CONSTRAINT `user_admin` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
ADD CONSTRAINT `user_guru` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
ADD CONSTRAINT `guru_grmapel` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
ADD CONSTRAINT `kelas_grmapel` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
ADD CONSTRAINT `mapel_grmapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
ADD CONSTRAINT `tahun_grmapel` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`);

--
-- Constraints for table `hasil_ujian`
--
ALTER TABLE `hasil_ujian`
ADD CONSTRAINT `siswa_ujisiswa` FOREIGN KEY (`nis`) REFERENCES `siswa` (`NIS`),
ADD CONSTRAINT `soal_ujisiswa` FOREIGN KEY (`id_soal`) REFERENCES `soal` (`id_soal`);

--
-- Constraints for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
ADD CONSTRAINT `kelas_kelsiswa` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `siswa_kelsiswa` FOREIGN KEY (`nis`) REFERENCES `siswa` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tahun_kelsiswa` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `opsi_jawaban`
--
ALTER TABLE `opsi_jawaban`
ADD CONSTRAINT `pertanyaan_opsi` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id_pertanyaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
ADD CONSTRAINT `soal_pertanyaan` FOREIGN KEY (`id_soal`) REFERENCES `soal` (`id_soal`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
ADD CONSTRAINT `user_siswa` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soal`
--
ALTER TABLE `soal`
ADD CONSTRAINT `kelas_soal` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
ADD CONSTRAINT `mapel_soal` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
ADD CONSTRAINT `ujian_soal` FOREIGN KEY (`id_ujian`) REFERENCES `ujian` (`id_ujian`);

--
-- Constraints for table `ujian`
--
ALTER TABLE `ujian`
ADD CONSTRAINT `thn_ujian` FOREIGN KEY (`id_tahun`) REFERENCES `tahun` (`id_tahun`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
