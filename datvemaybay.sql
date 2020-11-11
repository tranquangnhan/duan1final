-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: datvemaybay
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `baiviet`
--

DROP TABLE IF EXISTS `baiviet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `baiviet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tieude` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baiviet`
--

LOCK TABLES `baiviet` WRITE;
/*!40000 ALTER TABLE `baiviet` DISABLE KEYS */;
/*!40000 ALTER TABLE `baiviet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `binhluan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `star` tinyint(1) DEFAULT NULL,
  `idkh` int NOT NULL,
  `idsp` int NOT NULL,
  `idbaiviet` int NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `trangthai` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_binhluan_khachhang` (`idkh`),
  KEY `fk_binhluan_sanpham` (`idsp`),
  KEY `fk_binhluan_baiviet` (`idbaiviet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `binhluan`
--

LOCK TABLES `binhluan` WRITE;
/*!40000 ALTER TABLE `binhluan` DISABLE KEYS */;
/*!40000 ALTER TABLE `binhluan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `danhmuc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `anhien` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danhmuc`
--

LOCK TABLES `danhmuc` WRITE;
/*!40000 ALTER TABLE `danhmuc` DISABLE KEYS */;
/*!40000 ALTER TABLE `danhmuc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hdchitiet`
--

DROP TABLE IF EXISTS `hdchitiet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hdchitiet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tenve` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idhd` int NOT NULL,
  `idsp` int NOT NULL,
  `gia` float NOT NULL,
  `soluong` int NOT NULL,
  `tongtien` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_chitiet_hoadon` (`idhd`),
  KEY `fk_chitiet_sanpham` (`idsp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hdchitiet`
--

LOCK TABLES `hdchitiet` WRITE;
/*!40000 ALTER TABLE `hdchitiet` DISABLE KEYS */;
/*!40000 ALTER TABLE `hdchitiet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hoadon` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotenkh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaydatve` date NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `idkh` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_hoadon_khachhang` (`idkh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoadon`
--

LOCK TABLES `hoadon` WRITE;
/*!40000 ALTER TABLE `hoadon` DISABLE KEYS */;
/*!40000 ALTER TABLE `hoadon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `khachhang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kichhoat` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thanhpho` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quocgia` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tichdiem` int DEFAULT NULL,
  `randomkey` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `sodienthoai` (`sodienthoai`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khachhang`
--

LOCK TABLES `khachhang` WRITE;
/*!40000 ALTER TABLE `khachhang` DISABLE KEYS */;
INSERT INTO `khachhang` VALUES (1,'admin',1,'111111',1,'2020-11-11','','','','','',NULL,NULL);
/*!40000 ALTER TABLE `khachhang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanbay`
--

DROP TABLE IF EXISTS `sanbay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sanbay` (
  `idsanbay` int NOT NULL AUTO_INCREMENT,
  `tenSanBay` varchar(255) NOT NULL,
  `maSanBay` varchar(20) NOT NULL,
  `tinh` varchar(150) NOT NULL,
  PRIMARY KEY (`idsanbay`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanbay`
--

LOCK TABLES `sanbay` WRITE;
/*!40000 ALTER TABLE `sanbay` DISABLE KEYS */;
INSERT INTO `sanbay` VALUES (1,'Sân bay Quốc tế Cần Thơ','VVCT/VCA','Cần Thơ'),(2,'Sân bay Quốc tế Đà Nẵng','VVDN/DAD','Đà Nẵng'),(3,'Sân bay Quốc tế Cát Bi – Hải Phòng','VVCI/HPH','Hải Phòng'),(4,'Sân bay Quốc tế Nội Bài – Hà Nội','VVNB/HAN','Hà Nội'),(5,'Sân bay Quốc tế Tân Sơn Nhất','VVTS/SGN','Thành phố Hồ Chí Minh'),(6,'Sân bay Quốc tế Cam Ranh','VVCR/CXR','Khánh Hòa'),(7,'Sân bay Quốc tế Phú Quốc','VVPQ/PQC','Kiên Giang'),(8,'Sân bay Quốc tế Vinh – Nghệ An','VVVH/VII','Nghệ An'),(9,'Sân bay Quốc tế Phú Bài – Huế','VVPB/HUI','Thừa Thiên – Huế'),(10,'Sân bay Côn Đảo','VVCS/VCS','Bà Rịa-Vũng Tàu'),(11,'Sân bay Nà Sản','VVNS/SQH','Sơn La'),(12,'Sân bay Phù Cát – Bình Định','VVPC/UIH','Bình Định'),(13,'Sân bay Cà Mau','VVCM/CAH','Cà Mau'),(14,'Sân bay Buôn Ma Thuột','VVBM/BMV','Đắk Lắk'),(15,'Sân bay Điện Biên Phủ','VVDB/DIN','Điện Biên'),(16,'Sân bay Pleiku – Gia Lai','VVPK/PXU','Gia Lai'),(17,'Sân bay Rạch Giá – Kiên Giang','VVRG/VKG','Kiên Giang'),(18,'Sân bay Liên Khương – Đà Lạt','VVDL/DLI','Lâm Đồng'),(19,'Sân bay Tuy Hòa – Phú Yên','VVTH/TBB','Phú Yên'),(20,'Sân bay Đồng Hới – Quảng Bình','VVDH/VDH','Quảng Bình'),(21,'Sân bay Chu Lai – Quảng Nam','VVCA/VCL','Quảng Nam'),(22,'Sân bay Thọ Xuân – Thanh Hóa','VVTX/THD','Thanh Hóa');
/*!40000 ALTER TABLE `sanbay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sanpham` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tenmaybay` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia` float NOT NULL,
  `giamgia` float DEFAULT NULL,
  `iddm` int NOT NULL,
  `diemdi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diemden` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loaighe` tinyint(1) NOT NULL,
  `timestar` datetime NOT NULL,
  `timeend` datetime NOT NULL,
  `hanhly` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `giaitri` tinyint(1) DEFAULT NULL,
  `suatan` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_danhmuc_sanpham` (`iddm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanpham`
--

LOCK TABLES `sanpham` WRITE;
/*!40000 ALTER TABLE `sanpham` DISABLE KEYS */;
/*!40000 ALTER TABLE `sanpham` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-11 13:13:36
