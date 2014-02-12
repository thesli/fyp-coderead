<?
/* Account activation script */
session_start();  // Start Session
// Get database connection
include 'db.php';

// Create variables from URL.

if(!isset($_SESSION['email_address'])){
	header("Location: index.php");
	exit();
}


if(!isset($_SESSION['validationID'])){
	header("Location: index.php");
	exit();
	
	
	$newpw=$_POST[newpassword];
    $newpwc=$_POST[newpasswordc];
}
if($newpw!=$newpwc){
	header("Location: http://forfunsonly.comuf.com/userpwchangepage.php?email=$email_address&code=$validationID");
	exit();
}


/*


$sql = mysql_query("SELECT * from users WHERE email_address='$email_address' AND pwretrID='$validationID'");

/*$sql_doublecheck = mysql_query("SELECT * FROM users WHERE userid='$userid' AND password='$code' AND activated='1'");
$doublecheck = mysql_num_rows($sql_doublecheck);


if($sql ==0){
	echo " Authentication is required to access this page.";
	echo "\r\n";
	$url = "http://forfunsonly.comuf.com/";
	header('Refresh: 3; url="'.$url.'"'); 
}*/
else{
	$pwchangeok= mysql_query("UPDATE users SET password='$newpw' WHERE email_address='$email_address' AND pwretrID='$validationID'");
echo " Your password is changed successfully.";
session_destroy();
	if(!session_is_registered('email_address')){
	
	header("Location: login.php");}
	else{echo" Error";
	}
}

?>