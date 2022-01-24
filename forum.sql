-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Oca 2022, 18:35:19
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
(29, '<p><strong>Bilgisayarınız yavaş çalışıyorsa, panik yapmayın.</strong><br><br><br><br><br><strong>Zaman içinde daha yavaş PC performansı, düzenli kullanımın tamamen normal bir yan etkisidir ve tam bir sabit diskten donanım arızasına kadar her şeyden kaynaklanabilir.</strong><br><br><strong>Ayrıca, bu hızlı ve basit temizlik ipuçlarıyla genellikle en azından biraz tersine çevrilebilir.</strong><br><br><strong>Peki bilgisayar hızlandırma yöntemleri nelerdir, bilgisayar nasıl hızlandırılır? İşte PC hızlandırma 2020 yöntemleri için tam kılavuzumuz</strong></p>', 24, '2022-01-24 15:44:33', 19),
(30, '<p><strong>Bilgisayarınız yavaş çalışıyorsa, panik yapmayın.</strong><br><br><br><br><br><strong>Zaman içinde daha yavaş PC performansı, düzenli kullanımın tamamen normal bir yan etkisidir ve tam bir sabit diskten donanım arızasına kadar her şeyden kaynaklanabilir.</strong><br><br><strong>Ayrıca, bu hızlı ve basit temizlik ipuçlarıyla genellikle en azından biraz tersine çevrilebilir.</strong><br><br><strong>Peki bilgisayar hızlandırma yöntemleri nelerdir, bilgisayar nasıl hızlandırılır? İşte PC hızlandırma 2020 yöntemleri için tam kılavuzumuz</strong></p>', 25, '2022-01-24 16:13:43', 19),
(31, '<p>deneme</p>', 26, '2022-01-24 16:14:26', 19),
(32, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Herkese merhaba, bu sene almış olmama rağmen bilgisayarım aşırı yavaşladı SSD olmasına rağmen sadece açılması 4-5 dk sürüyor siteler arasında geçiş yaparken bile takılıyor. Gereksiz bir sürü şeyi oyunlarımı vs sildim hala böyle. Dün gece güncelleme gelmişti onu yaptım daha da yavaşladı. Ne yapabilirim hızlanması için basit olarak anlatabilecek olan var mıdır? Modeli Monster Abra A5 V15.4</span></p>', 27, '2022-01-24 16:34:32', 14),
(33, '<p><mark class=\"marker-yellow\">Laptop almayı düşünüyorum, öneri yapabilir misiniz?</mark></p>', 28, '2022-01-24 16:37:20', 15),
(34, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Bilgisayarınız 32 ya da 64 bit olabilir. </span><strong>Bilgisayarın kaç bit olduğunu öğrenme</strong><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\"> ile bilgisayarınızın hangisini çalıştırdığını öğrenebilirsiniz.</span><br><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Bilgisayarın işlemcisinin bilgileri işleme şekli 32 ya da 64 bit ile ifade edilir. </span><strong>Windows 64 bit</strong><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\"> olması halinde daha etkili bir şekilde RAM işlenir. Windows 7,8 ve 10 kullanıcılarının bilgisayarları </span><strong>32 ya da 64 bit</strong><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\"> olabilir. Bilgisayarınızın hangisini çalıştırdığını öğrenmek için önce bilgisayarıma girin ve özellikleri açın. Sistem bölümünden sistem türünü seçin. Burada işletim sistemini görebilirsiniz.</span><br><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Daha fazla bellek ve güçlü güvenlik ihtiyacı olanlar için bilgisayarın 64 bit olması idealdir. Böylece bilgisayardan yüksek performans almak mümkündür. Eğer bir yazılımcıysanız ya da oyun severseniz 64 bit olması işinizi kolaylaştırır.</span></p>', 29, '2022-01-24 16:38:15', 19),
(35, '<figure class=\"image image_resized\" style=\"width:74.32%;\"><img src=\"https://teknoloji.org/wp-content/uploads/2021/04/Galaxy-Unpacked-28-Nisan-Tarihinde-Gerceklesecek-1024x576.png\"></figure><p>&nbsp;</p><p><a href=\"https://teknoloji.org/galaxy-unpacked-28-nisan-tarihinde-gerceklesecek/\">Galaxy Unpacked 28 Nisan Tarihinde Gerçekleşecek</a><br><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Apple’ın özel etkinliğinin açıklanmasının ardından Samsung da yeni bir Galaxy Unpacked etkinliği duyurdu. 2</span></p>', 30, '2022-01-24 16:40:52', 1),
(36, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Hangi telefonu kullanmaktasanız?</span><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Artıları/eksileri neler?</span><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Şu anki fiyatı ne kadar? </span><img class=\"image_resized\" style=\"width:22px;\" src=\"data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7\" alt=\":)\"><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Başka bir modele geçmek isteseniz hangi modeli seçersiniz?</span></p>', 31, '2022-01-24 16:42:10', 11),
(37, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Televizyon sektöründe bu iki markayı sıkça duyuyoruz ve bu markalar zaman zaman karşılaştırılıyor.&nbsp;</span></p>', 32, '2022-01-24 16:43:12', 11),
(38, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Apple, akıllı saat konusunda oldukça başarılı. Fakat yeni Apple Watch modelleri biraz cep yakabiliyorlar. Bundan dolayı özellikle ülkemizde birçok akıllı saat kullanıcısı, eski nesil akıllı saat modellerine yöneliyorlar. Bu noktada da en çok tercih edilen model Apple Watch Seri 3 oluyor. Ancak bu modelin biraz eski olması, bazı kişileri Apple Watch Seri 3 alınır mı sorusunu sorgulamaya itiyor.</span><br><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Öncelikle tasarım anlamında Apple Watch Seri 3\'ün hâlâ oldukça güncel ve göze hoş gelen bir tasarımının olduğunu söyleyebilirim. Fakat donanım anlamında saatin gerçekten artık günümüz teknolojisine göre zayıf kaldığını da belirtmeliyim. Fakat bir akıllı saatte yapılabilecek uygulamalar göz önüne alındığında, Apple Watch Seri 3 günlük kullanım için ideal olabilir. Bu noktada aslında Apple Watch Seri 3\'ün alınıp alınmayacağı kararı biraz kullanıcılara bağlı diyebilirim.</span><br><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Peki siz bu konu hakkında ne düşünüyorsunuz? Sizce Apple Watch Seri 3, hâlâ alınabilecek bir akıllı saat mi?</span></p>', 33, '2022-01-24 16:44:00', 11),
(39, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Nesnelerin internetinin kullandığı </span><strong>IoT cihazları</strong><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\"> </span><span style=\"background-color:rgb(254,254,254);color:rgb(51,51,51);\">akıllı giyilebilir cihazlar, akıllı şehir, akıllı ev ve akıllı ortam alanlarında kullanılmaktadır.</span><br><br><span style=\"color:rgb(51,51,51);\"><strong>IoT sistemleri kullanım</strong></span><span style=\"background-color:rgb(254,254,254);color:rgb(51,51,51);\"> alanlarından en göz önünde olanları ev ve bina sistemleridir. Akıllı ev sistemleri, güvenlik sistemleri, aydınlatma, yangın güvenlik sistemleri ya da ev eğlence sistemlerinde nesnelerin interneti kullanılmaktadır. Trafikte ise akıllı trafik, yol yardım, akıllı park, acil kurtarma gibi alanlarda kullanımı da hayatın içindendir.</span><br><br><span style=\"background-color:rgb(254,254,254);color:rgb(51,51,51);\">Ancak sadece bununla sınırlı değildir. Endüstri ve medikal alanlarında da <strong>IoT cihazları kullanım alanları</strong> oldukça fazladır. Akıllı makineler, denetleyiciler, sensörler, otomasyon ve güvenlik sistemleri, acil bildirim sistemleri, giyilebilir cihazlar gibi oldukça geniş alanlarda kullanılır. Özellikle elektrik endüstrisinde kullanımı gün geçtikçe artmaktadır.</span></p>', 34, '2022-01-24 16:45:21', 19),
(40, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">C# programlama dili C ve C++ etkileşimi ile türemiş olan diğer bir programlama dilidir. Diğer programlama dillerinden taşınabilir bir programlama dili olan Java ile benzerlik taşır.</span></p><figure class=\"image image_resized\" style=\"width:45.25%;\"><img src=\"https://birmilyonyazilimci.com/wp-content/uploads/2020/04/c-sharp-nedir.jpg\"></figure><p><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">C++ ile Visual Basic arasındaki tutarsızlığı gidermek için ortaya çıkan bu dil en gelişmiş dillerden biri olmayı başarmıştır. Tamamen nesne yönelimli bir programlama dilidir Nesneler sınıflar halinde yazıldıktan sonra programcı bu sınıfları sürükleyerek kodları yazmış olur. Gelişmiş derleyicisi sayesinde hata yapma ihtimali daha azdır. Sınıf ve söz dizilimi hataları yazılımcıya gösterilir ve böylece düzeltmesi sağlanır. C# ile programlama yapıyorsanız C ipucu ve hileleri ile süreci hızlandırabilirsiniz. Uzman yazılımcılar tarafından çokça tercih edilen bir dildir.</span></p><p>&nbsp;</p>', 35, '2022-01-24 16:48:39', 15),
(41, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">CSS ile gölge efekti sayesinde gölgeler siteye resim olarak eklenmez, kodlama ile eklenir. Bu durum siteniz için avantajlara sahiptir.</span><br>&nbsp;</p><ul><li><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Site tasarımı ve görsellik açısından gölge efektleri çokça kullanılır. Bu efektler eskiden gölge verilen alanların kesilerek resim olarak eklenmesi şeklinde yapılıyordu. Ancak bu durumda kodlama ve arama motorları için dezavantajdır. Ayrıca resimlerin boyutu yüksek olduğundan site için dezavantajdır. Tüm bu dezavantajlardan CSS ile gölge efekti ile yararlanabilirsiniz.</span><br>&nbsp;</li><li><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">CSS ile birlikte gelen text shadow özelliği ile photoshop uygulamalarındaki gibi bir gölge efekti vermek mümkündür. Text shadow ile bir veya birden fazla gölgelendirme yapmak mümkündür. gölgelerde uzaklık değerini ayarlayarak özgün çalışmalar yapılabilir.</span></li></ul>', 36, '2022-01-24 16:50:22', 12),
(42, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">HTML programcılar için temellerden biridir ve hakkında pek çok bilgiye sahip olunur. Ancak HTML o kadar geniş bir alandır ki bunları hala bilmediğinize eminiz.</span></p><figure class=\"image\"><img src=\"https://www.vargonen.com/blog/wp-content/uploads/2020/05/html-kodlama.jpg\"></figure><ul><li>Herhangi bir HTML eklentisine spe11check eklemeniz halinde yazım denetimi yapabilirsiniz. Metin girişi yaparken bu özellik işinizi oldukça kolaylaştırır.</li><li>İçerik kaynaklarınızın güvende olması çok önemlidir. Bu kaynakların başkasının eline geçmesini önlemek ya da zararlı yazılımlardan korumak için \"integrity tagı\" kullanabilirsiniz.</li><li>Köprü oluşturmak için \"target tagı\" kullanabilirsiniz. Bu sayede ekstra bir sayfa ya da hedefe geçiş sağlanır. İşte bu geçiş gönderme düğmeleri kullanılarak 4 farklı şekilde yapılabilir.</li><li>Ana \"div\" tagının içine \"hidden\" ekleyerek özelliklerin gömülü ya da izinsiz kullanımını önleyebilirsiniz.</li></ul>', 37, '2022-01-24 16:59:36', 12),
(43, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">HTML programcılar için temellerden biridir ve hakkında pek çok bilgiye sahip olunur. Ancak HTML o kadar geniş bir alandır ki bunları hala bilmediğinize eminiz.</span></p><p>&nbsp;</p><figure class=\"image image_resized\" style=\"width:54.44%;\"><img src=\"https://www.vargonen.com/blog/wp-content/uploads/2020/05/html-kodlama.jpg\"></figure><p>&nbsp;</p><ul><li>Herhangi bir HTML eklentisine spe11check eklemeniz halinde yazım denetimi yapabilirsiniz. Metin girişi yaparken bu özellik işinizi oldukça kolaylaştırır.</li><li>İçerik kaynaklarınızın güvende olması çok önemlidir. Bu kaynakların başkasının eline geçmesini önlemek ya da zararlı yazılımlardan korumak için \"integrity tagı\" kullanabilirsiniz.</li><li>Köprü oluşturmak için \"target tagı\" kullanabilirsiniz. Bu sayede ekstra bir sayfa ya da hedefe geçiş sağlanır. İşte bu geçiş gönderme düğmeleri kullanılarak 4 farklı şekilde yapılabilir.</li><li>Ana \"div\" tagının içine \"hidden\" ekleyerek özelliklerin gömülü ya da izinsiz kullanımını önleyebilirsiniz.</li></ul>', 38, '2022-01-24 17:00:21', 12),
(44, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">HTML programcılar için temellerden biridir ve hakkında pek çok bilgiye sahip olunur. Ancak HTML o kadar geniş bir alandır ki bunları hala bilmediğinize eminiz.</span><br>&nbsp;</p><ul><li>Herhangi bir HTML eklentisine spe11check eklemeniz halinde yazım denetimi yapabilirsiniz. Metin girişi yaparken bu özellik işinizi oldukça kolaylaştırır.</li><li>İçerik kaynaklarınızın güvende olması çok önemlidir. Bu kaynakların başkasının eline geçmesini önlemek ya da zararlı yazılımlardan korumak için \"integrity tagı\" kullanabilirsiniz.</li><li>Köprü oluşturmak için \"target tagı\" kullanabilirsiniz. Bu sayede ekstra bir sayfa ya da hedefe geçiş sağlanır. İşte bu geçiş gönderme düğmeleri kullanılarak 4 farklı şekilde yapılabilir.</li><li>Ana \"div\" tagının içine \"hidden\" ekleyerek özelliklerin gömülü ya da izinsiz kullanımını önleyebilirsiniz.</li></ul>', 39, '2022-01-24 17:00:49', 12),
(45, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">React açık kaynak olan, kullanıcı arayüzleri yaratmak için kullanılan bir Javascript kütüphanesidir. Arayüz yaratmak adına yeniden kullanılabilen bileşenler, </span><strong>component </strong><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">adı verilen yapılar kullanılmaktadır.</span></p>', 40, '2022-01-24 17:03:00', 2),
(46, '<p>Oyun programlamaya başlamak istiyorum, nereden başlamalıyım?</p>', 41, '2022-01-24 17:04:05', 2),
(47, '<p>Kullanıcıdan gün.ay.yıl formatında alınan doğum tarihiyle bugünün farkı hesaplanıp saniye cinsinden ekrana yazılıyor.</p><p>Kullanılan modüller: datetime</p><pre><code class=\"language-python\">from datetime import *\r\n\r\nbirth = datetime.strptime(raw_input(\"Your birth date (d.m.Y): \"), \"%d.%m.%Y\")\r\nage = datetime.now() - birth\r\n\r\nprint(\"You survived {} seconds.\".format(age.total_seconds()))</code></pre>', 42, '2022-01-24 17:05:43', 15),
(48, '<p>Merhaba, discord.js kullanarak discord botu geliştirmek istiyorum.</p><p>&nbsp;</p><p><span class=\"text-big\" style=\"background-color:hsl(0, 0%, 30%);color:hsl(0, 0%, 100%);font-family:\'Courier New\', Courier, monospace;\"><i>&nbsp;Bunun için bir kaynak mevcut mu?</i></span></p>', 43, '2022-01-24 17:07:48', 15),
(49, '<blockquote><p>Hangisi?</p></blockquote><p>&nbsp;</p><figure class=\"media\"><oembed url=\"https://youtu.be/6jvK_jLIRo4\"></oembed></figure><p>&nbsp;</p>', 44, '2022-01-24 17:11:45', 13),
(51, '<p><a href=\"https://youtu.be/8QOE7g7D9J8\">https://youtu.be/8QOE7g7D9J8</a></p>', 45, '2022-01-24 17:13:12', 13),
(53, '<p>Ev Elektroniği</p>', 46, '2022-01-24 17:15:01', 16),
(54, '<p style=\"margin-left:0px;\">Oyun kolu temizliği yapılarak konsolların daha hızlı ve verimli çalışması sağlanabilir.<br><br>Oyun oynarken bir şeyler atıştırmak oyun konsollarında görünen kirlere neden olur. Bir de konsolun içinde sizin göremediğini bir kirlilik oluşur. İşte bu kirlilik zamanla performans düşüklüğüne neden olabilir. Oyun oynarken en çok elinizden düşmeyen oyun kolları kirlenir. Bu durumda temizlik şarttır.<br><br>Oyun kolu temizliği için öncelikle kürdan, pamuk, deterjan ve pamuklu bir bez ayarlamanız yeterli olur. Temizlik yaparken sıvı kullanmamaya ekstra özen gösterin. Çünkü elektronik olan bu cihazlarda sorun yaşayabilirsiniz.<br><br>Temizliğe başlarken mutlaka oyun kolunu sökün ve elektrik gelmediğinden emin olun. Sonrasında tüm köşe ve girintileri naif bir şekilde temizleyin. Yağlı yerler varsa deterjanlı bezle silin.</p>', 47, '2022-01-24 17:16:13', 1),
(56, '<h2><strong>Bu konu altından dizi film önerilerinizi paylaşabilirsiniz!</strong></h2>', 49, '2022-01-24 17:18:43', 18),
(57, '<p>Yararlı bilgiler için teşekkürler!</p>', 25, '2022-01-24 17:19:12', 18),
(58, '<p>Yararlı bilgiler için teşekkürler!</p>', 25, '2022-01-24 17:19:39', 18),
(59, '<p>Yararlı bilgiler için teşekkürler!</p>', 25, '2022-01-24 17:19:41', 18),
(61, '<p><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">selam,</span><br><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Açılış süresinin 4-5 dakikaya çıkması SSD\'den kaynaklanıyordur bence.</span><br><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">İşletim sisteminin yüklü olduğu diskin en azından %10 - %15\'inin boş olmasını tavsiye ederim.</span><br><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Aşağıda yer alan kodu windows komut satırına yazarak çalıştırır mısın?</span></p><p style=\"margin-left:0px;\"><br>Code:</p><pre><code class=\"language-plaintext\">chkdsk c: /r</code></pre><p><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Bu kod diskinde yer alan bad sectorleri düzeltmeye çalışacaktır.</span><br><br><span style=\"background-color:rgb(254,254,254);color:rgb(20,20,20);\">Kodu çalıştırdıktan sonra herhangi bir iyileşme gerçekleşmez ise; chkdsk c: şeklinde çalıştırarak, çıkan sonucu buradan paylaşabilir misin?</span></p>', 27, '2022-01-24 17:23:36', 1),
(62, '<p>Monster ve Excalibur dışındaki markaları araştırabilirsin youtube\'da <a href=\"https://www.youtube.com/channel/UCz59CqPhJgCf3aUdDitjzYQ\">Cihaz.Tv </a>kanalı bu içerikler için mükemmel</p>', 28, '2022-01-24 17:24:27', 1),
(63, '<p>Iphone</p>', 31, '2022-01-24 17:24:55', 1),
(64, '<p>Bilgilendirici yazı için teşekkürler!</p>', 39, '2022-01-24 17:30:51', 1),
(65, '<p>Bilgilendirici yazı için teşekkürler!</p>', 39, '2022-01-24 17:30:54', 1),
(66, '<p>Bilgilendirici yazı için teşekkürler!Bilgilendirici yazı için teşekkürler!Bilgilendirici yazı için teşekkürler!</p>', 36, '2022-01-24 17:31:01', 1),
(67, '<p>Bilgilendirici yazı için teşekkürler!</p>', 36, '2022-01-24 17:31:03', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL,
  `ticket_topic_name` varchar(255) NOT NULL,
  `ticket_message_content` text NOT NULL,
  `ticket_user_id` int(11) NOT NULL,
  `ticket_user_name` varchar(255) NOT NULL,
  `ticket_created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `ticket_topic_name`, `ticket_message_content`, `ticket_user_id`, `ticket_user_name`, `ticket_created_date`) VALUES
(3, 'Test Talep Gönderisi', 'Test Talep GönderisiTest Talep Gönderisi Test Talep Gönderisi Test Talep Gönderisi Test Talep Gönderisi\r\nTest Talep GönderisiTest Talep Gönderisi\r\nTest Talep GönderisiTest Talep GönderisiTest Talep Gönderisi\r\nTest Talep Gönderisi', 12, 'Emrecan', '2022-01-24 17:28:54'),
(4, 'Test Talep Gönderisi2', 'Test Talep Gönderisi2 Test Talep Gönderisi2Test Talep Gönderisi2\r\nTest Talep Gönderisi2Test Talep Gönderisi2Test Talep Gönderisi2\r\nTest Talep Gönderisi2\r\n\r\n\r\nTest Talep Gönderisi2', 13, 'oguzhan', '2022-01-24 17:29:10');

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
(25, '14 Bilgisayar Hızlandırma ve FPS Arttırma Yöntemi', '14-bilgisayar-hizlandirma-ve-fps-arttirma-yontemi', 4, '2022-01-24 16:13:43', 19),
(27, 'Bilgisayarım Aşırı Yavaşladı, Ne Yapabilirim?', 'bilgisayarim-asiri-yavasladi-ne-yapabilirim', 4, '2022-01-24 16:34:32', 14),
(28, 'Bilgisayar Önerisi', 'bilgisayar-onerisi', 4, '2022-01-24 16:37:20', 15),
(29, 'Bilgisayarın Kaç Bit Olduğu Nasıl Öğrenilir?', 'bilgisayarin-kac-bit-oldugu-nasil-ogrenilir', 4, '2022-01-24 16:38:15', 19),
(30, 'Galaxy Unpacked 28 Nisan Tarihinde Gerçekleşecek', 'galaxy-unpacked-28-nisan-tarihinde-gerceklesecek', 5, '2022-01-24 16:40:52', 1),
(31, 'Hangi Marka Telefon Kullanıyorsunuz?', 'hangi-marka-telefon-kullaniyorsunuz', 5, '2022-01-24 16:42:10', 11),
(32, 'Lg mi ? Samsung mu ?', 'lg-mi-samsung-mu', 6, '2022-01-24 16:43:12', 11),
(33, 'Apple Watch Seri 3 Hala Alınır mı?', 'apple-watch-seri-3-hala-alinir-mi', 7, '2022-01-24 16:44:00', 11),
(34, 'En İyi IoT Cihazları', 'en-iyi-iot-cihazlari', 8, '2022-01-24 16:45:21', 19),
(35, 'C# ile Neler Yapılabilir?', 'c-ile-neler-yapilabilir', 9, '2022-01-24 16:48:39', 15),
(36, 'CSS İle Gölge Efekti Nasıl Verilir?', 'css-ile-golge-efekti-nasil-verilir', 10, '2022-01-24 16:50:22', 12),
(39, 'HTML Hakkında Bilmedikleriniz', 'html-hakkinda-bilmedikleriniz', 10, '2022-01-24 17:00:49', 12),
(40, 'React Nedir? Neden Bu Kadar Popüler?', 'react-nedir-neden-bu-kadar-populer', 11, '2022-01-24 17:03:00', 2),
(41, 'Oyun Programlama Hakkında Soru', 'oyun-programlama-hakkinda-soru', 12, '2022-01-24 17:04:05', 2),
(42, 'Python ile kaç saniye yaşadığını bulma', 'python-ile-kac-saniye-yasadigini-bulma', 9, '2022-01-24 17:05:43', 15),
(43, 'Discord.js ile discord botu geliştirmek', 'discordjs-ile-discord-botu-gelistirmek', 13, '2022-01-24 17:07:48', 15),
(44, 'Peugeot 508 vs Peugeot 208', 'peugeot-508-vs-peugeot-208', 14, '2022-01-24 17:11:45', 13),
(45, 'Benzine Veda! Tesla Model 3 ile Elektrikli Otomobil Dünyasına Merhaba!', 'benzine-veda-tesla-model-3-ile-elektrikli-otomobil-dunyasina-merhaba', 15, '2022-01-24 17:13:12', 13),
(46, 'Ev Elektroniği', 'ev-elektronigi', 16, '2022-01-24 17:15:01', 16),
(47, 'Oyun kolu nasıl temizlenir?', 'oyun-kolu-nasil-temizlenir', 17, '2022-01-24 17:16:13', 1),
(49, 'Dizi & Film Önerileri', 'dizi-film-onerileri', 18, '2022-01-24 17:18:43', 18);

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
(1, 'Admin', 'admin@admin.com', 'admin', '2021-12-05 18:34:11'),
(2, 'DenemeKullanici', 'testuser1@test.com', 'test', '2021-12-06 13:02:40'),
(3, 'TestUser', 'testuser2@test.com', 'test2', '2021-12-10 11:12:13'),
(11, 'Tekno', 'tekno@tekno.com', 'tekno', '2022-01-24 15:37:26'),
(12, 'Emrecan', 'emrecan@gmail.com', 'emrecan123', '2022-01-24 15:38:19'),
(13, 'oguzhan', 'oguzhan@gmail.com', 'oguzhan123', '2022-01-24 15:38:50'),
(14, 'pdetonator', 'pdetonator@outlook.com', 'pdetonator', '2022-01-24 15:39:17'),
(15, 'umut', 'umut@gmail.com', 'umut321', '2022-01-24 15:40:05'),
(16, 'BannedUser16', 'random@random.com', 'NgU&fTA~>4&h!PwE', '2022-01-24 15:41:08'),
(17, 'randomuser1', 'randomuser1@rd.com', 'rdasd', '2022-01-24 15:41:23'),
(18, 'randomuser2', 'randomuser2@random.com', 'randomuser2', '2022-01-24 15:41:45'),
(19, 'pcuzmani', 'pcuzmani@pcuzmani.com', 'pcuzmani123', '2022-01-24 15:42:38');

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
-- Tablo için indeksler `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

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
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Tablo için AUTO_INCREMENT değeri `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
