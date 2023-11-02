<?php
include('db.php');
include('functions.php');

if (isset($_POST['add'])) {
    $task = $_POST['task'];
    //CREATE A FUNCTION ADD TASK IN FUNCTIONS AND CALL IT OUT HERE($connection, $task);
}

$tasks = /*CREATE FUNCTION GET TASKS*/($conn);
    while ($row = mysqli_fetch_assoc($tasks)) {
        echo "<li>" . $row['task'] . " <a href='index.php?del=" . $row['id'] . "'>Delete</a></li>";
    }

if (isset($_GET['del'])) {
        $id = $_GET['del'];
    /*create function delete task*/($conn, $id);
}
?>
