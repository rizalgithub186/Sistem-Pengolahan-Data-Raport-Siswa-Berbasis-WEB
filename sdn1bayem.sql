-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2021 pada 22.30
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `nama_walkes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `nama_walkes`) VALUES
(72, 'VII B', 'Siti Fajriah, S.Ag.,'),
(81, 'VIII A', 'Noorhadi, S.Pd.,'),
(82, 'VIII B', 'Sumiatun, S.Pd.,'),
(91, 'IX A', 'Rina Andryani, S.Pd.,'),
(92, 'IX B', 'Kusrini, S.Pd.,'),
(123, '7 C', 'NIXXY'),
(1234, 'VII C', 'NIXXY KZ'),
(123456, 'VIII C', 'Arif SFWEGWE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nickname`, `role`) VALUES
(1, 'staff', '1253208465b1efa876f982d8a9e73eef', 'Staff Tata Usaha', 'stock'),
(2, 'kepsek', '8561863b55faf85b9ad67c52b3b851ac', 'Kepala Sekolah', 'kepsek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `kode_pel` varchar(50) NOT NULL,
  `nama_pel` varchar(100) NOT NULL,
  `nama_guru` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kode_pel`, `nama_pel`, `nama_guru`) VALUES
('VII-MTK', 'Matematika', 'Puguh Setiyanto, S.Pd.,'),
('VII-BANDOI', 'Bahasa Indonesia', 'Sultan Teguh Afriyanto, S.Pd.,'),
('VII-PAI', 'Pendidikan Agama Islam', 'Siti Fajriah, S.Ag.,'),
('VII-IPA', 'Ilmu Pengetahuan Alam', 'Kusmiatun, S.Pd.,'),
('VII-PKN', 'Pendidikan Kewarganegaraan', 'Sutris, S.Pd.,'),
('VII-IPS', 'Ilmu Pengetahuan Sosial', 'Sri Mafthukatun, S.Pd.,'),
('VII-ENGLISH', 'Bahasa Inggris', 'Tumarno, S.Pd.,'),
('VII-SBD', 'Seni Budaya', 'Sutono, S..Pd.,'),
('VII-PENJAS', 'Pendidikan Jasmani Dan Rohani', 'Watiningsih, S.Pd.,'),
('VII-PKY', 'Prakarya', 'Kasdono, S.Pd.,'),
('VIII-BANDOI', 'Bahasa Indonesia', 'Sultan Teguh Afriyanto, S.Pd.,'),
('VIII-ENGLISH', 'Bahasa Inggris', 'Arif Widiarto'),
('VIII-BANDOIger', 'rgegerhh', 'rhreherheh'),
('VIII-BANDOIgerwwf', 'Bahasa Indonesia', 'Arif Widiarto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_n` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `id_pel` int(11) NOT NULL,
  `nilai_uts` varchar(50) NOT NULL,
  `nilai_uas` varchar(50) NOT NULL,
  `niai_kepri` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai2`
--

CREATE TABLE `nilai2` (
  `kode` int(10) NOT NULL,
  `nis_sis` int(10) NOT NULL,
  `nama_sis` varchar(100) NOT NULL,
  `kelas_sis` varchar(100) NOT NULL,
  `pai` varchar(20) NOT NULL,
  `pkn` varchar(20) NOT NULL,
  `bandoi` varchar(20) NOT NULL,
  `mtk` varchar(20) NOT NULL,
  `ipa` varchar(20) NOT NULL,
  `ips` varchar(20) NOT NULL,
  `binggris` varchar(20) NOT NULL,
  `senibudaya` varchar(20) NOT NULL,
  `penjas` varchar(20) NOT NULL,
  `prakarya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai2`
--

INSERT INTO `nilai2` (`kode`, `nis_sis`, `nama_sis`, `kelas_sis`, `pai`, `pkn`, `bandoi`, `mtk`, `ipa`, `ips`, `binggris`, `senibudaya`, `penjas`, `prakarya`) VALUES
(1, 5161, 'Al Razak Kurniawan', 'VII A', '14', '56', '89', '45', '67', '89', '90', '78', '87', '89'),
(2, 5162, 'Dhea Ananda Husna Siregar', 'VII B', '100', '91', '100', '80', '78', '56', '87', '98', '89 ', '99'),
(3, 5163, 'Tandang Prayoga', 'VIII A', '100', '100', '56', '80', '78', '94', '61', '89', '89', '73'),
(4, 5164, 'Rifky Hidayat', 'VIII B', '56', '67', '86', '78', '99', '22', '34', '56', '67', '89'),
(5, 5165, 'Ummi Nurfadillah', 'IX A', '78', '78', '67', '56', '76', '78', '87', '65', '99 ', '67'),
(6, 5167, 'Selvi Yani', 'IX A', '83', '89', '87', '98', '77', '76', '89', '80', '87 ', '90'),
(7, 5166, 'Jatmiko Sutrisno', 'IX B', '89', '89', '89', '78', '90', '98', '89', '78', '98 ', '87');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama_sis` varchar(80) NOT NULL,
  `tmptlahir_sis` varchar(40) NOT NULL,
  `tgllahir_sis` date NOT NULL,
  `Jenis_kelamin` enum('L','P') NOT NULL,
  `namaortu_sis` varchar(80) NOT NULL,
  `namawalkes_sis` varchar(80) NOT NULL,
  `alamat_sis` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa2`
--

CREATE TABLE `siswa2` (
  `nis_sis` int(10) NOT NULL,
  `nisn_sis` varchar(100) NOT NULL,
  `nama_sis` varchar(100) NOT NULL,
  `kelas_sis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa2`
--

INSERT INTO `siswa2` (`nis_sis`, `nisn_sis`, `nama_sis`, `kelas_sis`) VALUES
(5161, '00000116789', 'Al Razak Kurniawan', 'VIIA'),
(5162, '00000116790', 'Dhea Ananda Husna Siregar', 'VII B'),
(5163, '00000116791', 'Tandang Prayoga', 'VIII A'),
(5164, '00000116792', 'Rifky Hidayat', 'VIII B'),
(5165, '00000116793', 'Ummi Nurfadillah', 'IX A'),
(5166, '00000116794', 'Jatmiko Sutrisno', 'IX B'),
(5167, '000000145678', 'Selvi Yani', 'VII B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slogin`
--

CREATE TABLE `slogin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slogin`
--

INSERT INTO `slogin` (`id`, `username`, `password`, `nickname`, `role`) VALUES
(7, 'guest', '084e0343a0486ff05530df6c705c8bb4', 'Stock', 'stock'),
(2, 'kepsek', '8561863b55faf85b9ad67c52b3b851ac', 'Kepala Sekolah', 'kepsek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transkip`
--

CREATE TABLE `transkip` (
  `id_ts` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_sis` varchar(80) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `id_pel` int(11) NOT NULL,
  `nama_pel` varchar(20) NOT NULL,
  `nama_guru` varchar(8) NOT NULL,
  `nilai_uts` varchar(50) NOT NULL,
  `nilai_uas` varchar(50) NOT NULL,
  `niai_kepri` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_pel`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_n`);

--
-- Indeks untuk tabel `nilai2`
--
ALTER TABLE `nilai2`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `siswa2`
--
ALTER TABLE `siswa2`
  ADD PRIMARY KEY (`nis_sis`);

--
-- Indeks untuk tabel `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transkip`
--
ALTER TABLE `transkip`
  ADD PRIMARY KEY (`id_ts`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5112;

--
-- AUTO_INCREMENT untuk tabel `slogin`
--
ALTER TABLE `slogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transkip`
--
ALTER TABLE `transkip`
  MODIFY `id_ts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
