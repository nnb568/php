<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $zmienna = "Życie jest to opowieść idioty, pełna wrzasku i wściekłości, nic nie znacząca. ";?>
    <p>Cytat: <q><?= $zmienna ?></q></p>
    <p>Liczba wyrazów: <?=str_word_count($zmienna)?></p>
</body>
</html>