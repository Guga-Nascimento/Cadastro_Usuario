<?php

    if(isset($_POST['submit'])) 
    {
        include_once('config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,senha,telefone,genero,data_nasc,cidade,estado,endereco)
        VALUES('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
            background-image: linear-gradient(to right, rgb(4, 155, 155),rgb(116, 116, 3));
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.3);
            padding: 20px;
            border-radius: 8px;
            width: 25%;
        }
        fieldset{
            border: 2px solid yellowgreen;

        }
        legend{
            border: 1px solid yellowgreen;
            padding: 8px;
            text-align: center;
            background-color: yellowgreen;
            border-radius: 6px;
            color: bisque;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid bisque;
            outline: none;
            color: bisque;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;

        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 10px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 7px;
            border-radius: 8px;
            outline: none;
            color: rgb(16, 11, 4);
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to left, rgb(4, 155, 155),rgb(116, 116, 3) );
            width: 100%;
            border: none;
            padding: 12px;
            color: bisque;
            font-size: 15px;
            cursor: pointer;
            border-radius: 8px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(14, 165, 165),rgb(126, 126, 13) );
        }
    </style>

</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><strong>Formulário de Clientes</strong></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput"> Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput"> Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>               
                <label for="data_nascimento"> <strong>Data de Nascimento</strong></label>
                <input type="date" name="data_nascimento" id="data_nascimento"  required>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    
</body>
</html>