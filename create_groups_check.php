<? 
include 'db.php';
include 'action/class.acl.php';

session_start();
$userID=$_SESSION['ID'];
$_SESSION['userID'] = 1;
$userACL = new ACL($userID);


if ($userACL->hasPermission('create_groups') != true  )
{
	$url="../index.php";
	echo "You don't have the permission to create a group.<br>
";
	echo " The page will be redirected in 3 seconds...";	
	header('Refresh: 3; url="'.$url.'"'); 
}

else{
	
	if(!$_POST['groupname'] | !$_POST['private'] | !$_POST['size']){
		echo "error exists,please exit this page and try again.";
		exit();}
	$groupname=$_POST['groupname'];
	$groupsize=$_POST['size'];
	if($_POST['private']=='y'){$groupprivate=1;}else{$groupprivate=0;}
	
	$sql = mysql_query("INSERT INTO groups (GroupName,GroupSize,Private,AddDate) VALUES ('$groupname','$groupsize','$groupprivate',now()) ") or die (mysql_error());
	}
	if(!$sql){
	echo 'There has been an error creating your group. Please contact us if needed.';}
	$sql = mysql_query("SELECT ID FROM groups WHERE GroupName='$groupname' AND GroupSize='$groupsize' ORDER by AddDate DESC");
	$fetchcheck=mysql_num_rows($sql);
	
	if($fetchcheck > 0){
	$row = mysql_fetch_array($sql);
	$GroupID = $row["ID"];
	
	
	}else{echo" Errors exist while creating group";
	exit();}
	
	$sql2 = mysql_query("INSERT INTO group_members (UserID,GroupID,Admin) VALUES ('$userID','$GroupID', 1 )") or die (mysql_error());
	
	if(!$sql2){
	echo 'There has been an error creating your group. Please contact us if needed.';}
	
	
	include'grouplistall.php';
?>