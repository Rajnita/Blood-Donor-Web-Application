<html>
<head>
<title>Untitled Document</title>
</head>

<body>
<?php
$link = mysql_connect("localhost","root","");
mysql_select_db("Blooddonordb");
$name=$_POST['name'];
$blood_group=$_POST['blood_group'];
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];

echo $username;
if($name !=NULL && $blood_group !=NULL && $username !=NULL && $password !=NULL && $phone!=NULL && $mobile!=NULL && $email !=NULL &&  $address !=NULL && $city !=NULL)
{
mysql_query("insert into users values ('$name','$blood_group','$username','$password','$phone','$mobile','$email','$address','$city')");

print "<script>";
print " self.location='account.php';";
print "</script>";
}
else
{
echo " Some details not filled";
print "<script>";
print " self.location='signup.php';";
print "</script>";
}
?>

</body>
</html>
