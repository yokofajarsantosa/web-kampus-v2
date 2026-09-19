<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($heading ?? 'Exception', ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; color: #334155; background: #f8fafc; }
        .error { max-width: 760px; margin: 0 auto; padding: 2rem; background: #fff; border: 1px solid #cbd5e1; border-radius: 8px; }
        h1 { margin-top: 0; color: #dc2626; font-size: 1.5rem; }
        pre { overflow-x: auto; white-space: pre-wrap; color: #475569; }
    </style>
</head>
<body>
    <main class="error">
        <h1><?= htmlspecialchars($heading ?? 'An Error Was Encountered', ENT_QUOTES, 'UTF-8') ?></h1>
        <div><?= $message ?? '' ?></div>
    </main>
</body>
</html>
