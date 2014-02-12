

<?php
include('db.php');
if(isset($_POST['name']))
{
$name=$_POST['name'];
$query=mysql_query("select * from users where username='$name'");
$row=mysql_num_rows($query);
if($row==0)
{
echo "<span style='color:green;'>Available</span>";
}
else
{
echo "<span style='color:red;'>Already exist</span>";
}
}
?>