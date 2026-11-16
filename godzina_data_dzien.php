<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Jest godzina: <?= date('g:m:s') ?> dnia <?= date('d.m.Y') ?>, jest to <?= date('z', strtotime('now'))+1 ?> dzień tego roku.</h3>
</body>
</html>