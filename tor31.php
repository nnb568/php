<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tor31.css">
    <title>Document</title>
</head>
<body>
    <?php
$Tekst = "Cffg, orqmvr qmvf xnubbg m CUC-n an bfgngavrw yrxpwv";
?>
<h1>Znajdź funkcję PHP, którą zakodowano poniższy tekst i go odkoduj.</h1>
<fieldset>
<legend>Tekst początkowy (bez polskich znaków)</legend>
<p id="secret"><?=str_rot13($Tekst)?></p>

</fieldset>

<fieldset>
<legend>Tekst zakodowany</legend>
<p><?=$Tekst?></p>
</fieldset>
</body>
</html>