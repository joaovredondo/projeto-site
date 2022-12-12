<?php

session_start();
include_once("connect.php");

if (isset($_POST['submit']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {

    $email = $_POST["email"];
    $senha = $_POST["password"];

    $sqlUser = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultUser = mysqli_query($conexao, $sqlUser);

    if(mysqli_num_rows($resultUser) > 0){
        //Pegar senha armazeda no banco de dados e verificar
        
        $rowUser = mysqli_fetch_assoc($resultUser);
        
        $passHashed = $rowUser["senha"];
       
        $verify = password_verify($senha, $passHashed);
        
        if($verify){
            // Senha válida, permitir acesso ao sistema
            $_SESSION['email'] = $email;
            header("Location: index.php");

        } else {
            $_SESSION['msgError'] = 'Email ou senha incorretos.';
            header("Location: login.php");
        }

    } else {
        header("Location: login.php");
        $_SESSION['msgError'] = 'Email ou senha incorretos.';
    }

} else {
    header("Location: login.php");
    $_SESSION['msgError'] = 'Email ou senha incorretos.';

}
