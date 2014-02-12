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
    <li><a class="current" href="index.php" title="">Home</a></li>
	<li><a href="login.php" title="">Sign In</a></li>
	<li><a href="register.php" title="">Register</a></li>
    </ul>
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
	   <h1>Please Register Below</h1>
       <form class="reg_form" name="reg_form" id="reg_form" method="post" action="register_check.php">
       <legend>General Info</legend>
       
      <p class="reg_form_element">  
      <label for="FirstName">First Name</label>
      <div id="spacer"></div>
      <input type="text" name="FirstName" id="FirstName" placeholder="Tai Man" required="required" title="Enter your first name">
    
      
      </p>
     
 	  <p class="reg_form_element">
      <label for="LastName">Last Name</label>   
      <div id="spacer"></div>        
 	  <input type="text" name="LastName" id="LastName" placeholder="Chan" required="required" title="Enter your last name">
      </p>
      
      <p class="reg_form_element">
      <label for="username">Desired Username</label>   
     <div id="spacer"></div>         
 	  <input type="text" name="username" id="username"  autocomplete="off" required="required" title="Enter Your Username">
      </p>
      
      <p class="reg_form_element">
      <label for="password">Password</label>     
      <div id="spacer"></div>     
 	  <input type="password" name = "password" id="password" autocomplete="off" required="required" title="Set your password">
      </p>
      
      <p class="reg_form_element">
      <label for="cpassword">Confirm Password</label>     
       <div id="spacer"></div>      
 	  <input type="password" name = "cpassword" id="cpassword" autocomplete="off" required="required" title="Re-enter your password" 
      onfocus="validatePass(document.getElementById('password'), this);" 
      oninput="validatePass(document.getElementById('password'), this);">
      </p>
      
      <p class="reg_form_element">
      <label for="EmailAddress">Email Address</label> 
            <div id="spacer"></div>   
 	  <input name="EmailAddress" type="email"id="EmailAddress" placeholder="user@example.com" required="required" title="Enter your email address" >
      </p>
     
	  <p><div id="emailInfo" align="left"></div></p>
  
    
    
   
    <legend>Personal Information</legend>
    
    <p class="reg_form_element">
      <label for="info">Information about you:</label>         
      <div id="spacer"></div>
 	  <textarea cols="30" rows="8" name="info" id="info"></textarea>
      </p>
    
   <p class="reg_form_element">
      <label for="dob">Date of Birth</label>    
           <div id="spacer"></div>
 	  <input name="dob" type="date" id="dob"  required="required"
      title="Choose your date of birth">
      </p>
    
   <p class="submit">
     <div id="spacer"></div>
   <input type="submit" name="submit" id="submit" value="Join Now!">
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


