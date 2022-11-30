<?php

    session_start();

    //print_r($_REQUEST);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: ../projeto-site/login.php');
    }

        if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){

        // Acessa o sistema

        include_once('../projeto-site/php/connect.php');

        $email = $_POST['email'];
        $senha = $_POST['password'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sqlUser = "SELECT * FROM USUARIOS WHERE email = '$email' and senha = '$senha'";

        $sqlExecute = $conexao->query($sqlUser);

        // print_r($sqlUser);
        // print_r($sqlExecute);
    
        if(mysqli_num_rows($sqlExecute) < 1){
            //print_r("Não existe");
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: login.php');
        } else {
            //print_r("Existe");
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $senha;
            header('Location: ../projeto-site/php/index.php');
        }

        } else {

        // Não acessa o sistema
        header('Location: ../login.php');

        }

?>