-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 07:25 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `revisi_tga`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_class`
--

CREATE TABLE `tb_class` (
  `id_class` int(11) NOT NULL,
  `nama_latin` varchar(60) DEFAULT NULL,
  `nama_umum` varchar(60) DEFAULT NULL,
  `ciri_ciri` varchar(500) NOT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `gambar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_class`
--

INSERT INTO `tb_class` (`id_class`, `nama_latin`, `nama_umum`, `ciri_ciri`, `keterangan`, `gambar`) VALUES
(1, 'Aves', 'Burung', 'Seluruh tubuhnya terbungkus oleh bulu, Hampir semua Aves memiliki sayap\r\nTidak memiliki gigi, tapi memiliki paruh untuk makan, Berdarah panas', 'Aves (Burung) adalah suatu kelompok hewan yang bertulang belakang (Vertebrata) yang unik, Karena pada sebagian besar Aves adalah binatang yang beradaptasi dengan kehidupan yang secara sempurna.\r\nAves berkembang biak secara Ovipar (Bertelur). Sebagian mereka hidup menetap, namun ada juga yang hidup berpindah-pindah tempat (Migrasi).', 'photo_1552921592_2513.jpg'),
(2, 'Mamalia', 'Hewan Yang Menyusui', 'memiliki kelenjar susu, rambut atau bulu yang menutupi permukaan kulit, kulit tebal, berdarah panas, paru-paru, jantung ruang empat dan memiliki daun telinga ', 'Mamalia merupakan sebutan lain untuk hewan yang menyusui. Kata mamalia berasal dari kata Mamae yang berarti kelenjar susu. Mamalia merupakan hewan kelas vertebrata yang memiliki kelenjar susu sehingga binatang betina mamalia mampu menyusui anaknya. Mamalia sebagian besar berkembang biak dengan cara melahirkan meski ada sebagian yang bertelur atau disebut monotremata.', 'photo_1552922025_6481.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_famili`
--

CREATE TABLE `tb_famili` (
  `id_famili` int(11) NOT NULL,
  `nama_latin` varchar(60) DEFAULT NULL,
  `nama_umum` varchar(60) DEFAULT NULL,
  `ciri_ciri` varchar(300) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `id_ordo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_famili`
--

INSERT INTO `tb_famili` (`id_famili`, `nama_latin`, `nama_umum`, `ciri_ciri`, `keterangan`, `gambar`, `id_ordo`) VALUES
(1, 'Felidae', 'Kucing', 'Daun telinga kebanyakan berbentuk segitiga dan tegak. Taring jelas dan besar. kuku yang memiliki kantung sehingga dapat dikeluarmasukkan sesuai keperluan', 'Felidae adalah nama ilmiah untuk hewan jenis kucing. Kucing merupakan hewan karnivora. Secara umum, felidae adalah hewan nokturnal (aktif di malam hari) dan soliter (penyendiri). Sebagian besar kucing liar hidup di habitat yang susah diakses. Kebanyakan felids adalah karnivora yang pandai memanjat dibandingkan karnivora lain dan mempunyai kecepatan yang sangat kencang jika berlari. Felids hidup di berbagai habitat seperti pegunungan, gurun, bahkan salju. ', 'photo_1552922809_9976.jpg', 1),
(2, 'Muscicapidae', ' Sikatan', 'Bertubuh kecil, memiliki paruh kecil dan pipih, kaki kecil dengan tungkai yang ramping. Pemakan serangga', 'Suku Muscicapidae sering dijumpai pada pepohonan yang tinggi, area pergerakan dari dahan tertinggi pohon hingga ke semak belukar. Spesies yang berbiak di daerah tropis adalah spesies penetap, sementara spesies yang berbiak di daerah subtropis bermigrasi ke daerah tropis pada musim dingin.\r\nSuku burung ini umumnya hidup soliter atau berpasangan, walaupun beberapa diantaranya mencari makan dengan bergabung bersama kelompok spesies lainnya. Mencari makan dengan berburu serangga, ', 'photo_1552971757_3868.jpg', 2),
(3, 'Hominidae', 'Kera Besar', 'primata besar, tanpa ekor, dengan spesies terkecil yang hidup yaitu bonobo dengan berat 30-40 kilogram, dan yang terbesar yaitu gorila, dengan jantan seberat 140-180 kilogram. Disemua kera besar, jantan, rata-rata, lebih besar dan kuat dari betina', 'Hominidae  juga dikenal sebagai kera besar membentuk sebuah keluarga taksonomi dari primata, mengikutkan empat genera yang masih hidup: simpanse (Pan), gorila (Gorilla), manusia (Homo), dan orangutan (Pongo).  Kebanyakan spesies adalah omnivora, tetapi buah-buahan adalah makanan yang disukai di antara semua spesies kecuali beberapa kelompok manusia.  Kehamilan pada kera besar berlangsung selama 8-9 bulan, dan menghasilkan satu keturunan, atau, jarang sekali, kembar. ', 'photo_1554392877_3951.jpg', 3),
(4, 'Elephantidae', 'Gajah', 'bertubuh besar, memiliki belalai dan gading', 'Elephantidae adalah keluarga dari gajah dan mamut, yang merupakan mamalia darat yang besar dengan belalai dan gading. Kebanyakan genus dan spesies dari keluarga ini sudah punah. Hanya dua genus yang masih hidup yaitu Loxodonta (Gajah Afrika) Dan Elephas (Gajah Asia).', 'NOIMAGE.jpg', 4),
(6, 'Bovidae', 'Hewan Berkuku Belah', 'Mempunyai tanduk dan bertubuh agak gelap', 'Bovidae adalah keluarga biologis hewan berkuku belah dan hewan pemamah biak.Puncak kegiatan mereka biasanya terjadi saat fajar atau senja. Bovid biasanya beristirahat sebelum fajar, selama siang hari, dan setelah gelap. Mereka hidup secara soliter dan juga berkoloni. Ukuran dan bentuk tanduk sangat bervariasi, meskipun bahan dasarnya sama yaitu keratin beberapa diantaranya berbentuk spiral, berbentuk bengkok atau bergalur.', 'photo_1554615360_6675.jpg', 9),
(7, 'Leporidae', 'Kelinci', 'memiliki ekor pendek, berbulu, telinga panjang , kaki belakang panjang  dengan empat jari di setiap kaki, dan kaki depan yang lebih pendek, dengan masing-masing lima jari. ', 'Ukuran leporid mulai dari kelinci kerdil ( Brachylagus idahoensis ), dengan panjang kepala dan tubuh 25–29 cm, dan berat sekitar 300 gram, hingga kelinci Eropa ( Lepus europaeus ), yang berkepala 50–76 cm. -panjang tubuh, dan berat 2,5 hingga 5 kilogram. Masa kehamilan pada leporid bervariasi dari sekitar 28 hingga 50 hari', 'NOIMAGE.jpg', 10),
(8, 'Sturnidae', 'Jalak', 'berukuran sedang (sekitar 20–25 cm), gagah, dengan paruh yang kuat, tajam dan lurus. Berkaki panjang sebanding dengan tubuhnya. Bersuara ribut, dan berceloteh keras,  kadang-kadang meniru suara burung lainnya', 'Jalak (Ingg. starling) adalah nama sekelompok burung pengicau dari suku Sturnidae. Burung yang umumnya berukuran sedang (sekitar 20–25 cm), gagah, dengan paruh yang kuat, tajam dan lurus. Burung jalak relatif mudah dijinakkan. Dalam kandang burung ini sangat aktif bergerak dan berkicau. Karena itu penggemar burung kicau memelihara burung ini untuk melatih jenis burung kicau lain.', 'photo_1555087157_4570.jpg', 2),
(9, 'Cercopithecidae', 'Monyet Dunia Lama', 'Memiliki lubang hidung berdekatan dan menghadap ke bawah, ekor panjang, dan memiliki bercak kulit berwarna cerah di pantat ', 'Monyet Dunia Lama adalah hewan asli Afrika dan Asia di saat sekarang, yang mendiami berbagai lingkungan dari hutan hujan tropis ke savana, semak-semak dan daerah pegunungan, dan juga dikenal dari Eropa dalam catatan fosil. ', 'photo_1555092672_7290.jpg', 3),
(10, 'Rhinocerotidae', 'Badak', 'Berukuran besar dan dapat mencapai bobot lebih dari satu ton, memiliki cula dengan satu atau dua cula pada bagian tengah dahi. Memiliki kulit tebal berkisar setebal 1.5 – 5 cm ', 'Badak (bahasa Inggris: rhinoceros) adalah lima spesies hewan dari famili Rhinocerotidae, ordo Perissodactyla yang kesemuanya berasal dari Afrika atau Asia. mereka Memiliki indra pendengaran dan penciuman yang tajam dan dapat hidup melebihi 40 tahun.  Walaupun termasuk herbivora, badak adalah hewan yang berbahaya.', 'NOIMAGE.jpg', 11),
(11, 'Cuculidae', ' ', 'memiliki bulu yang pesolek, tubuh memanjang, kebanyakan dengan ekor yang panjang membulat atau bercabang dua, dan sayap yang membulat atau meruncing. Kebanyakan paruhnya melengkung yang khas dengan beragam ukuran', 'Cuculidae merupakan famili burung dari ordo Cuculiformes yang tersebar di Dunia Lama dan Australasia. Beberapa jenis Cuculidae diketahui memiliki perilaku berbiak yang merugikan burung lainnya, famili burung ini kerap menempatkan telurnya pada sarang burung lain. Pemilik sarang akan menetaskan telur tersebut dan mengasuhnya', 'NOIMAGE.jpg', 12),
(12, 'Tupaiidae', 'Tupai', 'Memiliki ukuran otak yang relatif besar', ' ', 'NOIMAGE.jpg', 13),
(13, 'Leiothrichidae', ' ', 'berukuran kecil hingga sedang. Mereka memiliki kaki yang kuat, dan banyak yang cukup terestrial.', 'Merupakan keluarga burung paserine Dunia Lama . Mereka beragam dalam ukuran dan warna. Ini adalah burung-burung dari daerah tropis, dengan varietas terbesar di Asia Tenggara dan anak benua India', 'photo_1555151110_3263.jpg', 2),
(14, 'Pteropodidae', 'Codot', 'Memiliki mata yang besar. Memakan buah-buahan', 'Codot adalah nama umum bagi jenis-jenis kelelawar pemakan buah. Codot, bersama dengan kalong, nyap, paniki dan sebangsanya, membentuk suku Pteropodidae. Meskipun kadang-kadang dianggap sebagai hama, codot berperan penting sebagai pemencar biji aneka tetumbuhan, terutama di hutan hujan tropika. Kelelawar ini hanya memakan daging buah yang dikunyah-kunyah untuk diambil cairannya', 'NOIMAGE.jpg', 5),
(15, 'Viverridae', 'Musang', 'Memiliki empat atau lima jari pada setiap kaki dan cakar., moncong yang lebih panjang dan memiliki pendengaran dan penglihatan yang sangat baik', 'Viverridae adalah keluarga mamalia kecil dan menengah, yang viverrida terdiri dari 15 genera , yang dibagi lagi menjadi 38 spesies . Keluarga ini dinamai dan pertama kali dijelaskan oleh John Edward Gray pada tahun 1821. Anggota keluarga ini biasa disebut musang atau genet .', 'photo_1555582189_3566.jpg', 1),
(16, 'Stringidae', 'Burung Hantu Sejati', 'memiliki kepala besar, ekor pendek, bulu samar , dan cakram wajah bundar di sekitar mata', 'Keluarga Strigidae adalah yang lebih besar dari dua keluarga burung hantu, dengan hampir 190 spesies tersebar di antara 25 genus. Mereka ditemukan di seluruh dunia, di setiap benua di dunia kecuali Antartika, tetapi 80% dari strigid ditemukan di daerah tropis.. sebagian besar spesies dari famili ini tidak melakukan migrasi.', 'photo_1555677885_2866.jpg', 14),
(17, 'Mustelidae', 'Musang', 'hewan kecil dengan tubuh memanjang, kaki pendek, pendek, telinga bundar, dan bulu tebal', 'Mustelidae adalah keluarga karnivora mamalia , termasuk musang , luak , berang-berang , musang , Martens , mink , dan serigala , di antara lainnya. Sebagian besar mustelid adalah hewan soliter, nokturnal, dan aktif sepanjang tahun.', 'photo_1555681712_6350.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_genus`
--

CREATE TABLE `tb_genus` (
  `id_genus` int(11) NOT NULL,
  `nama_latin` varchar(60) DEFAULT NULL,
  `nama_umum` varchar(60) DEFAULT NULL,
  `ciri_ciri` varchar(300) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `id_famili` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_genus`
--

INSERT INTO `tb_genus` (`id_genus`, `nama_latin`, `nama_umum`, `ciri_ciri`, `keterangan`, `gambar`, `id_famili`) VALUES
(1, 'Panthera', 'Kucing Besar', 'Bentuk tubuh yang besar', 'Panthera adalah genus dari keluarga Felidae (kucing), yang berisi empat spesies populer, yaitu Tiger (Harimau), Lion (Singa), Jaguar dan Leopard (Macan Tutul). Genus ini terdiri dari sekitar setengah dari subfamili Pantherinae, Big Cat (Kucing Besar).\r\nHanya empat spesies Panthera Kucing memiliki struktur anatomi yang memungkinkan mereka untuk mengaum. ', 'photo_1552924268_4903.png', 1),
(2, 'Felis', 'Kucing Kecil', 'Spesies terkecil adalah kucing pasir, yang panjangnya mungkin kurang dari 40 cm, sedangkan yang terbesar adalah kucing hutan, yang dapat mencapai 94 cm.Mereka mendiami berbagai habitat yang berbeda, dari rawa sampai gurun, dan umumnya memakan tikus kecil, mereka juga memakan burung dan dan hewan kec', 'Felis adalah genus kucing dalam famili Felidae,termasuk kucing domestik dan kucing liar. Spesies liar tersebar secara luas di seluruh Eropa, Asia Selatan dan Tengah, juga Afrika; kucing domestik telah diperkenalkan di seluruh dunia. Anggota genus Felis semuanya kucing kecil, dengan kemiripan yang banyak atau kurang dengan kucing domestik.', 'photo_1552970278_7525.jpg', 1),
(3, 'Trichixos', ' ', ' ', ' ', 'NOIMAGE.jpg', 2),
(4, 'Elephas', ' ', ' ', 'Elephas adalah salah satu dari dua genera dalam famili gajah, Proboscidea. Di dalam genus ini hanya terdapat satu spesies yang belum punah, yaitu gajah asia Elephas maximus', 'NOIMAGE.jpg', 4),
(5, 'Pongo', 'Orang Utan', 'memiliki tubuh yang gemuk dan besar, berleher besar, lengan yang panjang dan kuat, kaki yang pendek dan tertunduk, dan tidak mempunyai ekor.  memiliki tinggi sekitar 1.25-1.5 meter', 'Orang utan (atau orangutan, nama lainnya adalah mawas) adalah sejenis kera besar dengan lengan panjang dan berbulu kemerahan atau cokelat, yang hidup di hutan tropika Indonesia dan Malaysia, khususnya di Pulau Kalimantan dan Sumatra. Ada 2 jenis spesies orangutan, yaitu Orangutan Kalimantan / Borneo (Pongo pygmaeus) dan Orangutan Sumatra (Pongo abelii)', 'photo_1554456470_9129.jpg', 3),
(8, 'Capricornis', 'Kambing', 'memiliki tanduk kecil dan bertubuh sedang', 'The serows  are six species of medium-sized goat-like or antelope-like mammals of the genus Capricornis.  serows are often found grazing on rocky hills, though typically at a lower elevation when the two types of animal share territory. Serows are slower and less agile than gorals, but they nevertheless can climb slopes to escape predation and to take shelter during cold winters or hot summers. Serows, unlike gorals, make use of their preorbital glands in scent marking.', 'NOIMAGE.jpg', 6),
(9, 'Nesolagus', ' ', ' ', ' ', 'NOIMAGE.jpg', 7),
(10, 'Cyornis', 'Burung ciung mungkal', ' ', 'Cyornis adalah genus burung flycatcher dalam keluarga  Muscicapidae', 'NOIMAGE.jpg', 2),
(11, 'Copsychus', 'Burung Murai', ' ', 'Burung murai atau shamas (dari shama, Bengali dan bahasa Hindi untuk C. malabaricus)[1] merupakan burung pemakan serangga berukuran sedang (beberapa juga makan buah beri dan buah lainnya) dalam genus Copsychus. Burung jenis ini banyak ditemukan di area taman dan hutan di Afrika dan Asia.', 'NOIMAGE.jpg', 2),
(12, 'Sturnus', ' ', ' ', 'Sturnus merupakan genus burung jalak. Burung dari genus ini merupakan spesies daratan. mereka lebih sering berjalan dibanding melompat, dan memiliki modifikasi tengkoran serta otot untuk paruh yang terbuka untuk menggali. Adaptasi ini telah memungkinkan penyebaran genus ini dari daerah lembab di Asia selatan ke daerang dingin di Eropa dan Asia.', 'photo_1555087330_9538.jpg', 8),
(13, 'Macaca', 'Makaka', 'memiliki badan yang tegap, bagian bawah tubuh berwarna merah dan memiliki ekor panjang', 'Makaka (Lat,:Macaca) adalah sejenis kera dari famili Cercopithecidae. Makaka cukup populer dan mudah dijumpai terutama di daerah kepulauan dengan iklim tropis. Di beberapa daerah di Indonesia', 'photo_1555092815_6945.jpg', 9),
(14, 'Dicerorhinus', ' ', 'Bercula dua', '\r\nDicerorhinus adalah genus dari famili Rhinocerotidae, yang terdiri dari satu spesies yang masih ada, satu-satunya badak Sumatera bercula dua (D. sumatrensis),', 'NOIMAGE.jpg', 10),
(15, 'Carpococcyx', ' ', ' ', ' ', 'NOIMAGE.jpg', 11),
(16, 'Tupaia', ' ', ' memiliki moncong memanjang', ' Salah satu ciri luar biasa dari spesies Tupaia adalah penglihatan warna mereka. Mereka memiliki reseptor visual batang dan kerucut yang mirip dengan manusia dan primata lainnya.', 'NOIMAGE.jpg', 12),
(17, 'Pteropus', 'Kalong', 'Kelelawar yang berukuran amat besar. Jari pertama sangat panjang, jari kedua memiliki cakar yang berkembang baik. Tengkorak berukuran besar dan memanjang, dengan rangka otak yang berbentuk hampir seperti pipa. Memiliki tiga geraham depan di rahang atas, tetapi yang terdepan sangat kecil dan sering t', 'Kalong adalah anggota bangsa kelelawar (Chiroptera) yang tergolong dalam marga Pteropus familia Pteropodidae. Kalong terutama merujuk pada kelelawar pemakan buah yang berukuran besar. Kelelawar buah terbesar, sekaligus kelelawar terbesar, adalah kalong kapauk Pteropus vampyrus yang bisa mencapai berat 1.500 gram, dan bentangan sayap hingga 1.700 mm', 'photo_1555222735_1609.png', 14),
(18, 'Prionailurus', 'Kucing bertutul', 'Memiliki bintik-bintik seperti tutul pada kulit', ' ', 'photo_1555580196_2099.jpg', 1),
(19, 'Cyonagale', ' ', '  ', ' ', 'NOIMAGE.jpg', 15),
(20, 'Otus', 'Celepuk', 'memiliki bulu berwarna kecoklatan seperti batang pohon, hanya memiliki satu jenis panggilan suara', 'Celepuk merupakan burung soliter. Sebagian besar spesies bertelur dan mengerami telurnya di dalam lubang yang awalnya dibuat oleh hewan lain. Selama masa inkubasi, jantan akan memberi makan betina. Burung-burung ini monogami, dengan perawatan biparental, dan hanya menghasilkan seekor burung hantu muda dewasa. Kebanyakan burung hantu yang muda adalah altricial hingga semialtricial.', 'photo_1555678177_3471.png', 16),
(21, 'Lutra', 'Berang-berang', 'Kaki berselaput', ' ', 'NOIMAGE.jpg', 17);

-- --------------------------------------------------------

--
-- Table structure for table `tb_institusi`
--

CREATE TABLE `tb_institusi` (
  `id_institusi` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(400) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_institusi`
--

INSERT INTO `tb_institusi` (`id_institusi`, `nama`, `alamat`, `username`, `pass`, `id_level`) VALUES
(1, 'Balai Konservasi Sumber Daya Alam', 'Jl. Cut Nyak Dhin KM 1,22 Kotak Pos 29, Banda Aceh, Nangroe Aceh Darussalam', 'bksda', 'a5e6036087ee35e84c69dd7dfe126ba6', 1),
(2, 'Pimpinan BKSDA', 'Jl. Cut Nyak Dhin KM 1,22 Kotak Pos 29, Banda Aceh, Nangroe Aceh Darussalam', 'kepala', '870f669e4bbbfa8a6fde65549826d1c4', 3),
(6, 'Flaura and Fauna International', 'Jl. Tenggiri No.4 Kec. Kuta Alam. Lampriet Kota Banda Aceh 23122', 'ffi', '4c77a7e0d203b25d1a7b2a27199fdb13', 2),
(7, 'Yayasan Hutan Alam dan Lingkungan Aceh', 'Jl. Tanggul Kr, Desa No.11, Pango Deah, Ulee Kareng, Kabupaten Aceh Besar, Aceh 23238', 'haka', 'a9515c512e243f134c8b0d471040179b', 2),
(8, 'Walhi', 'asdasdasd', 'walhi', '814712b1d7e4e82baa23165af3ef37b9', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelangkaan`
--

CREATE TABLE `tb_kelangkaan` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `umum` varchar(60) NOT NULL,
  `singkatan` varchar(5) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelangkaan`
--

INSERT INTO `tb_kelangkaan` (`id_kategori`, `nama`, `umum`, `singkatan`, `keterangan`) VALUES
(1, 'Extinct', 'Punah', 'EX', 'status konservasi yag diberikan kepada spesies yang terbukti  (tidak ada keraguan lagi) bahwa individu terakhir spesies tersebut sudah mati. Dalam IUCN Redlist tercatat 723 hewan dan 86 tumbuhan yang berstatus Punah. Contoh satwa Indonesia yang telah punah diantaranya adalah; Harimau Jawa dan Harimau Bali.'),
(2, 'Extinct in the wild', 'Punah di Alam', 'EW', 'status konservasi yang diberikan kepada spesies yang hanya diketahui berada di tempat penangkaran atau di luar habitat alami mereka. Dalam IUCN Redlist tercatat 38 hewan dan 28 tumbuhan yang berstatus Extinct in the Wild.'),
(3, 'Critically Endangered', 'Kritis', 'CR', 'status konservasi yang diberikan kepada spesies yang menghadapi risiko kepunahan di waktu dekat. Dalam IUCN Redlist tercatat 1.742 hewan dan 1.577 tumbuhan yang berstatus Kritis. Contoh satwa Indonesia yang berstatus kritis antara lain; Harimau Sumatra, Badak Jawa, Badak Sumatera, Jalak Bali, Orangutan Sumatera, Elang Jawa, Trulek Jawa, Rusa Bawean.'),
(4, 'Endangered', 'Genting', 'EN', 'status konservasi yang diberikan kepada spesies yang sedang menghadapi risiko kepunahan di alam liar yang tinggi pada waktu yang akan datang. Dalam IUCN Redlist tercatat 2.573 hewan dan 2.316 tumbuhan yang berstatus Terancam. Contoh satwa Indonesia yang berstatus Terancam antara lain; Banteng, Anoa, Mentok Rimba, Maleo, Tapir, Trenggiling, Bekantan, dan Tarsius.'),
(5, 'Vurnalable', 'Rentan', 'VU', 'status konservasi yang diberikan kepada spesies yang sedang menghadapi risiko kepunahan di alam liar pada waktu yang akan datang. Dalam IUCN Redlist tercatat 4.467 hewan dan 4.607 tumbuhan yang berstatus Rentan. Contoh satwa Indonesia yang berstatus Terancam antara lain; Kasuari, Merak Hijau, dan Kakak Tua Maluku.'),
(6, 'Near Threatened', 'Hampir Terancam', 'NT', 'status konservasi yang diberikan kepada spesies yang mungkin berada dalam keadaan terancam atau mendekati terancam kepunahan, meski tidak masuk ke dalam status terancam. Dalam IUCN Redlist tercatat 2.574 hewan dan 1.076 tumbuhan yang berstatus Hampir Terancam. Contoh satwa Indonesia yang berstatus Terancam antara lain; Alap-alap Doria, Punai Sumba,'),
(7, 'Least Corcern', 'Beresiko Rendah', 'LC', 'kategori IUCN yang diberikan untuk spesies yang telah dievaluasi namun tidak masuk ke dalam kategori manapun. Dalam IUCN Redlist tercatat 17.535 hewan dan 1.488 tumbuhan yang berstatus Contoh satwa Indonesia yang berstatus Terancam antara lain; Ayam Hutan Merah, Ayam Hutan Hijau, dan Landak.'),
(8, 'Data Decifient', 'Kurang Data', 'DD', 'Sebuah takson dinyatakan “informasi kurang” ketika informasi yang ada kurang memadai untuk membuat perkiraan akan risiko kepunahannya berdasarkan distribusi dan status populasi. Dalam IUCN Redlist tercatat 5.813 hewan dan 735 tumbuhan yang berstatus Informasi kurang. Contoh satwa Indonesia yang berstatus Terancam antara lain; Punggok Papua, Todirhamphus nigrocyaneus,'),
(9, 'Not Evaluated', 'Tidak Dievaluasi', 'NE', 'Sebuah takson dinyatakan “belum dievaluasi” ketika tidak dievaluasi untuk kriteria-kriteria lain. Contoh satwa Indonesia yang berstatus Terancam antara lain; Punggok Togian,');

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `id_log` int(11) NOT NULL,
  `kegiatan` varchar(200) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `id_institusi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`id_log`, `kegiatan`, `tanggal`, `waktu`, `id_institusi`) VALUES
(1, 'Menambah Class Aves(Burung)', '2019-03-18', '22:06:32', 1),
(2, 'Mengubah Class Aves(Burung)', '2019-03-18', '22:09:58', 1),
(3, 'Menambah Class Mamalia(Hewan Yang Menyusui)', '2019-03-18', '22:13:46', 1),
(4, 'Mengubah Class Mamalia(Hewan Yang Menyusui)', '2019-03-18', '22:14:57', 1),
(5, 'Menambah Ordo Carnivora(Hewan Pemakan Daging)', '2019-03-18', '22:20:03', 1),
(6, 'Menambah Famili Felidae(Kucing)', '2019-03-18', '22:26:49', 1),
(7, 'Mengubah Famili Felidae(Kucing)', '2019-03-18', '22:27:31', 1),
(8, 'Menambah Genus Panthera(Kucing Besar)', '2019-03-18', '22:51:08', 1),
(9, 'Menambah Spesies Panthera Tigris Sondaica(Harimau Sumatra)', '2019-03-18', '23:06:12', 1),
(10, 'Menambah Genus Felis(Kucing Kecil)', '2019-03-19', '11:37:58', 1),
(11, 'Menambah Spesies Felis catus (Kucing domestik)', '2019-03-19', '11:49:43', 1),
(12, 'Menambah Ordo Passeriformes(Burung Berkicau)', '2019-03-19', '11:53:53', 1),
(13, 'Mengubah Data Spesies Felis catus (Kucing domestik)', '2019-03-19', '11:56:46', 1),
(14, 'Mengubah Data Spesies Felis catus (Kucing domestik)', '2019-03-19', '11:57:05', 1),
(15, 'Menambah Famili Muscicapidae( )', '2019-03-19', '12:02:37', 1),
(16, 'Menambah Genus Trichixos( )', '2019-03-19', '12:05:36', 1),
(17, 'Menambah Spesies Trichixos pyrropygus(Kucica ekor kuning)', '2019-03-19', '12:09:34', 1),
(18, 'Menambah Ordo Primates(Primata)', '2019-03-19', '12:16:50', 1),
(19, 'Menambah Famili Hominidae(Kera Besar)', '2019-03-19', '12:25:00', 1),
(20, 'Menghapus Genus Trichixos( )', '2019-03-19', '14:11:04', 1),
(21, 'Mengubah Data Spesies Felis catus (Kucing domestik)', '2019-03-22', '21:11:06', 1),
(22, 'Mengubah Data Spesies Felis catus (Kucing domestik)', '2019-03-22', '21:11:36', 1),
(23, 'Menambah Spesies Panthera Leo(Singa)', '2019-03-22', '21:23:44', 1),
(24, 'Menambah Ordo Proboscidea(Mamalia Bergading)', '2019-03-23', '10:39:07', 1),
(25, 'Mengubah Ordo Proboscidea(Mamalia Bergading)', '2019-03-23', '10:40:42', 1),
(26, 'Menambah Famili Elephantidae(Gajah)', '2019-03-23', '10:55:17', 1),
(27, 'Menambah Genus Elephas( )', '2019-03-23', '11:03:25', 1),
(28, 'Menambah Spesies Elephas maximus sumatranus(Gajah Sumatra)', '2019-03-23', '11:10:07', 1),
(29, 'Menghapus Data Spesies Elephas maximus sumatranus (Gajah Sumatra)', '2019-03-23', '11:10:52', 1),
(30, 'Menambah Spesies Elephas maximus sumatranus(Gajah Sumatra)', '2019-03-23', '11:16:13', 1),
(31, 'Mengubah Class Aves1(Burung)', '2019-03-24', '22:18:42', NULL),
(32, 'Mengubah Class Aves(Burung)', '2019-03-24', '22:19:07', 1),
(33, 'Menambah Class a(a)', '2019-03-24', '22:41:59', 1),
(34, 'Menghapus Class a(a)', '2019-03-24', '22:42:05', 1),
(35, 'Menambah Ordo Chiroptera(Mamalia  terbang)', '2019-03-26', '21:39:14', 1),
(36, 'Menambah Data OrdoRodentia (Hewan Pengerat)', '2019-03-26', '22:08:02', 6),
(37, 'Mengubah Data Spesies Felis catus (Kucing domestik)', '2019-03-30', '16:07:16', 1),
(38, 'Mengubah Data Spesies Felis catus (Kucing domestik)', '2019-03-30', '16:07:29', 1),
(39, 'Mengubah Famili Hominidae(Kera Besar)', '2019-04-04', '22:47:58', 1),
(40, 'Menambah Genus Pongo(Orang Utan)', '2019-04-05', '16:27:50', 1),
(41, 'Menambah Spesies Pungo Abeli(Orang Utan Sumatera)', '2019-04-05', '18:18:25', 1),
(42, 'Menambah Class asdasda(dasda)', '2019-04-07', '10:45:38', 1),
(43, 'Menambah Ordo adasd(asdasdasd)', '2019-04-07', '10:45:51', 1),
(44, 'Menghapus Class asdasda(dasda)', '2019-04-07', '10:46:07', 1),
(45, 'Menambah Famili werwerwer(werwerwe)', '2019-04-07', '10:46:33', 1),
(46, 'Menghapus Ordo adasd(asdasdasd)', '2019-04-07', '10:46:42', 1),
(47, 'Menambah Genus asdasd(asdasdas)', '2019-04-07', '10:47:03', 1),
(48, 'Menghapus Famili ()', '2019-04-07', '10:47:10', 1),
(49, 'Menghapus Famili ()', '2019-04-07', '10:47:23', 1),
(50, 'Menghapus Ordo adasd(asdasdasd)', '2019-04-07', '10:47:38', 1),
(51, 'Menghapus Famili ()', '2019-04-07', '10:47:55', 1),
(52, 'Menghapus Famili werwerwer(werwerwe)', '2019-04-07', '10:49:08', 1),
(53, 'Menghapus Famili werwerwer(werwerwe)', '2019-04-07', '10:50:19', 1),
(54, 'Menghapus Famili werwerwer(werwerwe)', '2019-04-07', '10:54:37', 1),
(55, 'Menghapus Famili werwerwer(werwerwe)', '2019-04-07', '10:54:45', 1),
(56, 'Menghapus Famili ()', '2019-04-07', '10:55:06', 1),
(57, 'Menghapus Genus asdasd(asdasdas)', '2019-04-07', '10:55:20', 1),
(58, 'Menambah Genus asdasd(asdasd)', '2019-04-07', '10:55:46', 1),
(59, 'Menambah Spesies asdasd(asdasdasda)', '2019-04-07', '10:56:04', 1),
(60, 'Menghapus Famili ()', '2019-04-07', '10:56:20', 1),
(61, 'Menghapus Genus asdasd(asdasd)', '2019-04-07', '10:56:34', 1),
(62, 'Menghapus Genus asdasd(asdasd)', '2019-04-07', '10:58:14', 1),
(63, 'Menghapus Genus asdasd(asdasd)', '2019-04-07', '10:58:23', 1),
(64, 'Menghapus Data Spesies asdasd (asdasdasda)', '2019-04-07', '10:58:41', 1),
(65, 'Menghapus Genus asdasd(asdasd)', '2019-04-07', '10:58:51', 1),
(66, 'Menghapus Famili werwerwer(werwerwe)', '2019-04-07', '10:58:58', 1),
(67, 'Menghapus Ordo adasd(asdasdasd)', '2019-04-07', '10:59:07', 1),
(68, 'Menghapus Class asdasda(dasda)', '2019-04-07', '10:59:13', 1),
(69, 'Menambah Ordo Bovidae(Hewan Berkuku Belah)', '2019-04-07', '11:28:16', 1),
(70, 'Menambah Ordo Artiodactyla(Hewan Berkuku Gelap)', '2019-04-07', '12:34:06', 1),
(71, 'Menambah Famili Bovidae(Hewan Berkuku Belah)', '2019-04-07', '12:36:00', 1),
(72, 'Menghapus Ordo Bovidae(Hewan Berkuku Belah)', '2019-04-07', '12:36:06', 1),
(73, 'Menambah Genus Capricornis(serow)', '2019-04-07', '12:51:05', 1),
(74, 'Menambah Spesies Capricornis sumatraensis(kambing hutan sumatera)', '2019-04-07', '12:56:42', 1),
(75, 'Mengubah Data Spesies Capricornis sumatraensis(kambing hutan sumatera)', '2019-04-07', '12:57:48', 1),
(76, 'Mengubah Genus Capricornis(Kmabing)', '2019-04-07', '12:58:22', 1),
(77, 'Mengubah Genus Capricornis(Kmabing)', '2019-04-07', '12:58:28', 1),
(78, 'Mengubah Genus Capricornis(Kambing)', '2019-04-07', '12:58:32', 1),
(79, 'Menambah Ordo Lagomorpha(arnab)', '2019-04-07', '13:28:49', 1),
(80, 'Mengubah Ordo Lagomorpha(arnab)', '2019-04-07', '13:30:21', 1),
(81, 'Menambah Famili Leporidae(Kelinci)', '2019-04-07', '13:57:52', 1),
(82, 'Menambah Genus Nesolagus( )', '2019-04-07', '14:10:08', 1),
(83, 'Menambah Spesies Nesolagus netscheri(Kelinci Sumatera)', '2019-04-07', '14:13:26', 1),
(84, 'Mengubah Famili Muscicapidae( Sikatan)', '2019-04-12', '15:04:50', 1),
(85, 'Mengubah Data Spesies Trichixos pyrropygus(Kucica ekor kuning)', '2019-04-12', '15:12:40', 1),
(86, 'Menambah Genus Cyornis(Burung ciung mungkal)', '2019-04-12', '15:15:29', 1),
(87, 'Menambah Spesies Cyornis Ruckii(Sikatan Aceh)', '2019-04-12', '16:25:54', 1),
(88, 'Menambah Genus Copsychus(Burung Murai)', '2019-04-12', '16:42:50', 1),
(89, 'Menambah Spesies Copsychus malabaricus(Murai Batu)', '2019-04-12', '16:49:24', 1),
(90, 'Menambah Famili Sturnidae(Jalak)', '2019-04-12', '23:39:17', 1),
(91, 'Menambah Genus Sturnus( )', '2019-04-12', '23:42:10', 1),
(92, 'Menambah Spesies Sturnus contra(Jalak Suren)', '2019-04-13', '00:59:34', 1),
(93, 'Menambah Famili Cercopithecidae(Monyet Dunia Lama)', '2019-04-13', '01:11:12', 1),
(94, 'Menambah Genus Macaca(Makaka)', '2019-04-13', '01:13:35', 1),
(95, 'Menambah Spesies Macaca fascicularis(Monyet Ekor Panjang)', '2019-04-13', '01:18:20', 1),
(96, 'Menambah Ordo  Perissodactyla(Hewan Berkuku Ganjil)', '2019-04-13', '01:28:36', 1),
(97, 'Mengubah Ordo  Perissodactyla(Hewan Berkuku Ganjil)', '2019-04-13', '01:28:55', 1),
(98, 'Mengubah Ordo  Perissodactyla(Hewan Berkuku Ganjil)', '2019-04-13', '01:29:17', 1),
(99, 'Mengubah Ordo  Perissodactyla(Hewan Berkuku Ganjil)', '2019-04-13', '01:31:37', 1),
(100, 'Menambah Famili Rhinocerotidae(Badak)', '2019-04-13', '01:36:32', 1),
(101, 'Menambah Genus Dicerorhinus( )', '2019-04-13', '01:38:21', 1),
(102, 'Menambah Ordo Cuculiformes(Cuckoos, Hoatzins, Turacos)', '2019-04-13', '16:06:45', 1),
(103, 'Mengubah Ordo Cuculiformes(Cuckoos, Hoatzins, Turacos)', '2019-04-13', '16:07:26', 1),
(104, 'Mengubah Ordo Cuculiformes(Cuckoos, Hoatzins, Turacos)', '2019-04-13', '16:08:03', 1),
(105, 'Menambah Famili Cuculidae( )', '2019-04-13', '16:10:32', 1),
(106, 'Menambah Genus Carpococcyx( )', '2019-04-13', '16:11:10', 1),
(107, 'Menambah Spesies Carpococcyx viridis(Tokhtor Sumatra)', '2019-04-13', '16:14:22', 1),
(108, 'Menambah Ordo Scandentia(Tupai)', '2019-04-13', '16:33:03', 1),
(109, 'Mengubah Ordo Scandentia(Three Shrew)', '2019-04-13', '16:40:51', 1),
(110, 'Menambah Famili Tupaiidae(Tupai)', '2019-04-13', '16:42:16', 1),
(111, 'Menambah Genus Tupaia( )', '2019-04-13', '16:50:39', 1),
(112, 'Mengubah Genus Tupaia( )', '2019-04-13', '16:55:13', 1),
(113, 'Menambah Spesies Tupaia Glis(Tupai Akar)', '2019-04-13', '17:02:20', 1),
(114, 'Menambah Famili Leiothrichidae( )', '2019-04-13', '17:25:11', 1),
(115, 'Mengubah Data Spesies Felis catus (Kucing domestik)', '2019-04-14', '12:37:33', 1),
(116, 'Menambah Famili Pteropodidae(Codot)', '2019-04-14', '13:13:41', 1),
(117, 'Menambah Genus Pteropus(Kalong)', '2019-04-14', '13:18:55', 1),
(118, 'Menambah Spesies Pteropus vampyrus(Kalong Besar)', '2019-04-14', '13:31:02', 1),
(119, 'Mengubah Data Spesies Pteropus vampyrus(Kalong Besar)', '2019-04-14', '13:32:26', 1),
(120, 'Mengubah Data Spesies Trichixos pyrropygus(Kucica ekor kuning)', '2019-04-16', '02:04:19', 1),
(121, 'Menambah Genus Prionailurus(Kucing bertutul)', '2019-04-18', '16:36:36', 1),
(122, 'Menambah Spesies Prionailurus Bengalensis(Kucing Kuwuk)', '2019-04-18', '16:44:34', 1),
(123, 'Menambah Spesies Prionailurus Planiceps(Kucing Tandang)', '2019-04-18', '17:00:10', 1),
(124, 'Menambah Famili Viverridae(Musang)', '2019-04-18', '17:09:49', 1),
(125, 'Menambah Genus Cyonagale( )', '2019-04-18', '17:11:20', 1),
(126, 'Menambah Spesies Cynogale bennettii(Musang Air)', '2019-04-18', '17:18:37', 1),
(127, 'Menambah Ordo Stringiformes(Burung Hantu)', '2019-04-19', '19:39:00', 1),
(128, 'Menambah Famili Stringidae(Burung Hantu Sejati)', '2019-04-19', '19:44:45', 1),
(129, 'Menambah Genus Otus(Celepuk)', '2019-04-19', '19:49:37', 1),
(130, 'Menambah Spesies Burung Hantu Celupuk Merah(Otus rufescens)', '2019-04-19', '19:59:14', 1),
(131, 'Mengubah Data Spesies Burung Hantu Celupuk Merah(Otus rufescens)', '2019-04-19', '19:59:28', 1),
(132, 'Mengubah Data Spesies Otus rufescens(Burung Hantu Celupuk Merah)', '2019-04-19', '20:00:18', 1),
(133, 'Menambah Spesies Otus spilocephalus(Burung Hantu Celupuk Gunung)', '2019-04-19', '20:21:15', 1),
(134, 'Mengubah Data Spesies Trichixos pyrropygus(Burung Kucica ekor kuning)', '2019-04-19', '20:34:40', 1),
(135, 'Menambah Famili Mustelidae(Musang)', '2019-04-19', '20:48:32', 1),
(136, 'Menambah Genus Lutra(Berang-berang)', '2019-04-19', '20:55:28', 1),
(137, 'Menambah Spesies Lutra sumatrana(Berang-berang Gunung)', '2019-04-19', '21:16:04', 1),
(138, 'Menambah Spesies jjjjjjjjjjjjj(jjjjjjjj)', '2019-04-22', '14:23:48', 1),
(139, 'Menambah Data Spesiesspesies baru (spesies baru)', '2019-04-22', '14:36:23', 8),
(140, 'Menambah Spesies    (  )', '2019-05-06', '23:51:53', 1),
(141, 'Menambah Spesies  asd( )', '2019-05-06', '23:56:26', 1),
(142, 'Menambah Spesies 11111111111(11111111111)', '2019-05-07', '20:19:10', 1),
(143, 'Menambah Spesies  (  )', '2019-05-07', '20:51:12', 1),
(144, 'Menambah Spesies 111111111111(111111)', '2019-05-07', '20:53:12', 1),
(145, 'Menambah Spesies 111(111)', '2019-05-07', '20:55:04', 1),
(146, 'Menambah Spesies `11(111)', '2019-05-07', '21:05:04', 1),
(147, 'Menambah Spesies 111(111)', '2019-05-07', '21:07:29', 1),
(148, 'Menambah Data SpesiesDicerorhinus sumatrensis (Badak Sumatra)', '2019-05-08', '00:02:35', 7),
(149, 'Menambah Data Spesiesasdsaasd (asdasd)', '2019-05-12', '23:27:07', 6),
(150, 'Menghapus Ordo sadadsasd(aaaaaaaaaaaa)', '2019-07-14', '13:06:04', 1),
(151, 'Menghapus Ordo asdasdasdasd(ffffffffffffff)', '2019-07-14', '13:06:31', 1),
(152, 'Menghapus Ordo asdasdasdasd(ddddddddddd)', '2019-07-14', '13:06:45', 1),
(153, 'Menghapus Ordo asdasdasdasd(aasssssssss)', '2019-07-14', '13:06:50', 1),
(154, 'Menambah Spesies GGGGG(tututu)', '2019-08-01', '15:10:47', 1),
(155, 'Menambah Spesies GGGGG(tututu)', '2019-08-01', '15:32:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ordo`
--

CREATE TABLE `tb_ordo` (
  `id_ordo` int(11) NOT NULL,
  `nama_latin` varchar(60) DEFAULT NULL,
  `nama_umum` varchar(60) DEFAULT NULL,
  `ciri_ciri` varchar(500) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `id_class` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ordo`
--

INSERT INTO `tb_ordo` (`id_ordo`, `nama_latin`, `nama_umum`, `ciri_ciri`, `keterangan`, `gambar`, `id_class`) VALUES
(1, 'Carnivora', 'Hewan Pemakan Daging', 'gigi taring berkembang baik dan Jari-jarinya bercakar tajam. ', 'Karnivora adalah hewan pemakan daging.', 'photo_1552922403_6199.jpg', 2),
(2, 'Passeriformes', 'Burung Berkicau', 'Mampu mengeluarkan suara kicauan', 'Burung pengicau atau Passeriformes adalah ordo terbesar dalam kelas burung atau aves dalam kerajaan hewan atau animalia. Sekitar 5.400 spesies atau lebih dari setengah jumlah total spesies burung adalah burung pengicau.\r\nSpesies burung dalam ordo Burung pengicau mempunyai otot yang rumit untuk mengatur organ suaranya dan sebagian besar burung-burung dalam ordo ini mempunyai ukuran tubuh relatif lebih kecil dibandingkan burung-burung dalam ordo lainnya.', 'NOIMAGE.jpg', 1),
(3, 'Primates', 'Primata', 'Memiliki lima jari (pentadactyly), bentuk gigi yang sama dan rancangan tubuh primitif (tidak terspes', ' ', 'photo_1552972610_2448.jpg', 2),
(4, 'Proboscidea', 'Mamalia Bergading', 'Memiliki gading, Ukuran tubuh yang besar, Memiliki belalai dengan dua lubang hidung, Kepala besar dan Leher Pendek', 'Proboscidae merupakan ordo taksonomi yang terdiri dari satu famili yang masih hidup Elephantidae dan beberapa famili yang sudah punah. ', 'photo_1553312347_1616.jpg', 2),
(5, 'Chiroptera', 'Mamalia  terbang', 'Lengan bersayap; Dapat terbang', 'Chiroptera adalah mamalia dengan kaki depan mereka diadaptasi sebagai sayap dan merupakan satu-satunya mamalia yang mampu terbang secara alami. Chiroptera biasa juga disebut sebagai kelelawar. ', 'photo_1553611154_3478.jpg', 2),
(6, 'Rodentia', 'Hewan Pengerat', 'memiliki dua pasang gigi seri yang terus tumbuh', 'Rodensia berasal dari kata rodere yang berarti mengerat. Ciri utamanya adalah memiliki dua pasang gigi seri yang terus tumbuh sepanjang hidupnya sehingga dia akan selalu mengerat benda yang dijumpai untuk mengurangi pertumbuhan gigi serinya tersebut agar tidak membahayakan dirinya. Kebanyakan rodensia memakan benih atau tumbuhan.', 'NOIMAGE.jpg', 2),
(9, 'Artiodactyla', 'Hewan Berkuku Gelap', 'Jari kaki berjumlah genap (dua atau empat)', 'Hewan berkuku genap adalah mamalia dari ordo Artiodactyla yang terdiri dari kurang lebih 220 spesies ungulata. Mereka terutama hewan herbivora. biasanya ditandai dengan jari kaki yang jumlahnya genap (dua atau empat). Kelompok ini mencakup beberapa kelompok mamalia yang paling penting secara ekonomi seperti sapi, babi, unta, kambing dan domba, serta hewan lain yang dikenal seperti jerapah, kuda nil, rusa, atau kijang', 'photo_1554615246_2794.jpg', 2),
(10, 'Lagomorpha', 'arnab', 'Mempunyai empat batang gigi acip di rahang atas,herbivora', 'Lagomorpha merupakan sebuah ordo mamalia yang terdiri dari dua famili yang masih ada, yaitu Leporidae (arnab), dan Ochotonidae (pika). Lagomorpha menyerupai rodensia karena giginya tumbuh sepanjang umurnya, oleh sebab itu hewan itu mengunyah supaya gigi tidak tumbuh terlalu panjang.', 'photo_1554618528_9780.jpg', 2),
(11, ' Perissodactyla', 'Hewan Berkuku Ganjil', 'kuku kaki berjumlah ganjil dengan kuku tengah yang besar', 'Hewan berkuku ganjil adalah mamalia dari ordo Perissodactyla yang memiliki kuku berjumlah ganjil. Ungulata ini biasanya berukuran besar, memiliki lambung yang relatif sederhana, serta kuku tengah yang besar.', 'photo_1555093897_2604.png', 2),
(12, 'Cuculiformes', 'Cuckoos, Hoatzins, Turacos', 'memiliki warna bulu coklat atau abu-abu, memiliki ekor yang panjang dan kaki yang kuat', ' ', 'photo_1555146483_6524.jpg', 1),
(13, 'Scandentia', 'Three Shrew', 'Memiliki otak yang relatif besar.  merupakan hewan ramping dengan ekor panjang dan bulu lembut, keabu-abuan sampai coklat kemerahan', 'Tupai adalah segolongan mamalia kecil yang mirip, dan kerap dikelirukan, dengan bajing. Secara ilmiah, tupai tidak sama dan jauh kekerabatannya dari keluarga bajing. Tupai adalah pemangsa serangga', 'NOIMAGE.jpg', 2),
(14, 'Stringiformes', 'Burung Hantu', 'Bermata besar dan menghadap kedepan, wajah dapat berputar 180 derajat', 'Burung ini termasuk golongan burung buas (karnivora, pemakan daging) dan merupakan hewan malam (nokturnal).  Burung hantu dikenal karena matanya besar dan menghadap ke depan, tak seperti umumnya jenis burung lain yang matanya menghadap ke samping. Bersama paruh yang bengkok tajam seperti paruh elang dan susunan bulu di kepala yang membentuk lingkaran wajah,  leher burung ini demikian lentur sehingga wajahnya dapat berputar 180 derajat ke belakang.', 'photo_1555677540_8983.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_spesies`
--

CREATE TABLE `tb_spesies` (
  `id_spesies` int(11) NOT NULL,
  `nama_latin` varchar(60) DEFAULT NULL,
  `nama_umum` varchar(60) DEFAULT NULL,
  `habitat` varchar(500) DEFAULT NULL,
  `karakteristik` varchar(500) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `stat` enum('DILINDUNGI','TIDAK DILINDUNGI') DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `gambar2` varchar(255) DEFAULT NULL,
  `gambar3` varchar(255) DEFAULT NULL,
  `id_genus` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_spesies`
--

INSERT INTO `tb_spesies` (`id_spesies`, `nama_latin`, `nama_umum`, `habitat`, `karakteristik`, `keterangan`, `stat`, `gambar`, `gambar2`, `gambar3`, `id_genus`, `id_kategori`) VALUES
(1, 'Panthera Tigris Sondaica', 'Harimau Sumatra', 'Harimau sumatera hanya ditemukan di pulau Sumatera. Kucing besar ini mampu hidup di manapun, dari hutan dataran rendah sampai hutan pegunungan, dan tinggal di banyak tempat yang tak terlindungi', 'Harimau sumatera mempunyai warna paling gelap di antara semua subspesies harimau lainnya, pola hitamnya berukuran lebar dan jaraknya rapat kadang kala dempet. Harimau sumatera jantan memiliki panjang rata-rata 92 inci dari kepala ke kaki atau sekitar 250 cm panjang dari kepala hingga kaki dengan berat 300 pound atau sekitar 140 kg, sedangkan tinggi dari jantan dewasa dapat mencapai 60 cm. Betinanya rata-rata memiliki panjang 78 inci atau sekitar 198 cm dan berat 200 pound atau sekitar 91 kg. ', 'Harimau sumatera  adalah subspesies harimau yang habitat aslinya di pulau Sumatera, merupakan satu dari enam subspesies harimau yang masih bertahan hidup hingga saat ini dan termasuk dalam klasifikasi satwa kritis yang terancam punah  dalam daftar merah spesies terancam yang dirilis Lembaga Konservasi Dunia IUCN. Harimau sumatera dapat berbiak kapan saja. Masa kehamilan adalah sekitar 103 hari. Biasanya harimau betina melahirkan 2 atau 3 ekor anak harimau sekaligus, dan paling banyak 6 ekor. ', 'DILINDUNGI', 'photo_1552925172_9107.jpg', NULL, NULL, 1, 3),
(2, 'Felis catus ', 'Kucing domestik', 'Kucing peliharaan tinggal di dalam rumah ', 'Kucing biasanya memiliki berat badan antara 2,5 hingga 7 kilogram dan jarang melebihi 10 kg. Bila diberi makan berlebihan, kucing dapat mencapai berat badan 23 kg. Tapi kondisi ini amat tidak sehat bagi kucing dan harus dihindari. Dalam penangkaran, kucing dapat hidup selama 15 hingga 20 tahun,', 'kucing domestik atau kucing rumah  adalah sejenis mamalia karnivora dari keluarga Felidae. Kucing telah berbaur dengan kehidupan manusia paling tidak sejak 6.000 tahun SM, dari kerangka kucing di Pulau Siprus. Orang Mesir Kuno dari 3.500 SM telah menggunakan kucing untuk menjauhkan tikus atau hewan pengerat lain dari lumbung yang menyimpan hasil panen.', 'TIDAK DILINDUNGI', 'photo_1552970983_4182.jpg', NULL, NULL, 2, 7),
(3, 'Trichixos pyrropygus', 'Burung Kucica ekor kuning', 'Burung kucica ekor kuning di Indonesia daerah persebarannya yaitu banyak hidup di pulau sumatera yakni di wilayah Aceh. Selain di Aceh, burung ini juga tersebar di daerah Malaysia, Brunei, dan Thailand. Dan untuk tempat hidup atau habitatnya burung kucica ekor kuning bisa dijumpai pada dataran rendah. Yang mana habitatnya berada di ketinggian 1200 meter di atas permukaan laut yang ada di hutan dataran rendah, hutan berdaun lebar, dan rawa bergambut.', 'Burung ini berukuran sedang (21 cm), berekor panjang hitam dan jingga. Jantan menyerupai kucica hutan tetapi ekornya yang merah karat jauh lebih pendek, lebih banyak berwarna abu-abu gelap daripada hitam, alis pendek putih dan tunggir merah karat. Betina lebih coklat dan tidak punya alis putih. Burung remaja lebih coklat berbintik-bintik kuning merah karat. Iris coklat; paruh hitam; kaki hitam. Kicauannya tidak semerdu kucica hutan. Seri panjang terdiri dari siulan merdu, nada tunggal dan ganda', 'Burung Kucica Ekor Kuning (Trichixos pyrropygus) adalah jenis burung yang asalanya dari keluarga Musicicapidae. Untuk burung kucica ekor kuning ini dijadikan sebagai fauna identitas oleh pemerintah di Provinsi Nanggroe Aceh Darussalam. ', 'TIDAK DILINDUNGI', 'photo_1555056760_1235.jpg', NULL, NULL, 3, 9),
(4, 'Panthera Leo', 'Singa', 'Singa habitatnya di padang pasir. Hewan ini tergolong noktural, dalam sehari 20 jam berbaring di bebatuan atau di bawah pohon yang teduh. Tiap kelompok terdiri dari jantan 1-6 ekor, betina 4-15 ekor.', 'Panjang singa jantan adalah 260-330 cm, dan singa betina 240–270 cm. Panjang ekor jantan 70–105 cm, betina 60–100 cm. Panjang dari ujung kaki ke pundak jantan 80–123 cm, betina 75–110 cm. Berat singa jantan dewasa sekitar 150 kg - 250 kg, sedangkan singa betina berkisar 120–185 kg. Berat bayi singa yang baru dilahirkan sekitar 1,2 kg hingga 2,1 kg. Singa jantan ditumbuhi bulu tebal di sekitar tengkuknya, hal ini lebih menguntungkan untuk melindungi tengkuknya, terutama dalam perkelahian bebas an', 'Singa dalah spesies hewan dari keluarga felidae atau jenis kucing. Singa merupakan hewan yang hidup berkelompok. Biasanya terdiri dari seekor jantan dan banyak betina. Kelompok ini menjaga daerah kekuasaannya.  Singa betina jauh lebih aktif dalam berburu, sedangkan singa jantan lebih santai bersikap menunggu dan meminta jatah dari hasil buruan para betinanya. Singa tidak dapat memanjat pohon seprti jenis kucing lainnya', 'TIDAK DILINDUNGI', 'photo_1553264623_5181.jpg', NULL, NULL, 1, 5),
(6, 'Elephas maximus sumatranus', 'Gajah Sumatra', 'Gajah sumatera hidup di hutan-hutan dataran rendah di bawah 300 meter dpl. Tapi juga sering ditemukan merambah ke dataran yang lebih tinggi. Jenis hutan yang disukainya adalah kawasan rawa dan hutan gambut. Populasinya tersebar di 7 propinsi meliputi Nangroe Aceh Darussalam, Sumatera Utara, Riau, Jambi, Bengkulu, Sumatera Selatan dan Lampung', 'memilki bobot sekitar 3-5 ton dengan tinggi 2-3 meter, Hanya gajah jantan yang memiliki gading yang panjang. Pada betina, kalaupun ada gadingnya pendek hampir tidak kelihatan, memiliki 2 tonjolan pada kepala,  memiliki berbentuk segitiga dan lebih kecil dibandingkan spesies gajah lain, Periode kehamilan untuk bayi gajah sumatera adalah 22 bulan dengan umur rata-rata sampai 70 tahun', 'Gajah sumatera (Elephas maximus sumatranus) adalah subspesies dari gajah asia yang hanya berhabitat di pulau Sumatra. Gajah sumatera berpostur lebih kecil daripada subspesies gajah india. Populasinya semakin menurun dan menjadi spesies yang sangat terancam. Sekitar 2000 sampai 2700 ekor gajah sumatera yang tersisa di alam liar berdasarkan survei pada tahun 2000. ', 'DILINDUNGI', 'photo_1553314573_4681.jpg', NULL, NULL, 4, 4),
(7, 'Pungo Abeli', 'Orang Utan Sumatera', 'Orangutan Sumatra endemik dari pulau Sumatra dan hidupnya terbatas di bagian utara pulau itu. Di alam, orangutan Sumatra bertahan di provinsi Aceh (NAD), ujung paling utara Sumatra', 'Orangutan Sumatra memiliki tinggi sekitar 4.6 kaki dan berat 200 pon. Betina lebih kecil, dengan tinggi 3 kaki dan berat 100 pon. Orangutan Sumatra juga lebih suka diam di pohon daripada sepupunya dari Kalimantan. Rerata jangka waktu kelahiran orangutan Sumatra lebih lama daripada orangutan Kalimantan dengan Rata-rata perkembangbiakan 13,5 Tahun', 'Orangutan Sumatra (Pongo abelli) adalah spesies orangutan terlangka. Orangutan Sumatra hidup dan endemik terhadap Sumatra. Mereka lebih kecil daripada orangutan Kalimantan', 'DILINDUNGI', 'photo_1554463105_3299.jpg', NULL, NULL, 5, 3),
(9, 'Capricornis sumatraensis', 'kambing hutan sumatera', 'Hidup diketinggian 200 meter dari puncak dataran tinggi di Sumatera atau bukit-bukit kapur. Habitatnya adalah hutan primer dan hutan sekunder yang dekat pegunungan. Mereka aktif pada pagi dan sore hari', 'Ciri fisik Capricornis sumatraensis ini adalah bertanduk ramping, pendek dan melengkung ke belakang. Berat badannya antara 50- 140 kg dengan panjang badan antara 140-180 cm. Saat dewasa, tingginya mencapai 85-94 cm.', 'Kambing Hutan Sumatera merupakan jenis kambing hutan yang hanya ada di hutan tropis Pulau Sumatra. Saat ini, populasinya yang masih tersisa berada di Taman Nasional Kerinci Seblat (Sumatera Barat, Jambi, Bengkulu, dan Sumatera Selatan) juga dapat ditemukan di Taman Nasional Batang Gadis (TNBG) yang secara administratif berlokasi di Kabupaten Mandailing Natal (Madina), Provinsi Sumatera Utara dan Taman Nasional Gunung Leuser (Nanggroe Aceh Darussalam)', 'DILINDUNGI', 'photo_1554616602_4716.jpg', NULL, NULL, 8, 5),
(10, 'Nesolagus netscheri', 'Kelinci Sumatera', 'tinggal di hutan dengan ketinggian 600-1400 meter dari permukaan laut di hutan tropis pegunungan Sumatera', 'Berukuran sekitar 40 cm panjangnya, kelinci Sumatra memiliki garis-garis kecoklatan pada bukunya, dengan ekor berwarna merah, dan bawah perutnya berwarna putih', 'juga dikenal dengan nama Kelinci Sumatra telinga pendek atau Kelinci belang Sumatra, adalah jenis kelinci liar yang hanya dapat ditemukan di hutan tropis di pegunungan Bukit Barisan di pulau Sumatra, Indonesia. Kelinci ini merupakan hewan nokturnal, dengan menempati bekas atau liang hewan lain. Makanannya adalah pucuk daun muda dan tanaman yang berukuran pendek, namun kelinci hutan yang ditangkarkan memakan biji-bijian dan buah-buahan', 'DILINDUNGI', 'photo_1554621206_2499.jpg', NULL, NULL, 9, 5),
(11, 'Cyornis Ruckii', 'Sikatan Aceh', 'Endemik di Sumatra. kebiasaan tinggal di hutan bekas tebangan', 'berukuran sekitar 17cm, bewarna biru. Jantan: kepala, tenggorokan dan dada biru; tunggir dan penutup ekor atas biru berkilap. Betina: tubuh bagian atas coklat-merah bata, tunggir dan ekor merah bata, dada merah karat menjadi keputihan pada perut.', 'Sikatan aceh adalah spesies burung dari keluarga Muscicapidae. Burung ini merupakan salah satu jenis burung endemik asal Indonesia yang keberadaannya juga ada di daratan Sumatera. Ciri-ciri burung sikatan aceh yang bisa diamati yaitu terdapat warna biru pada hampir keseluruhan tubuhnya.', 'DILINDUNGI', 'photo_1555061154_8713.png', NULL, NULL, 10, 3),
(12, 'Copsychus malabaricus', 'Murai Batu', 'Tersebar di seluruh pulau Sumatra, Semenanjung Malaysia, dan sebagian pulau Jawa. Cenderung \r\n hidup di hutan alam yang rapat.', 'Memiliki tubuh hampir seluruhnya hitam, kecuali bagian bawah badan berwarna merah cerah hingga jingga kusam. Terdapat sedikit semburat biru di bagian kepala. Ekor panjang ditegakkan dalam keadaan terkejut atau berkicau. Badan berukuran 14-17 cm. untuk jantan memiliki bentuk tubuh yang lebih besar di banding dengan betina dan untuk suara yang di hasilkan burung pejantan jauh lebih keras dan bervariasi di banding dengan betina.', 'Murai batu (Copsychus malabaricus), juga dikenal sebagai Kucica hutan. Termasuk ke dalam famili Muscicapidae atau burung cacing.  Murai batu merupakan kelompok burung yang dikenal sebagai teritorial dan sangat kuat dalam mempertahankan wilayahnya (Thruses). Burung murai batu memiliki suara kicauan yang bagus. Burung murai batu merupakan kelompok burung yang di gemari di kalangan para pecinta kicauan karena memiliki suara atau spesifikasi kicauan yang sangat baik.', 'TIDAK DILINDUNGI', 'photo_1555062563_4774.jpg', NULL, NULL, 11, 7),
(13, 'Sturnus contra', 'Jalak Suren', 'Jalak suren hidup terutama di dataran rendah, namun dapat juga ditemukan di kaki perbukitan sampai 700 meter di atas permukaan laut. Burung-burung ini terutama didapati di wilayah dekat perairan terbuka. burung ini memilih lubang pohon untuk tempat tinggal', 'Jalak suren berukuran sedang (24 cm), berwarna hitam dan putih.[4] Dahi, pipi, garis sayap, tunggir, dan perut berwarna putih. Dada, tenggorokan, dan tubuh bagian atas berwarna hitam.  Burung jantan memiliki badan yang lurus dan lebih besar daripada burung betina.', 'Jalak suren (Sturnus contra)  adalah spesies jalak yang ditemukan di Anak benua India dan Asia Tenggara. Burung ini biasa ditemukan dalam kelompok kecil di kaki lembah dan di dataran rendah. mereka mencari makan di ladang atau sawah, padang rumput dan tanah terbuka untuk mencari biji-bijian, buah-buahan, serangga dan cacing tanah. Pada saat hendak tidur, burung-burung ini mengeluarkan suara yang gaduh.', 'TIDAK DILINDUNGI', 'photo_1555091974_4822.jpg', NULL, NULL, 12, 7),
(14, 'Macaca fascicularis', 'Monyet Ekor Panjang', 'Monyet ekor panjang umum ditemukan di hutan-hutan pesisir (mangrove, hutan pantai), dan hutan-hutan sepanjang sungai besar; di dekat perkampungan, kebun campuran, atau perkebunan; pada beberapa tempat hingga ketinggian 1.300 m dpl. Jenis ini sering membentuk kelompok hingga 20-30 ekor banyaknya; dengan 2-4 jantan dewasa dan selebihnya betina dan anak-anak', 'Monyet ekor panjang bertubuh kecil sedang; dengan panjang kepala dan tubuh 400-470 mm, ekor 500–600 mm, dan kaki belakang (tumit hingga ujung jari) 140 mm. Berat hewan betina 3-4 kg, jantan dewasa mencapai 5–7 kg. Warna rambut di tubuhnya cokelat abu-abu hingga tengguli; sisi bawah selalu lebih pucat. ', 'Monyet ekor panjang adalah monyet asli Asia Tenggara. Nama lokalnya dalam bahasa Melayu, kra atau kera. Monyet ini sangat adaptif dan termasuk hewan liar yang mampu mengikuti perkembangan peradaban manusia. Selain menjadi hewan timangan atau pertunjukan, monyet ini juga digunakan dalam berbagai percobaan kedokteran', 'TIDAK DILINDUNGI', 'photo_1555093100_9406.jpg', NULL, NULL, 13, 7),
(15, 'Carpococcyx viridis', 'Tokhtor Sumatra', 'Burung Tokhtor hidup dipermukaan tanah dan  memakan vertebrata kecil maupun  invertebrata besar', 'ukuran tubuh yang besar mencapai 60 cm. Kaki dan paruh berwarna hijau. Mahkota hitam, sedangkan mantel, bagian atas, leher samping, penutup sayap dan penutup sayap tengah berwarna hijau pudar. Bagian bawah tubuh berwarna coklat dengan palang coklat kehijauan luas. Sayap dan ekor hitam kehijauan mengilap. Tenggorokan bawah dan dada bawah hijau pudar, bagian bawah sisanya bungalan kayu manis, sisi tubuh kemerahan. Kulit sekitar mata berwarna hijau, lila dan biru.', 'Tokhtor sumatera (Carpococcyx viridis) adalah burung endemik Sumatra termasuk dalam 18 burung paling langka di Indonesia. Burung Tokhtor sumatera didaftar sebagai satwa Kritis yakni status konservasi dengan keterancaman paling tinggi. Diduga populasinya tidak mencapai 300 ekor. ', 'DILINDUNGI', 'photo_1555146862_7535.jpg', NULL, NULL, 15, 3),
(16, 'Tupaia Glis', 'Tupai Akar', 'Tupai akar mendiami hutan dataran rendah sampai ketinggian kurang dari 1.500 meter di atas permukaan laut dan kadang-kadang di wilayah perkebunan di Jawa, Sumatra, dan Kalimantan', 'Tupai bertubuh sedang hingga besar, kepala dan badan antara 170-235 mm, ekor 170-242 mm, dan kaki belakang 45-56 mm[4]. Berat badannya berkisar antara 85-190 g. Punggung berwarna cokelat kemerahan (tengguli) dan ekor kehitam-hitaman; sementara perut berwarna abu-abu kekuning-kuningan . Permukaan bawah ekor gundul, sehingga ekor tampak pipih.', 'Tupai akar (Tupaia glis Diard) adalah sejenis mamalia kecil anggota suku tupai (Tupaiidae). Hewan ini menyebar di wilayah Indonesia bagian barat (Sumatra, Jawa, dan Kalimantan), Semenanjung Malaya, dan Palawan, serta pulau-pulau kecil di sekitarnya. Ada pula yang menyebutnya tupai tanah. Aktif mencari makan pada waktu siang hari (diurnal). Tupai akar hidup berpasangan, dan mempunyai kawasan yang dijaga ketat (teritori)', 'TIDAK DILINDUNGI', 'photo_1555149740_6008.jpg', NULL, NULL, 16, 7),
(17, 'Pteropus vampyrus', 'Kalong Besar', 'Kalong kapauk aktif di malam hari (nokturnal). P. vampyrus biasa berkumpul dalam tenggeran dan membentuk koloni yang besar, hingga sekitar 100 individu, di pohon-pohon besar, pohon-pohon mangrove, dan juga di daun-daun nipah di siang hari.', 'Kelelawar buah berukuran besar. Kepala dan badan 300-340 mm; telinga 40 mm; lengan bawah 190-210 mm; tidak berekor; rentang sayap 1.400-1.500 mm. Berat 645-1.100 g. Punggung hitam dengan corengan abu-abu. Bagian belakang kepala dan leher cokelat jingga; bagian kepala lainnya dan tubuh bagian bawah cokelat kehitaman. Anakan berwarna cokelat abu-abu kusam seluruhnya.', 'Kalong besar atau kalong kapauk (Pteropus vampyrus) adalah spesies kelelawar tersebar dari anggota Pteropodidae. Spesies ini menyebar di Asia Tenggara dan Kepulauan Indonesia bagian barat hingga Nusa Tenggara. Sebagaimana kalong lainnya, jenis ini pun hanya memakan buah-buahan dan sebangsanya.', 'TIDAK DILINDUNGI', 'photo_1555223546_8153.jpg', NULL, NULL, 17, 9),
(18, 'Prionailurus Bengalensis', 'Kucing Kuwuk', 'Kucing kuwuk adalah kucing kecil Asia yang memiliki distribusi yang paling luas. Persebaran mereka meluas dari wilayah Amur di Timur Jauh Rusia sampai ke Semenanjung Korea, China, Indochina, Subkontinen India, ke barat di utara Pakistan, dan ke selatan di Filipina dan Kepulauan Sunda di Indonesia. Mereka ditemukan di kawasan agrikultural yang digunakan lebih memilih habitat hutan. Mereka hidup di hutan hujan tropis abadi dan perkebunan di di atas permukaan laut, di hutan peluruh subtropis dan hu', 'Kucing kuwuk berukuran seperti kucing domestik, tetapi ia lebih ramping dengan kaki panjang dan selaput yang jelas antara jari kaki. Kepala kecil mereka ditandai dengan dua garis-garis gelap menonjol, dan moncong putih yang pendek dan sempit mereka. badan mereka dan berbintik dengan beberapa cincin hitam yang tidak jelas dekat ujung berwarna hitam. berat kucing kuwuk 0,55 hingga 3,8 kg, panjang dari kepala sampai badan 38,8 hingga 66 cm  dengan  panjang ekor 17,2 hingga 31 cm', 'Kucing kuwuk (Prionailurus bengalensis; kucing congkok) adalah kucing liar kecil Asia Selatan dan Timur. Sejak tahun 2002, ia terdaftar dalam spesies Risiko Rendah oleh IUCN sebab ia terdistribusi secara luas, tetapi terancam oleh hilangnya habitat dan perburuan di beberapa bagian persebaran. Subspesies kucing kuwuk ada 12, yang berbeda secara luas dalam penampilan. Nama bahasa Inggris kucing kuwuk, yaitu leopard cat, ialah berasal dari bintik-bintik seperti macan tutul yang di semua subspesies ', 'DILINDUNGI', 'photo_1555580674_6560.jpg', NULL, NULL, 18, 7),
(19, 'Prionailurus Planiceps', 'Kucing Tandang', 'tersebar di Semenanjung Thailand-Melayu, Kalimantan dan Sumatra.', ' ', 'Kucing Tandang adalah kucing liar kecil yang tersebar di Semenanjung Thailand-Melayu, Kalimantan dan Sumatra. Sejak 2008, telah terdaftar sebagai terancam punah oleh IUCN karena perusakan lahan basah di habitatnya. Hal ini diduga bahwa ukuran populasi efektif bisa kurang dari 2.500 orang dewasa, tanpa subpopulasi memiliki ukuran populasi efektif lebih besar dari 250 individu dewasa. Spesies ini sangat langka di penangkaran, dengan kurang dari 10 individu, semua disimpan di kebun binatang Malaysi', 'DILINDUNGI', 'photo_1555581610_4419.jpg', NULL, NULL, 18, 4),
(20, 'Cynogale bennettii', 'Musang Air', 'Habitat musang air terdapat daerah hutan rawa gambut dan terkadang dijumpai juga di hutan kering dataran rendah.  Spesies ini mendiami daerah di sekitar sungai dan lahan basah.', 'memiliki mulut yang lebar dan kaki berselaput dengan alas kaki telanjang dan cakar yang panjang. Moncong berbentuk panjang dan memiliki banyak kumis yang panjang ', 'Musang air (Cynogale bennettii) yang merupakan binatang semi akuatik, hanya bisa ditemukan di Indonesia (Sumatera dan Kalimantan), Malaysia, Brunei Darussalam, dan Thailand. Sebagai hewan semi akuatik, beberapa bagian tubuh musang air telah adaptasi sesuai dengan habitatnya. Selain kemampuannya di air sebagai binatang semi akuatik, musang air juga mempunyai kemampuan memanjat yang baik. ', 'DILINDUNGI', 'photo_1555582717_18.jpg', NULL, NULL, 19, 4),
(21, 'Otus rufescens', 'Burung Hantu Celupuk Merah', 'tersebar di semenanjung Malaysia, Filipina, Kalimantan, Sumatra, Bangka dan Jawa. Sering mengujungi vegetasi bawah hutan di dataran rendah', 'berukuran kecil (19 cm), bewarna kemerahan dengan berkas telinga mencolok. Tubuh bagian atascoklat kemerahan, bercoretan hitam dan putih. Tubuh bagian bawah kuning kemerahan, bercoretan hitam. Berkas telinga kuning tua. Iris coklat, paruh krem, kaki keuningan. \r\n\r\nsuara bergaung, siulan bernada tinggi', 'Burung Hantu Celepuk Merah memiliki nama latin Otus rufescens. Burung hantu jenis ini dikenal juga dengan nama internasional Reddish Scops Owl. Celepuk Merah merupakan jenis burung hantu berbadan kecil. Seperti kebanyakan spesies burung hantu lainnya, celepuk merah juga merupakan burung nokturnal. Habitat celepuk merah adalah di wilayah hutan dataran rendah, hutan perbukitan, dan hutan primer serta sekunder.  Makanan burung hantu celepuk merah adalah serangga.', 'TIDAK DILINDUNGI', 'photo_1555678754_1456.jpg', NULL, NULL, 20, 6),
(22, 'Otus spilocephalus', 'Burung Hantu Celupuk Gunung', 'terdapat pada ketinggian 1000m-2500m di hutan basah pegunungan', 'Berukuran kecil (18cm), bewarna merah bata coklat. Berkas telinga kecil, mata kuning paruh krem. tidak ada coretan/garis tebal pada dada. baris yang terdiri dari bercak segitiga putih pada skapular. \r\nSuara lembut, tetapi terdengar dari jauh, dalam dua nada berupa siulan metalik yang dikeluarkan pada interval +- 12 detik.', 'Burung Hantu Celepuk Gunung memiliki nama latin Otus spilocephalus. Dikenal juga dengan nama Mountain Scops Owl. Merupakan spesies burung hantu berukuran kecil yang hidup di daerah hutan pegunungan. Celepuk gunung biasanya bertelur sebanyak 2 hingga 5 butir yang diletakkan langsung di permukaan rongga sarang tanpa merenovasinya terlebih dahulu. Si betina akan mengerami telur mereka sendirian, sementara si jantan akan memberikan suplai makanan bagi si betina.', 'TIDAK DILINDUNGI', 'photo_1555680075_1604.jpg', NULL, NULL, 20, 7),
(23, 'Lutra sumatrana', 'Berang-berang Gunung', 'Jenis ini diketahui menempati habitat rawa dan hutan rawa. Di Thailand menghuni hutan kayu putih. Di Sumatra ditemukan di daerah rawa aliran sungai Musi', 'memiliki bulu coklat pendek yang menjadi pucat di perut, rhinarium yang ditumbuhi rambut, Panjang tubuh total berkisar 95-133 cm dengan berat sekitar 5-8 Kg. Ekor panjang bulat silindris panjang 41-51 cm. Tubuh lebih ramping dan panjang, sehingga bergerak lebih bebas meliuk-liuk. Tubuh berwarna coklat gelap bagian atas, berwarna lebih terang pada bagian bawah dan perut. Terdapat corak putih kontras pada bibir atas sampai ke leher. Jari tertutupi penuh selaput renang, dengan cakar yang berkembang', 'Lutra sumatrana (berang-berang hidung berambut) merupakan berang-berang yang paling langka dan dicari di Sumatera.Jenis ini masih sangat sedikit diketahui tentang tingkah lakunya. Bergerak dengan cara lebih meliuk-liuk jika dibandingkan dengan jenis berang-berang lain. Aktif nokturnal dan krepuskular, hal ini mungkin menghindari aktifitas manusia.Karena informasi masih sangat kurang, jenis ini diperkiran memiliki masa mengandung selama 2 bulan.makanan utamanya adalah ikan', 'DILINDUNGI', 'photo_1555683364_925.jpg', NULL, NULL, 21, 4),
(36, 'Dicerorhinus sumatrensis', 'Badak Sumatra', 'Badak sumatera hidup di hutan pegunungan, rawa, dan hutan hujan sekunder di dataran rendah maupun dataran tinggi. Badak tersebut mendiami daerah perbukitan yang dekat dengan air, terutama di bagian atas lembah-lembah yang curam dengan semak belukar yang sangat banyak. ', 'Seekor badak sumatera dewasa tingginya sekitar 120–145 cm dan panjang tubuhnya sekitar 250 cm, serta panjang ekornya 35–70 cm dengan bobot 500–800 kg. Memiliki 2 cula. Cula belakang jauh lebih kecil, biasanya kurang dari 10 cm panjangnya. Cula-cula tersebut berwarna abu-abu gelap atau hitam. Badak sumatera diperkirakan dapat hidup selama 30–45 tahun di alam liar. Badak sumatera memiliki sebidang rambut panjang di sekitar telinga dan segumpal rambut tebal di ujung ekor.', 'Badak sumatera, juga dikenal sebagai badak berambut atau badak Asia bercula dua (Dicerorhinus sumatrensis), merupakan spesies langka dari famili Rhinocerotidae dan termasuk salah satu dari lima spesies badak yang masih ada. Dalam sebagian besar masa hidupnya, badak sumatera merupakan hewan penyendiri, kecuali selama masa kawin dan memelihara keturunan. Mereka merupakan spesies badak yang paling vokal dan juga berkomunikasi dengan cara menandai tanah dengan kakinya, memelintir pohon kecil hingga ', 'DILINDUNGI', 'photo_1555144450_3400.jpg', NULL, NULL, 14, 3),
(39, 'GGGGG', 'tututu', 'asd', 'asd', 'asd', 'DILINDUNGI', 'photo_1564648377_4d4ff03421c894655c341af166c3c905.jpg', 'photo_1564648377_612521 (1).jpg', 'photo_1564648377_942012.png', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_userlevel`
--

CREATE TABLE `tb_userlevel` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(10) DEFAULT NULL,
  `ket` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_userlevel`
--

INSERT INTO `tb_userlevel` (`id_level`, `nama_level`, `ket`) VALUES
(1, 'bksda', 'Admin BKSDA'),
(2, 'lsm', 'User LSM'),
(3, 'kepala', 'User Kepala BKSDA');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_class`
--

CREATE TABLE `tmp_class` (
  `id` int(11) NOT NULL,
  `latin` varchar(60) DEFAULT NULL,
  `umum` varchar(60) DEFAULT NULL,
  `ciri` varchar(500) DEFAULT NULL,
  `ket` varchar(500) DEFAULT NULL,
  `gmb` varchar(255) DEFAULT NULL,
  `id_institusi` int(11) DEFAULT NULL,
  `komentar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_famili`
--

CREATE TABLE `tmp_famili` (
  `id` int(11) NOT NULL,
  `latin` varchar(60) DEFAULT NULL,
  `umum` varchar(60) DEFAULT NULL,
  `ciri` varchar(500) DEFAULT NULL,
  `ket` varchar(500) DEFAULT NULL,
  `gmb` varchar(255) DEFAULT NULL,
  `id_ordo` int(11) DEFAULT NULL,
  `id_institusi` int(11) DEFAULT NULL,
  `komentar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_genus`
--

CREATE TABLE `tmp_genus` (
  `id` int(11) NOT NULL,
  `latin` varchar(60) DEFAULT NULL,
  `umum` varchar(60) DEFAULT NULL,
  `ciri` varchar(500) DEFAULT NULL,
  `ket` varchar(500) DEFAULT NULL,
  `gmb` varchar(255) DEFAULT NULL,
  `id_famili` int(11) DEFAULT NULL,
  `id_institusi` int(11) DEFAULT NULL,
  `komentar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_ordo`
--

CREATE TABLE `tmp_ordo` (
  `id` int(11) NOT NULL,
  `latin` varchar(60) DEFAULT NULL,
  `umum` varchar(60) DEFAULT NULL,
  `ciri` varchar(500) DEFAULT NULL,
  `ket` varchar(500) DEFAULT NULL,
  `gmb` varchar(255) DEFAULT NULL,
  `id_class` int(11) DEFAULT NULL,
  `id_institusi` int(11) DEFAULT NULL,
  `komentar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_ordo`
--

INSERT INTO `tmp_ordo` (`id`, `latin`, `umum`, `ciri`, `ket`, `gmb`, `id_class`, `id_institusi`, `komentar`) VALUES
(1, 'Rodentia', 'Hewan Pengerat', 'memiliki gigi seri tumbuh pada rahang bawah', 'Rodentia termasuk dalam kelompok mamalia pengerat. gigi seri tumbuh pada rahang bawah dan berbentuk seperti pahat. Taring dan beberapa geraham depan tidak tumbuh. Contoh hewan dalam kelompok ini adalah Rattus sp. (tikus) dan Cavia cobaya (marmut). Mereka disebut pengerat karena memang seperti itulah mereka mengonsumsi makanan.', 'photo_1553269242_1710.jpg', 2, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_spesies`
--

CREATE TABLE `tmp_spesies` (
  `id` int(11) NOT NULL,
  `latin` varchar(60) DEFAULT NULL,
  `umum` varchar(60) DEFAULT NULL,
  `karakteristik` varchar(500) DEFAULT NULL,
  `habitat` varchar(500) DEFAULT NULL,
  `stat` enum('DILINDUNGI','TIDAK DILINDUNGI') DEFAULT NULL,
  `ket` varchar(500) DEFAULT NULL,
  `gmb` varchar(255) DEFAULT NULL,
  `gmb2` varchar(255) DEFAULT NULL,
  `gmb3` varchar(255) DEFAULT NULL,
  `id_genus` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_institusi` int(11) DEFAULT NULL,
  `komentar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_spesies`
--

INSERT INTO `tmp_spesies` (`id`, `latin`, `umum`, `karakteristik`, `habitat`, `stat`, `ket`, `gmb`, `gmb2`, `gmb3`, `id_genus`, `id_kategori`, `id_institusi`, `komentar`) VALUES
(2, 'bnvbnbbndgbfd', 'fdgdgfdgfdgfdgfd', 'hgfhfhgfhgfhjf', 'nbvnbvnbvnbv', 'TIDAK DILINDUNGI', 'hfhjfjhfjhf', 'photo_1557254219_8598.jpg', 'photo_1557254219_7528.png', 'photo_1557254219_2600.png', 11, 4, 6, 'Data diperbaiki dulu lah lek...........');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_log`
-- (See below for the actual view)
--
CREATE TABLE `v_log` (
`id_log` int(11)
,`kegiatan` varchar(200)
,`tanggal` date
,`waktu` time
,`id_institusi` int(11)
,`institusi` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_login_sistem`
-- (See below for the actual view)
--
CREATE TABLE `v_login_sistem` (
`id_institusi` int(11)
,`nama` varchar(50)
,`alamat` varchar(400)
,`pass` varchar(255)
,`username` varchar(255)
,`id_level` int(11)
,`nama_level` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_spesies`
-- (See below for the actual view)
--
CREATE TABLE `v_spesies` (
`id_class` int(11)
,`nm_class` varchar(60)
,`nmu_class` varchar(60)
,`ciri_class` varchar(500)
,`ket_class` varchar(500)
,`gbr_class` varchar(500)
,`id_ordo` int(11)
,`nm_ordo` varchar(60)
,`nmu_ordo` varchar(60)
,`ciri_ordo` varchar(500)
,`ket_ordo` varchar(500)
,`gbr_ordo` varchar(100)
,`id_famili` int(11)
,`nm_famili` varchar(60)
,`nmu_famili` varchar(60)
,`ciri_famili` varchar(300)
,`ket_famili` varchar(500)
,`gbr_famili` varchar(100)
,`id_genus` int(11)
,`nm_genus` varchar(60)
,`nmu_genus` varchar(60)
,`ciri_genus` varchar(300)
,`ket_genus` varchar(500)
,`gbr_genus` varchar(100)
,`id_spesies` int(11)
,`nm_spesies` varchar(60)
,`nmu_spesies` varchar(60)
,`habitat` varchar(500)
,`karakteristik` varchar(500)
,`ket_spesies` varchar(500)
,`stat` enum('DILINDUNGI','TIDAK DILINDUNGI')
,`gbr_spesies` varchar(100)
,`gbr2_spesies` varchar(255)
,`gbr3_spesies` varchar(255)
,`id_kategori` int(11)
,`nm_kategori` varchar(60)
,`nmu_kategori` varchar(60)
,`singkatan` varchar(5)
,`ket_kategori` varchar(500)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tmpspesies_baru`
-- (See below for the actual view)
--
CREATE TABLE `v_tmpspesies_baru` (
`id` int(11)
,`latin` varchar(60)
,`umum` varchar(60)
,`karakteristik` varchar(500)
,`habitat` varchar(500)
,`stat` enum('DILINDUNGI','TIDAK DILINDUNGI')
,`ket` varchar(500)
,`gmb` varchar(255)
,`gmb2` varchar(255)
,`gmb3` varchar(255)
,`id_genus` int(11)
,`id_kategori` int(11)
,`id_institusi` int(11)
,`komentar` varchar(500)
,`nama_latin` varchar(60)
,`nama_umum` varchar(60)
,`nm_kategori` varchar(60)
,`singkatan` varchar(5)
,`nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tmp_class`
-- (See below for the actual view)
--
CREATE TABLE `v_tmp_class` (
`id` int(11)
,`latin` varchar(60)
,`umum` varchar(60)
,`ciri` varchar(500)
,`ket` varchar(500)
,`gmb` varchar(255)
,`id_institusi` int(11)
,`nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tmp_famili`
-- (See below for the actual view)
--
CREATE TABLE `v_tmp_famili` (
`id` int(11)
,`latin` varchar(60)
,`umum` varchar(60)
,`ciri` varchar(500)
,`ket` varchar(500)
,`gmb` varchar(255)
,`id_ordo` int(11)
,`id_institusi` int(11)
,`nama` varchar(50)
,`nama_latin` varchar(60)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tmp_genus`
-- (See below for the actual view)
--
CREATE TABLE `v_tmp_genus` (
`id` int(11)
,`latin` varchar(60)
,`umum` varchar(60)
,`ciri` varchar(500)
,`ket` varchar(500)
,`gmb` varchar(255)
,`id_famili` int(11)
,`id_institusi` int(11)
,`nama` varchar(50)
,`nama_latin` varchar(60)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tmp_ordo`
-- (See below for the actual view)
--
CREATE TABLE `v_tmp_ordo` (
`id` int(11)
,`latin` varchar(60)
,`umum` varchar(60)
,`ciri` varchar(500)
,`ket` varchar(500)
,`gmb` varchar(255)
,`id_class` int(11)
,`id_institusi` int(11)
,`nama_latin` varchar(60)
,`nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_tmp_spesies`
-- (See below for the actual view)
--
CREATE TABLE `v_tmp_spesies` (
`id` int(11)
,`latin` varchar(60)
,`umum` varchar(60)
,`karakteristik` varchar(500)
,`habitat` varchar(500)
,`stat` enum('DILINDUNGI','TIDAK DILINDUNGI')
,`ket` varchar(500)
,`gmb` varchar(255)
,`id_genus` int(11)
,`id_kategori` int(11)
,`id_institusi` int(11)
,`nama` varchar(50)
,`nama_latin` varchar(60)
,`nm_kategori` varchar(60)
,`singkatan` varchar(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_user_data`
-- (See below for the actual view)
--
CREATE TABLE `v_user_data` (
`id_class` int(11)
,`nm_class` varchar(60)
,`nmu_class` varchar(60)
,`ciri_class` varchar(500)
,`ket_class` varchar(500)
,`gbr_class` varchar(500)
,`id_ordo` int(11)
,`nm_ordo` varchar(60)
,`nmu_ordo` varchar(60)
,`ciri_ordo` varchar(500)
,`ket_ordo` varchar(500)
,`gbr_ordo` varchar(100)
,`id_famili` int(11)
,`nm_famili` varchar(60)
,`nmu_famili` varchar(60)
,`ciri_famili` varchar(300)
,`ket_famili` varchar(500)
,`gbr_famili` varchar(100)
,`id_genus` int(11)
,`nm_genus` varchar(60)
,`nmu_genus` varchar(60)
,`ciri_genus` varchar(300)
,`ket_genus` varchar(500)
,`gbr_genus` varchar(100)
,`id_spesies` int(11)
,`nm_spesies` varchar(60)
,`nmu_spesies` varchar(60)
,`habitat` varchar(500)
,`karakteristik` varchar(500)
,`ket_spesies` varchar(500)
,`stat` enum('DILINDUNGI','TIDAK DILINDUNGI')
,`gbr_spesies` varchar(100)
,`id_kategori` int(11)
,`nm_kategori` varchar(60)
,`nmu_kategori` varchar(60)
,`singkatan` varchar(5)
,`ket_kategori` varchar(500)
);

-- --------------------------------------------------------

--
-- Structure for view `v_log`
--
DROP TABLE IF EXISTS `v_log`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_log`  AS  select `a`.`id_log` AS `id_log`,`a`.`kegiatan` AS `kegiatan`,`a`.`tanggal` AS `tanggal`,`a`.`waktu` AS `waktu`,`b`.`id_institusi` AS `id_institusi`,`b`.`nama` AS `institusi` from (`tb_log` `a` join `tb_institusi` `b` on((`a`.`id_institusi` = `b`.`id_institusi`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_login_sistem`
--
DROP TABLE IF EXISTS `v_login_sistem`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_login_sistem`  AS  select `a`.`id_institusi` AS `id_institusi`,`a`.`nama` AS `nama`,`a`.`alamat` AS `alamat`,`a`.`pass` AS `pass`,`a`.`username` AS `username`,`b`.`id_level` AS `id_level`,`b`.`nama_level` AS `nama_level` from (`tb_institusi` `a` join `tb_userlevel` `b` on((`a`.`id_level` = `b`.`id_level`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_spesies`
--
DROP TABLE IF EXISTS `v_spesies`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_spesies`  AS  select `tb_class`.`id_class` AS `id_class`,`tb_class`.`nama_latin` AS `nm_class`,`tb_class`.`nama_umum` AS `nmu_class`,`tb_class`.`ciri_ciri` AS `ciri_class`,`tb_class`.`keterangan` AS `ket_class`,`tb_class`.`gambar` AS `gbr_class`,`tb_ordo`.`id_ordo` AS `id_ordo`,`tb_ordo`.`nama_latin` AS `nm_ordo`,`tb_ordo`.`nama_umum` AS `nmu_ordo`,`tb_ordo`.`ciri_ciri` AS `ciri_ordo`,`tb_ordo`.`keterangan` AS `ket_ordo`,`tb_ordo`.`gambar` AS `gbr_ordo`,`tb_famili`.`id_famili` AS `id_famili`,`tb_famili`.`nama_latin` AS `nm_famili`,`tb_famili`.`nama_umum` AS `nmu_famili`,`tb_famili`.`ciri_ciri` AS `ciri_famili`,`tb_famili`.`keterangan` AS `ket_famili`,`tb_famili`.`gambar` AS `gbr_famili`,`tb_genus`.`id_genus` AS `id_genus`,`tb_genus`.`nama_latin` AS `nm_genus`,`tb_genus`.`nama_umum` AS `nmu_genus`,`tb_genus`.`ciri_ciri` AS `ciri_genus`,`tb_genus`.`keterangan` AS `ket_genus`,`tb_genus`.`gambar` AS `gbr_genus`,`tb_spesies`.`id_spesies` AS `id_spesies`,`tb_spesies`.`nama_latin` AS `nm_spesies`,`tb_spesies`.`nama_umum` AS `nmu_spesies`,`tb_spesies`.`habitat` AS `habitat`,`tb_spesies`.`karakteristik` AS `karakteristik`,`tb_spesies`.`keterangan` AS `ket_spesies`,`tb_spesies`.`stat` AS `stat`,`tb_spesies`.`gambar` AS `gbr_spesies`,`tb_spesies`.`gambar2` AS `gbr2_spesies`,`tb_spesies`.`gambar3` AS `gbr3_spesies`,`tb_kelangkaan`.`id_kategori` AS `id_kategori`,`tb_kelangkaan`.`nama` AS `nm_kategori`,`tb_kelangkaan`.`umum` AS `nmu_kategori`,`tb_kelangkaan`.`singkatan` AS `singkatan`,`tb_kelangkaan`.`keterangan` AS `ket_kategori` from (((((`tb_class` join `tb_ordo` on((`tb_class`.`id_class` = `tb_ordo`.`id_class`))) join `tb_famili` on((`tb_ordo`.`id_ordo` = `tb_famili`.`id_ordo`))) join `tb_genus` on((`tb_famili`.`id_famili` = `tb_genus`.`id_famili`))) join `tb_spesies` on((`tb_genus`.`id_genus` = `tb_spesies`.`id_genus`))) join `tb_kelangkaan` on((`tb_spesies`.`id_kategori` = `tb_kelangkaan`.`id_kategori`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_tmpspesies_baru`
--
DROP TABLE IF EXISTS `v_tmpspesies_baru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tmpspesies_baru`  AS  select `tmp_spesies`.`id` AS `id`,`tmp_spesies`.`latin` AS `latin`,`tmp_spesies`.`umum` AS `umum`,`tmp_spesies`.`karakteristik` AS `karakteristik`,`tmp_spesies`.`habitat` AS `habitat`,`tmp_spesies`.`stat` AS `stat`,`tmp_spesies`.`ket` AS `ket`,`tmp_spesies`.`gmb` AS `gmb`,`tmp_spesies`.`gmb2` AS `gmb2`,`tmp_spesies`.`gmb3` AS `gmb3`,`tmp_spesies`.`id_genus` AS `id_genus`,`tmp_spesies`.`id_kategori` AS `id_kategori`,`tmp_spesies`.`id_institusi` AS `id_institusi`,`tmp_spesies`.`komentar` AS `komentar`,`tb_genus`.`nama_latin` AS `nama_latin`,`tb_genus`.`nama_umum` AS `nama_umum`,`tb_kelangkaan`.`umum` AS `nm_kategori`,`tb_kelangkaan`.`singkatan` AS `singkatan`,`tb_institusi`.`nama` AS `nama` from (((`tmp_spesies` join `tb_genus` on((`tmp_spesies`.`id_genus` = `tb_genus`.`id_genus`))) join `tb_kelangkaan` on((`tb_kelangkaan`.`id_kategori` = `tmp_spesies`.`id_kategori`))) join `tb_institusi` on((`tb_institusi`.`id_institusi` = `tmp_spesies`.`id_institusi`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_tmp_class`
--
DROP TABLE IF EXISTS `v_tmp_class`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tmp_class`  AS  select `a`.`id` AS `id`,`a`.`latin` AS `latin`,`a`.`umum` AS `umum`,`a`.`ciri` AS `ciri`,`a`.`ket` AS `ket`,`a`.`gmb` AS `gmb`,`a`.`id_institusi` AS `id_institusi`,`b`.`nama` AS `nama` from (`tmp_class` `a` join `tb_institusi` `b` on((`a`.`id_institusi` = `b`.`id_institusi`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_tmp_famili`
--
DROP TABLE IF EXISTS `v_tmp_famili`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tmp_famili`  AS  select `b`.`id` AS `id`,`b`.`latin` AS `latin`,`b`.`umum` AS `umum`,`b`.`ciri` AS `ciri`,`b`.`ket` AS `ket`,`b`.`gmb` AS `gmb`,`b`.`id_ordo` AS `id_ordo`,`b`.`id_institusi` AS `id_institusi`,`a`.`nama` AS `nama`,`c`.`nama_latin` AS `nama_latin` from ((`tb_institusi` `a` join `tmp_famili` `b` on((`a`.`id_institusi` = `b`.`id_institusi`))) join `tb_ordo` `c` on((`b`.`id_ordo` = `c`.`id_ordo`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_tmp_genus`
--
DROP TABLE IF EXISTS `v_tmp_genus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tmp_genus`  AS  select `b`.`id` AS `id`,`b`.`latin` AS `latin`,`b`.`umum` AS `umum`,`b`.`ciri` AS `ciri`,`b`.`ket` AS `ket`,`b`.`gmb` AS `gmb`,`b`.`id_famili` AS `id_famili`,`b`.`id_institusi` AS `id_institusi`,`a`.`nama` AS `nama`,`c`.`nama_latin` AS `nama_latin` from ((`tb_institusi` `a` join `tmp_genus` `b` on((`a`.`id_institusi` = `b`.`id_institusi`))) join `tb_famili` `c` on((`b`.`id_famili` = `c`.`id_famili`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_tmp_ordo`
--
DROP TABLE IF EXISTS `v_tmp_ordo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tmp_ordo`  AS  select `b`.`id` AS `id`,`b`.`latin` AS `latin`,`b`.`umum` AS `umum`,`b`.`ciri` AS `ciri`,`b`.`ket` AS `ket`,`b`.`gmb` AS `gmb`,`b`.`id_class` AS `id_class`,`b`.`id_institusi` AS `id_institusi`,`c`.`nama_latin` AS `nama_latin`,`a`.`nama` AS `nama` from ((`tb_institusi` `a` join `tmp_ordo` `b` on((`a`.`id_institusi` = `b`.`id_institusi`))) join `tb_class` `c` on((`b`.`id_class` = `c`.`id_class`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_tmp_spesies`
--
DROP TABLE IF EXISTS `v_tmp_spesies`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_tmp_spesies`  AS  select `d`.`id` AS `id`,`d`.`latin` AS `latin`,`d`.`umum` AS `umum`,`d`.`karakteristik` AS `karakteristik`,`d`.`habitat` AS `habitat`,`d`.`stat` AS `stat`,`d`.`ket` AS `ket`,`d`.`gmb` AS `gmb`,`d`.`id_genus` AS `id_genus`,`d`.`id_kategori` AS `id_kategori`,`d`.`id_institusi` AS `id_institusi`,`a`.`nama` AS `nama`,`b`.`nama_latin` AS `nama_latin`,`c`.`nama` AS `nm_kategori`,`c`.`singkatan` AS `singkatan` from (((`tb_institusi` `a` join `tmp_spesies` `d` on((`a`.`id_institusi` = `d`.`id_institusi`))) join `tb_genus` `b` on((`d`.`id_genus` = `b`.`id_genus`))) join `tb_kelangkaan` `c` on((`c`.`id_kategori` = `d`.`id_kategori`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_user_data`
--
DROP TABLE IF EXISTS `v_user_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user_data`  AS  select `a`.`id_class` AS `id_class`,`a`.`nama_latin` AS `nm_class`,`a`.`nama_umum` AS `nmu_class`,`a`.`ciri_ciri` AS `ciri_class`,`a`.`keterangan` AS `ket_class`,`a`.`gambar` AS `gbr_class`,`b`.`id_ordo` AS `id_ordo`,`b`.`nama_latin` AS `nm_ordo`,`b`.`nama_umum` AS `nmu_ordo`,`b`.`ciri_ciri` AS `ciri_ordo`,`b`.`keterangan` AS `ket_ordo`,`b`.`gambar` AS `gbr_ordo`,`c`.`id_famili` AS `id_famili`,`c`.`nama_latin` AS `nm_famili`,`c`.`nama_umum` AS `nmu_famili`,`c`.`ciri_ciri` AS `ciri_famili`,`c`.`keterangan` AS `ket_famili`,`c`.`gambar` AS `gbr_famili`,`d`.`id_genus` AS `id_genus`,`d`.`nama_latin` AS `nm_genus`,`d`.`nama_umum` AS `nmu_genus`,`d`.`ciri_ciri` AS `ciri_genus`,`d`.`keterangan` AS `ket_genus`,`d`.`gambar` AS `gbr_genus`,`e`.`id_spesies` AS `id_spesies`,`e`.`nama_latin` AS `nm_spesies`,`e`.`nama_umum` AS `nmu_spesies`,`e`.`habitat` AS `habitat`,`e`.`karakteristik` AS `karakteristik`,`e`.`keterangan` AS `ket_spesies`,`e`.`stat` AS `stat`,`e`.`gambar` AS `gbr_spesies`,`f`.`id_kategori` AS `id_kategori`,`f`.`nama` AS `nm_kategori`,`f`.`umum` AS `nmu_kategori`,`f`.`singkatan` AS `singkatan`,`f`.`keterangan` AS `ket_kategori` from (((((`tb_class` `a` join `tb_ordo` `b` on((`a`.`id_class` = `b`.`id_class`))) join `tb_famili` `c` on((`b`.`id_ordo` = `c`.`id_ordo`))) join `tb_genus` `d` on((`c`.`id_famili` = `d`.`id_famili`))) join `tb_spesies` `e` on((`d`.`id_genus` = `e`.`id_genus`))) join `tb_kelangkaan` `f` on((`e`.`id_kategori` = `f`.`id_kategori`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_class`
--
ALTER TABLE `tb_class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indexes for table `tb_famili`
--
ALTER TABLE `tb_famili`
  ADD PRIMARY KEY (`id_famili`),
  ADD KEY `tb_famili_ibfk_1` (`id_ordo`);

--
-- Indexes for table `tb_genus`
--
ALTER TABLE `tb_genus`
  ADD PRIMARY KEY (`id_genus`),
  ADD KEY `tb_genus_ibfk_1` (`id_famili`);

--
-- Indexes for table `tb_institusi`
--
ALTER TABLE `tb_institusi`
  ADD PRIMARY KEY (`id_institusi`),
  ADD KEY `tb_institusi_ibfk_1` (`id_level`);

--
-- Indexes for table `tb_kelangkaan`
--
ALTER TABLE `tb_kelangkaan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `tb_log_ibfk_1` (`id_institusi`);

--
-- Indexes for table `tb_ordo`
--
ALTER TABLE `tb_ordo`
  ADD PRIMARY KEY (`id_ordo`),
  ADD KEY `tb_ordo_ibfk_1` (`id_class`);

--
-- Indexes for table `tb_spesies`
--
ALTER TABLE `tb_spesies`
  ADD PRIMARY KEY (`id_spesies`),
  ADD KEY `tb_spesies_ibfk_1` (`id_genus`),
  ADD KEY `tb_spesies_ibfk_2` (`id_kategori`);

--
-- Indexes for table `tb_userlevel`
--
ALTER TABLE `tb_userlevel`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tmp_class`
--
ALTER TABLE `tmp_class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_institusi` (`id_institusi`);

--
-- Indexes for table `tmp_famili`
--
ALTER TABLE `tmp_famili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ordo` (`id_ordo`),
  ADD KEY `id_institusi` (`id_institusi`);

--
-- Indexes for table `tmp_genus`
--
ALTER TABLE `tmp_genus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_famili` (`id_famili`),
  ADD KEY `id_institusi` (`id_institusi`);

--
-- Indexes for table `tmp_ordo`
--
ALTER TABLE `tmp_ordo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_class` (`id_class`),
  ADD KEY `id_institusi` (`id_institusi`);

--
-- Indexes for table `tmp_spesies`
--
ALTER TABLE `tmp_spesies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genus` (`id_genus`),
  ADD KEY `id_institusi` (`id_institusi`),
  ADD KEY `tmp_spesies_ibfk_3` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_class`
--
ALTER TABLE `tb_class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_famili`
--
ALTER TABLE `tb_famili`
  MODIFY `id_famili` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_genus`
--
ALTER TABLE `tb_genus`
  MODIFY `id_genus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_institusi`
--
ALTER TABLE `tb_institusi`
  MODIFY `id_institusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_kelangkaan`
--
ALTER TABLE `tb_kelangkaan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `tb_ordo`
--
ALTER TABLE `tb_ordo`
  MODIFY `id_ordo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_spesies`
--
ALTER TABLE `tb_spesies`
  MODIFY `id_spesies` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tb_userlevel`
--
ALTER TABLE `tb_userlevel`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tmp_class`
--
ALTER TABLE `tmp_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tmp_famili`
--
ALTER TABLE `tmp_famili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tmp_genus`
--
ALTER TABLE `tmp_genus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tmp_ordo`
--
ALTER TABLE `tmp_ordo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tmp_spesies`
--
ALTER TABLE `tmp_spesies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_famili`
--
ALTER TABLE `tb_famili`
  ADD CONSTRAINT `tb_famili_ibfk_1` FOREIGN KEY (`id_ordo`) REFERENCES `tb_ordo` (`id_ordo`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_genus`
--
ALTER TABLE `tb_genus`
  ADD CONSTRAINT `tb_genus_ibfk_1` FOREIGN KEY (`id_famili`) REFERENCES `tb_famili` (`id_famili`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_institusi`
--
ALTER TABLE `tb_institusi`
  ADD CONSTRAINT `tb_institusi_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_userlevel` (`id_level`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD CONSTRAINT `tb_log_ibfk_1` FOREIGN KEY (`id_institusi`) REFERENCES `tb_institusi` (`id_institusi`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tb_ordo`
--
ALTER TABLE `tb_ordo`
  ADD CONSTRAINT `tb_ordo_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `tb_class` (`id_class`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_spesies`
--
ALTER TABLE `tb_spesies`
  ADD CONSTRAINT `tb_spesies_ibfk_1` FOREIGN KEY (`id_genus`) REFERENCES `tb_genus` (`id_genus`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_spesies_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kelangkaan` (`id_kategori`) ON UPDATE CASCADE;

--
-- Constraints for table `tmp_class`
--
ALTER TABLE `tmp_class`
  ADD CONSTRAINT `tmp_class_ibfk_1` FOREIGN KEY (`id_institusi`) REFERENCES `tb_institusi` (`id_institusi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tmp_famili`
--
ALTER TABLE `tmp_famili`
  ADD CONSTRAINT `tmp_famili_ibfk_1` FOREIGN KEY (`id_ordo`) REFERENCES `tb_ordo` (`id_ordo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tmp_famili_ibfk_2` FOREIGN KEY (`id_institusi`) REFERENCES `tb_institusi` (`id_institusi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tmp_genus`
--
ALTER TABLE `tmp_genus`
  ADD CONSTRAINT `tmp_genus_ibfk_1` FOREIGN KEY (`id_famili`) REFERENCES `tb_famili` (`id_famili`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tmp_genus_ibfk_2` FOREIGN KEY (`id_institusi`) REFERENCES `tb_institusi` (`id_institusi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tmp_ordo`
--
ALTER TABLE `tmp_ordo`
  ADD CONSTRAINT `tmp_ordo_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `tb_class` (`id_class`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tmp_ordo_ibfk_2` FOREIGN KEY (`id_institusi`) REFERENCES `tb_institusi` (`id_institusi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tmp_spesies`
--
ALTER TABLE `tmp_spesies`
  ADD CONSTRAINT `tmp_spesies_ibfk_1` FOREIGN KEY (`id_genus`) REFERENCES `tb_genus` (`id_genus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tmp_spesies_ibfk_2` FOREIGN KEY (`id_institusi`) REFERENCES `tb_institusi` (`id_institusi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tmp_spesies_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kelangkaan` (`id_kategori`) ON DELETE CASCADE ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
