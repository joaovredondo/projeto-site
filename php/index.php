<?php
  session_start();
  include_once("connect.php");

  if(!isset($_SESSION['email'])){
    header("Location: login.php");
    $_SESSION['msgError'] = "Email ou senha incorretos.";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../estilo/styleprincipal.css" />
    <title>Principal</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Menu Principal</a>
                <a href="desconectar.php">
                    <button class="btn btn-outline-success" type="submit">Desconectar</button>
                </a>
        </div>
    </nav>

    <?php

    ?>
  </body>
</html>
