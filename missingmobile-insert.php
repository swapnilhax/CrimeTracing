<?php 
header('Location: index.php');
    if(isset($_POST['register']))
    {
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
         $mobno = $_POST['mobno'];
          $address = $_POST['address'];
           $city = $_POST['city'];
            $pincode = $_POST['pincode'];
             $poo = $_POST['poo'];
              $state = $_POST['state'];
               $company = $_POST['company'];
                $modelno = $_POST['modelno'];
                 $imeino = $_POST['imeino'];
                  

      /*  $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        move_uploaded_file($image_tmp,"images/$image");*/

        $con = mysqli_connect("localhost","root","","ccnts");

        $query = "insert into missingmobile(name,dob,gender,mobno,address,city,pincode,poo,state,company,modelno,imeino) values ('$name','$dob','$gender','$mobno','$address','$city','$pincode','$poo','$state','$company','$modelno','$imeino')";

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