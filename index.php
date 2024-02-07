<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="submit" type="submit" name="submit" value="ENVIAR">
        </form>
        <div class="cadastro">
            <h6>Não tem cadastro?</h6>
            <a href="formulario.php">Cadastre-se</a>
        </div>
    </div>
</body>
</html>