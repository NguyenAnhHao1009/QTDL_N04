-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: eldercoffee_db
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accounts` (
  `account_id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (4,'hao_user','user@gmail.com','202cb962ac59075b964b07152d234b70','user'),(5,'hao_admin','admin@gmail.com','202cb962ac59075b964b07152d234b70','admin'),(101,'Nguyễn Thị Hương','huongnt@example.com','password1','user'),(102,'Trần Văn Đức','ductv@example.com','password2','user'),(103,'Lê Thị Lan','lanlt@example.com','password3','user'),(104,'Phạm Văn Long','longpv@example.com','password4','user'),(105,'Hoàng Thị Mai','maith@example.com','password5','user'),(106,'Đặng Văn Quân','quandv@example.com','password6','user'),(107,'Vũ Thị Hà','havt@example.com','password7','user'),(108,'Ngô Văn Trung','trungnv@example.com','password8','user'),(109,'Bùi Thị Ngọc','ngocbt@example.com','password9','user'),(110,'Trịnh Văn Anh','anhtv@example.com','password10','user');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Bánh'),(2,'Trà'),(3,'Cà phê'),(4,'Nước ngọt'),(5,'Sinh tố'),(6,'Nước ép'),(7,'Sữa chua'),(8,'Rượu'),(9,'Chè'),(10,'Cháo'),(11,'Hủ tiếu');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (99,'Nguyễn Văn A','0123456789'),(100,'Trần Thị B','0987654321'),(101,'Lê Văn C','036987123'),(102,'Phạm Thị D','0321654987'),(103,'Hoàng Văn E','0111222333'),(104,'Vũ Thị F','0444555666'),(105,'Ngô Văn G','0777888999'),(106,'Bùi Thị H','0999888777'),(107,'Đặng Văn I','0456123123'),(108,'Đỗ Thị K','0987456321'),(109,'Dương Văn L','0987123456'),(110,'Lý Thị M','0978456321'),(111,'Nguyễn Văn N','0123456789'),(112,'Trần Thị O','0987654321'),(113,'Lê Văn P','036987123'),(114,'Phạm Thị Q','0321654987'),(115,'Hoàng Văn R','0111222333'),(116,'Vũ Thị S','0444555666'),(117,'Ngô Văn T','0777888999'),(118,'Bùi Thị U','0999888777'),(119,'Đặng Văn V','0456123123'),(120,'Đỗ Thị W','0987456321'),(121,'Dương Văn X','0987123456'),(122,'Lý Thị Y','0978456321'),(123,'Nguyễn Văn Z','0123456789'),(124,'Trần Thị Á','0987654321'),(125,'Lê Văn Â','036987123'),(126,'Phạm Thị Ă','0321654987'),(127,'Hoàng Văn Ơ','0111222333'),(128,'Trần Đức Hữu','0777866788');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice_details`
--

DROP TABLE IF EXISTS `invoice_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoice_details` (
  `detail_id` int NOT NULL AUTO_INCREMENT,
  `invoice_id` int DEFAULT NULL,
  `item_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  PRIMARY KEY (`detail_id`),
  KEY `invoice_id` (`invoice_id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `invoice_details_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`invoice_id`),
  CONSTRAINT `invoice_details_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice_details`
--

LOCK TABLES `invoice_details` WRITE;
/*!40000 ALTER TABLE `invoice_details` DISABLE KEYS */;
INSERT INTO `invoice_details` VALUES (117,109,73,2),(118,109,74,1),(119,110,75,3),(120,110,76,2),(121,111,77,1),(122,111,78,1),(123,112,79,4),(124,112,80,3),(125,113,81,2),(126,113,82,1),(127,114,83,3),(128,114,84,2),(129,115,85,1),(130,115,86,1),(131,116,87,5),(132,116,88,3),(133,117,89,2),(134,117,90,1),(135,118,91,4),(136,118,92,2),(137,119,93,1),(138,119,94,1),(139,120,95,3),(140,120,96,2),(141,121,97,2),(142,121,98,1),(143,122,99,4),(144,122,100,3),(145,123,101,2),(146,123,102,1),(147,124,103,1),(148,124,104,1),(149,125,105,2),(150,125,106,1),(151,126,107,3),(152,126,108,2),(153,127,109,1),(154,127,110,1),(155,128,111,5),(156,128,112,3),(157,129,113,2),(158,129,114,1),(159,130,115,1),(160,130,116,1),(161,139,95,1),(162,139,96,1);
/*!40000 ALTER TABLE `invoice_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoices` (
  `invoice_id` int NOT NULL AUTO_INCREMENT,
  `account_id` int DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `creation_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `discount` int DEFAULT '0',
  `total` int DEFAULT '0',
  PRIMARY KEY (`invoice_id`),
  KEY `account_id` (`account_id`),
  KEY `customer_id` (`customer_id`),
  CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`account_id`),
  CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices`
--

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
INSERT INTO `invoices` VALUES (109,101,99,'2024-01-01 01:30:00',0,550000),(110,102,100,'2024-01-02 02:15:00',0,240000),(111,103,101,'2024-01-03 03:00:00',0,75000),(112,104,102,'2024-01-04 03:45:00',0,81000),(113,105,103,'2024-01-05 04:30:00',0,95000),(114,106,104,'2024-01-06 05:15:00',0,131000),(115,107,105,'2024-01-07 06:00:00',0,85000),(116,108,106,'2024-01-08 06:45:00',0,2550000),(117,109,107,'2024-01-09 07:30:00',0,125000),(118,110,108,'2024-01-10 08:15:00',0,190000),(119,101,109,'2024-01-11 09:00:00',0,85000),(120,102,110,'2024-01-12 09:45:00',0,135000),(121,103,111,'2024-01-13 10:30:00',0,125000),(122,104,112,'2024-01-14 11:15:00',0,260000),(123,105,113,'2024-01-15 12:00:00',0,35000),(124,106,114,'2024-01-16 12:45:00',0,65000),(125,109,115,'2024-01-17 13:30:00',0,78000),(126,108,116,'2024-01-18 14:15:00',0,210000),(127,109,117,'2024-01-19 15:00:00',0,650000),(128,110,118,'2024-01-20 15:45:00',0,335000),(129,101,119,'2024-01-21 16:30:00',0,95000),(130,102,120,'2024-01-21 17:15:00',0,85000),(136,101,126,'2024-01-27 21:45:00',0,400000),(137,102,127,'2024-01-28 22:30:00',0,270000),(138,103,99,'2024-01-29 23:15:00',0,320000),(139,5,128,'2024-04-02 16:59:54',12,114400);
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `items` (
  `item_id` int NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `category_id` int DEFAULT NULL,
  `description` text,
  `unit_price` decimal(10,2) DEFAULT NULL,
  `added_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`item_id`),
  KEY `fk_category_id` (`category_id`),
  CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (73,'Bánh Trung Thu Givral',1,'Bánh trung thu với nhân kem hạt dưa, ngon và thơm.',200000.00,'2024-04-02 16:42:35'),(74,'Bánh Pía Tân Huê',1,'Bánh pía với nhân đậu xanh, một món đặc sản của Huế.',150000.00,'2024-04-02 16:42:35'),(75,'Trà Lipton',2,'Trà Lipton vị cam, một lựa chọn sảng khoái cho mỗi buổi sáng.',50000.00,'2024-04-02 16:42:35'),(76,'Trà Sữa Thái Xanh',2,'Trà sữa Thái vị dừa, thơm ngon và bổ dưỡng.',45000.00,'2024-04-02 16:42:35'),(77,'Cà Phê Sữa Đá',3,'Cà phê sữa đá nguyên chất, đậm đà và đầy năng lượng.',35000.00,'2024-04-02 16:42:35'),(78,'Cà Phê Phin',3,'Cà phê phin pha đậm đà, hương vị đặc trưng của Việt Nam.',40000.00,'2024-04-02 16:42:35'),(79,'Nước Ngọt Coca Cola',4,'Nước ngọt Coca Cola 330ml, sự lựa chọn phổ biến của mọi người.',12000.00,'2024-04-02 16:42:35'),(80,'Nước Ngọt Pepsi',4,'Nước ngọt Pepsi 330ml, vị ngọt mát và sảng khoái.',11000.00,'2024-04-02 16:42:35'),(81,'Sinh Tố Dâu',5,'Sinh tố dâu tươi ngon, giàu vitamin và khoáng chất.',30000.00,'2024-04-02 16:42:35'),(82,'Sinh Tố Bơ',5,'Sinh tố bơ chín đậm đà, một lựa chọn lý tưởng cho sức khỏe.',35000.00,'2024-04-02 16:42:35'),(83,'Nước Ép Cà Rốt',6,'Nước ép cà rốt tươi, giàu beta-carotene và vitamin A.',25000.00,'2024-04-02 16:42:35'),(84,'Nước Ép Cam',6,'Nước ép cam nguyên chất, hương vị tươi mới và thơm ngon.',28000.00,'2024-04-02 16:42:35'),(85,'Sữa Chua Trái Cây',7,'Hủ sữa chua trái cây, hòa quyện giữa vị chua và ngọt tự nhiên.',40000.00,'2024-04-02 16:42:35'),(86,'Sữa Chua Matcha',7,'Hủ sữa chua vị Matcha, hương vị đặc trưng của trà xanh Nhật Bản.',45000.00,'2024-04-02 16:42:35'),(87,'Rượu Vang Đỏ',8,'Rượu vang đỏ nhập khẩu, hương vị đậm đà và quyến rũ.',300000.00,'2024-04-02 16:42:35'),(88,'Rượu Vang Trắng',8,'Rượu vang trắng Pháp, một lựa chọn sang trọng cho bữa tiệc.',350000.00,'2024-04-02 16:42:35'),(89,'Chè Hạt Sen',9,'Chè hạt sen nước cốt dừa, một món tráng miệng ngọt ngào.',40000.00,'2024-04-02 16:42:35'),(90,'Chè Sương Sa Hạt Lựu',9,'Chè sương sa hạt lựu, vị thanh mát và bổ dưỡng.',45000.00,'2024-04-02 16:42:35'),(91,'Cháo Gà',10,'Cháo gà thơm ngon, dễ tiêu hóa và bổ dưỡng.',30000.00,'2024-04-02 16:42:35'),(92,'Cháo Lúa Mạch',10,'Cháo lúa mạch dinh dưỡng, một bữa sáng khỏe mạnh.',35000.00,'2024-04-02 16:42:35'),(93,'Hủ Tiếu Nam Vang',11,'Hủ tiếu Nam Vang sườn heo, một món ăn phổ biến ở Sài Gòn.',40000.00,'2024-04-02 16:42:35'),(94,'Hủ Tiếu Mì Cà Ri',11,'Hủ tiếu mì cà ri gà, hương vị độc đáo và thơm ngon.',45000.00,'2024-04-02 16:42:35'),(95,'Bánh Mì Bơ',1,'Bánh mì bơ hấp dẫn, vị bơ thơm ngon kết hợp cùng bánh mì giòn.',25000.00,'2024-04-02 16:42:35'),(96,'Bánh Mì Pate',1,'Bánh mì pate hòa quyện, một lựa chọn ngon miệng cho bữa sáng.',30000.00,'2024-04-02 16:42:35'),(97,'Trà Olong',2,'Trà olong tinh khiết, hương vị đặc trưng của trà cao cấp.',40000.00,'2024-04-02 16:42:35'),(98,'Trà Xanh Lá Sen',2,'Trà xanh lá sen đậm đà, giàu chất chống oxy hóa.',45000.00,'2024-04-02 16:42:35'),(99,'Cà Phê Đen',3,'Cà phê đen không đường, hương vị đắng đậm và thơm nồng.',35000.00,'2024-04-02 16:42:35'),(100,'Cà Phê Sữa Nóng',3,'Cà phê sữa nóng sảng khoái, hương vị ngọt ngào và thơm béo.',40000.00,'2024-04-02 16:42:35'),(101,'Nước Ngọt Fanta',4,'Nước ngọt Fanta 330ml, hương vị trái cây tươi mát.',12000.00,'2024-04-02 16:42:35'),(102,'Nước Ngọt Mirinda',4,'Nước ngọt Mirinda 330ml, sự lựa chọn lý tưởng cho buổi tiệc.',11000.00,'2024-04-02 16:42:35'),(103,'Sinh Tố Dưa Hấu',5,'Sinh tố dưa hấu tươi mát, giải nhiệt trong ngày hè nóng bức.',30000.00,'2024-04-02 16:42:35'),(104,'Sinh Tố Xoài',5,'Sinh tố xoài chín ngon, hương vị ngọt dịu và giàu dinh dưỡng.',35000.00,'2024-04-02 16:42:35'),(105,'Nước Ép Dưa Lưới',6,'Nước ép dưa lưới tươi ngon, giàu vitamin và khoáng chất.',25000.00,'2024-04-02 16:42:35'),(106,'Nước Ép Lựu',6,'Nước ép lựu tự nhiên, hương vị tươi mới và giàu vitamin C.',28000.00,'2024-04-02 16:42:35'),(107,'Sữa Chua Dâu',7,'Hủ sữa chua vị dâu, hương vị thơm ngon và bổ dưỡng.',40000.00,'2024-04-02 16:42:35'),(108,'Sữa Chua Nha Đam',7,'Hủ sữa chua vị nha đam, một lựa chọn lành mạnh cho sức khỏe.',45000.00,'2024-04-02 16:42:35'),(109,'Rượu Vang Cao Cấp',8,'Rượu vang cao cấp nhập khẩu, một lựa chọn sang trọng cho bữa tiệc.',300000.00,'2024-04-02 16:42:35'),(110,'Rượu Vang Hồng',8,'Rượu vang hồng ngon, hương vị quyến rũ và độc đáo.',350000.00,'2024-04-02 16:42:35'),(111,'Chè Bưởi',9,'Chè bưởi ngọt thanh, hương vị đặc trưng của quê hương miền Nam.',40000.00,'2024-04-02 16:42:35'),(112,'Chè Hạt Sen Lá Dứa',9,'Chè hạt sen lá dứa thơm ngon, một món tráng miệng ngon miệng.',45000.00,'2024-04-02 16:42:35'),(113,'Cháo Lúa Mạch Đậu Đỏ',10,'Cháo lúa mạch đậu đỏ, một lựa chọn lành mạnh và giàu dinh dưỡng.',30000.00,'2024-04-02 16:42:35'),(114,'Cháo Sườn Heo',10,'Cháo sườn heo thơm ngon, hương vị truyền thống của ẩm thực Việt Nam.',35000.00,'2024-04-02 16:42:35'),(115,'Hủ Tiếu Gà',11,'Hủ tiếu gà sườn heo, một món ăn ngon và bổ dưỡng.',40000.00,'2024-04-02 16:42:35'),(116,'Hủ Tiếu Nam Vang Cua',11,'Hủ tiếu Nam Vang cua, hương vị đặc trưng của phố Nam Vang.',45000.00,'2024-04-02 16:42:35');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'eldercoffee_db'
--
/*!50003 DROP FUNCTION IF EXISTS `count_admins_func` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `count_admins_func`() RETURNS int
    READS SQL DATA
    DETERMINISTIC
BEGIN
    DECLARE so_admin INT;
    SELECT COUNT(*) INTO so_admin FROM accounts WHERE type='admin';
    RETURN so_admin;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `count_categories_func` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `count_categories_func`() RETURNS int
    READS SQL DATA
    DETERMINISTIC
BEGIN
    DECLARE so_danhmuc INT;
    SELECT COUNT(*) INTO so_danhmuc FROM category;
    RETURN so_danhmuc;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `count_customers_func` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `count_customers_func`() RETURNS int
    READS SQL DATA
    DETERMINISTIC
BEGIN
    DECLARE so_khachhang INT;
    SELECT COUNT(*) INTO so_khachhang FROM customers;
    RETURN so_khachhang;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `count_invoices_func` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `count_invoices_func`() RETURNS int
    READS SQL DATA
    DETERMINISTIC
BEGIN
    DECLARE so_hoadon INT;
    SELECT COUNT(*) INTO so_hoadon FROM invoices;
    RETURN so_hoadon;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `count_items_func` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `count_items_func`() RETURNS int
    READS SQL DATA
    DETERMINISTIC
BEGIN
    DECLARE so_mon INT;
    SELECT COUNT(*) INTO so_mon FROM items;
    RETURN so_mon;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `count_users_func` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `count_users_func`() RETURNS int
    READS SQL DATA
    DETERMINISTIC
BEGIN
    DECLARE so_nhanvien INT;
    SELECT COUNT(*) INTO so_nhanvien FROM accounts WHERE type = 'user';
    RETURN so_nhanvien;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `sum_money_func` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `sum_money_func`() RETURNS decimal(10,2)
    READS SQL DATA
    DETERMINISTIC
BEGIN
    DECLARE total1 DECIMAL(10, 2);
    select sum(total) into total1
    from invoices;
    RETURN total1;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `GetBestSellingItemProcedure` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetBestSellingItemProcedure`(IN `start_date` DATE, IN `end_date` DATE)
BEGIN
    DECLARE best_item VARCHAR(255);

    SELECT item_name INTO best_item
    FROM items
    WHERE item_id IN (
        SELECT id.item_id
        FROM invoices i, invoice_details id 
        WHERE i.invoice_id = id.invoice_id
        AND i.creation_time BETWEEN start_date AND end_date
        GROUP BY id.item_id
        HAVING COUNT(*) = (
            SELECT COUNT(*)
            FROM invoices i, invoice_details id 
            WHERE i.invoice_id = id.invoice_id 
            AND i.creation_time BETWEEN start_date AND end_date
            GROUP BY id.item_id
            ORDER BY COUNT(*) DESC
            LIMIT 1
        )
    )
    LIMIT 1;

    SELECT best_item AS best_selling_item;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `GetInvoiceDetails` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetInvoiceDetails`()
BEGIN
    SELECT inv.invoice_id, inv.creation_time, acc.full_name, cus.customer_name, inv.total 
    FROM invoices inv
    INNER JOIN customers cus ON inv.customer_id = cus.customer_id
    INNER JOIN accounts acc ON inv.account_id = acc.account_id
    ORDER BY inv.creation_time DESC;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `GetInvoicesByDateRange` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetInvoicesByDateRange`(
    IN start_date_param DATE,
    IN end_date_param DATE
)
BEGIN
    SELECT inv.invoice_id, inv.creation_time, cus.customer_name, acc.full_name, inv.total 
    FROM invoices inv
    JOIN customers cus ON inv.customer_id = cus.customer_id
    JOIN accounts acc ON inv.account_id = acc.account_id
    WHERE inv.creation_time BETWEEN start_date_param AND end_date_param;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `GetTopAccountByDateRange` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTopAccountByDateRange`(start_date DATE, end_date DATE)
BEGIN

    SELECT full_name 

    FROM accounts

    WHERE account_id IN (

        SELECT account_id

        FROM invoices

        WHERE creation_time BETWEEN start_date AND end_date

        GROUP BY account_id

        HAVING COUNT(*) = (

            SELECT MAX(times)

            FROM (

                SELECT COUNT(*) AS times

                FROM invoices

                WHERE creation_time BETWEEN start_date AND end_date

                GROUP BY account_id

            ) AS counts

        )

    );

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `GetTopCustomerByDateRange` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTopCustomerByDateRange`(IN `start_date` DATE, IN `end_date` DATE)
BEGIN

    SELECT customer_name

    FROM customers

    WHERE customer_id IN (

        SELECT customer_id

        FROM (

            SELECT customer_id, COUNT(*) AS times

            FROM invoices

            WHERE creation_time BETWEEN start_date AND end_date

            GROUP BY customer_id

        ) AS counts

        WHERE times = (

            SELECT MAX(times)

            FROM (

                SELECT COUNT(*) AS times

                FROM invoices

                WHERE creation_time BETWEEN start_date AND end_date

                GROUP BY customer_id

            ) AS inner_counts

        )

    );

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `GetTotalRevenue` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTotalRevenue`(

    IN start_date DATE,

    IN end_date DATE

)
BEGIN

    SELECT SUM(total) AS total_revenue 

    FROM invoices 

    WHERE creation_time BETWEEN start_date AND end_date;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SearchInvoiceByInvoiceId` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SearchInvoiceByInvoiceId`(IN invoice_id INT)
BEGIN
    SELECT inv.invoice_id, inv.creation_time, a.full_name, c.customer_name, inv.total 
    FROM invoices inv 
    INNER JOIN customers c ON c.customer_id = inv.customer_id 
    INNER JOIN accounts a ON a.account_id = inv.account_id 
    WHERE inv.invoice_id = invoice_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SortCustomersAscendingByName` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SortCustomersAscendingByName`()
BEGIN
    SELECT *
    FROM customers
    ORDER BY customer_name ASC;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `SortCustomersDescendingByName` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SortCustomersDescendingByName`()
BEGIN
    SELECT *
    FROM customers
    ORDER BY customer_name DESC;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-03 21:11:46
