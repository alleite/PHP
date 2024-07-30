<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fill</title>
</head>
<body>
<?php
    // Neste exemplo, a função array_fill() cria um array com 5 elementos,
    // todos preenchidos com o valor "João". Isso significa que o array
    // resultante terá o nome "João" em todas as posições, neste caso, 5 vezes.
//o 0 é o indice inicial
    // Criando um array com 5 elementos, preenchidos com o valor "João"
    $fillArray = array_fill(0, 5, "João");

    // Imprimindo o array
    print_r($fillArray);

    //implode converte o array para string ($variavel = implode(", " , $nomes);)
    ?>
</body>
</html>