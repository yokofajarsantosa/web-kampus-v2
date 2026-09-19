-- CMS update for an existing installation.
-- Run this AFTER importing the original database schema.
-- Designed for MySQL 8.x.

ALTER TABLE `site_settings`
  ADD COLUMN IF NOT EXISTS `ketua_nama` varchar(200) DEFAULT NULL AFTER `ketua_stifar`,
  ADD COLUMN IF NOT EXISTS `ketua_jabatan` varchar(255) DEFAULT NULL AFTER `ketua_nama`,
  ADD COLUMN IF NOT EXISTS `ketua_sambutan` longtext DEFAULT NULL AFTER `ketua_jabatan`,
  ADD COLUMN IF NOT EXISTS `intro_text` longtext DEFAULT NULL AFTER `ketua_sambutan`;

UPDATE `site_settings` SET
  `ketua_nama`=COALESCE(NULLIF(`ketua_nama`,''),'Dr. apt. Endang Diyah Ikasari, M.Si'),
  `ketua_jabatan`=COALESCE(NULLIF(`ketua_jabatan`,''),'Ketua STIFAR Yayasan Pharmasi Semarang'),
  `ketua_sambutan`=COALESCE(NULLIF(`ketua_sambutan`,''),'Stifar Yayasan Pharmasi Semarang merupakan lembaga pendidikan tinggi kefarmasian terkemuka di Indonesia yang terus berkembang, beradaptasi, dan berinovasi. Kami berkomitmen tidak hanya menghasilkan lulusan yang pintar secara akademik, tetapi juga bermoral, berkarakter kuat, dan siap memasuki dunia kerja. Di tengah kemajuan teknologi kesehatan yang pesat dan tuntutan era globalisasi, komitmen kami lakukan melalui kurikulum berbasis kompetensi yang relevan dengan kebutuhan industri farmasi, rumah sakit, klinis, hingga kosmetika, fasilitas laboratorium yang modern, staf pengajar dengan kualifikasi magister dan doktor, serta para praktisi yang kompeten di bidangnya serta jejaring alumni dan industri yang luas. Pendidikan adalah investasi terbaik untuk masa depan. Bersama Stifar Yayasan Pharmasi Semarang mari kita ubah tantangan global menjadi peluang keberhasilan'),
  `intro_text`=COALESCE(NULLIF(`intro_text`,''),'STIFAR Semarang berkomitmen menjadi institusi pendidikan tinggi farmasi yang berintegritas, inovatif, unggul, dan berwawasan lingkungan. Melalui pendidikan, penelitian, dan pengabdian kepada masyarakat, STIFAR Semarang membentuk lulusan profesional, berakhlak mulia, adaptif terhadap perkembangan teknologi, serta memiliki kepedulian terhadap kesehatan dan kemanusiaan.')
WHERE `id`=1;

CREATE TABLE IF NOT EXISTS `site_navigation` (
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

INSERT IGNORE INTO `site_navigation` (`nav_key`,`label`,`url`,`active`,`sort_order`) VALUES
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

CREATE TABLE IF NOT EXISTS `site_content` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `content_key` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_content_key` (`content_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT IGNORE INTO `site_content` (`content_key`,`title`,`content`) VALUES
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


-- CMS PAGE MODULES: one controller/model/view per navbar
CREATE TABLE IF NOT EXISTS `site_pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nav_key` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext,
  `image_url` varchar(1000) DEFAULT NULL,
  `source_url` varchar(1000) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_site_pages_nav_key` (`nav_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_001','HOME','Konten halaman HOME dapat diubah melalui Portal Admin.','','#home',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_002','PROFIL','Konten halaman PROFIL dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_003','Akreditasi','Konten halaman Akreditasi dapat diubah melalui Portal Admin.','','#sejarah',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_004','Sertifikat Akreditasi BAN-PT (2017)','Konten halaman Sertifikat Akreditasi BAN-PT (2017) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_005','Sertifikat Akreditasi BAN-PT (2022)','Konten halaman Sertifikat Akreditasi BAN-PT (2022) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_006','SUKET AIPT','Konten halaman SUKET AIPT dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_007','Visi dan Misi','Konten halaman Visi dan Misi dapat diubah melalui Portal Admin.','','#VisiMisi',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_008','Struktur Organisasi','Konten halaman Struktur Organisasi dapat diubah melalui Portal Admin.','','#StrukturOrganisasi',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_009','Profil Dosen','Konten halaman Profil Dosen dapat diubah melalui Portal Admin.','','#ProfilDosen',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_010','Panduan Akademik','Konten halaman Panduan Akademik dapat diubah melalui Portal Admin.','','#PanduanAkademik',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_011','PROGRAM STUDI','Konten halaman PROGRAM STUDI dapat diubah melalui Portal Admin.','','#program-studi',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_012','D3 Anafarma','Konten halaman D3 Anafarma dapat diubah melalui Portal Admin.','','#d3-anafarma',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_013','Sejarah Program Studi','Konten halaman Sejarah Program Studi dapat diubah melalui Portal Admin.','','#anafarma-sejarah',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_014','Visi dan Misi','Konten halaman Visi dan Misi dapat diubah melalui Portal Admin.','','#anafarma-visi-misi',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_015','Pengelola','Konten halaman Pengelola dapat diubah melalui Portal Admin.','','#anafarma-pengelola',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_016','Akreditasi','Konten halaman Akreditasi dapat diubah melalui Portal Admin.','','#anafarma-akreditasi',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_017','Sertifikat Akreditasi LAM-PTKes (2025)','Konten halaman Sertifikat Akreditasi LAM-PTKes (2025) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_018','SK Akreditasi LAM-PTKes (2022)','Konten halaman SK Akreditasi LAM-PTKes (2022) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_019','SK Akreditasi LAM-PTKes (2017)','Konten halaman SK Akreditasi LAM-PTKes (2017) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_020','Sertifikat Akreditasi BAN-PT (2012)','Konten halaman Sertifikat Akreditasi BAN-PT (2012) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_021','Sertifikat Akreditasi Depkes (2007)','Konten halaman Sertifikat Akreditasi Depkes (2007) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_022','Akademik','Konten halaman Akademik dapat diubah melalui Portal Admin.','','#anafarma-akademik',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_023','Kalender Akademik Anafarma','Konten halaman Kalender Akademik Anafarma dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_024','Jadwal Kuliah','Konten halaman Jadwal Kuliah dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_025','Karya Tulis Ilmiah','Konten halaman Karya Tulis Ilmiah dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_026','Panduan Penulisan KTI','Konten halaman Panduan Penulisan KTI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_027','Halaman Pengesahan','Konten halaman Halaman Pengesahan dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_028','Alur KTI','Konten halaman Alur KTI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_029','Kartu Kehadiran KTI','Konten halaman Kartu Kehadiran KTI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_030','Kartu Bimbingan KTI','Konten halaman Kartu Bimbingan KTI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_031','Halaman Pernyataan Plagiarisme','Konten halaman Halaman Pernyataan Plagiarisme dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_032','Panduan PKL','Konten halaman Panduan PKL dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_033','Kurikulum','Konten halaman Kurikulum dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_034','Testimoni Alumni','Konten halaman Testimoni Alumni dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_035','D3 Farmasi','Konten halaman D3 Farmasi dapat diubah melalui Portal Admin.','','#d3-farmasi',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_036','Sejarah Program Studi','Konten halaman Sejarah Program Studi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_037','Visi dan Misi','Konten halaman Visi dan Misi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_038','Pengelola','Konten halaman Pengelola dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_039','Akreditasi','Konten halaman Akreditasi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_040','Sertifikat Akreditasi LAM-PTKes (2025)','Konten halaman Sertifikat Akreditasi LAM-PTKes (2025) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_041','SK Akreditasi LAM-PTKes (2021)','Konten halaman SK Akreditasi LAM-PTKes (2021) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_042','SK Akreditasi LAM-PTKes (2016)','Konten halaman SK Akreditasi LAM-PTKes (2016) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_043','Sertifikat Akreditasi BAN-PT (2012)','Konten halaman Sertifikat Akreditasi BAN-PT (2012) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_044','Sertifikat Akreditasi Depkes (2008)','Konten halaman Sertifikat Akreditasi Depkes (2008) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_045','Akademik','Konten halaman Akademik dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_046','Karya Tulis Ilmiah','Konten halaman Karya Tulis Ilmiah dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_047','KTI D3 Farmasi Baru April 2024','Konten halaman KTI D3 Farmasi Baru April 2024 dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_048','Formulir Persetujuan Sidang KTI','Konten halaman Formulir Persetujuan Sidang KTI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_049','Formulir Pengajuan KTI 2023 (Non Proyek)','Konten halaman Formulir Pengajuan KTI 2023 (Non Proyek) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_050','Formulir Pengajuan KTI 2023 (Proyek Dosen)','Konten halaman Formulir Pengajuan KTI 2023 (Proyek Dosen) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_051','Buku Pedoman Penulisan KTI','Konten halaman Buku Pedoman Penulisan KTI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_052','Alur KTI','Konten halaman Alur KTI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_053','Kartu Kehadiran KTI','Konten halaman Kartu Kehadiran KTI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_054','Kartu Bimbingan KTI','Konten halaman Kartu Bimbingan KTI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_055','Halaman Pernyataan Plagiarisme','Konten halaman Halaman Pernyataan Plagiarisme dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_056','Surat Pernyataan Pengambilan Data KTI','Konten halaman Surat Pernyataan Pengambilan Data KTI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_057','Kalender Akademik','Konten halaman Kalender Akademik dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_058','Jadwal Kuliah','Konten halaman Jadwal Kuliah dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_059','Panduan PKL','Konten halaman Panduan PKL dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_060','Kurikulum','Konten halaman Kurikulum dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_061','Testimoni Alumni','Konten halaman Testimoni Alumni dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_062','S1 Farmasi','Konten halaman S1 Farmasi dapat diubah melalui Portal Admin.','','#s1-farmasi',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_063','Sejarah Program Studi','Konten halaman Sejarah Program Studi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_064','Visi dan Misi','Konten halaman Visi dan Misi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_065','Pengelola','Konten halaman Pengelola dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_066','Akreditasi','Konten halaman Akreditasi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_067','SK Akreditasi LAM-PTKes (2022)','Konten halaman SK Akreditasi LAM-PTKes (2022) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_068','SK Akreditasi LAM-PTKes (2018)','Konten halaman SK Akreditasi LAM-PTKes (2018) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_069','SK Akreditasi BAN-PT (2013)','Konten halaman SK Akreditasi BAN-PT (2013) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_070','SK Akreditasi BAN-PT (2008)','Konten halaman SK Akreditasi BAN-PT (2008) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_071','SK Akreditasi BAN-PT (2003)','Konten halaman SK Akreditasi BAN-PT (2003) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_072','Akademik','Konten halaman Akademik dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_073','Skripsi','Konten halaman Skripsi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_074','Berkas Skripsi Terbaru','Konten halaman Berkas Skripsi Terbaru dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_075','Panduan Penulisan Skripsi','Konten halaman Panduan Penulisan Skripsi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_076','Panduan Pelaksanaan Skripsi','Konten halaman Panduan Pelaksanaan Skripsi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_077','Pedoman Sitasi Mendeley','Konten halaman Pedoman Sitasi Mendeley dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_078','Kartu Kehadiran Skripsi','Konten halaman Kartu Kehadiran Skripsi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_079','Kartu Bimbingan Skripsi','Konten halaman Kartu Bimbingan Skripsi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_080','Surat Keterangan Bebas Keuangan','Konten halaman Surat Keterangan Bebas Keuangan dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_081','Kurikulum','Konten halaman Kurikulum dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_082','Testimoni Alumni','Konten halaman Testimoni Alumni dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_083','Profesi Apoteker','Konten halaman Profesi Apoteker dapat diubah melalui Portal Admin.','','#profesi-apoteker',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_084','Sejarah Program Studi','Konten halaman Sejarah Program Studi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_085','Visi dan Misi','Konten halaman Visi dan Misi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_086','Pengelola','Konten halaman Pengelola dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_087','Akreditasi','Konten halaman Akreditasi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_088','SK Akreditasi LAM-PTKes (2022)','Konten halaman SK Akreditasi LAM-PTKes (2022) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_089','SK Akreditasi LAM-PTKes (2017)','Konten halaman SK Akreditasi LAM-PTKes (2017) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_090','SK Akreditasi BAN-PT (2012)','Konten halaman SK Akreditasi BAN-PT (2012) dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_091','Akademik','Konten halaman Akademik dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_092','Testimoni Alumni','Konten halaman Testimoni Alumni dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_093','Magister Farmasi','Konten halaman Magister Farmasi dapat diubah melalui Portal Admin.','','#magister-farmasi',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_094','UPT','Konten halaman UPT dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_095','BAAU-BAAK','Konten halaman BAAU-BAAK dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_096','Informasi','Konten halaman Informasi dapat diubah melalui Portal Admin.','','https://stifar.ac.id/bau-baak/',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_097','Surat Permohonan Pengunduran Pembayaran','Konten halaman Surat Permohonan Pengunduran Pembayaran dapat diubah melalui Portal Admin.','','https://docs.google.com/document/d/1VjBmDdAwTVyn13DIgAtRuRerYWfzqjBK/edit?usp=sharing&ouid=101168995535047925500&rtpof=true&sd=true',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_098','Formulir Tahapan Skripsi','Konten halaman Formulir Tahapan Skripsi dapat diubah melalui Portal Admin.','','https://docs.google.com/document/d/1xr3HAAIaIJWpTKYagug3JVkQg2-y2U7H/edit?usp=sharing&ouid=101168995535047925500&rtpof=true&sd=true',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_099','Formulir Tahapan KTI','Konten halaman Formulir Tahapan KTI dapat diubah melalui Portal Admin.','','https://docs.google.com/document/d/1RQWOZC6DipRhhPgFO7D9Dsl7pkay5eZv/edit?usp=sharing&ouid=101168995535047925500&rtpof=true&sd=true',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_100','Form KTM','Konten halaman Form KTM dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_101','KTM S1 Farmasi','Konten halaman KTM S1 Farmasi dapat diubah melalui Portal Admin.','','https://docs.google.com/forms/d/14gBZ8J4sEayoJENNaR0IYLwQgdDsA7n88Yx5ycNLzEE/edit',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_102','KTM Apoteker','Konten halaman KTM Apoteker dapat diubah melalui Portal Admin.','','https://docs.google.com/forms/d/1DBm-euOrEpw_PbLGZSpGxfUDyV_0IOv0CAQPtR8uDJE/edit',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_103','KTM D3 Anafarma','Konten halaman KTM D3 Anafarma dapat diubah melalui Portal Admin.','','https://docs.google.com/forms/d/1SAXwieF1ZOODwDnYhMu0VeLtub9WqfB-j5mVaStMTaQ/edit?usp=drive_web',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_104','KTM D3 Farmasi','Konten halaman KTM D3 Farmasi dapat diubah melalui Portal Admin.','','https://docs.google.com/forms/d/1oc8wCKRPjWFKi-cXu6JaOpu9GMzzwqRPHtv_SSEKLWU/edit?usp=drive_web',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_105','KTM S2 Farmasi','Konten halaman KTM S2 Farmasi dapat diubah melalui Portal Admin.','','https://docs.google.com/forms/d/13u6SGkaZwXKQ1cHnwH0_O1Sk1s51_APY5HLVMkaNI2c/edit',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_106','Kuesioner Pelayanan','Konten halaman Kuesioner Pelayanan dapat diubah melalui Portal Admin.','','https://docs.google.com/forms/d/e/1FAIpQLSdedLXBXTSsaZgenJR516pqeJXdi5tL3vvsKJirw2URTGf_fg/viewform?usp=sharing',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_107','LPM','Konten halaman LPM dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_108','SPMI','Konten halaman SPMI dapat diubah melalui Portal Admin.','','https://stifar.ac.id/spmi',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_109','AMI','Konten halaman AMI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_110','AMI 2024 – 2025','Konten halaman AMI 2024 – 2025 dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_111','Laporan PPEPP 2024-2025','Konten halaman Laporan PPEPP 2024-2025 dapat diubah melalui Portal Admin.','','https://stifar.ac.id/laporan-ppepp-penetapan-pelaksanaan-evaluasi-pengendalian-peningkatan',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_112','Laporan AMI 2024-2025','Konten halaman Laporan AMI 2024-2025 dapat diubah melalui Portal Admin.','','https://stifar.ac.id/laporan-ami-2024-2025',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_113','RTM 2024-2025','Konten halaman RTM 2024-2025 dapat diubah melalui Portal Admin.','','https://stifar.ac.id/r/',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_114','RTL 2024-2025','Konten halaman RTL 2024-2025 dapat diubah melalui Portal Admin.','','https://stifar.ac.id/rencana-tindak-lanjut',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_115','RENSTRA','Konten halaman RENSTRA dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_116','RENSTRA 2021-2025','Konten halaman RENSTRA 2021-2025 dapat diubah melalui Portal Admin.','','https://stifar.ac.id/renstra-rencana-strategis-2021-2025',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_117','RENSTRA 2026-2030','Konten halaman RENSTRA 2026-2030 dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_118','RENOP','Konten halaman RENOP dapat diubah melalui Portal Admin.','','https://stifar.ac.id/renop-rencana-operasional',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_119','Informasi','Konten halaman Informasi dapat diubah melalui Portal Admin.','','https://stifar.ac.id/lembaga-penjamin-mutu-lpm/',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_120','Kuesioner Pelayanan','Konten halaman Kuesioner Pelayanan dapat diubah melalui Portal Admin.','','https://stifar.ac.id/kuisioner-pelayanan',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_121','Kuesioner Sarana dan Prasarana','Konten halaman Kuesioner Sarana dan Prasarana dapat diubah melalui Portal Admin.','','https://bit.ly/KuisionerKepuasanSarprasStifar',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_122','LPPM','Konten halaman LPPM dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_123','Informasi','Konten halaman Informasi dapat diubah melalui Portal Admin.','','http://lppm.stifar.ac.id/',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_124','Kuesioner Pelayanan','Konten halaman Kuesioner Pelayanan dapat diubah melalui Portal Admin.','','https://forms.gle/rDzSbeGzLyHFRBKG8',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_125','Perpustakaan','Konten halaman Perpustakaan dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_126','Web Perpustakaan','Konten halaman Web Perpustakaan dapat diubah melalui Portal Admin.','','http://perpustakaan.stifar.ac.id/',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_127','Informasi','Konten halaman Informasi dapat diubah melalui Portal Admin.','','https://stifar.ac.id/unit-pelaksana-teknis-upt-perpustakaan/',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_128','Kuesioner Pelayanan','Konten halaman Kuesioner Pelayanan dapat diubah melalui Portal Admin.','','https://forms.gle/3fKA5vxAsTpQMbMM7',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_129','Perpustakaan Online','Konten halaman Perpustakaan Online dapat diubah melalui Portal Admin.','','http://perpustakaan.stifar.ac.id/',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_130','Laboratorium','Konten halaman Laboratorium dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_131','Informasi','Konten halaman Informasi dapat diubah melalui Portal Admin.','','https://stifar.ac.id/unit-pelaksana-teknis-upt-laboratorium/',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_132','Kuesioner Pelayanan','Konten halaman Kuesioner Pelayanan dapat diubah melalui Portal Admin.','','https://bit.ly/3IFl3n9',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_133','Teknologi Informasi','Konten halaman Teknologi Informasi dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_134','Informasi','Konten halaman Informasi dapat diubah melalui Portal Admin.','','https://stifar.ac.id/unit-pelaksana-teknis-upt-komputer/',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_135','Kuesioner Pelayanan','Konten halaman Kuesioner Pelayanan dapat diubah melalui Portal Admin.','','https://forms.gle/Ch2u3CtDBfxHUzGs5',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_136','KEPK & DETERMINASI','Konten halaman KEPK & DETERMINASI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_137','KEPK','Konten halaman KEPK dapat diubah melalui Portal Admin.','','#kepk',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_138','DETERMINASI','Konten halaman DETERMINASI dapat diubah melalui Portal Admin.','','#determinasi',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_139','Kuesioner Pelayanan KEPK','Konten halaman Kuesioner Pelayanan KEPK dapat diubah melalui Portal Admin.','','#prosedur',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_140','ALUMNI','Konten halaman ALUMNI dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_141','Karier','Konten halaman Karier dapat diubah melalui Portal Admin.','','#data-alumni',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_142','Survey Kepuasan Pengunaan Lulusan','Konten halaman Survey Kepuasan Pengunaan Lulusan dapat diubah melalui Portal Admin.','','#tracer-study',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_143','Tracer Study','Konten halaman Tracer Study dapat diubah melalui Portal Admin.','','#ikatan-alumni',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_144','FASILITAS','Konten halaman FASILITAS dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_145','MITRA PMB','Konten halaman MITRA PMB dapat diubah melalui Portal Admin.','','#',1);
INSERT IGNORE INTO `site_pages` (`nav_key`,`title`,`content`,`image_url`,`source_url`,`active`) VALUES ('nav_146','PMB','Konten halaman PMB dapat diubah melalui Portal Admin.','','#',1);
