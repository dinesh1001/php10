<?php
session_start();
if(!isset($_SESSION["myuserid"])){
header("location:login/main_login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
 
<body>

<p align="center" class="style1"><img border = "none" src = "image/title.jpg"></img></p>
<hr>
<hr>
<p align="center">
	<a href = "home.php" name="home"><img border = "none" src = "image/home.jpg"></img></a>
	<a href = "entry.php" name="entry"><img border = "none" src = "image/addst.jpg"></img></a>
	<a href = "edit1.php" name="update"><img border = "none" src = "image/update.jpg"></img></a>
	<a href = "search.php" name="search"><img border = "none" src = "image/search.jpg"></img></a>
	<a href = "delete1.php" name="delete"><img border = "none" src = "image/delete1.jpg"></img></a>
	<a href = "login/logout.php"><img border = "none" src = "image/logout.jpg"></img></a></p>
</body>
</html>
