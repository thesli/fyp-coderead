<?
include 'db.php';

session_start();
/*if(isset($_SESSION['first_name'])){
	header("Location: login_success.php");
	exit();
}*/
$groupID=$_GET['groupID'];
$sql= mysql_query("SELECT * FROM groups WHERE ID = '$groupID'")  ;
$fetchcheck=mysql_num_rows($sql);
if($fetchcheck > 0){
	$row = mysql_fetch_array($sql);
	$GroupName = $row['GroupName'];
	
	
	}else{echo"array fetch error";}

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
	 <h1><strong><? echo "$GroupName"; ?></strong></h1>  <div id="content_left_right"><h2>Group Members</h2><br />
<h1><? $fetchgroup = mysql_query("SELECT * FROM group_members WHERE GroupID='$groupID' ");
	   
	 $resp=array();
	 $respname=array();
	 if($fetchgroup == 0 ){ echo "error exists"; exit;}
	 else{
		 while($grouprow = mysql_fetch_assoc($fetchgroup)){
			 $resp[$grouprow['ID']] = array('ID' => $grouprow['UserID']);
			 }
			 
			 foreach ($resp as $k => $v)
		{		
			$localID=$v['ID'];
		 $fetchgroupmembername = mysql_query("SELECT * FROM users WHERE ID='$localID' ");
		 $namerow = mysql_fetch_array($fetchgroupmembername);
		 $username = $namerow['username'];
		
			 echo "<a href=\"personpage.php?memberID=" . $v['ID'] . "\">" . $username . "</a><br />";
			
		}
		 }?><a href="create_groups.php" title="">
     Create Group</a></h1> </div>
     <br />
     
   
     
	  </div>
      <div id="content_right">
      
      
      </div>
	<div class="spacer"></div>
	</div>
<div id="footer"></div> 
</div>
</body>
</html>
