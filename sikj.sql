-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2024 pada 11.54
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_a`
--

CREATE TABLE `menu_a` (
  `noId` varchar(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `isMainMenu` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_a`
--

INSERT INTO `menu_a` (`noId`, `menu`, `link`, `icon`, `isMainMenu`, `role`) VALUES
('ADM01', 'Dashboard', 'admin/dashboard', 'icon-air-play', '0', 'all'),
('ADM02', 'Master Data', '#', 'icon-stack', '0', 'all'),
('ADM03', 'Data Pegawai', 'admin/Pegawai', 'icon-user', 'ADM02', 'Admin'),
('ADM04', 'Golongan', 'admin/Golongan', 'icon-users', 'ADM02', 'Admin'),
('ADM05', 'Pengajuan Kenaikan Pangkat', 'admin/pengajuan', 'icon-drawer', '0', 'Admin'),
('ADM06', 'Pengajuan Masuk', 'admin/pengajuan', '', 'ADM05', 'Admin'),
('ADM07', 'Pengajuan Diterima', 'admin/pengajuan/diterima.php', '', 'ADM05', 'Admin'),
('ADM08', 'Pengajuan Ditolak', 'admin/pengajuan/ditolak.php', '', 'ADM05', 'Admin'),
('ADM09', 'Data Jabatan', 'admin/jabatan', '', 'ADM02', 'Admin'),
('ADM10', 'Pengajuan Pensiun', 'admin/pensiun', 'icon-profile', '0', 'Admin'),
('ADM11', 'Pensiun', 'admin/pensiun/pensiun.php', '', 'ADM10', 'Admin'),
('ADM12', 'Pensiun Dini', 'admin/pensiun/dini.php', '', 'ADM10', 'Admin'),
('ADM13', 'SK Pengajuan', 'admin/sk', 'icon-file-text2', '0', 'Admin'),
('ADM14', 'SK Naik Pangkat', 'admin/sknaik/index.php', '', 'ADM13', 'Admin'),
('ADM15', 'SK Pensiun', 'admin/skpensiun/index.php', '', 'ADM13', 'Admin'),
('ADM16', 'Data User', 'admin/user', 'icon-user', '0', 'Admin'),
('ADM17', 'Setting Menu', '#', 'icon-menu', '0', 'Admin'),
('ADM18', 'Menu Admin', 'admin/mnadmin', '', 'ADM17', 'Admin'),
('ADM19', 'Menu Pegawai', 'admin/mnuser', '', 'ADM17', 'Admin'),
('ADM20', 'Menu Kepala Dinas', 'admin/mnkepala', '', 'ADM17', 'Admin'),
('ADM21', 'Pesan Notifikasi', 'admin/pesan', 'icon-envelop', '0', 'Admin'),
('ADM22', 'Tanda Tangan Kepala Dinas', 'admin/ttd', 'icon-pencil', '0', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_k`
--

CREATE TABLE `menu_k` (
  `noId` varchar(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `isMainMenu` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_k`
--

INSERT INTO `menu_k` (`noId`, `menu`, `link`, `icon`, `isMainMenu`, `role`) VALUES
('KPL01', 'Dashboard', 'kepala/dashboard', 'icon-monitor', '0', 'Kepala'),
('KPL02', 'Pegawai', 'kepala/pegawai', 'icon-user-check', '0', 'Kepala'),
('KPL03', 'Kenaikan Pangkat', 'kepala/pengajuan', 'icon-download6', '0', 'Kepala'),
('KPL04', 'Pengajuan Pensiun', 'kepala/pensiun', 'icon-head', '0', 'Kepala'),
('KPL05', 'Pensiun', 'kepala/pensiun/pensiun.php', '', 'KPL04', 'Kepala'),
('KPL06', 'Pensiun Dini', 'kepala/pensiun/dini.php', '', 'KPL04', 'Kepala'),
('KPL07', 'SK Pengajuan', '#', 'icon-file-text', '0', 'Kepala'),
('KPL08', 'SK Naik Pangkat', 'kepala/sknaik', '', 'KPL07', 'Kepala'),
('KPL09', 'SK Pensiun', 'kepala/skpensiun', '', 'KPL07', 'Kepala'),
('KPL10', 'Tanda Tangan Kepala Dinas', 'kepala/ttd', 'icon-pencil', '0', 'Kepala');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_u`
--

CREATE TABLE `menu_u` (
  `noId` varchar(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `isMainMenu` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_u`
--

INSERT INTO `menu_u` (`noId`, `menu`, `link`, `icon`, `isMainMenu`, `role`) VALUES
('USR01', 'Dashboard', 'pegawai/dashboard', 'icon-air-play', '0', 'all'),
('USR02', 'Profil Pegawai', 'pegawai/profil', 'icon-user', '0', 'Pegawai'),
('USR03', 'Pengajuan Kenaikan Pangkat', 'pegawai/pengajuan', 'icon-area-graph', '0', 'Pegawai'),
('USR04', 'SK Kenaikan Pangkat', 'pegawai/sk', 'icon-file-text2', '0', 'Pegawai'),
('USR05', 'Pengajuan Pensiun', 'pegawai/pensiun', 'icon-profile', '0', 'Pegawai'),
('USR06', 'Pensiun', 'pegawai/pensiun/pensiun.php', '', 'USR05', 'Pegawai'),
('USR07', 'Pensiun Dini', 'pegawai/pensiun/dini.php', '', 'USR05', 'Pegawai'),
('USR08', 'SK Pensiun', 'pegawai/skpensiun', 'icon-file-text', '0', 'Pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skpen`
--

CREATE TABLE `skpen` (
  `idSk` int(20) NOT NULL,
  `idPen` varchar(50) NOT NULL,
  `tglTtd` date NOT NULL,
  `nmKep` varchar(200) NOT NULL,
  `tTd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skpen`
--

INSERT INTO `skpen` (`idSk`, `idPen`, `tglTtd`, `nmKep`, `tTd`) VALUES
(1, 'DINI2', '2024-08-05', 'Zainuddin, M.Z. S.Pd,. M.Pd', '04082024094558p.jpg'),
(2, 'DINI3', '2024-08-13', 'Rafif Najmi', '13082024220047p.jpg'),
(3, 'DINI2', '2024-10-29', 'Rafif Najmi', '04112024183706Kepala Dinas Pendidikan dana Kebudayaan HSS.png'),
(4, 'DINI4', '2024-11-04', 'Rafif Najmi', '04112024183732Kepala Dinas Pendidikan dana Kebudayaan HSS.png'),
(5, 'DINI6', '2024-11-04', 'Rafif Najmi', '04112024183751Kepala Dinas Pendidikan dana Kebudayaan HSS.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subpen`
--

CREATE TABLE `subpen` (
  `idSub` int(20) NOT NULL,
  `idPen` varchar(20) NOT NULL,
  `noSer` varchar(100) NOT NULL,
  `berKas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subpen`
--

INSERT INTO `subpen` (`idSub`, `idPen`, `noSer`, `berKas`) VALUES
(2, 'DINI2', '123/PGR-PS/DISDIK-KDG/V/2024', '6306050906970003_kartuAkun.pdf'),
(3, 'DINI3', '155/PGR-PS/DISDIK-KDG/V/2024', '6306050906970003_kartuAkun.pdf'),
(4, 'DINI4', '155/PGR-PS/DISDIK-KDG/V/2024', '3000.pdf'),
(5, 'DINI5', '155/PGR-PS/DISDIK-KDG/V/2024', '3000.pdf'),
(6, 'DINI6', '104/SK-PS/KDG/V/2024', 'Sertifikasi Contoh.pdf'),
(7, 'DINI7', '111/SK-PS/KDG/V/2024', 'Sertifikasi Contoh.pdf'),
(8, 'DINI10', '105/SK-PS/KDG/V/2024', 'Sertifikasi Contoh.pdf'),
(9, 'DINI11', '109/SK-PS/KDG/V/2024', 'Sertifikasi Contoh.pdf'),
(10, 'DINI12', '159/SK-PS/KDG/V/2024', 'Sertifikasi Contoh.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tgolongan`
--

CREATE TABLE `tgolongan` (
  `idGol` int(20) NOT NULL,
  `tKt` varchar(50) NOT NULL,
  `sBt` varchar(100) NOT NULL,
  `Gaji` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tgolongan`
--

INSERT INTO `tgolongan` (`idGol`, `tKt`, `sBt`, `Gaji`) VALUES
(6306111, 'Golongan I', 'Juru Muda', 1800000),
(6306112, 'Golongan I', 'Juru', 1300000),
(6306113, 'Golongan II', 'Pengatur Muda', 1800000),
(6306114, 'Golongan II', 'Pengatur Muda Tingkat 1', 1500000),
(6306115, 'Golongan II', 'Pengatur Tingkat 1', 1600000),
(6306116, 'Golongan III', 'Penata Muda', 2000000),
(6306117, 'Golongan III', 'Penata Muda Tingkat 1', 2100000),
(6306118, 'Golongan III', 'Penata ', 2200000),
(6306119, 'Golongan III', 'Penata Tingkat 1', 2300000),
(63061110, 'Golongan IV', 'Pembina', 3000000),
(63061111, 'Golongan IV', 'Pembina Utama', 5000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tjabatan`
--

CREATE TABLE `tjabatan` (
  `idJab` int(20) NOT NULL,
  `jaB` varchar(50) NOT NULL,
  `bAg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tjabatan`
--

INSERT INTO `tjabatan` (`idJab`, `jaB`, `bAg`) VALUES
(6306121, 'Kepala Dinas', 'Kepala Dinas Pendidikan Kab. HSS'),
(6306122, 'Sekretaris Dinas', 'Dinas Pendidikan Kab HSS'),
(6306123, 'KASUBAG', 'Keuangan dan BMD'),
(6306124, 'KASUBAG', 'Umum dan Kepegawaian'),
(6306126, 'KABID', 'Pembina SD'),
(6306127, 'KABID', 'Pembina SMP'),
(6306128, 'KASI ', 'Kelembagaan Dan Sarana Prasarana'),
(6306129, 'KASI', 'Peserta Didik & Pembangunan Karakter'),
(63061210, 'Staff', 'Kelembagaan Dan Sarana Prasarana'),
(63061211, 'Staff', 'Peserta Didik & Pembangunan Karakter');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tnaik`
--

CREATE TABLE `tnaik` (
  `idNaik` int(20) NOT NULL,
  `idPeng` varchar(50) NOT NULL,
  `idPeg` int(20) NOT NULL,
  `idGol` int(20) NOT NULL,
  `idJab` int(20) NOT NULL,
  `tglNaik` date NOT NULL,
  `noSk` varchar(150) NOT NULL,
  `nmTtd` varchar(50) NOT NULL,
  `tTd` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tnaik`
--

INSERT INTO `tnaik` (`idNaik`, `idPeng`, `idPeg`, `idGol`, `idJab`, `tglNaik`, `noSk`, `nmTtd`, `tTd`) VALUES
(2, 'NJK0001', 3154, 6306112, 6306121, '2024-01-30', '001/SK/KDG/I/2024', 'Mhammad Rafif Najmi', '04082024171054p.jpg'),
(3, 'NJK0001', 3154, 6306112, 6306121, '2024-11-04', '002/SK/KDG/XI/2024', '', ''),
(4, 'NJK0002', 3155, 6306115, 6306121, '2024-11-05', '003/SK/KDG/XI/2024', '', ''),
(5, 'NJK0008', 31511, 6306115, 63061210, '2024-11-06', '004/SK/KDG/XI/2024', '', ''),
(6, 'NJK0011', 3159, 6306115, 6306129, '2024-11-01', '005/SK/KDG/XI/2024', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpegawai`
--

CREATE TABLE `tpegawai` (
  `idPeg` int(20) NOT NULL,
  `nIp` varchar(50) NOT NULL,
  `nAma` varchar(200) NOT NULL,
  `tgLhr` date NOT NULL,
  `uMr` int(10) NOT NULL,
  `aLt` varchar(300) NOT NULL,
  `jK` varchar(30) NOT NULL,
  `penD` varchar(150) NOT NULL,
  `idGol` int(20) NOT NULL,
  `idJab` int(20) NOT NULL,
  `noPe` int(20) NOT NULL,
  `uSr` varchar(50) NOT NULL,
  `pAss` varchar(300) NOT NULL,
  `lVl` varchar(50) NOT NULL,
  `Foto` varchar(500) NOT NULL,
  `sTs` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpegawai`
--

INSERT INTO `tpegawai` (`idPeg`, `nIp`, `nAma`, `tgLhr`, `uMr`, `aLt`, `jK`, `penD`, `idGol`, `idJab`, `noPe`, `uSr`, `pAss`, `lVl`, `Foto`, `sTs`) VALUES
(3151, '0', 'Administrator', '0000-00-00', 0, '', '', '', 0, 0, 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '', ''),
(3152, '0', 'Rizky', '0000-00-00', 0, '', '', '', 0, 0, 0, 'iky', '08d653242950c0e063f5e5fd9cf23190', 'Pegawai', '', 'Lengkapi Data Diri'),
(3154, '6128761', 'ali', '2016-12-06', 53, 'kandangan', 'Laki-laki', 'Sarjana S1-Teknik', 6306112, 6306121, 87411442, 'ali', '86318e52f5ed4801abe1d13d509443de', 'Pegawai', '28082024203914snapedit_1702994982854.png', 'dilengkapi'),
(3155, '2147483647', 'Rafif Najmi', '1987-03-11', 0, 'Amawang Kiri Muka', 'Laki-laki', 'Sarjana S1-Menejemen', 6306115, 6306121, 877555265, 'rafif', 'b92b52df66da4409b241dfbc244cd054', 'KADIS', '28082024204057WhatsApp Image 2023-12-19 at 22.19.05.jpeg', 'Data Diri Lengkap'),
(3156, '726263736', 'Muhammad Maulidi', '1987-04-08', 0, 'Tibung Raya, Ciputat', 'Laki-laki', 'Sarjana S1-Pendidikan Komputer', 63061110, 6306127, 87625252, 'maulidi', '3bfdf7a160b43394e3aa6e03c65095b6', 'Pegawai', '02022024171705MUHAMMAD ADITYA RAHMAN - PAS FOTO.png', 'Data Diri Lengkap'),
(3157, '28286460916237256', 'Najmi Adam', '1989-07-12', 50, 'kandangan', 'Laki-laki', 'S-1 Pendidikan', 6306116, 6306127, 836363784, 'adam', '1d7c2923c1684726dc23d2901c4d8157', 'Pegawai', '14082024180455snapedit_1702995065939.png', 'Lengkap'),
(3158, '0', 'Maulid Kahidir', '0000-00-00', 0, '', '', '', 0, 0, 0, 'maulid', 'c2d1ddd68302d13d09f7b0de9f38c5fa', 'Pegawai', '', 'Lengkapi Data Diri'),
(3159, '73636115262351723', 'Muhammad Asyari', '1989-09-12', 57, 'kandangan', 'Laki-laki', 'S-1 Manajemen', 6306115, 6306129, 2147483647, 'ari', 'fc292bd7df071858c2d0f955545673c1', 'Pegawai', '14082024181424WhatsApp Image 2023-12-19 at 22.19.05.jpeg', 'Lengkap'),
(31510, '0', 'Akhmad Firdaus', '0000-00-00', 0, '', '', '', 0, 0, 0, 'daus', '715d7c9ff041047aeb25c535e7e2f661', 'Pegawai', '', 'Lengkapi Data Diri'),
(31511, '0', 'Muhammad Ariyandi', '1979-07-24', 50, 'kandangan', 'Laki-laki', 'S-1 Pendidikan', 6306115, 63061210, 0, 'yandi', '3c7a4227ed11e0a3f8352afbccd90ce2', 'Pegawai', '23072024212355', 'Lenkap'),
(31512, '73635337342423424234', 'Hafani Ilmi', '1996-09-10', 40, 'kandangan', 'Laki-laki', 'S-1 Pendidikan', 6306113, 63061210, 8373676, 'fani', 'ee61d621f12489791ce28b31409daee4', 'Pegawai', '14082024214549snapedit_1702994913294.png', 'Lengkap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpendukung`
--

CREATE TABLE `tpendukung` (
  `idDukung` int(20) NOT NULL,
  `idPeng` varchar(20) NOT NULL,
  `nmSer` varchar(100) NOT NULL,
  `berKas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpendukung`
--

INSERT INTO `tpendukung` (`idDukung`, `idPeng`, `nmSer`, `berKas`) VALUES
(1, 'NJK0001', 'Webinar Teknik Pengisian Dapodik', 'jazah.pdf'),
(2, 'NJK0002', 'Ktp Pegawai', 'ktp apip.pdf'),
(3, 'NJK0003', 'Ktp Pegawai', 'ktp apip.pdf'),
(4, 'NJK0004', 'Ktp Pegawai', 'MUHAMMADLUTFILLAH KTP.pdf'),
(5, 'NJK0005', 'Sertifikasi', 'Dokumen 5.pdf'),
(6, 'NJK0006', 'Sertifikasi', '3000.pdf'),
(7, 'NJK0007', 'sertifikaasi', 'Sertifikasi Contoh.pdf'),
(8, 'NJK0008', 'sertifikasi', 'Sertifikasi Contoh.pdf'),
(9, 'NJK0009', 'sertifikasi', 'Sertifikasi Contoh.pdf'),
(10, 'NJK0010', 'sertifikasi', 'Sertifikasi Contoh.pdf'),
(11, 'NJK0011', 'sertifikasi', 'Sertifikasi Contoh.pdf'),
(12, 'NJK0012', 'sertifikasi', 'Sertifikasi Contoh.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpengajuan`
--

CREATE TABLE `tpengajuan` (
  `idPeng` varchar(50) NOT NULL,
  `idPeg` int(20) NOT NULL,
  `outGol` int(20) NOT NULL,
  `outJab` int(20) NOT NULL,
  `inGol` int(20) NOT NULL,
  `inJab` int(20) NOT NULL,
  `tglP` date NOT NULL,
  `cTt` varchar(200) NOT NULL,
  `sT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpengajuan`
--

INSERT INTO `tpengajuan` (`idPeng`, `idPeg`, `outGol`, `outJab`, `inGol`, `inJab`, `tglP`, `cTt`, `sT`) VALUES
('NJK0001', 3154, 6306111, 6306121, 6306112, 6306121, '2024-01-29', 'Telah Dilakukan Perbaikan', 'Diterima'),
('NJK0002', 3155, 6306116, 63061210, 6306115, 6306128, '2024-01-29', '', 'Diterima'),
('NJK0003', 3155, 6306116, 63061210, 6306117, 63061210, '2024-01-30', 'Kesalahan Pengajuan', 'Ditolak'),
('NJK0004', 3156, 63061110, 6306127, 63061110, 6306124, '2024-01-31', '', 'Ditolak'),
('NJK0005', 3157, 6306116, 6306127, 6306116, 6306128, '2024-08-06', '', 'Diajukan'),
('NJK0006', 3157, 6306116, 6306127, 6306118, 6306124, '2024-08-07', 'tidak sesuai', 'Ditolak'),
('NJK0007', 31511, 6306112, 63061210, 6306113, 6306123, '2024-10-20', '', 'Ditolak'),
('NJK0008', 31511, 6306112, 63061210, 6306115, 6306127, '2024-10-08', '', 'Diterima'),
('NJK0009', 31511, 6306112, 63061210, 6306113, 6306126, '2024-10-08', '', 'Ditolak'),
('NJK0010', 3159, 6306115, 6306129, 6306115, 6306126, '2024-10-07', '', 'Ditolak'),
('NJK0011', 3159, 6306115, 6306129, 6306115, 6306127, '2024-10-08', '', 'Diterima'),
('NJK0012', 3159, 6306115, 6306129, 6306115, 6306127, '2024-10-09', '', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpensiun`
--

CREATE TABLE `tpensiun` (
  `idPen` varchar(50) NOT NULL,
  `idPeg` int(20) NOT NULL,
  `noSur` varchar(50) NOT NULL,
  `tglPen` date NOT NULL,
  `tglSur` date NOT NULL,
  `aLmt` varchar(150) NOT NULL,
  `noPgr` varchar(100) NOT NULL,
  `noRek` varchar(100) NOT NULL,
  `jNs` varchar(50) NOT NULL,
  `kEt` varchar(150) NOT NULL,
  `hSl` varchar(30) NOT NULL,
  `tTd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpensiun`
--

INSERT INTO `tpensiun` (`idPen`, `idPeg`, `noSur`, `tglPen`, `tglSur`, `aLmt`, `noPgr`, `noRek`, `jNs`, `kEt`, `hSl`, `tTd`) VALUES
('DINI10', 3159, '016/SK-DN/KDG/X/2024', '2024-10-03', '2024-10-01', 'Kandangan', '113/PGR-PS/DISDIK-KDG/VI/2024', '139/SK-PS/KDG/V/2024', 'Pensiun Dini', 'diajukan', '', ''),
('DINI11', 3159, '017/SK-DN/KDG/X/2024', '2024-10-07', '2024-10-02', 'Kandangan', '116/PGR-PS/DISDIK-KDG/VI/2024', '200/SK-PS/KDG/V/2024', 'Pensiun Dini', 'diajukan', '', ''),
('DINI12', 3159, '019/SK-DN/KDG/X/2024', '2024-10-11', '2024-10-09', 'Kandangan', '159/PGR-PS/DISDIK-KDG/VI/2024', '109/SK-PS/KDG/V/2024', 'Pensiun Dini', 'diajukan', '', ''),
('DINI2', 3155, '002/SK-DN/KDG/VIII/2024', '2024-08-06', '2024-08-03', '', '123/PGR-PS/DISDIK-KDG/V/2024', '112/SK-PS/KDG/V/2024', 'Pensiun Dini', 'Diajukan', '', ''),
('DINI3', 3154, '003/SK-DN/KDG/VIII/2024', '2024-08-12', '2024-08-05', 'Tibung Raya, Kandangan, Hulu Sungai Selatan, Kalimantan Selatan', '153/PGR-PS/DISDIK-KDG/VI/2024', '112/SK-PS/KDG/V/2024', 'Pensiun Dini', 'Diajukan', '', ''),
('DINI4', 3157, '006/SK-DN/KDG/VIII/2024', '2024-08-20', '2024-08-13', 'Tibung Raya, Kandangan, Hulu Sungai Selatan, Kalimantan Selatan', '123/PGR-PS/DISDIK-KDG/V/2024', '134/SK-PS/KDG/V/2024', 'Pensiun Dini', 'Diajukan', '', ''),
('DINI5', 3157, '007/SK-DN/KDG/VIII/2024', '2024-08-21', '2024-08-20', 'Tibung Raya, Kandangan, Hulu Sungai Selatan, Kalimantan Selatan', '153/PGR-PS/DISDIK-KDG/VI/2024', '134/SK-PS/KDG/V/2024', 'Pensiun Dini', 'Diajukan', '', ''),
('DINI6', 31511, '010/SK-DN/KDG/X/2024', '2024-10-10', '2024-10-07', 'Kandangan', '112/PGR-PS/DISDIK-KDG/VI/2024', '130/SK-PS/KDG/V/2024', 'Pensiun Dini', 'diajukan', '', ''),
('DINI7', 31511, '011/SK-DN/KDG/X/2024', '2024-10-16', '2024-10-09', 'Kandangan', '159/PGR-PS/DISDIK-KDG/VI/2024', '109/SK-PS/KDG/V/2024', 'Pensiun Dini', 'diajukan', '', ''),
('PEN1', 3156, '001/SK-P/KDG/VIII/2024', '2024-08-06', '2024-08-03', 'Amawang Kiri Muka, Kandangan, Hulu Sungai Selatan, Kalimantan Selatan', '', '', 'Pensiun', 'Telah Mencapai Masa Pensiun', '', ''),
('PEN12', 3159, '018/SK-P/KDG/X/2024', '2024-10-17', '2024-10-15', 'Kandangan', '', '', 'Pensiun', 'Telah Mencapai batas Usia Minimum Pensiun', '', ''),
('PEN2', 3154, '004/SK-P/KDG/VIII/2024', '2024-08-13', '2024-08-06', 'Kandangan Utara, Kandangan, Hulu Sungai Selatan, Kalimantan Selatan', '', '', 'Pensiun', 'Telah Mencapai Masa Pensiun', '', ''),
('PEN3', 3154, '005/SK-P/KDG/VIII/2024', '2024-08-20', '2024-08-08', 'Bangkau, Kandangan, Hulu Sungai Selatan, Kalimantan Selatan', '', '', 'Pensiun', 'Telah Mencapai Masa Pensiun', '', ''),
('PEN4', 31511, '008/SK-P/KDG/X/2024', '2024-10-17', '2024-10-14', 'Kandangan', '', '', 'Pensiun', 'Telah Mencapai batas Usia Minim Pensiun', '', ''),
('PEN5', 31511, '009/SK-P/KDG/X/2024', '2024-10-14', '2024-10-07', 'Kandangan', '', '', 'Pensiun', 'Telah Mencapai batas Usia Minimum Pensiun', '', ''),
('PEN6', 3159, '012/SK-P/KDG/X/2024', '2024-10-10', '2024-10-08', 'Kandangan', '', '', 'Pensiun', 'Telah Mencapai batas Usia Minimum Pensiun', '', ''),
('PEN7', 3159, '013/SK-P/KDG/X/2024', '2024-10-11', '2024-10-07', 'Kandangan', '', '', 'Pensiun', 'Telah Mencapai batas Usia Minimum Pensiun', '', ''),
('PEN8', 3159, '014/SK-P/KDG/X/2024', '2024-10-15', '2024-10-15', 'Kandangan', '', '', 'Pensiun', 'Telah Mencapai batas Usia Minimum Pensiun', '', ''),
('PEN9', 3159, '015/SK-P/KDG/X/2024', '2024-10-16', '2024-10-14', 'Kandangan', '', '', 'Pensiun', 'Telah Mencapai batas Usia Minimum Pensiun', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpesan`
--

CREATE TABLE `tpesan` (
  `idPsn` int(50) NOT NULL,
  `idPeg` varchar(50) NOT NULL,
  `iSi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpesan`
--

INSERT INTO `tpesan` (`idPsn`, `idPeg`, `iSi`) VALUES
(1, '31511', 'Segera Lakukan Pengajuan Pensiun Sebelum Mencapai Patas Usia Pensiun'),
(2, '3152', 'Berkas Pengajuan Kurang Lengkap'),
(3, '3157', 'Segera Lengkapi Data Diri'),
(4, '3158', 'Segera Lengkapi Data Diri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trekom`
--

CREATE TABLE `trekom` (
  `idRek` int(20) NOT NULL,
  `idPen` varchar(50) NOT NULL,
  `noSur` varchar(50) NOT NULL,
  `noPeng` varchar(50) NOT NULL,
  `bRks` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ttd`
--

CREATE TABLE `ttd` (
  `id` int(20) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttd` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ttd`
--

INSERT INTO `ttd` (`id`, `nip`, `nama`, `ttd`) VALUES
(1, '2147483647', 'Rafif Najmi', '28082024201321qrcode.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu_a`
--
ALTER TABLE `menu_a`
  ADD PRIMARY KEY (`noId`);

--
-- Indeks untuk tabel `menu_k`
--
ALTER TABLE `menu_k`
  ADD PRIMARY KEY (`noId`);

--
-- Indeks untuk tabel `menu_u`
--
ALTER TABLE `menu_u`
  ADD PRIMARY KEY (`noId`);

--
-- Indeks untuk tabel `skpen`
--
ALTER TABLE `skpen`
  ADD PRIMARY KEY (`idSk`);

--
-- Indeks untuk tabel `subpen`
--
ALTER TABLE `subpen`
  ADD PRIMARY KEY (`idSub`);

--
-- Indeks untuk tabel `tgolongan`
--
ALTER TABLE `tgolongan`
  ADD PRIMARY KEY (`idGol`);

--
-- Indeks untuk tabel `tjabatan`
--
ALTER TABLE `tjabatan`
  ADD PRIMARY KEY (`idJab`);

--
-- Indeks untuk tabel `tnaik`
--
ALTER TABLE `tnaik`
  ADD PRIMARY KEY (`idNaik`);

--
-- Indeks untuk tabel `tpegawai`
--
ALTER TABLE `tpegawai`
  ADD PRIMARY KEY (`idPeg`);

--
-- Indeks untuk tabel `tpendukung`
--
ALTER TABLE `tpendukung`
  ADD PRIMARY KEY (`idDukung`);

--
-- Indeks untuk tabel `tpengajuan`
--
ALTER TABLE `tpengajuan`
  ADD PRIMARY KEY (`idPeng`);

--
-- Indeks untuk tabel `tpensiun`
--
ALTER TABLE `tpensiun`
  ADD PRIMARY KEY (`idPen`);

--
-- Indeks untuk tabel `tpesan`
--
ALTER TABLE `tpesan`
  ADD PRIMARY KEY (`idPsn`);

--
-- Indeks untuk tabel `trekom`
--
ALTER TABLE `trekom`
  ADD PRIMARY KEY (`idRek`);

--
-- Indeks untuk tabel `ttd`
--
ALTER TABLE `ttd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `skpen`
--
ALTER TABLE `skpen`
  MODIFY `idSk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `subpen`
--
ALTER TABLE `subpen`
  MODIFY `idSub` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tnaik`
--
ALTER TABLE `tnaik`
  MODIFY `idNaik` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tpendukung`
--
ALTER TABLE `tpendukung`
  MODIFY `idDukung` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tpesan`
--
ALTER TABLE `tpesan`
  MODIFY `idPsn` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `trekom`
--
ALTER TABLE `trekom`
  MODIFY `idRek` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ttd`
--
ALTER TABLE `ttd`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
