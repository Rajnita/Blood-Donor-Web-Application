
<html>
<head>
<title>Sign In</title>
<style type="text/css">
<!--
.style4 {
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>

<body background="springtime-1600x1200.jpg">
   <table width="1109" border="0">
    <tr>
      <td width="107"><a href="index.php" class="style4">Home | </a></td>
      <td width="263"><a href="signup.php" class="style4">Register as a Blood Donor | </a></td>
      <td width="208"><a href="search.php" class="style4">Search Blood Donor | </a></td>
      <td width="145"><a href="bloodtips.php"><span class="style4">Blood Tips </span>| </a></td>
      <td width="110"><a href="sponsor.php"><span class="style4">Sponsor </span>|</a> </td>
    </tr>
  </table>
  <p><img src="give_blood_give_life.jpg" width="1108" height="233" /></p>
   <p>&nbsp;
</p>
<table width="674" border="0" align="center">
  <tr>
    <td width="140"><strong>NAME </strong></td>
    <td width="131"><strong>CITY</strong></td>
    <td width="147"><strong>MOBILE</strong></td>
    <td width="156"><strong>BLOOD GROUP </strong></td>
  </tr>
  <?php 
  $link = mysql_connect("localhost","root","");
   mysql_select_db("Blooddonordb");
   $blood_group=$_POST['blood_group'];
  $rec=(mysql_query("SELECT * FROM  users where blood_group='$blood_group'"));
while($rec1=mysql_fetch_assoc($rec))
{
    $name=$rec1["name"];
    $city=$rec1["city"];
    $mobile=$rec1["mobile"];
    $blood_group=$rec1["blood_group"];
 ?>
  <tr>
    <td width="140"><?php echo $name; ?></td>
    <td width="131"><?php echo $city; ?></td>
    <td width="147"><?php  echo $mobile; ?>    </td>
    <td><?php  echo $blood_group; ?></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>
