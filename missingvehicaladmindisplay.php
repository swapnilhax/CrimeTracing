<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM misingvehical ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<!-- <a href="add.html">Add New Data</a><br/><br/> -->

<center>Missing Vehical List Edit/Display</center>
<br>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Company</td>
		<td>Licence</td>
		<td>FIR No</td>
		<td>Status</td>
		<td>Date</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['v_name']."</td>";
		echo "<td>".$res['v_company']."</td>";
		echo "<td>".$res['v_licence']."</td>";	
		echo "<td>".$res['v_firno']."</td>";	
		echo "<td>".$res['v_status']."</td>";	
		echo "<td>".$res['date']."</td>";	

		echo "<td><a href=\"missingvehicaladminedit.php?id=$res[id]\">Edit</a> </td>";		
	}
	?>
	</table>
</body>
</html>
