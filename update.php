<?php

    $host = 'localhost';
    $user = 'psabev';
    $password = 'test123';
    $db_name = 'todo';

    $conn = mysqli_connect($host, $user, $password, $db_name);

    if (!$conn) {
        echo 'Error connecting to db: ' . mysqli_connect_error();
    }

    if (isset($_GET['id'])) {

        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $status = mysqli_real_escape_string($conn, $_GET['status']);

        $sql = "UPDATE main set checked='$status' where id='$id'";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
          // header('Location: todos.php');
          echo 'Success';
        } else {
          echo 'Error: ' . mysqli_error($conn);
        }
    }

?>
