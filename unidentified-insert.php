<?php 
header('Location: login/user_dashboard.php');
    if(isset($_POST['register']))
    {
        $u_deathtype = $_POST['u_deathtype'];
        $u_date = $_POST['u_date'];
        $u_location = $_POST['u_location'];
        $u_po = $_POST['u_po'];
        $u_district = $_POST['u_district'];
        $u_status = $_POST['u_status'];
       
      /*  $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");*/

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into unidentified_body(u_deathtype,u_date,u_location,u_po,u_district,u_status) values ('$u_deathtype','$u_date','$u_location','$u_po','$u_district','$u_status')";

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