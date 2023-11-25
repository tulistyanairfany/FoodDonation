-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2022 pada 17.24
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptopmarket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `jasa` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`, `tlp`, `jasa`, `bank`) VALUES
(18, 'ervany', 'Dolopo Madiu ', '2021-05-11 19:32:34', '2021-05-12 19:32:34', '081234357779', 'JNE', 'BRI - XXXXX');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laptop`
--

CREATE TABLE `tb_laptop` (
  `id_laptop` int(11) NOT NULL,
  `nama_laptop` varchar(120) NOT NULL,
  `spesifikasi` varchar(225) NOT NULL,
  `merk` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_laptop`
--

INSERT INTO `tb_laptop` (`id_laptop`, `nama_laptop`, `spesifikasi`, `merk`, `harga`, `stok`, `gambar`) VALUES
(1, 'Acer 4738z', 'intel celeron p6100', 'ACER', 2000000, 2, 'acer_4738z.png'),
(2, 'Acer ES1-411', 'Ram 4 GB', 'ACER', 2500000, 6, 'acer_es1-411.png'),
(3, 'Netbook Acer V5-131', 'Hardisk 500 GB', 'ACER', 3500000, -1, 'acer_v5-131.png'),
(4, 'Acer v5-431', 'Win 10 new', 'ACER', 2500000, 2, 'acer_v5-431.png'),
(12, 'Asus X45A', 'Ram 4GB', 'ASUS', 4000000, 1, 'Asus_X45A2.png'),
(13, 'Hp 14', 'Spesifikasi -processor: Amd E2-9000e -Ati radeon -Hardisk 500gb -Ram 4 gb -Display LED 14.Inci -Batry awet 6 jm', 'HP', 4000000, 10, 'Hp14.png'),
(16, 'Asus X441M', '-processor: intel celeron N4000 -intel hd grphics -hardisk 1Tb -ram 4gbb -display led 14 inci -batry awet 4-5 jamm Windos 10', 'ASUS', 5000000, 8, 'Asusx441m2.png'),
(17, 'Acer E1-422', 'processor: Amd E1-2500 -radeon gtphics -Hardisk 500 -Ram 4gb -Display LED 14 Inci -Batry awet 5 jam Win 10 new', 'ACER', 3000000, 4, 'Acer_E1-422.png'),
(18, 'Asus E402Y', 'processor: amd E2-7015 -radeons -Hardisk 1Gb -Ram 4Gb -Display LED 14 inci -Batry awet 4-5 jam', 'ASUS', 4000000, 2, 'Asus_e402y.png'),
(19, 'Acer es14', 'processor: intel celeron N3050 -intel hd grephics -Hardisk 500 Gb -Ram 4Gb -Display LED 14 inci -Batry awet 6 jam', 'ACER', 6000000, 5, 'aceres14.png'),
(20, 'Lenovo 300', 'processor: intel celeron N3150 -intel hd grephics -Hardisk 500 Gb -Ram 4Gb -Display LED 14 inci -Batry awet 6 jam', 'Lenovo', 4500000, 6, 'lenovo300.png'),
(21, 'Asus Vivobook max X441B', 'processor: Amd A4-9125 -radeons -Hardisk 500 Gb -Ram 4Gb -Display LED 14 inci -Batry awet 6 jam', 'ASUS', 3500000, 5, 'maxx441b.png'),
(22, 'Asus k43E', 'processor: intel celeron B940 -intel hd grephics -Hardisk 320 Gb -Ram 4Gb -Display LED 14 inci -Batry awet 3-4 jam', 'ASUS', 5000000, 10, '43.png'),
(23, 'Samsung 370R4E', 'processor: intel celeron 997 -intel hd grphics -Hardisk 320 Gb -Ram 4Gb -Display LED 14 Inci -Batry awet 6 jam Win 10 new', 'Samsung', 6000000, 3, '370.png'),
(24, 'Hp 15-Db0xx', 'processor: Amd E2-9000e -rdeonn R2 grphich -hardisk 500 gb -ram 4gb -display led 14 inci -batry awet 3-4jam Windos 10', 'HP', 3500000, 3, '15Dbbox.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_gb` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_gb`, `nama`, `gambar`) VALUES
(6, 'ervany', 'buktibayar.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_laptop` int(11) NOT NULL,
  `nama_laptop` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_laptop`, `nama_laptop`, `jumlah`, `harga`, `pilihan`) VALUES
(19, 18, 18, 'Asus E402Y', 1, 4000000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_laptop SET stok = stok-NEW.jumlah
    WHERE id_laptop = NEW.id_laptop;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(6, 'ervany', 'ervany', 'ervany', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_laptop`
--
ALTER TABLE `tb_laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_gb`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_invoice` (`id_invoice`),
  ADD KEY `id_laptop` (`id_laptop`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_laptop`
--
ALTER TABLE `tb_laptop`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_gb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `tb_invoice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pesanan_ibfk_2` FOREIGN KEY (`id_laptop`) REFERENCES `tb_laptop` (`id_laptop`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
