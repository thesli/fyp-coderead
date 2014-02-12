<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventer</title>
<link rel="stylesheet" type="text/css" href="stylereg.css" media="screen" />
<script src="js/main.js" type="text/javascript"></script>
<script src="js/check.js" type="text/javascript"></script>
<script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){
$("#username").keyup(function() {
var name = $('#username').val();

$.ajax({
type: "POST",
url: "check_username.php",
data: "name="+ name ,
success: function(response){
//$("#user-result").html(html);
check_username(document.getElementById('username'),response);
}
});
return false;

});
});

</script>

<script type="text/javascript">
$(document).ready(function(){
$("#EmailAddress").keyup(function() {
var email = $('#EmailAddress').val();

$.ajax({
type: "POST",
url: "check_email.php",
data: "email="+ email ,
success: function(response){
//$("#user-result").html(html);
check_email(document.getElementById('EmailAddress'),response);
}
});
return false;

});
});
</script>

</head>



<body>

<div id="container">
<div id="head">
    <ul id="menu">
    <li><a class="current" href="index.html" title="">Home</a></li>
	<li><a href="login.php" title="">Sign In</a></li>
	<li><a href="register.php" title="">Register</a></li>
    </ul>
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
	   <h1>Please Register Below</h1>
       <form name="reg_form" id="reg_form" method="post" action="register_check.php">
       <legend>General Info</legend>
       <table width="100%" border="2" cellpadding="4" cellspacing="0">
    <tr> 
      <td width="22%" align="left" valign="top">First Name</td>
      <td width="41%"><input name="FirstName" type="text" id="FirstName" placeholder="Tai Man" required="required" title="Enter your first name"></td>
    </tr>
    <tr> 
      <td align="left" valign="top">Last Name</td>
      <td><input name="LastName" type="text" id="LastName" placeholder="Chan" required="required" title="Enter your last name"></td>
    </tr>
    <tr> 
      <td align="left" valign="top">Desired Username</td>
      <td><input name="username" type="text" id="username"  autocomplete="off" required="required" title="Enter Your Username" 
      >
      </td>  
      <td width="37%" id="user-result"></td>
    </tr>
    <tr> 
      <td align="left" valign="top">Password</td>
      <td><input type="password" name = "password" id="password" autocomplete="off" required="required" title="Set your password"></td>
    </tr>
    <tr> 
     <td align="left" valign="top">Re-enter Your Password</td> 
      <td><input type="password" name = "password" id="cpassword" autocomplete="off" required="required" title="Re-enter your password"
      onfocus="validatePass(document.getElementById('password'), this);" 
      oninput="validatePass(document.getElementById('password'), this);">
      </td>
      	
    </tr>
    <tr> 
      <td align="left" valign="top">Email Address</td>
      <td><input name="EmailAddress" type="email" id="EmailAddress" placeholder="user@example.com" required="required" title="Enter your email address" ></td>
      <td><div id="emailInfo" align="left"></div></td>
    </tr>
    
    </table>
   
    <legend>Personal Information</legend>
    <table width="100%" border="2" cellpadding="4" cellspacing="0">
    <tr> 
      <td width="22%" align="left" valign="top">Information about you:</td>
      <td width="78%"><textarea cols="30" rows="8" name="info" id="info"></textarea></td>
    </tr>
    
    <tr> 
      <td align="left" valign="top">Date of Birth</td>
      <td><input name="dob" type="date" id="dob"  required="required"
      title="Choose your date of birth"></td>
    </tr>
     
  
    <tr> 
      <td align="left" valign="top">&nbsp;</td>
      <td><input type="submit" name="Submit" value="Join Now!"></td>
    </tr>
    
  </table>
  
  
 
</form>



	  </div>
      <div id="content_right">
      <h4>Latest Work</h4>
      <div class="item_box">
      <img src="images/t1.jpg" width="200" height="70" border="0" alt="Dragon" title="Dragon" /><br />
      <strong>Dragon</strong> </div>
      <div class="item_box">
      <img src="images/t2.jpg" width="200" height="70" border="0" alt="Bricks" title="Bricks" /><br />
      <strong>Bricks </strong></div>
      </div>
	<div class="spacer"></div>
	</div>
<div id="footer"></div> 
</div>
</body>
</html>


