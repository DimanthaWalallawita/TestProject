<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "testproject";

    $connection = mysqli_connect($host, $username, $password, $db);

    if($connection->connect_error){
        die("Connection Error :".$connection->connect_error);
    }
?>