<?php
$con = mysql_connect("mysql5.000webhost.com","a9860999_test","y2140541");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

else
{echo "yes !";
}

?>