<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 1;
    $b = 2;
    $c = 1.1;
    $d = 2.2;    
    $dodaj = "59.85"+ 100;
    ?>
    <fieldset>
        <legend>AD 2.</legend>
    <p>zmienna $a ma wartość <?=$a?> a funkcja is_int zwraca dla inej wynik: <?php var_dump(is_int($a))?></p>
    <p>zmienna $b ma wartość <?=$b?> a funkcja is_int zwraca dla inej wynik: <?php var_dump(is_int($b))?></p>
    <p>zmienna $c ma wartość <?=$c?> a funkcja is_int zwraca dla inej wynik: <?php var_dump(is_int($c))?></p>
    <p>zmienna $d ma wartość <?=$d?> a funkcja is_int zwraca dla inej wynik: <?php var_dump(is_int($d))?></p>
    <hr>
    <p>zmienna $a ma wartość <?=$a?> a funkcja is_float zwraca dla inej wynik: <?php var_dump(is_float($a))?></p>
    <p>zmienna $b ma wartość <?=$b?> a funkcja is_float zwraca dla inej wynik: <?php var_dump(is_float($b))?></p>
    <p>zmienna $c ma wartość <?=$c?> a funkcja is_float zwraca dla inej wynik: <?php var_dump(is_float($c))?></p>
    <p>zmienna $d ma wartość <?=$d?> a funkcja is_float zwraca dla inej wynik: <?php var_dump(is_float($d))?></p>
    </fieldset>
    <fieldset>
        <legend>AD 3.</legend>
    <code>Zmienna $dodaj ma watrość <?=$dodaj?>, a funkcja is_numeric() zwraca dla niej wynnik: <?php var_dump(is_numeric($dodaj))?></code>
    </fieldset>
    <fieldset>
        <legend>AD 4.</legend>
    <p>Stała PHP_INT_MAX ma wartość <?=PHP_INT_MAX?></p>
    <p>Stała PHP_INT_MIN ma wartość <?=PHP_INT_MIN?></p>
    <p>Stała PHP_INT_SIZE ma wartość <?=PHP_INT_SIZE?></p>
    <p>Stała PHP_FLOAT_MAX ma wartość <?=PHP_FLOAT_MAX?></p>
    <p>Stała PHP_FLOAT_MIN ma wartość <?=PHP_FLOAT_MIN?></p>

    <p>Stała PHP_FLOAT_DIG ma wartość <?=PHP_FLOAT_DIG?></p>
    <p>Stała PHP_FLOAT_EPSILON ma wartość <?=PHP_FLOAT_EPSILON?></p>
    </fieldset>
    <p><?=27**1/3?></p>
</body>
</html>