<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $zmienna="Nie wszystko dioda, co się świeci.";
    $bezspacji=str_replace(" ","",$zmienna)
    ?>
    <h3><?=$zmienna?></h3>
    <fieldset>
<legend>Statystyki</legend>
    <p>Długość tekstu (liczba wszystkich znaków i spacji): <?=mb_strlen($zmienna)?></p>
    <p>Liczba znaków (bez spacji): <?=mb_strlen($bezspacji)?></p>
    <p>Liczba wyrazów: <?=str_word_count($zmienna)?></p>
    
    </fieldset>



</body>
</html>