-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2021 at 04:00 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17518389_website_dika`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datasiswa`
--

INSERT INTO `datasiswa` (`id`, `nama`, `alamat`, `kelas`, `jurusan`) VALUES
(1, 'Yurischa Aulya', 'Surabaya', '10A', 'MIPA'),
(2, 'Vinka Amalia', 'Pasuruan', '10B', 'MIPA'),
(3, 'Nio Dyah', 'Nganjuk', '10C', 'MIPA'),
(4, 'Riris Silvia', 'Malang', '10A', 'IPS'),
(5, 'Eldha Nirwana', 'Tuban', '10B', 'IPS'),
(6, 'Chelvin', 'Sawojajar', '10C', 'IPS'),
(7, 'Aldi Rismanto', 'Magetan', '11A', 'MIPA'),
(8, 'Ayu citra', 'Kalimantan', '11B', 'MIPA'),
(11, 'Akmal Naim Zuai', 'Sidoarjo', '11C', 'MIPA'),
(13, 'Andri Dwi Putra', 'Tulungagung', '12A', 'MIPA'),
(14, 'Sidik Dwi P', 'Takeran', '12C', 'MIPA'),
(15, 'M. Fisra', 'Kebonsari', '12A', 'IPS'),
(16, 'M. Regi Hardiansyah', 'Situbondo', '12B', 'IPS'),
(17, 'Wahyu Saputra', 'TegalGondo', '12C', 'IPS'),
(18, 'M. Irwansyah', 'Kedungkandang', '10A', 'MIPA'),
(20, 'M. Hanif', 'Yogyakarta', '10C', 'MIPA'),
(21, 'Anisa Ayunda', 'SumberAsih', '10A', 'IPS'),
(26, 'Eko Saputra', 'Palembang', '10B', 'IPS'),
(27, 'Muzammil', 'Bogor', '11A', 'MIPA'),
(28, 'LUKMAN', 'Bandung', '11B', 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT 'L',
  `status` enum('PNS','KONTRAK') DEFAULT 'PNS',
  `jabatan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `alamat`, `jenis_kelamin`, `status`, `jabatan`) VALUES
(101, 'Ririn Puji Astuti,S.Pd', 'Jl.Kembang jati No.01', 'P', 'PNS', 'Guru Mapel Sejarah'),
(102, 'Ahmad Dardiri,S.Ag', 'Jl.Sumber jaya No.02', 'L', 'PNS', 'Guru mapel Agama'),
(103, 'Gunawan Risdianto,S.Pd', 'Jl.Cokrokertopati No.18', 'L', 'KONTRAK', 'Guru mapel Pkn'),
(104, 'Citra Kirana,M.Pd.', 'Jl.Pahlawan No.1B', 'P', 'PNS', 'Guru mapel Bahasa Inggris'),
(105, 'Hari Siswanto,S.Pd', 'Jl.Majapahit No.1C', 'L', 'PNS', 'Guru mapel Penjaskes'),
(106, 'Endang Puryani,M.Pd', 'Jl.Kembang Sawit No.11', 'P', 'PNS', 'Guru mapel Matematika'),
(107, 'Amirudin,S.Pd', 'Jl.Kartini N0.2A', 'L', 'PNS', 'Guru mapel Fisika'),
(108, 'Halimah Aisyah,S.Pd', '																Jl.Sriwijaya No.14									', 'P', 'PNS', '																Guru mapel Ekonomi	'),
(109, 'Dra.Elang Pradana', '							Jl.Rogonoto N0.1A', 'L', 'PNS', '							Guru mapel Bahasa Jawa'),
(110, 'Sinta Alya', 'Jl.Kuwonharjo No.15', 'P', 'PNS', 'Guru mapel Kimia'),
(222, 'Adi Saputra', 'Mataram', 'L', 'PNS', 'Tata Usaha');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `sumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `deskripsi`, `sumber`) VALUES
(12, 'ppdb', '							Penerimaan siswa baru tahun 2017', '								https://mage');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_sekolah`
--

CREATE TABLE `kepala_sekolah` (
  `nip` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `kontak` int(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepala_sekolah`
--

INSERT INTO `kepala_sekolah` (`nip`, `nama`, `jabatan`, `kontak`, `alamat`) VALUES
(212251274, 'Musa', 'Tata Usaha', 83423423, 'Mataram'),
(212251280, 'Akmal Naim Zuai', 'Sekretatis', 826849290, 'Bogor'),
(212251290, 'Saputra Diego', 'Bendahara', 826849290, 'Palembang'),
(212251292, 'Adi', 'Wakil Kepala Sekolah', 827284791, 'Palembang'),
(212954992, 'Ahmad Fadly', 'Kepala Sekolah', 826849271, 'Palembang');

-- --------------------------------------------------------

--
-- Table structure for table `saranaprasarana`
--

CREATE TABLE `saranaprasarana` (
  `no` int(3) NOT NULL,
  `sarana` varchar(30) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `kelengkapan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saranaprasarana`
--

INSERT INTO `saranaprasarana` (`no`, `sarana`, `jumlah`, `kelengkapan`) VALUES
(1, 'Ruang Kepala Sekolah', 1, 'Meja kursi tamu, seperangkat komputer, wifi, internet, AC, telephone, CCTV'),
(2, 'Ruang Tamu', 1, 'Meja kursi tamu, dokumentasi prestasi siswa, Running text'),
(3, 'Ruang Guru', 1, 'Meja kursi guru, komputer, hotspot area, LCD Projector, TV 29\", sound system, AC,CCTV'),
(4, 'Ruang Tata Usaha', 1, 'Meja kursi TU, 7 unit perangkat komputer, Internet, sound system, CCTV,televisi 29\", lemari arsip'),
(5, 'Ruang Kelas', 26, 'Meja kursi siswa & guru, whiteboard, LCD Projector, seperangkat komputer, wifi, kamera CCTV'),
(6, 'Ruang Kesiswaan', 1, 'Meja kursi Waka Kesiswaan, seperangkat komputer, wifi, hotspot area'),
(7, 'Ruang BK', 1, 'Meja kursi, seperangkat komputer, wifi, hotspot area, lemari arsip'),
(8, 'Laboratorium Bahasa', 1, 'Peralatan lab. bahasa, seperangkat komputer, LCD Projector, Televisi 29\", sound system'),
(9, 'Laboratorium Kimia', 1, 'Peralatan lab. kimia, seperangkat komputer, LCD Projector, Televisi 29\", sound system'),
(10, 'Laboratorium Fisika', 1, 'Peralatan lab. fisika, seperangkat komputer, LCD Projector, Televisi 29\", sound system'),
(11, 'Laboratorium Biologi', 1, 'Peralatan lab. biologi, seperangkat komputer, LCD Projector, televisi 29\", sound system'),
(12, 'Laboratorium Komputer', 1, '70 unit perangkat komputer, AC, LCD Projector, meja kursi siswa dan guru;'),
(13, 'Laboratorium Multimedia', 1, '40 unit perangkat komputer, hotspot area,AC, LCD Projector, meja kursi siswa guru'),
(14, 'Perpustakaan', 1, '5 unit komputer, hotspot area,buku materi pelajaran, meja kursi siswa ; pustakawan'),
(15, 'Ruang TRRC', 1, '2 unit perangkat komputer, wifi, hotspot area, meja kursi, LCD Projector,'),
(16, 'Ruang Kurikulum', 1, 'Meja kursi, Lemari Arsip Kurikulum, Seperangkat komputer, Mesin fotokopi'),
(17, 'Ruang UKS (putra/putri)', 2, 'Seperangkat alat UKS'),
(18, 'Ruang OSIS', 1, 'Seperangkat komputer, wifi, meja kursi'),
(19, 'Ruang PRAMUKA', 1, 'Seperangkat komputer, wifi, meja kursi'),
(20, 'Ruang Kesenian', 1, 'Seperangkat gamelan, sound system'),
(21, 'Installasi listrik', 3, '15000 watt'),
(22, 'Masjid', 1, '-'),
(23, 'Lapangan Sepak bola', 1, '-'),
(24, 'Lapangan bola basket', 1, '-'),
(25, 'Lapangan bola volly', 1, '-'),
(26, 'Lapangan Upacara', 1, '-'),
(27, 'Kamar mandi / WC Guru', 2, '-'),
(28, 'Kamar mandi / WC Siswa', 15, '-'),
(29, 'Ruang Enghlis Club', 1, 'Seperangkat komputer, wifi, meja kursi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin1', '202cb962ac59075b964b07152d234b70', '1'),
(2, 'admin2', '81dc9bdb52d04dc20036dbd8313ed055', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepala_sekolah`
--
ALTER TABLE `kepala_sekolah`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `saranaprasarana`
--
ALTER TABLE `saranaprasarana`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `kepala_sekolah`
--
ALTER TABLE `kepala_sekolah`
  MODIFY `nip` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `saranaprasarana`
--
ALTER TABLE `saranaprasarana`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
