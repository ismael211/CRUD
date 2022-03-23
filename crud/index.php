<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <fieldset>
        <form action="cadastrando.form.php" method="post">

            Nome: <input type="text" name="name" id="">
            <br><br>
            Cidade: <input type="text" name="city" id="">
            <br><br>
            Idade: <input type="number" name="age" id="">
            <br><br>
            E-mail: <input type="email" name="email" id="">
            <br><br>
            <button type="submit">Salvar</button> 
            <a href="consultar.dados.php">Consultar dados</a>
            <hr>


        </form>
    </fieldset>
</body>
</html>