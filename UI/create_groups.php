<?php 

include 'db.php';
// Initialize a session:
session_start();
if(!isset($_SESSION['first_name'])){
	header("Location: login.php");
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
<title>Eventer</title>
<link rel="stylesheet" type="text/css" href="style_login.css" media="screen" />
</head>

<body>

<div id="menu_left">
<h1>hi</h1>
</div>
<div id="container">
<div id="head">
    <ul id="menu">
    <li><a class="current" href="index.html" title="">Home</a></li>
	<li><a href="logout.php" title="">Sign Out</a>    </li>
    <li><a href="eventlistall.php" title="">Events</a></li>
    <li><a href="grouplistall.php" title="">Groups</a></li>
    <li><a href="admin.php" title="">Admin</a></li>
    
    </ul>
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
      <form action="create_groups_check.php" method="post" >
  <table width="50%" border="0" align="center" cellpadding="4" cellspacing="0">
    <tr> 
      <td class="table1" >Group Name</td>
      <td width="78%"><input class="form1" name="groupname" type="text" id="groupname" required></td>
    </tr>
    <tr> 
      <td class="table1">Private Group</td>
      <td><input class="form1" name="private" type="radio" id="private_y" value="y" required><label for="private_y">Yes</label>  <input class="form1" name="private" type="radio" id="private_n" value="n" required><label for="private_n">No</label></td>
     
    </tr>
    <tr>
    <td class="table1">Group Size</td>
    <td><input calss="form1" name="size" ud="size" required></td></tr>
    <tr> 
      <td></td>
      <div class="spacer"></div>
      <td><input type="submit" name="submit" id="submit"><input type="button" name="cancel" value="Cancel"
onclick="window.location='grouplistall.php'" /></td>
      
    </tr>
  </table>
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


