<?php
    session_start();
    include_once('config.php');

    if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha']) == true))
    {
      
      header('Location: login.php');
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
    }
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledash.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <title>GetPrice - Dashboard | Monitoramento e preços </title>
</head>
<body>

    <div class="container">
    <?php include_once('inc/header.php')?>
        <div class="content">
            <div class="header">
            <div class="title_dashboard">
                <h1>Oportunidades</h1>
            </div>
                <div class="profile">
                    <div class="avatar">
                        <img src ="images/avatar.png">
                    </div>
                    <div class="name">
                      Rafael
                    </div>
                </div>
            </div>
            <div class="search">
            <div class="box_search">
                <input type='text' id="buscar" class='search' name='search' placeholder="Pesquisar produto"></input>
                <button id="btn" name="submit" class="submit-login"><span class="material-symbols-rounded">search</span></button>
            </div>
            </div>
            <div id="bar_status" class="status_product">
    <div class="data_search">
    <span> Categoria principal:</span>
</div>
<div class="premium_status">
    <span class="material-symbols-rounded">workspace_premium</span>
    <span>Premium <span class='percent'></span>
</div>
<div class="full_status">
<span class="material-symbols-rounded">bolt</span>
    <span>Full<span class='percent'></span>
</div>
<div class="advertising_status">
<span class="material-symbols-rounded">arrow_selector_tool</span>
    <span>Patrocinado</span><span class='percent'></span>
</div>
<div class="competition_status">
    <span class="material-symbols-rounded">local_fire_department</span>
    <div class="title_status">Concorrencia:<span class="status"></span></div>
</div>
            </div><!--fim status product-->
          <div class="export">
            <button id="exportar" class="btn-primary">Exportar</button>
            </div>
            <table id="product-table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Produto</th>
                        <th scope="col">Criado há</th>
                        <th scope="col">N° Vendas</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Tipo de anúncio</th>
                        <th scope="col">Frete</th>
                        <th scope="col">Modelo de envio</th>
                        <th scope="col">Seller</th>
                        <th scope="col">Conta</th>
                        </tr>
                        </thead>
                        <tbody id="product-list"></tbody>
                        </table>
    
   
   
        </div> <!--fim content-->
    </div><!--fim container-->
</body>
<script type="module" src="js/oportunidades.js"></script>
<script  src="js/requests.js"></script>
</html>
