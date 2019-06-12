<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM rewardedcriminal ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>


	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Crime</td>
		<td>Amount</td>
		<td>FIR No</td>
		<td>Status</td>
		<td>Date</td>

	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['c_name']."</td>";
		echo "<td>".$res['c_crime']."</td>";
		echo "<td>".$res['c_amount']."</td>";
		echo "<td>".$res['c_firno']."</td>";
		echo "<td>".$res['c_status']."</td>";
        echo "<td>".$res['c_date']."</td>";	


		echo "<td><a href=\"rewardedcriminaladminedit.php?id=$res[id]\">Edit</a> </td>";		
	}
	?>
	</table>
</body>
</html>
