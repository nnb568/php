<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {border-collapse: collapse;}
        td {border: 10px green dashed;
            color: red;
            padding: 100px;
            font-size: 80px;
            font-weight: bold;
            text-shadow: 5px 50px blue;
            rotate: 180deg;
        }
    </style>

</head>
<body>
    <?php
    $liczba = 77;
    ?>

    <table>
        <tr>
            <td><?=$liczba?></td> <td><?=$liczba*2?></td> <td><?=$liczba*3?></td> <td><?=$liczba*4?></td>
        </tr>
    </table>
</body>
</html>