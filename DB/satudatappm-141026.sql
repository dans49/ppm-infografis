-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2026 at 07:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satudatappm`
--

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` varchar(20) NOT NULL,
  `kode_kecamatan` varchar(100) NOT NULL,
  `kode_desa` varchar(100) NOT NULL,
  `nama_desa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `kode_kecamatan`, `kode_desa`, `nama_desa`) VALUES
('ID_00082', '320601', '3206012001', 'Ciheras'),
('ID_00040', '320601', '3206012002', 'Cipatujah'),
('ID_00322', '320601', '3206012003', 'Sindangkerta'),
('', '320601', '3206012004', 'Cikawungading'),
('ID_00010', '320601', '3206012005', 'Bantarkalong'),
('ID_00274', '320601', '3206012006', 'Darawati'),
('ID_00122', '320601', '3206012007', 'Nagrog'),
('ID_00026', '320601', '3206012008', 'Pameutingan'),
('ID_00027', '320601', '3206012009', 'Tobongjaya'),
('ID_00102', '320601', '3206012010', 'Cipanas'),
('ID_00326', '320601', '3206012011', 'Kertasari'),
('ID_00020', '320601', '3206012012', 'Ciandum'),
('ID_00354', '320601', '3206012013', 'Nangelasari'),
('ID_00202', '320601', '3206012014', 'Padawaras'),
('ID_00250', '320601', '3206012015', 'Sukahurip'),
('', '320602', '3206022001', 'Cidadap'),
('', '320602', '3206022002', 'Ciawi'),
('', '320602', '3206022003', 'Cikupa'),
('', '320602', '3206022004', 'Karangnunggal'),
('', '320602', '3206022005', 'Karangmekar'),
('', '320602', '3206022006', 'Cikukulu'),
('', '320602', '3206022007', 'Cibatuireng'),
('', '320602', '3206022008', 'Cibatu'),
('', '320602', '3206022009', 'Sarimanggu'),
('', '320602', '3206022010', 'Sukawangun'),
('', '320602', '3206022011', 'Cintawangi'),
('', '320602', '3206022012', 'Cikapinis'),
('', '320602', '3206022013', 'Sarimukti'),
('', '320602', '3206022014', 'Kujang'),
('', '320603', '3206032001', 'Cikalong'),
('', '320603', '3206032002', 'Kalapagenep'),
('', '320603', '3206032003', 'Cikancra'),
('', '320603', '3206032004', 'Singkir'),
('', '320603', '3206032005', 'Panyiaran'),
('', '320603', '3206032006', 'Cibeber'),
('', '320603', '3206032007', 'Cikadu'),
('', '320603', '3206032008', 'Mandalajaya'),
('', '320603', '3206032009', 'Cidadali'),
('', '320603', '3206032010', 'Cimanuk'),
('', '320603', '3206032011', 'Sindangjaya'),
('', '320603', '3206032012', 'Kubangsari'),
('', '320603', '3206032013', 'Tonjongsari'),
('', '320604', '3206042001', 'Cibuniasih'),
('', '320604', '3206042002', 'Pangliaran'),
('', '320604', '3206042003', 'Tonjong'),
('', '320604', '3206042004', 'Cibongas'),
('', '320604', '3206042005', 'Tawang'),
('', '320604', '3206042006', 'Neglasari'),
('', '320604', '3206042007', 'Cikawung'),
('', '320604', '3206042008', 'Jayamukti'),
('', '320604', '3206042009', 'Margaluyu'),
('', '320604', '3206042010', 'Mekarsari'),
('', '320604', '3206042011', 'Pancawangi'),
('', '320605', '3206052001', 'Gunungsari'),
('', '320605', '3206052002', 'Cilumba'),
('', '320605', '3206052003', 'Pakemitan'),
('', '320605', '3206052004', 'Cogreg'),
('', '320605', '3206052005', 'Cayur'),
('', '320605', '3206052006', 'Lengkongbarang'),
('', '320605', '3206052007', 'Sindangasih'),
('', '320605', '3206052008', 'Tanjungbarang'),
('', '320605', '3206052009', 'Linggalaksana'),
('', '320606', '3206062001', 'Cisempur'),
('', '320606', '3206062002', 'Setiawaras'),
('', '320606', '3206062003', 'Eureunpalay'),
('', '320606', '3206062004', 'Cibalong'),
('', '320606', '3206062005', 'Singajaya'),
('', '320606', '3206062006', 'Parung'),
('', '320607', '3206072001', 'Parungponteng'),
('', '320607', '3206072002', 'Cigunung'),
('', '320607', '3206072003', 'Cibanteng'),
('', '320607', '3206072004', 'Barumekar'),
('', '320607', '3206072005', 'Cibungur'),
('', '320607', '3206072006', 'Burujuljaya'),
('', '320607', '3206072007', 'Girikencana'),
('', '320607', '3206072008', 'Karyabakti'),
('', '320608', '3206082001', 'Simpang'),
('', '320608', '3206082002', 'Parakanhonje'),
('', '320608', '3206082003', 'Pamijahan'),
('', '320608', '3206082004', 'Sukamaju'),
('', '320608', '3206082005', 'Wangunsari'),
('', '320608', '3206082006', 'Hegarwangi'),
('', '320608', '3206082007', 'Wakap'),
('', '320608', '3206082008', 'Sirnagalih'),
('', '320609', '3206092001', 'Mertajaya'),
('', '320609', '3206092002', 'Cikadongdong'),
('', '320609', '3206092003', 'Bojongasih'),
('', '320609', '3206092004', 'Sindangsari'),
('', '320609', '3206092005', 'Girijaya'),
('', '320609', '3206092006', 'Toblongan'),
('', '320610', '3206102001', 'Cikuya'),
('', '320610', '3206102002', 'Cintabodas'),
('', '320610', '3206102003', 'Cipicung'),
('', '320610', '3206102004', 'Bojongsari'),
('', '320610', '3206102005', 'Mekarlaksana'),
('', '320611', '3206112001', 'Bojongkapol'),
('', '320611', '3206112002', 'Pedangkamulyan'),
('', '320611', '3206112003', 'Bojonggambir'),
('', '320611', '3206112004', 'Ciroyom'),
('', '320611', '3206112005', 'Wandasari'),
('', '320611', '3206112006', 'Campakasari'),
('', '320611', '3206112007', 'Mangkonjaya'),
('', '320611', '3206112008', 'Kertanegla'),
('', '320611', '3206112009', 'Purwaraharja'),
('', '320611', '3206112010', 'Girimukti'),
('', '320612', '3206122001', 'Parumasan'),
('', '320612', '3206122002', 'Cukangkawung'),
('', '320612', '3206122003', 'Sodonghilir'),
('', '320612', '3206122004', 'Cikalong'),
('', '320612', '3206122005', 'Cipaingeun'),
('', '320612', '3206122006', 'Leuwidulang'),
('', '320612', '3206122007', 'Muncang'),
('', '320612', '3206122008', 'Sepatnunggal'),
('', '320612', '3206122009', 'Cukangjayaguna'),
('', '320612', '3206122010', 'Raksajaya'),
('', '320612', '3206122011', 'Pakalongan'),
('', '320612', '3206122012', 'Sukabakti'),
('', '320613', '3206132001', 'Taraju'),
('', '320613', '3206132002', 'Cikubang'),
('', '320613', '3206132003', 'Deudeul'),
('', '320613', '3206132004', 'Purwarahayu'),
('', '320613', '3206132005', 'Singasari'),
('', '320613', '3206132006', 'Banyuasih'),
('', '320613', '3206132007', 'Raksasari'),
('', '320613', '3206132008', 'Kertaraharja'),
('', '320613', '3206132009', 'Pageralam'),
('', '320614', '3206142001', 'Jahiang'),
('', '320614', '3206142002', 'Serang'),
('', '320614', '3206142003', 'Salawu'),
('', '320614', '3206142004', 'Neglasari'),
('', '320614', '3206142005', 'Tanjungsari'),
('', '320614', '3206142006', 'Tenjowaringin'),
('', '320614', '3206142007', 'Sundawenang'),
('', '320614', '3206142008', 'Kawungsari'),
('', '320614', '3206142009', 'Sukarasa'),
('', '320614', '3206142010', 'Kutawaringin'),
('', '320614', '3206142011', 'Karangmukti'),
('', '320614', '3206142012', 'Margalaksana'),
('', '320615', '3206152001', 'Mandalasari'),
('', '320615', '3206152002', 'Sukasari'),
('', '320615', '3206152003', 'Puspasari'),
('', '320615', '3206152004', 'Puspahiang'),
('', '320615', '3206152005', 'Luyubakti'),
('', '320615', '3206152006', 'Pusparahayu'),
('', '320615', '3206152007', 'Cimanggu'),
('', '320615', '3206152008', 'Puspajaya'),
('', '320616', '3206162001', 'Cikeusal'),
('', '320616', '3206162002', 'Cibalanarik'),
('', '320616', '3206162003', 'Sukanagara'),
('', '320616', '3206162004', 'Tanjungjaya'),
('', '320616', '3206162005', 'Cilolohan'),
('', '320616', '3206162006', 'Cintajaya'),
('', '320616', '3206162007', 'Sukasenang'),
('', '320617', '3206172001', 'Sukapura'),
('', '320617', '3206172002', 'Leuwibudah'),
('', '320617', '3206172003', 'Sirnajaya'),
('', '320617', '3206172004', 'Mekarjaya'),
('', '320617', '3206172005', 'Linggaraja'),
('', '320617', '3206172006', 'Janggala'),
('', '320617', '3206172007', 'Margalaksana'),
('', '320617', '3206172008', 'Tarunajaya'),
('', '320618', '3206182001', 'Mandalahayu'),
('', '320618', '3206182002', 'Mulyasari'),
('', '320618', '3206182003', 'Kawitan'),
('', '320618', '3206182004', 'Mandalawangi'),
('', '320618', '3206182005', 'Karyawangi'),
('', '320618', '3206182006', 'Tanjungsari'),
('', '320618', '3206182007', 'Mandalaguna'),
('', '320618', '3206182008', 'Karyamandala'),
('', '320618', '3206182009', 'Banjarwaringin'),
('', '320619', '3206192001', 'Kaputihan'),
('', '320619', '3206192002', 'Setiawangi'),
('', '320619', '3206192003', 'Sukakerta'),
('', '320619', '3206192004', 'Neglasari'),
('', '320619', '3206192005', 'Jatiwaras'),
('', '320619', '3206192006', 'Papayan'),
('', '320619', '3206192007', 'Ciwarak'),
('', '320619', '3206192008', 'Kersagalih'),
('', '320619', '3206192009', 'Mandalamekar'),
('', '320619', '3206192010', 'Kertarahayu'),
('', '320619', '3206192011', 'Mandalahurip'),
('', '320620', '3206202001', 'Cisarua'),
('', '320620', '3206202002', 'Cikondang'),
('', '320620', '3206202003', 'Cijulang'),
('', '320620', '3206202004', 'Ciampanan'),
('', '320620', '3206202005', 'Cineam'),
('', '320620', '3206202006', 'Rajadatu'),
('ID_00381', '320620', '3206202007', 'Ancol'),
('', '320620', '3206202008', 'Nagaratengah'),
('', '320620', '3206202009', 'Pasirmukti'),
('', '320620', '3206202010', 'Madiasari'),
('', '320621', '3206212001', 'Sirnajaya'),
('', '320621', '3206212002', 'Karangjaya'),
('', '320621', '3206212003', 'Karanglayung'),
('', '320621', '3206212004', 'Citalahab'),
('', '320622', '3206222001', 'Cihaur'),
('', '320622', '3206222002', 'Cilangkap'),
('', '320622', '3206222003', 'Pasirpanjang'),
('', '320622', '3206222004', 'Cibeber'),
('', '320622', '3206222005', 'Kamulyan'),
('', '320622', '3206222006', 'Manonjaya'),
('', '320622', '3206222007', 'Margaluyu'),
('', '320622', '3206222008', 'Pasirbatang'),
('', '320622', '3206222009', 'Kalimanggis'),
('', '320622', '3206222010', 'Margahayu'),
('', '320622', '3206222011', 'Batusumur'),
('', '320622', '3206222012', 'Gunajaya'),
('', '320623', '3206232001', 'Cinunjang'),
('', '320623', '3206232002', 'Gunungtanjung'),
('', '320623', '3206232003', 'Bojongsari'),
('', '320623', '3206232004', 'Jatijaya'),
('', '320623', '3206232005', 'Tanjungsari'),
('', '320623', '3206232006', 'Giriwangi'),
('', '320623', '3206232007', 'Malatisuka'),
('', '320624', '3206242001', 'Cikunten'),
('', '320624', '3206242002', 'Singaparna'),
('', '320624', '3206242003', 'Cipakat'),
('', '320624', '3206242004', 'Cintaraja'),
('', '320624', '3206242005', 'Cikunir'),
('', '320624', '3206242006', 'Cikadongdong'),
('', '320624', '3206242007', 'Sukaasih'),
('', '320624', '3206242008', 'Sukamulya'),
('', '320624', '3206242009', 'Singasari'),
('', '320624', '3206242010', 'Sukaherang'),
('', '320625', '3206252001', 'Sukasukur'),
('', '320625', '3206252002', 'Salebu'),
('', '320625', '3206252003', 'Mangunreja'),
('', '320625', '3206252004', 'Margajaya'),
('', '320625', '3206252005', 'Pasirsalam'),
('', '320625', '3206252006', 'Sukaluyu'),
('', '320626', '3206262001', 'Sukarame'),
('', '320626', '3206262002', 'Sukamenak'),
('', '320626', '3206262003', 'Sukakarsa'),
('', '320626', '3206262004', 'Padasuka'),
('', '320626', '3206262005', 'Sukarapih'),
('', '320626', '3206262006', 'Wargakerta'),
('', '320627', '3206272001', 'Kersamaju'),
('', '320627', '3206272002', 'Nangtang'),
('', '320627', '3206272003', 'Pusparaja'),
('', '320627', '3206272004', 'Jayapura'),
('', '320627', '3206272005', 'Lengkongjaya'),
('', '320627', '3206272006', 'Nanggerang'),
('', '320627', '3206272007', 'Sukamanah'),
('', '320627', '3206272008', 'Sirnaraja'),
('', '320627', '3206272009', 'Cidugaleun'),
('', '320627', '3206272010', 'Parentas'),
('', '320627', '3206272011', 'Puspamukti'),
('', '320627', '3206272012', 'Tenjonagara'),
('', '320627', '3206272013', 'Cigalontang'),
('', '320627', '3206272014', 'Sirnagalih'),
('', '320627', '3206272015', 'Tanjungkarang'),
('', '320627', '3206272016', 'Sirnaputra'),
('ID_00300', '320628', '3206282001', 'Arjasari'),
('', '320628', '3206282002', 'Ciawang'),
('', '320628', '3206282003', 'Cigadog'),
('', '320628', '3206282004', 'Linggawangi'),
('', '320628', '3206282005', 'Jayamukti'),
('', '320628', '3206282006', 'Mandalagiri'),
('', '320628', '3206282007', 'Linggamulya'),
('', '320629', '3206292001', 'Cilampunghilir'),
('', '320629', '3206292002', 'Rancapaku'),
('', '320629', '3206292003', 'Mekarjaya'),
('', '320629', '3206292004', 'Cisaruni'),
('', '320629', '3206292005', 'Padakembang'),
('', '320630', '3206302001', 'Sariwangi'),
('', '320630', '3206302002', 'Sukaharja'),
('', '320630', '3206302003', 'Jayaratu'),
('', '320630', '3206302004', 'Linggasirna'),
('', '320630', '3206302005', 'Sirnasari'),
('', '320630', '3206302006', 'Sukamulih'),
('', '320630', '3206302007', 'Selawangi'),
('', '320630', '3206302008', 'Jayaputra'),
('', '320631', '3206312001', 'Linggajati'),
('', '320631', '3206312002', 'Tawangbanteng'),
('', '320631', '3206312003', 'Sinagar'),
('', '320631', '3206312004', 'Gunungsari'),
('', '320631', '3206312005', 'Sukamahi'),
('', '320631', '3206312006', 'Sukagalih'),
('', '320631', '3206312007', 'Sukaratu'),
('', '320631', '3206312008', 'Indrajaya'),
('', '320632', '3206322001', 'Cisayong'),
('', '320632', '3206322002', 'Sukajadi'),
('', '320632', '3206322003', 'Sukasukur'),
('', '320632', '3206322004', 'Sukamukti'),
('', '320632', '3206322005', 'Nusawangi'),
('', '320632', '3206322006', 'Cikadu'),
('', '320632', '3206322007', 'Cileuleus'),
('', '320632', '3206322008', 'Jatihurip'),
('', '320632', '3206322009', 'Sukasetia'),
('', '320632', '3206322010', 'Purwasari'),
('', '320632', '3206322011', 'Sukaraharja'),
('', '320632', '3206322012', 'Mekarwangi'),
('', '320632', '3206322013', 'Santanamekar'),
('', '320633', '3206332001', 'Banyurasa'),
('', '320633', '3206332002', 'Calingcing'),
('', '320633', '3206332003', 'Sukahening'),
('', '320633', '3206332004', 'Kiarajangkung'),
('', '320633', '3206332005', 'Kudadepa'),
('', '320633', '3206332006', 'Banyuresmi'),
('', '320633', '3206332007', 'Sundakerta'),
('', '320634', '3206342001', 'Dawagung'),
('', '320634', '3206342002', 'Rajapolah'),
('', '320634', '3206342003', 'Manggungjaya'),
('', '320634', '3206342004', 'Manggungsari'),
('', '320634', '3206342005', 'Sukaraja'),
('', '320634', '3206342006', 'Rajamandala'),
('', '320634', '3206342007', 'Sukanagalih'),
('', '320634', '3206342008', 'Tanjungpura'),
('', '320635', '3206352001', 'Condong'),
('', '320635', '3206352002', 'Bojonggaok'),
('', '320635', '3206352003', 'Sindangraja'),
('', '320635', '3206352004', 'Karangmulya'),
('', '320635', '3206352005', 'Geresik'),
('', '320635', '3206352006', 'Karangsembung'),
('', '320635', '3206352007', 'Tanjungmekar'),
('', '320635', '3206352008', 'Karangresik'),
('', '320636', '3206362001', 'Gombong'),
('', '320636', '3206362002', 'Bugel'),
('', '320636', '3206362003', 'Margasari'),
('', '320636', '3206362004', 'Pakemitan'),
('', '320636', '3206362005', 'Ciawi'),
('', '320636', '3206362006', 'Sukamantri'),
('', '320636', '3206362007', 'Pasirhuni'),
('', '320636', '3206362008', 'Citamba'),
('', '320636', '3206362009', 'Kertamukti'),
('', '320636', '3206362010', 'Kurniabakti'),
('', '320636', '3206362011', 'Pakemitankidul'),
('', '320637', '3206372001', 'Kadipaten'),
('', '320637', '3206372002', 'Dirgahayu'),
('', '320637', '3206372003', 'Cibahayu'),
('', '320637', '3206372004', 'Mekarsari'),
('', '320637', '3206372005', 'Buniasih'),
('', '320637', '3206372006', 'Pamoyanan'),
('', '320638', '3206382001', 'Cipacing'),
('', '320638', '3206382002', 'Pagerageung'),
('', '320638', '3206382003', 'Sukamaju'),
('', '320638', '3206382004', 'Tanjungkerta'),
('', '320638', '3206382005', 'Puteran'),
('', '320638', '3206382006', 'Guranteng'),
('', '320638', '3206382007', 'Nanggewer'),
('', '320638', '3206382008', 'Sukapada'),
('', '320638', '3206382009', 'Pagersari'),
('', '320638', '3206382010', 'Sukadana'),
('', '320639', '3206392001', 'Cipondok'),
('', '320639', '3206392002', 'Sukamenak'),
('', '320639', '3206392003', 'Sukaratu'),
('', '320639', '3206392004', 'Banjarsari'),
('', '320639', '3206392005', 'Tanjungsari'),
('', '320639', '3206392006', 'Sukapancar'),
('', '320639', '3206392007', 'Sukaresik'),
('', '320639', '3206392008', 'Margamulya');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` varchar(20) NOT NULL,
  `kode_kecamatan` varchar(100) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `kode_kecamatan`, `nama_kecamatan`) VALUES
('ID_00009', '320601', 'Cipatujah'),
('ID_00017', '320602', 'Karangnunggal'),
('ID_00006', '320603', 'Cikalong'),
('ID_00023', '320604', 'Pancatengah'),
('ID_00007', '320605', 'Cikatomas'),
('ID_00004', '320606', 'Cibalong'),
('ID_00024', '320607', 'Parungponteng'),
('ID_00000', '320608', 'Bantarkalong'),
('ID_00001', '320609', 'Bojongasih'),
('ID_00011', '320610', 'Culamega'),
('ID_00002', '320611', 'Bojonggambir'),
('ID_00031', '320612', 'Sodonghilir'),
('ID_00038', '320613', 'Taraju'),
('ID_00027', '320614', 'Salawu'),
('ID_00025', '320615', 'Puspahiang'),
('ID_00037', '320616', 'Tanjungjaya'),
('ID_00033', '320617', 'Sukaraja'),
('ID_00028', '320618', 'Salopa'),
('ID_00014', '320619', 'Jatiwaras'),
('ID_00008', '320620', 'Cineam'),
('ID_00016', '320621', 'Karangjaya'),
('ID_00020', '320622', 'Manonjaya'),
('ID_00012', '320623', 'Gunungtanjung'),
('ID_00030', '320624', 'Singaparna'),
('ID_00019', '320625', 'Mangunreja'),
('ID_00034', '320626', 'Sukarame'),
('ID_00005', '320627', 'Cigalontang'),
('ID_00018', '320628', 'Leuwisari'),
('ID_00021', '320629', 'Padakembang'),
('ID_00029', '320630', 'Sariwangi'),
('ID_00035', '320631', 'Sukaratu'),
('ID_00010', '320632', 'Cisayong'),
('ID_00032', '320633', 'Sukahening'),
('ID_00026', '320634', 'Rajapolah'),
('ID_00013', '320635', 'Jamanis'),
('ID_00003', '320636', 'Ciawi'),
('ID_00015', '320637', 'Kadipaten'),
('ID_00022', '320638', 'Pagerageung'),
('ID_00036', '320639', 'Sukaresik');

-- --------------------------------------------------------

--
-- Table structure for table `ppm_indikator`
--

CREATE TABLE `ppm_indikator` (
  `id_indikator` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idopd` int(11) NOT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `kd_indikator` varchar(50) DEFAULT NULL,
  `nama_indikator` varchar(100) DEFAULT NULL,
  `definisi` text DEFAULT NULL,
  `rumus_hitung` text DEFAULT NULL,
  `arah_capaian` enum('naik','turun','netral') DEFAULT NULL,
  `level_wilayah` enum('kabupaten','kecamatan','desa') DEFAULT NULL,
  `statusidk` enum('AKTIF','TIDAK') DEFAULT NULL,
  `waktudata` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ppm_indikator`
--

INSERT INTO `ppm_indikator` (`id_indikator`, `idkategori`, `idopd`, `satuan`, `kd_indikator`, `nama_indikator`, `definisi`, `rumus_hitung`, `arah_capaian`, `level_wilayah`, `statusidk`, `waktudata`) VALUES
(1, 1, 2, 'Tahun', NULL, 'Angka Harapan Hidup', NULL, NULL, 'naik', 'kabupaten', 'AKTIF', '2026-10-13 23:51:03'),
(2, 2, 3, 'Tahun', NULL, 'Rata-rata Lama Sekolah', NULL, NULL, 'naik', 'kabupaten', 'AKTIF', '2026-10-13 23:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `ppm_kategori`
--

CREATE TABLE `ppm_kategori` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `statuskat` enum('AKTIF','TIDAK') DEFAULT NULL,
  `waktudata` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ppm_kategori`
--

INSERT INTO `ppm_kategori` (`idkategori`, `kategori`, `slug`, `icon`, `statuskat`, `waktudata`) VALUES
(1, 'Kesehatan', 'kesehatan', 'fa-heart-pulse', 'AKTIF', '2026-10-13 23:30:09'),
(2, 'Pendidikan', 'pendidikan', 'fa-graduation-cap', 'AKTIF', '2026-10-13 23:30:09'),
(3, 'Kemiskinan', 'kemiskinan', 'fa-people-group', 'AKTIF', '2026-10-13 23:34:56'),
(4, 'Stunting', 'stunting', 'fa-child-reaching', 'AKTIF', '2026-10-13 23:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `ppm_opd`
--

CREATE TABLE `ppm_opd` (
  `idopd` int(11) NOT NULL,
  `nama_opd` varchar(200) DEFAULT NULL,
  `singkatan` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `statusopd` int(11) DEFAULT NULL,
  `waktudata` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ppm_opd`
--

INSERT INTO `ppm_opd` (`idopd`, `nama_opd`, `singkatan`, `alamat`, `statusopd`, `waktudata`) VALUES
(1, 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah Kabupaten Tasikmalaya', 'Bappelitbangda', NULL, 1, '2026-10-13 23:50:31'),
(2, 'Dinas Kesehatan Kabupaten Tasikmalaya', 'Dinkes', NULL, 1, '2026-10-13 23:50:31'),
(3, 'Dinas Pendidikan dan Kebudayaan Kabupaten Tasikmalaya', 'Disdikbud', NULL, 1, '2026-10-13 23:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `ppm_user`
--

CREATE TABLE `ppm_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `kata_kunci` varchar(100) DEFAULT NULL,
  `level` enum('admin','operator','perencana','kabid') DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `statusdata` enum('AKTIF','TIDAK') DEFAULT NULL,
  `waktudata` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`kode_desa`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kode_kecamatan`);

--
-- Indexes for table `ppm_indikator`
--
ALTER TABLE `ppm_indikator`
  ADD PRIMARY KEY (`id_indikator`);

--
-- Indexes for table `ppm_kategori`
--
ALTER TABLE `ppm_kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `ppm_opd`
--
ALTER TABLE `ppm_opd`
  ADD PRIMARY KEY (`idopd`);

--
-- Indexes for table `ppm_user`
--
ALTER TABLE `ppm_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ppm_indikator`
--
ALTER TABLE `ppm_indikator`
  MODIFY `id_indikator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ppm_kategori`
--
ALTER TABLE `ppm_kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ppm_opd`
--
ALTER TABLE `ppm_opd`
  MODIFY `idopd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ppm_user`
--
ALTER TABLE `ppm_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
