-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2020 pada 14.02
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_layanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(15) NOT NULL,
  `nama_lengkap` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Bapak/Ibu Petugas Balai Desa', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akta`
--

CREATE TABLE `tbl_akta` (
  `id_akta` int(6) NOT NULL,
  `id_data` int(10) NOT NULL,
  `keperluan` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') NOT NULL DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_akta`
--

INSERT INTO `tbl_akta` (`id_akta`, `id_data`, `keperluan`, `keterangan`, `status`) VALUES
(1, 0, '888', 'Manajer', 'tersedia'),
(2, 3, 'sd', 'Semakin kecil semakin bagus', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_belum_nikah`
--

CREATE TABLE `tbl_belum_nikah` (
  `id_belum_nikah` int(12) NOT NULL,
  `id_kk` int(20) NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') COLLATE latin1_general_ci NOT NULL DEFAULT 'tersedia'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_belum_nikah`
--

INSERT INTO `tbl_belum_nikah` (`id_belum_nikah`, `id_kk`, `status`) VALUES
(14, 1, 'dihapus'),
(15, 1, 'dihapus'),
(16, 15, 'tersedia'),
(17, 6, 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id_data` int(26) NOT NULL,
  `nik` varchar(26) NOT NULL,
  `nkk` varchar(26) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(3) NOT NULL,
  `tmp_lahir` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_rt` int(3) NOT NULL,
  `no_rw` int(3) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `shdk` varchar(20) NOT NULL DEFAULT 'kosong',
  `status_kawin` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(255) DEFAULT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `akta_lahir` varchar(10) NOT NULL,
  `no_akta_lahir` int(40) NOT NULL,
  `akta_kawin` varchar(10) NOT NULL,
  `no_akta_kawin` int(40) NOT NULL,
  `akta_cerai` varchar(10) NOT NULL,
  `no_akta_cerai` int(40) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `status` enum('dihapus','tersedia','pindah') NOT NULL DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_data`
--

INSERT INTO `tbl_data` (`id_data`, `nik`, `nkk`, `nama`, `jenis_kel`, `tgl_lahir`, `umur`, `tmp_lahir`, `alamat`, `no_rt`, `no_rw`, `kelurahan`, `shdk`, `status_kawin`, `pendidikan`, `kewarganegaraan`, `agama`, `pekerjaan`, `gol_darah`, `akta_lahir`, `no_akta_lahir`, `akta_kawin`, `no_akta_kawin`, `akta_cerai`, `no_akta_cerai`, `nama_ayah`, `nama_ibu`, `status`) VALUES
(1, '12345678', '8907988', 'Alucard', 'Laki-laki', '2020-01-01', 18, 'Ajibarang', 'kosong', 5, 8, 'kosong', 'jhkj', 'Sudah-Kawin', 'SD', 'WNI', 'kristen', 'Karyawan Perusahaan', 'AB', 'kosong', 0, 'kosong', 0, 'kosong', 0, 'ayahhh', 'buib', 'dihapus'),
(3, '12345678', '8907988', 'Alucard', 'Laki-laki', '2020-01-01', 18, 'Ajibarang', 'kosong', 5, 8, 'kosong', '', 'Sudah-Kawin', 'SD', 'WNI', 'kristen', 'Karyawan Perusahaan', 'AB', 'kosong', 0, 'kosong', 0, 'kosong', 0, 'ayah', 'buib', 'tersedia'),
(4, '2147483647', '2147483647', 'Trian Damai', 'LAKI-LAKI', '1998-09-16', 21, 'Purbalingga', 'kosong', 4, 4, 'kosong', 'kosong', 'BELUM-KAWIN', 'SLTA', 'WNI', 'ISLAM', 'PELAJAR', 'A', 'kosong', 0, 'kosong', 0, 'kosong', 0, 'ayah', 'buib', 'tersedia'),
(5, '2147483647', '2147483647', 'Trian', 'LAKI-LAKI', '1998-09-16', 21, 'Purbalingga', 'kosong', 4, 3, 'kosong', 'kosong', 'KAWIN', 'SARJANA', 'WNI', 'ISLAM', 'KARYAWAN', 'O', 'kosong', 0, 'kosong', 0, 'kosong', 0, 'ayah', 'buib', 'tersedia'),
(6, '3302154304020006', '3302154304020007', 'Trian', 'LAKI-LAKI', '1998-09-16', 21, 'Purbalingga', 'Lumbir Rt 4 Rw 5', 4, 5, 'kosong', 'kosong', 'KAWIN', 'SARJANA', 'WNI', 'ISLAM', 'WIRASWASTA', 'AB', 'kosong', 0, 'kosong', 0, 'kosong', 0, 'ayah', 'buib', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_domisili`
--

CREATE TABLE `tbl_domisili` (
  `id_domisili` int(6) NOT NULL,
  `id_data` int(16) NOT NULL,
  `alamat_domisili` varchar(255) NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') NOT NULL DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_domisili`
--

INSERT INTO `tbl_domisili` (`id_domisili`, `id_data`, `alamat_domisili`, `status`) VALUES
(1, 3, 'fgdf', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hajatan`
--

CREATE TABLE `tbl_hajatan` (
  `id_hajatan` int(12) NOT NULL,
  `id_data` int(10) NOT NULL,
  `keperluan` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `masa_berlaku` int(11) NOT NULL DEFAULT 1,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') COLLATE latin1_general_ci NOT NULL DEFAULT 'tersedia'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_hajatan`
--

INSERT INTO `tbl_hajatan` (`id_hajatan`, `id_data`, `keperluan`, `keterangan`, `masa_berlaku`, `status`) VALUES
(470, 1, 'dfd', 'ds', 1, 'dihapus'),
(471, 1, 'sd', 'ds', 1, 'tersedia'),
(472, 1, 'sa', 'sa', 1, 'tersedia'),
(473, 3, 'afgdf', 'Semakin kecil semakin bagus', 3, 'dihapus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hiburan`
--

CREATE TABLE `tbl_hiburan` (
  `id_hiburan` int(12) NOT NULL,
  `id_data` int(10) NOT NULL,
  `acara` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `hiburan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tgl_hiburan` date NOT NULL,
  `tmp_acara` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') COLLATE latin1_general_ci NOT NULL DEFAULT 'tersedia'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_hiburan`
--

INSERT INTO `tbl_hiburan` (`id_hiburan`, `id_data`, `acara`, `hiburan`, `tgl_hiburan`, `tmp_acara`, `status`) VALUES
(14, 1, 'ds', 'fg', '2020-06-08', 'bvbv', 'tersedia'),
(15, 3, 'ds', 'ds', '0003-03-04', 'dsd', 'dihapus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kehilangan`
--

CREATE TABLE `tbl_kehilangan` (
  `id_kehilangan` int(6) NOT NULL,
  `id_data` int(16) NOT NULL,
  `keperluan` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') NOT NULL DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kehilangan`
--

INSERT INTO `tbl_kehilangan` (`id_kehilangan`, `id_data`, `keperluan`, `keterangan`, `status`) VALUES
(1, 3, 'sd', 'dfd', 'tersedia'),
(2, 4, 'hds', 'e', 'dihapus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kematian`
--

CREATE TABLE `tbl_kematian` (
  `id_kematian` int(6) NOT NULL,
  `id_data` int(16) NOT NULL,
  `tgl_mati` date NOT NULL,
  `tmp_mati` varchar(30) NOT NULL,
  `sebab_mati` varchar(40) NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') NOT NULL DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kematian`
--

INSERT INTO `tbl_kematian` (`id_kematian`, `id_data`, `tgl_mati`, `tmp_mati`, `sebab_mati`, `status`) VALUES
(1, 1, '2020-06-18', 'gh', 'hgh', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kk`
--

CREATE TABLE `tbl_kk` (
  `id_kk` int(6) NOT NULL,
  `nokk` varchar(255) NOT NULL,
  `id_data` int(10) NOT NULL,
  `status_pengajuan` varchar(15) NOT NULL,
  `keperluan` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') NOT NULL DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kk`
--

INSERT INTO `tbl_kk` (`id_kk`, `nokk`, `id_data`, `status_pengajuan`, `keperluan`, `keterangan`, `status`) VALUES
(1, '4', 3, 'Permohonan', 'sd', 'Semakin kecil semakin bagus', 'tersedia'),
(2, '', 3, 'Permohonan', 'df', 'dsd', 'dihapus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nikah`
--

CREATE TABLE `tbl_nikah` (
  `id_nikah` int(6) NOT NULL,
  `id_data` int(6) NOT NULL,
  `bin_binti` varchar(40) NOT NULL,
  `status` enum('tersedia','dihapus','selesai','') NOT NULL DEFAULT 'tersedia',
  `pasangan_terdahulu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nikah`
--

INSERT INTO `tbl_nikah` (`id_nikah`, `id_data`, `bin_binti`, `status`, `pasangan_terdahulu`) VALUES
(1, 1, 'ass', '', 'asa'),
(2, 1, 'af', '', 'dsf'),
(3, 1, 'sa', '', 'dsf'),
(4, 3, 'dsf', 'tersedia', 'sa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `id_pengunjung` int(12) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `agama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `no_telpon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') COLLATE latin1_general_ci NOT NULL DEFAULT 'tersedia'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`id_pengunjung`, `username`, `password`, `nama_lengkap`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `no_telpon`, `status`) VALUES
(5, 'nasri', 'nasri', 'nasri', '2017-11-06', 'Laki-laki', 'lubeg', 'Islam', '0556746', 'tersedia'),
(1, 'sopi', 'sopi', 'sopi sapriadi', '2017-08-07', 'Laki-laki', 'padang', 'Islam', '0987654321', 'tersedia'),
(6, 'anwar', '12345', 'Anwar', '2018-05-28', 'Laki-laki', 'Padang', 'Islam', '082170214455', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pindah`
--

CREATE TABLE `tbl_pindah` (
  `id_pindah` int(6) NOT NULL,
  `id_data` int(16) NOT NULL,
  `nama_kepkel` varchar(30) NOT NULL,
  `alamat_asal` varchar(40) NOT NULL,
  `alamat_tuju` varchar(40) NOT NULL,
  `jumlah_anggota` varchar(30) NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') NOT NULL DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pindah`
--

INSERT INTO `tbl_pindah` (`id_pindah`, `id_data`, `nama_kepkel`, `alamat_asal`, `alamat_tuju`, `jumlah_anggota`, `status`) VALUES
(1, 3, 'dfd', 'ftr', 'gfg', '5', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_skck`
--

CREATE TABLE `tbl_skck` (
  `id_skck` int(12) NOT NULL,
  `id_kk` int(20) NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') COLLATE latin1_general_ci NOT NULL DEFAULT 'tersedia'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_skck`
--

INSERT INTO `tbl_skck` (`id_skck`, `id_kk`, `status`) VALUES
(271, 1, 'tersedia'),
(272, 1, 'dihapus'),
(273, 1, 'dihapus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sktm`
--

CREATE TABLE `tbl_sktm` (
  `id_sktm` int(12) NOT NULL,
  `id_data` int(16) NOT NULL,
  `keperluan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `keterangan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') COLLATE latin1_general_ci NOT NULL DEFAULT 'tersedia'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_sktm`
--

INSERT INTO `tbl_sktm` (`id_sktm`, `id_data`, `keperluan`, `keterangan`, `status`) VALUES
(8, 1, 'Mengajukan surat keterangan tidak mampu', 'Bahwa yang bersangkutan benar benar tidak mampu', 'tersedia'),
(9, 3, 'fd', 'fdf', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sktm_sekolah`
--

CREATE TABLE `tbl_sktm_sekolah` (
  `id_sktm_sekolah` int(12) NOT NULL,
  `nis` int(20) NOT NULL,
  `id_data` int(15) NOT NULL,
  `nama_sekolah` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `alamat_sekolah` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `alamat_ortu` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `pekerjaan_ortu` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `penghasilan_ortu` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `jumlah_tanggung` int(10) NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') COLLATE latin1_general_ci NOT NULL DEFAULT 'tersedia'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tbl_sktm_sekolah`
--

INSERT INTO `tbl_sktm_sekolah` (`id_sktm_sekolah`, `nis`, `id_data`, `nama_sekolah`, `alamat_sekolah`, `alamat_ortu`, `pekerjaan_ortu`, `penghasilan_ortu`, `jumlah_tanggung`, `status`) VALUES
(10, 6578, 3, '', 'dfdf', 'dfd', 'fd', '55555', 4, 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_usaha`
--

CREATE TABLE `tbl_usaha` (
  `id_usaha` int(6) NOT NULL,
  `id_data` int(10) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `jenis_usaha` varchar(30) NOT NULL,
  `status` enum('tersedia','selesai','dihapus','batal','kadaluarsa') NOT NULL DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_usaha`
--

INSERT INTO `tbl_usaha` (`id_usaha`, `id_data`, `alamat_usaha`, `jenis_usaha`, `status`) VALUES
(1, 3, 'dfsd', 'df', 'tersedia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_akta`
--
ALTER TABLE `tbl_akta`
  ADD PRIMARY KEY (`id_akta`);

--
-- Indeks untuk tabel `tbl_belum_nikah`
--
ALTER TABLE `tbl_belum_nikah`
  ADD PRIMARY KEY (`id_belum_nikah`);

--
-- Indeks untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `tbl_domisili`
--
ALTER TABLE `tbl_domisili`
  ADD PRIMARY KEY (`id_domisili`);

--
-- Indeks untuk tabel `tbl_hajatan`
--
ALTER TABLE `tbl_hajatan`
  ADD PRIMARY KEY (`id_hajatan`);

--
-- Indeks untuk tabel `tbl_hiburan`
--
ALTER TABLE `tbl_hiburan`
  ADD PRIMARY KEY (`id_hiburan`);

--
-- Indeks untuk tabel `tbl_kehilangan`
--
ALTER TABLE `tbl_kehilangan`
  ADD PRIMARY KEY (`id_kehilangan`);

--
-- Indeks untuk tabel `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indeks untuk tabel `tbl_kk`
--
ALTER TABLE `tbl_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indeks untuk tabel `tbl_nikah`
--
ALTER TABLE `tbl_nikah`
  ADD PRIMARY KEY (`id_nikah`);

--
-- Indeks untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indeks untuk tabel `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
  ADD PRIMARY KEY (`id_pindah`);

--
-- Indeks untuk tabel `tbl_skck`
--
ALTER TABLE `tbl_skck`
  ADD PRIMARY KEY (`id_skck`);

--
-- Indeks untuk tabel `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  ADD PRIMARY KEY (`id_sktm`);

--
-- Indeks untuk tabel `tbl_sktm_sekolah`
--
ALTER TABLE `tbl_sktm_sekolah`
  ADD PRIMARY KEY (`id_sktm_sekolah`);

--
-- Indeks untuk tabel `tbl_usaha`
--
ALTER TABLE `tbl_usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_akta`
--
ALTER TABLE `tbl_akta`
  MODIFY `id_akta` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_belum_nikah`
--
ALTER TABLE `tbl_belum_nikah`
  MODIFY `id_belum_nikah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id_data` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_domisili`
--
ALTER TABLE `tbl_domisili`
  MODIFY `id_domisili` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_hajatan`
--
ALTER TABLE `tbl_hajatan`
  MODIFY `id_hajatan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=474;

--
-- AUTO_INCREMENT untuk tabel `tbl_hiburan`
--
ALTER TABLE `tbl_hiburan`
  MODIFY `id_hiburan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_kehilangan`
--
ALTER TABLE `tbl_kehilangan`
  MODIFY `id_kehilangan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  MODIFY `id_kematian` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_kk`
--
ALTER TABLE `tbl_kk`
  MODIFY `id_kk` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_nikah`
--
ALTER TABLE `tbl_nikah`
  MODIFY `id_nikah` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `id_pengunjung` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
  MODIFY `id_pindah` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_skck`
--
ALTER TABLE `tbl_skck`
  MODIFY `id_skck` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT untuk tabel `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  MODIFY `id_sktm` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_sktm_sekolah`
--
ALTER TABLE `tbl_sktm_sekolah`
  MODIFY `id_sktm_sekolah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_usaha`
--
ALTER TABLE `tbl_usaha`
  MODIFY `id_usaha` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
