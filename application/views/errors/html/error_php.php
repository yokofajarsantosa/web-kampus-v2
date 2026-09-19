<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="id">
<head><meta charset="utf-8"><title>Application Error</title></head>
<body>
<h1><?php echo htmlspecialchars($severity ?? 'Application Error', ENT_QUOTES, 'UTF-8'); ?></h1>
<p><?php echo $message ?? 'Terjadi kesalahan pada aplikasi.'; ?></p>
</body>
</html>
