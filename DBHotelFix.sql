/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - db_hotel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_hotel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_hotel`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(4,'2023_12_12_090407_create_slider_table',2),
(5,'2023_12_12_130707_create_testimoni_table',3),
(6,'2023_12_13_021503_create_galeri_table',4),
(7,'2023_12_15_061119_create_room_table',5),
(9,'2023_12_15_133948_create_blog_table',6);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `tb_blog` */

DROP TABLE IF EXISTS `tb_blog`;

CREATE TABLE `tb_blog` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_blog` varchar(255) NOT NULL,
  `tema_blog` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_blog` */

insert  into `tb_blog`(`id`,`judul_blog`,`tema_blog`,`foto`,`deskripsi`,`created_at`,`updated_at`) values 
(1,'Copper Canyon','Hiking','private/storage/blog/c4ca4238a0b923820dcc509a6f75849b.jpg','Super Fun Hiking','2023-12-15 14:29:46','2023-12-15 14:29:46'),
(2,'Copper Canyon','Hiking','private/storage/blog/c81e728d9d4c2f636f067f89cc14862c.jpg','Fun Hiking','2023-12-15 15:05:00','2023-12-15 15:05:00'),
(3,'Copper Canyon','Hiking','private/storage/blog/eccbc87e4b5ce2fe28308fd9f2a7baf3.jpg','Fun Hiking','2023-12-15 15:05:14','2023-12-15 15:05:14'),
(4,'Copper Canyon','Hiking','private/storage/blog/a87ff679a2f3e71d9181a67b7542122c.jpg','Fun Hiking','2023-12-15 15:05:33','2023-12-15 15:05:33'),
(5,'Copper Canyon','Hiking','private/storage/blog/e4da3b7fbbce2345d7772b0674a318d5.jpg','Fun Hiking','2023-12-15 15:05:54','2023-12-15 15:05:54'),
(6,'Copper Canyon','Hiking','private/storage/blog/1679091c5a880faf6fb5e6087eb1b2dc.jpg','Fun Hiking','2023-12-15 15:06:14','2023-12-15 15:06:14'),
(7,'Copper Canyon','Hiking','private/storage/blog/8f14e45fceea167a5a36dedd4bea2543.jpg','Fun Hiking','2023-12-15 15:06:30','2023-12-15 15:06:30');

/*Table structure for table `tb_galeri` */

DROP TABLE IF EXISTS `tb_galeri`;

CREATE TABLE `tb_galeri` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_galeri` */

insert  into `tb_galeri`(`id`,`judul`,`foto`,`created_at`,`updated_at`) values 
(1,'Room Deluxe','private/storage/galeri/c4ca4238a0b923820dcc509a6f75849b.jpg','2023-12-13 02:39:46','2023-12-13 02:39:46'),
(8,'Room Luxury','private/storage/galeri/c9f0f895fb98ab9159f51fd0297e236d.jpg','2023-12-13 04:07:11','2023-12-13 04:07:11'),
(10,'Room Luxury','private/storage/galeri/d3d9446802a44259755d38e6d163e820.jpg','2023-12-13 04:21:33','2023-12-13 04:21:33'),
(11,'Room Deluxe','private/storage/galeri/6512bd43d9caa6e02c990b0a82652dca.jpg','2023-12-13 09:02:26','2023-12-13 09:02:26');

/*Table structure for table `tb_room` */

DROP TABLE IF EXISTS `tb_room`;

CREATE TABLE `tb_room` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `tipe_bed` varchar(255) NOT NULL,
  `servis` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_room` */

insert  into `tb_room`(`id`,`judul`,`foto`,`harga`,`ukuran`,`kapasitas`,`tipe_bed`,`servis`,`deskripsi`,`created_at`,`updated_at`) values 
(1,'Premium King Room','private/storage/roomlist/c4ca4238a0b923820dcc509a6f75849b.jpg','159','30','3','King Beds','Wifi, TV, Refrigerator','Exclusive Room','2023-12-15 07:56:01','2023-12-15 07:56:01'),
(2,'Deluxe Room','private/storage/roomlist/c81e728d9d4c2f636f067f89cc14862c.jpg','200','25','4','King Beds','Wifi, TV, Refrigerator','Nice Room','2023-12-15 08:46:24','2023-12-15 08:46:24'),
(3,'Deluxe Room','private/storage/roomlist/eccbc87e4b5ce2fe28308fd9f2a7baf3.jpg','200','25','4','King Beds','Wifi, TV, Refrigerator','Nice Room','2023-12-15 08:46:52','2023-12-15 08:46:52'),
(4,'Deluxe Room','private/storage/roomlist/a87ff679a2f3e71d9181a67b7542122c.jpg','200','25','4','King Beds','Wifi, TV, Refrigerator','Nice Room','2023-12-15 08:49:36','2023-12-15 08:49:36'),
(5,'Deluxe Room','private/storage/roomlist/e4da3b7fbbce2345d7772b0674a318d5.jpg','200','25','4','King Beds','Wifi, TV, Refrigerator','Nice Room','2023-12-15 08:49:53','2023-12-15 08:49:53'),
(6,'Deluxe Room','private/storage/roomlist/1679091c5a880faf6fb5e6087eb1b2dc.jpg','200','25','4','King Beds','Wifi, TV, Refrigerator','Nice Room','2023-12-15 08:50:11','2023-12-15 08:50:11'),
(7,'Deluxe Room','private/storage/roomlist/8f14e45fceea167a5a36dedd4bea2543.jpg','200','25','4','King Beds','Wifi, TV, Refrigerator','Nice Room','2023-12-15 08:50:31','2023-12-15 08:50:31');

/*Table structure for table `tb_slider` */

DROP TABLE IF EXISTS `tb_slider`;

CREATE TABLE `tb_slider` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_slider` */

insert  into `tb_slider`(`id`,`judul`,`foto`,`created_at`,`updated_at`) values 
(1,'Slider 1','private/storage/slider/c4ca4238a0b923820dcc509a6f75849b.jpg','2023-12-12 09:39:42','2023-12-12 09:39:42'),
(2,'Slider 2','private/storage/slider/c81e728d9d4c2f636f067f89cc14862c.jpg','2023-12-12 09:51:58','2023-12-12 09:51:58'),
(3,'Slider 3','private/storage/slider/eccbc87e4b5ce2fe28308fd9f2a7baf3.jpg','2023-12-12 09:54:08','2023-12-12 09:54:08');

/*Table structure for table `tb_testimoni` */

DROP TABLE IF EXISTS `tb_testimoni`;

CREATE TABLE `tb_testimoni` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `testimonial` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tb_testimoni` */

insert  into `tb_testimoni`(`id`,`name`,`country`,`testimonial`,`created_at`,`updated_at`) values 
(1,'Satyananda Gautama','Indonesia','Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio id iste molestias exercitationem quis explicabo odit voluptates, sapiente veritatis dolorum minima maiores mollitia quam dolores reiciendis dignissimos earum consectetur nesciunt.','2023-12-12 13:51:11','2023-12-12 13:53:36'),
(2,'Andi Dharmawan','Malaysia','Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim necessitatibus, quibusdam, maxime eaque tenetur quidem, accusamus sapiente sed quas eum fuga inventore distinctio. Modi impedit aspernatur, mollitia molestiae assumenda praesentium.lo...','2023-12-12 14:12:27','2023-12-13 15:27:41');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'admin','gedesatyananda@gmail.com',NULL,'$2y$10$4GBErPA060UmADy27XQ4neKkJg5HboP/AntF7s4uv8/Bn6Cq9N5vW',NULL,'2023-12-12 08:16:45','2023-12-12 08:16:45'),
(2,'I Gede Satyananda Gautama','satyananda@gmail',NULL,'$2y$10$SLDw6Hf05bAQhnZM7uB.o.ZVV/jTVEp5oY2CbQUyN08M4IybgwULi',NULL,'2023-12-12 08:17:51','2023-12-12 08:17:51'),
(3,'Admin','satya@gmail.com',NULL,'$2y$10$XPG2HeoU87a8xpAPR0cn1esDoPvszZnkLuM.c/fTY6Rbkq4H.se96',NULL,'2023-12-12 08:18:47','2023-12-12 08:18:47');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
