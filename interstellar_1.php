<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string = "Ludzkość urodziła się na ziemi, ale to nie znaczy, że miała tu wymrzeć.";?>
    <article><?=$string?></article>
    <article><?=strrev($string)?></article>
</body>
</html>