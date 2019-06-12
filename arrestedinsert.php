<?php 
header('Location: login/index.php');
    if(isset($_POST['register']))

        
    {
        $a_name = $_POST['a_name'];
        $a_location = $_POST['a_location'];
        $a_crimetype = $_POST['a_crimetype'];
        $a_age = $_POST['a_age'];
         $a_toa = $_POST['a_toa'];
         $a_district = $_POST['a_district'];
         
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        
        move_uploaded_file($image_tmp,"images/$image");

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into arrested(a_name,a_location,a_crimetype,a_age,a_toa,a_district,image) values ('$a_name','$a_location','$a_crimetype','$a_age','$a_toa','$a_district','$image')";

  

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