<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'ccnts');  
$sql = "SELECT `a_id`,`a_name`,`a_crimetype` FROM `arrested`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "User Id" . "\t" . "Name" . "\t" . "Crime Type" . "\t";  
$setData = '';  
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