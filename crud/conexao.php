<?php

//Dados para conexão
    $host = 'localhost';
    $user = 'admin';
    $senha = 'admin';
    $data_base = 'chambari';

//Criando [Define] para colocar parametros de conexão com bancokkkkk
    define('HOST', $host); //Serve Catharina Chata
    define('USUARIO', $user); //Server
    define('SENHA', $senha); //Password
    define('DB', $data_base); //Neme of Data Base

//Fazendo a conexão e colocando em uma variável
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die
    ('Não foi possivel conectar. Erro de acesso ao banco.');

    $conexao->set_charset("utf8"); //Resolvendo problemas de acentuação