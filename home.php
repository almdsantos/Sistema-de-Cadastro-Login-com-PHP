<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: #fff;
        }   

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
            width: 250px;
            height: 400px
        }

        h1 {
            font-size: 20px;
        }

        h2 {
            padding-bottom: 100px;
            font-size: 15px;
        }

        a { 
            text-decoration: none;
            color: #fff;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            border: 1px solid white;
            padding: 10px;
            border-radius: 15px;
        }

        .login {
            padding-left: 25px;
            padding-right: 25px;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Seja Bem Vindo</h1>
        <h2>O que deseja fazer?<h2>
        <a class="login" href="index.php">Login</a>
        <a id="cadastro" href="formulario.php">Cadastro</a>
    </div>
</body>
</html>