<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <?php
    //array guarda um conjunto de valores, variaveis guardam somente um valor 

    $fruta = array("Cereja ","Franboesa ", "Pitaya ", "Mirtilo");
    //echo $fruta[2]; //primeira posição é 0 
    //print_r($fruta)

    for( $i = 0; $i < 4; $i++){
        echo $fruta[$i] .  "<br>";
    }


    ?>
</body>
</html>