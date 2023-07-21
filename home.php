<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE | GN</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
            background-image: linear-gradient(to right, rgb(4, 155, 155),rgb(116, 116, 3));
            text-align: center;
            color: bisque;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255,255,255,0.2);
            padding: 30px;
            border-radius: 10px;

        }
        a{
            background-image:linear-gradient(to left, rgb(4, 155, 155),rgb(116, 116, 3));
            text-decoration: none;
            color: rgb(11, 7, 1);
            border: 2px solid dodgerblue;
            border-radius: 10px;
            padding: 7px;
            
        }
        a:hover{
            background-image:linear-gradient(to right, rgb(4, 155, 155),rgb(116, 116, 3));
            color: black;
        }
    </style>
</head>
<body>
    <h1>Introdução em PHP</h1>
    <h2>Desenvolvedor Guga-Nascimento</h2>

    <div class="box">
        <a href="login.php"><strong>Login</strong></a>
        <a href="formulario.php"><strong>Cadastra-se</strong></a>
    </div>
    
</body>
</html>