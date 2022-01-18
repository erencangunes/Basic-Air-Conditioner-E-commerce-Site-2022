-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Oca 2022, 00:11:04
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `store`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `price` int(11) NOT NULL,
  `BTU` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `BTU`) VALUES
(1, 'Mitsubishi SRK50ZS-W Inverter Duvar Tipi Klima', 15000, '9000'),
(2, 'Baymak Elegant Prime 12 A++ 12000 BTU Duvar Tipi Inverter Klima', 8000, '12000'),
(3, 'Bosch B1ZMX12409 Duvar Tipi Inverter Klima 18.000 BTU A++ 1W', 10000, '18000'),
(4, 'Daikin Shira Plus FTXM50M Limited Edition 18000 BTU/h Inverter Split Duvar Tipi Klima', 20000, '18000'),
(5, 'Kaira DTXR35E 12000 BTU WiFi A++ Inverter Duvar Tipi Klima', 7000, '12000'),
(6, 'LG Dual Cool S18ETK S3-W18KL2BA A++ 24000 BTU Inverter Duvar Tipi Klima', 9500, '24000'),
(7, 'LG Dual Cool S12ETK S3-W12JA2AA A++ 18000 BTU Duvar Tipi Inverter Klima', 7500, '18000'),
(8, 'Mitsubishi Heavy SRK25ZSP-W 12000 Btu/h Inverter Duvar Tipi Klima', 8000, '12000'),
(9, 'Mitsubishi Heavy SRK35ZSP-WS 9000 BTU Silver Duvar Tipi Klima', 10200, '9000'),
(10, 'Mitsubishi Heavy SRK35ZSP-WS 18000 BTU Silver Duvar Tipi Klima', 9000, '18000'),
(11, 'Vessen VTXN25B 9000 BTU Dc A++ Duvar Tipi Inverter Klima', 5500, '9000'),
(12, 'Vestel Flora Do?a Inverter 242 A++ WIFI 24000 BTU Duvar Tipi Klima', 11000, '24000');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `contact` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'admin', 'admin@gmail.com', '224cf2b695a5e8ecaecfb9015161fa4b', '0000000000', 'admin', 'admin'),
(20, 'Ahmet', 'ahmet@gmail.com', '224cf2b695a5e8ecaecfb9015161fa4b', '00000000000', 'istanbul', 'istanbul/beylikduzu'),
(21, 'Mustafa', 'mustafa@gmail.com', '224cf2b695a5e8ecaecfb9015161fa4b', '00000000000', 'Ankara', 'Ankara/Ulus');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(629, 21, 3, 'Confirmed');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=638;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
