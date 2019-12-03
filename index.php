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

    <div class="container">
        <div class="row">
            <div class="col s12">
                <!-- Calendar -->
                <input type="text" class="datepicker" placeholder="Choose date">
            </div>
            <div class="col s6">
                <!-- List -->
                <form action="#">
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Tasks</h4></li>
                        <li class="collection-item">
                            <p>
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span>Eat</span>
                              </label>
                            </p>
                        </li>
                        <li class="collection-item">
                            <p>
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span>Learn</span>
                              </label>
                            </p>
                        </li>
                        <li class="collection-item">
                            <p>
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span>Sleep</span>
                              </label>
                            </p>
                        </li>
                        <li>
                            <input placeholder="Type to-do" id="todo" type="text" class="validate">
                        </li>
                    </ul>

                </form>
            </div>

            <div class="col s6">
                <!-- List -->
                <form action="#">
                    <ul class="collection with-header">
                        <li class="collection-header"><h4>Finished tasks</h4></li>
                        <li class="collection-item">
                            <p>
                              <label>
                                <input type="checkbox" class="filled-in" checked="checked" />
                                <span>Eat</span>
                              </label>
                            </p>
                        </li>
                        <li class="collection-item">
                            <p>
                              <label>
                                <input type="checkbox" class="filled-in" checked="checked" />
                                <span>Learn</span>
                              </label>
                            </p>
                        </li>
                        <li class="collection-item">
                            <p>
                              <label>
                                <input type="checkbox" class="filled-in" checked="checked" />
                                <span>Sleep</span>
                              </label>
                            </p>
                        </li>
                    </ul>

                </form>
            </div>

        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="./main.js"></script>
</body>
</html>
