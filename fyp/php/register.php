<?php
    if(isset($_POST['signup'])){
        include '../conn.php';
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $address=$_POST['address'];
        $phone_no=$_POST['phone_no'];
        $query="INSERT INTO user(name, phone_no, e_mail, address, password)
        values('$name','$phone_no','$email','$address','$pass');";
        $data=mysqli_query($conn,$query);
        if($data){
            echo"Data inserted into Database";
            header('location: ../HyMobile.php'); // it is used for page move at that location where you want.
        }
        else
        {
        echo"Data not inserted"; 
        }
    }
    ?>
    