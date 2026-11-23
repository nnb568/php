<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $start_data = '12-01-2027'  ;
    $end_data = '20-02-2027'; 
    $create_start_data = date_create($start_data);
    $create_end_data = date_create($end_data);
    $format_start_data = date_format($create_start_data, 'd-m-Y');
    $format_end_data = date_format($create_end_data, 'd-m-Y');
    $durance = date_diff($create_start_data,$create_end_data)->days;
    $price = 85;
    $cost = $price * $durance * 1.23;
    ?>
    <div style="border-radius: 20px; border: 0px; background-color: #e4db8d; padding: 10px; color: red;    ">
        <p>Wynajem od: <b><?=$format_start_data?></b> do: <b><?=$format_end_data?></b></p>
        <p>Liczba dni najmu: <b><?=$durance?></b></p>
        <p>Cena najmu: <b><?=$price?></b>zł (netto/dzień)</p>
        <p>Całkowity koszt najmu: <b><?=$cost?></b>zł (bruto) [VAT = 23%]</p>
    </div>

</body>
</html>