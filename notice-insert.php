<?php 
header('Location: login/user_dashboard.php');
    if(isset($_POST['register']))
    {
        $n_subject = $_POST['n_subject'];
        $n_date = $_POST['n_date'];
        $n_message = $_POST['n_message'];
      /*  $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");*/

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into notice(n_subject,n_date,n_message) values ('$n_subject','$n_date','$n_message')";

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