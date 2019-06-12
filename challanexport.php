<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'ccnts');  
$sql = "SELECT `e_id`,`e_name`,`e_vehicalno`,`e_violation`,`e_fine`,`e_location`,`e_district`,`e_offencetime`,`date` FROM `e_challan`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "User Id" . "\t" . "Name" . "\t" . " Vehical No" . "\t". "Violation" . "\t". "Fine " . "\t". "Location " . "\t". " District " . "\t". "Offence time " . "\t". " date " . "\t";
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?>