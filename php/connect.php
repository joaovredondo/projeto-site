<?php

    $dbHost = 'Localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'formulario';

    $conexao = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    /*if($conexao->connect_errno){
        echo "Error";
    } else {
        echo "Conexão, OK!";
    }*/
?>