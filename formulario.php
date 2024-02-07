<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco,senha)
        VALUES ('$nome','$email','$telefone','$genero','$data_nasc','$cidade','$estado','$endereco','$senha')");

        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">  
    <title>Cadastro</title>
    <style>
        body {
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300px;
            transform: translate(-50%, -50%);
            color: #fff;
            background-color: rgba(0, 0,0, 0.8);
            padding: 15px;
            border-radius: 15px;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend{
            border: 3px solid dodgerblue;
            padding: 2px 3px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 5px;
        }

        p {
            padding-left: 10px;
        }

        .genero{
            padding-left: 15px;
            padding-top: 5px;
        }

        .data_nasci {
            border-radius: 15px;
            outline: none;
            text-align: center;
        }

        .inputBox{
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            
        }

        .label_input {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 0.5s;
        }

        .inputUser:focus ~ .label_input,
        .inputUser:valid ~ .label_input{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        .button {
            padding-bottom: 15px;
            padding-left: 10px;
        }

        #cancel {
            width: 110px;
            margin-right: 10px;
            background-color: dodgerblue;
            font-size: 15px;
            border: none;
            border-radius: 5px;
        }

        #submit {
            width: 110px;
            background-color: dodgerblue;
            font-size: 15px;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="box">
        <fieldset>
            <legend>Cadastro</legend>
            <form action="formulario.php" method="POST">
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label class="label_input" for="nome">Nome Completo</label>
            </div><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label class="label_input" for="email">E-mail</label>
            </div><br>
            <div class="inputBox">
                <input type="text" name="telefone" id="telefone" class="inputUser" required>
                <label class="label_input" for="telefone">Telefone</label>
            </div>
            <p>Sexo:</p>
            <div class="genero">
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
            </div>
                <br>
            <div class="data_nasci">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" name="data_nasc" id="data_nasc" required>                
            </div><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label class="label_input" for="cidade">Cidade</label>
            </div><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label class="label_input" for="estado">Estado</label>
            </div><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label class="label_input" for="endereco">Endereço</label>
            </div><br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label class="label_input" for="senha">Senha</label>
            </div><br>
            <div class="inputBox">
                <input type="password" name="confirmSenha" id="confirmSenha" class="inputUser" required>
                <label class="label_input" for="confirmSenha">Confirmar Senha</label>
            </div><br>
            <div class="button">
                <a href="home.php"><input type="button" name="cancel" id="cancel" value="CANCELAR"></a>
                <input type="submit" name="submit" id="submit" value="ENVIAR">                
            </div>
        </form>
        </fieldset>
    </div>

    
</body>
</html>