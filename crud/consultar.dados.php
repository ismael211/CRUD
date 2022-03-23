<?php

include('conexao.php');

//Montando query
$sql = "SELECT * FROM `clientes`";


//Executando o sql
$result = mysqli_query($conexao, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Consultar</title>
</head>
<body>
<a href="index.php"> Voltar</a>
    <hr>

    <!-- Tabela de Consultar -->
    <table style="border: 1px solid black;">
        <th>Id</th>
        <th>Nome</th>
        <th>Cidade</th>
        <th>Idade</th>
        <th>Email</th>

        <?php while($linha = $result->fetch_assoc()){ ?>

        <tr>

            <td><?= $linha['id']; ?></td>
            <td><?= $linha['nome']; ?></td>
            <td><?= $linha['cidade']; ?></td>
            <td><?= $linha['idade']; ?></td>
            <td><?= $linha['email']; ?></td>

        </tr>
        <?php
        }
        ?>
    </table>



</body>
</html>