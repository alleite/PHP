<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>
<body>
    <?php
    $nome = $_POST["campo_nome"];
    $cidade = $_POST["campo_cidade"];
    $cpf = $_POST["campo_cpf"];
    $nasc = $_POST["campo_data_nasc"];
    ?>
    <h3> Resultado </h3>
    A pessoa se chama <b> <?php echo $nome ?></b>, mora da cidade de <b><?php echo $cidade ?></b>,
    possue o CPF <b><?php echo $cpf ?></b> e nasceu na data de <b><?php echo $nasc ?></b>.
</body>
</html>