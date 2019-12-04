<?php

    $host = 'localhost';
    $user = 'psabev';
    $password = 'test123';
    $db_name = 'todo';

    $conn = mysqli_connect($host, $user, $password, $db_name);

    if (!$conn) {
        echo 'Error connecting to db: ' . mysqli_connect_error();
    } else {
        // echo 'Connection established </ br>';
    }

    if (isset($_GET['submit'])) {

        $toDoText = mysqli_real_escape_string($conn, $_GET['todo']);
        $date = mysqli_real_escape_string($conn, $_GET['date']);

        $sql = "INSERT INTO main (`name`, `date`, `checked`) VALUES ('$toDoText', '$date', '0')";

        if (mysqli_query($conn, $sql)) {
          // header('Location: todos.php');
          echo 'Success';
        } else {
          echo 'Error: ' . mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>To-do list</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a class="brand-logo center">To-do list</a>
        </div>
    </nav>

    <form action="todos.php" method="GET">
        <div class="container">
        <div class="row">
            <div class="col s12">
                <!-- Calendar -->
                <input type="text" id="date" name="date" class="datepicker" placeholder="Choose date">
            </div>
            <div class="col s6">
                <!-- List -->

                <ul class="collection with-header">
                        <li class="collection-header"><h4>Tasks</h4></li>
                        <?php require('./unfinished.php'); ?>
                        <li>
                            <div class="row">
                                <div class="col s8">
                                    <input placeholder="Type to-do" id="todo" name="todo" type="text" class="validate">
                                </div>
                                <div class="col s4">
                                    <button class="btn waves-effect waves-light" type="submit" style="margin-top: 7px;" name="submit">Add</button>
                                </div>
                            </div>
                        </li>
                    </ul>




            </div>

            <div class="col s6">
                <!-- List -->
                <form action="#">
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Finished tasks</h4></li>
                        <?php require('./finished.php'); ?>
                    </ul>

                </form>
            </div>

        </div>
    </div>
    </form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="./main.js"></script>
</body>
</html>
