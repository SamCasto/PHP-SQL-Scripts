<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "Babybear1";
    $database = "cop4751";

    $conn = new mysqli($serverName,$username,$password,$database);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Ready to add data and get last inserted ID<br>";

    $query = "INSERT INTO test (firstname, lastname, email)
    VALUES('john','doe','jdoe001@fiu.edu')";
    
    if($conn->query($query) == TRUE){
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    }
    else {
        echo "Error adding data";
    }

?>