<?
session_start();
if(isset($_SESSION['first_name'])){
	header("Location: login_success.php");
// the logic here is wired,why provided first_name exist and then redirect to login_success? using before_filters and similar things in PHP framework such as llarvel to handle the problem
	exit();
}
?>
<!-- this is not a standard way of using HTML5, prefer <!doctype html>,visit https://github.com/h5bp/html5-boilerplate/blob/master/index.html for a standard html5 boilerplate -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forfunsonly</title>  
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="container">
<div id="head">
    <ul id="menu">
    <li><a class="current" href="index.php" title="">Home</a></li>
	<li><a href="login.php" title="">Sign In</a></li>
	<li><a href="register.php" title="">Register</a></li>
    <li><a href="eventlistall.php" title="">Events</a></li>
    <li><a href="grouplistall.php" title="">Groups</a></li>
    </ul>
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
	 <h1>Welcome to Forfunsonly.</h1>
	  </div>
      <div id="content_right">
      <h4>Latest Work</h4>
      <div class="item_box">
      <img src="images/t1.jpg" width="200" height="70" border="0" alt="Dragon" title="Dragon" /><br />
<!-- inline css property is strongly discouraged as it is against the D.R.Y rulehere you repeated the same width,height multiple time,use class instead. -->
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
