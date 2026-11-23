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
        border: medium solid black ;
        background-color: #e4db8d;
        color: red;
        padding: 10px;
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
        <td></td>
         <th>Poniedziałek</th><th>Wtorek</th><th>Środa</th>
         <th>Czwartek</th><th>Piątek</th><th>Sobota</th><th>Niedziela</th>
     </tr>
     <tr>
        <td>godziny przy komputerze</td>
        <td><?php echo $poniedzialek_od; ?> - <?php echo $poniedzialek_do; ?></td>
        <td><?php echo $wtorek_od; ?> - <?php echo $wtorek_do; ?></td>
        <td><?php echo $sroda_od; ?> - <?php echo $sroda_do; ?></td>
        <td><?php echo $czwartek_od; ?> - <?php echo $czwartek_do; ?></td>
        <td><?php echo $piatek_od; ?> - <?php echo $piatek_do; ?></td>
        <td><?php echo $sobota_od; ?> - <?php echo $sobota_do; ?></td>
        <td><?php echo $niedziela_od; ?> - <?php echo $niedziela_do; ?></td>
     </tr>
 </table>
</body>
</html>