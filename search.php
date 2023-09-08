<?php
      session_start();

      $data = array(
        'search'=> $_SESSION['search'],
    );

    
    echo json_encode($data);
    header('Content-type: application/json');
?>

