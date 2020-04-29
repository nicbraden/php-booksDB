<?php

//make $mysqli in global scope
$mysqli = new mysqli("localhost", "test", "test123", "class_example");

// Attempt to connect to the database
function db()
{
    // Check connection
    if ($GLOBALS['mysqli'] === false) {
        die("ERROR: Could not connect. " . $GLOBALS['mysqli']->connect_error);
    }
}

//Attempt insert query execution
function insert()
{
    //get user inputs
    $title = $_POST['title'];
    $author = $_POST['author'];
    $stars = $_POST['stars'];

    //sql insert statement 
    $sql = "INSERT INTO books (title, author, stars) VALUES ('$title', '$author', '$stars')";
    if ($GLOBALS['mysqli']->query($sql) === true) {
    } else {
        echo "ERROR: Could not able to execute $sql. " . $GLOBALS['mysqli']->error;
    }
}

//Attempt to select query execution 
function select()
{
    //sql select statement 
    $query = "SELECT title, author, stars, time FROM books ORDER BY stars DESC";

    if ($result = mysqli_query($GLOBALS['mysqli'], $query)) {
        //get array and put it in a table
        echo "<table style='width:100%; text-align:center'>";
        echo "<tr><th>Title</th>";
        echo "<th>Author</th>";
        echo "<th>Stars</th>";
        echo "<th>Time</th></tr>";
        while ($row = mysqli_fetch_row($result)) {
            echo "<tr><td>";
            echo $row['0'];
            echo "</td><td>";
            echo $row['1'];
            echo "</td><td>";
            echo $row['2'];
            echo "</td><td>";
            echo $row['3'];
            echo "</td></tr>";
        }
        echo "</table>";
    }
}

//sanitize input values 
function sanitize()
{
    htmlentities($_POST['title']);
    htmlentities($_POST['author']);
    htmlentities($_POST['stars']);
}

//increment session count
function sessionCount()
{
    if (isset($_SESSION['count']) ) {
        if ($_SESSION['count'] <= 2){
            $_SESSION['count']++;
            echo "You have submitted " . $_SESSION['count'] . " times";
        }
        else {
            echo "Too many submissions today.";
        }
    } else {
        $_SESSION['count'] = 0;
    }
}

?>
