<?php
$connection = mysqli_connect("localhost", "root", "", "/*CREATE A DATABASE FOR THIS PROJECT*/");

if (!$connection) {
    echo("Connection failed: " . mysqli_connect_error());
}
?>