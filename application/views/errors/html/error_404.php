<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Tidak Ditemukan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 48px 20px; color: #16324f; background: #f2f9ff; }
        main { max-width: 680px; margin: auto; padding: 40px; background: #fff; border: 1px solid #cfe8fb; border-radius: 16px; text-align: center; box-shadow: 0 12px 30px rgba(22, 87, 135, .08); }
        h1 { margin: 0 0 12px; color: #168bd0; font-size: 42px; }
        p { line-height: 1.6; }
        a { display: inline-block; margin-top: 12px; color: #fff; background: #168bd0; padding: 12px 18px; border-radius: 8px; text-decoration: none; }
    </style>
</head>
<body>
    <main>
        <h1>404</h1>
        <p><?php echo isset($heading) ? html_escape($heading) : 'Halaman tidak ditemukan'; ?></p>
        <p><?php echo isset($message) ? html_escape($message) : 'Alamat yang Anda buka tidak tersedia.'; ?></p>
        <a href="<?php echo site_url(); ?>">Kembali ke beranda</a>
    </main>
</body>
</html>
