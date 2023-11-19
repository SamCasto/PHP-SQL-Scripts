<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "Babybear1";
    $database = "cop4751";

    $conn = new mysqli($serverName,$username,$password,$database);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Ready to use prepared statements to data<br>";

    $statement = $conn->prepare("INSERT INTO test (firstname,lastname,email) VALUES (?,?,?)");
    $statement->bind_param("sss",$firstname,$lastname,$email);

    $firstname = "Bill";
    $lastname = "Bob";
    $email = "test004@fiu.edu";
    $statement->execute();
    
    $firstname = "Bob";
    $lastname = "Bill";
    $email = "test005@fiu.edu";
    $statement->execute();
    
    $firstname = "Jill";
    $lastname = "Bob";
    $email = "test005@fiu.edu";
    $statement->execute();

    echo "Prepared statements used to add new data successfully<br>";

    $statement->close();
    $conn->close();
?>