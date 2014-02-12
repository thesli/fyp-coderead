<?
/* Check User Script */
session_start();  // Start Session

include 'db.php';
// Conver to simple variables
$username = $_POST["username"];
$password = $_POST["password"];



// Convert password to md5 hash
$password = md5($password);


// check if the user info validates the db
$sql = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password' AND activated = 1 ");
$login_check = mysql_num_rows($sql);

if($login_check > 0){
	while($row = mysql_fetch_array($sql)){
	foreach( $row AS $key => $val ){
		$$key = stripslashes( $val );
	}
		// Register some session variables!
		
		$_SESSION['first_name'] = $first_name;
		
		$_SESSION['last_name'] = $last_name;
		
		$_SESSION['email_address'] = $email_address;
		
		$_SESSION['ID'] = $ID;
		
	/*	
		
function makeRandomSessionId() {
  $salt = "0123456789";
  srand((double)microtime()*1000000); 
  	$i = 0;
  	while ($i <= 7) {
    		$num = rand() % 33;
    		$tmp = substr($salt, $num, 1);
    		$id = $id . $tmp;
    		$i++;
  	}
  	return $id;
}
		$session_id = makeRandomSessionId();
		mysql_query("UPDATE users SET session_id='$session_id' WHERE ID='$ID'")or die (mysql_error());
		$_SESSION['session_id'] = $session_id;*/
		header("Location: login_success.php");
	}
	
} else {
	//echo "You could not be logged in! Either the username and password do not match or you have not validated your membership!<br />
	//Please try again!<br />";
	include 'login_fail.php';
}
?>