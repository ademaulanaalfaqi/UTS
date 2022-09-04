-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Sep 2022 pada 13.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utss`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `id_user`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 2, 'Gunung Rinjani', 'Gunung Rinjani terletak di kawasan konservasi Taman Nasional Gunung Rinjani yang berada di Nusa Tenggara Barat, Pulau Lombok bagian Lombok Timur. Gunung ini memiliki ketinggian sekitar 3.726 mdpl.\r\n\r\nGunung Rinjani adalah salah satu gunung yang menjadi favorit para pendaki karena gunung ini terkenal sangat indah. Bahkan gunung ini disebut-sebut sebagai wisata pendakian gunung terindah di Asia Tenggara.\r\n\r\nGunung ini memiliki pemandangan indah yang banyak mulai dari pada sabana yang banyak ditumbuhi bunga edelweis, pemandangan matahari terbit yang sangat indah, lalu ada pemandangan paling indah di gunung ini pada ketinggian 2000 meter, yaitu Danau Segara Anak. Danau ini memiliki keunikan yaitu di tengah-tengah danau tersebut ada sebuah gunung kecil yang dikenal dengan Gunung Barujari.', '2022-09-03 05:27:55', '2022-09-03 05:31:46'),
(2, 3, 'Gunung Semeru', 'Gunung Semeru juga salah satu gunung terindah di Indonesia. Gunung ini menjadi gunung tertinggi yang ada di Pulau Jawa. Semeru memiliki ketinggian sekitar 3.676 mdpl. Puncak yang ada di Gunung Semeru memiliki nama puncak Mahameru. Gunung ini termasuk pada kawasan Taman Nasional Bromo Tengger Semeru yang berada Kabupaten Lumajang dan Kabupaten Malang.\r\n\r\nGunung Semeru memiliki beberapa tempat yang memiliki keindahan yang dapat memanjakan mata kita saat berada di sana. Tempat-tempat tersebut memiliki keunikannya tersendiri, bahkan ada beberapa mitos juga yang ada di tempat-tempat tersebut.\r\n\r\nYang pertama adalah Ranu Kumbolo, tempat ini memiliki pemandangan yang cukup indah dipandang. Danau Ranu Kumbolo memiliki luas sekitar 14 hektar. Danau ini biasanya dijadikan sebagai tempat istirahat sebelum melanjutkan sampai ke puncak Mahameru.\r\n\r\nLalu yang kedua adalah Tanjakan Cinta. Tanjakan Cinta adalah sebuah bukit yang berbentuk seperti simbol cinta. Biasanya tanjakan ini dilalui pendaki jika ingin melanjutkan dari Danau Ranu Kumbolo ke Oro-Oro Ombo. Tanjakan ini memiliki mitos bahwa jika saat mendaki bukit ini lalu menoleh ke belakang maka kisah cintanya dengan kekasih akan putus.\r\n\r\nKetiga, Oro-Oro Ombo. Oro-Oro Ombo merupakan sebuah sabana luas. Uniknya adalah warna pada sabana ini tergantung pada musim yang ada. Kalian bisa saja menjumpai bunga lavender dengan warna ungu saat masanya mekar.\r\n\r\nYang keempat Kali Mati. Kali Mati merupakan tempat yang luasnya 20 hektar dengan pemandangan berupa bunga edelweis. Jalur ini digunakan sebagai jalur transit jika ingin mendaki sampai puncak.\r\n\r\nBerikutnya yang terakhir adalah puncak Mahameru. Puncak ini merupakan puncak tertinggi dari Gunung Semeru. Kalian bisa menemukan pemandangan yang sangat indah seperti samudera di atas awan, semburan batu vulkanik, dan juga asap pekat dari kawah Jonggring Saloko. Namun, tempat ini juga pernah ditutup karena kondisi saat gempa dan semburan vulkanik yang berbahaya.', '2022-09-02 22:40:23', '2022-09-02 22:40:23'),
(4, 2, 'Gunung Bromo', 'Gunung Bromo terletak di Kabupaten Probolinggo, Pasuruan, Lumajang, dan Malang. Gunung ini memiliki ketinggian 2.329 mdpl dan merupakan gunung yang masih aktif. Gunung ini juga masih satu kawasan dengan Gunung Semeru yaitu kawasan Taman Nasional Bromo Tengger Semeru.\r\n\r\nGunung Bromo tidak pernah sepi dengan pengunjung. Bahkan pemerintah Jawa Timur telah menetapkan bahwa Gunung Bromo adalah destinasi wisata unggulan. Hal tersebut sangat pantas karena pesona lama gunung ini yang luar biasa dan juga layak untuk dipromosikan sebagai wisata Jawa Timur. Gunung ini dikenal dengan keindahan sunrise dan sunset-nya. Jika kamu mendaki sampai puncaknya yaitu Pananjakan maka akan disambut dengan pemandangan berupa Gunung Semeru.\r\n\r\nSelain itu, kamu juga bisa menjelajahi lautan pasir atau disebut gumul pasir dengan kendaraan, berkuda, atau pun berjalan kaki. Dengan menjelajahi lautan pasir kamu akan diarahkan pada jalur khusus ke kawah Gunung Bromo yang indah.', '2022-09-03 23:52:31', '2022-09-03 23:52:31'),
(5, 3, 'Gunung Ijen', 'Gunung Ijen terletak di antara Kabupaten Bondowoso, Situbondo, dan Banyuwangi. Gunung ini memiliki ketinggian 2.443 mdpl. Gunung Ijen juga letaknya berdampingan dengan Gunung Merapi. Yang menarik dari gunung ini adalah kawahnya.\r\n\r\nKawah Ijen adalah sebuah danau air asam yang terbesar di dunia. Selain itu, Ijen juga terkenal dengan api biru atau blue fire yang muncul pada kawahnya. Api biru ini bisa kalian lihat pada tengah malam dari pukul 02.00 sampai 04.00 dini hari. Fenomena api biru ini sangat langka, hanya ada dua fenomena yang terjadi di dunia.\r\n\r\nSelain kawah, kalian juga bisa kalian bisa bertemu dengan orang-orang yang bekerja mengambil kawah Ijen. Kawah Ijen adalah kawah yang kadar asamnya tertinggi di dunia. Setelah matahari terbit, kalian juga dapat melihat pemandangan berupa Gunung Merapi dan kota Banyuwangi dari puncak Ijen.', '2022-09-04 00:04:55', '2022-09-04 00:04:55'),
(6, 3, 'Gunung Merapi', 'Gunung Merapi terletak di kawasan Kabupaten Sleman (Yogyakarta), Kabupaten Magelang bagian barat, Kabupaten Klaten bagian tenggara, dan Kabupaten Boyolali bagian timur dan utara. Gunung ini memiliki ketinggian sekitar 2.930 mdpl.\r\n\r\nGunung Merapi juga merupakan salah satu gunung yang masih aktif. Pendaki tidak boleh asal mendaki, harus mengikuti perkiraan kondisi pada Merapi. Hal ini dikarenakan aktivitas gunung yang masih aktif sangat berbahaya bagi masyarakat sekitar dan juga pendaki.\r\n\r\nJika kalian mendaki Gunung Merapi, tanda-tanda sudah mendekati puncaknya adalah tercium aroma belerang dari kawah. Kawah pada kawasan ini disebut dengan Kawah Mati. Dataran pada kawah itu sangat luas sebelum menuju puncak Garuda.\r\n\r\nDi puncak Garuda kalian akan menemukan pemandangan yang indah. Beberapa deret pegunungan akan terlihat jelas di atas puncak. Deretan gunung tersebut meliputi, Gunung Sindoro, Sumbing, Dieng, Slamet, dan Merbabu.', '2022-09-04 00:06:24', '2022-09-04 00:06:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komen`
--

INSERT INTO `komen` (`id`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(4, 'handoko', 'handoko@gmail.com', 'kerennn', '2022-09-02 23:55:02', '2022-09-02 23:55:02'),
(8, 'budi', 'btxfalcon26@gmail.com', 'mantapp', '2022-09-03 23:58:32', '2022-09-03 23:58:32'),
(9, 'jamal', 'jamal@gmail.com', 'mang lihai', '2022-09-04 00:05:36', '2022-09-04 00:05:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `nomor_hp`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ade Maulana Alfaqi', 'ademaulanaalfaqi', 'adektp7@gmail.com', '$2y$10$jq9YUx5/0b9J3FVUxpDjiO2u1SaKg8C46tXm/1SV/fdGUWy3L0TrW', '083125363592', NULL, '2022-09-02 22:30:30', '2022-09-02 22:30:30'),
(3, 'lana', 'lananvtz', 'admlna26@gmail.com', '$2y$10$HgS2Kcw1ocozIYEiWsWnGuJ.JXWVaQlpP3qBf2uSZN.RdlyYaPKDO', '080886866464', NULL, '2022-09-02 22:34:49', '2022-09-02 22:34:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
