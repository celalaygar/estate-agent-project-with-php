-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2017, 13:36:42
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `evkirala`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `adi` varchar(555) CHARACTER SET utf8 NOT NULL,
  `keywords` varchar(555) COLLATE utf8_turkish_ci NOT NULL,
  `kisaaciklama` varchar(555) COLLATE utf8_turkish_ci NOT NULL,
  `name` varchar(555) COLLATE utf8_turkish_ci NOT NULL,
  `smtpserver` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `smtpport` int(11) NOT NULL,
  `smtpemail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda` text COLLATE utf8_turkish_ci NOT NULL,
  `iletisim` text COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `pinterest` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `adi`, `keywords`, `kisaaciklama`, `name`, `smtpserver`, `smtpport`, `smtpemail`, `password`, `adres`, `sehir`, `tel`, `fax`, `email`, `hakkimizda`, `iletisim`, `facebook`, `twitter`, `instagram`, `pinterest`) VALUES
(1, 'satılık kiralık iş yeri, ofis, ev', 'satılık kiralık iş yeri, ofis, ev', 'satılık kiralık iş yeri, ofis, ev', 'celal', 'ssl://smtp.googlemail.com', 465, 'celalaygar@gmail.com', 'celal371', 'ankara', 'ankara', '05555555', '12354668', 'aygarcelal@gmail.com', '<p><strong>Doğuş Oto Pazarlama ve Ticaret A.Ş</strong></p>\r\n\r\n<p>Doğuş Oto, temsil ettiği toplam 6 marka için İstanbul, Ankara ve Bursa illerinde yeni araç, ikinci el araç, yedek parça, aksesuar satışı ve satış sonrası hizmetleriyle beraber müşterilerine, sigorta ve finansman hizmetleri sunmaktadır. Doğuş Oto; VW Binek Araç, VW Ticari Araç, Audi, Porsche, SEAT ve Skoda markalarının yetkili satış ve servis hizmetlerini yürütmektedir. Doğuş Oto, DOD yetkili satıcısı olarak ikinci el satışı da yapmaktadır.</p>\r\n\r\n<p><s><em><strong>Toplam 200.000 m⊃2; alan üzerinde, 6 bölgede,  34 Yetkili Satış ve 31 Servis noktasında ve 1.700’ü aşkın çalışanıyla faaliyetlerini sürdüren Doğuş Oto, gücü ve istikrarı ile sektördeki öncü varlığını sürdürmektedir.</strong></em></s></p>\r\n\r\n<p>Doğuş Oto&#39;nun misyonu, temsil ettiği binek ve ticari araç markalarının kendisine tanımlanmış bölgelerinde, satış ve satış sonrası hizmetlerini en yüksek kalitede sunmaktadır.</p>\r\n', '<h1>Bize Ulaşın</h1>\r\n\r\n<p><strong>İletişim Yayınları Merkez</strong><br>\r\nAdres: Binbirdirek Meydanı Sokak<br>\r\nİletişim Han 3, Cağaloğlu/Fatih, 34122 İstanbul<br>\r\n<a href="http://www.iletisim.com.tr/bize-ulasin#harita">Harita için tıklayın</a><br>\r\n<strong>Tel </strong>: (0212) 516 22 60<br>\r\n<strong>Faks </strong>: (0212) 516 12 58<br>\r\n<strong>E-Posta </strong>: iletisim@iletisim.com.tr</p>\r\n\r\n<p><strong>İletişim Ankara Bürosu </strong><br>\r\nAdres: Bayındır 2 Sokak, 51/15, Kızılay/Çankaya, 06640<br>\r\nTel:(0312) 425 36 00 - 425 20 71<br>\r\nFaks (0312) 425 14 18</p>\r\n', 'qqq', 'qqq', 'qqq', 'qqq');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `evler`
--

CREATE TABLE `evler` (
  `id` int(11) NOT NULL,
  `turu` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `adi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `kisaaciklama` varchar(555) COLLATE utf8_turkish_ci NOT NULL,
  `uzunaciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(555) COLLATE utf8_turkish_ci NOT NULL,
  `sfiyat` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `otarih` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `evler`
--

INSERT INTO `evler` (`id`, `turu`, `kategori_id`, `adi`, `durum`, `kisaaciklama`, `uzunaciklama`, `keywords`, `resim`, `sfiyat`, `otarih`) VALUES
(4, 5, 6, 'Villa', 'Satılık', 'acil Satılık ev karabük yenicede cok acil', '<p>ankara demetevlerde acil kiralık pazarlık payı yoktur. tek fiyattır göz ardı edilmeyecektir. ciddi olanlar arasın. Sadece ciddi alıcılar ile iletşime geçilecektir.</p>\r\n\r\n<p><strong>3+1 biçimindedir evimiz.Evimiz doğalgazlı olup 3 odası 1 salonu 1mutfak 1 banyo  mevcuttur. acil ihtiyaçtan satılıktır.</strong></p>\r\n\r\n<p><strong>ELVANKENTİN PARLAYAN YILDIZI</strong></p>\r\n\r\n<p><strong>HUZUR ve GÜVEN</strong></p>\r\n\r\n<p><strong>İÇERİSİNDE KALİTELİ BİR YAŞAM SAHİP</strong></p>\r\n\r\n<p><strong>OLMAK İSTEYENLERİN YENİ</strong></p>\r\n\r\n<p><strong>ADRESİ PARK </strong></p>\r\n', 'kiralık ev, acil kiralık ev', '114.jpg', '55', '2016-12-05'),
(5, 3, 2, 'Rezidans', 'Satılık', 'ankara demetevlerde acil satılık dükkan', '<p>ÇEBİOĞLU&#39; dan YEŞİL MAHALLEDE TIP FAKÜLTESİ KARŞISINDA SATILIK İŞ YERLERİ</p>\r\n\r\n<p>ÇEBİOĞLU&#39; dan KAÇIRILMAYACAK BİR FIRSAT DAHA!!!!!!</p>\r\n\r\n<p>70 NOLU DÜKKAN İÇİN;</p>\r\n\r\n<hr>\r\n<p>69 ADET 1+1 DAİRE ALTINDA CAFE, RESTAURANT, PASTAHANE ve MARKET</p>\r\n\r\n<p>OLARAK KULLANABİLECEĞİNİZ FARKLI YAPILARDA ve BÜYÜKLÜKLERDE </p>\r\n\r\n<p>ÇEBİOĞLU&#39; dan YEŞİL MAHALLEDE TIP FAKÜLTESİ KARŞISINDA SATILIK İŞ YERLERİ</p>\r\n\r\n<p>ÇEBİOĞLU&#39; dan KAÇIRILMAYACAK BİR FIRSAT DAHA!!!!!!</p>\r\n\r\n<p>70 NOLU DÜKKAN İÇİN;</p>\r\n\r\n<hr>\r\n<p>69 ADET 1+1 DAİRE ALTINDA CAFE, RESTAURANT, PASTAHANE ve MARKET</p>\r\n\r\n<p>OLARAK KULLANABİLECEĞİNİZ FARKLI YAPILARDA ve BÜYÜKLÜKLERDE </p>\r\n\r\n<p>ÇEBİOĞLU&#39; dan YEŞİL MAHALLEDE TIP FAKÜLTESİ KARŞISINDA SATILIK İŞ YERLERİ</p>\r\n\r\n<p>ÇEBİOĞLU&#39; dan KAÇIRILMAYACAK BİR FIRSAT DAHA!!!!!!</p>\r\n\r\n<p>70 NOLU DÜKKAN İÇİN;</p>\r\n\r\n<hr>\r\n<p>69 ADET 1+1 DAİRE ALTINDA CAFE, RESTAURANT, PASTAHANE ve MARKET</p>\r\n\r\n<p>OLARAK KULLANABİLECEĞİNİZ FARKLI YAPILARDA ve BÜYÜKLÜKLERDE </p>\r\n\r\n<p>ÇEBİOĞLU&#39; dan YEŞİL MAHALLEDE TIP FAKÜLTESİ KARŞISINDA SATILIK İŞ YERLERİ</p>\r\n\r\n<p>ÇEBİOĞLU&#39; dan KAÇIRILMAYACAK BİR FIRSAT DAHA!!!!!!</p>\r\n\r\n<p>70 NOLU DÜKKAN İÇİN;</p>\r\n\r\n<hr>\r\n<p>69 ADET 1+1 DAİRE ALTINDA CAFE, RESTAURANT, PASTAHANE ve MARKET</p>\r\n\r\n<p>OLARAK KULLANABİLECEĞİNİZ FARKLI YAPILARDA ve BÜYÜKLÜKLERDE </p>\r\n\r\n<p>OLACAK İŞ YERLERİ SUNUYORUZ....</p>\r\n\r\n<p>DETAYLI BİLGİ İÇİN SATIŞ OFİSİMİZE BEKLİYORUZ...</p>\r\n\r\n<p><strong>DİĞER İLANLARIMIZ İÇİN LÜTFEN </strong></p>\r\n\r\n<p><strong>OFİSİMİZİ ZİYARET EDİNİZ.</strong></p>\r\n', 'Satılık dükkan acil ihtiyaçtan satılıktır.', 'imaqqqqges.jpg', '135', '2016-12-05'),
(11, 7, 1, 'Ev', 'Kiralık', 'aydın kuşadasında kiralık daire', '<p><s>3+1 DAIREMIZ TERASLI VE KILERLIDIR.    </s></p>\r\n\r\n<p>INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE CO</p>\r\n\r\n<p><s>3+1 DAIREMIZ TERASLI VE KILERLIDIR.    </s></p>\r\n\r\n<p>INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE CO</p>\r\n\r\n<p><s>3+1 DAIREMIZ TERASLI VE KILERLIDIR.    </s></p>\r\n\r\n<p>INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE CO</p>\r\n\r\n<p><s>3+1 DAIREMIZ TERASLI VE KILERLIDIR.    </s></p>\r\n\r\n<p>INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIRBINANIN DIS YALITIMI MANTOLAMASI YAPILMISTIRBINA ONUNDE COCUK PARKI VARDIRDAIRE 3 VE 4 KATINDADIR INA ONUNDE CO</p>\r\n', 'daire', 'strahle_7000_18-680x395.jpg', '178', '2016-12-05'),
(8, 1, 7, 'Rezidans', 'Satılık', 'cok acil satılık villa', '<p><strong><em>Çok acil ihtiyaçtan satılık villamız vardır.</em></strong></p>\r\n\r\n<p><strong><em>Aydın kuş adasında sahile 100 metre yürüme mesafesindedir</em></strong>. ilgili olan müşteriler aramasına özen göstereleim.</p>\r\n\r\n<p>Çok acil fiyatta indirim olmayacaktır. acil satılık villamiz vardır. <strong>7+2 yapısındadır yani 7 oda 2 salon 3 banyo ve 2 balkon</strong> içermektedir.ilgili olanlar arasın. Acil ihtiyaçtan satılıktır.. tek ricamiz sadece ciddi olan insanlar arasın</p>\r\n', 'villa', 'images1.jpg', '55', '2016-12-05'),
(10, 1, 7, 'Rezidans', 'Kiralık', 'ankara dikmende dublex kiralık daire', '<p>ankara dikmende dublex kiralık daire bardır ilgilenenlere duyurulur uygun fiyattadır.</p>\r\n\r\n<p>Ankara’nın hayata kapısını açtığı nokta Eryaman’da konumlandırılmış özel bir yaşam… </p>\r\n\r\n<p><strong> AKIN 688 Eryaman</strong> , konfor ve fonksiyonelliği, modern yaşamın, hızlı akışıyla uyum içerisinde harmanlayıp, bu hızlı akış içerisinde kendinize ayıracağınız zamanlara değer katıyor. Estetik ve fonksiyonelliğin ön plana çıktığı modern konutlarımızda lokasyonun avantajlarını kullanacak ve şehrin kalbini hissedeceksiniz. Evinizin belkide en güzel köşesi olan balkonunuzda kendinize ve sevdiklerinize küçük bir kahve molası verin. Keyifli Bir Yaşam, Karlı Bir Yatırım.</p>\r\n\r\n<p> Eryaman’ın çehresini değiştirecek olan <strong>AKIN 688 Eryaman</strong>, Göksupark ve Metroya yürüme mesafesinde olması ile de farkını ortaya koyuyor. <strong>AKIN 688 Eryaman</strong>, karmaşadan ve büyük alanların yarattığı yorgunluktan uzakta, aradığınız herşeyi tam olarak karşılayacak şekilde, huzurdan ilham alarak tasarlandı.</p>\r\n\r\n<p>ankara dikmende dublex kiralık daire bardır ilgilenenlere duyurulur uygun fiyattadır.</p>\r\n\r\n<p>Ankara’nın hayata kapısını açtığı nokta Eryaman’da konumlandırılmış özel bir yaşam… </p>\r\n\r\n<p><strong> AKIN 688 Eryaman</strong> , konfor ve fonksiyonelliği, modern yaşamın, hızlı akışıyla uyum içerisinde harmanlayıp, bu hızlı akış içerisinde kendinize ayıracağınız zamanlara değer katıyor. Estetik ve fonksiyonelliğin ön plana çıktığı modern konutlarımızda lokasyonun avantajlarını kullanacak ve şehrin kalbini hissedeceksiniz. Evinizin belkide en güzel köşesi olan balkonunuzda kendinize ve sevdiklerinize küçük bir kahve molası verin. Keyifli Bir Yaşam, Karlı Bir Yatırım.</p>\r\n\r\n<p> Eryaman’ın çehresini değiştirecek olan <strong>AKIN 688 Eryaman</strong>, Göksupark ve Metroya yürüme mesafesinde olması ile de farkını ortaya koyuyor. <strong>AKIN 688 Eryaman</strong>, karmaşadan ve büyük alanların yarattığı yorgunluktan uzakta, aradığınız herşeyi tam olarak karşılayacak şekilde, huzurdan ilham alarak tasarlandı.</p>\r\n\r\n<p>ankara dikmende dublex kiralık daire bardır ilgilenenlere duyurulur uygun fiyattadır.</p>\r\n\r\n<p>Ankara’nın hayata kapısını açtığı nokta Eryaman’da konumlandırılmış özel bir yaşam… </p>\r\n\r\n<p><strong> AKIN 688 Eryaman</strong> , konfor ve fonksiyonelliği, modern yaşamın, hızlı akışıyla uyum içerisinde harmanlayıp, bu hızlı akış içerisinde kendinize ayıracağınız zamanlara değer katıyor. Estetik ve fonksiyonelliğin ön plana çıktığı modern konutlarımızda lokasyonun avantajlarını kullanacak ve şehrin kalbini hissedeceksiniz. Evinizin belkide en güzel köşesi olan balkonunuzda kendinize ve sevdiklerinize küçük bir kahve molası verin. Keyifli Bir Yaşam, Karlı Bir Yatırım.</p>\r\n\r\n<p> Eryaman’ın çehresini değiştirecek olan <strong>AKIN 688 Eryaman</strong>, Göksupark ve Metroya yürüme mesafesinde olması ile de farkını ortaya koyuyor. <strong>AKIN 688 Eryaman</strong>, karmaşadan ve büyük alanların yarattığı yorgunluktan uzakta, aradığınız herşeyi tam olarak karşılayacak şekilde, huzurdan ilham alarak tasarlandı.</p>\r\n\r\n<p>ankara dikmende dublex kiralık daire bardır ilgilenenlere duyurulur uygun fiyattadır.</p>\r\n\r\n<p>Ankara’nın hayata kapısını açtığı nokta Eryaman’da konumlandırılmış özel bir yaşam… </p>\r\n\r\n<p><strong> AKIN 688 Eryaman</strong> , konfor ve fonksiyonelliği, modern yaşamın, hızlı akışıyla uyum içerisinde harmanlayıp, bu hızlı akış içerisinde kendinize ayıracağınız zamanlara değer katıyor. Estetik ve fonksiyonelliğin ön plana çıktığı modern konutlarımızda lokasyonun avantajlarını kullanacak ve şehrin kalbini hissedeceksiniz. Evinizin belkide en güzel köşesi olan balkonunuzda kendinize ve sevdiklerinize küçük bir kahve molası verin. Keyifli Bir Yaşam, Karlı Bir Yatırım.</p>\r\n\r\n<p> Eryaman’ın çehresini değiştirecek olan <strong>AKIN 688 Eryaman</strong>, Göksupark ve Metroya yürüme mesafesinde olması ile de farkını ortaya koyuyor. <strong>AKIN 688 Eryaman</strong>, karmaşadan ve büyük alanların yarattığı yorgunluktan uzakta, aradığınız herşeyi tam olarak karşılayacak şekilde, huzurdan ilham alarak tasarlandı.</p>\r\n\r\n<p>ankara dikmende dublex kiralık daire bardır ilgilenenlere duyurulur uygun fiyattadır.</p>\r\n\r\n<p>Ankara’nın hayata kapısını açtığı nokta Eryaman’da konumlandırılmış özel bir yaşam… </p>\r\n\r\n<p><strong> AKIN 688 Eryaman</strong> , konfor ve fonksiyonelliği, modern yaşamın, hızlı akışıyla uyum içerisinde harmanlayıp, bu hızlı akış içerisinde kendinize ayıracağınız zamanlara değer katıyor. Estetik ve fonksiyonelliğin ön plana çıktığı modern konutlarımızda lokasyonun avantajlarını kullanacak ve şehrin kalbini hissedeceksiniz. Evinizin belkide en güzel köşesi olan balkonunuzda kendinize ve sevdiklerinize küçük bir kahve molası verin. Keyifli Bir Yaşam, Karlı Bir Yatırım.</p>\r\n\r\n<p> Eryaman’ın çehresini değiştirecek olan <strong>AKIN 688 Eryaman</strong>, Göksupark ve Metroya yürüme mesafesinde olması ile de farkını ortaya koyuyor. <strong>AKIN 688 Eryaman</strong>, karmaşadan ve büyük alanların yarattığı yorgunluktan uzakta, aradığınız herşeyi tam olarak karşılayacak şekilde, huzurdan ilham alarak tasarlandı.</p>\r\n', 'dublex daire', 'ev2.jpg', '90', '2016-12-05'),
(9, 2, 2, 'Ofis', 'Kiralık', 'Acil kiralık ofis ankara yenimahalle', '<p>Çok acil kiralık ofis ankara yenimahalle ilçesinde demetevler mahallesinde ofisimiz vardır.</p>\r\n', 'Ofis', '57c7fa6166b5378c272ea3920ba886521.jpg', '155', '2016-12-05'),
(12, 6, 1, 'Ev', 'Satılık', 'acil satılık ofis izmir karşıyakada', '<p>acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.acil satılık oisimiz vvardır izmir karşıyaka illçesinde ilgililere duyrulur pazarlık payı vardır.</p>\r\n', 'satılık ofis', 'lg3.jpg', '75', '2016-12-05'),
(16, 3, 5, 'Daire', 'Satılık', 'satılık dükkan pazarlık payı var', '<p>acil satılık dükkan pazarlık payı var. meraklılarına duyrulur.</p>\r\n\r\n<p>ankara dikmende dublex kiralık daire bardır ilgilenenlere duyurulur uygun fiyattadır.</p>\r\n\r\n<p>Ankara’nın hayata kapısını açtığı nokta Eryaman’da konumlandırılmış özel bir yaşam… </p>\r\n\r\n<p><strong> AKIN 688 Eryaman</strong> , konfor ve fonksiyonelliği, modern yaşamın, hızlı akışıyla uyum içerisinde harmanlayıp, bu hızlı akış içerisinde kendinize ayıracağınız zamanlara değer katıyor. Estetik ve fonksiyonelliğin ön plana çıktığı modern konutlarımızda lokasyonun avantajlarını kullanacak ve şehrin kalbini hissedeceksiniz. Evinizin belkide en güzel köşesi olan balkonunuzda kendinize ve sevdiklerinize küçük bir kahve molası verin. Keyifli Bir Yaşam, Karlı Bir Yatırım.</p>\r\n\r\n<p> Eryaman’ın çehresini değiştirecek olan <strong>AKIN 688 Eryaman</strong>, Göksupark ve Metroya yürüme mesafesinde olması ile de farkını ortaya koyuyor. <strong>AKIN 688 Eryaman</strong>, karmaşadan ve büyük alanların yarattığı yorgunluktan uzakta, aradığınız herşeyi tam olarak karşılayacak şekilde, huzurdan ilham alarak tasarlandı.</p>\r\n\r\n<p>ankara dikmende dublex kiralık daire bardır ilgilenenlere duyurulur uygun fiyattadır.</p>\r\n\r\n<p>Ankara’nın hayata kapısını açtığı nokta Eryaman’da konumlandırılmış özel bir yaşam… </p>\r\n\r\n<p><strong> AKIN 688 Eryaman</strong> , konfor ve fonksiyonelliği, modern yaşamın, hızlı akışıyla uyum içerisinde harmanlayıp, bu hızlı akış içerisinde kendinize ayıracağınız zamanlara değer katıyor. Estetik ve fonksiyonelliğin ön plana çıktığı modern konutlarımızda lokasyonun avantajlarını kullanacak ve şehrin kalbini hissedeceksiniz. Evinizin belkide en güzel köşesi olan balkonunuzda kendinize ve sevdiklerinize küçük bir kahve molası verin. Keyifli Bir Yaşam, Karlı Bir Yatırım.</p>\r\n\r\n<p> Eryaman’ın çehresini değiştirecek olan <strong>AKIN 688 Eryaman</strong>, Göksupark ve Metroya yürüme mesafesinde olması ile de farkını ortaya koyuyor. <strong>AKIN 688 Eryaman</strong>, karmaşadan ve büyük alanların yarattığı yorgunluktan uzakta, aradığınız herşeyi tam olarak karşılayacak şekilde, huzurdan ilham alarak tasarlandı.</p>\r\n\r\n<p>ankara dikmende dublex kiralık daire bardır ilgilenenlere duyurulur uygun fiyattadır.</p>\r\n\r\n<p>Ankara’nın hayata kapısını açtığı nokta Eryaman’da konumlandırılmış özel bir yaşam… </p>\r\n\r\n<p><strong> AKIN 688 Eryaman</strong> , konfor ve fonksiyonelliği, modern yaşamın, hızlı akışıyla uyum içerisinde harmanlayıp, bu hızlı akış içerisinde kendinize ayıracağınız zamanlara değer katıyor. Estetik ve fonksiyonelliğin ön plana çıktığı modern konutlarımızda lokasyonun avantajlarını kullanacak ve şehrin kalbini hissedeceksiniz. Evinizin belkide en güzel köşesi olan balkonunuzda kendinize ve sevdiklerinize küçük bir kahve molası verin. Keyifli Bir Yaşam, Karlı Bir Yatırım.</p>\r\n\r\n<p> Eryaman’ın çehresini değiştirecek olan <strong>AKIN 688 Eryaman</strong>, Göksupark ve Metroya yürüme mesafesinde olması ile de farkını ortaya koyuyor. <strong>AKIN 688 Eryaman</strong>, karmaşadan ve büyük alanların yarattığı yorgunluktan uzakta, aradığınız herşeyi tam olarak karşılayacak şekilde, huzurdan ilham alarak tasarlandı.</p>\r\n\r\n<p> </p>\r\n', 'satılık dükkan', 'dsc03954_635830978876622964_b.JPG', '115', '2016-12-05'),
(17, 2, 2, 'Ev', 'Satılık', 'acil satılık işyerimiz vardır.', '<p>acil satılık işyerimiz vardır. Ankara demetevlerde acil satılık işyerimiz vardır. fiyatında indirim yapılabilir ama saçmalamamak kaydıyla.</p>\r\n\r\n<p><strong>250 metre kare 1 tuvalet 1 mutfak 1 banyosu vardır.</strong></p>\r\n', 'İşyeri Satılıktır', 'dukkan3.jpg', '85', '2016-12-05'),
(19, 7, 5, 'Ev', 'Kiralık', 'acil kiralık ev karabük 100.yılda cok acil kiralıktır.', '<p>acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.acil kiralık ev karabük 100.yılda cok acil kiralıktır.</p>\r\n', 'acil kiralık ev', '331.jpg', '55', '0000-00-00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `evler_resim`
--

CREATE TABLE `evler_resim` (
  `id` int(11) NOT NULL,
  `ev_id` int(11) NOT NULL,
  `resim` varchar(222) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `evler_resim`
--

INSERT INTO `evler_resim` (`id`, `ev_id`, `resim`) VALUES
(4, 4, 'Houseboat.jpg'),
(3, 4, 'ev8.jpg'),
(27, 11, '1234441.jpg'),
(6, 5, 'image44_ashx.jpg'),
(7, 5, 'image111s.jpg'),
(8, 5, 'ugrakdan_dikmende_kiralik_35_m2_dukkan_i_yeri_2690133452895729196.jpg'),
(22, 4, 'MTA0NDM3OD-royal-park-teras-evlerde-255-bin-tlden-baslayan-fiyatlar2.jpg'),
(11, 7, 'ev4.jpg'),
(12, 7, 'maket-ev_.jpg'),
(14, 9, '123444.jpg'),
(19, 8, '1141.jpg'),
(20, 8, 'images2.jpg'),
(23, 4, '1142.jpg'),
(25, 8, '33.jpg'),
(26, 8, 'i11111mages.jpg'),
(28, 11, '20130708110802_240182.jpg'),
(29, 11, 'home-office-3-582x312.jpg'),
(31, 11, 'oda12-1.jpg'),
(39, 10, 'lg31.jpg'),
(40, 12, '1234442.jpg'),
(34, 9, 'oda12-11.jpg'),
(35, 9, 'ofis_20.jpg'),
(38, 10, 'images3.jpg'),
(37, 10, '20130708110802_240183.jpg'),
(43, 12, 'ofis-dekor-10.jpg'),
(42, 12, 'oda12-12.jpg'),
(44, 12, 'strahle_7000_18-680x3951.jpg'),
(45, 17, 'ima1123ges1.jpg'),
(46, 17, 'ugrakdan_dikmende_kiralik_35_m2_dukkan_i_yeri_26901334528957291961.jpg'),
(55, 5, 'exenistanbul1.jpg'),
(54, 5, '5667642_q.jpg'),
(50, 9, 'oda14-3.jpg'),
(51, 9, 'oda30-1.jpg'),
(52, 17, 'techno5.jpg'),
(53, 17, 'po-214.jpg'),
(56, 5, 'imaqqqqges1.jpg'),
(57, 5, 'Levissi-2-Villa-2_tonemapped-830x554.jpg'),
(58, 19, ',PjcSFfzUkk6GLht7bAAYUA.jpg'),
(59, 19, ',tT8x8i_BMEiCJg1i9MX1pA.jpg'),
(60, 19, 'ima2222ges.jpg'),
(61, 19, 'Levissi-2-Villa-2_tonemapped-830x5541.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int(11) NOT NULL,
  `ust_id` int(11) NOT NULL,
  `adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(10) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `ust_id`, `adi`, `aciklama`, `keywords`, `resim`, `durum`) VALUES
(1, 0, 'Ev', '', '', '', ''),
(2, 0, 'Ofis', '', '', '', ''),
(5, 1, 'Daire', '', '', '', ''),
(6, 1, 'Villa', '', '', '', ''),
(7, 1, 'Rezidans', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` varchar(22) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(22) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `adsoyad`, `email`, `sifre`, `yetki`, `durum`) VALUES
(1, 'celal aygar', 'celal.aygar@gmail.com', 'celal371', 'admin', 'onaylı'),
(2, 'celal uysal', 'celaluyuy@gmail.com', 'celal1cc', 'satış', 'onaylı'),
(3, 'fatih uygar', 'ffatih@mynet.com', 'fatih371', 'Stok', 'Beklemede');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `tel` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `konu` varchar(100) COLLATE utf8_swedish_ci DEFAULT NULL,
  `mesaj` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  `durum` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `adsoyad`, `email`, `tel`, `konu`, `mesaj`, `durum`, `tarih`) VALUES
(67, 'cece', 'celal.aygar@gmail.com', '0544444444', 'mesaj gonderılıyor', 'mesaj gonderılıyormesaj gonderılıyormesaj gonderılıyormesaj gonderılıyormesaj gonderılıyor', NULL, '2017-01-04 11:52:53'),
(68, 'cece', 'celal.aygar@gmail.com', '0544444444', 'mesaj gonderılıyor', 'mesaj gonderılıyormesaj gonderılıyormesaj gonderılıyormesaj gonderılıyormesaj gonderılıyor', NULL, '2017-01-04 11:53:11'),
(69, 'celal aygar', 'celal.aygar@gmail.com', '055333555555', 'mesaj gonderılıyor', 'mesaj gonderılıyormesaj gonderılıyormesaj gonderılıyormesaj gonderılıyormesaj gonderılıyormesaj gonderılıyor', NULL, '2017-01-04 12:28:20'),
(70, 'celal aygar', 'celal.aygar@gmail.com', '055333555555', 'mesaj gonderılıyor', 'mesaj gonderılıyormesaj gonderılıyormesaj gonderılıyormesaj gonderılıyormesaj gonderılıyormesaj gonderılıyor', NULL, '2017-01-04 12:28:51'),
(72, 'celal aygar', 'celal.aygar@gmail.com', '55555555', 'mesaj', 'mesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesaj', NULL, '2017-01-04 17:41:12'),
(73, 'celal aygar', 'celal.aygar@gmail.com', '55555555', 'mesaj', 'mesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesaj', NULL, '2017-01-04 17:42:06'),
(74, 'celal aygar', 'celal.aygar@gmail.com', '55555555', 'mesaj', 'mesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesaj', NULL, '2017-01-04 17:42:23'),
(76, 'celal aygar', 'celal.aygar@gmail.com', '55555555', 'mesaj', 'mesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesajmesaj', NULL, '2017-01-04 17:43:06'),
(79, 'celal aygar', 'celal.aygar@gmail.com', '055333555555', 'ssl://smtp.gmail.com', 'ssl://smtp.gmail.comssl://smtp.gmail.com', NULL, '2017-01-04 17:55:25'),
(80, 'celal aygar', 'celal.aygar@gmail.com', '055333555555', 'ssl://smtp.gmail.com', 'ssl://smtp.gmail.comssl://smtp.gmail.com', NULL, '2017-01-04 17:56:24'),
(81, 'celal aygar', 'celal.aygar@gmail.com', '055333555555', 'ssl://smtp.gmail.com', 'ssl://smtp.gmail.comssl://smtp.gmail.com', NULL, '2017-01-04 17:56:36'),
(82, 'celal aygar', 'aygarcelal@gmail.com', '055333555555', 'mesaj gonderılıyor', 'mesaj gonderılıyormesaj gonderılıyormesaj gonderılıyor', NULL, '2017-01-04 18:03:45');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `telefon` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `sifre` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `yetki` int(11) DEFAULT NULL,
  `durum` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `il` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`id`, `adsoyad`, `email`, `telefon`, `sifre`, `yetki`, `durum`, `adres`, `il`) VALUES
(1, 'ayşe kargaa', 'ayse@mynet.com', '55555555', '1234', 1, 'Yeni', 'yuzuncu yıl mahallesi no 142', 'karabük2'),
(2, 'mustafa ak', 'mustak@mynet.com', '1234445555', '123', 1, 'Aktif', 'demetevler 12. cadde no 46/2', 'ankara'),
(3, 'celal aygar', 'celal.aygar@gmail.com', '05447778899', 'celal371', 1, 'Yeni', 'karşıyaka ilçesi yıldız mahallesi', 'izmir');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `id` int(11) NOT NULL,
  `musteri_id` int(11) DEFAULT '0',
  `urun_id` int(11) DEFAULT NULL,
  `adet` int(11) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`id`, `musteri_id`, `urun_id`, `adet`, `tarih`) VALUES
(30, 1, 16, 3, '2017-01-12 12:43:21'),
(29, 1, 4, 1, '2017-01-12 12:43:11'),
(28, NULL, 4, 1, '2017-01-12 12:41:16'),
(24, 3, 10, 1, '2017-01-11 20:39:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `id` int(11) NOT NULL,
  `musteri_id` int(11) DEFAULT NULL,
  `tarih` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tutar` float DEFAULT NULL,
  `odemesekli` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `odemedurumu` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `spiarisdurumu` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `il` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `tel` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adsoyad` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `musteri_id`, `tarih`, `ip`, `tutar`, `odemesekli`, `odemedurumu`, `spiarisdurumu`, `adres`, `il`, `tel`, `adsoyad`) VALUES
(1, 3, NULL, NULL, 775, 'kredi kartı', 'odendi', NULL, 'karşıyaka ilçesi yıldız mahallesi', 'izmir', NULL, 'celal aygar'),
(2, 1, NULL, NULL, 835, 'kredi kartı', 'odendi', NULL, 'yuzuncu yıl mahallesi no 14', 'karabük', NULL, 'ayşe kaygı'),
(3, 1, NULL, NULL, 275, 'kredi kartı', 'odendi', NULL, 'yuzuncu yıl mahallesi no 14', 'karabük', NULL, 'ayşe kaygı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_urunler`
--

CREATE TABLE `siparis_urunler` (
  `id` int(11) NOT NULL,
  `musteri_id` int(11) DEFAULT NULL,
  `siparis_id` int(11) DEFAULT NULL,
  `urun_id` int(11) DEFAULT NULL,
  `adet` int(11) DEFAULT NULL,
  `fiyat` float DEFAULT NULL,
  `tarih` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adi` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparis_urunler`
--

INSERT INTO `siparis_urunler` (`id`, `musteri_id`, `siparis_id`, `urun_id`, `adet`, `fiyat`, `tarih`, `adi`) VALUES
(1, 3, 1, 10, 3, 90, NULL, NULL),
(2, 3, 1, 12, 3, 75, NULL, NULL),
(3, 3, 1, 12, 3, 75, NULL, NULL),
(6, 1, 2, 10, 1, 90, NULL, NULL),
(7, 1, 2, 16, 6, 115, NULL, NULL),
(8, 1, 3, 4, 5, 55, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `turu`
--

CREATE TABLE `turu` (
  `id` int(11) NOT NULL,
  `adi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(555) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(55) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `turu`
--

INSERT INTO `turu` (`id`, `adi`, `aciklama`, `keywords`) VALUES
(1, 'apart daire', '', ''),
(2, 'iş ofisi', '', ''),
(3, 'home ofis', '', ''),
(4, 'rezidans', '', ''),
(5, 'yazlık', '', ''),
(6, 'stuüdyo evleri', '', ''),
(7, 'dublex daire', '', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `evler`
--
ALTER TABLE `evler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `evler_resim`
--
ALTER TABLE `evler_resim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `turu`
--
ALTER TABLE `turu`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `evler`
--
ALTER TABLE `evler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Tablo için AUTO_INCREMENT değeri `evler_resim`
--
ALTER TABLE `evler_resim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- Tablo için AUTO_INCREMENT değeri `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `turu`
--
ALTER TABLE `turu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
