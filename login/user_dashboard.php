<?php
session_start();
include("functions.php");
if(isset($_SESSION["user_id"])) {
	if(isLoginSessionExpired()) {
		header("Location:logout.php?session_expired=1");
	}
}
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="100%">
<tr class="tableheader">
<td align="center">User Dashboard</td>
</tr>
<tr class="tablerow">
<td>
<?php
if(isset($_SESSION["user_name"])) {
?>
Welcome <?php echo $_SESSION["user_name"]; ?>.


<br>
<a href="../arrestedform.php">Add Arrested people</a>
<br>
<br>
<a href="../challanform.php">E-Challan add</a>
<br>
<a href="../missingvehicaladmindisplay.php">Missing Vehical List</a>
<br>
<a href="../missingpersonform.php">Missing Person Form </a>
<br>
<a href="../missingpersonadmindisplay.php">Missing Person List </a>
<br>
<a href="../rewardedcriminaladmindisplay.php">Rewarded Criminal List</a>
<br>
<a href="../rewardedcriminal.php">Rewarded Criminal Form</a>
<br>
<a href="../noflyform.php">Look Out Notice Form</a>
<br>
<a href="../recoveredvehicaladmindisplay.php">Recovered Vehical List</a>
<br>
<a href="../recoveredvehicalform.php">Recovered Vehical Form</a>
<br>
<a href="../unidentifiedbodyadmindisplay.php">Unidentified deathBody List</a>
<br>
<a href="../unidentifiedbodyform.php">Unidentified body Form</a>
<br>
<br>
<a href="../inteldisplay.php">Intelligence Input Display</a>

<br>
<a href="../noticeform.php">Notice Form</a>





<br>
 Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}
?>
</td>
</tr>
</body></html>