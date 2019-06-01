/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.26-MariaDB : Database - lapakkomputer
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lapakkomputer` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `lapakkomputer`;

/*Table structure for table `coba` */

DROP TABLE IF EXISTS `coba`;

CREATE TABLE `coba` (
  `coba_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `coba` */

/*Table structure for table `kondisi_products` */

DROP TABLE IF EXISTS `kondisi_products`;

CREATE TABLE `kondisi_products` (
  `kondisi_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kondisi` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`kondisi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kondisi_products` */

insert  into `kondisi_products`(`kondisi_id`,`nama_kondisi`) values (1,'Baru'),(2,'Bekas');

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_store` varchar(255) DEFAULT NULL,
  `alamat_store` varchar(255) DEFAULT NULL,
  `email_store` varchar(255) DEFAULT NULL,
  `telepon_store` decimal(13,0) DEFAULT NULL,
  PRIMARY KEY (`pelanggan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`pelanggan_id`,`nama_store`,`alamat_store`,`email_store`,`telepon_store`) values (5,'Abid Alfatir Comp','Sleman, Yogyakarta','abid@gmail.com','81308130813'),(6,'Ahmad Subarjo Comp','Jl Tengiri V No 43 Minosarmoni, Ngaglagia, Slemus, Yogyakarta','ahmadsubarjo@gmail.com','81308130813'),(7,'Surya Kencana Comp','Jl AM Sangaji, Yogyakarta','suryakencana@gmail.com','81308130813'),(8,'Ardi Comp','Jl Tirowardi, Raman Utara, Lampung Tengah.','ardicom78@gmail.com','81346538756'),(9,'Arief Store','Jl Wahid Hasyim','hdt@gmail.com','81308130813');

/*Table structure for table `pembelian` */

DROP TABLE IF EXISTS `pembelian`;

CREATE TABLE `pembelian` (
  `pembelian_id` int(64) NOT NULL AUTO_INCREMENT,
  `product_id` int(64) DEFAULT NULL,
  `pelanggan_id` int(64) DEFAULT NULL,
  `jumlah_pembelian` int(15) DEFAULT NULL,
  `tanggal_pembelian` date DEFAULT NULL,
  PRIMARY KEY (`pembelian_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `pembelian` */

insert  into `pembelian`(`pembelian_id`,`product_id`,`pelanggan_id`,`jumlah_pembelian`,`tanggal_pembelian`) values (1,3,5,1,'2019-05-10'),(2,4,6,12,'2019-05-14'),(3,3,5,12,'2019-05-16');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_product` varchar(255) DEFAULT NULL,
  `brand_product` varchar(255) DEFAULT NULL,
  `harga_product` int(15) DEFAULT NULL,
  `minimal_beli` int(10) DEFAULT NULL,
  `qty_product` int(10) DEFAULT NULL,
  `warna_tersedia` varchar(255) DEFAULT NULL,
  `kondisi_id` varchar(10) DEFAULT NULL,
  `berat_product` int(11) DEFAULT NULL,
  `foto_product` varchar(255) DEFAULT NULL,
  `deskripsi_product` text,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`product_id`,`nama_product`,`brand_product`,`harga_product`,`minimal_beli`,`qty_product`,`warna_tersedia`,`kondisi_id`,`berat_product`,`foto_product`,`deskripsi_product`) values (3,'LENOVO IdeaPad 720S 13IKB - I5 8250 8GB','Lenovo',9500000,6,62,'Grey, Hitam','1',2310,'3.png','Lenovo product description'),(4,'Xiaomi Mi Notebook Pro i7 16GB 256GB','xiaomi',12500000,12,75,'Merah, Hitam, Silver','1',1356,'.jpg','Xiaomi description'),(5,'Macbook Pro 2018 256 GB','Apple',28325000,12,86,'grey','1',1250,'5.jpg','Macbook pro 2018 ini adalah laptop yang memiliki kapasitas RAM 8GB dan mempunyai kecepatan tinggi dalam melakukan banyak operasi.'),(9,'Asus ROG 520 GB RAM','Asus',28575000,12,45,'Hitam','1',1234,'Asus_ROG_520_GB_RAM.jpg','Asus ROG adalah laptop yang memiliki RAM 8 GB');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
