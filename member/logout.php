<?
session_start();
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Members Area</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="container">
<div id="head">
    <ul id="menu">
    <li><a class="current" href="index.html" title="">Home</a></li>
	<li><a href="logout.php" title="">Log Out</a></li>
    </ul>
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
	  <?
	  
if(!isset($_SESSION['first_name'])){
	header( 'Location: http://forfunsonly.comuf.com/member/login_form.html' ) ;
	exit();
}else{
if(isset($_SESSION['first_name'])){
	echo "<center>Are you sure you want to logout?</center><br />";
	echo "<center><a href=logout_yes.php>Yes</a> | <a href=javascript:history.back()>No</a>";
} else {
	session_destroy();
	if(!session_is_registered('first_name')){
		echo "<center><font color=red><strong>You are now logged out!</strong></font></center><br />";
		echo "<center><strong>Login:</strong></center><br />";
		include 'login_form.html';
	}
}
}
?>
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
