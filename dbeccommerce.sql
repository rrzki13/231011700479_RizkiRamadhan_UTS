/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `products` (`id`, `name`, `price`, `type`, `image`) VALUES
(1, 'Chuck 70 Luxe', 1200000, 'UNISEX HIGH TOP TOE', '3.jpg');
INSERT INTO `products` (`id`, `name`, `price`, `type`, `image`) VALUES
(2, 'Chunk 70s', 950000, 'Taylor', '1.jpg');
INSERT INTO `products` (`id`, `name`, `price`, `type`, `image`) VALUES
(3, 'Run Star Motion CX Platform Canvas', 800000, 'All Star', '5.jpg');
INSERT INTO `products` (`id`, `name`, `price`, `type`, `image`) VALUES
(4, 'Converse Chunk 70s', 1500000, 'All Star', '4.webp'),
(5, 'Converse x Transformers Chuck Taylor All Star', 2500000, 'All Star', '2.jpg'),
(6, 'Chuck Taylor All Star Tremont', 720000, 'UNISEX HIGH TOP TOE', '7.jpg'),
(7, 'Converse Taylor 90s', 900000, 'UNISEX HIGH TOP TOE', '6.jpg'),
(8, 'AS-1 Pro', 1100000, 'Pro', '8.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;