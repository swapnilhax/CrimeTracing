<?php 
header('Location: login/user_dashboard.php');
    if(isset($_POST['register']))
    {
        $n_name = $_POST['n_name'];
        $n_location = $_POST['n_location'];
        $n_district = $_POST['n_district'];
        $n_crimetype = $_POST['n_crimetype'];
        $n_po = $_POST['n_po'];
      /*  $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");*/

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into no_fly(n_name,n_location,n_district,n_crimetype,n_po) values ('$n_name','$n_location','$n_district','$n_crimetype','$n_po')";

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