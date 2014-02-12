<?
/* Account activation script */
session_start();  // Start Session
// Get database connection
include 'db.php';

// Create variables from URL.

$useremail = $_REQUEST['email'];
$ID = $_REQUEST['validID'];

$_SESSION['S_email_address']=$useremail;

$_SESSION['S_validationID']=$ID;



/*$sql = mysql_query("SELECT * from users WHERE email_address='$useremail' AND pwretrID='$validationID'");

/*$sql_doublecheck = mysql_query("SELECT * FROM users WHERE userid='$userid' AND password='$code' AND activated='1'");
$doublecheck = mysql_num_rows($sql_doublecheck);


if($sql ==0){
	echo " Authentication is required to access this page.";
	echo "\r\n";
	$url = "http://forfunsonly.comuf.com/";
	header('Refresh: 3; url="'.$url.'"'); 
}
*/
?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Eventer</title>
<link rel="stylesheet" type="text/css" href="stylereg.css" media="screen" />
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
      
      
      <? //  echo "Our color value is ".$_SESSION['S_email_address']; 
//echo "HI".$_SESSION['S_validationID']; ?>
      
      <form class="reg_form" method="post" action="userpwchange.php">
      <p class="reg_form_element">  
      <label for="newpassword">Type in your new password</label>
      <div id="spacer"></div>
      <input type="text" name="newpassword" id="newpassword" required="required" >
      </p>
      
      <p class="reg_form_element">  
      <label for="newpasswordc">Confirm your new password</label>
      <div id="spacer"></div>
      <input type="text" name="newpasswordc" id="newpasswordc" required="required" >
      </p>
      
      <p class="submit">
     <div id="spacer"></div>
   <input type="submit" name="submit" id="submit" value="Submit">
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
