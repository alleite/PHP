<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de array</title>
</head>
<body>
    <?php
    $paises = array("Brasil", " Bélgica", " Egito", " Jamaica", " Espanha", " Russia", " Japão", 
    " Estados Unidos", " Peru", " Camarões ");

    $fillArray = array_fill(0, 4, "Uruguai");
    print_r($fillArray);
    echo "<br>";

    $paisesString = implode("," , $paises);
    print_r($paisesString);
    echo "<br>";

    $comprimentoPaises = count($paises);
    echo "O comprimento da Array sobre Países é de:  $comprimentoPaises <br>";

    function adicionarMedalha($paises){
        return $paises . " 🥇<br>";
    }
    $paisesMedalhistas = array_map("adicionarMedalha", $paises );
    print_r($paisesMedalhistas);
    echo "<br>";

    $pop = array_pop($paises);
    echo "O último país removido foi : $pop";
    echo "<br>";
    
    array_push($paises, " Alemanha");
    print_r($paises);
    echo "<br>";

    $shift = array_shift($paises);
    echo "O país removido foi o: $shift <br>";

    array_unshift($paises, "México");
    print_r($paises);
    echo "<br>";

   array_splice($paises, 3, 4);
   print_r($paises);
   echo "<br>"; 
    ?>
</body>
</html>