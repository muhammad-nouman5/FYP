<?php
$hostname="localhost";
$user="root";
$password="";
$dbname="hymobile";
// $conn=new mysqli($hostname, $user, $password, $dbname);
$conn=mysqli_connect($hostname, $user, $password, $dbname);
if($conn){
 // echo"Connection Ok";
}
else{
    die("Connection Failed because".mysqli_connect_error());

}

?>