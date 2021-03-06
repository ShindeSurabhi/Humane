<?php
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];

if (!empty($name) || !empty($password) || !empty($email) ) {
    $host = "localhost";
    $dbuser = "root";
    $dbPassword = "";
    $dbname = "humane";
    //create connection
    $conn = new mysqli($host, $dbuser, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT name From admin Where name = ? Limit 1";
     $INSERT = "INSERT Into admin (name,email,password) values(?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $name);
     $stmt->execute();
     $stmt->bind_result($name);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $name, $email,$password);
      $stmt->execute();
      echo "New record inserted sucessfully";
       header("location:adminhomepage.html");
     } else {
      echo"Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>