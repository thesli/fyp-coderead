<?
/* Account activation script */

// Get database connection
include 'db.php';

// Create variables from URL.

$userid = $_REQUEST['id'];
$code = $_REQUEST['code'];

$sql = mysql_query("UPDATE users SET activated='1' WHERE userid='$userid' AND password='$code'");
// anything without mysql_escape_string is extremelly unsafe. think about the case when $userid = "\"1;drop table users;\""
// even with that might still screw you over with some wired way
// solution: use PDO or use framework 's ORM(object relational mapper),so that you don't have to handle this problem
$sql_doublecheck = mysql_query("SELECT * FROM users WHERE userid='$userid' AND password='$code' AND activated='1'");
// do refactoring 
// $sql = "select blah blah blah"
// $sql_doublecheck = $sql . "AND activated = '1' " 
// also the activated should be true or false not '1',the type is different although I think it should still work anyway
// beware sql injection too

$doublecheck = mysql_num_rows($sql_doublecheck);
// variable name is confusing. prefer things like $isDblChecked = mysql_num_rows($sql_doublecheck) > 0 ;


if($doublecheck == 0){
	echo "<strong><font color=red>Your account could not be activated!</font></strong>";
// again,use class instead of inline-css
} elseif ($doublecheck > 0) {
// there are no reason elif because it's either bigger or smaller.
	//echo "Your account is activated successfully.";
	include 'activate_y.php';
}

?>

