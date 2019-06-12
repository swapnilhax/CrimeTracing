<?php 
header('Location: login/user_dashboard.php');
    if(isset($_POST['register']))
    {
        $v_model = $_POST['v_model'];
        $v_licence = $_POST['v_licence'];
        $v_location = $_POST['v_location'];
         $v_po = $_POST['v_po'];
          $v_district = $_POST['v_district'];

      /*  $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");*/

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into recoveredvehical(v_model,v_licence,v_location,v_po,v_district) values ('$v_model','v_licence','$v_location','$v_po','$v_district')";

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