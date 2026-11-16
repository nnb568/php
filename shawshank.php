<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $muzyka="Takie jest piękno muzyki: nie mogą ci jej odebrać"
    ?>
    <div><q><?=$muzyka?> </q></div>
    <blockquote><?=str_replace(':','-',$muzyka)?>

</body>
</html>