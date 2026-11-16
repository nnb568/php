<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Aktualna godzina: <?php echo date("G:i:s"); ?></p>
    <p>Aktualna data: <?php echo date("d-m-Y"); ?></p>
    <p>Dzien roku: <?= date("z"); ?></p>
</body>
</html>