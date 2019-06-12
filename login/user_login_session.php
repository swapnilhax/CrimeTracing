<?php
session_start();
$message="";
if(count($_POST)>0) {
if( $_POST["user_name"] == "admin" and $_POST["password"] == "admin") {
	$_SESSION["user_id"] = $row[user_id];
	$_SESSION["user_name"] = $row[user_name];
	$_SESSION['loggedin_time'] = time();  
} else {
	$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_id"])) {
header("Location:user_dashboard.php");
}
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Enter Login Details</td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="user_name"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body></html>