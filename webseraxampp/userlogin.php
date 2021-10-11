<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Humane:Userlogin</title>
 <link rel="shortcut icon" href="imgs\hands.png">
<link rel="stylesheet" href="css\humane.css">
<link rel="stylesheet" href="css\signupcss.css">
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js\userlogin.js"></script>

<style type="text/css">
    .fa {
  padding: 7px;
  font-size: 30px;
  width: 30px;
  text-align: left;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-instagram {
  background: #C13584;
  color: white;
}
</style>

</head>


<body background="imgs\bg.png" >

<header>

  <h1 style="display:flex; font-size:300%;text-align:center;justify-content: center;">HUMANE:DONATE AT DOORSTEP</h1>

  <div>
  <nav><a href="userlogin.php" id="active"><i class="fas fa-user-circle"style="color: #ffffff;"></i></a></nav>
  </div>

  <div class="menu">
  <nav>
    <a href="Humanehomepage.html" >HOME</a>
    <a href="get.html">GET INVOLVED</a>
    <a href="aboutuspage.html">ABOUT US</a>
    <a href="contactus.html">CONTACT US</a>
    <a href="donatepage.html">DONATE</a>
  </nav>
  </div>
</header>

<main>

<!-- ---------------------------sign up/login--------------------------------------------------- -->
<section class="right">
    <div class="container">
      <div class="user">
        <div class="imgBx"><img src="imgs/dd.png"></div>
        <div class="formBx">
          <form name="myform" method="post" onsubmit="return validateform();">
            <?php
    $host = "localhost";
    $dbuser = "root";
    $dbPassword = "";
    $dbname = "humane";


// Create connection
$conn = new mysqli($host, $dbuser, $dbPassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$loginerror="";
$error="";
$name=(isset($_POST['name']) ? $_POST['name'] : null );
$email=(isset($_POST['email']) ? $_POST['email'] : null );
$password=(isset($_POST['password']) ? $_POST['password'] : null );
if(isset($_POST['submit'])){
      if(!empty($name) || !empty($password) || !empty($email)) { 
          $select = "SELECT * FROM user WHERE name='$name' and email='$email' and password='$password'"; 
          $result = mysqli_query($conn, $select);
          if (mysqli_num_rows($result) > 0) {

              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
      
                  session_start();
                   header("location:Humanehomepage.html");

              }       
          }
          else  $loginerror="Invalid Input";           
      }
      else  $error="Input values";            
  }             // mysqli_close($conn); 

$conn->close();
?>
            <h2>User Login</h2>
            <input type="text" name="name" placeholder="Username" minlength="3" maxlength="20"/>
            <input type="email" name="email" id="email"placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
            <input type="password" name="password" placeholder="Password" minlength="8" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." />
            <input type="submit" name="submit" value="Login" />
              <?php echo $loginerror ?>
              <?php echo $error ?>
            <p class="signup"> Don't have an account ?
              <a href="trialsignup.php">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>

     <footer style="position:fixed;">
  <p style="text-align: center;"><b>Email us at </b><a style="text-decoration:none; color: black;" href="#"><b>Help@humane.org | Contact us at 1800 4500 9888</b></a></p>
<div style="text-align: center;">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
<p style="text-align: center;"><b>Copyright &copy; | Terms Of Use | Privacy Policy</b></p>
</div>
</footer>



  <!-- -------------------------------------------------------------------------------------- -->
</main>

</body>

</html>
