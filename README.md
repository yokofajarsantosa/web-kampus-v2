# Cakrawala Institute — CodeIgniter 3 HMVC

Website kampus berbasis CodeIgniter 3 HMVC dengan database MySQL/MariaDB dan Portal Admin.

## Fitur
- UI publik mengikuti struktur visual `campus-clone.vercel.app`: topbar, navbar, hero besar, Tentang Kami, Cerita Alumni, Berita Utama, video, CTA, footer.
- Hero berisi 3 slide foto kampus, otomatis setiap 5 detik dan dapat digeser manual.
- Cerita Alumni tampil sebagai carousel 4 card di desktop, responsive menjadi 2/1 card.
- Berita Utama Kampus tampil sebagai carousel 4 card di desktop, responsive menjadi 2/1 card.
- Semua konten utama tersimpan di MySQL/MariaDB.
- Portal Admin untuk mengubah identitas/Tentang Kami, hero, video, alumni, dan berita.
- Login admin menggunakan tabel `admin_users` dan password hashing.
- Responsive desktop/tablet/mobile.

## Instalasi
1. Buat database MySQL/MariaDB dengan menjalankan `database/schema.sql`.
2. Atur koneksi database melalui environment:
   - `DB_HOST`
   - `DB_USER`
   - `DB_PASS`
   - `DB_NAME`
   Jika tidak diatur, aplikasi menggunakan `127.0.0.1`, `root`, password kosong, database `cakrawala`.
3. Pastikan `application/cache/sessions/` dapat ditulis oleh PHP.
4. Arahkan document root ke folder project.
5. Buka `/` untuk website dan `/admin` untuk Portal Admin.

## Login awal
- Email: `admin@cakrawala.ac.id`
- Password: `password`

Segera ganti password admin pada implementasi produksi dengan mekanisme pengelolaan user yang sesuai.

## Catatan gambar
URL gambar pada data awal menggunakan gambar eksternal sebagai placeholder. URL dapat diganti dari Portal Admin dengan URL gambar kampus sendiri.
