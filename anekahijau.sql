-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2022 pada 03.08
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anekahijau`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file_foto` varchar(255) NOT NULL,
  `status` enum('0','1','2') NOT NULL COMMENT '0-belum disetujui ,1-disetujui, 2-ditolak'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hero`
--

INSERT INTO `hero` (`id`, `nama`, `file_foto`, `status`) VALUES
(1, 'banner-1', '1.png', '1'),
(2, 'banner-2', '2.png', '1'),
(3, 'banner-3', '31.png', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kategori` enum('Tanaman hias','Tanaman obat','','') NOT NULL,
  `harga` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `product_status` enum('0','1','2') NOT NULL COMMENT '0-belum disetujui ,1-disetujui, 2-ditolak'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama`, `kategori`, `harga`, `image`, `deskripsi`, `product_status`) VALUES
(1, 'Tanaman Salam', 'Tanaman obat', 16000, 'salam.jpg', 'Daun Salam biasa digunakan untuk menurunkan kadar asam urat ataupun sebagai bumbu masakan', '1'),
(2, 'Aglonema', 'Tanaman hias', 20000, 'aglonema.jpg', 'Biasa digunakan sebagai penghias ruangan maupun taman', '1'),
(3, 'Begonia', 'Tanaman hias', 16000, 'begonia.jpg', 'Begonia merupakan jenis tanaman yang memiliki daun indah dan cantik', '1'),
(4, 'Kaktus Parodia', 'Tanaman hias', 20000, 'cactus.jpg', 'Kaktus ini dapat memiliki bunga, dikenal juga dengan sebutan ball cactus', '1'),
(21, 'Kaktus Sukulen', 'Tanaman hias', 21000, 'cactus2.jpg', 'Cocok dijadikan sebagai penghias ruangan dan tidak butuh banyak air', '1'),
(22, 'Sirih (Jamu)', 'Tanaman obat', 10000, 'daunsirih.jpg', 'Daun sirih maupun alarnya biasa dimanfaatkan sebagai jamu dan kaya akan antiseptik', '1'),
(23, 'Tanaman Janda Bolong', 'Tanaman hias', 25000, 'janda.jpg', 'Tanaman hias satu ini pernah cukup populer di Indonesia, memiliki ciri khas daun yang bolong', '1'),
(24, 'Kamboja Jepang', 'Tanaman hias', 28000, 'kamboja.jpg', 'Bunga kamboja Jepang merupakan tanaman hias yang bagian bawahnya menyerupai umbi dan sering dibonsai', '1'),
(25, 'Bunga Krokot - Merah Muda', 'Tanaman hias', 10000, 'krokot.jpg', 'Bunga krokot merupakan salah satu bunga penghias taman yang cukup tahan panas', '1'),
(26, 'Bunga Krokot - Kuning', 'Tanaman hias', 10000, 'krokot2.jpg', 'Bunga krokot merupakan salah satu bunga penghias taman yang cukup tahan panas', '1'),
(27, 'Peace Lily', 'Tanaman hias', 18500, 'plili.jpg', 'Bunga peace lily membawa suasana sejuk dan dapat digunakan sebagai penghias ruangan maupun taman', '1'),
(36, 'Lidah Mertua (Sansevieria)', 'Tanaman hias', 23000, 'sansivera.jpg', 'Bunga Lidah mertua atau Sansivieria sering digunakan sebagai penghias taman maupun ruangan', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`) VALUES
(4, 'Marizka Maulidina', '202410103009@mail.unej.ac.id', 'mariz.jpg', '$2y$10$Frv6.PSrem.c9GiG5gfuUu.deeaBI61rniLAv9NDYiJAao5lhoi0G', 1, 1),
(5, 'Radika DS', 'radikads21@gmail.com', 'default.jpg', '$2y$10$EZMxwwzrgwW5miQ0kwfbnOE/73bsicJ2JRcoMVhSFoC9coCr/.LQG', 2, 1),
(6, 'Dhanar RA', 'dhanargundul@gmail.com', 'default.jpg', '$2y$10$MgBTAzt2RTHQngHSllYih.CSLp2f69FzeyvmS0hqlnKf.NNZIIc3i', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role` (`role_id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
