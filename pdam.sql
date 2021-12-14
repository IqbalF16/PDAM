/*
SQLyog Enterprise - MySQL GUI v5.01
Host - 5.5.16 : Database - ukk_p4
*********************************************************************
Server version : 5.5.16
*/


create database if not exists `ukk_p4`;

USE `ukk_p4`;

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `kode_tarif` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `pelanggan` */

insert into `pelanggan` values 
(1,'Doo','Ree','1112'),
(2,'Re','Mi','1132'),
(3,'Java','Gresik','1101');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

insert into `pembayaran` values 
(4,'2018-03-28',13,'7515000','10000','5000','Lunas'),
(5,'2018-03-28',15,'165000','10000','5000','Lunas'),
(6,'2018-04-16',16,'155000','0','5000','Lunas'),
(7,'2018-10-08',12,'1005000','0','5000','Lunas');

/*Table structure for table `tagihan` */

DROP TABLE IF EXISTS `tagihan`;

CREATE TABLE `tagihan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tahun_tagih` varchar(20) DEFAULT NULL,
  `bulan_tagih` varchar(20) DEFAULT NULL,
  `pemakaian` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `pelanggan_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `tagihan` */

insert into `tagihan` values 
(12,'1001','01','100','Belum Bayar',2),
(13,'2018','2','500','Belum Bayar',3),
(14,'2020','13','10','Belum Bayar',1),
(15,'2200','13','10','Belum Bayar',3),
(16,'2018','02','10','Belum Bayar',3);

/*Table structure for table `tarif` */

DROP TABLE IF EXISTS `tarif`;

CREATE TABLE `tarif` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode` varchar(20) DEFAULT NULL,
  `daya` varchar(20) DEFAULT NULL,
  `tarif_perKWH` varchar(20) DEFAULT NULL,
  `beban` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tarif` */

insert into `tarif` values 
(1,'1112','200','9000','20'),
(2,'1132','300','10000','25'),
(3,'1101','500','15000','50');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert into `user` values 
(1,'Arya','admin','arya'),
(2,'Java','guest','arya');
