<?php
    include_once('config.php');
    if(isset($_POST['submit']))
    {
        include_once('config.php');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $link = $_POST['link'];
        $password = $_POST['password'];
        $fone = $_POST['fone'];

        $sqlaccount = "INSERT INTO account(name,email, link, password,fone) VALUES('$name', '$email','$link','$password','$fone')";
        $result = $conexao -> query($sqlaccount);
        header('Location:login.php');
        exit;
    }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleSignup.css">
    <title>GetPrice- Sign up</title>
</head>
<body>
    <div class="container">
        <div class="box_forms">
            <div class="title">
                <h1>Crie seu usuário</h1>
            </div>
                <form action="signup.php" method="POST">
                    <input type="text" class="name" name="name" placeholder="Nome Completo"></input>
                    <input type="text" class="email" name="email" placeholder="Email"></input>
                    <input type="text" class="link" name="link" placeholder="Link da loja no Mercado Livre"></input>
                    <input type="password" class="password" name="password" placeholder="Password"></input>
                    <input type="text" class="fone" name="fone" placeholder="Contato (**) *****-****"></input>
                    <button type="submit" name="submit" class="submit-login">Criar conta</button>
                </form>
            <span class="terms">
                Ao usar nossos serviços você concorda e aceita nosso <span>Termos de Uso</span> e Políticas de Privacidade  
            </span>
        </div>
    </div>
</body>
</html>