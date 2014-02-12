<?php 
include 'db.php'; 
include 'class.acl.php';
session_start();
$userID=$_SESSION['ID'];
$_SESSION['userID'] = 1;


 $userACL = new ACL($userID);
if (isset($_POST['action']))
{
	switch($_POST['action'])
	{
		case 'saveRole':
			$strSQL = sprintf("REPLACE INTO `roles` SET `ID` = %u, `roleName` = '%s'",$_POST['roleID'],$_POST['roleName']);
			mysql_query($strSQL);
			if (mysql_affected_rows() > 1)
			{
				$roleID = $_POST['roleID'];
			} else {
				$roleID = mysql_insert_id();
			}
			foreach ($_POST as $k => $v)
			{
				if (substr($k,0,5) == "perm_")
				{
					$permID = str_replace("perm_","",$k);
					if ($v == 'X')
					{
						$strSQL = sprintf("DELETE FROM `role_perms` WHERE `roleID` = %u AND `permID` = %u",$roleID,$permID);
						mysql_query($strSQL);
						continue;
					}
					$strSQL = sprintf("REPLACE INTO `role_perms` SET `roleID` = %u, `permID` = %u, `value` = %u, `addDate` = '%s'",$roleID,$permID,$v,date ("Y-m-d H:i:s"));
					mysql_query($strSQL);
				}
			}
			header("location: roles.php");
		break;
		case 'delRole':
			$strSQL = sprintf("DELETE FROM `roles` WHERE `ID` = %u LIMIT 1",$_POST['roleID']);
			mysql_query($strSQL);
			$strSQL = sprintf("DELETE FROM `user_roles` WHERE `roleID` = %u",$_POST['roleID']);
			mysql_query($strSQL);
			$strSQL = sprintf("DELETE FROM `role_perms` WHERE `roleID` = %u",$_POST['roleID']);
			mysql_query($strSQL);
			header("location: roles.php");
		break;
	}
}
if ($userACL->hasPermission('access_admin') != true)
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
    	<h2>Select a Role to Manage:</h2>
        <? 
		$roles = $userACL->getAllRoles('full');
		foreach ($roles as $k => $v)
		{
			echo "<a href=\"?action=role&roleID=" . $v['ID'] . "\">" . $v['Name'] . "</a><br />";
		}
		if (count($roles) < 1)
		{
			echo "No roles yet.<br />";
		} ?>
        <input type="button" name="New" value="New Role" onclick="window.location='?action=role'" />
    <? } 
    if ($_GET['action'] == 'role') { 
		if ($_GET['roleID'] == '') { 
		?>
    	<h2>New Role:</h2>
        <? } else { ?>
    	<h2>Manage Role: (<?= $userACL->getRoleNameFromID($_GET['roleID']); ?>)</h2><? } ?>
        <form action="../action/roles.php" method="post">
        	<label for="roleName">Name:</label><input type="text" name="roleName" id="roleName" value="<?= $userACL->getRoleNameFromID($_GET['roleID']); ?>" />
            <table border="0" cellpadding="5" cellspacing="0">
            <tr><th></th><th>Allow</th><th>Deny</th><th>Ignore</th></tr>
            <? 
            $rPerms = $userACL->getRolePerms($_GET['roleID']);
            $aPerms = $userACL->getAllPerms('full');
            foreach ($aPerms as $k => $v)
            {
                echo "<tr><td><label>" . $v['Name'] . "</label></td>";
                echo "<td><input type=\"radio\" name=\"perm_" . $v['ID'] . "\" id=\"perm_" . $v['ID'] . "_1\" value=\"1\"";
                if ($rPerms[$v['Key']]['value'] === true && $_GET['roleID'] != '') { echo " checked=\"checked\""; }
                echo " /></td>";
                echo "<td><input type=\"radio\" name=\"perm_" . $v['ID'] . "\" id=\"perm_" . $v['ID'] . "_0\" value=\"0\"";
                if ($rPerms[$v['Key']]['value'] != true && $_GET['roleID'] != '') { echo " checked=\"checked\""; }
                echo " /></td>";
				echo "<td><input type=\"radio\" name=\"perm_" . $v['ID'] . "\" id=\"perm_" . $v['ID'] . "_X\" value=\"X\"";
                if ($_GET['roleID'] == '' || !array_key_exists($v['Key'],$rPerms)) { echo " checked=\"checked\""; }
                echo " /></td>";
                echo "</tr>";
            }
        ?>
    	</table>
    	<input type="hidden" name="action" value="saveRole" />
        <input type="hidden" name="roleID" value="<?= $_GET['roleID']; ?>" />
    	<input type="submit" name="Submit" value="Submit" />
    </form>
    <form action="../action/roles.php" method="post">
         <input type="hidden" name="action" value="delRole" />
         <input type="hidden" name="roleID" value="<?= $_GET['roleID']; ?>" />
    	<input type="submit" name="Delete" value="Delete" />
    </form>
    <form action="../action/roles.php" method="post">
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