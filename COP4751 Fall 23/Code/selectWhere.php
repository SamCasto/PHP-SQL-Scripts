<?php 
    $serverName = "localhost";
    $username = "root";
    $password = "Babybear1";
    $database = "cop4751";

    $conn = new mysqli($serverName,$username,$password,$database);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Ready to select data with WHERE lastname='Casto'<br>";

    $query = "SELECT id, firstname, lastname FROM test WHERE lastname='Casto'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
      } else {
        echo "0 results";
      }

    $conn->close();

?>