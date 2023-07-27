<?php



$conn=mysqli_connect("localhost","root","","univercity");


if(!$conn){
  die("Connection failed!");
}

 echo "Database connected!";

?>