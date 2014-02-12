<?
include 'db.php';
session_start();
if(isset($_SESSION['first_name'])){
	header("Location: login_success.php");
	exit();
}



?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Eventer</title>
<link rel="stylesheet" type="text/css" href="forgetpassword.css" media="screen" />
</head>

<body>


<div id="container">
<div id="head">
    <ul id="menu">
    <li><a class="current" href="index.html" title="">Home</a></li>
	<li><a href="login.php" title="">Sign In</a></li>
	<li><a href="register.php" title="">Register</a></li>
    <li><a href="eventlistall.php" title="">Events</a></li>
    <li><a href="grouplistall.php" title="">Groups</a></li>
    
    </ul>
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
      
       <p font-size=30px;>Password retrival</p>
       <form class="reg_form" name="reg_form" id="reg_form" method="post" action="getpassword.php">
       
      <p class="reg_form_element">  
      <input type="email" name="emailaddress" id="emailaddress"  required="required" title="Enter your email address"><label for="emailaddress"></label>
      
       <input type="submit" name="submit" id="submit" value="Send password to the email">
       
      
      </p>
      
      
      </form>
      
      </div>
      
      <div id="content_right">
      
      </div>
	<div class="spacer"></div>
	</div>
<div id="footer"></div> 
</div>
</body>
</html>