<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= html_escape($site['name'] ?? 'Stifar Semarang') ?> |
    <?= html_escape($site['tagline'] ?? 'Kampus untuk masa depan') ?></title>
  <meta name="description" content="<?= html_escape($site['description'] ?? '') ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/site.css') ?>">
</head>

<body>
  <?php $content = function ($key, $default = '') use ($contents) {
    return isset($contents[$key]) && $contents[$key] !== '' ? $contents[$key] : $default; }; ?>
  <header class="site-header">
    <div class="topbar">
      <div class="container topbar-inner"><span><?= html_escape($site['phone'] ?? '') ?> ·
          <?= html_escape($site['email'] ?? '') ?></span><span>English · <a href="#faq">FAQ</a> · <a href="#news">Berita
            Utama</a> · <a href="#kontak">Kontak</a></span></div>
    </div>
    <nav class="nav container">
      <a class="brand" href="#home"><?php if (!empty($site['logo_url'])): ?><img
            src="<?= html_escape($site['logo_url']) ?>" alt="<?= html_escape($site['name'] ?? 'STIFAR SEMARANG') ?>"
            style="width:46px;height:46px;object-fit:contain;border-radius:8px"><?php else: ?><span
            class="brand-mark">ST</span><?php endif; ?><span><b><?= html_escape($site['name'] ?? 'STIFAR SEMARANG') ?></b><small><?= html_escape($site['tagline'] ?? 'Institute of Technology') ?></small></span></a>
      <button class="menu-toggle" type="button" aria-label="Buka menu" aria-expanded="false">☰</button>
      <div class="nav-links">
        <a href="<?= html_escape(base_url('home')) ?>">HOME</a>
        <!-- PROFIL -->
        <div class="dropdown">
          <a href="#">PROFIL</a>
          <div class="dropdown-menu">
            <a data-nav-key="nav_003" href="#Akreditasi">Akreditasi</a>
            <a data-nav-key="nav_007" href="#VisiMisi">Visi dan Misi</a>
            <a data-nav-key="nav_008" href="#StrukturOrganisasi">Struktur Organisasi</a>
            <a data-nav-key="nav_009" href="#ProfilDosen">Profil Dosen</a>
            <a data-nav-key="nav_010" href="#PanduanAkademik">Panduan Akademik</a>
          </div>
        </div>

        <!-- PROGRAM STUDI -->
        <div class="dropdown">
          <a href="#">PROGRAM STUDI</a>

          <div class="dropdown-menu">

            <!-- D3 ANAFARMA -->
            <div class="dropdown-submenu">
              <a href="#" class="submenu-toggle">
                D3 Anafarma <span>›</span>
              </a>

              <div class="dropdown-submenu-menu">

                <a data-nav-key="nav_013" href="#anafarma-sejarah">Sejarah Program Studi</a>
                <a data-nav-key="nav_014" href="#anafarma-visi-misi">Visi dan Misi</a>
                <a data-nav-key="nav_015" href="#anafarma-pengelola">Pengelola</a>

                <div class="dropdown-submenu">
                  <a href="#" class="submenu-toggle">
                    Akreditasi <span>›</span>
                  </a>

                  <div class="dropdown-submenu-menu">
                    <a data-nav-key="nav_017" href="#">Sertifikat Akreditasi LAM-PTKes (2025)</a>
                    <a data-nav-key="nav_018" href="#">SK Akreditasi LAM-PTKes (2022)</a>
                    <a data-nav-key="nav_019" href="#">SK Akreditasi LAM-PTKes (2017)</a>
                    <a data-nav-key="nav_020" href="#">Sertifikat Akreditasi BAN-PT (2012)</a>
                    <a data-nav-key="nav_021" href="#">Sertifikat Akreditasi Depkes (2007)</a>
                  </div>
                </div>

                <div class="dropdown-submenu">
                  <a data-nav-key="nav_022" href="#anafarma-akademik" class="submenu-toggle">
                    Akademik <span>›</span>
                  </a>

                  <div class="dropdown-submenu-menu">
                    <a data-nav-key="nav_023" href="#">Kalender Akademik Anafarma</a>
                    <a data-nav-key="nav_024" href="#">Jadwal Kuliah</a>

                    <div class="dropdown-submenu">
                      <a data-nav-key="nav_025" href="#" class="submenu-toggle">
                        Karya Tulis Ilmiah <span>›</span>
                      </a>

                      <div class="dropdown-submenu-menu">
                        <a data-nav-key="nav_026" href="#">Panduan Penulisan KTI</a>
                        <a data-nav-key="nav_027" href="#">Halaman Pengesahan</a>
                        <a data-nav-key="nav_028" href="#">Alur KTI</a>
                        <a data-nav-key="nav_029" href="#">Kartu Kehadiran KTI</a>
                        <a data-nav-key="nav_030" href="#">Kartu Bimbingan KTI</a>
                        <a data-nav-key="nav_031" href="#">Halaman Pernyataan Plagiarisme</a>
                      </div>
                    </div>

                    <a data-nav-key="nav_032" href="#">Panduan PKL</a>
                    <a data-nav-key="nav_033" href="#">Kurikulum</a>
                  </div>
                </div>

                <a data-nav-key="nav_034" href="#">Testimoni Alumni</a>

              </div>
            </div>


            <!-- D3 FARMASI -->
            <div class="dropdown-submenu">
              <a data-nav-key="nav_035" href="#d3-farmasi" class="submenu-toggle">
                D3 Farmasi <span>›</span>
              </a>

              <div class="dropdown-submenu-menu">

                <a data-nav-key="nav_036" href="#">Sejarah Program Studi</a>
                <a data-nav-key="nav_037" href="#">Visi dan Misi</a>
                <a data-nav-key="nav_038" href="#">Pengelola</a>

                <div class="dropdown-submenu">
                  <a data-nav-key="nav_039" href="#" class="submenu-toggle">
                    Akreditasi <span>›</span>
                  </a>

                  <div class="dropdown-submenu-menu">
                    <a data-nav-key="nav_040" href="#">Sertifikat Akreditasi LAM-PTKes (2025)</a>
                    <a data-nav-key="nav_041" href="#">SK Akreditasi LAM-PTKes (2021)</a>
                    <a data-nav-key="nav_042" href="#">SK Akreditasi LAM-PTKes (2016)</a>
                    <a data-nav-key="nav_043" href="#">Sertifikat Akreditasi BAN-PT (2012)</a>
                    <a data-nav-key="nav_044" href="#">Sertifikat Akreditasi Depkes (2008)</a>
                  </div>
                </div>

                <div class="dropdown-submenu">
                  <a data-nav-key="nav_045" href="#" class="submenu-toggle">
                    Akademik <span>›</span>
                  </a>

                  <div class="dropdown-submenu-menu">

                    <div class="dropdown-submenu">
                      <a data-nav-key="nav_046" href="#" class="submenu-toggle">
                        Karya Tulis Ilmiah <span>›</span>
                      </a>

                      <div class="dropdown-submenu-menu">
                        <a data-nav-key="nav_047" href="#">KTI D3 Farmasi Baru April 2024</a>
                        <a data-nav-key="nav_048" href="#">Formulir Persetujuan Sidang KTI</a>
                        <a data-nav-key="nav_049" href="#">Formulir Pengajuan KTI 2023 (Non Proyek)</a>
                        <a data-nav-key="nav_050" href="#">Formulir Pengajuan KTI 2023 (Proyek Dosen)</a>
                        <a data-nav-key="nav_051" href="#">Buku Pedoman Penulisan KTI</a>
                        <a data-nav-key="nav_052" href="#">Alur KTI</a>
                        <a data-nav-key="nav_053" href="#">Kartu Kehadiran KTI</a>
                        <a data-nav-key="nav_054" href="#">Kartu Bimbingan KTI</a>
                        <a data-nav-key="nav_055" href="#">Halaman Pernyataan Plagiarisme</a>
                        <a data-nav-key="nav_056" href="#">Surat Pernyataan Pengambilan Data KTI</a>
                      </div>
                    </div>

                    <a data-nav-key="nav_057" href="#">Kalender Akademik</a>
                    <a data-nav-key="nav_058" href="#">Jadwal Kuliah</a>
                    <a data-nav-key="nav_059" href="#">Panduan PKL</a>
                    <a data-nav-key="nav_060" href="#">Kurikulum</a>

                  </div>
                </div>

                <a data-nav-key="nav_061" href="#">Testimoni Alumni</a>

              </div>
            </div>


            <!-- S1 FARMASI -->
            <div class="dropdown-submenu">
              <a data-nav-key="nav_062" href="#s1-farmasi" class="submenu-toggle">
                S1 Farmasi <span>›</span>
              </a>

              <div class="dropdown-submenu-menu">

                <a data-nav-key="nav_063" href="#">Sejarah Program Studi</a>
                <a data-nav-key="nav_064" href="#">Visi dan Misi</a>
                <a data-nav-key="nav_065" href="#">Pengelola</a>

                <div class="dropdown-submenu">
                  <a data-nav-key="nav_066" href="#" class="submenu-toggle">
                    Akreditasi <span>›</span>
                  </a>

                  <div class="dropdown-submenu-menu">
                    <a data-nav-key="nav_067" href="#">SK Akreditasi LAM-PTKes (2022)</a>
                    <a data-nav-key="nav_068" href="#">SK Akreditasi LAM-PTKes (2018)</a>
                    <a data-nav-key="nav_069" href="#">SK Akreditasi BAN-PT (2013)</a>
                    <a data-nav-key="nav_070" href="#">SK Akreditasi BAN-PT (2008)</a>
                    <a data-nav-key="nav_071" href="#">SK Akreditasi BAN-PT (2003)</a>
                  </div>
                </div>

                <div class="dropdown-submenu">
                  <a data-nav-key="nav_072" href="#" class="submenu-toggle">
                    Akademik <span>›</span>
                  </a>

                  <div class="dropdown-submenu-menu">

                    <div class="dropdown-submenu">
                      <a data-nav-key="nav_073" href="#" class="submenu-toggle">
                        Skripsi <span>›</span>
                      </a>

                      <div class="dropdown-submenu-menu">
                        <a data-nav-key="nav_074" href="#">Berkas Skripsi Terbaru</a>
                        <a data-nav-key="nav_075" href="#">Panduan Penulisan Skripsi</a>
                        <a data-nav-key="nav_076" href="#">Panduan Pelaksanaan Skripsi</a>
                        <a data-nav-key="nav_077" href="#">Pedoman Sitasi Mendeley</a>
                        <a data-nav-key="nav_078" href="#">Kartu Kehadiran Skripsi</a>
                        <a data-nav-key="nav_079" href="#">Kartu Bimbingan Skripsi</a>
                        <a data-nav-key="nav_080" href="#">Surat Keterangan Bebas Keuangan</a>
                      </div>
                    </div>

                    <a data-nav-key="nav_081" href="#">Kurikulum</a>

                  </div>
                </div>

                <a data-nav-key="nav_082" href="#">Testimoni Alumni</a>

              </div>
            </div>


            <!-- PROFESI APOTEKER -->
            <div class="dropdown-submenu">
              <a data-nav-key="nav_083" href="#profesi-apoteker" class="submenu-toggle">
                Profesi Apoteker <span>›</span>
              </a>

              <div class="dropdown-submenu-menu">

                <a data-nav-key="nav_084" href="#">Sejarah Program Studi</a>
                <a data-nav-key="nav_085" href="#">Visi dan Misi</a>
                <a data-nav-key="nav_086" href="#">Pengelola</a>

                <div class="dropdown-submenu">
                  <a data-nav-key="nav_087" href="#" class="submenu-toggle">
                    Akreditasi <span>›</span>
                  </a>

                  <div class="dropdown-submenu-menu">
                    <a data-nav-key="nav_088" href="#">SK Akreditasi LAM-PTKes (2022)</a>
                    <a data-nav-key="nav_089" href="#">SK Akreditasi LAM-PTKes (2017)</a>
                    <a data-nav-key="nav_090" href="#">SK Akreditasi BAN-PT (2012)</a>
                  </div>
                </div>

                <div class="dropdown-submenu">
                  <a data-nav-key="nav_091" href="#" class="submenu-toggle">
                    Akademik <span>›</span>
                  </a>

                  <div class="dropdown-submenu-menu">
                    <!-- Tambahkan dokumen akademik di sini -->
                  </div>
                </div>

                <a data-nav-key="nav_092" href="#">Testimoni Alumni</a>

              </div>
            </div>


            <!-- MAGISTER FARMASI -->
            <div>
              <a data-nav-key="nav_093" href="#magister-farmasi">
                Magister Farmasi
              </a>
            </div>

          </div>
        </div>

        <!-- UPT -->
        <div class="dropdown">

          <a>UPT</a>

          <div class="dropdown-menu">

            <!-- =====================================================
              BAAU - BAAK
          ====================================================== -->
            <div class="dropdown-submenu">

              <a data-nav-key="nav_095" href="#" class="submenu-toggle">
                BAAU-BAAK <span>›</span>
              </a>

              <div class="dropdown-submenu-menu">

                <a data-nav-key="nav_096" href="https://stifar.ac.id/bau-baak/">
                  Informasi
                </a>

                <a data-nav-key="nav_097"
                  href="https://docs.google.com/document/d/1VjBmDdAwTVyn13DIgAtRuRerYWfzqjBK/edit?usp=sharing&ouid=101168995535047925500&rtpof=true&sd=true">
                  Surat Permohonan Pengunduran Pembayaran
                </a>

                <a data-nav-key="nav_098"
                  href="https://docs.google.com/document/d/1xr3HAAIaIJWpTKYagug3JVkQg2-y2U7H/edit?usp=sharing&ouid=101168995535047925500&rtpof=true&sd=true">
                  Formulir Tahapan Skripsi
                </a>

                <a data-nav-key="nav_099"
                  href="https://docs.google.com/document/d/1RQWOZC6DipRhhPgFO7D9Dsl7pkay5eZv/edit?usp=sharing&ouid=101168995535047925500&rtpof=true&sd=true">
                  Formulir Tahapan KTI
                </a>


                <!-- KTM -->
                <div class="dropdown-submenu">

                  <a data-nav-key="nav_100" href="#" class="submenu-toggle">
                    Form KTM <span>›</span>
                  </a>

                  <div class="dropdown-submenu-menu">

                    <a data-nav-key="nav_101"
                      href="https://docs.google.com/forms/d/14gBZ8J4sEayoJENNaR0IYLwQgdDsA7n88Yx5ycNLzEE/edit">
                      KTM S1 Farmasi
                    </a>

                    <a data-nav-key="nav_102"
                      href="https://docs.google.com/forms/d/1DBm-euOrEpw_PbLGZSpGxfUDyV_0IOv0CAQPtR8uDJE/edit">
                      KTM Apoteker
                    </a>

                    <a data-nav-key="nav_103"
                      href="https://docs.google.com/forms/d/1SAXwieF1ZOODwDnYhMu0VeLtub9WqfB-j5mVaStMTaQ/edit?usp=drive_web">
                      KTM D3 Anafarma
                    </a>

                    <a data-nav-key="nav_104"
                      href="https://docs.google.com/forms/d/1oc8wCKRPjWFKi-cXu6JaOpu9GMzzwqRPHtv_SSEKLWU/edit?usp=drive_web">
                      KTM D3 Farmasi
                    </a>

                    <a data-nav-key="nav_105"
                      href="https://docs.google.com/forms/d/13u6SGkaZwXKQ1cHnwH0_O1Sk1s51_APY5HLVMkaNI2c/edit">
                      KTM S2 Farmasi
                    </a>

                  </div>
                </div>


                <a data-nav-key="nav_106"
                  href="https://docs.google.com/forms/d/e/1FAIpQLSdedLXBXTSsaZgenJR516pqeJXdi5tL3vvsKJirw2URTGf_fg/viewform?usp=sharing">
                  Kuesioner Pelayanan
                </a>

              </div>
            </div>


            <!-- =====================================================
              LPM
          ====================================================== -->
            <div class="dropdown-submenu">

              <a data-nav-key="nav_107" href="#" class="submenu-toggle">
                LPM <span>›</span>
              </a>

              <div class="dropdown-submenu-menu">

                <a data-nav-key="nav_108" href="https://stifar.ac.id/spmi">
                  SPMI
                </a>


                <!-- AMI -->
                <div class="dropdown-submenu is-accordion">

                  <a data-nav-key="nav_109" href="#" class="submenu-toggle">
                    AMI <span>›</span>
                  </a>

                  <div class="dropdown-submenu-menu">

                    <!-- AMI 2024 - 2025 -->
                    <div class="dropdown-submenu">

                      <a data-nav-key="nav_110" href="#" class="submenu-toggle">
                        AMI 2024 – 2025 <span>›</span>
                      </a>

                      <div class="dropdown-submenu-menu">

                        <a data-nav-key="nav_111"
                          href="https://stifar.ac.id/laporan-ppepp-penetapan-pelaksanaan-evaluasi-pengendalian-peningkatan">
                          Laporan PPEPP 2024-2025
                        </a>

                        <a data-nav-key="nav_112" href="https://stifar.ac.id/laporan-ami-2024-2025">
                          Laporan AMI 2024-2025
                        </a>

                        <a data-nav-key="nav_113" href="https://stifar.ac.id/r/">
                          RTM 2024-2025
                        </a>

                        <a data-nav-key="nav_114" href="https://stifar.ac.id/rencana-tindak-lanjut">
                          RTL 2024-2025
                        </a>

                      </div>
                    </div>

                  </div>
                </div>


                <!-- RENSTRA -->
                <div class="dropdown-submenu">

                  <a data-nav-key="nav_115" href="#" class="submenu-toggle">
                    RENSTRA <span>›</span>
                  </a>

                  <div class="dropdown-submenu-menu">

                    <a data-nav-key="nav_116" href="https://stifar.ac.id/renstra-rencana-strategis-2021-2025">
                      RENSTRA 2021-2025
                    </a>

                    <a data-nav-key="nav_117" href="#">
                      RENSTRA 2026-2030
                    </a>

                  </div>
                </div>


                <a data-nav-key="nav_118" href="https://stifar.ac.id/renop-rencana-operasional">
                  RENOP
                </a>

                <a data-nav-key="nav_119" href="https://stifar.ac.id/lembaga-penjamin-mutu-lpm/">
                  Informasi
                </a>

                <a data-nav-key="nav_120" href="https://stifar.ac.id/kuisioner-pelayanan">
                  Kuesioner Pelayanan
                </a>

                <a data-nav-key="nav_121" href="https://bit.ly/KuisionerKepuasanSarprasStifar">
                  Kuesioner Sarana dan Prasarana
                </a>

              </div>
            </div>


            <!-- =====================================================
              LPPM
          ====================================================== -->
            <div class="dropdown-submenu">

              <a data-nav-key="nav_122" class="submenu-toggle">
                LPPM <span>›</span>
              </a>

              <div class="dropdown-submenu-menu">

                <a data-nav-key="nav_123" href="http://lppm.stifar.ac.id/">
                  Informasi
                </a>

                <a data-nav-key="nav_124" href="https://forms.gle/rDzSbeGzLyHFRBKG8">
                  Kuesioner Pelayanan
                </a>

              </div>
            </div>


            <!-- =====================================================
              PERPUSTAKAAN
          ====================================================== -->
            <div class="dropdown-submenu">

              <a data-nav-key="nav_125" href="#" class="submenu-toggle">
                Perpustakaan <span>›</span>
              </a>

              <div class="dropdown-submenu-menu">
                <a data-nav-key="nav_126" href="http://perpustakaan.stifar.ac.id/">
                  Web Perpustakaan
                </a>

                <a data-nav-key="nav_127" href="https://stifar.ac.id/unit-pelaksana-teknis-upt-perpustakaan/">
                  Informasi
                </a>

                <a data-nav-key="nav_128" href="https://forms.gle/3fKA5vxAsTpQMbMM7">
                  Kuesioner Pelayanan
                </a>

                <a data-nav-key="nav_129" href="http://perpustakaan.stifar.ac.id/">
                  Perpustakaan Online
                </a>

              </div>
            </div>


            <!-- =====================================================
              LABORATORIUM
          ====================================================== -->
            <div class="dropdown-submenu">

              <a data-nav-key="nav_130" href="#" class="submenu-toggle">
                Laboratorium <span>›</span>
              </a>

              <div class="dropdown-submenu-menu">

                <a data-nav-key="nav_131" href="https://stifar.ac.id/unit-pelaksana-teknis-upt-laboratorium/">
                  Informasi
                </a>

                <a data-nav-key="nav_132" href="https://bit.ly/3IFl3n9">
                  Kuesioner Pelayanan
                </a>

              </div>
            </div>


            <!-- =====================================================
              TEKNOLOGI INFORMASI
          ====================================================== -->
            <div class="dropdown-submenu">

              <a data-nav-key="nav_133" href="#" class="submenu-toggle">
                Teknologi Informasi <span>›</span>
              </a>

              <div class="dropdown-submenu-menu">

                <a data-nav-key="nav_134" href="https://stifar.ac.id/unit-pelaksana-teknis-upt-komputer/">
                  Informasi
                </a>

                <a data-nav-key="nav_135" href="https://forms.gle/Ch2u3CtDBfxHUzGs5">
                  Kuesioner Pelayanan
                </a>

              </div>
            </div>

          </div>
        </div>

        <!-- KEPK -->
        <div class="dropdown">
          <a>KEPK &amp; DETERMINASI</a>
          <div class="dropdown-menu">
            <a data-nav-key="nav_137" href="#kepk">KEPK</a>
            <a data-nav-key="nav_138" href="#determinasi">DETERMINASI</a>
            <a data-nav-key="nav_139" href="#prosedur">Kuesioner Pelayanan KEPK</a>
          </div>
        </div>

        <!-- ALUMNI -->
        <div class="dropdown">
          <a>ALUMNI</a>
          <div class="dropdown-menu">
            <a data-nav-key="nav_141" href="#data-alumni">Karier</a>
            <a data-nav-key="nav_142" href="#tracer-study">Survey Kepuasan Pengunaan Lulusan</a>
            <a data-nav-key="nav_143" href="#ikatan-alumni">Tracer Study</a>
          </div>
        </div>
        <a data-nav-key="nav_144" href="#">FASILITAS</a>
        <a data-nav-key="nav_145" href="#">MITRA PMB</a>
        <a data-nav-key="nav_146" class="pmb" href="#">PMB</a>
        <!-- <a class="admin" href="<?= site_url('admin') ?>">Portal Admin</a> -->
      </div>
    </nav>
  </header>

  <main id="home">
    <section class="hero-carousel" aria-label="Kampus">
      <div class="hero-track">
        <?php foreach ($campuses as $i => $campus): ?>
          <article class="hero-slide <?= $i === 0 ? 'is-active' : '' ?>"
            style="--hero-image:url('<?= html_escape(base_url($campus['image_url'])) ?>')">
            <div class="hero-overlay"></div>
            <div class="container hero-content">
              <p class="eyebrow"><?= html_escape($campus['subtitle'] ?: 'KAMPUS UNTUK MASA DEPAN') ?></p>
              <h1><?= html_escape($campus['title']) ?></h1>
              <p class="hero-description"><?= html_escape($campus['description']) ?></p>
              <a class="button light"
                href="<?= html_escape($campus['button_url'] ?: '#tentang') ?>"><?= html_escape($campus['button_text'] ?: 'Jelajahi Kampus') ?>
                <span>→</span></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
      <?php if (count($campuses) > 1): ?>
        <div class="hero-controls"><button class="hero-prev" type="button" aria-label="Sebelumnya">←</button><span
            class="hero-count"><b>01</b> / <?= str_pad((string) count($campuses), 2, '0', STR_PAD_LEFT) ?></span><button
            class="hero-next" type="button" aria-label="Berikutnya">→</button></div><?php endif; ?>
    </section>

    <section class="intro section" id="tentang">
      <div class="container two-col">
        <div class="video-frame">
          <iframe src="<?= html_escape($video['youtube_url'] ?? $site['youtube_url'] ?? '') ?>" title="Video kampus"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen loading="lazy"></iframe>
        </div>
        <div>
          <p><b><?= html_escape($site['description'] ?? '') ?></b></p>
          <p><?= nl2br(html_escape($content('intro_text', $site['intro_text'] ?? ''))) ?></p><a class="text-link"
            href="#kontak"><?= html_escape($content('intro_link_text', 'Kenali kami lebih dekat')) ?> <span>→</span></a>
        </div>
      </div>
    </section>

    <section class="section section-soft" id="program">
      <div class="container">
        <div class="section-head">
          <div>
            <p class="eyebrow" style="color: #ffffff;"><?= html_escape($content('alumni_eyebrow', 'JEJAK LULUSAN KAMI')) ?>
            </p>
            <h2 style="color: #ffffff;"><?= html_escape($content('alumni_title', 'Cerita Alumni.')) ?></h2>
          </div><a class="text-link" href="#alumni">Lihat semua <span>→</span></a>
        </div>
        <div class="carousel-wrap">
          <div class="cards-track alumni-track">
            <?php foreach ($alumni as $item): ?>
              <article class="profile-card">
                <div class="image-wrap">
                  <img loading="lazy" src="<?= html_escape($item['image_url']) ?>" alt="<?= html_escape($item['name']) ?>">
                </div>
                <div class="profile-body">
                  <small>
                    <?= html_escape($item['study_program']) ?>
                  </small>
                  <h3><?= html_escape($item['name']) ?></h3>
                  <p class="role"><?= html_escape($item['position']) ?></p>
                  <p><?= html_escape($item['story']) ?></p>
                  <a href="#kontak">Baca cerita <span>→</span></a>
                </div>
              </article><?php endforeach; ?>
          </div>
          <div class="carousel-nav">
            <button class="alumni-prev" type="button">←</button><button class="alumni-next" type="button">→</button>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="news">
      <div class="container">
        <div class="section-head">
          <div>
            <p class="eyebrow"><?= html_escape($content('news_eyebrow', 'KABAR TERKINI')) ?></p>
            <h2><?= html_escape($content('news_title', 'Berita Utama Kampus.')) ?></h2>
          </div><a class="text-link" href="#news"><?= html_escape($content('news_link_text', 'Semua berita')) ?>
            <span>→</span></a>
        </div>
        <div class="carousel-wrap">
          <div class="cards-track news-track">
            <?php foreach ($news as $item): ?>
              <article class="news-card"><img loading="lazy" src="<?= html_escape($item['image_url']) ?>"
                  alt="<?= html_escape($item['title']) ?>">
                <div><small><?= html_escape($item['category']) ?> ·
                    <?= date('d M Y', strtotime($item['published_at'])) ?></small>
                  <h3><?= html_escape($item['title']) ?></h3>
                  <p><?= html_escape($item['excerpt']) ?></p><a href="#kontak">Baca selengkapnya <span>→</span></a>
                </div>
              </article><?php endforeach; ?>
          </div>
          <div class="carousel-nav"><button class="news-prev" type="button">←</button><button class="news-next"
              type="button">→</button></div>
        </div>
      </div>
    </section>

    <section class="section" id="portal-sistem">
      <div class="container">
        <div class="section-head">
          <div>
            <p class="eyebrow"><?= html_escape($content('portal_eyebrow', 'AKSES CEPAT')) ?></p>
            <h2><?= html_escape($content('portal_title', 'Portal Sistem')) ?></h2>
          </div>
        </div>

        <!-- Grid Portal Sistem -->
        <div class="portal-grid">
          <?php foreach ($portal_sistem as $item): ?>
            <a href="<?= html_escape($item['url']) ?>" target="_blank" rel="noopener noreferrer" class="portal-card">
              <div class="portal-card-box">
                <div class="portal-img-container">
                  <img loading="lazy" src="<?= base_url(html_escape($item['image_url'])) ?>"
                    alt="<?= html_escape($item['title']) ?>">
                </div>
                <!-- Wave Accent / Glossy Footer Bar -->
                <div class="portal-card-footer">
                  <span class="portal-card-title"><?= html_escape($item['title']) ?></span>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="video-section section">
      <div class="container video-box">
        <div>
          <p class="eyebrow">
            <?= html_escape($content('ketua_eyebrow', 'Sambutan Ketua STIFAR Yayasan Pharmasi Semarang')) ?></p>
          <h3><?= html_escape($site['ketua_nama'] ?? '') ?> <br><?= html_escape($site['ketua_jabatan'] ?? '') ?></h3>
          <p><?= nl2br(html_escape($site['ketua_sambutan'] ?? '')) ?></p>
        </div>
        <div class="profile-ketua">
          <img src="<?= html_escape(base_url($site['ketua_stifar'] ?? '')) ?>" alt="Ketua STIFAR" loading="lazy"
            style="width: 250px; height: 250px; object-fit: cover; border-radius: 10px;">
        </div>
      </div>
    </section>

    <section class="cta" id="pmb">
      <div class="container">
        <h1><?= html_escape($content('kerjasama_title', 'Kerjasama Kami.')) ?></h1>
        <!-- Grid Portal Sistem -->
        <div class="portal-grid">
          <?php foreach ($kerjasama as $mitra): ?>
            <a href="<?= html_escape($mitra['url']) ?>" target="_blank" rel="noopener noreferrer" class="portal-card">
              <div class="portal-card-box">
                <div class="portal-img-container">
                  <img loading="lazy" src="<?= base_url(html_escape($mitra['image_url'])) ?>"
                    alt="<?= html_escape($mitra['title']) ?>">
                </div>
                <!-- Wave Accent / Glossy Footer Bar -->
                <div class="portal-card-footer">
                  <span class="portal-card-title"><?= html_escape($mitra['title']) ?></span>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

  </main>
  <footer id="kontak">
    <div class="container footer-grid">
      <div>
        <a class="brand footer-brand" href="#home">
          <?php if (!empty($site['logo_url'])): ?><img src="<?= html_escape($site['logo_url']) ?>"
              alt="<?= html_escape($site['name'] ?? 'STIFAR SEMARANG') ?>"
              style="width:46px;height:46px;object-fit:contain;border-radius:8px"><?php else: ?><span
              class="brand-mark">ST</span><?php endif; ?>
          <span><b><?= html_escape($site['name'] ?? 'STIFAR SEMARANG') ?></b><small><?= html_escape($content('footer_about_tagline', 'Institute of Technology')) ?></small></span>
        </a>
        <p><?= html_escape($site['description'] ?? '') ?></p>
      </div>
      <div>
        <h4>Menu</h4>
        <a href="#tentang">Tentang Kami</a>
        <a href="#program">Akademik</a>
        <a href="#news">Berita</a>
      </div>
      <div>
        <h4>Informasi</h4>
        <a href="#pmb">Penerimaan Mahasiswa</a>
        <a href="#fasilitas">Fasilitas</a>
        <a href="#kontak">Kontak Kami</a>
      </div>
      <div>
        <h4>Hubungi kami</h4>
        <p><?= html_escape($site['address'] ?? '') ?></p>
        <p><?= html_escape($site['phone'] ?? '') ?></p>
        <p><?= html_escape($site['email'] ?? '') ?></p>
      </div>
    </div>
    <div class="copyright">© <?= date('Y') ?> <?= html_escape($site['name'] ?? 'Stifar Semarang') ?>. All rights reserved.
    </div>
  </footer>

  <script>
    window.STIFAR_NAV = <?= json_encode($navigation, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;
    (function () {
      var nav = window.STIFAR_NAV || {};
      Object.keys(nav).forEach(function (key) {
        var data = nav[key], links = document.querySelectorAll('[data-nav-key="' + key + '"]');
        links.forEach(function (a) {
          a.setAttribute('href', <?= json_encode(site_url('')) ?> + key);
          if (data.label !== undefined) {
            var nodes = [].slice.call(a.childNodes);
            for (var i = 0; i < nodes.length; i++) {
              if (nodes[i].nodeType === 3 && nodes[i].nodeValue.trim()) {
                nodes[i].nodeValue = ' ' + data.label + ' ';
                break;
              }
            }
          }
          if (!data.active) {
            var wrap = a.closest('.dropdown-submenu') || a.closest('.dropdown');
            (wrap || a).style.display = 'none';
          }
        });
      });
    })();
  </script>
  <script src="<?= base_url('assets/js/site.js') ?>"></script>


</body>

</html>