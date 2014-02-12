<?
include 'db.php';

session_start();
/*if(isset($_SESSION['first_name'])){
	header("Location: login_success.php");
	exit();
}*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	 <h1>Group List :</h1>  <div id="content_left_right"><h2><a href="create_groups.php" title="">
     Create Group</a></h2> </div>
     <br />
     
     <h4><?
	 $fetchgroup = mysql_query("SELECT * FROM groups WHERE Private !=1 ");
	 $resp=array();
	 if($fetchgroup == 0 ){ echo "error exists"; exit;}
	 else{
		 while($grouprow = mysql_fetch_assoc($fetchgroup)){
			 $resp[$grouprow['ID']] = array('ID' => $grouprow['ID'], 'Name' => $grouprow['GroupName'], );
			 }
		 
			 
			 foreach ($resp as $k => $v)
		{
			 echo "<a href=\"grouppage.php?groupID=" . $v['ID'] . "\">" . $v['Name'] . "</a><br />";
		}
		 }
		 
	 
	 
	 if (mysql_num_rows($fetchgroup) < 1)
		{
			echo "No groups yet.<br />";
		}
	 
	 
	 ?></h4>
     
	  </div>
      <div id="content_right">
      
      
      </div>
	<div class="spacer"></div>
	</div>
<div id="footer"></div> 
</div>
</body>
</html>