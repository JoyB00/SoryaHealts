-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 06:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sorya_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamats`
--

CREATE TABLE `alamats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alamats`
--

INSERT INTO `alamats` (`id`, `id_user`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 5, 'Jalan Jakal', NULL, NULL),
(3, 5, 'Candra Gila', NULL, NULL),
(5, 2, 'Jalan Cinta', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) NOT NULL,
  `gambar_artikel` longtext NOT NULL,
  `judul` varchar(255) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `tanggal_publish` date NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `gambar_artikel`, `judul`, `topik`, `author`, `tanggal_publish`, `deskripsi`) VALUES
(1, 'Tak-Hanya-Lezat-Ini-X-Manfaat-Kacang-Tanah-yang-Jarang-Diketahui-01.jpg.webp', '11 Manfaat Kacang Tanah untuk Kesehatan yang Jarang Diketahui', 'Makanan Sehat', 'Dr.Boyke', '2023-12-10', '“Kacang tanah bisa kamu konsumsi dalam bentuk kering atau rebus. Tak hanya mengenyangkan, kacang tanah mampu mengurangi risiko kanker, menjaga kesehatan jantung dan mengendalikan kadar gula darah.\"\r\n\r\n11 Manfaat Kacang Tanah untuk Kesehatan yang Jarang Diketahui\r\nHalodoc, Jakarta – Kacang tanah (Arachis hypogaea L.) adalah salah satu jenis kacang dari tanaman Leguminosae. Ini merupakan salah satu jenis kacang-kacangan yang memiliki peranan penting, setelah kedelai.\r\n\r\nKacang tanah menjadi salah satu sumber makanan yang masuk dalam golongan kacang-kacangan dan memiliki manfaat untuk kesehatan tubuh. Selain menjadi camilan, kacang jenis ini juga masuk ke dalam jenis makanan yang menyehatkan. Yuk cek kandungan nutrisi dan manfaatnya!\r\n\r\nManfaat Kacang Tanah untuk Kesehatan\r\nKacang tanah atau peanuts mengandung berbagai nutrisi, mulai dari protein, serat, karbohidrat, dan lemak (jenis, tak jenuh, dan omega-6). Kandungan lemak dalam kacang ini antara 44-56 persen yang terdiri dari asam oleat dan linoleat. \r\n\r\nSelain itu, makanan sehat ini juga mengandung banyak vitamin dan mineral, seperti biotin, tembaga, niasin, folat, mangan, tiamin, fosfor, magnesium, dan vitamin E. \r\n\r\nLalu, apa saja manfaat kacang tanah untuk kesehatan? Berikut beberapa di antaranya:\r\n\r\n1. Mengurangi risiko kanker\r\nkacang tanah mengurangi risiko kanker\r\nAsupan kacang tanah memiliki kaitan dengan penurunan risiko kanker. Studi dalam jurnal Cancer Causes & Control menyebutkan, mengonsumsi kacang ini juga berhubungan dengan penurunan kanker payudara pada wanita setelah menopause. \r\n\r\nManfaat lainnya termasuk penurunan risiko kanker kolorektal, kanker lambung, dan esofagus.\r\n\r\n2. Mencegah pembentukan batu empedu\r\nManfaat kacang tanah selanjutnya adalah mencegah munculnya batu empedu.\r\n\r\nStudi dalam American Journal of Epidemiology menyebutkan, pria dan wanita yang mengonsumsi kacang sebanyak lima unit atau lebih, memiliki risiko untuk mengidap penyakit batu empedu lebih rendah.\r\n\r\n3. Meningkatkan kesehatan jantung\r\nkacang tanah bisa mengoptimalkan kesehatan jantung\r\nSelain itu, peanuts juga membantu menjaga jantung tetap sehat. Studi pada jurnal Nutrition menyebutkan, mengonsumsi 46 gram kacang tanah atau selai kacang secara rutin setiap hari membantu memelihara kesehatan jantung bagi pengidap penyakit kencing manis.\r\n\r\n4. Mengontrol kadar gula darah\r\nManfaat kacang tanah lainnya adalah membantu mengendalikan kadar gula dalam darah. Sebab, makanan ini memiliki indeks glikemik yang rendah, tinggi protein, serat, dan lemak. \r\n\r\nTak hanya itu, kandungan minyak sehat dan magnesium pada kacang tanah juga efektif untuk membantu mengendalikan gula darah.\r\n\r\nMau tahu apa saja manfaat kacang kedelai untuk kesehatan tubuh? Baca selengkapnya di artikel ini: “9 Manfaat Kacang Kedelai yang Kaya Isoflavone untuk Kesehatan Tubuh“\r\n\r\n5. Membantu menurunkan berat badan\r\nmembantu menurunkan berat badan\r\nMeski tinggi kalori, mengonsumsinya tidak membuat berat badan bertambah. Studi dalam Nutrition Research menyebutkan, mengonsumsi peanuts bisa mengurangi risiko kamu mengalami obesitas dan membantu menjaga berat badan. \r\n\r\nSebab, kandungan seratnya yang tinggi membuat kamu akan merasa kenyang lebih lama.'),
(2, 'Ini-X-Cara-Menurunkan-Berat-Badan-dengan-Cepat-01.jpg.webp', '13 Cara Menurunkan Berat Badan dengan Cepat dan Alami', 'Diet dan Nutrisi', 'Dr.Tirtha', '2023-12-11', 'Sebenarnya, naik turunnya berat badan pada seseorang bergantung pada asupan kalori yang masuk ke tubuh dan banyaknya kalori yang terbakar saat tubuh melakukan aktivitas.\r\n\r\nAsupan kalori berlebih yang tidak seimbang dengan rutin olahraga atau beraktivitas fisik bisa memicu kenaikan berat badan. Sebab, tubuh akan menyimpan kalori yang tidak terpakai dalam bentuk lemak.\r\n\r\nCara Menurunkan Berat Badan dengan Cepat\r\nInilah sebabnya, supaya bisa menurunkan berat badan, tentu asupan kalori yang masuk ke tubuh harus lebih sedikit. Selain itu, kamu juga harus meningkatkan durasi aktivitas fisik sehingga tubuh bisa memecah lemak dan mengubahnya menjadi energi.\r\n\r\nFaktanya, ada banyak cara menurunkan berat badan yang bisa kamu coba, misalnya:\r\n\r\n1. Mengonsumsi protein saat sarapan\r\nStudi dalam BMJ Journals menyebutkan, protein bekerja dengan mengendalikan hormon nafsu makan.\r\n\r\nAsupan ini membuat kamu merasa kenyang lebih lama karena meningkatkan hormon pemicu rasa kenyang, yaitu kolesistokinin, peptida YY, dan GLP-1.\r\n\r\nKetahui apa saja Pilihan Makanan Tinggi Protein yang Baik Bagi Kesehatan, bisa dijadikan menu sarapan yang efisien dan bergizi.\r\n\r\n2. Kurangi gula dan karbohidrat olahan\r\nCara menurunkan berat badan selanjutnya adalah mengurangi asupan karbohidrat olahan dan gula. Pasalnya, karbohidrat olahan tidak mengandung serat dan nutrisi penting lainnya.\r\n\r\nSelain itu, tubuh lebih mudah mencerna dan mengubah karbohidrat olahan menjadi glukosa sehingga membuat lebih cepat lapar.\r\n\r\nSementara itu, glukosa berlebih yang masuk ke aliran darah dapat memicu peningkatan kadar hormon insulin. Hal ini mengakibatkan terjadinya kelebihan penyimpanan lemak pada jaringan adiposa yang memicu peningkatan berat badan.\r\n\r\n3. Perbanyak asupan serat\r\nAsupan serat dapat meningkatkan rasa kenyang sehingga kamu tidak cenderung makan berlebihan. Ini dapat menjadi salah satu cara menurunkan berat badan dengan cepat. Makanan kaya serat yang bisa kamu konsumsi yaitu buah-buahan sayuran, kacang-kacangan, dan biji-bijian.\r\n\r\n4. Cara menurunkan berat badan dengan rutin olahraga\r\nOlahraga secara teratur juga menjadi salah satu cara menurunkan berat badan yang alami dan cepat. Selain itu, aktivitas murah meriah ini bisa kamu lakukan setiap saat. Mulailah dengan melakukan kegiatan fisik dalam intensitas ringan sampai sedang saja. Contohnya berjalan cepat selama 30 menit, bersepeda, atau berenang.\r\n\r\n5. Tidur yang cukup\r\nFaktanya, kurang tidur dapat memperlambat proses perubahan kalori menjadi energi. Proses ini bernama metabolisme. Saat tidak berlangsung dengan optimal, tubuh akan menyimpan energi yang tidak terpakai sebagai lemak. \r\n\r\nSelain itu, durasi tidur juga memengaruhi kontrol hormon leptin dan ghrelin. Keduanya adalah hormon pengatur nafsu makan. Jika waktu tidur tidak sesuai dengan kebutuhan, kadar dua hormon tersebut akan mengalami peningkatan yang memicu naiknya berat badan.\"\"\"\"\"'),
(3, 'Ini-Penanganan-Gawat-Janin-untuk-Mencegah-Komplikasi-.jpg.webp', 'Ini Penanganan Gawat Janin untuk Mencegah Komplikasi Kehamilan', 'Kesehatan Fisik', 'Dr.Budi', '2023-12-12', 'Penanganan Gawat Janin\r\nAda berbagai penyebab gawat janin bisa terjadi pada ibu hamil. Mulai dari adanya gangguan pada air ketuban, kontraksi yang cukup kuat, preeklampsia, gangguan plasenta, hingga menjalani kehamilan kembar.\r\n\r\nKamu juga bisa cari tahu berbagai penyakit yang dapat memicu gawat janin melalui artikel “Kondisi yang Bisa Memicu Terjadinya Gawat Janin”.\r\n\r\nJika tidak diatasi dengan baik, kondisi ini dapat menyebabkan gangguan pada janin setelah dilahirkan, seperti cedera otak hingga cerebral palsy. Janin juga akan mengalami gangguan perkembangan yang berisiko memicu gangguan pada fisik.\r\n\r\nBahkan, jika tidak ditangani dengan baik, kondisi ini juga dapat menyebabkan kematian dalam kandungan atau stillbirth. Untuk itu, jika menemukan tanda-tanda gawat janin, segera lakukan pemeriksaan pada dokter spesialis kandungan untuk mendapatkan perawatan yang tepat.\r\n\r\nBerikut perawatan untuk penanganan gawat janin, yaitu:\r\n\r\n1. Penanganan sebelum persalinan\r\nJika gawat janin terjadi sebelum hari persalinan, maka dokter akan memberikan sejumlah obat-obatan untuk menurunkan pemicunya. Selain itu, dokter juga bisa memberikan berbagai cairan menggunakan infus.\r\n\r\nNamun, jika penanganan ini tidak efektif dan kondisi tersebut masih terus terjadi, dokter spesialis kandungan bisa memutuskan untuk melakukan persalinan darurat. Biasanya, operasi caesar akan dilakukan untuk mengeluarkan bayi dan memberikan penanganan secara langsung.\r\n\r\nSelain itu, ketahui tanda lain gawat janin melalui artikel ini “Bumil, Ini 6 Tanda Gawat Janin yang Perlu Diwaspadai”.\r\n\r\n2. Penanganan saat proses persalinan\r\nJika kondisi ini terjadi ketika kamu sedang menjalani proses persalinan, biasanya dokter akan memberikan cairan melalui infus dan masker oksigen untuk ibu. Selain itu, dokter juga akan meminta ibu untuk rutin mengubah posisi. \r\n\r\nMemposisikan tubuh ke samping sambil berbaring, membuat tekanan pada bayi dalam kandungan menurun. Hal ini juga bisa membantu meningkatkan suplai aliran darah menuju jantung dan suplai oksigen pada janin.\r\n\r\nDokter juga akan memberikan obat untuk memperlambat kontraksi. Jika sebelumnya dokter memberikan obat untuk mempercepat persalinan, biasanya obat ini akan dihentikan ketika melihat adanya tanda gawat janin saat persalinan.\r\n\r\nBayi dengan kondisi tersebut juga dapat ditangani dengan mengeluarkan bayi untuk mendapatkan perawatan secara langsung. Biasanya, persalinan bisa dilakukan dengan alat bantuan maupun tindakan operasi caesar.\r\n\r\n3. Perawatan bayi pasca persalinan\r\nSetelah bayi lahir, tentuna perawatan intensif akan dilakukan untuk memastikan kondisi kesehatan bayi secara optimal. Bayi akan menjalani perawatan dan pemantauan ketat selama 1-2 jam setelah lahir yang akan berlanjut hingga 12 jam pertama.\r\n\r\nAda berbagai pemeriksaan yang perlu dilakukan oleh bayi pasca gawat janin, seperti kondisi jantung, saluran pernapasan, hingga suhu tubuh.\r\n\r\nSaluran pernapasan perlu pemantauan lebih ketat karena dikhawatirkan bayi menghirup mekonium saat proses persalinan.'),
(4, 'ini-manfaat-sawi-putih-untuk-kesehatan-halodoc.jpg.webp', 'Ini Manfaat Sawi Putih untuk Kesehatan', 'Makanan Sehat', 'Dr. Sari', '2023-12-07', 'Manfaat Sawi Putih untuk Kesehatan\r\nTidak sulit untuk mendapatkan sawi putih di Indonesia. Kamu sangat mudah mendapatkannya di pasar tradisional maupun supermarket.\r\n\r\nSelain itu, harganya tergolong murah dan ukurannya besar. Alhasil, kamu bisa memasaknya berkali kali atau cukup untuk porsi besar.\r\n\r\nDi samping itu, sayuran ini juga memiliki manfaat kesehatan berikut ini:\r\n\r\n1. Rendah kalori dan kaya nutrisi\r\nSawi putih adalah sayuran rendah kalori. Dalam satu cangkir sawi yang telah dimasak hanya mengandung 20-25 kalori saja, tergantung bagaimana kamu mengolahnya.\r\n\r\nSayuran ini juga merupakan sumber nutrisi terbaik karena mengandung berbagai vitamin berikut:\r\n\r\nVitamin K yang penting untuk pembekuan darah dan kesehatan tulang.\r\nFolat yang  penting untuk pertumbuhan sel-sel tubuh.\r\nVitamin C yang membantu memerangi radikal bebas dalam tubuh dan mendukung sistem kekebalan tubuh.\r\nKalium yang mendukung tekanan darah yang sehat dan fungsi jantung.\r\nVitamin A yang baik untuk kesehatan mata dan kulit.\r\nVitamin B6 untuk fungsi otak dan sistem saraf yang sehat.\r\nSerat yang memperlancar pencernaan dan dapat membantu menjaga berat badan yang seimbang.\r\nSalah satu olahan sawi putih yang paling terkenal adalah kimchi.\r\n\r\nProses fermentasi dalam pembuatan kimchi disinyalir bisa memperkaya kandungan vitamin seperti di atas.\r\n\r\nKalau kamu tertarik, Ini Resep dan Cara Mudah Membuat Kimchi Ala Korea di Rumah.\r\n\r\n2. Menjaga kesehatan otak\r\nSayuran ini bisa menjaga kesehatan otak berkat kandungan vitamin B6 (piridoksin). \r\n\r\nSenyawa ini berperan dalam beberapa proses biokimia yang terkait dengan fungsi otak\r\n\r\nVitamin B6 berfungsi menciptakan beberapa neurotransmiter penting, seperti serotonin, dopamine, dan norepinefrin.\r\n\r\nNeurotransmiter ini berperan dalam pengaturan suasana hati, motivasi, dan respon stres. \r\n\r\nDengan mengonsumsi sawi, kamu bisa mendapatkan vitamin B6 yang membantu menjaga keseimbangan kimia otak.\r\n\r\nTak hanya itu, senyawa tersebut juga berperan dalam metabolisme asam amino, yang merupakan komponen dasar protein. \r\n\r\nProtein sangat penting dalam pembentukan dan pemeliharaan sel-sel otak. Dengan bantuan vitamin B6, tubuh dapat memproses asam amino dengan lebih efisien.\r\n\r\n3. Menjaga kesehatan jantung\r\nSayuran ini juga mengandung serat yang bisa mengurangi kadar kolesterol LDL (kolesterol jahat) dalam darah.\r\n\r\nKonsumsi serat yang cukup dapat membantu menjaga pembuluh darah tetap bersih dan elastis, sehingga aliran darah tetap lancar.\r\n\r\nSawi putih juga mengandung senyawa antioksidan seperti vitamin C dan beta-karoten. Antioksidan ini membantu melindungi sel-sel dan jaringan jantung dari kerusakan akibat radikal bebas.\r\n\r\nKandungan lemak yang sangat rendah juga bisa mengurangi kadar lemak jenuh dalam tubuh. Lemak jenuh bisa meningkatkan risiko penyakit jantung jika kamu konsumsi secara berlebihan.'),
(5, 'waktu-terbaik-memberikan-vaksin-hpv-pada-anak.jpg.webp', 'Waktu Terbaik Memberikan Vaksin HPV pada Anak', 'Kesehatan Anak', 'Dr. Rizal', '2023-12-14', 'Human papillomavirus (HPV) merupakan penyebab kutil kelamin dan beberapa jenis kanker, seperti kanker serviks, penis, anus, vagina, vulva, dan juga tenggorokan. Virus ini bisa menular melalui hubungan seksual dan kontak kulit dengan kulit.\r\n\r\nNah, vaksin HPV merupakan salah cara efektif untuk melindungi diri dari virus tersebut. Imunisasi ini bekerja paling baik bila pemberiannya sebelum seseorang terkena virus.\r\n\r\nVaksin HPV paling baik diberikan sedini mungkin, yaitu pada anak berusia sekolah dasar. Waktu terbaik memberikan vaksin ini pada anak adalah mulai dari usia 9 hingga 11 tahun.\r\n\r\nAnak-anak yang berusia lebih besar dari itu tapi belum menerima vaksinasi juga bisa mendapatkannya sesegera mungkin. Tidak hanya penting untuk anak perempuan, perlindungan ini juga penting untuk anak laki-laki. \r\n\r\nPemberian vaksin ini melibatkan serangkaian suntikan. Berikut jadwal waktu pemberian vaksin HPV yang terbaik:\r\n\r\nUntuk anak-anak dan remaja usia 9–14 tahun, pemberian vaksin HPV meliputi 2 suntikan selama periode 6 hingga 12 bulan.\r\nUntuk remaja dan dewasa muda (usia 15–26), pemberian vaksin dalam 3 suntikan selama periode 6 bulan. Orang dengan sistem kekebalan lemah juga mendapat 3 suntikan, termasuk mereka yang berusia 9–14 tahun.\r\nSekarang, pemerintah juga sudah memasukkan vaksin HPV sebagai vaksin wajib bagi anak sekolah dasar kelas 5 dan 6.\r\n\r\nPelaksanaan pemberian vaksin tersebut yaitu dalam Bulan Imunisasi Anak Sekolah (BIAS) setiap bulan Agustus.\r\n\r\nBagi anak-anak yang tidak bersekolah juga bisa mendapatkan vaksin ini melalui posyandu, puskesmas atau fasilitas kesehatan lainnya. \r\n\r\nNamun, ada beberapa Hal yang Perlu Diketahui sebelum Vaksin Kanker Serviks pada anak.\r\n\r\nAlasan Memberikan Perlindungan Ini pada Anak\r\nBanyak orangtua mungkin bertanya-tanya bila HPV menular melalui hubungan seksual, mengapa harus memberikan vaksin HPV pada anak-anak?\r\n\r\nBerikut alasannya:\r\n\r\nVaksin lebih efektif bila diberikan lebih awal. Hal ini karena anak-anak praremaja menghasilkan lebih banyak antibodi setelah vaksinasi HPV dibandingkan remaja yang lebih tua. Vaksin ini bekerja lebih baik dengan sistem kekebalan mereka.\r\nAnak-anak terlindungi dari kanker sebelum mereka terpapar virus. Memberikan vaksin lebih awal juga berarti mereka bisa terlindungi dengan baik sebelum terkena virus. Hal itu tentu menjadi tujuan yang orang tua inginkan, karena vaksin ini benar-benar bisa mencegah kanker.\r\nJadi, tunggu apa lagi? Segera berikan vaksin HPV pada anak sesuai jadwal. Jangan khawatir, vaksin ini aman dan biasanya tidak menimbulkan efek samping serius.'),
(6, 'berapa-kalori-nasi-goreng-yang-aman-untuk-dikonsumsi-1.jpg.webp', 'Berapa Kalori Nasi Goreng yang Aman untuk Dikonsumsi?', 'Makanan Sehat', 'Dr. Tirtha', '2023-12-03', 'Jumlah Kalori Nasi Goreng\r\nSebenarnya, sulit untuk menyebut secara pasti jumlah kalori yang ada dalam nasi goreng. Sebab, menu makanan yang satu ini ada banyak jenisnya.\r\n\r\nSeberapa banyak nasi, minyak, dan bahan-bahan lain yang digunakan juga bisa berpengaruh terhadap jumlah kalori di dalamnya.\r\n\r\nNamun, pada umumnya nasi goreng terbuat dari nasi putih, minyak, kecap, garam, dan aneka bawang.\r\n\r\nMenurut rilis dari Kementerian Kesehatan Republik Indonesia, kalori sepiring nasi goreng adalah sekitar 267. Jumlah kalori bisa meningkat jika kamu menambah berbagai topping. \r\n\r\nKalau menurut Fat Secret Indonesia, berikut ini kalori dan nilai gizi dari aneka jenis nasi goreng:\r\n\r\nNasi Goreng Tanpa Daging. Kalori: 251kkal, lemak: 9,10g, karbohidrat: 34,81g, protein: 7,02g.\r\nNasi Goreng Ayam. Kalori: 329kkal, lemak: 11,96g, karbohidrat: 41,82g, protein: 12,45g.\r\nNasi Goreng Udang. Kalori: 321kkal, lemak: 11,60g, karbohidrat: 41,88g, protein: 10,95g.\r\nNasi Goreng Cina. Kalori: 299kkal, lemak: 11,11g, karbohidrat: 37,52g, protein: 11,23g.\r\nNasi Goreng Babi. Kalori: 335kkal, lemak: 12,87g, karbohidrat: 41,94g, protein: 11,94g.\r\nMengonsumsi seporsi nasi goreng per hari masih termasuk aman jika melihat dari jumlah kalorinya.\r\n\r\nSebab, rata-rata kebutuhan kalori wanita dewasa adalah sekitar 2.000 per hari, dan pria 2.500 per hari.\r\n\r\nNamun, kebutuhan kalori setiap orang bisa berbeda-beda juga tergantung usia, tingkat aktivitas fisik, dan lain-lain. \r\n\r\nTips agar Hidangan Nasi Goreng Jadi Lebih Sehat\r\nKalori nasi goreng memang tidak terbilang rendah juga, jika dibandingkan makanan sehat seperti buah dan sayur.\r\n\r\nNamun, kamu masih tetap bisa mengonsumsinya, asalkan memerhatikan jumlah asupan kalori harian kamu.\r\n\r\nUntuk “mengakali” agar nasi goreng jadi lebih sehat, berikut ini beberapa tipsnya: \r\n\r\n1. Pilih jenis nasi yang tepat\r\nKunci untuk membuat menu satu ini menjadi lebih sehat yaitu dengan memilih jenis nasi yang akan kamu gunakan untuk nasi goreng.\r\n\r\nJika ingin ada asupan serat yang lebih banyak, pilihlah nasi merah, alih-alih nasi putih. Kamu juga bisa mengganti nasi dengan oatmeal atau kembang kol.  \r\n\r\nNasi goreng juga bisa menjadi menu sarapan sehat dan bernutrisi untuk memberi kamu energi di pagi hari\r\n\r\nNah,  Ini Resep Nasi Goreng Sederhana untuk Menu Sarapan.\r\n\r\n2. Pilih kecap rendah garam  \r\nKecap adalah “bintang” dari nasi goreng. Bumbu ini memberikan rasa manis dan gurih yang khas.\r\n\r\nNamun, untuk membuat menu ini menjadi lebih sehat, pilihlah kecap dengan kandungan sodium atau garam yang rendah.  \r\n\r\n3. Tambahkan banyak sayuran\r\nUntuk mengurangi jumlah kalori menu sehat ini, kamu bisa mengurangi porsi nasi dan menambah lebih banyak sayuran.\r\n\r\nTidak hanya membawa serat dan kandungan nutrisi lain dalam nasi goreng, sayuran juga membuat kamu kenyang lebih lama.'),
(7, 'X-Pola-Hidup-Sehat-Agar-Kadar-Kolesterol-Selalu-Normal.jpg.webp', 'Ketahui Kadar Kolesterol Normal Berdasarkan Usia dan Jenis Kelamin', 'Diet dan Nutrisi', 'Dr.Tirtha', '2023-12-10', 'Mengenal Tingkat Kadar Kolesterol Normal\r\nAda banyak informasi yang belum tentu valid mengenai kolesterol. Cek kejelasan 6 Mitos Tentang Kolesterol yang Perlu Diketahui untuk mendapatkan fakta jelasnya.\r\n\r\nNah, seperti yang sudah disebutkan sebelumnya, kisaran kolesterol HDL (High Density Lipoprotein)  dan LDL (Low Density Lipoprotein) normal bervariasi berdasarkan usia. Kolesterol HDL adalah kolesterol “baik” yang biasanya dibutuhkan lebih banyak. Sedangkan kolesterol LDL adalah kolesterol “jahat” yang diharapkan untuk tidak berada pada kadar yang tinggi. \r\n\r\nBagi sebagian besar orang dewasa sehat berusia 19 tahun ke atas, LDL harus kurang dari 100 miligram per desiliter (mg/dL), dan HDL harus lebih besar dari 40 mg/dL. Untuk remaja dan anak-anak berusia 19 tahun ke bawah, LDL harus kurang dari 110 mg/dL, sedangkan HDL harus lebih besar dari 45 mg/dL.\r\n\r\nMeski begitu, terdapat rentang LDL dan HDL ideal yang berbeda berdasarkan usia dan jenis kelamin. Seperti apa kadar normalnya?\r\n\r\n1. Laki-laki <19 tahun\r\nTotal kolesterol: <170 mg/dL.\r\nLDL: <110 mg/dL.\r\nHDL: >45 mg/dL.\r\n2. Laki-laki >20 tahun\r\nTotal kolesterol: 125–200 mg/dL\r\nLDL: >100 mg/dL.\r\nHDL:  >40 mg/dL.\r\n3. Perempuan <19 tahun\r\nTotal kolesterol:170 mg/dL.\r\nLDL: <110mg/dL.\r\nHDL: <45 mg/dL.\r\n4. Perempuan >20 tahun\r\nTotal kolesterol: 125–200 mg/dL.\r\nLDL: <100 mg/dL.\r\nHDL: >50 mg/dL.\r\nSeseorang yang memiliki kolesterol tinggi biasanya tidak memiliki gejala. Inilah sebabnya mengapa penting untuk memeriksakan kadar kolesterol secara rutin. Jika memang memiliki gejala, gejala tersebut sering kali dikaitkan dengan kondisi lain. Contohnya seperti tekanan darah tinggi yang dapat menyebabkan kelelahan, nyeri dada, dan detak jantung tidak teratur.'),
(8, 'Ini-Kunci-Umur-Panjang-Penduduk-yang-Tinggal-di-Negara-Blue-Zone.jpg.webp', 'Ini Kunci Umur Panjang Penduduk yang Tinggal di Negara Blue Zone', 'Kesehatan Fisik', 'Dr. Boyke', '2023-12-03', 'Negara Blue Zone adalah negara yang wilayah geografis dengan tingkat penyakit kronis yang lebih rendah dan harapan hidup yang lebih panjang daripada negara lain. \r\n\r\nTerdapat wilayah di beberapa negara yang masuk menjadi negara Blue Zone, yaitu meliputi Ikaria (Yunani), Ogliastra, Sardinia (Italia), Okinawa (Jepang), Semenanjung Nicoya (Kosta Rika) dan California (Amerika Serikat).\r\n\r\nNah, seperti yang disebutkan tadi, bahwa Singapura juga bergabung dengan beberapa negara di atas yang dinobatkan menjadi negara Blue Zone baru-baru ini.\r\n\r\nKunci Umur Panjang Penduduk Negara Blue Zone\r\nPastinya, penduduk negara Blue Zone berumur panjang tidak lepas dari gaya hidupnya. Pola makan, puasa, dan olahraga merupakan faktor yang berperan dan berhubungan dan negara Blue Zone.\r\n\r\nJadi, apa saja sih kunci umur panjang penduduk Blue Zone? Ini ulasannya.\r\n\r\n1. Mengonsumsi makanan nabati utuh\r\nSalah satu hal yang umum bagi penduduk di negara Blue Zone adalah bahwa mereka sebagian besar mengonsumsi 95 persen pola makan nabati.\r\n\r\nWalaupun banyak penduduk juga penduduk dari negara ini bukan vegetarian yang ketat, namun mereka cenderung mengonsumsi daging sekitar hanya 5 kali perbulan.\r\n\r\nTerdapat penelitian yang menunjukkan bahwa mengurangi atau menghindari untuk  mengonsumsi daging merah dan daging olahan dapat secara signifikan mengurangi risiko kematian akibat penyakit jantung, kanker, dan sejumlah penyebab lainnya.\r\n\r\nSelain itu, mereka cenderung banyak mengonsumsi sayuran yang kaya akan serat, mineral dan vitamin, juga kacang-kacangan serta biji-bijian yang merupakan sumber serat serta protein yang baik.\r\n\r\nMereka juga mengonsumsi ikan mengingat ikan adalah sumber lemak omega 3 yang membantu mengurangi kemungkinan otak menjadi lambat saat usia tua dan baik untuk kesehatan hati serta jantung.\r\n\r\nSelain itu, yuk ketahui pola makan sehat untuk menjaga kesehatan kamu lewat artikel ini: 7 Tips Menerapkan Pola Makan Sehat yang Mudah Kamu Lakukan .\r\n\r\n2. Mengurangi asupan kalori\r\nKebiasaan lain yang menjadi kunci umur panjang yang diterapkan oleh penduduk negara Blue Zone adalah dengan mengurangi asupan kalori.\r\n\r\nMengurangi makanan berkalori dalam jangka panjang dapat membantu berumur panjang, karena dengan mengonsumsi makanan yang berkalori bisa menyebabkan naiknya berat badan dan penyakit kronis. \r\n\r\nHal penting lainnya yang bisa kamu terapkan yaitu makan dengan porsi yang sedikit saat sore hari atau menjelang malam lalu kemudian tidak makan lagi sampai keesokan harinya.'),
(9, 'ketahui-cara-tepat-memilih-facial-wash-untuk-remaja-halodoc.jpg.webp', 'Ini Urutan Skincare Malam Remaja Agar Kulit Sehat dan Cerah', 'Kesehatan Fisik', 'Dr.Boyke', '2023-12-18', 'Urutan Pemakaian Skincare Malam untuk Remaja\r\nSebenarnya, urutan pemakaian skincare malam pada remaja hampir sama dengan siang hari.\r\n\r\nPerawatan dasar kulit ini harus kamu lakukan secara rutin untuk menjaga kulit sehat dan cerah.\r\n\r\nBerikut ini urutan pemakaian skincare malam hari untuk remaja:\r\n\r\n1. Pembersih\r\nJika kamu memakai riasan wajah, maka hilangkan sesegera mungkin sebelum tidur malam. \r\n\r\nJangan biarkan riasan menempel di kulit wajah semalaman, karena hal tersebut dapat menyebabkan pori-pori tersumbat dan muncul jerawat. \r\n\r\nPertama-tama, bersihkan riasan dengan minyak pembersih khusus. Produk ini merupakan penghilang riasan yang tercepat. Cara kerjanya lebih baik jika dibandingkan dengan tisu wajah.\r\n\r\n2. Pembersih kedua\r\nSetelah membersihkan riasan dengan minyak pembersih khusus, lanjutkan proses membersihkan wajah dengan sabun muka. Sebab, sekali membersihkan wajah saja tidak cukup.\r\n\r\nKamu tetap memerlukan sabun pembersih muka untuk menghilangkan kotoran yang berada jauh di dalam pori-pori kulit.\r\n\r\n3. Toner\r\nUrutan pemakaian perawatan kulit di malam hari selanjutnya, yaitu menggunakan toner. Produk perawatan kulit ini merupakan langkah praktis untuk menambahkan hidrasi tambahan ke kulit.\r\n\r\nSelain itu, toner dapat menghilangkan residu yang tertinggal dari pembersih. \r\n\r\n4. Serum\r\nJika ingin memasukkan serum ke dalam urutan pemakaian perawatan kulit sehari-hari, niacinamide merupakan pilihan yang aman dan cocok untuk remaja. Serum ini memiliki manfaat untuk semua jenis kulit. \r\n\r\nKandungan niacinamide dapat menyeimbangkan produksi minyak alami kulit (sebum), mengurangi munculnya noda, membantu memudarkan bekas jerawat, dan memperkuat pelindung kulit. \r\n\r\n5. Pelembap\r\nUrutan pemakaian skincare malam yang tidak kalah penting yaitu pelembap. Penting untuk menjaga kulit tetap terhidrasi.\r\n\r\nKulit yang terhidrasi adalah kulit yang sehat. Jika kulit lebih sehat, ia akan lebih kuat dan dapat menyembuhkan dirinya sendiri lebih cepat. \r\n\r\nMengaplikasi pelembap di malam hari akan membuat kulit cerah bercahaya saat bangun di pagi hari. \r\n\r\nSebelum memilih pelembap, ketahui Rekomendasi Pelembap untuk Remaja yang Bagus dan Aman.'),
(10, 'Adakah-Manfaat-Menyanyikan-Lagu-Nina-Bobo-untuk-Bayi_.jpg.webp', 'Adakah Manfaat Menyanyikan Lagu Nina Bobo untuk Bayi?', 'Kesehatan Anak', 'Dr. Sari', '2023-12-15', 'Halodoc, Jakarta – Buat ayah ataupun ibu yang punya kebiasaan menyanyikan lagu untuk bayi, bisa dibilang ini adalah kebiasaan yang baik sekali. Dengan menyanyikan lagu untuk bayi, bisa membangun bonding antara orang tua dan anak, sekaligus membantu anak mempelajari bahasa. \r\n\r\nAda banyak lagu yang bisa dinyanyikan untuk anak, dan salah satu lagu yang cukup populer adalah lagu dengan judul Nina Bobo. Meski begitu, masih banyak lagu lainnya yang bisa ibu nyanyikan. Nah, pertanyaannya apa saja manfaat menyanyikan lagu sebagai pengantar tidur untuk Si Kecil?\r\n\r\nManfaat Menyanyikan Lagu Nina Bobo untuk Bayi\r\nSelain membangun bonding, meningkatkan memori, dan membuat anak belajar bahasa, ada berbagai manfaat lain dari menyanyikan lagu untuk bayi, yaitu:\r\n\r\n1. Membantu mengembangkan keterampilan mendengarkan\r\nBernyanyi adalah cara yang baik untuk mendapatkan perhatian dan fokus bayi. Ketika mendengarkan lagu, anak belajar duduk tenang, dan mendengarkan lirik. Pada akhirnya hal ini bisa mengembangkan kemampuan berkomunikasi, yang biasanya diawali dengan meniru lirik pada lagu.\r\n\r\n2. Membantu perkembangan otak\r\nMenyanyikan lagu kepada bayi juga bisa menjadi cara untuk meningkatkan perkembangan otak anak. Biasanya, lagu-lagu pengantar tidur, justru membantu meningkatkan perhatian bayi dan ekspresi emosi positifnya kepada orang di sekitar.\r\n\r\n3. Menyenangkan dan membuat mood anak lebih positif\r\nSelain semua manfaat yang sudah disebutkan tadi mengenai menyanyikan lagu untuk anak, ada manfaat lain lagi yang bisa diperoleh, yaitu membuat anak happy! Anak happy bisa berdampak pada mood yang lebih positif, tidak cepat uring-uringan dan lain sebagainya.\r\n\r\n4. Membuat bayi bergerak\r\nMendengarkan lagu dapat membuat bayi bergerak mengikuti irama musik, dan sesekali mendendangkan lagu, walaupun masih dalam bentuk gumaman.');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengadaans`
--

CREATE TABLE `detail_pengadaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengadaan` bigint(20) UNSIGNED NOT NULL,
  `id_obat` bigint(20) UNSIGNED NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_pengadaans`
--

INSERT INTO `detail_pengadaans` (`id`, `id_pengadaan`, `id_obat`, `jumlah_obat`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 33, NULL, NULL),
(6, 5, 2, 4, NULL, NULL),
(7, 5, 3, 8, NULL, NULL),
(9, 2, 1, 12, NULL, NULL),
(10, 4, 2, 12, NULL, NULL),
(12, 8, 3, 5, NULL, NULL),
(19, 11, 1, 21, NULL, NULL),
(20, 11, 3, 1, NULL, NULL),
(21, 13, 1, 12, NULL, NULL),
(22, 13, 3, 2, NULL, NULL),
(24, 15, 1, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksis`
--

CREATE TABLE `detail_transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_obat` bigint(20) UNSIGNED NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transaksis`
--

INSERT INTO `detail_transaksis` (`id`, `id_transaksi`, `id_obat`, `jumlah_obat`, `created_at`, `updated_at`) VALUES
(12, 19, 1, 14, NULL, NULL),
(13, 19, 3, 2, NULL, NULL),
(14, 19, 2, 3, NULL, NULL),
(15, 20, 1, 10, NULL, NULL),
(16, 21, 1, 3, NULL, NULL),
(18, 21, 3, 3, NULL, NULL),
(23, 23, 2, 1, NULL, NULL),
(25, 24, 1, 1, NULL, NULL),
(26, 26, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_12_13_133411_create_alamats_table', 1),
(11, '2023_12_13_133800_create_stafs_table', 1),
(12, '2023_12_13_134035_create_transaksis_table', 1),
(13, '2023_12_13_134633_create_testimonis_table', 1),
(14, '2023_12_13_141041_create_obats_table', 1),
(15, '2023_12_13_143222_create_suppliers_table', 1),
(16, '2023_12_13_143339_create_pengadaan__obats_table', 1),
(17, '2023_12_13_143513_create_detail__pengadaans_table', 1),
(18, '2023_12_13_144049_create_detail__transaksis_table', 1),
(19, '2023_12_13_144214_create_mutasi__danas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi_danas`
--

CREATE TABLE `mutasi_danas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pengadaan` bigint(20) UNSIGNED DEFAULT NULL,
  `detail_mutasi` varchar(255) NOT NULL,
  `saldo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mutasi_danas`
--

INSERT INTO `mutasi_danas` (`id`, `id_transaksi`, `id_pengadaan`, `detail_mutasi`, `saldo`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Modal Awal Apotek', 10000000, NULL, NULL),
(14, NULL, 2, 'Pengadaan Obat Apotek', 9806440, NULL, NULL),
(15, NULL, 4, 'Pengadaan Obat Apotek', 7053880, NULL, NULL),
(16, NULL, 5, 'Pengadaan Obat Apotek', 4941246, NULL, NULL),
(17, NULL, 8, 'Pengadaan Obat Apotek', 4526981, NULL, NULL),
(18, NULL, 11, 'Pengadaan Obat Apotek', 4105398, NULL, NULL),
(19, NULL, 13, 'Pengadaan Obat Apotek', 3746132, NULL, NULL),
(21, 19, NULL, 'Transaksi Obat User Apotek', 4771278, NULL, NULL),
(22, 20, NULL, 'Transaksi Obat User Apotek', 4942578, NULL, NULL),
(23, 21, NULL, 'Transaksi Obat User Apotek', 5249527, NULL, NULL),
(24, 23, NULL, 'Transaksi Obat User Apotek', 5488907, NULL, NULL),
(25, 24, NULL, 'Transaksi Obat User Apotek', 5515037, NULL, NULL),
(26, NULL, 15, 'Pengadaan Obat Apotek', 5353737, NULL, NULL),
(27, 26, NULL, 'Transaksi Obat User Apotek', 5822497, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('05a61e0b89582a68283b189a0d957c120462ee933ded7d3ad27163479e6f024eb131224aa6a0c9c7', 5, 1, 'Authentication Token', '[]', 0, '2023-12-19 08:39:28', '2023-12-19 08:39:28', '2024-12-19 15:39:28'),
('05ad7b1e738a23d2901e396fe35d8cbed3de2bf9883b585721f1510400812b1ff469cc1a0f026001', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:21:32', '2023-12-19 11:21:34', '2024-12-19 18:21:32'),
('0a1f3dd47df6432f6e802fbb706710fe522eea0094482e995d976d3afe41e68e96768843da45f324', 1, 1, 'Authentication Token', '[]', 1, '2023-12-20 07:47:50', '2023-12-20 07:47:53', '2024-12-20 14:47:50'),
('0e64296aa93330e81f5a81bfb2a58079adcf3aac8e6f00ed3e750bde0d34df4ad99aa4b4428e7f9c', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:49:03', '2023-12-19 11:49:06', '2024-12-19 18:49:03'),
('1050c74293f32316db41b237eb90eb77353555ac0b3db682fc5296bc3b93b91699e48c6db1299a80', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 03:35:05', '2023-12-19 11:03:44', '2024-12-19 10:35:05'),
('1b7d2f486f02c49de8b639c3b081de24e288c53cdcc1ff617415c9edfb117b2d65e4033d56960a5f', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 08:56:37', '2023-12-20 10:58:06', '2024-12-20 15:56:37'),
('1bc3d59995d1ff8b070adbda3313ae77e3acaa8803a7bba8aa340761912852a96b879e9ce81f6aa1', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 00:05:44', '2023-12-19 00:05:44', '2024-12-19 07:05:44'),
('1bdc08106ad78216e6fd176d804c83c852806cf7e752c17f0ab71ec19973942304a87c3cc043c5a8', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 18:02:53', '2023-12-20 18:02:55', '2024-12-21 01:02:53'),
('1e1c4da2b11e192e887de2b635f3ce090112fd4c5c406c606f048467bd6df27de7316c62c89d4fdf', 2, 1, 'Authentication Token', '[]', 0, '2023-12-19 08:50:31', '2023-12-19 08:50:31', '2024-12-19 15:50:31'),
('2078c1bdb7af87e8327360fed8fc61efe34470b2dd9e0ecaccefe5abbc1533adc48b7dd1013db042', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 00:09:05', '2023-12-19 00:09:05', '2024-12-19 07:09:05'),
('21cc28040ed1942c6233f66e1e4a776fd1abe38e71fbaf3aded15a8e4a1b6390f6d03e81d22511a2', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 18:03:17', '2023-12-20 18:03:22', '2024-12-21 01:03:17'),
('2926777b744116ebaaf9da6424db6e57d5d7eade0e1f8956107bfd1741c6758d611177f26cdf4c7f', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 00:08:41', '2023-12-19 00:08:41', '2024-12-19 07:08:41'),
('2c901a7c6a2a2dcccf0dab76b12bf892fb4686a603a47b93bc5d7aed0e70a87efc0bf7ddf1b9b44f', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:24:01', '2023-12-19 11:24:03', '2024-12-19 18:24:01'),
('2cfadbe4b26c8f637b1779985b2908682c5bc4dda0f7b0abc4fde14ebda027b6e8cc6629bc11d350', 1, 1, 'Authentication Token', '[]', 1, '2023-12-20 18:55:26', '2023-12-20 19:06:37', '2024-12-21 01:55:26'),
('2e3fd97a8e5d1a86d60f4d1250d097c18f3210623cba6c3d313fde592bb4b456c100a6648f49132b', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 17:51:40', '2023-12-20 18:02:24', '2024-12-21 00:51:40'),
('2efa6af50c4ab81a91dbfd9137553b4409bdd4bad26ca73802075e2128c3fbc4f3fa46ed9db9dcf2', 2, 1, 'Authentication Token', '[]', 0, '2023-12-19 08:29:31', '2023-12-19 08:29:31', '2024-12-19 15:29:31'),
('31724470cbb89cad83f4ef466787e67669bbae1caa1c481de1baa679d533151f14433a4066f01ce9', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 04:55:38', '2023-12-20 06:01:10', '2024-12-20 11:55:38'),
('322d08646e435c0f72a932b7632732c369344a098464a9e22a57a4ac8eb982560d03a0aee25ea73e', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 07:48:00', '2023-12-20 08:34:13', '2024-12-20 14:48:00'),
('3b602df434984f9ab8e5dda729a85fe7426145a57d3c5fbd3546d80ca920dac0840830e4acdaf1e4', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:16:20', '2023-12-19 11:16:26', '2024-12-19 18:16:20'),
('3b99c86e2a45bdd45bf3eee0db6d14e68fac815205bf26bad89bb1ec1c69b6dbdd6d48493655cc8e', 2, 1, 'Authentication Token', '[]', 0, '2023-12-20 08:34:43', '2023-12-20 08:34:43', '2024-12-20 15:34:43'),
('3c1f8c2254cb3df763ca817263f23ed688d7cc01fbb93479000323abe8b68d2237ee7943b82101f5', 1, 1, 'Authentication Token', '[]', 1, '2023-12-20 19:13:46', '2023-12-20 21:11:13', '2024-12-21 02:13:46'),
('415efab9b3049957f9ce1cdca30dd15ea29c704157c870570257f0e3e06d23b7d6ede737a56e7988', 2, 1, 'Authentication Token', '[]', 0, '2023-12-20 10:21:04', '2023-12-20 10:21:04', '2024-12-20 17:21:04'),
('417b851bc91363c9902a26b53926b227bde528f8da2e31a5fee2caeaf0359761a69046c1a8a12656', 1, 1, 'Authentication Token', '[]', 0, '2023-12-18 11:46:14', '2023-12-18 11:46:14', '2024-12-18 18:46:14'),
('49f9222cb37987ad9953ea0f133980551481367c99fbe73f452f9184e8e1693b2a5315b3dc53c16f', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:26:32', '2023-12-19 11:27:00', '2024-12-19 18:26:32'),
('4a927561c1d2af1b7d40db25464a171e731da6909201637f894b28881a366553a85daab1b81bb2e6', 2, 1, 'Authentication Token', '[]', 1, '2023-12-19 12:42:23', '2023-12-19 13:44:59', '2024-12-19 19:42:23'),
('4d5abed4f4bf5127805ce1271b827db8775f13cf055414de6399414401db0b79ed67b7fa1102b029', 5, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:56:31', '2023-12-19 11:57:38', '2024-12-19 18:56:31'),
('4f7c78b14af6ebb33518fea17bf7a5a271d9e6ef1aff576e99cc7a8903f87932115679afe40ff48d', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 00:22:55', '2023-12-19 00:22:55', '2024-12-19 07:22:55'),
('5ad642fcdd7823ee2f1d0eeb2672c88b1692d9d340c532018ddea1da3b9237cd773a85ca0bb39cf1', 5, 1, 'Authentication Token', '[]', 1, '2023-12-20 16:13:21', '2023-12-20 17:48:00', '2024-12-20 23:13:21'),
('5cdd40bb73436925c9f082249dea352a19e23e6a72394bf006ea566402c2af37d3784a7a0062c2dd', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 09:03:02', '2023-12-19 09:03:02', '2024-12-19 16:03:02'),
('5ef119323927004b19ed478234ab04a1963441da4e3b1876442801432d981decc718b72edb0bbfd3', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 10:59:54', '2023-12-19 10:59:54', '2024-12-19 17:59:54'),
('5fa9081590ea6bad1907cd8f093c281953d8ce57f1dab35d82cb819a3b23dcffe53b9a36bccb2822', 1, 1, 'Authentication Token', '[]', 1, '2023-12-20 14:33:38', '2023-12-20 14:35:47', '2024-12-20 21:33:38'),
('60a3c5e60f3be16f608c51f7206bb065762b82a50ddb80134a336c18830ed0fe1f37981348a2e3f1', 2, 1, 'Authentication Token', '[]', 0, '2023-12-20 21:11:40', '2023-12-20 21:11:40', '2024-12-21 04:11:40'),
('60ccdbb792b1b714b51076ea7a49b891c080ce609892e1309b22e90eaeecc0de690cc2095ae05319', 5, 1, 'Authentication Token', '[]', 1, '2023-12-20 14:36:01', '2023-12-20 14:58:25', '2024-12-20 21:36:01'),
('629e2fd669f32770f0127fbe65d9039aab50ecd27dc54a13bdbb6e82fe20b4521e2e1d199056b763', 2, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:07:17', '2023-12-19 11:07:31', '2024-12-19 18:07:17'),
('6582c8b29660245afce5134d62c7a967f08728e452d6a59ed7dcb23ef31e1fe078bdb350dd0dfb1b', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 00:09:27', '2023-12-19 00:09:27', '2024-12-19 07:09:27'),
('6bebbe32a1e33f0a910f60a995ceb2258085f5d9ac70e10d02d82ffa0a99dc0b713de5ae8b621734', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:10:37', '2023-12-19 11:12:58', '2024-12-19 18:10:37'),
('7234c53663a534f5698874f98b841267030c24213be8f41f95fdeca8527e68715ffe7126c0cb4aae', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 11:46:03', '2023-12-19 11:46:03', '2024-12-19 18:46:03'),
('75e588215e59041c7b0cbe5a7ffb00246c0cfd7949cb29e81b4708999385e770b7d6e64067c0aba2', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:38:13', '2023-12-19 11:38:17', '2024-12-19 18:38:13'),
('773180fbd1e7f45600a0335fd8d541cda41f72b31fceae8b72f4d30a0c19bc9f474404d83be763e3', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 06:32:14', '2023-12-20 06:54:05', '2024-12-20 13:32:14'),
('786e870ec961f958e3222fe9c36cf76a75547ccdbd23fb8582c38da26e7796a4922d22e3afef4345', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 15:28:09', '2023-12-20 16:12:30', '2024-12-20 22:28:09'),
('78e287c9c768e1e96d096637ef7e47406e1a108db496fd63e3c5dff8fbcbe55459d53c66d58cf089', 1, 1, 'Authentication Token', '[]', 0, '2023-12-18 23:55:15', '2023-12-18 23:55:15', '2024-12-19 06:55:15'),
('7db63e170c2fe1cbadc60c37f7d96311b7a16a2e6dd61674feecfa2a6b2808987373d790a263923e', 2, 1, 'Authentication Token', '[]', 0, '2023-12-19 11:06:48', '2023-12-19 11:06:48', '2024-12-19 18:06:48'),
('82766812484c6ce678192b6baf1cce32a8adb5751ff6fa2a0bf4605093937a2d013e84f32c49c36a', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 15:21:27', '2023-12-20 15:21:58', '2024-12-20 22:21:27'),
('85fa1d8d8813df6624235636cea01c2d478ff85eb9f636a052e97b0ff4ea943f3559ec4ed435ec68', 5, 1, 'Authentication Token', '[]', 1, '2023-12-19 12:27:29', '2023-12-19 12:42:14', '2024-12-19 19:27:29'),
('879eb52383632da61efb4813b0fad0498e020c9e8956f06bc13a0cfaf961e940b16c450adbbfd30c', 1, 1, 'Authentication Token', '[]', 1, '2023-12-20 14:58:38', '2023-12-20 15:08:50', '2024-12-20 21:58:38'),
('8c06c0c0a235edbdac94fb781f64ded6a952db130315b2edefb63d65f847b69d51d08834c0839502', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 10:45:16', '2023-12-19 10:45:16', '2024-12-19 17:45:16'),
('8d325253efda3ba79a57317895fa6e23835b144a7fe64eff2a3ad908853b527caac2914658d8b840', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 06:02:28', '2023-12-20 06:31:51', '2024-12-20 13:02:28'),
('9471b14c86b23727538afd9c4803c348ef8b368c91011913bf26b40fcbb0d0b92d8285783d987c1f', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:22:29', '2023-12-19 11:22:32', '2024-12-19 18:22:29'),
('973f5a142a9bb9765db192057c874454824493540016b55f962aed05ca914ddf95a9484f3f452070', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 00:09:18', '2023-12-19 00:09:18', '2024-12-19 07:09:18'),
('9ab7db79177be0ca35848d6164f9a14576c7592fbe4cd3e4786d9e81f174925d5ba9c67143769400', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 19:11:16', '2023-12-20 19:12:17', '2024-12-21 02:11:16'),
('9baeccdd72a25890f5597ad15e950320d1e6f670685f7554da2f4c88e97211dc29651a068eb231a2', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 15:09:32', '2023-12-20 15:20:10', '2024-12-20 22:09:32'),
('9cc34fe6c92613d5550017f306bfda3aaf4058aaf3338b7be0c2b2c3b4f59eb652307c9e5b05cb79', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 02:13:20', '2023-12-20 02:40:39', '2024-12-20 09:13:20'),
('9d0f8815f5c137fa98df1cbe72270dfd6371146e6356a871fb77139ba1241d849f0bec9a6418c83b', 1, 1, 'Authentication Token', '[]', 1, '2023-12-20 16:12:46', '2023-12-20 16:13:01', '2024-12-20 23:12:46'),
('9d9ad3af7ebe67ab4f6f7c24fd7f18ae20b36b0b2fada318615a0dcb40f45787db806101ffc7772d', 2, 1, 'Authentication Token', '[]', 0, '2023-12-19 11:03:30', '2023-12-19 11:03:31', '2024-12-19 18:03:30'),
('9fd8320e30bd239274d4fe31b39e988bd6a8af0905dc9eca613209ba3cf5b37d4799bf825d635a49', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 03:35:02', '2023-12-19 03:35:02', '2024-12-19 10:35:02'),
('abefcbec6448a598e1ee8f81e9579aa4f37821bd19d5f89486a0f699d437c5ffeccde766a92b434b', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 00:03:10', '2023-12-19 00:03:10', '2024-12-19 07:03:10'),
('ae9773c9739fdf1ce18a830ecb1f2886f5762af7b825c45d9b511688530589a763a60384fa920d90', 2, 1, 'Authentication Token', '[]', 0, '2023-12-20 06:57:05', '2023-12-20 06:57:05', '2024-12-20 13:57:05'),
('b163a495079d50f956a9901568492de893ffb20cd177bc6b50467e48390d066a3209ce9acd063a74', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:43:23', '2023-12-19 11:43:50', '2024-12-19 18:43:23'),
('b17b7dd6f43b8d89678770974bd3cc63fa8d624476f2ddab97fcc4d8885d1f55c868319f6c308a41', 1, 1, 'Authentication Token', '[]', 1, '2023-12-20 15:22:15', '2023-12-20 15:24:40', '2024-12-20 22:22:15'),
('b76d1f309df77709d7fe66c9d8222cebb905fb27f9ae7b2b694248b8c9b10a198cc68178e6d409a8', 2, 1, 'Authentication Token', '[]', 0, '2023-12-19 10:30:31', '2023-12-19 10:30:31', '2024-12-19 17:30:31'),
('b8ccbb27734540645b21f13859787120a307f98fae237312c7796c18d6a6b7ad9f61fdf3eb371fb9', 1, 1, 'Authentication Token', '[]', 0, '2023-12-18 11:46:31', '2023-12-18 11:46:31', '2024-12-18 18:46:31'),
('b8e09130acc1f2de52b8869d95b820bd64ab8c0f20ff16e1c738e53579e8bfa79b755ff1ba2fcef0', 2, 1, 'Authentication Token', '[]', 0, '2023-12-19 11:15:15', '2023-12-19 11:15:15', '2024-12-19 18:15:15'),
('b9cc0a7d5daee64254f4b51559572c78e6dabb2fb6504aeabcfa710d86db84a65fd81b5289fee556', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 12:00:48', '2023-12-19 12:00:49', '2024-12-19 19:00:48'),
('bb9c067d1a3e3877abfa3622f56da4e08ad4d0045bbbf4ce86588cca40136e290bcafe92c06ba3a3', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 08:17:21', '2023-12-19 08:17:21', '2024-12-19 15:17:21'),
('c1f67d40f668fe6bd066045cabced08949418ef7cd6c1b21e51270c86f11d49ca888ac36688061e9', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 00:06:53', '2023-12-19 00:06:53', '2024-12-19 07:06:53'),
('c8fc6774913dd88c2511becdd68bdf932f1af982afcaa199d03412a2551ee51174d77affd0b1e8fe', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 00:07:33', '2023-12-19 00:07:33', '2024-12-19 07:07:33'),
('c9ba6b79f84c92b9c59cb1df92b6e525daae32ad08c875577ecbb769513e1103c79820742f2382a8', 5, 1, 'Authentication Token', '[]', 1, '2023-12-20 15:20:43', '2023-12-20 15:21:00', '2024-12-20 22:20:43'),
('cf1ffff7713ffaea50efa72d9511f8eb73be4f85b510c7ff7bca318051df4bd17b94a0a5fa7f0765', 5, 1, 'Authentication Token', '[]', 1, '2023-12-20 14:01:35', '2023-12-20 14:33:24', '2024-12-20 21:01:35'),
('d01940a0578c7a641d2d2f96512db4e2b6afb646c7ff1878292aec7120064510bb864e3f5d6bfefe', 5, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:49:45', '2023-12-19 11:53:20', '2024-12-19 18:49:45'),
('d7ba981b8d7439efa7ab810065a2dc84e6ecf5971252cf80ce1f15056508a79cb53bd4ab7f852795', 1, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:14:13', '2023-12-19 11:14:15', '2024-12-19 18:14:13'),
('d7bd0a94ffa186de9fc8847345948f504a2be0b1268e305f1a71441bf94e03814b402bfae93c70d4', 1, 1, 'Authentication Token', '[]', 1, '2023-12-20 06:54:15', '2023-12-20 06:56:57', '2024-12-20 13:54:15'),
('d7de50743b2ca403c7fbe2fc11ceb753d6af01d926cec7fb35bf979fc941446447c3758c3f76b03e', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 18:03:59', '2023-12-20 18:04:23', '2024-12-21 01:03:59'),
('d8e5ffe2ad48ec000af736a1773fc1e9ca07526c007c8d60b747a4eb5d8afc134dbfd0360e2b1d25', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 00:04:25', '2023-12-19 00:04:25', '2024-12-19 07:04:25'),
('db11e080bbdfa98405a8a7b95307eaa03c42cb7d9a0cb9a43a0d031d05a74889b3782ce04aba953c', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 00:12:46', '2023-12-19 00:12:46', '2024-12-19 07:12:46'),
('dee1ae95cf84e46fb78b86a4dca7c85e68aa90dfb74ac7fcf37be97a0a7593c0b7576134ba68dc57', 1, 1, 'Authentication Token', '[]', 0, '2023-12-19 09:33:02', '2023-12-19 09:33:02', '2024-12-19 16:33:02'),
('df9701da84aa8b1c8b67181b1d3335a7c41e85bdaf0e1e1ce66dfa46dbe19d7dd6b4a0fc91a53a29', 2, 1, 'Authentication Token', '[]', 1, '2023-12-20 19:06:50', '2023-12-20 19:10:58', '2024-12-21 02:06:50'),
('e92bedc1bb02b6e5de9f5a790753164ad1af32eace8c03d3a1468d2ec84063f9b93f8b16dc47113c', 5, 1, 'Authentication Token', '[]', 1, '2023-12-20 10:59:06', '2023-12-20 14:01:08', '2024-12-20 17:59:06'),
('ebb30065fec3e66400f4b9a6d28f4513ba6d9259342c7eb2a42f92b2c74c245fb19f548c56a36670', 5, 1, 'Authentication Token', '[]', 1, '2023-12-19 12:01:05', '2023-12-19 12:13:42', '2024-12-19 19:01:05'),
('ec8675b5880dc4f353f9c0eb63bb8609a4ec4cc5b3ada044c6d7c3b25db684f4439bdd6bdfe7c37b', 5, 1, 'Authentication Token', '[]', 1, '2023-12-19 11:58:05', '2023-12-19 12:00:40', '2024-12-19 18:58:05'),
('ed171d88e6df9d5903cd56baae8bf611780c84cc44e013bb99d0de018a3d9a9078a99afd2d8ef92b', 2, 1, 'Authentication Token', '[]', 0, '2023-12-20 10:21:01', '2023-12-20 10:21:01', '2024-12-20 17:21:01'),
('f26ddf2e5b841d0f701a9b8cf6b30b39376c2c90523c665164d7fb954ff61a4331ceb7c51626641c', 1, 1, 'Authentication Token', '[]', 0, '2023-12-18 11:51:21', '2023-12-18 11:51:21', '2024-12-18 18:51:21'),
('f2c4e3e613c3a8a4b5d272c94d0b77ec4d56e072b1f3ce6779d21227830a4938b4bca18938e1c88f', 1, 1, 'Authentication Token', '[]', 1, '2023-12-20 06:01:35', '2023-12-20 06:02:13', '2024-12-20 13:01:35'),
('f6a6f4389fa0034aad78ac6d64aab6b0885f2d56dfa5a87c3d72dae4e9afc8e42fec1c24c53e1f9b', 1, 1, 'Authentication Token', '[]', 0, '2023-12-20 02:40:55', '2023-12-20 02:40:55', '2024-12-20 09:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'TIX3x9puPE9hpGswRVs7lPT1Ck55cuYaVFILX3rR', NULL, 'http://localhost', 1, 0, 0, '2023-12-18 11:45:13', '2023-12-18 11:45:13'),
(2, NULL, 'Laravel Password Grant Client', 'atnQVdVEAJbwOv4XHE9xAS8h62sxadIfcMln0hsF', 'users', 'http://localhost', 0, 1, 0, '2023-12-18 11:45:13', '2023-12-18 11:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-12-18 11:45:13', '2023-12-18 11:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `obats`
--

CREATE TABLE `obats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `jenis_obat` varchar(255) NOT NULL,
  `harga_obat` double NOT NULL,
  `stok_obat` int(11) NOT NULL,
  `kategori_obat` varchar(255) NOT NULL,
  `dosis` varchar(255) NOT NULL,
  `golongan_obat` varchar(255) NOT NULL,
  `gambar_obat` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obats`
--

INSERT INTO `obats` (`id`, `nama_obat`, `deskripsi`, `jenis_obat`, `harga_obat`, `stok_obat`, `kategori_obat`, `dosis`, `golongan_obat`, `gambar_obat`, `created_at`, `updated_at`) VALUES
(1, 'Youvit Multivitamin Gum Kids Mix Fruit 28g Sach (per Pcs)', 'OBH Combi Dewasa merupakan obat untuk mengatasi gejala flu seperti pilek, hidung tersumbat, demam, sakit kepala, bersin disertai oleh batuk.\r\n\r\n \r\n\r\nSetiap 5 ml OBH Combi Dewasa mengandung:\r\n\r\n1. Paracetamol (Acetaminophen) adalah zat aktif yang memiliki aktivitas sebagai penurun demam/antipiretik dan pereda nyeri/analgesik yang bisa diperoleh tanpa resep dokter.\r\n2. Liquorice succus merupakan salah satu komponen obat batuk hitam (OBH) yang diperoleh dari sari akar tanaman Glycyrrhiza liquiritiae dan memberikan efek ekspektoran.\r\n3. Amonium Klorida bersifat sebagai agen ekspektoran dalam obat batuk. Efek ekspektoran akan bekerja dengan cara mengiritasi mukosa bronkial yang mempermudah pengeluaran dahak.\r\n4. Ephedrin HCl adalah zat aktif golongan simpatomimetik yang memiliki aktivitas sebagai nasal dekongestan, stimulant, dan wakefulness promoting agent. Senyawa ini bekerja dengan mengecilkan pembuluh darah untuk mengurangi pembengkakan dan penyumbatan.\r\n5. Chlorpheniramine maleate (CTM) adalah zat aktif yang digunakan untuk mengobati gejala alergi seperti rhinitis dan urtikaria. Termasuk dalam golongan antihistamin generasi pertama yang memiliki efek sedatif rendah.', 'strip', 16130, 64, 'Obat Demam', '> 12 tahun : sehari, 3 x 3 sendok takar (@ 5 ml)', 'Obat Bebas', 'apotek_online_k24klik_20221013013117359225_image-2022-10-13-10-48-43.png', NULL, NULL),
(2, 'Blackmores Koalakids Body Shield Chew Tablet (1 Botol Isi 60) (per Dos)', 'BLACKMORES KOALAKIDS BODY SHIELD CHEW TAB 60S BTL  adalah suplemen berbentuk tablet kunyah rasa jeruk yang diformulasikan secara khusus. Sangat berperan penting dan mengandung banyak nutrisi untuk kekebalan tubuh anak. Membantu menjaga kulit dan pertahanan sistem mukus membran, mendukung kinerja untuk sel-sel kekebalan tubuh.  serta diperlukan untuk produksi protein imun spesifik (antibodi) yang bertindak terhadap invasi mikro-organisme.\r\n\r\nBeli BLACKMORES KOALAKIDS BODY SHIELD CHEW TAB 60S BTL  di K24Klik.com dan dapatkan manfaatnya.', 'strip', 229380, 10, 'Obat Demam', 'Anak-anak 2-12 tahun : Kunyah 2 tablet sehari dengan makan atau sesuai saran medis.\r\nTidak untuk digunakan pada anak di bawah usia 2 tahun tanpa nasihat dokter', 'Obat Bebas', 'apotek_online_k24klik_20210429093330359225_blackmores.jpg', NULL, NULL),
(3, 'Triaminic Exp Syr (per Botol)', 'Triaminic Ekspektoran merupakan obat yang digunakan untuk mengurangi dan mengencerkan dahak pada saluran pernapasan. Triaminic mengandung dual zat aktif Pseudoephedrine HCl dan Guaifenesin yang bekerja sebagai iritan pada saluran pernafasan di mana saat batuk, volume mukus ditingkatkan pada saluran napas serta menurunkan viskositasnya (menjadi lebih encer) sehingga dahak/lendir lebih mudah dikeluarkan dari saluran pernapasan. Fungsi kedua zat tersebut adalah ekspektoran yang dapat mengencerkan dahak atau lendir pada saluran pernafasan sehingga lebih mudah dikeluarkan bersamaan dengan batuk.', 'tablet', 82853, 11, 'Obat Demam', '>12 tahun: 2 sendok takar 3 kali/hari, 6-12 tahun: 1 sendok takar 3 kali/hari, 2-5 tahun: 1/2 sendok takar 3 kali/hari', 'Obat Bebas', 'apotek_online_k24klik_20200113085435303669_TRIAMINIC-EXP-PILEK-SYR-60ML.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan_obats`
--

CREATE TABLE `pengadaan_obats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_supplier` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pengadaan` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengadaan_obats`
--

INSERT INTO `pengadaan_obats` (`id`, `id_supplier`, `tanggal_pengadaan`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, '2023-12-18', 1, NULL, NULL),
(4, 1, '2023-12-18', 1, NULL, NULL),
(5, 2, '2023-12-18', 1, NULL, NULL),
(8, 1, '2023-12-19', 1, NULL, NULL),
(11, 2, '2023-12-20', 1, NULL, NULL),
(13, 2, '2023-12-20', 1, NULL, NULL),
(15, 2, '2023-12-21', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stafs`
--

CREATE TABLE `stafs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_staf` varchar(255) NOT NULL,
  `email_staf` varchar(255) NOT NULL,
  `password_staf` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stafs`
--

INSERT INTO `stafs` (`id`, `nama_staf`, `email_staf`, `password_staf`, `created_at`, `updated_at`) VALUES
(1, 'Panduuu', 'candraSihotang12@gmail.com', '123451', NULL, NULL),
(2, 'Kadek', 'dendypramartha7e@gmail.com', '1234567890', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `no_telp_supplier` varchar(255) NOT NULL,
  `email_supplier` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `nama_supplier`, `no_telp_supplier`, `email_supplier`, `created_at`, `updated_at`) VALUES
(1, 'Pt Obat Obatann', '123789231212', 'obatan@gmail.commm', NULL, NULL),
(2, 'PT SEJAHTERA SEHAT SELALU', '8945612378923', 'sehatSelalu@gmail.comm', NULL, NULL),
(3, 'CandraSehatSentosa', '0891123123123', 'CandraSS@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `id_user`, `ulasan`, `rating`, `created_at`, `updated_at`) VALUES
(1, 5, 'Keren!!', 3, NULL, NULL),
(2, 5, 'Asik banget deh !!', 5, NULL, NULL),
(3, 5, 'Oke biasa aja', 2, NULL, NULL),
(4, 2, 'Hyy apa kabar', 3, NULL, NULL),
(5, 2, 'adasdasd', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_alamat` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `id_user`, `tanggal_transaksi`, `id_alamat`, `status`, `metode_pembayaran`, `created_at`, `updated_at`) VALUES
(19, 5, '2023-12-20', 1, '1', 'BRI', NULL, NULL),
(20, 2, '2023-12-20', 3, '1', 'BRI', NULL, NULL),
(21, 2, '2023-12-20', 1, '1', 'BNI', NULL, NULL),
(23, 5, '2023-12-20', 3, '1', 'BNI', NULL, NULL),
(24, 5, '2023-12-21', 1, '1', 'BNI', NULL, NULL),
(25, 5, '2023-12-20', 3, '1', 'BRI', NULL, NULL),
(26, 2, '2023-12-21', 5, '1', 'BNI', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `profile` longtext DEFAULT NULL,
  `verify_key` varchar(255) NOT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `jenis_kelamin`, `no_telp`, `tanggal_lahir`, `role`, `profile`, `verify_key`, `active`, `created_at`, `updated_at`, `email_verified_at`) VALUES
(1, 'Admin Sorya Health', 'dendypramartha03@gmail.com', '$2y$10$MNJe3vszfENc9yGehCZpuubgTojPQWrV9FNOFlYfr8FZG7adf27Ha', NULL, '089643938007', NULL, 'admin', NULL, 'NCMvJaFLmgnPm199KvOS9OXFxb8cleLCkOGjePNabPq7UZvcuMr3vRsWjCuRFTc9fP5qjh1G4Ze0mMv8UhrkupCxpKPfqmlrkVmN', 1, NULL, NULL, '2023-12-18 11:45:59'),
(2, 'Dendy Pramartha', 'dendypramartha7e@gmail.com', '$2y$10$b7pZMEcPdze0uJ2xA7jdiuC.tMDO5Fpa4qXs.6GDboy8G474nMCDW', 'Pria', '089643938007', '2023-12-06', 'customer', '231221125720.webp', 'tPNnZuEgk2L2iptZxMBo0TvzsVBtBeGmaLaFswoUS7iV5hjV0cwi9jEjlTc3l2cVOhW9uFDWVpw11RNK58OjQMhW6HpKyqwdTtgK', 1, NULL, NULL, '2023-12-19 08:29:13'),
(5, 'Kadek Pramartha', 'candraSihotang12@gmail.comm', '$2y$10$PaZuGwNfbFA/pRwSR3AS3.3wHzuPwzUB.8S1lriR2olauo33QQgRG', 'Pria', '8945612378923', '2023-12-05', 'customer', '231221120804.webp', 'B8R4s8S48oKmJkdWSv76hkEnG1wAesxLxxUpqrWfbnapO9zi2P4cgfVo2qrLLt6TYyhbLPCr6ZPn3L8FP2EfnZ5QOvyxzJRzBx5T', 1, NULL, NULL, '2023-12-19 08:39:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamats`
--
ALTER TABLE `alamats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alamats_id_user_foreign` (`id_user`);

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pengadaans`
--
ALTER TABLE `detail_pengadaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pengadaans_id_pengadaian_foreign` (`id_pengadaan`),
  ADD KEY `detail_pengadaans_id_obat_foreign` (`id_obat`);

--
-- Indexes for table `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_transaksis_id_transaksi_foreign` (`id_transaksi`),
  ADD KEY `detail_transaksis_id_obat_foreign` (`id_obat`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mutasi_danas`
--
ALTER TABLE `mutasi_danas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mutasi_danas_id_transaksi_foreign` (`id_transaksi`),
  ADD KEY `mutasi_danas_id_pengadaan_foreign` (`id_pengadaan`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengadaan_obats`
--
ALTER TABLE `pengadaan_obats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengadaan_obats_id_supplier_foreign` (`id_supplier`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `stafs`
--
ALTER TABLE `stafs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stafs_email_staf_unique` (`email_staf`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonis_id_user_foreign` (`id_user`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_id_user_foreign` (`id_user`),
  ADD KEY `transaksis_id_alamat_foreign` (`id_alamat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamats`
--
ALTER TABLE `alamats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `detail_pengadaans`
--
ALTER TABLE `detail_pengadaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mutasi_danas`
--
ALTER TABLE `mutasi_danas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `obats`
--
ALTER TABLE `obats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengadaan_obats`
--
ALTER TABLE `pengadaan_obats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stafs`
--
ALTER TABLE `stafs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamats`
--
ALTER TABLE `alamats`
  ADD CONSTRAINT `alamats_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pengadaans`
--
ALTER TABLE `detail_pengadaans`
  ADD CONSTRAINT `detail_pengadaans_id_obat_foreign` FOREIGN KEY (`id_obat`) REFERENCES `obats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_pengadaans_id_pengadaian_foreign` FOREIGN KEY (`id_pengadaan`) REFERENCES `pengadaan_obats` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  ADD CONSTRAINT `detail_transaksis_id_obat_foreign` FOREIGN KEY (`id_obat`) REFERENCES `obats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksis_id_transaksi_foreign` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mutasi_danas`
--
ALTER TABLE `mutasi_danas`
  ADD CONSTRAINT `mutasi_danas_id_pengadaan_foreign` FOREIGN KEY (`id_pengadaan`) REFERENCES `pengadaan_obats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mutasi_danas_id_transaksi_foreign` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengadaan_obats`
--
ALTER TABLE `pengadaan_obats`
  ADD CONSTRAINT `pengadaan_obats_id_supplier_foreign` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD CONSTRAINT `testimonis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_id_alamat_foreign` FOREIGN KEY (`id_alamat`) REFERENCES `alamats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
