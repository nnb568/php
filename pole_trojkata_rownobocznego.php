<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div{
            text-align:center ;
            border: darkorange;
            border-style: solid;
            border-left-wide 25px;
            border-right-wide 25px;
            border-top-wide 1px;
            border-bottom-wide 1px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
    $a = 17;

    ?>
    <div>
        <p>Pole trójkąta równobocznego o boku długości <?=$a?> jest równe <?= round((($a**2)*sqrt(3))/4,3)?> j²</p>
            <p>(wzór Herona: <?=sqrt((($a*3)/2)*((($a*3)/2)-$a)*((($a*3)/2)-$a)*((($a*3)/2)-$a))?>)</p>
    </div>
</body>
</html>