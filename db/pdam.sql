/*
SQLyog Enterprise - MySQL GUI v5.01
Host - 5.5.16 : Database - pdam
*********************************************************************
Server version : 5.5.16
*/


create database if not exists `pdam`;

USE `pdam`;

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `kode_tarif` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pelanggan` */

insert into `pelanggan` values 
(1,'Iqbal','tirem','RT'),
(2,'Red','Ds Adohh','Sk');

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tanggal_bayar` date DEFAULT NULL,
  `id_tagihan` int(5) DEFAULT NULL,
  `jumlah_tagihan` varchar(20) DEFAULT NULL,
  `biaya_denda` varchar(20) DEFAULT NULL,
  `biaya_admin` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

insert into `pembayaran` values 
(1,'2018-11-10',1,'22000','0','5000','Lunas');

/*Table structure for table `tagihan` */

DROP TABLE IF EXISTS `tagihan`;

CREATE TABLE `tagihan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `bln_thn` varchar(200) DEFAULT NULL,
  `pemakaian` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `pelanggan_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tagihan` */

insert into `tagihan` values 
(1,'2018-11','20','Belum Bayar',1);

/*Table structure for table `tarif` */

DROP TABLE IF EXISTS `tarif`;

CREATE TABLE `tarif` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) DEFAULT NULL,
  `golongan_pelanggan` varchar(200) DEFAULT NULL,
  `tarif_perm3` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tarif` */

insert into `tarif` values 
(1,'RT','Rumah Tangga',850),
(2,'Sk','Sekolah',1000);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert into `user` values 
(3,'iqbal','iqbal','1');
