<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Portal Admin | Stifar Semarang</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/site.css') ?>">
</head><?php $csrf_name = $this->security->get_csrf_token_name();
$csrf_hash = $this->security->get_csrf_hash(); ?>

<body>
    <main class="admin-login"><a class="brand" href="<?= base_url() ?>"><span
                class="brand-mark">CI</span><span><b>Stifar Semarang</b><small>Institute of Technology</small></span></a>
        <h1>Portal Admin</h1>
        <p>Kelola konten website kampus dari satu dashboard.</p><?php if (!empty($error)): ?>
            <p style="color:#b42318;background:#fff0ee;padding:10px;border-radius:9px"><?= html_escape($error) ?></p>
        <?php endif; ?>
        <form method="post"><input type="hidden" name="<?= $csrf_name ?>" value="<?= $csrf_hash ?>"><label>Email<input
                    type="email" name="email" required value="admin@cakrawala.ac.id"
                    autocomplete="username"></label><label>Password<input type="password" name="password" required
                    autocomplete="current-password"></label><button class="button" type="submit">Masuk ke Dashboard
                →</button></form><small>Default instalasi: admin@cakrawala.ac.id / password</small>
    </main>
</body>

</html>