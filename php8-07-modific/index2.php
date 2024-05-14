<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Envia para o destisno.php</h1>
    <form action="index2.php" method="post">
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

    <?php 
    if(empty($_POST["campo_nome"]) && empty($_POST["campo_cidade"]) && empty($_POST["campo_cpf"]) && empty($_POST["campo_data_nasc"])){
        ?>
        <h3>Digite um nome e uma cidade...</h3>
        <?php 
    } else {
        $nome = $_POST["campo_nome"];
        $cidade = $_POST["campo_cidade"];
        $cpf = $_POST["campo_cpf"];
        $nasc = $_POST["campo_data_nasc"];
        ?>
        <h3> Resultado </h3>
        A pessoa se chama <b> <?php echo $nome ?></b>, mora da cidade de <b><?php echo $cidade ?></b>,
        possue o CPF <b><?php echo $cpf ?></b> e nasceu na data de <b><?php echo $nasc ?></b>.
    <?php } ?>
    <hr>
</body>

</html>