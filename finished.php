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

    if (isset($_POST['delete'])) {

        $id = mysqli_real_escape_string($conn, $_POST['deleteId']);

        $sql = "DELETE FROM `main` WHERE `main`.`id` = '$id'";
        if (mysqli_query($conn, $sql)) {
          header('Location: todos.php');
          echo 'Success';
        } else {
          echo 'Error: ' . mysqli_error($conn);
        }
    }

    function getAllFinishedTasks($conn) {
        $sql = 'SELECT * FROM main WHERE checked="1"';
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }

    $finishedTasks = getAllFinishedTasks($conn);

?>


<?php foreach ($finishedTasks as $task) { ?>
    <li class="collection-item">
        <form class="update" action="finished.php" method="post">
            <div class="row">
                <div class="col s8">
                    <p>
                        <label>
                          <input type="checkbox" class="filled-in" disabled checked="true" />
                          <span><?php echo $task['name']; ?></span>
                        </label>
                        <input type="hidden" name="deleteId" value="<?php echo $task['id']; ?>">
                    </p>
                </div>
                <div class="col s4">
                    <button class="btn waves-effect waves-light red" type="submit" style="margin-top: 7px;" name="delete">Delete</button>
                </div>
            </div>
        </form>
        <!-- <p>
          <label>
            <input type="checkbox" class="filled-in" disabled checked="true" />
            <span>/span>
          </label>
        </p> -->
    </li>
<?php    } ?>
