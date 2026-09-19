UPDATE WEBSITE KAMPUS - CMS PORTAL ADMIN
==========================================

Project: CodeIgniter 3 / HMVC

Fitur yang ditambahkan:
1. Portal Admin untuk mengubah identitas website, logo/gambar profil, kontak, URL YouTube, profil Ketua STIFAR, dan sambutan Ketua.
2. Seluruh 146 link/label navbar dan submenu yang sudah ada dibuat dapat diedit dari Portal Admin tanpa mengubah struktur dropdown pada halaman depan.
3. Judul/label/isi section utama website dapat diedit dari Portal Admin.
4. Hero/3 slide kampus dapat diedit.
5. YouTube profil STIFAR/Yayasan dapat diedit.
6. Cerita alumni: nama, prodi, posisi, cerita, foto, urutan, status aktif.
7. Berita kampus: judul, kategori, ringkasan, isi, foto, tanggal, status tampil.
8. Portal Sistem: nama, gambar, URL, status aktif.
9. Kerjasama Kami: nama mitra, logo/gambar, URL, status aktif.
10. Database tambahan: site_navigation dan site_content, serta kolom profil Ketua pada site_settings.

DATABASE
--------
Jika membuat database baru, import:
    database/schema.sql

Jika database lama SUDAH BERISI DATA dan tidak ingin mengimpor ulang seluruh schema:
    database/cms_update.sql

LOGIN ADMIN
-----------
Username:
    admin@cakrawala.ac.id

Password:
    password

Catatan: ganti password admin setelah instalasi untuk keamanan.

KONFIGURASI
-----------
Sesuaikan application/config/database.php atau environment:
DB_HOST, DB_USER, DB_PASS, DB_NAME

STRUKTUR FRONTEND
-----------------
Struktur HTML/CSS dan isi awal website dipertahankan. Data CMS ditambahkan sebagai lapisan pengelolaan,
sehingga perubahan navbar dari admin tidak merombak struktur dropdown yang sudah ada.
