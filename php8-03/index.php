<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP8</title>
</head>
<body>
    <?php 
    $nome = "Ana";
    $cidade = "Miracatu";?>

    <table border= '1'  width= '200px'>
            <thead> 
                <tr>
                    <th>Nome</th>
                    <th>Cidade</th>
                </tr>
    </thead>
        <tbody>
            <tr>
                <td><?php echo$nome ?></td>
                <td><?php echo$cidade ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>