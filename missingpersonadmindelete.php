<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$m_id = $_GET['m_id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM missingperson WHERE m_id=$m_id");

//redirecting to the display page (index.php in our case)
header("Location: login/user_dashboard.php");
?>

