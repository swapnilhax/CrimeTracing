<?php 
header('Location: login/user_dashboard.php');
    if(isset($_POST['register']))
    {
        $c_name = $_POST['c_name'];
        $c_age = $_POST['c_age'];
        $c_crime = $_POST['c_crime'];
        $c_amount = $_POST['c_amount'];
        $c_po = $_POST['c_po'];
        $c_district = $_POST['c_district'];
        $c_firno = $_POST['c_firno'];
        $c_status = $_POST['c_status'];
        $image = $_POST['image'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into rewardedcriminal(c_name,c_age,c_crime,c_amount,c_po,c_district,c_firno,c_status,image) values ('$c_name','$c_age','$c_crime','$c_amount','$c_po','$c_district','$c_firno','$c_status','$image')";

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