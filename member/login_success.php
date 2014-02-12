<?php 

include 'db.php';
// Initialize a session:
session_start();
if(!isset($_SESSION['first_name'])){
	header( 'Location: http://forfunsonly.comuf.com/member/login_form.html' ) ;
	exit();
}
/*$sql = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password' AND activated='1'");
$userfound = mysql_num_rows($sql);
if($userfound > 0){
	
	$result = mysql_fetch_array($sql) or die(mysql_error());
if ($_SESSION['session_id'] != $result['session_id']){
	header( 'Location: http://forfunsonly.comuf.com/member/login_form.html' ) ;
	exit();

}}*/

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Members Area</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="container">
<div id="head">
    <ul id="menu">
    <li><a class="current" href="index.html" title="">Home</a></li>
	<li><a href="logout.php" title="">Sign Out</a>    </li>
    </ul>
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
      <h1>Welcome to the members area</h1>
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


