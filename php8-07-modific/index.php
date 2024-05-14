<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Envia para o destisno.php</h1>
    <form action="destino.php" method="post">
        <label> Nome </label>
        <input type="text" name="campo_nome">
        <Label> Cidade </Label>
        <input type="text" name="campo_cidade">
        <label> CPF </label>
        <input type="number" name="campo_cpf">
        <Label> Data de nascimento </Label>
        <input type="date" name="campo_data_nasc">
        <input type="submit">
    </form>
    <hr>
</body>

</html>