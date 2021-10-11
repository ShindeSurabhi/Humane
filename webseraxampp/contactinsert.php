<?php
$connect = mysqli_connect("localhost", "root", "", "humane");
if(isset($_POST["name"], $_POST["company"],$_POST["email"],$_POST["phone"],$_POST["message"]))
{
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 $company = mysqli_real_escape_string($connect, $_POST["company"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $phone = mysqli_real_escape_string($connect, $_POST["phone"]);
 $message = mysqli_real_escape_string($connect, $_POST["message"]);
 $query = "INSERT INTO contact(name,company,email,phone,message) VALUES('$name', '$company','$email','$phone','$message')";
 if(mysqli_query($connect, $query))
 { header("location:thankucontact.html");
  echo '<script>alert("Thank you for contacting us!!")</script>';

 }
}
?>