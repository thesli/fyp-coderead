<?php
//data connection file
//require "config.php";
require "db.php";
extract($_REQUEST);

if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
{
	$sql = "select * from users where email='$email'";
	$rsd = mysql_query($sql);
	$msg = mysql_num_rows($rsd); //returns 0 if not already exist
}
else
{
	$msg = "invalid";
}
echo $msg;
?>