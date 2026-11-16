<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="background-color:lightsteelblue; border: 2px blueviolet; border-style: dashed; padding: 15px; border-radius: 5px; font-style: italic;">
    Rozpoczęcie tego roku szkolnego odbyło się w <b><?= date('l', MKTIME(0, 0, 0, 9, 1, 2026)) ?></b> i był to <?= date("z", strtotime('2026-09-01'))+1 ?> dzień roku.

    </p>
</body>
</html>