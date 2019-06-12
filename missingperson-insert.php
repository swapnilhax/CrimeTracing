<?php 
header('Location: login/user_dashboard.php');
    if(isset($_POST['register']))
    {
        
        $m_name = $_POST['m_name'];
        $m_age = $_POST['m_age'];
        $m_location = $_POST['m_location'];
        $m_district = $_POST['m_district'];
        $m_po = $_POST['m_po'];
        $image = $_POST['image'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into missingperson(m_name,m_age,m_location,m_district,m_po,image) values ('$m_name','$m_age','$m_location','$m_district','$m_po','$image')";

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