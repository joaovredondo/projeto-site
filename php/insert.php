<?php

 if(isset($_POST['submit'])){
    $nome = $_POST['name'];
    $email = $_POST['email']; 
    $senha = $_POST['password'];
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    $sqlUser = "SELECT * FROM USUARIOS WHERE email='$email'";
    $resultUser = mysqli_query($conexao, $sqlUser);
    
    if(($sqlUser) AND ($resultUser->num_rows != 0)){
      $_SESSION['errorCadastro'] = 'Esta conta já existe, faça a recuperação de sua senha.';
    } else {
      $insertUser = "INSERT INTO USUARIOS (nome, email, senha) VALUES ('$nome', '$email', '$hash')";
      $resultInsert = mysqli_query($conexao, $insertUser);
    }

    if(mysqli_insert_id($conexao)){
      $_SESSION['confirmCadastro'] = 'Cadastrando usuário...';
      sleep(3);
      header('Location: cadastro.php');
    } else {
      $_SESSION['errorCadastro'] = 'Esta conta já existe, faça a recuperação de sua senha.';
      sleep(3);
      header('Location: cadastro.php');
    }
  }

?>