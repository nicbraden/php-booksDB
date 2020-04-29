<?php
//start session
session_start();
//include database.php
include_once('includes/nicolebraden_functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <!--navigation -->
    <div class="container">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active" <?php if ($_SERVER['SCRIPT_NAME'] == "/nicolebraden_submit.php") ?>>
                        <a class="nav-link" href="nicolebraden_submit.php">Home</a>
                    </li>
                    <li class="nav-item" <?php if ($_SERVER['SCRIPT_NAME'] == "/nicolebraden_table.php") ?>>
                        <a class="nav-link" href="includes/nicolebraden_table.php">Submissions</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br /><br /><br /><br />
        <!--user form -->
        <form class="call-to-action" action="includes/nicolebraden_output.php" method="post">
            <h1 class="display-4">Enter a Book</h1>
            <p>
                <label for="title">Title:</label>
                <input type="text" name="title" id="title">
            </p>
            <p>
                <label for="author">Author:</label>
                <input type="text" name="author" id="author">
            </p>
            <p>
                <label for="star">Rating:</label>
                <input type="text" name="stars" id="stars">
            </p>
            <input class="btn btn-dark btn-lg" type="submit" name="submit" value="Submit" href="includes/output.php">

            <?php
            sessionCount();           
            ?>
        </form>




    </div>
    <!--scripts for bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>



</html>