<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$u_id = mysqli_real_escape_string($mysqli, $_POST['u_id']);
	$u_deathtype = mysqli_real_escape_string($mysqli, $_POST['u_deathtype']);
	$u_date = mysqli_real_escape_string($mysqli, $_POST['u_date']);
	$u_po = mysqli_real_escape_string($mysqli, $_POST['u_po']);
	$u_status = mysqli_real_escape_string($mysqli, $_POST['u_status']);	
	
	// checking empty fields
	if(empty($u_deathtype) || empty($u_date) || empty($u_po)) {	
			
		if(empty($u_deathtype)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($u_date)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($u_po)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE unidentified_body SET u_deathtype='$u_deathtype',u_date='$u_date',u_po='$u_po',u_status='$u_status' WHERE u_id=$u_id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: login/user_dashboard.php");
	}
}
?>
<?php
//getting id from url
$u_id = $_GET['u_id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM unidentified_body WHERE u_id=$u_id");

while($res = mysqli_fetch_array($result))
{
	$u_deathtype = $res['u_deathtype'];
	$u_date = $res['u_date'];
	$u_po = $res['u_po'];
	$u_status = $res['u_status'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	
	<br/><br/>
	
	<form name="form1" method="post" action="unidentifiedbodyadminedit.php">
		<table border="0">
			<tr> 
				<td>Death Type</td>
				<td><input type="text" name="u_deathtype" value="<?php echo $u_deathtype;?>"></td>
			</tr>
			<tr> 
				<td>Date</td>
				<td><input type="text" name="u_date" value="<?php echo $u_date;?>"></td>
			</tr>
			<tr> 
				<td>Polics Station</td>
				<td><input type="text" name="u_po" value="<?php echo $u_po;?>"></td>
			</tr>
			<tr> 
				<td>Status</td>
				<td><input type="text" name="u_status" value="<?php echo $u_status;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="u_id" value= <?php echo $_GET['u_id'];?> > </td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
