<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="color: lightpink; padding: 20px; border: 2px dashed lightpink;">Dzisiejsza data: <b><?= date('d.m.Y') ?></b></p>
    <p style= "color: lightcoral; border: 2px dashed lightcoral; padding: 20px;">Data za 1000 dni: <b><?= date('d.m.Y', strtotime('+1000 days')) ?></b></p>
</body>
</html>