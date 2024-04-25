<?php
$name= $_POST['name'];
$email= $_POST['email'];
$message=$_POST['message'];
// echo 'name is '.$name."<br>";
// echo 'email is '.$email."<br>";
//  echo "message is".$message."<br>";




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

if(($name != '') && ($email !='') && ($message != '') ){
    $sql = "INSERT INTO customer(username,email,message) VALUES ( '". $name."' , '".$email. "' ,'". $message."')";
    $sql1 = "update new_table set submit_btn = submit_btn + 1 where id =1";
    if ($conn->query($sql) == TRUE) {
        echo "New record created successfully";
        if($conn->query($sql1)== TRUE ){
        echo "update is successfully";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        
    }
    
}
else{
    echo "Data is empty";
}




?> 