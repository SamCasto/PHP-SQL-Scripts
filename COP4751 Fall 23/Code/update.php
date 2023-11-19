<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "Babybear1";
    $database = "cop4751";

    $conn = new mysqli($serverName,$username,$password,$database);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Ready to update data WHERE id=2<br>";

    $query = "UPDATE test SET lastname='Updated' WHERE id=2";
    
    if($conn->query($query) == TRUE){
        echo "Data updated successfully";
    }
    else {
        echo "Error adding data";
    }

?>