<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "Babybear1";
    $database = "cop4751";

    $conn = new mysqli($serverName,$username,$password);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Ready to create a database";
    $query = "CREATE DATABASE $database";
    if($conn->query($query) == TRUE){
        echo "Database successfully created";
    }
    else {
        echo "Error creating database";
    }


    $conn->close();
?>