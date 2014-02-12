<?
//session_start();  // Start Session

include 'db.php';
// Conver to simple variables
$email = $_POST["emailaddress"];
if(empty($_POST['emailaddress'])) 
  {
    $errorMessage .= "<li>NO INPUT</li>";
  }
  
$email = stripslashes($email);

$sql = mysql_query("SELECT * FROM users WHERE email_address='$email' AND activated='1' ");
$userfound = mysql_num_rows($sql);
// validation generator 
function makeRandomPassword() {
  $salt = "abchefghjkmnpqrstuvwxyz0123456789";
  srand((double)microtime()*1000000); 
  	$i = 0;
  	while ($i <= 7) {
    		$num = rand() % 33;
    		$tmp = substr($salt, $num, 1);
    		$pass = $pass . $tmp;
    		$i++;
  	}
  	return $pass;
}


$validID = makeRandomPassword();
//

$sql2 = mysql_query("UPDATE users SET pwretrID='$validID' WHERE email_address='$email' AND activated='1' ");
/*if(!mysql_query($sql,$connection)){
	echo "Database update failed!";
	exit();
}

/*if($userfound > 0)
{
	
	while($row = mysql_fetch_array($sql)){
	
	foreach( $row AS $key => $val ){
		$$key = stripslashes( $val );
	}
	
	}
	*/
if($userfound>0){
	
	$subject = "Retrive your password at Eventer!";
	$message = "Dear $first_name $last_name,
	
	
	Username: $username
	
	Please follow the link below to change your password.
	
	http://forfunsonly.comuf.com/userpwchangepage.php?email=$email&validID=$validID
	
	To make sure your account is safe to use, please change your password regulary.
	
	Thanks!
	Tung
	
	This is an automated response, please do not reply!";
	
	mail($email, $subject, $message, "From: Tung<tungkeke@gmail.com>\nX-Mailer: PHP/" . phpversion());
	include 'pwsent.php';
	}
else{	
	echo "no account found";
	include 'forgetpassword.php';

}
	

?>