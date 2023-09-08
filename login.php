<?php

    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sqlLogin = "SELECT * FROM account WHERE email='$email' and password = '$password'";
        $result = $conexao -> query($sqlLogin);

        if(mysqli_num_rows($result)<1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: dashboard.php');
        }

    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GetPrice - Monitoramento e preços </title>
</head>
<body>
    <section>
        <div class="container">
            <div class="background">
                <div class="title">
                    <div class="box_title">
                        <h1>GetPrice</h1>
                        <span>Solução em monitoramento de preço</span>
                    </div>
                </div>
            </div>
            <div class="login">
               <div class="box_login">
                    <div class="title">
                        <h1>Signin</h1>
                        <div class="hr">
                     
                        </div>
                    </div>
                    <div class="forms">
                        <form action="login.php " method="POST">
                        <input type="text" class="email" name="email" placeholder="Email"></input>
                        <input type="password" class="password" name="password" placeholder="Password"></input>
                        <button type="submit" name="submit" class="submit-login">Log in</button>
                        </form>
                    </div>
                    <span class="signup"><a href="signup.php">Criar conta</a></span>
               </div>
            </div>
        </div>
    </section>
</body>
</html>