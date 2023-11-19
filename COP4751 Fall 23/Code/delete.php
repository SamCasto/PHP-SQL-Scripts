<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "Babybear1";
    $database = "cop4751";

    $conn = new mysqli($serverName,$username,$password,$database);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Ready to delete data WHERE id=3<br>";

    $query = "DELETE FROM test WHERE id=3";
    
    if($conn->query($query) == TRUE){
        echo "Data deleted successfully";
    }
    else {
        echo "Error adding data";
    }

?>