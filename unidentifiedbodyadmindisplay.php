<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM unidentified_body ORDER BY u_id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>


	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Death Type</td>
		<td>Date</td>
		<td>Police Station</td>
		<td>Status</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['u_deathtype']."</td>";
		echo "<td>".$res['u_date']."</td>";
		echo "<td>".$res['u_po']."</td>";
		echo "<td>".$res['u_status']."</td>";	


		echo "<td><a href=\"unidentifiedbodyadminedit.php?u_id=$res[u_id]\">Edit</a> </td>";		
	}
	?>
	</table>
</body>
</html>
