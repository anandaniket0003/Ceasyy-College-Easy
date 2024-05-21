<?php


$email=$_POST['email'];

$severname="localhost";
$username="root";
$password="";
$database="phpdb2";

$conn=new mysqli($severname,$username,$password,$database);
if($conn->connect_error)
{
    die("Connection Error");
}




    $query="INSERT INTO `user`(`Email`, `password`, `name`, `location`) VALUES ('$email','','','');";
    $result=mysqli_query($conn,$query);
   if($result)
   {
    header("location: index.html");
   }
   else
   {
    header("Location: index.html");
   }


?>