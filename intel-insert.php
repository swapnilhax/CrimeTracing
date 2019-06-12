<?php 
header('Location: index.php');
    if(isset($_POST['register']))
    {
        $i_name = $_POST['i_name'];
         $i_subject  = $_POST['i_subject'];
        $i_district = $_POST['i_district'];
        $i_detail = $_POST['i_detail'];
      /*  $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");*/

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into intelligence_input(i_name,i_subject,i_district,i_detail) values ('$i_name','$i_subject','$i_district','$i_detail')";

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