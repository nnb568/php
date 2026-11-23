<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <php $start_data = data_create('2027-01-21');
    $end_data = data_create('2027-02-20');
    $durance = data_diff($start_data,$end_data);
    $price = 85;
    $cost = $price * $durance * 1,23;
    ?>
    <p>Wynajem od: <?=$start_data?> do: <?=$end_data?></p>
    <p>Liczba dni najmu: <?=$durance?></p>
    <p>Cena najmu: <?=$price?>zł (netto/dzień)</p>
    <p>Całkowity koszt najmu: <?=$cost?>zł (bruto) [VAT = 23%]</p>
    
</body>
</html>