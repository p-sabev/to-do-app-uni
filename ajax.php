<?php

    $host = 'localhost';
    $user = 'psabev';
    $password = 'test123';
    $db_name = 'todo';

    $conn = mysqli_connect($host, $user, $password, $db_name);

    if (!$conn) {
        echo 'Error connecting to db: ' . mysqli_connect_error();
    }
    //  else {
    //     echo 'Connection established </ br>';
    // }


    if($_POST['action'] == 'update') {
      echo 'HEREEE';
    }

?>
