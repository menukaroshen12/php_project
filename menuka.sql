-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.37 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for papa
CREATE DATABASE IF NOT EXISTS `papa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `papa`;

-- Dumping structure for table papa.booking_schedule
CREATE TABLE IF NOT EXISTS `booking_schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `booking_code` varchar(50) NOT NULL,
  `status` enum('confirmed','pending','cancelled') NOT NULL DEFAULT 'confirmed',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table papa.booking_schedule: ~1 rows (approximately)
DELETE FROM `booking_schedule`;
INSERT INTO `booking_schedule` (`id`, `date`, `start_time`, `end_time`, `name`, `mobile`, `booking_code`, `status`, `created_at`, `updated_at`) VALUES
	(21, '2025-04-03', '16:00:00', '17:00:00', 'menuka roshen', '0758545838', 'BK-20250402-385C7D', 'confirmed', '2025-04-02 05:20:19', '2025-04-02 05:20:19');

-- Dumping structure for table papa.fixed_booking
CREATE TABLE IF NOT EXISTS `fixed_booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `booking_code` varchar(50) NOT NULL,
  `status` enum('confirmed','pending','cancelled') NOT NULL DEFAULT 'confirmed',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table papa.fixed_booking: ~0 rows (approximately)
DELETE FROM `fixed_booking`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
