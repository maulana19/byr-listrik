-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2020 pada 06.00
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayar_listrik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daya`
--

CREATE TABLE `daya` (
  `id` int(11) NOT NULL,
  `kd_daya` varchar(255) NOT NULL,
  `daya` int(30) NOT NULL,
  `gol_tarif` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daya`
--

INSERT INTO `daya` (`id`, `kd_daya`, `daya`, `gol_tarif`) VALUES
(16, 'STR01579002272', 450, 415),
(17, 'STR01579002330', 900, 568),
(18, 'STR01579002366', 1300, 1467),
(19, 'STR01579002387', 2200, 1470),
(20, 'STR01579002406', 3500, 1472),
(21, 'STR01579002497', 4500, 1475),
(22, 'STR01579002517', 5500, 1477),
(23, 'STR01579002532', 6600, 1480);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `kode_pelanggan` varchar(25) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` bigint(15) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=cewek,1=cowok',
  `daya` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `kode_pelanggan`, `nama`, `alamat`, `telepon`, `gender`, `daya`) VALUES
(19, 'PLG01579002954', 'Maulana Hadi Prasetyo', 'desa jambu', 82243837174, 1, 17),
(21, 'PLG01579003093', 'Rio Adi Pratama', 'Desa Sinanggul4', 89665423167, 1, 18),
(22, 'PLG01579263522', 'Alby Nauval Azzaidi', 'Desa Jambu Barat Rt 1 Rw 1', 82243837174, 1, 21),
(25, 'PLG01579278085', 'Juwita Anggraini', 'Desa Pakis Aji', 89556754321, 0, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `kode_petugas` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` bigint(50) NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=cewek,1=cowok',
  `akses` int(11) NOT NULL COMMENT '0=pegawai,1=admin',
  `status` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `kode_petugas`, `nama`, `alamat`, `telepon`, `gender`, `akses`, `status`, `username`, `password`) VALUES
(1, 'PAL01574079922', 'Maulana Hadi Prasetyo', 'Desa Jambu Barat', 82243837174, 1, 1, 1, 'maulana', 'aff4b352312d5569903d88e0e68d3fbb'),
(2, 'PAL01574138545', 'Ahmad Heris Setiawan', 'Desa Jeruk Wangi', 2147483647, 1, 1, 2, 'heris', 'heris'),
(3, 'PAL01574171211', 'Lala Irmaya', 'Desa Kancilan', 89973645182, 0, 0, 1, 'lala', 'lala'),
(8, 'PAL01579264188', 'M.Puji Lestari', 'Desa Kancilan', 82776891098, 0, 0, 2, 'puji', 'puji');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kode_pembayaran` varchar(50) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tanggal_pembayaran` varchar(50) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `daya` int(11) NOT NULL,
  `tagihan` int(11) NOT NULL,
  `naik` int(225) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `uang_pelanggan` int(100) NOT NULL,
  `kembalian` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `kode_pembayaran`, `id_petugas`, `tanggal_pembayaran`, `id_pelanggan`, `daya`, `tagihan`, `naik`, `total_bayar`, `uang_pelanggan`, `kembalian`) VALUES
(4, 'BYR01579845839', 0, '24-01-20', 25, 900, 568, 10, 511200, 1000000, 488800),
(6, 'BYR01580790808', 0, '04-02-20', 25, 900, 568, 100, 511200, 200000, -311200);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daya`
--
ALTER TABLE `daya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daya` (`daya`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_daya` (`daya`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daya`
--
ALTER TABLE `daya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`daya`) REFERENCES `daya` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
