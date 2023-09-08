
<?php
    session_start();
    require 'lib/Meli/meli.php';
    require 'configApp.php';
    $meli = new Meli($appId, $secretKey);
    $response = $meli->get('/users/me', array('access_token' => $_SESSION['access_token']));

    $id_conta = $response['body']->id;
    $fullname = $response['body']->first_name . " " . $response['body']->last_name;
    $email = $response['body']->email;
    $address = $response['body']->address;
    $phone = $response['body']->phone->number;
    $link = $response['body']->permalink;
    

    echo $fullname;
?>
    