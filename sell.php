<?php




$severname="localhost";
$username="root";
$password="";
$database="phpdb2";

$conn=new mysqli($severname,$username,$password,$database);
if($conn->connect_error)
{
    die("Connection Error");
}

$title=$_POST['title'];
$desc=$_POST['description'];
$location=$_POST['location'];
$price=$_POST['price'];



    $query="INSERT INTO `products`(`title`, `description`, `price`, `location`) VALUES ('$title','$desc','$location','$price')";
    $result=mysqli_query($conn,$query);
   if($result)
   {

    header("location: index.html");

   }
   else
   {
    die("error in uploading contact Technical Team");
   }


?>