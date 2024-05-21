<?php


$email=$_POST['email'];
$pass=$_POST['password'];
$name=$_POST['name'];
$location=$_POST['location'];


$severname="localhost";
$username="root";
$password="";
$database="phpdb2";

$conn=new mysqli($severname,$username,$password,$database);
if($conn->connect_error)
{
    die("Connection Error");
}




    $query="INSERT INTO `user`(`Email`, `password`, `name`, `location`) VALUES ('$email','$pass','$name','$location');";
    $result=mysqli_query($conn,$query);
   if($result)
   {
    header("location: payment.php");
   }
   else
   {
    header("Location: index.html");
   }


?>