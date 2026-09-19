<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Portal Admin | STIFAR Semarang</title>
<link rel="stylesheet" href="<?=base_url('assets/css/site.css')?>">
<style>
.dashboard{max-width:1280px;margin:0 auto;padding:30px 20px}.dashboard header{display:flex;justify-content:space-between;gap:20px;align-items:center;margin-bottom:25px}.dashboard .top-actions{display:flex;gap:10px;align-items:center;flex-wrap:wrap}.dashboard .top-actions a{padding:9px 14px;border-radius:999px;text-decoration:none;border:1px solid #d8e4ea;font-size:12px}.dashboard h2{font-size:25px;margin:0 0 14px}.dashboard details{background:#fff;border:1px solid #dfeaf0;border-radius:16px;padding:18px;margin:18px 0;box-shadow:0 8px 25px rgba(8,55,80,.04)}.dashboard summary{cursor:pointer;font-size:18px;font-weight:800;color:#073b5b}.dashboard .crud-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px;margin-top:15px}.dashboard .card{border:1px solid #e3edf1;border-radius:12px;padding:14px;background:#fafcfd}.dashboard label{display:block;font-size:12px;font-weight:700;color:#45606d;margin:10px 0}.dashboard input,.dashboard textarea,.dashboard select{display:block;width:100%;box-sizing:border-box;margin-top:6px;border:1px solid #d5e3e9;border-radius:9px;padding:10px 11px;background:#fff;font:inherit}.dashboard textarea{min-height:105px;resize:vertical}.dashboard .check{display:flex;align-items:center;gap:8px}.dashboard .check input{width:auto;margin:0}.save{background:#0879b9;color:#fff;border:0;border-radius:999px;padding:10px 16px;font-weight:700;cursor:pointer}.danger{color:#b42318!important;border-color:#f1c8c3!important}.item-list{display:grid;gap:12px;margin-top:15px}.item-row{border:1px solid #e3edf1;border-radius:12px;padding:14px;background:#fafcfd}.item-row strong{display:block;color:#073b5b}.item-row small{color:#758894}.search{max-width:500px;margin:15px 0}.hint{font-size:12px;color:#6b7f89}.nav-row{display:grid;grid-template-columns:130px 1fr 2fr 80px;gap:10px;align-items:end;border-top:1px solid #e7eff3;padding:12px 0}.nav-row .save{padding:8px 12px;font-size:12px}.content-row{border-top:1px solid #e7eff3;padding:15px 0}.content-row:first-child{border-top:0}.content-row .key{font-size:11px;color:#748792}.mini-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px}
@media(max-width:850px){.dashboard header{align-items:flex-start;flex-direction:column}.dashboard .crud-grid,.dashboard .mini-grid,.dashboard .nav-row{grid-template-columns:1fr}}
</style>
</head>
<?php $csrf_name=$this->security->get_csrf_token_name(); $csrf_hash=$this->security->get_csrf_hash(); ?>
<body>
<main class="dashboard">
<header>
  <div><p class="eyebrow">STIFAR SEMARANG</p><h1>Portal Admin</h1><p>Kelola seluruh konten utama website tanpa mengubah struktur halaman.</p></div>
  <div class="top-actions"><a href="<?=base_url()?>">Lihat Website</a><a href="<?=site_url('admin/auth/logout')?>">Keluar</a></div>
</header>
<?php if(!empty($flash)):?><div style="padding:12px 16px;background:#e9f7ef;color:#177245;border-radius:10px;margin:18px 0"><?=html_escape($flash)?></div><?php endif;?>

<details open>
<summary>Tambah Data Baru</summary>
<p class="hint">Gunakan form berikut untuk menambah slide, alumni, berita, portal, mitra, atau menu baru. Data langsung tersimpan ke database.</p>
<div class="crud-grid">
<section class="card"><h3>Tambah Hero</h3><form method="post" action="<?=site_url('admin/dashboard/save/campus')?>"><input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><label>Judul<input name="title" required></label><label>Subjudul<input name="subtitle"></label><label>Deskripsi<textarea name="description"></textarea></label><label>URL Foto<input name="image_url" required></label><label>Urutan<input type="number" name="sort_order" value="99"></label><label>Teks Tombol<input name="button_text" value="Jelajahi Kampus"></label><label>URL Tombol<input name="button_url" value="#tentang"></label><label class="check"><input type="checkbox" name="active" checked> Aktif</label><button class="save">+ Tambah Hero</button></form></section>
<section class="card"><h3>Tambah Alumni</h3><form method="post" action="<?=site_url('admin/dashboard/save/alumni')?>"><input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><label>Nama<input name="name" required></label><label>Program Studi<input name="study_program" required></label><label>Posisi<input name="position"></label><label>Foto<input name="image_url"></label><label>Cerita<textarea name="story" required></textarea></label><label>Urutan<input type="number" name="sort_order" value="99"></label><label class="check"><input type="checkbox" name="active" checked> Aktif</label><button class="save">+ Tambah Alumni</button></form></section>
<section class="card"><h3>Tambah Berita</h3><form method="post" action="<?=site_url('admin/dashboard/save/news')?>"><input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><label>Judul<input name="title" required></label><label>Kategori<input name="category"></label><label>Foto<input name="image_url"></label><label>Tanggal<input type="datetime-local" name="published_at"></label><label>Ringkasan<textarea name="excerpt"></textarea></label><label>Isi<textarea name="content" required></textarea></label><label class="check"><input type="checkbox" name="published" checked> Tampilkan</label><button class="save">+ Tambah Berita</button></form></section>
<section class="card"><h3>Tambah Portal</h3><form method="post" action="<?=site_url('admin/dashboard/save/portal')?>"><input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><label>Nama Portal<input name="title" required></label><label>URL Gambar<input name="image_url"></label><label>URL Portal<input name="url" required></label><label class="check"><input type="checkbox" name="is_active" checked> Aktif</label><button class="save">+ Tambah Portal</button></form></section>
<section class="card"><h3>Tambah Kerjasama</h3><form method="post" action="<?=site_url('admin/dashboard/save/kerjasama')?>"><input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><label>Nama Mitra<input name="title" required></label><label>Logo/Gambar<input name="image_url"></label><label>URL Website<input name="url"></label><label class="check"><input type="checkbox" name="is_active" checked> Aktif</label><button class="save">+ Tambah Mitra</button></form></section>
<section class="card"><h3>Tambah YouTube</h3><form method="post" action="<?=site_url('admin/dashboard/save/video')?>"><input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><input type="hidden" name="video_id" value="0"><label>Judul Video<input name="video_title" required></label><label>URL YouTube Embed<input name="youtube_url" required></label><button class="save">+ Tambah Video</button></form></section>
<section class="card"><h3>Tambah Section</h3><form method="post" action="<?=site_url('admin/dashboard/save/content')?>"><input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><input type="hidden" name="id" value="0"><label>Judul Field<input name="title" required></label><label>Isi<textarea name="content"></textarea></label><button class="save">+ Tambah Section</button></form></section>
<section class="card"><h3>Tambah Navbar</h3><form method="post" action="<?=site_url('admin/dashboard/save/add_navigation')?>"><input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><label>Nama Menu<input name="new_label" required></label><label>URL Awal / Sumber<input name="new_url" value="#"></label><label>Urutan<input type="number" name="new_sort_order" value="999"></label><button class="save">+ Tambah Navbar</button></form></section>
</div>
</details>

<details>
<summary>Halaman Navbar: Controller, Model &amp; View</summary>
<p class="hint">Setiap navbar bawaan memiliki folder module sendiri dengan controller, model, dan view. Isi halaman dapat diubah di sini.</p>
<div class="item-list">
<?php foreach($pages as $pg):?>
<div class="item-row"><strong><?=html_escape($pg['nav_key'])?> — <?=html_escape($pg['title'])?></strong>
<form method="post" action="<?=site_url('admin/dashboard/save/page')?>"><input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><input type="hidden" name="id" value="<?=$pg['id']?>"><label>Judul Halaman<input name="title" value="<?=html_escape($pg['title'])?>" required></label><label>Isi Halaman<textarea name="content" style="min-height:160px"><?=html_escape($pg['content'])?></textarea></label><div class="mini-grid"><label>URL Gambar<input name="image_url" value="<?=html_escape($pg['image_url'])?>"></label><label>Sumber/Tautan Asli<input name="source_url" value="<?=html_escape($pg['source_url'])?>"></label></div><label class="check"><input type="checkbox" name="active" <?=$pg['active']?'checked':''?>> Aktif</label><button class="save">Simpan Halaman</button> <a class="text-link" target="_blank" href="<?=site_url($pg['nav_key'])?>">Buka Halaman</a></form></div>
<?php endforeach;?>
</div></details>

<details open>
<summary>Identitas Website, Logo &amp; Profil</summary>
<form method="post" action="<?=site_url('admin/dashboard/save/settings')?>">
<input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>">
<div class="crud-grid">
<div class="card">
<label>Nama Kampus<input name="site_name" value="<?=html_escape($settings['name']??'')?>" required></label>
<label>Tagline<input name="tagline" value="<?=html_escape($settings['tagline']??'')?>"></label>
<label>URL Logo / Gambar Profil<input name="logo_url" value="<?=html_escape($settings['logo_url']??'')?>"></label>
<label>Deskripsi Meta / Identitas<textarea name="description"><?=html_escape($settings['description']??'')?></textarea></label>
<label>Alamat<input name="address" value="<?=html_escape($settings['address']??'')?>"></label>
<label>Telepon<input name="phone" value="<?=html_escape($settings['phone']??'')?>"></label>
<label>Email<input type="email" name="site_email" value="<?=html_escape($settings['email']??'')?>"></label>
</div>
<div class="card">
<label>URL YouTube Profil STIFAR / Yayasan<input name="youtube_url" value="<?=html_escape($settings['youtube_url']??'')?>"></label>
<label>Gambar Ketua STIFAR<input name="ketua_stifar" value="<?=html_escape($settings['ketua_stifar']??'')?>"></label>
<label>Nama Ketua STIFAR<input name="ketua_nama" value="<?=html_escape($settings['ketua_nama']??'')?>"></label>
<label>Jabatan Ketua<input name="ketua_jabatan" value="<?=html_escape($settings['ketua_jabatan']??'')?>"></label>
<label>Sambutan Ketua<textarea name="ketua_sambutan"><?=html_escape($settings['ketua_sambutan']??'')?></textarea></label>
<label>Isi Tentang Kami<textarea name="intro_text"><?=html_escape($settings['intro_text']??'')?></textarea></label>
</div>
</div>
<button class="save">Simpan Identitas &amp; Profil</button>
</form>
</details>

<details>
<summary>Isi &amp; Judul Section Website</summary>
<p class="hint">Ubah judul, label, dan teks section yang tidak berasal dari tabel berita/alumni/mitra.</p>
<div class="item-list">
<?php foreach($contents as $row):?>
<div class="content-row">
<form method="post" action="<?=site_url('admin/dashboard/save/content')?>">
<input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>">
<input type="hidden" name="id" value="<?=$row['id']?>">
<div class="key"><?=html_escape($row['content_key'])?></div>
<label>Judul field<input name="title" value="<?=html_escape($row['title'])?>"></label>
<label>Isi<textarea name="content"><?=html_escape($row['content'])?></textarea></label>
<button class="save">Simpan</button>
</form>
</div>
<?php endforeach;?>
</div>
</details>

<details>
<summary>Navigasi / Navbar (semua menu &amp; submenu)</summary>
<p class="hint">Semua link yang sudah ada di navbar dapat diubah label, URL, urutan, atau dinonaktifkan. Struktur dropdown tetap dipertahankan.</p>
<input class="search" id="navSearch" type="search" placeholder="Cari menu, submenu, atau URL...">
<div id="navList">
<?php foreach($navigation as $n):?>
<div class="nav-row" data-nav-search="<?=html_escape(strtolower($n['nav_key'].' '.$n['label'].' '.$n['url']))?>">
<form method="post" action="<?=site_url('admin/dashboard/save/navigation')?>" style="display:contents">
<input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>">
<input type="hidden" name="id" value="<?=$n['id']?>">
<label>Kunci<input value="<?=html_escape($n['nav_key'])?>" readonly></label>
<label>Label<input name="label" value="<?=html_escape($n['label'])?>" required></label>
<label>URL / Link<input name="url" value="<?=html_escape($n['url'])?>"></label>
<label>Urutan<input type="number" name="sort_order" value="<?=html_escape($n['sort_order'])?>"></label>
<label class="check"><input type="checkbox" name="active" <?=$n['active']?'checked':''?>> Aktif</label>
<button class="save">Simpan</button>
</form>
</div>
<?php endforeach;?>
</div>
</details>

<details>
<summary>Hero / 3 Kampus</summary>
<div class="crud-grid">
<?php foreach($campuses as $c):?>
<section class="card"><form method="post" action="<?=site_url('admin/dashboard/save/campus')?>">
<input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><input type="hidden" name="id" value="<?=$c['id']?>">
<label>Judul<input name="title" value="<?=html_escape($c['title'])?>"></label><label>Subjudul<input name="subtitle" value="<?=html_escape($c['subtitle'])?>"></label><label>Deskripsi<textarea name="description"><?=html_escape($c['description'])?></textarea></label><label>URL Foto<input name="image_url" value="<?=html_escape($c['image_url'])?>"></label><div class="mini-grid"><label>Urutan<input type="number" name="sort_order" value="<?=$c['sort_order']?>"></label><label>Teks Tombol<input name="button_text" value="<?=html_escape($c['button_text'])?>"></label></div><label>URL Tombol<input name="button_url" value="<?=html_escape($c['button_url'])?>"></label><label class="check"><input type="checkbox" name="active" <?=$c['active']?'checked':''?>> Aktif</label><button class="save">Simpan Slide</button> <a class="danger" href="<?=site_url('admin/dashboard/delete/campus/'.$c['id'])?>">Hapus</a>
</form></section>
<?php endforeach;?>
</div>
</details>

<details>
<summary>YouTube Profil STIFAR / Yayasan</summary>
<form method="post" action="<?=site_url('admin/dashboard/save/video')?>">
<input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><input type="hidden" name="video_id" value="<?=html_escape($video['id']??0)?>">
<label>Judul<input name="video_title" value="<?=html_escape($video['title']??'')?>"></label>
<label>URL YouTube Embed<input name="youtube_url" value="<?=html_escape($video['youtube_url']??($settings['youtube_url']??''))?>"></label>
<button class="save">Simpan Video</button>
</form>
</details>

<details>
<summary>Cerita Alumni</summary>
<div class="item-list">
<?php foreach($alumni as $a):?>
<div class="item-row"><strong><?=html_escape($a['name'])?></strong><small><?=html_escape($a['study_program'])?> · <?=html_escape($a['position'])?></small>
<form method="post" action="<?=site_url('admin/dashboard/save/alumni')?>">
<input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><input type="hidden" name="id" value="<?=$a['id']?>">
<div class="mini-grid"><label>Nama<input name="name" value="<?=html_escape($a['name'])?>"></label><label>Program Studi<input name="study_program" value="<?=html_escape($a['study_program'])?>"></label><label>Posisi<input name="position" value="<?=html_escape($a['position'])?>"></label><label>URL Foto<input name="image_url" value="<?=html_escape($a['image_url'])?>"></label></div>
<label>Cerita<textarea name="story"><?=html_escape($a['story'])?></textarea></label><div class="mini-grid"><label>Urutan<input type="number" name="sort_order" value="<?=$a['sort_order']?>"></label><label class="check"><input type="checkbox" name="active" <?=$a['active']?'checked':''?>> Aktif</label></div>
<button class="save">Simpan Alumni</button> <a class="danger" href="<?=site_url('admin/dashboard/delete/alumni/'.$a['id'])?>">Hapus</a>
</form></div>
<?php endforeach;?>
</div>
</details>

<details>
<summary>Berita Kampus</summary>
<div class="item-list">
<?php foreach($news as $n):?>
<div class="item-row"><strong><?=html_escape($n['title'])?></strong><small><?=html_escape($n['category'])?> · <?=date('d M Y',strtotime($n['published_at']))?></small>
<form method="post" action="<?=site_url('admin/dashboard/save/news')?>">
<input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><input type="hidden" name="id" value="<?=$n['id']?>">
<div class="mini-grid"><label>Judul<input name="title" value="<?=html_escape($n['title'])?>"></label><label>Kategori<input name="category" value="<?=html_escape($n['category'])?>"></label><label>URL Foto<input name="image_url" value="<?=html_escape($n['image_url'])?>"></label><label>Tanggal<input type="datetime-local" name="published_at" value="<?=date('Y-m-d\TH:i',strtotime($n['published_at']))?>"></label></div>
<label>Ringkasan<textarea name="excerpt"><?=html_escape($n['excerpt'])?></textarea></label><label>Isi Berita<textarea name="content"><?=html_escape($n['content'])?></textarea></label><label class="check"><input type="checkbox" name="published" <?=$n['published']?'checked':''?>> Tampilkan</label>
<button class="save">Simpan Berita</button> <a class="danger" href="<?=site_url('admin/dashboard/delete/news/'.$n['id'])?>">Hapus</a>
</form></div>
<?php endforeach;?>
</div>
</details>

<details>
<summary>Portal Sistem</summary>
<div class="crud-grid">
<?php foreach($portal_sistem as $p):?><section class="card"><form method="post" action="<?=site_url('admin/dashboard/save/portal')?>">
<input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><input type="hidden" name="id" value="<?=$p['id']?>">
<label>Nama Portal<input name="title" value="<?=html_escape($p['title'])?>"></label><label>URL Gambar<input name="image_url" value="<?=html_escape($p['image_url'])?>"></label><label>URL Portal<input name="url" value="<?=html_escape($p['url'])?>"></label><label class="check"><input type="checkbox" name="is_active" <?=$p['is_active']?'checked':''?>> Aktif</label><button class="save">Simpan Portal</button> <a class="danger" href="<?=site_url('admin/dashboard/delete/portal/'.$p['id'])?>">Hapus</a>
</form></section><?php endforeach;?>
</div>
</details>

<details>
<summary>Kerjasama Kami</summary>
<div class="crud-grid">
<?php foreach($kerjasama as $m):?><section class="card"><form method="post" action="<?=site_url('admin/dashboard/save/kerjasama')?>">
<input type="hidden" name="<?=$csrf_name?>" value="<?=$csrf_hash?>"><input type="hidden" name="id" value="<?=$m['id']?>">
<label>Nama Mitra<input name="title" value="<?=html_escape($m['title'])?>"></label><label>URL Logo / Gambar<input name="image_url" value="<?=html_escape($m['image_url'])?>"></label><label>URL Website Mitra<input name="url" value="<?=html_escape($m['url'])?>"></label><label class="check"><input type="checkbox" name="is_active" <?=$m['is_active']?'checked':''?>> Aktif</label><button class="save">Simpan Mitra</button> <a class="danger" href="<?=site_url('admin/dashboard/delete/kerjasama/'.$m['id'])?>">Hapus</a>
</form></section><?php endforeach;?>
</div>
</details>
</main>
<script>
(function(){
 var s=document.getElementById('navSearch'), rows=[].slice.call(document.querySelectorAll('#navList .nav-row'));
 if(s)s.addEventListener('input',function(){var q=this.value.toLowerCase().trim();rows.forEach(function(r){r.style.display=!q||r.dataset.navSearch.indexOf(q)!==-1?'grid':'none';});});
})();
</script>
</body>
</html>
