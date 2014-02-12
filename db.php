<? 

// general speaking at the time I start learning php mysql_xxx is already deprecated and still majority of the online tutorial are still using that,consider PDO do more OO programming !!.

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
