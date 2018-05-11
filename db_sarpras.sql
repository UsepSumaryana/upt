/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.1.31-MariaDB : Database - db_sarpras
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `t_jadwal` */

CREATE TABLE `t_jadwal` (
  `id_jadwal` varchar(10) NOT NULL,
  `id_sarana` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `tgl_penggunaan_start` datetime NOT NULL,
  `tgl_penggunaan_end` datetime NOT NULL,
  `jadwal_source` enum('user','admin','upt') NOT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `id_sarana` (`id_sarana`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `t_jadwal_ibfk_1` FOREIGN KEY (`id_sarana`) REFERENCES `t_sarana` (`id_sarana`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_jadwal_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `t_konfirmasi` */

CREATE TABLE `t_konfirmasi` (
  `id_reservasi` varchar(10) NOT NULL,
  `tgl_konfirmasi` datetime NOT NULL,
  `id_petugas` varchar(10) NOT NULL,
  PRIMARY KEY (`id_reservasi`),
  KEY `id_petugas` (`id_petugas`),
  CONSTRAINT `t_konfirmasi_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `t_petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `t_log_reservasi` */

CREATE TABLE `t_log_reservasi` (
  `id_reservasi` varchar(10) NOT NULL,
  `tgl_confirm` datetime NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `no_surat` varchar(10) NOT NULL,
  `kode_verifikasi` varchar(20) NOT NULL,
  KEY `id_reservasi` (`id_reservasi`),
  CONSTRAINT `t_log_reservasi_ibfk_1` FOREIGN KEY (`id_reservasi`) REFERENCES `t_reservasi` (`id_reservasi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `t_petugas` */

CREATE TABLE `t_petugas` (
  `id_petugas` varchar(10) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `id_sarana` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','upt') NOT NULL,
  PRIMARY KEY (`id_petugas`),
  KEY `id_sarana` (`id_sarana`),
  CONSTRAINT `t_petugas_ibfk_1` FOREIGN KEY (`id_sarana`) REFERENCES `t_sarana` (`id_sarana`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `t_reservasi` */

CREATE TABLE `t_reservasi` (
  `id_reservasi` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `id_sarana` varchar(10) NOT NULL,
  `tgl_reservasi` datetime NOT NULL,
  `tgl_booking_start` datetime NOT NULL,
  `tgl_booking_end` datetime NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_reservasi`),
  KEY `id_user` (`id_user`),
  KEY `id_sarana` (`id_sarana`),
  CONSTRAINT `t_reservasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_reservasi_ibfk_2` FOREIGN KEY (`id_sarana`) REFERENCES `t_sarana` (`id_sarana`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `t_sarana` */

CREATE TABLE `t_sarana` (
  `id_sarana` varchar(10) NOT NULL,
  `nama_sarana` varchar(30) NOT NULL,
  `jenis_olahraga` varchar(20) NOT NULL,
  `gambar` varchar(30) DEFAULT NULL,
  `geo_lat` float NOT NULL,
  `geo_lon` float NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sarana`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `t_user` */

CREATE TABLE `t_user` (
  `id_user` varchar(10) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `no_kontak` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
