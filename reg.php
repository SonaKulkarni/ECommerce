<?php
$con=mysqli_connect("localhost:3306", "root", "","db");
$p = $_POST['username'];
$q = $_POST['email'];
$r = $_POST['address'];
$s = $_POST['contact no'];
$sql="INSERT INTO register values('$p','$q','$r','$s')";
if(mysqli_query($con,$sql))
{
echo "welcome! you are registered successfully";
}
else
{
echo $p;
}
?>