<?php

$server   = "localhost";
$username = "michae63_game";
$password = "w8Sq3!8GCl;uG4";
$database = "michae63_videogamedatabase";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    echo "Error: Unable to connect to database. ";
    echo "Debugging errno: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}

?>
