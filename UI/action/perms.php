<?php 
include 'db.php'; 
include 'class.acl.php';
//$userID=$_SESSION['ID'];
session_start();
$userID=$_SESSION['ID'];
$_SESSION['userID'] = 1;


 $userACL = new ACL($userID);
if (isset($_POST['action']))
{
	switch($_POST['action'])
	{
		case 'savePerm':
			$strSQL = sprintf("REPLACE INTO `permissions` SET `ID` = %u, `permName` = '%s', `permKey` = '%s'",$_POST['permID'],$_POST['permName'],$_POST['permKey']);
			mysql_query($strSQL);
		break;
		case 'delPerm':
			$strSQL = sprintf("DELETE FROM `permissions` WHERE `ID` = %u LIMIT 1",$_POST['permID']);
			mysql_query($strSQL);
		break;
	}
	header("location: perms.php");
}


if ($userACL->hasPermission('access_admin') != true  )
{
	
	header("location: ../index.php");
}
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eventer</title>
<link rel="stylesheet" type="text/css" href="../style_login.css" media="screen" />
</head>

<body>

<div id="menu_left">

</div>
<div id="container">
<div id="head">
    <ul id="menu">
    <li><a class="../index.php" title="">Home</a></li>
	<li><a href="../logout.php" title="">Sign Out</a>    </li>
    <li><a href="../eventlistall.php" title="">Events</a></li>
    <li><a href="../grouplistall.php" title="">Groups</a></li>
    <li><a href="../admin.php" title="">Admin</a></li>
    
    </ul>
    
</div>
<div id="area"></div>
    <div id="main">
      <div id="content_left">
      
	<? if ($_GET['action'] == '') { ?>
    	<h2>Select a Permission to Manage:</h2>
        <? 
		$roles = $userACL->getAllPerms('full');
		foreach ($roles as $k => $v)
		{
			echo "<a href=\"?action=perm&permID=" . $v['ID'] . "\">" . $v['Name'] . "</a><br />";
		}
		if (count($roles) < 1)
		{
			echo "No permissions yet.<br />";
		} ?>
        <input type="button" name="New" value="New Permission" onclick="window.location='?action=perm'" />
    <? } 
    if ($_GET['action'] == 'perm') { 
		if ($_GET['permID'] == '') { 
		?>
    	<h2>New Permission:</h2>
        <? } else { ?>
    	<h2>Manage Permission: (<?= $userACL->getPermNameFromID($_GET['permID']); ?>)</h2><? } ?>
        <form action="perms.php" method="post">
        	<label for="permName">Name:</label><input type="text" name="permName" id="permName" value="<?= $userACL->getPermNameFromID($_GET['permID']); ?>" maxlength="30" /><br />
            <label for="permKey">Key:</label><input type="text" name="permKey" id="permKey" value="<?= $userACL->getPermKeyFromID($_GET['permID']); ?>" maxlength="30" /><br />
    	<input type="hidden" name="action" value="savePerm" />
        <input type="hidden" name="permID" value="<?= $_GET['permID']; ?>" />
    	<input type="submit" name="Submit" value="Submit" />
    </form>
    <form action="perms.php" method="post">
         <input type="hidden" name="action" value="delPerm" />
         <input type="hidden" name="permID" value="<?= $_GET['permID']; ?>" />
    	<input type="submit" name="Delete" value="Delete" />
    </form>
    <form action="perms.php" method="post">
    	<input type="submit" name="Cancel" value="Cancel" />
    </form>
    <? } ?>

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