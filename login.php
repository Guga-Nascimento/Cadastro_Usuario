<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
            background-image: linear-gradient(to right, rgb(4, 155, 155),rgb(116, 116, 3));
        }
        div{
            background-color: rgba( 87, 62, 62, 0.3);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 60px;
            border-radius: 10px;
            color: rgb(19, 20, 16);
        }
        input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 16px;
            border-radius: 8px;
        }
        .inputSubmit{
            background-image:linear-gradient(to left, rgb(4, 155, 155),rgb(116, 116, 3));           
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 8px;
            color: bisque;
            
        }
        .inputSubmit:hover{
            background-image:linear-gradient(to right, rgb(4, 155, 155),rgb(116, 116, 3));
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>            Login        </h1>
        <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
    
</body>
</html>