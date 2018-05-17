-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5278
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for perumahan
CREATE DATABASE IF NOT EXISTS `perumahan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `perumahan`;

-- Dumping structure for table perumahan.llx_afiliasi
CREATE TABLE IF NOT EXISTS `llx_afiliasi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_user` int(10) unsigned DEFAULT NULL,
  `phone_ref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_afi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_status_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_status_afi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redeem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table perumahan.llx_afiliasi: ~3 rows (approximately)
/*!40000 ALTER TABLE `llx_afiliasi` DISABLE KEYS */;
INSERT INTO `llx_afiliasi` (`id`, `fk_user`, `phone_ref`, `phone_afi`, `fk_status_ref`, `fk_status_afi`, `bonus_ref`, `redeem`, `created_at`, `updated_at`) VALUES
	(5, NULL, '089636183021', '089644444425', '5', '2', '1', '1', '2018-05-17 14:40:17', '2018-05-17 16:22:09'),
	(6, NULL, '089636183021', '089644444426', '5', '2', '1', '1', '2018-05-17 16:10:23', '2018-05-17 16:22:13'),
	(7, NULL, '089636183021', '089644444427', '5', '2', '1', '1', '2018-05-17 16:10:42', '2018-05-17 16:22:16');
/*!40000 ALTER TABLE `llx_afiliasi` ENABLE KEYS */;

-- Dumping structure for table perumahan.llx_societe
CREATE TABLE IF NOT EXISTS `llx_societe` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table perumahan.llx_societe: ~4 rows (approximately)
/*!40000 ALTER TABLE `llx_societe` DISABLE KEYS */;
INSERT INTO `llx_societe` (`id`, `phone`, `status_client`, `created_at`, `updated_at`) VALUES
	(1, '089636183021', '5', '2018-05-16 14:40:54', '2018-05-16 14:41:16'),
	(2, '089644444425', '2', '2018-05-17 11:41:22', '2018-05-17 11:41:22'),
	(3, '089644444426', '2', '2018-05-17 16:10:03', '2018-05-17 16:10:03'),
	(4, '089644444427', '2', '2018-05-17 16:10:13', '2018-05-17 16:10:13');
/*!40000 ALTER TABLE `llx_societe` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
