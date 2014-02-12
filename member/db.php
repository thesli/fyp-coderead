<? 
/*  Database Information - Required!!  */
/* -- Configure the Variables Below --*/
$mysql_host = "mysql5.000webhost.com";
$mysql_database = "a9860999_1";
$mysql_user = "a9860999_1";
$mysql_password = "y2140541";


/* Database Stuff, do not modify below this line */

$connection = mysql_pconnect("$mysql_host","$mysql_user","$mysql_password") 
	or die ("Couldn't connect to server.");
	
$db = mysql_select_db("$mysql_database", $connection)
	or die("Couldn't select database.");
?>