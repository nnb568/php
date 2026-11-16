<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 style="color: tomato;">Aktualna godzina</h3>
    <p><?= date('H:i:s', strtotime('now')) ?></p>
    <h3 style="color: navy;">Osiem godzin poźniej</h3>
    <p><?= date('H:i:s', strtotime('+8 hours')) ?></p>
</body>
</html>