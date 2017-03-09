/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.13-MariaDB : Database - coder
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`coder` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `coder`;

/*Table structure for table `holder` */

CREATE TABLE `holder` (
  `id_holder` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` varchar(50) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `umur` int(3) DEFAULT NULL,
  `gender` enum('Perempuan','Laki-laki') DEFAULT NULL,
  `alamat` tinytext,
  `notelpk` tinytext,
  `instansi` varchar(100) DEFAULT NULL,
  `link_perusahaan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_holder`),
  KEY `username` (`username`),
  CONSTRAINT `holder_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Table structure for table `kategori_lomba` */

CREATE TABLE `kategori_lomba` (
  `id_kategori` int(2) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `login` */

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `lomba` */

CREATE TABLE `lomba` (
  `kd_lomba` int(2) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(2) DEFAULT NULL,
  `id_holder` int(1) DEFAULT NULL,
  `nama_lomba` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `tgl_pendaftaran` date DEFAULT NULL,
  `tgl_pengumpulan` date DEFAULT NULL,
  `link` tinytext,
  `poster` text,
  PRIMARY KEY (`kd_lomba`),
  KEY `id_holder` (`id_holder`),
  KEY `fk_id_kategori` (`id_kategori`),
  CONSTRAINT `fk_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_lomba` (`id_kategori`),
  CONSTRAINT `lomba_ibfk_1` FOREIGN KEY (`id_holder`) REFERENCES `holder` (`id_holder`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/* Trigger structure for table `holder` */

DELIMITER $$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `add_user` BEFORE INSERT ON `holder` FOR EACH ROW BEGIN
	insert into login values (new.username,new.password,'1');
    END */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
