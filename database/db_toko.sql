-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2020 pada 22.47
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(100) DEFAULT 'jpg',
  `diskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `image`, `diskripsi`) VALUES
('0001', 'Sabun', '5000', 'default.jpg', ' Sabuun ini sabun anti bacterial'),
('0002', 'Rinso', '8000', 'default.jpg', ' Diterjen'),
('0003', 'Molto', '2000', 'default.jpg', ' Softener'),
('0006', 'LifeBoy', '7000', 'default.jpg', ' Sabun anti kuman'),
('0007', 'Bimoli', '20000', 'default.jpg', '  Bibir Monyong lima senti (BIMOLI)'),
('0008', 'SoftTech', '8000', 'default.jpg', ' Soft'),
('5e99a8fe12140', 'Gudang garam', '13000', 'default.jpg', 'Rokok kretek'),
('5e99a96c882cc', 'Ultra Milk', '20000', 'default.jpg', 'Susu segar'),
('5e99a9872f805', 'Kacang Sukro', '4000', 'default.jpg', 'Kacang tanpa digoreng'),
('5e99aaea3677e', 'Teh gelas', '4500', 'default.jpg', 'Teh instant tinggal minum celeguk celeguk..'),
('5e99ac8ba398e', 'Fullo', '2000', 'default.jpg', 'Wafle no bolong bolong'),
('5e99add44c593', 'Fullo', '2000', 'default.jpg', 'Wafle no bolong bolong'),
('5e99ae142dd66', 'Teh Pucuk', '5000', 'default.jpg', 'Teh dalam botol'),
('5e99aec0a5622', 'Pocky', '5000', 'default.jpg', 'Stick coklat'),
('5e99afab3cb13', 'Roma kelapa', '6000', 'default.jpg', 'Biskuit kelpa murah'),
('5e99aff17cce2', 'Geliga', '7000', 'default.jpg', 'Balsem panas hot'),
('5e99b0ec73215', 'Royko', '500', 'default.jpg', 'Penyedap setiap masakan rasa ayam'),
('5e99b1a419d69', 'Molto', '1000', 'default.jpg', 'Pewangi softener (renceng)'),
('5e99b1c560942', 'Molto', '4000', 'default.jpg', 'Pewangi softener (400ml)'),
('5e9a3615253b9', 'Googtime', '4000', 'default.jpg', 'Biskuit toping coklat'),
('5e9a367419aeb', 'Bon Cabe', '2000', '5e9a367419aeb.png', ' Lombok instant'),
('5e9a37e514baa', 'Santan Kara', '2500', 'default.jpg', 'Santan cair instan'),
('5e9a39512dc31', 'Kopi Kapal Api', '1000', 'default.jpg', 'Kopi kapal api sachet'),
('5e9a39cdeb08f', 'Pocari Swet', '5000', 'default.jpg', 'Isotonic pocari 500ml'),
('5e9a77ccd47bf', 'Panadol', '4000', 'default.jpg', 'Obat sakit perut yang pusing'),
('5e9a82137eff2', 'Mie Soto', '2500', 'default.jpg', ' Mie rasa soto asli'),
('5e9a871a850c5', 'Kaos', '4000', '5e9a871a850c5.jpg', ' kaos kaos'),
('5e9ac36cdd7ac', 'Kecap ABC', '67', '5e9ac36cdd7ac.png', 'hdd'),
('5e9ac6dca8d1b', 'Cabe', '500', '5e9ac6dca8d1b.jpg', 'ghgh');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
