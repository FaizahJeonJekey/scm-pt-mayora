-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 16.30
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahanbaku`
--

CREATE TABLE `bahanbaku` (
  `idbahan` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bahanbaku`
--

INSERT INTO `bahanbaku` (`idbahan`, `nama`, `jumlah`, `harga`) VALUES
('IBB01', 'Gandum', '11 Kg', 'Rp. 350.000'),
('IBB02', 'Susu', '2 Liter', 'Rp. 85.000'),
('IBB03', 'Tepung', '5 Kg', 'Rp. 65.000'),
('IBB04', 'Coklat', '8 Kg', 'Rp. 160.000'),
('IBB05', 'Gula', '1 Ton', 'Rp. 1.500.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idbarang` varchar(5) NOT NULL,
  `idkategori` varchar(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idbarang`, `idkategori`, `nama`, `harga`) VALUES
('B1001', 'KB1', 'Sari Gandum', 'Rp. 15.000'),
('B1002', 'KB2', 'Malkist', 'Rp. 10.000'),
('B1003', 'KB3', 'Chocolatos', 'Rp. 12.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya`
--

CREATE TABLE `biaya` (
  `idbiaya` varchar(3) NOT NULL,
  `idbahan` varchar(5) NOT NULL,
  `idtenaga` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `biaya`
--

INSERT INTO `biaya` (`idbiaya`, `idbahan`, `idtenaga`) VALUES
('BA1', 'IBB01', 'ITK01'),
('BA2', 'IBB02', 'ITK02'),
('BA3', 'IBB03', 'ITK03'),
('BA4', 'IBB04', 'ITK04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id`, `nama`, `lokasi`) VALUES
('IG001', 'PT Mayora Jakarta', 'Jakarta'),
('IG002', 'PT Mayora Bandung', 'Bandung'),
('IG003', 'PT Mayora Malang', 'Malang'),
('IG004', 'PT Mayora Bogor', 'Bogor'),
('IG005', 'PT Mayora Surabaya', 'Surabaya'),
('IG007', 'PY Mayora Pekanbaru', 'Pekanbaru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`user`, `email`, `password`) VALUES
(0, 'nf00622@gmail.com', '12345'),
(1, 'faizah@gmail.com', '23456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `outlet`
--

CREATE TABLE `outlet` (
  `idoutlet` varchar(3) NOT NULL,
  `idpegawai` varchar(5) NOT NULL,
  `idbarang` varchar(5) NOT NULL,
  `lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `outlet`
--

INSERT INTO `outlet` (`idoutlet`, `idpegawai`, `idbarang`, `lokasi`) VALUES
('IO1', 'IP001', 'B1001', 'Jawa Timur'),
('IO2', 'IP002', 'B1002', 'Jawa Tengah'),
('IO3', 'IP003', 'B1003', 'Bali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `idpegawai` varchar(5) NOT NULL,
  `namapegawai` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `telp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`idpegawai`, `namapegawai`, `alamat`, `telp`) VALUES
('IP001', 'Yoongi', 'Surabaya', '0891234562'),
('IP002', 'Jekey', 'Malang', '0891234563'),
('IP003', 'Suga', 'Jabodetabek', '0891234564'),
('IP004', 'Jungkook', 'Blitar', '0891234565');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `idproduksi` varchar(3) NOT NULL,
  `idbarang` varchar(5) NOT NULL,
  `idbiaya` varchar(3) NOT NULL,
  `jumlahproduksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`idproduksi`, `idbarang`, `idbiaya`, `jumlahproduksi`) VALUES
('PR1', 'B1001', 'BA1', '17.000'),
('PR2', 'B1002', 'BA2', '10.000'),
('PR3', 'B1003', 'BA3', '14.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stokb`
--

CREATE TABLE `stokb` (
  `idstokbarang` varchar(3) NOT NULL,
  `idbarang` varchar(5) NOT NULL,
  `jumlah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `stokb`
--

INSERT INTO `stokb` (`idstokbarang`, `idbarang`, `jumlah`) VALUES
('SB1', 'B1001', '10.000'),
('SB2', 'B1002', '7.000'),
('SB3', 'B1003', '7.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stokp`
--

CREATE TABLE `stokp` (
  `idstok` varchar(3) NOT NULL,
  `idproduk` varchar(3) NOT NULL,
  `id` varchar(5) NOT NULL,
  `jumlah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `stokp`
--

INSERT INTO `stokp` (`idstok`, `idproduk`, `id`, `jumlah`) VALUES
('SP1', 'PR1', 'IG001', '17.000'),
('SP2', 'PR2', 'IG002', '10.000'),
('SP3', 'PR3', 'IG003', '14.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenagakerja`
--

CREATE TABLE `tenagakerja` (
  `idtenaga` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tenagakerja`
--

INSERT INTO `tenagakerja` (`idtenaga`, `nama`, `alamat`) VALUES
('ITK01', 'Jaehyun', 'Randegan'),
('ITK02', 'Mingyu', 'Sudirman'),
('ITK03', 'Lucas', 'Trowulan'),
('ITK04', 'Sobin', 'Bangil');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahanbaku`
--
ALTER TABLE `bahanbaku`
  ADD PRIMARY KEY (`idbahan`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`idbiaya`);

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`idoutlet`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idpegawai`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`idproduksi`);

--
-- Indeks untuk tabel `stokb`
--
ALTER TABLE `stokb`
  ADD PRIMARY KEY (`idstokbarang`);

--
-- Indeks untuk tabel `stokp`
--
ALTER TABLE `stokp`
  ADD PRIMARY KEY (`idstok`);

--
-- Indeks untuk tabel `tenagakerja`
--
ALTER TABLE `tenagakerja`
  ADD PRIMARY KEY (`idtenaga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
