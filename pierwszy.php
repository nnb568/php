<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $link_1 = 'Wirtualna Polska';
    $link_2 = 'Onet';
    $link_3 = 'Interia';
    $title = 'Priewsza strona z PHP-em'
    
    ?>
    <h1><?=$title ?></h1>
    <ol style='list-style-type:decimal-leading-zero'> 
    <li><a href="http://wp.pl"><?=$link_1 ?></a></li>
    <li><a href="http://wp.pl"><?=$link_2 ?></a></li>
    <li><a href="http://wp.pl"><?=$link_3 ?></a></li>
</ol>
</body>
</html>