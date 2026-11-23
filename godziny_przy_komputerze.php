<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>table{
        border-collapse: collapse;
        font-family: Arial;
        width: 100%;
        table-layout: fixed;
    }
    th, td{
        border: medium double black ;
        padding: 10px;
    }
    time{
        box-shadow: 0px 0px 5px red;
        font-family: 'courier';
        font-weight: bold;
    }
    strong{
        background-color: lightskyblue;
        border-radius: 5px;
        padding: 2px;
    }

    </style>
</head>
<body>
     <?php
    $poniedzialek_od = '12:00';
    $poniedzialek_do = '23:55';
    $wtorek_od = '8:05';
    $wtorek_do = '10:15';
    $sroda_od = '6:45';
    $sroda_do = '11:25';
    $czwartek_od = '9:55';
    $czwartek_do = '10:35';
    $piatek_od = '13:50';
    $piatek_do = '16:10';
    $sobota_od = '20:05';
    $sobota_do = '22:35';
    $niedziela_od = '16:00';
    $niedziela_do = '18:50';
    $poniedzialek_roznica = date_diff(date_create($poniedzialek_od), date_create($poniedzialek_do));
    $wtorek_roznica = date_diff(date_create($wtorek_od), date_create($wtorek_do));
    $sroda_roznica = date_diff(date_create($sroda_od), date_create($sroda_do));
    $czwartek_roznica = date_diff(date_create($czwartek_od), date_create($czwartek_do));
    $piatek_roznica = date_diff(date_create($piatek_od), date_create($piatek_do));
    $sobota_roznica = date_diff(date_create($sobota_od), date_create($sobota_do));
    $niedziela_roznica = date_diff(date_create($niedziela_od), date_create($niedziela_do));
    $niedziela_minuty = $niedziela_roznica->h * 60 + $niedziela_roznica->i ;
    $sobota_minuty = $sobota_roznica->h * 60 + $sobota_roznica->i ;
    $piatek_minuty = $piatek_roznica->h * 60 + $piatek_roznica->i ;
    $czwartek_minuty = $czwartek_roznica->h * 60 + $czwartek_roznica->i ;
    $sroda_minuty = $sroda_roznica->h * 60 + $sroda_roznica->i ;
    $wtorek_minuty = $wtorek_roznica->h * 60 + $wtorek_roznica->i ;
    $poniedzialek_minuty = $poniedzialek_roznica->h * 60 + $poniedzialek_roznica->i ;
    $wszystkie_minuty = $poniedzialek_minuty + $wtorek_minuty + $sroda_minuty + $czwartek_minuty + $piatek_minuty + $sobota_minuty + $niedziela_minuty;
    ?>
 <table>
     <tr>
        <td style="border-top: none; border-left: none;"></td>
         <th>Poniedziałek</th><th>Wtorek</th><th>Środa</th>
         <th>Czwartek</th><th>Piątek</th><th>Sobota</th><th>Niedziela</th>
     </tr>
     <tr>
        <td>godziny przy komputerze</td>
        <td><time><?php echo $poniedzialek_od; ?></time> do <time><?php echo $poniedzialek_do; ?></time></td>
        <td><time><?php echo $wtorek_od; ?></time> do <time><?php echo $wtorek_do; ?></time></td>
        <td><time><?php echo $sroda_od; ?></time> do <time><?php echo $sroda_do; ?></time></td>
        <td><time><?php echo $czwartek_od; ?></time> do <time><?php echo $czwartek_do; ?></time></td>
        <td><time><?php echo $piatek_od; ?></time> do <time><?php echo $piatek_do; ?></time></td>
        <td><time><?php echo $sobota_od; ?></time> do <time><?php echo $sobota_do; ?></time></td>
        <td><time><?php echo $niedziela_od; ?></time> do <time><?php echo $niedziela_do; ?></time></td>
     </tr>
     <tr>
        <td>Różnica h:m <strong>minuty</strong></td>
        <td><time><?= $poniedzialek_roznica->format('%h:%i') ?></time> <strong><?=$poniedzialek_minuty?></strong></td>
        <td><time><?= $wtorek_roznica->format('%h:%i') ?></time> <strong><?=$wtorek_minuty?></strong></td>
        <td><time><?= $sroda_roznica->format('%h:%i') ?></time> <strong><?=$sroda_minuty?></strong></td>
        <td><time><?= $czwartek_roznica->format('%h:%i') ?></time> <strong><?=$czwartek_minuty?></strong></td>
        <td><time><?= $piatek_roznica->format('%h:%i') ?></time> <strong><?=$piatek_minuty?></strong></td>
        <td><time><?= $sobota_roznica->format('%h:%i') ?></time> <strong><?=$sobota_minuty?></strong></td>
        <td><time><?= $niedziela_roznica->format('%h:%i') ?></time> <strong><?=$niedziela_minuty?></strong></td>
     </tr>
     <tr>
        <td style="border-bottom:none ; border-left: none;"></td>
        <td colspan="7" align="center">Suma: <time><?=floor($wszystkie_minuty/60)?>:<?=str_pad($wszystkie_minuty%60, 2, '0', STR_PAD_LEFT); ?></time> <strong><?= $wszystkie_minuty ?></strong></td>
     </tr>
 </table>
</body>
</html>