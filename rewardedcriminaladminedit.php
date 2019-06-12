<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$c_name = mysqli_real_escape_string($mysqli, $_POST['c_name']);
	$c_crime = mysqli_real_escape_string($mysqli, $_POST['c_crime']);
	$c_amount = mysqli_real_escape_string($mysqli, $_POST['c_amount']);	
	$c_firno = mysqli_real_escape_string($mysqli, $_POST['c_firno']);	
	$c_status = mysqli_real_escape_string($mysqli, $_POST['c_status']);	
	$c_date = mysqli_real_escape_string($mysqli, $_POST['c_date']);	
	
	// checking empty fields
	if(empty($c_name) || empty($c_crime) || empty($c_amount)) {	
			
		if(empty($c_name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($c_crime)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($c_amount)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE rewardedcriminal SET c_name='$c_name',c_crime='$c_crime',c_amount='$c_amount',c_firno='$c_firno',c_status='$c_status',c_date='$c_date' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM rewardedcriminal WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$c_name = $res['c_name'];
	$c_crime = $res['c_crime'];
	$c_amount = $res['c_amount'];
	$c_firno = $res['c_firno'];
	$c_status = $res['c_status'];
	$c_date = $res['c_date'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="rewardedcriminaladminedit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="c_name" value="<?php echo $c_name;?>"></td>
			</tr>
			<tr> 
				<td>Crime</td>
				<td><input type="text" name="c_crime" value="<?php echo $c_crime;?>"></td>
			</tr>
			<tr> 
				<td>Amount</td>
				<td><input type="text" name="c_amount" value="<?php echo $c_amount;?>"></td>
			</tr>
			<tr> 
				<td>FIR No</td>
				<td><input type="text" name="c_firno" value="<?php echo $c_firno;?>"></td>
			</tr>
			<tr> 
				<td>Status</td>
				<td><input type="text" name="c_status" value="<?php echo $c_status;?>"></td>
			</tr>
			<tr> 
				<td>Date</td>
				<td><input type="text" name="c_date" value="<?php echo $c_date;?>"></td>
			</tr>

			<tr>
				<td><input type="hidden" name="id" value= <?php echo $_GET['id'];?> > </td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
