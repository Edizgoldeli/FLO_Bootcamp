-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:8889
-- Üretim Zamanı: 14 Kas 2022, 10:59:02
-- Sunucu sürümü: 5.7.25
-- PHP Sürümü: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Veritabanı: `FLO`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `ID` smallint(6) NOT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `timeSTMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`ID`, `name`, `phone`, `timeSTMP`) VALUES
(1, 'Göldeli', '545112111', '2022-11-14 09:43:22'),
(2, 'deneme', '5384614784', '2022-11-14 09:55:35');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
