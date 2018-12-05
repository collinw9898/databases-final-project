<?php

$servername = "localhost";  // Local server: "localhost:3306". CS server: "localhost"
$username = "root";
$password = "";
$dbname = "university";

// Connect to db
$conn = new mysqli($servername, $username, $password, $dbname);
         
if(!$conn){
    die('Could not connect: ' . mysqli_error($conn));
}

?>