<?
session_start();
if(isset($_SESSION['first_name'])){
	header("Location: login_success.php");
}
?>
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
	<li><a href="login.php" title="">Sign In</a></li>
	<li><a href="register.php" title="">Register</a></li>
    <li><a href="eventlistall.php" title="">Events</a></li>
    <li><a href="grouplistall.php" title="">Groups</a></li>
    </ul>
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
      
	   <h1>Please Login Below</h1>
	  <form action="checkuser.php" method="post" >
  <table width="50%" border="0" align="center" cellpadding="4" cellspacing="0">
    <tr> 
      <td class="table1" >Username</td>
      <td width="78%"><input class="form1" name="username" type="text" id="username" required></td>
    </tr>
    <tr> 
      <td class="table1">Password</td>
      <td><input class="form1" name="password" type="password" id="password" required></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <div class="spacer"></div>
      <td><input type="submit" name="submit" id="submit"></td>
    </tr>
  </table>
</form>

<h5> The username or password entered is wrong. Please try again.</h5>
	  </div>
      <div id="content_right">
      
      </div>
	<div class="spacer"></div>
	</div>
<div id="footer"></div> 
</div>
</body>
</html>
