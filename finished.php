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
        <p>
          <label>
            <input type="checkbox" class="filled-in" disabled checked="true" />
            <span><?php echo $task['name']; ?></span>
          </label>
        </p>
    </li>
<?php    } ?>
