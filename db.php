<? 
/*  Database Information - Required!!  */
/* -- Configure the Variables Below --*/
$mysql_host = "localhost";
$mysql_database = "test";
$mysql_user = "root";
$mysql_password = "y2140541";


/* Database Stuff, do not modify below this line */

$connection = mysql_pconnect("$mysql_host","$mysql_user","$mysql_password") 
	or die ("Couldn't connect to server.");
	
$db = mysql_select_db("$mysql_database", $connection)
	or die("Couldn't select database.");
?>