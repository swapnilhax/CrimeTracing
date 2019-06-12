<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'ccnts');  
$sql = "SELECT `m_id`,`m_date`,`m_name`,`m_age`,`m_location`,`m_district`,`m_po` FROM `missingperson`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "User Id" . "\t" . "date" . "\t" . "  Name" . "\t". "age" . "\t". "location " . "\t". "District " . "\t". " Police Station ";
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