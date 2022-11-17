-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:8889
-- Üretim Zamanı: 17 Kas 2022, 05:18:02
-- Sunucu sürümü: 5.7.25
-- PHP Sürümü: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Veritabanı: `FLO`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `ID` smallint(6) NOT NULL,
  `urun` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` double(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`ID`, `urun`, `fiyat`) VALUES
(1, 'Ülker Çikolatalı Gofret 40 gr', 10.00),
(2, 'Eti Damak Kare Çikolata 60 gr', 20.00),
(3, 'Nestle Bitter Çikolata 50 gr', 20.00);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
