-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2022, 15:36:54
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
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `message_content` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `message_created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`message_id`, `message_content`, `topic_id`, `message_created_date`, `user_id`) VALUES
(1, '<b>Bilgisayarınız yavaş çalışıyorsa, panik yapmayın.</b><br>\r\n<br>\r\n<br>\r\n<br>\r\n<br>\r\n<b>Zaman içinde daha yavaş PC performansı, düzenli kullanımın tamamen normal bir yan etkisidir ve tam bir sabit diskten donanım arızasına kadar her şeyden kaynaklanabilir.</b><br>\r\n<br>\r\n<b>Ayrıca, bu hızlı ve basit temizlik ipuçlarıyla genellikle en azından biraz tersine çevrilebilir.</b><br>\r\n<br>\r\n<b>Peki bilgisayar hızlandırma yöntemleri nelerdir, bilgisayar nasıl hızlandırılır? İşte PC hızlandırma 2020 yöntemleri için tam kılavuzumuz</b>', 1, '2021-12-25 14:28:59', 3),
(2, '                                                                     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptatem quisquam minus aut ratione nostrum veniam neque eum enim earum labore, laudantium aperiam molestiae commodi amet suscipit! Voluptas, temporibus repellat!', 1, '2021-12-25 15:35:39', 2),
(4, 'lorem ipsum dolor sit', 3, '2021-12-27 14:33:34', 3),
(5, 'lorem ipsum dolor sit2', 3, '2021-12-27 14:33:47', 3),
(6, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt voluptatem quisquam minus aut ratione nostrum veniam neque eum enim earum labore, laudantium aperiam molestiae commodi amet suscipit! Voluptas, temporibus repellat! 2', 1, '2022-01-03 15:29:17', 3),
(7, 'Bilgisayarınız yavaş çalışıyorsa, panik yapmayın. 3', 9, '2022-01-03 15:30:50', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL,
  `topic_name` varchar(255) NOT NULL,
  `topic_url` varchar(255) NOT NULL,
  `board_id` int(11) NOT NULL,
  `topic_created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_name`, `topic_url`, `board_id`, `topic_created_date`, `user_id`) VALUES
(1, '14 Bilgisayar Hızlandırma ve FPS Arttırma Yöntemi', '14-bilgisayar-hizlandirma-ve-fps-arttirma-yontemi', 4, '2021-12-22 12:43:32', 3),
(3, 'Akıllı Telefon / Tablet testi', 'asdasdasdasdasdasd', 5, '2021-12-23 11:23:50', 3),
(9, 'test konusu 1', 'test-konusu-1', 4, '2022-01-03 15:30:11', 3);

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
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Tablo için indeksler `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

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
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
