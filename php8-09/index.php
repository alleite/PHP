<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>count</title>
</head>

<body>
    <?php
    $fruta = array("Cereja ", "Franboesa ", "Pitaya ", "Mirtilo", "Uva");

    for ($i = 0; $i < count($fruta); $i++) {
        echo $fruta[$i] . "<br>";
    }

    //o Count conta quantos elementos tem dentro do array (array conta quantas posições tem)
    ?>
</body>

</html>