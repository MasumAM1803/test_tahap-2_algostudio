/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.21-MariaDB : Database - test_algostudio
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test_algostudio` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `test_algostudio`;

/*Table structure for table `detail_penjualan` */

DROP TABLE IF EXISTS `detail_penjualan`;

CREATE TABLE `detail_penjualan` (
  `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_penjualan` int(11) NOT NULL,
  `kode_brg` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  PRIMARY KEY (`id_penjualan`),
  KEY `kode_barang` (`kode_brg`),
  KEY `kode_penjualan` (`kode_penjualan`),
  CONSTRAINT `detail_penjualan_ibfk_1` FOREIGN KEY (`kode_brg`) REFERENCES `master_barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detail_penjualan_ibfk_2` FOREIGN KEY (`kode_penjualan`) REFERENCES `penjualan` (`kode_jual`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_penjualan` */

insert  into `detail_penjualan`(`id_penjualan`,`kode_penjualan`,`kode_brg`,`jumlah`,`harga_satuan`,`harga_total`) values 
(1,1,'T001',1,150000,150000),
(2,2,'T001',1,150000,150000),
(3,2,'T002',1,50000,50000),
(4,3,'T001',2,150000,300000),
(5,3,'T002',2,50000,100000),
(6,4,'J001',1,200000,200000);

/*Table structure for table `master_barang` */

DROP TABLE IF EXISTS `master_barang`;

CREATE TABLE `master_barang` (
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `master_barang` */

insert  into `master_barang`(`kode_barang`,`nama_barang`,`harga_jual`,`harga_beli`,`stok`,`kategori`) values 
('J001','jaket modis',300000,200000,5,'jaket'),
('T001','tas ransel',150000,100000,2,'tas'),
('T002','tas kecil',50000,20000,4,'tas');

/*Table structure for table `penjualan` */

DROP TABLE IF EXISTS `penjualan`;

CREATE TABLE `penjualan` (
  `kode_jual` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_penjualan` date NOT NULL,
  `nama_konsumen` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `total_barang` int(11) NOT NULL,
  PRIMARY KEY (`kode_jual`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `penjualan` */

insert  into `penjualan`(`kode_jual`,`tgl_penjualan`,`nama_konsumen`,`alamat`,`total_barang`) values 
(1,'2022-02-08','rifan','kp. pembeli 1',1),
(2,'2022-02-07','rijal','kp. pembeli 2',2),
(3,'2022-02-08','sahlan','jl. pembeli 3',4),
(4,'2022-02-07','ita','jl. pembeli 4',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
