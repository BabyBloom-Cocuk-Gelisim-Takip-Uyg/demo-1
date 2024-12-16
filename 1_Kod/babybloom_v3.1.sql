-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Ara 2024, 18:49:41
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `babybloom`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `childinfo`
--

CREATE TABLE `childinfo` (
  `user_id` int(32) NOT NULL,
  `child_id` int(32) NOT NULL,
  `name` text NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `childnutrition`
--

CREATE TABLE `childnutrition` (
  `user_id` int(32) NOT NULL,
  `child_id` int(32) NOT NULL,
  `nutrition_info` text NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `childphysical`
--

CREATE TABLE `childphysical` (
  `user_id` int(32) NOT NULL,
  `child_id` int(32) NOT NULL,
  `physical_act_info` text NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `childsleeping`
--

CREATE TABLE `childsleeping` (
  `user_id` int(32) NOT NULL,
  `child_id` int(32) NOT NULL,
  `sleep_time` time NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(32) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `regdate` date NOT NULL,
  `logintime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `regdate`, `logintime`) VALUES
(6, 'e4b33d901de1dd7d55ae814136f13c01', '0f065e729f4f130a641c3a03751b50a7', '2024-12-16', '2024-12-16');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `childinfo`
--
ALTER TABLE `childinfo`
  ADD PRIMARY KEY (`child_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `childinfo`
--
ALTER TABLE `childinfo`
  MODIFY `child_id` int(32) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
