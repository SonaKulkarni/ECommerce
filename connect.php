<?php
$servername= "localhost";
$username = "root";
$password= "";
// connection with mysql

$conn = mysqli_connect($servername, $username, $password);
// checking connection
if(!$conn){
  die("connection failed" .mysqli_connect_error());
}
echo "connected successfully";
?>

<?php
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];

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