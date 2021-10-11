<?php
$connect = mysqli_connect("localhost", "root", "","humane");
if(isset($_POST["name"],$_POST["email"],$_POST["password"]))
{
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $password = mysqli_real_escape_string($connect, $_POST["password"]);
 

 $query = "INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";
 if(mysqli_query($connect, $query))
 {
  header("location:thankyou.html");
 }
}
?>