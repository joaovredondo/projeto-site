<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construção</title>
    <link rel="stylesheet" href="estilo/style.css">
</head>

<body>
    <main>
        <section>
            <header>
                <h1>Acesse sua conta</h1>
                <hr>
                <nav>
                    <form action="verificaLogin.php" method="POST">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password">
                        <input type="submit" name="submit" value="Entrar" id="btn_enviar">
                    </form>
                </nav>
                <hr>
                <p>Não possui uma conta? <a href="../projeto-site/php/cadastro.php">Cadastre-se aqui</a></p>
            </header>
        </section>
    </main>
</body>

</html>