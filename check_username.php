<?php

/*include 'db.php';

//mysql query to select field username if it's equal to the username that we check '
$username= mysql_real_escape_string($_REQUEST["username"]);
$result = mysql_query("SELECT * FROM users WHERE username='" . $username . "'");

//if number of rows fields is bigger them 0 that means it's NOT available '
if(mysql_num_rows($result)>0){
	//and we send 0 to the ajax request
	echo 0;
}else{
	//else if it's not bigger then 0, then it's available '
	//and we send 1 to the ajax request
	echo 1;
}






###### db ##########
$mysql_user = 'a9860999_1';
$mysql_password = 'y2140541';
$mysql_database = 'a9860999_1';
$mysql_host = 'mysql5.000webhost.com';

################


//check we have username post var
if(isset($_POST["username"]))
{
	//check if its ajax request, exit script if its not
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
	$username=$_POST["username"];
	//try connect to db
	$connection = mysql_pconnect("$mysql_host","$mysql_user","$mysql_password") 
	or die ("Couldn't connect to server.");
	
$db = mysql_select_db("$mysql_database", $connection)
	or die("Couldn't select database.");
	
	
	//trim and lowercase username
	$username =  strtolower(trim($_POST["username"])); 
	
	//sanitize username
	$username = filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	//check username in db
	$results = mysql_query("SELECT * FROM users WHERE username='$username'");
	
	//return total count
	$username_exist = mysql_num_rows($results); //total records
	
	//if value is more than 0, username is not available
	if($username_exist == 1) {
		echo 1;
	}else{
		echo 0;
	} 
	
	//close db connection
	mysql_close($connection);
}

*/





include('db.php');
if(isset($_POST['name']))
{
$name=$_POST['name'];
$query=mysql_query("select * from users where username='$name'");
$row=mysql_num_rows($query);
if($row==0)
{
echo 0;//"<span style='color:green;'>Available</span>";
}
else
{
echo 1;//"<span style='color:red;'>Already exist</span>";
}
}



?>
