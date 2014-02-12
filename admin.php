<?php 

include 'db.php';
include 'action/class.acl.php';

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

$userID=$_SESSION['ID'];
$_SESSION['userID'] = 1;
$myACL = new ACL();
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
      <h1>Welcome to the members area <br>
<? 
	  $userACL = new ACL($userID);
		$aPerms = $userACL->getAllPerms('full');
		foreach ($aPerms as $k => $v)
		{
			echo "<strong>" . $v['Name'] . ": </strong>";
			echo "<img src=\"images/";
			if ($userACL->hasPermission($v['Key']) === true)
			{
				echo "allow.png";
				$pVal = "Allow";
			} else {
				echo "deny.png";
				$pVal = "Deny";
			}
			echo "\" width=\"16\" height=\"16\" alt=\"$pVal\" /><br />";
		}
	  ?> </h1>
<!-- for someone like you might not know you can do something like this

<?php
$xxx = "xxx";
if($bool){ ?>

<h1>the bool is true</h1>

<?php } else { ?>

<h1>the bool is false and $xxx is <?= $xxx ?> </h1>

<?php } ?>

that will do exactly the same thing as you do above,which look a lot nicer,
it worked in for loop while loop foreach and the like.

note1 that <?= $xxx ?> is a short tag for <? echo $xxx ?> you need to set something on php.ini before like PHP4 or something,some server won't support it.
note2 In common MVC framework,templating is avaliable,so you can just use things like #{user.name} or {{user.name}} to represent your variables.
note3 <? ?> is a shorthand for <?php ?>

I covered this technique for the first PHP class for jaspar,It looked like way too advanced for you though.
-->
      </div>
      
      <div id="content_right">
      <li><a href="/action/perms.php" title="">Manage permissions</a></li><br>
 <li><a href="/action/roles.php" title="">Manage roles</a></li><br>
 <li><a href="/action/users.php" title="">Manage users</a></li>
     
      </div>
	<div class="spacer"></div>
	</div>
<div id="footer"></div> 
</div>
</body>
</html>


