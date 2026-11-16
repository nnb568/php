<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>date</legend>
    <p>Jutrzejsza data: <?= date('d M Y', time() + 86400) ?></p>
    <p>Wczorajsza data: <?= date('d M Y', time() - 86400) ?></p>
    <p>Osiem godzin póżniejej: <?= date('G:i:s', time() +60 * 60 * 8) ?></p>
    </fieldset>

    <fieldset>
        <legend>strtotime</legend>
    <p>Wigilia w roku 2222 wypada w <?= date('N', strtotime('2222-12-24')) ?> dzień tygodnia.</p>
    <p>Data za 10 tygodni: <?= date('d M Y', strtotime('+10 weeks')) ?></p>
    </fieldset>
    <fieldset>
        <legend>mktime</legend>
    <p><?= date('G:i:s d:m:y', mktime(12,12,12,12,12,12)) ?></p>
    </fieldset>
</body>
</html>