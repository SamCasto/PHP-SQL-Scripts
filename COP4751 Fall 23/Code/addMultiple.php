<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "Babybear1";
    $database = "cop4751";

    $conn = new mysqli($serverName,$username,$password,$database);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Ready to add multiple data sets<br>";

    $query = "INSERT INTO test (firstname, lastname, email)
    VALUES('Sam','Casto','scast305@fiu.edu');";
    $query .= "INSERT INTO test(firstname,lastname, email)
    VALUES('Jane','Doe','test002@fiu.edu');";
    $query .= "INSERT INTO test(firstname,lastname, email)
    VALUES('Bob','Scott','test003@fiu.edu')";


    if(mysqli_multi_query($conn,$query)){
        echo "All data added successfully";
    }
    else {
        echo "Error adding data";
    }

?>