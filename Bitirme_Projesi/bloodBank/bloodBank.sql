-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:8889
-- Üretim Zamanı: 02 Ara 2022, 22:49:46
-- Sunucu sürümü: 5.7.25
-- PHP Sürümü: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Veritabanı: `bloodBank`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$lT7zAWchcQ.dxDeU4DO56.4pvByvionuWRwE3CwpBK/hHz696sLka');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `donation`
--

CREATE TABLE `donation` (
  `ID` int(11) NOT NULL,
  `donation_ID` int(11) NOT NULL,
  `grantee_ID` int(11) NOT NULL,
  `amount` int(3) NOT NULL,
  `timeStmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `donor`
--

CREATE TABLE `donor` (
  `ID` int(11) NOT NULL,
  `name` varchar(63) COLLATE utf8_turkish_ci NOT NULL,
  `surname` varchar(63) COLLATE utf8_turkish_ci NOT NULL,
  `birthDate` date NOT NULL,
  `gender` text COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(127) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `bType` varchar(6) COLLATE utf8_turkish_ci NOT NULL,
  `given` int(6) NOT NULL,
  `taken` int(6) DEFAULT NULL,
  `registerDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `donor`
--

INSERT INTO `donor` (`ID`, `name`, `surname`, `birthDate`, `gender`, `email`, `password`, `phone`, `bType`, `given`, `taken`, `registerDate`) VALUES
(1, 'Ediz', 'Göldeli', '1999-10-19', 'Erkek', 'ediz@goldeli.com', '$2y$10$UCCrF3cGYj9ZnxysoiTj9.TpcA1QyIy2iC/Uc4mRZ1ks90PVXObYC', '5304624724', '00 Rh-', 3500, NULL, '2022-11-30 12:24:32'),
(2, 'Mustafa', 'Kalemci', '1990-10-10', 'Erkek', 'mustafa@kalemci.com', '$2y$10$dghuhiV3hQYSnoepPxEGUeaL1w25CZKRGTpyUfxuHLZzTGcKbw.dm', '5353627424', '00 Rh-', 4320, NULL, '2022-11-30 13:54:24'),
(3, 'Lale', 'Yazıcı', '1990-10-10', 'Kadın', 'lale@yazici.com', '$2y$10$lQxikMZrY7Hk.MvmV8n8b.Pn9Gm.FBhMBYQd9lG/7FQnhxRY1eZUq', '5353627424', '00 Rh+', 2350, NULL, '2022-11-30 13:56:06'),
(4, 'Hülya', 'Gözcü', '1993-12-18', 'Kadın', 'hulya@gozcu.com', '$2y$10$IysQZ9WC71A9YHHov5s3H.Nmb6EyRxCwDoOdDGgAdQU3RpZ/g/tFa', '5385947385', 'A0 Rh-', 3323, NULL, '2022-11-30 19:09:56'),
(5, 'Cüneyt', 'Konyalı', '1965-01-12', 'Erkek', 'cuneyt@konyali.com', '$2y$10$sVMoPKVsJsK47WgPkQRxN.IR2GVHkUja8/TDuYm8beeSh73D7uT3e', '5382057385', 'B0 Rh-', 3215, NULL, '2022-11-30 19:12:36'),
(6, 'Mücahit', 'Bozacı', '1995-04-23', 'Erkek', 'mucahit@bozaci.com', '$2y$10$ziYPq7R7w3tLCAy9Bfmgve1eKPhFOTYnO36q4Juwzt7HR5DR8kjpa', '5432657964', 'A0 Rh+', 3245, NULL, '2022-11-30 19:15:30'),
(7, 'Şükrü', 'Pamuk', '2020-12-12', 'Erkek', 'sukru@pamuk.com', '$2y$10$hkDl5Wle4sK2wpNWehkFduzae95hRvWAcQIlmZ2geaAJLNVtLbS3K', '5423424654', '00 Rh-', 1203, NULL, '2022-11-30 20:35:01'),
(8, 'Mert', 'Bıdık', '2021-11-20', 'Erkek', 'mert@bidik.com', '$2y$10$qSCTIpGq6Ul1dFB7FXIS6ewOR6W/Uc63bX3KzC9LCqyzuzZIP4MUa', '5432345674', 'AA Rh-', 2134, NULL, '2022-11-30 20:37:39'),
(9, 'İrem', 'Kırmızı', '1998-10-04', 'Kadın', 'irem@kirmizi.com', '$2y$10$XRds5q30Iw7GkTCpO7/MzeJyanFPLJgiQj2rDFgZhqE6pKRBb0J2S', '5473850184', 'A0 Rh+', 3459, NULL, '2022-12-01 07:20:39'),
(10, 'Zeynep', 'Yedici', '1998-10-23', 'Kadın', 'zeynep@yedici.com', '$2y$10$kEzfDp9AzT5Hwutdt5xir.uE3FQJjVIW4u78mg4rhz8NzfHT8vwga', '5674563419', 'A0 Rh+', 3243, NULL, '2022-12-01 07:21:48'),
(11, 'Hülya', 'Tepeci', '1994-07-22', 'Kadın', 'hulya@tepeci.com', '$2y$10$CCb/MqgXqzuL1tV2UGbGkutwtvt6yptRC4oLgImnLWlGaS1LF0Xz6', '5439684567', 'B0 Rh+', 3245, NULL, '2022-12-01 18:49:34');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_ID`),
  ADD UNIQUE KEY `donation_ID` (`donation_ID`),
  ADD KEY `donation_ibfk_1` (`ID`),
  ADD KEY `grantee_ibfk_1` (`grantee_ID`);

--
-- Tablo için indeksler `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `email` (`email`,`phone`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `donor`
--
ALTER TABLE `donor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `donor` (`ID`),
  ADD CONSTRAINT `grantee_ibfk_1` FOREIGN KEY (`grantee_ID`) REFERENCES `donor` (`ID`);
