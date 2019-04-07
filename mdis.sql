-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2019 pada 16.09
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `password`) VALUES
(0, 'admin2', 'admin2', 123456789),
(1, 'Admin1', 'Admin', 123456);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gsd`
--

CREATE TABLE `gsd` (
  `id` int(11) NOT NULL,
  `point` double NOT NULL,
  `point1` double NOT NULL,
  `point2` double NOT NULL,
  `point3` double NOT NULL,
  `point4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gsd`
--

INSERT INTO `gsd` (`id`, `point`, `point1`, `point2`, `point3`, `point4`) VALUES
(1, 1, 2, 3, 4, 5),
(2, 5, 0.6, 2, 3, 4),
(3, 2, 4, 1, 3, 2),
(4, 5, 4, 3, 1, 2),
(5, 5, 4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jur` int(11) NOT NULL,
  `jur` varchar(50) NOT NULL,
  `point` double NOT NULL,
  `point1` double NOT NULL,
  `point2` double NOT NULL,
  `point3` double NOT NULL,
  `point4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jur`, `jur`, `point`, `point1`, `point2`, `point3`, `point4`) VALUES
(1, 'TEKNIK KOMPUTER & JARINGAN', 1, 0.5, 0.2, 0.3, 0.4),
(2, 'TEKNIK INFORMATIKA', 0.1, 1, 0.3, 0.4, 0.5),
(3, 'TEKNIK ELEKTRO', 0.5, 0.2, 1, 0.2, 0.6),
(4, 'TEKNIK LISTRIK', 0.4, 0.5, 0.7, 1, 0.2),
(5, 'TEKNIK TRANSMISI TELEKOMUNIKASI', 0.9, 0.8, 0.4, 0.1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginstaf`
--

CREATE TABLE `loginstaf` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loginstaf`
--

INSERT INTO `loginstaf` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'staf1', 'staf1', 123456);

-- --------------------------------------------------------

--
-- Struktur dari tabel `logistic_general_support`
--

CREATE TABLE `logistic_general_support` (
  `id` int(11) NOT NULL,
  `point` double NOT NULL,
  `point1` double NOT NULL,
  `point2` double NOT NULL,
  `point3` double NOT NULL,
  `point4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logistic_general_support`
--

INSERT INTO `logistic_general_support` (`id`, `point`, `point1`, `point2`, `point3`, `point4`) VALUES
(1, 1, 2, 3, 4, 5),
(2, 2, 1, 5, 4, 3),
(3, 3, 2, 1, 5, 4),
(4, 4, 3, 2, 1, 5),
(5, 0.6, 4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `id_need` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `id_jur` int(11) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `tgl_msk` date NOT NULL,
  `tgl_klr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`id`, `id_need`, `nama`, `asal`, `nama_file`, `id_jur`, `tujuan`, `tgl_msk`, `tgl_klr`) VALUES
(1, 0, 'Anugrah Dwi', 'STMIK Dipanegara Makassar', '', 1, 'KKLP (Kuliah Kerja L', '2019-03-04', '2019-03-29'),
(2, 0, 'Hartanto Akbar R', 'STMIK Dipanegara Makassar', '5.png', 2, 'KKLP (Kuliah Kerja L', '2019-03-04', '2019-03-29'),
(3, 0, 'A. Rahmat', 'STMIK Dipanegara Makassar', '2.PNG', 3, 'KKLP (Kuliah Kerja L', '2019-03-04', '2019-03-29'),
(5, 0, 'ilham', 'smk1', '20180421_081000.jpg', 5, 'KKLP (Kuliah Kerja L', '2019-03-18', '2019-03-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `need`
--

CREATE TABLE `need` (
  `id` int(11) NOT NULL,
  `namaunit` varchar(40) NOT NULL,
  `point` double NOT NULL,
  `point1` double NOT NULL,
  `point2` double NOT NULL,
  `jumlah_keb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `need`
--

INSERT INTO `need` (`id`, `namaunit`, `point`, `point1`, `point2`, `jumlah_keb`) VALUES
(1, 'REGIONAL VII', 1, 0.5, 0.25, 5),
(2, 'LOGISTIC & GENERAL SUPPORT', 1, 1, 0.5, 5),
(3, 'GSD', 4, 2, 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `needkeluar`
--

CREATE TABLE `needkeluar` (
  `id_klr` int(11) NOT NULL,
  `id_need` int(11) NOT NULL,
  `jumlah_keb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `needkeluar`
--

INSERT INTO `needkeluar` (`id_klr`, `id_need`, `jumlah_keb`) VALUES
(1, 3, 2),
(2, 4, 2);

--
-- Trigger `needkeluar`
--
DELIMITER $$
CREATE TRIGGER `need_keluar` AFTER INSERT ON `needkeluar` FOR EACH ROW BEGIN
	UPDATE need SET jumlah_keb=jumlah_keb-NEW.jumlah_keb
    WHERE id = NEW.id_need;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `needmasuk`
--

CREATE TABLE `needmasuk` (
  `id_msk` int(11) NOT NULL,
  `id_need` int(11) NOT NULL,
  `jumlah_keb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `needmasuk`
--

INSERT INTO `needmasuk` (`id_msk`, `id_need`, `jumlah_keb`) VALUES
(1, 3, 5),
(2, 4, 5);

--
-- Trigger `needmasuk`
--
DELIMITER $$
CREATE TRIGGER `need_masuk` AFTER INSERT ON `needmasuk` FOR EACH ROW BEGIN
	UPDATE need SET jumlah_keb=jumlah_keb+NEW.jumlah_keb
    WHERE id = NEW.id_need;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `kd` varchar(2) NOT NULL,
  `kr` varchar(2) NOT NULL,
  `krj` varchar(2) NOT NULL,
  `sk` varchar(2) NOT NULL,
  `im` varchar(2) NOT NULL,
  `tj` varchar(2) NOT NULL,
  `kb` varchar(2) NOT NULL,
  `kju` varchar(2) NOT NULL,
  `unit_magang` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `kd`, `kr`, `krj`, `sk`, `im`, `tj`, `kb`, `kju`, `unit_magang`) VALUES
(1, 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'Log & GS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `point_jur`
--

CREATE TABLE `point_jur` (
  `id_point` int(11) NOT NULL,
  `id_need` int(11) NOT NULL,
  `id_jur` int(11) NOT NULL,
  `point` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `point_jur`
--

INSERT INTO `point_jur` (`id_point`, `id_need`, `id_jur`, `point`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 0.3),
(3, 1, 3, 0.2),
(4, 1, 4, 0.4),
(5, 1, 5, 0.6),
(6, 2, 1, 0.1),
(7, 2, 2, 0.3),
(8, 2, 3, 0.4),
(9, 2, 4, 0.7),
(10, 2, 5, 0.9),
(11, 3, 1, 0.4),
(12, 3, 2, 2),
(13, 3, 3, 0.3),
(14, 3, 4, 0.5),
(15, 3, 5, 0.7),
(16, 4, 1, 0.2),
(17, 4, 2, 0.5),
(18, 4, 3, 0.8),
(19, 4, 4, 0.2),
(20, 4, 5, 0.2),
(21, 5, 1, 2),
(22, 5, 2, 0.4),
(23, 5, 3, 0.7),
(24, 5, 4, 0.9),
(25, 5, 5, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `regional_vii`
--

CREATE TABLE `regional_vii` (
  `id` int(11) NOT NULL,
  `point` double NOT NULL,
  `point1` double NOT NULL,
  `point2` double NOT NULL,
  `point3` double NOT NULL,
  `point4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `regional_vii`
--

INSERT INTO `regional_vii` (`id`, `point`, `point1`, `point2`, `point3`, `point4`) VALUES
(1, 1, 0.5, 0.7, 0.2, 2),
(2, 0.6, 1, 4, 2, 1),
(3, 2, 3, 1, 4, 2),
(4, 3, 2, 4, 1, 5),
(5, 2, 3, 4, 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `staf`
--

CREATE TABLE `staf` (
  `id` int(11) NOT NULL,
  `unit` varchar(40) NOT NULL,
  `admin` varchar(40) NOT NULL,
  `nik` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staf`
--

INSERT INTO `staf` (`id`, `unit`, `admin`, `nik`) VALUES
(0, 'Log & GS', 'Admin', 12345);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gsd`
--
ALTER TABLE `gsd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jur`);

--
-- Indeks untuk tabel `loginstaf`
--
ALTER TABLE `loginstaf`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logistic_general_support`
--
ALTER TABLE `logistic_general_support`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `need`
--
ALTER TABLE `need`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `needkeluar`
--
ALTER TABLE `needkeluar`
  ADD PRIMARY KEY (`id_klr`);

--
-- Indeks untuk tabel `needmasuk`
--
ALTER TABLE `needmasuk`
  ADD PRIMARY KEY (`id_msk`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `point_jur`
--
ALTER TABLE `point_jur`
  ADD PRIMARY KEY (`id_point`);

--
-- Indeks untuk tabel `regional_vii`
--
ALTER TABLE `regional_vii`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gsd`
--
ALTER TABLE `gsd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `loginstaf`
--
ALTER TABLE `loginstaf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `logistic_general_support`
--
ALTER TABLE `logistic_general_support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `need`
--
ALTER TABLE `need`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `needkeluar`
--
ALTER TABLE `needkeluar`
  MODIFY `id_klr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `needmasuk`
--
ALTER TABLE `needmasuk`
  MODIFY `id_msk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `point_jur`
--
ALTER TABLE `point_jur`
  MODIFY `id_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `regional_vii`
--
ALTER TABLE `regional_vii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
