-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 06 Agu 2020 pada 08.50
-- Versi Server: 5.5.64-MariaDB-1ubuntu0.14.04.1
-- Versi PHP: 7.3.3-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `anggun_monsa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `jabatan`) VALUES
(1, 'Suro Nurjati, S.Sn.', 'adminmonsa', 'adminmonsa', 'Admin'),
(8, 'Anita Angguntari', 'superanggun', '04af07ec8a09a5902c9419e0395621', 'Guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_agenda` varchar(50) NOT NULL,
  `judul_agenda` varchar(1000) NOT NULL,
  `keterangan_agenda` varchar(10000) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_artikel` date NOT NULL,
  `judul_artikel` varchar(1000) NOT NULL,
  `isi_artikel` varchar(10000) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `viewer` int(11) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `tanggal_artikel`, `judul_artikel`, `isi_artikel`, `gambar`, `viewer`) VALUES
(1, '2019-05-06', 'Ketahui 17 Bagian Sel Tumbuhan & Hewan serta Fungsinya', '<p>Unit dasar kehidupan adalah sel.</p>\r\n<p>Sel lantas bersama-sama membentuk organisme multiseluler atau satu sel yang menjadi organisme uniseluler.</p>\r\n<p>Setiap sel adalah unik dan memiliki fungsi dan fitur yang berbeda.</p>\r\n<p>Sel dibedakan menjadi sel eukariotik dan sel prokariotik.</p>\r\n<p>Sel prokariotik memuat organisme uniseluler yang membentuk kelompok terbesar organisme. Semua bakteri merupakan sel prokariotik dan memiliki bagian-bagian yang sederhana.</p>\r\n<p>Sel eukariotik, di sisi lain, merupakan bentuk sel yang lebih maju dan membentuk organisme multiseluler dan beberapa organisme uniseluler kompleks.</p>\r\n<p>&nbsp;</p>\r\n<p>Fungsi Sel</p>\r\n<p>Sel adalah struktur paling penting dari suatu organisme.</p>\r\n<p>&nbsp;</p>\r\n<p>Setiap jenis sel memiliki fungsi spesifik pada suatu organisme. Sel antara lain membantu mengatur gerakan air, nutrisi, serta membuang limbah keluar tubuh.</p>\r\n<p>&nbsp;</p>\r\n<p>Sel juga berisi kode kehidupan, yaitu DNA, yang mengkoordinasikan sintesi', 'Sel-Hewan-Tumbuhan4.jpg', 1),
(2, '2019-05-06', 'Fakta & Informasi Menarik tentang Junk Food', '<p>Kesadaran tentang efek berbahaya junk food semakin meningkat seiring lebih banyak orang menyadari pentingnya asupan diet sehat. Artikel ini hendak mengupas fakta dan infomasi tentang junk food sehingga kita lebih memahaminya.</p>\r\n<p>Apa itu Junk Food?</p>\r\n<p>Makanan yang mengandung sedikit nutrisi dan memiliki kandungan tinggi bahan berbahaya umumnya disebut sebagai junk food.</p>\r\n<p>Istilah &lsquo;junk food&rsquo; diciptakan oleh Michael Jacobson pada tahun 1972.</p>\r\n<p>Makanan cepat saji (fast food) dianggap sebagai junk food karena memiliki efek berbahaya bagi kesehatan.</p>\r\n<p>Anda akan kaget mengetahui jumlah gula dan bahan-bahan berbahaya lainnya yang dikonsumsi melalui junk food.</p>\r\n<p>Gula berlebihan dan obesitas yang menyertainya hanyalah salah satu dari aspek negatif konsumsi junk food.</p>\r\n<p>&nbsp;</p>\r\n<p>Fakta tentang Junk Food</p>\r\n<p>Berikut adalah fakta dan informasi tentang junk food:</p>\r\n<p>&nbsp;</p>\r\n<p>1. Junk food dikenal memiliki kadar gula tinggi. Sebuah kaleng minuman cola mengandung hingga 10 sendok teh gula.</p>\r\n<p>Itu sebab, orang yang sedang berusaha menurunkan berat badan harus berpikir dua kali sebelum menyeruput cola.</p>\r\n<p>Makanan lain yang mengandung jumlah gula tinggi termasuk cokelat, kue, biskuit, dll.</p>\r\n<p>2. Junk food cenderung mengandung mineral dan vitamin dalam jumlah rendah, sementara sarat dengan kalori.</p>\r\n<p>3. Kandungan oxycholesterol terlalu tinggi dalam junk food. Oxycholesterol adalah salah satu jenis kolesterol yang dalam asupan tinggi dapat meningkatkan kemungkinan serangan jantung.</p>\r\n<p>4. Gula yang tidak digunakan tubuh diubah menjadi lemak. Fakta ini membuat orang yang mengkonsumsi junk food secara teratur berisiko mengalami kelebihan berat badan.</p>\r\n<p>5. Jumlah perasa dan pemanis buatan yang digunakan dalam junk food yang dijual untuk anak-anak dua kali lipat dibandingkan pada makanan untuk orang dewasa. Hal ini dapat menyebabkan efek berbahaya pada anak-anak.</p>\r\n<p>6. Pewarna dan perasa yang hadir dalam junk food bertanggung jawab menyebabkan ruam, asma dan masalah lain seperti hiperaktif.</p>\r\n<p>7. Di Amerika Serikat, sekitar 12,5 juta anak-anak kelebihan berat badan. Konsumsi junk food merupakan salah satu penyebab utama di balik kasus ini.</p>\r\n<p>8. Berbagai makanan seperti keripik, kue, permen, muffin, makanan yang digoreng, dll, mengandung jumlah tinggi minyak terhidrogenasi dan lemak.</p>\r\n<p>Lemak trans atau minyak terhidrogenasi tidak memiliki fungsi apapun dalam tubuh dan bahkan bisa berakibat negatif untuk kesehatan.</p>\r\n<p>9. Jumlah garam berlebih yang hadir dalam junk food seperti keripik dan pretzel menyebabkan persentase natrium meningkat dalam tubuh.</p>\r\n<p>Jumlah tinggi natrium dalam tubuh akan menyebabkan peningkatan tekanan darah.</p>\r\n<p>10. Margin keuntungan yang diperoleh oleh perusahaan minuman ringan diperkirakan mencapai 97%.</p>\r\n<p>Dengan demikian, mungkin bagi mereka untuk melakukan iklan secara masif dan besar-besaran.</p>\r\n<p>11. Konsumsi junk bertanggung jawab untuk masalah kesehatan seperti kerusakan gigi, berbagai jenis kanker dan banyak penyakit lainnya, selain dari penyakit jantung, obesitas dan tekanan darah tinggi.</p>\r\n<p>12. Lemak yang hadir dalam junk food menyebabkan otak menuntut lebih banyak makanan. Efek ini dapat terjadi pada otak dalam jangka waktu lama.</p>\r\n<p>13. Pemasaran agresif produk junk food menjadi alasan utama banyak orang beralih ke produk-produk tersebut serta mengkonsumsinya secara teratur.</p>\r\n<p>14. Gula berlebih yang terkandung dalam junk food menyebabkan tingkat insulin tetap tinggi sehingga memicu masalah metabolik.</p>\r\n<p>&nbsp;</p>\r\n<p>Sumber: http://Amazine.co &ndash; Online Popular Knowledge</p>', 'makanan-junk-food-1024x1024.jpg', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `banner` varchar(10000) NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `banner`) VALUES
(1, 'GAPURA-min2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `judul_berita` varchar(1000) NOT NULL,
  `isi_berita` varchar(1000) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `viewer` int(11) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `id_tamu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tamu` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `saran` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12708 ;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id_tamu`, `nama_tamu`, `email`, `no_telp`, `saran`) VALUES
(-1, '1', 'sample@email.tst', '555-666-0606', '1'),
(1, '1', 'sample@email.tst', '555-666-0606', '1'),
(2, 'Anggun', 'anitaangguntari@gmail.com', '081802334701', 'Tampilan Website diperbaiki kembali'),
(3, 'Anggun', 'lollyfriezzy@yahoo.co.id', '081803950601', 'Websitenya lumayan bagus'),
(4, 'MarybirtyU', 'flormariarr@probbox.com ', '82741593347', '<a href="https://elimite2.com/">where to buy elimite cream over the counter</a> '),
(5, 'LisabirtyG', 'oretha@probbox.com ', '85896291169', '<a href="http://elimite2.com/">buy elimite cream</a> '),
(6, 'MarkbirtyA', 'ninamed74@probbox.com ', '82547762465', '<a href="https://elimite2.com/">where to buy elimite cream over the counter</a> '),
(7, 'PaulbirtyZ', 'kalmohdar@probbox.com ', '86812471236', '<a href="https://elimite2.com/">elimite cream generic</a> '),
(8, 'MarybirtyU', 'korritsema@probbox.com ', '84696536918', '<a href="https://elimite2.com/">generic elimite</a> '),
(9, 'LisabirtyG', 'sven1949@probbox.com ', '88133499643', '<a href="http://elimite2.com/">elimite drug</a> '),
(10, 'MarkbirtyA', 'mikedavis479@probbox.com ', '84784362751', '<a href="https://elimite2.com/">order elimite online</a> '),
(11, 'Haha', 'Haha@gmail.com', '694944', 'Haha'),
(12, 'ttlplUnoleUI', 'zqzltkki@oiltempof.icu', '83293517322', 'cbd pure  cbd oil  <a href="https://cbdoilnumber1.com">cbd oil charlotte''s web cbd oil  </a>  sunsoil cbd oil  cbd oil \r\n \r\ncbd oil  cbd oil  <a href=https://cbdoilnumber1.com>cbd oil </a>  cbd oil cbd oil online amazon  cbd oil'),
(13, '1', 'sample@email.tst', '555-666-0606', '1'),
(14, '1', 'response.write(9337028*9293599', '555-666-0606', '1'),
(15, '1', 'sample%40email.tst', '555-666-0606', '1'),
(16, '1', 'sample%40email.tst', '555-666-0606', '1'),
(17, '1', '''+response.write(9337028*92935', '555-666-0606', '1'),
(18, '1', '../../../../../../../../../../', '555-666-0606', '1'),
(19, '1', 'tqfkRd2b', '555-666-0606', '1'),
(20, '1', 'set|set&set', '555-666-0606', '1'),
(21, '1', '', '555-666-0606', '1'),
(22, '1', '"+response.write(9337028*92935', '555-666-0606', '1'),
(23, '1', '-1 OR 2+691-691-1=0+0+0+1 -- ', '555-666-0606', '1'),
(24, '1', '$(nslookup HOCPdCDp)', '555-666-0606', '1'),
(25, '1', 'sample@email.tst', '555-666-0606', '1'),
(26, '1', '../../../../../../../../../../', '555-666-0606', '1'),
(27, '1', '-1 OR 2+851-851-1=0+0+0+1', '555-666-0606', '1'),
(28, '1', 'sample@email.tst', '555-666-0606', '1'),
(29, '1', '12345''"\\''\\");|]*{\r\n<>''''????', '555-666-0606', '1'),
(30, '1', '&nslookup oeevRSjN&''\\"`0&nsloo', '555-666-0606', '1'),
(31, 'uF4l2nDy', 'sample@email.tst', '555-666-0606', '1'),
(32, '1', '..%2F..%2F..%2F..%2F..%2F..%2F', '555-666-0606', '1'),
(33, '1', 'sample@email.tst', '555-666-0606', '1'),
(34, '1', '-1'' OR 2+77-77-1=0+0+0+1 -- ', '555-666-0606', '1'),
(35, '1', 'sample@email.tst', '555-666-0606', '1'),
(36, '1', 'sample@email.tst', 'eqolNKrj', '1'),
(37, '1', '../../../../../../../../../../', '555-666-0606', '1'),
(38, '1', 'sample@email.tst', '555-666-0606', '1'),
(39, '1', '-1'' OR 2+152-152-1=0+0+0+1 or ', '555-666-0606', '1'),
(40, '1', 'sample@email.tst', '555-666-0606', '1'),
(41, '1', 'sample@email.tst', '555-666-0606', '1'),
(42, '1', 'sample@email.tst', '555-666-0606', 'QHQtVkUW'),
(43, 'response.write(9730602*9335895)', 'sample@email.tst', '555-666-0606', '1'),
(44, '1', '-1" OR 2+776-776-1=0+0+0+1 -- ', '555-666-0606', '1'),
(45, '1', 'sample@email.tst', '555-666-0606', '1'),
(46, '1', '..%2F..%2F..%2F..%2F..%2F..%2F', '555-666-0606', '1'),
(47, '1', '${9999895+9999670}', '555-666-0606', '1'),
(12345, '1', 'sample@email.tst', '555-666-0606', '1'),
(12346, '1', 'http://some-inexistent-website', '555-666-0606', '1'),
(12347, '1', 'if(now()=sysdate(),sleep(6),0)', '555-666-0606', '1'),
(12348, '''+response.write(9730602*9335895)+''', 'sample@email.tst', '555-666-0606', '1'),
(12349, '1', '/../..//../..//../..//../..//.', '555-666-0606', '1'),
(12350, 'set|set&set', 'sample@email.tst', '555-666-0606', '1'),
(12351, '1', 'sample@email.tst', '555-666-0606', '1'),
(12352, '1', '1some_inexistent_file_with_lon', '555-666-0606', '1'),
(12353, '"+response.write(9730602*9335895)+"', 'sample@email.tst', '555-666-0606', '1'),
(12354, '1', '(select(0)from(select(sleep(6)', '555-666-0606', '1'),
(12355, '1', '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./', '555-666-0606', '1'),
(12356, '${9999349+9999125}', 'sample@email.tst', '555-666-0606', '1'),
(12357, '$(nslookup 73aamjnH)', 'sample@email.tst', '555-666-0606', '1'),
(12358, '1', 'Http://testasp.vulnweb.com/t/f', '555-666-0606', '1'),
(12359, '', 'sample@email.tst', '555-666-0606', '1'),
(12360, '1', '1 waitfor delay ''0:0:9'' -- ', '555-666-0606', '1'),
(12361, '1', 'sample@email.tst', 'response.wri', '1'),
(12362, '1', 'sample@email.tst', '${10000370+9', '1'),
(12363, '1', '/etc/passwd', '555-666-0606', '1'),
(12364, '1', 'http://testasp.vulnweb.com/t/f', '555-666-0606', '1'),
(12365, '&nslookup 1Fzm21Cm&''\\"`0&nslookup 1Fzm21Cm&`''', 'sample@email.tst', '555-666-0606', '1'),
(12366, '12345''"\\''\\");|]*{\r\n<>''''????', 'sample@email.tst', '555-666-0606', '1'),
(12367, '1', 'sample@email.tst', '''+response.w', '1'),
(12368, '1', '%2fetc%2fpasswd', '555-666-0606', '1'),
(12369, '1', 'bLRBJbsa''; waitfor delay ''0:0:', '555-666-0606', '1'),
(12370, '1', 'sample@email.tst', '555-666-0606', '${10000322+9999646}'),
(12371, '1', 'testasp.vulnweb.com', '555-666-0606', '1'),
(12372, '1', 'sample@email.tst', 'set|set&set', '1'),
(12373, '1', 'sample@email.tst', '"+response.w', '1'),
(12374, '1', 'sample@email.tst', '555-666-0606', '1'),
(12375, '1', 'sample@email.tst', '$(nslookup G', '1'),
(12376, '1', 'u7gSOsTj'';select pg_sleep(9); ', '555-666-0606', '1'),
(12377, '1', '/.././.././.././.././.././../.', '555-666-0606', '1'),
(12378, '1', 'sample@email.tst', '555-666-0606', 'response.write(9337249*9508868)'),
(12379, '1', 'WQRMFRv3'');select pg_sleep(9);', '555-666-0606', '1'),
(12380, '1', '../..//../..//../..//../..//..', '555-666-0606', '1'),
(12381, '1', 'sample@email.tst', '&nslookup 6T', '1'),
(12382, '1', 'sample@email.tst', '', '1'),
(12383, '1', 'sample@email.tst', '555-666-0606', '''+response.write(9337249*9508868)+'''),
(12384, '1', 'sample@email.tst', '555-666-0606', '1'),
(12385, '1', 'sample@email.tst', '555-666-0606', 'set|set&set'),
(12386, '1', '../.../.././../.../.././../...', '555-666-0606', '1'),
(12387, '1', 'QR4V4gpH''));select pg_sleep(9)', '555-666-0606', '1'),
(12388, '1', 'sample@email.tst&n945392=v9553', '555-666-0606', '1'),
(12389, '1', 'sample@email.tst', '555-666-0606', '1'),
(12390, '1', 'sample@email.tst', '555-666-0606', '"+response.write(9337249*9508868)+"'),
(12391, '1', 'sample@email.tst', '555-666-0606', '$(nslookup CeyNx0Zd)'),
(12392, '1', '................etc/passwd', '555-666-0606', '1'),
(12393, '1', 'sample@email.tst', '12345''"\\''\\")', '1'),
(12394, '1', 'sample@email.tst', '555-666-0606', '1'),
(12395, '1', 'sample@email.tst', '555-666-0606', '1'),
(12396, '1', ')', '555-666-0606', '1'),
(12397, '1', 'invalid../../../../../../../..', '555-666-0606', '1'),
(12398, '1', 'sample@email.tst', '555-666-0606', '&nslookup LRPVxq87&''\\"`0&nslookup LRPVxq87&`'''),
(12399, 'http://some-inexistent-website.acu/some_inexistent', 'sample@email.tst', '555-666-0606', '1'),
(12400, '1', '!(()&&!|*|*|', '555-666-0606', '1'),
(12401, '1', 'sample@email.tst', '555-666-0606', '1'),
(12402, '1some_inexistent_file_with_long_name.jpg', 'sample@email.tst', '555-666-0606', '1'),
(12403, '1', 'sample@email.tst', '555-666-0606', ''),
(12404, '1&n907639=v923513', 'sample@email.tst', '555-666-0606', '1'),
(12405, 'Http://testasp.vulnweb.com/t/fit.txt', 'sample@email.tst', '555-666-0606', '1'),
(12406, '1', 'sample@email.tst', '555-666-0606', '12345''"\\''\\");|]*{\r\n<>''''????'),
(12407, '1', '^(#$!@#$)(()))******', '555-666-0606', '1'),
(12408, 'http://testasp.vulnweb.com/t/fit.txt?.jpg', 'sample@email.tst', '555-666-0606', '1'),
(12409, '1', 'file:///etc/passwd', '555-666-0606', '1'),
(12410, '1', 'sample@email.tst', '555-666-0606', '1'),
(12411, '1', 'sample@email.tst', '555-666-0606', '1'),
(12412, 'testasp.vulnweb.com', 'sample@email.tst', '555-666-0606', '1'),
(12413, '1', '/\\../\\../\\../\\../\\../\\../\\../e', '555-666-0606', '1'),
(12414, '1', '''"()', '555-666-0606', '1'),
(12415, '1', 'sample@email.tst', 'http://some-', '1'),
(12416, '1', 'WEB-INF/web.xml', '555-666-0606', '1'),
(12417, '1', 'sample@email.tst', '555-666-0606', '1&n920819=v923616'),
(12418, '1', ';print(md5(acunetix_wvs_securi', '555-666-0606', '1'),
(12419, '1', 'sample@email.tst', '555-666-0606', '1'),
(12420, '1', 'sample@email.tst', '1some_inexis', '1'),
(12421, '1', '/WEB-INF/web.xml', '555-666-0606', '1'),
(12422, '1', 'sample@email.tst', '555-666-0606', '1'),
(12423, '1', 'sample@email.tst', '555-666-0606', '1'),
(12424, '1', 'sample@email.tst', 'Http://testa', '1'),
(12425, '1', ''';print(md5(acunetix_wvs_secur', '555-666-0606', '1'),
(12426, '1', 'WEB-INF\\web.xml', '555-666-0606', '1'),
(12427, ')', 'sample@email.tst', '555-666-0606', '1'),
(12428, '1', 'sample@email.tst', '555-666-0606', '1'),
(12429, '1', 'sample@email.tst', 'http://testa', '1'),
(12430, '1', '";print(md5(acunetix_wvs_secur', '555-666-0606', '1'),
(12431, '''"()', 'sample@email.tst', '555-666-0606', '1'),
(12432, '1', 'sample@email.tst', '555-666-0606', '1'),
(12433, '!(()&&!|*|*|', 'sample@email.tst', '555-666-0606', '1'),
(12434, '1', 'http://testasp.vulnweb.com/t/x', '555-666-0606', '1'),
(12435, '1', '${@print(md5(acunetix_wvs_secu', '555-666-0606', '1'),
(12436, '1', 'sample@email.tst', '555-666-0606', '1'),
(12437, '1', 'sample@email.tst', '555-666-0606', '1'),
(12438, '1', 'sample@email.tst', 'testasp.vuln', '1'),
(12439, '1', 'sample@email.tst', '555-666-0606', '1'),
(12440, '^(#$!@#$)(()))******', 'sample@email.tst', '555-666-0606', '1'),
(12441, '1', '${@print(md5(acunetix_wvs_secu', '555-666-0606', '1'),
(12442, '1', 'sample@email.tst', '555-666-0606', '1'),
(12443, '1', 'sample@email.tst', '555-666-0606', 'http://some-inexistent-website.acu/some_inexistent_file_with_long_name?.jpg'),
(12444, 'http://testasp.vulnweb.com/t/xss.html?%00.jpg', 'sample@email.tst', '555-666-0606', '1'),
(12445, '1', 'sample@email.tst', '555-666-0606', '1'),
(12446, '1', 'sample@email.tst', ')', '1'),
(12447, '1', 'sample@email.tst', '''"()', '1'),
(12448, '1', 'sample@email.tst', '555-666-0606', '1'),
(12449, '1', 'sample@email.tst', '555-666-0606', '1some_inexistent_file_with_long_name.jpg'),
(12450, '1', 'sample@email.tst', '!(()&&!|*|*|', '1'),
(12451, '1', 'sample@email.tst', '555-666-0606', '1'),
(12452, '1', 'sample@email.tst', 'http://testa', '1'),
(12453, '1', 'sample@email.tst', '555-666-0606', '1'),
(12454, '1', 'sample@email.tst', '^(#$!@#$)(()', '1'),
(12455, '1', 'sample@email.tst', '555-666-0606', '1'),
(12456, '1', 'sample@email.tst', '555-666-0606', 'http://testasp.vulnweb.com/t/xss.html?%00.jpg'),
(12457, '1', 'sample@email.tst', '555-666-0606', '1'),
(12458, '1', 'sample@email.tst', '555-666-0606', 'Http://testasp.vulnweb.com/t/fit.txt'),
(12459, '1', 'sample@email.tst', '555-666-0606', ')'),
(12460, '1', 'sample@email.tst', '555-666-0606', '1'),
(12461, '1', 'sample@email.tst', '555-666-0606', '''"()'),
(12462, '1', 'tambah_aksi', '555-666-0606', '1'),
(12463, '1', 'sample@email.tst', '555-666-0606', '1'),
(12464, '1', 'sample@email.tst', '555-666-0606', '1'),
(12465, '1', 'sample@email.tst', '555-666-0606', 'http://testasp.vulnweb.com/t/fit.txt?.jpg'),
(12466, '1', 'sample@email.tst', '555-666-0606', '!(()&&!|*|*|'),
(12467, '1', 'sample@email.tst', '555-666-0606', '1'),
(12468, '1', 'tambah_aksi', '555-666-0606', '1'),
(12469, '1', 'http://hitOpH3FNRCfW.bxss.me/', '555-666-0606', '1'),
(12470, '1', 'sample@email.tst', '555-666-0606', '1'),
(12471, '1', 'sample@email.tst', '555-666-0606', 'testasp.vulnweb.com'),
(12472, '1', 'sample@email.tst', '555-666-0606', '^(#$!@#$)(()))******'),
(12473, ';print(md5(acunetix_wvs_security_test));', 'sample@email.tst', '555-666-0606', '1'),
(12474, '1', 'tambah_aksi/.', '555-666-0606', '1'),
(12475, '1', 'sample@email.tst', '555-666-0606', '1'),
(12476, '1', 'sample@email.tst', '555-666-0606', '1'),
(12477, '1', '))))))))))))))))))))))))))))))', '555-666-0606', '1'),
(12478, ''';print(md5(acunetix_wvs_security_test));$a=''', 'sample@email.tst', '555-666-0606', '1'),
(12479, '1', '1''"', '555-666-0606', '1'),
(12480, '1', 'sample@email.tst', '555-666-0606', '1'),
(12481, '1', 'sample@email.tst', '555-666-0606', '1'),
(12482, '1', 'sample@email.tst', '555-666-0606', '1'),
(12483, 'http://hitHR0202jUvZ.bxss.me/', 'sample@email.tst', '555-666-0606', '1'),
(12484, '";print(md5(acunetix_wvs_security_test));$a="', 'sample@email.tst', '555-666-0606', '1'),
(12485, '1', '\\', '555-666-0606', '1'),
(12486, '1', 'sample@email.tst', '555-666-0606', '1'),
(12487, '1', 'sample@email.tst', '555-666-0606', '1'),
(12488, '1', 'sample@email.tst', '555-666-0606', '1'),
(12489, '))))))))))))))))))))))))))))))))))))))))))))))))))', 'sample@email.tst', '555-666-0606', '1'),
(12490, '${@print(md5(acunetix_wvs_security_test))}', 'sample@email.tst', '555-666-0606', '1'),
(12491, '1', '1', '555-666-0606', '1'),
(12492, '1', 'sample@email.tst', '555-666-0606', '1'),
(12493, '1', 'sample@email.tst', 'http://hitgT', '1'),
(12494, '1', 'sample@email.tst', '555-666-0606', '1'),
(12495, '1', 'sample@email.tst', '555-666-0606', '1'),
(12496, '1', 'sample@email.tst', '))))))))))))', '1'),
(12497, '1', '@@BFKwt', '555-666-0606', '1'),
(12498, '${@print(md5(acunetix_wvs_security_test))}\\', 'sample@email.tst', '555-666-0606', '1'),
(12499, '1', 'sample@email.tst', '555-666-0606', '1'),
(12500, '1', 'sample@email.tst', '555-666-0606', '1'),
(12501, '1', 'sample@email.tst', '555-666-0606', 'http://hitXkXjThWKrc.bxss.me/'),
(12502, 'tambah_aksi', 'sample@email.tst', '555-666-0606', '1'),
(12503, '1', 'sample@email.tst', '555-666-0606', ')))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))'),
(12504, '1', 'JyI=', '555-666-0606', '1'),
(12505, '1', 'sample@email.tst', ';print(md5(a', '1'),
(12506, '1', 'sample@email.tst', '555-666-0606', '1'),
(12507, '1', 'sample@email.tst', '555-666-0606', '1'),
(12508, 'tambah_aksi', 'sample@email.tst', '555-666-0606', '1'),
(12509, '1', 'sample@email.tst', ''';print(md5(', '1'),
(12510, '1', '''"', '555-666-0606', '1'),
(12511, '1', 'sample@email.tst', '555-666-0606', '1'),
(12512, '1', 'sample@email.tst', '555-666-0606', '1'),
(12513, '1', '/www.vulnweb.com', '555-666-0606', '1'),
(12514, 'tambah_aksi/.', 'sample@email.tst', '555-666-0606', '1'),
(12515, '1', '''"', '555-666-0606', '1'),
(12516, '1', '''''""', '555-666-0606', '1'),
(12517, '1', 'sample@email.tst', '";print(md5(', '1'),
(12518, '1', 'sample@email.tst', '555-666-0606', '1'),
(12519, '1', 'sample@email.tst', 'tambah_aksi', '1'),
(12520, '1', 'sample@email.tst', '555-666-0606', '1'),
(12521, '1', 'sample@email.tst', '555-666-0606', '1'),
(12522, '1', '<!--', '555-666-0606', '1'),
(12523, '1', 'sample@email.tst', '555-666-0606', '1'),
(12524, '1', '(select convert(int,CHAR(65)))', '555-666-0606', '1'),
(12525, '1', 'sample@email.tst', '${@print(md5', '1'),
(12526, '1', 'sample@email.tst', 'tambah_aksi', '1'),
(12527, '/www.vulnweb.com', 'sample@email.tst', '555-666-0606', '1'),
(12528, '1', 'sample@email.tst', '555-666-0606', '1'),
(12529, '1', 'sample@email.tst', '555-666-0606', '1'),
(12530, '1', 'sample@email.tst', '555-666-0606', '1'),
(12531, '1', 'sample@email.tst', '${@print(md5', '1'),
(12532, '1', 'sample@email.tst', '555-666-0606', '1'),
(12533, '1', 'sample@email.tst', '/www.vulnweb', '1'),
(12534, '1', 'sample@email.tst', 'tambah_aksi/', '1'),
(12535, '-1 OR 2+118-118-1=0+0+0+1 -- ', 'sample@email.tst', '555-666-0606', '1'),
(12536, '1', 'sample@email.tst', '555-666-0606', '1'),
(12537, '1', 'sample@email.tst', '555-666-0606', '1'),
(12538, '1', 'sample@email.tst', '555-666-0606', '1'),
(12539, '1', 'sample@email.tst', '555-666-0606', ';print(md5(acunetix_wvs_security_test));'),
(12540, '1', 'sample@email.tst', '555-666-0606', '1'),
(12541, '1', 'sample@email.tst', '555-666-0606', '/www.vulnweb.com'),
(12542, '1', 'sample@email.tst', '555-666-0606', 'tambah_aksi'),
(12543, '''"', 'sample@email.tst', '555-666-0606', '1'),
(12544, '../../../../../../../../../../etc/passwd', 'sample@email.tst', '555-666-0606', '1'),
(12545, '-1 OR 2+946-946-1=0+0+0+1', 'sample@email.tst', '555-666-0606', '1'),
(12546, '1', 'sample@email.tst', '555-666-0606', ''';print(md5(acunetix_wvs_security_test));$a='''),
(12547, '1', 'sample@email.tst', '555-666-0606', 'tambah_aksi'),
(12548, '1', 'sample@email.tst', '555-666-0606', '1'),
(12549, '1', 'sample%40email.tst''"()&%<acx><', '555-666-0606', '1'),
(12550, '<!--', 'sample@email.tst', '555-666-0606', '1'),
(12551, '-1'' OR 2+808-808-1=0+0+0+1 -- ', 'sample@email.tst', '555-666-0606', '1'),
(12552, '1', 'sample@email.tst', '555-666-0606', '1'),
(12553, '1', 'sample@email.tst', '555-666-0606', '";print(md5(acunetix_wvs_security_test));$a="'),
(12554, '1', 'sample@email.tst', '555-666-0606', 'tambah_aksi/.'),
(12555, '../../../../../../../../../../../../../../../proc/', 'sample@email.tst', '555-666-0606', '1'),
(12556, '1', 'sample@email.tst', '''"', '1'),
(12557, '1', 'sample@email.tst', '555-666-0606', '1'),
(12558, '-1'' OR 2+746-746-1=0+0+0+1 or ''OiEpChiw''=''', 'sample@email.tst', '555-666-0606', '1'),
(12559, '1', 'sample@email.tst', '555-666-0606', '${@print(md5(acunetix_wvs_security_test))}'),
(12560, '1', '''"()&%<acx><ScRiPt >bfz5(9128)', '555-666-0606', '1'),
(12561, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 'sample@email.tst', '555-666-0606', '1'),
(12562, '1', 'sample@email.tst', '<!--', '1'),
(12563, '1', 'sample@email.tst', '555-666-0606', '1'),
(12564, '-1" OR 2+814-814-1=0+0+0+1 -- ', 'sample@email.tst', '555-666-0606', '1'),
(12565, '1', 'sample@email.tst', '555-666-0606', '${@print(md5(acunetix_wvs_security_test))}\\'),
(12566, '../../../../../../../../../../etc/passwd.jpg', 'sample@email.tst', '555-666-0606', '1'),
(12567, '1', 'sample@email.tst', '555-666-0606', '''"'),
(12568, '1', 'sample@email.tst', '555-666-0606', '1'),
(12569, 'if(now()=sysdate(),sleep(6),0)/*''XOR(if(now()=sysd', 'sample@email.tst', '555-666-0606', '1'),
(12570, '1', 'sample%40email.tst_9643', '555-666-0606', '1'),
(12571, '1', 'sample@email.tst', '555-666-0606', '1'),
(12572, '1', 'sample@email.tst', '555-666-0606', '<!--'),
(12573, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 'sample@email.tst', '555-666-0606', '1'),
(12574, '(select(0)from(select(sleep(9)))v)/*''+(select(0)fr', 'sample@email.tst', '555-666-0606', '1'),
(12575, '-1; waitfor delay ''0:0:9'' -- ', 'sample@email.tst', '555-666-0606', '1'),
(12576, '/../..//../..//../..//../..//../..//etc/passwd.jpg', 'sample@email.tst', '555-666-0606', '1'),
(12577, '1''"', 'sample@email.tst', '555-666-0606', '1'),
(12578, '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', 'sample@email.tst', '555-666-0606', '1'),
(12579, '-1); waitfor delay ''0:0:9'' -- ', 'sample@email.tst', '555-666-0606', '1'),
(12580, '\\', 'sample@email.tst', '555-666-0606', '1'),
(12581, '/etc/passwd', 'sample@email.tst', '555-666-0606', '1'),
(12582, '1 waitfor delay ''0:0:9'' -- ', 'sample@email.tst', '555-666-0606', '1'),
(12583, '1', 'sample@email.tst', '555-666-0606', '1'),
(12584, 'Gp6YMqrG''; waitfor delay ''0:0:9'' -- ', 'sample@email.tst', '555-666-0606', '1'),
(12585, '%2fetc%2fpasswd', 'sample@email.tst', '555-666-0606', '1'),
(12586, '@@t7Wof', 'sample@email.tst', '555-666-0606', '1'),
(12587, '-1;select pg_sleep(9); -- ', 'sample@email.tst', '555-666-0606', '1'),
(12588, '/.././.././.././.././.././.././.././../etc/./passw', 'sample@email.tst', '555-666-0606', '1'),
(12589, 'JyI=', 'sample@email.tst', '555-666-0606', '1'),
(12590, '''"', 'sample@email.tst', '555-666-0606', '1'),
(12591, '../..//../..//../..//../..//../..//../..//../..//.', 'sample@email.tst', '555-666-0606', '1'),
(12592, '''''""', 'sample@email.tst', '555-666-0606', '1'),
(12593, '../.../.././../.../.././../.../.././../.../.././..', 'sample@email.tst', '555-666-0606', '1'),
(12594, '(select convert(int,CHAR(65)))', 'sample@email.tst', '555-666-0606', '1'),
(12595, '................etc/passwd', 'sample@email.tst', '555-666-0606', '1'),
(12596, '-1);select pg_sleep(3); -- ', 'sample@email.tst', '555-666-0606', '1'),
(12597, '1', 'sample@email.tst', '1''"', '1'),
(12598, '-1));select pg_sleep(3); -- ', 'sample@email.tst', '555-666-0606', '1'),
(12599, 'sSPoQESq'';select pg_sleep(3); -- ', 'sample@email.tst', '555-666-0606', '1'),
(12600, '1', 'sample@email.tst', '\\', '1'),
(12601, '1', 'sample@email.tst', '1', '1'),
(12602, 'invalid../../../../../../../../../../etc/passwd/./', 'sample@email.tst', '555-666-0606', '1'),
(12603, 'YZ9liKRU'');select pg_sleep(6); -- ', 'sample@email.tst', '555-666-0606', '1'),
(12604, '1', 'sample@email.tst', '@@b8Pb4', '1'),
(12605, 'file:///etc/passwd', 'sample@email.tst', '555-666-0606', '1'),
(12606, 'Eqx9APru''));select pg_sleep(6); -- ', 'sample@email.tst', '555-666-0606', '1'),
(12607, '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', 'sample@email.tst', '555-666-0606', '1'),
(12608, '1', 'sample@email.tst', '555-666-0606', '1'),
(12609, '1', 'sample@email.tst', 'JyI=', '1'),
(12610, '1', 'sample@email.tst', '555-666-0606', '1'),
(12611, 'WEB-INF/web.xml', 'sample@email.tst', '555-666-0606', '1'),
(12612, '1', 'sample@email.tst', '555-666-0606', '1'),
(12613, '1', 'sample@email.tst', '''"', '1'),
(12614, '/WEB-INF/web.xml', 'sample@email.tst', '555-666-0606', '1'),
(12615, '1', 'sample@email.tst', '-1 OR 2+134-', '1'),
(12616, '1', 'sample@email.tst', '''''""', '1'),
(12617, 'WEB-INF\\web.xml', 'sample@email.tst', '555-666-0606', '1'),
(12618, '1', 'sample@email.tst', '555-666-0606', '1'),
(12619, '1', 'sample@email.tst', '-1 OR 2+148-', '1'),
(12620, '1', 'sample@email.tst', '(select conv', '1'),
(12621, '1', 'sample@email.tst', '../../../../', '1'),
(12622, '1', 'sample@email.tst', '555-666-0606', '1''"'),
(12623, '1', 'sample@email.tst', '../../../../', '1'),
(12624, '1', 'sample@email.tst', '-1'' OR 2+368', '1'),
(12625, '1', 'sample@email.tst', '555-666-0606', '1'),
(12626, '1', 'sample@email.tst', '555-666-0606', '\\'),
(12627, '1', 'sample@email.tst', '-1'' OR 2+615', '1'),
(12628, '1', 'sample@email.tst', '..%2F..%2F..', '1'),
(12629, '1', 'sample@email.tst', '555-666-0606', '1'),
(12630, '1', 'sample@email.tst', '-1" OR 2+333', '1'),
(12631, '1''"()&%<acx><ScRiPt >bfz5(9701)</ScRiPt>', 'sample@email.tst', '555-666-0606', '1'),
(12632, '1', 'sample@email.tst', '../../../../', '1'),
(12633, '1', 'sample@email.tst', '555-666-0606', '@@B47UX'),
(12634, '1', 'sample@email.tst', 'if(now()=sys', '1'),
(12635, '1', 'sample@email.tst', '..%2F..%2F..', '1'),
(12636, '1', 'sample@email.tst', '555-666-0606', 'JyI='),
(12637, '''"()&%<acx><ScRiPt >bfz5(9847)</ScRiPt>', 'sample@email.tst', '555-666-0606', '1'),
(12638, '1', 'sample@email.tst', '/../..//../.', '1'),
(12639, '1', 'sample@email.tst', '(select(0)fr', '1'),
(12640, '1', 'sample@email.tst', '555-666-0606', '''"'),
(12641, '1', 'sample@email.tst', '.\\\\./.\\\\./.\\', '1'),
(12642, '1', 'sample@email.tst', '1 waitfor de', '1'),
(12643, '1', 'sample@email.tst', '555-666-0606', '''''""'),
(12644, '1_9897', 'sample@email.tst', '555-666-0606', '1'),
(12645, '1', 'sample@email.tst', '/etc/passwd', '1'),
(12646, '1', 'sample@email.tst', 'SGY3XcoU''; w', '1'),
(12647, '1', 'sample@email.tst', '%2fetc%2fpas', '1'),
(12648, '1', 'sample@email.tst', '555-666-0606', '(select convert(int,CHAR(65)))'),
(12649, '1', 'sample@email.tst', '79M4xqFm'';se', '1'),
(12650, '1', 'sample@email.tst', '/.././.././.', '1'),
(12651, '1', 'sample@email.tst', '555-666-0606', '1'),
(12652, '1', 'sample@email.tst', 'lMODer7h'');s', '1'),
(12653, '1', 'sample@email.tst', '../..//../..', '1'),
(12654, '1', 'sample@email.tst', '../.../.././', '1'),
(12655, '1', 'sample@email.tst', '''"()&%<acx><', '1'),
(12656, '1', 'sample@email.tst', 'pg8DCYR1''));', '1'),
(12657, '1', 'sample@email.tst', '............', '1'),
(12658, '1', 'sample@email.tst', '555-666-0606', '1'),
(12659, '1', 'sample@email.tst', 'invalid../..', '1'),
(12660, '1', 'sample@email.tst', '555-666-0606', '1'),
(12661, '1', 'sample@email.tst', '555-666-0606', '1'),
(12662, '1', 'sample@email.tst', 'file:///etc/', '1'),
(12663, '1', 'sample@email.tst', '555-666-0606', '-1 OR 2+895-895-1=0+0+0+1 -- '),
(12664, '1', 'sample@email.tst', '555-666-0606', '1''"()&%<acx><ScRiPt >bfz5(9782)</ScRiPt>'),
(12665, '1', 'sample@email.tst', '/\\../\\../\\..', '1'),
(12666, '1', 'sample@email.tst', '555-666-0606', '-1 OR 2+736-736-1=0+0+0+1'),
(12667, '1', 'sample@email.tst', 'WEB-INF/web.', '1'),
(12668, '1', 'sample@email.tst', '555-666-0606', '-1'' OR 2+968-968-1=0+0+0+1 -- '),
(12669, '1', 'sample@email.tst', '555-666-0606', '''"()&%<acx><ScRiPt >bfz5(9820)</ScRiPt>'),
(12670, '1', 'sample@email.tst', '/WEB-INF/web', '1'),
(12671, '1', 'sample@email.tst', '555-666-0606', '-1'' OR 2+337-337-1=0+0+0+1 or ''MPGaYg1m''='''),
(12672, '1', 'sample@email.tst', 'WEB-INF\\web.', '1'),
(12673, '1', 'sample@email.tst', '555-666-0606', '1_9594'),
(12674, '1', 'sample@email.tst', '555-666-0606', '-1" OR 2+498-498-1=0+0+0+1 -- '),
(12675, '1', 'sample@email.tst', '555-666-0606', '../../../../../../../../../../etc/passwd'),
(12676, '1', 'sample@email.tst', '555-666-0606', 'if(now()=sysdate(),sleep(6),0)/*''XOR(if(now()=sysdate(),sleep(6),0))OR''"XOR(if(now()=sysdate(),sleep(6),0))OR"*/'),
(12677, '1', 'sample@email.tst', '555-666-0606', '../../../../../../../../../../../../../../../proc/version'),
(12678, '1', 'sample@email.tst', '555-666-0606', '(select(0)from(select(sleep(6)))v)/*''+(select(0)from(select(sleep(6)))v)+''"+(select(0)from(select(sleep(6)))v)+"*/'),
(12679, '1', 'sample@email.tst', '555-666-0606', '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg'),
(12680, '1', 'sample@email.tst', '555-666-0606', '-1; waitfor delay ''0:0:6'' -- '),
(12681, '1', 'sample@email.tst', '555-666-0606', '../../../../../../../../../../etc/passwd.jpg'),
(12682, '1', 'sample@email.tst', '555-666-0606', '-1); waitfor delay ''0:0:9'' -- '),
(12683, '1', 'sample@email.tst', '555-666-0606', '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg'),
(12684, '1', 'sample@email.tst', '555-666-0606', '1 waitfor delay ''0:0:9'' -- '),
(12685, '1', 'sample@email.tst', '555-666-0606', 'wuOoGMqe''; waitfor delay ''0:0:9'' -- '),
(12686, '1', 'sample@email.tst', '555-666-0606', '/../..//../..//../..//../..//../..//etc/passwd.jpg'),
(12687, '1', 'sample@email.tst', '555-666-0606', '-1;select pg_sleep(3); -- '),
(12688, '1', 'sample@email.tst', '555-666-0606', '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd'),
(12689, '1', 'sample@email.tst', '555-666-0606', '-1);select pg_sleep(3); -- '),
(12690, '1', 'sample@email.tst', '555-666-0606', '/etc/passwd'),
(12691, '1', 'sample@email.tst', '555-666-0606', '-1));select pg_sleep(3); -- '),
(12692, '1', 'sample@email.tst', '555-666-0606', '%2fetc%2fpasswd'),
(12693, '1', 'sample@email.tst', '555-666-0606', '/.././.././.././.././.././.././.././../etc/./passwd%00'),
(12694, '1', 'sample@email.tst', '555-666-0606', 'NKHY6njT'';select pg_sleep(3); -- '),
(12695, '1', 'sample@email.tst', '555-666-0606', '../..//../..//../..//../..//../..//../..//../..//../..//etc/passwd'),
(12696, '1', 'sample@email.tst', '555-666-0606', '../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././etc/passwd'),
(12697, '1', 'sample@email.tst', '555-666-0606', 'LtRauN4R'');select pg_sleep(6); -- '),
(12698, '1', 'sample@email.tst', '555-666-0606', '................etc/passwd'),
(12699, '1', 'sample@email.tst', '555-666-0606', 'ttPaazZm''));select pg_sleep(6); -- '),
(12700, '1', 'sample@email.tst', '555-666-0606', 'invalid../../../../../../../../../../etc/passwd/././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././'),
(12701, '1', 'sample@email.tst', '555-666-0606', 'file:///etc/passwd'),
(12702, '1', 'sample@email.tst', '555-666-0606', '/\\../\\../\\../\\../\\../\\../\\../etc/passwd'),
(12703, '1', 'sample@email.tst', '555-666-0606', 'WEB-INF/web.xml'),
(12704, '1', 'sample@email.tst', '555-666-0606', '/WEB-INF/web.xml'),
(12705, '1', 'sample@email.tst', '555-666-0606', 'WEB-INF\\web.xml'),
(12706, 'Nika Woelan', 'nika@upgrad.id', '08112571977', 'Informasi PPDB SMK SMTI Yogyakarta 2020 Jalur Reguler\r\n\r\nSalam Sejahtera Para Pendidik, Pahlawan Tanpa Tanda Jasa,\r\n\r\nSaat ini dunia tengah diterpa pandemi covid19, sementara kita tidak boleh menyerah dan tetap harus memperjuangkan pendidikan terbaik untuk tunas bangsa.\r\n\r\nOleh karena itu, kami, upgrad.id dengan email ini memberikan support bagi SMK SMTI Yogyakarta (http://www.smtijogja.sch.id) dan para siswa lulusan SMP untuk dapat melanjutkan pendidikan ke jenjang menengah atas.\r\n\r\n“BINGUNG cari SMK:\r\n1)	NEGERI favorit BEBAS ZONASI?\r\n2)	FASILITAS LENGKAP dengan BIAYA MURAH?\r\n3)	LULUS pasti LANGSUNG KERJA?\r\nSMK-SMTI Yogyakarta PILIHAN TEPAT, Sekolah Menyenangkan Masa Depan Cerah!”\r\n\r\nBerikut Profil Kami: https://bit.ly/VidProfilSMTIYk2019\r\nSMK-SMTI Yogyakarta merupakan SMK Negeri di bawah Kementerian Perindustrian dengan 3 Kompetensi Keahlian:\r\n1.	Kimia Industri: https://bit.ly/ProfilKimiaIndustriSMTIYk\r\n2.	Kimia Analisis: https://bit.ly/ProfilKimiaAnalisis2019\r\n3.	Teknik Mekatronika:'),
(12707, 'mashawamsMZ', 'lmvsthaniKildinary@excitedxnx.', '89352787529', 'free yearly credit report  <a href=" http://creditscorewww.com/  ">free credit score check </a> credit reports  ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstra`
--

CREATE TABLE IF NOT EXISTS `ekstra` (
  `id_ekstra` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kegiatan` varchar(30) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  PRIMARY KEY (`id_ekstra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `ekstra`
--

INSERT INTO `ekstra` (`id_ekstra`, `jenis_kegiatan`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(1, 'Pramuka', 'Jumat', '13:00:00', '15:00:00'),
(3, 'Seni Tari', 'Rabu', '14:00:00', '15:30:00'),
(4, 'Karate', 'Rabu', '14:00:00', '16:00:00'),
(5, 'Karya Ilmiah Remaja (KIR)', 'Selasa', '14:30:00', '16:00:00'),
(6, 'Batik', 'Selasa', '14:30:00', '16:00:00'),
(7, 'Bola Volley', 'Rabu', '14:00:00', '15:30:00'),
(8, 'Bahasa Inggris Kelas VII', 'Rabu', '14:00:00', '15:30:00'),
(9, 'Bahasa Inggris Kelas VIII', 'Jumat', '13:00:00', '14:30:00'),
(10, 'Karawitan Kelas VII', 'Rabu', '14:00:00', '15:30:00'),
(11, 'Karawitan Kelas VIII', 'Selasa', '14:30:00', '16:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_fasilitas` varchar(300) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  PRIMARY KEY (`id_fasilitas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `keterangan`, `gambar`) VALUES
(2, 'Perpustakaan', '<p style="text-align: justify;">&nbsp; &nbsp; &nbsp;Perpustakaan &nbsp;tempat dimana banyak menyimpan berbagai macam buku &nbsp;ilmu pengetahuan yang banyak bermanfaat. Perpustakaan dimana tempat &nbsp;pelajar dan mahasiswa banyak melakukan aktivitas membaca, dengan ruang yang hening jauh dari kebisingan yang mampu menciptakan ruang membaca yang begitu nyaman bagi mereka yang gemar membaca.</p>\r\n<p style="text-align: justify;">&nbsp; &nbsp; &nbsp; Perpustakaan menginspirasikan &nbsp;begitu banyak pembaca &nbsp;untuk menambah ilmu pengetahuan mereka, dengan berbagai macam buku yang tersimpan disana, dan hanya bagi yang hobi dan gemar membaca perpustakaan adalah &nbsp;tempat ternyaman bagi mereka untuk membaca dengan suasana yang mampu menciptakan inspirasi. &nbsp;Tak pernah sepi perpustakaan untuk dikunjungi selalu ramai oleh mereka yang gemar membaca.</p>\r\n<p style="text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp;Begitu banyak ilmu pengetahuan yang didapatkan dari membac</p>', 'ilustrasi-perpustakaan-2.jpg'),
(3, 'Lap Komputer', '<p style="text-align: justify;">Laboratorium adalah tempat belajar mengajar melalui metode praktikum yang dapat menghasilkan pengalaman belajar dimana siswa berinteraksi dengan berbagai alat dan bahan untuk mengobservasi gejala-gejala yang dapat diamati secara langsung dan membuktikan sendiri sesuatu yang dipelajari jadi suatu laboratorium sekolah mempunyai peranan yang sangat penting dalam upaya meningkatkan mutu serta system pengajaran.</p>', '8-single-default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `judul_galeri` varchar(100) NOT NULL,
  `foto_galeri` varchar(300) NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul_galeri`, `foto_galeri`) VALUES
(1, 'Ekstrakurikuler Karate ', 'KARATE_1-min1.png'),
(2, 'Ekstrakurikuler Karawitan', 'KARAWITAN-min.png'),
(3, 'Ekstrakurikuler Tari', 'TARI-min.png'),
(4, 'Senam Pagi', 'SENAM-min.png'),
(5, 'Tampilan Band Monsa', 'BAND-min.png'),
(6, 'Doa Pagi ', 'RUANG_KELAS-min.png'),
(7, 'Ekstrakurikuler Karate ', 'KARATE-min.png'),
(8, 'Olah Raga Di Lapangan Monsa', 'LAPANGAN_1-min.png'),
(9, 'Kegiatan Parktikum di Laboratorium IPA', 'LAB_IPA-min.png'),
(10, 'Kegiatan Parktikum di Laboratorium Komputer', 'LAB_KOMPUTER-min.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `guru_id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tgl_lahir_guru` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `jk_guru` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat_guru` varchar(100) NOT NULL,
  `no_telp_guru` varchar(12) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jenis_guru` enum('PNS','Non PNS') NOT NULL,
  `foto_guru` varchar(300) NOT NULL,
  PRIMARY KEY (`guru_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`guru_id`, `nip`, `nik`, `nama_guru`, `tgl_lahir_guru`, `tempat_lahir`, `jk_guru`, `alamat_guru`, `no_telp_guru`, `jabatan`, `jenis_guru`, `foto_guru`) VALUES
(3, '19780706 200501', '3401044607780003', 'YULI RUWIATI', '1978-07-06', 'KULON PROGO', 'Perempuan', 'KLAMPOK PEDUKUHAN IV, RT 16, RW 7, BROSOT, GALUR', '0819 0400 16', 'Guru Muda (Mapel Bahasa Inggris)', 'PNS', 'P_20160815_0720141.jpg'),
(4, '19670822 200604', '3401022208670001', 'SUPARYADI', '1967-08-22', 'KULON PROGO', 'Laki-laki', 'SOGAN II, RT 3, RW 2, SOGAN, WATES', '0823 2560 30', 'Guru muda Tk. 1 (Mapel PPKn', 'PNS', 'Suparyadi_Kompres1.jpg'),
(5, '19660223 200801', '3401056302660001', 'WURI HANDAYANI', '1966-02-23', 'KULON PROGO', 'Perempuan', 'WONOGIRI, RT 47, RW 0, JATIREJO, LENDAH', '085 292 727 ', 'Guru Muda Tk. 1 (Mapel Prakarya)', 'PNS', 'WURI_HANDAYANI_Kompres1.jpg'),
(6, '19770106 201212', '3401080601770001', 'SURO NURJATI', '1977-01-06', 'KULON PROGO', 'Laki-laki', 'KRIYAN, RT 125, RW 37, HARGOREJO, KOKAP', '081 326 050 ', 'Guru Pertama (Mapel Seni Budaya)', 'PNS', 'SURO_NURJATI,kecil4.jpg'),
(7, '19610420 199802', '3401026004610001', 'KAMIDAH, S.Pd.I.', '1961-04-20', 'KULON PROGO', 'Perempuan', 'SEBOKARANG, RT 3, RW 16, WATES, WATES', '081 392 339 ', 'Guru Madya (Mapel Pend. Agama Kristen)', 'PNS', 'Kamidah_Kompres1.jpg'),
(8, '197704012006042', '3401114104770001', 'AMANATUL KHOIRIYAH, S.Pd.', '1977-04-01', 'KULON PROGO', 'Perempuan', 'KLEDEKAN LOR, RT 12, RW 5, JANGKARAN, TEMON', '081 334 847 ', 'Guru Pertama Tk 1 (Bimbingan Konseling)', 'PNS', 'Amanatul_Kompres1.jpg'),
(9, '19680121 199412', '7311056101680001', 'SITI SUGIYARTI, S.Pd.', '1968-01-21', 'KULON PROGO', 'Perempuan', 'KLEWONAN, RT 21, RW 9, TRIHARJO, WATES', '082 136 204 ', 'Guru Madya (Mapel : IPA)', 'PNS', 'Siti_Sugiyarti_Kompres1.jpg'),
(10, '19701023 199307', '3401016310700001', 'NUR ISMIYANTI, S.Pd.', '1970-10-23', 'KULON PROGO', 'Perempuan', 'TRUKAN, RT 22, RW 8, KULUR, TEMON', '0896 5227 96', 'Guru Muda (Bimbingan Konseling/BK)', 'PNS', 'NUR_ISMIYANTI_Kompres1.jpg'),
(11, '19640214 198403', '3401085402640002', 'ANI SULISTYANINGSIH, S.Pd.', '1964-02-14', 'MAGELANG', 'Perempuan', 'KLIRIPAN, RT 67, RW 20, HARGOREJO, KOKAP', '085 725 080 ', 'Guru Madya (Mapel IPS)', 'PNS', 'ANI_SULISTYANINGSIH1.jpg'),
(12, '19710502 200604', '3401034205710002', 'UMI ZAWIDAH, S.Pd.', '1971-05-02', 'KULON PROGO', 'Perempuan', 'PEDUKUHAN IV BUGEL, RT 14, RW 7, BUGEL, PANJATAN', '081328589574', 'Guru Muda (/Bahasa Inggris)', 'PNS', 'UMI_ZAWIDAH_Kompres1.jpg'),
(13, '19650225 198703', '3401012502650001', 'SUKARYANA, S.Pd.', '1965-02-25', 'KULON PROGO', 'Laki-laki', 'BATIKAN I, RT 2, RW 1, DEMEN, TEMON', '085 326 705 ', 'Pembina (Kepala Sekolah)', 'PNS', 'WhatsApp_Image_2019-06-30_at_22_18_42.jpg'),
(14, '19680127 199402', '3401026701680001', 'MURTIYANI, S.Pd.', '1968-01-27', 'SLEMAN', 'Perempuan', 'KULWARU WETAN, RT 3, RW 2, KULWARU, WATES', '081 392 074 ', 'Guru Madya (Mapel Bahasa Indonesia)', 'PNS', 'MURTIYANI_Kompres1.jpg'),
(15, '19650530 198803', '3306075210660002', 'AMAT TOSIN', '1965-05-30', 'PURWOREJO', 'Laki-laki', 'KIYANGKONGREJO, RT 002, RW , 005, KUTOARJO, PURWOREJO, JAWA TENGAH', '085 213 965 ', 'Guru Madya ( Mapel Penjasorkes )', 'PNS', 'AMAT_TOSIN,_KECIL1.jpg'),
(18, '19661201 199003', '3401080112660001', 'BUSONO SUTARYANTO', '1966-12-01', 'KULON PROGO', 'Laki-laki', 'PRIPIH, RT 55, RW 15, HARGOMULYO, KOKAP', '081 931 765 ', 'Guru Madya (Mapel Matematika )', 'PNS', 'BUSONO_SUTARYANTO_Kompres1.jpg'),
(19, '19601022 198503', '3306036210603001', 'ENI PURWATI, S.Pd.', '1960-10-22', 'Kulon Progo', 'Perempuan', 'Seling, RT , RW , Temon kulon, Temon, Kulon Progo, Yogyakarta', '081 568 263 ', 'Guru Madya (Mapel Bahasa Indonesia)', 'PNS', 'ENI_PURWANTI_Kompres1.jpg'),
(20, '', '3302026109830001', 'NURUL KHIKMAWATI', '1983-09-21', 'BANYUMAS', 'Perempuan', 'JANGKARAN, RT 1, RW 1, JANGKARAN, TEMON', '085868199433', 'Guru PAI', 'Non PNS', 'Nurul_Kh_Kompres1.jpg'),
(22, '19781210 200312', '3401035012780002', 'SRI KHAYATI, S.Pd.', '1978-12-10', 'KULON PROGO', 'Perempuan', 'PEDUKUHAN II BUGEL, RT 8, RW 4, BUGEL, PANJATAN', '085 647 549 ', 'Guru Muda (Mapel IPA)', 'PNS', 'SRI_KHAYATI_Kompres1.jpg'),
(23, '19601022 198503', '3306036210600001', 'ENI PURWATI, ', '1960-10-22', 'KULON PROGO', 'Perempuan', 'Seling, Temon Kulon, Temon, Kulon Progo, Yogyakarta', ' 08156826306', 'Guru Madya (Mapel Bahasa Indonesia)', 'PNS', 'ENI_PURWANTI_Kompres2.jpg'),
(24, '19790722 200501', '3306036207790005', 'KARIS YULI ASTUTI, S.Pd.I.', '1979-07-22', 'KULON PROGO', 'Perempuan', 'Wojo RT. 01, RW. 03, Karangsari, Purwodadi, Purworejo, Jawa Tengah', '085329858780', ' Guru Muda(Mapel PAI)', 'PNS', 'Karis_Kompres2.jpg'),
(25, '19661012 199412', '3306075210660002', 'Dra. DWI WIDIYASTUTI', '1966-10-12', 'Bantul', 'Perempuan', 'Kledung, RT. 02, RW 02, Karang Dalem, Banyu Urip, Purworejo, Jawa Tengah', '081392084216', 'Guru Madya (Mapel Bahasa Indonesia)', 'PNS', 'Dra__DWI_WIDIASTUTI2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` enum('7A','7B','7C','7D','7E','7F','8A','8B','8C','8D','8E','8F','9A','9B','9C','9D','9E','9F') NOT NULL,
  `gambar_jadwal` varchar(300) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kelas`, `gambar_jadwal`) VALUES
(16, '7A', 'jadwal.jpg'),
(17, '7B', 'jadwal.jpg'),
(18, '7C', 'jadwal.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_new`
--

CREATE TABLE IF NOT EXISTS `jadwal_new` (
  `jadwal_id` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(10) NOT NULL,
  `jam_ke` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `k7a` text NOT NULL,
  `k7b` text NOT NULL,
  `k7c` text NOT NULL,
  `k7d` text NOT NULL,
  `k7e` text NOT NULL,
  `k7f` text NOT NULL,
  `k8a` text NOT NULL,
  `k8b` text NOT NULL,
  `k8c` text NOT NULL,
  `k8d` text NOT NULL,
  `k8e` text NOT NULL,
  `k8f` text NOT NULL,
  `k9a` text NOT NULL,
  `k9b` text NOT NULL,
  `k9c` text NOT NULL,
  `k9d` text NOT NULL,
  `k9e` text NOT NULL,
  `k9f` text NOT NULL,
  PRIMARY KEY (`jadwal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `jadwal_new`
--

INSERT INTO `jadwal_new` (`jadwal_id`, `hari`, `jam_ke`, `jam_mulai`, `jam_selesai`, `k7a`, `k7b`, `k7c`, `k7d`, `k7e`, `k7f`, `k8a`, `k8b`, `k8c`, `k8d`, `k8e`, `k8f`, `k9a`, `k9b`, `k9c`, `k9d`, `k9e`, `k9f`) VALUES
(1, 'Senin', 1, '07:00:00', '09:00:00', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(30) NOT NULL,
  `nip` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `nip`) VALUES
(1, 'Kelas VII A', '19601022 198503'),
(2, 'Kelas VII B', '19790722 200501'),
(3, 'VII C', '19680121 199412'),
(4, 'Kelas VII D', '19680121 199412'),
(5, 'Kelas VIII A', '19680127 199402'),
(6, 'Kelas VIII B', '19710125 200604'),
(7, 'Kelas VIII C', '19650530 198803'),
(8, 'Kelas VIII D', '19620814 198503'),
(9, 'Kelas IX A', '19661012 199412'),
(10, 'Kelas IX B', '19701023 199307'),
(11, 'Kelas IX C', '19710502 200604'),
(12, 'Kelas IX D', '19781210 200312');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulum`
--

CREATE TABLE IF NOT EXISTS `kurikulum` (
  `id_kurikulum` int(11) NOT NULL AUTO_INCREMENT,
  `isi_kurikulum` varchar(10000) NOT NULL,
  PRIMARY KEY (`id_kurikulum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `kurikulum`
--

INSERT INTO `kurikulum` (`id_kurikulum`, `isi_kurikulum`) VALUES
(1, '<p style="text-align:justify">Kurikulum adalah seperangkat rencana dan pengaturan mengenai tujuan, isi, bahan pelajaran, dan cara yang digunakan sebagai pedoman penyelenggaraan kegiatan pembelajaran untuk mencapai tujuan pendidikan. Tujuan tersebut meliputi tujuan pendidikan nasional serta kesesuaian dengan kekhasan, kondisi dan potensi daerah, satuan pendidikan dan peserta didik. Oleh karena itu, kurikulum disusun oleh satuan pendidikan untuk memungkinkan penyesuaian program pendidikan dengan kebutuhan dan potensi yang ada di daerah.</p>\r\n\r\n<p style="text-align:justify"><strong><a href="https://www.artikelsiana.com/" target="_blank">Fungsi Kurikulum</a>&nbsp;&ndash;&nbsp;</strong>Kurikulum sebagai alat dalam pendidikan memiliki berbagai macam fungsi dalam pendidikan yang sangat berperan dalam kegunannya.&nbsp;<strong>Fungsi Kurikulum&nbsp;</strong>adalah sebagai berikut&hellip;</p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;"><strong>Fungsi Penyesuaian (the adjustive or adaptive function) :</strong>&nbsp;Kurikulum berfungsi sebagai penyesuain adalah kemampuan untuk menyesuaikan diri dengan perubahan yang terjadi dilingkungannya karna lingkungan bersifat dinamis artinya dapat berubah-ubah.&nbsp;</li>\r\n	<li style="text-align: justify;"><strong>Fungsi Integrasi (the integrating function) :&nbsp;</strong>Kurikulum berfungsi sebagai penyesuain mengandung makna bahwa kurikulum merupakan alat pendidikan yang mampu menghasilkan pribadi-pribadi yang utut yang dapat dibutuhkan dan berintegrasi di masyarakat.&nbsp;</li>\r\n	<li style="text-align: justify;"><strong>Fungsi Diferensiasi (the diferentiating function) :</strong>&nbsp;Kurikulum berfungsi sebagai diferensiansi adalah sebagai alat yang memberikan pelayanan dari berbagai perbedaan disetiap siswa yang harus dihargai dan dilayani.&nbsp;</li>\r\n	<li style="text-align: justify;"><strong>Fungsi Persiapan (the propaeduetic function) :</strong>&nbsp;Kurikulum berfungsi sebagai persiapan yang mengandung makna bahwa kurikulum sebagai alat pendidikan mampu mempersiapkan siswa kejenjang selanjutnya dan juga dapat mempersiapkan diri dapat hidup dalam masyarakat, jika tidak melanjukan pendidikan.</li>\r\n	<li style="text-align: justify;"><strong>Fungsi Pemilihan (the selective function) :</strong>&nbsp;Kurikulum berfungsi sebagai pemilihan adalah memberikan kesempatan bagi siswa untuk menentukan pilihan program belajar yang sesuai dengan minat dan bakatnya.&nbsp;</li>\r\n	<li style="text-align: justify;"><strong>Fungsi Diagnostik (the diagnostic function) :</strong>&nbsp;Kurikulum sebagai diagnostik&nbsp;mengandung makna bahwa kurikulum adalah alat pendidikan yang mampu mengarahkan dan memahami potensi siswa serta kelemahan dalam dirinya. Jika telah memahami potensi dan mengetahui kelemahannya, maka diharapkan siswa dapat mengembangkan potensi dan memperbaiki kelemahannya.&nbsp;</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(50) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `guru_id`, `kelas`) VALUES
(8, 'Matematika', 18, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(300) NOT NULL,
  `isi_pengumuman` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penugasan`
--

CREATE TABLE IF NOT EXISTS `penugasan` (
  `id_tugas` int(11) NOT NULL AUTO_INCREMENT,
  `guru_id` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `kelas` text NOT NULL,
  `isi_tugas` varchar(1000) NOT NULL,
  `ket_tugas` text NOT NULL,
  PRIMARY KEY (`id_tugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `penugasan`
--

INSERT INTO `penugasan` (`id_tugas`, `guru_id`, `id_mapel`, `kelas`, `isi_tugas`, `ket_tugas`) VALUES
(3, 18, 8, '7', 'Capture.PNG', 'coba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE IF NOT EXISTS `presensi` (
  `no_presensi` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `mapel` int(11) DEFAULT NULL,
  `keterangan` enum('H','S','I','A') DEFAULT NULL,
  PRIMARY KEY (`no_presensi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`no_presensi`, `tanggal`, `mapel`, `keterangan`) VALUES
(1, '2019-04-12', 3, 'S'),
(2, '2019-03-15', 5, 'H'),
(3, '2019-04-19', 4, 'H');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` varchar(300) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi_profil` varchar(10000) NOT NULL,
  `isi_lainnya` varchar(1000) NOT NULL,
  `logo_sekolah` varchar(300) NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_sekolah`, `alamat_sekolah`, `no_telp`, `email`, `isi_profil`, `isi_lainnya`, `logo_sekolah`) VALUES
(1, 'Sekolah Menengah Pertama Negeri 1 Temon', 'Jl. Raya Wates-Purworejo Km. 10,5, Temon Kulon, Temon, Kulon Progo, Daerah Istimewa Yogyakarta, 55654', '(0274) 64725', 'smpnegeri1temon@yahoo.co.id', '', '<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; text-justify: inter-ideograph; line-height: 150%;"><span lang="IN" style="font-family: ''Arial'',''sans-serif'';">Assalamu&rsquo;alaikum Wr. Wb.</span></p>\r\n<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; text-justify: inter-ideograph; line-height: 150%;"><span lang="IN" style="font-family: ''Arial'',''sans-serif'';">&nbsp;</span></p>\r\n<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: justify; text-justify: inter-ideograph; text-indent: 36.0pt; line-height: 150%;"><span lang="IN" style="font-family: ''Arial'',''sans-serif'';">Pada era sekarang ini, laman suatu lembaga pendidikan menjadi wajah di dunia maya. Karena itu, sekolah sangatlah perlu untuk memiliki laman seperti website. Peluncuran laman baru SMP Negeri 1 Temon ini merupakan wujud keseriusan dalam upaya mempublikasikan sekolah secara luas kepada masyarakat umum. Website ini dapat diakses di alamat : </span><span lang="IN"><a hre', 'LOGO22.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id_rating` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  PRIMARY KEY (`id_rating`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id_rating`, `email`, `id_berita`, `rating`) VALUES
(1, '1', 3, 3),
(2, 'lollyfriezzy@yahoo.co.id', 3, 1),
(3, 'lollyfriezzy@yahoo.co.id', 3, 1),
(4, 'lollyfriezzy@yahoo.co.id', 3, 4),
(5, 'lollyfriezzy@yahoo.co.id', 3, 5),
(6, '', 3, 4),
(7, '', 3, 2),
(8, 'anita@gmail.com', 3, 4),
(9, 'lollyfriezzy@yahoo.co.id', 4, 5),
(10, '', 2, 4),
(11, '', 5, 3),
(12, '', 5, 2),
(13, 'lollyfriezzy@yahoo.co.id', 4, 4),
(14, 'lollyfriezzy@yahoo.co.id', 1, 3),
(15, '', 1, 5),
(16, '', 6, 5),
(17, 'f@ftf', 5, 2),
(18, 'hengky.ihya@gmail.com', 6, 1),
(19, 'anitaangguntari@gmail.com', 6, 2),
(20, 'lollyfriezzy@yahoo.co.id', 1, 2),
(21, 'anitaangguntari@gmail.com', 1, 5),
(22, 'lollyfriezzy@yahoo.co.id', 5, 2),
(23, 'anitaangguntari@gmail.com', 5, 5),
(24, 'anita@gmail.com', 6, 3),
(25, 'lollyfriezzy@yahoo.co.id', 1, 3),
(26, 'hengky.ihya@gmail.com', 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reting`
--

CREATE TABLE IF NOT EXISTS `reting` (
  `id_rat` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  PRIMARY KEY (`id_rat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1219 ;

--
-- Dumping data untuk tabel `reting`
--

INSERT INTO `reting` (`id_rat`, `email`, `id_artikel`, `rating`) VALUES
(16, 'lollyfriezzy@yahoo.co.id', 1, 2),
(17, '', 1, 1),
(18, '', 2, 5),
(19, 'hengky.ihya@gmail.com', 1, 2),
(20, 'lollyfriezzy@yahoo.co.id', 2, 3),
(21, 'lollyfriezzy@yahoo.co.id', 1, 4),
(22, 'sample@email.tst', 1, 5),
(23, 'sample@email.tst', 1, 4),
(24, 'sample@email.tst', 1, 3),
(25, 'sample@email.tst', 2, 4),
(26, 'sample@email.tst', 2, 3),
(27, 'sample@email.tst', 2, 5),
(28, 'sample@email.tst', 0, 5),
(29, 'sample@email.tst', 0, 4),
(30, 'sample@email.tst', 0, 3),
(31, 'response.write(9283547*9396407)', 1, 5),
(32, '''+response.write(9283547*9396407)+''', 1, 5),
(33, '"+response.write(9283547*9396407)+"', 1, 5),
(34, 'sample%40email.tst', 1, 5),
(35, 'sample%40email.tst', 1, 5),
(36, 'response.write(9857119*9159871)', 1, 4),
(37, '-1 OR 2+190-190-1=0+0+0+1 -- ', 1, 5),
(38, '-1 OR 2+568-568-1=0+0+0+1', 1, 5),
(39, '-1'' OR 2+730-730-1=0+0+0+1 -- ', 1, 5),
(40, '-1'' OR 2+692-692-1=0+0+0+1 or ''iJD9QpIJ''=''', 1, 5),
(41, '''+response.write(9857119*9159871)+''', 1, 4),
(42, '-1" OR 2+234-234-1=0+0+0+1 -- ', 1, 5),
(43, '"+response.write(9857119*9159871)+"', 1, 4),
(44, 'if(now()=sysdate(),sleep(6),0)/*''XOR(if(now()=sysd', 1, 5),
(45, 'response.write(9568381*9444206)', 1, 3),
(46, '(select(0)from(select(sleep(6)))v)/*''+(select(0)fr', 1, 5),
(47, '''+response.write(9568381*9444206)+''', 1, 3),
(48, '1 waitfor delay ''0:0:6'' -- ', 1, 5),
(49, '"+response.write(9568381*9444206)+"', 1, 3),
(50, 'uaCmtuyq''; waitfor delay ''0:0:6'' -- ', 1, 5),
(51, 'response.write(9956673*9835098)', 2, 5),
(52, 'iBaMhm8w'';select pg_sleep(6); -- ', 1, 5),
(53, '''+response.write(9956673*9835098)+''', 2, 5),
(54, 'j9B75Ix3'');select pg_sleep(9); -- ', 1, 5),
(55, '"+response.write(9956673*9835098)+"', 2, 5),
(56, '5xQvWxNr''));select pg_sleep(9); -- ', 1, 5),
(57, 'sample%40email.tst', 1, 4),
(58, 'sample%40email.tst', 1, 4),
(59, '-1 OR 2+903-903-1=0+0+0+1 -- ', 1, 4),
(60, 'response.write(9683575*9959010)', 2, 4),
(61, '-1 OR 2+410-410-1=0+0+0+1', 1, 4),
(62, '-1'' OR 2+728-728-1=0+0+0+1 -- ', 1, 4),
(63, '''+response.write(9683575*9959010)+''', 2, 4),
(64, 'set|set&set', 1, 5),
(65, '-1'' OR 2+448-448-1=0+0+0+1 or ''aWcPj5jz''=''', 1, 4),
(66, '$(nslookup Epy5GLX1)', 1, 5),
(67, '"+response.write(9683575*9959010)+"', 2, 4),
(68, '-1" OR 2+822-822-1=0+0+0+1 -- ', 1, 4),
(69, 'response.write(9171342*9439662)', 2, 3),
(70, 'if(now()=sysdate(),sleep(4),0)/*''XOR(if(now()=sysd', 1, 4),
(71, '''+response.write(9171342*9439662)+''', 2, 3),
(72, '(select(0)from(select(sleep(4)))v)/*''+(select(0)fr', 1, 4),
(73, 'LZ5TRkdm', 1, 5),
(74, '"+response.write(9171342*9439662)+"', 2, 3),
(75, '&nslookup GyxEE0Wu&''\\"`0&nslookup GyxEE0Wu&`''', 1, 5),
(76, 'JxjQZYX9', 1, 4),
(77, 'response.write(9369541*9341594)', 0, 5),
(78, 'set|set&set', 1, 4),
(79, 'w4UVHc40', 1, 3),
(80, '''+response.write(9369541*9341594)+''', 0, 5),
(81, '$(nslookup dhpJT2G0)', 1, 4),
(82, 'TWNecSxg', 2, 5),
(83, '1 waitfor delay ''0:0:4'' -- ', 1, 4),
(84, '"+response.write(9369541*9341594)+"', 0, 5),
(85, '&nslookup gFPgAutt&''\\"`0&nslookup gFPgAutt&`''', 1, 4),
(86, '4i4to2Bc', 2, 4),
(87, 'SpoMb99o''; waitfor delay ''0:0:8'' -- ', 1, 4),
(88, 'set|set&set', 1, 3),
(89, '81hE5CAV', 2, 3),
(90, 'tUHM3oTk'';select pg_sleep(8); -- ', 1, 4),
(91, '$(nslookup cDk34H73)', 1, 3),
(92, 'oTE12Th1', 0, 5),
(93, 'Y3FBrauF'');select pg_sleep(8); -- ', 1, 4),
(94, 'WjkAlM1x', 0, 4),
(95, '&nslookup RkscKDri&''\\"`0&nslookup RkscKDri&`''', 1, 3),
(96, 'wej7EZYR''));select pg_sleep(8); -- ', 1, 4),
(97, 'sample%40email.tst', 1, 3),
(98, 'M6P0ZCYl', 0, 3),
(99, 'set|set&set', 2, 5),
(100, 'response.write(9198542*9796338)', 0, 4),
(101, 'sample@email.tst', 0, 5),
(102, 'sample%40email.tst', 1, 3),
(103, '$(nslookup kG2WTx26)', 2, 5),
(104, '''+response.write(9198542*9796338)+''', 0, 4),
(105, '-1 OR 2+286-286-1=0+0+0+1 -- ', 1, 3),
(106, '&nslookup KKZZXiU0&''\\"`0&nslookup KKZZXiU0&`''', 2, 5),
(107, '"+response.write(9198542*9796338)+"', 0, 4),
(108, '-1 OR 2+283-283-1=0+0+0+1', 1, 3),
(109, 'set|set&set', 2, 4),
(110, 'response.write(9747637*9523761)', 0, 3),
(111, '-1'' OR 2+856-856-1=0+0+0+1 -- ', 1, 3),
(112, '$(nslookup 3xOBZbuv)', 2, 4),
(113, 'sample@email.tst', 0, 5),
(114, '''+response.write(9747637*9523761)+''', 0, 3),
(115, '&nslookup fupdYTiT&''\\"`0&nslookup fupdYTiT&`''', 2, 4),
(116, '-1'' OR 2+465-465-1=0+0+0+1 or ''6L4WAZSG''=''', 1, 3),
(117, '"+response.write(9747637*9523761)+"', 0, 3),
(118, 'sample@email.tst', 0, 5),
(119, 'set|set&set', 2, 3),
(120, '-1" OR 2+280-280-1=0+0+0+1 -- ', 1, 3),
(121, 'sample@email.tst', 0, 5),
(122, 'sample@email.tst', 0, 5),
(123, '$(nslookup xNUCpOEn)', 2, 3),
(124, 'if(now()=sysdate(),sleep(15),0)/*''XOR(if(now()=sys', 1, 3),
(125, 'sample@email.tst', 0, 5),
(126, 'sample@email.tst', 0, 5),
(127, '&nslookup CYfYmI7R&''\\"`0&nslookup CYfYmI7R&`''', 2, 3),
(128, 'sample@email.tst', 0, 5),
(129, 'sample@email.tst', 0, 5),
(130, 'set|set&set', 0, 5),
(131, 'sample@email.tst', 0, 5),
(132, 'sample@email.tst', 0, 4),
(133, '$(nslookup m2bKnMcW)', 0, 5),
(134, 'sample@email.tst', 0, 5),
(135, 'sample@email.tst', 0, 4),
(136, '&nslookup IkgqODUE&''\\"`0&nslookup IkgqODUE&`''', 0, 5),
(137, '(select(0)from(select(sleep(5)))v)/*''+(select(0)fr', 1, 3),
(138, 'sample@email.tst', 0, 5),
(139, 'sample@email.tst', 0, 4),
(140, 'set|set&set', 0, 4),
(141, '1 waitfor delay ''0:0:5'' -- ', 1, 3),
(142, 'sample@email.tst', 0, 3),
(143, 'sample@email.tst', 0, 4),
(144, '$(nslookup 9umO5TW7)', 0, 4),
(145, 'ERqCMvVF''; waitfor delay ''0:0:5'' -- ', 1, 3),
(146, 'sample@email.tst', 0, 3),
(147, 'sample@email.tst', 0, 4),
(148, '&nslookup UKNda6qB&''\\"`0&nslookup UKNda6qB&`''', 0, 4),
(149, 'set|set&set', 0, 3),
(150, 'TCW3b4GH'';select pg_sleep(5); -- ', 1, 3),
(151, '$(nslookup cJBbKUPs)', 0, 3),
(152, 'sample@email.tst', 0, 3),
(153, 'sample@email.tst', 0, 4),
(154, 'hWCfyD62'');select pg_sleep(5); -- ', 1, 3),
(155, '&nslookup CLwU0c0i&''\\"`0&nslookup CLwU0c0i&`''', 0, 3),
(156, 'sample@email.tst', 1, 0),
(157, 'sample@email.tst', 0, 4),
(158, 'sample@email.tst', 1, 0),
(159, 'sample@email.tst', 0, 4),
(160, 'sample@email.tst', 1, 0),
(161, 'sample@email.tst', 0, 4),
(162, 'sample@email.tst', 2, 0),
(163, 'sample@email.tst', 0, 4),
(164, 'sample@email.tst', 2, 0),
(165, 'sample@email.tst', 0, 4),
(166, 'XuuQr8Mp''));select pg_sleep(10); -- ', 1, 3),
(167, 'sample@email.tst', 0, 5),
(168, 'sample@email.tst', 0, 4),
(169, 'sample%40email.tst', 2, 5),
(170, 'sample@email.tst', 0, 5),
(171, 'sample%40email.tst', 2, 5),
(172, 'sample@email.tst', 35, 3),
(173, 'sample@email.tst', 0, 5),
(174, 'sample@email.tst', 0, 3),
(175, '-1 OR 2+254-254-1=0+0+0+1 -- ', 2, 5),
(176, 'sample@email.tst', 0, 4),
(177, 'sample@email.tst', 2, 0),
(178, '-1 OR 2+400-400-1=0+0+0+1', 2, 5),
(179, 'sample@email.tst', 0, 3),
(180, 'sample@email.tst', 0, 0),
(181, '-1'' OR 2+22-22-1=0+0+0+1 -- ', 2, 5),
(182, 'sample@email.tst', 0, 3),
(183, 'sample@email.tst', 0, 0),
(184, 'sample@email.tst', 0, 3),
(185, '-1'' OR 2+758-758-1=0+0+0+1 or ''hLfX0npN''=''', 2, 5),
(186, 'sample@email.tst', 0, 4),
(187, 'sample@email.tst', 0, 0),
(188, 'sample@email.tst', 0, 3),
(189, '-1" OR 2+32-32-1=0+0+0+1 -- ', 2, 5),
(190, 'sample@email.tst', 0, 4),
(191, '../../../../../../../../../../etc/passwd', 1, 5),
(192, 'sample@email.tst', 0, 3),
(193, 'if(now()=sysdate(),sleep(18),0)/*''XOR(if(now()=sys', 2, 5),
(194, 'sample@email.tst', 0, 3),
(195, '../../../../../../../../../../../../../../../proc/', 1, 5),
(196, 'sample@email.tst', 0, 3),
(197, '(select(0)from(select(sleep(18)))v)/*''+(select(0)f', 2, 5),
(198, 'sample@email.tst', 0, 3),
(199, '1 waitfor delay ''0:0:18'' -- ', 2, 5),
(200, 'sample@email.tst', 0, 3),
(201, '0rGsowrq''; waitfor delay ''0:0:18'' -- ', 2, 5),
(202, 'sample@email.tst', 1, 0),
(203, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 1, 5),
(204, 'sample@email.tst', 0, 3),
(205, 'mHQUrRYu'';select pg_sleep(18); -- ', 2, 5),
(206, 'sample@email.tst', 1, 0),
(207, '../../../../../../../../../../etc/passwd.tst', 1, 5),
(208, 'sample@email.tst', 1, 0),
(209, 'sample@email.tst', 1, 0),
(210, 'KKtPR8pp'');select pg_sleep(6); -- ', 2, 5),
(211, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 1, 5),
(212, 'sample@email.tst', 2, 28),
(213, 'ZLmLJEq3''));select pg_sleep(6); -- ', 2, 5),
(214, '/../..//../..//../..//../..//../..//etc/passwd.tst', 1, 5),
(215, 'sample@email.tst', 0, 0),
(216, 'sample%40email.tst', 2, 4),
(217, 'sample%40email.tst', 2, 4),
(218, '-1 OR 2+673-673-1=0+0+0+1 -- ', 2, 4),
(219, '-1 OR 2+47-47-1=0+0+0+1', 2, 4),
(220, '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', 1, 5),
(221, 'sample@email.tst', 2, 0),
(222, '', 1, 5),
(223, '-1'' OR 2+541-541-1=0+0+0+1 -- ', 2, 4),
(224, '/etc/passwd', 1, 5),
(225, 'sample@email.tst', 2, 0),
(226, '-1'' OR 2+601-601-1=0+0+0+1 or ''x5cvcQNZ''=''', 2, 4),
(227, '12345''"\\''\\");|]*{\r\n<>''''', 1, 5),
(228, '%2fetc%2fpasswd', 1, 5),
(229, '-1" OR 2+799-799-1=0+0+0+1 -- ', 2, 4),
(230, '/.././.././.././.././.././.././.././../etc/./passw', 1, 5),
(231, 'sample@email.tst', 2, 0),
(232, 'if(now()=sysdate(),sleep(7),0)/*''XOR(if(now()=sysd', 2, 4),
(233, '../..//../..//../..//../..//../..//../..//../..//.', 1, 5),
(234, 'sample@email.tst', 0, 5),
(235, 'sample@email.tst', 0, 0),
(236, 'sample@email.tst', 0, 0),
(237, 'sample@email.tst', 12345, 5),
(238, '../.../.././../.../.././../.../.././../.../.././..', 1, 5),
(239, 'sample@email.tst', 0, 0),
(240, '................etc/passwd', 1, 5),
(241, '${9999335+9999059}', 1, 5),
(242, '(select(0)from(select(sleep(14)))v)/*''+(select(0)f', 2, 4),
(243, 'sample@email.tst', 1, 0),
(244, '${10000130+9999005}', 1, 4),
(245, '1 waitfor delay ''0:0:14'' -- ', 2, 4),
(246, '${10000365+9999830}', 1, 3),
(247, '4GNx2ZaE''; waitfor delay ''0:0:21'' -- ', 2, 4),
(248, '7aGEQkK8'';select pg_sleep(21); -- ', 2, 4),
(249, 'NnSJa2Ih'');select pg_sleep(21); -- ', 2, 4),
(250, 'uyIdlE5V''));select pg_sleep(21); -- ', 2, 4),
(251, '${10000322+9999540}', 2, 5),
(252, 'sample@email.tst', 1, 12345),
(253, 'sample%40email.tst', 2, 3),
(254, '${10000398+10000051}', 2, 4),
(255, 'invalid../../../../../../../../../../etc/passwd/./', 1, 5),
(256, 'sample%40email.tst', 2, 3),
(257, '${10000272+9999890}', 2, 3),
(258, 'file:///etc/passwd', 1, 5),
(259, '-1 OR 2+123-123-1=0+0+0+1 -- ', 2, 3),
(260, '${9999271+10000357}', 0, 5),
(261, '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', 1, 5),
(262, '-1 OR 2+740-740-1=0+0+0+1', 2, 3),
(263, 'WEB-INF/web.xml', 1, 5),
(264, 'http://some-inexistent-website.acu/some_inexistent', 1, 5),
(265, '-1'' OR 2+966-966-1=0+0+0+1 -- ', 2, 3),
(266, '/WEB-INF/web.xml', 1, 5),
(267, '1some_inexistent_file_with_long_name.tst', 1, 5),
(268, '-1'' OR 2+759-759-1=0+0+0+1 or ''MUTHj2Gc''=''', 2, 3),
(269, 'WEB-INF\\web.xml', 1, 5),
(270, 'Http://testasp.vulnweb.com/t/fit.txt', 1, 5),
(271, '${9999914+10000059}', 0, 4),
(272, '-1" OR 2+375-375-1=0+0+0+1 -- ', 2, 3),
(273, '../../../../../../../../../../etc/passwd', 1, 4),
(274, 'http://testasp.vulnweb.com/t/fit.txt?.tst', 1, 5),
(275, '${10000150+9999219}', 0, 3),
(276, 'if(now()=sysdate(),sleep(24),0)/*''XOR(if(now()=sys', 2, 3),
(277, '../../../../../../../../../../../../../../../proc/', 1, 4),
(278, 'testasp.vulnweb.com', 1, 5),
(279, 'sample@email.tst', 0, 5),
(280, '(select(0)from(select(sleep(24)))v)/*''+(select(0)f', 2, 3),
(281, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 1, 4),
(282, 'http://some-inexistent-website.acu/some_inexistent', 1, 4),
(283, '1 waitfor delay ''0:0:8'' -- ', 2, 3),
(284, '../../../../../../../../../../etc/passwd.tst', 1, 4),
(285, '1some_inexistent_file_with_long_name.tst', 1, 4),
(286, 'VL9y1VPc''; waitfor delay ''0:0:8'' -- ', 2, 3),
(287, 'Http://testasp.vulnweb.com/t/fit.txt', 1, 4),
(288, '3qMXrdBD'';select pg_sleep(8); -- ', 2, 3),
(289, 'sample@email.tst', 0, 4),
(290, 'http://testasp.vulnweb.com/t/fit.txt?.tst', 1, 4),
(291, 'X0xYMyzl'');select pg_sleep(8); -- ', 2, 3),
(292, 'sample@email.tst', 0, 3),
(293, 'testasp.vulnweb.com', 1, 4),
(294, 'IlXpPjtm''));select pg_sleep(8); -- ', 2, 3),
(295, 'sample@email.tst', 1, 0),
(296, 'http://some-inexistent-website.acu/some_inexistent', 1, 3),
(297, 'sample%40email.tst', 0, 5),
(298, '1some_inexistent_file_with_long_name.tst', 1, 3),
(299, 'sample@email.tst', 2, 0),
(300, 'sample%40email.tst', 0, 5),
(301, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 1, 4),
(302, 'sample@email.tst', 0, 0),
(303, 'Http://testasp.vulnweb.com/t/fit.txt', 1, 3),
(304, '/../..//../..//../..//../..//../..//etc/passwd.tst', 1, 4),
(305, 'http://testasp.vulnweb.com/t/fit.txt?.tst', 1, 3),
(306, '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', 1, 4),
(307, '/etc/passwd', 1, 4),
(308, 'testasp.vulnweb.com', 1, 3),
(309, 'sample@email.tst&n996683=v916581', 1, 5),
(310, '%2fetc%2fpasswd', 1, 4),
(311, 'http://some-inexistent-website.acu/some_inexistent', 2, 5),
(312, '-1 OR 2+576-576-1=0+0+0+1 -- ', 0, 5),
(313, '/.././.././.././.././.././.././.././../etc/./passw', 1, 4),
(314, '1some_inexistent_file_with_long_name.tst', 2, 5),
(315, '-1 OR 2+947-947-1=0+0+0+1', 0, 5),
(316, 'sample@email.tst', 1, 5),
(317, '../..//../..//../..//../..//../..//../..//../..//.', 1, 4),
(318, 'Http://testasp.vulnweb.com/t/fit.txt', 2, 5),
(319, '../.../.././../.../.././../.../.././../.../.././..', 1, 4),
(320, 'http://testasp.vulnweb.com/t/fit.txt?.tst', 2, 5),
(321, 'sample@email.tst', 1, 5),
(322, '................etc/passwd', 1, 4),
(323, 'testasp.vulnweb.com', 2, 5),
(324, '-1'' OR 2+473-473-1=0+0+0+1 -- ', 0, 5),
(325, 'http://some-inexistent-website.acu/some_inexistent', 2, 4),
(326, 'invalid../../../../../../../../../../etc/passwd/./', 1, 4),
(327, '1some_inexistent_file_with_long_name.tst', 2, 4),
(328, 'file:///etc/passwd', 1, 4),
(329, 'Http://testasp.vulnweb.com/t/fit.txt', 2, 4),
(330, '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', 1, 4),
(331, '-1'' OR 2+468-468-1=0+0+0+1 or ''fF4RvVYI''=''', 0, 5),
(332, 'WEB-INF/web.xml', 1, 4),
(333, 'http://testasp.vulnweb.com/t/fit.txt?.tst', 2, 4),
(334, ')', 1, 5),
(335, '-1" OR 2+667-667-1=0+0+0+1 -- ', 0, 5),
(336, '/WEB-INF/web.xml', 1, 4),
(337, 'testasp.vulnweb.com', 2, 4),
(338, '!(()&&!|*|*|', 1, 5),
(339, 'if(now()=sysdate(),sleep(27),0)/*''XOR(if(now()=sys', 0, 5),
(340, 'http://some-inexistent-website.acu/some_inexistent', 2, 3),
(341, 'WEB-INF\\web.xml', 1, 4),
(342, '^(#$!@#$)(()))******', 1, 5),
(343, '1some_inexistent_file_with_long_name.tst', 2, 3),
(344, ')', 1, 4),
(345, '../../../../../../../../../../etc/passwd', 1, 3),
(346, 'Http://testasp.vulnweb.com/t/fit.txt', 2, 3),
(347, '../../../../../../../../../../../../../../../proc/', 1, 3),
(348, '!(()&&!|*|*|', 1, 4),
(349, '(select(0)from(select(sleep(27)))v)/*''+(select(0)f', 0, 5),
(350, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 1, 3),
(351, '^(#$!@#$)(()))******', 1, 4),
(352, '1 waitfor delay ''0:0:9'' -- ', 0, 5),
(353, 'http://testasp.vulnweb.com/t/fit.txt?.tst', 2, 3),
(354, '../../../../../../../../../../etc/passwd.tst', 1, 3),
(355, 'testasp.vulnweb.com', 2, 3),
(356, ')', 1, 3),
(357, 'http://some-inexistent-website.acu/some_inexistent', 0, 5),
(358, '!(()&&!|*|*|', 1, 3),
(359, '1some_inexistent_file_with_long_name.tst', 0, 5),
(360, '^(#$!@#$)(()))******', 1, 3),
(361, 'G2oKdicw''; waitfor delay ''0:0:9'' -- ', 0, 5),
(362, 'Http://testasp.vulnweb.com/t/fit.txt', 0, 5),
(363, ')', 2, 5),
(364, 'http://testasp.vulnweb.com/t/fit.txt?.tst', 0, 5),
(365, '!(()&&!|*|*|', 2, 5),
(366, 'testasp.vulnweb.com', 0, 5),
(367, '^(#$!@#$)(()))******', 2, 5),
(368, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 1, 3),
(369, 'aeUIfGJI'';select pg_sleep(9); -- ', 0, 5),
(370, 'http://some-inexistent-website.acu/some_inexistent', 0, 4),
(371, ')', 2, 4),
(372, '/../..//../..//../..//../..//../..//etc/passwd.tst', 1, 3),
(373, '5CHyOBAf'');select pg_sleep(18); -- ', 0, 5),
(374, '!(()&&!|*|*|', 2, 4),
(375, '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', 1, 3),
(376, 'xCQED3PW''));select pg_sleep(18); -- ', 0, 5),
(377, '1some_inexistent_file_with_long_name.tst', 0, 4),
(378, '^(#$!@#$)(()))******', 2, 4),
(379, '/etc/passwd', 1, 3),
(380, 'Http://testasp.vulnweb.com/t/fit.txt', 0, 4),
(381, '%2fetc%2fpasswd', 1, 3),
(382, 'sample%40email.tst', 0, 4),
(383, ')', 2, 3),
(384, 'http://testasp.vulnweb.com/t/fit.txt?.tst', 0, 4),
(385, '/.././.././.././.././.././.././.././../etc/./passw', 1, 3),
(386, '!(()&&!|*|*|', 2, 3),
(387, 'sample%40email.tst', 0, 4),
(388, '^(#$!@#$)(()))******', 2, 3),
(389, '../..//../..//../..//../..//../..//../..//../..//.', 1, 3),
(390, 'testasp.vulnweb.com', 0, 4),
(391, '-1 OR 2+763-763-1=0+0+0+1 -- ', 0, 4),
(392, ')', 0, 5),
(393, '../.../.././../.../.././../.../.././../.../.././..', 1, 3),
(394, 'http://some-inexistent-website.acu/some_inexistent', 0, 3),
(395, '-1 OR 2+627-627-1=0+0+0+1', 0, 4),
(396, '................etc/passwd', 1, 3),
(397, '!(()&&!|*|*|', 0, 5),
(398, '1some_inexistent_file_with_long_name.tst', 0, 3),
(399, '-1'' OR 2+52-52-1=0+0+0+1 -- ', 0, 4),
(400, 'invalid../../../../../../../../../../etc/passwd/./', 1, 3),
(401, '^(#$!@#$)(()))******', 0, 5),
(402, 'Http://testasp.vulnweb.com/t/fit.txt', 0, 3),
(403, '-1'' OR 2+881-881-1=0+0+0+1 or ''v91j27cY''=''', 0, 4),
(404, ')', 0, 4),
(405, 'file:///etc/passwd', 1, 3),
(406, '-1" OR 2+666-666-1=0+0+0+1 -- ', 0, 4),
(407, 'http://testasp.vulnweb.com/t/fit.txt?.tst', 0, 3),
(408, '!(()&&!|*|*|', 0, 4),
(409, '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', 1, 3),
(410, 'if(now()=sysdate(),sleep(20),0)/*''XOR(if(now()=sys', 0, 4),
(411, 'testasp.vulnweb.com', 0, 3),
(412, '^(#$!@#$)(()))******', 0, 4),
(413, '(select(0)from(select(sleep(20)))v)/*''+(select(0)f', 0, 4),
(414, 'sample@email.tst', 0, 5),
(415, ')', 0, 3),
(416, '1 waitfor delay ''0:0:30'' -- ', 0, 4),
(417, 'sample@email.tst', 1, 5),
(418, '!(()&&!|*|*|', 0, 3),
(419, 'WEB-INF/web.xml', 1, 3),
(420, 'VdWpfci4''; waitfor delay ''0:0:30'' -- ', 0, 4),
(421, 'sample@email.tst', 0, 5),
(422, 'sample@email.tst', 0, 5),
(423, '/WEB-INF/web.xml', 1, 3),
(424, 'wgD2uze7'';select pg_sleep(30); -- ', 0, 4),
(425, 'sample@email.tst', 0, 5),
(426, 'WEB-INF\\web.xml', 1, 3),
(427, 'ADtI7Qa5'');select pg_sleep(10); -- ', 0, 4),
(428, 'sample@email.tst', 0, 4),
(429, 'iMfLjK5l''));select pg_sleep(10); -- ', 0, 4),
(430, '../../../../../../../../../../etc/passwd', 2, 5),
(431, 'sample@email.tst', 1, 4),
(432, 'sample%40email.tst', 0, 3),
(433, '../../../../../../../../../../../../../../../proc/', 2, 5),
(434, '^(#$!@#$)(()))******', 0, 3),
(435, 'sample@email.tst', 0, 4),
(436, 'sample%40email.tst', 0, 3),
(437, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 2, 5),
(438, 'sample@email.tst', 0, 5),
(439, 'sample@email.tst', 0, 4),
(440, '-1 OR 2+317-317-1=0+0+0+1 -- ', 0, 3),
(441, '../../../../../../../../../../etc/passwd.tst', 2, 5),
(442, 'sample@email.tst', 0, 4),
(443, '-1 OR 2+481-481-1=0+0+0+1', 0, 3),
(444, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 2, 5),
(445, 'sample@email.tst', 0, 3),
(446, '/../..//../..//../..//../..//../..//etc/passwd.tst', 2, 5),
(447, '-1'' OR 2+591-591-1=0+0+0+1 -- ', 0, 3),
(448, 'sample@email.tst', 0, 5),
(449, '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', 2, 5),
(450, '-1'' OR 2+841-841-1=0+0+0+1 or ''blveMmLg''=''', 0, 3),
(451, 'sample@email.tst', 0, 5),
(452, '-1" OR 2+666-666-1=0+0+0+1 -- ', 0, 3),
(453, '/etc/passwd', 2, 5),
(454, 'sample@email.tst', 0, 4),
(455, 'sample@email.tst', 1, 3),
(456, 'if(now()=sysdate(),sleep(11),0)/*''XOR(if(now()=sys', 0, 3),
(457, '%2fetc%2fpasswd', 2, 5),
(458, 'sample@email.tst', 0, 4),
(459, 'sample@email.tst', 0, 3),
(460, '(select(0)from(select(sleep(22)))v)/*''+(select(0)f', 0, 3),
(461, '/.././.././.././.././.././.././.././../etc/./passw', 2, 5),
(462, 'sample@email.tst', 0, 4),
(463, '1 waitfor delay ''0:0:22'' -- ', 0, 3),
(464, '../..//../..//../..//../..//../..//../..//../..//.', 2, 5),
(465, 'sample@email.tst', 0, 3),
(466, 'sample@email.tst', 0, 3),
(467, 'sample@email.tst', 0, 3),
(468, 'sample@email.tst', 0, 3),
(469, 'sample@email.tst', 0, 3),
(470, 'sample@email.tst', 1, 0),
(471, 'JVRmQ8QR''; waitfor delay ''0:0:33'' -- ', 0, 3),
(472, '../.../.././../.../.././../.../.././../.../.././..', 2, 5),
(473, 'sample@email.tst', 1, 0),
(474, 'sample@email.tst', 1, 1),
(475, 'eOCFR5ku'';select pg_sleep(33); -- ', 0, 3),
(476, '................etc/passwd', 2, 5),
(477, 'Ecsp3cr0'');select pg_sleep(33); -- ', 0, 3),
(478, 'invalid../../../../../../../../../../etc/passwd/./', 2, 5),
(479, 'sample@email.tst', 1, 0),
(480, 'Vi9tzqDq''));select pg_sleep(33); -- ', 0, 3),
(481, 'sample@email.tst', 1, 0),
(482, 'file:///etc/passwd', 2, 5),
(483, 'sample@email.tst', 1, 5),
(484, 'sample@email.tst', 1, 0),
(485, 'sample@email.tst', 1, 0),
(486, 'sample@email.tst', 1, 5),
(487, 'sample@email.tst', 2, 0),
(488, 'sample@email.tst', 1, 0),
(489, 'sample@email.tst', -1, 5),
(490, 'sample@email.tst', 2, 0),
(491, 'sample@email.tst', 2, 0),
(492, 'sample@email.tst', 2, 0),
(493, 'sample@email.tst', -1, 5),
(494, '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', 2, 5),
(495, 'sample@email.tst', 2, 1),
(496, 'sample@email.tst', 2, 0),
(497, 'WEB-INF/web.xml', 2, 5),
(498, 'sample@email.tst', -1, 5),
(499, 'sample@email.tst', 2, 0),
(500, 'sample@email.tst', -1, 5),
(501, 'sample@email.tst', 2, 0),
(502, 'sample@email.tst', -1, 5),
(503, 'sample@email.tst', 0, 0),
(504, 'sample@email.tst', 0, 5),
(505, 'sample@email.tst', 0, 0),
(506, 'sample@email.tst', 0, 5),
(507, '/WEB-INF/web.xml', 2, 5),
(508, 'sample@email.tst', 0, 0),
(509, 'sample@email.tst', -1, 5),
(510, 'WEB-INF\\web.xml', 2, 5),
(511, '../../../../../../../../../../etc/passwd', 2, 4),
(512, 'sample@email.tst', -1, 5),
(513, 'sample@email.tst', 0, 1),
(514, '''"()', 1, 5),
(515, 'sample@email.tst', 1, 5),
(516, 'sample@email.tst', 0, 0),
(517, '../../../../../../../../../../../../../../../proc/', 2, 4),
(518, 'sample@email.tst', 0, 0),
(519, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 2, 4),
(520, 'sample@email.tst', 0, 0),
(521, 'sample@email.tst', 0, 5),
(522, '../../../../../../../../../../etc/passwd.tst', 2, 4),
(523, '''"()', 1, 4),
(524, 'sample@email.tst', 0, 0),
(525, 'sample@email.tst', -1, 5),
(526, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 2, 4),
(527, ';print(md5(acunetix_wvs_security_test));', 1, 5),
(528, 'sample@email.tst', -1, 5),
(529, 'http://testasp.vulnweb.com/t/xss.html?%00.tst', 1, 5),
(530, ''';print(md5(acunetix_wvs_security_test));$a=''', 1, 5),
(531, 'http://testasp.vulnweb.com/t/xss.html?%00.tst', 1, 4),
(532, '''"()', 1, 3),
(533, '/../..//../..//../..//../..//../..//etc/passwd.tst', 2, 4),
(534, 'http://testasp.vulnweb.com/t/xss.html?%00.tst', 1, 3),
(535, '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', 2, 4),
(536, 'http://testasp.vulnweb.com/t/xss.html?%00.tst', 2, 5),
(537, '/etc/passwd', 2, 4),
(538, '";print(md5(acunetix_wvs_security_test));$a="', 1, 5),
(539, 'http://testasp.vulnweb.com/t/xss.html?%00.tst', 2, 4),
(540, '''"()', 2, 5),
(541, '%2fetc%2fpasswd', 2, 4),
(542, '${@print(md5(acunetix_wvs_security_test))}', 1, 5),
(543, 'http://testasp.vulnweb.com/t/xss.html?%00.tst', 2, 3),
(544, '/.././.././.././.././.././.././.././../etc/./passw', 2, 4),
(545, '${@print(md5(acunetix_wvs_security_test))}\\', 1, 5),
(546, 'http://testasp.vulnweb.com/t/xss.html?%00.tst', 0, 5),
(547, '''"()', 2, 4),
(548, '../..//../..//../..//../..//../..//../..//../..//.', 2, 4),
(549, 'http://testasp.vulnweb.com/t/xss.html?%00.tst', 0, 4),
(550, ';print(md5(acunetix_wvs_security_test));', 1, 4),
(551, ''';print(md5(acunetix_wvs_security_test));$a=''', 1, 4),
(552, 'http://testasp.vulnweb.com/t/xss.html?%00.tst', 0, 3),
(553, '../.../.././../.../.././../.../.././../.../.././..', 2, 4),
(554, '";print(md5(acunetix_wvs_security_test));$a="', 1, 4),
(555, 'sample@email.tst', 0, 5),
(556, '................etc/passwd', 2, 4),
(557, '''"()', 2, 3),
(558, 'sample@email.tst', 0, 4),
(559, '${@print(md5(acunetix_wvs_security_test))}', 1, 4),
(560, 'invalid../../../../../../../../../../etc/passwd/./', 2, 4),
(561, 'file:///etc/passwd', 2, 4),
(562, 'sample@email.tst', 0, 3),
(563, '${@print(md5(acunetix_wvs_security_test))}\\', 1, 4),
(564, '''"()', 0, 5),
(565, 'sample@email.tst', -1, 5),
(566, ';print(md5(acunetix_wvs_security_test));', 1, 3),
(567, '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', 2, 4),
(568, 'sample@email.tst', 1, 0),
(569, 'sample@email.tst', 0, 5),
(570, 'WEB-INF/web.xml', 2, 4),
(571, ''';print(md5(acunetix_wvs_security_test));$a=''', 1, 3),
(572, 'sample@email.tst', 2, 0),
(573, '''"()', 0, 4),
(574, 'sample@email.tst', 0, 5),
(575, '/WEB-INF/web.xml', 2, 4),
(576, '";print(md5(acunetix_wvs_security_test));$a="', 1, 3),
(577, 'sample@email.tst', 0, 0),
(578, 'sample@email.tst', 0, 5),
(579, 'WEB-INF\\web.xml', 2, 4),
(580, '${@print(md5(acunetix_wvs_security_test))}', 1, 3),
(581, '''"()', 0, 3),
(582, 'tambah_aksi_rat', 1, 5),
(583, '../../../../../../../../../../etc/passwd', 2, 3),
(584, 'sample@email.tst', 1, 4),
(585, '${@print(md5(acunetix_wvs_security_test))}\\', 1, 3),
(586, 'tambah_aksi_rat', 1, 5),
(587, 'sample@email.tst', 1, 4),
(588, '../../../../../../../../../../../../../../../proc/', 2, 3),
(589, 'sample@email.tst', 0, 5),
(590, ';print(md5(acunetix_wvs_security_test));', 2, 5),
(591, 'tambah_aksi_rat/.', 1, 5),
(592, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 2, 3),
(593, 'sample@email.tst', -1, 4),
(594, ''';print(md5(acunetix_wvs_security_test));$a=''', 2, 5),
(595, 'tambah_aksi_rat', 1, 4),
(596, '../../../../../../../../../../etc/passwd.tst', 2, 3),
(597, 'sample@email.tst', -1, 4),
(598, '";print(md5(acunetix_wvs_security_test));$a="', 2, 5),
(599, 'tambah_aksi_rat', 1, 4),
(600, 'sample@email.tst', 0, 4),
(601, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 2, 3),
(602, '${@print(md5(acunetix_wvs_security_test))}', 2, 5),
(603, '${@print(md5(acunetix_wvs_security_test))}\\', 2, 5),
(604, '/../..//../..//../..//../..//../..//etc/passwd.tst', 2, 3),
(605, 'sample@email.tst', 0, 3),
(606, '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', 2, 3),
(607, ';print(md5(acunetix_wvs_security_test));', 2, 4),
(608, 'tambah_aksi_rat/.', 1, 4),
(609, ''';print(md5(acunetix_wvs_security_test));$a=''', 2, 4),
(610, '/etc/passwd', 2, 3),
(611, 'sample@email.tst', -1, 4),
(612, '";print(md5(acunetix_wvs_security_test));$a="', 2, 4),
(613, 'sample@email.tst', 1, 0),
(614, 'tambah_aksi_rat', 1, 3),
(615, 'sample@email.tst', -1, 4),
(616, '${@print(md5(acunetix_wvs_security_test))}', 2, 4),
(617, '%2fetc%2fpasswd', 2, 3),
(618, 'sample@email.tst', -1, 4),
(619, '${@print(md5(acunetix_wvs_security_test))}\\', 2, 4),
(620, '/.././.././.././.././.././.././.././../etc/./passw', 2, 3),
(621, 'sample@email.tst', 2, 0),
(622, '../..//../..//../..//../..//../..//../..//../..//.', 2, 3),
(623, ';print(md5(acunetix_wvs_security_test));', 2, 3),
(624, ''';print(md5(acunetix_wvs_security_test));$a=''', 2, 3),
(625, '../.../.././../.../.././../.../.././../.../.././..', 2, 3),
(626, '";print(md5(acunetix_wvs_security_test));$a="', 2, 3),
(627, 'sample@email.tst', 0, 4),
(628, '................etc/passwd', 2, 3),
(629, 'tambah_aksi_rat', 1, 3),
(630, 'sample@email.tst', 0, 4),
(631, '${@print(md5(acunetix_wvs_security_test))}', 2, 3),
(632, 'invalid../../../../../../../../../../etc/passwd/./', 2, 3),
(633, 'tambah_aksi_rat/.', 1, 3),
(634, 'sample@email.tst', -1, 4),
(635, '${@print(md5(acunetix_wvs_security_test))}\\', 2, 3),
(636, 'file:///etc/passwd', 2, 3),
(637, 'tambah_aksi_rat', 2, 5),
(638, ';print(md5(acunetix_wvs_security_test));', 0, 5),
(639, 'sample@email.tst', -1, 4),
(640, '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', 2, 3),
(641, 'tambah_aksi_rat', 2, 5),
(642, 'sample@email.tst', 1, 4),
(643, 'WEB-INF/web.xml', 2, 3),
(644, ''';print(md5(acunetix_wvs_security_test));$a=''', 0, 5),
(645, 'tambah_aksi_rat/.', 2, 5),
(646, 'sample@email.tst', 0, 4),
(647, '";print(md5(acunetix_wvs_security_test));$a="', 0, 5),
(648, 'sample@email.tst', 0, 0),
(649, 'tambah_aksi_rat', 2, 4),
(650, '${@print(md5(acunetix_wvs_security_test))}', 0, 5),
(651, 'sample@email.tst', -1, 4),
(652, 'tambah_aksi_rat', 2, 4),
(653, '${@print(md5(acunetix_wvs_security_test))}\\', 0, 5),
(654, 'sample@email.tst', -1, 4),
(655, '/WEB-INF/web.xml', 2, 3),
(656, 'tambah_aksi_rat/.', 2, 4),
(657, 'WEB-INF\\web.xml', 2, 3),
(658, 'tambah_aksi_rat', 2, 3),
(659, '../../../../../../../../../../etc/passwd', 0, 5),
(660, 'tambah_aksi_rat', 2, 3),
(661, '../../../../../../../../../../../../../../../proc/', 0, 5),
(662, ';print(md5(acunetix_wvs_security_test));', 0, 4),
(663, 'sample@email.tst', -1, 4),
(664, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 0, 5),
(665, 'http://hitRAxXnpzjVj.bxss.me/', 1, 5),
(666, 'sample@email.tst', 0, 4),
(667, ''';print(md5(acunetix_wvs_security_test));$a=''', 0, 4),
(668, '../../../../../../../../../../etc/passwd.tst', 0, 5),
(669, 'sample@email.tst', 0, 4),
(670, '";print(md5(acunetix_wvs_security_test));$a="', 0, 4),
(671, 'tambah_aksi_rat/.', 2, 3),
(672, 'http://hitulpp2hTBX0.bxss.me/', 1, 4),
(673, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 0, 5),
(674, 'sample@email.tst', 0, 4),
(675, '${@print(md5(acunetix_wvs_security_test))}', 0, 4),
(676, 'tambah_aksi_rat', 0, 5),
(677, '/../..//../..//../..//../..//../..//etc/passwd.tst', 0, 5),
(678, 'sample@email.tst', 1, 3),
(679, '${@print(md5(acunetix_wvs_security_test))}\\', 0, 4),
(680, 'tambah_aksi_rat', 0, 5),
(681, 'http://hitOwAnOn3ZXG.bxss.me/', 1, 3),
(682, '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', 0, 5),
(683, ';print(md5(acunetix_wvs_security_test));', 0, 3),
(684, 'sample@email.tst', 1, 3),
(685, 'http://hitibLwve41wO.bxss.me/', 2, 5),
(686, '/etc/passwd', 0, 5),
(687, 'sample@email.tst', -1, 3),
(688, ''';print(md5(acunetix_wvs_security_test));$a=''', 0, 3),
(689, '%2fetc%2fpasswd', 0, 5),
(690, 'sample@email.tst', -1, 3),
(691, '";print(md5(acunetix_wvs_security_test));$a="', 0, 3),
(692, 'http://hitUKE33PfAkM.bxss.me/', 2, 4),
(693, 'tambah_aksi_rat/.', 0, 5),
(694, '${@print(md5(acunetix_wvs_security_test))}', 0, 3),
(695, 'sample@email.tst', -1, 3),
(696, 'tambah_aksi_rat', 0, 4),
(697, 'http://hitjSwAknTfC5.bxss.me/', 2, 3),
(698, 'sample@email.tst', -1, 3),
(699, '${@print(md5(acunetix_wvs_security_test))}\\', 0, 3),
(700, 'tambah_aksi_rat', 0, 4),
(701, '/.././.././.././.././.././.././.././../etc/./passw', 0, 5),
(702, 'http://hitwJrqvmENTZ.bxss.me/', 0, 5),
(703, 'tambah_aksi_rat/.', 0, 4),
(704, 'sample@email.tst', 0, 5),
(705, 'sample@email.tst', -1, 3),
(706, 'tambah_aksi_rat', 0, 3),
(707, 'sample@email.tst', 0, 5),
(708, '../..//../..//../..//../..//../..//../..//../..//.', 0, 5),
(709, 'sample@email.tst', 0, 3),
(710, 'http://hitDjze1XxXx2.bxss.me/', 0, 4),
(711, 'sample@email.tst', 0, 5),
(712, 'tambah_aksi_rat', 0, 3),
(713, '../.../.././../.../.././../.../.././../.../.././..', 0, 5),
(714, 'sample@email.tst', 0, 3),
(715, 'http://hitbfQSvdObNM.bxss.me/', 0, 3),
(716, 'tambah_aksi_rat/.', 0, 3),
(717, 'sample@email.tst', -1, 3),
(718, '................etc/passwd', 0, 5),
(719, 'sample@email.tst', 0, 5),
(720, 'sample@email.tst', 0, 5),
(721, 'invalid../../../../../../../../../../etc/passwd/./', 0, 5),
(722, 'sample@email.tst', 0, 5),
(723, 'sample@email.tst', 0, 5),
(724, 'sample@email.tst', -1, 3),
(725, 'sample@email.tst', 0, 5),
(726, 'sample@email.tst', 0, 4),
(727, 'file:///etc/passwd', 0, 5),
(728, 'sample@email.tst', 0, 4),
(729, 'sample@email.tst', 1, 3),
(730, 'sample@email.tst', 0, 5),
(731, 'sample@email.tst', 0, 4),
(732, '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', 0, 5),
(733, 'sample@email.tst', 8, 3),
(734, 'sample@email.tst', 0, 3),
(735, 'sample@email.tst', 0, 4),
(736, 'sample@email.tst', 0, 4),
(737, 'WEB-INF/web.xml', 0, 5),
(738, 'sample@email.tst', 0, 4),
(739, 'sample@email.tst', 1, 0),
(740, 'sample@email.tst', 0, 4),
(741, '/WEB-INF/web.xml', 0, 5),
(742, 'sample@email.tst', 0, 4),
(743, 'sample@email.tst', 0, 4),
(744, 'WEB-INF\\web.xml', 0, 5),
(745, 'sample@email.tst', 2, 0),
(746, 'sample@email.tst', 0, 3),
(747, 'sample@email.tst', -1, 3),
(748, 'sample@email.tst', 0, 3),
(749, '../../../../../../../../../../etc/passwd', 0, 4),
(750, 'sample@email.tst', 0, 3),
(751, 'sample@email.tst', -1, 3),
(752, 'sample@email.tst', 0, 0),
(753, 'sample@email.tst', 0, 3),
(754, '../../../../../../../../../../../../../../../proc/', 0, 4),
(755, 'sample@email.tst', -1, 3),
(756, 'sample@email.tst', 0, 3),
(757, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 0, 4),
(758, '1''"', 1, 5),
(759, 'sample@email.tst', 0, 3),
(760, 'sample@email.tst', 0, 3),
(761, '../../../../../../../../../../etc/passwd.tst', 0, 4),
(762, '\\', 1, 5),
(763, 'sample@email.tst', 0, 3),
(764, 'sample@email.tst', 0, 3),
(765, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 0, 4),
(766, 'sample@email.tst', 1, 0),
(767, 'sample@email.tst', 1, 0),
(768, '/../..//../..//../..//../..//../..//etc/passwd.tst', 0, 4),
(769, 'sample@email.tst', 0, 3),
(770, 'sample@email.tst', 1, 0),
(771, 'sample@email.tst', 1, 0),
(772, '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', 0, 4),
(773, '1', 1, 5),
(774, 'sample@email.tst', 1, 0),
(775, 'sample@email.tst', 0, 3),
(776, '/etc/passwd', 0, 4),
(777, 'sample@email.tst', 1, 0),
(778, '@@3RXd2', 1, 5),
(779, '%2fetc%2fpasswd', 0, 4),
(780, 'sample@email.tst', 1, 0),
(781, 'sample@email.tst', 1, 5),
(782, 'JyI=', 1, 5),
(783, '/.././.././.././.././.././.././.././../etc/./passw', 0, 4),
(784, 'sample@email.tst', 1, 0),
(785, 'sample@email.tst', 1, 5),
(786, '''"', 1, 5),
(787, 'sample@email.tst', 2, 0),
(788, '../..//../..//../..//../..//../..//../..//../..//.', 0, 4),
(789, 'sample@email.tst', 1, -1),
(790, 'sample@email.tst', 2, 0),
(791, '''''""', 1, 5),
(792, 'sample@email.tst', 2, 0),
(793, '../.../.././../.../.././../.../.././../.../.././..', 0, 4),
(794, 'sample@email.tst', 1, -1),
(795, 'sample@email.tst', 2, 0),
(796, '(select convert(int,CHAR(65)))', 1, 5),
(797, 'sample@email.tst', 2, 0),
(798, '................etc/passwd', 0, 4),
(799, 'sample@email.tst', 1, -1),
(800, 'sample@email.tst', 2, 0),
(801, '1''"', 1, 4),
(802, 'sample@email.tst', 2, 0),
(803, 'invalid../../../../../../../../../../etc/passwd/./', 0, 4),
(804, 'sample@email.tst', 0, 0),
(805, '\\', 1, 4),
(806, 'sample@email.tst', 2, 0),
(807, 'file:///etc/passwd', 0, 4),
(808, 'sample@email.tst', 0, 0),
(809, '1', 1, 4),
(810, 'sample@email.tst', 0, 0),
(811, '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', 0, 4),
(812, 'sample@email.tst', 0, 0),
(813, '@@QZXpC', 1, 4),
(814, 'sample@email.tst', 1, -1),
(815, 'sample@email.tst', 0, 0),
(816, 'WEB-INF/web.xml', 0, 4),
(817, '))))))))))))))))))))))))))))))))))))))))))))))))))', 1, 5),
(818, 'sample@email.tst', 1, -1),
(819, 'sample@email.tst', 0, 0),
(820, '/WEB-INF/web.xml', 0, 4),
(821, '))))))))))))))))))))))))))))))))))))))))))))))))))', 1, 4),
(822, 'sample@email.tst', 1, 0),
(823, '))))))))))))))))))))))))))))))))))))))))))))))))))', 1, 3),
(824, 'JyI=', 1, 4),
(825, 'sample@email.tst', 1, 0),
(826, '))))))))))))))))))))))))))))))))))))))))))))))))))', 2, 5),
(827, '''"', 1, 4),
(828, 'sample@email.tst', 1, -1),
(829, 'sample@email.tst', 0, 0),
(830, '))))))))))))))))))))))))))))))))))))))))))))))))))', 2, 4),
(831, 'WEB-INF\\web.xml', 0, 4),
(832, '''''""', 1, 4),
(833, 'sample@email.tst', 1, -1),
(834, '))))))))))))))))))))))))))))))))))))))))))))))))))', 2, 3),
(835, '../../../../../../../../../../etc/passwd', 0, 3),
(836, '(select convert(int,CHAR(65)))', 1, 4),
(837, 'sample@email.tst', 1, 1),
(838, '../../../../../../../../../../../../../../../proc/', 0, 3),
(839, '))))))))))))))))))))))))))))))))))))))))))))))))))', 0, 5),
(840, '1''"', 1, 3),
(841, 'sample@email.tst', 1, 0),
(842, '))))))))))))))))))))))))))))))))))))))))))))))))))', 0, 4),
(843, '\\', 1, 3),
(844, 'sample@email.tst', 0, 0),
(845, 'sample@email.tst', 1, -1),
(846, '))))))))))))))))))))))))))))))))))))))))))))))))))', 0, 3),
(847, '1', 1, 3),
(848, 'sample@email.tst', 1, -1),
(849, '/www.vulnweb.com', 1, 5),
(850, 'sample@email.tst', 0, 5),
(851, '@@WuaUb', 1, 3),
(852, 'sample@email.tst', 1, -1),
(853, '/www.vulnweb.com', 1, 4),
(854, 'JyI=', 1, 3),
(855, 'sample@email.tst', 1, 0),
(856, '/www.vulnweb.com', 1, 3),
(857, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 0, 3),
(858, '''"', 1, 3),
(859, '../../../../../../../../../../etc/passwd.tst', 0, 3),
(860, '/www.vulnweb.com', 2, 5),
(861, 'sample@email.tst', 1, 0),
(862, 'sample@email.tst', 0, 4),
(863, 'sample@email.tst', 1, 0),
(864, 'sample@email.tst', 0, 3),
(865, '''''""', 1, 3),
(866, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F', 0, 3),
(867, '/www.vulnweb.com', 2, 4),
(868, 'sample@email.tst', 2, 5),
(869, '(select convert(int,CHAR(65)))', 1, 3),
(870, 'sample@email.tst', 2, 5),
(871, '1''"', 2, 5),
(872, 'sample@email.tst', 2, -1),
(873, '\\', 2, 5),
(874, '/www.vulnweb.com', 2, 3),
(875, 'sample@email.tst', 2, -1),
(876, '1', 2, 5),
(877, '/../..//../..//../..//../..//../..//etc/passwd.tst', 0, 3),
(878, 'sample@email.tst', 1, 0),
(879, '/www.vulnweb.com', 0, 5),
(880, 'sample@email.tst', 2, -1),
(881, '@@2ir6K', 2, 5),
(882, '/www.vulnweb.com', 0, 4),
(883, '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', 0, 3),
(884, 'sample@email.tst', 2, 0),
(885, 'JyI=', 2, 5),
(886, 'sample@email.tst', 2, -1),
(887, '/www.vulnweb.com', 0, 3),
(888, '/etc/passwd', 0, 3),
(889, 'sample@email.tst', 0, 0),
(890, '''"', 2, 5),
(891, 'sample@email.tst', 2, -1),
(892, '%2fetc%2fpasswd', 0, 3),
(893, 'sample@email.tst', 0, 5),
(894, '''''""', 2, 5),
(895, '''"', 1, 5),
(896, '/.././.././.././.././.././.././.././../etc/./passw', 0, 3),
(897, '(select convert(int,CHAR(65)))', 2, 5),
(898, '<!--', 1, 5),
(899, '../..//../..//../..//../..//../..//../..//../..//.', 0, 3),
(900, '''"', 1, 4),
(901, 'sample@email.tst', 2, 0),
(902, '../.../.././../.../.././../.../.././../.../.././..', 0, 3),
(903, '1''"', 2, 4),
(904, 'sample@email.tst', 952566, 5),
(905, 'sample@email.tst', 2, 0),
(906, '<!--', 1, 4),
(907, '................etc/passwd', 0, 3),
(908, '\\', 2, 4),
(909, '''"', 1, 3),
(910, 'sample@email.tst', 2, -1),
(911, 'invalid../../../../../../../../../../etc/passwd/./', 0, 3),
(912, '1', 2, 4),
(913, 'file:///etc/passwd', 0, 3),
(914, '<!--', 1, 3),
(915, '@@fvWEQ', 2, 4),
(916, 'sample@email.tst', 0, 5),
(917, '''"', 2, 5),
(918, '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', 0, 3),
(919, 'sample@email.tst', 0, 5),
(920, '<!--', 2, 5),
(921, 'WEB-INF/web.xml', 0, 3),
(922, 'sample@email.tst', 2, -1),
(923, 'sample@email.tst', 0, 5),
(924, '/WEB-INF/web.xml', 0, 3),
(925, '''"', 2, 4),
(926, 'sample@email.tst', 2, 1),
(927, 'JyI=', 2, 4),
(928, 'sample@email.tst', 2, 0),
(929, '''"', 2, 4),
(930, '''''""', 2, 4),
(931, '<!--', 2, 4),
(932, '(select convert(int,CHAR(65)))', 2, 4),
(933, 'WEB-INF\\web.xml', 0, 3),
(934, '''"', 2, 3),
(935, '1''"', 2, 3),
(936, '<!--', 2, 3),
(937, 'sample@email.tst', 0, 5),
(938, 'sample@email.tst', 0, 5),
(939, 'sample@email.tst', 2, -1),
(940, '\\', 2, 3),
(941, 'sample@email.tst', 0, 5),
(942, '''"', 0, 5),
(943, 'sample@email.tst', 0, 5),
(944, 'sample@email.tst', 2, -1),
(945, '1', 2, 3),
(946, '<!--', 0, 5),
(947, 'sample@email.tst', 0, 5),
(948, 'sample@email.tst', 2, -1),
(949, 'sample@email.tst', 0, 4),
(950, '''"', 0, 4),
(951, '@@TKSd0', 2, 3),
(952, 'sample@email.tst', 0, 5),
(953, 'sample@email.tst', 2, 0),
(954, 'sample@email.tst', 2, 0),
(955, 'sample@email.tst', 0, 5),
(956, '<!--', 0, 4),
(957, 'JyI=', 2, 3),
(958, 'sample@email.tst', 922653, 4),
(959, 'sample@email.tst', 0, 5),
(960, '''"', 0, 3),
(961, 'sample@email.tst', 2, 0),
(962, '''"', 2, 3),
(963, 'sample@email.tst', 0, 4),
(964, 'sample@email.tst', 0, 5),
(965, '<!--', 0, 3),
(966, 'sample@email.tst', 0, 5),
(967, 'sample@email.tst', 0, 4),
(968, '''''""', 2, 3),
(969, 'sample@email.tst', 0, 5),
(970, 'sample@email.tst', 0, 5),
(971, 'sample@email.tst', 0, 5),
(972, 'sample@email.tst', 0, 4),
(973, '(select convert(int,CHAR(65)))', 2, 3),
(974, 'sample@email.tst', 0, -1),
(975, 'sample@email.tst', 0, 4),
(976, '1''"', 0, 5),
(977, 'sample@email.tst', 0, -1),
(978, '\\', 0, 5),
(979, 'sample@email.tst', 0, 4),
(980, 'sample@email.tst', 0, -1),
(981, '1', 0, 5),
(982, 'sample@email.tst', 0, 4),
(983, 'sample@email.tst', 0, 5),
(984, 'sample@email.tst', 0, 5),
(985, 'sample@email.tst', 0, -1),
(986, '@@oghnz', 0, 5),
(987, 'sample@email.tst', 0, 3),
(988, 'sample@email.tst', 0, 5),
(989, 'sample@email.tst', 0, 4),
(990, 'JyI=', 0, 5),
(991, 'sample@email.tst', 0, -1),
(992, 'sample@email.tst', 933446, 3),
(993, 'sample@email.tst', 0, 5),
(994, 'sample@email.tst', 0, 4),
(995, 'sample@email.tst', 0, 3),
(996, 'sample@email.tst', 0, 0),
(997, '''"', 0, 5),
(998, 'sample@email.tst', 0, 5),
(999, 'sample@email.tst', 0, 3),
(1000, 'sample@email.tst', 0, 3),
(1001, '''''""', 0, 5),
(1002, 'sample@email.tst', 0, 5),
(1003, 'sample@email.tst', 0, 3),
(1004, '(select convert(int,CHAR(65)))', 0, 5),
(1005, 'sample@email.tst', 0, 3),
(1006, 'sample@email.tst', 0, 5),
(1007, 'sample@email.tst', 1, 0),
(1008, '1''"', 0, 4),
(1009, 'sample@email.tst', 0, 3),
(1010, 'sample@email.tst', 0, 0),
(1011, 'sample@email.tst', 1, 0),
(1012, 'sample@email.tst', 0, 5),
(1013, '\\', 0, 4),
(1014, 'sample@email.tst', 0, -1),
(1015, 'sample@email.tst', 0, 3),
(1016, 'sample@email.tst', 2, 0),
(1017, '1', 0, 4),
(1018, 'sample@email.tst', 0, 3),
(1019, 'sample@email.tst', 0, -1),
(1020, 'sample@email.tst', 0, 5),
(1021, '@@bh3Xc', 0, 4),
(1022, 'sample@email.tst', 1, 0),
(1023, 'sample@email.tst', 0, 1),
(1024, 'JyI=', 0, 4),
(1025, 'sample@email.tst', 2, 0),
(1026, 'sample@email.tst', 0, 0),
(1027, '''"', 0, 4),
(1028, 'sample@email.tst', 2, 0),
(1029, 'sample@email.tst', 0, 5),
(1030, 'sample@email.tst', 0, -1),
(1031, 'sample@email.tst', 0, 0),
(1032, '''''""', 0, 4),
(1033, 'sample@email.tst', 0, 0),
(1034, 'sample@email.tst', 0, -1),
(1035, 'sample%40email.tst''"()&%<acx><ScRiPt >s4e8(9695)</', 1, 5),
(1036, 'sample@email.tst', 0, -1),
(1037, 'sample@email.tst', 0, 6),
(1038, '(select convert(int,CHAR(65)))', 0, 4),
(1039, '''"()&%<acx><ScRiPt >s4e8(9657)</ScRiPt>', 1, 5),
(1040, 'sample@email.tst', 0, 5),
(1041, 'sample@email.tst', 0, 0),
(1042, '1''"', 0, 3),
(1043, 'sample@email.tst', 0, 5),
(1044, '\\', 0, 3),
(1045, 'sample@email.tst', 0, 0),
(1046, 'sample@email.tst', 0, 5),
(1047, 'sample%40email.tst_9226', 1, 5),
(1048, '1', 0, 3),
(1049, 'sample@email.tst', 0, 0),
(1050, 'sample@email.tst', 0, 4),
(1051, '@@4kHl0', 0, 3),
(1052, 'sample@email.tst', 0, 4),
(1053, 'JyI=', 0, 3),
(1054, 'sample@email.tst', 0, 4),
(1055, 'acu2378＜s1﹥s2ʺs3ʹuca2378', 1, 5),
(1056, '''"', 0, 3),
(1057, '''''""', 0, 3),
(1058, '(select convert(int,CHAR(65)))', 0, 3),
(1059, 'sample@email.tst', 1, 5),
(1060, 'sample@email.tst', 0, 4),
(1061, 'acux8607z1z2abcxuca8607', 1, 5),
(1062, 'sample@email.tst', 0, 5),
(1063, 'sample@email.tst', 0, 4),
(1064, 'sample@email.tst', 1, 5),
(1065, 'sample@email.tst', 0, 4),
(1066, 'sample@email.tst', 0, 4),
(1067, 'sample@email.tst', 0, 5),
(1068, 'sample@email.tst', 0, 5),
(1069, '{{10000278*9999846}}', 1, 5),
(1070, 'sample@email.tst', 0, 4),
(1071, 'sample@email.tst', 0, 5),
(1072, 'sample@email.tst', 0, 4),
(1073, 'sample@email.tst', 1, 5),
(1074, 'sample@email.tst', 0, 4),
(1075, 'sample@email.tst', 0, 4),
(1076, 'sample@email.tst', 0, 4),
(1077, 'sample@email.tst', 0, 5),
(1078, 'sample@email.tst', 0, 5),
(1079, 'sample@email.tst', 0, 4),
(1080, 'sample@email.tst', 1, 4),
(1081, 'sample@email.tst', 0, 5),
(1082, 'sample@email.tst', 0, 4),
(1083, 'sample@email.tst', 0, 4),
(1084, 'sample@email.tst', 1, 5),
(1085, 'sample@email.tst', 1, 4),
(1086, 'sample@email.tst', 0, 4),
(1087, 'sample@email.tst', 1, 4),
(1088, 'sample@email.tst', 0, 4),
(1089, 'sample@email.tst', 0, 4),
(1090, 'sample@email.tst', 0, 4),
(1091, 'sample@email.tst', 0, 4),
(1092, 'sample@email.tst', 0, 4),
(1093, 'sample@email.tst', 1, 4),
(1094, 'sample@email.tst', 1, 3),
(1095, 'sample@email.tst', 0, 3),
(1096, 'sample@email.tst', 1, 3),
(1097, 'sample@email.tst', 1, 3),
(1098, 'sample@email.tst', 0, 3),
(1099, 'sample@email.tst', 0, 3),
(1100, 'sample@email.tst', 0, 3),
(1101, 'sample@email.tst', 0, 4),
(1102, 'sample@email.tst', 1, 3),
(1103, 'sample@email.tst', 0, 3),
(1104, 'sample@email.tst', 0, 4),
(1105, 'sample@email.tst', 0, 3),
(1106, 'sample@email.tst', 0, 4),
(1107, 'sample@email.tst', 1, 5),
(1108, 'sample@email.tst', 0, 3),
(1109, 'sample@email.tst', 0, 4),
(1110, 'sample@email.tst', 1, 1),
(1111, 'sample@email.tst', 1, 0),
(1112, 'sample@email.tst', 1, 0),
(1113, 'sample@email.tst', 1, 1),
(1114, 'sample@email.tst', 1, 5),
(1115, 'sample@email.tst', 1, 0),
(1116, 'sample@email.tst', 0, 4),
(1117, 'sample@email.tst', 0, 3),
(1118, 'sample@email.tst', 1, 0),
(1119, 'sample@email.tst', 0, 3),
(1120, 'sample@email.tst', 1, 0),
(1121, 'sample@email.tst', 0, 3),
(1122, 'sample@email.tst', 2, 5),
(1123, 'sample@email.tst', 1, 0),
(1124, 'sample@email.tst', 0, 3),
(1125, 'sample@email.tst', 1, 0),
(1126, 'sample@email.tst', 0, 3),
(1127, 'sample@email.tst', 2, 1),
(1128, 'sample@email.tst', 0, 3),
(1129, 'sample@email.tst', 2, 0),
(1130, 'sample@email.tst', 0, 3),
(1131, 'sample@email.tst', 2, 0),
(1132, 'sample@email.tst', 0, 3),
(1133, 'sample@email.tst', 2, 1),
(1134, 'sample@email.tst', 0, 3),
(1135, 'sample@email.tst', 2, 5),
(1136, 'sample@email.tst', 2, 0),
(1137, 'sample@email.tst', 0, 5),
(1138, 'sample@email.tst', 0, 3),
(1139, 'sample@email.tst', 0, 3),
(1140, 'sample@email.tst', 2, 0),
(1141, 'sample@email.tst', 0, 3),
(1142, 'sample@email.tst', 0, 3),
(1143, 'sample@email.tst', 2, 0),
(1144, 'sample@email.tst', 0, 3),
(1145, 'sample@email.tst', 2, 0),
(1146, 'sample@email.tst', 0, 3),
(1147, 'sample@email.tst', 2, 0),
(1148, 'sample@email.tst', 0, 3),
(1149, 'sample@email.tst', 0, 1),
(1150, 'sample@email.tst', 0, 0),
(1151, 'sample@email.tst', 0, 3),
(1152, 'sample@email.tst', 0, 0),
(1153, 'sample@email.tst', 0, 5),
(1154, 'sample@email.tst', 0, 3),
(1155, 'sample@email.tst', 0, 1),
(1156, 'sample@email.tst', 0, 3),
(1157, 'sample@email.tst', 0, 0),
(1158, 'sample@email.tst', 1, 0),
(1159, 'sample@email.tst', 0, 0),
(1160, 'sample@email.tst', 1, 0),
(1161, 'sample@email.tst', 0, 0),
(1162, 'sample@email.tst', 1, 0),
(1163, 'sample@email.tst', 0, 0),
(1164, 'sample@email.tst', 1, 0),
(1165, 'sample@email.tst', 0, 0),
(1166, 'sample@email.tst', 1, 0),
(1167, 'sample@email.tst', 1, 0),
(1168, 'sample@email.tst', 1, 0),
(1169, 'sample@email.tst', 1, 0),
(1170, 'sample@email.tst', 1, 0),
(1171, 'sample@email.tst', 1, 0),
(1172, 'sample@email.tst', 1, 0),
(1173, 'sample@email.tst', 1, 0),
(1174, 'sample@email.tst', 1, 0),
(1175, 'sample@email.tst', 1, 0),
(1176, 'sample@email.tst', 1, 0),
(1177, 'sample@email.tst', 1, 0),
(1178, 'sample@email.tst', 1, 0),
(1179, 'sample@email.tst', 1, 0),
(1180, 'sample@email.tst', 1, 0),
(1181, 'sample@email.tst', 2, 0),
(1182, 'sample@email.tst', 2, 0),
(1183, 'sample@email.tst', 2, 0),
(1184, 'sample@email.tst', 2, 0),
(1185, 'sample@email.tst', 2, 0),
(1186, 'sample@email.tst', 2, 0),
(1187, 'sample@email.tst', 2, 0),
(1188, 'sample@email.tst', 2, 0),
(1189, 'sample@email.tst', 2, 0),
(1190, 'sample@email.tst', 2, 0),
(1191, 'sample@email.tst', 2, 0),
(1192, 'sample@email.tst', 2, 0),
(1193, 'sample@email.tst', 2, 0),
(1194, 'sample@email.tst', 2, 0),
(1195, 'sample@email.tst', 2, 0),
(1196, 'sample@email.tst', 2, 0),
(1197, 'sample@email.tst', 2, 0),
(1198, 'sample@email.tst', 2, 0),
(1199, 'sample@email.tst', 2, 0),
(1200, 'sample@email.tst', 0, 0),
(1201, 'sample@email.tst', 0, 0),
(1202, 'sample@email.tst', 0, 0),
(1203, 'sample@email.tst', 0, 0),
(1204, 'sample@email.tst', 0, 0),
(1205, 'sample@email.tst', 0, 0),
(1206, 'sample@email.tst', 0, 0),
(1207, 'sample@email.tst', 0, 0),
(1208, 'sample@email.tst', 0, 0),
(1209, 'sample@email.tst', 0, 0),
(1210, 'sample@email.tst', 0, 0),
(1211, 'sample@email.tst', 0, 0),
(1212, 'sample@email.tst', 0, 0),
(1213, 'sample@email.tst', 0, 0),
(1214, 'sample@email.tst', 0, 0),
(1215, 'sample@email.tst', 0, 0),
(1216, 'sample@email.tst', 0, 0),
(1217, 'sample@email.tst', 0, 0),
(1218, 'sample@email.tst', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE IF NOT EXISTS `sejarah` (
  `id_sejarah` int(11) NOT NULL AUTO_INCREMENT,
  `isi_sejarah` varchar(10000) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  PRIMARY KEY (`id_sejarah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `isi_sejarah`, `gambar`) VALUES
(1, '<p style="text-align:justify">Pendidikan merupakan pilar utama untuk menuju kemajuan suatu bangsa. Hal ini di rasakan oleh seluruh warga masyarakat kecamatan temon yang mendambakan hadirnya sekolah lanjutan tingkat pertama di wilayah kecamatan temon. Karena sampai decade tahun 1960 an belum ada sekolah setingkat SLTP di kecamatan temon.</p>\r\n\r\n<p style="text-align:justify">Keadaan yang demikian kemudian mendorong para anggota PGRI, Perangkat desa dan warga masyarakat se kecamatan Temon untuk mendirikan sebuah SMP di wilayah kecamatan Temon.</p>\r\n\r\n<p style="text-align:justify">Pada tahun 1962,ketiga unsur kekuatan itu (PGRI,perangkat desa,dan masyarakat / Trimurti) berhasil mendirikan sebuah SMP yang selanjutnya diberi nama Trimurti,dengan menempati gedung SD Temon.</p>\r\n\r\n<p style="text-align:justify">Kepala sekolah yang oertama adalah bapak R. Kusdi Hadi Siswoyo,dengan tenaga pengajar dari guru-guru SD/Anggota PGRI se kecamatan Temon yang memiliki ijazah minimal PGSLP.</p>\r\n\r\n<p style="text-align:justify">Keberadaan SMP Trimurti sangatlah membantu warga masyarakat temon dan dapat berkembang sangat pesat. Sehingga pada sekitar tahun 1968 sudah bisa membuat tiga ruang belajar, satu ruang guru dan satu ruang tu sendiri, walaupun sangat sederhan dengan menempati tanah kas desa temon kulon progo.</p>\r\n\r\n<p style="text-align:justify">Merasa sudah mempunyai modal tiga ruang kelas, masyarakat kemudian mengusulkan kepada kepala kantor wilayah departemen pendidikan dan kebudayaan propinsi DIY agar SMP trimurti dinegrikan, Permohonan masyarakat tersebut tidak bisa terealisir, karena permintaan guru-gurru SD yang mengajar di Trimurti untuk di jadikan guru smp tidak mdi kabulkan .</p>\r\n\r\n<p style="text-align:justify">Akhirnya sebagai pengganti permohona masyarakat terswebut kantor wilaya departemen pendidikan dan kebudayaan propinsi DIY. Pada tahun 1972 memindahakan ST Negeri II wates yang bertempat di gawok (sekarang menjadi kompleks dinas pendidikan kabupaten kulon progo) ke temon dengan menempati tiga bangunanan kelas yang telah di buat trimurti, sedangkan trimurti membangun lagi di sebealah barat.</p>\r\n\r\n<p style="text-align:justify">Kepala sekolah ST negri II wates pada waktu itu bapak Drs. Suwardjo, dengan pelaksanaan Harianya di temon bapak raden Doellah Slamet Tjokro Praptoatmojo, dfengan di Bantu pengajar sebagai berikut :</p>\r\n\r\n<p style="text-align:justify">1.Riyo Wiryono</p>\r\n\r\n<p style="text-align:justify">2. djumingun Haryanto</p>\r\n\r\n<p style="text-align:justify">3. Sudijono Herusumarto</p>\r\n\r\n<p style="text-align:justify">4. Sudirman</p>\r\n\r\n<p style="text-align:justify">5. Slamet</p>\r\n\r\n<p style="text-align:justify">6. Sri sawabi</p>\r\n\r\n<p style="text-align:justify">7. tinu</p>\r\n\r\n<p style="text-align:justify">8. Supodono</p>\r\n\r\n<p style="text-align:justify">9. Kasiman !</p>\r\n\r\n<p style="text-align:justify">10. Djaswadi</p>\r\n\r\n<p style="text-align:justify">11. sadimun</p>\r\n\r\n<p style="text-align:justify">ST Negeri II Wates din Temon selama lebih kurang dua tahun dapat menambahkan enam ruang kelas baru hasil praktek siswa walaupun belum di plester.</p>\r\n\r\n<p style="text-align:justify">Keberadaaan ST Negeri II wates, Kepala Kantor Wilaya Departemen Pendidikan dan Kebudayaan</p>\r\n', 'GAPURA-min.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slideshow`
--

CREATE TABLE IF NOT EXISTS `slideshow` (
  `id_slideshow` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(300) NOT NULL,
  `judul_keterangan` varchar(100) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  PRIMARY KEY (`id_slideshow`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `slideshow`
--

INSERT INTO `slideshow` (`id_slideshow`, `gambar`, `judul_keterangan`, `keterangan`, `deskripsi`) VALUES
(1, 'GAPURA_2-min.png', 'Monsa', 'Yang Pertama dan Utama', 'SMP NEGERI 1 TEMON adalah sekolah SMP Negeri yang terletak di Provinsi DI Yogyakarta, Kulon Progo.'),
(2, 'PAPAN_NAMA-min.png', '', '', ''),
(3, 'Taman_air-min.png', '', 'Sekolah Standar Nasional', ''),
(4, 'LAB_IPA-min1.png', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slideshowteks`
--

CREATE TABLE IF NOT EXISTS `slideshowteks` (
  `id_slideshowteks` int(11) NOT NULL AUTO_INCREMENT,
  `teks1` varchar(300) NOT NULL,
  `teks2` varchar(300) NOT NULL,
  PRIMARY KEY (`id_slideshowteks`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `slideshowteks`
--

INSERT INTO `slideshowteks` (`id_slideshowteks`, `teks1`, `teks2`) VALUES
(2, ' SELAMAT DATANG DI WEBSITE SEKOLAH MENENGAH PERTAMA NEGERI 1 TEMON KABUPATEN KULON PROGO', 'Sekolah Kita (MONSA)'),
(3, 'Jangan lupa follow Instagram Kami', '@monsakulonprogo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE IF NOT EXISTS `sosmed` (
  `id_sosmed` int(11) NOT NULL AUTO_INCREMENT,
  `logo_sosmed` varchar(300) NOT NULL,
  `link_sosmed` varchar(300) NOT NULL,
  PRIMARY KEY (`id_sosmed`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id_sosmed`, `logo_sosmed`, `link_sosmed`) VALUES
(2, 'instagram.png', 'https://www.instagram.com/monsajhs/?hl=en'),
(4, 'fb11.png', 'https://www.facebook.com/pages/category/Book/SMPN-1-Temon-Kulon-Progo-1512194879000886/'),
(6, 'you.png', ''),
(8, 'twit1.png', ''),
(9, 'goo.png', ''),
(12, 'email-icon-removebg.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tautan`
--

CREATE TABLE IF NOT EXISTS `tautan` (
  `id_tautan` int(11) NOT NULL AUTO_INCREMENT,
  `judul_tautan` varchar(100) NOT NULL,
  `tujuan_tautan` varchar(300) NOT NULL,
  `logo` varchar(300) NOT NULL,
  PRIMARY KEY (`id_tautan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tautan`
--

INSERT INTO `tautan` (`id_tautan`, `judul_tautan`, `tujuan_tautan`, `logo`) VALUES
(2, 'Dinas Dikpora Kulon Progo', 'http://pendidikan.kulonprogokab.go.id/', 'logodikpora-removebg1.png'),
(4, 'PendekarKu', 'http://pendekarku.kulonprogokab.go.id/pendekarku/', 'pendekarku2.png'),
(5, 'Kabupaten Kulon Progo', 'http://kulonprogokab.go.id', 'kulonprogo__sid__9ayxorf.jpg'),
(6, 'Dinas Dikpora DIY', 'https://dikpora.jogjaprov.go.id/web/', 'dikpora_diy.png'),
(8, 'Dapodikdasmen ', 'http://dapo.dikdasmen.kemdikbud.go.id/', 'logo-dikdasmen.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visimisi`
--

CREATE TABLE IF NOT EXISTS `visimisi` (
  `id_visimisi` int(11) NOT NULL AUTO_INCREMENT,
  `isi_visi` varchar(10000) NOT NULL,
  `isi_misi` varchar(10000) NOT NULL,
  PRIMARY KEY (`id_visimisi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `visimisi`
--

INSERT INTO `visimisi` (`id_visimisi`, `isi_visi`, `isi_misi`) VALUES
(1, '<p><!-- [if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="--"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--></p>\r\n<p><!-- [if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="--"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!-- [if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\n  LatentStyleCount="267">\r\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>\r\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>\r\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>\r\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Title"/>\r\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>\r\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>\r\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>\r\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Table Grid"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>\r\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>\r\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>\r\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>\r\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/', '<p class="MsoListParagraphCxSpFirst" style="mso-add-space: auto; text-align: justify; line-height: 150%; margin: 6.0pt 0cm 10.0pt 21.3pt;"><span lang="SV" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: SV; mso-bidi-font-style: italic;">Misi SMP Negeri </span><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: IN; mso-bidi-font-style: italic;">1 Temon</span><span lang="SV" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: SV; mso-bidi-font-style: italic;"> adalah sebagai berikut :</span></p>\r\n<p class="MsoListParagraphCxSpMiddle" style="mso-add-space: auto; text-align: justify; text-indent: -14.15pt; line-height: 150%; mso-list: l0 level2 lfo1; margin: 0cm 0cm .0001pt 35.45pt;"><span lang="NL" style="font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial; mso-ansi-language: NL; mso-bidi-font-weight: bold;"><span style="mso-list: Ignore;">1.<span style="font: 7.0pt ''Times New Roman'';">   </span></span></span><span lang="NL" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: NL; mso-bidi-font-weight: bold;">Me</span><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: IN; mso-bidi-font-weight: bold;">laksanakan pembinaan dan pembiasaan peserta didik dalam menjalankan ibadah dan tercermin dalam kehidupan sehari-hari;</span></p>\r\n<p class="MsoListParagraphCxSpMiddle" style="mso-add-space: auto; text-align: justify; text-indent: -14.15pt; line-height: 150%; mso-list: l0 level2 lfo1; margin: 0cm 0cm .0001pt 35.45pt;"><span lang="NL" style="font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial; mso-ansi-language: NL; mso-bidi-font-weight: bold;"><span style="mso-list: Ignore;">2.<span style="font: 7.0pt ''Times New Roman'';">   </span></span></span><span lang="X-NONE" style="font-family: ''Arial'',''sans-serif'';">Me</span><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: IN;">laksanakan</span><span lang="X-NONE" style="font-family: ''Arial'',''sans-serif'';"> pendidikan karakter di sekolah</span><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: IN;"> melalui kegiatan kokurikuler, intra kurikuler dan ekstrakurikuler;</span></p>\r\n<p class="MsoListParagraphCxSpMiddle" style="mso-add-space: auto; text-align: justify; text-indent: -14.15pt; line-height: 150%; mso-list: l0 level2 lfo1; margin: 0cm 0cm .0001pt 35.45pt;"><span lang="SV" style="font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial; mso-ansi-language: SV; mso-bidi-font-weight: bold;"><span style="mso-list: Ignore;">3.<span style="font: 7.0pt ''Times New Roman'';">   </span></span></span><span lang="NL" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: NL;">Me</span><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: IN;">numbuhkembangkan keberanian berkomunikasi dengan baik dan benar dalam bahasa Jawa, bahasa Indonesia, bahasa Inggris; </span></p>\r\n<p class="MsoListParagraphCxSpMiddle" style="mso-add-space: auto; text-align: justify; text-indent: -14.15pt; line-height: 150%; mso-list: l0 level2 lfo1; margin: 0cm 0cm .0001pt 35.45pt;"><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial; mso-ansi-language: IN;"><span style="mso-list: Ignore;">4.<span style="font: 7.0pt ''Times New Roman'';">   </span></span></span><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: IN;">Melaksanakan pengembangan dan mengimplementasikan kurikulum sekolah;</span></p>\r\n<p class="MsoListParagraphCxSpMiddle" style="mso-add-space: auto; text-align: justify; text-indent: -14.15pt; line-height: 150%; mso-list: l0 level2 lfo1; margin: 0cm 0cm .0001pt 35.45pt;"><span lang="NL" style="font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial; mso-ansi-language: NL; mso-bidi-font-weight: bold;"><span style="mso-list: Ignore;">5.<span style="font: 7.0pt ''Times New Roman'';">   </span></span></span><span lang="NL" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: NL; mso-bidi-font-weight: bold;">Me</span><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: IN; mso-bidi-font-weight: bold;">laksanakan pembelajaran aktif, kreatif, efektif dan menyenangkan<span style="mso-spacerun: yes;">  </span>sehingga tercapai prestasi peserta didik secara optimal;</span></p>\r\n<p class="MsoListParagraphCxSpMiddle" style="mso-add-space: auto; text-align: justify; text-indent: -14.15pt; line-height: 150%; mso-list: l0 level2 lfo1; margin: 0cm 0cm .0001pt 35.45pt;"><span lang="NL" style="font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial; mso-ansi-language: NL;"><span style="mso-list: Ignore;">6.<span style="font: 7.0pt ''Times New Roman'';">   </span></span></span><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: IN;">Melaksanakan pembinaan olahraga dan seni secara efektif sehingga terbentuk warga sekolah yang berprestasi dalam bidang olahraga dan seni melalui kegiatan ekstrakurikuler;</span><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: NL;"> </span></p>\r\n<p class="MsoListParagraphCxSpMiddle" style="mso-add-space: auto; text-align: justify; text-indent: -14.15pt; line-height: 150%; mso-list: l0 level2 lfo1; margin: 0cm 0cm .0001pt 35.45pt;"><span lang="SV" style="font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial; mso-ansi-language: SV; mso-bidi-font-weight: bold;"><span style="mso-list: Ignore;">7.<span style="font: 7.0pt ''Times New Roman'';">   </span></span></span><span lang="NL" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: NL; mso-bidi-font-weight: bold;">Me</span><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: IN; mso-bidi-font-weight: bold;">laksanakan pembinaan aspek ilmu pengetahuan, teknologi informasi dan komunikasi;</span></p>\r\n<p class="MsoListParagraphCxSpLast" style="mso-add-space: auto; text-align: justify; text-indent: -14.15pt; line-height: 150%; mso-list: l0 level2 lfo1; margin: 0cm 0cm .0001pt 35.45pt;"><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: Arial; mso-ansi-language: IN; mso-bidi-font-weight: bold;"><span style="mso-list: Ignore;">8.<span style="font: 7.0pt ''Times New Roman'';">   </span></span></span><span lang="IN" style="font-family: ''Arial'',''sans-serif''; mso-ansi-language: IN; mso-bidi-font-weight: bold;">Menumbuhkan kesadaran warga sekolah yang berbudaya, peduli dan berwawasan lingkungan dengan selalu terlaksananya kebersihan, keindahan, keamanan, kekeluargaan, kesehatan dan kerindangan;</span></p>\r\n<p class="MsoListParagraphCxSpLast" style="mso-add-space: auto; text-align: justify; text-indent: -14.15pt; line-height: 150%; mso-list: l0 level2 lfo1; margin: 0cm 0cm .0001pt 35.45pt;"><span lang="IN" style="font-size: 12.0pt; font-family: ''Arial'',''sans-serif''; mso-fareast-font-family: ''Times New Roman''; mso-ansi-language: IN; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-weight: bold;">9.  Bekerjasama dengan Dinas pendidikan Pemuda dan Olahraga dan dinas lain yang terkait untuk memenuhi kebutuhan pembelajaran.</span></p>\r\n<!-- [if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="--"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]-->\r\n<p> </p>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
