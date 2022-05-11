-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 10:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aspirasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aspirasi`
--

CREATE TABLE `tb_aspirasi` (
  `kd_aspirasi` varchar(15) NOT NULL,
  `nim` int(10) NOT NULL,
  `kd_unit` varchar(10) NOT NULL,
  `wkt_masuk` varchar(25) NOT NULL,
  `wkt_terjawab` varchar(25) NOT NULL,
  `status` text NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `aspirasi` longtext NOT NULL,
  `jawaban` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aspirasi`
--

INSERT INTO `tb_aspirasi` (`kd_aspirasi`, `nim`, `kd_unit`, `wkt_masuk`, `wkt_terjawab`, `status`, `subjek`, `aspirasi`, `jawaban`) VALUES
('0izz51dnwy', 1407055004, '', '01:17, 10-05-2022', '', 'Belum Terjawab', 'Nonakademik', 'hiyala', ''),
('528herm66v', 1407055009, '1111111111', '21:13, 17-10-2016', '', 'Belum Terjawab', 'Kayaknya', 'mereun', ''),
('7qyzq3rflb', 1407055009, '1111111111', '21:12, 17-10-2016', '21:21, 17-10-2016', 'Terjawab', 'Apa aja', 'semoga kinerja akademik membaik', 'gatau jjuga aku mallll'),
('8itktfg5yw', 1407055004, '1111111111', '21:15, 17-10-2016', '21:20, 17-10-2016', 'Terjawab', 'kayaknya', 'atau', 'apaan maleficent'),
('azlemtlic5', 1407055004, '', '01:35, 10-05-2022', '', '', 'Akademik', 'asasa', ''),
('bh05jhy5pd', 1407055004, '', '01:21, 10-05-2022', '', '', 'Nonakademik', 'pen lomba', ''),
('bs9m149mbz', 1407055004, '', '01:15, 10-05-2022', '', 'Belum Terjawab', 'Akademik', 'test lagi la', ''),
('cyrxupkf8q', 1407055004, '2222222222', '21:15, 17-10-2016', '', 'Belum Terjawab', 'hmmm', 'sepertinya begitu', ''),
('hxq4rwqumj', 1407055004, '2222222222', '21:16, 17-10-2016', '21:36, 17-10-2016', 'Terjawab', 'sepertinya', 'asdasdasd', 'kjbkjbkj'),
('kdrctwzs23', 1407055004, '', '00:58, 10-05-2022', '', 'Belum Terjawab', 'Nonakademik', 'bisa dong', ''),
('mm34056tii', 1407055009, '2222222222', '21:10, 17-10-2016', '21:22, 17-10-2016', 'Terjawab', 'Perkuliahan', 'Smoga praktikum lancar', 'sepertinya sih begindang'),
('o19tfgq94z', 1407055009, '2222222222', '21:09, 17-10-2016', '', 'Belum Terjawab', 'Penilaian', 'Semoga penilaian ditahun yang akan datang semakin mudah', ''),
('pj6xk8n61f', 1407055004, '1111111111', '21:15, 17-10-2016', '', 'Belum Terjawab', 'kira-kira', 'apa yahh', ''),
('rxaxd50f8z', 1407055004, '', '00:29, 11-05-2022', '', '', 'Akademik', 'hai\r\n', ''),
('wb17pbzsmk', 1407055009, '2222222222', '21:08, 17-10-2016', '', 'Belum Terjawab', 'Perlengkapan', 'Mohon untuk perlengkapan lebih baik lagi ditahun-tahun yang akan datang', ''),
('wylij70xj4', 1407055004, '', '01:19, 10-05-2022', '', '', 'Akademik', 'apalagiya', ''),
('zf11teuk7b', 1407055004, '1111111111', '21:15, 17-10-2016', '', 'Belum Terjawab', 'gatau juga sihh', 'mereunnn', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `password`) VALUES
(119140108, 'Muhammad Farhan', 'farhan'),
(119140119, 'Agusto Hawlai', 'agusto'),
(119140143, 'Clarisa Tri Handayani', 'clarisa'),
(119140159, 'Olivia Marlinang Elizabeth', 'olivia'),
(119140184, 'Delta Dewi Fortuna', 'delta'),
(119140199, 'Muhammad Fariz Luthfi', 'fariz'),
(1407055004, 'Akmal Erfani', 'akmal'),
(1407055009, 'Aqib Muaddam', 'aqib'),
(1407055024, 'Rahmat Ramadhan', 'madan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_topik`
--

CREATE TABLE `tb_topik` (
  `id` int(10) NOT NULL,
  `topik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_topik`
--

INSERT INTO `tb_topik` (`id`, `topik`) VALUES
(1, 'Akademik'),
(2, 'Nonakademik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unitkerja`
--

CREATE TABLE `tb_unitkerja` (
  `kd_unit` varchar(10) NOT NULL,
  `nm_unit` varchar(30) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_unitkerja`
--

INSERT INTO `tb_unitkerja` (`kd_unit`, `nm_unit`, `nip`, `password`) VALUES
('1111111111', 'Akademik', 1111111111, '1111111111'),
('2222222222', 'Kemahasiswaan', 2222222222, '2222222222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aspirasi`
--
ALTER TABLE `tb_aspirasi`
  ADD PRIMARY KEY (`kd_aspirasi`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_topik`
--
ALTER TABLE `tb_topik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_unitkerja`
--
ALTER TABLE `tb_unitkerja`
  ADD PRIMARY KEY (`kd_unit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
