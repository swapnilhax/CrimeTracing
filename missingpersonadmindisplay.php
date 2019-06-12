<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM missingperson ORDER BY m_id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<!-- <a href="add.html">Add New Data</a><br/><br/> -->

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td>
		<td>Location</td>
		<td>District</td>
		<td>Police Station</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['m_name']."</td>";
		echo "<td>".$res['m_age']."</td>";
		echo "<td>".$res['m_location']."</td>";	
		echo "<td>".$res['m_district']."</td>";	
		echo "<td>".$res['m_po']."</td>";	


		echo "<td> <a href=\"missingpersonadmindelete.php?m_id=$res[m_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
