-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2025 pada 18.23
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webportal-arga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about_us`
--

INSERT INTO `about_us` (`id`, `description`, `image`, `created_at`) VALUES
(21, 'PT Arga Bumi Indonesia adalah perusahaan yang bergerak di bidang pemeliharaan, pengelolaan, dan pemasaran hasil bumi. Kami berkomitmen untuk meningkatkan perekonomian para petani dengan menjalankan usaha perkebunan yang produktif dan sistem yang efektif. Kami juga memastikan untuk menghasilkan bahan baku yang bermutu tinggi serta hasil yang berlimpah untuk pasar domestik dan ekspor.', 'kebun-kopi.jpg', '2025-05-20 14:00:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `introduction`
--

CREATE TABLE `introduction` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `introduction`
--

INSERT INTO `introduction` (`id`, `image`, `description`, `link`, `created_at`) VALUES
(2, 'ig1.jpeg', 'Kopi lokal Indonesia dikenal dengan karakter kompleks dan unik, sementara kopi impor lebih konsisten dan seimbang. Dari cita rasa hingga metode pengolahan, masing-masing punya keunggulan tersendiri.', 'https://www.instagram.com/p/DIs31QhMM1T/?igsh=M2hvcTJyNnZidzQ5', '2025-06-13 15:48:58'),
(3, 'ig10.jpeg', 'Kopi Lampung Cita Rasa Nusantara yang Mendunia Dari tangan petani lokal hingga ke pasar internasional, setiap tegukan kopi ini adalah bukti keistimewaan hasil bumi Indonesia.', 'https://www.instagram.com/p/DFokqZDvG1v/?igsh=dW5jNzRkaGZueWQy', '2025-06-13 16:00:58'),
(4, 'ig3.jpeg', 'Tahukah kamu? Selain nikmat, kopi juga memiliki banyak manfaat untuk kesehatan! + Dari meningkatkan fokus hingga membantu mengurangi risiko penyakit jantung, kopi bisa jadi sahabat terbaikmu setiap hari.', 'https://www.instagram.com/p/DHpmTeTPITf/?igsh=MXdibDl5OThjb2hj%20%20Yw%3D%3D', '2025-06-13 16:01:52'),
(5, 'ig4.jpeg', 'Dari kebun hingga jadi cokelat favoritmu! + Inilah proses panjang kakao sebelum jadi camilan lezat yang kita nikmati. Yuk, apresiasi setiap langkahnya!', 'https://www.instagram.com/p/DHkyvOPR1Gu/?igsh=MTNzMDNsd3dqeTI2Ng%3D%3D', '2025-06-13 16:02:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `leadership`
--

CREATE TABLE `leadership` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `leadership`
--

INSERT INTO `leadership` (`id`, `full_name`, `position`, `image`, `created_at`) VALUES
(7, 'Ikhwan Ferdian', 'Direktur Utama, Head Operation, Manager Asset Management', 'IKHWAN.jpg', '2025-06-13 07:32:00'),
(8, 'Pascal', 'Strategic', 'profile.jpg', '2025-06-13 07:33:17'),
(9, 'Haniefan M', 'Manager Comersial', 'HANIF.jpg', '2025-06-13 07:34:24'),
(10, 'Hilman Agil', 'Manager Procurement', 'profile.jpg', '2025-06-13 07:34:47'),
(11, 'Ine Laynazka', 'Human Capital', 'INE.jpg', '2025-06-13 07:35:14'),
(12, 'Zam - Zami', 'Accounting & Tax', 'zamzami.png', '2025-06-13 07:35:37'),
(13, 'Frians Muhardi', 'Lead Tanggamus', 'FRIANS.jpg', '2025-06-13 07:42:51'),
(14, 'Rudi Riansyah', 'Lead Lampung Barat', 'profile.jpg', '2025-06-13 07:43:12'),
(15, 'Hendrik', 'Lead Pagar Alam', 'profile.jpg', '2025-06-13 07:43:29'),
(16, 'Amalia Rahma', 'Finance', 'AMALIA.jpg', '2025-06-13 07:43:52'),
(17, 'Fendy Susanto', 'Kepala Gudang', 'profile.jpg', '2025-06-13 07:44:17'),
(18, 'Robihan', 'Argonomist', 'profile.jpg', '2025-06-13 07:44:35'),
(19, 'Syaiful Wahid', 'Operational & Quality Control Spesialist', 'profile.jpg', '2025-06-13 07:47:16'),
(20, 'Sunandar', 'Account Excecutive', 'profile.jpg', '2025-06-13 07:47:49'),
(21, 'Eriyana', 'Account Excecutive', 'profile.jpg', '2025-06-13 07:49:39'),
(22, 'Annisa P. Azzahra', 'Staf KIR', 'profile.jpg', '2025-06-13 07:52:20'),
(23, 'Rara', 'Staf KIR', 'profile.jpg', '2025-06-13 07:52:42'),
(24, 'Fazar', 'Staf KIR', 'FAZAR.jpg', '2025-06-13 07:53:01'),
(25, 'Defi Sapitri', 'Administrasi', 'profile.jpg', '2025-06-13 07:53:20'),
(26, 'Deni', 'Staf KIR', 'profile.jpg', '2025-06-13 07:55:51'),
(27, 'Wahyu Saputra', 'Staf Kebun', 'profile.jpg', '2025-06-13 07:56:36'),
(28, 'Rahmat Imam', 'Administrasi', 'profile.jpg', '2025-06-13 07:56:57'),
(29, 'Tenaga_ops', ' ', 'profile.jpg', '2025-06-13 07:57:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'argabumiindonesiahrd@gmail.com', 'argabumi789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `values_table`
--

CREATE TABLE `values_table` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `value` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `values_table`
--

INSERT INTO `values_table` (`id`, `image`, `value`, `description`) VALUES
(6, 'berkomitmen.png', 'Berkomitmen', 'Menjalankan tugas dengan tanggung jawab dan dedikasi tinggi'),
(7, 'bertumbuh.png', 'Bertumbuh', 'Terus belajar dan berkembang untuk menjadi lebih baik'),
(8, 'bekerjasama.png', 'Bekerja sama', 'Membangun kolaborasi yang solid demi tujuan bersama'),
(9, 'berkelanjutan.png', 'Berkelanjutan', 'Menjaga konsistensi dan dampak jangka panjang secara positif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `category` enum('visi','misi') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `description`, `category`, `created_at`) VALUES
(1, 'Menjadi Perusahaan Hilirisasi Perkebunan yang Berkelanjutan dan Berskala Internasional', 'visi', '2025-05-20 06:50:36'),
(2, 'Membangun hubungan yang kuat dan berkelanjutan dengan petani dan mitra usaha.', 'misi', '2025-05-20 06:52:33'),
(5, 'Mengembangkan teknologi dan praktik terbaik dalam pengelolaan perkebunan.\r\n', 'misi', '2025-05-20 14:02:23'),
(6, 'Meningkatkan nilai tambah hasil bumi melalui inovasi dan hilirisasi produk.', 'misi', '2025-05-20 14:02:45'),
(8, 'Mendukung ekonomi lokal dan keberlanjutan lingkungan.', 'misi', '2025-06-13 16:19:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `leadership`
--
ALTER TABLE `leadership`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `values_table`
--
ALTER TABLE `values_table`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `introduction`
--
ALTER TABLE `introduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `leadership`
--
ALTER TABLE `leadership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `values_table`
--
ALTER TABLE `values_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
