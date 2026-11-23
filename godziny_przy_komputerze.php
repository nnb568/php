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
        color: lightskyblue;
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
 </table>
</body>
</html>