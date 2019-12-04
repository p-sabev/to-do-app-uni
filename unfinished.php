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

    function getAllUnfinishedTasks($conn) {
        $sql = 'SELECT * FROM main WHERE checked="0"';
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }

    $unfinishedTasks = getAllUnfinishedTasks($conn);

?>


<?php foreach ($unfinishedTasks as $task) { ?>
    <li class="collection-item">
        <p>
          <label>
            <input type="submit" class="filled-in" onclick="updateStatus()" />
            <span><?php echo $task['name']; ?></span>
          </label>
        </p>
    </li>
<?php    } ?>

<script>
function updateStatus() {
  // $.ajax({
  //      type: "POST",
  //      url: './ajax.php',
  //      data:{action:'update'},
  //      success:function(html) {
  //        alert(html);
  //      }
  //
  // });
}
</script>
