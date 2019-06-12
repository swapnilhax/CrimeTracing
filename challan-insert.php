<?php 
header('Location: login/user_dashboard.php');
    if(isset($_POST['register']))
    {
        $e_name = $_POST['e_name'];
          $e_vehicalno = $_POST['e_vehicalno'];
          $e_violation = $_POST['e_violation'];
          $e_fine = $_POST['e_fine'];
        $e_location = $_POST['e_location'];
        $e_district = $_POST['e_district'];
        $e_offencetime = $_POST['e_offencetime'];
      /*  $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");*/

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into e_challan(e_name,e_vehicalno,e_violation,e_fine,e_location,e_district,e_offencetime) values ('$e_name', '$e_vehicalno','$e_violation','$e_fine','$e_location', '$e_district','$e_offencetime')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {       

        echo "Inserted successfully";
        
        }
        else {       

        echo "Insertion Failed";

             }
    }
?>