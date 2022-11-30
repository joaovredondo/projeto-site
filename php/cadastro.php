<?php

  session_start();
  include_once("connect.php");
  include_once("insert.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Construção</title>
    <link rel="stylesheet" href="../estilo/stylecadastro.css" />
  </head>

  <body>
    <main>
      <section>
        <header>
          <h1>Crie sua conta</h1>

          <hr />

          <div id="msgUsers">
          <?php
            if(isset($_SESSION['errorCadastro'])){
              echo $_SESSION['errorCadastro'];
              unset($_SESSION['errorCadastro']);
            }


            if(isset($_SESSION['confirmCadastro'])){
              echo  $_SESSION['confirmCadastro'];
              unset( $_SESSION['confirmCadastro']);
            }
           
          ?>
          </div>

          <div class="msg"></div>
          <nav>
            <form action="cadastro.php" method="post" id="form">
              <label for="name">Nome</label><br />
              <input type="text" name="name" id="name" />

              <label for="email">E-mail</label><br />
              <input type="email" name="email" id="email" />

              <label for="password">Senha</label><br />
              <input type="password" name="password" id="password" />

              <label for="cpassword">Confirmar senha</label><br />
              <input type="password" name="cpassword" id="cpassword" />

              <button type="button" id="btn_enviar" name="submit" onclick="enviaFormulario()">Cadastrar-se</button>
            </form>
          </nav>
        </header>
      </section>
    </main>
    <script src="../script/script.js" defer></script>
  </body>
</html>
