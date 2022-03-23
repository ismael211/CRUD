<?php

//Incluindo conexão
include('conexao.php');


    //Recebendo Valores
    $nome = $_POST['name'];
    $cidade = $_POST['city'];
    $idade = $_POST['age'];
    $email = $_POST['email'];

    //Criando query
    $sql = "INSERT INTO `clientes`(`nome`, `cidade`, `idade`, `email`) VALUES ('$nome','$cidade','$idade','$email')";

    //Cadastrar no banco

    $resultado = mysqli_query($conexao, $sql);

    //verificando o cadastro
    if($resultado==1){
        echo "Cadastro Realizado com sucesso!";
    }else{
        echo "Deu pau em!";
    }


?>