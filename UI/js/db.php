<? 
/*  Database Information - Required!!  */
/* -- Configure the Variables Below --*/
$mysql_host = "localhost";
$mysql_database = "fyp";
$mysql_user = "root";
$mysql_password = "123409";


/* Database Stuff, do not modify below this line */

$connection = mysql_pconnect("$mysql_host","$mysql_user","$mysql_password") 
	or die ("Couldn't connect to server.");
	
$db = mysql_select_db("$mysql_database", $connection)
	or die("Couldn't select database.");
?>