<?php

$servername = "localhost";
$username = "root";
$password="admin";
$database="form_db";

// // Create connection
$conn = new mysqli($servername, $username, $password, $database);

// // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  

$sql = "update new_table set knowmore = knowmore + 1 where id =1";
   
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



?> 