-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Ara 2021, 12:12:30
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `forum`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `boards`
--

CREATE TABLE `boards` (
  `board_id` int(11) NOT NULL,
  `board_name` varchar(255) NOT NULL,
  `board_parent` varchar(255) DEFAULT NULL,
  `board_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `boards`
--

INSERT INTO `boards` (`board_id`, `board_name`, `board_parent`, `board_url`) VALUES
(1, 'Donanım', NULL, 'donanim'),
(2, 'Yazılım', NULL, 'yazilim'),
(3, 'Diğer Teknolojiler', NULL, 'diger-teknolojiler'),
(4, 'Masaüstü Bilgisayar / Dizüstü Bilgisayar', '1', 'masaustu-bilgisayar-dizustu-bilgisayar'),
(5, 'Akıllı Telefon / Tablet', '1', 'akilli-telefon-tablet'),
(6, 'Televizyon / Uydu', '1', 'televizyon-uydu'),
(7, 'Giyilebilir Teknolojik Cihazlar', '1', 'giyilebilir-teknolojik-cihazlar'),
(8, 'Diğer Donanım ve Bileşenler', '1', 'diger-donanim-ve-bilesenler'),
(9, 'Masaüstü Programlama', '2', 'masaustu-programlama'),
(10, 'Web Programlama', '2', 'web-programlama'),
(11, 'Mobil Programlama', '2', 'mobil-programlama'),
(12, 'Oyun Programlama', '2', 'oyun-programlama'),
(13, 'Diğer Geliştirmeler', '2', 'diger-gelistirmeler'),
(14, 'Otomobil Teknolojisi', '3', 'otomobil-teknolojisi'),
(15, 'Elektrikli Araçlar', '3', 'elektrikli-araclar'),
(16, 'Ev Elektroniği', '3', 'ev-elektronigi'),
(17, 'Diğer Teknolojik Cihazlar', '3', 'diger-teknolojik-cihazlar'),
(18, 'Konu Dışı Sorular', '3', 'konu-disi-sorular');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_register_date`) VALUES
(1, 'asdasdas', 'asdasd@asdasd.com', 'asdasdasdasd', '2021-12-05 18:34:11'),
(2, 'test', 'test@test.com', 'test', '2021-12-06 13:02:40'),
(3, 'AdminAdmin', 'test@test2.com', 'admin', '2021-12-10 11:12:13');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`board_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `boards`
--
ALTER TABLE `boards`
  MODIFY `board_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
