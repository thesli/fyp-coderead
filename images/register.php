<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventer</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<script src="js/main.js" type="text/javascript"></script>
<script src="js/check.js" type="text/javascript"></script>
<script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 4){$("#user-result").html('');return;}
		
		if(username.length >= 4){
			$("#user-result").html('<img src="images/ajax-loader.gif" />');
			$.post('check_username.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
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
       <form name="reg_form" method="post" action="register_check.php">
       <legend>General Info</legend>
       <table width="100%" border="2" cellpadding="4" cellspacing="0">
    <tr> 
      <td width="22%" align="left" valign="top">First Name</td>
      <td width="42%"><input name="first_name" type="text" id="first_name" placeholder="Tai Man" required="required" title="Enter Your First Name"></td>
    </tr>
    <tr> 
      <td align="left" valign="top">Last Name</td>
      <td><input name="last_name" type="text" id="last_name" placeholder="Chan" required="required" title="Enter Your Last Name"></td>
    </tr>
    <tr> 
      <td align="left" valign="top">Desired Username</td>
      <td><input name="username" type="text" id="username"  required="required" title="Enter Your Username" 
      onfocus="check_username(this);" 
      oninput="check_username(this);">
      </td>  
      <td width="36%" id="user-result"></td>
    </tr>
    <tr> 
      <td align="left" valign="top">Password</td>
      <td><input type="password" id="password" autocomplete="off" required="required" title="Set Your Password"></td>
    </tr>
    <tr> 
     <td align="left" valign="top">Re-enter Your Password</td> 
      <td><input type="password" id="cpassword" autocomplete="off" required="required" title="Re-enter Your Password"
      onfocus="validatePass(document.getElementById('password'), this);" 
      oninput="validatePass(document.getElementById('password'), this);">
      </td>
      	
    </tr>
    <tr> 
      <td align="left" valign="top">Email Address</td>
      <td><input name="email_address" type="email" id="email_address" placeholder="user@example.com" required="required" title="Enter Your Email Address" ></td>
      <td><div id="emailInfo" align="left"></div></td>
    </tr>
    
    </table>
   
    <legend>Personal Information</legend>
    <table width="100%" border="2" cellpadding="4" cellspacing="0">
    <tr> 
      <td width="24%" align="left" valign="top">Information about you:</td>
      <td width="76%"><textarea name="info" id="info"></textarea></td>
    </tr>
    
    <tr> 
      <td align="left" valign="top">Date of Birth</td>
      <td><input name="dob" type="date" id="dob"  required="required"
      title="Choose your Date of Birth"></td>
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


