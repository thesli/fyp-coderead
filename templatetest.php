<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventer</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="container">
<div id="head">
    <ul id="menu">
    <li><a class="current" href="index.html" title="">Home</a></li>
	<li><a href="" title="">Sign In</a></li>
	<li><a href="" title="">Register</a></li>
    </ul>
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
	   <h1>Please Register Below</h1>
       <form name="form1" method="post" action="register.php">
  <table width="100%" border="0" cellpadding="4" cellspacing="0">
    <tr> 
      <td width="24%" align="left" valign="top">First Name</td>
      <td width="76%"><input name="first name" type="text" id="first name" value="<? echo $first name; ?>"></td>
    </tr>
    <tr> 
      <td align="left" valign="top">Last Name</td>
      <td><input name="last name" type="text" id="last name" value="<? echo $last name; ?>"></td>
    </tr>
    <tr> 
      <td align="left" valign="top">Password</td>
      <td><input name="password" type="text" id="password" value=""></td>
    </tr>
    <tr> 
     <td align="left" valign="top">Re-enter Your Password</td> 
      <td><input name="password" type="text" id="password" value=""></td>
      
    </tr>
    <tr> 
      <td align="left" valign="top">Email Address0</td>
      <td><input name="email address" type="email" id="email address" value="<? echo $email address; ?>"></td>
    </tr>
    <tr> 
      <td align="left" valign="top">Desired Username</td>
      <td><input name="username" type="text" id="username" value="<? echo $username; ?>"></td>
    </tr>
     <tr><td> 
      <p><label>Appointment Date and Time <input type="datetime"
name="dateAndTime"></label></p>
<p><button type="submit">Submit</button></p></
    </tr>
    <tr> 
      <td align="left" valign="top">Information about you:</td>
      <td><textarea name="info" id="info"><? echo $info; ?></textarea></td>
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
