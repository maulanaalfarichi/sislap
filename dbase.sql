-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2018 at 03:04 AM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `e-bisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `angkatan_lulus`
--

CREATE TABLE `angkatan_lulus` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(11) NOT NULL,
  `kode_pelajaran` varchar(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `angkatan_lulus`
--

INSERT INTO `angkatan_lulus` (`id`, `tahun_ajaran`, `kode_pelajaran`, `status`) VALUES
(52, '2013/2014', 'KD01', 0),
(53, '2013/2014', 'KD02', 0),
(54, '2013/2014', 'KD03', 0),
(55, '2013/2014', 'KD04', 0),
(56, '2013/2014', 'KD05', 0),
(57, '2013/2014', 'KD06', 0),
(58, '2013/2014', 'KD07', 0),
(59, '2013/2014', 'KD08', 0),
(60, '2013/2014', 'KD09', 0),
(61, '2013/2014', 'KD10', 0),
(62, '2013/2014', 'KD011', 0),
(63, '2013/2014', 'KD03', 1),
(64, '2013/2014', 'KD04', 1),
(65, '2013/2014', 'KD05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_ayah`
--

CREATE TABLE `data_ayah` (
  `id` int(11) NOT NULL,
  `nama_ayah` varchar(60) NOT NULL,
  `pendidikan_ayah` varchar(30) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `nis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_ayah`
--

INSERT INTO `data_ayah` (`id`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `nis`) VALUES
(5, 'Supriyadi Afrianto, S.Sos', 'S1', 'PNS', '015'),
(6, 'Syahbanto Raharjo', 'D3', 'PNS', '001'),
(7, 'Muhaimin Iksan', 'D3', 'Swasta', '002'),
(8, 'Cipto Prayitno', 'S!', 'Swasta', '003'),
(9, 'Didik Martanto', 'S1', 'Swasta', '004'),
(10, 'Saefuddin', 'S2', 'PNS', '005'),
(11, 'Ahlan Ansori, Sp.', 'S1', 'Swasta', '006'),
(12, 'M. Hasnand', 'S1', 'PNS', '007'),
(13, 'Muhammad Saman', 'S1 ', 'Wiraswasta', '008'),
(14, 'H. Abdillah Z.', 'SLTA', 'Swasta', '009'),
(15, 'Ayi Zenal Arif', 'SLTA', 'Swasta', '010'),
(16, 'Gunawan', 'SLTA', 'Swasta', '011'),
(17, 'Murinato Ahmad', 'SLTA', 'Swasta', '012'),
(18, 'Ir. Abdi Wahyudi', 'S1', 'Swasta', '013'),
(19, 'Ir. Irhamsyah', 'S1', 'Swasta', '014'),
(20, 'Syuriadi', 'S1', 'PNS', '016'),
(21, 'Dino Wijaya', 'S1', 'Karyawan BUMD', '017'),
(22, 'Rudi Misriansyah', 'SLTA', 'Swasta', '018'),
(23, 'Subagio S.H', 'S1', 'Swasta', '019'),
(24, 'Awaluddin, S.H', 'S1', 'Karyawan BUMN', '020'),
(25, 'Wasdiyanta, SP, MP', 'S2', 'Swasta', '021'),
(26, 'M. Budi Sutejo', 'SLTA', 'PNS', '022'),
(27, 'Achmad Badari, S.B, BSC', 'S1', 'Wiraswasta', '023'),
(28, 'Suyanto, S.Kom', 'S1', 'Anggota Polri (Bromob)', '024'),
(29, 'Agung Waluyo, S.Hut', 'S1', 'Swasta', '025'),
(30, 'Totok Pewanto', 'S1', 'Swasta', '026'),
(31, 'Warsono', 'SLTA', 'Anggota Polri', '027'),
(32, 'M. Noor Irfansyah, SE.', 'S1', 'Swasta', '028'),
(33, 'Candra Hardiyanto', 'SLTA', 'TNI-AD', '029'),
(34, 'Muchlisin', '-', 'Swasta', '030'),
(35, 'Farid Riza', '-', 'Swasta', '031'),
(36, 'H. Hidayatullah (Alm)', '-', '-', '032'),
(37, 'Kasbiantono', 'SLTA', 'Swasta', '033'),
(38, 'Mulyadi', 'SLTA', 'Pegawai PLN', '034'),
(39, 'Kamim Muthohari', 'S1', 'PNS', '035'),
(40, 'Rustam Effendy, SE.', 'S1', 'Swasta', '036'),
(41, 'Sukartono, SE', 'S1', 'Karyawan PT. Inhutani III', '037'),
(42, 'Sumarliano', 'D3', 'PNS', '038'),
(43, 'Kusnundon', 'S2', 'Swasta', '039'),
(44, 'Yasri Amri Hasan', 'SLTA', 'Swasta', '040');

-- --------------------------------------------------------

--
-- Table structure for table `data_ibu`
--

CREATE TABLE `data_ibu` (
  `id` int(11) NOT NULL,
  `nama_ibu` varchar(60) NOT NULL,
  `pendidikan_ibu` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `nis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_ibu`
--

INSERT INTO `data_ibu` (`id`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `nis`) VALUES
(5, 'Yuli Iriani', 'Yuli Iriani', '-', '015'),
(6, 'Windu Tri Wigati', 'SLTA', '-', '001'),
(7, 'Arie Kusuma Ningrum', 'S1', '-', '002'),
(8, 'Mariam Afriani', 'S1', '-', '003'),
(9, 'Hartati', '-', '-', '004'),
(10, 'Agustina', 'Agustina', 'PNS', '005'),
(11, 'Dwi Ambaru, S.Ag', 'Dwi Ambaru, S.Ag', 'PNS/Guru', '006'),
(12, 'Raihana Hidayat', 'Raihana Hidayat', '-', '007'),
(13, 'Budi Hartanti', 'Budi Hartanti', 'PNS', '008'),
(14, 'Hj. Mislani', 'Hj. Mislani', 'Swasta', '009'),
(15, 'Mindaryati, Sp.', 'Mindaryati, Sp.', 'Swasta', '010'),
(16, 'Rusmiati', 'Rusmiati', 'Swasta', '011'),
(17, 'Praptini Dasawati', 'Praptini Dasawati', 'PNS', '012'),
(18, 'Hayani Rusanti', 'Hayani Rusanti', 'Swasta', '013'),
(19, 'Laila Noraini S,Pd', 'Laila Noraini S,Pd', 'PNS', '014'),
(20, 'Nurul Qomariah', 'Nurul Qomariah', '-', '016'),
(21, 'Dina Mariana', 'Dina Mariana', '-', '017'),
(22, 'Tini Sulistiyowati', 'S1', '-', '018'),
(23, 'Siswati Indah Insani', 'SLTA', '-', '019'),
(24, 'Mustika Musthafa, S.Pi', 'Mustika Musthafa, S.Pi', '-', '020'),
(25, 'Isna Yani', 'SLTA', 'PNS', '021'),
(26, 'Suheni Raiful Lailyah', 'Suheni Raiful Lailyah', '-', '022'),
(27, 'Maryatun', 'Maryatun', '-', '023'),
(28, 'Rubinah, S.Pd', 'Rubinah, S.Pd', 'PNS/Guru', '024'),
(29, 'Nurul Qomariah, S.Ag', 'S1', '-', '025'),
(30, 'Tjindarbumi Kusumaningsih', 'Tjindarbumi Kusumaningsih', '-', '026'),
(31, 'Riny Yuniarti', 'Riny Yuniarti', '-', '027'),
(32, 'Debby Setiorini, S.Hut', 'Debby Setiorini, S.Hut', 'Swasta', '028'),
(33, 'H. Yeni Kusumaningsish', 'SLTA', '-', '029'),
(34, 'Siti Juwariayah', 'Siti Juwariayah', 'Swasta', '030'),
(35, 'Diah Lita Marlina', 'Diah Lita Marlina', 'Swasta', '031'),
(36, 'Nova Rosyanti Dewi', 'S1', 'Swasta', '032'),
(37, 'Evi Irawati', 'Evi Irawati', '-', '033'),
(38, 'R. Winarni', 'R. Winarni', '-', '034'),
(39, 'Dewi Sakura', 'Dewi Sakura', 'PNS', '035'),
(40, 'Isnariyah', 'Isnariyah', '-', '036'),
(41, 'Rina Emalia', 'Rina Emalia', 'Karyawan PT. Inhutani III', '037'),
(42, 'Nurlaila Rachmany', 'Nurlaila Rachmany', 'Swasta', '038'),
(43, 'Mustafidah', 'S1', 'Swasta', '039'),
(44, 'Hari Utami Sastro', 'S1', 'Swasta', '040');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nomor_akta` varchar(30) NOT NULL,
  `foto_siswa` text NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `nama_panggilan` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `agama` int(1) NOT NULL,
  `kewarganegaraan` int(1) NOT NULL,
  `alamat` text NOT NULL,
  `tahun_ajaran` varchar(11) NOT NULL,
  `nomor_ijazah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nis`, `nisn`, `nomor_akta`, `foto_siswa`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `kewarganegaraan`, `alamat`, `tahun_ajaran`, `nomor_ijazah`) VALUES
(4, '015', '0010439686', '06/80/UM/XI/2001', '', 'NADHEA PUTERI RIESKITA', 'NADHEA', 'Banjarbaru', '2018-04-11', 2, 1, 1, 'Komp. Surya Indah', '2013/2014', 'DN-15 Dd 0011214'),
(5, '001', '0027197868', '-', '', 'AFIF APTA RAHARJA', 'AFIF', 'Banjarbaru', '2002-09-22', 1, 1, 1, 'Jl. Scorpi VI/32 Banjarbaru', '2013/2014', 'DN-15 Dd 0011177'),
(6, '002', '-', '-', '', 'AGHISTA NAFI IKHSAN', 'AGIS', 'Pankalan Bun', '2001-10-21', 1, 1, 1, 'Komp. Wengga  Abadi 1/A7', '2013/2014', '-'),
(7, '003', '-', '-', '', 'ALYA NAURASYAHIRA PRAYITNO', 'ALYA', 'Sukabumi', '2002-06-23', 2, 1, 1, 'Balitan XIII/C-36', '2013/2014', '-'),
(8, '004', '0027197853', '-', '', 'BAYU PRAYOGA MARTANTO', 'BAYU', 'Balikpapan', '2002-07-13', 1, 1, 1, 'Benawa Indah H-28', '2013/2014', 'DN-15 Dd 0011184'),
(9, '005', '0029282520', '-', '', 'DAFFA AHMAD PRATAMA', 'DAFFA', 'Martapura', '2002-04-01', 1, 1, 1, 'Surya Indah 2 D/18', '2013/2014', 'DN-15 Dd 0011213'),
(10, '006', '0027197848', '-', '', 'DAHAYU KIRANA', 'AYU', 'Banjarmasin', '2002-06-26', 2, 1, 1, 'Pondok Rawa Indah No. 50', '2013/2014', 'DN-15 Dd 0011200'),
(11, '007', '0027197857', '-', '', 'DHIA FAWWAS AKBAR HASNAND', 'AKBAR', 'Banjarbaru', '2002-07-18', 1, 1, 1, 'Jl. Chatib dayan 31', '2013/2014', 'DN-15 Dd 0011207'),
(12, '008', '0027197847', '-', '', 'DIAH NOOR INTAN SARI', 'SARI', 'Banjarbaru', '2002-03-04', 2, 1, 1, 'Jl. A. Yani KM 31.5 No, 1', '2013/2014', 'DN-15 Dd 0011225'),
(13, '009', '0027197845', '-', '', 'M. RAIHAN AL-RASYID', 'RAIHAN', 'Banjarmasin', '2002-06-11', 1, 1, 1, 'Jl. Beringin Gg. Nangka', '2013/2014', 'DN-15 Dd 0011226'),
(14, '010', '0010349694', '-', '', 'MIRENDA SALMAVIONI NURYA ARIF', 'SALMA', 'Surabaya', '2001-12-29', 2, 1, 1, 'Jl. Budikarya RT 13 RW 6', '2013/2014', 'DN-15 Dd 0011189'),
(15, '011', '0010349693', '-', '', 'MUHAMMAD WISNU KUNCORO A.', 'WISNU', 'Denpasar', '2001-12-23', 1, 1, 1, '-', '2013/2014', 'DN-15 Dd 0011209'),
(16, '012', '0027197842', '-', '', 'MUHAMMAD GILANG YUDHISTIRA', 'GILANG', 'Banjarmasin', '2002-05-26', 1, 1, 1, 'Jl. Garuda KM.25', '2013/2014', 'DN-15 Dd 0011224'),
(17, '013', '0027197828', '-', '', 'MUHAMMAD FEBRIYAN ADHANI', 'FEBRIYAN', 'Sangau', '2002-02-18', 1, 1, 1, 'Jl. Sidorejo Berlina IV ', '2013/2014', 'DN-15 Dd 0011196'),
(18, '014', '0010349685', '-', '', 'MUTHIA ADYSA AMELIA', 'ADIS', 'Banjarbaru', '2001-10-07', 2, 1, 1, 'Jl. Bekantan 6 no. 18', '2013/2014', 'DN-15 Dd 0011218'),
(19, '016', '0027197867', '-', '', 'NAURA ZAHRA SAJIDA NANDA N', 'NAURA', 'Banarbaru', '2002-09-21', 2, 1, 1, 'Komp. Benawa Indah I / 55', '2013/2014', 'DN-15 Dd 0011206'),
(20, '017', '0027197838', '-', '', 'REFINA AZZAHRA', 'FINA', 'Barabai', '2002-04-23', 2, 1, 1, 'Banua Permai 6-12', '2013/2014', 'DN-15 Dd 0011220'),
(21, '018', '-', '-', '', 'SABRINA DIVA MAHARANI', 'DIVA', 'Banjarmasin', '2002-07-17', 2, 1, 1, 'Komp. Kehutanan RO. Ulin', '2013/2014', '-'),
(22, '019', '-', '-', '', 'VIRDA KURNIA BARBARA', 'VIRDA', 'Jombang', '2002-04-28', 2, 1, 1, 'Komp. Benawa Indah', '2013/2014', '-'),
(23, '020', '-', '-', '', 'WANDA KHAFIFAH RIZKI A', 'WANDA', 'Banjarmasin', '2002-10-06', 2, 1, 1, 'Komp. Intan Permai KM. 25,5', '2013/2014', '-'),
(24, '021', '-', '-', '', 'ADAM ARIF FATURAHMAN', 'ADAM', 'Banjarbaru', '2002-02-21', 1, 1, 1, 'Komp. Banjarbaru Asri', '2013/2014', '-'),
(25, '022', '0027197830', '-', '', 'AGMALIA BUDININGTYAS', 'LIA', 'Tanah Laut', '2002-02-23', 2, 1, 1, 'Jl. RO. Ulin RT 25B/ 003', '2013/2014', 'DN-15 Dd 0011178'),
(26, '023', '0029197844', '-', '', 'AIRLAGGA ARY SETYO BOEDY', 'ANGGA', 'Banjarbaru', '2001-05-31', 1, 1, 1, 'Jl. Fajar No. 08 RT 9 / IV', '2013/2014', 'DN-15 Dd 0011206'),
(27, '024', '0027197864', '-', '', 'AMELIA PUTRI NAAZHIRA', 'AMEL', 'Banjarbaru', '2002-08-13', 2, 1, 1, 'Komp. Mustika Indah', '2013/2014', 'DN-15 Dd 0011182'),
(28, '025', '-', '-', '', 'ASRI NURAINA IZZANI', 'ASRI', 'Tuban', '2002-04-23', 2, 1, 1, 'Komp. Mustika Karya No. 36', '2013/2014', '-'),
(29, '026', '0010349687', '-', '', 'AULIA RAMADHINA WIJI UTAMI', 'AULIA', 'Martapura', '2001-11-17', 2, 1, 1, 'Komp. Griya Kemuning 3', '2013/2014', 'DN-15 Dd 0011223'),
(30, '027', '0027197850', '-', '', 'DHEA MARSHANDA CATERINA', 'DHEA', 'Banjarbaru', '2002-06-30', 2, 1, 1, 'Jl. SMU PGRI 2Loktabat', '2013/2014', 'DN-15 Dd 0011201'),
(31, '028', '0027197855', '-', '', 'DEARBY LINTANG PUTRI IRFANSYAH', 'LINTANG', 'Banjarbaru', '2002-07-16', 2, 1, 1, 'Jl. A. Yani Km. 34 CMR', '2013/2014', 'DN-15 Dd 0011185'),
(32, '029', '-', '-', '', 'DIMAS ARYA KUSUMA NARENDRA', 'DIMAS', 'Samarinda', '2001-11-24', 1, 1, 1, 'ASR Rindam V / TPR', '2013/2014', '-'),
(33, '030', '0027197851', '-', '', 'FARHA SAILANNADA', 'FARHA', 'Tuban', '2002-06-03', 2, 1, 1, 'Jl. RO. Ulin No. 26 Gg. M. Sahid', '2013/2014', 'DN-15 Dd 0011212'),
(34, '031', '0027197831', '-', '', 'FRIDA SALSABIL MAHARANI', 'FRIDA', 'Martapura', '2002-03-14', 2, 1, 1, 'Komp. Pondik Sejahtera Blok 6 No. 11 Gg. Manggis', '2013/2014', 'DN-15 Dd 0011195'),
(35, '032', '-', '-', '', 'M. ALZAHSI ANSARI', 'ALZA', 'Banjarmasin', '2002-06-15', 1, 1, 1, '-', '2013/2014', '-'),
(36, '033', '0027197858', '-', '', 'MUHAMMAD JULIAN FIRDAUS', 'ALIF', 'Banjarmasin', '2002-07-25', 1, 1, 1, '-', '2013/2014', 'DN-15 Dd 0011188'),
(37, '034', '0027197871', '-', '', 'MUHAMMAD NAUFAL BAGASTAMA', 'NAUFAL', 'Martapura', '2002-11-29', 1, 1, 1, '-', '2013/2014', 'DN-15 Dd 0011211'),
(38, '035', '0027197859', '-', '', 'MUHAMMAD SYUKRON SALAM', 'SALAM', 'Banjarbaru', '2002-08-21', 1, 1, 1, '-', '2013/2014', 'DN-15 Dd 0011208'),
(39, '036', '0010349691', '-', '', 'PUTRI RAMADHANI EFFENDY', 'PUTRI', 'Banjarbaru', '2001-12-05', 2, 1, 1, '-', '2013/2014', 'DN-15 Dd 0011219'),
(40, '037', '0027197838', '-', '', 'RANA KARINA PUTRI', 'RANA', 'Ponorogo', '2002-04-12', 2, 1, 1, '-', '2013/2014', 'DN-15 Dd 0011194'),
(41, '038', '0010349696', '-', '', 'RENALDY PUTERA LIANO', 'ALDY', 'Banjarbaru', '2001-12-30', 1, 1, 1, '-', '2013/2014', 'DN-15 Dd 0011227'),
(42, '039', '-', '-', '', 'SALFA RIZQ RAMADHINA', 'NINA', 'Malang', '2001-12-14', 2, 1, 1, '-', '2013/2014', '-'),
(43, '040', '-', '-', '', 'SALSABILLA AMRI', 'SALSA', 'Jakarta', '2002-02-21', 2, 1, 1, '-', '2013/2014', '-');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `unit_kerja` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `username`, `password`, `nama_user`, `unit_kerja`) VALUES
(17, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
(18, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'syauqi', 'arsip');

-- --------------------------------------------------------

--
-- Table structure for table `data_wali`
--

CREATE TABLE `data_wali` (
  `id` int(11) NOT NULL,
  `nama_wali` varchar(60) NOT NULL,
  `pendidikan_wali` varchar(30) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `hubungan_keluarga` varchar(30) NOT NULL,
  `nis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_wali`
--

INSERT INTO `data_wali` (`id`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `hubungan_keluarga`, `nis`) VALUES
(5, '-', '-', '-', '-', '015'),
(6, '-', '-', '-', '-', '001'),
(7, '-', '-', '-', '-', '002'),
(8, '-', '-', '-', '-', '003'),
(9, '-', '-', '-', '-', '004'),
(10, '-', '-', '-', '-', '005'),
(11, '-', '-', '-', '-', '006'),
(12, '-', '-', '-', '-', '007'),
(13, '-', '-', '-', '-', '008'),
(14, '-', '-', '-', '-', '009'),
(15, '-', '-', '-', '-', '010'),
(16, '-', '-', '-', '-', '011'),
(17, '-', '-', '-', '-', '012'),
(18, '-', '-', '-', '-', '013'),
(19, '-', '-', '-', '-', '014'),
(20, '-', '-', '-', '-', '016'),
(21, '-', '-', '-', '-', '017'),
(22, '-', '-', '-', '-', '018'),
(23, '-', '-', '-', '-', '019'),
(24, '-', '-', '-', '-', '020'),
(25, '-', '-', '-', '-', '021'),
(26, '-', '-', '-', '-', '022'),
(27, '-', '-', '-', '-', '023'),
(28, '-', '-', '-', '-', '024'),
(29, '-', '-', '-', '-', '025'),
(30, '-', '-', '-', '-', '026'),
(31, '-', '-', '-', '-', '027'),
(32, '-', '-', '-', '-', '028'),
(33, '-', '-', '-', '-', '029'),
(34, '-', '-', '-', '-', '030'),
(35, '-', '-', '-', '-', '031'),
(36, '-', '-', '-', '-', '032'),
(37, '-', '-', '-', '-', '033'),
(38, '-', '-', '-', '-', '034'),
(39, '-', '-', '-', '-', '035'),
(40, '-', '-', '-', '-', '036'),
(41, '-', '-', '--', '-', '037'),
(42, '-', '-', '-', '-', '038'),
(43, '-', '-', '-', '-', '039'),
(44, '-', '-', '-', '-', '040');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `kode_pelajaran` varchar(11) NOT NULL,
  `mata_pelajaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `kode_pelajaran`, `mata_pelajaran`) VALUES
(3, 'KD01', 'Pendidikan Agama'),
(4, 'KD02', 'Pendidikan Pancasila dan Kewarganegaraan'),
(5, 'KD03', 'Bahasa Indonesia'),
(6, 'KD04', 'Matematika'),
(7, 'KD05', 'Ilmu Pengetahuan Alam'),
(8, 'KD06', 'Ilmu Pengetahuan Sosial'),
(9, 'KD07', 'Kerajinan Tangan dan Kesenian '),
(10, 'KD08', 'Pendidikan Jasmani dan Kesehatan'),
(11, 'KD09', 'Seni Budaya Bahasa Banjar'),
(13, 'KD10', 'Bahasa Inggris'),
(14, 'KD011', 'Pendidikan AlQuran');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_raport`
--

CREATE TABLE `nilai_raport` (
  `id` int(11) NOT NULL,
  `kode_pelajaran` varchar(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nilai` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai_raport`
--

INSERT INTO `nilai_raport` (`id`, `kode_pelajaran`, `nis`, `nilai`) VALUES
(34, 'KD01', '015', '100.00'),
(35, 'KD02', '015', '8.22'),
(36, 'KD03', '015', '8.44'),
(37, 'KD04', '015', '7.64'),
(38, 'KD05', '015', '8.06'),
(39, 'KD06', '015', '7.94'),
(40, 'KD07', '015', '8.14'),
(41, 'KD08', '015', '7.78'),
(42, 'KD09', '015', '8.84'),
(43, 'KD10', '015', '8.94'),
(44, 'KD011', '015', '8.38'),
(45, 'KD01', '023', '8.92'),
(46, 'KD02', '023', '8.38'),
(47, 'KD03', '023', '8.28'),
(48, 'KD04', '023', '8.04'),
(49, 'KD05', '023', '8.88'),
(50, 'KD06', '023', '8.20'),
(51, 'KD07', '023', '8.26'),
(52, 'KD08', '023', '8.76'),
(53, 'KD09', '023', '8.64'),
(54, 'KD10', '023', '8.52'),
(55, 'KD011', '023', '8.46');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_uas`
--

CREATE TABLE `nilai_uas` (
  `id` int(11) NOT NULL,
  `kode_pelajaran` varchar(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nilai` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai_uas`
--

INSERT INTO `nilai_uas` (`id`, `kode_pelajaran`, `nis`, `nilai`) VALUES
(60, 'KD01', '015', '100.00'),
(61, 'KD02', '015', '9.00'),
(62, 'KD03', '015', '8.80'),
(63, 'KD04', '015', '9.50'),
(64, 'KD05', '015', '9.75'),
(65, 'KD06', '015', '9.29'),
(66, 'KD07', '015', '9.80'),
(67, 'KD08', '015', '8.30'),
(68, 'KD09', '015', '9.40'),
(69, 'KD10', '015', '9.00'),
(70, 'KD011', '015', '9.00'),
(71, 'KD01', '023', '9.60'),
(72, 'KD02', '023', '8.40'),
(73, 'KD03', '023', '8.80'),
(74, 'KD04', '023', '9.25'),
(75, 'KD05', '023', '9.50'),
(76, 'KD06', '023', '8.20'),
(77, 'KD07', '023', '9.60'),
(78, 'KD08', '023', '8.50'),
(79, 'KD09', '023', '9.00'),
(80, 'KD10', '023', '8.40'),
(81, 'KD011', '023', '8.20');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_uasp`
--

CREATE TABLE `nilai_uasp` (
  `id` int(11) NOT NULL,
  `kode_pelajaran` varchar(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nilai` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai_uasp`
--

INSERT INTO `nilai_uasp` (`id`, `kode_pelajaran`, `nis`, `nilai`) VALUES
(89, 'KD03', '015', '98.00'),
(90, 'KD04', '015', '87.00'),
(91, 'KD05', '015', '68.90'),
(92, 'KD03', '023', '9.40'),
(93, 'KD04', '023', '8.75'),
(94, 'KD05', '023', '9.50');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_lulus`
--

CREATE TABLE `tahun_lulus` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tahun_lulus`
--

INSERT INTO `tahun_lulus` (`id`, `tahun_ajaran`) VALUES
(1, '2013/2014');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkatan_lulus`
--
ALTER TABLE `angkatan_lulus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ayah`
--
ALTER TABLE `data_ayah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ibu`
--
ALTER TABLE `data_ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `data_wali`
--
ALTER TABLE `data_wali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_uas`
--
ALTER TABLE `nilai_uas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_uasp`
--
ALTER TABLE `nilai_uasp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_lulus`
--
ALTER TABLE `tahun_lulus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angkatan_lulus`
--
ALTER TABLE `angkatan_lulus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `data_ayah`
--
ALTER TABLE `data_ayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `data_ibu`
--
ALTER TABLE `data_ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_wali`
--
ALTER TABLE `data_wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `nilai_uas`
--
ALTER TABLE `nilai_uas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `nilai_uasp`
--
ALTER TABLE `nilai_uasp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tahun_lulus`
--
ALTER TABLE `tahun_lulus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
