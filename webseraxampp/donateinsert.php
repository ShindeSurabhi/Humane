<?php
echo "string";
$connect = mysqli_connect("localhost", "root", "","humane");
echo "string";
if(isset($_POST["name"],$_POST["email"],$_POST["address"],$_POST["city"],$_POST["state"],$_POST["zipcode"],$_POST["item"],$_POST["pickup"],$_POST["find"],$_POST["interest"]))
{echo "string";
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $address = mysqli_real_escape_string($connect, $_POST["address"]);
 $city = mysqli_real_escape_string($connect, $_POST["city"]);
 $state = mysqli_real_escape_string($connect, $_POST["state"]);
 $zipcode = mysqli_real_escape_string($connect, $_POST["zipcode"]);
 $item = mysqli_real_escape_string($connect, $_POST["item"]);
 $pickup = mysqli_real_escape_string($connect, $_POST["pickup"]);
 $find = mysqli_real_escape_string($connect, $_POST["find"]);
 $interest = mysqli_real_escape_string($connect, $_POST["interest"]);

 $query = "INSERT INTO donate(name,email,address,city,state,zipcode,item,pickup,find,interest) VALUES('$name','$email','$address','$city','$state','$zipcode','$item','$pickup','$find','$interest')";
 if(mysqli_query($connect, $query))
 {
  header("location:thankyou.html");
 }
}
?>

