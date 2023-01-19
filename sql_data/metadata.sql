-- --------------------------------------------------------
-- Host:                         192.168.1.70
-- Server version:               10.6.10-MariaDB-log - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table laravel_crud_test.metadata
CREATE TABLE IF NOT EXISTS `metadata` (
  `_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `_oldid` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `_newid` int(11) NOT NULL AUTO_INCREMENT,
  `contributor` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identifier` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rights` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`_newid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel_crud_test.metadata: ~21 rows (approximately)
INSERT INTO `metadata` (`_id`, `_oldid`, `_newid`, `contributor`, `creator`, `description`, `format`, `identifier`, `language`, `publisher`, `relation`, `rights`, `source`, `subject`, `type`) VALUES
	('5e88daac27c9bd3223eafa7f', '5e88daac27c9bd3223eafa7f', 1, '', 'Wendy Giangiorgi', '', '', '', '', '', '', '', '', '', ''),
	('5e88ddbc27c9bd3223eafaa6', '5e88ddbc27c9bd3223eafaa6', 2, '', 'Amy Wagliardo', '', '', '', '', '', '', '', '', '', ''),
	('5e8a1ff5a903963fa7bcf6d8', '5e8a1ff5a903963fa7bcf6d8', 3, '', 'Mary and Steve Saville-Dauer', '', '', '', '', '', '', '', '', '', ''),
	('5e8a2063a903963fa7bcf6e0', '5e8a2063a903963fa7bcf6e0', 4, '', 'Mary and Steve Saville-Dauer', '', '', '', '', '', '', '', '', '', ''),
	('5e8a251ca903963fa7bcf73a', '5e8a251ca903963fa7bcf73a', 5, '', 'Emily Watts', '', '', '', '', '', '', '', '', '', ''),
	('5e8a2837a903963fa7bcf75d', '5e8a2837a903963fa7bcf75d', 6, '', 'Emily Watts', '', '', '', '', '', '', '', '', '', ''),
	('5e8a3520a903963fa7bcf81e', '5e8a3520a903963fa7bcf81e', 7, '', 'Ellen Peter', '', '', '', '', '', '', '', '', '', ''),
	('5e8a3537a903963fa7bcf828', '5e8a3537a903963fa7bcf828', 8, '', 'Ann Vertovec', '', '', '', '', '', '', '', '', '', ''),
	('5e8b82ea1ae89658cf8fdab6', '5e8b82ea1ae89658cf8fdab6', 9, '', 'Margaret Walker', '', '', '', '', '', '', '', '', '', ''),
	('5e90d442bf145b53a38c45b6', '5e90d442bf145b53a38c45b6', 10, '', 'Maddie Dugan', '', '', '', '', '', '', '', '', '', ''),
	('5e9211153409066117dca049', '5e9211153409066117dca049', 11, '', 'Frank Sibley', '', '', '', '', '', '', '', '', '', ''),
	('5e94a7443074e20bd232d861', '5e94a7443074e20bd232d861', 12, '', 'Jennifer Randolph', '', '', '', '', '', '', '', '', '', ''),
	('5e97673fa825962fb754a440', '5e97673fa825962fb754a440', 13, '', 'Ralph Behrens', '', '', '', '', '', '', '', '', '', ''),
	('5e98b44a2f118533e7569cf4', '5e98b44a2f118533e7569cf4', 14, '', 'Angelica Gail Sturm', '', '', '', '', '', '', '', '', '', ''),
	('5e9b4e026272ae4fabfa82ab', '5e9b4e026272ae4fabfa82ab', 15, '', 'Laurie Stein', '', '', '', '', '', '', '', '', '', ''),
	('5ea2614ed136f978069174a7', '5ea2614ed136f978069174a7', 16, 'Brenda Dick', '', '', '', '', '', '', '', '', '', '', ''),
	('5ea5ec14d136f97806917903', '5ea5ec14d136f97806917903', 17, '', 'Ralph Behrens', '', '', '', '', '', '', '', '', '', ''),
	('5eb77bb4695c7f655f2b7ed0', '5eb77bb4695c7f655f2b7ed0', 18, '', 'Eileen Looby Weber', '', '', '', '', '', '', '', '', '', ''),
	('5eb77bc8695c7f655f2b7ed8', '5eb77bc8695c7f655f2b7ed8', 19, '', 'Eileen Looby Weber', '', '', '', '', '', '', '', '', '', ''),
	('5f03d6d5b728ea72b3584e14', '5f03d6d5b728ea72b3584e14', 20, '', '', '', '', '', '', 'Chicago Tribune', '', '', 'ProQuest Historical Newspapers', '', ''),
	('60089ead27f3740017c919ec', '60089ead27f3740017c919ec', 21, 'Ashley Canner', '', '', '', '', '', '', '', '', '', '', '');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
