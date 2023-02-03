<?php
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
// database connection
$conn = new mysqli('localhost','root','','db');
if($conn->connect_error){
    die('connection failed' .$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into info(username, email) values(?, ?)");
    $stmt->bind_param("sssss",$username, $email);
    $stmt->execute();
    echo "successfully";
    $stmt->close();
    $conn->close();
}


?>