CREATE DATABASE  IF NOT EXISTS `amandb1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `amandb1`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: amandb1
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adminlogin` (
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminlogin`
--

LOCK TABLES `adminlogin` WRITE;
/*!40000 ALTER TABLE `adminlogin` DISABLE KEYS */;
INSERT INTO `adminlogin` VALUES ('shubham','123'),('aman','1434');
/*!40000 ALTER TABLE `adminlogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admissiontransaction`
--

DROP TABLE IF EXISTS `admissiontransaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admissiontransaction` (
  `Name1` varchar(45) NOT NULL,
  `Department` varchar(45) NOT NULL,
  `Branch` varchar(45) NOT NULL,
  `Category` varchar(45) NOT NULL,
  `Date` varchar(45) NOT NULL,
  PRIMARY KEY (`Name1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admissiontransaction`
--

LOCK TABLES `admissiontransaction` WRITE;
/*!40000 ALTER TABLE `admissiontransaction` DISABLE KEYS */;
INSERT INTO `admissiontransaction` VALUES ('aman','Civil Engineering','CE','OPEN','12-4-2004'),('arti',' Computer technology','CM','OPEN','2024-03-27'),('Khushi','Electronics Engineering','EJ','SC','20-12-2003'),('prachi','Electrical Engineering','EE','OBC','6-2-2004'),('shubham','Mechanical Engineering','ME','OBC','14-3-1996');
/*!40000 ALTER TABLE `admissiontransaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cotransaction`
--

DROP TABLE IF EXISTS `cotransaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cotransaction` (
  `Name` varchar(45) NOT NULL,
  `Date` varchar(45) NOT NULL,
  `Branch` varchar(45) NOT NULL,
  `Category` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cotransaction`
--

LOCK TABLES `cotransaction` WRITE;
/*!40000 ALTER TABLE `cotransaction` DISABLE KEYS */;
INSERT INTO `cotransaction` VALUES ('Aman Mishra','2024-03-21','CM','asad'),('Shubham','2024-03-14','Mechanical Engineering','OBC'),('Prachi','2003-02-06','EE','OBC'),('','','',''),('Arti','2024-03-19','CE','SC');
/*!40000 ALTER TABLE `cotransaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examtransaction`
--

DROP TABLE IF EXISTS `examtransaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `examtransaction` (
  `Name` varchar(45) NOT NULL,
  `Enrollment` varchar(45) NOT NULL,
  `Scheme` varchar(45) NOT NULL,
  `Semester` varchar(45) NOT NULL,
  `Date` varchar(45) NOT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examtransaction`
--

LOCK TABLES `examtransaction` WRITE;
/*!40000 ALTER TABLE `examtransaction` DISABLE KEYS */;
INSERT INTO `examtransaction` VALUES ('Aman ','2100910172','I','6','8-2-2003'),('Khushi','2100910226','I','6','2-3-2004'),('Prachi','210091028','I','6','6-2-2003'),('Shubham','210091021','I','6','14-3-2003');
/*!40000 ALTER TABLE `examtransaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fees_table`
--

DROP TABLE IF EXISTS `fees_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fees_table` (
  `Id` varchar(45) DEFAULT NULL,
  `ExamFees` varchar(45) DEFAULT NULL,
  `AdmissionFees` varchar(45) DEFAULT NULL,
  `CoFees` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees_table`
--

LOCK TABLES `fees_table` WRITE;
/*!40000 ALTER TABLE `fees_table` DISABLE KEYS */;
INSERT INTO `fees_table` VALUES ('78','7000','777','7781'),('778',NULL,NULL,NULL);
/*!40000 ALTER TABLE `fees_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registration` (
  `FName` varchar(45) NOT NULL,
  `MName` varchar(45) NOT NULL,
  `LName` varchar(45) NOT NULL,
  `MotherName` varchar(45) NOT NULL,
  `dob` varchar(45) NOT NULL,
  `Category` varchar(45) NOT NULL,
  `EmailId` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `PhoneNo` varchar(45) NOT NULL,
  PRIMARY KEY (`FName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` VALUES ('aman','vijay','mishra','jaya','2-5-2003','SBC','aman@gmail.com','nagpur','Male','76853427654'),('arti','ajay','dhakate','jayanti','2024-02-08','SBC','arti@gmail.com','gondiya','Female','6768776788'),('kajal','manoj','mishra','jaya','5-4-2004','SBC','kajal@gmail.com','nagpur','Female','78796595792'),('prachi','doliram','dumbhare','archana','6-2-2003','OBC','prachij@gmail.com','sakoli','Female','6786686809'),('sangh','sanjay','raut','sanjana','5-6-2004','OPEN','asangh@gmail.com','Nagpur','Male','8739875468'),('sanghita','sanjay','raut','shanti','2-4-2003','SBC','sanghita@gmail.com','Nagpur','Female','8739875468'),('shubham','vinod','chitrio','varsha','14-3-1996','OBC','shubham@gmail.com','bhandara','Male','6794568765');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studash`
--

DROP TABLE IF EXISTS `studash`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studash` (
  `feesname` varchar(45) NOT NULL,
  `stat` varchar(45) NOT NULL,
  PRIMARY KEY (`feesname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studash`
--

LOCK TABLES `studash` WRITE;
/*!40000 ALTER TABLE `studash` DISABLE KEYS */;
INSERT INTO `studash` VALUES ('admission fees','unpaid'),('co-operative fees','paid'),('exam fees','unpaid');
/*!40000 ALTER TABLE `studash` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `Sr.No` int NOT NULL,
  `Enrollment` varchar(45) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `FirstName` varchar(45) NOT NULL,
  `MiddleName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `Category` varchar(5) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `EmailId` varchar(45) NOT NULL,
  `PhoneNo` varchar(20) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `Branch` varchar(30) NOT NULL,
  `Semester` int NOT NULL,
  `Addfees` varchar(45) NOT NULL,
  `ExamFees` varchar(45) NOT NULL,
  `CoFees` varchar(45) NOT NULL,
  PRIMARY KEY (`Enrollment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (3,'2100910172','am','am778','Aman','Mahesh','Mishra','OPEN','12-4-2004','M','aman@gmail.com','7249771434','Amravati','CM',5,'paid','unpaid','unpaid'),(4,'2100910233','pr','pra902','Prachi','Doliram','Dumbhare','ST','13-4-2005','F','pra@gmail.com','8908230923','Gondia','EE',4,'unpaid','paid','paid'),(5,'2100910831','khu','khu332','Khushi','Dilip','Chaudhary','OBC','31-4-2005','F','Khushi@gmail.com','7638369363','TUMSAR','CM',6,'paid','unpaid','paid'),(2,'2100920313','ar','art321','Arti','Sadashiv','Dhakate','SC','31-3-2004','F','arti@gmail.com','9802382993','Bhandara','ME',3,'unpaid','unpaid','unpaid'),(1,'2100989811','shu','shu345','Shubham','Vinod','Chitrio','OBC','14-3-1996','M','shub@gmail.com','8792393929','Bhandara','CE',1,'paid','paid','unpaid');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_login`
--

DROP TABLE IF EXISTS `student_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_login` (
  `id` varchar(60) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_login`
--

LOCK TABLES `student_login` WRITE;
/*!40000 ALTER TABLE `student_login` DISABLE KEYS */;
INSERT INTO `student_login` VALUES ('1','Aman','123'),('2','Shubham','456'),('3','arti','1234'),('4','prachi','12345');
/*!40000 ALTER TABLE `student_login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-19 13:41:52
