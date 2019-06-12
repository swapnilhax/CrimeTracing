<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$v_name = mysqli_real_escape_string($mysqli, $_POST['v_name']);
	$v_company = mysqli_real_escape_string($mysqli, $_POST['v_company']);
	$v_licence = mysqli_real_escape_string($mysqli, $_POST['v_licence']);
	$v_firno = mysqli_real_escape_string($mysqli, $_POST['v_firno']);
	$v_status = mysqli_real_escape_string($mysqli, $_POST['v_status']);
	$date = mysqli_real_escape_string($mysqli, $_POST['date']);	
	
	// checking empty fields
	if(empty($v_name) || empty($v_company) || empty($v_licence)) {	
			
		if(empty($v_name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($v_company)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($v_licence)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE misingvehical SET v_name='$v_name',v_company='$v_company',v_licence='$v_licence',v_firno='$v_firno',v_status='$v_status',date='$date' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: login/user_dashboard.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM misingvehical WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$v_name = $res['v_name'];
	$v_company = $res['v_company'];
	$v_licence = $res['v_licence'];
	$v_firno = $res['v_firno'];
	$v_status = $res['v_status'];
	$date = $res['date'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>

	
	<form name="form1" method="post" action="missingvehicaladminedit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="v_name" value="<?php echo $v_name;?>"></td>
			</tr>
			<tr> 
				<td>Company</td>
				<td><input type="text" name="v_company" value="<?php echo $v_company;?>"></td>
			</tr>
			<tr> 
				<td>Licence</td>
				<td><input type="text" name="v_licence" value="<?php echo $v_licence;?>"></td>
			</tr>
			tr> 
				<td>FIR No</td>
				<td><input type="text" name="v_firno" value="<?php echo $v_firno;?>"></td>
			</tr>
			tr> 
				<td>Status</td>
				<td><input type="text" name="v_status" value="<?php echo $v_status;?>"></td>
			</tr>
			tr> 
				<td>Date</td>
				<td><input type="text" name="date" value="<?php echo $date;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value= <?php echo $_GET['id'];?> > </td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
