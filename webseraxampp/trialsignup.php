<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Humane:Usersignup</title>
 <link rel="shortcut icon" href="imgs\hands.png">
<link rel="stylesheet" href="css\humane.css">
<link rel="stylesheet" href="css\signupcss.css">
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js\userregister.js"></script>

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

<header style="background-image: url('imgs/dd.png');">

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

<!-- ---------------------------sign up------------------------------------------------- -->
<section class="right">
    <div class="container">
      <div class="user">
        <div class="formBx">
          <form name="myform" method="POST" action="userreg.php"  onsubmit="return matchpass();">
            <h2>Create an account</h2>
            <input type="text" name="name" placeholder="Username" minlength="3" maxlength="20"/>
            
            <input type="password" name="password" placeholder="Create Password" minlength="8" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number."/>
            <input type="password" name="password2" placeholder="Confirm Password" />
            <input type="email" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
            <input type="submit" name="signup" value="Sign Up"/>
            <p class="signup">Already have an account ?
              <a href="userlogin.php">log in.</a>
            </p>
          </form>
        </div>
        <div class="imgBx"> <img src="imgs/dd.png"> </div>
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