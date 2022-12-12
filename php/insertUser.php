<?php

    require_once("connect.php");

    if(isset($_POST['submit']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $senha = $_POST['password'];
        $hash = password_hash($senha, PASSWORD_DEFAULT);

        $query = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
        $resultUser = mysqli_query($conexao, $query);

        $insert = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email','$hash')";

        if($resultUser->num_rows != 0){

            $_SESSION['msgError'] = "Usuário existente, realize a recuperação de sua conta.";
            header("Location: login.php");

        } elseif (mysqli_query($conexao, $insert)) {

            $_SESSION['msgSucess'] = "Usuário cadastro com sucesso. Realize o login.";
            header("Location: cadastro.php");

        }

    } 
?>