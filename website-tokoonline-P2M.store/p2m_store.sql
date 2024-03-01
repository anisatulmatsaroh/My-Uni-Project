-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 02:13 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p2m_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(35) NOT NULL,
  `harga_barang` int(10) NOT NULL,
  `stok_barang` int(9) NOT NULL,
  `foto_barang` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `stok_barang`, `foto_barang`, `keterangan`, `id_kategori`) VALUES
(1, 'Jilbab Segi Empat BELLA SQUARE', 20000, 132, 'gambar/hijab.png', 'Bahan Hycon', 1),
(2, 'Jilbab Diamond Scarf', 40000, 145, 'gambar/scarf.png', 'Bahan Diamond HQ', 1),
(3, 'Jilbab Pashmina Instan Raisya', 38000, 125, 'gambar/instan.png', 'Bahan diamond Italiano', 1),
(4, 'Gamis Venice Baby terry motif etnik', 95000, 100, 'gambar/etnik.png', 'Bahan Venice Baby terry', 2),
(5, 'Baju Gamis Motif Bunga', 120000, 115, 'gambar/gamiss2.png', 'Bahan Misbii', 2),
(6, 'Baju Gamis', 125000, 105, 'gambar/gamiss.png', 'Bahan Misbii', 2),
(7, 'Handsock', 10000, 88, 'gambar/hs1.png', 'Bahan Rajut', 3),
(8, 'Handsock Pita', 11000, 80, 'gambar/pita.png', 'Bahan Jersey', 3),
(9, 'Kaos Kaki Polkadot', 12000, 106, 'gambar/polkadot.png', 'Bahan Nylon Tebal', 3),
(10, 'Kaos Kaki Polos', 10000, 78, 'gambar/nylon.png', 'Bahan Nylon Spandek', 3),
(11, 'Kaos Kaki Wudhu', 13000, 90, 'gambar/kaoskakiwudhu.png', 'Bahan Nylon Spandek', 3),
(12, 'Ciput Rajut', 9000, 100, 'gambar/ciput2.png', 'Bahan Rajut', 3),
(13, 'Ciput Rajut Polos', 10000, 95, 'gambar/ciput.png', 'Bahan Rajut', 3),
(14, 'Gantungan Kunci Unyu', 12000, 20, 'gambar/5554.png', 'Anda dapat memesan gantungan kunci muslimah dengan nama Anda', 3),
(15, 'Gantungan Kunci Muslimah', 12000, 30, 'gambar/pernak.png', 'Anda dapat memesan gantungan kunci muslimah dengan nama Anda', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'hijab'),
(2, 'gamis'),
(3, 'aksesoris muslimah');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `harga_barang` varchar(25) NOT NULL,
  `jumlah_beli` varchar(25) NOT NULL,
  `status` varchar(30) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `total` varchar(25) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `harga_barang`, `jumlah_beli`, `status`, `waktu`, `total`, `id_barang`, `id_pengguna`) VALUES
(20, '20000', '2', 'dikirim', 'Sunday, 2-12-2018 05:37:27pm', '40000', 1, 10),
(21, '10000', '3', 'belum bayar', '', '30000', 3, 8),
(22, '95000', '1', 'dikirim', 'Monday, 3-12-2018 05:37:32pm', '95000', 2, 11),
(23, '10000', '5', 'dikirim', 'Monday, 3-12-2018 05:37:32pm', '50000', 3, 11),
(24, '12000', '3', 'lunas', 'Wednesday, 5-12-2018 11:42:45pm', '36000', 3, 12),
(25, '120000', '1', 'belum bayar', '', '120000', 2, 13),
(26, '11000', '1', 'lunas', 'Tuesday, 4-12-2018 11:42:54pm', '11000', 3, 9),
(27, '12000', '2', 'lunas', 'Tuesday, 4-12-2018 11:42:54pm', '24000', 3, 9),
(28, '40000', '1', 'dikirim', 'Friday, 7-12-2018 11:43:33pm', '40000', 1, 7),
(29, '38000', '2', 'dikirim', 'Friday, 7-12-2018 11:43:33pm', '76000', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `jenis_kelamin`, `tgl_lahir`, `username`, `password`, `hak`) VALUES
(1, 'LelyAdmin', 'Perempuan', '2000-06-04', 'admin1', 'admin1', 'admin'),
(2, 'AnisaAdmin', 'Perempuan', '2000-09-15', 'admin2', 'admin2', 'admin'),
(3, 'FitriAdmin', 'Perempuan', '1998-08-08', 'admin3', 'admin3', 'admin'),
(7, 'della', 'Perempuan', '1999-09-11', 'della', 'della11', 'pengguna'),
(8, 'endang', 'Perempuan', '1999-08-12', 'endang', 'endang8', 'pengguna'),
(9, 'mila', 'Perempuan', '2000-09-21', 'mila', 'mila12', 'pengguna'),
(10, 'widya', 'Perempuan', '1999-10-10', 'widya', 'widya10', 'pengguna'),
(11, 'novia', 'Perempuan', '2000-03-05', 'novia', 'novia5', 'pengguna'),
(12, 'faradila', 'Perempuan', '2000-08-29', 'dila', 'faradila', 'pengguna'),
(13, 'jihan', 'Perempuan', '2000-04-03', 'jihan', 'jihan34', 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `waktu_transaksi` varchar(50) NOT NULL,
  `subtotal` varchar(25) NOT NULL,
  `status_transaksi` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `ongkos_kirim` varchar(15) NOT NULL,
  `total_belanja` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `no_rek` varchar(15) NOT NULL,
  `nama_bank` varchar(15) NOT NULL,
  `atas_nama` varchar(15) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `waktu_transaksi`, `subtotal`, `status_transaksi`, `alamat`, `ongkos_kirim`, `total_belanja`, `no_hp`, `no_rek`, `nama_bank`, `atas_nama`, `id_pengguna`) VALUES
(45, 'Sunday, 2-12-2018 05:37:27pm', '40000', 'dikirim', 'Gresik', '9000', '45000', '083815427658', '998154338966', 'BRI', 'Widya Eka', 10),
(46, 'Monday, 3-12-2018 05:37:32pm', '95000', 'dikirim', 'Bangkalan', '5000', '100000', '083865209181', '999112345576', 'BCA', 'Novia Dinda', 11),
(47, 'Monday, 3-12-2018 05:37:32pm', '50000', 'dikirim', 'Bangkalan', '5000', '55000', '083865209181', '999112345576', 'BCA', 'Novia Dinda', 11),
(48, 'Tuesday, 4-12-2018 11:42:54pm', '11000', 'lunas', 'Bangkalan', '5000', '16000', '085677667866', '999111654432', 'BRI', 'Mila Rofiana', 9),
(49, 'Tuesday, 4-12-2018 11:42:54pm', '24000', 'lunas', 'Bangkalan', '5000', '29000', '085677667866', '999111654432', 'BRI' , 'Mila Rofiana' , 9),
(50, 'Wednesday, 5-12-2018 11:42:45pm', '36000', 'lunas', 'Malang', '20000' , '56000' , '085822546785', '998734221566', 'Mandiri', 'Faradila Riski', 12),
(49, 'Friday, 7-12-2018 11:43:33pm', '76000', 'dikirim', 'Sumenep', '10000' , '86000', '083224567943', '999113228865', 'Mandiri' , 'Delilah Isnaini' , 7),
(50, 'Friday, 7-12-2018 11:43:33pm', '40000', 'dikirim', 'Sumenep', '10000' , '50000', '083224567943', '999113228865', 'Mandiri' , 'Delilah Isnaini' , 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
