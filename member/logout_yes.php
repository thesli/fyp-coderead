<?
session_start();
if(!isset($_SESSION['first_name'])){
	header( 'Location: http://forfunsonly.comuf.com/member/login_form.html' ) ;
	exit();
}else {
session_destroy();
	if(!session_is_registered('first_name')){
		echo "<center><font color=red><strong>You are now logged out!</strong></font></center><br />";
		echo "<center><strong>Login:</strong></center><br />";
		include 'login_form.html';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<li><a href="login_form.html" title="">Sign In</a></li>
	<li><a href="join.php" title="">Register</a></li>
    </ul>
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
	  <h1>You are logged out.</h1>
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
