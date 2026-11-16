<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $znak = "Ala ma kota";
    $liczbac = 1024;
    $liczbar = 65.536;
    $bool = false;

    define("rok",1994);
    define("nazwa","Miramax");
    ?>
    
    <p>echo dla ciągu znaków:           <?=$znak?> </p>
    <p>echo dla liczby całkowitej:      <?=$liczbac?> </p>
    <p>echo dla liczby rzeczywistej:    <?=$liczbar?> </p>
    <p>echo dla wartości bool'oweskiej: <?=$bool?> </p>
    <hr>
    <p>var_dump dla ciągu znaków:          <?php var_dump($znak)?></p>
    <p>var_dump dla liczby całkowitej:     <?php var_dump($liczbac) ?></p>
    <p>var_dump dla liczby całkowitej:     <?php var_dump($liczbar) ?></p>
    <p>var_dump dla wartości bool'owskiej: <?php var_dump($bool)?> </p>
    <hr>
    <p>print dla pierwszej stałej: <?php print rok?></p>
    <p>print dla drugiej stałej:   <?php print nazwa?></p>
    <hr>
    <p>var_export dla pierwszej stałej: <?php var_export(rok)?></p>
    <p>var_export dla drugiej stałej:   <?php var_export(nazwa)?></p>


</body>
</html>