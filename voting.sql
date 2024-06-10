/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.5.62-0ubuntu0.14.04.1 : Database - vote
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vote` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `vote`;

/*Table structure for table `icon` */

DROP TABLE IF EXISTS `icon`;

CREATE TABLE `icon` (
  `id_icon` int(100) NOT NULL AUTO_INCREMENT,
  `icon` varchar(100) NOT NULL DEFAULT 'entypo-',
  PRIMARY KEY (`id_icon`)
) ENGINE=MyISAM AUTO_INCREMENT=291 DEFAULT CHARSET=latin1;

/*Data for the table `icon` */

insert  into `icon`(`id_icon`,`icon`) values (1,'entypo-note'),(2,'entypo-logo-db'),(13,'entypo-music'),(12,'entypo-search'),(11,'entypo-flashlight'),(14,'entypo-mail'),(15,'entypo-heart'),(16,'entypo-heart-empty'),(17,'entypo-star'),(18,'entypo-star-empty'),(19,'entypo-user'),(20,'entypo-users'),(21,'entypo-user-add'),(22,'entypo-video'),(23,'entypo-picture'),(24,'entypo-camera'),(25,'entypo-layout'),(26,'entypo-menu'),(27,'entypo-check'),(28,'entypo-cancel'),(29,'entypo-cancel-circled'),(30,'entypo-cancel-squared'),(31,'entypo-plus'),(32,'entypo-plus-circled'),(33,'entypo-plus-squared'),(34,'entypo-minus'),(35,'entypo-minus-circled'),(36,'entypo-minus-squared'),(37,'entypo-help'),(38,'entypo-help-circled'),(39,'entypo-info'),(40,'entypo-info-circled'),(41,'entypo-back'),(42,'entypo-home'),(43,'entypo-link'),(44,'entypo-attach'),(45,'entypo-lock'),(46,'entypo-lock-open'),(47,'entypo-eye'),(48,'entypo-tag'),(49,'entypo-bookmark'),(50,'entypo-bookmarks'),(51,'entypo-flag'),(52,'entypo-thumbs-up'),(53,'entypo-thumbs-down'),(54,'entypo-download'),(55,'entypo-upload'),(56,'entypo-upload-cloud'),(57,'entypo-reply'),(58,'entypo-reply-all'),(59,'entypo-forward'),(60,'entypo-quote'),(61,'entypo-code'),(62,'entypo-export'),(63,'entypo-pencil'),(64,'entypo-feather'),(65,'entypo-print'),(66,'entypo-retweet'),(67,'entypo-keyboard'),(68,'entypo-comment'),(69,'entypo-chat'),(70,'entypo-bell'),(71,'entypo-attention'),(72,'entypo-alert'),(73,'entypo-vcard'),(74,'entypo-address'),(75,'entypo-location'),(76,'entypo-map'),(77,'entypo-direction'),(78,'entypo-compass'),(80,'entypo-cup'),(81,'entypo-trash'),(82,'entypo-doc'),(83,'entypo-docs'),(84,'entypo-doc-landscape'),(85,'entypo-doc-text'),(86,'entypo-doc-text-inv'),(87,'entypo-newspaper'),(88,'entypo-book-open'),(89,'entypo-book'),(90,'entypo-folder'),(91,'entypo-archive'),(92,'entypo-box'),(93,'entypo-rss'),(94,'entypo-phone'),(95,'entypo-cog'),(96,'entypo-tools'),(97,'entypo-share'),(98,'entypo-shareable'),(99,'entypo-basket'),(100,'entypo-bag'),(101,'entypo-calendar'),(102,'entypo-login'),(103,'entypo-logout'),(104,'entypo-mic'),(105,'entypo-mute'),(106,'entypo-sound'),(107,'entypo-volume'),(108,'entypo-clock'),(109,'entypo-hourglass'),(110,'entypo-lamp'),(111,'entypo-light-down'),(112,'entypo-light-up'),(113,'entypo-adjust'),(114,'entypo-block'),(115,'entypo-resize-full'),(116,'entypo-resize-small'),(117,'entypo-popup'),(118,'entypo-publish'),(119,'entypo-window'),(120,'entypo-arrow-combo'),(121,'entypo-down-circled'),(122,'entypo-left-circled'),(123,'entypo-right-circled'),(124,'entypo-up-circled'),(125,'entypo-down-open'),(126,'entypo-left-open'),(127,'entypo-right-open'),(128,'entypo-up-open'),(129,'entypo-down-open-mini'),(130,'entypo-left-open-mini'),(131,'entypo-right-open-mini'),(132,'entypo-up-open-mini'),(133,'entypo-down-open-big'),(134,'entypo-left-open-big'),(135,'entypo-right-open-big'),(136,'entypo-up-open-big'),(137,'entypo-down'),(138,'entypo-left'),(139,'entypo-right'),(140,'entypo-up'),(141,'entypo-down-dir'),(142,'entypo-left-dir'),(143,'entypo-right-dir'),(144,'entypo-up-dir'),(145,'entypo-down-bold'),(146,'entypo-left-bold'),(147,'entypo-right-bold'),(148,'entypo-up-bold'),(149,'entypo-down-thin'),(150,'entypo-left-thin'),(151,'entypo-right-thin'),(152,'entypo-note-beamed'),(153,'entypo-ccw'),(154,'entypo-cw'),(155,'entypo-arrows-ccw'),(156,'entypo-level-down'),(157,'entypo-level-up'),(158,'entypo-shuffle'),(159,'entypo-loop'),(160,'entypo-switch'),(161,'entypo-stop'),(162,'entypo-pause'),(163,'entypo-record'),(164,'entypo-to-end'),(165,'entypo-to-start'),(166,'entypo-fast-forward'),(167,'entypo-fast-backward'),(168,'entypo-progress-0'),(169,'entypo-progress-1'),(170,'entypo-progress-2'),(171,'entypo-progress-3'),(172,'entypo-target'),(173,'entypo-palette'),(174,'entypo-list'),(175,'entypo-list-add'),(176,'entypo-trophy'),(177,'entypo-signal'),(178,'entypo-battery'),(179,'entypo-back-in-time'),(180,'entypo-monitor'),(181,'entypo-mobile'),(182,'entypo-network'),(183,'entypo-cd'),(184,'entypo-inbox'),(185,'entypo-install'),(186,'entypo-globe'),(187,'entypo-cloud'),(188,'entypo-cloud-thunder'),(189,'entypo-flash'),(190,'entypo-moon'),(191,'entypo-flight'),(192,'entypo-paper-plane'),(193,'entypo-leaf'),(194,'entypo-lifebuoy'),(195,'entypo-mouse'),(196,'entypo-briefcase'),(197,'entypo-suitcase'),(198,'entypo-dot'),(199,'entypo-dot-2'),(200,'entypo-dot-3'),(201,'entypo-brush'),(202,'entypo-magnet'),(203,'entypo-infinity'),(204,'entypo-erase'),(205,'entypo-chart-pie'),(206,'entypo-chart-line'),(207,'entypo-chart-bar'),(208,'entypo-chart-area'),(209,'entypo-tape'),(210,'entypo-graduation-cap'),(211,'entypo-language'),(212,'entypo-ticket'),(213,'entypo-water'),(214,'entypo-droplet'),(215,'entypo-air'),(216,'entypo-credit-card'),(217,'entypo-floppy'),(218,'entypo-clipboard'),(219,'entypo-database'),(220,'entypo-drive'),(221,'entypo-bucket'),(222,'entypo-thermometer'),(223,'entypo-key'),(224,'entypo-flow-cascade'),(225,'entypo-flow-branch'),(226,'entypo-flow-line'),(227,'entypo-flow-parallel'),(228,'entypo-rocket'),(229,'entypo-gauge'),(230,'entypo-traffic-cone'),(231,'entypo-cc'),(232,'entypo-cc-by'),(233,'entypo-cc-nc'),(234,'entypo-cc-nc-eu'),(235,'entypo-cc-nc-jp'),(236,'entypo-cc-sa'),(237,'entypo-cc-nd'),(238,'entypo-cc-pd'),(239,'entypo-cc-zero'),(240,'entypo-cc-share'),(241,'entypo-cc-remix'),(242,'entypo-github'),(243,'entypo-github-circled'),(244,'entypo-flickr'),(245,'entypo-flickr-circled'),(246,'entypo-vimeo'),(247,'entypo-vimeo-circled'),(248,'entypo-twitter'),(249,'entypo-twitter-circled'),(250,'entypo-facebook'),(251,'entypo-facebook-circled'),(252,'entypo-facebook-squared'),(253,'entypo-gplus'),(254,'entypo-gplus-circled'),(255,'entypo-pinterest'),(256,'entypo-pinterest-circled'),(257,'entypo-tumblr'),(258,'entypo-tumblr-circled'),(259,'entypo-linkedin'),(260,'entypo-linkedin-circled'),(261,'entypo-dribbble'),(262,'entypo-dribbble-circled'),(263,'entypo-stumbleupon'),(264,'entypo-stumbleupon-circled'),(265,'entypo-lastfm'),(266,'entypo-lastfm-circled'),(267,'entypo-rdio'),(268,'entypo-rdio-circled'),(269,'entypo-spotify'),(270,'entypo-spotify-circled'),(271,'entypo-qq'),(272,'entypo-instagram'),(273,'entypo-dropbox'),(274,'entypo-evernote'),(275,'entypo-flattr'),(276,'entypo-skype'),(277,'entypo-skype-circled'),(278,'entypo-renren'),(279,'entypo-sina-weibo'),(280,'entypo-paypal'),(281,'entypo-picasa'),(282,'entypo-soundcloud'),(283,'entypo-mixi'),(284,'entypo-behance'),(285,'entypo-google-circles'),(286,'entypo-vkontakte'),(287,'entypo-smashing'),(288,'entypo-sweden'),(289,'entypo-db-shape'),(290,'entypo-up-thin');

/*Table structure for table `identitas` */

DROP TABLE IF EXISTS `identitas`;

CREATE TABLE `identitas` (
  `id_identitas` int(5) NOT NULL AUTO_INCREMENT,
  `nama_pemilik` varchar(100) DEFAULT NULL,
  `judul_website` varchar(100) DEFAULT NULL,
  `nama_website` varchar(100) NOT NULL,
  `alamat_website` varchar(100) NOT NULL,
  `meta_deskripsi` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `email_admin` varchar(100) DEFAULT NULL,
  `password_email` varchar(100) DEFAULT NULL,
  `email_cc` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `twitter_widget` varchar(100) DEFAULT NULL,
  `googleplus` varchar(100) DEFAULT NULL,
  `googlemap` varchar(100) DEFAULT NULL,
  `favicon` varchar(50) NOT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_identitas`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `identitas` */

insert  into `identitas`(`id_identitas`,`nama_pemilik`,`judul_website`,`nama_website`,`alamat_website`,`meta_deskripsi`,`meta_keyword`,`email_admin`,`password_email`,`email_cc`,`facebook`,`twitter`,`twitter_widget`,`googleplus`,`googlemap`,`favicon`,`youtube`) values (1,'Vote','vote','vote','https://sistekin.untag-sby.ac.id/vote','Universitas 17 Agustus 1945 Surabaya adalah perguruan tinggi swasta di Surabaya, Indonesia yang didirikan pada 17 Agustus 1958.','universitas, untag, 17, agustus, swasta, terbaik, 1945, surabaya, tertua, teknik, informatika,vote','vote@untag-sby.ac.id','','','','','','','','favicon.ico',NULL);

/*Table structure for table `kandidat` */

DROP TABLE IF EXISTS `kandidat`;

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `ket` text,
  `gambar` varchar(100) DEFAULT NULL,
  `t_time` datetime NOT NULL,
  `t_user` varchar(100) NOT NULL,
  `periode` int(11) NOT NULL,
  PRIMARY KEY (`id_kandidat`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `kandidat` */

insert  into `kandidat`(`id_kandidat`,`nama`,`ket`,`gambar`,`t_time`,`t_user`,`periode`) values (3,'Kandidat 1','<p><strong>Visi:</strong></p>\r\n\r\n<p>Terwujudnya himpunan yang unggul sebagai pelopor inovasi dan pengembangan sistem teknologi informasi. Sekaligus menjadi wadah untuk mengembangkan potensi mahasiswa dan mampu berkontribusi bagi masyarakat.</p>\r\n\r\n<p><strong>Misi:</strong></p>\r\n\r\n<ol>\r\n	<li>Menyelenggarakan kegiatan akademik yang berkualitas di bidang sistem dan teknologi informasi serta menjalin kerja sama dengan industri dan lembaga profesional untuk meningkatkan peluang kerja dan pengembangan karir mahasiswa</li>\r\n	<li>Memberikan wadah bagi mahasiswa untuk mengembangkan minat dan bakat di bidang akademik dan non akademik dan mendorong mahasiswa untuk berwirausaha di bidang sistem dan teknologi informasi</li>\r\n</ol>\r\n','K1.jpg','2023-12-04 21:07:50','1',1),(4,'Kadidat 2','<p><strong>Visi:</strong></p>\r\n\r\n<p>Mewujudkan himpunan Sistem dan Teknologi Informasi (Sistekin) sebagai himpunan yang efektif disertai bukti yang valid, menerapkan peningkatan, penyesuaian dan penyelarasan terhadap himpunan Sistem dan Teknologi Informasi (Sistekin) dengan bukti yang valid juga.</p>\r\n\r\n<p><strong>Misi:</strong></p>\r\n\r\n<ol>\r\n	<li>Menyediakan tempat berkembangnya skill mahasiswa dibidang teknologi informasi dengan cara yang efektif</li>\r\n	<li>Menyelenggarakan pendidikan Sistem dan Teknologi Informasi yang berkualitas</li>\r\n	<li>Meningkatkan proses terkait standar mahasiswa secara berkelanjutan untuk mencapai kualitas prodi yang lebih baik</li>\r\n	<li>Mendirikan pelatihan yang membahas teknologi informasi untuk mahasiswa</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n','K2.jpg','2023-12-04 14:59:22','1',1),(7,'Kandidat 3','<p><strong>Visi:</strong></p>\r\n\r\n<ol>\r\n	<li>Menjadikan HIMASI (Himpunan Mahasiswa Sistem Informasi) untuk mengoptimalkan minat bakat dan potensi yang dimiliki mahasiswa Sistem Informasi Universitas 17 Agustus 1945 Surabaya</li>\r\n	<li>Menjalin hubungan yang baik dengan civitas serta organisasi atau lembaga lainnya khususnya di lingkungan kampus&nbsp;Universitas 17 Agustus 1945 Surabaya</li>\r\n	<li>Meningkatkan rasa kebersamaan dan kepedulian antar mahasiswa Sistekin&nbsp;Universitas 17 Agustus 1945 Surabaya</li>\r\n	<li>Menciptakan lingkungan kepengurusan dalam berorganisasi dengan suasana yang nyaman berdasarkan 3S (Santai, Serius, Selesai)</li>\r\n</ol>\r\n\r\n<p><strong>Misi:</strong></p>\r\n\r\n<p>Menjadikan sebuah himpunan mahasiswa Sistem Informasi sebagai ruang untuk berekspresi, berinovasi untuk menciptakan lingkungan yang solidaritas, dinamis, dan inklusif serta menjadi penyalur bakat bagi mahasiswa Sistekin</p>\r\n','IMG_6148_(1)1.jpg','2023-12-05 09:03:35','1',1);

/*Table structure for table `level` */

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(100) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `level` */

insert  into `level`(`id_level`,`level`) values (1,'admin'),(2,'voter');

/*Table structure for table `opsi` */

DROP TABLE IF EXISTS `opsi`;

CREATE TABLE `opsi` (
  `id_opsi` int(5) NOT NULL AUTO_INCREMENT,
  `opsi` varchar(1) NOT NULL,
  `jenis` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id_opsi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `opsi` */

insert  into `opsi`(`id_opsi`,`opsi`,`jenis`) values (1,'Y','Tutup'),(2,'N','Buka');

/*Table structure for table `periode` */

DROP TABLE IF EXISTS `periode`;

CREATE TABLE `periode` (
  `id_periode` int(11) NOT NULL AUTO_INCREMENT,
  `ket_periode` varchar(100) NOT NULL,
  `t_time` datetime DEFAULT NULL,
  `t_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `periode` */

insert  into `periode`(`id_periode`,`ket_periode`,`t_time`,`t_user`) values (1,'Periode Pemilihan ke 1','2023-12-01 10:46:07',NULL);

/*Table structure for table `pilih` */

DROP TABLE IF EXISTS `pilih`;

CREATE TABLE `pilih` (
  `id_kandidat` int(11) NOT NULL,
  `periode` int(11) NOT NULL,
  `t_time` datetime NOT NULL,
  `t_user` varchar(100) NOT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `browser_version` varchar(255) DEFAULT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`periode`,`t_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pilih` */

/*Table structure for table `seting` */

DROP TABLE IF EXISTS `seting`;

CREATE TABLE `seting` (
  `id_seting` int(11) NOT NULL AUTO_INCREMENT,
  `periode` int(11) NOT NULL,
  `buka` int(11) NOT NULL DEFAULT '1',
  `tampil` int(11) NOT NULL DEFAULT '1',
  `t_time` datetime NOT NULL,
  `t_user` varchar(100) NOT NULL,
  PRIMARY KEY (`id_seting`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `seting` */

insert  into `seting`(`id_seting`,`periode`,`buka`,`tampil`,`t_time`,`t_user`) values (1,1,1,1,'2024-05-27 17:23:08','1');

/*Table structure for table `usersadm` */

DROP TABLE IF EXISTS `usersadm`;

CREATE TABLE `usersadm` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL DEFAULT 'voter',
  `blokir` enum('N','Y') NOT NULL DEFAULT 'N',
  `id_session` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `telepon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_login`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=latin1;

/*Data for the table `usersadm` */

insert  into `usersadm`(`id_login`,`username`,`password`,`nama_lengkap`,`email`,`level`,`blokir`,`id_session`,`tanggal`,`gambar`,`telepon`) values (1,'administrator','21232f297a57a5a743894a0e4a801fc3','administrator','','admin','N','administrator','2018-10-08',NULL,NULL),(96,'user1','21232f297a57a5a743894a0e4a801fc3','user1','','voter','N',NULL,'0000-00-00',NULL,NULL),(97,'user2','21232f297a57a5a743894a0e4a801fc3','user2','','voter','N',NULL,'0000-00-00',NULL,NULL),(98,'user3','21232f297a57a5a743894a0e4a801fc3','user3','','voter','N',NULL,'0000-00-00',NULL,NULL),(99,'user4','3f02ebe3d7929b091e3d8ccfde2f3bc6','user4','','voter','N','user','2023-12-04',NULL,NULL),(100,'user5','0a791842f52a0acfbb3a783378c066b8','user5','','voter','N','user','2023-12-04',NULL,NULL);

/*Table structure for table `v_hasil_vote` */

DROP TABLE IF EXISTS `v_hasil_vote`;

/*!50001 DROP VIEW IF EXISTS `v_hasil_vote` */;
/*!50001 DROP TABLE IF EXISTS `v_hasil_vote` */;

/*!50001 CREATE TABLE  `v_hasil_vote`(
 `totalsuara` bigint(21) ,
 `id_kandidat` int(11) ,
 `nama` varchar(255) ,
 `periode` int(11) ,
 `gambar` varchar(100) 
)*/;

/*View structure for view v_hasil_vote */

/*!50001 DROP TABLE IF EXISTS `v_hasil_vote` */;
/*!50001 DROP VIEW IF EXISTS `v_hasil_vote` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_hasil_vote` AS select count(`pilih`.`id_kandidat`) AS `totalsuara`,`pilih`.`id_kandidat` AS `id_kandidat`,`kandidat`.`nama` AS `nama`,`kandidat`.`periode` AS `periode`,`kandidat`.`gambar` AS `gambar` from (`pilih` left join `kandidat` on((`kandidat`.`id_kandidat` = `pilih`.`id_kandidat`))) group by `pilih`.`id_kandidat` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
