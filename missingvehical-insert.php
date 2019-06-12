<?php 
header('Location: index.php');
    if(isset($_POST['register']))
    {
        $v_name = $_POST['v_name'];
        $v_company = $_POST['v_company'];
        $v_licence = $_POST['v_licence'];
        $v_location = $_POST['v_location'];
        $v_firno = $_POST['v_firno'];
        $v_policestation = $_POST['v_policestation'];
        $v_district = $_POST['v_district'];
        $v_status = $_POST['v_status'];
      /*  $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");*/

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into misingvehical(v_name,v_company,v_licence,v_location,v_firno,v_policestation,v_district,v_status) values ('$v_name','$v_company','$v_licence','$v_location','$v_firno','$v_policestation','$v_district','$v_status')";

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