<?
session_start();
if(isset($_SESSION['first_name'])){
	header( 'Location: http://forfunsonly.comuf.com/member/login_success.php' ) ;
	exit();
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>1stoptutorials Members Area</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="container">
<div id="head">
    <ul id="menu">
    <li><a class="current" href="index.html" title="">Home</a></li>
	<li><a href="login.php" title="">Sign In</a></li>
	<li><a href="join.php" title="">Register</a></li>
    </ul>
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
      <h1>Please Login Below</h1>
	  <form action="checkuser.php" method="post" name="" id="">
  <table width="50%" border="0" align="center" cellpadding="4" cellspacing="0">
    <tr> 
      <td width="22%">Username</td>
      <td width="78%"><input name="username" type="text" id="username"></td>
    </tr>
    <tr> 
      <td>Password</td>
      <td><input name="password" type="password" id="password"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
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
