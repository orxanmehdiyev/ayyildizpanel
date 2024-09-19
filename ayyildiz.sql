-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 02 May 2019, 09:25:49
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ayyildiz`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araclar`
--

CREATE TABLE `araclar` (
  `id` int(10) NOT NULL,
  `owner` int(10) NOT NULL,
  `model` int(10) NOT NULL,
  `posX` varchar(20) NOT NULL,
  `posY` varchar(20) NOT NULL,
  `posZ` varchar(20) NOT NULL,
  `posA` varchar(20) NOT NULL,
  `locked` int(1) NOT NULL DEFAULT '1',
  `alarm` int(1) NOT NULL DEFAULT '1',
  `color1` int(10) NOT NULL DEFAULT '1',
  `color2` int(10) NOT NULL DEFAULT '1',
  `plate` varchar(16) NOT NULL DEFAULT 'Yok',
  `int` int(10) NOT NULL DEFAULT '0',
  `vw` int(10) NOT NULL DEFAULT '0',
  `mod1` int(10) NOT NULL DEFAULT '0',
  `mod2` int(10) NOT NULL DEFAULT '0',
  `mod3` int(10) NOT NULL DEFAULT '0',
  `mod4` int(10) NOT NULL DEFAULT '0',
  `mod5` int(10) NOT NULL DEFAULT '0',
  `mod6` int(10) NOT NULL DEFAULT '0',
  `mod7` int(10) NOT NULL DEFAULT '0',
  `mod8` int(10) NOT NULL DEFAULT '0',
  `mod9` int(10) NOT NULL DEFAULT '0',
  `mod10` int(10) NOT NULL DEFAULT '0',
  `mod11` int(10) NOT NULL DEFAULT '0',
  `mod12` int(10) NOT NULL DEFAULT '0',
  `mod13` int(10) NOT NULL DEFAULT '0',
  `mod14` int(10) NOT NULL DEFAULT '0',
  `paintjob` int(10) NOT NULL DEFAULT '255',
  `getdate` int(5) NOT NULL DEFAULT '200',
  `zirh` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ban`
--

CREATE TABLE `ban` (
  `ID` int(10) NOT NULL,
  `ban_isim` varchar(24) NOT NULL,
  `ban_ip` varchar(16) NOT NULL,
  `ban_admin` varchar(24) NOT NULL,
  `ban_sebep` varchar(40) NOT NULL,
  `ban_tarih` int(10) NOT NULL,
  `ban_acilacak` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cetearaclar`
--

CREATE TABLE `cetearaclar` (
  `id` int(10) NOT NULL,
  `cowner` int(10) NOT NULL,
  `model` int(10) NOT NULL,
  `posX` varchar(20) NOT NULL,
  `posY` varchar(20) NOT NULL,
  `posZ` varchar(20) NOT NULL,
  `posA` varchar(20) NOT NULL,
  `color1` int(10) NOT NULL DEFAULT '1',
  `color2` int(10) NOT NULL DEFAULT '1',
  `plate` varchar(16) NOT NULL DEFAULT 'Yok',
  `mod1` int(10) NOT NULL DEFAULT '0',
  `mod2` int(10) NOT NULL DEFAULT '0',
  `mod3` int(10) NOT NULL DEFAULT '0',
  `mod4` int(10) NOT NULL DEFAULT '0',
  `mod5` int(10) NOT NULL DEFAULT '0',
  `mod6` int(10) NOT NULL DEFAULT '0',
  `mod7` int(10) NOT NULL DEFAULT '0',
  `mod8` int(10) NOT NULL DEFAULT '0',
  `mod9` int(10) NOT NULL DEFAULT '0',
  `mod10` int(10) NOT NULL DEFAULT '0',
  `mod11` int(10) NOT NULL DEFAULT '0',
  `mod12` int(10) NOT NULL DEFAULT '0',
  `mod13` int(10) NOT NULL DEFAULT '0',
  `mod14` int(10) NOT NULL DEFAULT '0',
  `paintjob` int(10) NOT NULL DEFAULT '255'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ceteler`
--

CREATE TABLE `ceteler` (
  `id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  `color` varchar(6) NOT NULL DEFAULT 'FFFFFF',
  `tag` varchar(3) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kill` int(10) NOT NULL DEFAULT '0',
  `death` int(10) NOT NULL DEFAULT '1',
  `onay` int(1) NOT NULL DEFAULT '0',
  `roket1` int(5) NOT NULL DEFAULT '-1',
  `roket2` int(5) NOT NULL DEFAULT '-1',
  `mermi1` int(5) NOT NULL,
  `ceteskin` int(3) DEFAULT '-1',
  `cetekasa` int(11) NOT NULL DEFAULT '0',
  `ceteligpuan` int(11) NOT NULL DEFAULT '0',
  `silah1` int(2) NOT NULL DEFAULT '0',
  `silah2` int(2) NOT NULL DEFAULT '0',
  `silah3` int(2) NOT NULL DEFAULT '0',
  `silah4` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `clientban`
--

CREATE TABLE `clientban` (
  `id` int(11) NOT NULL,
  `nick` varchar(32) NOT NULL DEFAULT 'Yok',
  `pcserial` varchar(50) NOT NULL,
  `sebep` varchar(20) NOT NULL DEFAULT 'Yok',
  `admin` varchar(32) NOT NULL DEFAULT 'Yok',
  `tarih` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `clienthesaplar`
--

CREATE TABLE `clienthesaplar` (
  `id` int(11) NOT NULL,
  `nick` varchar(32) NOT NULL DEFAULT 'Yok',
  `ip` varchar(32) NOT NULL,
  `pcserial` varchar(50) NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `evler`
--

CREATE TABLE `evler` (
  `id` int(10) NOT NULL,
  `oyuncular_id` int(11) NOT NULL,
  `owner` int(10) NOT NULL DEFAULT '-1',
  `posX` varchar(20) NOT NULL,
  `posY` varchar(20) NOT NULL,
  `posZ` varchar(20) NOT NULL,
  `posA` varchar(20) NOT NULL,
  `int` int(10) NOT NULL DEFAULT '8',
  `price` int(10) NOT NULL,
  `owned` int(1) NOT NULL DEFAULT '0',
  `zap` int(1) NOT NULL DEFAULT '0',
  `alarm` int(1) NOT NULL DEFAULT '0',
  `title` varchar(20) NOT NULL DEFAULT 'Yok',
  `password` varchar(20) NOT NULL DEFAULT 'none',
  `arac` int(5) NOT NULL DEFAULT '1',
  `sprice` int(10) NOT NULL DEFAULT '0',
  `getdate` int(5) NOT NULL DEFAULT '200'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `evler`
--

INSERT INTO `evler` (`id`, `oyuncular_id`, `owner`, `posX`, `posY`, `posZ`, `posA`, `int`, `price`, `owned`, `zap`, `alarm`, `title`, `password`, `arac`, `sprice`, `getdate`) VALUES
(5, 1, -1, 'Orxan ev', '', '', '', 8, 0, 0, 0, 0, 'Yok', 'none', 1, 0, 200),
(6, 1, -1, 'Orxan ev', '', '', '', 8, 0, 0, 0, 0, 'Yok', 'none', 1, 0, 200),
(7, 2, -1, 'Ali ev', '', '', '', 8, 0, 0, 0, 0, 'Yok', 'none', 1, 0, 200),
(8, 2, -1, 'ali ev', '', '', '', 8, 0, 0, 0, 0, 'Yok', 'none', 1, 0, 200);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hapisceza`
--

CREATE TABLE `hapisceza` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `ceza` int(11) NOT NULL,
  `sebep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `islemler`
--

CREATE TABLE `islemler` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `admin` varchar(32) NOT NULL,
  `gun` int(3) NOT NULL DEFAULT '0',
  `saniye` int(5) NOT NULL DEFAULT '0',
  `sebep` varchar(50) NOT NULL,
  `islem` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oyuncular`
--

CREATE TABLE `oyuncular` (
  `id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(129) NOT NULL,
  `skorz` int(10) NOT NULL DEFAULT '0',
  `para` int(11) NOT NULL DEFAULT '10000',
  `bankpara` bigint(15) NOT NULL DEFAULT '0',
  `ip` varchar(20) NOT NULL,
  `olum` int(10) NOT NULL DEFAULT '1',
  `oldurme` int(10) NOT NULL DEFAULT '1',
  `kayittarih` varchar(20) NOT NULL,
  `songiris` varchar(20) NOT NULL,
  `ulvl` int(5) NOT NULL DEFAULT '0',
  `rehber` int(3) NOT NULL DEFAULT '0',
  `viplevel` int(5) NOT NULL DEFAULT '0',
  `vipsure` int(20) NOT NULL DEFAULT '0',
  `soygun` int(10) NOT NULL DEFAULT '0',
  `warn` int(3) NOT NULL DEFAULT '0',
  `kelepce` int(3) NOT NULL DEFAULT '0',
  `mute` int(5) NOT NULL DEFAULT '0',
  `tlevel` int(5) NOT NULL DEFAULT '0',
  `tutuklama` int(10) NOT NULL DEFAULT '0',
  `tutuklanma` int(10) NOT NULL DEFAULT '0',
  `kelepceleme` int(10) NOT NULL DEFAULT '0',
  `kelepcelenme` int(10) NOT NULL DEFAULT '0',
  `onlinesure` int(50) NOT NULL DEFAULT '0',
  `envanterC4` int(30) NOT NULL DEFAULT '0',
  `envanterIP` int(30) NOT NULL DEFAULT '0',
  `envanterPara` int(30) NOT NULL DEFAULT '0',
  `hapissure` int(10) NOT NULL DEFAULT '0',
  `aranmaseviyesi` int(10) NOT NULL DEFAULT '0',
  `serial` text NOT NULL,
  `oyundurum` int(1) NOT NULL DEFAULT '0',
  `cete` int(11) NOT NULL DEFAULT '-1',
  `ceterutbe` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `eroin` int(11) NOT NULL DEFAULT '0',
  `tskgorev` int(50) NOT NULL DEFAULT '0',
  `polisbansure` int(50) NOT NULL DEFAULT '0',
  `mitbansure` int(50) NOT NULL DEFAULT '0',
  `tskbansure` int(50) NOT NULL DEFAULT '0',
  `pohbansure` int(50) NOT NULL DEFAULT '0',
  `cetelider` int(11) NOT NULL DEFAULT '-1',
  `ceteyardimci` int(11) NOT NULL DEFAULT '-1',
  `nameban` int(1) NOT NULL DEFAULT '0',
  `gettime` int(10) NOT NULL DEFAULT '0',
  `dj` int(1) NOT NULL DEFAULT '0',
  `gunlukonline` int(11) NOT NULL DEFAULT '0',
  `vipbakiye` int(11) NOT NULL DEFAULT '0',
  `isimhakki` int(1) NOT NULL DEFAULT '0',
  `eskinick` varchar(25) NOT NULL DEFAULT 'Yok',
  `guvenliksifresi` varchar(10) NOT NULL DEFAULT 'yok',
  `eskiip` varchar(20) NOT NULL DEFAULT '0.0.0.0',
  `okbansure` int(50) NOT NULL DEFAULT '0',
  `cetesure` int(50) NOT NULL DEFAULT '0',
  `sdegisti` int(1) NOT NULL DEFAULT '0',
  `envanterOT` int(11) NOT NULL DEFAULT '0',
  `envanterSiringa` int(11) NOT NULL DEFAULT '0',
  `yenipara` int(11) NOT NULL DEFAULT '0',
  `klevel` int(11) NOT NULL DEFAULT '0',
  `isim` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `oyuncular`
--

INSERT INTO `oyuncular` (`id`, `name`, `sifre`, `skorz`, `para`, `bankpara`, `ip`, `olum`, `oldurme`, `kayittarih`, `songiris`, `ulvl`, `rehber`, `viplevel`, `vipsure`, `soygun`, `warn`, `kelepce`, `mute`, `tlevel`, `tutuklama`, `tutuklanma`, `kelepceleme`, `kelepcelenme`, `onlinesure`, `envanterC4`, `envanterIP`, `envanterPara`, `hapissure`, `aranmaseviyesi`, `serial`, `oyundurum`, `cete`, `ceterutbe`, `eroin`, `tskgorev`, `polisbansure`, `mitbansure`, `tskbansure`, `pohbansure`, `cetelider`, `ceteyardimci`, `nameban`, `gettime`, `dj`, `gunlukonline`, `vipbakiye`, `isimhakki`, `eskinick`, `guvenliksifresi`, `eskiip`, `okbansure`, `cetesure`, `sdegisti`, `envanterOT`, `envanterSiringa`, `yenipara`, `klevel`, `isim`) VALUES
(1, 'orxan', '2ccf4dfd7c9fc8ff00c054f1819b27a9', 0, 10000, 0, '', 1, 1, '', '', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, -1, '', 0, 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 'Yok', 'yok', '0.0.0.0', 0, 0, 0, 0, 0, 0, 0, 'orxan'),
(2, 'ali', '2ccf4dfd7c9fc8ff00c054f1819b27a9', 0, 10000, 0, '', 1, 1, '', '', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, -1, '', 0, 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0, 0, 0, 'Yok', 'yok', '0.0.0.0', 0, 0, 0, 0, 0, 0, 0, 'orxan');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `paraceza`
--

CREATE TABLE `paraceza` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `ceza` int(11) NOT NULL,
  `sebep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rekor`
--

CREATE TABLE `rekor` (
  `id` int(11) NOT NULL,
  `ip` varchar(32) NOT NULL,
  `tarih` varchar(20) NOT NULL,
  `date` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `silahdepolari`
--

CREATE TABLE `silahdepolari` (
  `id` int(11) NOT NULL,
  `posx` varchar(20) NOT NULL,
  `posy` varchar(20) NOT NULL,
  `posz` varchar(20) NOT NULL,
  `rotx` varchar(20) NOT NULL,
  `roty` varchar(20) NOT NULL,
  `rotz` varchar(20) NOT NULL,
  `owner` int(11) NOT NULL DEFAULT '-1',
  `price` int(11) NOT NULL DEFAULT '0',
  `kapasite` int(2) NOT NULL DEFAULT '0',
  `satilikprice` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetimkimlik`
--

CREATE TABLE `yonetimkimlik` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `kullaniciadi` varchar(20) NOT NULL,
  `sifre` varchar(20) NOT NULL,
  `level` int(5) NOT NULL DEFAULT '0',
  `ip` varchar(20) CHARACTER SET utf32 COLLATE utf32_turkish_ci NOT NULL DEFAULT '0',
  `gorevsuresi` int(20) NOT NULL DEFAULT '0',
  `songiris` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `araclar`
--
ALTER TABLE `araclar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ban`
--
ALTER TABLE `ban`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `cetearaclar`
--
ALTER TABLE `cetearaclar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ceteler`
--
ALTER TABLE `ceteler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `clientban`
--
ALTER TABLE `clientban`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `clienthesaplar`
--
ALTER TABLE `clienthesaplar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `evler`
--
ALTER TABLE `evler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hapisceza`
--
ALTER TABLE `hapisceza`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `islemler`
--
ALTER TABLE `islemler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `oyuncular`
--
ALTER TABLE `oyuncular`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Tablo için indeksler `paraceza`
--
ALTER TABLE `paraceza`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `rekor`
--
ALTER TABLE `rekor`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `silahdepolari`
--
ALTER TABLE `silahdepolari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetimkimlik`
--
ALTER TABLE `yonetimkimlik`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `araclar`
--
ALTER TABLE `araclar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `ban`
--
ALTER TABLE `ban`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `cetearaclar`
--
ALTER TABLE `cetearaclar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `ceteler`
--
ALTER TABLE `ceteler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `clientban`
--
ALTER TABLE `clientban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `clienthesaplar`
--
ALTER TABLE `clienthesaplar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `evler`
--
ALTER TABLE `evler`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `hapisceza`
--
ALTER TABLE `hapisceza`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `islemler`
--
ALTER TABLE `islemler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `oyuncular`
--
ALTER TABLE `oyuncular`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `paraceza`
--
ALTER TABLE `paraceza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `rekor`
--
ALTER TABLE `rekor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `silahdepolari`
--
ALTER TABLE `silahdepolari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `yonetimkimlik`
--
ALTER TABLE `yonetimkimlik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
