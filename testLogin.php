<?php

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) )
{
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro WHERE email = $email and senha = $senha";
}
else
{
    header('Location: login.php');
}



?>