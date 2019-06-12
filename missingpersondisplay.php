<?php
include('header.php');
	$conn = mysqli_connect("localhost", "root", "", "ccnts");
	
	$date = "";
	$date_to_date = "";
	
	$queryCondition = "";
	if(!empty($_POST["search"]["date"])) {			
		$date = $_POST["search"]["date"];
		list($fid,$fim,$fiy) = explode("-",$date);
		
		$date_todate = date('Y-m-d');
		if(!empty($_POST["search"]["date_to_date"])) {
			$date_to_date = $_POST["search"]["date_to_date"];
			list($tid,$tim,$tiy) = explode("-",$_POST["search"]["date_to_date"]);
			$date_todate = "$tiy-$tim-$tid";
		}
		
		$queryCondition .= "WHERE m_date BETWEEN '$fiy-$fim-$fid' AND '" . $date_todate . "'";
	}

	$sql = "SELECT * from missingperson " . $queryCondition . " ORDER BY m_date desc";
	$result = mysqli_query($conn,$sql);
?>

<html>
	<head>
    <title>Recent Articles</title>		
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

	<style>
	.table-content{border-top:#CCCCCC 4px solid; width:50%;}
	.table-content th {padding:5px 20px; background: #F0F0F0;vertical-align:top;} 
	.table-content td {padding:5px 20px; border-bottom: #F0F0F0 1px solid;vertical-align:top;} 
	</style>
	</head>
	
	<body>
    <div class="demo-content">
    	<center>
    	
		<h2 align="center" class="title_with_link"></h2>
		<br>
<a href="missingpersonexport.php"> Export Data to Excel</a>
  <form name="frmSearch" method="post" action="">
	 <p class="search_input">
		
		<input type="text" placeholder="From Date" id="date" name="search[date]"  value="<?php echo $date; ?>" class="input-control" />

	
	    <input type="text" placeholder="To Date" id="date_to_date" name="search[date_to_date]" style="margin-left:10px"  value="<?php echo $date_to_date; ?>" class="input-control"  />			 
		<input type="submit" name="go" value="Search" >

	</p>
	<br>

<?php if(!empty($result))	 { ?>
<table class="table-content ">
          <thead>
        <tr>
                      
          <th width="30%"><span>ID</span></th>
          <th width="50%"><span>Date</span></th>          
          <th width="20%"><span>Name</span></th>	  
          <th width="20%"><span>Age</span></th>
          <th width="20%"><span>Location</span></th>
          <th width="20%"><span>District</span></th>
          <th width="20%"><span>Police Station</span></th>
           <th width="40%"><span>Photo</span></th>
        </tr>
      </thead>
    <tbody>
	<?php
		while($row = mysqli_fetch_array($result)) {
	?>
        <tr>
        	<td><?php echo $row["m_id"]; ?></td>
			<td><?php echo $row["m_date"]; ?></td>
			<td><?php echo $row["m_name"]; ?></td>
			<td><?php echo $row["m_age"]; ?></td>
			<td><?php echo $row["m_location"]; ?></td>
			<td><?php echo $row["m_district"]; ?></td>
			<td><?php echo $row["m_po"]; ?></td>
			<td><img src ="images/<?php echo $row["image"]; ?>"height="200" width="200"></td>


		</tr>
   <?php
		}
   ?>
   <tbody>
  </table>
<?php }  ?>
  </form>
  </div>
</center>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
$.datepicker.setDefaults({
showOn: "button",
buttonImage: "datepicker.png",
buttonText: "Date Picker",
buttonImageOnly: true,
dateFormat: 'dd-mm-yy'  
});
$(function() {
$("#date").datepicker();
$("#date_to_date").datepicker();
});
</script>
</body></html>
<br>
<br>
<?php include('footer.php');?>  
