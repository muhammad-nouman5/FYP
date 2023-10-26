<?php
include "conn.php";
?>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['pass'];
$message=$_POST['message'];
$query="INSERT INTO contact(name, e_mail, phone_no, message)
        values('$name','$email','$phone','$message');";
    $run=mysqli_query($conn, $query);
    header('location:Hymobile.php');

?>