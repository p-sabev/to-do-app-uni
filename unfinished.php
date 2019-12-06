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

    if (isset($_POST['done'])) {

        $id = mysqli_real_escape_string($conn, $_POST['id']);

        $sql = "UPDATE main set checked='1' where id='$id'";
        if (mysqli_query($conn, $sql)) {
          header('Location: todos.php');
          echo 'Success';
        } else {
          echo 'Error: ' . mysqli_error($conn);
        }
    }

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
        <form class="update" action="unfinished.php" method="post">
            <div class="row">
                <div class="col s8">
                    <p>
                      <label>
                        <input type="checkbox" class="filled-in" data-id="'.$task['id'].'" disabled />
                        <span><?php echo $task['name']; ?></span>
                      </label>
                      <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                    </p>
                </div>
                <div class="col s4">
                    <button class="btn waves-effect waves-light green" type="submit" style="margin-top: 7px;" name="done">Done</button>
                </div>
            </div>
        </form>
    </li>
<?php    } ?>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script type="text/javascript">
function updateStatus() {
    // console.log(id)
    $.ajax({
           type: "POST",
           url: "update.php",
           data: {status: '1', id: 1},
           success: function(response) {
                    console.log(response);
           }
    });
}
</script>
