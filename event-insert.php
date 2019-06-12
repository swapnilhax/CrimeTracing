<?php 
header('Location: index.php');
    if(isset($_POST['register']))
    {
        $e_name = $_POST['e_name'];
        $e_organiser = $_POST['e_organiser'];
        $e_location = $_POST['e_location'];
         $e_date = $_POST['e_date'];
          $e_time = $_POST['e_time'];
           $e_discription = $_POST['e_discription'];
            $e_district = $_POST['e_district'];
      /*  $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");*/

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into event(e_name,e_organiser,e_location,e_date,e_time,e_discription,e_district) values ('$e_name','$e_organiser','$e_location','$e_date','$e_time','$e_discription','$e_district')";

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