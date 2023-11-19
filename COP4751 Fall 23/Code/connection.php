<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "Babybear1";
    $database = "cop4751";

    $conn = new mysqli($serverName,$username,$password);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected to server";

?>