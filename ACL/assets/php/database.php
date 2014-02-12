<?php
session_start();
ob_start();
$hasDB = false;
$server = 'mysql5.000webhost.com';
$user = 'a9860999_2';
$pass = 'y2140541';
$db = 'a9860999_2';
$link = mysql_connect($server,$user,$pass);
if (!is_resource($link)) {   
	$hasDB = false;
	die("Could not connect to the MySQL server at localhost.");
} else {   
	$hasDB = true;
	mysql_select_db($db);
}
?>