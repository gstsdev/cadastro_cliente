<?php


$nomeCliente = $_GET["nome"];
$cpfCliente = $_GET["cpf"];
$telefoneCliente = $_GET["fone"];
$emailCliente = $_GET["email"];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Cliente</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nome Completo</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td><?php echo $nomeCliente; ?></td>
                <td><?php echo $cpfCliente; ?></td>
                <td><?php echo $telefoneCliente; ?></td>
                <td><?php echo $emailCliente; ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>