<html>
<head>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#name").keyup(function() {
var name = $('#name').val();
if(name=="")
{
$("#disp").html("");
}
else
{
$.ajax({
type: "POST",
url: "check_username.php",
data: "name="+ name ,
success: function(html){
$("#disp").html(html);
}
});
return false;
}
});
});
</script>
</head>
<body>
<fieldset style="width:250px;">
<h3>Username Check using Ajax</h3>
<form method="post">
Username: <input type="text" name="name" id="name" /><br /><br />
<div id="disp"></div><br />
<input type="submit" name="submit" />
</form>
</fieldset>
</body>
</html>