<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php const DOBRA_RADA = "Bez chleba, to się nie najesz. ";?>
    <h3><?=DOBRA_RADA?></h3>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>strlen: </b><?=mb_strlen(DOBRA_RADA)?></p>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>str_word_count: </b><?=str_word_count(DOBRA_RADA)?></p>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>strrev: </b><?=strrev(DOBRA_RADA)?></p>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>strpos: </b><?=mb_strpos(DOBRA_RADA,"to")?></p>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>str_replace: </b><?=str_replace("chleba","mięsa",DOBRA_RADA)?></p>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>strtolower: </b><?=strtolower(DOBRA_RADA)?></p>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>strtoupper: </b><?=strtoupper(DOBRA_RADA)?></p>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>ucwords: </b><?=ucwords(DOBRA_RADA)?></p>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>trim: </b><?=trim(DOBRA_RADA)?></p>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>strstr: </b><?=mb_strstr(DOBRA_RADA,"nie")?></p>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>substr: </b><?=mb_substr(DOBRA_RADA,10,4)?></p>
    <p>Do stałej DOBRA_RADA stosuję funkcję <b>str_pad: </b><?=str_pad(DOBRA_RADA,40,"-_- ",STR_PAD_BOTH)?></p>
</body>
</html>