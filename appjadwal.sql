-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2022 pada 13.09
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appjadwal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `tanggal`) VALUES
(101, 'Minggu', '2022-04-08'),
(102, 'Senin', '2022-05-09'),
(103, 'senin', '2022-05-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayan`
--

CREATE TABLE `pelayan` (
  `id_pelayan` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `worship_lead` varchar(50) NOT NULL,
  `singers` varchar(100) DEFAULT NULL,
  `pemusik` varchar(200) NOT NULL,
  `tamborin` varchar(200) DEFAULT NULL,
  `soundman` varchar(100) NOT NULL,
  `khotbah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayan`
--

INSERT INTO `pelayan` (`id_pelayan`, `id_jadwal`, `worship_lead`, `singers`, `pemusik`, `tamborin`, `soundman`, `khotbah`) VALUES
(201, 101, 'Yusrin Prameswari', 'Gita dan Jojo', 'eber, naldi, jeck, nelson', 'rudi, efraim dan baharuddin', 'M. Fatah', 'Pdt. Raffi Ahmmad, S.Th.,M.Div.'),
(202, 102, 'Yusrin', 'Ahok dan Jokowi', 'Anies, Ganjar dan Gatot', 'Kagura, Nana dan selena', 'Balmond', 'Jothan Zodiathes'),
(203, 103, 'adadad', 'adadad', 'adadad', 'adadad', 'adadad', 'adadad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(331, 'Yusrin Prameswari', 'admin', '4297f44b13955235245b2497399d7a93', 'admin'),
(332, 'Yusrin Prameswari', 'ucing', '4297f44b13955235245b2497399d7a93', 'user'),
(334, 'enan', 'enan', '3e2265edc501faa7bdc5efc7efdcc183', 'user'),
(335, 'nenek', 'nenek', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(336, 'nenek', 'nenek', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(337, 'gita', 'gitasagitarius', '4297f44b13955235245b2497399d7a93', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `pelayan`
--
ALTER TABLE `pelayan`
  ADD PRIMARY KEY (`id_pelayan`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `pelayan`
--
ALTER TABLE `pelayan`
  MODIFY `id_pelayan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pelayan`
--
ALTER TABLE `pelayan`
  ADD CONSTRAINT `pelayan_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
