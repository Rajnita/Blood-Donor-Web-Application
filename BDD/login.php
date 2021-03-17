<html>
<head>
<title>Home</title>
</head>

<body>
<?php
$host = "localhost";
$db_name = "Blooddonordb";
$link = mysql_connect($host,"root","");
mysql_select_db($db_name);
$username=$_POST['username'];
$password=$_POST['password'];
if($rec=mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username='$username' AND password = '$password'")))
{
print "<script>";
print " self.location='account.php';"; 
print "</script>";
}
else 
{

?>
<br /><br /><br /><br /><br /><br /><center><?php
echo "<font face='Verdana' size='2' color=red>Wrong Login. Use your correct Userid and Password and Try <br>" ?></center>
<br /><br /><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
<?php 
}
?>
</body>
</html>