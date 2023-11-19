<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "Babybear1";
    $database = "cop4751";

    $conn = new mysqli($serverName,$username,$password,$database);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Ready to add data<br>";

    $query = "INSERT INTO test (firstname, lastname, email)
    VALUES('Sam','Casto','scast305@fiu.edu')";
    
    if($conn->query($query) == TRUE){
        echo "Data added successfully";
    }
    else {
        echo "Error adding data";
    }

?>