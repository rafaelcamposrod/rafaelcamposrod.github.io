<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styledash.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
  <title>GetPrice - Dashboard | Monitoramento e preços </title>
</head>

<body>

  <div class="container">
    <?php include_once('inc/header.php')?>
    <div class="content">
      <div class="header">
        <div class="title_dashboard">
          <h1>Seller</h1>
        </div>
        <div class="profile">
          <div class="avatar">
            <img src="images/avatar.png">
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

      <table id="product-table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Titulo</th>
                        <th scope="col">MLB</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Preco DE</th>
                        <th scope="col">Preco POR</th>
                        <th scope="col">Tipo de anuncio</th>
                        <th scope="col">Frete Gratis</th>
                        <th scope="col">Modelo de envio</th>
                        </tr>
                        </thead>
                        <tbody id="product-list"></tbody>
                        </table>
                        <a href=""id="previous-button">Anterior</a>
        <a href=""id="next-button">Proximo</a>
        </div> <!--fim content-->
       
    </div><!--fim container-->
</body>
<script src="js/seller.js"></script>
</html>