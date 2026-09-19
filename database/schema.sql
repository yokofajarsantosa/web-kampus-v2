-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: schema
-- ------------------------------------------------------
-- Server version	8.4.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'Administrator','admin@cakrawala.ac.id','$2y$12$A.3b50fE47pOXsdU0tmuQu1r.EZG1w8uifaquxaVXGAKmTEYdXBLK',1,'2026-09-10 09:04:35');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumni`
--

DROP TABLE IF EXISTS `alumni`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumni` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study_program` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumni`
--

LOCK TABLES `alumni` WRITE;
/*!40000 ALTER TABLE `alumni` DISABLE KEYS */;
INSERT INTO `alumni` VALUES (1,'Dr. apt Erna','S1 Informatika','Product Designer di perusahaan teknologi','Pengalaman belajar dan berkolaborasi di kampus menjadi fondasi untuk membangun produk digital yang bermanfaat.','https://stifar.ac.id/wp-content/uploads/2025/10/WhatsApp-Image-2025-10-22-at-13.28.36-240x300.jpeg',1,1,'2026-09-10 08:58:38','2026-09-14 08:26:04'),(2,'Raka Mahendra','S1 Sistem Informasi','Founder startup pendidikan','Dari ruang kelas hingga membangun startup, kampus mengajarkan keberanian untuk mencoba, gagal, dan terus bertumbuh.','https://stifar.ac.id/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-08-at-11.52.02_d768b18f-240x300.jpg',2,1,'2026-09-10 08:58:38','2026-09-11 04:04:18'),(3,'Nadia Kusuma','S1 Bisnis Digital','Brand strategist dan entrepreneur','Kombinasi ilmu, organisasi, dan pengalaman proyek membantu saya memahami bagaimana ide dapat menjadi dampak nyata.','https://stifar.ac.id/wp-content/uploads/2024/10/4c991845-a207-49a7-939b-cb7bf5febe91.jpeg',3,1,'2026-09-10 08:58:38','2026-09-11 04:04:31'),(4,'Bima Adyatama','S1 Teknik Informatika','Software engineer dan inovator digital','Lingkungan belajar yang terbuka membuat saya berani mengeksplorasi teknologi dan menciptakan solusi digital.','https://stifar.ac.id/wp-content/uploads/2024/10/af02dbed-3b96-44a5-bc30-5629598a2f56.jpeg',4,1,'2026-09-10 08:58:38','2026-09-11 04:04:43'),(5,'Alya Prameswari','S1 Informatika','Product Designer di perusahaan teknologi','Pengalaman belajar dan berkolaborasi di kampus menjadi fondasi untuk membangun produk digital yang bermanfaat.','https://stifar.ac.id/wp-content/uploads/2024/10/8716acb2-556f-4518-a7d4-7280750e6777.jpeg',5,1,'2026-09-11 08:37:53','2026-09-14 02:39:44'),(6,'Raka Mahendra','S1 Sistem Informasi','Founder startup pendidikan','Dari ruang kelas hingga membangun startup, kampus mengajarkan keberanian untuk mencoba, gagal, dan terus bertumbuh.','https://stifar.ac.id/wp-content/uploads/2025/10/WhatsApp-Image-2025-10-22-at-13.28.36-240x300.jpeg',6,1,'2026-09-11 08:37:53','2026-09-14 02:40:04'),(7,'Nadia Kusuma','S1 Bisnis Digital','Brand strategist dan entrepreneur','Kombinasi ilmu, organisasi, dan pengalaman proyek membantu saya memahami bagaimana ide dapat menjadi dampak nyata.','https://stifar.ac.id/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-08-at-11.52.02_d768b18f-240x300.jpg',7,1,'2026-09-11 08:37:53','2026-09-14 02:40:04'),(8,'Bima Adyatama','S1 Teknik Informatika','Software engineer dan inovator digital','Lingkungan belajar yang terbuka membuat saya berani mengeksplorasi teknologi dan menciptakan solusi digital.','https://stifar.ac.id/wp-content/uploads/2024/10/4c991845-a207-49a7-939b-cb7bf5febe91.jpeg',8,1,'2026-09-11 08:37:53','2026-09-14 02:40:04');
/*!40000 ALTER TABLE `alumni` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campuses`
--

DROP TABLE IF EXISTS `campuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campuses` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_url` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'Jelajahi Kampus',
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '#tentang',
  `sort_order` int DEFAULT '0',
  `active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campuses`
--

LOCK TABLES `campuses` WRITE;
/*!40000 ALTER TABLE `campuses` DISABLE KEYS */;
INSERT INTO `campuses` VALUES (1,'Mencetak Generasi Unggul di Dunia Farmasi','Keunggulan Akademik','STIFAR Semarang hadir sebagai institusi pendidikan tinggi yang berkomitmen mencetak tenaga profesional di bidang farmasi yang kompeten, inovatif, berintegritas, dan siap memberikan kontribusi nyata bagi kemajuan kesehatan dan masyarakat.','/assets/images/stifar/20260913_230619.png','Jelajahi Kampus','#tentang',1,1,'2026-09-10 08:58:21','2026-09-14 01:14:46'),(2,'Ruang belajar yang hidup.','Keunggulan Akademik','Lingkungan akademik yang mendorong mahasiswa untuk menemukan cara berpikir, membangun karakter, dan menciptakan karya yang berarti.','/assets/images/stifar/20260913_230909.png','Jelajahi Kampus','#tentang',2,1,'2026-09-10 08:58:21','2026-09-14 01:14:46'),(3,'Tumbuh bersama masa depan.','Keunggulan Akademik','Koneksi akademik, komunitas, dan industri dirancang untuk menemani setiap langkah menuju masa depan profesional.','/assets/images/stifar/20260913_230547.png','Jelajahi Kampus','#tentang',3,1,'2026-09-10 08:58:21','2026-09-14 01:14:46');
/*!40000 ALTER TABLE `campuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kerjasama`
--

DROP TABLE IF EXISTS `kerjasama`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kerjasama` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kerjasama`
--

LOCK TABLES `kerjasama` WRITE;
/*!40000 ALTER TABLE `kerjasama` DISABLE KEYS */;
INSERT INTO `kerjasama` VALUES (1,'Colorcon','assets/images/mitra/colorcon.jpg','https://www.colorcon.com/',1,'2026-09-14 08:31:27'),(2,'APDFI','assets/images/mitra/apdfi.jpg','https://sim.apdfi.or.id/',1,'2026-09-14 08:31:27'),(3,'MERO Foundation','assets/images/mitra/mero.jpg','https://www.merofoundation.org/',1,'2026-09-14 08:31:27'),(4,'UCSI University','assets/images/mitra/ucsi.png','https://www.ucsiuniversity.edu.my/',1,'2026-09-14 08:31:27'),(5,'Universiti Teknologi MARA (UiTM)','assets/images/mitra/uitm.jpeg','https://uitm.edu.my/',1,'2026-09-14 08:31:27'),(6,'Universitas Gadjah Mada','assets/images/mitra/ugm.jpeg','https://ugm.ac.id/id/',1,'2026-09-14 08:31:27'),(7,'IKASTI STIFAR','assets/images/mitra/ikasti.png','https://www.instagram.com/ikasti.stifar/',1,'2026-09-14 08:31:27'),(8,'Yuanpei University','assets/images/mitra/yuanpei.png','https://eng.ypu.edu.tw/',1,'2026-09-14 08:31:27');
/*!40000 ALTER TABLE `kerjasama` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) DEFAULT '1',
  `published_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Dies Natalis Stifar 26th','Kampus','Kabar membanggakan dari kompetisi tingkat nasional.','Mahasiswa Cakrawala Institute kembali menorehkan prestasi melalui inovasi teknologi yang dikembangkan bersama tim.','https://stifar.ac.id/wp-content/uploads/2026/08/WhatsApp-Image-2026-08-06-at-14.32.24-692x1024.jpeg',1,'2025-05-12 09:00:00','2026-09-10 08:58:45','2026-09-14 03:01:34'),(2,'[ PRESS RELEASE LANAFUNITY 2025 – DAY 1 ]','Kampus','Pusat baru untuk memperkuat riset, kreativitas, dan kolaborasi.','Pusat riset digital menjadi ruang baru bagi sivitas akademika untuk melakukan eksperimen, penelitian, dan kolaborasi.','https://stifar.ac.id/wp-content/uploads/2025/11/Screenshot-2025-11-13-092046.png',1,'2025-05-08 09:00:00','2026-09-10 08:58:45','2026-09-14 07:03:33'),(3,'[ PRESS RELEASE LANAFUNITY 2025 – DAY 2 ]','Kampus','Kampus memperluas kemitraan dengan dunia industri.','Kolaborasi dengan industri diarahkan untuk memperkuat pembelajaran berbasis praktik dan memperluas kesempatan mahasiswa.','https://stifar.ac.id/wp-content/uploads/2025/11/Screenshot-2025-11-13-092046.png',1,'2025-05-02 09:00:00','2026-09-10 08:58:45','2026-09-14 07:03:33'),(4,'Serah Terima Jabatan Senat Mahasiswa Prodi D3 Farmasi','Mahasiswa','Proyek mahasiswa menghadirkan solusi digital untuk masyarakat.','Mahasiswa mengembangkan solusi digital yang menjawab kebutuhan nyata masyarakat melalui program kolaboratif.','https://stifar.ac.id/wp-content/uploads/2025/06/IMG_20250617_181743-Senat-D3-Farmasi-STIFAR-YAPHAR-1024x689.jpg',1,'2025-04-28 09:00:00','2026-09-10 08:58:45','2026-09-14 07:25:04'),(5,'STRUKTURAL STIFAR YAYASAN PHARMASI SEMARANGPERIODE 2026-2030','Kampus','Kabar membanggakan dari kompetisi tingkat nasional.','Mahasiswa Cakrawala Institute kembali menorehkan prestasi melalui inovasi teknologi yang dikembangkan bersama tim.','https://stifar.ac.id/wp-content/uploads/2026/06/WhatsApp-Image-2026-06-03-at-14.04.29-1-819x1024.jpeg',1,'2025-05-12 09:00:00','2026-09-11 08:39:38','2026-09-14 07:01:18'),(6,'Kuliah Umum: Mental Tangguh dan Etika AI, Bekal Mahasiswa Farmasi Hadapi Masa Depan','Kampus','Pusat baru untuk memperkuat riset, kreativitas, dan kolaborasi.','Pusat riset digital menjadi ruang baru bagi sivitas akademika untuk melakukan eksperimen, penelitian, dan kolaborasi.','https://stifar.ac.id/wp-content/uploads/2025/10/hhhh_001-392x272.png',1,'2025-05-08 09:00:00','2026-09-11 08:39:38','2026-09-14 07:04:03'),(7,'Lowongan TTK (Tenaga Teknis Kefarmasian) di Apotek Pendidikan Yaphar','Mahasiswa','Kampus memperluas kemitraan dengan dunia industri.','Kolaborasi dengan industri diarahkan untuk memperkuat pembelajaran berbasis praktik dan memperluas kesempatan mahasiswa.','https://stifar.ac.id/wp-content/uploads/2026/07/WhatsApp-Image-2026-07-09-at-09.41.32-819x1024.jpeg',1,'2025-05-02 09:00:00','2026-09-11 08:39:38','2026-09-14 07:26:09'),(8,'Dibutuhkan Tenaga Teknis Kefarmasian RS Citra Arafiq','Mahasiswa','Proyek mahasiswa menghadirkan solusi digital untuk masyarakat.','Mahasiswa mengembangkan solusi digital yang menjawab kebutuhan nyata masyarakat melalui program kolaboratif.','https://stifar.ac.id/wp-content/uploads/2026/07/WhatsApp-Image-2026-07-02-at-16.00.29-816x1024.jpeg',1,'2025-04-28 09:00:00','2026-09-11 08:39:38','2026-09-14 07:26:09');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portal_sistem`
--

DROP TABLE IF EXISTS `portal_sistem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portal_sistem` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portal_sistem`
--

LOCK TABLES `portal_sistem` WRITE;
/*!40000 ALTER TABLE `portal_sistem` DISABLE KEYS */;
INSERT INTO `portal_sistem` VALUES (1,'Pendaftaran Online','assets/images/portal/pendaftaran.png','https://pmb.stifar.ac.id/',1,'2026-09-11 04:17:33'),(2,'Sistem Informasi Akademik','assets/images/portal/siakad.png','https://siakad.stifar.ac.id',1,'2026-09-11 04:17:33'),(3,'Perpustakaan Online','assets/images/portal/perpustakaan.png','https://perpustakaan.stifar.ac.id',1,'2026-09-11 04:17:33'),(4,'MySTIFAR','assets/images/portal/mystifar.png','https://mystifar.stifar.ac.id',1,'2026-09-11 04:17:33'),(5,'Repository STIFAR','assets/images/portal/repository.png','https://repository.stifar.ac.id',1,'2026-09-11 04:17:33'),(6,'Jurnal Dimas','assets/images/portal/jurnal-dimas.png','https://jurnal.stifar.ac.id/dimas',1,'2026-09-11 04:17:33'),(7,'Jurnal Media Farmasi Indonesia','assets/images/portal/mfi.png','https://jurnal.stifar.ac.id/mfi',1,'2026-09-11 04:17:33'),(8,'WILEY','assets/images/portal/wiley.png','https://onlinelibrary.wiley.com',1,'2026-09-11 04:17:33');
/*!40000 ALTER TABLE `portal_sistem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketua_stifar` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_settings`
--

LOCK TABLES `site_settings` WRITE;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` VALUES (1,'STIFAR SEMARANG','Kampus untuk masa depan','Membangun Insan Farmasi yang Unggul, Berintegritas, dan Humanis','Jalan Plamongansari–Pucang Gading Km 1, Semarang','(024) 6725272','stifar@.ac.id','https://sistem.lldikti6.id/data/logo/063032.jpg','https://www.youtube.com/watch?v=5LKD-GF0DEA&t=2s','/assets/images/stifar/ketua_stifar/ketua_stifar.png','2026-09-14 08:25:55');
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'Sambutan Ketua STIFAR Yayasan Pharmasi Semarang','https://www.youtube.com/embed/5LKD-GF0DEA?start=2','2026-09-10 08:58:51'),(2,'Sambutan Ketua STIFAR Yayasan Pharmasi Semarang','https://www.youtube.com/embed/5LKD-GF0DEA?start=2','2026-09-10 09:03:54');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'schema'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-09-15  8:18:29

-- ============================================================
-- CMS EXTENSION: editable navigation and website content
-- ============================================================

ALTER TABLE `site_settings`
  ADD COLUMN `ketua_nama` varchar(200) DEFAULT NULL AFTER `ketua_stifar`,
  ADD COLUMN `ketua_jabatan` varchar(255) DEFAULT NULL AFTER `ketua_nama`,
  ADD COLUMN `ketua_sambutan` longtext DEFAULT NULL AFTER `ketua_jabatan`,
  ADD COLUMN `intro_text` longtext DEFAULT NULL AFTER `ketua_sambutan`;

UPDATE `site_settings` SET
  `ketua_nama`='Dr. apt. Endang Diyah Ikasari, M.Si',
  `ketua_jabatan`='Ketua STIFAR Yayasan Pharmasi Semarang',
  `ketua_sambutan`='Stifar Yayasan Pharmasi Semarang merupakan lembaga pendidikan tinggi kefarmasian terkemuka di Indonesia yang terus berkembang, beradaptasi, dan berinovasi. Kami berkomitmen tidak hanya menghasilkan lulusan yang pintar secara akademik, tetapi juga bermoral, berkarakter kuat, dan siap memasuki dunia kerja. Di tengah kemajuan teknologi kesehatan yang pesat dan tuntutan era globalisasi, komitmen kami lakukan melalui kurikulum berbasis kompetensi yang relevan dengan kebutuhan industri farmasi, rumah sakit, klinis, hingga kosmetika, fasilitas laboratorium yang modern, staf pengajar dengan kualifikasi magister dan doktor, serta para praktisi yang kompeten di bidangnya serta jejaring alumni dan industri yang luas. Pendidikan adalah investasi terbaik untuk masa depan. Bersama Stifar Yayasan Pharmasi Semarang mari kita ubah tantangan global menjadi peluang keberhasilan',
  `intro_text`='STIFAR Semarang berkomitmen menjadi institusi pendidikan tinggi farmasi yang berintegritas, inovatif, unggul, dan berwawasan lingkungan. Melalui pendidikan, penelitian, dan pengabdian kepada masyarakat, STIFAR Semarang membentuk lulusan profesional, berakhlak mulia, adaptif terhadap perkembangan teknologi, serta memiliki kepedulian terhadap kesehatan dan kemanusiaan.'
WHERE `id`=1;


DROP TABLE IF EXISTS `site_navigation`;
CREATE TABLE `site_navigation` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nav_key` varchar(50) NOT NULL,
  `label` varchar(255) NOT NULL,
  `url` varchar(1000) DEFAULT '#',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_nav_key` (`nav_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `site_navigation` (`nav_key`,`label`,`url`,`active`,`sort_order`) VALUES
('nav_001','HOME','#home',1,1),
('nav_002','PROFIL','#',1,2),
('nav_003','Akreditasi','#sejarah',1,3),
('nav_004','Sertifikat Akreditasi BAN-PT (2017)','#',1,4),
('nav_005','Sertifikat Akreditasi BAN-PT (2022)','#',1,5),
('nav_006','SUKET AIPT','#',1,6),
('nav_007','Visi dan Misi','#VisiMisi',1,7),
('nav_008','Struktur Organisasi','#StrukturOrganisasi',1,8),
('nav_009','Profil Dosen','#ProfilDosen',1,9),
('nav_010','Panduan Akademik','#PanduanAkademik',1,10),
('nav_011','PROGRAM STUDI','#program-studi',1,11),
('nav_012','D3 Anafarma','#d3-anafarma',1,12),
('nav_013','Sejarah Program Studi','#anafarma-sejarah',1,13),
('nav_014','Visi dan Misi','#anafarma-visi-misi',1,14),
('nav_015','Pengelola','#anafarma-pengelola',1,15),
('nav_016','Akreditasi','#anafarma-akreditasi',1,16),
('nav_017','Sertifikat Akreditasi LAM-PTKes (2025)','#',1,17),
('nav_018','SK Akreditasi LAM-PTKes (2022)','#',1,18),
('nav_019','SK Akreditasi LAM-PTKes (2017)','#',1,19),
('nav_020','Sertifikat Akreditasi BAN-PT (2012)','#',1,20),
('nav_021','Sertifikat Akreditasi Depkes (2007)','#',1,21),
('nav_022','Akademik','#anafarma-akademik',1,22),
('nav_023','Kalender Akademik Anafarma','#',1,23),
('nav_024','Jadwal Kuliah','#',1,24),
('nav_025','Karya Tulis Ilmiah','#',1,25),
('nav_026','Panduan Penulisan KTI','#',1,26),
('nav_027','Halaman Pengesahan','#',1,27),
('nav_028','Alur KTI','#',1,28),
('nav_029','Kartu Kehadiran KTI','#',1,29),
('nav_030','Kartu Bimbingan KTI','#',1,30),
('nav_031','Halaman Pernyataan Plagiarisme','#',1,31),
('nav_032','Panduan PKL','#',1,32),
('nav_033','Kurikulum','#',1,33),
('nav_034','Testimoni Alumni','#',1,34),
('nav_035','D3 Farmasi','#d3-farmasi',1,35),
('nav_036','Sejarah Program Studi','#',1,36),
('nav_037','Visi dan Misi','#',1,37),
('nav_038','Pengelola','#',1,38),
('nav_039','Akreditasi','#',1,39),
('nav_040','Sertifikat Akreditasi LAM-PTKes (2025)','#',1,40),
('nav_041','SK Akreditasi LAM-PTKes (2021)','#',1,41),
('nav_042','SK Akreditasi LAM-PTKes (2016)','#',1,42),
('nav_043','Sertifikat Akreditasi BAN-PT (2012)','#',1,43),
('nav_044','Sertifikat Akreditasi Depkes (2008)','#',1,44),
('nav_045','Akademik','#',1,45),
('nav_046','Karya Tulis Ilmiah','#',1,46),
('nav_047','KTI D3 Farmasi Baru April 2024','#',1,47),
('nav_048','Formulir Persetujuan Sidang KTI','#',1,48),
('nav_049','Formulir Pengajuan KTI 2023 (Non Proyek)','#',1,49),
('nav_050','Formulir Pengajuan KTI 2023 (Proyek Dosen)','#',1,50),
('nav_051','Buku Pedoman Penulisan KTI','#',1,51),
('nav_052','Alur KTI','#',1,52),
('nav_053','Kartu Kehadiran KTI','#',1,53),
('nav_054','Kartu Bimbingan KTI','#',1,54),
('nav_055','Halaman Pernyataan Plagiarisme','#',1,55),
('nav_056','Surat Pernyataan Pengambilan Data KTI','#',1,56),
('nav_057','Kalender Akademik','#',1,57),
('nav_058','Jadwal Kuliah','#',1,58),
('nav_059','Panduan PKL','#',1,59),
('nav_060','Kurikulum','#',1,60),
('nav_061','Testimoni Alumni','#',1,61),
('nav_062','S1 Farmasi','#s1-farmasi',1,62),
('nav_063','Sejarah Program Studi','#',1,63),
('nav_064','Visi dan Misi','#',1,64),
('nav_065','Pengelola','#',1,65),
('nav_066','Akreditasi','#',1,66),
('nav_067','SK Akreditasi LAM-PTKes (2022)','#',1,67),
('nav_068','SK Akreditasi LAM-PTKes (2018)','#',1,68),
('nav_069','SK Akreditasi BAN-PT (2013)','#',1,69),
('nav_070','SK Akreditasi BAN-PT (2008)','#',1,70),
('nav_071','SK Akreditasi BAN-PT (2003)','#',1,71),
('nav_072','Akademik','#',1,72),
('nav_073','Skripsi','#',1,73),
('nav_074','Berkas Skripsi Terbaru','#',1,74),
('nav_075','Panduan Penulisan Skripsi','#',1,75),
('nav_076','Panduan Pelaksanaan Skripsi','#',1,76),
('nav_077','Pedoman Sitasi Mendeley','#',1,77),
('nav_078','Kartu Kehadiran Skripsi','#',1,78),
('nav_079','Kartu Bimbingan Skripsi','#',1,79),
('nav_080','Surat Keterangan Bebas Keuangan','#',1,80),
('nav_081','Kurikulum','#',1,81),
('nav_082','Testimoni Alumni','#',1,82),
('nav_083','Profesi Apoteker','#profesi-apoteker',1,83),
('nav_084','Sejarah Program Studi','#',1,84),
('nav_085','Visi dan Misi','#',1,85),
('nav_086','Pengelola','#',1,86),
('nav_087','Akreditasi','#',1,87),
('nav_088','SK Akreditasi LAM-PTKes (2022)','#',1,88),
('nav_089','SK Akreditasi LAM-PTKes (2017)','#',1,89),
('nav_090','SK Akreditasi BAN-PT (2012)','#',1,90),
('nav_091','Akademik','#',1,91),
('nav_092','Testimoni Alumni','#',1,92),
('nav_093','Magister Farmasi','#magister-farmasi',1,93),
('nav_094','UPT','#',1,94),
('nav_095','BAAU-BAAK','#',1,95),
('nav_096','Informasi','https://stifar.ac.id/bau-baak/',1,96),
('nav_097','Surat Permohonan Pengunduran Pembayaran','https://docs.google.com/document/d/1VjBmDdAwTVyn13DIgAtRuRerYWfzqjBK/edit?usp=sharing&ouid=101168995535047925500&rtpof=true&sd=true',1,97),
('nav_098','Formulir Tahapan Skripsi','https://docs.google.com/document/d/1xr3HAAIaIJWpTKYagug3JVkQg2-y2U7H/edit?usp=sharing&ouid=101168995535047925500&rtpof=true&sd=true',1,98),
('nav_099','Formulir Tahapan KTI','https://docs.google.com/document/d/1RQWOZC6DipRhhPgFO7D9Dsl7pkay5eZv/edit?usp=sharing&ouid=101168995535047925500&rtpof=true&sd=true',1,99),
('nav_100','Form KTM','#',1,100),
('nav_101','KTM S1 Farmasi','https://docs.google.com/forms/d/14gBZ8J4sEayoJENNaR0IYLwQgdDsA7n88Yx5ycNLzEE/edit',1,101),
('nav_102','KTM Apoteker','https://docs.google.com/forms/d/1DBm-euOrEpw_PbLGZSpGxfUDyV_0IOv0CAQPtR8uDJE/edit',1,102),
('nav_103','KTM D3 Anafarma','https://docs.google.com/forms/d/1SAXwieF1ZOODwDnYhMu0VeLtub9WqfB-j5mVaStMTaQ/edit?usp=drive_web',1,103),
('nav_104','KTM D3 Farmasi','https://docs.google.com/forms/d/1oc8wCKRPjWFKi-cXu6JaOpu9GMzzwqRPHtv_SSEKLWU/edit?usp=drive_web',1,104),
('nav_105','KTM S2 Farmasi','https://docs.google.com/forms/d/13u6SGkaZwXKQ1cHnwH0_O1Sk1s51_APY5HLVMkaNI2c/edit',1,105),
('nav_106','Kuesioner Pelayanan','https://docs.google.com/forms/d/e/1FAIpQLSdedLXBXTSsaZgenJR516pqeJXdi5tL3vvsKJirw2URTGf_fg/viewform?usp=sharing',1,106),
('nav_107','LPM','#',1,107),
('nav_108','SPMI','https://stifar.ac.id/spmi',1,108),
('nav_109','AMI','#',1,109),
('nav_110','AMI 2024 – 2025','#',1,110),
('nav_111','Laporan PPEPP 2024-2025','https://stifar.ac.id/laporan-ppepp-penetapan-pelaksanaan-evaluasi-pengendalian-peningkatan',1,111),
('nav_112','Laporan AMI 2024-2025','https://stifar.ac.id/laporan-ami-2024-2025',1,112),
('nav_113','RTM 2024-2025','https://stifar.ac.id/r/',1,113),
('nav_114','RTL 2024-2025','https://stifar.ac.id/rencana-tindak-lanjut',1,114),
('nav_115','RENSTRA','#',1,115),
('nav_116','RENSTRA 2021-2025','https://stifar.ac.id/renstra-rencana-strategis-2021-2025',1,116),
('nav_117','RENSTRA 2026-2030','#',1,117),
('nav_118','RENOP','https://stifar.ac.id/renop-rencana-operasional',1,118),
('nav_119','Informasi','https://stifar.ac.id/lembaga-penjamin-mutu-lpm/',1,119),
('nav_120','Kuesioner Pelayanan','https://stifar.ac.id/kuisioner-pelayanan',1,120),
('nav_121','Kuesioner Sarana dan Prasarana','https://bit.ly/KuisionerKepuasanSarprasStifar',1,121),
('nav_122','LPPM','#',1,122),
('nav_123','Informasi','http://lppm.stifar.ac.id/',1,123),
('nav_124','Kuesioner Pelayanan','https://forms.gle/rDzSbeGzLyHFRBKG8',1,124),
('nav_125','Perpustakaan','#',1,125),
('nav_126','Web Perpustakaan','http://perpustakaan.stifar.ac.id/',1,126),
('nav_127','Informasi','https://stifar.ac.id/unit-pelaksana-teknis-upt-perpustakaan/',1,127),
('nav_128','Kuesioner Pelayanan','https://forms.gle/3fKA5vxAsTpQMbMM7',1,128),
('nav_129','Perpustakaan Online','http://perpustakaan.stifar.ac.id/',1,129),
('nav_130','Laboratorium','#',1,130),
('nav_131','Informasi','https://stifar.ac.id/unit-pelaksana-teknis-upt-laboratorium/',1,131),
('nav_132','Kuesioner Pelayanan','https://bit.ly/3IFl3n9',1,132),
('nav_133','Teknologi Informasi','#',1,133),
('nav_134','Informasi','https://stifar.ac.id/unit-pelaksana-teknis-upt-komputer/',1,134),
('nav_135','Kuesioner Pelayanan','https://forms.gle/Ch2u3CtDBfxHUzGs5',1,135),
('nav_136','KEPK & DETERMINASI','#',1,136),
('nav_137','KEPK','#kepk',1,137),
('nav_138','DETERMINASI','#determinasi',1,138),
('nav_139','Kuesioner Pelayanan KEPK','#prosedur',1,139),
('nav_140','ALUMNI','#',1,140),
('nav_141','Karier','#data-alumni',1,141),
('nav_142','Survey Kepuasan Pengunaan Lulusan','#tracer-study',1,142),
('nav_143','Tracer Study','#ikatan-alumni',1,143),
('nav_144','FASILITAS','#',1,144),
('nav_145','MITRA PMB','#',1,145),
('nav_146','PMB','#',1,146);


DROP TABLE IF EXISTS `site_content`;
CREATE TABLE `site_content` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `content_key` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_content_key` (`content_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `site_content` (`content_key`,`title`,`content`) VALUES
('intro_heading','Judul Tentang Kami','Membangun Insan Farmasi yang Unggul dan Humanis'),
('intro_text','Isi Tentang Kami','STIFAR Semarang berkomitmen menjadi institusi pendidikan tinggi farmasi yang berintegritas, inovatif, unggul, dan berwawasan lingkungan. Melalui pendidikan, penelitian, dan pengabdian kepada masyarakat, STIFAR Semarang membentuk lulusan profesional, berakhlak mulia, adaptif terhadap perkembangan teknologi, serta memiliki kepedulian terhadap kesehatan dan kemanusiaan.'),
('intro_link_text','Teks tautan Tentang Kami','Kenali kami lebih dekat'),
('alumni_eyebrow','Label Alumni','JEJAK LULUSAN KAMI'),
('alumni_title','Judul Alumni','Cerita Alumni.'),
('news_eyebrow','Label Berita','KABAR TERKINI'),
('news_title','Judul Berita','Berita Utama Kampus.'),
('news_link_text','Teks tautan Berita','Semua berita'),
('portal_eyebrow','Label Portal Sistem','AKSES CEPAT'),
('portal_title','Judul Portal Sistem','Portal Sistem'),
('ketua_eyebrow','Label Sambutan Ketua','Sambutan Ketua STIFAR Yayasan Pharmasi Semarang'),
('kerjasama_title','Judul Kerjasama','Kerjasama Kami.'),
('footer_about_title','Judul Footer','STIFAR SEMARANG'),
('footer_about_tagline','Tagline Footer','Institute of Technology');
