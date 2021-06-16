-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 12:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(12) NOT NULL,
  `nama` varchar(144) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `tinggi` int(3) NOT NULL,
  `berat` int(3) NOT NULL,
  `goldar` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `hospitalized` date NOT NULL,
  `cp` varchar(20) NOT NULL,
  `story` text DEFAULT NULL,
  `img` varchar(100) NOT NULL,
  `shortname` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `nama`, `ttl`, `tinggi`, `berat`, `goldar`, `jumlah`, `hospitalized`, `cp`, `story`, `img`, `shortname`, `link`) VALUES
(1, 'Najmi Fatihus Sidqi', 'Bondowoso, 6 Juli 2001', 169, 62, 'A Rhesus Negatif', '3 Kantong / Hari', '2020-07-10', '+62 851-5533-2565', 'Najmi Fatihus Sidqi merupakan anak pertama dari pasangan Pak Takiya dan Bu Mirna, Setelah ulang tahunnya yang ke 19, ia mengalami kecelakaan hebat saat sedang mendaki gunung Kilimanjaro. Saat ini Najmi telah 1 bulan dirawat di Rumah Sakit Setya Merdeka dan membutuhkan 3 kantong darah setiap hari. Bantu Najmi sembuh dari penyakit yang dideritanya.', 'http://localhost/uas/public/IMG/person/najmi.jpg', 'Najmi', 'http://localhost/uas/public/main/najmi'),
(2, 'Cahya Nur Ariyani', 'Depok, 13 Juni 2004', 165, 51, 'AB Positif', '1 Kantong / hari', '2020-08-17', '+62 896-4747-1911', 'Cahya Nur Ariyani atau biasa dipanggil Ariyani mengalami kejadian yang cukup malang. Gadis berusia 17 tahun tersebut harus rela tinggal di rumah sakit selama berbulan bulan akibat pembullyan yang diterima nya saat menjalani Masa Orientasi Siswa (MOS). Ia didorong dari lantai 2 sekolahnya oleh kakak tingkat yang iri akan kecantikannya. Akibat perlakuan kakak tingkatnya tersebut, Ariyani membutuhkan suplai darah tiap harinya. Bantu gadis malang tersebut agar bisa kembali mengejar cita-citanya.', 'http://localhost/uas/public/IMG/person/ariyani.jpg', 'Ariyani', 'http://localhost/uas/public/main/ariyani'),
(3, 'Agil Surya Lesmana', 'Bondowoso, 17 Juni 2001', 165, 58, 'AB Negatif', '2 Kantong / hari', '2021-05-06', '+62 822-4187-3787', 'Agil Surya Lesmana merupakan mahasiswa semester 4 di Politeknik Negeri Jember. pemuda yang kerap disapa Agil tersebut mengalami memar akibat hasil dari tanding karate melawan juara nasional pada pertandingan antar kampus 2021. Agil menerima tendangan telak kebagian perut yang menyebabkan agil muntah darah secara hebat. Para dokter di RSUD Jember sudah berusaha keras untuk menghentikan pendarahan tersebut, namun Ia tetap muntah darah setiap hari yang menyebabkan ia butuh pasokan darah yang cukup banyak. Ayo bantu Agil agar bisa kembali bertanding karate seperti semula.', 'http://localhost/uas/public/IMG/person/agil.jpg', 'Agil', 'http://localhost/uas/public/main/agil'),
(4, 'Muhammad Wahid As-Siddiq', 'Banyuwangi, 29 Agustus 2002', 168, 52, 'O', '1 Kantong / 2 hari', '2004-05-21', '+62 852-3044-8992', 'Wahid yang sehari-hari aktif sebagai anggota himpunan salah satu jurusan di Universitas Jember ini memiliki penyakit langka dimana ia akan mengalami mimisan setiap 2 jam. Mimisan yang terus menerus ini membuat Wahid sering pingsan karena kekurangan darah. Tuntutan ekonomi juga membuat Wahid harus bekerja paruh waktu untuk biaya hidup nya sendiri. Ayo bantu Wahid meringankan beban hidupnya dengan donor darah anda.', 'http://localhost/uas/public/IMG/person/lord.jpg', 'Wahid', 'http://localhost/uas/public/main/lord');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
