<?php
    if(isset($_POST['signin'])){
        include '../conn.php';
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $query="SELECT * FROM user WHERE e_mail='$email' AND password='$pass'";
       //* is used for multiple selection of table column.and only for single selection
     //    you can write just column name and etc.
        $run=mysqli_query($conn, $query);// mysqli_query execute query in database server.
        if(mysqli_affected_rows($conn)>0){ //the row which effect from query it tells.
            while ($row=mysqli_fetch_assoc($run)) { //mysqli_fetch_assoc is used to fetch data from database.
                // the Coding which is start from while to end at echo $run['address'] is used to show all data of table from database. otherwise don't write while function.
                // echo $row['id'];
                session_start();
                $_SESSION["name"]=$row['name'];
                $_SESSION["e_mail"]=$row['e_mail'];
                // echo $row['password'];
                // echo $row['address'];
                $_SESSION["user_id"]=$row['id'];
               header('location: ../HyMobile.php');
            }
        } else {
            header('location: ../HyMobile.php?user_not_register');
        }
    }
    ?>
    