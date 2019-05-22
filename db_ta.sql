-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2019 pada 09.16
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alur`
--

CREATE TABLE `alur` (
  `id_alur` int(10) NOT NULL,
  `nama_alur` varchar(20) NOT NULL,
  `id_tahun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alur`
--

INSERT INTO `alur` (`id_alur`, `nama_alur`, `id_tahun`) VALUES
(1, 'pembayaran', 0),
(2, 'krs', 0),
(3, 'khs', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(10) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(21, 'Dekan'),
(22, 'Wali Dekan'),
(23, 'Kepala Tata Usaha'),
(24, 'Kaprodi Informatika'),
(25, 'Kaprodi Teknik Elektro'),
(26, 'Kaprodi Sistem Informasi'),
(27, 'Kaprodi Teknologi Informasi'),
(28, 'Ketua Prodi RPL'),
(29, 'Sekretaris Prodi IF & TE'),
(30, 'Sekretaris Prodi SI, TI & RPL'),
(31, 'Kepala Laboratorium'),
(32, 'Staff Administrasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `langkah`
--

CREATE TABLE `langkah` (
  `id_langkah` int(10) NOT NULL,
  `id_alur` int(10) NOT NULL,
  `id_ruang` int(10) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `foto` longtext NOT NULL,
  `id_jabatan` int(10) NOT NULL,
  `id_ruang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `foto`, `id_jabatan`, `id_ruang`) VALUES
(56, 'MOH. FURQAN, M.Kom', '2.PNG', 21, 13),
(57, 'MOH. JASRI, M.Kom', '', 22, 0),
(58, 'AHMAD HUDAWI, M.Kom', '', 23, 0),
(59, 'GULPI QORIK OKTAGALU P, M.Kom', '', 24, 0),
(60, 'SULISTIYANTO, MT', '', 25, 0),
(61, 'FUADZ HASYIM, M.Kom', '', 26, 0),
(62, 'ZAINAL ARIFIN, M.Kom', '', 27, 0),
(63, 'WAHAB SYAâ€™RONI, M.Kom', '', 28, 0),
(64, 'WALI JAâ€™FAR SHUDIQ, M.Kom', '', 29, 0),
(65, 'M. SYAFII, M.Kom', '', 30, 0),
(66, 'M. FADHILURRAHMAN, M.Kom', '', 31, 0),
(67, 'ADY ASHARI, S.Pd', '', 32, 11),
(68, 'ALI MASHURI RACHMAN, S.Ag', '', 32, 0),
(69, 'MULLA, S.Pd', '', 32, 0),
(70, 'KHOIRUL UMAM, S.Pd', '', 25, 16),
(71, 'Direktur', '', 21, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(10) NOT NULL,
  `nama_ruang` varchar(30) NOT NULL,
  `posisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `posisi`) VALUES
(3, 'ruang (C1.01)', 'c1.01'),
(4, 'ruang (C1.02)', 'c1.02'),
(5, 'ruang bplk', 'c1.03'),
(6, 'kaprodi IF dan TE', 'c1.04'),
(7, 'ruang dosen putra', 'c1.05'),
(8, 'ruang dosen putri', 'c1.06'),
(9, 'ruang lab elektro pc', 'c1.07'),
(10, 'ruang kaprodi TI,SI,', 'd1.01'),
(11, 'ruang administrasi FT', 'd1.02'),
(12, 'ruang kelas (D1.01)', 'd1.03'),
(13, 'ruang dekan FT', 'd1.04'),
(14, 'ruang lab 1 komputer', 'd1.05'),
(15, 'ruang lab 2 komputer', 'd1.06'),
(16, 'lab elektro dosen', 'd1.07'),
(17, 'ruang (C2.01)', 'c2.01'),
(18, 'ruang (C2.02)', 'c2.02'),
(19, 'ruang (C2.03)', 'c2.03'),
(20, 'ruang lab jaringan', 'c2.04'),
(21, 'ruang (C2.04)', 'c2.05'),
(22, 'ruang (C2.05)', 'c2.06'),
(23, 'ruang (C2.06)', 'c2.07'),
(24, 'ruang (C3.01)', 'c3.01'),
(25, 'ruang (C3.02)', 'c3.02'),
(26, 'ruang (C3.03)', 'c3.03'),
(27, 'ruang hima prodi', 'c3.04'),
(28, 'ruang (C3.04)', 'c3.05'),
(29, 'ruang (C3.05)', 'c3.06'),
(30, 'ruang (C3.06)', 'c3.07'),
(31, 'ruang (D2.01)', 'd2.01'),
(32, 'ruang (D2.02)', 'd2.02'),
(33, 'ruang (D2.03)', 'd2.03'),
(34, 'power', 'd2.04'),
(35, 'ruang lab 3 komputer', 'd2.05'),
(36, 'ruang lab 4 komputer', 'd2.06'),
(37, 'ruang lab 5 komputer', 'd2.07'),
(38, 'aula FT', 'd3.01'),
(39, 'ruang (D3.01)', 'd3.02'),
(40, 'ruang (D3.02)', 'd3.03'),
(41, 'kantor lab', 'd3.04'),
(42, 'ruang (D3.03)', 'd3.05'),
(43, 'ruang (D3.04)', 'd3.06'),
(44, 'ruang (D3.05)', 'd3.07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `aktif` enum('ya','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pasword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `pasword`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alur`
--
ALTER TABLE `alur`
  ADD PRIMARY KEY (`id_alur`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `langkah`
--
ALTER TABLE `langkah`
  ADD PRIMARY KEY (`id_langkah`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alur`
--
ALTER TABLE `alur`
  MODIFY `id_alur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `langkah`
--
ALTER TABLE `langkah`
  MODIFY `id_langkah` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
