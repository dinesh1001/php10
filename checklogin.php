<?php 
ob_start();
session_start();
$host="localhost"; // Host name 
$username = "ashish";
$password = "ashish";
$db_name = "student";
$tbl_name="members"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";

$result=mysql_query($sql);

$count=mysql_num_rows($result);


if($count==1)
{
	$row = mysql_fetch_assoc($result);
	$_SESSION["myuserid"] = $row["id"];
	$_SESSION["branch"] = $row["branch_name"];
 

	
	header("location:../home.php");
}
else 
{
echo "Wrong Username or Password";
}
ob_end_flush();
?>